  <div class="row" style="margin-top: 50px; margin-left: 50px;">
      <ul>
        {foreach $novedades as $novedad}

        <li class="list-group-item col-sm-12" style="background-color: #ecf2ed;" >
          {foreach $novedad['imagenes'] as $imagen}
          <div class="col-sm-3" style="margin-top: 1%;">
          <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail" style="margin: auto; width: 100%;"/>
          </div>
          {/foreach}
          <div class="col-sm-9">
            <h6 style="text-align: left; font-weight: bold; color: #021c01;"> Categoria: {$novedad['fk_id_categoria']} </h6>
            <h3 style="font-weight: bold;">{$novedad['titulo']}</h3>
            {$novedad['descripcion']}
            <h6 style="text-align: right; font-weight: bold; color: #002eb8;"> Ver noticia completa </h6>
          </div>
        </li>

        {/foreach}
        </ul>
  </div>
