<label class="control-label" for="nombre">Categorias</label>
<ul class="col-sm-12">
{foreach $categorias as $categoria}
<li><p>Id categoria: {$categoria["id_categoria"]}</p><p>Nombre categoria: {$categoria["nombre_categoria"]}</p></li>
{/foreach}
</ul>
