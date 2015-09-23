<?php /* Smarty version 3.1.27, created on 2015-09-23 21:15:48
         compiled from "C:\Xampp\htdocs\fochoteco\templates\nosotros.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17925602fa643d37a2_02620070%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27029c2ec8983270e12e3bbf30718f7278b343b' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\nosotros.tpl',
      1 => 1443031942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17925602fa643d37a2_02620070',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5602fa64411fb6_96869373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602fa64411fb6_96869373')) {
function content_5602fa64411fb6_96869373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17925602fa643d37a2_02620070';
?>
<div class="container">
  <div class="row">

    <div class="col-md-5 texthome fadeIn">
      <h4> LEADERS IN GRAPHIC DESIGN </h5>
      <h1> CONOCENOS </h1>
      <p>Lima Limón es una empresa de servicios publicitarios integrales que proporciona a sus clientes productos y servicios de gran valor, innovadores, a través del desarrollo humano mediante la ejecución de sus trabajos en la industria para la aplicación y administración de ésta tecnología logrando el mejor aprovechamiento de la misma</p>
      <a id="servicios" href="servicios.html" class="glyphicon glyphicon-wrench hvr-grow" title="Servicios"></a>
      <a id="portolio" href="portfolio.html" class="glyphicon glyphicon-briefcase hvr-grow" title="Portfolio"></a>
      <a id="contacto" href="contacto.html" class="glyphicon glyphicon-edit hvr-grow" title="Contacto"></a>
    </div>

    <div class="col-md-offset-1 col-md-5 imghome fadeIn">
      <img class="img-responsive" src="images/portada3_opt.png" alt=""><br>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/ej1.jpg" alt="">
          </div>
          <div class="item">
            <img src="images/ej2.jpg" alt="">
          </div>
          <div class="item">
            <img src="images/ej3.jpg" alt="">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>
</div>
<?php }
}
?>