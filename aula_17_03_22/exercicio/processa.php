<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/estilo.css">
    <title>Document</title>
</head>
<body>
    <?php
        $turno = $_POST['turno']; 
        $nome = $_POST['nome'];

        switch ($turno){
            case "M":
                echo "Bom dia, $nome !";
                break;
            case "T":
                echo "Boa Tarde, $nome !";
                break;
            case "N":
                echo "Boa noite, $nome !";
                break;
            default:
                echo "Caracter incorreto $nome , digite novamente.";
                break;
        }
    ?>
</body>
</html>