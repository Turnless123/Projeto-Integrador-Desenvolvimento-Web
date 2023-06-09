<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "informacoes";

try{
$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);


// echo "Conectado ao banco de dados";
}

catch(PDOException $err){
    echo "erro, fracasso" . $err->getMessage();
}

$query = sprintf("SELECT * FROM informacoes");
$result = $conn->prepare($query);
$result->execute();
$linha = $result->fetch(PDO::FETCH_ASSOC);
$total = $result->rowCount();
?>
