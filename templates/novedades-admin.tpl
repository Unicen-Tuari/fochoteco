  <div class="row admNews" >
      <ul>
        {foreach $novedades as $novedad}

        <li class="list-group-item col-sm-12">
          {foreach $novedad['imagenes'] as $imagen}
          <div class="col-sm-3">
          <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail"/>
          </div>
          {/foreach}
          <div class="col-sm-9">
            <h6> Categoria: {$novedad['fk_id_categoria']} </h6>
            <h3>{$novedad['titulo']}</h3>
            {$novedad['descripcion']}
            <button value={$novedad['id_novedad']} class="verNoticia"><h6> Ver noticia completa </h6></button>
          </div>
        </li>

        {/foreach}
        </ul>
  </div>

<script src="js/noticiaCompleta.js"></script>
