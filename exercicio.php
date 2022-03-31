<?php
$nome= $_GET['nome'];
$altura= $_GET['altura'];
$massa= $_GET['massa'];

echo"O nome é:", $nome . "</br>";

$IMC = $massa/($altura * $altura);
elseif($IMC <18.5){
    echo"O imc é $IMC, Abaixo do peso";
}
elseif($IMC >=18.5 && $IMC < 25){
    echo"O imc é $IMC, peso normal";
}
elseif($IMC >=25 && $IMC < 30){
    echo"O imc é $IMC, Sobrepeso";
}
elseif($IMC >=30 && $IMC < 35){
    echo"O imc é $IMC, Obsidade grau I";
}
elseif($IMC >=35 & $IMC <40){
    echo"O imc é $IMC, Obsidade grau II";
}
else{
    echo"O imc é $IMC, Obsidade grau III";
}
?>