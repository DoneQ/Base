<?php
/* Smarty version 3.1.30, created on 2018-01-06 02:35:12
  from "D:\xampp\htdocs\Base\templates\ProductGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5027d0dd1be0_33603386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71eeb9f37d5d5b222fcae6cf8ce4afdc8f827e0e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\ProductGetAll.html.php',
      1 => 1515202147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
  ),
),false)) {
function content_5a5027d0dd1be0_33603386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
    <h1>Lista kateogrii</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
    <?php if (count($_smarty_tpl->tpl_vars['products']->value) === 0) {?>
    <b>Brak kategorii w bazie!</b><br/><br/>
    <?php } else { ?>
    <!--- Contact table --->
    <div class="col-md-10">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        <translate>Id</translate>
                    </th>
                    <th>
                        <translate>Name</translate>
                    </th>
                    <th>
                        <translate>Edit</translate>
                    </th>
                    <th>
                        <translate>Delete</translate>
                    </th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'name', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
                <tr>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.
                    </th>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                    </th>
                    <th>
                        <a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Product/editForm/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Edit</a>
                    </th>
                    <th>
                        <a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Product/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">usuń</a>
                    </th>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!--- /.table-collapse --->
    <?php }?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
    <?php }?>
    <div class="col-md-2">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddProduct">Dodaj kategorie</button>
    </div>
</div>

<!-- Modal section -->
<div id="modalAddProduct" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    <translate>Add new product</translate>
                </h4>
            </div>
            <div class="modal-body">
                <form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Product/add" method="post" id="productForm">
                    <div class="form-group">
                        <label for="name">
                            <translate>Name</translate>
                        </label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">
                            <translate>Informations</translate>
                        </label>
                        <input type="text" class="form-control" name="info" required>
                    </div>
                    <div class="form-group">
                        <label for="info">
                            <translate>Addons</translate>
                        </label>
                        <input type="text" class="form-control" name="adds" required>
                    </div>
                    <div class="form-group">
                        <label for="adds">
                            <translate>Price</translate>
                        </label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="idCategory">
                            <translate>Category</translate>
                        </label>
                        <input type="text" class="form-control" name="idCategory" required>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-default" value="Add"/>
                        <input type="button" class="btn btn-default" value="Close" data-dismiss="modal"/>
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

            </div>

        </div>

    </div>
</div>
<!--- /.modal-collapse --->
<div class="container">
    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; MVC + Smarty + Bootstrap</p>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/ProductFormCheck.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
