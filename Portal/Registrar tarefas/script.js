function abrirmenu() {
  document.getElementById("escolhas").style.height = '240px'
}
function fecharmenu() {
  document.getElementById("escolhas").style.height = '0%';
}




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



