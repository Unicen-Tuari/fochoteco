"use strict";

$('document').ready(function(){

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
      if (i != 6){
       descripcion = data.information[i]['thing'][0];
       tamanio = data.information[i]['thing'][1];
       precio = data.information[i]['thing'][2];
			 imagen = data.information[i]['thing'][3];
       $("#bodytabla").append("<tr><td>" + descripcion + "</td><td>" + tamanio + "</td><td>" + precio + '</td><td><img class="imgtabla hvr-grow" src="images/' + imagen + '"></td></tr>');
    }
    }
 }
});
}

actualizarTabla();

$("#btn-agregar").on('click', function(event){

	event.preventDefault();
	guardarFila();

})

});      /* FINALIZA DOCUMENT READY */
