<?php /* Smarty version 3.1.27, created on 2015-09-30 23:14:46
         compiled from "C:\Xampp\htdocs\fochoteco\templates\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22743560c50c666ea15_45692685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a60907b23a1dbee2e55dcd96506e328459ebfa' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\admin.tpl',
      1 => 1443636141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22743560c50c666ea15_45692685',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c50c66e8819_80660076',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c50c66e8819_80660076')) {
function content_560c50c66e8819_80660076 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22743560c50c666ea15_45692685';
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

    <form id="imgAjax">
      <input type="file"  id="imagesToUpload2" name="imagesToUpload2[]" multiple>
    </form>

    <div id="contadmin" class="col-sm-6">

    </div>

  <div class="col-sm-5 panelAdmin">

    <form class="form-horizontal" id="formAgregarNoticia">

              <select id="dropdown" name="dropdown">
              </select>

              <div class="form-group">
                <div class="col-sm-12">
                  <h4>Titulo</h4>
                  <input type="text" id="nuevoTitulo" name="nuevoTitulo" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <h4>Descripcion</h4>
                  <textarea class="form-control" id="nuevaDescripcion" name="nuevaDescripcion" rows="1"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <h4>Noticia</h4>
                  <textarea class="form-control" id="nuevaNoticia" name="nuevaNoticia" rows="5"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="imagesToUpload">Imagenes noticia: </label>
                <input type="file" name="nuevasImgsNoticia[]" id="nuevasImgsNoticia" multiple/>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                  <button type="submit" id="agregarNoticiaNueva" name="agregarNoticiaNueva" class="btn btn-default">Agregar noticia</button>
                </div>
              </div>
    </form>


    <form id="formAgregarCategoria">
      <div class="form-group">
      <h4>Agregar categoria: </h4>
      <input type="text" name="nuevaCategoria" id="nuevaCategoria" class="form-control">
      </div>
      <div class="form-group">
        <div class="col-sm-offset-10 col-sm-2">
          <button type="submit" name="agregarNuevaCategoria" id="agregarNuevaCategoria" class="btn btn-default">Agregar</button>
        </div>
      </div><br><br><br>
    </form>

  </div>

  <div id="listacategorias" class="col-sm-5" style="background-color: white; margin-left: 10px; margin-top: 10px; border-radius:5px;">

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