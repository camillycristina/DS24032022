<!--
    1 - 9% - VIP
    2 - 22% - funcionário
    3 - 5% - cliente comum
    -->

    <?php

     $nome = "Arroz"
     $valor = 100;
     $codigo = 4;

     if($codigo == 1){
         $porcentagem = ($valor * 9)/100;
         $desconto = $valor-$porcentagem;
     }
     elseif($codigo == 2){
        $porcentagem = ($valor * 22)/100;
        $desconto = $valor-$porcentagem;
     }
     elseif($codigo == 3){
        $porcentagem = ($valor * 5)/100;
        $desconto = $valor-$porcentagem;
     }
     else{
        $porcentagem = ($valor * 0)/100;
        $desconto = $valor-$porcentagem;
     }
     echo "O nome do produto é: $nome</br>";
     echo "O valor do produto é: $valor</br>";
     echo "O desconto é de: $porcentagem</br>";
     echo "O valor do produto com desconto é: $desconto";
?>     