<?php
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$senha = md5($senha);

//echo $nome, $cpf, $email, $senha;
include_once 'Adm.php';

$adm = new Adm ($nome, $cpf, $email, $senha);

$adm->cadastrar();

header("location:../LoginAdm.php");
        
?>