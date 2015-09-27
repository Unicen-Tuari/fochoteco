<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/pest.png">
    <title>Lima & Limón</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body id="bodyhome">

  <div class="col-sm-6" style="background-color: white; margin-top: 10px; border-radius: 4px; ">

    <form class="form-horizontal" action="index.html" method="post" style="margin-top: 30px; text-align:center;">
      <div class="form-group">
          <div class="dropdown col-sm-12" style=" text-align:left;">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              CATEGORIA
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <!-- <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li><a href="#">Separated link</a></li> -->
              
            </ul>
          </div>
      </div>
      <div class="form-group">
    <div class="col-sm-12">
      <h4>Titulo</h4>
      <input type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <h4>Descripcion</h4>
      <textarea class="form-control" rows="1"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <h4>Noticia</h4>
      <textarea class="form-control" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="imagesToUpload">Imagen portada: </label>
    <input type="file" name="" id=""/>
  </div>
  <div class="form-group">
    <label for="imagesToUpload">Imagenes noticia: </label>
    <input type="file" name="" id="" multiple/>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-9 col-sm-3">
      <button type="submit" class="btn btn-default">Agregar noticia</button>
    </div>
  </div>
    </form>


    <form class="" action="index.html" method="post">
      <div class="form-group">
      <h4>Agregar categoria: </h4>
      <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <div class="col-sm-offset-10 col-sm-2" style="margin-bottom: 20px;">
          <button type="submit" class="btn btn-default">Agregar</button>
        </div>
      </div>
    </form>

  </div>


  <div id="conthome" class="col-sm-6">

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax-admin.js"></script>
  </body>
</html>
