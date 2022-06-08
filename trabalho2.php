<?php

  $sorteio = rand(0,50);

  switch($sorteio){
      case($sorteio %2==0):
        echo "$sorteio  - Valor par";
        break;

      case 0:
        echo "$sorteio - Valor nulo";
        break;

        default:
        echo"$sorteio - Valor impar";
        break;
  }

?>