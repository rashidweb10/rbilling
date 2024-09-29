<?php
/* Smarty version 4.3.0, created on 2023-01-26 10:38:36
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/choose_server_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d29e7ca3caf0_30091963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ced52b6dddcab44558d3de409bae53ccb54378' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/choose_server_type.tpl',
      1 => 1674747515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d29e7ca3caf0_30091963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136141758963d29e7ca338a9_20351166', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56644519263d29e7ca3b876_92463110', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_136141758963d29e7ca338a9_20351166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136141758963d29e7ca338a9_20351166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Server Type'];?>
</h1>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_server_types']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/0/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h2>
                        </div>
                    </div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_56644519263d29e7ca3b876_92463110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_56644519263d29e7ca3b876_92463110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
