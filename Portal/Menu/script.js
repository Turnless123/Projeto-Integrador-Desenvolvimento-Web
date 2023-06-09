function abrirmenu() {
    document.getElementById("escolhas").style.height = '240px'
}
function fecharmenu() {
    document.getElementById("escolhas").style.height = '0%';
   
}
function riscado() {
  if (document.getElementById('tarefa').checked) {
      document.getElementById('qdr1').style.textDecoration = "line-through";
      document.getElementById('qdr1').style.opacity = '.5' 
  } 
  else {
    document.getElementById('qdr1').style.textDecoration = "none";
    document.getElementById('qdr1').style.opacity = '1' 
  }
}


window.addEventListener('DOMContentLoaded', function() {
  var dataAtual = new Date();
  var dia = dataAtual.getDate();
  var mes = dataAtual.getMonth() + 1;
  var ano = dataAtual.getFullYear();
  
if (mes <= 9) {
  var zero = '0'
}
else{
  var zero = ''
}

  var dataAtualElemento = document.getElementById('data-atual');
  dataAtualElemento.innerHTML = dia + '/' + zero + mes + '/' + ano;
});


function chat() {
if (document.getElementById("chat").style.width === '300px') {
    document.getElementById("chat").style.height = '0px'
    document.getElementById("chat").style.width = '0px'
    document.getElementById("chatzin").style.height = '30px'
    
  }
else{
  document.getElementById("chat").style.height = '300px'
  document.getElementById("chat").style.width = '300px'
  document.getElementById("chatzin").style.height = '328px'
}
}

