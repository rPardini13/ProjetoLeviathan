<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Criando site em PHP </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div id="geral">
	<div id="topo">
		<?php
		error_reporting(0);
		include 'topo.php';
		?>
	</div>
	<div id="menu">
		<?php
		include 'menu.php';
    	?>+
	</div>
	<div id="conteudo">
	<?php
		include 'connect.php';
		$id = 0;
		$id = $_REQUEST['id']; /*isset verifica se existe*/
	//	echo $id;
		if ($id > 0) {
			/*Consultar o usuario com esse ID e trazer as informações */
			$sql = "SELECT `id`, `nome`, `email`, `senha`, `lembrete`, `foto` FROM `cadastros` WHERE id=".$id;
	//		echo $sql;

			$resultado = mysqli_query($link,$sql);
			foreach($resultado as $valor) {
				$nome = $valor['nome'];
				$email = $valor['email'];
				$senha = $valor['senha'];
				$lembrete = $valor['lembrete'];
			}
		//	echo $nome;

		}
    	?>

<body style="background-color: #008B8B;">

<div id="box_form">
	<h1 class="titulos" style="font-size: 40px">Cadastre-Se</h1>
	<form action="cadastro.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id?>">
		<p>Nome:<input type="texto" name="nome" class="campos_cad" placeholder="NOME" value="<?php echo $nome?>"></p>
		<p>Email:<input type="email" name="email" class="campos_cad" placeholder="EMAIL" value="<?php echo $email?>"></p>
		<p>Senha:<input type="password" name="senha" class="campos_cad" placeholder="SENHA" value="<?php echo $senha?>"></p>
		<p>Repetir Senha:<input type="password" name="repetesenha" class="campos_cad" placeholder="REPETIR SENHA" value="<?php echo $senha?>"></p>
		<p>Lembrete: <input type="texto" name="lembrete" class="campos_cad" placeholder="LEMBRETE" value="<?php echo $lembrete?>"></p>
		<input type="file" name="foto" class="campos_cad">
					<!-- formatação dos botoes -->
	<div id="botoes">
		<?php if ($id > 0) { ?><!-- Trazer o botão atualizar qdo o id for maior que 0-->
			<input type="submit" value="ATUALIZAR" class="bt_cad">
		<?php } else { ?>		
		    <input type="submit" value="CADASTRAR" class="bt_cad">
		    <input type="reset" value="LIMPAR" class="bt_cad">
        <?php } ?>
	</div>


	</form>
	<div class="botoes">
	<a href="index.php" class="form_link">&larr;VOLTAR PARA PAGINA PRINCIPAL</a>
	<p class="p_form">Já Possui cadastro?  Então click no link abaixo para login</p>
	<a href="login.php" class="form_link">LOGAR</a>
	</div>


</div>
</div>
	<div id="rodape">
	    <?php
		include 'rodape.php';
		?>
	</div>
</div>  <!-- fim da div geral -->
</body>
</html>