<?php
/* Smarty version 4.3.0, created on 2023-04-07 07:46:56
  from '/Users/razib/Documents/valet/business-suite/apps/simplify/views/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643002b0158323_63849745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f005689408bc1718da127e521d9ccf781915b043' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/simplify/views/payment.tpl',
      1 => 1680868007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643002b0158323_63849745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['invoice']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
 <?php }?></title>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_957176856643002b014e487_55683599', 'style');
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
        body {

            background-color: #e9ebee;
            overflow-x: visible;
        }
        .paper {
            margin: 20px auto;
            max-width: 980px;
            background-color: #FFF;
            position: relative;

        }

        .fancybox-slide--iframe .fancybox-content {
            width  : 600px;
            max-width  : 80%;
            max-height : 80%;
            margin: 0;
        }

        .panel {

            /*box-shadow: none;*/

            -webkit-box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
            box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);

        }

        .panel-body {
            padding: 25px;
        }

        .table-bordered>thead>tr, .table-bordered>thead>tr>th{
            border-bottom-width: 0;
            border-top-width: 0;
        }
        .table-bordered>tbody>tr:first-child {
            border-top-width: 0;
        }

        .table>:not(:first-child) {
            border-top: none;
        }


        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }

        .table-hover > tbody > tr:hover > * {
            --bs-table-accent-bg: black;
            color: #ffffff;
        }

        .table-striped>tbody>tr:nth-of-type(odd)>* {
            color: #ffffff!important;
        }

        .thead-light th {
            background-color: #5d6675;
        }
        .table-bordered>thead>tr, .table-bordered>thead>tr>th {
            border-bottom-width: 0;
            border-top-width: 0;
        }

        /*    Disable bootstrap 5 table black borders */





    </style>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.simplify.com/commerce/simplify.pay.js"><?php echo '</script'; ?>
>

</head>

<body class="fixed-nav">

<div class="mx-auto" style="max-width: 800px;">
    <div class="paper">
        <section class="panel">
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <h1><?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['invoice']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
 <?php }?></h1>
                        <h3><?php echo __('Amount');?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['amount']->value,$_smarty_tpl->tpl_vars['invoice']->value->currency_iso_code);?>
</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="text-end">
                            <p><strong><?php echo $_smarty_tpl->tpl_vars['customer']->value->account;?>
</strong></p>
                            <p><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
                        </div>
                    </div>
                </div>



                <button data-sc-key="<?php echo $_smarty_tpl->tpl_vars['gateway']->value->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['invoice']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
 <?php }?>" data-description="Payment on Invoice" data-reference="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-amount="<?php echo $_smarty_tpl->tpl_vars['amount_x_100']->value;?>
" data-receipt="true" data-color="#ff6600" id="btn_payment" type="button"
                data-redirect-url="<?php echo $_smarty_tpl->tpl_vars['success_url']->value;?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['email']->value)) {?>
                            data-customer-email="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['customer']->value->account)) {?>
                            data-customer-name="<?php echo $_smarty_tpl->tpl_vars['customer']->value->account;?>
"
                        <?php }?>
                ><?php echo __('Pay Now');?>
</button>

            </div>
        </section>


    </div>
</div>

</body>

</html>
<?php }
/* {block 'style'} */
class Block_957176856643002b014e487_55683599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_957176856643002b014e487_55683599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
}
