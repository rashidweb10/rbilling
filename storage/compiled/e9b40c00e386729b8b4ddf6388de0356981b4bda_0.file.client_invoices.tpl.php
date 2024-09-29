<?php
/* Smarty version 4.3.0, created on 2023-01-13 16:27:13
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c1ccb1ba2c21_26211011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b40c00e386729b8b4ddf6388de0356981b4bda' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_invoices.tpl',
      1 => 1668103888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c1ccb1ba2c21_26211011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25653075763c1ccb1b294b8_13977502', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5516178263c1ccb1b986c8_90101480', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_25653075763c1ccb1b294b8_13977502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25653075763c1ccb1b294b8_13977502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container">
                    <div class="card-body">


                        <div class="row" id="d_ajax_summary">

                            <div class="col-md-4">



                                <table class="table table-striped">

                                    <tbody>
                                    <tr><td class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
 </td> <td><span class="amount text-success h5"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span> </td></tr>
                                    <tr><td class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
 </td> <td><span class="amount text-danger h5"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_unpaid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span> </td></tr>
                                    <tr><td class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
 </td> <td><span class="amount text-info h5"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_partially_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span> </td></tr>
                                    <tr><td class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
 </td> <td><span class="amount text-warning h5"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_cancelled_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span> </td></tr>
                                    <tr><td>&nbsp; </td> <td></td></tr>


                                    </tbody>
                                </table>

                                <?php if ($_smarty_tpl->tpl_vars['config']->value['add_fund']) {?>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
 <span class="amount text-success"><?php echo formatCurrency($_smarty_tpl->tpl_vars['user']->value->balance,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span></h4>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
 <span class="amount text-warning"><?php echo formatCurrency($_smarty_tpl->tpl_vars['due_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span></h4>
                                <?php }?>

                            </div>


                            <div class="col-md-8">


                                <div id="invoice_summary"></div>

                            </div>


                        </div>

                    </div>
                </div>


            </div>

        </div>


    </div>

    <div class="panel">
        <div class="panel-hdr">


            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
 : <?php echo $_smarty_tpl->tpl_vars['total_invoice']->value;?>
</h2>


        </div>
        <div class="panel-container">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-striped sys_table">
                        <thead>
                        <tr>
                            <th>#</th>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                            </th>
                                                        <th class="text-end" width="100px"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td><a target="_blank"
                                       href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a>
                                </td>
                                                                <td class="amount h6"
                                    data-a-sign="<?php if ($_smarty_tpl->tpl_vars['ds']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td class="amount h6"><?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                                <td>

                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                        <span class="badge badge-outline badge-outline-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                        <span class="badge badge-outline badge-outline-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
                                        <span class="badge badge-outline badge-outline-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                        <span class="badge badge-outline badge-outline-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } else { ?>
                                        <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

                                    <?php }?>


                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"
                                           class="btn btn-primary btn-xs"><i class="fal fa-check"></i> </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/dl/"
                                           class="btn btn-warning btn-xs "><i class="fal fa-file"></i> </a>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"
                                           class="btn btn-danger btn-xs"><i class="fal fa-print"></i> </a>

                                    </div>
                                </td>

                            </tr>
                            <?php
}
if ($_smarty_tpl->tpl_vars['ds']->do_else) {
?>
                            <tr>
                                <td colspan="8">
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

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


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_5516178263c1ccb1b986c8_90101480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_5516178263c1ccb1b986c8_90101480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            var options = {
                series: [<?php echo $_smarty_tpl->tpl_vars['total_paid_amount']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['total_unpaid_amount']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['total_partially_paid_amount']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['total_cancelled_amount']->value;?>
],
                chart: {
                    height: 390,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        offsetY: 0,
                        startAngle: 0,
                        endAngle: 270,
                        hollow: {
                            margin: 5,
                            size: '30%',
                            background: 'transparent',
                            image: undefined,
                        },
                        dataLabels: {
                            name: {
                                show: false,
                            },
                            value: {
                                show: false,
                            }
                        }
                    }
                },
                colors: ['#2CCE89', '#F6365B', '#6772E5', '#FB6340'],
                labels: ['<?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
'],
                legend: {
                    show: true,
                    floating: true,
                    fontSize: '14px',
                    position: 'left',
                    offsetX: 100,
                    offsetY: 15,
                    labels: {
                        useSeriesColors: true,
                    },
                    markers: {
                        size: 0
                    },
                    formatter: function(seriesName, opts) {
                        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
                    },
                    itemMargin: {
                        vertical: 3
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            show: false
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#invoice_summary"), options);
            chart.render();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
