<?php /* Smarty version 3.1.27, created on 2015-09-30 23:14:46
         compiled from "C:\Xampp\htdocs\fochoteco\templates\dropdown.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4206560c50c69c3c20_31258537%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03906efed1ebceaf4d266c66ad4e527870ba27dc' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\dropdown.tpl',
      1 => 1443510962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4206560c50c69c3c20_31258537',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c50c6a3da28_26725859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c50c6a3da28_26725859')) {
function content_560c50c6a3da28_26725859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4206560c50c69c3c20_31258537';
if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
  <option value="0">Categorias</option>
  <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
">
    <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre_categoria"];?>

    </option>
  <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
<?php } else { ?>
  <option value="0">No Existen Categorias</option>
<?php }

}
}
?>