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
    <title>signup</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

   <!-- This is SignUP Form -->
<div class="container">
    <div class="col">
      <h2>Registration Form</h2>
  
    <form action="" name="form" method="post">
      <div class="form-group col-md-3">
          <label for="text">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
      <div class="form-group col-md-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

      <div class="form-group col-md-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"> 
      </div>

      <div class="form-group col-md-3">
          <label for="pwd">Retype Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="repassword">
        </div>
        <div class="form-group col-md-3">
          <label for="category">Category</label>
          <select class="form-control" name="category">
              <option value="Fisherman">Fisherman</option>
              <option value="Farmer">Farmer</option>
              <option value="Electrician">Electrician</option>
              <option value="Doctor">Doctor</option>
              <option value="Teacher">Teacher</option>
              <option value="Wood-Cutter">Wood-Cutter</option>
          </select>
        </div>
          <div class="form-group col-md-3">
              <label for="people">People From</label>
              <select class="form-control" name="people">
                  <option value="city">City</option>
                  <option value="village">Village</option>
              </select>
          </div>
          <div class="form-group col-md-3">
              <label for="religion">People From</label>
              <select class="form-control" name="religion">
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="cristian">Cristian</option>
                  <option value="buddhist">Buddhisht</option>
              </select>
          </div>
    <div class="col-md-12">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
    
  </form>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php

  if(isset($_POST["submit"]))
  {
    $elaka = $_POST['people'];
    if($elaka=="city")
      {
        mysqli_query($link, "insert into people_city values('$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[repassword]', '$_POST[category]', '$_POST[people]')");
      }
      else
      {
        mysqli_query($link, "insert into people_village values('$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[repassword]', '$_POST[category]', '$_POST[people]')");
      }

      $cate = $_POST['category'];
      echo $cate;
      if($cate=="Fisherman")
      {
        
      }
      else if($cate=="Farmer")
      {
        mysqli_query($link, "insert into farmer values('$_POST[name]', '$_POST[email]')");
      }
      else if($cate=="Electrician")
      {

      }
      else if($cate=="Doctor")
      {

      }
      else if($cate=="Teacher")
      {

      }
      else
      {

      }
      //header("location:signin.php");
  }
  //echo "this is mine";
?>
</html>