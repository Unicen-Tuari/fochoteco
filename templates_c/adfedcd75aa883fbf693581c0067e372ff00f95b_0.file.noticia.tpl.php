<?php /* Smarty version 3.1.27, created on 2015-09-29 06:03:32
         compiled from "C:\Xampp\htdocs\fochoteco\templates\noticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11995560a0d94f39242_57610443%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfedcd75aa883fbf693581c0067e372ff00f95b' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\noticia.tpl',
      1 => 1443499409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11995560a0d94f39242_57610443',
  'variables' => 
  array (
    'novedad' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a0d95070c47_08089393',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a0d95070c47_08089393')) {
function content_560a0d95070c47_08089393 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11995560a0d94f39242_57610443';
?>
<div class="container-fluid">
  <div class="row" style="margin-bottom: 40px;">
      <ul>

         <p>
           <?php echo $_smarty_tpl->tpl_vars['novedad']->value['titulo'];?>
<br>
           <?php echo $_smarty_tpl->tpl_vars['novedad']->value['noticia'];?>

           <?php echo $_smarty_tpl->tpl_vars['novedad']->value['fecha_publicacion'];?>

           <?php
$_from = $_smarty_tpl->tpl_vars['novedad']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
           <div class="col-sm-2" style="margin-top: 0.8%;">
           <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" class="img-thumbnail" style="margin: auto; width: 85%;"/>
           </div>
           <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
         </p>
      </ul>
  </div>
</div>
<?php }
}
?>