<?php
require_once __DIR__ . '/../src/Database.php';

if (session_status() === PHP_SESSION_NONE) session_start();
if (empty($_SESSION["csrf_token"])) $_SESSION["csrf_token"] = bin2hex(random_bytes(32));

require_once __DIR__ . '/../src/Router.php';