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
						$('#contadmin').html(data);
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

	var id_novedad = '';
	function AjaxImagenes(novedad,formData){
		$.ajax({
			type: "POST",
			url:"index.php?section=agregar_imagenes&id=" + novedad,
			data: formData,
			contentType : false,
			processData : false,
			success: function(data){
			},
			error: function(){
				alert("Se rompio todo.");
			},
		});
	};

	$(".botonAgregarImagenes").on("click", function(event){
		event.preventDefault();
		id_novedad=event.target.href;
		var posbarra= id_novedad.lastIndexOf("/");
		id_novedad = id_novedad.substr(posbarra+1);
		$('#imagesToUpload2').click();
	});

	$("#imagesToUpload2").on("change", function(event){
		event.preventDefault();
		$('#imgAjax').submit();
	});

	$("#imgAjax").on("submit", function(event){
		event.preventDefault();
		var dato = new FormData(this);
		AjaxImagenes(id_novedad, dato);
	});

	function cargarContenedor(seccion){
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

	function cargarNoticiasFiltro(id_cat){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?section=novedades&id='+id_cat,
			success: function(data){
						$('#conthome').html(data);
						$('#dropdownFiltro').val(id_cat);
					},
			error: function(){
						alert('Error');
					}
		});
	};

	$("#dropdownFiltro").on("change", function(event){
		event.preventDefault();
		var id_cat = $("#dropdownFiltro").val();
		cargarNoticiasFiltro(id_cat);
	});


});
