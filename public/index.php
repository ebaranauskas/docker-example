<?php

declare(strict_types=1);

namespace App;

use PDO;
use function \dirname;
use const \DIRECTORY_SEPARATOR;

ini_set('display_errors', '1');
error_reporting(-1);

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo (new Stuff())->increase(2);

$handler = new PDO('mysql:dbname=mysql;host=database;encoding=utf8mb4', 'root', 'pass');
echo "<pre>";
print_r($handler->query('SHOW DATABASES')->fetchAll(PDO::FETCH_NUM));
$handler = null;
