<?php

    $numero = $_POST['num'];
    //echo $numero;
    $cubo = pow($numero,3);

    //echo $cubo;

    // Identificar números ímpares
    //$exemplo = 11;
    //$resto;
    //$resto = ($exemplo % 2);
    //echo $resto;
    
    for ($cont=$numero;$cont<=$cubo;$cont++){
        if ($cont % 2 == 1){
            echo $cont;
            echo "<br>";
        }  
    }
?>