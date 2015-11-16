<label class="control-label" for="nombre">Categorias</label>
<ul class="col-sm-12">
{foreach $categorias as $categoria}
<li>
  <p>Id categoria: {$categoria["id_categoria"]}</p><p>Nombre categoria: {$categoria["nombre_categoria"]}
  <a class="glyphicon glyphicon-trash eliminarCategoria" href="{$categoria['id_categoria']}"></a></p>
</li>
{/foreach}
</ul>

<script src="js/eliminarCategoria.js"></script>
