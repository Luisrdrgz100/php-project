<?php
namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

    class kernel{ 
        public $logger;
        public function __construct(){
            $this -> logger = new Logger('Kernel');
            $this -> logger -> pushhandler(new StreamHandler( dirname (__DIR__).'/var/log/prod.log'), Logger::DEBUG);

        }
        public function init(){
            $this -> logger -> info('Kernel up');
            echo "<h1>Kernel iniciado</h1>";
        }
    }