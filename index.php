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

<div class="row m-5 p-2">
  <div class="col-sm-12 col-md-6 col-lg-6">
    <div>
      <img src="<?php echo"$sliderImg7";?>" class="img-fluid rounded-start" alt="...">
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-6">
    <div>
        <h5 class="card-title">We are Bldoner Group</h5>
        <p class="card-text">
            <i class="icofont-verification-check">
                Are you eligible for blood donation? Find out
                about the eligibility </br> requirements to donate blood today. 
                Learn about general health,</br> travel, medications, tattoos, and more.
            </i> 
        </p>
        <p class="card-text">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            <i> Are you eligible for blood donation?</i></br>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            <i> Are you eligible for blood donation?</i></br>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            <i> Are you eligible for blood donation?</i></br>
        </svg>
        </p>
        <a href="#" class="btn btn-primary mt-4">See More</a>
    </div>
  </div>
</div>

<!-- Footer  -->
<?php include_once 'partial\footer.php'; ?>
