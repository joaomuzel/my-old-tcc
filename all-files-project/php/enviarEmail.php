<?php

$para = "jmuzelaraujo@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];
$assunto = $_POST['assunto'];

    $corpo = "<strong> Mensagem de contato</strong><br><br>";
    $corpo .= "<strong> Nome: </strong> $nome";
    $corpo .= "<strong> Email: </strong> $email";
    $corpo .= "<strong> Mensagem: </strong> $msg";
    
    $header = "Content-Type: text/html; charset = utf-8";
    $header .= "From: $email Reply-to $email";
    

mail($para, $assunto, $corpo, $header);

    header("Location: ../Contato.php?msg=enviado");
?>