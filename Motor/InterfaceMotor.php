<?php

namespace Ford\Motor;

interface InterfaceMotor 
{
    public function acelerar($valor);
    
    public function ligar();
    
    public function desligar();
    
    public function estaLigado();
            
}
