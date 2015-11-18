<?php

require_once 'model.php';


class Categoria_model extends Model {

  private $categorias;

  function getCategories(){
    $consulta = $this->db->prepare("SELECT * FROM categoria");
    $consulta->execute();

    return $consulta->fetchAll();
  }

  function addCategoria($categoria){
    if(strlen($categoria) > 4){
    try{
      $this->db->beginTransaction();
      $queryInsert = $this->db->prepare('INSERT INTO categoria(nombre_categoria) VALUES(?)');
      $queryInsert->execute(array($categoria));
      $id_categ = $this->db->lastInsertId();
      $this->db->commit();
      return $id_categ;
    } catch(Exception $e){
      $this->db->rollBack();
    }
  }
  }

  function deleteCategoria($id_categoria){
      $consultaNov = $this->db->prepare("SELECT 1 FROM novedad WHERE fk_id_categoria=?");
      $consultaNov->execute(array($id_categoria));
      $existeNov = $consultaNov->fetch();
      if (!$existeNov) {
        $consultaCat = $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
        $consultaCat->execute(array($id_categoria));
        }
      if($consultaCat->rowCount() > 0)
        return 'Categoria borrada';
      else
        return 'No se borro la categoria';
    }

    function updateCategoria($id_categoria, $nuevoNombre){
      $consulta = $this->db->prepare('UPDATE categoria SET nombre_categoria=? WHERE id_categoria=?');
      $consulta->execute(array($nuevoNombre, $id_categoria));
    }

}

?>
