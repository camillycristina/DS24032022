<?php

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$op = $_GET['op'];

switch($op){
    case 1:
        echo $valor1*$valor2 ;

        break;

    case 2:
        echo $valor1+$valor2;

        break;
    case 3:
        echo $valor1-$valor2;

        break;
    case 4:
        echo $valor1/$valor2;

        break;

    default:
    echo $valor1;
    echo $valor2;
    break;
}
?>