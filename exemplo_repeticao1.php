<?php

 $contador = 0;
 $contador2 = 10;

 while($contador <=10){
     echo $contador . "</br>"; //0 1 2 3 4 5 6 7 8 9 10
     $contador++; // 9 = 9 + 1
 }

 echo"</br>";
 while($contador2 >=0):
    echo $contador2 . "</br>";
    $contador2--;
 endwhile;

?>