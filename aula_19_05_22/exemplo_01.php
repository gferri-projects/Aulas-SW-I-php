<?php
     // VETORES
     //$numeros = array(1,12,50,1.2); // OU
     $numeros = [1,12,50,1.2];
 
     //echo $numeros[2];

     $qtd = count($numeros);
     echo "Quantidade de posições do vetor ==> $qtd <br> <hr>";

     $total = 0;
     for($i=0;$i<4;$i++){
         echo "Índice = $i ==> $numeros[$i] <br>";
         $total = $total + $numeros[$i];

     }
     echo "<hr> $total <br>";
     $media = $total/$qtd;
     echo "A média é $media";




?>