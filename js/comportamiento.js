"use strict";

// Solo Ejecuta Codigo cuando el DOM esta Totalmente Cargado

function toggle(divId){
  var div = document.getElementById(divId);
  if (div.style.visibility == "hidden") {
    div.style.visibility = "visible";
  }
  else {
    div.style.visibility = "hidden";
  }
}

function agregarTarea(){
  var lista = document.getElementById('tareas');
  var nuevaTarea = document.getElementById('tarea').value;
  var item = document.createElement('li');
  item.innerHTML = nuevaTarea;
  lista.appendChild(item);
}
