<?php
//
$docroot = $_SERVER['DOCUMENT_ROOT'];
$webroot = "http://assignment.eyasin/";
$public = $webroot . "public/";
$bs4 = $webroot . "public/bs4/";
$css = $webroot . "public/css/";
$image = $webroot . "public/img/";

//Database Configuration 
$dsn = 'mysql:host=localhost;dbname=assingment';
$username = 'root';
$password = '';

try{
  $pdo = new PDO($dsn , $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM slides';
$stml = $pdo->prepare($sql);
$stml->execute();
$slides = $stml->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOException $e){
  echo "Query failed: " . $e->getMessage();
}


try{
  $pdo = new PDO($dsn , $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM `group`';
$stml = $pdo->prepare($sql);
$stml->execute();
$groups = $stml->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOException $e){
  echo "Query failed: " . $e->getMessage();
}