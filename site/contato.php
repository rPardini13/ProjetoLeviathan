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
		include 'menu.php'


		?>
	</div>

	<div id="conteudo">
		
<!-- ---------------------------FORMULARIO--------------------------- -->


		<form action="cad_contato.php" method="post">
			<label class="legenda">NOME :</label><br>
			<input type="text" name="nome" class="campos" placeholder="Preencha este campo com seu nome" required><br>
		
			<label class="legenda">EMAIL :</label><br>
			<input type="email" name="email" class="campos" placeholder="Digite seu emali aqui" required><br>
	
			<label class="legenda">ASSUNTO :</label><br>
			<input type="text" name="assunto" class="campos" placeholder="Sobre o que você deseja falar ?" required><br>
		
			<label class="legenda">CONTEUDO :</label><br>
			<textarea name="conteudo" class="campo2" placeholder="Digite no maximo 140 caracteres o conteudo" maxlength="140"  required></textarea><br>
			
			<input type="submit" value="ENVIAR" class="bt_enviar">
		</form>


		<!-- ------------------------FIM DO FORMULARIO------------- -->
	</div>

	<div id="rodape">
		
	    <?php
		include 'rodape.php'


		?>
	</div>

</div>  <!-- fim da div geral -->

</body>
</html>