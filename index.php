<?php 
    $title='DTU Home';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
 ?>
    
</div>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/slide3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="p-5 text-center">
    <h1>Find your programme </h1>
        <p>Choose from over 200 programmes across 7 faculties and 50 departments and research centres.</p>
</div>
<div class="row" style="border-top:2px solid gray">
    <a href="https://ncbscholarships.com/" target="_blank"><img src="images/NCBScholarships.jpg" /></a>
</div>


   
    
    <?php require_once 'includes/footer.php'; ?>