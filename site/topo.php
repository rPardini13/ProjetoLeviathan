<?php
session_start();

if ($_SESSION['nome'] != '') {
    echo "<div style='color:white;font-size: 20px;text-transform: uppercase;'>Seja bem vindo, ".$_SESSION['nome']."</div>";
    echo '<a href="acao_logoff.php" class="link_top"> LOGOFF </a>';
    echo '<a href="cadastros.php" class="link_top"> USUÁRIOS </a>';       
        /*Alterado em 11/11/2024*/

}
?>
<img src="imagens/icon.png.png" class="logo">
<a href="form_login.php" class="link_top"> LOGAR </a>
<a href="form_cadastro.php" class="link_top">CADASTRE-SE</a> 