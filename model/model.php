<?php

class Model

{
  private $db;
  private $novedades;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


function getCategories(){
  $categorias = array();
  $consulta = $this->db->prepare("SELECT * FROM categoria");
  $consulta->execute();
//Todas las novedades
  while($categoria = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $categorias[]=$categoria;
  }
  return $categorias;
}

function getNews(){
  $novedades = array();
  $consulta = $this->db->prepare("SELECT * FROM novedad");
  $consulta->execute();
//Todas las novedades
  while($novedad = $consulta->fetch(PDO::FETCH_ASSOC)) {
    // $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_tarea=?");
    // $consultaImagenes->execute(array($tarea['id']));
    $consultaCategoria = $this->db->prepare("SELECT nombre_categoria FROM categoria WHERE id_categoria=?");
    $consultaCategoria->execute(array($novedad['fk_id_categoria']));
    $nombreCategoria = $consultaCategoria->fetchAll()[0];
    $novedad['fk_id_categoria'] = $nombreCategoria["nombre_categoria"];
    $consultaImagen = $this->db->prepare("SELECT ruta FROM imagen WHERE fk_id_novedad=?");
    $consultaImagen->execute(array($novedad['id_novedad']));
    $pathImagen = $consultaImagen->fetchAll()[0];
    $novedad['imagenes'] = $pathImagen["ruta"];
    $novedades[]=$novedad;
  }
  return $novedades;
}
}

?>
