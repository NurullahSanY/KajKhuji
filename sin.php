<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City people Database</title>
    <?php 
   include 'head.php';
   ?>
    </head>
    <body class="b-ground">
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