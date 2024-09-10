<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';?>

<!-- Sliders -->
<div class="card mx-auto" style="width: 79rem;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(isset($slides) && is_array($slides) && count($slides) > 0){

 foreach($slides as $key => $slide){  
?>
  <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key;?>" class="active"></li>
    <?php } ?>
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