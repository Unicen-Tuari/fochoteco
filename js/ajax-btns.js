"use strict";

$('document').ready(function(){

	var servicios = "servicios";
	var portfolio = "portfolio";
	var contacto = "contacto";

function cargarSeccion(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?nav='+seccion,
			success: function(data){
						$('#conthome').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};


	$('#btn-servicios').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$("#servicios").addClass("active");
		cargarSeccion(servicios);
	});

	$('#btn-portfolio').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$("#portfolio").addClass("active");
		cargarSeccion(portfolio);
	});

	$('#btn-contacto').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$("#contacto").addClass("active");
		cargarSeccion(contacto);
	});


});
