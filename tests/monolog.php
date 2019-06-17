<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

require '../vendor/autoload.php';
$logger = new Logger('my-logger');
$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/my_app.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->addInfo('My logger is now ready');