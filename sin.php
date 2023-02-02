<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>village people profile page</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        // table showing
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