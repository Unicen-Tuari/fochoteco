<?php /* Smarty version 3.1.27, created on 2015-11-16 13:29:06
         compiled from "C:\Xampp\htdocs\fochoteco\templates\listacategorias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:93915649cc12523545_94370958%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d666c75b95eaf0d09281ae3ea1c6be8a1cc556' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\listacategorias.tpl',
      1 => 1447676173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93915649cc12523545_94370958',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5649cc1257d2d1_85846847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5649cc1257d2d1_85846847')) {
function content_5649cc1257d2d1_85846847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '93915649cc12523545_94370958';
?>
<label class="control-label" for="nombre">Categorias</label>
<ul class="col-sm-12">
<?php
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
<li>
  <p>Id categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
</p><p>Nombre categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre_categoria"];?>

  <a class="glyphicon glyphicon-trash eliminarCategoria" href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"></a></p>
</li>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
</ul>

<?php echo '<script'; ?>
 src="js/eliminarCategoria.js"><?php echo '</script'; ?>
>
<?php }
}
?>