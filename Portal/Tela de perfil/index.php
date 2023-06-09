<?php
session_start();
ob_start();

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
    <a href="sair.php"> Sair</a>
    <main class="main">
        <div class="tabela" id="tabela">
            <ul>
                <li id="inf" onclick="inf1(), esc1()">
                    <img class="icons" src="./images/informacoes.png" alt="icon">
                    <span>Informações pessoais</span>
                </li>
                <li id="n2" onclick="inf2(), esc2()">
                    <img class="icons" src="./images/endereco.png" alt="icon">
                    <span>Endereço</span>
                </li>
                <li id="n3" onclick="inf3(), esc3()" >
                    <img class="icons" src="./images/escola.png" alt="icon">
                    <span>Informações de cargo</span>
                </li>
            </ul>
        </div>
        <div class="informacoes" id="informacoes">
            <ul>
                <li>
                    <span>Nome completo: <?php echo $_SESSION['nome']; ?></span>
                </li>
                <li>
                    <span>CPF: <?php echo $_SESSION['cpf']; ?></span>
                </li>
                <li>
                    <span>Data de nascimento: <?php echo $_SESSION['nascimento']; ?></span>
                </li>
                <li>
                    <span>Telefone: <?php echo $_SESSION['telefone']; ?></span>
                </li>
                <li>
                    <span>Email: <?php echo $_SESSION['email']; ?> </span>
                </li>
            </ul>
        </div>
        <div class="endereco" id="endereco">
            <ul>
                <li>
                    <span>Endereço: <?php echo $_SESSION['endereco']; ?></span>
                </li>
                <li>
                    <span>Bairro: <?php echo $_SESSION['bairro']; ?></span>
                </li>
                <li>
                    <span>Número: <?php echo $_SESSION['numero']; ?></span>
                </li>
            </ul>
        </div>
        <div class="cargo" id="cargo">
            <ul>
                <li>
                    <span>Cargo: <?php echo $_SESSION['cargo']; ?></span>
                </li>
            </ul>

        </div>
    </main>

    <footer class="chatzin" id="chatzin">
        <img src="./images/chat.png" alt="chat" onclick="chat()">
        <div class="chat" id="chat">
            <header>Contatos</header>
        </div>
    
    </footer>
    
</body>

<script src="./script.js"></script>
</html>