<?php include "connection.php";
if($link)
{
  echo " succesfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch data</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- signin table is fetched -->
<div class="container">
    <!-- table connection php code -->
<?php
     $query="select * from signin";
     $connect = mysqli_query($link, $query);
     $data = mysqli_fetch_assoc($connect);
     $num = mysqli_num_rows($connect);
    ?>

  <h2>signin table information</h2>       
  <table class="table">
  </table>

  <!-- Signup table is fetched -->
  <div class="container">
    <h2>SignUp table information</h2>

    <table class="table">
        <thead>
            <tr class="danger">
                <th>Name</th>
                <th>Email</th>
             
            </tr>
            <?php
            $query="select * from  signup where email='u1804054@student.cuet.ac.bd'";
            $connect = mysqli_query($link, $query);
            $data = mysqli_fetch_assoc($connect);
            $chk = mysqli_num_rows($connect);
            if($connect)
            {
                echo "
                <tr>
                <td>".$data['name']."</td>
                <td>".$data['email']."</td>
                </tr>
            ";
              
            }
            else
            {
               echo"not found data";
            }
            if($chk)
            {
                while($data = mysqli_fetch_assoc($connect))
                {
                    echo "".$data['name']."";
                   
                }
            }
            else
            {
                echo "not found";
            }
            ?>
        </thead>
    </table>
  </div>
</div>
</body>
</html>