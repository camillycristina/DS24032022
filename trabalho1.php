<?php

$contador = 1;
$soma = 0;

while($contador <= 100){
    if($contador %2==0){
        echo "$contador"."<br>";
        echo "<br>";
        echo "$contador + $soma</br>";
        $soma=$soma+$contador;
        echo "$soma<br>";
    }
    $contador++;
}

?>