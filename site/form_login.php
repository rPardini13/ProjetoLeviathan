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
		include 'topo.php';
		?>
	</div>
	<div id="menu">
		<?php
		include 'menu.php';
    	?>
	</div>
	<div id="conteudo">
<body style="background-color: #008B8B;">

<div id="box_form">
	<h1 class="titulos" style="font-size: 40px">ENTRAR NO SITE</h1>
	<form action="login_acao.php" method="POST" enctype="multipart/form-data">
		<input type="email" name="email" class="campos_cad" placeholder="email">
		<input type="password" name="senha" class="campos_cad" placeholder="senha">
					<!-- formatação dos botoes -->
	<div id="botoes">
		<input type="submit" value="LOGAR" class="bt_cad">
	</div>


	</form>
	


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