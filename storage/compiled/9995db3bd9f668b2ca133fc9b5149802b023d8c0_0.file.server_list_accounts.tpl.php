<?php
/* Smarty version 4.3.0, created on 2023-01-31 13:32:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/server_list_accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d95ed3180ea7_02521718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9995db3bd9f668b2ca133fc9b5149802b023d8c0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/server_list_accounts.tpl',
      1 => 1675189964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d95ed3180ea7_02521718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34039736463d95ed3172136_79030162', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143938982863d95ed317fac5_91725975', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_34039736463d95ed3172136_79030162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34039736463d95ed3172136_79030162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Accounts'];?>
</h3>
                        </div>
                        <div class="col text-end">
                            <?php if ($_smarty_tpl->tpl_vars['server']->value->type == 'cpanel') {?>
                                <button id="btn_sync_accounts" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sync Accounts'];?>
</button>
                            <?php }?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <div class="alert alert-danger">
                                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>

                        <?php if (count($_smarty_tpl->tpl_vars['accounts']->value) > 0) {?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th><?php echo __('Account');?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['server']->value->type != 'directadmin') {?>
                                <th><?php echo __('Plan');?>
</th>
                                <th><?php echo __('Email');?>
</th>
                                <th><?php echo __('Disk Used');?>
</th>
                            <?php }?>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['domain'])) {?>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['account']->value['domain'];?>
</strong>
                                            <?php }?>
                                        </td>
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value->type != 'directadmin') {?>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['plan'])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['account']->value['plan'];?>

                                                <?php }?>
                                            </td>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['email'])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>

                                                <?php }?>
                                            </td>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['diskused'])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['account']->value['diskused'];?>

                                                <?php }?>
                                            </td>
                                        <?php }?>

                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <?php } else { ?>
                            <p>No data available.</p>
                        <?php }?>


                    <?php }?>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_143938982863d95ed317fac5_91725975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_143938982863d95ed317fac5_91725975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $btn_sync_accounts = $('#btn_sync_accounts');
            $btn_sync_accounts.on('click',function (event) {
                event.preventDefault();

                $btn_sync_accounts.prop('disabled',true);

                $.post(base_url + 'hostbilling/sync-accounts/', {
                    id: <?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>

            })
                .done(function (data) {
                    $btn_sync_accounts.prop('disabled',false);
                    window.location = base_url + 'hostbilling/orders/';
                }).fail(function(data) {
                $btn_sync_accounts.prop('disabled',false);
                let errors = $.parseJSON(data.responseText);
                $.each(errors, function(key, value) {
                    toastr.error(value);
                });
            });

        });

        });


    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
