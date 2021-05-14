<?php
session_start();
include("php/logout.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="arquivos/imagens/capa_icon.jpg" type="image/x-icon" />
    <title>Divulga Músicas - Home Page</title>
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
            img#fot{
                height: 300px;
                width: 940px;
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
        <li><a href="QuemSomos.php">Sobre</a></li>
          <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Músicas<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="Compositores.php">Compositores</a></li>
          <li><a href="faq.php">F.A.Q</a></li>
        <li><a href="Cadastro.php">Cadastro</a></li>
          <li><a class="grey-text text-lighten-3" href="login.php">Entrar</a></li>
          <li><a class="grey-text text-lighten-3" href="Contato.php">Contato</a></li>
          <!--<li><a class="dropdown-button" href="#!" data-activates="usuario">Usuário<i class="material-icons right">arrow_drop_down</i></a></li>-->
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
        <li><a href="QuemSomos.php">Sobre</a></li>
            <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Músicas<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="Compositores.php">Compositores</a></li>
            <li><a href="faq.php">F.A.Q</a></li>
        <li><a href="Cadastro.php">Cadastro</a></li>
            <li><a class="grey-text text-lighten-3" href="login.php">Entrar</a></li>
            <li><a class="grey-text text-lighten-3" href="Contato.php">Contato</a></li>
            <!--<li><a class="dropdown-button" href="#!" data-activates="usuario2">Usuário<i class="material-icons right">arrow_drop_down</i></a></li>-->
      </ul>
    </div>
  </nav>
        
        <!--Carrocel-->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="arquivos/imagens/1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 id="black">Divulgue sua música autoral!</h3>
            <h5 class="center grey-text text-lighten-3">Sua composição para qualquer pessoa.</h5> <!--https://www.impression.co.uk-->
        </div>
      </li>
        <li>
        <img src="arquivos/imagens/2.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 id="black">Expansão do seu trabalho!</h3>
          <h5 class="right grey-text text-lighten-3">Oportunidade de ter um reconhecimento maior.</h5> <!--http://www.abmi.com.br-->
        </div>
      </li>
      <li>
        <img src="arquivos/imagens/3.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 id="white">Network/Business</h3>
          <h5 class="left grey-text text-lighten-3">Conhecendo pessoas do seu ramo.</h5> <!--http://webbypropaganda.com.br-->
        </div>
      </li>
    </ul>
  </div>
        
        <br>
        <div class="container">
            
            <?php 
                if($_GET['msg'] == "logado"){
                    echo "<div class=\"card-panel #ffff00 yellow accent-2\"><i class=\"material-icons left\">warning</i><b>Você precisa estar logado para vizualizar essa página!!</b></div>";
                }
                ?>
            
            <h1>Bem-vindo <?php 
                if(isset($_SESSION['entrou'])){
                    echo $_SESSION['entrou'];
            }
                ?> </h1>
            
            <img id="fot" src="arquivos/imagens/musica.png"><br>
            <br><br>
            <a href="LoginComp.php" target="blank">** Link para login de compositor.</a>
            <br>
            <a href="CadastroComp.php" target="blank">** Página de cadastro de compositor.</a>
            <br><hr>
            <a href="LoginAdm.php" target="blank">** Link para login de adm.</a>
            <br>
            <a href="CadastroAdm.php" target="blank">** Link de cadastro de adm.</a>
            
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