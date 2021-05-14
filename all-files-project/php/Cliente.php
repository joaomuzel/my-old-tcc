<?php
class Cliente{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    
    //metodo construtor
    public function __construct($nome, $sobrenome, $email, $senha){
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
        $this->email=$email;
        @$this->senha=$senha;
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
    public function setSobrenome($sobrenome){
   $this->sobrenome=$sobrenome;
}
    public function getSobrenome(){
    return $this->$sobrenome;
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
    public function conectar(){
    return new PDO ("mysql:host=localhost; dbname=tcc", "root", "");
}
    
  public function cadastrar(){
    $con = $this->conectar();
      
    $sql = "insert into cliente (nome, sobrenome, email, senha) values 
    ('$this->nome', '$this->sobrenome', '$this->email', '$this->senha')";

    $con->query($sql);
}
    
    public function editar(){
    $con = $this->conectar();
      
    $sql = "UPDATE cliente SET `nome` = '$nome', `sobrenome` = '$sobrenome', `email` = '$email', 
    `senha` = '$senha' WHERE `cliente`.`id` = $id";

    $con->query($sql);
}
    
    public function listar (){ 
    $con = $this->conectar();    
    
    $sql = "select * from cliente";
        
    $dados = $con->query($sql);
        
    if($dados->rowCount() == 0){
    echo "<h1>Não há usuários cadastrados</h1>"; 
    }else{
    $tabela  ="<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>SOBRENOME</th>
        <th>EMAIL</th>
        <th>AÇÃO</th>
    </tr>";
    
    while($u = $dados->fetch(PDO::FETCH_OBJ)){
    $tabela .="<tr>
    <td>$u->id</td>
    <td>$u->nome</td>
    <td>$u->sobrenome</td>
    <td>$u->email</td>
    
    <td><a href=\"php/Sistema_excluir.php?id=$u->id&op=exc&tipo=cliente\" onClick=\"return confirm('Deseja mesmo excluir esse usuario?')\">Deletar</a></td>
    </tr>";
    
    }
    $tabela .= "</table>";
    echo $tabela;
    }
}
    
    public function excluir($id){
                
            $con = new mysqli("localhost", "root", "", "tcc");
            
            $sql = "delete from cliente where id = $id";
            
            $deletar = $con->prepare($sql);

            $deu_certo = $deletar->execute();

            $deletar->close();
            $con->close();

            return $deu_certo;
		}
    
}
?>