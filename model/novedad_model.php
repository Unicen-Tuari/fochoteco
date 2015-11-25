<?php

require_once 'model.php';

class Novedad_model extends Model {

  private $novedades;

  function getNews($id_cat = 0){
    $novedades = array();
    if ($id_cat) {
      $consulta = $this->db->prepare("SELECT * FROM novedad WHERE fk_id_categoria =?");
      $consulta->execute(array($id_cat));
    }
    else {
      $consulta = $this->db->prepare("SELECT * FROM novedad");
      $consulta->execute();
    }
    //Todas las novedades
    while($novedad = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaCategoria = $this->db->prepare("SELECT nombre_categoria FROM categoria WHERE id_categoria=?");
      $consultaCategoria->execute(array($novedad['fk_id_categoria']));
      $nombreCategoria = $consultaCategoria->fetchAll()[0];
      $novedad['fk_id_categoria'] = $nombreCategoria["nombre_categoria"];
      $consultaImagen = $this->db->prepare("SELECT ruta FROM imagen WHERE fk_id_novedad=? ORDER BY id_imagen");
      $consultaImagen->execute(array($novedad['id_novedad']));
      $pathImagen = $consultaImagen->fetch();
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

    $consultaCategoria = $this->db->prepare("SELECT nombre_categoria FROM categoria WHERE id_categoria=?");
    $consultaCategoria->execute(array($novedad['fk_id_categoria']));
    $nombreCategoria = $consultaCategoria->fetch();

    $novedad['id_categ'] = $novedad['fk_id_categoria']; //para el dropdown2
    $novedad['fk_id_categoria'] = $nombreCategoria["nombre_categoria"];

    $consultaImagen = $this->db->prepare("SELECT ruta, id_imagen FROM imagen WHERE fk_id_novedad=?");
    $consultaImagen->execute(array($id));
    while($imagen = $consultaImagen->fetch(PDO::FETCH_ASSOC)) {
      $novedad['imagenes'][] = $imagen;
    }
    return $novedad;
  }


  function subirImagenes($imagenes){
      $carpeta = "uploads/imagenes/";
      $destinos_finales = array();
      foreach ($imagenes["tmp_name"] as $key => $value) {
        $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
        move_uploaded_file($value, "../" . end($destinos_finales));
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
      $id_novedad = $this->db->lastInsertId();
      //Insertar las imagenes
     foreach ($destinos_finales as $key => $value) {
       $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_novedad, ruta) VALUES(?,?)');
       $consulta->execute(array($id_novedad, $value));
      }
      $this->db->commit();
      return $this->getFullNew($id_novedad);
      }
    catch(Exception $e)
      {
      $this->db->rollBack();
      }
  }

  function addImgs($id_novedad, $imagenes){
        $rutas=$this->subirImagenes($imagenes);
        $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_novedad, ruta) VALUES(?,?)');
        foreach($rutas as $ruta){
          $consulta->execute(array($id_novedad, $ruta));
        }
    }

  function deleteNew($id_novedad){
      $consultaImgs = $this->db->prepare('DELETE FROM imagen WHERE fk_id_novedad=?');
      $consultaImgs->execute(array($id_novedad));
      $consultaNew = $this->db->prepare('DELETE FROM novedad WHERE id_novedad=?');
      $consultaNew->execute(array($id_novedad));
    }

  function updateNoticia($id_novedad, $id_categoria, $titulo, $descripcion, $noticia) {
    $consulta = $this->db->prepare('UPDATE novedad SET titulo=?, descripcion=?, noticia=?, fk_id_categoria=? WHERE id_novedad=?');
    $consulta->execute(array($titulo, $descripcion, $noticia, $id_categoria, $id_novedad));
    $categoria_model = new Categoria_Model();
    return $categoria_model->getNameCat($id_categoria);
  }

  function deleteImage($id_image) {
    $consultaImgs = $this->db->prepare('DELETE FROM imagen WHERE id_imagen=?');
    $consultaImgs->execute(array($id_image));
  }


}

?>
