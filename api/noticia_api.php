<?php
require_once 'api_base.php';
require_once '../model/novedad_model.php';

class NoticiaApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->model = new Novedad_model();
  }

  function noticia(){
    switch ($this->method) {

      case 'GET':
      if(count($this->args) < 1){
        return $this->model->getNews();
      }
      else {
        return $this->model->getFullNew($this->args[0]);
      }
        break;

      case 'DELETE':
      if(count($this->args) < 2){
        if(count($this->args) > 0) return $this->model->deleteNew($this->args[0]);
      }
      else {
        return $this->model->deleteImage($this->args[1]);
      }
        break;

      case 'POST':
      if(count($this->args) < 1){
        if(isset($_POST['dropdown']) && isset($_POST['nuevoTitulo']) && isset($_POST['nuevaDescripcion']) && isset($_POST['nuevaNoticia']) && isset($_POST['nuevaDescripcion']) && isset($_FILES['nuevasImgsNoticia']))
          {
          return $this->model->addNew($_POST['dropdown'], $_POST['nuevoTitulo'], $_POST['nuevaDescripcion'], $_POST['nuevaNoticia'], $_FILES['nuevasImgsNoticia']);
          }
      }
      else
          {
            return $this->model->addImgs($this->args[1], $_FILES['imagesToUpload2']);
          }
        break;

      case 'PUT':
      if(count($this->args) > 0)
        return $this->model->updateNoticia($this->args[0], $this->data->fk_id_categoria, $this->data->titulo, $this->data->descripcion, $this->data->noticia);
        break;

      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
