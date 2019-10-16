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
$sql = 'select NUM from senha';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
<html>
<head>
    <meta http-equiv="refresh" content="5" />
    <meta charset="utf-8">
</head>
<body style="margin: 0 auto; background-color: forestgreen;color: white; font-family: 'Segoe UI'">
<div style="float: left;font-size: 40px; margin-left: 5%">
<?php
if(date('H')>0 and date('H') < 12){
    echo 'Bom dia!';
}
if(date('H')>=12 and date('H') <= 17){
    echo 'Boa tarde!';
}
if(date('H')>=18 and date('H') <= 23){
    echo 'Boa Noite!';
}
?>
</div>
<div style="font-size: 40px; margin-right: 5%" align="right">
    <?php
    echo date('H:i');
    ?>
</div>
<div style="width: 100%;  margin: 0 auto; " align="center">
<h1>Número para atendimento:</h1>
<span style="font-size: 500px">
<?php
echo $row['NUM'];
?>
</div>
<div style="width: 100%; background-color: red; bottom: 0; position: absolute"align="center">
    <h1> Número anterior:</h1>
    <div style="font-size: 80px">
    <?php
    echo ($row['NUM']-1);
    ?>
    </div>
</div>
</body>
</html>

