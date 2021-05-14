<?php
session_start();
	include("php/logout.php");
try{
		$conexao = new PDO('mysql:host=localhost; dbname=tcc', 'root', '');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
?>
 <?xml version="1.0" encoding="UTF-8"?>
<?php
include("php/conexao.php");

    $usuario = $_SESSION['login_email'];
    $nome = "";
    $email = "";
    $busca = $conn -> query("select * from compositores where email = '$usuario'");
    while($linha = $busca->fetch_array()){
        $nome = $linha['nome'];
        $email = $linha['email'];
        $telefone = $linha['telefone'];
    }

?>
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="arquivos/imagens/capa_icon.jpg" type="image/x-icon" />
    <title>Cadastro de Músicas Instrumentais - Divulga Músicas</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
          <li><a href="perfilComp.php">Perfil</a></li>
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
          <li><a href="perfilComp.php">Perfil</a></li>
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
        
        <?php
if(isset($_POST['cadastrar'])){
		    $titulo = trim(strip_tags($_POST['titulo']));
		    $autor = trim(strip_tags($_POST['autor']));
			$data = $_POST['data'];
            //$musica_completa = $_POST['musica_completa'];
            //$partitura=$_POST['partitura'];
            $fins = trim(strip_tags($_POST['fins']));
            $genero = $_POST['genero'];
    
//INFO MUSIC DEMO
		$file 		= $_FILES['musica_demo'];
		$numFile	= count(array_filter($file['name']));
		
		//PASTA
		$folder		= 'arquivos/musicas/';
        $maxSize	= 1024 * 500000;
		
		//REQUISITOS
		$permite 	= array('audio/wav', 'audio/wave','audio/mp3');
		
		//MENSAGENS
		$msg		= array();
		$errorMsg	= array(
			1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
			2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
			3 => 'o upload do arquivo foi feito parcialmente',
			4 => 'Não foi feito o upload do arquivo'
		);
		
		if($numFile <= 0){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						É necessário que você escolha um audio para continuar!
					</div>';
		}
		else if($numFile >=20){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						O audio que você escolheu ultrapassa nosso limite de upload. Selecione apenas um audio e tente novamente!
					</div>';
		}else{
			for($i = 0; $i < $numFile; $i++){
				$name 	= $file['name'][$i];
				$type	= $file['type'][$i];
				$size	= $file['size'][$i];
				$error	= $file['error'][$i];
				$tmp	= $file['tmp_name'][$i];
				
				$extensao = @end(explode('.', $name));
				$novoNome = rand().".$extensao";
				
				if($error != 0)
					echo $msg[] = "<b>$name :</b> ".$errorMsg[$error];
				else if(!in_array($type, $permite))
					echo $msg[] = "<b>$name :</b> Erro áudio não suportado!";
				else if($size > $maxSize)
					echo $msg[] = "<b>$name :</b> Erro áudio ultrapassa o limite de 5MB";
				else{
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						//$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";

//$insert = "INSERT into musicainst (titulo, autor, data, musica_demo, musica_completa, partitura, fins, genero) VALUES (:titulo, :autor, :data, :musica_demo, :musica_completa, :partitura, :fins, :genero)";

                        
$insert = "INSERT into musicainst (titulo, autor, data, musica_demo, fins, genero) VALUES (:titulo, :autor, :data, :musica_demo, :fins, :genero)";
                        
					try{
							$result = $conexao->prepare($insert);
							$result->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                            $result->bindParam(':autor', $autor, PDO::PARAM_STR);
                            $result->bindParam(':data', $data, PDO::PARAM_STR);
                            $result->bindParam(':musica_demo', $novoNome, PDO::PARAM_STR);
                           // $result->bindParam(':musica_completa', $musica_completa, PDO::PARAM_STR);
							//$result->bindParam(':partitura', $partitura, PDO::PARAM_STR);
                            $result->bindParam(':fins', $fins, PDO::PARAM_STR);
                            $result->bindParam(':genero', $genero, PDO::PARAM_STR);
							$result->execute();
							$contar = $result->rowCount();
							if($contar>0){
								echo '<div class="card-panel #03a9f4 light-blue"><i class="material-icons left">check_circle</i><b>Concluído com Sucesso! Sua música foi cadastrada!.</b></div>';
							}else{
								echo '<div class="card-panel #03a9f4 light-blue"><b>Erro ao cadastrar!</strong> Não foi possível cadastrar sua música.</b></div>';
							}			
						}catch(PDOException $e){
							echo $e;
						}	

						}else
							$msg[] = "<b>$name : </b> Desulpe! Ocorreu um erro";
						}

						foreach ($msg as $pop) 
							echo '';
						}
				
				}
			}
	 // FIM INFO MUSIC DEMO
	 ?>
        
        <br>
        <div class="container">
            <h1>Cadastre sua música (Instrumental):</h1>
  <form class="col s12" action="" method="post" enctype="multipart/form-data">
      <!--titulo-->
      <div class="row" class="center-align">
        <div class="input-field col s12">
          <input id="titulo" type="text" class="validate" name="titulo">
          <label for="titulo">Título</label>
        </div>
      </div>
      <!--Autor-->
      <!--<div class="row" class="center-align">
        <div class="input-field col s12">
          <input id="autor" type="text" class="validate" name="autor">
          <label for="autor">Autor</label>
        </div>
      </div>-->
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="<?php echo $nome; ?>" id="disabled" type="text" class="validate" >
            <input type="hidden" name="autor" value="<?php echo $nome; ?>">
          <label for="disabled">Autor</label>
        </div>
      </div>
      <!--Data-->
      <label for="data">Data</label>
      <div class="row" class="center-align">
        <div class="input-field col s12">
          <input id="data" type="date" class="validate" name="data">
          <!-- <label for="data">Data</label>-->
        </div>
      </div>
      <!--Musica demo-->
      <div class="file-field input-field">
      <div class="btn">
        <span>Música Demo</span>
        <input type="file"  name="musica_demo[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      <!--Musica completa-->
      <div class="file-field input-field">
      <div class="btn">
        <span>Musica completa</span>
        <input type="file" name="musica_completa">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      <!--Partitura-->
      <div class="file-field input-field">
      <div class="btn">
        <span>Partitura</span>
        <input type="file" name="partitura">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      
      <div class="row" class="center-align">
        <div class="input-field col s12">
          <input id="fins" type="text" class="validate" name="fins">
          <label for="fins">Fins</label>
        </div>
      </div>
      
      <div class="input-field col s12">
    <select multiple name="genero">
      <option value="" disabled selected>Escolha o gênero:</option>
      <option value="Rock">Rock</option>
      <option value="Pop">Pop</option>
      <option value="Heavy Metal">Heavy Metal</option>
        <option value="Jazz">Jazz</option>
        <option value="Fusion">Fusion</option>
        <option value="Sertanejo">Sertanejo</option>
        <option value="Blues">Blues</option>
        <option value="Progressivo"></option>
        <option value="Alternativo">Alternativo</option>
        <option value="Grunge">Grunge</option>
        <option value="Samba">Samba</option>
        <option value="Bossa Nova">Bossa Nova</option>
        <option value="RAP">RAP</option>
        <option value="Hip-Hop">Hip-Hop</option>
        <option value="Pagóde">Pagóde</option>
        <option value="MBP">MBP</option>
        <option value="Forró">Forró</option>
        <option value="Música Instrumenta">Música Instrumental</option>
    </select>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="cadastrar">CAdastrar
    <i class="material-icons right">send</i>
  </button>  
    <button class="btn waves-effect waves-light" type="reset" name="action">Limpar
    <i class="material-icons right">delete</i>
  </button> 
    </form>
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
        <script>
        //select menu
            $(document).ready(function() {
    $('select').material_select();
  });
       
        </script>
    </body>
  </html>