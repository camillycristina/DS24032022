<?php

$classificacao = $_GET['classificacao'];

switch($classificacao){
    case 1:
        echo "Alimento não-perecível";
      break;
    case 2:
    case 3:
    case 4:
        echo "Alimento perecível";
        break;
    case 5:
    case 6:
        echo "Vestuário";
        break;
    case 7:
        echo "Higiene pessoal";
        break;
    case 8:
    case 9:
    case 10:
        echo "Limpeza";
        break;
    default:
        echo "Inválido";
        break;
    }
?>  