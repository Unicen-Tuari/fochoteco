<?php /* Smarty version 3.1.27, created on 2015-11-23 17:57:04
         compiled from "C:\Xampp\htdocs\fochoteco\templates\novedades-admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26222565345606f2952_89825231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a411f8c91e134420cfd2eadc78b4f8d82864153' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\novedades-admin.tpl',
      1 => 1448297821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26222565345606f2952_89825231',
  'variables' => 
  array (
    'novedades' => 0,
    'novedad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565345608522a3_78310088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565345608522a3_78310088')) {
function content_565345608522a3_78310088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26222565345606f2952_89825231';
?>
  <div class="row admNews" >
      <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['novedades']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['novedad'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['novedad']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['novedad']->value) {
$_smarty_tpl->tpl_vars['novedad']->_loop = true;
$foreach_novedad_Sav = $_smarty_tpl->tpl_vars['novedad'];
?>

        <li class="list-group-item col-sm-12">

          <div class="col-sm-3">
          <img src='<?php echo $_smarty_tpl->tpl_vars['novedad']->value["imagenes"];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['novedad']->value["imagenes"];?>
' class="img-thumbnail"/>
          <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="<?php echo $_smarty_tpl->tpl_vars['novedad']->value['id_novedad'];?>
"></a>
          <a class="glyphicon glyphicon-trash eliminarNovedad" href="<?php echo $_smarty_tpl->tpl_vars['novedad']->value['id_novedad'];?>
"></a>
          </div>

          <div class="col-sm-9">
            <h6> Categoria: <?php echo $_smarty_tpl->tpl_vars['novedad']->value['fk_id_categoria'];?>
 </h6>
            <h3><?php echo $_smarty_tpl->tpl_vars['novedad']->value['titulo'];?>
</h3>
            <?php echo $_smarty_tpl->tpl_vars['novedad']->value['descripcion'];?>

            <button value=<?php echo $_smarty_tpl->tpl_vars['novedad']->value['id_novedad'];?>
 class="verNoticia"><h6> Ver noticia completa </h6></button>
          </div>
        </li>

        <?php
$_smarty_tpl->tpl_vars['novedad'] = $foreach_novedad_Sav;
}
?>
        </ul>
  </div>

<?php echo '<script'; ?>
 src="js/noticiaCompleta.js"><?php echo '</script'; ?>
>
<?php }
}
?>