"use strict";

$('document').ready(function(){

	var dropdown = "dropdown";

	function cargarDropdown(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?section='+seccion,
			success: function(data){
						$('#dropdown').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};

cargarDropdown(dropdown);

});
