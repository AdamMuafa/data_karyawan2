<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; U N I O N .</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="Template/dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Template/dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="Template/dist/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="Template/dist/assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="Template/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="Template/dist/assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="Template/dist/assets/css/style.css">
  <link rel="stylesheet" href="Template/dist/assets/css/components.css">
<!-- Start GA -->
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
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
    
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="Template/dist/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Masbroo</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#"><img src="Template/dist/assets/img/UNION-Logo-removebg-preview.png" width="135px"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"><img src="Template/dist/assets/img/logo_rantai.57e3913a.png" width="69px"></a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="dashboard.php">General Dashboard</a></li>
              </ul>
            </li>

            <ul class="sidebar-menu">
            <li class="menu-header">Table</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i><span>Table</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="Show/showbank.php">Bank</a></li>
                <li><a class="nav-link" href="Show/showbranch.php">Branch</a></li>
              </ul>
            </li>
        </aside>
      </div>

    <?php

        include_once("Configure/connection.php");

        // Users
        $result = mysqli_query($db, "SELECT count(id_user) as 'totaluser' FROM users;");
        $i = 1;
        while($user_data = mysqli_fetch_array($result))
        {
        $totaluser = $user_data['totaluser'];
        }

        // Bank
        $result = mysqli_query($db, "SELECT count(id_bank) as 'totalbank' FROM bank;");
        $i = 1;
        while($user_data = mysqli_fetch_array($result))
        {
        $totalbank = $user_data['totalbank'];
        }


        // Branch
        $result = mysqli_query($db, "SELECT count(id_branch) as 'totalbranch' FROM branch;");
        $i = 1;
        while($user_data = mysqli_fetch_array($result))
        {
            $totalbranch = $user_data['totalbranch'];

        }
    
    ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Users</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totaluser?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Bank</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totalbank?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-code-branch"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Branch</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totalbranch?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>
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
  <script src="Template/dist/assets/modules/jquery.min.js"></script>
  <script src="Template/dist/assets/modules/popper.js"></script>
  <script src="Template/dist/assets/modules/tooltip.js"></script>
  <script src="Template/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="Template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="Template/dist/assets/modules/moment.min.js"></script>
  <script src="Template/dist/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="Template/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="Template/dist/assets/modules/chart.min.js"></script>
  <script src="Template/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="Template/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="Template/dist/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="Template/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="Template/dist/assets/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="Template/dist/assets/js/scripts.js"></script>
  <script src="Template/dist/assets/js/custom.js"></script>
</body>
</html>