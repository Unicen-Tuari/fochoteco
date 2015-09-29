"use strict";

$('document').ready(function(){

	var noticia = 'noticia';

	function cargarSeccion(seccion, id_novedad){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?section='+seccion+'&id='+id_novedad,
			success: function(data){
						$('#conthome').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};

	$('.verNoticia').on('click', function(event){
		event.preventDefault();
		cargarSeccion(noticia, $(this).val());
	});

});
