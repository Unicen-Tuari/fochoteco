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
