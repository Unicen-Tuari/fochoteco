<?php
include_once 'view/view.php';
include_once 'model/usuario_model.php';

class LoginController {

  private $model;
  private $view;

  function __construct() {
    $this->model = new UsuarioModel();
    $this->view = new View();
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    die();
  }

  function login(){
    if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"]))
    {
      $email = $_REQUEST["txtEmail"];
      $pass = $_REQUEST["txtPassword"];

      $usuario = $this->model->getUsuario($email);

      if((sha1($pass) === $usuario["password"]))
      {
        session_start();
        $_SESSION['tiempo'] = time();
        $_SESSION["email"] = $email;
        header("Location: index.php?section=admin");
        die();
      }
      else {
        // $this->view->mostrarError("Usuario y password invalidos");
      }
    }

    $this->view->showTemplate('login');
  }

}

?>
