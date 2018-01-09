<?php
/* Smarty version 3.1.30, created on 2018-01-09 01:32:48
  from "D:\xampp\htdocs\Base\templates\ProductEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a540db03b2bf6_39709524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2561ea2612092b8a968119f5ac0a50da6f6b1d8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\ProductEditForm.html.php',
      1 => 1515457959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a540db03b2bf6_39709524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
    <h1>
        <translate>Edit product</translate>
    </h1>
    <?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
    <form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Product/edit" method="post" id="productForm">
        <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['id'];?>
">
        <div class="form-group">
            <label for="name">
                <translate>Name</translate>
            </label>
            <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['name'];?>
" required>
        </div>
        <div class="form-group">
            <label for="info">
                <translate>Informations</translate>
            </label>
            <input type="text" class="form-control" name="info" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['info'];?>
" required>
        </div>
        <div class="form-group">
            <label for="adds">
                <translate>Addons</translate>
            </label>
            <input type="text" class="form-control" name="adds" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['adds'];?>
" required>
        </div>
        <div class="form-group">
            <label for="price">
                <translate>Price</translate>
            </label>
            <input type="text" class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['price'];?>
" required>
        </div>
        <div class="form-group">
            <label for="idCategory">
                <translate>Category ID</translate>
            </label>
            <input type="text" class="form-control" name="idCategory" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['idCategory'];?>
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
