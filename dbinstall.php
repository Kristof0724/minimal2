<?php

require __DIR__ . '/db.php';

$sql = file_get_contents(__DIR__ . '/dbinstall.sql');
$pdo->exec($sql);

echo 'Adatbázis telepítve';
