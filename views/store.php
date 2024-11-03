<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use App\slide\slide;

$slide = new slide();

print_r($_REQUEST);