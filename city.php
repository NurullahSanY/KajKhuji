<?php 
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <h3 style="text-align:center">City People Profile Setting</h3>
        <?php
            $tmp=$_GET['email'];
            if(isset($_GET['submit']))
            {
                $edit = "INSERT INTO people_city (name, email, password,category) VALUES('$_GET[name]','$_GET[email]', '$_GET[password]','$_GET[category]')";
            //   checking duplicacy
                $check = "SELECT * FROM people_city WHERE email = '$tmp'";
                $query = $link->query($check);
                $num = mysqli_num_rows($query);
                $data = mysqli_fetch_assoc($query);
            //  checking duplicacy
                if($data)
                {
                    echo "This email is already used.Try another";
                }
                else
                {
                    echo "Successfully inserted";
                    $link->query($edit);
                }
                $_SESSION['prompt'] = "Successfully Registered";
                 header('location:signin.php');
            }
        ?>
            <form action="city.php" method="GET">
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

                   <div class="form-group col-4">
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
                   <!-- <a href="index.php">Go to Home page</a> -->
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary" class="form-control" required name="submit">
                    <!-- <button type="submit">submit</button> -->
                    </div>
                </div>
            </form>
        </div>
    
    </body>
</html>