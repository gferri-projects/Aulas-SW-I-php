<?php
    // IF ELSE 
    // AVALIA TRÊS CONDIÇÕES DA VAR '$NUM', SE É MAIOR, IGUAL OU MENOR
    $num = 10;

    if($num > 10){
        echo "Número é maior que 10";
    }
    else{
        //echo "Não sei se é maior ou igual";
        if($num < 10){
            echo "Número menor que 10";
        }
        else{
            echo "Número igual a 10 ";
        }
    }
    // OUTRA MANEIRA DE USAR É USAR 'ELSEIF'

    // SWITCH CASE
    // USAR O SWITCH QUANDO HÁ VALORES EXATOS
    $estado = "SP";

    switch($estado){
        case "SP":
            echo"São Paulo";
            break;
        case "RJ":
            echo "Rio de Janeiro";
            break;
        default:
            echo "Sigla não encontrada";
    }






?>