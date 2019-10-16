<?php
function conectar(){
    $servidor = 'localhost';
    $usuario = 'dev2';
    $senha = '@@dev2##';
    $banco = 'senha';
    $conn = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$conn)
        echo 'Erro de conexão: '.mysqli_connect_error();
    return $conn;
}
$conn = conectar();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $senha = $_POST['senha'];
    $sql = "UPDATE senha SET NUM = '$senha' ";
    $result = mysqli_query($conn, $sql);
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="margin: 0 auto; font-family: 'Segoe UI'; font-size: 40px;">
<div align="center">
    <a href="proximo.php">Início</a>
    <form action="" method="post">
        Insira o numero de senha: <br>
        <input type="number" name="senha">
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>