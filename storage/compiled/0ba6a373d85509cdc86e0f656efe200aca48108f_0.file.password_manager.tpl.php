<?php
/* Smarty version 4.3.0, created on 2023-01-27 11:43:34
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/password_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d3ff36006875_78538692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba6a373d85509cdc86e0f656efe200aca48108f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/password_manager.tpl',
      1 => 1657977954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d3ff36006875_78538692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124699525963d3ff35f39ec4_94860792', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170549312563d3ff360018c6_49707233', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_124699525963d3ff35f39ec4_94860792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_124699525963d3ff35f39ec4_94860792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">



        <div class="col-md-12">



            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <a href="#" class="btn btn-primary add_password waves-effect waves-light" id="add_company"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Entry'];?>
</a>
                    </div>




                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_table">
                            <table class="table table-bordered table-hover" id="tableDataTable">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['URL'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['passwords']->value, 'password');
$_smarty_tpl->tpl_vars['password']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['password']->value) {
$_smarty_tpl->tpl_vars['password']->do_else = false;
?>
                                    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['password']->value['id'];?>
">

                                        <td><?php echo $_smarty_tpl->tpl_vars['password']->value['name'];?>
</td>
                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cls']->value[$_smarty_tpl->tpl_vars['password']->value['client_id']]))) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['password']->value['client_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cls']->value[$_smarty_tpl->tpl_vars['password']->value['client_id']];?>
</a>
                                            <?php }?>
                                        </td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['password']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['password']->value['url'];?>
</a> </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['password']->value['username'];?>
</td>
                                        <td class="text-end">



                                            <div class="btn-group">
    <?php if ($_smarty_tpl->tpl_vars['password']->value['url'] != '') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['password']->value['url'];?>
" target="_blank" class="btn btn-primary btn-sm"><i class="fal fa-globe"></i> </a>
    <?php }?>
    <a href="javascript:void(0);" class="btn btn-sm btn-info copy_to_clipboard" aria-label="<?php echo $_smarty_tpl->tpl_vars['password']->value->username;?>
"><i class="fal fa-clipboard"></i></a>

    <a href="javascript:void(0);" class="btn btn-sm btn-warning copy_to_clipboard" aria-label="<?php echo $_smarty_tpl->tpl_vars['password']->value->password;?>
"><i class="fal fa-lock"></i></a>

    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
" id="pe_<?php echo $_smarty_tpl->tpl_vars['password']->value['id'];?>
" class="btn btn-success btn-sm edit_password"><i class="fal fa-pencil"></i> </a>


    <a href="#" class="btn btn-danger btn-sm cdelete" id="c<?php echo $_smarty_tpl->tpl_vars['password']->value['id'];?>
" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash"></i> </a>
</div>

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



    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary waves-effect waves-light add_password" href="#">
            <i class="fal fa-plus"></i>
        </a>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_170549312563d3ff360018c6_49707233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_170549312563d3ff360018c6_49707233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');



            $('#tableDataTable').DataTable({
                columnDefs: [
                    { orderable: false, targets: -1 }
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
            });

            // var clipboard = new Clipboard('.copy_to_clipboard', {
            //     text: function(trigger) {
            //         return trigger.getAttribute('aria-label');
            //     }
            // });

            // clipboard.on('success', function(e) {
            //     toastr.success('Text Copied!');
            //     e.clearSelection();
            // });

            $('.add_password').on('click', function(e){

                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'password_manager/modal_password/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".s2_contacts").select2({
                            });
                        }
                    },
                });
            });


            $('.edit_password').on('click', function(e){

                var e_id = this.id;
                e.preventDefault();
                $.fancybox.open({
                    src  :  base_url + 'password_manager/modal_password/'+e_id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".s2_contacts").select2({
                            });
                        }
                    },
                });

            });

            // $('.password_view').on('click', function(e){
            //
            //     var v_id = this.id;
            //
            //     e.preventDefault();
            //
            //     $('body').modalmanager('loading');
            //
            //
            //     $modal.load( base_url + 'password_manager/modal_view_password/'+v_id, '', function(){
            //
            //         $modal.modal();
            //
            //         $modal.css("width", "700px");
            //         $modal.css("margin-left", "-349px");
            //
            //         $modal.modal();
            //
            //         var clipboard = new Clipboard('.copy_to_clipboard', {
            //             text: function(trigger) {
            //                 return trigger.getAttribute('aria-label');
            //             }
            //         });
            //
            //         clipboard.on('success', function(e) {
            //            toastr.success('Text Copied!');
            //             e.clearSelection();
            //         });
            //
            //
            //
            //     });
            // });


            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();





                $.post( base_url + "password_manager/save/", $("#spForm").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "delete/password/" + id + '/';
                    }
                });
            });



        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
