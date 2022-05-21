<?php

$convenio = $_GET['convenio'];

switch($convenio){
    case 1:
        $valor = 100+80;
        echo "O valor final do convênio é: $valor reais";
        break;
    case 2:
        $valor = 100+50;
        echo "O valor final do convênio é: $valor reais";
        break;
    case 3:
        $valor = 100+95;
        echo "O valor final do convênio é: $valor reais";
        break;
    case 4:
        $valor = 100+130;
        echo "O valor final do convênio é: $valor reais";
        break;    
    }
?>  