<?php

include("php/conexao.php");

    $usuario = $_SESSION['login_email'];
    $busca = $conn -> query("select nivel from compositores where email = '$usuario'") or die(mysql_error());
    //$busca = $conn -> query("select compositores.nivel, cliente.nive from compositores, cliente where email = '$usuario'") or die(mysql_error());
        while($linha = $busca->fetch_array()){
        $nivel = $linha['nivel'];
           // $nive = $linha['nive']
    }

?>
<?php
    if($nivel == 1){
?>
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
            <li><a class="dropdown-button" href="#!" data-activates="usuario2"><?php echo $nome; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
<?php
                   }
elseif($nivel == 2){
                        
?>

<?php
}
?>