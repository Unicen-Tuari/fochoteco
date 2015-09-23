<?php /* Smarty version 3.1.27, created on 2015-09-23 20:51:02
         compiled from "C:\Xampp\htdocs\fochoteco\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179985602f49689e225_07279298%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2083b1beae398c9c8e6e5532be53dc7ff2174c6' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\home.tpl',
      1 => 1443034261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179985602f49689e225_07279298',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5602f4968e08b3_66953138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602f4968e08b3_66953138')) {
function content_5602f4968e08b3_66953138 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '179985602f49689e225_07279298';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/pest.png">
    <title>Lima & Limón</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body id="bodyhome">
  <nav class="navbar navbar-default">   <!-- navbar-static-top -->
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><img alt="Brand" src="images/port5.png"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li id="nosotros" class="active"><a href="#" > NOSOTROS <span class="sr-only">(current)</span></a></li>
          <li id="servicios"><a href="#" > SERVICIOS </a></li>
          <li id="portfolio"><a href="#"> PORTFOLIO </a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li id="contacto"><a href="#"> CONTACTO  </a></li>
          <li id="dados"><a href="">DADOS</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div id="conthome">
  </div>

  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
> <!-- jQuery -->
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/ajax.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>