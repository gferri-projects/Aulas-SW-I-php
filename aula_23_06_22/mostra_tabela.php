<?php
    // INCLUIR O ARQUIVO DE CONEXÃO SEMPRE QUE PRECISAR ACESSAR O SGBD
    include_once 'conecta.php';

    // CONSULTA EM SQL QUE SERÁ EXECUTADA NA BASE DE DADOS
    $sql = "SELECT * FROM alunos";

    // ARMAZENAR O RESULTADO DA CONSULTA
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado)>0){
    // SAÍDA DE DADOS DE CADA LINHA DA TABELA
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "id: " . $linha["id"]."<br>";
        echo "nome: " . $linha["nome"]."<br>";
        echo "curso: " . $linha["curso"]."<br>";
        echo "idade: " . $linha["idade"]."<br>";
        echo "<br>";

    }
    }else{
        echo "0 resultados";
    }

    // FECHAR A CONEXÃO 
    mysqli_close($conexao);



?>