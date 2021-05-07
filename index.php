<?php
require __DIR__ . '/vendor/autoload.php';

use Phroper\Phroper;
use PhroperAdmin\PhroperAdmin;

Phroper::initialize([
    "ROOT" => __DIR__,
    "API_URL" => "/api",
    "CONFIG_FILE" => __DIR__ . "/config.php"
]);

$r = Phroper::instance()->router;

Phroper::serveApi("api/");
PhroperAdmin::initialize();

Phroper::serveFolder(__DIR__ . DIRECTORY_SEPARATOR . "public");
Phroper::serveFallbackFile(__DIR__ . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "index.html");

Phroper::run();
