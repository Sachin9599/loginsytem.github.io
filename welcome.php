<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
else{
  session_unset();
  session_destroy();

}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metaverse Landing PAge with login Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
</head>

<body>


<nav class="navbar navbar-expand-lg ">
    <div class="container">
      <a class="navbar-brand me-2" href="">
        <img src="img/logo3.jpg" alt=" Logo" class="logo" />
      </a>

      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="welcome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Collectors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NFT Marketplace</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Purchase</a>
          </li>
        </ul>

        <div class="d-flex align-items-center">
          <button type="button" class="btn btn-primary me-3" onclick="window.location.href = 'login.php';">
            Logout</button>
        </div>
      </div>
    </div>
  </nav>
    <div class=" main">
        <img src="img/meta1.jpeg" title="meta" width="100%">
        <div class="data">
            <h1> Metaverse<br>TO BE A MUCH<br> MORE <br>EVOLVED<BR>SPACE</h1>
        </div>
        <!-- <div class="heading">
            <p>The metaverser is the hypothesized next <br>iteration of the internet ,supporting<br> decentrailized
                ,persistent online 2-D virtual<br> environmnets</p>
        </div> -->
       
    </div>





    <Script src="jquery.js"></Script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-213901542-1">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>