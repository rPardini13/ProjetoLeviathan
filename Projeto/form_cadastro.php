<!DOCTYPE html>
<html>

<head>
    <title>
        Leviathan - Lan House
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_projeto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="banner">
        <?php
        include 'banner.php';
        ?>
    </div>
    <?php
		include 'connect.php';
		$id = 0;
		$id = $_REQUEST['id']; /*isset verifica se existe*/
	//	echo $id;
		if ($id > 0) {
			/*Consultar o usuario com esse ID e trazer as informações */
			$sql = "SELECT `id`, `nome`, `telefone`, `email`, `senha`, `repetesenha`, `foto` FROM `lev-cadastros` WHERE id=".$id;
	//		echo $sql;

			$resultado = mysqli_query($link,$sql);
			foreach($resultado as $valor) {
				$nome = $valor['nome'];
                $telefone = $valor['telefone'];
				$email = $valor['email'];
				$senha = $valor['senha'];
				$repetesenha = $valor['repetesenha'];
			}
			echo $nome;

		}
    	?>

    <div class="cadastro">
        <h1 class="login_titulo">Cadastro</h1>
        <form id="cadastro" class="" ACTION="cadastro.php" METHOD="post" enctype="multipart/form-data">
            <label class="labelform_login">Digite seu Nome:</label><br>
            <input type="text" class="txtform" name="nome" size="50" placeholder="Seu Nome" value="<?php echo $nome?>">
            <br><br>
            <label class="labelform_login">Digite seu Telefone:</label><br>
            <input type="text" class="txtform" name="telefone" size="50" placeholder="XX XXXXX-XXXX" value="<?php echo $telefone?>">
            <br><br>
            <label class="labelform_login">Digite seu Email:</label><br>
            <input type="text" class="txtform" name="email" size="50" placeholder="seuEmail@exemplo.com" value="<?php echo $email?>">
            <br><br>
            <label class="labelform_login">Digite sua Senha:</label><br>
            <input type="text" class="txtform" name="senha" size="50" placeholder="Sua Senha" value="<?php echo $senha?>">
            <br><br>
            <label class="labelform_login">Repita sua Senha:</label><br>
            <input type="text" class="txtform" name="repetesenha" size="50" placeholder="Repetir Sua Senha" value="<?php echo $repetesenha?>">
            <br><br>
            <input type="file" name="foto" class="txtform"></input>
            <br><br>
            <div id="botoes">
		        <?php if ($id > 0) { ?><!-- Trazer o botão atualizar qdo o id for maior que 0-->
			    <input type="submit" value="ATUALIZAR" class="btn">
		        <?php } else { ?>		
		        <input type="submit" value="CADASTRAR" class="btn">
		        <input type="reset" value="LIMPAR" class="btn_limpar">
                <?php } ?>
	        </div>
            <BR><BR>
            <a href="home.php" class="link-cad"> ⬅ VOLTAR PARA A PÁGINA PRINCIPAL</a>
            <br><br>
            <a href="form_login.php" class="link-cad">Já possui cadastro? Enão clique aqui para fazer o login!</a>
        </form>
    </div>

    <div class="rodape">
        <?php
        include 'rodape.php';
        ?>
    </div>
</body>

</html>