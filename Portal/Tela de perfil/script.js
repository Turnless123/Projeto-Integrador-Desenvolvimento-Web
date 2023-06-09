function abrirmenu() {
    document.getElementById("escolhas").style.height = '240px'
}
function fecharmenu() {
    document.getElementById("escolhas").style.height = '0%';
}

 

function inf1() {
    informacoes.style.display= "flex"
    cargo.style.display= "none"
    endereco.style.display = "none"



}

function inf2() {
    informacoes.style.display= "none"
    cargo.style.display= "none"
    endereco.style.display = "flex"


}

function inf3() {
    informacoes.style.display= "none"
    cargo.style.display= "flex"
    endereco.style.display = "none"
}

function esc1() {
    inf.style.filter = "invert(100%)"
    n2.style.filter = ""
    n3.style.filter = ""
}


function esc2() {
    inf.style.filter = ""
    n2.style.filter = "invert(100%)"
    n3.style.filter = ""
}



function esc3() {
    inf.style.filter = ""
    n2.style.filter = ""
    n3.style.filter = "invert(100%)"
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