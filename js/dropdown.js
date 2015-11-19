"use strict";

$('document').ready(function(){

var idCateg = '';

$("#formAgregarCategoria").submit(function(event){
	event.preventDefault();
	var nombreCategoria = $('#nuevaCategoria').val();
	if (nombreCategoria.length > 4){
		$.ajax(
	    {
	      method: "POST",
	      url: "api/categorias",
	      data: { categoria: nombreCategoria }
	    })
	  .done(function(idCategoria) {
	    var categoria = {nombre_categoria: nombreCategoria, id_categoria:idCategoria  };
	     crearCategoria(categoria);
			 crearDropdown(categoria);
	     $('#nuevaCategoria').val('');
	  })
	  .fail(function() {
	      $('#listaCategorias1').append('<li>Imposible agregar la tarea</li>');
	  });
	}
});


function crearCategoria(categoria) {
  $.ajax({ url: 'js/templates/listacategorias.mst',
	async:false,
     success: function(template) {
       var rendered = Mustache.render(template, categoria);
       $('#listaCategorias1').append(rendered);
      }
    });
}

function crearDropdown(categoria){
	$.ajax({ url: 'js/templates/dropdown.mst',
	async:false,
     success: function(template) {
       var rendered = Mustache.render(template, categoria);
       $('#dropdown').append(rendered);
      }
    });
}

function cargarCategorias(){
  $.ajax( "api/categorias" )
  .done(function(categoriasJSN) {
    for(var key in categoriasJSN) {
      crearCategoria(categoriasJSN[key]);
			crearDropdown(categoriasJSN[key]);
    }
  })
  .fail(function() {
			alert("error");
      // $('#listaTareas').append('<li>Imposible cargar la lista de tareas</li>');
  });
}

function borrarCategoria(idCategoria){
  $.ajax(
    {
      method: "DELETE",
      url: "api/categorias/" + idCategoria
    })
  .done(function() {
     $('#categoria'+idCategoria).remove();
	    $('#drop'+idCategoria).remove();
  })
  .fail(function() {
      alert('Imposible borrar la tarea');
  });
}

$('body').on('click', 'a.eliminarCategoria', function() {
	event.preventDefault();
  var idCategoria = this.getAttribute('idcat');
  borrarCategoria(idCategoria);
});


function actualizarCategoria(idCategoria, name){
	var categoria={nombre: name};
  $.ajax(
    {
      method: "PUT",
      url: "api/categorias/" + idCategoria,
			dataType: 'json',
			data: JSON.stringify(categoria)
    })
  .done(function() {
		$('#nombre'+idCategoria).html("Nombre categoria: "+name);
  })
  .fail(function() {
      alert('Imposible realizar la tarea');
  });
}

$('body').on('click', 'a.actualizarCategoria', function() {
	event.preventDefault();
	idCateg = this.getAttribute('idcatmod');
	$.ajax( "api/categorias/"+idCateg )
	    .done(function(nombreCat) {
				$('#nuevoNombreCat').val(nombreCat);
	    })
	    .fail(function() {
	        alert("no se pudo obtener nombre categoria");
	    });
});

$('#guardarNombreCat').on('click', function() {
	event.preventDefault();
  var newName = $('#nuevoNombreCat').val();
	actualizarCategoria(idCateg, newName);
});


cargarCategorias();


});
