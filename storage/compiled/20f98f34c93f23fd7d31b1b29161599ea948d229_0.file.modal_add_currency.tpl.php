<?php
/* Smarty version 4.3.0, created on 2024-08-15 09:21:10
  from 'C:\xampp\htdocs\cloudonex-business-suit\ui\theme\default\modal_add_currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66be00c6212752_84251748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20f98f34c93f23fd7d31b1b29161599ea948d229' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex-business-suit\\ui\\theme\\default\\modal_add_currency.tpl',
      1 => 1685172824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66be00c6212752_84251748 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 400px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-container">
            <div class="panel-hdr">
                <h2>
                    <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Currency'];?>

                    <?php }?>
                </h2>
            </div>
            <div class="panel-content">
                <form class="form-horizontal" id="ib_modal_form">

                    <div class="mb-3"><label for="iso_code"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency_Code'];?>
</label>

                        <input type="text" id="iso_code" name="iso_code" class="form-control currencyCode" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
">
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency Example'];?>
</span>


                    </div>



                    <div class="mb-3"><label for="rate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Base Conversion Rate'];?>
</label>

                        <input type="text" id="rate" name="rate" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['rate'];?>
" >

                        <span class="help-block">Enter the value of <strong id="selectedCurrency">1 <?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
</strong> = How much <?php if ((isset($_smarty_tpl->tpl_vars['home_currency']->value->iso_code))) {?> <?php echo $_smarty_tpl->tpl_vars['home_currency']->value->iso_code;?>
 <?php }?>?</span>
                    </div>

                    <input type="hidden" name="f_type" id="f_type" value="<?php echo $_smarty_tpl->tpl_vars['f_type']->value;?>
">
                    <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
">

                    <div class="mb-3">
                        <button class="btn btn-primary modal_submit" type="submit" id="modal_submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php }
}
