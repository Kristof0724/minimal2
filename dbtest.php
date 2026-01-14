<?php

try {
    require __DIR__ . '/db.php';
    echo 'Sikeres adatbázis kapcsolat';
} catch (Throwable $e) {
    echo 'Sikertelen adatbázis kapcsolat: ' . $e->getMessage();
}
