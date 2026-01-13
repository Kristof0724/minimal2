<?php

$config = require __DIR__ . '/../config/config.php';

$db = $config['db'];

$dsn = sprintf(
    'mysql:host=%s;dbname=%s;charset=%s',
    $db['host'],
    $db['dbname'],
    $db['charset']
);

try {
    $pdo = new PDO(
        $dsn,
        $db['user'],
        $db['password'],
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die('Adatbázis kapcsolat hiba: ' . $e->getMessage());
}
    