<?php

function conexao_db()
{
    $dbname = 'php_victorntw;';
    $username = 'root';
    $password = '';
    $host =  'localhost;';
    try {
        $conn = new PDO("mysql:host=localhost;dbname=php_victorntw", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem-sucedida!";
    } catch (PDOException $e) {
        return "Falha ao tentar se conectar.";
    }
    
}

conexao_db();