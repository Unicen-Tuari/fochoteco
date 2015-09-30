<?php /* Smarty version 3.1.27, created on 2015-09-30 23:23:09
         compiled from "C:\Xampp\htdocs\fochoteco\templates\noticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24581560c52bdf28674_06259175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfedcd75aa883fbf693581c0067e372ff00f95b' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\noticia.tpl',
      1 => 1443630186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24581560c52bdf28674_06259175',
  'variables' => 
  array (
    'novedad' => 0,
    'key' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c52be09cf78_98550467',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c52be09cf78_98550467')) {
function content_560c52be09cf78_98550467 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24581560c52bdf28674_06259175';
?>
<div class="container-fluid">
  <div class="row">
    <div class="fullNew col-sm-offset-1 col-sm-10">
        <div class="col-sm-offset-1 col-sm-10">
          <div class="col-sm-2">
          <img src="<?php echo $_smarty_tpl->tpl_vars['novedad']->value['imagenes'][0];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['novedad']->value['imagenes'][0];?>
" class="img-thumbnail"/>
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
           <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" class="imgsNoticia"/>
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