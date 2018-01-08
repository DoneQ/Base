<?php
/* Smarty version 3.1.30, created on 2018-01-05 15:33:00
  from "C:\xampp\htdocs\Base\templates\ClientEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f8c9c96ac72_86815292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1b1571d46a5a86fdd485eb25926c1172a85877' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Base\\templates\\ClientEditForm.html.php',
      1 => 1515162775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a4f8c9c96ac72_86815292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
<h1>
  <translate>Edit client</translate>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['clients']->value)) {?>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Client/edit" method="post" id="clientForm">
  <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['clients']->value['id'];?>
">
  <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['clients']->value['name'];?>
" required>
            </div>
     <div class="form-group">
              <label for="sname">
                <translate>Surname</translate>
              </label>
              <input type="text" class="form-control" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['clients']->value['sname'];?>
" required>
            </div>
     <div class="form-group">
              <label for="phone">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['clients']->value['phone'];?>
" required>
            </div>
     <div class="form-group">
              <label for="mail">
                <translate>E-Mail</translate>
              </label>
              <input type="text" class="form-control" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['clients']->value['mail'];?>
" required>
            </div>
            <div class="form-footer">
              <input type="submit" class="btn btn-default" value="Edit"/>
              <!--
              <button type="submit" class="btn btn-default" data-dismiss="modal">
                <translate>Submit</translate>
              </button>
              <button type="button" class="btn btn-default" data-dismiss="modal">
                <translate>Close</translate>
              </button>
              -->
            </div>
</form>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
