<?php

namespace Ford\Motor;

/**
 * Classe genérica de motor
 * @author Elton Singer <elrisinger@hotmail.com>
 */
abstract class Motor implements InterfaceMotor, \Countable   // Utilizar a Barra no Countable como é nativa
{
    const POTENCIA = 1.0;
    const TIPOCOMBUSTIVEL = "Flex";
    
    private $aceleracao = 0;
    private $ligado = false;
    
    /**
     * Acelera o motor
     * @param int $valor
     */
    public function acelerar($valor)
    {
        $this->aceleracao = $valor;
    }
    
    /**
     * Liga o motor
     */
    public function ligar()
    {        
        $this->ligado = true;        
    }
    
    /**
     * Desliga o motor
     */
    public function desligar()
    {        
        $this->ligado = false;        
    }
    
    /** 
     * Informa estado do motor
     * @return bool
     */
    public function estaLigado()
    {
        return $this->ligado;
    }
    
    /**
     * Retorna a potencia do motor
     * @return float
     */
    public function getPotencia()
    {
        return self::POTENCIA; // utilizar self para exibir constante de dentro da classe
    }
    
    public function count() 
    {
        return $this->aceleracao;
    }

    
}
