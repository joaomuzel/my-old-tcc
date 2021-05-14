<?php 
    session_start();
    include_once("conexao.php");

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        
        $usuario = ($_POST['email']);
        $senha = ($_POST['senha']);
        $senha = md5($senha);
        
        $sql = "select * from adm where email = '$usuario' and senha = '$senha'";
       
        $result = $conn -> query($sql);
       
        $resultado = $result->fetch_array();
        
    if(isset($resultado)){
        $_SESSION['login_email'] = $usuario;
        header("Location: ../perfilAdm.php");
        $_SESSION['entrou'] = " administrador!";   
        
    }
    elseif(empty($resultado)){
        $_SESSION['loginErro'] = "**Usuário ou senha inválidos** vazio";
    header("Location: ../loginAdm.php");
    }
    else{
       $_SESSION['loginErro'] = "**Usuário ou senha inválidos** ";
    header("Location: ../loginAdm.php"); 
    }
    
    
    }else{
        $_SESSION['loginErro'] = "**Usuário ou senha inválidos**";
        header("Location: ../loginAdm.php");
}

        
?>