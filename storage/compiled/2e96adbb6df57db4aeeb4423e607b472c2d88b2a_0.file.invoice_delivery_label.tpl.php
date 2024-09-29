<?php
/* Smarty version 4.3.0, created on 2023-01-31 09:04:03
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/invoice_delivery_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d91fd3c59228_44023735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e96adbb6df57db4aeeb4423e607b472c2d88b2a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/invoice_delivery_label.tpl',
      1 => 1668377520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d91fd3c59228_44023735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-270','icon-270x270.png');?>
" />

    <?php if (APP_STAGE == 'Dev') {?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php ob_start();
echo _raid();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/ui/theme/default/css/app.min.css?v=<?php ob_start();
echo _raid();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
">

        <?php }?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=<?php ob_start();
echo _raid();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" rel="stylesheet">

    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/default/css/app-rtl.min.css?v=2">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/theme/default/css/app.min.css?v=2">
        <?php }?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=13" rel="stylesheet">
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17837816663d91fd3c45d45_42013557', 'style');
?>


    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['config']->value['header_scripts'];?>



    <style type="text/css">

        #invoice-POS {
            padding: 6mm;
            margin: 0 auto;
            width: 80mm;
            background: #FFF;
        }
        #invoice-POS ::selection {
            background-color: #FFF;
            color: #FFF;
        }
        #invoice-POS ::moz-selection {
            background-color: #FFF;
            color: #FFF;
        }
        #invoice-POS h1 {
            font-size: 1.6em;
            color: #222;
        }
        #invoice-POS h2 {
            font-size: 1em;
        }
        #invoice-POS h3 {
            font-size: 1.3em;
            font-weight: 300;
            line-height: 2em;
        }
        #invoice-POS p {
            font-size: 0.9em;
            color: #222;
            line-height: 1.2em;
        }
        #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
            /* Targets all id with 'col-' */
            border-bottom: 1px solid #EEE;
        }
        #invoice-POS #top {
            min-height: 100px;
        }
        #invoice-POS #mid {
            min-height: 80px;
        }
        #invoice-POS #bot {
            min-height: 50px;
        }
        #invoice-POS #top .logo {
            height: 80px;
            width: 80px;
            background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
            background-size: 80px 80px;
        }
        #invoice-POS .info {
            display: block;
            margin-left: 0;
        }
        #invoice-POS .title {
            float: right;
        }
        #invoice-POS .title p {
            text-align: right;
        }
        #invoice-POS table {
            width: 100%;
            border-collapse: collapse;
        }
        #invoice-POS .tabletitle {
            font-size: 0.7em;
            background: #EEE;
        }
        #invoice-POS .service {
            border-bottom: 1px solid #EEE;
        }
        #invoice-POS .item {
            width: 24mm;
        }
        #invoice-POS .itemtext {
            font-size: 0.8em;
        }
        #invoice-POS #legalcopy {
            margin-top: 5mm;
        }
        #invoice-POS .signature {
            margin-top: 5mm;
            border-top: 1px solid #EEE;
            text-align: center;
        }

        <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        <?php }?>


        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }


    </style>



</head>
<body class="fixed-nav">

<section class="">
    <div class="">
        <div class="invoice">
            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

            <?php }?>
            <header class="clearfix">

                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="text-center">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/delivery-label-pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" class="btn btn-primary buttons-excel ml-sm"><i class="fal fa-file-text-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/delivery-label-print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary buttons-print ml-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Printable Version'];?>
</a>
                        </div>

                        <div class="hr-line-dashed"></div>
                    </div>
                </div>
            </header>
            <div class="">
                <div class="row">
                    <div id="invoice-POS">
                        <center id="top">
                            <div class="mt-2">
                                <table>
                                    <tr>
                                        <td>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" class="img-fluid"  style="margin-bottom: 15px; max-width: 100px;">
                                        </td>
                                        <td>
                                            <?php echo Invoice::getInvoiceNumber($_smarty_tpl->tpl_vars['d']->value);?>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="info">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="info">

                                                <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>


                                                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['vat_number'])) && ($_smarty_tpl->tpl_vars['config']->value['vat_number'] != '')) {?>

                                                    <br>
                                                    <strong><?php echo sp_config_or_default('label_tax_number',$_smarty_tpl->tpl_vars['_L']->value['Vat number']);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['config']->value['vat_number'];?>


                                                <?php }?>

                                            </p>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </div><!--End Info-->
                        </center><!--End InvoiceTop-->

                        <div id="mid">
                            <div class="info" style="margin-top: 5px;">

                                <table>
                                    <tr>
                                        <td>
                                            <h2><?php ob_start();
echo __('Invoiced To');
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</h2>
                                            <p>
                                                <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>


                                                    <br>

                                                    <?php if ($_smarty_tpl->tpl_vars['company']->value && $_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['company']->value->business_number != '') {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
: <?php echo $_smarty_tpl->tpl_vars['company']->value->business_number;?>

                                                            <br>
                                                        <?php }?>
                                                    <?php }?>

                                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    <br>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    <br>
                                                <?php }?>

                                                <?php echo getContactFormattedAddress($_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['a']->value);?>

                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>


                                            </p>
                                        </td>
                                        <td align="right">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['qr_code_admin_url']->value;?>
" style="height: 100px;">
                                        </td>
                                    </tr>
                                </table>



                                <div style="margin-top: 5px; margin-bottom: 5px; text-align: center;">

                                    <img src="data:image/png;base64,<?php  $_prefixVariable13 = $_smarty_tpl->tpl_vars['barcode_generator']->value;
echo base64_encode($_smarty_tpl->tpl_vars['barcode_generator']->value->getBarcode($_smarty_tpl->tpl_vars['d']->value['id'],$_prefixVariable13::TYPE_CODE_128));?>
">

                                    <p>
                                        <strong><?php echo Invoice::getInvoiceNumber($_smarty_tpl->tpl_vars['d']->value);?>
</strong>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>


</section>


</body>
<?php }
/* {block 'style'} */
class Block_17837816663d91fd3c45d45_42013557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_17837816663d91fd3c45d45_42013557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
}
