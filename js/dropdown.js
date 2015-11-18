"use strict";

$('document').ready(function(){

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
     success: function(template) {
       var rendered = Mustache.render(template, categoria);
       $('#listaCategorias1').append(rendered);
      }
    });
}

function crearDropdown(categoria){
	$.ajax({ url: 'js/templates/dropdown.mst',
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
  var idCategoria = this.getAttribute('idcat');
  borrarCategoria(idCategoria);
});


function actualizarCategoria(idCategoria){
  $.ajax(
    {
      method: "PUT",
      url: "api/categorias/" + idCategoria
    })
  .done(function() {
    // $('#listaTareas').html="";
  })
  .fail(function() {
      alert('Imposible realizar la tarea');
  });
}

$('body').on('click', 'a.actualizarCategoria', function() {
  var idCategoria = this.getAttribute('idcat');
  actualizarCategoria(idCategoria);
});

// $('body').on('click', 'div.nuevoNombreCat', function() {
//   var nuevoNombre = this.getAttribute('idcat');
//   actualizarCategoria(idCategoria);
// });


cargarCategorias();


});
