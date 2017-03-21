<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ford;

/**
 * Description of Sedan
 *
 * @author aluno
 */
class Sedan extends Carro
{
    public function acelerar($quantidade) 
    {
        if ($this->versao == "sport")
        {
            $this->motor->acelerar($quantidade * 2);
        } else {
            parent::acelerar($quantidade);
        }
        
    }

}
