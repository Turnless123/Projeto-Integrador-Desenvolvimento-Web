<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "informacoes";

try{
$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);


// echo "Sucesso";
}

catch(PDOException $err){
    echo "Não está conectado com o banco de dados" . $err->getMessage();
}