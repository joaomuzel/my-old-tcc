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
<?php
    $msg=0;
    @$msg = $_POST['mensagem'];
?>
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="arquivos/imagens/capa_icon.jpg" type="image/x-icon" />
    <title>Cadastro de Categorias - <?php echo $nome; ?></title>
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
        <li><a href="Home.php">Home</a></li>
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
            <?php if($msg=="certo"){ ?>
            <div class="card-panel #ff5252 red accent-2"><b>Categoria cadastrada com sucesso!!.</b></div>
            <?php } ?>
            
            <h1>Cadastrar Nova Categoria</h1>
            
    <div class="row">
    <form class="col s12" action="php/Sistema_categoria.php" method="post">
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">library_music</i>
          <input id="categoria" type="text" class="validate" name="categoria">
          <label for="categoria">Categoria</label>
        </div>
      </div>
    
   <button class="btn waves-effect waves-light" type="submit" name="action">CAdastrar
    <i class="material-icons right">send</i>
  </button>  
    <button class="btn waves-effect waves-light" type="reset" name="action">Limpar
    <i class="material-icons right">delete</i>
  </button>
   </form>
  </div>
        
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