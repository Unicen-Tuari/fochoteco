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

			function mostrarNoticia($section, $id)
			{

	    $this->view->showFullNew($section, $this->model->getFullNew($id));
	  	}

			function mostrarDropdown($section)
			{
				$this->view->showDropdown($section, $this->model->getCategories());
			}
			function agregarNuevaCategoria()
			{
				$this->model->addCategoria($_REQUEST['nuevaCategoria']);			 //Id del input de la nueva categoria a agregar
			}
			function agregarNuevaNoticia()
			{
				//Comprobar si estan seteados.
				$this->model->addNew($_REQUEST['dropdown'], $_REQUEST['nuevoTitulo'], $_REQUEST['nuevaDescripcion'], $_REQUEST['nuevaNoticia'], $_FILES['nuevasImgsNoticia']);
			}
	}

?>
