<?php
require_once __DIR__ . '/vendor/autoload.php';

use ProgrammerZamanNow\Belajar\Customer;

$customer = new customer("Eko");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Budi") . PHP_EOL;
