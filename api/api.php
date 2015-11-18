<?php

//  $url_elements = explode('/', rtrim($_REQUEST['request'], '/'));
// if(count($url_elements)>0){
//   $api_name = ucfirst($url_elements[0]) . 'Api';
//   if (!($api_name == 'Api') && class_exists($api_name)) {
//       $api = new $api_name($_REQUEST['request']);
//       echo $api->processAPI();
//       return;
//   }
// }
//
// echo "No endpoint ".$url_elements[0];

require_once 'categoria_api.php';

$categoriaAPI = new CategoriaApi($_REQUEST['parametros']);
echo $categoriaAPI->processAPI();


 ?>
