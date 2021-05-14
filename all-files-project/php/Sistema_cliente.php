<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$senha = md5($senha);

include_once 'Cliente.php';

$cliente = new Cliente ($nome, $sobrenome, $email, $senha);

$cliente->cadastrar();

header("location:../login.php");
        
?>