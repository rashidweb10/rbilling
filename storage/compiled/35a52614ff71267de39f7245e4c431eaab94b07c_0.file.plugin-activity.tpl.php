<?php
/* Smarty version 4.3.0, created on 2023-01-16 04:09:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/plugin-activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c5143de19d27_57733589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a52614ff71267de39f7245e4c431eaab94b07c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/plugin-activity.tpl',
      1 => 1614376397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c5143de19d27_57733589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155133315463c5143ddfbbc4_80867549', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168587325563c5143ddfe570_43171905', "content_body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68370327563c5143de17663_32322156', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_base']->value));
}
/* {block "head"} */
class Block_155133315463c5143ddfbbc4_80867549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_155133315463c5143ddfbbc4_80867549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        @media (min-width: 992px){
            .clx-fixed-navigation:not(.clx-navigation-type-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content_body"} */
class Block_168587325563c5143ddfe570_43171905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_168587325563c5143ddfe570_43171905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-content-wrapper bg-transparent m-0">
        <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
            <div class="d-flex align-items-center container p-0">
                <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                    <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                            <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                        <?php } else { ?>
                            <span class="page-logo-text mr-1">CloudOnex</span>
                        <?php }?>
                    </a>
                </div>



            </div>
        </div>
        <div class="flex-1">
            <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                <div class="mx-auto" style="max-width: 600px;">
                    <div class="card p-4">

                        <h1 class="mb-3 text-center">
                            <?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>

                        </h1>

                        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                        <?php }?>

                        <p class="my-3"><span  id="countmsg">Please Wait...</span> Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugins/">Click Here.</a> </p>

                        <textarea class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</textarea>


                    </div>
                </div>


                <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center">
                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_68370327563c5143de17663_32322156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_68370327563c5143de17663_32322156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            var count = 20;
            var countdown = setInterval(function(){
                $("#countmsg").html("Redirecting in " + count + " seconds!");

                if (count == 0) {
                    clearInterval(countdown);
                    window.open('https://business-suite.test/?ng=settings/plugins/', "_self");

                }
                count--;
            }, 1000);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
