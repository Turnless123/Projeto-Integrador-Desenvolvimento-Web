<?php
include_once "config.php";
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$hash = password_hash( $dados['senha'], PASSWORD_DEFAULT);

if (!empty($dados["registrar"])) {
    $query_informacoes = "INSERT INTO informacoes
                (senha, nome, cpf, nascimento, telefone, email, endereco, bairro, numero, cargo) VALUES
                (:senha, :nome, :cpf, :nascimento, :telefone, :email, :endereco, :bairro, :numero, :cargo)";
    $cad = $conn->prepare($query_informacoes);
    $cad->bindParam(':senha', $hash);
    $cad->bindParam(':nome', $dados['nome']);
    $cad->bindParam(':cpf', $dados['cpf']);
    $cad->bindParam(':nascimento', $dados['nascimento']);
    $cad->bindParam(':telefone', $dados['telefone']);
    $cad->bindParam(':email', $dados['email']);
    $cad->bindParam(':endereco', $dados['endereco']);
    $cad->bindParam(':bairro', $dados['bairro']);
    $cad->bindParam(':numero', $dados['numero']);
    $cad->bindParam(':cargo', $dados['cargo']);
    $cad->execute();
    echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Usuário cadastrado com sucesso')
window.location.href='http://localhost/teste/Portal/registrar%20usu%C3%A1rio/registro.php';
</SCRIPT>");
}
else{
    echo 'erro';
}