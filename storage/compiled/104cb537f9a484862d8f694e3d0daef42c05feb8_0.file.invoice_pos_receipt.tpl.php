<?php
/* Smarty version 4.3.0, created on 2023-03-09 16:46:59
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/invoice_pos_receipt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640a53d309ca29_52661909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '104cb537f9a484862d8f694e3d0daef42c05feb8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/invoice_pos_receipt.tpl',
      1 => 1666078166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640a53d309ca29_52661909 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1885700663640a53d3064a98_74434304', 'style');
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
invoices/pos-pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" class="btn btn-primary buttons-excel ml-sm"><i class="fal fa-file-text-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/pos-print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary buttons-print ml-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Printable Version'];?>
</a>
                        </div>

                        <div class="hr-line-dashed"></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-md">


                    </div>

                </div>
            </header>
            <div class="">
                <div class="row">
                    <div id="invoice-POS">
                        <center id="top">
                            <div class=" mt-4">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" class="img-fluid"  style="margin-bottom: 15px; max-width: 50%">
                            </div>
                            <div class="info">
                                <h2><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</h2>
                                <p class="info col-md-10">

                                    <br>
                                    <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>


                                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['vat_number'])) && ($_smarty_tpl->tpl_vars['config']->value['vat_number'] != '')) {?>

                                        <br>
                                        <strong><?php echo sp_config_or_default('label_tax_number',$_smarty_tpl->tpl_vars['_L']->value['Vat number']);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['config']->value['vat_number'];?>


                                    <?php }?>


                                </p>
                            </div>
                        </center>

                        <div id="mid">
                            <div class="info">
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


                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] != '0' && $_smarty_tpl->tpl_vars['a']->value['fax'] != '') {?>
                                        <br>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['fax'];?>

                                    <?php }?>

                                    <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['cfs']->value['showinvoice'] == 'No') {?>
                                            <?php continue 1;?>
                                        <?php }?>
                                        <br>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                </p>

                                <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</strong>
                                <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Paid') {?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</strong>
                                <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Partially Paid') {?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</strong>
                                <?php } else { ?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</strong>
                                <?php }?>

                                <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>


                                    <p>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
:</strong> <?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 <br>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</strong>: <?php echo formatCurrency($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>

                                    </p>

                                <?php }?>

                            </div>
                        </div>

                        <div id="bot">

                            <div id="table">
                                <table>

                                    <tr class="tabletitle">
                                        <td class="item"><h2>Item</h2></td>
                                        <td class="Hours"><h2>Qty</h2></td>
                                        <td class="Rate"><h2>Sub Total</h2></td>
                                    </tr>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                                        <tr class="service">
                                            <td class="tableitem"><p class="itemtext"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p></td>
                                            <td class="tableitem"><p class="itemtext"><?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['item']->value['qty'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code'],0);?>
</p></td>
                                            <td class="tableitem"><p class="itemtext">
                                                    <?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['total']+$_smarty_tpl->tpl_vars['item']->value['taxamount']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>

                                                </p></td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    <tr class="tabletitle">
                                        <td></td>
                                        <td class="Rate"><h2><?php ob_start();
echo __("Sub Total");
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</h2></td>
                                        <td class="payment"><h2><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</h2></td>
                                    </tr>



                                        <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['discount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>
                                        <tr>
                                            <td colspan="2">GST</td>
                                            <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                        </tr>
                                    <?php } else { ?>


                                        <tr class="tabletitle">
                                            <td></td>
                                            <td class="Rate"><h2><?php ob_start();
echo __('Tax');
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</h2></td>
                                            <td class="payment"><h2><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</h2></td>
                                        </tr>


                                    <?php }?>


                                    <tr class="tabletitle">
                                        <td></td>
                                        <td class="Rate"><h2><?php ob_start();
echo __('Grand Total');
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</h2></td>
                                        <td class="payment"><h2><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</h2></td>
                                    </tr>

                                </table>

                            </div>

                            <?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
                                <div  id="legalcopy" class="m-t">
                                    <p class="legal">
                                       <strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>
</strong>
                                    </p>

                                </div>
                            <?php }?>






                        </div><!--End InvoiceBot-->
                    </div>

                </div>
            </div>

        </div>


</section>


</body>

<!--End Invoice-->
<?php }
/* {block 'style'} */
class Block_1885700663640a53d3064a98_74434304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_1885700663640a53d3064a98_74434304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
}
