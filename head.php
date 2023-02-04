   
    <!-- /////////////////////////////// Linking start/////////////////////////////// -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/main.css">
  <link rel="stylesheet" href="./CSS/color.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Recursive:wght@1000&family=Righteous&family=Rubik&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- /////////////////////////////// Linking Finished/////////////////////////////// -->
 <!-- frontend from index navbar-->
 <nav class="navbar navbar-expand-lg navbar-light p-3">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <!-- <i class="fa-brands fa-searchengin"></i> -->
        Kaj Khuji
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav ms-auto my-2 my-lg-0 " style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php" style="color: black;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" style="color: black;">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donation.php" style="color: black;">Donation</a>
          </li>
        </ul>
        <?php 
          if(isset($_SESSION['email']))
          {
            echo "
            <form class='d-flex'>
              <a class='btn btn-success me-2' href='profile.php' >$_SESSION[name]</a>
              <a class='btn btn-success' href='logout.php'>Log Out</a>
              </form>
            ";
          }
          else
          {
            echo "
            <form class='d-flex'>
            <a class='btn btn-success me-2' href='signin.php' >Signin</a>
              <a class='btn btn-success' href='./signup.php'>Signup</a>
            </form>
            ";
          }
        ?>
        
      </div>
    </div>
    <!-- //new add -->
    <?php 

      if(isset($_SESSION['email'])) {

    ?>
      <?php 

        } else {
          echo "<span class='notlogin'>Not logged in!</span>";
        }

      ?>
  </nav>

  <!-- frontendlast -->