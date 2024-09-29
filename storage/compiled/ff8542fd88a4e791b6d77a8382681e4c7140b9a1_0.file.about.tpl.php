<?php
/* Smarty version 4.3.0, created on 2024-09-29 18:32:58
  from 'C:\xampp\htdocs\cloudonex-business-suit\ui\theme\default\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66f9500214b689_65287714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8542fd88a4e791b6d77a8382681e4c7140b9a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex-business-suit\\ui\\theme\\default\\about.tpl',
      1 => 1685172824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f9500214b689_65287714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160080444966f950021113a3_76698369', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27980856266f9500214a4b9_57016158', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_160080444966f950021113a3_76698369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_160080444966f950021113a3_76698369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel" id="ib_box">
                <div class="panel-hdr">
                    <h2><?php echo __('About');?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="mb-2">
                            <strong><?php echo __('Your version');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['installed_version']->value;?>

                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['latest_version']->value) {?>

                        <div class="mb-2">
                            <strong><?php echo __('Latest version');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['latest_version']->value;?>

                        </div>



                            <?php if ($_smarty_tpl->tpl_vars['update_available']->value) {?>

                                <div class="alert alert-danger mb-3">
                                    <?php echo __('An update is available');?>

                                </div>

                                <?php if (empty($_smarty_tpl->tpl_vars['config']->value['purchase_key'])) {?>
                                    <div class="alert alert-warning mb-3">
                                        <?php echo __('Please enter your purchase key to update');?>

                                    </div>
                                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/activate_license_post/">


                                        <div class="mb-3">

                                            <label><?php echo __('License key');?>
</label>

                                            <input type="text" required class="form-control" id="purchase_key" name="purchase_key">

                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" id="btn_save" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                        </div>

                                    </form>
                                    <?php } else { ?>

                                    <p>
                                        <strong><?php echo __('Purchase key');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['config']->value['purchase_key'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/remove-purchase-key"><?php echo __('Remove');?>
</a>
                                    </p>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['update_log'])) {?>
                                        <div class="mb-3">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/clear-update-log"><?php echo __('Clear log');?>
</a>
                                        </div>
                                        <div class="mb-3">

                                            <pre><?php echo $_smarty_tpl->tpl_vars['config']->value['update_log'];?>
</pre>

                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['update_step']->value == '0') {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/update" class="cls_update btn btn-primary"><?php echo __('Download the latest version');?>
</a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['update_step']->value == '1') {?>
                                        <div class="alert alert-success mb-3">
                                            <?php echo __('Latest version is downloaded, now unzip the file');?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/update" class="cls_update btn btn-primary"><?php echo __('Unzip');?>
</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/update-cancel" class="btn btn-danger"><?php echo __('Cancel');?>
</a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['update_step']->value == '2') {?>
                                        <div class="alert alert-success mb-3">
                                            <?php echo __('Run the database schema update');?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/update" class="cls_update btn btn-primary"><?php echo __('Run');?>
</a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['update_step']->value == '3') {?>
                                        <div class="alert alert-success mb-3">
                                            <?php echo __('Complete the update and cleanup the files and log.');?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/update" class="cls_update btn btn-primary"><?php echo __('Complete');?>
</a>
                                    <?php }?>
                                <?php }?>



                                <?php }?>


                        <?php }?>







                    </div>
                </div>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['app_stage']->value == 'Demo') {?>

                <input type="hidden" name="purchase_code" id="purchase_code" value="">

            <?php } else { ?>


            <?php }?>



        </div>





    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_27980856266f9500214a4b9_57016158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_27980856266f9500214a4b9_57016158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "script"} */
}
