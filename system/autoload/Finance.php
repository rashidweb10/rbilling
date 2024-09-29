<?php
class Finance
{
    public static function convert_number_to_words($number)
    {
        $hyphen = '-';
        $conjunction = ' and ';
        $separator = ', ';
        $negative = 'negative ';
        $decimal = ' point ';
        $dictionary = [
            0 => 'zero',
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine',
            10 => 'ten',
            11 => 'eleven',
            12 => 'twelve',
            13 => 'thirteen',
            14 => 'fourteen',
            15 => 'fifteen',
            16 => 'sixteen',
            17 => 'seventeen',
            18 => 'eighteen',
            19 => 'nineteen',
            20 => 'twenty',
            30 => 'thirty',
            40 => 'fourty',
            50 => 'fifty',
            60 => 'sixty',
            70 => 'seventy',
            80 => 'eighty',
            90 => 'ninety',
            100 => 'hundred',
            1000 => 'thousand',
            1000000 => 'million',
            1000000000 => 'billion',
            1000000000000 => 'trillion',
            1000000000000000 => 'quadrillion',
            1000000000000000000 => 'quintillion',
        ];

        if (!is_numeric($number)) {
            return false;
        }

        if (
            ($number >= 0 && (int) $number < 0) ||
            (int) $number < 0 - PHP_INT_MAX
        ) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' .
                    PHP_INT_MAX .
                    ' and ' .
                    PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . Finance::convert_number_to_words(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens = ((int) ($number / 10)) * 10;
                $units = $number % 10;
                $string = $dictionary[$tens];
                if ($units !== 0) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder !== 0) {
                    $string .=
                        $conjunction .
                        Finance::convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string =
                    Finance::convert_number_to_words($numBaseUnits) .
                    ' ' .
                    $dictionary[$baseUnit];
                if ($remainder !== 0) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= Finance::convert_number_to_words($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = [];
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
    }

    public static function amount_fix($amount, $currency_symbol = false)
    {
        global $config;

        if (!$currency_symbol) {
            $currency_symbol = $config['currency_code'];
        }

        $amount = str_replace($currency_symbol, '', $amount);
        $amount = str_replace(trim($currency_symbol), '', $amount);
        $amount = str_replace(' ', '', $amount);
        if ($config['currency_decimal_digits'] == 'false') {
            if ($config['thousands_sep'] == '.') {
                $amount = str_replace('.', '', $amount);
            }
            return str_replace(',', '', $amount);
        }

        $num = $amount;
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep =
            $dotPos > $commaPos && $dotPos
                ? $dotPos
                : ($commaPos > $dotPos && $commaPos
                    ? $commaPos
                    : false);

        if (!$sep) {
            return (float) preg_replace("/[^0-9]/", "", $num);
        }

        return (float) (preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) .
            '.' .
            preg_replace("/[^0-9]/", "", substr($num, $sep + 1, strlen($num))));
    }
}
