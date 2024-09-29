<?php
/* Smarty version 4.3.0, created on 2024-08-15 19:31:32
  from 'C:\xampp\htdocs\cloudonex-business-suit\ui\theme\default\contacts_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66be0a3ceafb81_09437374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab6b4c2991ca6ee55cce779345a8f23ede5b2bef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex-business-suit\\ui\\theme\\default\\contacts_files.tpl',
      1 => 1685172824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66be0a3ceafb81_09437374 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="rform">


    <div class="mb-3"><label for="c_file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Files'];?>
</label>

        <select name="c_file" id="c_file" class="form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['title'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </select>
    </div>


    <div class="mb-3">
        <button class="btn btn-primary" type="submit" id="assign_file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
    </div>

</form>
<hr>
<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>

        <th class="text-end" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>

        <th class="text-end" data-sort-ignore="true" width="100px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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

            <td>
                <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>
                    <i class="fal fa-file-image-o"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'pdf') {?>
                    <i class="fal fa-file-pdf-o"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'zip') {?>
                    <i class="fal fa-file-archive-o"></i>
                <?php } else { ?>
                    <i class="fal fa-file"></i>
                <?php }?>
            </td>


            <td>

                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>
</a>

            </td>

            <td class="text-end">

                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/remove_file/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-xs"><i class="fal fa-times"></i> </a>

            </td>


        </tr>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table>
<?php }
}
