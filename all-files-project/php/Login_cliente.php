<?php 
    session_start();
    include_once("conexao.php");

  /*$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "tcc";
    
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    }else{
    //echo "Conexão realizada com sucesso!";

    $email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) :  FALSE;
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) :  FALSE;

    if(!$email || !$senha){
        echo "voce deve digitar sua senha e login!";
        exit;
    }

    $SQL = "SELECT * FROM cliente";
    $result_id = @mysql_query($SQL) or die("Erro no BD");
    $total = @mysql_num_rows($result_id);

    if($total){
        $dados = @mysql_fetch_array($result_id);
    
        if(!strcmp($senha, $dados["senha"])){
            $_SEESION["email"] = $dados["email"];
            header("Location: ../home.php");
            exit;
        }else{
            echo "Senha inválida";
        }
        
    }else{
        echo "O login fornecido por vc é inexistente";
    }
    }*/
    
    

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
       /* $usuario = mysql_real_escape_string($conn, $_POST['email']);
        $senha = mysql_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);*/
        
        $usuario = ($_POST['email']);
        $senha = ($_POST['senha']);
        $senha = md5($senha);

        $sql = "select * from cliente where email = '$usuario' and senha = '$senha'";
       // $sql = "select * from cliente where email = ? and senha = ? LIMIT 1";
        //$result = mysqli_query($conn, $sql);
        $result = $conn -> query($sql);
        //$result -> bind_param("ss", $usuario, $senha);
       // $resultado = ($result->query());
        //echo $result -> num_rows;
        $resultado = $result->fetch_array();
        //echo $resultado ['nome'];
        //echo $usuario;
        //echo $senha;
     
    if(isset($resultado)){
        $_SESSION['login_email'] = $usuario;
        header("Location: ../perfil.php");
        $_SESSION['entrou'] = " usuário!"; 
        //$_SESSION['logado'] = "<div class=\"card-panel #d50000 red accent-2\"><b>Você precisa estar logado para acessar essa página!!</b></div>"; 
    }
    elseif(empty($resultado)){
        $_SESSION['loginErro'] = "**Usuário ou senha inválidos**";
    header("Location: ../login.php");
    }
    else{
       $_SESSION['loginErro'] = "**Usuário ou senha inválidos**";
    header("Location: ../login.php"); 
    }
    
    /*if(($senha == "123") && ($usuario == "isa@google.com")){
        header("Location: ../Home.php");
    }else{
       $_SESSION['loginErro'] = "**Usuário ou senha inválidos**";
    header("Location: ../login.php"); 
    }*/
    
    }else{
        $_SESSION['loginErro'] = "**Usuário ou senha inválidos**";
        header("Location: ../login.php");
}
?>