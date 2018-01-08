<?php /* Smarty version 3.1.27, created on 2018-01-05 12:25:32
         compiled from "C:\xampp\htdocs\Base\templates\header.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:1707455715a4f60ac1c1a14_32868388%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f508b22c016576e4ddbdafbadcc4ccdfaca81ded' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Base\\templates\\header.html.php',
      1 => 1515151289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1707455715a4f60ac1c1a14_32868388',
  'variables' => 
  array (
    'subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4f60ac1cc375_63918832',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4f60ac1cc375_63918832')) {
function content_5a4f60ac1cc375_63918832 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1707455715a4f60ac1c1a14_32868388';
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
Category">Lista kategorii</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Address">Lista adresow</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Cargo">Lista zamowien</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
LoadOrd">Lista ladunkow</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Client">Lista klientow</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ContactDetails">Lista danych kontaktowych</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
User">Lista uzytkownikow</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Worker">Lista pracownikow</a></li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav><?php }
}
?>