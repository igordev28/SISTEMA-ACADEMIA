<?php

    $host = 'localhost:3306';
    $user = 'root';
    $password = '';
    $db = 'academia';

    $conexao = new mysqli($host, $user, $password, $db);

    if ($conexao -> connect_error) {
        die("Erro na conexão: ") . $conexao -> connect_error;
    }

    
?>