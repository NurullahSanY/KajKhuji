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
  <?php include 'head.php'; ?>
</head>
<body>


    <div class="welcome">
      <?php echo "Welcome! ".$_SESSION['name']."";?><br>
    </div>
   
  <section>
    <div class="box-left">
      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $tra1 = "SELECT * FROM signup WHERE email='".$_SESSION['email']."' && category='".$_SESSION['category']."'";
        $query = mysqli_query($link, $tra1);
        if(mysqli_num_rows($query))
        {
          $row = mysqli_fetch_assoc($query);
          echo "<div><strong>Name:</strong> <span>".$row['name']."</span></div>";
          echo "<div><strong>Email:</strong> <span>".$row['email']."</span></div>";
          echo "<div><strong>Category:</strong> <span>".$row['category']."</span></div>";
        }
      ?>
    </div>
  </section>
</body>
</html>

<?php
  } 
  else {
   
    header("location:signup.php");
    exit;
  }
  unset($_SESSION['prompt']);
  mysqli_close($link);

?>