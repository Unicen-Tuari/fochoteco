<?php /* Smarty version 3.1.27, created on 2015-09-29 16:12:07
         compiled from "C:\Xampp\htdocs\fochoteco\templates\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12372560a9c37dc5cd2_45072449%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a60907b23a1dbee2e55dcd96506e328459ebfa' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\admin.tpl',
      1 => 1443535922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12372560a9c37dc5cd2_45072449',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a9c37e00668_54017058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a9c37e00668_54017058')) {
function content_560a9c37e00668_54017058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12372560a9c37dc5cd2_45072449';
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

    <div id="conthome" class="col-sm-6">

    </div>

  <div class="col-sm-5" style="background-color: #ecf2ed; margin-top: 50px;margin-left: 10px; border-radius: 4px; ">

    <form class="form-horizontal" action="index.html" method="post" style="margin-top: 30px; text-align:center;">
      <div class="form-group">
          <div class="dropdown col-sm-4">
            <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              CATEGORIA
              <span class="caret"></span>
            </button>
            <ul id="dropdown" class="dropdown-menu" aria-labelledby="dropdownMenu1">

            </ul> -->
            <select id="dropdown" name="dropcat">

        		</select>
          </div>
      </div>
      <div class="form-group">
    <div class="col-sm-12">
      <h4>Titulo</h4>
      <input type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <h4>Descripcion</h4>
      <textarea class="form-control" rows="1"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <h4>Noticia</h4>
      <textarea class="form-control" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="imagesToUpload">Imagen portada: </label>
    <input type="file" name="" id=""/>
  </div>
  <div class="form-group">
    <label for="imagesToUpload">Imagenes noticia: </label>
    <input type="file" name="" id="" multiple/>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-9 col-sm-3">
      <button type="submit" class="btn btn-default">Agregar noticia</button>
    </div>
  </div>
    </form>


    <form class="" action="index.html" method="post">
      <div class="form-group">
      <h4>Agregar categoria: </h4>
      <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <div class="col-sm-offset-10 col-sm-2" style="margin-bottom: 20px;">
          <button type="submit" class="btn btn-default">Agregar</button>
        </div>
      </div>
    </form>

  </div>




  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
> <!-- jQuery -->
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/ajax-admin.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/dropdown.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>