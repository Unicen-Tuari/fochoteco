<?php

require_once 'categoria_api.php';
require_once 'noticia_api.php';

session_start();
if(isset($_SESSION['tiempo']) ) {
$tiempo_sesion = time() - $_SESSION['tiempo'];
    if($tiempo_sesion > 600)
    {
        session_destroy();
    }
}
if (isset($_SESSION['email'])){
$url_elements = explode('/', rtrim($_REQUEST['parametros'], '/'));
if(count($url_elements)>0){
  $api_name = ucfirst($url_elements[0]) . 'Api';
  if (!($api_name == 'Api') && class_exists($api_name)) {
      $api = new $api_name($_REQUEST['parametros']);
      echo $api->processAPI();
      return;
  }
}

echo "No endpoint ".$url_elements[0];
}
else {
  echo  "Expiro el tiempo de la sesion";
}
 ?>
