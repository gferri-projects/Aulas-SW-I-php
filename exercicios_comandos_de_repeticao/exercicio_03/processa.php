<?php
    $numero = $_POST['num'];

    echo "<h3>Tabuada do $numero</h3>";
    for ($cont=1;$cont<=10;$cont++){
        $resultado = $numero * $cont;
        echo  "$numero * $cont = $resultado <br>";
    }


?>