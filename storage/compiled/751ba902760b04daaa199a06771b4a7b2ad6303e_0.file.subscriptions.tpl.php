<?php
/* Smarty version 4.3.0, created on 2023-04-07 15:07:23
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643069eb305609_99774220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '751ba902760b04daaa199a06771b4a7b2ad6303e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions.tpl',
      1 => 1666259069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643069eb305609_99774220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1256722712643069eb2b25b3_96831497', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_833344958643069eb2fd389_74681997', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1256722712643069eb2b25b3_96831497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1256722712643069eb2b25b3_96831497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-window'></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Subscriptions'];?>


        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php ob_start();
echo __("Subscription List");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
subscriptions/add" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Subscription'];?>
</a>
                        </div>

                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == '' || $_smarty_tpl->tpl_vars['tab']->value == 'active') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link  <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'inactive') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/inactive"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'suspended') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/suspended"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Suspended'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'cancelled') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/cancelled"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'all') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/all"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                        </ul>
                        <div class="table-responsive">
                            <table id="clx_datatable" class="table w-100 sys_table footable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th>#</th>
                                    <th><?php echo __('Plan Name');?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>

                                    <th><?php ob_start();
echo __('Date Subscribed');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</th>
                                    <th><?php echo __('Next Renewal Date');?>
</th>
                                    <th>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                    <th><?php echo __('Quantity');?>
</th>
                                    <th><?php echo __('Price');?>
</th>
                                    <th><?php echo __('Total');?>
</th>
                                    <th class="text-end" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subscriptions']->value, 'subscription');
$_smarty_tpl->tpl_vars['subscription']->iteration = 0;
$_smarty_tpl->tpl_vars['subscription']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subscription']->value) {
$_smarty_tpl->tpl_vars['subscription']->do_else = false;
$_smarty_tpl->tpl_vars['subscription']->iteration++;
$__foreach_subscription_0_saved = $_smarty_tpl->tpl_vars['subscription'];
?>

                                    <tr>
                                        <td data-value="<?php echo $_smarty_tpl->tpl_vars['subscription']->value->id;?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['subscription']->iteration;?>
"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->id;?>
</td>
                                        <td class="h6 text-info"><?php if ((isset($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['subscription']->value->plan_id]))) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['subscription']->value->plan_id]->title;?>

                                            <?php }?></td>

                                        <td class="h6"> <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['subscription']->value->contact_id]))) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['subscription']->value->contact_id]->account;?>

                                            <?php }?>
                                        </td>

                                        <td class="text-success h6"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->start_date;?>
</td>

                                        <td class="text-danger h6"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->next_renewal_date;?>
</td>

                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['subscription']->value->status == 'Active') {?>
                                                <span class="badge badge-outline badge-outline-success"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->status;?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['subscription']->value->status == 'Inactive') {?>
                                                <span class="badge badge-outline badge-outline-info"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->status;?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['subscription']->value->status == 'Suspended') {?>
                                                <span class="badge badge-outline badge-outline-danger"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->status;?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['subscription']->value->status == 'Cancelled') {?>
                                                <span class="badge badge-outline badge-outline-warning"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->status;?>
</span>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['subscription']->value->type == 'Monthly') {?>
                                                <span class="badge badge-outline badge-outline-success"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->type;?>
</span>
                                            <?php } else { ?>
                                                <span class="badge badge-outline badge-outline-info"><?php echo $_smarty_tpl->tpl_vars['subscription']->value->type;?>
</span>
                                            <?php }?>
                                        </td>

                                        <td><?php echo $_smarty_tpl->tpl_vars['subscription']->value->quantity;?>
</td>
                                        <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['subscription']->value->price,$_smarty_tpl->tpl_vars['subscription']->value->currency);?>
</td>
                                        <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['subscription']->value->total,$_smarty_tpl->tpl_vars['subscription']->value->currency);?>
</td>

                                        <td class="text-end">
                                            <div class="">

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
subscriptions/edit/<?php echo $_smarty_tpl->tpl_vars['subscription']->value->id;?>
/" class="btn btn-secondary-light btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-file-edit"></i></a>

                                                <a href="javascript:;" class="btn btn-danger-light btn-icon" onclick="confirmThenGoToUrl(event,'subscriptions/delete-subscription/<?php echo $_smarty_tpl->tpl_vars['subscription']->value->id;?>
')" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>

                                            </div>
                                        </td>
                                    </tr>

                                <?php
$_smarty_tpl->tpl_vars['subscription'] = $__foreach_subscription_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

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
class Block_833344958643069eb2fd389_74681997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_833344958643069eb2fd389_74681997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary-light btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-success-light btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary-light btn-sm'
                        }
                    ],
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );


            $modal.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                app.confirm("Are You Sure?", function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/invoice/" + id;
                    }
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
