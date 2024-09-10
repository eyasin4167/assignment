<?php
$sliderImg1="..\img\img1.jpg";
$sliderImg2="..\img\img2.jpg";
$sliderImg3="..\img\img3.jpg";
$sliderImg7="..\img\img7.jpg";

$slides='';

$slides=[
          [
            'path' => "..\img\img4.jpg",
            'description' => " Image slide 1"
          ],

          [
            'path' => "..\img\img5.jpg",
            'description' => " Image slide 2"
          ],
          [
            'path' => "..\img\img6.jpg",
            'description' => " Image slide 3"
          ],
        ];

// dd($slides);
// foreach ($slides as $key => $slide){
//   echo $key . "---". $slide;
//   echo "<hr/>";
// }



$sliderImg1="..\img\img1.jpg";
$sliderImg2="..\img\img2.jpg";
$sliderImg3="..\img\img3.jpg";
$sliderImg7="..\img\img7.jpg";
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
if($slides){
  echo "<pre>";
  print_r($slides);
  echo "<pre>";
}else{
  echo "No data found";
}
}catch (PDOException $e){
  echo "Query failed: " . $e->getMessage();
  
}

?>

<!-- Sliders -->
<div class="card mx-auto" style="width: 80rem;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(is_array($slides) && count($slides) > 0){

 $count=0; foreach($slides as $key => $slide){  
?>
  <li data-target="#carouselExampleIndicators" data-slide-to="<?= $count;?>" class="active"></li>
    <?php $count++;} ?>
  </ol>
  <div class="carousel-inner">
    <?php foreach($slides as $key => $slide){  ?>
    <div class="carousel-item <?= ($key == 0) ? 'active' : ''; ?>">
      <img class="d-block w-100" src="<?= $slide['path']; ?>" alt="<?= $slide['description']; ?>">
    </div>
<?php } ?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php 
}else{
  $slides=[];
}?>
</div>

