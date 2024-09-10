<?php 
//config 
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php'; 
?>


<div class="row m-5 p-2">
  <div class="col-sm-12 col-md-6 col-lg-6">
    <div>
      <?php if(isset($groups) && is_array($groups) && count($groups) > 0){ ?>
        <?php foreach($groups as $key => $group){  ?>
       <img src="<?= $group['path']; ?>" class="img-fluid rounded-start" alt="<?= $group['image_alt']; ?>">
      <?php } ?>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-6">
    <div>
        <h5 class="card-title"><?= $group['group_title']; ?></h5>
        <p class="card-text">
            <i class="icofont-verification-check">
                 <?= $group['description']; ?>
            </i> 
        </p>
        <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                <i><?= $group['note1']; ?></i></br>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                <i><?= $group['note1']; ?></i></br>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                <i><?= $group['note1']; ?></i></br>
            </svg>
        </p>
        <a href="#" class="btn btn-primary">See More</a>
    </div>
  </div>
  <?php 
}else{
  $group=[];
}?>
</div>
