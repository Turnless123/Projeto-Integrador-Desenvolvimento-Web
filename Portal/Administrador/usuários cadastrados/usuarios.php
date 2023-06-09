<?php
session_start();
ob_start();
include_once 'banco.php'
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js"></script>
</head>

<body>
<header class="header">
        <a href="">
            <img class="logo" src="../images/logo.png" alt="logo">
        </a>
        <div class="icones">
            <img src="../images/menu.png" id="btnmenu" title="Menu" onmouseover="abrirmenu()" onclick="fecharmenu()">
        </div>
    </header>

    <div class="escolha" id="escolhas" onmouseleave="fecharmenu()">
        <a href="../index.html">
            <span>Registrar usuário</span>

        </a>
        <a href="../usuários cadastrados/usuarios.php">
            <span>Usuários cadastrados</span>

        </a>
    </div>
    </a>
    </div>
    <table>
        <thead>
            <tr>
                <th class="id">Id</th>
                <th class="nome">Nome</th>
                <th class="cargo">Cargo</th>
            </tr>
        </thead>
    </table>
    <?php

    $query = sprintf("SELECT * FROM informacoes");
    $result = $conn->prepare($query);
    $result->execute();
    $linha = $result->fetch(PDO::FETCH_ASSOC);
    $total = $result->rowCount();

    if ($total > 0) {
        do {
    ?>
            <table>
                <tbody>
                    <tr>
                        <td class="id"><?= $linha['id'] ?></td>
                        <td class="nome"><?= $linha['nome'] ?></td>
                        <td class="cargo"><?= $linha['cargo'] ?></td>
                    </tr>
                </tbody>
            </table>
    <?php
        } while ($linha = $result->fetch(PDO::FETCH_ASSOC));
    }


    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['botao'])) {
//  var_dump($linha);
//    var_dump($dados);
        unset($linha);
        $limitar = ("SELECT * 
   FROM informacoes
   WHERE id = :id
   LIMIT 1");
        $result_limit = $conn->prepare($limitar);
        $result_limit->bindParam(':id', $dados['id']);
        $result_limit->execute();

        

        if (($result_limit) and ($result_limit->rowCount() != 0)) {
            $row_id = $result_limit->fetch(PDO::FETCH_ASSOC);
            //   var_dump($row_id);

            echo 'Usuario logado';
            $_SESSION['id'] = $row_id['id'];
            $_SESSION['nome'] = $row_id['nome'];
            $_SESSION['cpf'] = $row_id['cpf'];
            $_SESSION['nascimento'] = $row_id['nascimento'];
            $_SESSION['telefone'] = $row_id['telefone'];
            $_SESSION['email'] = $row_id['email'];
            $_SESSION['endereco'] = $row_id['endereco'];
            $_SESSION['bairro'] = $row_id['bairro'];
            $_SESSION['numero'] = $row_id['numero'];
            $_SESSION['cargo'] = $row_id['cargo'];
            header("location:../../Menu/menu.php");
        }
        else{
            echo 'Insira um ID válido';
        }
    }
    ?>



    <form method="POST" class="login" action="">
        <td class="busca"> <input type="text" placeholder="Informe o ID do usuário" name="id">
        <th> <input type="submit" value="Enviar" name="botao"></th>
    </form>



    <footer class="chatzin" id="chatzin">
        <img src="../images/chat.png" alt="chat" onclick="chat()">
        <div class="chat" id="chat">
            <header>Contatos</header>
        </div>
    
    </footer>