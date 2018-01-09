<?php
/* Smarty version 3.1.30, created on 2018-01-09 02:27:46
  from "D:\xampp\htdocs\Base\templates\header.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a541a92a23179_78390182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecf9142315c7e805cbc251ae9b2a7a2877559a16' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Base\\templates\\header.html.php',
      1 => 1515461263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a541a92a23179_78390182 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template with MVC</title>
    <!-- Bootstrap -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/starter-template.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <!--<nav class="navbar navbar-default navbar-static-top">-->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Category">Lista kategoriiiiii</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Client">Lista klientów</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Halfproduct">Lista półproduktów</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
MealOrder">Lista danych zamówienia</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
OrderProduct">Lista zamówień</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Product">Lista produktów</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
User">Lista uzytkownikow</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Worker">Lista pracownikow</a></li>
 <?php if (!isset($_smarty_tpl->tpl_vars['login']->value)) {?>
		      <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Access/logform">Zaloguj</a></li>
              <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddUser">Zarejestruj sie</button></li>
		    <?php } else { ?>
		      <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Access/logout">Wyloguj</a></li>
		    <?php }?>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- Modal section -->
  <div id="modalAddUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
            <translate>Add new user</translate>
          </h4>
        </div>
        <div class="modal-body">
          <form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
User/add" method="post" id="userForm">
            <div class="form-group">
              <label for="login">
                <translate>Login</translate>
              </label>
              <input type="text" class="form-control" name="login" required>
            </div>
            <div class="form-group">
              <label for="password">
                <translate>Password</translate>
              </label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label for="clientId">
                <translate>Client Id</translate>
              </label>
              <input type="text" class="form-control" name="idClient" required>
            </div>
            <div class="form-group">
              <label for="workerId">
                <translate>Worker Id</translate>
              </label>
              <input type="text" class="form-control" name="idWorker" required>
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
  <!--- /.modal-collapse ---><?php }
}
