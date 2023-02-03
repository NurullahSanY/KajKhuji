<?php
session_start();
include 'function.php';
include "connection.php";
if(isset($_POST['submit']))
{
  $in = "INSERT into donation values('$_POST[name]', '$_POST[email]', '$_POST[phone]','$_POST[transway]', '$_POST[transid]', '$_POST[date]')";
  $q = $link->query($in);
  header("location:paymentsuccess.php");
  exit;
}
else
{
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donation</title>
    <?php require'head.php' ?>
</head>
<body class="b-ground">

  <!-- Bannar -->
  <div class="bannar_donation">
    <div class="bannar_text">
      Donation  
      <hr class="horizontal_line " >
      <h6>Home/Donation</h6>
    </div>
  </div>

  <div class="text-center m-auto m-2 p-1">
    <P class="catagory"><Datag>DONATE HERE</Datag></P>
  </div>

  <!-- Bannar end -->

  <!-- payment Methods -->
  <div class="payment_body">
    <div class="payment_form">
      <div class="text-center p-2 text-white mb-3" style="background-color:#D91516;">
        <h2>PAYMENT INFORMATION</h2>
      </div>

      <form action="" name="form" method="POST">
        <div class="input-group mb-3">
          <span class="input-group-text" id=""><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id=""><i class="fa-solid fa-envelope"></i></span>
          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
        
          <span class="input-group-text" id=""><i class="fa-solid fa-phone"></i></span>
          <input type="number" class="form-control" placeholder="Phone Number" name="phone" id="phone" aria-label="" aria-describedby="">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id=""><i class="fa-regular fa-calendar-days"></i></span>
          <input type="date" name="date" id="date" class="form-control" onfocus="(this.type='date')" placeholder="Payment Date"  aria-label="" aria-describedby="">
        </div>
            
        <div class="col-md-12 mb-2" style="margin-left:40px">
            <div class="form-outline">

              <select class="form-control" name="transway">
              
                <option value="mobile-banking">Mobile Banking</option>
                <option value="atm">ATM Card</option>
                
              </select>
            </div>
          </div>
          <div class="input-group mb-3 " role="" aria-label="">
         <span class="input-group-text" id=""><i class="fa-solid fa-message"></i></span>
          <input type="tel" class="form-control" name="transid" id="transid"  placeholder="Transaction ID" aria-label="" aria-describedby="">
        </div>
        
        <div>
          <button type="submit" id="submit" name="submit" class="btn btn-success col-12">submit</button>
          </div>

      </form>
    </div>  
  </div>


  <!-- payment Methods end -->


  <!-- Footer -->
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

<!-- Footer End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>