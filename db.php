<?php

$config = require __DIR__ . '/config/config.php';

$pdo = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
    $config['user'],
    $config['pass']
);