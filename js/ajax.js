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

function enviarEinsertar(){
var descripcion = $("#descripcion").val();
var tamanio = $("#tamanio").val();
var precio = $("#precio").val();
var imagen = $("#imagentabla").val();
var grupo = 20;
var informacion = [descripcion, tamanio, precio, imagen];
var info = {
    "group": grupo,
    "thing": informacion
    };

if (grupo && informacion){
  $.ajax({
     type: "POST",
     dataType: 'JSON',
     data: JSON.stringify(info),
     contentType: "application/json; charset=utf-8",
     url: "http://web-unicen.herokuapp.com/api/create",
		 success: function(data){
        actualizarTabla();
				alert('Se agrego correctamente');

       },
       error:function(data){
         alert('No se pudo comunicar con el servidor');
       }
  });
}
}

function actualizarTabla(){
var grupo = 20;
$.ajax({
 type: "GET",
 dataType: 'JSON',
 url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
 success: function(data){
    var descripcion = "";
    var tamanio = "";
    var precio = "";
    var imagen = "";
		$("#bodytabla").html('');
    for (var i = 0; i < data.information.length; i++) {
       descripcion = data.information[i]['thing'][0];
       tamanio = data.information[i]['thing'][1];
       precio = data.information[i]['thing'][2];
			 imagen = data.information[i]['thing'][3];
       $("#bodytabla").append("<tr><td>" + descripcion + "</td><td>" + tamanio + "</td><td>" + precio + '</td><td><img class="imgtabla hvr-grow" src="images/' + imagen + '"></td></tr>');
    }
 }
});
}
