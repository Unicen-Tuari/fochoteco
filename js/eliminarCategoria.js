function cargarCategorias(seccion){
	$.ajax({
		type: "GET",
		dataType: "html",
		url: 'index.php?section=' + seccion,
		success: function(data){
			$("#listacategorias").html(data);
		},
		error: function(){
			alert("error");
		}
	})
};

function cargarDropdown(seccion){
	$.ajax({
		type: 'GET',
		dataType: 'HTML',
		url: 'index.php?section='+seccion,
		success: function(data){
					$('#dropdown').html(data);
				},
		error: function(){
					alert('Error al Cargar la Pagina de ' + seccion);
				}
	});
};

function eliminarCat(categ){
		$.ajax({
			type: "DELETE",
			url:"index.php?section=borrar_categoria&id=" + categ,
			success: function(data){
					cargarCategorias("listacategorias");
          cargarDropdown("dropdown");
			},
			error: function(){
				alert("No anduvo la llamada AJAX");
			},
		});
	};

	$(".eliminarCategoria").on("click", function(event){
		event.preventDefault();
		id_categoria=event.target.href;
		var posbarra= id_categoria.lastIndexOf("/");
		id_categoria = id_categoria.substr(posbarra+1);
		eliminarCat(id_categoria);
	});
