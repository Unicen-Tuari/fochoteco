"use strict";

$('document').ready(function(){

$("#formAgregarNoticia").submit(function(event){
event.preventDefault();
		$.ajax({
				url: "index.php?section=agregar_noticia",
				type: "post",
				data: new FormData(this),
				contentType : false,
				processData : false,
				success: function(data){
					alert("se cargo la noticia");
					$('body').html(data);
				},
				error:function(){
						alert("failure");
				}
		});
});

});
