<?php

use Controller\AccueilController;
use Controller\AdherentController;
use Controller\BookController;
use Controller\EmpruntController;

session_start();

require 'vendor/autoload.php';

define('host', 'http://localhost/cloudcampus/7-s15-php-poo/tp-library-v2-mvc/');
define('ROOT', dirname(__DIR__).DIRECTORY_SEPARATOR.'tp-library-v2-mvc'.DIRECTORY_SEPARATOR);

function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

// debug($_SESSION);

$class = $_GET['class'];
$method = $_GET['method'].'Action';


switch($class){
  case 'AccueilController':
    echo '1';
    $c = new AccueilController();
    break;
  case 'AdherentController':
    $c = new AdherentController();
    break;
  case 'BookController':
    $c = new BookController();
    break;
  case 'EmpruntController':
    $c = new EmpruntController();
    break;
  default:
    $c = new AccueilController();
    break;
}

$c->$method();
die;