<?php /*
	try{
		$conexao = new PDO('mysql:host=localhost; dbname=tcc', 'root', '');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}*/ 
?>
 <?xml version="1.0" encoding="UTF-8"?>
<?php
session_start();

include("php/conexao.php");

    $usuario = $_SESSION['login_email'];
    $nome = "";
    $email = "";
    $busca = $conn -> query("select * from adm where email = '$usuario'");
    while($linha = $busca->fetch_array()){
        $nome = $linha['nome'];
        $email = $linha['email'];
        $cpf = $linha['cpf'];
    }

include("php/logout.php");

//require_once("php/Login_compositor.php");
?>
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="arquivos/imagens/capa_icon.jpg" type="image/x-icon" />
    <title>Lista de Usuários - <?php echo $nome; ?></title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <style>
            h3#black{
                color: black;
                font-family: fantasy;
            }
            h3#white{
                color: white;
                font-family: fantasy;
            }
            img#tamanho{
            width: 250px;
            }
            div#pos{
                margin-top:-180px;
                margin-left:300px;
            }
            a#bot{
                width: 500px;
            }

        </style>
        <?php
    include_once 'php/Cliente.php';

    $u = new Cliente ("", "", "", "");
    ?>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <!--Menu-->
    <nav class="#d50000 red accent-4 z-depth-0">  
    <div class="nav-wrapper container">
      <a href="Home.php" class="brand-logo left">Divulga Músicas</a>
      <a href="#" data-activates="menu-mobile" class="button-collapse right">
        <i class="material-icons">menu</i>
        </a>
       
         <!-- Dropdown usuario -->
        <ul id="usuario" class="dropdown-content">
          <li><a href="perfilAdm.php">Perfil</a></li>
          <li><a href="?sair" onClick="return confirm('Desesa mesmo sair?')">Sair</a></li>
        </ul>
        
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="Instrumental.php">Instrumentais</a></li>
          <li><a href="Letras.php">Letras</a></li>
          <li class="divider"></li>
          <li><a href="Musica.php">Música Completa</a></li>
        </ul>
        
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="Home.php">Home</a></li>
          <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Músicas<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="Compositores.php">Compositores</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="usuario"><?php echo $nome; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
        
        <!-- Dropdown usuario -->
        <ul id="usuario2" class="dropdown-content">
          <li><a href="perfilAdm.php">Perfil</a></li>
          <li><a href="?sair" onClick="return confirm('Desesa mesmo sair?')">Sair</a></li>
        </ul>
        
        <!-- Dropdown Structure Mobile -->
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="Instrumental.php">Instrumentais</a></li>
          <li><a href="Letras.php">Letras</a></li>
          <li class="divider"></li>
          <li><a href="Musica.php">Música Completa</a></li>
        </ul>
        
        <ul id="menu-mobile" class="side-nav">
        <li><a href="Home.php">Home</a></li>
            <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Músicas<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="Compositores.php">Compositores</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="usuario2"><?php echo $nome; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
        
        <br>
        
        <div class="container">
            <h1>Usuarios cadastrados:</h1>
            <BR>
    <?php
    $u->listar();
    ?>
    <HR>        
            <?php /*
                if(isset($_SESSION['entrou'])){
                    echo $_SESSION['entrou'];
            }
                
            
            $select = "SELECT * from compositores WHERE email=:usuario LIMIT 1";
                  $contagem =1;
                    try{
                      $resultado = $conexao->prepare($select);
                      $resultado -> bindParam('email', $Url, PDO::PARAM_INT);
                      $resultado->execute();
                      $contar = $resultado->rowCount();
                      if($contar>0){
                         
                        while($exibe = $resultado->FETCH(PDO::FETCH_OBJ)){
                       
                       ?>
              <?php echo $exibe->nome; ?>

  <?php 
                 }
      }
      
    }catch(PDOException $e){
      echo $e;
    }
    */
  ?>
            
            <!--
            <a href="CadMusicaCompleta.php"  target="blank" class="waves-effect waves-light btn-large" id="bot"><i class="material-icons right">add</i>Cadastrar Música Completa</a><br><br>
            <a href="CadMusicaInstrumental.php"  target="blank" class="waves-effect waves-light btn-large" id="bot"><i class="material-icons right">add</i>Cadastrar Música Instrumental</a><br><br>
            <a href="CadMusicaLetra.php"  target="blank" class="waves-effect waves-light btn-large" id="bot"><i class="material-icons right">add</i>Cadastrar Letra</a><br><br>-->
        </div>
        <br>

        <!--Footer-->
        <footer class="page-footer #d50000 red accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Divulga Músicas</h5>
                <p class="grey-text text-lighten-4">Apoaindo sempre a música independente.</p>
                  <p class="grey-text text-lighten-4">Para Contato: divulgamusicas@gmail.com</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="Home.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="QuemSomos.php">Quem Somos?</a></li>
                    <li><a class="grey-text text-lighten-3" href="login.php">Entrar</a></li>
                  <li><a class="grey-text text-lighten-3" href="Cadastro.php">Cadastre-se</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Copyright © 2017 · http://www.divulgamusicas.com · All Rights Reserved.
            </div>
          </div>
        </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
        //menu
        $(".button-collapse").sideNav();
        </script>
        <script>
        //dropdown
        $(".dropdown-button").dropdown();
        </script>
        <script>
        //carrocel
        $(document).ready(function(){
        $('.slider').slider();
        });
        </script>
    </body>
  </html>