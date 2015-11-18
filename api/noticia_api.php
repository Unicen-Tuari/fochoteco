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
        return $this->model->getNews();
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->model->deleteNew($this->args[0]);
        break;
      case 'POST':
        if(isset($_POST['tarea'])) return $this->model->addNew($_POST['tarea']);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
