<?php

REQUIRE_ONCE('Controller/controller.php');
REQUIRE_ONCE('Config/config_app.php');

$controlador = new Controller();

if(!array_key_exists(ConfigApp::$SECTION,$_REQUEST))
{
  $controlador->showSection(ConfigApp::$SECTION_HOME);
}
elseif (($_REQUEST[ConfigApp::$SECTION]=="novedades-admin") || ($_REQUEST[ConfigApp::$SECTION]=="novedades"))
{
  $controlador->mostrarNovedades($_REQUEST[ConfigApp::$SECTION]);
}
else
 {
  $controlador->showSection($_REQUEST[ConfigApp::$SECTION]);
}

?>
