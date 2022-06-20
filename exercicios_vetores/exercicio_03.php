<?php
    //Crie um vetor que receba e calcule a média de 10 números gerados aleatoriamente
    //no intervalo entre 1 e 100.

    $vetor = [];
    $soma = 0;
    for($i=0;$i<10;$i++){
        $vetor[$i] = rand(1,100);
        $i2 = $i+1;
        echo "Valor $i2 = $vetor[$i]<br>";
        $soma += $vetor[$i];
    }
    echo "<br>";
    $media = $soma/10;
    echo "A soma é: $soma<br>";
    echo "A média é: $media"



?>
