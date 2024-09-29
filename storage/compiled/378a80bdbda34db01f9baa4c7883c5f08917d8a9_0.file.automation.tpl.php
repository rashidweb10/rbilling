<?php
/* Smarty version 4.3.0, created on 2023-02-22 05:11:33
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/automation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f5ea553bcd30_49515438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378a80bdbda34db01f9baa4c7883c5f08917d8a9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/automation.tpl',
      1 => 1635678025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f5ea553bcd30_49515438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174952420963f5ea553a22d4_59410504', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173330210963f5ea553bbe47_21485791', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_174952420963f5ea553a22d4_59410504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174952420963f5ea553a22d4_59410504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <h4 class="mb-3">Create CRON Job for to run every minute (* * * * * )</h4>

                        <div class="hr-line-dashed"></div>

                        <div class="mb-3">
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="php <?php echo getcwd();?>
/system/cron.php >> /dev/null 2>&1">
                        </div>
                        <div class="mb-3">
                            <label>Or,</label>
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="curl --silent <?php echo APP_URL;?>
/system/cron.php &>/dev/null">
                        </div>

                        <div class="mb-3">
                            <label><?php echo __('Alternative');?>
 (<?php echo __('Daily');?>
)</label>
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="curl --silent <?php echo APP_URL;?>
/system/cron_fallback_daily.php &>/dev/null">
                        </div>



                        <table class="table table-hover">
                            <tbody>



                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="task_automatic_payment_reminder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Automatic Payment Reminder'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" class="clx_switch" id="task_automatic_payment_reminder" <?php if (get_option('task_automatic_payment_reminder') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="task_daily_accounting_snapshot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate Daily Accounting Snapshot'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" class="clx_switch" id="task_daily_accounting_snapshot" <?php if (get_option('task_daily_accounting_snapshot') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>








                                                                                                                
                            </tbody>
                        </table>


                        <div class="mb-3">
                            <label for="global_notifications_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Notifications To'];?>
</label>
                            <input class="form-control" name="global_notifications_email" id="global_notifications_email" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'global_notifications_email');?>
">
                        </div>

                    </div>






                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_173330210963f5ea553bbe47_21485791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_173330210963f5ea553bbe47_21485791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('.clx_switch').change(function() {

                let that = $(this);
                let value = 0;
                if(that.prop('checked')){

                    value = 1;

                }
                $.post( base_url+'settings/update_option/', { opt: that.attr('id'), val: value })
                    .done(function() {
                        location.reload();
                    });
            });

            $('#global_notifications_email').on('keyup paste',function () {
                let that = $(this);
                $.post( base_url+'settings/set-global-notification-email/', { email: that.val() });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
