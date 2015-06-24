"use strict";

$('document').ready(function(){

	nosotros = 'home2';
	servicios = 'servicios';
	portfolio = 'portfolio';
	contacto = 'contacto';
	dados = 'dados'


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

	cargarSeccion(nosotros);

	$('#nosotros').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(nosotros);
	});

	$('#servicios').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(servicios);
	});

	$('#portfolio').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(portfolio);
	});

	$('#contacto').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(contacto);
	});

	$('#dados').on('click',function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(dados);
	});
});

function guardarFila(){
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
         alert('No se pudo agregar la fila');
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

function toggle(divId){
  var div = document.getElementById(divId);
  if (div.style.visibility == "hidden") {
    div.style.visibility = "visible";
  }
  else {
    div.style.visibility = "hidden";
  }
}

/*---------------------------------
-- JUEGO DADOS --------------------
----------------------------------*/
