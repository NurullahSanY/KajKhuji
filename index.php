<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&family=Recursive:wght@1000&family=Righteous&family=Rubik&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/style.css">
  <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>


<body>
  <!-- Front end Work of Nurullah, don't rwrite it -->
  <nav class="navbar navbar-expand-lg navbar-light p-3">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <!-- <i class="fa-brands fa-searchengin"></i> -->
        Kaj Khuji
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav ms-auto my-2 my-lg-0 " style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php" style="color: black;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" style="color: black;">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donation.php" style="color: black;">Donation</a>
          </li>
        </ul>
        <form class="d-flex">
        <a class="btn btn-success me-2" href="signin.php" >Signin</a>
          <!-- <a class="btn btn-success" href="signup.php">Signup</a> -->
          <div class="dropdown">
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   SignUp
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item " href="vill.php">Village People</a></li>
    <li><a class="dropdown-item" href="city.php">City People</a></li>
  </ul>
</div>
        </form>
      </div>
    </div>
  </nav>
  
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
            <a href="vill.php" class="stretched-link"></a>
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
