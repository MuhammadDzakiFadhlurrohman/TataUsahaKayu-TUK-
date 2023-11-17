<?php
session_start();
include "config/connection.php";
if(isset($_SESSION['Username'])==0)
{
  echo '<script>alert("ANDA HARUS LOGIN..!!");window.location.href="login/login.html"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Usaha Kayu</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logos/Medco-papua.ico">
    
    <!-- Css link -->
    <link rel="stylesheet" href="assets/styles/bootstrap_v4/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/styles/font-awesome/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/styles/Ionicons/css/ionicons.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="assets/styles/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.css">
    <!-- Data Table-->
    <link rel="stylesheet" href="../assets/styles/DataTables/datatables.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
  
        <!-- Top header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="dashboard.php" class="logo" style="height: 54px;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img src="assets/images/logos/Medco papua.png">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="assets/images/logos/Medco papua.png"><b style="font-weight: 700;">M</b>edco Papua</span>
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
                                <img src="assets/images/Avatars/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['Username'];?></span> 
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                                    <p>
                                    <?php echo $_SESSION['Username'];?>
                                    <?php echo date_default_timezone_set('Asia/Jakarta');
                                    $jam=date("Y-m-d");
                                    echo "<small> Tanggal Hari ini <br>". $jam." "."</small>"
                                    ?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="login.html" class="btn btn-default btn-flat">Sign out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_SESSION['Username'];?></p>
                        <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i>&nbsp;Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="javascript:void(0)" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i><span>&nbsp;<b>Dashboard</b></span></a>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-table"></i><span>&nbsp;<b>User</b></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="users/user/index.php"><i class="fa fa-circle-o"></i>&nbsp;User</a></li>
                            <li><a href="users/pengawas/pengawas.php"><i class="fa fa-circle-o"></i>&nbsp;Supervisor</a></li>
                            <li><a href="users/scaler/scaler.php"><i class="fa fa-circle-o"></i>&nbsp;Scaler</a></li>
                            <li><a href="users/operator/operator.php"><i class="fa fa-circle-o"></i>&nbsp;Operator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="rekanan/index.php"><i class="fa fa-handshake-o"></i><span>&nbsp;<b>Rekanan</b></span></a>
                    </li>
                    <li>
                        <a href="rkt/index.php"><i class="fa fa-sticky-note"></i><span>&nbsp;<b>Rencana Kerja</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="harvesting/index.php"><i class="fa fa-tree"></i><span>&nbsp;<b>Tebangan</b></span></a>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-book"></i><span>&nbsp;<b>Tata Usaha Kayu</b></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tuk/pengukuran/index.php"><i class="fa fa-circle-o"></i>&nbsp;Pengukuran</a></li>
                            <li><a href="tuk/hauling/index.php"><i class="fa fa-circle-o"></i>&nbsp;Hauling</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="laporan/index.html"><i class="fa fa-dashboard"></i><span>&nbsp;<b>Laporan</b></span></a>
                    </li>
                </ul>
            </section>
        <!-- /.sidebar -->
        </aside>
  
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <b>Dashboard</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="dashboard.html" class="font-weight-bolder"><i class="fa fa-table"></i>&nbsp;Home&nbsp;</a></li>
                    <li class="active"><span class="font-weight-bolder">&nbsp;Dashboard&nbsp;</span></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    Welcome to Aplikasi Sistem Informasi Tata Usaha Usaha Kayu (SITUK) Medco Papua
                    <!-- /.col -->
                </div>
        
            <!-- Main content -->
                <!-- Main row -->
                <div class="row">
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            
        </footer>
    </div>
    <?php include "config/page.php"; ?>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="assets/styles/Jquery3/jquery-3.7.1.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/styles/bootstrap_v4/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="assets/styles/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>
    <!-- Data Table-->
    <script src="../assets/styles/DataTables/datatables.js"></script>
    <!-- Sparkline -->
    <script src="assets/styles/jquery-sparkline/dist/jquery.sparkline.js"></script>
    <!-- jvectormap  -->
    <script src="assets/styles/jvectormap/jquery-jvectormap.js"></script>
    <!-- SlimScroll -->
    <script src="assets/styles/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- ChartJS -->
    <script src="assets/styles/ChartJs/auto/auto.js"></script>
</body>
</html>