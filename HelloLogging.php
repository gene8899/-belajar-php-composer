<?php
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$log = new Logger("ProgrammerZamanNow1");
$log->pushHandler(new StreamHandler('application1.log', Logger::INFO));

$log->info('Hello World');
$log->info('Selamat Belajar Composer');
