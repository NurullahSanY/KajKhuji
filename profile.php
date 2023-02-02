<?php 
  session_start();
  require 'connection.php';
  require 'function.php';

  if(isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profile</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
    
</head>
<body>
  <section>

    <div class="container">
      <strong class="title">My Profile</strong>
    </div>
    
    
    <div class="profile-box box-left">

      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $tra1 = "SELECT * FROM people_city WHERE email='".$_SESSION['email']."'";
        $query = mysqli_query($link, $tra1);
        if(mysqli_num_rows($query))
        {
          $row = mysqli_fetch_assoc($query);
          echo "<div><strong>Name:</strong> <span>".$row['name']."</span></div>";
          echo "<div><strong>Email:</strong> <span>".$row['email']."</span></div>";
          echo "<div><strong>Category:</strong> <span>".$row['category']."</span></div>";
        }
        else
        {
          $tra2 = "SELECT * FROM people_village WHERE email='".$_SESSION['email']."'";
          $query = mysqli_query($link, $tra2);
          $row = mysqli_fetch_assoc($query);
          echo "<div><strong>Name:</strong> <span>".$row['name']."</span></div>";
          echo "<div><strong>Email:</strong> <span>".$row['email']."</span></div>";
          echo "<div><strong>Category:</strong> <span>".$row['category']."</span></div>";
        }
      ?>
      
      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
      </div>

      
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php

  } 
  else {
    echo "Error!";
    //header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($link);

?>