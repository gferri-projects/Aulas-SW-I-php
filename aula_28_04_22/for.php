<?php
    // COMANDOS DE REPETIÇÃO: WHILE, DO...WHILE, FOR E FORE EACH
    // FOR (ATÉ QUE SEJA FALSO)
    echo "Contagem Progressiva <br> <br>";
    for($cont=0;$cont<11;$cont++){
        echo "A variável \$cont vale $cont <br>";
    }
    echo "<br> Contagem Regressiva <br> <br>";
    for($cont=10;$cont>0;$cont--){
        echo "A variável \$cont vale $cont <br>";
    }*/


    // VETOR 
    /$nomes = ["Anderson","Maria","Pedro"];

    //echo $nomes[0];

    // vizualizar todas as posições do vetor
    for($indice=0;$indice<=2;$indice++){
        echo ($indice+1)."° Nome => $nomes[$indice] <br>";
    }



?>