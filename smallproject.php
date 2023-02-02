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
        //inserted
        if(isset($_GET['submit']))
        {
            $id= $_GET['id'];
            $fname= $_GET['fname'];
            $lname=$_GET['lname'];
            $age=$_GET['age'];
            $sql = "INSERT INTO user (id, fname, lname, age)
            VALUES('$id', '$fname', '$lname', '$age')";
            mysqli_query($link,$sql);
           echo "Successfully inserted = ";
           echo $fname;
        }
        //updated
        if(isset($_GET['update'])) 
        {
            $gid=$_GET['id'];
            $sql = "select * from user where id=$gid";
            $qry = mysqli_query($link,$sql);
            $num = mysqli_num_rows($qry);
            $data=mysqli_fetch_assoc($qry);
            if($num>0)
            {
                echo "changed";
                $new_fname = $_GET['fname'];
                $new_lname = $_GET['lname'];
                $new_age = $_GET['age'];
                echo " we want to change  ";
                echo "<h2>$new_fname</h2>";
                echo "<h2>$new_lname</h2>";
                echo "<h2>$new_age</h2>";

                $ss = "select * from user where id=$gid";
                $tt = mysqli_query($link,$ss);
                $d = mysqli_fetch_assoc($tt);
               
                echo "<h2>".$d['id']."</h2>";
                echo "<h2>".$d['fname']."</h2>";
                echo "<h2>".$d['lname']."</h2>";
                echo "<h2>".$d['age']."</h2>";

                $upd = "update user set fname='$new_fname', lname='$new_lname',
                        age='$new_age' where id=$gid";
                mysqli_query($link, $upd);
            }
               
            else
                echo "No data found";
            
        }
        ?>
        <form action="smallproject.php" method="GET">
            ID:<br>
            <input type="number" required name="id"><br><br>
            FName:<br>
            <input type="text" required name="fname"><br><br>
            LName:<br>
            <input type="text" required name="lname"><br><br>
            Age:<br>
            <input type="number" required name="age"><br><br>
            <br>
            <input type="submit" value="submit" name="submit">
            <input type="submit" value="update" name="update">
        </form>
    </body>
</html>
