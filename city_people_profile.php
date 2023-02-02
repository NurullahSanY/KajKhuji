<?php include "connection.php";
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city people profile page</title>
    <link rel="stylesheet" href="./CSS/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&family=Recursive:wght@1000&family=Righteous&family=Rubik&display=swap" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<div class="container">
<h2 style="text-align:center">Profile For City People</h2>
    <form>
        <div class="form-group">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" required placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" required placeholder="Password">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" required placeholder="Password">
            </div>
            <div class="form-group col-md-4">
                <label for="nid">Nid Number</label>
                <input type="number" class="form-control"  required id="nid" placeholder="894543......">
            </div>
             <div class="form-group col-md-4">
                <label for="nid">Passport Number</label>
                <input type="text" class="form-control" id="nid" placeholder="8764543......">
            </div>
        </div>
        <div class="usertype col-lg-12">
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

        
        <div class="form-group col-lg-10">
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
