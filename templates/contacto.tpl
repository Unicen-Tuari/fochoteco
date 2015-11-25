  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <div class="embed-responsive googlemap">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12763.572456771568!2d-60.32595658386382!3d-36.89290519306515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1434908987026"></iframe>
        </div>
      </div>
    </div>
    <div class="row contacto">
      <div class="col-md-offset-5 col-md-3 formcontacto" id="ocultarform">
        <form class="form-group" id="enviarMail">
          <br><br>
          <h3> ESCRIBINOS TU CONSULTA </h3>
          <br><br>
          <label>Su nombre (requerido)</label>
          <input type="text" class="form-control" id="nombreMail" placeholder="Jane Doe"><br>
          <label>Su e-mail (requerido)</label>
          <input type="email" class="form-control" id="correoMail" placeholder="Email"><br>
          <label>Asunto</label>
          <input type="text" class="form-control" id="asuntoMail" placeholder=""><br>
          <label>Mensaje</label>
          <textarea class="form-control" id="mensajeMail" rows="5"></textarea><br>
          <button type="submit" class="btn btn-default btn-send">ENVIAR</button>
        </form>
      </div>
      <div class="col-md-offset-8 col-md-4 formcontacto2">
        <br><br><h1> CONTACTANOS! </h3><br><br>
        <h3> ESCRIBINOS A NUESTRO EMAIL </h3><br>
        <a href="mailto:limalimonideas@gmail.com">limalimonideas@gmail.com</a><br><br>
        <h3> VISITANOS </h3>
        <p> Coronel Suarez 9999, Olavarría,<br>Buenos Aires </p>
        <h3> LLAMANOS </h3>
        <p> +54 2284 999999 </p>
        <button onclick="toggle('ocultarform')" type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        </button>
      </div>
    </div>

  </div>
