<?php
/* Smarty version 3.1.30, created on 2018-01-05 14:48:38
  from "C:\xampp\htdocs\Base\templates\HalfproductEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f82362552b7_86275879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f31a10071a2ed10bc9584ff4cc16de81f514897b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Base\\templates\\HalfproductEditForm.html.php',
      1 => 1515159800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a4f82362552b7_86275879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
<h1>Edytuj kategorię</h1>
<?php if (isset($_smarty_tpl->tpl_vars['halfproducts']->value) && count($_smarty_tpl->tpl_vars['halfproducts']->value) === 1) {?>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Halfproduct/edit" method="post" id="halfproductForm">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['halfproducts']->value, 'name', false, 'id');
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
