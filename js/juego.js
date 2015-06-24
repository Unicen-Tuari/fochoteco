$('document').ready(function(){

var blackjack = 0;

Dado.prototype.tirar= function(){
    this.valor= Math.floor(Math.random()*6)+1;
    return this.valor;
}

function Dado(idDado){
    this.valor=1;
    this.idHTML=idDado;
}

function tirarCantDados(){
    this.dado1 = new Dado("dado1");
	  var resultado = [];
	  var suma = 0;
    var cantdados = $('#cantidadDados').val();
	  for (var i = 0; i < cantdados ; i++) {
	  	resultado.push(dado1.tirar());
	  }
	  $('#input-valores').val(resultado);
	  for (var x = 0; x < resultado.length; x++){
	  	suma += resultado[x];
	  }
	  return suma;
}

function actualizarSuma() {

  var suma = tirarCantDados();
  blackjack += suma;
  $("#input-suma").val(blackjack);
  if (blackjack==21){
      alert("Ganaste! Blackjack 21");
      blackjack = 0;
      $('#input-valores').val(0);
      $('#input-suma').val(0);
  }
  else
    if (blackjack>21){
      alert("Perdiste, superaste 21")
      blackjack = 0;
      $('#input-valores').val(0);
      $('#input-suma').val(0);
    }
}


$("#tablero").on('click', function(event){

	event.preventDefault();
	actualizarSuma();
})

$("#terminarTurno").on('click', function(event){

	event.preventDefault();
  alert("Termino el turno");
  blackjack = 0;
  suma = 0;
  $('#input-valores').val(0);
  $('#input-suma').val(0);
})
});
