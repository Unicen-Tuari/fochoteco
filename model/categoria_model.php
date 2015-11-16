<?php

class Categoria_model extends Model {

  private $categorias;

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

  function deleteCategoria($id_categoria){
      $consultaProd = $this->db->prepare("SELECT 1 FROM novedad WHERE fk_id_categoria=?");
      $consultaProd->execute(array($id_categoria));
      $existeProd = $consultaProd->fetch();
      if (!$existeProd) {
        $consultaCat = $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
        $consultaCat->execute(array($id_categoria));
        }
    }

}

?>
