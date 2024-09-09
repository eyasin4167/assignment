<?php
$sliderImg1="..\img\img1.jpg";
$sliderImg2="..\img\img2.jpg";
$sliderImg3="..\img\img3.jpg";
$slides=[];

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