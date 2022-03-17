<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Valores</title>
</head>
<body>
    <?php
        //Informação já inserida
        //$num1 = 5;
        //$num2 = 10;

        //RECEBER INFORMAÇÃO DE TRÊS MÉTODOS:

        //Método POST
        //$num1 = $_POST['num1'];
        //$num2 = $_POST['num2'];

        //Método GET (limitado)
        //$num1 = $_GET['num1'];
        //$num2 = $_GET['num2'];

        //Método REQUEST (não importa se for POST ou GET)
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];

        
        $soma = $num1 + $num2;

        echo "A soma de ". $num1 ." + ". $num2 ." é igual a ". $soma;
        //echo "A soma de $num1 + $num2 é igual a $soma";
    ?>
    
</body>
</html>

