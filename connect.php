<?php

require_once './config.php';

try {
    $pdo = new PDO($dsn, $db_user, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
    die($e->getMessage());
    
}