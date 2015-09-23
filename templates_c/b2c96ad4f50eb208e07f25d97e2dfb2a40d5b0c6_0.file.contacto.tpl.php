<?php /* Smarty version 3.1.27, created on 2015-09-23 21:17:01
         compiled from "C:\Xampp\htdocs\fochoteco\templates\contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:226525602faad3eb9a1_08041253%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c96ad4f50eb208e07f25d97e2dfb2a40d5b0c6' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\contacto.tpl',
      1 => 1443031942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226525602faad3eb9a1_08041253',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5602faad41a7a7_12684863',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602faad41a7a7_12684863')) {
function content_5602faad41a7a7_12684863 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '226525602faad3eb9a1_08041253';
?>
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <div class="embed-responsive googlemap">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12763.572456771568!2d-60.32595658386382!3d-36.89290519306515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1434908987026"></iframe>
        </div>
      </div>
    </div>
    <div class="row contacto">
      <div class="col-md-offset-5 col-md-3 formcontacto" id="ocultarform">
        <div class="form-group">
          <br><br>
          <h3> ESCRIBINOS TU CONSULTA </h3>
          <br><br>
          <label>Su nombre (requerido)</label>
          <input type="text" class="form-control" placeholder="Jane Doe"><br>
          <label>Su e-mail (requerido)</label>
          <input type="email" class="form-control" placeholder="Email"><br>
          <label>Asunto</label>
          <input type="text" class="form-control" placeholder=""><br>
          <label>Mensaje</label>
          <textarea class="form-control" rows="5"></textarea><br>
          <button type="button" class="btn btn-default btn-send">ENVIAR</button>
        </div>
      </div>
      <div class="col-md-offset-8 col-md-4 formcontacto2">
        <br><br><h1> CONTACTANOS! </h3><br><br>
        <h3> ESCRIBINOS A NUESTRO EMAIL </h3><br>
        <a href="mailto:limalimonideas@gmail.com">limalimonideas@gmail.com</a><br><br>
        <h3> VISITANOS </h3>
        <p> Coronel Suarez 9999, Olavarría,<br>Buenos Aires </p>
        <h3> LLAMANOS </h3>
        <p> +54 2284 999999 </p>
        <button onclick="toggle('ocultarform')" type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        </button>
      </div>
    </div>

  </div>
<?php }
}
?>