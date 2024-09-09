<?php
// -- Header 
include_once 'partial\header.php';
//-- Navbar 
include_once 'partial\navBar.php';
//-- Sliders 
include_once 'partial\slides.php';
?> 

<!-- Main Content -->
  
<div class="card-deck m-5 pt-4">
  <div class="card">
    <img class="card-img-top" src="<?php echo"$sliderImg1";?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">A+ Positive</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php echo"$sliderImg2";?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">B+ Positive</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php echo"$sliderImg3";?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">AB+ Positive</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<!-- Group Section  -->
<?php include_once 'partial\group.php'; ?>
<!-- Footer  -->
<?php include_once 'partial\footer.php'; ?>
