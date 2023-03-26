<?php
    if(isset($_SESSION['user']))
    header("Location: http://pccoenotes.ultihost.net/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pccoe Notes</title>

    <!-- styles.css -->
    <link href="./styles.css" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">PCCOE-Notes</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-light"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
            <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link active" aria-current="page" href="index.html">
                <div>
                <i class="fas fa-home fa-lg mb-1"></i>
                </div>
                Home
            </a>
            </li>
            <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link active" href="./getNotes.php">
                <div>
                <i class="far fa-lg fa-sticky-note mb-1"></i>
                <!-- <span class="badge rounded-pill badge-notification bg-dark">11</span> -->
                </div>
                Notes
            </a>
            </li>
            <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link active"  href="./uploadnotes.php">
                <div>
                <i class="fas fa-lg  fa-upload mb-1"></i>
                <!-- <span class="badge rounded-pill badge-notification bg-dark">11</span> -->
                </div>
                Upload Notes
            </a>
            </li>
            
        </ul>
        <!-- Left links -->
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
            <li class="nav-item dropdown text-center mx-2 mx-lg-1">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
                aria-expanded="false">
                <div>
                    <i class="fas fa-user-circle fa-lg mb-1"></i>
                </div>
                Account
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./login.php">Sign in</a></li>
                </ul>
            </li>
            </ul>
        </ul>
        <!-- Right links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->


    <!-- Main Body -->

    <div class="container"style="
    margin-top: 100px;
    margin-bottom:100px;
    max-width: 500px;"> 
    <center><h3 style="margin-bottom:20px;">Register</h3><center>
    <form method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" required/>
    <label class="form-label" for="form2Example1">Email address</label>
  </div>
  <!-- User input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="user" required/>
    <label class="form-label" for="form2Example1">User Name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password" required/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- Submit button -->
  <input type="submit" class="btn btn-primary btn-block mb-4" name="submit"></input>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Already have an account? <a href="./login.php">login</a></p>
    
  </div>
</form>
</div>


    <!-- Footer -->
    <footer class="bg-dark text-center text-white myfooter" style="margin-top:150px">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();
if(isset($_POST['submit'])){
  $con = mysqli_connect("sql211.ultihost.net","ufhne_33878215","sH2VR1Fp","ufhne_33878215_pccoenotes");
  $query="insert into usertable (user,password,email) values('".$_POST['user']."','".$_POST['password']."','".$_POST['emial']."')";
  if(mysqli_query($con,$query))
    {
            echo "<script>alert('data inserted')</script>";
    }}
?>