<?php

$host = "localhost";
$db = "quint_felicity";
$user = "www_quint_felicity";
$pass = "YqDW4k6EMKp1lBS8IatiP0lh2Mruvohe";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,   
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("DB-Verbindung fehlgeschlagen: " . $e->getMessage());
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
}

?>