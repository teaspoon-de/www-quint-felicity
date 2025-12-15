<?php
require_once __DIR__ . '/../src/Database.php';

if (session_status() === PHP_SESSION_NONE) session_start();
if (empty($_SESSION["csrf_token"])) $_SESSION["csrf_token"] = bin2hex(random_bytes(32));

require_once __DIR__ . '/../src/Router.php';

require_once __DIR__ . '/../src/Controllers/Controller.php';
require_once __DIR__ . '/../src/Models/Blogpost.php';
require_once __DIR__ . '/../src/Models/Image.php';

$router = new Router();

$router->get('/sitemap.xml', [Controller::class, 'sitemap']);
$router->get('/', [Controller::class, 'index']);
$router->get('/impressum', [Controller::class, 'impressum']);
$router->get('/ueber-uns', [Controller::class, 'ueberUns']);
$router->get('/blog', [Controller::class, 'blogIndex']);
$router->get('/blog/{id}', [Controller::class, 'blogShow']);
$router->get('/fuer-veranstalter', [Controller::class, 'veranstalter']);
$router->get('/kontakt', [Controller::class, 'kontakt']);

$router->run();