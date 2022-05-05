<?php
    $numero = $_POST['num'];
    $resultado = 1;

    echo "<h3>Fatorial do número $numero</h3>";
    for ($cont=$numero;$cont>=1;$cont--){
        $resultado *= $cont;
        
    }
    echo  "$resultado <br>";


?>