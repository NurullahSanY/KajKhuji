<?php include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>village people profile page</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2 style="text-align:center">Profile For Village People</h2>
    <!-- <div class="usertype col-lg-12"></div> -->
    <!-- profile photo -->
        <div class="col-md-3">
            
            <p>Profile Photo</p>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-8" width="150px" src="./photo/miraz.JPG">
                <span class="font-weight-bold">Md Mirazuddin</span>
                <span class="text-black-50">u1804054@student.cuet.ac.bd</span>
                <span> </span>
            </div>
        </div>
    <form>
        <div class="form-row">
            <h3>Account Information</h3>
            <div class="form-group col-md-2">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-2">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-2">
                <label for="inputPassword4">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <!-- For emtpy row -->
        <div class="usertype col-lg-12"></div>

        <h3>Educational Qualification</h3>
        <div class="usertype col-lg-12"><h4>SSC Level</h4></div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="text">Division</label>
                <input type="text" class="form-control" id="division" placeholder="Arts/Science...">
            </div>
            <div class="form-group col-md-2">
                <label for="year">Passing Year</label>
                <input type="text" class="form-control" id="passyear" placeholder="1971">
            </div>
        </div>
        <div class="usertype col-lg-12"><h4>HSC Level</h4></div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="text">Division</label>
                <input type="text" class="form-control" id="division" placeholder="Arts/Science...">
            </div>
            <div class="form-group col-md-2">
                <label for="year">Passing Year</label>
                <input type="text" class="form-control" id="passyear" placeholder="1971">
            </div>
        </div>
        <div class="usertype col-lg-12"><h4>Honours Level</h4></div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="text">Department</label>
                <input type="text" class="form-control" id="division" placeholder="Math/Physics/MBA/...">
            </div>
            <div class="form-group col-md-2">
                <label for="year">Graduation Year</label>
                <input type="text" class="form-control" id="passyear" placeholder="1971">
            </div>
        </div>
        <!-- for blank line -->
        <div class="usertype col-2">
            <div class="row">
                <h3>Personal Identity</h3>
            </div>
        </div>
        <div class="contianer">
            <div
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="villagename">Village Name</label>
                <input type="text" class="form-control" id="villagename">
            </div>
            <div class="form-group col-md-2">
                <label for="wordno">Word Number</label>
                <input type="text" class="form-control" id="wordno">
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
            <div class="form-group col-md-4">
                <label for="nid">Nid Number</label>
                <input type="password" class="form-control" required id="nid" placeholder="894543......">
            </div>
             <div class="form-group col-md-4">
                <label for="nid">Passport Number</label>
                <input type="password" class="form-control" id="nid" placeholder="894543......">
            </div>
        </div>
        
        
        <div class="form-group col-lg-5">
            <button type="submit" class="btn btn-primary">Create Profile</button>
        </div>
    </form>
</div>
</body>
<!-- <?php
  if(isset($_POST["signin"]))
  {
    mysqli_query($link, "insert into signin values('$_POST[email]', '$_POST[password]')");
  }
?> -->
</html>
