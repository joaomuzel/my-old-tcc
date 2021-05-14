<?php
class Compositor{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    
    //metodo construtor
    public function __construct($nome, $email, $senha, $telefone){
        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;
        $this->telefone=$telefone;
}
    public function getId(){
    return $this->id;
}      
    public function setId($id){
        $this->id = $id;
}
    public function setNome($nome){
   $this->nome=$nome;
}
    public function getNome(){
    return $this->$nome;
}
    public function setEmail($email){
   $this->email=$email;
}
    public function getEmail(){
    return $this->$email;
}
    public function setSenha($senha){
   $this->senha=$senha;
}
    public function getSenha(){
    return $this->$senha;
}
    public function setTelefone($telefone){
   $this->telefone=$telefone;
}
    public function getTelefone(){
    return $this->$telefone;
}
    public function conectar(){
    return new PDO ("mysql:host=localhost; dbname=tcc", "root", "");
}
    
  public function cadastrar(){
    $con = $this->conectar();
      
    $sql = "insert into compositores (nome, email, senha, telefone) values 
    ('$this->nome', '$this->email', '$this->senha', '$this->telefone')";

    $con->query($sql);
}
    public function listar (){ 
    $con = $this->conectar();    
    
    $sql = "select * from compositores";
        
    $dados = $con->query($sql);
        
    if($dados->rowCount() == 0){
    echo "<h1>Não há usuários cadastrados</h1>"; 
    }else{
    $tabela  ="<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        
        <th>AÇÃO</th>
    </tr>";
    
    while($c = $dados->fetch(PDO::FETCH_OBJ)){
    $tabela .="<tr>
    <td>$c->id</td>
    <td>$c->nome</td>
    <td>$c->email</td>
    <td>$c->telefone</td>
    
    <td><a href=\"php/Sistema_excluir.php?id=$c->id&op=exc&tipo=compositor\" onClick=\"return confirm('Deseja mesmo excluir esse compositor?')\">Deletar</a></td>
    </tr>";
    
    }
    $tabela .= "</table>";
    echo $tabela;
    }
}
    
    
    public function excluir($id){
                
            $con = new mysqli("localhost", "root", "", "tcc");
            
            $sql = "delete from compositores where id = $id";
            
            $deletar = $con->prepare($sql);

            $deu_certo = $deletar->execute();

            $deletar->close();
            $con->close();

            return $deu_certo;
		}
    
}
?>