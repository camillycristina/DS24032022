<?php

   $dia = $_GET['dia'];

   switch($dia){
        case 1:
        case 7:
          echo "Pode descansar";
          break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Vá pra escola";
            break;
        default:
            echo "Dia inválido";
            break;
        }
    ?>