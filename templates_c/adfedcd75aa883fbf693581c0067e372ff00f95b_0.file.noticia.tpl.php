<?php /* Smarty version 3.1.27, created on 2015-11-25 15:34:03
         compiled from "C:\Xampp\htdocs\fochoteco\templates\noticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8675655c6db409f78_32764645%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfedcd75aa883fbf693581c0067e372ff00f95b' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\noticia.tpl',
      1 => 1448389225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8675655c6db409f78_32764645',
  'variables' => 
  array (
    'novedad' => 0,
    'key' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5655c6db4dcea9_18524571',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5655c6db4dcea9_18524571')) {
function content_5655c6db4dcea9_18524571 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8675655c6db409f78_32764645';
?>
<div class="container-fluid">
  <div class="row">
    <div class="fullNew col-sm-offset-1 col-sm-10">
        <div class="col-sm-offset-1 col-sm-10">
          <div class="col-sm-2">
          <img src='<?php echo $_smarty_tpl->tpl_vars['novedad']->value["imagenes"][0]["ruta"];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['novedad']->value["imagenes"][0]["ruta"];?>
' class="img-thumbnail"/>
          </div>

           <h1><?php echo $_smarty_tpl->tpl_vars['novedad']->value['titulo'];?>
</h2>
           <?php echo $_smarty_tpl->tpl_vars['novedad']->value['noticia'];?>


           <?php
$_from = $_smarty_tpl->tpl_vars['novedad']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
           <?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
           <div class="col-sm-4">
           <img src='<?php echo $_smarty_tpl->tpl_vars['imagen']->value["ruta"];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['imagen']->value["ruta"];?>
' class="imgsNoticia"/>
           </div>
           <?php }?>
           <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
           <h6>Fecha de publicacion: <?php echo $_smarty_tpl->tpl_vars['novedad']->value['fecha_publicacion'];?>
</h6>
        </div>

      </div>
  </div>
</div>
<?php }
}
?>