<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$telefone=$_POST['telefone'];
$senha = md5($senha);

//echo $telefone;

include_once 'Compositor.php';

$compositor = new Compositor ($nome, $email, $senha, $telefone);

$compositor->cadastrar();

header("location:../LoginComp.php");
        
?>