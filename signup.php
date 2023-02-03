<?php
session_start();
include 'function.php';
include 'connection.php';

if (isset($_POST["submit"])) {
   $inrt ="insert into signup values('$_POST[email]', '$_POST[password]', '$_POST[repassword]', '$_POST[holdno]', '$_POST[wnum]', '$_POST[pcode]', '$_POST[upazila]',
    '$_POST[district]','$_POST[division]','$_POST[category]', '$_POST[people]', '$_POST[name]', '$_POST[fname]', '$_POST[mname]', '$_POST[mstatus]',
     '$_POST[religion]', '$_POST[nid]', '$_POST[phone]')";
   $q2 = $link->query($inrt);


    //  $elaka = $_POST['people'];
  //$cate = $_POST['category'];
 
  // if ($cate == "Fisherman") {
  // } else if ($cate == "Farmer") {
  //   mysqli_query($link, "insert into farmer values('$_POST[name]', '$_POST[email]')");
  // } else if ($cate == "Electrician") {
  // } else if ($cate == "Doctor") {
  // } else if ($cate == "Teacher") {
  // } else {
  // }
  header("location:signin.php");
  exit;
}
if(!isset($_SESSION['email']))
{

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup</title>
  <?php include 'head.php' ?>
  <!-- <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>

<body class="b-ground">

  <!-- This is SignUP Form -->
  <div class="container">

    <div class="signup-box">
      <form action="" name="form" method="post">
        <h2 class="fw-bold mb-5 text-uppercase">Sign up form</h2>

        <!-- /////////// information1///////////// -->
        <div class="row gy-2 gx-3 align-items-center mb-5">
          <h4 class="text-uppercase">Information1</h4>
          <div class="col-md-4 mb-4">
            <div class="form-outline">
              <label for="form-label">Email</label>
              <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <label for="form-label">Password</label>
            <input type="password" class="form-control" required id="password" placeholder="Enter password" name="password">
          </div>
          <div class="col-md-4 mb-4">
            <label for="form-label">Retype Password</label>
            <input type="password" class="form-control" required id="repassword" placeholder="Enter password" name="repassword">
          </div>
        </div>

        <!-- /////////// information2///////////// -->
        <div class="row gy-2 gx-3 align-items-center mb-5">
          <h4 class="text-uppercase">Information2</h4>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="holdno">Holding/House Number</label>
              <input type="text" class="form-control" id="holdno" placeholder="XXXX" name="holdno">
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <label for="wordno">Word Number</label>
            <input type="text" class="form-control" id="wordno" placeholder="X" name="wnum">
          </div>
          <div class="col-md-4 mb-2">
            <label for="pwd">Post Code</label>
            <input type="password" class="form-control" id="pcode" placeholder="2130" name="pcode">
          </div>

          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="upazila">Upazila / City-Corporation</label>
              <input type="text" class="form-control" placeholder="Ullapara" id="upazila" name="upazila">
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="district">District</label>
              <input type="text" class="form-control" placeholder="Sirajgonj" id="district" name="district">
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="division">Division</label>
              <input type="text" class="form-control" placeholder="Rajshahi" id="division" name="division">
            </div>
          </div>

        </div>

        <!-- /////////// information3///////////// -->
        <div class="row gy-2 gx-3 align-items-center mb-5">
          <h4 class="text-uppercase">Information3</h4>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="category">Category</label>
              <select class="form-control" name="category">
                <option value="Fisherman">Fisherman</option>
                <option value="Farmer">Farmer</option>
                <option value="Electrician">Electrician</option>
                <option value="Doctor">Doctor</option>
                <option value="Teacher">Teacher</option>
                <option value="Wood-Cutter">Wood-Cutter</option>
                <option value="worker">Worker</option>
              </select>
            </div>
          </div>

          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="people">People From</label>
              <select class="form-control" name="people">
                <option value="city">City-Corporation</option>
                <option value="village">Village</option>
              </select>
            </div>
          </div>

        </div>

        <!-- /////////// information4///////////// -->
        <div class="row gy-2 gx-3 align-items-center mb-5">
          <h4 class="text-uppercase">Information4</h4>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="text">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">

            </div>
          </div>

          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="text">Father's Name</label>
              <input type="text" class="form-control" id="fname" placeholder="Mr. X" name="fname">

            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="text">Mother's Name</label>
              <input type="text" class="form-control" id="mname" placeholder="Mrs. Y" name="mname">

            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="mstatus">Marital status</label>
              <select class="form-control" name="mstatus">
                <option value="married">Married</option>
                <option value="non-married">Non-Married</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="religion">Religion</label>
              <select class="form-control" name="religion">
                <option value="islam">Islam</option>
                <option value="hindu">Hindu</option>
                <option value="cristian">Cristian</option>
                <option value="buddhist">Buddhisht</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="pwd">NID</label>
              <input type="password" class="form-control" id="nid" placeholder="Enter NID" name="nid">
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-outline">
              <label for="pwd">Phone Number</label>
              <input type="password" class="form-control" id="phone" placeholder="018xxx" name="phone">
            </div>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
  <!-- ///////////////////////////////Container Finished///////////////////////////////////// -->
</body>


<!-- //////////////////////////////////////// ANOTHER PART OF PHP CODE ////////////////////////////////////////// -->
</html>

<?php
}
else
{
  header('location:signin.php');
  exit;
}
unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  mysqli_close($link);

//echo "this is mine";
?>