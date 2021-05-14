<?php
class Categoria{
    private $categoria;
    
    //metodo construtor
    public function __construct($categoria){
        $this->categoria=$categoria;
}
    public function setCategoria($categoria){
   $this->categoria=$categoria;
}
    public function getCategoria(){
    return $this->$categoria;
}
    public function conectar(){
    return new PDO ("mysql:host=localhost; dbname=tcc", "root", "");
}
    
  public function cadastrar(){
    $con = $this->conectar();
      
    $sql = "insert into categoria (categoria) values 
    ('$this->categoria')";

    $con->query($sql);
}
     public function listar (){ 
    $con = $this->conectar();    
    
    $sql = "select * from categoria";
        
    $dados = $con->query($sql);
        
    if($dados->rowCount() == 0){
    echo "<h1>Não há categorias cadastradas</h1>"; 
    }else{
    $tabela  ="<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>CATEGORIA</th>
        <th>AÇÃO</th>
    </tr>";
    
    while($c = $dados->fetch(PDO::FETCH_OBJ)){
    $tabela .="<tr>
    <td>$c->id</td>
    <td>$c->categoria</td>
    <td><a href=\"php/Sistema_excluir.php?id=$c->id&op=exc&tipo=categoria\" onClick=\"return confirm('Deseja mesmo excluir essa categoria?')\">Deletar</a></td>
    </tr>";
    
    }
    $tabela .= "</table>";
    echo $tabela;
    }
}
    public function excluir($id){
                
            $con = new mysqli("localhost", "root", "", "tcc");
            
            $sql = "delete from categoria where id = $id";
            
            $deletar = $con->prepare($sql);

            $deu_certo = $deletar->execute();

            $deletar->close();
            $con->close();

            return $deu_certo;
		}
}
?>