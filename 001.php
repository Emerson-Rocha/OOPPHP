<?php
/* 
  Definier uma Classe
 palavra reservado "class" seguida por chave({})
*/


class Pessoa{
  

}
  
  /*
     Visibilidade
     - public - podem ser acessado de qualquer lugar
     - protected - só podem ser acessado na mesma classe e suas classes que herdam
     - private - someneta pode ser acessado na classe que define 
  */
  
 // Propriedade
 private $nome;
 private $sexo;
 private $rg;
 private $cpf;
 private $log;
 private $numero;
 private $comp;
 private $cep;
 private $cidade;
 private $bairro;
 private $estado;
  
/*
      Construtor
      Um construtor permite inicializar as propriedades de um objeto em sua criação.
  */
  
__construct($_nome, $_sexo, $_rg, $_cpf){
$this->nome = $_nome;
$this->seox = $_sexo;
$this->rg = $_rg; 
$this->cpf = $_cppf;  

}


//Método
  
  public function AtribuiName($x){
   $this->nome = $x;
  }
  public function Retorna(){
  return $this->nome;
  }
  
   
 
 

}

?>
