<?php
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];

$dsn = "mysql:host=localhost;dbname=;charset=utf8mb4";
$options = [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "conexão bem sucedida";
} catch (Exception $e) {
    echo "erro";
    error_log($e->getMessage());
}
