<?php
session_start();
ob_start();
include_once 'config.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    header("Location: ../../Portal/Login%20pronta/index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js"></script>
</head>

<body>
    <header class="header">
        <a href="">
            <img class="logo" src="./images/logo.png" alt="logo">
        </a>
        <div class="icones">
            <img src="images/menu.png" id="btnmenu" title="Menu" onmouseover="abrirmenu()" onclick="fecharmenu()">
        </div>
    </header>

    <div class="escolha" id="escolhas" onmouseleave="fecharmenu()">
        <a class="escolhaInput" href= "../Tela de perfil/index.php"> <span>Perfil</span></a> 
        <a class="escolhaInput" href= "../Menu/menu.php"> <span>Menu</span></a>
        <a class="escolhaInput" href= "../Tarefas/index.php"> <span>Tarefas</span></a>
        <a class="escolhaInput" href= "../Registrar tarefas/index.php"> <span>Registrar tarefas</span></a>
    </div>



    <main class="conteudo">
        <div class="quadros">
            <div class="resumo">
                <form action="index.html" method="POST">
                <input class="dia" placeholder="Título da tarefa..."></input>
                    <textarea rows="21" style="font-weight:bold;" id="descricao" class="descricao" placeholder="Descrição"> </textarea>
                        <span class="exp">Escolha a data da tarefa:</span>
                        <div class="enviar">
                            <input type="date" id="dataInput" class="calendario" >
                            <script>
                                var dataAtual = new Date().toISOString().split('T')[0];
                                document.getElementById('dataInput').min = dataAtual;
                              </script>
                        <div class="btn">
                            <span>Enviar</span>
                        </div>
                    </div>
                </form>
                </div>
            </div>

        </div>
        </div>
    </main>

<footer class="chatzin" id="chatzin">
    <img src="./images/chat.png" alt="chat" onclick="chat()">
    <div class="chat" id="chat">
        <header>Contatos</header>
    </div>


</footer>

</body>

</html>