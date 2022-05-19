<?php
    //Crie um vetor que armazene o nome de todos os meses do ano. Peça ao usuário
    //que digite um número e ele informe qual o nome do mês correspondente.

    $meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
    $num = 1;

    for($i=0;$i<=$num-2;$i++){
        if($num>12){
            echo "Número inválido, digite um número entre 1 e 12.";
        }
        

    }
    echo "Mês: $meses[$i] <br>";




?>