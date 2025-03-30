<?php
require(__DIR__ . '/../../vendor/autoload.php');

use Pecee\SimpleRouter\SimpleRouter as Router;

// https://github.com/skipperbent/simple-php-router?tab=readme-ov-file#basic-routing

Router::get('/', function() {
    return json_encode(['status' => 'success', 'message' => 'Hello World!']);
});

Router::get('/test', function() {
    return json_encode(['status' => 'success', 'message' => 'OMG! Another route, how is this possible?']);
});

Router::get('/favicon.ico', function() {
    return null; // alterar pra um favicon válido ou deixar
});


Router::start();
