<div class="container-fluid">
  <div class="row">
      <ul>
        {foreach $novedades as $novedad}

        <li class="list-group-item col-sm-offset-1 col-sm-10" style="margin-top: 10px;">
          {foreach $novedad['imagenes'] as $imagen}
          <div class="col-sm-2" style="margin-top: 0.8%;">
          <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail" style="margin: auto; width: 90%;"/>
          </div>
          {/foreach}
          <div class="col-sm-10">
            <h6 style="text-align: right; color: blue;"> {$novedad['nombre_categoria']} </h6>
            <h3 style="font-weight: bold;">{$novedad['titulo']}</h3>
            {$novedad['descripcion']}
            <h6 style="text-align: right; color: blue;"> Ver noticia completa </h6>
          </div>
        </li>

        {/foreach}
        </ul>
  </div>
</div>
