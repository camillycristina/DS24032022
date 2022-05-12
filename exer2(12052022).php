<?php

 $letra = $_GET['letra'];
 switch($maiusculo = strtoupper($letra)){
    case "A":
    case "E":
    case "I":
    case "O":
    case "U":
        echo "Vogal";
        echo $maiusculo;
      break;
      default:
      echo "Consoante";
      break;
    }

?>