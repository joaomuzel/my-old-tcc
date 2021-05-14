<?php
/*ob_start();
session_start();
//include("php/Login_cliente.php");*/

error_reporting(E_ALL ^ E_NOTICE);
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
    <title>Letras - Divulga Músicas</title>
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
        
        <?php
        if(isset($_GET['acao'])){
            $acao = $_GET['acao'];
            if($acao=='negado'){
                echo '<div class="card-panel #ff5252 red accent-2"><b>É preciso estar logado para acessar as músicas.</b></div>';
            }
        }
        ?>
        
        <br>
        <div class="container">
            <?php 
                if($_GET['msg'] == "logado"){
                    echo "<div class=\"card-panel #ffff00 yellow accent-2\"><i class=\"material-icons left\">warning</i><b>Você precisa estar logado para vizualizar essa página!!</b></div>";
                }
                ?>
            <h1>Letras</h1>
                        <div class="row">
    <form class="col s12" action="Letras.php"  enctype="multipart/form-data" method="post">
      <div class="row" class="center-align">
        <div class="input-field col s6">
          <input id="pesquisa" type="text" class="validate" name="pesquisa"><button type="submit" class="btn btn-primary"><i class="material-icons">search</i></button>
          <label for="email">Pesquisar</label>
        </div>
      </div>
    </form>
            </div>                     
            <p>Abaixo, estão listadas todas as letras dos compositores, para venda ou negócios! Após você ler uma letra, poderá checar o email para contato do compositor nesta pagina: Clique aqui!.</p>
            <br>
                            
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
  $sql = "SELECT * from musica WHERE titulo LIKE '%$busca%' ORDER BY idmusica DESC LIMIT $inicio, $quantidade ";  
}else{
  $sql = "SELECT * from musica ORDER BY idmusica DESC LIMIT $inicio, $quantidade";
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
          <a href="letrapage.php?leiamais=musica&idmusica=<?php echo $exibe->idmusica; ?>">
              <h5><b><?php echo $exibe->autor; ?> </b> - <b><?php echo $exibe->titulo; ?></b></h5></a>
           <p><?php echo $exibe->letra; ?></p>
          <a class="waves-effect waves-light btn" href="letrapage.php?leiamaisr=musica&idmusica=<?php echo $exibe->idmusica; ?>">LER LETRA INTEIRA
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
          $sql = "SELECT * from musica WHERE titulo LIKE '%$busca%'"; 
        }else{
          $sql = "SELECT * from musica";
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
                  location.href="busca.php";
                  </script>';}
              $links = 5; 

              if(isset($i)){}
              else{$i = '1';}

        ?>
        <?php
            }
        ?>
            </div>                   
            <!--              
            <h5><a href="letras/WardOffFears.php">John Gemignani - Ward Off Fears</a></h5>
            <p>A few years ago<br>
            I remember<br>
            I was crying for us all<br>
                <br>
            Our minds connected<br>
            And change the world<br>
            Words to ward off fears<br>
                <br>
            Sing a song<br>
            To forget the problems<br>
            Sing along<br>
            To remember the happiness<br>
            <br>
            [...]</p>
            <a class="waves-effect waves-light btn" href="letras/WardOffFears.php">Leia Mais
            <i class="material-icons right">visibility</i>
            </a>
            
            <br><br><hr>
            
            <h5><a href="letras/Hope.php">João Müzel - Hope</a></h5>
            <p>Everyday I face off my life,<br>
                With force and willingness,<br>
                Wanting to win,<br>
                Looking to do the better,<br>
                In my work, my famlily.<br>
                <br>
                [Chorus]<br>
                I have hope,<br>
                That my life,<br>
                And my faith,<br>
                Will be saved!<br>
            <br>
            [...]</p>
            <a class="waves-effect waves-light btn" href="letras/Hope.php">Leia Mais
            <i class="material-icons right">visibility</i>
            </a>
            
            <br><br><hr>
            
            <h5><a href="letras/ApenasUmOlhar.php">Eliézer Dias - Apenas Um Olhar</a></h5>
            <p>Sem letras.
            <br>
            [...]</p>
            <a class="waves-effect waves-light btn" href="letras/ApenasUmOlhar.php">Leia Mais
            <i class="material-icons right">visibility</i>
            </a>
            
            <br><br><hr>
            
            <h5><a href="letras/HellOnEarth.php">John Gemignani - Hell On Earth</a></h5>
            <p>Sometimes the clock stop<br>
            And again this scaryous face<br>
            Appears in the sky<br>
                <br>
            Sometimes i feel like i’m falling<br>
            And this bad sensation<br>
            Disturbs me<br>
                <br>
            [Chorus]<br>
            So comes Again<br>
            The hell on the Earth<br>
            To punish all the people<br>
            And take all the souls<br>
            To far away <br>
            <br>
            [...]</p>
            <a class="waves-effect waves-light btn" href="letras/HellOnEarth.php">Leia Mais
            <i class="material-icons right">visibility</i>
            </a>
            
            
            <br><br><hr>
            
            <h5><a href="letras/Hope.php">Eliézer Dias - </a></h5>
            <p>Sem letras.
            <br>
            [...]</p>
            <a class="waves-effect waves-light btn" href="letras/Hope.php">Leia Mais
            <i class="material-icons right">visibility</i>
            </a>
        </div>
        <br>
        -->
                            
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