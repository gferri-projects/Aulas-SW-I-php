<?php 
    $name = $_POST['name'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma / 3;

    echo "Ola $name ! , a media das notas é $media";


?>