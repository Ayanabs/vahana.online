<?php 


session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--font awsome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css link-->
    <link rel="stylesheet" href="../style.css">
   <!-- ayana link -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-white "></nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white "></nav>



<!--nav-->

<nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">Va</span><span class="btn-sl btn-light"><b>hana</b></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="../home.php">Home</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="../display_all.php">Vehicle Store</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="#services">Notices</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Post an Advertisement</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="../about_us.php">About us</a>
              </li> 
				</div>
				<?php
         if(!isset($_SESSION['username'])){
          echo 
          "<div class='btn'>
          <li class='nav-item'>
            <a class='nav-link btn btn-warning' style='scale:0.9' href='../users_area/user_login.php'><i class='bi bi-person-circle'></i> Log In</a>
          </li>  
    </div>";
         }else{echo 
          "<div class='btn'>
          <li class='nav-item'>
            <a class='nav-link btn btn-warning' style='scale:0.9' href='../session/logout.php'><i class='bi bi-person-circle'></i>Log Out</a>
          </li>  
    </div>";}
         
         ?>
            </ul>
          </div>
        </div>
      </nav>









<div class="container-fluid p-5 ">
  <div class="bg-white">
  <h3 class="text-center p-3">
    Manage Details 
  </h3>
  </div>
 <!--second nav-->
 <div class="row">
  <div class="col-md-12 bg-white p-1 d-flex align-item-center" >
    <div class="px-5">
      <a href="#"><img src="..\assets\user circle.png" alt="" class="adminimage"></a>
      <p class="text-dark text-center"> name</p>
    </div>
    <!--button-->
    <div class="button text-center ">
    <button class="my-1"><a href="insert_product.php" class="nav-link text-light bg-dark mxy-1">Veicle Ad</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">view vehicle ad</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">spare part ad</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">view spare part ad</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">wanted ad</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">view wanted ad</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">bidding</a></button>
    <button><a href="" class="nav-link text-light bg-dark mxy-1">view bidding</a></button>
    <!--<button><a href="index.php?insert_category" class="nav-link text-light bg-dark mxy-1">input category</a></button> -->
    <button><a href="" class="nav-link text-light bg-dark mxy-1">view category</a></button>
    <!-- <button><a href="index.php?insert_brand" class="nav-link text-light bg-dark mxy-1">input brand</a></button> -->
    <button><a href="" class="nav-link text-light bg-dark mxy-1">view brand </a></button>
    </div>
  </div>
 </div>
 
 </div>

<div class="container">
  <?php
  if(isset($_GET['insert_category'])){
    include('insert_categories.php');
  }
  if(isset($_GET['insert_brand'])){
    include('insert_brands.php');
  }
  ?>
</div>


<div class="bg-secondary p-2 text-center footer">
  <p>All Rights Reserved @ - Designed By Vahana-2022</p>
 </div>
</body>
</html>