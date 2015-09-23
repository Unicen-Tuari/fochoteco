"use strict";

$('document').ready(function(){

	var nosotros = 'nosotros';
	var servicios = 'servicios';
	var portfolio = 'portfolio';
	var contacto = 'contacto';
	var dados = 'dados';


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

	cargarSeccion(nosotros);  /* INICIO nosotros.html AL CARGAR LA PAG */

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

/* -------- TOOGLE FORM CONTACTO --------*/

function toggle(divId){
  var div = document.getElementById(divId);
  if (div.style.visibility == "hidden") {
    div.style.visibility = "visible";
  }
  else {
    div.style.visibility = "hidden";
  }
}
