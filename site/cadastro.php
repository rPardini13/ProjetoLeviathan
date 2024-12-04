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
    $id          =  $_POST['id']; /* Alterado em 13/11/2024 */
	$nome 		 = 	$_POST['nome'];
	$email 		 = 	$_POST['email'];
	$senha	   	 = 	$_POST['senha'];
	$repetesenha = 	$_POST['repetesenha'];
	$lembrete 	 = 	$_POST['lembrete'];
	$foto		 =  $_FILES['foto']['name'];
	$tipo 		 =  $_FILES['foto']['type'];

//Deletar registro
if ($_GET['acao'] == 'deletar') {
	$id          =  $_GET['id'];
	$sql = "DELETE FROM `cadastros` WHERE id=".$id;
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
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
	if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
	  echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
	} else {
	  echo "Sorry, there was an error uploading your file.";
	}
  }

///// Vamos inserir ou atualizar os cadastros
 if($id > 0) {
//Atualiza o cadastro
$sql = "UPDATE `cadastros` SET `nome`='".$nome."',`email`='".$email."',`senha`='".$senha."',`lembrete`='".$lembrete."' WHERE id=".$id;
$resultado = mysqli_query($link,$sql);
echo ('<script> alert("Cadastro atualizado com sucesso!!!");</script>');
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; http://localhost/israel/site/form_login.php">'; /* redirecionar para tela de login */

 } else {
//Adiciona um novo cadastro
$sql = "INSERT INTO `cadastros`(`nome`, `email`, `senha`, `lembrete`, `foto`) VALUES ('".$nome."','".$email."','".$senha."','".$lembrete."','".$foto."')";

$resultado = mysqli_query($link,$sql);
echo ('<script> alert("Cadastro Inserido com sucesso!!!");</script>');
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; http://localhost/israel/site/form_login.php">'; /* redirecionar para tela de login */ 

}


}

?>