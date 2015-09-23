<?php /* Smarty version 3.1.27, created on 2015-09-23 21:16:55
         compiled from "C:\Xampp\htdocs\fochoteco\templates\servicios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110655602faa7df8a02_34575173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c881f4714a469e1756b9ed6ca5bf42e44547f2d4' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\servicios.tpl',
      1 => 1443031942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110655602faa7df8a02_34575173',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5602faa7e46c14_38694415',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602faa7e46c14_38694415')) {
function content_5602faa7e46c14_38694415 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110655602faa7df8a02_34575173';
?>
<div class="container">
  <div class="row">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <td>Servicio</td>
            <td>Tamaño</td>
            <td>Precio</td>
            <td>Imagen</td>
          </tr>
        </thead>
        <tbody id="bodytabla">

        </tbody>
        <tfoot>
          <tr>
            <td>
              <form class="form-inline">
                <input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
              </form>
            </td>
            <td>
              <form class="form-inline">
                <input type="text" class="form-control" id="tamanio" placeholder="Tamaño">
              </form>
            </td>
            <td>
              <form class="form-inline">
                <input type="text" class="form-control" id="precio" placeholder="Precio">
              </form>
            </td>
            <td>
              <form class="form-inline">
                <input type="text" class="form-control" id="imagentabla" placeholder="Imagen">
              </form>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  <button type="submit" class="btn" id="btn-agregar">Agregar</button>
  <!--<button type="submit" class="btn">Actualizar</button> -->

  <?php echo '<script'; ?>
 src="js/tabla.js"><?php echo '</script'; ?>
>
  </div>
</div>
<?php }
}
?>