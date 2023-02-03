<?php 
  session_start();
  include 'function.php';
  include "connection.php";

  if(isset($_POST["signin"]))
    {
      mysqli_query($link, "insert into signin values('$_POST[email]', '$_POST[password]', '$_POST[retype_password]','$_POST[category]')");
      //second work
      $email = clean($_POST['email']);

      $tra1 = "SELECT * FROM signup WHERE email='$email' && category='".$_POST['category']."'";

      $query1 = mysqli_query($link, $tra1);
      if(mysqli_num_rows($query1))
      {
        $row = mysqli_fetch_assoc($query1);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['category'] = $row['category'];
        
      }
      else
      {
        echo "
          <div class='box-left' class='alert alert-warning' role='alert'>
           You are not registered, bro!
           <p>Please <a class='btn btn-success' href='signup.php'>Sign Up</a> </p>
           </div>
          
          ";
       
      }
    }
    if(!isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title> 
</head>

<body class="b-ground">

<!-- ////// HEADER START /////////// -->
<?php include 'head.php'; ?>
<!-- ////// HEADER FINISHED /////////// -->

<div class="container">
  <div class="signin-box">
    
  <!-- ////////////////////////////////// FORM START ///////////////////////////////// -->
    <form action="" name="form" method="post">
    <div class="mb-md-5 mt-md-4 pb-5">
          <h2 class="fw-bold mb-5 text-uppercase">Sign in form</h2>

          <div class="form-outline form-white mb-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" required  id="email" placeholder="Enter email" name="email">
          </div>

          <div class="form-group mb-2">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" required id="password" placeholder="Enter password" name="password"> 
          </div>

          <div class="form-group mb-2">
            <label for="pwd">Retype password</label>
            <input type="password" class="form-control" required id="retype_password" placeholder="Enter password" name="retype_password"> 
          </div>
          <div class="col-md-4 mb-5">
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
          <div>
          <button type="signin" id="signin" name="signin" class="btn btn-success">Signin</button>
          </div>
          
    </div>

        <div class="col mb-5">
        <p>Don't have an account? <a href="signup.php" class="text-black-20 fw-bold">Sign Up</a></p>
      </div>
    </form>
    <!-- ////////////////////////////////// FORM FINISHED ///////////////////////////////// -->
  </div>
</div>
</body>
</html>
<!-- Table matching with signin information -->
<?php
    }
    else
    {
       header("location:profile.php");
       exit;
    }
    unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  mysqli_close($link);
?>