<div class="container-fluid">
  <div class="row" style="margin-bottom: 40px;">
      <ul>
        {foreach $novedades as $novedad}

        <li class="list-group-item col-sm-offset-1 col-sm-10" style="margin-top: 10px;">
          {foreach $novedad['imagenes'] as $imagen}
          <div class="col-sm-2" style="margin-top: 0.8%;">
          <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail" style="margin: auto; width: 85%;"/>
          </div>
          {/foreach}
          <div class="col-sm-10">
            <h6 style="text-align: left; font-weight: bold; color: #021c01;"> Categoria: {$novedad['fk_id_categoria']} </h6>
            <h3 style="font-weight: bold;">{$novedad['titulo']}</h3>
            {$novedad['descripcion']}
            <button value={$novedad['id_novedad']} class="verNoticia"><h6 style="text-align: right; font-weight: bold; color: #002eb8;"> Ver noticia completa </h6></button>
          </div>
        </li>

        {/foreach}
      </ul>
  </div>
</div>

<script src="js/noticiaCompleta.js"></script>
