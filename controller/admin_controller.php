<?php

REQUIRE_ONCE('controller/controller.php');

class Admin_controller extends Controller {

  function __construct(){
    parent::__construct();

    session_start();
    if (!isset($_SESSION['email'])){
      header("Location: index.php?section=login");
      die();
    }else {
      $tiempo_sesion = time() - $_SESSION['tiempo'];
      if($tiempo_sesion > 600)
      {
          session_destroy();
      }
    }
  }

  function mostrarAdmin()
  {
    $this->view->showTemplate2('admin', $_SESSION['email']);
  }

}

?>
