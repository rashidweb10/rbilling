<?php
/* Smarty version 4.3.0, created on 2023-03-18 03:58:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/layouts/admin_pro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64156f19580bd5_21449570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f665e67b5c6a6e3b90ccbee08a13a501398fc0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/layouts/admin_pro.tpl',
      1 => 1679125472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64156f19580bd5_21449570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9669452164156f194d6744_33335766', "head_extras_from_layout");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29189578864156f194dd0b7_41131400', "content_body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_9669452164156f194d6744_33335766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_9669452164156f194d6744_33335766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var clx_admin_layout = 1;
    <?php echo '</script'; ?>
>

    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
        <style>
            html body {
                background-color: #1E1E2C;
                color: #fff;
            }
            html body a {
                color: #3699ff;
            }
            .page-header {
                background-color: #1E1E2C;
            }

            .page-content {
                background-color: #151520;
            }
            .panel, .card {
                background-color: #1E1E2C;
            }
            .panel-hdr {
                background: #1E1E2C;
            }
            .panel-hdr h2 {
                color: #fff;
            }
            .table-bordered td, .table-bordered th {
                border: 1px solid #323248;
            }
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #2B2C3F;
            }
            .text-dark {
                color: #fff!important;
            }
            .text-muted, .text-muted-green {
                color: #565674!important;
            }
            .panel {
                border: 0;
            }

            .table thead th {
                border-bottom: 2px solid #323248;
            }

            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                color: #fff;
            }
            .table {
                color: #fff;
            }

            .btn-default {
                background-color: #565773;
                background-image: none;
                color: #fff;
            }
            .fc-head-container thead tr {
                background-image: none;
            }
            .fc-other-month {
                background-image: none;
                background-color: #15151F;
                background-size: 1rem 1rem;
            }
            .progress {
                background-color: #323347;
            }
            .alert-info {
                color: #fff;
                background-color: #2f264f;
                border-color: transparent;
            }

            .badge.badge-outline-danger {
                color: #f64e60;
                background-color: #3a2434;
            }

            .page-content {
                color: #fff;
            }

            .symbol .symbol-label {
                background-color: #565772;
            }

            .clx-avatar {
                background: #372533;
                color: #E45B64;
            }

            .form-control {
                background-color: #1b1b29;
                border-color: #1b1b29;
                color: #92929f;
            }

            .select2-container--default .select2-selection--single {
                background-color: #1b1b29;
                border: 1px solid #1b1b29;
                border-radius: 4px;
            }
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                color: #fff;
            }

            .form-control:focus {
                background-color: #171723;
                border-color: #171723;
                color: #92929f;
            }

            .custom-control-label::before {
                background-color: #2B2C3F;
                border: #3c3d5a solid 2px;
            }

            .settings-panel .list:hover {
                color: #6d6d80;
                background: #323347;
            }

            .table td, .table th {
                padding: .75rem;
                vertical-align: top;
                border-top: 1px solid #6d6d80;
            }



            .table-hover tbody tr:hover {
                color: #fff;
                background: #323347;
            }

            .table-striped tbody tr:nth-of-type(odd) {
                color: #6d6d80;
                background-color: #323347;
            }

            .settings-panel h5 {
                color: #fff;
            }

            .alert-danger {
                border-color: rgba(255,168,0,.5);
                color: #fff;
                background-color: #392f28;
            }

            .page-link {
                color: #fff;
                background-color: #3699ff;
                border-color: transparent;
            }
            .pagination .page-item:first-child:not(.active) .page-link, .pagination .page-item:last-child:not(.active) .page-link, .pagination .page-item.disabled .page-link {
                background: #232F47;
            }

            .input-group-text {

                background-color: #1b1b29;
                border: 1px solid #1b1b29;
            }

            .select2-dropdown {
                background-color: #171723;
                border-color: #171723;
            }

            .select2-results__message {
                color: #92929f !important;
            }

            .select2-container--default .select2-selection--multiple {
                background-color: #171723;
                border-color: #171723;
                color: #fff;
            }
            .select2-search--dropdown:before {
                color: #fff;
            }

            .select2-container--default .select2-search--dropdown .select2-search__field {
                background-color: #171723;
                border-color: #171723;
                color: #fff;
            }

            .table-bordered {
                border: none;
            }

            .table thead th {
                background-color: #1E1E2B;
            }

            .list-group-item {
                background-color: #1E1E2B;
            }

            .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
                background-color: #1E1E2B;

            }

            .nav-tabs-clean .nav-item .nav-link.active {
                border-bottom: 1px solid #3699ff;
                color: #3699ff;
            }

            .nav-tabs .nav-item .nav-link.active:not(:hover) {
                color: #3699ff;
            }

            .form-control:disabled, .form-control[readonly] {
                background-color: #1b1b29;
                border-color: #1b1b29;
                color: #92929f;
            }

            .redactor-box, .redactor-editor {
                background-color: #1b1b29;
            }
            .redactor-toolbar {
                background: #323347;
            }
            .redactor-toolbar li a {
                color: #fff;
            }
            .redactor-editor {
                border: 1px solid #2b2b40;
            }


            .dashboard-stat2 {

                background-color: #1b1b29;

            }

        </style>
    <?php }?>


    <style>
        .nav-menu li.active > a {
            background-color: #0e52fc;
        }
        .text-info{
            color: #2566E2 !important;
        }
        .svg-icon.svg-icon-primary svg g [fill] {
            -webkit-transition: fill .3s ease;
            transition: fill .3s ease;
            fill: #397bfc;
        }
        .btn-primary:hover {
            background-color: #002e8f;
            border-color: #002e8f;
        }
    </style>



<?php
}
}
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_40852867964156f19576973_26326827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_29189578864156f194dd0b7_41131400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_29189578864156f194dd0b7_41131400',
  ),
  'content' => 
  array (
    0 => 'Block_40852867964156f19576973_26326827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <aside class="page-sidebar">
        <div class="page-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="page-logo-link d-flex align-items-center position-relative">

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                <?php } else { ?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                <?php }?>


                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                    <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                <?php } else { ?>
                    <span class="page-logo-text mr-1">CloudOnex</span>
                <?php }?>

            </a>
        </div>

        <nav id="clx-primary-navigation" class="primary-nav" role="navigation">


            <ul id="clx-navigation-menu" class="nav-menu">

                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[0];?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'reports')) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;
echo $_smarty_tpl->tpl_vars['config']->value['redirect_url'];?>
">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span></a></li>
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[1];?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers')) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'contacts') {?>active  open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</span>
                        </a>
                        <ul>
                            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers','create')) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add">
                                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Customer'];?>
</span>
                                    </a>
                                </li>
                            <?php }?>

                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Customers'];?>
</span>
                                </a>
                            </li>

                            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'companies','view') && ($_smarty_tpl->tpl_vars['config']->value['companies'])) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/companies">
                                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
</span>
                                    </a>
                                </li>
                            <?php }?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/groups">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</span>
                                </a>
                            </li><li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/drive">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Files'];?>
</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[2];?>




                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[3];?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'sales')) {?>

                    <?php if (($_smarty_tpl->tpl_vars['config']->value['invoicing'] == '1') || ($_smarty_tpl->tpl_vars['config']->value['quotes'] == '1')) {?>



                        <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'invoices') {?>active open<?php }?>">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-postcard" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
                                </svg>
                                <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Billing'];?>
</span></a>
                            <ul>


                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/orders/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hosting Orders'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/domain-orders/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain Orders'];?>
</span></a></li>

                                <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing'] == '1') {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>
</span></a></li>

                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-recurring/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring Invoices'];?>
</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/recurring/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Recurring Invoice'];?>
</span></a></li>
                                <?php }?>


                                <?php if ($_smarty_tpl->tpl_vars['config']->value['quotes'] == '1') {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>
</span></a></li>
                                <?php }?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounts'];?>
</span></a></li>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/payments"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payments'];?>
</span></a></li>



                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['sales'], 'sm_sales');
$_smarty_tpl->tpl_vars['sm_sales']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_sales']->value) {
$_smarty_tpl->tpl_vars['sm_sales']->do_else = false;
?>

                                    <?php echo $_smarty_tpl->tpl_vars['sm_sales']->value;?>



                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </ul>
                        </li>

                    <?php }?>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'products_n_services')) {?>


                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'products_and_services') {?>active open<?php }?>">
                        <a href="#">


                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>



                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</span>
                        </a>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/hosting-plans/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hosting Plans'];?>
</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/services/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Other Services'];?>
</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/groups/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/domain-pricing/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domains'];?>
</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/servers/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Servers'];?>
</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/domain-registration-providers/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain Registration Providers'];?>
</span> </a></li>
                        </ul>
                    </li>





                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'transactions') || has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'transactions','create')) {?>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'transactions') {?>active  open<?php }?>">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
                                </svg>
                                <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting'];?>
</span>
                            </a>
                            <ul>



                                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'transactions','create')) {?>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Deposit'];?>
</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Expense'];?>
</span>
                                        </a>
                                    </li>


                                <?php }?>


                                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'transactions','view')) {?>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/transfer">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer'];?>
</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bills'];?>
</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Transactions'];?>
</span>
                                        </a>
                                    </li>


                                <?php }?>



                                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'bank_n_cash')) {?>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/uncleared">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncleared Transactions'];?>
</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounts'];?>
</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Account'];?>
</span>
                                        </a>
                                    </li>


                                <?php }?>


                                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'assets','view')) {?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/list">
                                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Assets'];?>
</span>
                                        </a>
                                    </li>

                                <?php }?>



                            </ul>
                        </li>



                    <?php }?>
                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'contracts') && (!empty($_smarty_tpl->tpl_vars['config']->value['contracts'])) && $_smarty_tpl->tpl_vars['config']->value['contracts']) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'contracts') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contracts'];?>
</span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Contracts'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/add"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Contract'];?>
</span></a></li>


                        </ul>
                    </li>

                <?php }?>




                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'projects') && ($_smarty_tpl->tpl_vars['config']->value['projects'])) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'projects') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-kanban" viewBox="0 0 16 16">
                                <path d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h11zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11z"/>
                                <path d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Projects'];?>
</span></a></li>
                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'leads','view') && ($_smarty_tpl->tpl_vars['config']->value['leads'])) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'leads') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Leads'];?>
</span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Leads'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/web-to-lead/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Web to Lead'];?>
</span></a></li>

                        </ul>
                    </li>

                <?php }?>





                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'support') && ($_smarty_tpl->tpl_vars['config']->value['support'])) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'support') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>

                                <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Support'];?>
</span></a>
                        <ul>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/create"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/predefined_replies"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Predefined Replies'];?>
</span></a></li>



                        </ul>
                    </li>


                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'cms')) {?>

                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'media') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
media">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hdd" viewBox="0 0 16 16">
                                <path d="M4.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                <path d="M16 11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V9.51c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198V11zM3.655 4.26 1.592 8.043C1.724 8.014 1.86 8 2 8h12c.14 0 .276.014.408.042L12.345 4.26a.5.5 0 0 0-.439-.26H4.094a.5.5 0 0 0-.44.26zM1 10v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo __('Media');?>
</span></a></li>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'cms') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                                <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                                <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"/>
                            </svg>

                            <span class="nav-link-text"><?php echo __('CMS');?>
</span></a>
                        <ul>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cms/posts/pages"><span class="nav-link-text"><?php echo __('Pages');?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cms/configure"><span class="nav-link-text"><?php echo __('Configure');?>
</span></a></li>

                        </ul>
                    </li>


                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'kb') && ($_smarty_tpl->tpl_vars['config']->value['kb'])) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'kb') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Knowledgebase'];?>
</span></a>
                        <ul>

                            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'kb','create')) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/a/edit"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Article'];?>
</span></a></li>
                            <?php }?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/a/all"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Articles'];?>
</span></a></li>


                        </ul>
                    </li>



                <?php }?>



                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'documents') && ($_smarty_tpl->tpl_vars['config']->value['documents'])) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'documents') {?>class="active open"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                            </svg>



                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Documents'];?>
</span></a></li>
                <?php }?>



                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'tasks') && ($_smarty_tpl->tpl_vars['config']->value['tasks'])) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'tasks') {?>class="active open"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tasks">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                            </svg>

                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
</span>
                        </a></li>
                <?php }?>



                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'calendar') && ($_smarty_tpl->tpl_vars['config']->value['calendar'])) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'calendar') {?>class="active open"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
calendar/events">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>
</span>
                        </a></li>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[4];?>

                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[5];?>




                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[6];?>



                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'sms') && ($_smarty_tpl->tpl_vars['config']->value['sms'])) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'sms') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS'];?>
</span></a>
                        <ul>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/send"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Single SMS'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/bulk"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Bulk SMS'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/sent"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sent'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/templates"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/settings"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</span></a></li>


                        </ul>
                    </li>



                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'reports')) {?>



                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'reports') {?>active open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                                <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
 </span>
                        </a>
                        <ul>



                            <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/0/0/reports"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</span> </a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/purchases"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchases'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Statement'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/expense"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Reports'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income-vs-expense"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Vs Expense'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Date'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/0/income/reports"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Income'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/0/expense/reports"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Expense'];?>
</span></a></li>


                            <?php }?>



                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/sales"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</a></li>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices_expense"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices Vs Expense'];?>
</a></li>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a></li>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['reports'], 'sm_report');
$_smarty_tpl->tpl_vars['sm_report']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_report']->value) {
$_smarty_tpl->tpl_vars['sm_report']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_report']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </ul>
                    </li>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'utilities')) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'util') {?>active open<?php }?>">
                        <a href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-command" viewBox="0 0 16 16">
                                <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Utilities'];?>
 </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sent-emails"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Message Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/invoice_access_log"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Access Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backups"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbstatus"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database Status'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/cronlogs"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['CRON Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/integrationcode"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sys_status"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['System Status'];?>
</span></a></li>
                                                        
                            <?php if (($_smarty_tpl->tpl_vars['config']->value['password_manager']) && has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'password_manager')) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
password_manager"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password Manager'];?>
</span></a></li>
                            <?php }?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['utilities'], 'sm_utility');
$_smarty_tpl->tpl_vars['sm_utility']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_utility']->value) {
$_smarty_tpl->tpl_vars['sm_utility']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_utility']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/tools"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tools'];?>
</span></a></li>
                        </ul>
                    </li>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'appearance')) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'appearance') {?>active open<?php }?>" id="li_appearance">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-palette2" viewBox="0 0 16 16">
                                <path d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z"/>
                                <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z"/>
                            </svg>

                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Appearance'];?>
 </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/ui"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User Interface'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/customize"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customize'];?>
</span></a></li>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['appearance'], 'sm_appearance');
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_appearance']->value) {
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_appearance']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/editor"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Editor'];?>
</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</span></a></li>

                        </ul>
                    </li>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'plugins') && ($_smarty_tpl->tpl_vars['config']->value['plugins'])) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'plugins') {?>class="active open"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugins/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                                <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</span>
                        </a></li>
                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'settings')) {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'settings') {?>active open<?php }?>" id="li_settings">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
 </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/roles"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Roles'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/currencies"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currencies'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Gateways'];?>
</span></a></li>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/expense-categories"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Categories'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/expense-types"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Types'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/income-categories"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Categories'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/units"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Units'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tags"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Methods'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
</span></a></li>
                            <?php }?>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/emls"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/email-templates"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/customfields"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Contact Fields'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/automation"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation Settings'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</span></a></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['settings'], 'sm_settings');
$_smarty_tpl->tpl_vars['sm_settings']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_settings']->value) {
$_smarty_tpl->tpl_vars['sm_settings']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_settings']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/departments"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Departments'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/features"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</span></a></li>


                            <?php if (!defined('DISABLE_ABOUT_PAGE')) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/about/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['About'];?>
</a></li>
                            <?php }?>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/landing-page"><span class="nav-link-text"><?php ob_start();
echo __('Landing Page');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span></a></li>







                        </ul>
                    </li>
                <?php }?>


            </ul>
        </nav>

    </aside>

    <div class="page-content-wrapper">
        <header class="page-header" role="banner">
            <div class="page-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" aria-roledescription="logo">
                    <?php } else { ?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" aria-roledescription="logo">
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                        <span class="page-logo-text mr-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</span>
                    <?php } else { ?>
                        <span class="page-logo-text mr-1">CloudOnex</span>
                    <?php }?>


                    <span class="position-absolute text-white opacity-50 small pos-top pos-right me-2 mt-n2"></span>
                </a>
            </div>
            <!-- DOC: nav menu layout change shortcut -->
            <div class="hidden-md-down dropdown-icon-menu position-relative">
                <a href="#" class="header-btn btn js-waves-off svg-icon svg-icon-primary rounded-0" style="border: none;" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1"></rect>
                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1"></rect>
                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000"></path>
                        </g>
                    </svg>
                </a>
                <ul>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
    </g>
</svg></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="clx-fixed-navigation" title="Lock Navigation">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <mask fill="white">
            <use xlink:href="#path-1"/>
        </mask>
        <g/>
        <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/>
    </g>
</svg></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hidden-lg-up">
                <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
        <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg></span>
                </a>
            </div>


            <div class="ms-auto d-flex">

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'appearance')) {?>

                    <div class="hidden-md-down">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/ui" class="header-icon cursor-pointer">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect opacity="0.200000003" x="0" y="0" width="24" height="24"/>
        <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3"/>
        <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000"/>
    </g>
</svg></span>
                        </a>
                    </div>

                <?php }?>


                <div>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'utilities')) {?>

                        <a href="javasctipt:;" id="get_activity" class="header-icon cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"/>
        <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"/>
    </g>
</svg></span>
                        </a>

                    <?php }?>

                    <div class="dropdown-menu dropdown-menu-end dropdown-xl p-0">
                        <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                            <h4 class="m-0 text-center color-white">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Notifications'];?>

                            </h4>
                        </div>

                        <div class="custom-scroll h-100" id="activity_loaded">
                            <div class="text-center my-3">
                                <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                            </div>
                        </div>
                        <div class="py-2 px-3 bg-faded d-block rounded-bottom text-center border-faded border-bottom-0 border-right-0 border-left-0">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity" class="fs-xs fw-500 ms-auto"><?php echo $_smarty_tpl->tpl_vars['_L']->value['See All Activity'];?>
</a>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="javascript:;" class="header-icon cursor-pointer" data-bs-toggle="modal" data-bs-target=".js-modal-notes">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
    </g>
</svg></span>
                    </a>
                </div>

                <div>


                    <a href="#" class="header-icon align-items-center justify-content-center ms-2 cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png"  class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
"  class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                        <?php }?>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="me-2">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="rounded-circle profile-image" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="rounded-circle profile-image" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                                                <?php }?>
                                            </span>
                                <div class="info-card-text">
                                    <div class="fs-lg text-truncate text-truncate-lg"><?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
</div>
                                    <span class="text-truncate text-truncate-md opacity-80"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>

                        </a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>

                        </a>



                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item fw-500 pt-3 pb-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>

                        </a>
                    </div>



                </div>






            </div>


        </header>

        <main id="clx-page-content" role="main" class="page-content <?php if ((isset($_smarty_tpl->tpl_vars['page_content_extra_class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['page_content_extra_class']->value;?>
 <?php }?>">


            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40852867964156f19576973_26326827', "content", $this->tplIndex);
?>



        </main>

        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>


        <div class="modal fade js-modal-notes modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right">
                <div class="modal-content h-100">
                    <div class="dropdown-header bg-primary-900 d-flex align-items-center w-100">
                        <h3 class="text-white mt-2 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Notes'];?>
</h3>
                        <button type="button" class="btn btn-danger text-white position-absolute pos-top pos-right p-2 m-1 me-2" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0 h-100 d-flex">
                        <textarea class="form-control rounded-0" id="clx_notes_clipboard" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Whats on your mind'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->notes;?>
</textarea>
                    </div>
                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content_body"} */
}
