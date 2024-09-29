<?php
/* Smarty version 4.3.0, created on 2023-01-27 12:20:37
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_domains.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d407e5d5ef06_06167658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1435fed24fc46a03f622d7dd6ff56a7989ae3a4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_domains.tpl',
      1 => 1616965247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d407e5d5ef06_06167658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37191529163d407e5d54f70_72453989', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_37191529163d407e5d54f70_72453989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_37191529163d407e5d54f70_72453989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tracking ID'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Next Due Date'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'recent_domain');
$_smarty_tpl->tpl_vars['recent_domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_domain']->value) {
$_smarty_tpl->tpl_vars['recent_domain']->do_else = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/domain-order/<?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->id;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->tracking_id;?>

                    </a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->domain;?>

                </td>

                <td>

                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_domain']->value->created_at));?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->amount;?>

                </td>
                <td>
                    <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_domain']->value->status);?>

                </td>

            </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </tbody>
    </table>


<?php
}
}
/* {/block "inner_content"} */
}
