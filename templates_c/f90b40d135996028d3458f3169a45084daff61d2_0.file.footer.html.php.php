<?php
/* Smarty version 3.1.30, created on 2018-01-05 12:31:57
  from "C:\xampp\htdocs\Base\templates\footer.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f622de79613_67249009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90b40d135996028d3458f3169a45084daff61d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Base\\templates\\footer.html.php',
      1 => 1515151289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4f622de79613_67249009 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
	<?php if (isset($_smarty_tpl->tpl_vars['customScript']->value)) {?>
		<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['customScript']->value;?>
.js"><?php echo '</script'; ?>
>
	<?php }?>
  </body>
</html><?php }
}
