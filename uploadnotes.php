<?php
    session_start();
    if(!isset($_SESSION['user']))
    header("Location: http://pccoenotes.ultihost.net/login.php");
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
            <a class="nav-link active"  href="#!">
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


    <!-- Upload Form -->

    <div class="container form1" >
    <form method="post" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="year">Year</label>
        <select class="form-select" aria-label="Default select example" id="year" placeholder="Select Year" required name="year">
            <option value="1">1st Year</option>
            <option value="2">2nd Year</option>
            <option value="3">3rd Year</option>
            <option value="4">4th Year</option>
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="branch">Branch</label>
        <select class="form-select" aria-label="Default select example" id="branch" placeholder="Select Year" required name="branch">
            <option value="com">Computer</option>
            <option value="it">IT</option>
            <option value="mech">Mechanical</option>
            <option value="civil">Civil</option>
            <option value="electrical">Electrical</option>
            <option value="electronics">Electronics</option>
            <option value="ai/ml">AI/ML</option>
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Subject</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Subject" required name="subject">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Topic</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Topic"  name="topic">
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="fileupload">File</label>
      <input type="file" class="form-control" id="fileupload" placeholder="Upload File" required name="uploadfile">
    </div>
  
  <input type="submit" class="btn btn-primary" name="button"></input>
</form>
</div>



    <!-- Footer -->
    <footer class="bg-dark text-center text-white myfooter">
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
    if(isset($_POST['button']))
    {    
        $connection = mysqli_connect("sql211.ultihost.net","ufhne_33878215","sH2VR1Fp","ufhne_33878215_pccoenotes");
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder="files/".$filename;
        move_uploaded_file($tempname,$folder);
        $query = "insert into notes (user,year,branch,subject,topic,filelocation) values('',".$_POST['year'].",'".$_POST['branch']."','".$_POST['subject']."','".$_POST['topic']."','".$folder."')";
        if(mysqli_query($connection,$query))
        {
            echo "<script>alert('data inserted')</script>";
        }
    }
?>