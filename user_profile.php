<?php include "connection.php";
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Account Creation</h2>
    <form>
        <div class="form-group">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>

        <!-- <div class="form-group col-lg-9">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div> -->
        
        <!-- <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div> -->
</br>
        <div class="usertype col-lg-12">
            <h4>Village People</h4>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="inputCity">Village</label>
            <input type="text" class="form-control" id="village">
            </div>
            <div class="form-group col-md-2">
            <label for="upazila">Upazila</label>
            <input type="text" class="form-control" id="upazila">
            </div>
            <div class="form-group col-md-2">
            <label for="zila">District</label>
            <input type="text" class="form-control" id="zila">
            </div>
            <div class="form-group col-md-2">
            <label for="division">Division</label>
            <input type="text" class="form-control" id="divison">
            </div>
            <div class="form-group col-md-2">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country">
            </div>
        </div>
</br>
        <div class="usertype col-lg-12">
            <h4>City People</h4>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label for="houseno">House no</label>
            <input type="text" class="form-control" id="houseno">
            </div>
            <div class="form-group col-md-2">
            <label for="wordno">Word Number</label>
            <input type="text" class="form-control" id="wordno">
            </div>
            <div class="form-group col-md-2">
            <label for="wordname">Word Name</label>
            <input type="text" class="form-control" id="wordname">
            </div>
            <div class="form-group col-md-2">
            <label for="citycorp">City Corporation</label>
            <input type="text" class="form-control" id="citycorp">
            </div>
            <div class="form-group col-md-2">
            <label for="division">Division</label>
            <input type="text" class="form-control" id="divison">
            </div>
            <div class="form-group col-md-2">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country">
            </div>
        </div>

        <!-- <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div> -->
        <div class="form-group col-lg-5">
            <button type="submit" class="btn btn-primary">Create Profile</button>
        </div>
        
    </form>
</div>
</body>
<!-- <?php
  if(isset($_POST["login"]))
  {
    mysqli_query($link, "insert into login values('$_POST[email]', '$_POST[password]')");
  }
?> -->
</html>
