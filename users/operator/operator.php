<?php
session_start();
include "../../config/connection.php";
include "../../assets/sidebar/operator.php";
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
            <a href="../dashboard.php" class="logo" style="height: 54px;">
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
                    <b>Operator</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="operator.php" class="font-weight-bolder"><i class="fa fa-table"></i>&nbsp;User&nbsp;</a></li>
                    <li><span class="font-weight-bolder">&nbsp;Operator&nbsp;</span></li>
                </ol>
            </section>
        
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md col-sm col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline">Operator List</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                            </div> 
                            <!-- Card Body -->
                            <div class="card-body">
                                <table id="UserList" class="table table-bordered display table-hover" style="width:100%" >
                                    <thead>
                                        <tr class="text-small">
                                            <th style="width: 10px">#</th>
                                            <th>Nama Alat</th>
                                            <th style="max-width: 300px">No. Alat</th>
                                            <th style="max-width: 300px">NIK</th>
                                            <th>Nama Operator</th>
                                            <th style="max-width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 0;
                                    $query = mysqli_query($connect, "SELECT * from operator");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>                               
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['Nama_Alat'];?></td>
                                            <td><?php echo $row['No_Alat'];?></td>
                                            <td><?php echo $row['NIK_Operator'];?></td>
                                            <td><?php echo $row['Nama_Operator'];?></td>
                                            <td>
                                            <a href="h.php?id=<?=$row['No_Alat'];?>"class="btn btn-danger btn-sm" role="button" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Card Footer-->
                        </div>
                    </div>
                </div>
            </section>
            <div id="InputModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="InputForm" action="operatorproses.php" method="POST">
                                    <div class="container">
                                        <div class="form-group row">
                                            <div class="col-md-4">Nama Alat</div>
                                            <div class="col-md-1">:</div>
                                            <div class="col-md">
                                                <select id="Nama_Alat" name="Nama_Alat" class="form-control" required>
                                                <option value="">Pilih Jenis Alat</option>
                                                <option value="Excavator Grappel">Excavator Grappel</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">No Alat</div>
                                            <div class="col-md-1">:</div>
                                            <div class="col-md">
                                                <input type="text" name="No_Alat" class="form-control" placeholder="No Alat" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">NIK</div>
                                            <div class="col-md-1">:</div>
                                            <div class="col-md">
                                                <input type="text" name="NIK_Operator" class="form-control" placeholder="NIK" maxlength="6" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Nama Operator</div>
                                            <div class="col-md-1">:</div>
                                            <div class="col-md">
                                                <input type="text" name="Nama_Scaler" class="form-control" placeholder="Nama" required>
                                            </div>
                                        </div>
                            <div class="modal-footer">
                                <input type="submit" name="save" class="btn btn-primary">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            
        </footer>
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