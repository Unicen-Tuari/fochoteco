<?php

include_once('libs/Smarty.class.php');

$templateEngine = new Smarty();
$templateEngine->debugging = false;

if(!array_key_exists("nav",$_REQUEST))
{
  $templateEngine->display('home.tpl');
}
elseif ($_REQUEST["nav"] === "nosotros")
  {
    $templateEngine->display('nosotros.tpl');
  }
  elseif ($_REQUEST["nav"] === "servicios")
    {
      $templateEngine->display('servicios.tpl');
    }
    elseif ($_REQUEST["nav"] === "portfolio")
      {
        $templateEngine->display('portfolio.tpl');
      }
      elseif ($_REQUEST["nav"] === "contacto")
        {
          $templateEngine->display('contacto.tpl');
        }
        elseif ($_REQUEST["nav"] === "dados")
          {
            $templateEngine->display('dados.tpl');
          }

?>
