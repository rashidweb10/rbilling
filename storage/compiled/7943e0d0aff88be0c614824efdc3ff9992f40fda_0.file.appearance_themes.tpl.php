<?php
/* Smarty version 4.3.0, created on 2024-08-15 09:25:48
  from 'C:\xampp\htdocs\cloudonex-business-suit\ui\theme\default\appearance_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66be01dc48bed8_60828304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7943e0d0aff88be0c614824efdc3ff9992f40fda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex-business-suit\\ui\\theme\\default\\appearance_themes.tpl',
      1 => 1685172824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66be01dc48bed8_60828304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113001557966be01dc436541_73826666', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_113001557966be01dc436541_73826666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113001557966be01dc436541_73826666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes_post">


                            <div class="mb-3">
                                <label for="theme"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Theme'];?>
</label>
                                <select name="theme" id="theme" class="form-select">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['themes']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['theme'] == $_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected" <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['theme']->value);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>



                            <h3><?php echo __('Frontend ');?>
</h3>

                            <div class="mb-3">
                                <label for="frontend_theme"><?php echo __('Theme');?>
</label>
                                <select name="frontend_theme" id="frontend_theme" class="form-select">
                                    <option value=""><?php echo __('Default');?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['frontend_themes']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'frontend_theme');
$_smarty_tpl->tpl_vars['frontend_theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['frontend_theme']->value) {
$_smarty_tpl->tpl_vars['frontend_theme']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['frontend_theme']->value;?>
"
                                                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['frontend_theme']) && $_smarty_tpl->tpl_vars['config']->value['frontend_theme'] == $_smarty_tpl->tpl_vars['frontend_theme']->value) {?>selected="selected" <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['frontend_theme']->value);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="frontend_primary_color"><?php echo __('Primary Color');?>
</label>
                                <input type="color" id="frontend_primary_color" name="frontend_primary_color" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#007bff' ?? null : $tmp);?>
" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="frontend_link_color"><?php echo __('Link Color');?>
</label>
                                <input type="color" id="frontend_link_color" name="frontend_link_color" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['frontend_link_color'] ?? null)===null||$tmp==='' ? '#007bff' ?? null : $tmp);?>
" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="frontend_primary_button_color"><?php echo __('Primary Button Color');?>
</label>
                                <input type="color" id="frontend_primary_button_color" name="frontend_primary_button_color" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['frontend_primary_button_color'] ?? null)===null||$tmp==='' ? '#007bff' ?? null : $tmp);?>
" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="frontend_primary_button_hover_color"><?php echo __('Primary Button Hover Color');?>
</label>
                                <input type="color" id="frontend_primary_button_hover_color" name="frontend_primary_button_hover_color" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['frontend_primary_button_hover_color'] ?? null)===null||$tmp==='' ? '#0069d9' ?? null : $tmp);?>
" class="form-control">
                            </div>



                            <input type="hidden" name="nstyle" value="dark">

                            <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>



                </div>
            </div>










        </div>




    </div>
<?php
}
}
/* {/block "content"} */
}
