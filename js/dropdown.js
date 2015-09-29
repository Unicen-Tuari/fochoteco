"use strict";

$('document').ready(function(){

	var dropdown = "dropdown";
	var categorias = "listacategorias";

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

cargarDropdown(dropdown);
cargarCategorias(categorias);

$("#formAgregarCategoria").submit(function(event){
	event.preventDefault();
			$.ajax({
					url: "index.php?section=agregar_categoria",
					type: "post",
					data: new FormData(this),
					contentType : false,
					processData : false,
					success: function(){
						cargarDropdown(dropdown);						
						cargarCategorias(categorias);
					},
					error:function(){
							alert("failure");
					}
			});
});

});
