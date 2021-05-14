<?php

if(isset($_GET['op'])){
        if($_GET['op'] == "exc" && $_GET['tipo'] == "cliente"){
            require_once 'Cliente.php';
            
            $u = new Cliente();
            
            $id = $_GET['id'];
            
            if($u->excluir($id)){
               header("location: ../ListarUsuarios.php");
                //header("location: ../?pg=consultarCliente");
            }
            else{
                echo "erro";
            }
        }
        else if($_GET['op'] == "exc" && $_GET['tipo'] == "compositor"){
            require_once 'Compositor.php';
            
            $c = new Compositor();
            
            $id = $_GET['id'];
            
            if($c->excluir($id)){
                header("location: ../ListarCompositores.php");
            }
            else{
                echo "erro";
            }
        }
        else if($_GET['op'] == "exc" && $_GET['tipo'] == "categoria"){
            require_once 'Categoria.php';
            
            $c = new Categoria();
            
            $id = $_GET['id'];
            
            if($c->excluir($id)){
                header("location: ../ListarCategorias.php");
            }
            else{
                echo "erro";
            }
        }
    }



?>