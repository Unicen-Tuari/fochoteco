<?php

REQUIRE_ONCE('config/config_app.php');
REQUIRE_ONCE('controller/controller.php');
REQUIRE_ONCE('controller/admin_controller.php');
REQUIRE_ONCE('controller/login_controller.php');

$controlador = new Controller();

if(!array_key_exists(ConfigApp::$SECTION,$_REQUEST))
{
  $controlador->showSection(ConfigApp::$SECTION_HOME);
}
else {
		switch($_REQUEST[ConfigApp::$SECTION]){

      case ConfigApp::$NOVEDADES:
      // Carga las novedades en la pagina
        $controlador->mostrarNovedades();
        break;

      case ConfigApp::$NOTICIA:
      // Muestra la noticia completa
        $controlador->mostrarNoticia();
        break;

      case ConfigApp::$ACTION_LOGIN:
        $loginController = new LoginController();
        $loginController->login();
        break;

      case ConfigApp::$ACTION_LOGOUT:
        $loginController = new LoginController();
        $loginController->logout();
        break;

      case ConfigApp::$ENVIAR_MAIL:
        $controlador->mandarMail();
        break;

      case  ConfigApp::$ADMIN:
      // Carga el tempalte admin de la pagina
        $adm_controller = new Admin_controller();
        $adm_controller->mostrarAdmin();
        break;

      default:
        $controlador->showSection($_REQUEST[ConfigApp::$SECTION]);
        break;

      }
  }

?>
