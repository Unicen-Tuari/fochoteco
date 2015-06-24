
var blackjack = 0;

function tirarDado() {
  	var num = Math.floor(Math.random()*6)+1;
  	return num;
}

function tirarCantDados(){
	  var resultado = [];
	  var suma = 0;
	  for (var i = 0; i < $('#cantidadDados').val(); i++) {
	  	resultado.push(tirarDado());
	  }
	  $('#input-valores').val(resultado);
	  for (var x = 0; x < resultado.length; x++){
	  	suma += resultado[x];
	  }
	  return suma;
}

function tablero() {

var suma = tirarCantDados();
blackjack += suma;
$("#input-suma").val(blackjack);
if (blackjack==21){
    alert("Ganaste! Blackjack 21");
}
else
  if (blackjack>21){
    alert("Perdiste, superaste 21")
    blackjack = 0;
  }
}
