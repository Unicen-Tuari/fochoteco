"use strict";

$('document').ready(function(){

//AGREGAR UNA NUEVA NOTICIA
$("#formAgregarNoticia").submit(function(event){
	event.preventDefault();
		$.ajax(
	    {
	      method: "POST",
	      url: "api/noticia",
	      data: new FormData(this),
				contentType : false,
				processData : false
	    })
	  .done(function(novedad) {
			novedad['imagenes'] = novedad['imagenes'][0].ruta;
			crearNovedad(novedad);
			$("#nuevoTitulo").val('');
			$("#nuevaDescripcion").val('');
			$("#nuevaNoticia").val('');
			$("#nuevasImgsNoticia").val('');
			$("#dropdown").val(0);
	  })
	  .fail(function() {
	      alert("error al agregar noticia");
	  });
});

//BORRAR UNA NOTICIA
	function borrarNovedad(idNovedad){
	  $.ajax(
	    {
	      method: "DELETE",
	      url: "api/noticia/" + idNovedad
	    })
	  .done(function() {
	     $('#novedad'+idNovedad).remove();
	  })
	  .fail(function() {
	      alert('Imposible borrar la novedad');
	  });
	}

	$('body').on('click', 'a.eliminarNovedad', function() {
		event.preventDefault();
	  var idNovedad = this.getAttribute('idNovEliminar');
	  borrarNovedad(idNovedad);
	});

//ACTUALIZAR UNA NOTICIA
var idNovedad = '';
$('body').on('click', 'a.actualizarNovedad', function() {
	event.preventDefault();
	idNovedad = this.getAttribute('idNovMod');
	$.ajax( "api/noticia/" + idNovedad )
	    .done(function(novedad) {
				$('#actualizarTitulo').val(novedad['titulo']);
        $('#actualizarDescripcion').val(novedad['descripcion']);
        $('#actualizarNoticia').val(novedad['noticia']);
				$('#dropdown2').val(novedad['id_categ']);
	    })
	    .fail(function() {
	        alert("no se pudo obtener novedad");
	    });
});

function modificarNoticia(nuevoTitulo, nuevaDescripcion, nuevaNoticia, nuevaCategoria){
	var novedad = {fk_id_categoria: nuevaCategoria, titulo: nuevoTitulo, descripcion: nuevaDescripcion, noticia: nuevaNoticia};
	$.ajax(
		{
			method: "PUT",
			url: "api/noticia/" + idNovedad,
			dataType: "json",
			data: JSON.stringify(novedad)
		})
	.done(function(nombreCategoria) {
		$('#idCategoria'+idNovedad).html("Categoria: " + nombreCategoria);
		$('#idTitulo'+idNovedad).html(nuevoTitulo);
		$('#idDescripcion'+idNovedad).html(nuevaDescripcion);
	})
	.fail(function() {
			alert('Imposible modificar noticia');
	});
}

$("#guardarNoticia").on("click", function(event){
    event.preventDefault();
    var nuevoTitulo = $('#actualizarTitulo').val();
    var nuevaDescripcion = $('#actualizarDescripcion').val();
    var nuevaNoticia=$('#actualizarNoticia').val();
		var nuevaCategoria = $('#dropdown2').val();
    modificarNoticia(nuevoTitulo,nuevaDescripcion,nuevaNoticia,nuevaCategoria)
  });
//AGREGAR IMAGENES A UNA NOTICIA
	var id_novedadImg = '';

	$("#imagesToUpload2").on("change", function(event){
		event.preventDefault();
		$('#imgAjax').submit();
	});

	$("#imgAjax").on("submit", function(event){
		event.preventDefault();
		$.ajax({
			method: "POST",
			url: "api/noticia/img/"+id_novedadImg,
			data: new FormData(this),
			contentType : false,
			processData : false,
		})
		.done(function() {
		})
		.fail(function() {
			alert("error al agregar imagenes");
		});
	});

	$('body').on('click', 'a.agregarImagenes', function() {
		event.preventDefault();
		id_novedadImg = this.getAttribute('idNovImg');
		$('#imagesToUpload2').click();
	});

//VER NOTICIA COMPLETA

function crearImagen(imagen){
	$.ajax({ url: 'js/templates/imgsnoticia.mst',
		async:false,
		success: function(template) {
		 var rendered = Mustache.render(template, imagen);
		 $('#imgsNovedad').append(rendered);
	 }
	});
}

function crearNoticiaCompleta(novedad){
	$.ajax({ url: 'js/templates/noticia.mst',
		success: function(template) {
		 var rendered = Mustache.render(template, novedad);
		 $('#contadmin').html(rendered);
		 for(var img in novedad["imagenes"]) {
			 if (img != 0) {
			 	crearImagen(novedad["imagenes"][img]);
			 }
		}
	}
	});
}

function cargarNovedad(id_novedad){
	$.ajax('api/noticia/'+ id_novedad)
	.done(function(novedad) {
		crearNoticiaCompleta(novedad);
	})
	.fail(function() {
			alert("error al cargar novedad");
	});
}

$('body').on('click', '.verNoticia', function() {
	event.preventDefault();
	var id_novedad = $(this).val();
	cargarNovedad(id_novedad);
});

//ELIMINAR UNA IMAGEN DE UNA NOTICIA

function deleteImg(idImg){
	$.ajax(
		{
			method: "DELETE",
			url: "api/noticia/img/" + idImg
		})
	.done(function() {
		 $('#img'+idImg).remove();
	})
	.fail(function() {
			alert('Imposible borrar la imagen');
	});
}

$('#contadmin').on('click', 'a.eliminarImg', function() {
	var id_Img = this.getAttribute("idImg");

	deleteImg(id_Img);
});

//LISTAR NOTICIAS
	function crearNovedad(noticia) {
		$.ajax({ url: 'js/templates/novedades-admin.mst',
		async:false,
			 success: function(template) {
				 var rendered = Mustache.render(template, noticia);
				 $('#contadmin1').append(rendered);
				}
			});
	}

	function cargarNovedades(){
		$.ajax( "api/noticia" )
		.done(function(noticiaJSN) {
			for(var key in noticiaJSN) {
				crearNovedad(noticiaJSN[key]);
			}
		})
		.fail(function() {
				alert("error");
		});
	}
	cargarNovedades();

});
