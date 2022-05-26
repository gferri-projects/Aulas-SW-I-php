<?php
    // ---- FUNÇÕES ----

    // FUNÇÕES CRIADAS PELO USUÁRIO:

    

    //FUNÇÕES BUILT-IN

    // 1- FUNÇÃO SEM RETORNO E SEM PARAEMETRO
    function teste(){
        echo "Julia gferri";
    }
    teste();
    echo "<hr>";

    // 2- FUNÇÃO SEM RETORNO E COM PARAMETRO
    function teste2($a){
        echo $a;
    }
    // A variável $a tem escopo local
    teste2('Aoba');
    echo "<br>";
    teste2('Bão?');
    echo "<hr>";

    // 3- FUNÇÃO COM RETORNO E SEM PARAMETRO
    function teste3(){
        $b = 'Julia';
        return $b;
    }
    $resultado = teste3();
    echo $resultado;
    echo "<hr>";

    // 4- FUNÇÃO COM RETORNO E COM PARAMETRO
    function teste4($x,$y){
        $soma = $x + $y;
        return $soma;
    }
    $num1 = 10;
    $num2 = 20;

    $result = teste4($num1,$num2);
    echo "A soma é $result";





?>