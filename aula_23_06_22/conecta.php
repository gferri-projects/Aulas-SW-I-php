<?php
    // DADOS DO SGBD MYSQL PARA A CONEXÃO
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "teste_mysqli";

    // CRIANDO A CONEXÃO 
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // CHECANDO A CONEXÃO
    if($conexao->connect_error){
        die("Conexão falhou: " . $conn->connect_error);

    }
    //echo "Conectado com sucesso!";

    // '->' acessar funções dentro de objetos 






?>