<?php
 header("Content-type: text/html;charset=utf-8");

//Trazer as variaveis do form
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$conteudo = $_POST['conteudo'];

 // chmando a conexão com o banco 
 include_once("connect.php");

 // criando uma variavel que vai conter o comando mysql para inserir registros

 $sql ="INSERT INTO contato(nome,email,assunto,conteudo) VALUES('$nome','$email','$assunto','$conteudo')";
 echo $sql;

 $resultado = mysqli_query($link,$sql);

 var_dump($resultado);

	// verificando se deu certo....

	if ($resultado == TRUE) {
		echo ('<script> alert("Contato inserido com sucesso!!!");</script>');}
		else
		{
		echo('<script>alert("Falha na inserção do Contato")</script>');}

		//mysqli_close();
		//mysqli


 


?>