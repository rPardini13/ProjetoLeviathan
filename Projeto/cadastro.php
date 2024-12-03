<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<?php
// conexão com o banco de dados
include "connect.php";

// arquivo de cadastro
$id             = $_POST['id'];
$nome           = $_POST['nome'];
$telefone       = $_POST['telefone'];
$email          = $_POST['email'];
$senha          = $_POST['senha'];
$repetesenha    = $_POST['repetesenha'];
$foto           = $_FILES['foto']['name'];

//Deletar registro
if ($_GET['acao'] == 'deletar') {
	$id          =  $_GET['id'];
	$sql = "DELETE FROM `lev-cadastros` WHERE id=".$id;
	$resultado = mysqli_query($link,$sql);
	echo "ok";
}	else {

//	var_dump($_FILES);

//Processo de enviar a imagem /* Alterado em 13/11/2024 */
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "O arquivo é uma imagem - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "O arquivo não é uma imagem.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Desculpe, não foi possível carregar o seu arquivo.";
  // if everything is ok, try to upload file
  } else {
	if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
	  echo "O arquivo ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " foi carregado com sucesso.";
	} else {
	  echo "Desculpe, ocorreu um erro ao carregar o arquivo.";
	}
  }

///// Vamos inserir ou atualizar os cadastros
 if($id > 0) {
//Atualiza o cadastro
$sql = "UPDATE `lev-cadastros` SET `nome`='".$nome."',`telefone`='".$telefone."',`email`='".$email."',`senha`='".$senha."',`repetesenha`='".$repetesenha."',`foto`='".$foto."' WHERE id=".$id;
$resultado = mysqli_query($link,$sql);
echo ('<script> alert("Cadastro atualizado com sucesso!!!");</script>');
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; http://localhost/Romulo/Projeto/form_login.php">'; /* redirecionar para tela de login */

 } else {
//Adiciona um novo cadastro
$sql = "INSERT INTO `lev-cadastros`(`nome`,`telefone`, `email`, `senha`, `repetesenha`, `foto`) VALUES ('".$nome."','".$telefone."','".$email."','".$senha."','".$repetesenha."','".$foto."')";

$resultado = mysqli_query($link,$sql);
echo ('<script> alert("Cadastro Inserido com sucesso!!!");</script>');
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; http://localhost/Romulo/Projeto/form_login.php">'; /* redirecionar para tela de login */ 

}


}
?>