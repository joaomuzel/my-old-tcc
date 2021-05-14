<?php
$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "tcc";
    
    $conn = new mysqli($servidor, $usuario, $senha, $dbname);
    
    if($conn->connect_errno){
        die("Falha na conexão: " . $conn->connect_error());
    }else{
//echo "Conexão realizada com sucesso!";
}
?>