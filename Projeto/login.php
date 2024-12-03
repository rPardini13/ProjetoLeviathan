<?php header("Content-Type: text/html;charset=utf-8");
 
$host = "localhost";
$user = "root";
$pass = "";
$db = "romulo";
 
$link = mysqli_connect($host, $user, $pass, $db);
$banco = mysqli_connect_errno();
 
 
 
if ($banco == true) {
    echo "Erro na conexão";
} else {
    echo "Conexão ok!" . "<br>";
}
try {
    session_start();
 
    $EMAIL = $_POST['email'];
    $SENHA = $_POST['senha'];
 
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Definir o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Consulta SQL
    $sql = "SELECT id, nome, email, senha FROM `lev-cadastros` WHERE `email` = '$EMAIL' and `senha` = '$SENHA'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        foreach ($result as $row) {
            echo "<br> id: " . $row["id"] . " - Email: " . $row["email"] . "- Senha: ". $row["senha"] . "<br>";
            $CEmail = $row["email"];
            $CSenha = $row["senha"];
            $Cnome = $row["nome"];
            $CId = $row["id"];
            $confirma = true;
        }
    } else {
        echo "Usuário(a) Invalido(a)!";
        $confirma = false;
    }
    if($confirma === true) {
        $_SESSION['nome'] = $Cnome;
        $_SESSION['email'] = $CEmail;
        $_SESSION['id'] = $CId;
    echo "<script>
    window.location.href='home.php';
    alert('Login Feito com Sucesso');
    </script>";
    }
    else {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo "<script>
        window.location.href='form_login.php';
        alert('Usuário(a) Inválido(a)');
        </script>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
 
?>