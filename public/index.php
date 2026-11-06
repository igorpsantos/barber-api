<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

header('Content-Type: Application/json');

echo json_encode([
    'php' => PHP_VERSION,
    'metodo' => $_SERVER['REQUEST_METHOD'],
    'uri' => $_SERVER['REQUEST_URI'],
    'status' => true,
    'message' => 'Hello World!'
]);