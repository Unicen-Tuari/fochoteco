<?php /* Smarty version 3.1.27, created on 2015-09-23 21:17:30
         compiled from "C:\Xampp\htdocs\fochoteco\templates\dados.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:94775602facaabc767_91491188%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b39bf67682223f5725a523d88f4dbc72bbcfdb1' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\dados.tpl',
      1 => 1443031942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94775602facaabc767_91491188',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5602facaae76f4_89748190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602facaae76f4_89748190')) {
function content_5602facaae76f4_89748190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '94775602facaabc767_91491188';
?>
<div class="container dados">
  <div class="row">
    <div class="col-md-offset-4 col-md-5">
    	<h1> Blackjack: Dados </h1>
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">

    <div class="col-md-3">
    	<h3>Cantidad de Dados:  </h3>
    	<input id="cantidadDados" type="text"/> </br><br><br>
      <button id="tablero">Tirar dados</button><br><br><br>
      <button id="terminarTurno">Terminar turno</button>
    </div>

    <div class="col-md-offset-6 col-md-3">
      <h3>Valores:</h3>
    	<input type="text" id="input-valores">
    	<h3>Suma:</h3>
    	<input type="text" id="input-suma">
   </div>

  </div>

  <div class="row imgdado">
    <div class="col-md-offset-4 col-md-4">
    	<img class="img-responsive" src="images/dados/dados.png" alt="">
    </div>
    <div class="col-md-4"></div>
  </div>

  <?php echo '<script'; ?>
 src="js/juego.js"><?php echo '</script'; ?>
>
</div>
<?php }
}
?>