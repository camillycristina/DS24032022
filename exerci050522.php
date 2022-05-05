<?php

$nome = $_GET['nome'];
$salario = $_GET['salario'];
$porcentagem = $_GET['porcentagem'];

switch($porcentagem){
    case 0:
        $aumento = $salario*$porcentagem/100;
        $novosalario = $salario + $aumento;
        echo "Nome: $nome, Salário: $salario, Valor do Aumento: $novosalario";

        break;
    case 10:
        $aumento = $salario*$porcentagem/100;
        $novosalario = $salario + $aumento;
        echo "Nome: $nome, Salário: $salario, Valor do Aumento: $novosalario";
    
        break;
    case 25:
        $aumento = $salario*$porcentagem/100;
        $novosalario = $salario + $aumento;
        echo "Nome: $nome, Salário: $salario, Valor do Aumento: $novosalario";

        break;
    case 33:
        $aumento = $salario*$porcentagem/100;
        $novosalario = $salario + $aumento;
        echo "Nome: $nome, Salário: $salario, Valor do Aumento: $novosalario";
    
        break;

    case 41:
        $aumento = $salario*$porcentagem/100;
        $novosalario = $salario + $aumento;
        echo "Nome: $nome, Salário: $salario, Valor do Aumento: $novosalario";

        break;

    case 50:
        $aumento = $salario*$porcentagem/100;
        $novosalario = $salario + $aumento;
        echo "Nome: $nome, Salário: $salario, Valor do Aumento: $novosalario";


     break;
    
}
?>