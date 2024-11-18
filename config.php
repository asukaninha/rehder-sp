<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'mural-do-aluno';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao -> connect_errno);
    {
        echo "Erro";
    }
    else
    {
        echo "conexao bem sucedida";
    }

?>