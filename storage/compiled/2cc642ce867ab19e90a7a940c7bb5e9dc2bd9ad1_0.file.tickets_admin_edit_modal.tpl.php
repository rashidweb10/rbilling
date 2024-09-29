<?php
/* Smarty version 4.3.0, created on 2023-04-07 15:08:31
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_admin_edit_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64306a2f06bb84_30341235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc642ce867ab19e90a7a940c7bb5e9dc2bd9ad1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_admin_edit_modal.tpl',
      1 => 1637059637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64306a2f06bb84_30341235 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 600px;">
    <div class="panel rounded-0 mb-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <div class="mb-3">
                    <textarea id="edit_content" class="form-control" name="content"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->message;?>
</textarea>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="edit_type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" id="edit_type">
                    <input type="hidden" name="edit_tid" value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
" id="edit_tid">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button class="btn btn-primary update_ticket_message" type="submit" id="update_ticket_message"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
