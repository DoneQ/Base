<?php
/* Smarty version 3.1.30, created on 2018-01-05 12:31:57
  from "C:\xampp\htdocs\Base\templates\CategoryEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f622de61c61_51036410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22860d976b5cad8c72eab5f1e7b4d2cd6239fe3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Base\\templates\\CategoryEditForm.html.php',
      1 => 1515151289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a4f622de61c61_51036410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
<h1>Edytuj kategorię</h1>
<?php if (isset($_smarty_tpl->tpl_vars['categories']->value) && count($_smarty_tpl->tpl_vars['categories']->value) === 1) {?>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Category/edit" method="post" id="categoryForm">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'name', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
      <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> 
  <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
