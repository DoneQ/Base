<?php
/* Smarty version 3.1.30, created on 2018-01-09 01:36:18
  from "D:\xampp\htdocs\Base\templates\UserEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a540e829182a5_60313142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f747b657dc1fda324bc9d7b8d4a828e4f5f36db' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\UserEditForm.html.php',
      1 => 1515458169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5a540e829182a5_60313142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container jumbotron">
    <h1>
        <translate>Edit user</translate>
    </h1>
    <?php if (isset($_smarty_tpl->tpl_vars['users']->value)) {?>
    <form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
User/edit" method="post" id="userForm">
        <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
">
        <div class="form-group">
            <label for="idClient">
                <translate>Client ID</translate>
            </label>
            <input type="text" class="form-control" name="idClient" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['idClient'];?>
" required>
        </div>
        <div class="form-group">
            <label for="idWorker">
                <translate>Worker ID</translate>
            </label>
            <input type="text" class="form-control" name="idWorker" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['idWorker'];?>
" required>
        </div>
        <div class="form-group">
            <label for="login">
                <translate>Login</translate>
            </label>
            <input type="text" class="form-control" name="login" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['login'];?>
" required>
        </div>
        <div class="form-group">
            <label for="password">
                <translate>Password</translate>
            </label>
            <input type="text" class="form-control" name="password" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['password'];?>
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
