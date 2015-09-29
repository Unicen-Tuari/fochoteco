<div class="container-fluid">
  <div class="row" style="margin-bottom: 40px;">
      <ul>

         <p>
           {$novedad['titulo']}<br>
           {$novedad['noticia']}
           {$novedad['fecha_publicacion']}
           {foreach $novedad['imagenes'] as $imagen}
           <div class="col-sm-2" style="margin-top: 0.8%;">
           <img src="{$imagen}" alt="{$imagen}" class="img-thumbnail" style="margin: auto; width: 85%;"/>
           </div>
           {/foreach}
         </p>
      </ul>
  </div>
</div>
