<?php
/* Smarty version 4.3.0, created on 2023-05-27 03:30:44
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_list_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6471b1a4a1fad1_15391269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86935b3400c7774aa5afbcf872fcab6c9f47c13b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_list_table.tpl',
      1 => 1661542212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6471b1a4a1fad1_15391269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5118314816471b1a49ac2c3_98506678', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7393082656471b1a49ae790_19860350', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4751257396471b1a4a16949_35037123', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_5118314816471b1a49ac2c3_98506678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_5118314816471b1a49ac2c3_98506678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_7393082656471b1a49ae790_19860350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7393082656471b1a49ae790_19860350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"/>
                    <path d="M8.40093151,17 L5,17 C3.34314575,17 2,15.1568542 2,13.5 C2,11.8431458 3.34314575,10 5,10 L6,10 L6,8 L21,8 L21,11.5 C21,15.6421356 17.6421356,19 13.5,19 C11.5309185,19 9.73907026,18.2411745 8.40093151,17 Z M6.86504659,15 C6.38614142,14.0940164 6.08736465,13.0781211 6.01640228,12 L5,12 C4.44771525,12 4,12.9477153 4,13.5 C4,14.0522847 4.44771525,15 5,15 L6.86504659,15 Z" fill="#000000"/>
                    <rect fill="#000000" opacity="0.3" x="6" y="21" width="15" height="2" rx="1"/>
                    <path d="M8.11576273,0 L9.27322553,1.15267194 C8.41777098,2.01168201 8.42065331,3.40153019 9.27966338,4.25698473 C9.35322262,4.3302395 9.4318859,4.39818368 9.51506091,4.46030566 L10,4.82249831 L9.02250371,6.13126634 L8.53756462,5.76907368 C8.39249331,5.66072242 8.25529121,5.54221626 8.12699144,5.41444753 C6.62873232,3.92238985 6.62370505,1.49825912 8.11576273,0 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                    <path d="M13.1157627,1 L14.2732255,2.15267194 C13.417771,3.01168201 13.4206533,4.40153019 14.2796634,5.25698473 C14.3532226,5.3302395 14.4318859,5.39818368 14.5150609,5.46030566 L15,5.82249831 L14.0225037,7.13126634 L13.5375646,6.76907368 C13.3924933,6.66072242 13.2552912,6.54221626 13.1269914,6.41444753 C11.6287323,4.92238985 11.6237051,2.49825912 13.1157627,1 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                    <path d="M18.1157627,0 L19.2732255,1.15267194 C18.417771,2.01168201 18.4206533,3.40153019 19.2796634,4.25698473 C19.3532226,4.3302395 19.4318859,4.39818368 19.5150609,4.46030566 L20,4.82249831 L19.0225037,6.13126634 L18.5375646,5.76907368 C18.3924933,5.66072242 18.2552912,5.54221626 18.1269914,5.41444753 C16.6287323,3.92238985 16.6237051,1.49825912 18.1157627,0 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                </g>
            </svg>

            <?php ob_start();
echo __('Projects');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <span class='fw-300'></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project" class="btn btn-primary"><?php ob_start();
echo __('Create New Project');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</a>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="panel-container ">
                    <div class=" card card-body table-responsive">
                        <table class="table" id="clx_datatable">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Name');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</th>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Customer');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</th>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Budget');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</th>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Startdate');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</th>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Deadline');
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</th>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Members');
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</th>
                                <th scope="col" class="h5"><?php ob_start();
echo __('Status');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>

                                <tr>
                                    <th scope="row" class="h5">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</a>
                                    </th>
                                    <td class="h5">
                                        <?php if ($_smarty_tpl->tpl_vars['project']->value->contact_id && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]))) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]->account;?>

                                        <?php }?>
                                    </td>
                                    <td class="h5">
                                        <?php if ($_smarty_tpl->tpl_vars['project']->value->budget) {?>
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['project']->value->budget,$_smarty_tpl->tpl_vars['project']->value->currency);?>

                                        <?php }?>
                                    </td>
                                    <td class="h5 text-success"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->start_date));?>
</td>
                                    <td class="h5 text-danger">
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->due_date));?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['project']->value->members) {?>
                                            <div class="fs-sm d-flex align-items-center my-3">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['project']->value->members), 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]))) {?>
                                                        <a href="javascript:;" class="btn-m-s user-stacked">

                                                            <?php if ($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->img) {?>
                                                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->img;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" class="profile-image rounded-circle" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->fullname;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
">
                                                            <?php } else { ?>
                                                                <span class="clx-avatar"><?php echo sp_get_contact_image($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]);?>
</span>
                                                            <?php }?>

                                                        </a>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        <?php }?>
                                    </td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['project']->value->status == 'Completed') {?>
                                            <span class="badge badge-outline text-uppercase badge-outline-success mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['project']->value->status == 'Started') {?>
                                            <span class="badge badge-outline text-uppercase badge-outline-info mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                                            <?php } else { ?>
                                            <span class="badge badge-outline text-uppercase badge-outline-danger mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>

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




            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_4751257396471b1a4a16949_35037123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4751257396471b1a4a16949_35037123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
        $(function() {

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
                        /*{
                        	extend:    'colvis',
                        	text:      'Column Visibility',
                        	titleAttr: 'Col visibility',
                        	className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger-light btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success-light btn-sm mr-1'
                        },
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
                            className: 'btn-info-light btn-sm mr-1'
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

            $('.has-tooltip').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
