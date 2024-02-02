<?php

ini_set('display_errors' ,1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require '../vendor/autoload.php';

require_once __DIR__ . '/services/OwnersService.class.php';
require_once __DIR__ . '/services/VetsService.class.php';
Flight::register('ownersService' , 'OwnersService');
Flight::register('vetsService' , 'VetsService');


//import all routes

require_once __DIR__ . '/routes/OwnersRoutes.php';
require_once __DIR__ . '/routes/VetsRoutes.php';


Flight::start();
?>