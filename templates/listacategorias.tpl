<label class="control-label" for="nombre">Categorias</label>
<ul class="list-group-item col-md-12">
{foreach $categorias as $categoria}
<li>Id categorias: {$categoria["id_categoria"]} /-----------/ Nombre categoria: {$categoria["nombre_categoria"]}</li>
{/foreach}
</ul>
