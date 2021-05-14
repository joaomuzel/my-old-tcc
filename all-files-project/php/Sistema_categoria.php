<?php
$categoria=$_POST['categoria'];

//echo $categoria;
include_once 'Categoria.php';

$categoria = new Categoria ($categoria);

$categoria->cadastrar();

header("location:../ListarCategorias.php?");

//echo '<div class="card-panel #d50000 red accent-2"><b>Concluído com Sucesso! Sua música foi cadastrada!.</b></div>';
        
?>