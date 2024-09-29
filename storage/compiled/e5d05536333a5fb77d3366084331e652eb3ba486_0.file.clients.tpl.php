<?php
/* Smarty version 4.3.0, created on 2023-01-26 11:05:06
  from '/Users/razib/Documents/valet/business-suite/apps/plesk/views/clients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2a4b2722458_42261761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5d05536333a5fb77d3366084331e652eb3ba486' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/plesk/views/clients.tpl',
      1 => 1637779260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2a4b2722458_42261761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43736718863d2a4b2709b36_37498317', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170431201663d2a4b271e556_96760470', "script");
?>

<?php }
/* {block "content"} */
class Block_43736718863d2a4b2709b36_37498317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_43736718863d2a4b2709b36_37498317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3>Clients</h3>
                </div>
                <div class="col text-end">
                    <button id="btn_sync_accounts" class="btn btn-primary">Sync Accounts</button>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <table class="table table-hover" id="clx_datatable">
                <thead>
                <tr>
                    <th>Domain</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
                    <tr>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['client']->value['name'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>

                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['client']->value['login'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['client']->value['login'];?>

                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['client']->value['email'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>

                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['client']->value['created'])) {?>
                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['client']->value['created']));?>

                            <?php }?>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                </tbody>
            </table>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_170431201663d2a4b271e556_96760470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_170431201663d2a4b271e556_96760470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                }
            );

            let $btn_sync_accounts = $('#btn_sync_accounts');
            $btn_sync_accounts.on('click',function (event) {
                event.preventDefault();

                $btn_sync_accounts.prop('disabled',true);

                $.post(base_url + 'plesk/app/sync-accounts/', {
                    id: <?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>

                })
                    .done(function (data) {
                        $btn_sync_accounts.prop('disabled',false);
                        window.location = base_url + 'contacts/list/';
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
/* {/block "script"} */
}
