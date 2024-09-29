<?php
/* Smarty version 4.3.0, created on 2023-01-27 15:32:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d434ce13e979_65503069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8126f031ac9c67ce093662af9ba07a2c47bac603' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_view.tpl',
      1 => 1636978775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d434ce13e979_65503069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172373214963d434ce130591_06648809', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34027314263d434ce13b0f3_58900866', 'script');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/paper.tpl");
}
/* {block "content"} */
class Block_172373214963d434ce130591_06648809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_172373214963d434ce130591_06648809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container my-3">
        <div class="row">
            <div class="col-md-6">
                <h1><?php echo $_smarty_tpl->tpl_vars['contract']->value->title;?>
</h1>
                <?php if (!empty($_smarty_tpl->tpl_vars['contract_types']->value[$_smarty_tpl->tpl_vars['contract']->value->type])) {?>
                    <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['contract_types']->value[$_smarty_tpl->tpl_vars['contract']->value->type];?>
</p>
                <?php }?>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contracts/download/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
" class="btn btn-primary"><i class="fal fa-file-pdf"></i> <?php echo __('Download');?>
</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <?php echo $_smarty_tpl->tpl_vars['contract']->value->description;?>

                        </div>

                        <div class="hr-line-dashed"></div>

                        <div style="background-color: #F3EDE5; cursor: url('<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/ui/assets/img/pen-icon.png?v=2'), default;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="signaturePadArea">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo __('Sign above');?>
</h4>
                            </div>
                            <div class="col-md-6 text-end">
                                <button type="button" id="clearSignature" class="btn btn-danger btn-sm"><?php echo __('Clear signature');?>
</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_34027314263d434ce13b0f3_58900866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_34027314263d434ce13b0f3_58900866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/jSignature.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

        $(function () {

            var $signaturePadArea = $("#signaturePadArea");

            $signaturePadArea.jSignature({
                color:"#000",


            });

            <?php if ($_smarty_tpl->tpl_vars['contract']->value->party_two_sign != '') {?>

            $signaturePadArea.jSignature("setData","<?php echo $_smarty_tpl->tpl_vars['contract']->value->party_two_sign;?>
");

            <?php }?>

            $signaturePadArea.bind('change', function(e){
                var signData = $signaturePadArea.jSignature("getData");
                $.post( "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contracts/save-signature/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
", {
                    signData: signData,
                });
            });


            $('#clearSignature').on('click',function () {
                $signaturePadArea.jSignature("reset");
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
