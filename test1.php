<?php
//config 
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?> 
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>




<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
<?php if(isset($slides) && is_array($slides) && count($slides)> 0){
foreach($slides as $key => $slide){  
?>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key;?>" class="active" aria-current="true" aria-label="Slide 1"></button>
<?php } ?>
  </div>
  <div class="carousel-inner">
<?php foreach($slides as $key => $slide){ ?>
    <div class="carousel-item <?= ($key == 0) ? 'active':''?>">
      <img src="<?= $slide['path'];?>" class="d-block w-100" alt="<?= $slide['description'];?>">
    </div>
<?php } ?>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
<?php 
}else{
    $slides = 0;
} ?>
</div>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>