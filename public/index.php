<?php
ini_set('max_execution_time', 0);
require_once dirname(__DIR__).'/vendor/autoload.php';

    use App\kernel;
    use Kint;

    $kernel = new kernel();
    Kint::dump($GLOBALS);
    $kernel -> init();