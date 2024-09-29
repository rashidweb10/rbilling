<?php
/* Smarty version 4.3.0, created on 2023-02-28 01:22:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports/sales/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fd9d96ea8a96_61051750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a380296f997eff87ea7931695facffb662fed114' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports/sales/base.tpl',
      1 => 1664197812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fd9d96ea8a96_61051750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122766524363fd9d96ea3a83_98065491', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143563075663fd9d96ea8559_66699070', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "inner-content"} */
class Block_45901641563fd9d96ea7961_46847241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "inner-content"} */
/* {block "content"} */
class Block_122766524363fd9d96ea3a83_98065491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122766524363fd9d96ea3a83_98065491',
  ),
  'inner-content' => 
  array (
    0 => 'Block_45901641563fd9d96ea7961_46847241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 </h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <div class="row">
                    <div class="col-md-3">
                        <div class="rounded-3 p-3"
                                <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                    style="background-color: #E7EAEE;"
                                <?php }?>
                        >
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'by-item') {?>active<?php }?> svg-icon svg-icon-primary" id="v-pills-home-tab"  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
reports/sales/by-item" aria-controls="v-pills-home" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                    <span class="hidden-sm-down ml-1"><?php echo __('By Item');?>
</span>
                                </a>

                                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoicing_allow_staff_selection_for_each_item'])) {?>

                                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'by-staffs') {?>active<?php }?> svg-icon svg-icon-primary" id="v-pills-home-tab"  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
reports/sales/by-staffs" aria-controls="v-pills-home" aria-selected="true">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
                                        </svg>
                                        <span class="hidden-sm-down ml-1"><?php echo __('By Staffs');?>
</span>
                                    </a>

                                <?php }?>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45901641563fd9d96ea7961_46847241', "inner-content", $this->tplIndex);
?>


                    </div>
                </div>

            </div>




        </div>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_143563075663fd9d96ea8559_66699070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_143563075663fd9d96ea8559_66699070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'script'} */
}
