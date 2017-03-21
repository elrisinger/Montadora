
<?php

require 'Carro.php';
require 'Motor/InterfaceMotor.php';
require 'Motor/Motor.php';
require 'Motor/Motor20.php';
require 'Motor/Motor20Turbo.php';
require 'Diesel/Motor.php';
require 'IEException.php';

// use Ford\Motor\Motor20;

use Ford\Motor\Motor20 as Motor20Flex;
use Diesel\Motor as MotorDiesel;

$motor = new Motor20Flex();
$diesel = new MotorDiesel(true);

$motor->acelerar(13);

//$vet = array(10,23,43);

//echo count($motor);

$carro1 = new Ford\Carro($diesel, "Verde", "GLX");
//var_dump($motor);

//var_dump($diesel);


try {
    
$carro1->abastecer(10);
$carro1->ligar();
$carro1->abastecer(-10);


$carro1->acelerar(50);

} catch (Ford\IEException $e)
{
    echo "Problema na IE: ".$e->getMessage()."\n";

} catch(\InvalidArgumentException $e)
{

    echo "Problemas com funções";   
    
} finally
{
    echo "Sempre que acontecer uma exception\n";
}
var_dump($carro1);
