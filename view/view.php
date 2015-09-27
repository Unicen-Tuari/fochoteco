<?php

REQUIRE_ONCE ('libs/Smarty.class.php');

  class View
  {
      private $smarty;
      private $error;

    function __construct()
    {
      $this->smarty = new Smarty();
      $this->error = array();
    }

    function showTemplate($section)
    {
      $this->smarty->display($section .'.tpl');
    }

    function showNews($section, $novedades)
    {
      $this->smarty->assign("novedades", $novedades);
      $this->smarty->display($section .'.tpl');
    }

    function showDropdown($section, $categorias)
    {
      $this->smarty->assign("categorias", $categorias);
      $this->smarty->display($section .'.tpl');
    }
  }


?>
