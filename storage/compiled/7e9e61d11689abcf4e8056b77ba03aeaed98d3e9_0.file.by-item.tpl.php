<?php
/* Smarty version 4.3.0, created on 2023-02-28 01:22:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports/sales/by-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fd9d96e9cd13_65062285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9e61d11689abcf4e8056b77ba03aeaed98d3e9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports/sales/by-item.tpl',
      1 => 1657744111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fd9d96e9cd13_65062285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17395554563fd9d96e927d0_49272921', 'inner-content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141779442363fd9d96e9c4e2_97139105', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "reports/sales/base.tpl");
}
/* {block 'inner-content'} */
class Block_17395554563fd9d96e927d0_49272921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner-content' => 
  array (
    0 => 'Block_17395554563fd9d96e927d0_49272921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="table-responsive">
        <table class="table  table-striped dataTable" id="salesItems">
            <thead style="background: #f0f2ff">
            <tr>
                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
            </tr>
            </thead>
            <tbody>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoice_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
                    <td class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['duedate'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
            <tfoot>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
            </tr>
            </tfoot>
        </table>
    </div>

<?php
}
}
/* {/block 'inner-content'} */
/* {block "script"} */
class Block_141779442363fd9d96e9c4e2_97139105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_141779442363fd9d96e9c4e2_97139105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#salesItems').DataTable();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
