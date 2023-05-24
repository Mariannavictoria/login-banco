<?php
session_start();

if ((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
{
    header('location:1.php');
}

$usuario = $_SESSION ['nome'];
echo 'bem vindo ' .  $usuario;
?>

<!doctype html>
<html>
    <head>
        <title>pagina principal</title>
    </head>
    <body>
        <p id="p1">MELHORES TIMES</p>

        <p id="p2"> PRIMEIRO LUGAR </P>

        <P id="p3"> São Paulo Futebol Clube </P>
    </body>
</html>


