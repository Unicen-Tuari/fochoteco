"use strict";

// Solo Ejecuta Codigo cuando el DOM esta Totalmente Cargado
$('document').ready(function(){
	// Definicion de Variables con los Nombres de las Secciones
	nosotros = 'home2';
	servicios = 'servicios';
	portfolio = 'portfolio';
	contacto = 'contacto';

	/* Funcion que Carga en el Contenedor Principal la
		Seccion que se le pase como Parametro*/
	function cargarSeccion(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: seccion + '.html',
			success: function(data){
						$('#conthome').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};

	// Carga la Pagina de Inicio al Ingresar o Recargar el Sitio
	cargarSeccion(nosotros);

	// Carga la Seccion Inicio al Presionar Inicio en el NAV
	$('#nosotros').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(nosotros);
	});

	// Carga la Seccion Actividades al Presionar Actividades en el NAV
	$('#servicios').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(servicios);
	});

	// Carga la Seccion Galeria al Presionar Galeria en el NAV
	$('#portfolio').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(portfolio);
	});

	// Carga la Seccion Contacto al Presionar Contacto en el NAV
	$('#contacto').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(contacto);
	});
});
