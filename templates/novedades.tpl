<div class="container-fluid">
  <div class="row allNews">
    <select id="dropdownFiltro" name="dropdownFiltro">
      {if $categorias}
        <option value="0">Todas las categorias</option>
        {foreach $categorias as $categoria}
        <option value="{$categoria.id_categoria}">{$categoria.nombre_categoria}</option>
        {/foreach}
      {else}
        <option value="0">No existen categorias</option>
      {/if}
    </select>
      <ul>
        {foreach $novedades as $novedad}
        <li class="list-group-item col-sm-offset-1 col-sm-10 individualNew">
          {foreach $novedad['imagenes'] as $imagen}
            <div class="col-sm-2">
            <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail"/>
            </div>
          {/foreach}
          <div class="col-sm-10">
            <h6> Categoria: {$novedad['fk_id_categoria']} </h6>
            <h3>{$novedad['titulo']}</h3>
            {$novedad['descripcion']}
            <button value={$novedad['id_novedad']} class="verNoticia"><h6> Ver noticia completa </h6></button>
          </div>
        </li>

        {/foreach}
      </ul>
  </div>
</div>

<script src="js/noticiaCompleta.js"></script>
