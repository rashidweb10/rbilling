<?php
/* Smarty version 4.3.0, created on 2023-02-13 23:48:57
  from '/Users/razib/Documents/valet/business-suite/apps/hestia/views/user_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63eb12b91676e8_05708967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e5adac9f82a562b9daeb0055a8b7d810ccc9db3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/hestia/views/user_details.tpl',
      1 => 1676350134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63eb12b91676e8_05708967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99626257163eb12b9155cf2_58844637', "content");
?>

<?php }
/* {block "content"} */
class Block_99626257163eb12b9155cf2_58844637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_99626257163eb12b9155cf2_58844637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card">
        <div class="card-body">

            <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
                <div class="alert alert-info mb-3">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'user_details', false, 'username');
$_smarty_tpl->tpl_vars['user_details']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['username']->value => $_smarty_tpl->tpl_vars['user_details']->value) {
$_smarty_tpl->tpl_vars['user_details']->do_else = false;
?>
                <h3><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <div class="mb-2">
                        <strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
