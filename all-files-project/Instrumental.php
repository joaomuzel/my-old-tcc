<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
	try{
		$conexao = new PDO('mysql:host=localhost; dbname=tcc', 'root', '');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
?>
 <?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="arquivos/imagens/capa_icon.jpg" type="image/x-icon" />
    <title>Instrumentais - Divulga Músicas</title>
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
            img#foto{
                height: 250px;
                width: 300px;
            }
            a#bot{
                width: 300px;
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
        <li><a href="Home.php">Home</a></li>
        <li><a href="QuemSomos.php">Sobre</a></li>
          <!-- Dropdown Trigger -->
        <li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown1">Músicas<i class="material-icons right">arrow_drop_down</i></a></li>
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
                
            
            <div class="row">
    <form class="col s12" action="Instrumental.php"  enctype="multipart/form-data" method="post">
      <div class="row" class="center-align">
        <div class="input-field col s6">
          <input id="pesquisa" type="text" class="validate" name="pesquisa"><button type="submit" class="btn btn-primary"><i class="material-icons">search</i></button>
          <label for="email">Pesquisar</label>
        </div>
      </div>
        </div>
    </form>
            
            <h1>Instrumental</h1>
            <p>Abaixo, estão listadas todas as músicas instrumentais dos compositores, para venda ou negócios! Após você ouvir uma música, poderá checar o email para contato do compositor nesta pagina: <a href="Compositores.php">Clique aqui!.</a></p>
            
            <?php
if(empty($_GET['pg'])){}
else{ 
$pg =$_GET['pg'];
if(!is_numeric($pg)){
  
  echo '<script language= "JavaScript">
          location.href="home.php?acao=ver-postagens";
    </script>';
}

}


if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

if(isset($_POST['pesquisa'])){
  $quantidade = 10000;
}else{
  $quantidade = 10;
}


$inicio = ($pg*$quantidade) - $quantidade;

if(isset($_POST['pesquisa'])){
  $busca = addslashes($_POST['pesquisa']);
  $sql = "SELECT * from musicainst WHERE titulo LIKE '%$busca%' ORDER BY id DESC LIMIT $inicio, $quantidade ";  
}else{
  $sql = "SELECT * from musicainst ORDER BY id DESC LIMIT $inicio, $quantidade";
}


$contagem =$inicio + 1;
        try {
          $resultado = $conexao->prepare($sql);
          $resultado->execute();
          $contar = $resultado->rowCount();

         if ($contar > 0) {
              
         while ($exibe = $resultado->fetch(PDO::FETCH_OBJ)) {
          ?>

      <div class="musica">
          <a href="instrumentalpage.php?leiamais=musicainst&id=<?php echo $exibe->id; ?>">
              <h5><b><?php echo $exibe->autor; ?> </b> - <b><?php echo $exibe->titulo; ?></b></h5></a>
          <img src="arquivos/imagens/wave.jpg"><br>
           <audio src="arquivos/musicas/<?php echo $exibe->musica_demo; ?>" controls></audio> <br>
          <a class="waves-effect waves-light btn" href="instrumentalpage.php?leiamais=musicainst&id=<?php echo $exibe->id; ?>" id="bot">Ouvir Música Inteira
            <i class="material-icons right">visibility</i>
          </a>
            </div> 
      <br><hr><br>
      
      <!-- continuação da logica -->
<?php
}
      }else{
        echo '<li>Sem músicas.</li><br>';
      }

    } catch (PDOException $erro) { 
      echo $erro;
      
    }
?>                
            
        
        <?php
                    //Codigo de consulta
        if(isset($_POST['pesquisa'])){
          $busca = addslashes($_POST['pesquisa']);
          $sql = "SELECT * from musicainst WHERE titulo LIKE '%$busca%'"; 
        }else{
          $sql = "SELECT * from musicainst";
        }

          try{
              $result = $conexao->prepare($sql);      
              $result->execute();
              $totalRegistros = $result->rowCount();
            }catch(PDOException $e){
              echo $e;
            }

            if($totalRegistros <=$quantidade){}
            else{
              $paginas = ceil($totalRegistros/$quantidade);
              if($pg > $paginas){
                echo '<script language= "JavaScript">
                  location.href="Instrumental.php";
                  </script>';}
              $links = 5; 

              if(isset($i)){}
              else{$i = '1';}

        ?>
        <?php
            }
        ?>
            
            <!--
            <h5>João Müzel - For Those About Love The Prog:</h5>
            <img src="arquivos/imagens/compos1.jpg" id="foto">
            <br>
            <audio src="arquivos/musicas/For Those About Love The Prog.mp3" controls>
            </audio>
            <br><br><hr>
            <h5>John Gemignani - Fallen Angel:</h5>
            <img src="arquivos/imagens/compos2.jpg" id="foto">
            <br>
            <audio src="arquivos/musicas/Fallen Angel.mp3" controls>
            </audio>
            <br><br><hr>
            <h5>João Müzel - In My Comfort Zone:</h5>
            <img src="arquivos/imagens/compos1.jpg" id="foto">
            <br>
            <audio src="arquivos/musicas/In My Comfort Zone.mp3" controls>
            </audio>
            <br><br><hr>
            <h5>John Gemignani - Black River:</h5>
            <img src="arquivos/imagens/compos2.jpg" id="foto">
            <br>
            <audio src="arquivos/musicas/Black River.mp3" controls>
            </audio>
            <br><br><hr>
            <h5>João Müzel - Internal Conflicts:</h5>
            <img src="arquivos/imagens/compos1.jpg" id="foto">
            <br>
            <audio src="arquivos/musicas/Internal Conflicts.mp3" controls>
            </audio>
        </div>
        <br>-->
            </div>

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