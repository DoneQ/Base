<?php
/* Smarty version 3.1.30, created on 2018-01-09 00:47:10
  from "D:\xampp\htdocs\Base\templates\MealOrderEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5402fedadb18_74884952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f89c7e1edfeb5f932119078dfd1ee9b9f431208' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\MealOrderEditForm.html.php',
      1 => 1515454581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a5402fedadb18_74884952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
<h1>
  <translate>Edit mealorder</translate>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['mealorders']->value)) {?>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
MealOrder/edit" method="post" id="mealorderForm">
  <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['mealorders']->value['id'];?>
">
  <div class="form-group">
              <label for="idClient">
                <translate>Client ID</translate>
              </label>
              <input type="text" class="form-control" name="idClient" value="<?php echo $_smarty_tpl->tpl_vars['mealorders']->value['idClient'];?>
" required>
            </div>
     <div class="form-group">
              <label for="idWorker">
                <translate>Worker ID</translate>
              </label>
              <input type="text" class="form-control" name="idWorker" value="<?php echo $_smarty_tpl->tpl_vars['mealorders']->value['idWorker'];?>
" required>
            </div>
     <div class="form-group">
              <label for="contactPhone">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="contactPhone" value="<?php echo $_smarty_tpl->tpl_vars['mealorders']->value['contactPhone'];?>
" required>
            </div>
     <div class="form-group">
              <label for="adress">
                <translate>Adress</translate>
              </label>
              <input type="text" class="form-control" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['mealorders']->value['adress'];?>
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
