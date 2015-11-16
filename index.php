<?php

REQUIRE_ONCE('controller/controller.php');
REQUIRE_ONCE('controller/admin_controller.php');
REQUIRE_ONCE('config/config_app.php');

$controlador = new Controller();
$adm_controller = new Admin_controller();

if(!array_key_exists(ConfigApp::$SECTION,$_REQUEST))
{
  $controlador->showSection(ConfigApp::$SECTION_HOME);
}
else {
		switch($_REQUEST[ConfigApp::$SECTION]){
			case ConfigApp::$AGREGAR_IMAGENES:
      // Agrega imagenes a una noticia
				$adm_controller->agregarImagenes();
				break;

			case ConfigApp::$BORRAR_NOVEDAD:
				$adm_controller->borrarNovedad();
				break;

      case ConfigApp::$BORRAR_CATEGORIA:
				$adm_controller->borrarCategoria();
				break;

      case ConfigApp::$NOVEDADES_ADMIN:
			// Carga las novedades en el panel de admin
				$controlador->mostrarNovedades();
				break;

      case ConfigApp::$AGREGAR_CATEGORIA:
			// Carga las novedades en el panel de admin
				$adm_controller->agregarNuevaCategoria();
				break;

      case ConfigApp::$NOVEDADES:
      // Carga las novedades en la pagina
        $controlador->mostrarNovedades();
        break;

      case ConfigApp::$DROPDOWN:
      // Carga el dropdown en el panel de admin
        $adm_controller->mostrarDropdown();
        break;

      case ConfigApp::$LISTA_CATEGORIAS:
      // Carga la lista de categorias en el panel admin
        $adm_controller->mostrarDropdown();
        break;

      case ConfigApp::$NOTICIA:
      // Muestra la noticia completa
        $controlador->mostrarNoticia();
        break;

      case ConfigApp::$AGREGAR_NOTICIA:
      // Agrega una nueva noticia a la DB
        $adm_controller->agregarNuevaNoticia();
        break;

      case ConfigApp::$ADMIN || ConfigApp::$SECTION_HOME:
      // Carga el tempalte de admin o el home de la pagina
        $controlador->showSection($_REQUEST[ConfigApp::$SECTION]); //NO ME ANDA AGARRANDO PARAM DESDE CONTROLLER.
        break;

      default:
        echo 'Pagina no encontrada';
        break;
      }
  }

?>
