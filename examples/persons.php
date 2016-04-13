<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MyApp\App;

$dsn = 'sqlite:' . realpath(__DIR__ . '/../data/di.db');
$app = new App($dsn);
$result = $app->findPersonByName('Jane Doe');

echo implode('|', $result) . PHP_EOL;