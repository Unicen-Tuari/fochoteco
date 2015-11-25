<?php

REQUIRE_ONCE('view/view.php');
REQUIRE_ONCE('config/config_app.php');
REQUIRE_ONCE('model/model.php');
REQUIRE_ONCE('model/categoria_model.php');
REQUIRE_ONCE('model/novedad_model.php');
REQUIRE_ONCE('model/contacto_model.php');

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
				if (isset($_REQUEST['id'])){
					$this->view->showNews($_REQUEST[ConfigApp::$SECTION], $this->nov_model->getNews($_REQUEST['id']), $this->cat_model->getCategories());
				}
				elseif ($_REQUEST[ConfigApp::$SECTION] == 'admin'){
					$this->view->showNews($_REQUEST[ConfigApp::$SECTION], $this->nov_model->getNews());
	  		}
				else {
					$this->view->showNews($_REQUEST[ConfigApp::$SECTION], $this->nov_model->getNews(), $this->cat_model->getCategories());
				}
			}

			function mostrarNoticia()
			{
	    $this->view->showFullNew($_REQUEST[ConfigApp::$SECTION], $this->nov_model->getFullNew($_REQUEST['id']));
	  	}

			function mandarMail()
			{
				$contacto_model = new ContactoModel();
				print_r($_REQUEST);
				$contacto_model->enviarEmail($_REQUEST["email"], $_REQUEST["subject"], $_REQUEST["message"]);
			}
	}


?>
