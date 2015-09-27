<?php /* Smarty version 3.1.27, created on 2015-09-27 21:41:00
         compiled from "C:\Xampp\htdocs\fochoteco\templates\dropdown.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102465608464c7b6319_12757848%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03906efed1ebceaf4d266c66ad4e527870ba27dc' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\dropdown.tpl',
      1 => 1443382858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102465608464c7b6319_12757848',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5608464c7fc824_53037246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5608464c7fc824_53037246')) {
function content_5608464c7fc824_53037246 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '102465608464c7b6319_12757848';
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}

}
}
?>