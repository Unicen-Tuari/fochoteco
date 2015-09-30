"use strict";

$('document').ready(function(){

	var novedades = 'novedades-admin';

	function cargarSeccion(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?section='+seccion,
			success: function(data){
						$('#contadmin').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};

	cargarSeccion(novedades);

	$("#formAgregarNoticia").submit(function(event){
	event.preventDefault();
			$.ajax({
					url: "index.php?section=agregar_noticia",
					type: "post",
					data: new FormData(this),
					contentType : false,
					processData : false,
					success: function(data){
						cargarSeccion(novedades);
						$("#nuevoTitulo").val('');
						$("#nuevaDescripcion").val('');
						$("#nuevaNoticia").val('');
						$("#nuevasImgsNoticia").val('');
						$("#dropdown").val(0);
					},
					error:function(){
							alert("failure");
					}
			});
	});

});
