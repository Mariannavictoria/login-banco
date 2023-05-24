<?php
session_start();
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$database = new PDO('mysql:host=localhost;dbname=LOGIN1', 'root', '');
print 'conexão foi feita! <br> <br>';

$query = $database -> prepare("SELECT * FROM tbUsuarios WHERE nmUsuario = :nome AND senha = :senha");

$query -> bindParam(':nome', $nome);
$query -> bindParam(':senha', $senha);
$query -> execute();
$data = $query -> fetch(PDO::FETCH_ASSOC);

if($data)
{
$_SESSION['nome'] = $nome;
$_SESSION['senha'] = $senha;
header('location:3.php');
exit();
}
else
{
  header('location:4.php');
}












