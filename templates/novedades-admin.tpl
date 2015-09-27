  <div class="row">
      <ul>
        {foreach $novedades as $novedad}

        <li class="list-group-item col-sm-12" style="margin-top: 10px;">
          {foreach $novedad['imagenes'] as $imagen}
          <div class="col-sm-3" style="margin-top: 1%;">
          <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail" style="margin: auto; width: 100%;"/>
          </div>
          {/foreach}
          <div class="col-sm-9">
            <h6 style="text-align: right; color: blue;"> {$novedad['fk_id_categoria']} </h6>
            <h3 style="font-weight: bold;">{$novedad['titulo']}</h3>
            {$novedad['descripcion']}
            <h6 style="text-align: right; color: blue;"> Ver noticia completa </h6>
          </div>
        </li>

        {/foreach}
        </ul>
  </div>
