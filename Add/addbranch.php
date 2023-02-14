<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bank &mdash; U N I O N .</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../Template/dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Template/dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../Template/dist/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../Template/dist/assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="../Template/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../Template/dist/assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../Template/dist/assets/css/style.css">
  <link rel="stylesheet" href="../Template/dist/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
<div id="app">
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg bg-dark"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
            
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../Template/dist/assets/img/mew.jpg" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Tokisaki Kurumi</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a href="../logout.php" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                </div>
            </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="#"><img src="../Template/dist/assets/img/UNION-Logo-removebg-preview.png" width="135px"></a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="#"><img src="../Template/dist/assets/img/logo_rantai.57e3913a.png" width="69px"></a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                <a href="index.php" class="nav-link has-dropdown"><i class="fas fa-warehouse"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index.php">Show All</a></li>
                </ul>
                </li>
                <li class="menu-header">Menu</li>
                <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-table"></i> <span>Table</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="../Show/showbank.php">Bank</a></li>
                    <li class=active><a class="nav-link" href="../Show/showbranch.php">Branch</a></li>
                    <li><a class="nav-link" href="../Show/showdepartment.php">Department</a></li>
                    <li><a class="nav-link" href="../Show/showkaryawan.php">Karyawan</a></li>
                </ul>
                </li>
            </aside>
        </div>

      <!-- Main Content -->

    <?php

        include_once("../Configure/connection.php");

        // Fetch all users data from database
        $result = mysqli_query($db, "select * from branch");
        

        $i = 1;
    ?>

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add Branch</h1>
          </div>
          
    <form method="POST" action="addbranch.php">
    <div class="form-group" method="POST">
        <div class="container">
        <label>Id Branch</label>
        <input class="form-control" type="text" placeholder="Id Branch" name="idbranch">
        <br>
        <label>Nama Branch</label>
        <input class="form-control" type="text" placeholder="Nama Branch" name="namabranch">
        <br>
        <label>Code Branch</label>
        <input class="form-control" type="text" placeholder="Code Branch" name="codebranch">
        <br>
        <label>Alamat Branch</label>
        <input class="form-control" type="text" placeholder="Alamat Branch" name="alamatbranch">
        <br>
        <input class="btn btn-primary" type="submit" value="Add" name="addbranch">
        <a href="../Show/showbranch.php" class="btn btn-danger fas fa-undo-alt" type="button" ></a>
    </div>
    <form>

    <?php
          if(isset($_POST['addbranch'])) {


            $idbranch = $_POST['idbranch'];
            $namabranch = $_POST['namabranch'];
            $codebranch = $_POST['codebranch'];
            $alamatbranch = $_POST['alamatbranch'];
    
            // include database connection file
            include_once("../Configure/connection.php");
    
            // Insert user data into table
    
        try { 
           $query = "INSERT INTO branch (id_branch,nama_branch,code_branch,alamat_branch) VALUES('$idbranch','$namabranch','$codebranch','$alamatbranch')";
           $result = mysqli_query($db, $query); 
       } catch (mysqli_sql_exception $e) { 
          var_dump($e);
          exit; 
       } 
       echo "<script>Swal.fire({
        title: 'Success!',
        text: 'Successfully add Branch',
        icon: 'success',
        confirmButtonText: 'Cool!'
        })</script>";
        }
    
    ?>

        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="#">U N I O N .</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../Template/dist/assets/modules/jquery.min.js"></script>
  <script src="../Template/dist/assets/modules/popper.js"></script>
  <script src="../Template/dist/assets/modules/tooltip.js"></script>
  <script src="../Template/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../Template/dist/assets/modules/moment.min.js"></script>
  <script src="../Template/dist/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="../Template/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="../Template/dist/assets/modules/chart.min.js"></script>
  <script src="../Template/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../Template/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../Template/dist/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="../Template/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="../Template/dist/assets/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="../Template/dist/assets/js/scripts.js"></script>
  <script src="../Template/dist/assets/js/custom.js"></script>
</body>
</html>