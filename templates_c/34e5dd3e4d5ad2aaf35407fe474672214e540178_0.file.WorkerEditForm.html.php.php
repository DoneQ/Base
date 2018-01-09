<?php
/* Smarty version 3.1.30, created on 2018-01-09 01:40:34
  from "D:\xampp\htdocs\Base\templates\WorkerEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a540f829fda50_66651646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34e5dd3e4d5ad2aaf35407fe474672214e540178' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\WorkerEditForm.html.php',
      1 => 1515458300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a540f829fda50_66651646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
<h1>
  <translate>Edit worker</translate>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['workers']->value)) {?>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Worker/edit" method="post" id="workerForm">
  <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workers']->value['id'];?>
">
  <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['workers']->value['name'];?>
" required>
            </div>
     <div class="form-group">
              <label for="sname">
                <translate>Surname</translate>
              </label>
              <input type="text" class="form-control" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['workers']->value['sname'];?>
" required>
            </div>
     <div class="form-group">
              <label for="phone">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['workers']->value['phone'];?>
" required>
            </div>
     <div class="form-group">
              <label for="mail">
                <translate>E-Mail</translate>
              </label>
              <input type="text" class="form-control" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['workers']->value['mail'];?>
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
