<pre>
<?php

$a = 10;
$b = 20;
$c = 5;

$soma = function ($a, $b) use ($c)   //trazer variável de fora do escopo em função anônima
{
    return $a + $b + $c;
};

var_dump($soma);

echo $soma(2, 5);


$multi = function ($a, $b)
{
    return $a * $b;
};

function calc($val1, $val2, $op)
{
    return $op($val1, $val2);
}

echo calc(2,3, $multi);