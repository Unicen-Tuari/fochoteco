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
elseif ($_REQUEST[ConfigApp::$SECTION]=="dropdown") {
  $controlador->mostrarDropdown(ConfigApp::$DROPDOWN);
}
elseif ($_REQUEST[ConfigApp::$SECTION]=="noticia" && isset($_REQUEST['id'])) {
  $controlador->mostrarNoticia($_REQUEST[ConfigApp::$SECTION],$_REQUEST['id']);
}
else
 {
  $controlador->showSection($_REQUEST[ConfigApp::$SECTION]);
}

?>
