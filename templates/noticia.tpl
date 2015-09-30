<div class="container-fluid">
  <div class="row">
    <div class="fullNew col-sm-offset-1 col-sm-10">
        <div class="col-sm-offset-1 col-sm-10">
          <div class="col-sm-2">
          <img src="{$novedad['imagenes'][0]}" alt="{$novedad['imagenes'][0]}" class="img-thumbnail"/>
          </div>

           <h1>{$novedad['titulo']}</h2>
           {$novedad['noticia']}

           {foreach $novedad['imagenes'] as $key => $imagen}
           {if $key != 0}
           <div class="col-sm-4">
           <img src="{$imagen}" alt="{$imagen}" class="imgsNoticia"/>
           </div>
           {/if}
           {/foreach}
           <h6>Fecha de publicacion: {$novedad['fecha_publicacion']}</h6>
        </div>

      </div>
  </div>
</div>
