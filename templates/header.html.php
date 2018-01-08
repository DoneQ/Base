<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template with MVC</title>

    <!-- Bootstrap -->
    <link href="http://{$smarty.server.HTTP_HOST}{$subdir}css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="http://{$smarty.server.HTTP_HOST}{$subdir}css/starter-template.css" rel="stylesheet">
    
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
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Category">Lista kategoriiiiii</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Client">Lista klientów</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Halfproduct">Lista półproduktów</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}MealOrder">Lista danych zamówienia</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}OrderProduct">Lista zamówień</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Product">Lista produktów</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}User">Lista uzytkownikow</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Worker">Lista pracownikow</a></li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>