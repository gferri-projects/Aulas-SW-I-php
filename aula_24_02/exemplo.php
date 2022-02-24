<?php
//VARIAVEIS DENTRO DE VARIAVEIS EX:

    $nome = "julia";
    $julia = "ufa";

    echo $$nome;
    echo "<br>";

//EXEMPLOS DE "IGUAL" E "IDENTICO"
    $numero = 10;
    $outro_numero = "10";

    var_dump($numero);
    echo "<br>";
    var_dump($outro_numero);
    echo "<hr>";

    if($numero == $outro_numero){
        echo "Valores iguais";
    }
    else{
        echo "São valores diferentes";
    }
?>