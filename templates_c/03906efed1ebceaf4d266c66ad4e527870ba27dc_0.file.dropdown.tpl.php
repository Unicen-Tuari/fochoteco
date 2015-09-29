<?php /* Smarty version 3.1.27, created on 2015-09-29 16:13:31
         compiled from "C:\Xampp\htdocs\fochoteco\templates\dropdown.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9751560a9c8b7680a0_55364566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03906efed1ebceaf4d266c66ad4e527870ba27dc' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\dropdown.tpl',
      1 => 1443535974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9751560a9c8b7680a0_55364566',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a9c8b87d665_03366153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a9c8b87d665_03366153')) {
function content_560a9c8b87d665_03366153 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9751560a9c8b7680a0_55364566';
?>
<!-- <?php
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
?> -->


<?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
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