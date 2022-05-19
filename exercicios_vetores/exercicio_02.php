<?php
    //Atribua valores inteiros, gerados aleatoriamente no intervalo entre 1 e 10, a cada
    //posição do vetor com 5 posições.

    for($i=0;$i<=4;$i++){
        $random = [rand(1,10)];
        $vetor = [];
        $vetor += $random;
        echo "vetor: $vetor[$i] <br>";

    }
    $qtd = count($vetor);
    echo $qtd
 




?>