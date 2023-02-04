<?php
session_start();
include 'function.php';
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <?php include 'head.php'; ?>
</head>

<!-- carousel -->
  <div class="carousel_size">
    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label=""></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label=""></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label=""></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label=""></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label=""></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label=""></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./photo/1 (2).jpg" class="d-block w-100 img-fluid " data-bs-interval="200" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./photo/3.jpg" class="d-block w-100 img-fluid" data-bs-interval="200" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./photo/5.jpg" class="d-block w-100 img-fluid" data-bs-interval="200" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./photo/6.jpg" class="d-block w-100 img-fluid" data-bs-interval="200" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./photo/7.jpg" class="d-block w-100 img-fluid" data-bs-interval="200" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./photo/8.jpg" class="d-block w-100 img-fluid" data-bs-interval="200" alt="...">
        </div>
      </div>
    </div>
  </div>


  <div class="text-center m-auto mt-4 p-2">
    <P class="catagory">Popular Categories</P>
  </div>

  <!-- card -->

  <div class="container">
    <div class="row gy-4">
      <div class="col-md-3">
        <div class="card card_hover">
          <div class="card-body m-auto">
            <!-- <img src="./photo/plug (2).png" class=" card-img-center" alt=""> -->
            <i class="fa-solid fa-plug fa-5x "></i>
          </div>
          <div class=" card-text text-center">
            <h4>Electrician</h4>
            <p>Empty postion</p>
            <a href="electrician.php" class="stretched-link"></a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card card_hover">
          <div class="card-body m-auto">
            <!-- <img src="./photo/plug (2).png" class=" card-img-center" alt=""> -->
            <i class="fa-solid fa-fish-fins fa-5x"></i>          </div>
          <div class=" card-text text-center">
            <h4>Fisherman</h4>
            <p>Empty postion</p>
            <a href="fisherman.php" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card_hover">
          <div class="card-body m-auto">
            <!-- <img src="./photo/plug (2).png" class=" card-img-center" alt=""> -->
            <i class="fa-solid fa-person-digging fa-5x"></i>
          </div>

          <div class=" card-text text-center">
            <h4>Farmer</h4>
            <p>Empty postion</p>
            <a href="farmer.php" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card card_hover">
          <div class="card-body m-auto">
            <!-- <img src="./photo/plug (2).png" class=" card-img-center" alt=""> -->
            <i class="fa-solid fa-hammer fa-5x"></i> 
          </div>
          <div class=" card-text text-center">
            <h4>Worker</h4>
            <p>Empty postion</p>
            <a href="worker.php" class="stretched-link"></a>
          </div>
        </div>
      </div>

    </div> 
  </div>


  <!-- Contact us page -->

  <div class="text-center m-auto mt-4 p-2">
    <!-- <P class="catagory">Contact Us</P> -->
  </div>
  
  
<footer class=" bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-wight-bold text-warning" >KajKhuji</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime harum reprehenderit esse beatae consequatur, molestias magni numquam accusamus impedit quos.</p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-wight-bold text-warning" >VISIT</h5>
        <p>
            <a href="" class="text-white"> Media</a>
        </p>
        <p>
            <a href="" class="text-white"> Gallery</a>
        </p>
        <p>
            <a href="" class="text-white"> Vedio</a>
        </p>

      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-wight-bold text-warning" >HELP</h5>
        <p>
            <a href="" class="text-white"> Contact us</a>
        </p>
        <p>
            <a href="about.php" class="text-white"> About Us</a>
        </p>
        <p>
            <a href="" class="text-white"> Campaign</a>
        </p>

      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-wight-bold text-warning" >CONTACT</h5>
        <p>
            <i class="fas fa-home mr-3"></i> Dhaka, Bangladesh
        </p>
        <p>
        <i class="fas fa-envelope mr-3"></i> kajkhuji@gmail.com
        </p>
        <p>
        <i class="fas fa-phone mr-3"></i> 8801780173330000
        </p>
      </div>

      <hr class="mb-1">
      <div class="row align-items-center mt-3">
        <div class="col-md-7 col-lg-8">
          <p>Copyright @2023 All rights reserved by.
            <a href="index.php"><strong class="text-warning">KajKhuji</strong></a>
          </p>
        </div>

        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">

            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i class="fa-brands fa-square-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-square-youtube"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i class="fa-brands fa-square-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i class="fa-brands fa-square-instagram"></i></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i class="fa-brands fa-linkedin"></i></i></i></a>
              </li>
            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

</footer>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
