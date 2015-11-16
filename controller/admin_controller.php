<?php

class Admin_controller extends Controller {

  function mostrarDropdown()
  {
    $this->view->showDropdown($_REQUEST[ConfigApp::$SECTION], $this->cat_model->getCategories());
  }

  function agregarNuevaCategoria()
  {
    if (isset($_REQUEST['nuevaCategoria'])){
      $this->cat_model->addCategoria($_REQUEST['nuevaCategoria']);			 //Id del input de la nueva categoria a agregar
    }
  }

  function agregarNuevaNoticia()
  {
    if(isset($_REQUEST['dropdown']) && isset($_REQUEST['nuevoTitulo']) && isset($_REQUEST['nuevaDescripcion']) && isset($_REQUEST['nuevaNoticia']) && isset($_REQUEST['nuevaDescripcion']) && isset($_FILES['nuevasImgsNoticia']))
       {
         $this->nov_model->addNew($_REQUEST['dropdown'], $_REQUEST['nuevoTitulo'], $_REQUEST['nuevaDescripcion'], $_REQUEST['nuevaNoticia'], $_FILES['nuevasImgsNoticia']);
       }
  }

  function agregarImagenes()
  {
    $this->nov_model->addImgs($_REQUEST['id'],$_FILES["imagesToUpload2"]);
  }

  function borrarNovedad(){
    if(isset($_REQUEST['id'])){
      $this->nov_model->deleteNew($_REQUEST['id']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
  }

  function borrarCategoria(){
    if(isset($_REQUEST['id'])){
      $this->cat_model->deleteCategoria($_REQUEST['id']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
  }

}

?>
