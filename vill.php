<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>village</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <h3 style="text-align:center">Village People Profile Setting</h3>
        <?php
            if(isset($_GET['submit']))
            {
                $edit = "INSERT INTO people_village (name, email, password) VALUES('$_GET[name]','$_GET[email]', '$_GET[password]')";
            //   checking duplicacy
                $tmp=$_GET['email'];
                $check = "SELECT * FROM people_village WHERE email = '$tmp'";
                $query = $link->query($check);
                $find = mysqli_fetch_assoc($query);
            //  checking duplicacy
                if($find)
                {
                    echo "This email is already used.Try another";
                }
                else
                {
                    echo "Successfully inserted";
                    $link->query($edit);
                }
                    
            }
        ?>
            <form action="vill.php" method="GET">
                <div class="form-row col-md-4">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required name="name">
                    </div>
                    
                    <div class="form-group">
                   <label>Email</label>
                    <input type="email" class="form-control" required name="email">
                   </div>
                   
                   <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" required name="password">
                   </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary" class="form-control" required name="submit">
                    <!-- <button type="submit">submit</button> -->
                    </div>
                </div>
            </form>
        </div>
    <div class="container" class="form-group col-lg-2">
        <h3 style="text-align:center">Village People Database</h3>
        <?php
             $check = "SELECT * FROM people_village";
             $query = $link->query($check);
             
        ?>
        <table class="table"">
        <thead>
            <tr class="danger">
                <th>Name</th>
                <th>Email</th>
                <?php
                while($find = mysqli_fetch_assoc($query))
                {
                    echo "
                        <tr>
                        <td>'$find[name]'</td>
                        <td>'$find[email]'</td>
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
