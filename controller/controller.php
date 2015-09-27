<?php

REQUIRE_ONCE('view/view.php');
REQUIRE_ONCE('model/model.php');

	class Controller
  {
			private $view;
			private $model;

			function __construct()
	    {
				$this->view = new View();
				$this->model = new Model();
			}

			function showSection($section)
	    {
				$this->view->showTemplate($section);
			}

			function mostrarNovedades($section)
			{
	    $this->view->showNews($section, $this->model->getNews());
	  	}

			function mostrarDropdown($section)
			{
				$this->view->showDropdown($section, $this->model->getCategories());
			}
	}

?>
