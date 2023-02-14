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
  <link rel="stylesheet" href="Template/dist/assets/modules/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="Template/dist/assets/assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="Template/dist/assets/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="Template/dist/assets/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

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
                <img alt="image" src="Template/dist/assets/img/mew.jpg" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Tokisaki Kurumi</div></a>
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
                  <a href="index.php" class="nav-link has-dropdown"><i class="fas fa-warehouse"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="dashboard.php">Show All</a></li>
                </ul>
                </li>
                <li class="menu-header">Menu</li>
                <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-table"></i> <span>Table</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="Show/showbank.php">Bank</a></li>
                    <li><a class="nav-link" href="Show/showbranch.php">Branch</a></li>
                    <li><a class="nav-link" href="Show/showdepartment.php">Department</a></li>
                    <li><a class="nav-link" href="Show/showkaryawan.php">Karyawan</a></li>
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

        // Department
        $result = mysqli_query($db, "SELECT count(id_department) as 'totaldepartment' FROM department;");
        $i = 1;
        while($user_data = mysqli_fetch_array($result))
        {
            $totaldepartment = $user_data['totaldepartment'];

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
                  <i class="fas fa-building"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Department</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totaldepartment?>
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          
        </section>
        
        <div class="section-body">
            <h1 class="section-title">Calendar</h1>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="fc-overflow">                            
                      <div id="myEvent"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
      </div>

<?php

include_once("Configure/connection.php");
 
  // Fetch all users data from database
  $result = mysqli_query($db, "SELECT
  A.nama_karyawan,B.nama_department,C.nama_branch,D.nama_bank,A.alamat_karyawan,D.gaji FROM karyawan A 
  inner join 
  department B 
  on 
  A.id_department = B.id_department
  INNER JOIN
  branch C
  on 
  A.id_branch = C.id_branch
  INNER JOIN
  bank D
  ON
  A.id_bank = D.id_bank;");


  $i = 1;
?>

<div class="main-content">
    <section class="section">
    <h1>Show All</h1>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                    <thead>                                
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nama Department</th>
                                        <th>Nama Branch</th>
                                        <th>Nama Bank</th>
                                        <th>Alamat Karyawan</th>
                                        <th>Gaji</th>
                                    </tr>
                                    </thead>
                                    <tbody>                                 
                                    <?php

                                    while($user_data = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$i++."</td>";
                                        echo "<td>".$user_data[('nama_karyawan')]."</td>";
                                        echo "<td>".$user_data[('nama_department')]."</td>";
                                        echo "<td>".$user_data[('nama_branch')]."</td>";
                                        echo "<td>".$user_data[('nama_bank')]."</td>";
                                        echo "<td>".$user_data[('alamat_karyawan')]."</td>";
                                        echo "<td>".$user_data[('gaji')]."</td>";
                                    }
                                    ?>
                                        
                                    </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
  <script src="Template/dist/assets/modules/fullcalendar/fullcalendar.min.js"></script>
  <script src="Template/dist/assets/modules/datatables/datatables.min.js"></script>
  <script src="Template/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="Template/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="Template/dist/assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
	<script src="Template/dist/assets/js/page/modules-calendar.js"></script>
  <script src="Template/dist/assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="Template/dist/assets/js/scripts.js"></script>
  <script src="Template/dist/assets/js/custom.js"></script>
</body>
</html>