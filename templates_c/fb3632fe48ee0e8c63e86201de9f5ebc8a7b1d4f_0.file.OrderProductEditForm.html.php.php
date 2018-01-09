<?php
/* Smarty version 3.1.30, created on 2018-01-09 01:20:50
  from "D:\xampp\htdocs\Base\templates\OrderProductEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a540ae261aa23_90022537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3632fe48ee0e8c63e86201de9f5ebc8a7b1d4f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\OrderProductEditForm.html.php',
      1 => 1515457173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a540ae261aa23_90022537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
<h1>
  <translate>Edit orderproduct</translate>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['orderproducts']->value)) {?>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
OrderProduct/edit" method="post" id="orderproductForm">
  <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['orderproducts']->value['id'];?>
">
  <div class="form-group">
              <label for="idUser">
                <translate>User ID</translate>
              </label>
              <input type="text" class="form-control" name="idUser" value="<?php echo $_smarty_tpl->tpl_vars['orderproducts']->value['idUser'];?>
" required>
            </div>
     <div class="form-group">
              <label for="idMealOrder">
                <translate>Meal Order ID</translate>
              </label>
              <input type="text" class="form-control" name="idMealOrder" value="<?php echo $_smarty_tpl->tpl_vars['orderproducts']->value['idMealOrder'];?>
" required>
            </div>
     <div class="form-group">
              <label for="idProduct">
                <translate>Product ID</translate>
              </label>
              <input type="text" class="form-control" name="idProduct" value="<?php echo $_smarty_tpl->tpl_vars['orderproducts']->value['idProduct'];?>
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
