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
    <title>Signin</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="bg-theme">
        <p>HOise ki?</p>
    </div>
<div class="container">
  

  <div class="col-lg-4">
    <h2>Signin Form</h2>
    <form action="" name="form" method="post">

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" required  id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" required id="password" placeholder="Enter password" name="password"> 
      </div>
      <div class="form-group">
        <label for="pwd">Retype password:</label>
        <input type="password" class="form-control" required id="retype_password" placeholder="Enter password" name="retype_password"> 
      </div>
    
      <button type="signin" name="signin" class="btn btn-default">Signin</button>
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
  <?php
    if(isset($_POST["signin"]))
    {
      mysqli_query($link, "insert into signin values('$_POST[email]', '$_POST[password]', '$_POST[retype_password]')");
      //second work
      $email = clean($_POST['email']);
      $tra1 = "SELECT * FROM people_city WHERE email='$email'";
      $query = mysqli_query($link, $tra1);
      if(mysqli_num_rows($query))
      {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['category'] = $row['category'];
        header("location:profile.php");
      }
      else
      {
        $tra2 = "SELECT * FROM people_village WHERE email='$email'";
        $query = mysqli_query($link, $tra2);
        $row = mysqli_fetch_assoc($query);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['category'] = $row['category'];
        header("location:profile.php");
      }
    }
    ?>
</div>
</html>