<?php

class Model

{
  private $db;
  private $novedades;
  private $categorias;

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

function getFullNew($id){
  $novedad = array();

  $consultaNovedad = $this->db->prepare("SELECT * FROM novedad WHERE id_novedad=?");
  $consultaNovedad->execute(array($id));
  $novedad = $consultaNovedad->fetch();

  $consultaImagen = $this->db->prepare("SELECT ruta FROM imagen WHERE fk_id_novedad=?");
  $consultaImagen->execute(array($id));
  $pathImagen = $consultaImagen->fetchAll()[0];
  $novedad['imagenes'] = $pathImagen["ruta"];

  return $novedad;
}

function addCategoria($categoria){
  if(strlen($categoria) > 4){
  try{
    $this->db->beginTransaction();
    $queryInsert = $this->db->prepare('INSERT INTO categoria(nombre_categoria) VALUES(?)');
    $queryInsert->execute(array($categoria));
    $this->db->commit();
  } catch(Exception $e){
    $this->db->rollBack();
  }
}
}

function subirImagenes($imagenes){
    $carpeta = "uploads/imagenes/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
}

function addNew($id_categoria, $titulo, $descripcion, $noticia, $imagenes){
  try
    {
   $destinos_finales=$this->subirImagenes($imagenes);
    $this->db->beginTransaction();
    $queryInsert = $this->db->prepare('INSERT INTO novedad(titulo, descripcion, noticia, fk_id_categoria) VALUES(?,?,?,?)');
    $queryInsert->execute(array($titulo, $descripcion, $noticia, $id_categoria));
   $id_producto = $this->db->lastInsertId();
    //Insertar las imagenes

   foreach ($destinos_finales as $key => $value) {
     $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_novedad, ruta) VALUES(?,?)');
     $consulta->execute(array($id_producto, $value));
    }
    $this->db->commit();
    }
  catch(Exception $e)
    {
    $this->db->rollBack();
    }
}

// function addImgs(){
//
// }

}

?>
