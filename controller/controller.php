<?php

REQUIRE_ONCE('View/view.php');

	class Controller
  {
		private $view;

		function __construct()
    {
			$this->view = new View();
		}

		function showSection($section)
    {
			$this->view->showTemplate($section);
		}
	}

?>
