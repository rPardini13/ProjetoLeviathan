<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "jhonatan";

$link = mysqli_connect($host, $user, $pass, $db);
$banco = mysqli_connect_errno();
$id = $_POST["id"];
$NOME = $_POST["nome"];
$EMAIL = $_POST["email"];
$TELEFONE = $_POST["telefone"];
$MENSAGEM = $_POST["mensagem"];
//fazendo a query
$sql = "INSERT INTO `Projetocontatos`(`nome`, `email`, `telefone`, `mensagem`)
    VALUES ('" . $NOME . "','" . $EMAIL . "','" . $TELEFONE . "','" . $MENSAGEM. "')";
echo $sql . "<br>";
//Inserindo no Banco
if ($link->query($sql) === TRUE) {
    echo "Novo Registro criado com Sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn-> error;
}




?>