<?php include "connection.php";
?>
<!DOCTYPE html>
    <head>
        <title>
            New work
        </title>
    </head>
    <body>
        <?php
             $slt = "select * from user";
             $q = mysqli_query($link, $slt);
             while($data = mysqli_fetch_assoc($q))
             {
                echo "".$data['id'].""; echo"<br>";
                echo "".$data['fname']."";echo "<br>";
                echo $data['lname']; echo "<br>";
             }
            
            
        ?>
        
        
    </body>
</html>
