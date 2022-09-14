<?php

require_once './config.php';

try {
    $pdo = new PDO($dsn, $db_user, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if($pdo) {
        echo "Conexão com banco de dados estabelecida";
    }
} catch (PDOException $e) {
    echo "Erro de conexão";
    die($e->getMessage());
    
}