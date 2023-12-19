<?php
session_start();
include "../config/connection.php";
include "../assets/sidebar/rkt.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medco Papua</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logos/Medco-papua.ico">
    
    <!-- Css link -->
    <link rel="stylesheet" href="../assets/styles/bootstrap_v4/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/styles/font-awesome/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/styles/Ionicons/css/ionicons.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../assets/styles/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.css">
    <!-- Data Table-->
    <link rel="stylesheet" href="../assets/styles/DataTables/datatables.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.css">
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
                    <img src="../assets/images/logos/Medco papua.png" alt="">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="../assets/images/logos/Medco papua.png" alt=""><b style="font-weight: 700;">M</b>edco Papua</span>
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
                        <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../assets/images/Avatars/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['Username'];?></span> 
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                                    <p>
                                    <?php echo $_SESSION['Username'];?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="../login/logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                    <b>Rencana Kerja Tahunan</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="index.php" class="font-weight-bolder"><i class="fa fa-sticky-note"></i>&nbsp;Rencana Kerja Tahunan&nbsp;</a></li>
                    <li class="active"><span class="font-weight-bolder">&nbsp;Planning&nbsp;</span></li>
                </ol>
            </section>
        
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md col-sm col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline">List Rencana Kerja Tahunan</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                            </div> 
                            <!-- Card Body -->
                            <div class="card-body">
                                <table id="UserList" class="table table-bordered display table-hover" style="width:100%" >
                                    <thead>
                                        <tr class="text-small">
                                            <th style="width: 10px">#</th>
                                            <th style="max-width: 200px">No. Petak</th>
                                            <th style="max-width: 200px">Luasan</th>
                                            <th style="max-width: 200px">Tanggal Tanam</th>
                                            <th style="max-width: 300px">Kontraktor</th>
                                            <th style="max-width: 100px">Jarak Tanam</th>
                                            <th style="max-width: 300px">Tanaman</th>
                                            <th style="max-width: 200px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "../config/connection.php";
                                    $no = 0;
                                    $query = mysqli_query($connect, "SELECT * from rkt");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>                               
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['NoPetak'];?></td>
                                            <td><?php echo $row['Luasan_Petak'];?></td>
                                            <td><?php echo $row['Tanggal_Tanam'];?></td>
                                            <td><?php echo $row['Kontraktor_Tanam'];?></td>
                                            <td><?php echo $row['Jarak_Tanam'];?></td>
                                            <td><?php echo $row['Jenis_Tanaman'];?></td>
                                            <td>
                                            <a href="h.php?id=<?=$row['NoPetak'];?>"class="btn btn-danger btn-sm" role="button" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                            <!-- Modal Input -->
        <div id="InputModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Planning Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="InputForm" action="rktproses.php" method="post">
                             <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoPetak" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Luasan Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Luasan_Petak" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Tanaman</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Jenis_Tanaman" name="Jenis_Tanaman" class="form-control" onchange="rc()" required>
                                            <option value="">Pilih Jenis Tanaman</option>
                                            <option value="Eucalyptus">E. Pelita (HTI)</option>
                                            <option value="Accacia">Accasia M. (HTI)</option>
                                            <option value="RimbaCampuran">Rimba Campuran (MHV)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tanggal Tanam</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="date" name="Tanggal_Tanam" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Kontraktor Tanam</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Kontraktor_Tanam" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jarak Tanam</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Jarak_Tanam" name="Jarak_Tanam" class="form-control" required>
                                            <option value="">Pilih Jarak Tanam</option>
                                            <option value="1x1">1x1</option>
                                            <option value="2x1">2x1</option>
                                            <option value="2x2">2x2</option>
                                        </select>
                                    </div>
                                </div>
                                <script>
                                function rc() {
                                    var jenisTanaman = document.getElementById('Jenis_Tanaman').value;
                                    var jarakTanam = document.getElementById('Jarak_Tanam');
                                    jarakTanam.disabled = false;

                                    if (jenisTanaman === 'RimbaCampuran') {
                                        // Jika jenis pekerjaan adalah "Harvesting", nonaktifkan atau kosongkan NoPetak, nama driver, dan alat angkut
                                        
                                        jarakTanam.disabled = true;
                                        jarakTanam.value = '';
                                    } else {
                                        jarakTanam.disabled = false;
                                        jarakTanam.value = '';
                                    }
                                    
                                }
                                </script>
                                <div class="modal-footer">
                                <input type="submit" name="save" class="btn btn-primary">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div>      
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../assets/styles/Jquery3/jquery-3.7.1.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../assets/styles/bootstrap_v4/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="../assets/styles/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.js"></script>
    <!-- Data Table-->
    <script src="../assets/styles/DataTables/datatables.js"></script>
    <script>
        new DataTable('#UserList');
    </script>
    <!-- Sparkline -->
    <script src="../assets/styles/jquery-sparkline/dist/jquery.sparkline.js"></script>
    <!-- jvectormap  -->
    <script src="../assets/styles/jvectormap/jquery-jvectormap.js"></script>
    <!-- SlimScroll -->
    <script src="../assets/styles/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- ChartJS -->
    <script src="../assets/styles/ChartJs/auto/auto.js"></script>
</body>
</html>