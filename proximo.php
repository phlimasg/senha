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
$sql = 'select * from senha';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $sql = 'select * from senha';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $num0 = $row['NUM'];
    $num = $row['NUM'] + 1;
    $cont = $row['CONT'] + 1;
$sql = "UPDATE senha SET CONT = '$cont', NUM = '$num' WHERE senha.NUM = $num0;";
$result = mysqli_query($conn, $sql);
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<div align="center">
    <a href="fila.php">Acertar fila</a>
    <iframe src="atual.php" frameborder="0" width="100%"></iframe>
<form action="" method="post">
    <input type="submit" value="PRÓXIMA SENHA" style="background-color: darkcyan; color: seashell; height: 200px; width: 100%; font-size: 100px">
</form>
    <div style="font-size: 50px">
        <?php
        if(!empty($num))
        echo 'Última senha que você chamou: '.$num;
        ?>
    </div>
</div>
</body>
</html>

