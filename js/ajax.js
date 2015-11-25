"use strict";

$('document').ready(function(){

	var loginAdm = 'login';
	var nosotros = 'nosotros';
	var servicios = 'servicios';
	var portfolio = 'portfolio';
	var contacto = 'contacto';
	var novedades = 'novedades';
	var dados = 'dados';


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

	cargarSeccion(nosotros);  /* INICIO nosotros.html AL CARGAR LA PAG */

	$('#navAdmin').on('click', function(event){
		event.preventDefault();
		cargarSeccion(loginAdm);
	});

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

	$('#novedades').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(novedades);
	});

	$('#dados').on('click',function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(dados);
	});
});

// enviar mail

$('body').on("submit", "#enviarMail", function(event){
	event.preventDefault();
	var correo = $('#correoMail').val();
	var asunto = $('#asuntoMail').val();
	var mensaje = $('#mensajeMail').val();
	$.ajax({
		method: "POST",
		url: "index.php?section=enviar-mail",
		data: {email: correo, subject: asunto, message: mensaje},
		contentType : false,
		processData : false,
	})
	.done(function(data) {
		$('#nombreMail').val('');
		$('#correoMail').val('');
		$('#asuntoMail').val('');
		$('#mensajeMail').val('');
		$('.contacto').html(data);
	})
	.fail(function() {
		alert("error");
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
