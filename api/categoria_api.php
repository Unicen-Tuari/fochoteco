<?php
require_once 'api_base.php';
require_once '../model/categoria_model.php';

class CategoriaApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->model = new Categoria_model();
  }

  function categoria(){
    switch ($this->method) {
      case 'GET':
        if(count($this->args) < 1){
          return $this->model->getCategories();
        }
        else {
            return $this->model->getNameCat($this->args[0]);
          };
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->model->deleteCategoria($this->args[0]);
        break;
      case 'POST':
        if(isset($_POST['categoria'])) return $this->model->addCategoria($_POST['categoria']);
        break;
      case 'PUT':
        if(count($this->args) > 0) return $this->model->updateCategoria($this->args[0], $this->data->nombre);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
