<?php
session_start();
include "../../config/connection.php";
include "../../assets/sidebar/tuk/pengukuran/pengukuran.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medco Papua</title>
    <link rel="icon" type="image/x-icon" href="../../assets/images/logos/Medco-papua.ico">
    
    <!-- Css link -->
    <link rel="stylesheet" href="../../assets/styles/bootstrap_v4/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/styles/font-awesome/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../assets/styles/Ionicons/css/ionicons.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../assets/styles/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.css">
    <!-- Data Table-->
    <link rel="stylesheet" href="../../assets/styles/DataTables/datatables.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
  
        <!-- Top header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="../../dashboard.html" class="logo" style="height: 54px;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img src="../../assets/images/logos/Medco papua.png" alt="">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="../../assets/images/logos/Medco papua.png" alt=""><b style="font-weight: 700;">M</b>edco Papua</span>
            </a>
    
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top py-0">
                <!-- Sidebar toggle button-->
                <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../assets/images/Avatars/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['Username'];?></span> 
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                                    <p>
                                    <?php echo $_SESSION['Username'];?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="../../login/logout.php" class="btn btn-default btn-flat">Sign out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
  
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <b>Pengukuran Category</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="index.php" class="font-weight-bolder"><i class="fa fa-table"></i>&nbsp;Tata Usaha Kayu&nbsp;</a></li>
                    <li class="active"><span class="font-weight-bolder">&nbsp;Pengukuran&nbsp;</span></li>
                </ol>
            </section>
        
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md col-sm col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline">Pengukuran</h4>
                                <?php
                            // Retrieve data from the pengukuran42 table
                            $queryPengukuran42 = mysqli_query($connect, "SELECT * FROM pengukuran42");
                            if (!$queryPengukuran42) {
                                echo "Error: " . mysqli_error($connect);
                            }

                            // Retrieve data from the pengukuran28 table
                            $queryPengukuran28 = mysqli_query($connect, "SELECT * FROM pengukuran28");
                            if (!$queryPengukuran28) {
                                echo "Error: " . mysqli_error($connect);
                            }

                            // Calculate total rows for each table
                            $currentTotalPengukuran42 = mysqli_num_rows($queryPengukuran42);
                            $currentTotalPengukuran28 = mysqli_num_rows($queryPengukuran28);

                            // Calculate the overall total
                            $overallTotal = $currentTotalPengukuran42 + $currentTotalPengukuran28;

                            // total m3 non batang
                            $totalm328 = mysqli_query($connect, "SELECT SUM(m3) AS totalm328 FROM pengukuran28");
                            $totalm328 = mysqli_fetch_assoc($totalm328);
                            $totalm328 = $totalm328['totalm328'];

                            // total m3 batang
                            $totalm342 = mysqli_query($connect, "SELECT SUM(m3) AS totalm342 FROM pengukuran42");
                            $totalm342 = mysqli_fetch_assoc($totalm342);
                            $totalm342 = $totalm342['totalm342'];

                            // total m3
                            $totalm3 = $totalm328 + $totalm342;

                            ?>

                            <?php
                            echo "<div>Total Kayu: $overallTotal</div>";
                            echo "<div>Total M3: $totalm3</div>";
                            ?>
                            </div> 
                            <!-- Card Body -->
                            </div> 
                            <!-- Card Footer-->
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md col-sm col-xs-12">
                        <div class="ml-auto mr-auto" style="width: fit-content;">
                            <b><a href="28/index28.php" class="btn btn-outline-secondary p-5" style="width: 300px;">NonBatang</a>
                            <a href="42/index42.php" class="btn btn-outline-secondary p-5" style="width: 300px;">Batang</a></b>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../../assets/styles/Jquery3/jquery-3.7.1.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../assets/styles/bootstrap_v4/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="../../assets/styles/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.js"></script>
    <!-- Data Table-->
    <script src="../../assets/styles/DataTables/datatables.js"></script>
    <script>
        new DataTable('#UserList');
    </script>
    <!-- Sparkline -->
    <script src="../../assets/styles/jquery-sparkline/dist/jquery.sparkline.js"></script>
    <!-- jvectormap  -->
    <script src="../../assets/styles/jvectormap/jquery-jvectormap.js"></script>
    <!-- SlimScroll -->
    <script src="../../assets/styles/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- ChartJS -->
    <script src="../../assets/styles/ChartJs/auto/auto.js"></script>
</body>
</html>