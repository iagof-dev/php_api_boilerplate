<?php
header('Content-Type: application/json; charset=utf-8');

require(__DIR__ . '/../../vendor/autoload.php');

use Pecee\SimpleRouter\SimpleRouter as Router;

// https://github.com/skipperbent/simple-php-router?tab=readme-ov-file#basic-routing

Router::get('/', function() {
    return json_encode(['status' => 'success', 'message' => 'Hello World!']);
});



Router::start();
