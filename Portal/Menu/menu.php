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
    <link rel="stylesheet" href="style.css">
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
        <div class="boas-vindas">
            <h1>Seja bem vindo(a)</h1>
            <h2><?php echo $_SESSION['nome']; ?></h2>
        </div>
        <hr>

        <div class="quadros">
            <div class="resumo">
                <span class="dia">Tarefas do dia
                   <p id ="data-atual"></p>
                </span>

                <div class="qdr1" id="qdr1">
                    <input type="checkbox" name="tarefa1" id="tarefa" onclick="riscado()">
                    <label for="checkbox">Tarefa 1</label>

                    <span style="font-weight:bold;" id="descricao">Descrição Descrição Descrição Descrição Descrição
                        Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição
                        Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição
                        Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição
                        Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição
                        Descrição Descrição Descrição </span>


                </div>
            </div>

        </div>
        </div>

    </main>
<footer class="chatzin"  id="chatzin">
    <img src="./images/chat.png" alt="chat" onclick="chat()">
    <div class="chat" id="chat">
        <header>Contatos</header>
    </div>


</footer>
    <script src="./script.js"></script>
    

</body>
</html>