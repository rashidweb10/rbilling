<?php
/* Smarty version 4.3.0, created on 2023-01-27 11:35:52
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d3fd68299b74_28426763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0706e2c35e0d731c1cc07efb66e7b6a4fb2408a8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_invoices.tpl',
      1 => 1661542273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d3fd68299b74_28426763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163533356463d3fd68284608_43368465', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200034084163d3fd68284fe5_31044516', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87213751563d3fd68293a57_80626911', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_163533356463d3fd68284608_43368465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_163533356463d3fd68284608_43368465',
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
class Block_200034084163d3fd68284fe5_31044516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_200034084163d3fd68284fe5_31044516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">

            <div class="card border" id="t_options">

                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item active"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices"><i class="fal fa-th"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices_summary"><i class="fal fa-chart-bar"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</a></li>
                    </ul>
                </div>




                <div class="card-body">




                    <div class="tab-content">
                        <div id="details" class="tab-pane fade show active ib-tab-box">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4"><input style="min-width: 250px;" type="text" name="reportrange" class="form-control" id="reportrange"></div>
                                            <div class="col-md-4">
                                                <select id="cid" name="cid" class="form-control">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-primary" id="ib_filter" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</button>
                                            </div>
                                        </div>


                                                                            </form>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive" id="ib_data_panel">


                                        <table class="table table-striped table-hover display" id="ib_dt">
                                            <thead>
                                            <tr class="heading">
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                                <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                                <th class="text-left text-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</th>
                                                <th class="text-left text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
</th>


                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>

                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                            </tr>
                                            </thead>



                                            <tfoot>
                                            <tr>
                                                <th colspan="2" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
:</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>

                                                <th colspan="2"></th>
                                            </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                </div>
                            </div>


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
class Block_87213751563d3fd68293a57_80626911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_87213751563d3fd68293a57_80626911',
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


        $(function () {

            var start = moment().subtract(29, 'days');
            var end = moment();

            var $ib_data_panel = $("#ib_data_panel");

            $ib_data_panel.block({ message:block_msg });

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    '<?php echo __('Today');?>
': [moment(), moment()],
                    '<?php echo __('Yesterday');?>
': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '<?php echo __('Last 7 Days');?>
': [moment().subtract(6, 'days'), moment()],
                    '<?php echo __('Last 30 Days');?>
': [moment().subtract(29, 'days'), moment()],
                    '<?php echo __('This Month');?>
': [moment().startOf('month'), moment().endOf('month')],
                    '<?php echo __('Last Month');?>
': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);

            var $cid = $('#cid');



            $cid.select2({
            });

            var ib_dt = $('#ib_dt').DataTable( {

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
                "serverSide": true,
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
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'l><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
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
                        className: 'btn-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-success btn-sm mr-1'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-primary btn-sm mr-1'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-dark btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-secondary btn-sm'
                    }
                ],
                "ajax": {
                    "url": base_url + "reports/json_invoices/",
                    "type": "POST",
                    "data": function ( d ) {


                        d.reportrange = $reportrange.val();
                        d.cid = $cid.val();


                    }
                },
                "pageLength": 10,
                "responsive": true,
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 <?php echo $_smarty_tpl->tpl_vars['_L']->value['rows'];?>
', '25 <?php echo $_smarty_tpl->tpl_vars['_L']->value['rows'];?>
', '50 <?php echo $_smarty_tpl->tpl_vars['_L']->value['rows'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
' ]
                ],
                "columnDefs": [
                    { "orderable": false, "targets": 6 },
                    { "orderable": false, "targets": 4 },
                ],
                "order": [[ 0, 'desc' ]],
                "scrollX": false,
                "initComplete": function () {
                    $ib_data_panel.unblock();
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column( 2 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    pageTotal = api
                        .column( 2, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    pageTotal_2 = api
                        .column( 3, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    pageTotal_3 = api
                        .column( 4, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Update footer
                    $( api.column( 2 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal
                    );
                    $( api.column( 3 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal_2
                    );

                    $( api.column( 4 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal_3
                    );
                }
            } );

            var $ib_filter = $("#ib_filter");



            $ib_filter.on('click', function(e) {
                e.preventDefault();

                $ib_data_panel.block({ message:block_msg });

                ib_dt.ajax.reload(
                    function () {
                        $ib_data_panel.unblock();
                    }
                );


            });

        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
