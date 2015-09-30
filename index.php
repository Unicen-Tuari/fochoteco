<?php

REQUIRE_ONCE('Controller/controller.php');
REQUIRE_ONCE('Config/config_app.php');

$controlador = new Controller();

if(!array_key_exists(ConfigApp::$SECTION,$_REQUEST))
{
  $controlador->showSection(ConfigApp::$SECTION_HOME);
}
elseif ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$AGREGAR_IMAGENES) {
  $controlador->agregarImagenes();
}
elseif ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$BORRAR_NOVEDAD) {
  $controlador->borrarNovedad();
}
elseif (($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$NOVEDADES_ADMIN) || ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$NOVEDADES))
{
  $controlador->mostrarNovedades($_REQUEST[ConfigApp::$SECTION]);
}
elseif (($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$DROPDOWN) || ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$LISTA_CATEGORIAS))
{
  $controlador->mostrarDropdown($_REQUEST[ConfigApp::$SECTION]);
}
elseif ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$NOTICIA && isset($_REQUEST['id'])) {
  $controlador->mostrarNoticia($_REQUEST[ConfigApp::$SECTION],$_REQUEST['id']);
}
elseif ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$AGREGAR_NOTICIA) {
  $controlador->agregarNuevaNoticia();
}
elseif ($_REQUEST[ConfigApp::$SECTION]==ConfigApp::$AGREGAR_CATEGORIA) {
  $controlador->agregarNuevaCategoria();
}
else
 {
  $controlador->showSection($_REQUEST[ConfigApp::$SECTION]);
}

?>
