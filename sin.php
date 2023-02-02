<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&family=Recursive:wght@1000&family=Righteous&family=Rubik&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
        // table showing
        <div class="singin_inner">
        <p>HOise ki?</p>
    </div>



    <div class="container">
        <h3 style="text-align:center">City People Database</h3>
        <?php
             $check = "SELECT * FROM people_city";
             $query = $link->query($check);
             
        ?>
        <table class="table">
        <thead>
            <tr class="danger">
                <th>Name</th>
                <th>Email</th>
                <th>Category</th>
                <?php
                while($data = mysqli_fetch_assoc($query))
                {
                    echo "
                        <tr>
                        <td>'$data[name]'</td>
                        <td>'$data[email]'</td>
                        <td>'$data[category]'</td>
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