<?php
/* Smarty version 4.3.0, created on 2023-02-12 12:11:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/api.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e91dba2e5950_85825374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9cf83df265db3433e5d602757694450d1722d74' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/api.tpl',
      1 => 1676221880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e91dba2e5950_85825374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41596901063e91dba2d9ea7_45302240', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_41596901063e91dba2d9ea7_45302240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_41596901063e91dba2d9ea7_45302240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">

            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application URL'];?>
:</label>
                        <input type="text" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
">
                    </div>

                </div>


            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add API Access'];?>
</h2>

                </div>

                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" id="tform" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_post/">



                            <div class="mb-3">
                                <label for="label" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="label" name="label">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>



    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table">
                            <thead>
                            <tr>
                                <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</th>
                                <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Key'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
                                    <td> <?php echo $_smarty_tpl->tpl_vars['ds']->value['label'];?>
 </td>
                                    <td>
                                        <div class="mb-3">
                                            <input class="form-control input-sm" type="text" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['apikey'];?>
">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_regen/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success"><i class="fal fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Re Generate Key'];?>
</a>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                        </div>
                                    </td>
                                </tr>

                                <?php if (!empty($_smarty_tpl->tpl_vars['invoice']->value)) {?>
                                    <tr>
                                        <td colspan="3">
                                            <div class="mb-2">
                                                <h4><?php echo __('Examples');?>
</h4>
                                                <div class="mb-2">
                                                    <strong><?php echo __('Retrieve an Invoice');?>
</strong>
                                                </div>
                                                <div class="mb-2">
                                                    GET: <a href="<?php echo BASE_URL;?>
api/v3/<?php echo $_smarty_tpl->tpl_vars['ds']->value['apikey'];?>
/invoice/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" target="_blank"><code><?php echo BASE_URL;?>
api/v3/<?php echo $_smarty_tpl->tpl_vars['ds']->value['apikey'];?>
/invoice/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
</code></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>

                                <?php
}
if ($_smarty_tpl->tpl_vars['ds']->do_else) {
?>
                                <tr>

                                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
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

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php
}
}
/* {/block "content"} */
}
