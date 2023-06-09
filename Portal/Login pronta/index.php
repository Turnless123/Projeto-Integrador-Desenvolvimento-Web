<?php
session_start();
ob_start();
include_once 'config.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    //echo password_hash(123, PASSWORD_DEFAULT);

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


    if (!empty($dados['botao'])) {
       // var_dump($dados);
        $query_id = "SELECT *
        FROM informacoes 
        WHERE id = :id
        LIMIT 1";
        $result_id = $conn->prepare($query_id);
        $result_id->bindParam(':id', $dados['id']);
        $result_id->execute();

        if (($result_id) and ($result_id->rowCount() != 0)) {
            $row_id = $result_id->fetch(PDO::FETCH_ASSOC);
            //   var_dump($row_id);

            if (password_verify($dados['senha'], $row_id['senha'])) {
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
                header("location:../../Portal/Menu/menu.php");
            } else {
                echo "Erro: senha inválida";
            }
        } else {
            echo "Erro: usuário inválido";
        }
    }
    ?>

    <div class="page">
        <form method="POST" class="login" action="">
            <img src="./images/logo.png" alt="logo">
            <label>ID de usuário</label>
            <input type="text" placeholder="Digite seu ID" autofocus="true" name="id" value="<?php if(isset($dados['id'])){echo $dados['id'];} ?>">
            <label>Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" value="<?php if(isset($dados['senha'])){echo $dados['senha'];} ?>">
            <input type="submit" class="btn" name="botao">

        </form>
    </div>
    

    <script src="./script.js"></script>
</body>

</html>