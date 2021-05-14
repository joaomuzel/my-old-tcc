<?php
class Adm{
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    
    //metodo construtor
    public function __construct($nome, $cpf, $email, $senha){
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->email=$email;
        $this->senha=$senha;
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
    public function setCpf($cpf){
   $this->cpf=$cpf;
}
    public function getCpf(){
    return $this->$cpf;
}
    public function conectar(){
    return new PDO ("mysql:host=localhost; dbname=tcc", "root", "");
}
    
  public function cadastrar(){
    $con = $this->conectar();
      
    $sql = "insert into adm (nome, cpf, email, senha) values 
    ('$this->nome', '$this->cpf', '$this->email', '$this->senha')";

    $con->query($sql);
}
}
?>