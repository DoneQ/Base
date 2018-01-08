<?php /* Smarty version 3.1.27, created on 2018-01-05 12:27:07
         compiled from "C:\xampp\htdocs\Base\templates\CategoryGetAll.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:1880768725a4f610bc8da11_70807088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32782209af38bc7023e3040294bd0937e69ba5fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Base\\templates\\CategoryGetAll.html.php',
      1 => 1515151625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880768725a4f610bc8da11_70807088',
  'variables' => 
  array (
    'categories' => 0,
    'id' => 0,
    'subdir' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4f610bcdbdb7_89130467',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4f610bcdbdb7_89130467')) {
function content_5a4f610bcdbdb7_89130467 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1880768725a4f610bc8da11_70807088';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container jumbotron">
<h1>Lista kateogrii</h1>
<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
<?php if (count($_smarty_tpl->tpl_vars['categories']->value) === 0) {?>
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
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
            <tr>
              <th>
                <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.
              </th>
              <th>
                test
              </th>
              <th>
                <a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Category/editForm/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Edit</a>
              </th>
              <th>
                <a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Category/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">usuń</a>
              </th>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
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
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddCategory">Dodaj kategorie</button>
    </div>
  </div>

<!-- Modal section -->
  <div id="modalAddCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
            <translate>Add new category</translate>
          </h4>
        </div>
        <div class="modal-body">
          <form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Category/add" method="post" id="categoryForm">
            <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" required>
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
js/CategoryFormCheck.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>