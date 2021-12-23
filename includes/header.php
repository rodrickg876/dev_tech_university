<?php
  include_once 'includes/session.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/site.css" />

    <title>DTU - <?php echo $title ?></title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #ffd403;">
      <div class="container">
        <a class="navbar-brand" href="index.php">DTU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto">
            <a class="nav-link nav-item" aria-current="page" href="index.php">Home</a>
            <a class="nav-link nav-item" href="aboutus.php">About Us</a>
            <a class="nav-link nav-item" href="services.php">Our Services</a>
            <a class="nav-link nav-item" href="register.php">Subscribe</a>
            <a class="nav-link nav-item " href="contactus.php">Contact</a>          
            
           
          </div>
          <div class="navbar-nav ms-auto">
          <a class="nav-link nav-item btn btn-info btn-sm" href="admin.php">Admin</a>
            <?php if(!isset($_SESSION['userid'])){ ?>
              <a class="nav-link nav-item"  href="login.php">Login</a>
            <?php }
            else{ ?>

              <a class="nav-link nav-item" href="#"><span>Hello, <?php echo $_SESSION['username'] ?>!</span></a>              
              <a class="nav-link nav-item" href="logout.php">Logout</a>

           <?php } ?>
             
          </div>
        </div>
      </div>
    </nav>
    
    

