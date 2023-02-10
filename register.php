<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; U N I O N .</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="Template/dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Template/dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="Template/dist/assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="Template/dist/assets/css/style.css">
  <link rel="stylesheet" href="Template/dist/assets/css/components.css">
<!-- Start GA -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="Template/dist/assets/img/UNION-Logo.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <form method="POST" action="register.php">
                    <div class="form-group" method="POST">
                        <div class="container">
                        <label>Id User</label>
                        <input class="form-control" type="text" placeholder="Id User" name="iduser">
                        <br>
                        <label>Nama</label>
                        <input class="form-control" type="text" placeholder="Nama" name="nama">
                        <br>
                        <label>Username</label>
                        <input class="form-control" type="text" placeholder="Username" name="username">
                        <br>
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Password" name="password">
                        <br>
                        <input class="btn btn-primary btn-block" type="submit" value="Register" name="register">
                        <a href="../project_1/login.php" class="btn btn-danger btn-block" type="button" >Kembali</a>
                    </div>
                <form>
            </div>
            <div class="simple-footer">
              Copyright &copy; U N I O N . 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
          if(isset($_POST['register'])) {


            $iduser = $_POST['iduser'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            // include database connection file
            include_once("Configure/connection.php");
    
            // Insert user data into table
    
        try { 
           $query = "INSERT INTO users (id_user, nama,username, password) VALUES('$iduser','$nama','$username','$password')";
           $result = mysqli_query($db, $query); 
       } catch (mysqli_sql_exception $e) { 
          var_dump($e);
          exit; 
       } 
       echo "<script>Swal.fire({
        title: 'Success!',
        text: 'Successfully Register',
        icon: 'success',
        confirmButtonText: 'Cool!'
        })</script>";
        }
    
    ?>

  <!-- General JS Scripts -->
  <script src="Template/dist/assets/modules/jquery.min.js"></script>
  <script src="Template/dist/assets/modules/popper.js"></script>
  <script src="Template/dist/assets/modules/tooltip.js"></script>
  <script src="Template/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="Template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="Template/dist/assets/modules/moment.min.js"></script>
  <script src="Template/dist/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="Template/dist/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="Template/dist/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="Template/dist/assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="Template/dist/assets/js/scripts.js"></script>
  <script src="Template/dist/assets/js/custom.js"></script>
</body>
</html>