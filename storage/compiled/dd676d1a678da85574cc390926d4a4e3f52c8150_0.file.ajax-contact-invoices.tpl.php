<?php
/* Smarty version 4.3.0, created on 2023-01-31 09:00:41
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax-contact-invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d91f09ca3f59_77002445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd676d1a678da85574cc390926d4a4e3f52c8150' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax-contact-invoices.tpl',
      1 => 1669761604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d91f09ca3f59_77002445 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/1/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/" class="btn btn-primary waves-effect waves-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>
</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/recurring/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/" class="btn btn-primary waves-effect waves-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Recurring Invoice'];?>
</a>

<hr>
<br>


<h5> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Amount'];?>
: <span class="amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['total_invoice_amount']->value;?>
</span></h5>
<h5 class="text-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid Amount'];?>
: <span class="amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['total_paid_amount']->value;?>
</span></h5>
<h5 class="text-danger"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Un Paid Amount'];?>
: <span class="amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['total_unpaid_amount']->value;?>
</span></h5>

<hr>
<div class="table-responsive">
    <table class="table table-striped sys_table">
        <thead style="background: #f0f2ff">
        <tr>
            <th>#</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                <th>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>

                </th>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                <th>
                    <?php echo __('Service');?>

                </th>
            <?php }?>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
            <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['invoice']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
 <?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value['account'];?>
</td>

                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['invoice_groups']->value[$_smarty_tpl->tpl_vars['invoice']->value['group_id']])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['invoice_groups']->value[$_smarty_tpl->tpl_vars['invoice']->value['group_id']]->name;?>

                        <?php }?>
                    </td>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['invoice']->value['service_id']])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['invoice']->value['service_id']]->name;?>

                        <?php }?>
                    </td>
                <?php }?>
                <td>
                    <?php if (!empty($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['invoice']->value['aid']])) {?>
                        <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['invoice']->value['aid']]->fullname;?>

                    <?php }?>
                </td>
                <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice']->value['total'],$_smarty_tpl->tpl_vars['invoice']->value['currency_iso_code']);?>
</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value['date']));?>
</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value['duedate']));?>
</td>
                <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value['status']);?>
</td>
                <td>
                    <div class="btn-group float-end">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
/" class="btn btn-primary btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
/" class="btn btn-info btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                    </div>

                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
</div>


<?php }
}
