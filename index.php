<?php

include_once('libs/Smarty.class.php');

$templateEngine = new Smarty();
$templateEngine->debugging = false;

if(!array_key_exists("v",$_REQUEST))
{
  $templateEngine->display('home.tpl');
}

?>
