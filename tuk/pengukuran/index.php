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
            <a href="../dashboard.html" class="logo" style="height: 54px;">
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
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                                    <p>
                                        The User
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="../login.html" class="btn btn-default btn-flat">Sign out</a>
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
                    <img src="../../assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
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
                <li>
                    <a href="../../dashboard.html"><i class="fa fa-dashboard"></i><span>&nbsp;<b>Dashboard</b></span></a>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0)">
                        <i class="fa fa-table"></i><span>&nbsp;<b>User</b></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../users/user/index.php"><i class="fa fa-circle-o"></i>&nbsp;User</a></li>
                        <li><a href="../../users/pengawas/pengawas.php"><i class="fa fa-circle-o"></i>&nbsp;Supervisor</a></li>
                        <li><a href="../../users/scaler/scaler.php"><i class="fa fa-circle-o"></i>&nbsp;Scaler</a></li>
                        <li><a href="../../users/operator/operator.php"><i class="fa fa-circle-o"></i>&nbsp;Operator</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../../rekanan/index.php"><i class="fa fa-handshake-o"></i><span>&nbsp;<b>Rekanan</b></span></a>
                </li>
                <li>
                    <a href="../../rkt/index.php"><i class="fa fa-sticky-note"></i>&nbsp;<b>Rencana Kerja</b></a>
                    </a>
                </li>
                <li>
                    <a href="../../harvesting/index.php"><i class="fa fa-tree"></i><span>&nbsp;<b>Tebangan</b></span></a>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0)">
                        <i class="fa fa-book"></i><span>&nbsp;<b>Tata Usaha Kayu</b></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="../../tuk/pengukuran/index.php"><i class="fa fa-circle-o"></i>&nbsp;Pengukuran</a></li>
                        <li><a href="../../tuk/hauling/index.php"><i class="fa fa-circle-o"></i>&nbsp;Hauling</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../../laporan/index.html"><i class="fa fa-dashboard"></i><span>&nbsp;<b>Laporan</b></span></a>
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
                    <b>Pengukuran</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="index.html" class="font-weight-bolder"><i class="fa fa-book"></i>&nbsp;Tata Usaha Kayu&nbsp;</a></li>
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
                                <h4 class="card-title d-inline">List Pengukuran</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                            </div> 
                            <!-- Card Body -->
                            <div class="card-body">
                                <table id="UserList" class="table table-bordered display table-hover table-responsive" style="width:100%" >
                                    <thead>
                                        <tr class="text-small">
                                            <th style="width: 10px">#</th>
                                            <th style="max-width: 70px">No. Petak</th>
                                            <th style="max-width: 200px">Kontraktor Harvesting</th>
                                            <th style="max-width: 150px">SPK Harvesting</th>
                                            <th style="max-width: 100px">Tanggal Ukur</th>
                                            <th style="max-width: 70px">Jenis</th>
                                            <th style="max-width: 200px">Sortimen</th>
                                            <th style="max-width: 150px">Tumpukan</th>
                                            <th style="max-width: 100px">No. Batang</th>
                                            <th style="max-width: 150px">Diameter</th>
                                            <th style="max-width: 70px">P</th>
                                            <th style="max-width: 70px">L</th>
                                            <th style="max-width: 70px">T</th>
                                            <th style="max-width: 100px">Scaler</th>
                                            <th style="max-width: 100px">Pengawas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "../../config/connection.php";
                                    $no = 0;
                                    $query = mysqli_query($connect, "SELECT * from pengukuran_kayu");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['NoPetak'];?></td>
                                            <td><?php echo $row['Kontraktor_Harvesting'];?></td>
                                            <td><?php echo $row['NoSPK_Harvesting'];?></td>
                                            <td><?php echo $row['Tanggal_Ukur'];?></td>
                                            <td><?php echo $row['Jenis_Tanaman'];?></td>
                                            <td><?php echo $row['Sortimen_Kayu'];?></td>
                                            <td><?php echo $row['NoTumpukan'];?></td>
                                            <td><?php echo $row['NoBatang'];?></td>
                                            <td><?php echo $row['Diameter'];?></td>
                                            <td><?php echo $row['Panjang'];?></td>
                                            <td><?php echo $row['Lebar'];?></td>
                                            <td><?php echo $row['Tinggi'];?></td>
                                            <td><?php echo $row['Nama_Scaller'];?></td>
                                            <td><?php echo $row['Nama_Pengawas'];?></td>
                                            <td>
                                            <div class="d-inline"><a id="0" href="javascript:void(0)" class="btn btn-warning" data-toggle="modal" data-target="#EditModal" onclick="editFun(0)"><i class="fa fa-pencil"></i></a></div>
                                                <div class="d-inline" ><a href="javascript:void(0)" onclick="event.preventDefault(0);document.remove()" class="btn btn-danger"><i class="fa fa-trash"></i></a></div>
                                                <form id="usr-del-1" action="javascript:void(0)"></form>
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
                        <h5 class="modal-title">New Partner Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="InputForm" action="pengukuranproses.php" method="post">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <select id="NoPetak" name="NoPetak" class="form-control" >
                                    <?php
                                         include "../../config/connection.php";
                                        $query = mysqli_query($connect, "SELECT * from rkt");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['NoPetak'] . '">' . $row['NoPetak'] . '</option>';
                                        }
                                        ?>   
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Kontraktor Harvesting</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Nama_Kontraktor" name="Nama_Kontraktor" class="form-control" >
                                            <option value="">Pilih Kontraktor</option>
                                            <?php
                                            include "../config/connection.php";
                                            $query = mysqli_query($connect, "SELECT * from rekanan");
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['Nama_Kontraktor'] . '">' . $row['Nama_Kontraktor'] . '</option>';
                                            }
                                            ?>   
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">SPK Harvesting</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                       <input type="text" name="NoSPK_Harvesting" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tanggal Ukur</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="date" name="Tanggal_Ukur" class="form-control" placeholder="Tanggal Ukur">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <select id="Jenis_Tanaman" name="Jenis_Tanaman" class="form-control">
                                            <option value="">Pilih Jenis Tanaman</option>
                                            <option value="E. Pelita (HTI)">E. Pelita (HTI)</option>
                                            <option value="Accasia M. (HTI)">Accasia M. (HTI)</option>
                                            <option value="Rimba Campuran (MHV)">Rimba Campuran (MHV)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Sortimen</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <label>
                                            <input type="radio" name="Sortimen_Kayu" value="1.0m"> 1.0 m 
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" name="Sortimen_Kayu" value="2.5m"> 2.5 m
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" name="Sortimen_Kayu" value="2.8m"> 2.8 m 
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" name="Sortimen_Kayu" value="4.2m"> 4.2 m
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Tumpukan</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="NoTumpukan" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Batang</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="NoBatang" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Diameter</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Diameter" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">P</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Panjang" class="form-control" >
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-4">L</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Lebar" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">T</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Tinggi" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Scaler</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="Nama_Sceller" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Pengawas</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="Nama_Pengawas" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
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