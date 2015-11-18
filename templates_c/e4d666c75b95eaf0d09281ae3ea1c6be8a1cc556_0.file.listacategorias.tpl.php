<?php /* Smarty version 3.1.27, created on 2015-11-17 13:47:07
         compiled from "C:\Xampp\htdocs\fochoteco\templates\listacategorias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29685564b21cb484501_18948429%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d666c75b95eaf0d09281ae3ea1c6be8a1cc556' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\listacategorias.tpl',
      1 => 1447764331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29685564b21cb484501_18948429',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b21cb6264e6_39519935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b21cb6264e6_39519935')) {
function content_564b21cb6264e6_39519935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29685564b21cb484501_18948429';
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
</p>
  <p>Nombre categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre_categoria"];?>

    <a class="glyphicon glyphicon-trash eliminarCategoria" href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"></a>
  </p>
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