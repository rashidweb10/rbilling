<?php
/* Smarty version 4.3.0, created on 2023-04-07 15:07:23
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643069ebe92559_18189465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38352ce4cb884c54ac9e9c9df5b7e698629e6890' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscription.tpl',
      1 => 1670350244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643069ebe92559_18189465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_961477703643069ebe12031_99591441', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1810691307643069ebe8cf18_64657555', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_961477703643069ebe12031_99591441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_961477703643069ebe12031_99591441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3><?php ob_start();
echo __("Add New Subscription");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h3>
                <div class="hr-line-dashed"></div>

                <form id="form_main" method="post">

                    <div class="mb-3">
                        <label for="contact_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                        <select class="form-select" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" id="contact_id" name="contact_id">
                            <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"
                                        <?php if (!empty($_smarty_tpl->tpl_vars['subscription']->value->contact_id) && ($_smarty_tpl->tpl_vars['contact']->value->id == $_smarty_tpl->tpl_vars['subscription']->value->contact_id)) {?>
                                            selected

                                        <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="plan_id"><?php echo __('Subscription Plan');?>
</label>
                        <select class="form-select" id="plan_id" name="plan_id">
                            <option value=""><?php echo __('None');?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['plan']->value->id;?>
"
                                        <?php if (!empty($_smarty_tpl->tpl_vars['subscription']->value->plan_id) && ($_smarty_tpl->tpl_vars['plan']->value->id == $_smarty_tpl->tpl_vars['subscription']->value->plan_id)) {?>
                                            selected

                                        <?php }?>
                                        data-price="<?php ob_start();
echo formatCurrency($_smarty_tpl->tpl_vars['plan']->value->price);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><?php echo $_smarty_tpl->tpl_vars['plan']->value->title;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="price"><?php echo __('Currency');?>
</label>
                                <select class="form-select" id="currency" name="currency">
                                    <option value=""><?php echo __('None');?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
"
                                        <?php if (empty($_smarty_tpl->tpl_vars['subscription']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['currency']->value->iso_code == $_smarty_tpl->tpl_vars['config']->value['home_currency']) {?> selected <?php }?>
                                            <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['currency']->value->iso_code == $_smarty_tpl->tpl_vars['subscription']->value->currency) {?> selected <?php }?>
                                        <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="price"><?php echo __('Price');?>
</label>
                                <input id="price" name="price" <?php if (!empty($_smarty_tpl->tpl_vars['subscription']->value)) {?> value="<?php ob_start();
echo formatCurrency($_smarty_tpl->tpl_vars['subscription']->value->price);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" <?php }?> class="form-control mb-3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="quantity"><?php echo __('Quantity');?>
</label>
                                <input type="number" min="1" id="quantity" name="quantity" value="1" class="form-control mb-3">
                            </div>
                        </div>
                    </div>







                    <div class="mb-3">
                        <label><?php ob_start();
echo __('Type');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</label>
                        <select class= "form-control" name="type" id="type">
                            <option value="daily" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+1 day') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Daily'];?>
</option>
                            <option value="week1" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+1 week') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weekly'];?>
</option>
                            <option value="weeks2" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+2 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_2'];?>
</option>
                            <option value="weeks3" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+3 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_3'];?>
</option>
                            <option value="weeks4" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+4 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_4'];?>
</option>
                            <option value="month1" <?php if ($_smarty_tpl->tpl_vars['subscription']->value) {?> <?php if ($_smarty_tpl->tpl_vars['subscription']->value->type == '+1 month') {?> selected<?php }?> <?php } else { ?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</option>
                            <option value="months2" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+2 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_2'];?>
</option>
                            <option value="months3" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+3 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_3'];?>
</option>
                            <option value="months6" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+6 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_6'];?>
</option>
                            <option value="year1" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+1 year') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</option>
                            <option value="years2" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+2 years') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_2'];?>
</option>
                            <option value="years3" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->type == '+3 years') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_3'];?>
</option>
                        </select

                    </div>
                    <div class="mb-3 mt-3">
                        <label><?php ob_start();
echo __('Status');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</label>
                        <select class= "form-control" name="status" id="status">
                            <option value="Active" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->status == 'Active') {?> selected<?php }?>>
                                <?php ob_start();
echo __('Active');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

                            </option>
                            <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->status == 'Inactive') {?> selected<?php }?>>
                                <?php ob_start();
echo __('Inactive');
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

                            </option>
                            <option value="Suspended" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->status == 'Suspended') {?> selected<?php }?>><?php ob_start();
echo __('Suspended');
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

                            </option>
                            <option value="Cancelled" <?php if ($_smarty_tpl->tpl_vars['subscription']->value && $_smarty_tpl->tpl_vars['subscription']->value->status == 'Cancelled') {?> selected<?php }?>><?php ob_start();
echo __('Cancelled');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>

                            </option>
                        </select>
                    </div>

                    <div class="mb-3 mt-3">
                        <label>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>

                        </label>
                        <input class="form-control" name="start_date" value="<?php echo date('Y-m-d');?>
"  id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
">
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['subscription']->value)) {?>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['subscription']->value->id;?>
">
                    <?php }?>

                    <button id="btn_plan" type="submit" class="btn btn-primary"><?php ob_start();
echo __('Save');
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</button>
                </form>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1810691307643069ebe8cf18_64657555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1810691307643069ebe8cf18_64657555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>

        $(function () {

            var form = document.getElementById("form_main");
            var pristine = new Pristine(form);
            let $form_main = $('#form_main');
            let $start_date = $("#start_date");


            $("#contact_id").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            // $('[data-toggle="datepicker"]').datepicker();

            $form_main.on('submit',function (event) {
                event.preventDefault();
                if(pristine.validate())
                {
                    axios.post(base_url + 'subscriptions/subscription',$form_main.serialize()).then(function (response) {

                        window.location = base_url + 'subscriptions/list/' + response.data.id;
                    }).catch(function (error) {
                        $.each(error.response.data, function(key, value) {
                            toastr.error(value);
                        });
                    });
                }

            });


            const plan_id = document.getElementById('plan_id');
            const price = document.getElementById('price');

            if(plan_id)
            {
                <?php if (empty($_smarty_tpl->tpl_vars['subscription']->value)) {?>
                plan_id.addEventListener('change', function() {

                    let plan_price = this.options[this.selectedIndex].getAttribute('data-price');

                    if(price)
                        {
                            price.value = plan_price;
                        }

                });
                <?php }?>
            }


        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
