<?xml version="1.0" encoding="UTF-8"?>
<?php
session_start();
	
include("php/conexao.php");

    $usuario = $_SESSION['login_email'];
    $nome = "";
    $email = "";
    $busca = $conn -> query("select * from cliente where email = '$usuario'");
    while($linha = $busca->fetch_array()){
        $nome = $linha['nome'];
        $sobrenome = $linha['sobrenome'];
        $email = $linha['email'];
    }

include("php/logout.php");

//require_once("php/Login_compositor.php");
?>
<?php
         
                            if(!$_SESSION['login_email']){
                                session_destroy;
                                header("location: Home.php?msg=logado");
                            }
                            
?>
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="arquivos/imagens/capa_icon.jpg" type="image/x-icon" />
    <title><?php echo $nome. " " . $sobrenome; ?> - Meu Perfil</title>
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
          <li><a href="Instrumental.php">Perfil</a></li>
          <li><a href="?sair">Sair</a></li>
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
          <li><a href="faq.php">F.A.Q</a></li>
          <li><a class="grey-text text-lighten-3" href="Contato.php">Contato</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="usuario"><?php echo $nome. " " . $sobrenome; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
        
        <!-- Dropdown usuario -->
        <ul id="usuario2" class="dropdown-content">
          <li><a href="Instrumental.php">Perfil</a></li>
          <li><a href="?sair">Sair</a></li>
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
            <li><a class="dropdown-button" href="#!" data-activates="usuario2"><?php echo $nome. " " . $sobrenome; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
        
        <br>
        
        <div class="container">
            <h1>Meu Perfil</h1>

            <br>
            <img id="tamanho" src="arquivos/imagens/images.png" alt="" class="circle responsive-img">
            <div id="pos">
            <h4><b>Nome: </b><?php echo $nome. " " . $sobrenome; ?></h4>
            <h4><b>Email: </b><?php echo $email; ?></h4>
            </div><br><br><br>
        <a href="EditarPerfil.php"  target="blank" class="waves-effect waves-light btn-large" id="bot">
            <i class="material-icons right">edit</i>Editar Perfil</a><br><br>
            <br>
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