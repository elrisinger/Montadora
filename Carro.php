<?php

namespace Ford;

// define("motor", 1.5) exemplo constante global
class Carro
{

   const MARCA = "VW";   
   const MODELO = "Golf";

   public  $cor = "Azul";
   
   private $motor;
   private $combustivel = 0;
   private $versao;
   
   /**
    * 
    * @param Motor $motor
    * @param string $cor
    * @param string $versao
    */
   public function __construct(Motor\InterfaceMotor $motor, $cor = "Preto", $versao) // tipar variável para exigir tipo Motor
   {
       $this->cor = $cor;
       $this->versao = $versao;
       $this->motor = $motor;
       
   }
   
   public function __get($name)
   {
       return $this->$name;   // Não confundir, nesse caso utilizando $ porque é variavel
       echo "Voce tentou acessar o atributo $name\n";
   }
   
   public function __set($name, $value)
   {
       $this->$name = $value;
       echo "Voce tentou gravar na variavel '$name' o valor '$value'\n";
   }
   
   public function __call($name, $arguments) // senão existir a função ele exibe a mensagem
   {
       echo "Voce tentou chamar a função '$name'\n";
   }
   
   public function ligar()
   {
      if ($this->combustivel > 0)
         {
	    echo "Carro ligado!\n";
	    $this->motor->ligar();
            
	 } else {
 	    throw new IEException("Sem combustivel!");
            echo "Depois do Throw";
	    $this->motor->desligar();
	 }  
   }   

   public function desligar()
   {
       if ($this->motor->estaLigado() == true)
         {
      	    $this->motor->desligar();
	 } else
         {
	    echo "Carro ja desligado!";
	 }
   }

   public function acelerar($quantidade)
   {
       $this->motor->acelerar($quantidade);
   }

   public function freiar()
   {

   }

   public function abastecer($quantidade)
   {  
      if ($quantidade <= 0)
      {
          throw new \InvalidArgumentException("A quantidade deve ser positiva.");
      }
      // $this->combustivel = $this->combustivel + $quantidade;
      // Equivalente:
      $this->combustivel += $quantidade;
   }

}



