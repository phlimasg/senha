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
$num = $row['NUM'];
?>
    <html>
    <head>
        <meta http-equiv="refresh" content="5" />
        <meta charset="utf-8">
    </head>
    <body>
    <div align="center">
        <div style="font-size: 50px">
            <?php
            echo 'Senha atual: '.$num;
            ?>
        </div>
    </div>
    </body>
    </html>
