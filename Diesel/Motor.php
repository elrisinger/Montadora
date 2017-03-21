<?php

namespace Diesel;

use \Ford\Motor\InterfaceMotor;

class Motor implements InterfaceMotor
{
    private $aceleracao = 0;
    private $ligado = false;
    private $turbina = false;
    
    
    /**
     * 
     * @param bool $turbina
     */
    public function __construct($turbina)
    {
        $this->turbina = $turbina;
    }
    
    public function acelerar($valor)
    {
        $this->aceleracao = $valor;
    }

    public function desligar() 
    {
        $this->ligado = false;
    }

    public function estaLigado() 
    {
        return $this->ligado;
    }

    public function ligar() 
    {
        $this->ligado - true;
    }
  
}
