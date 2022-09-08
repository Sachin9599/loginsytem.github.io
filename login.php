
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Metaverse Landing Page with login Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <?php require 'partials/navbar.php';
  ?>

  <?php
//   if ($login) {
//     echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
//     <strong>Success!</strong> Your are Logged in.
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>
// ';
//   }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>' . $showError . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
';
  }
  ?>

  
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/signup.webp" class="img-fluid" alt="image">
        </div>
        <div class="col-md-8 col-lg-6 login_form col-xl-4 offset-xl-1">
          <form class="form_login" action="/loginsystem/login.php" method="post">
            <div class="form-outline mb-4">
            <i class="fa fa-user fa-lg me-3 fa-fw" style="color: black;"></i>
              <label class="form-label" for="username">Username</label>
              <input type="text" id="username" class="form-control form-control-lg" placeholder="Enter a valid username" name="username" required />
            </div>
            <div class="form-outline mb-3">
            <i class="fa fa-lock fa-lg me-3 fa-fw" style="color: black;"></i>
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" name="password" required />
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php" class="link-danger">Sign up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>


  </section>






  <Script src="jquery.js"></Script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-213901542-1">
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>