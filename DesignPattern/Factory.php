<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ford\DesignPattern;

use \Ford\Motor\Motor20;
use \Ford\Carro;
use \Ford\Sedan;
/**
 * Description of Factory
 *
 * @author aluno
 */
class Factory 
    {
    private static $cor;
    
    /**
     * Fabrica Ka
     * @param string $cor
     * @return Carro
     */
    public static function MontarKa($cor)
    {
        $motor = new Motor20();
        $carro = new Carro($motor, $cor);
        
        return $carro;
    }
    
    /**
     * Fabrica Fiesta
     * @param string $cor
     * @return Carro
     */
    public static function MontarFiesta($cor)
    {
        $motor = new Motor20();
        $carro = new Sedan($motor, self::$cor, "GLX");
        
        return $carro;
    }
}
