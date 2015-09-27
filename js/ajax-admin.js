"use strict";

$('document').ready(function(){

	var novedades = 'novedades-admin';

	function cargarSeccion(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?section='+seccion,
			success: function(data){
						$('#conthome').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};

	cargarSeccion(novedades);  /* INICIO novedades.html AL CARGAR LA PAG */

// Lo voy a usar en un click futuro para agregar novedades.

	// $('#nosotros').on('click', function(event){
	// 	event.preventDefault();
	// 	$(".nav").find(".active").removeClass("active");
	// 	$(this).addClass("active");
	// 	cargarSeccion(nosotros);
	// });

});
