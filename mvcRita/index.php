<?php
require_once('./controllers/Autoload.php');

$autoload = new Autoload();
$route = $_GET['r'] ?? 'home';
$app = new Router($route);

