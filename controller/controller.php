<?php

REQUIRE_ONCE('view/view.php');
REQUIRE_ONCE('model/model.php');
REQUIRE_ONCE('model/categoria_model.php');
REQUIRE_ONCE('model/novedad_model.php');

	class Controller
  {
			protected $view;
			protected $model;

			function __construct()
	    {
				$this->view = new View();
				$this->model = new Model();
				$this->cat_model = new Categoria_model();
				$this->nov_model = new Novedad_model();
			}

			function showSection($section)
	    {
				$this->view->showTemplate($section);
			}

			function mostrarNovedades()
			{
	    $this->view->showNews($_REQUEST[ConfigApp::$SECTION], $this->nov_model->getNews());
	  	}

			function mostrarNoticia()
			{
	    $this->view->showFullNew($_REQUEST[ConfigApp::$SECTION], $this->nov_model->getFullNew($_REQUEST['id']));
	  	}
	}

?>
