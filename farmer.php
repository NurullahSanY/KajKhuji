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
    <title>Farmer's Data-Base</title>
    <?php include "head.php"; ?>
    <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    </head>
    <body class="b-ground">
        
    <div class="container" class="form-group col-lg-2">
        <h3 style="text-align:center">Farmer's Database</h3>
        <?php
         //category='".$_SESSION['email']."'"
             $check = "SELECT * FROM signup where category='farmer'";
             $query = $link->query($check);
        
        ?>
        <table class="table">
        <thead>
            <tr class="success">
                <th>Name</th>
                <th>Email</th>
                <th>Category</th>
                <th>People</th>
                <th>Religion</th>
                <th>NID</th>
                <th>Phone</th>
                <?php
                while($find = mysqli_fetch_assoc($query))
                {
                    echo "
                        <tr class='info'>
                        <td>$find[name]</td>
                        <td>$find[email]</td>
                        <td>$find[category]</td>
                        <td>$find[people]</td>
                        <td>$find[religion]</td>
                        <td>$find[nid]</td>
                        <td>$find[phone]</td>
                        </tr>
                    ";
                }
                ?>
            </tr>
        </thead>
        </table>

    </div>
    </body>
</html>
