<?php
/* Smarty version 4.3.0, created on 2023-04-07 15:06:50
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/crm_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643069ca0fc6a9_73889094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a94d4ffc76489ec2fd1f8c2d57ef09c19eed4256' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/crm_groups.tpl',
      1 => 1667852872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643069ca0fc6a9_73889094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211757463643069ca0a92c4_86009610', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189819353643069ca0b4e41_27209723', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_432612256643069ca0ead60_34066274', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_211757463643069ca0a92c4_86009610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_211757463643069ca0a92c4_86009610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
        <style>
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #F7F9FC;
            }
        </style>
    <?php }?>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_189819353643069ca0b4e41_27209723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189819353643069ca0b4e41_27209723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reorder/groups/" class="btn btn-sm btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder'];?>
</a>
                        </div>


                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="thead-light">
                            <table class="table table-striped">
                                <th><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</strong></th>
                                <th><strong><?php echo __('Customers');?>
</strong></th>
                                <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                    <tr>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</strong></td>

                                        <td>
                                            <strong><?php echo Contact::where('gid',$_smarty_tpl->tpl_vars['g']->value['id'])->count();?>
</strong>
                                        </td>

                                         <td>
                                             <div class="float-end">
                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/find_by_group/<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
/" class="btn btn-sm btn-info"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['List Contacts'];?>
</a>
                                                 <a href="#" class="btn btn-sm btn-primary edit_group" id="e<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                                 <a href="javascript:;" id="g<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" class="btn btn-sm btn-danger cdelete"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                             </div>


                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
                        </div>



                    </div>

                    <br>
                    <br>


                </div>
            </div>



        </div>



    </div>

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
">
    <input type="hidden" name="_msg_edit" id="_msg_edit" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
">
    <input type="hidden" name="_msg_ok" id="_msg_ok" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
">
    <input type="hidden" name="_msg_cancel" id="_msg_cancel" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_432612256643069ca0ead60_34066274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_432612256643069ca0ead60_34066274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(document).ready(function () {

            var _url = $("#_url").val();


            $("#add_new_group").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/add_group/", { group_name: group_name })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    location.reload();

                                }

                                else {
                                    Swal.fire({
                                        title: '<?php echo __('Error');?>
',
                                        text: data,
                                        type: 'error',
                                        confirmButtonText: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
'
                                    })
                                }

                            });
                    }

                })()



            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/crm-group/" + id;
                    }
                });



            });


            $(".edit_group").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var gname = $( this ).attr( "data-name" );


                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputValue: gname,
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/group_edit/", { id: eid, gname: group_name })
                            .done(function( data ) {
                                location.reload();
                            });
                    }

                })()



            });




        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
