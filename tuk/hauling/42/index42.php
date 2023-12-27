<?php
session_start();
include '../../../config/connection.php';
include '../../../assets/sidebar/tuk/hauling/42.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medco Papua</title>
    <link rel="icon" type="image/x-icon" href="../../../assets/images/logos/Medco-papua.ico">
    
    <!-- Css link -->
    <link rel="stylesheet" href="../../../assets/styles/bootstrap_v4/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../assets/styles/font-awesome/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../assets/styles/Ionicons/css/ionicons.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../../assets/styles/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../assets/dist/css/AdminLTE.css">
    <!-- Data Table-->
    <link rel="stylesheet" href="../../../assets/styles/DataTables/datatables.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../../assets/dist/css/skins/_all-skins.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
  
        <!-- Top header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="../../../dashboard.html" class="logo" style="height: 54px;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img src="../../../assets/images/logos/Medco papua.png" alt="">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="../../../assets/images/logos/Medco papua.png" alt=""><b style="font-weight: 700;">M</b>edco Papua</span>
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
                                <img src="../../../assets/images/Avatars/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['Username'];?></span> 
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../../assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                                    <p>
                                    <?php echo $_SESSION['Username'];?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="../../../login/logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                    <b>Hauling</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                        <li><a href="../index.php"><i class="fa fa-book"></i>&nbsp;Tata Usaha Kayu</a></li>
                        <li class="active"><a href="../index.php"><i class="fa fa-book"></i>&nbsp;Hauling</a></li>
                </ol>
            </section>
        
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md col-sm col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline">List Hauling Batang</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                                <div>
                                <?php
                                // Retrieve data from the hauling table
                                $query = mysqli_query($connect, "SELECT * FROM hauling42");
                                // Check if the query was successful
                                if (!$query) {
                                    echo "Error: " . mysqli_error($connect);
                                }
                                // Fetch the total directly from the database using SQL
                                $currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM hauling42");
                                $currentTotalRow = mysqli_fetch_assoc($currentTotalQuery);
                                $currentTotal = $currentTotalRow['total'];
                                // Increment the current total by 1
                                $newTotal = $currentTotal ;
                                ?>
                                <?php
                                echo "<div>Total Kayu: $newTotal</div>";
                                ?>
                                </div>
                            </div> 
                            <!-- Card Body -->
                            <div class="card-body">
                                <table id="UserList" class="table table-bordered display table-hover table-responsive" style="width:100%" >
                                    <thead>
                                        <tr class="text-small">
                                        <th style="width: 10px">#</th>
                                            <th style="max-width: 70px">No. Petak</th>
                                            <th style="max-width: 100px">Kontraktor Harvesting</th>
                                            <th style="max-width: 150px">SPK Hauling</th>
                                            <th style="max-width: 100px">Tanggal Hauling</th>
                                            <th style="max-width: 200px">Jenis</th>
                                            <th style="max-width: 200px">Sortimen</th>
                                            <th style="max-width: 70px">No. Batang</th>
                                            <th style="max-width: 70px">P</th>
                                            <th style="max-width: 70px">Diameter</th>
                                            <th style="max-width: 70px">M3</th>
                                            <th style="max-width: 100px">Operator</th>
                                            <th style="max-width: 70px">No. Alat</th>
                                            <th style="max-width: 100px">Driver</th>
                                            <th style="max-width: 70px">No. Truck</th>
                                            <th style="max-width: 70px">No. Trip</th>
                                            <th style="max-width: 100px">Scaler</th>
                                            <th style="max-width: 100px">Pengawas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 0;
                                    $query = mysqli_query($connect, "SELECT * from hauling42");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['NoPetak'];?></td>
                                            <td><?php echo $row['Kontraktor_Harvesting'];?></td>
                                            <td><?php echo $row['NoSPK_Hauling'];?></td>
                                            <td><?php echo $row['Tanggal_Hauling'];?></td>
                                            <td><?php echo $row['Jenis_Kayu'];?></td>
                                            <td><?php echo $row['Sortimen'];?></td>
                                            <td><?php echo $row['NoBatang'];?></td>
                                            <td><?php echo $row['Panjang'];?></td>
                                            <td><?php echo $row['Diameter'];?></td>
                                            <td><?php echo $row['m3'];?></td>
                                            <td><?php echo $row['Nama_Operator'];?></td>
                                            <td><?php echo $row['NoAlat'];?></td>
                                            <td><?php echo $row['Driver'];?></td>
                                            <td><?php echo $row['NoTruck'];?></td>
                                            <td><?php echo $row['NoTrip_Angkutan'];?></td>
                                            <td><?php echo $row['Nama_Scaler'];?></td>
                                            <td><?php echo $row['Nama_Pengawas'];?></td>
                                            <td>
                                            <a href="h.php?id=<?=$row['No_Hauling'];?>"class="btn btn-danger btn-sm" role="button" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Card Footer-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="InputModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Hauling Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form id="InputForm" action="haulingproses42.php" method="post">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="NoPetak" class="form-control" required>
                                        <option value="">-PILIH NOMOR PETAK-</option>
                                        <?php
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
                                        <select name="Kontraktor_Harvesting" class="form-control" required>
                                        <option value="">-PILIH KONTRAKTOR HARVESTING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from harvesting");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Kontraktor_Harvesting'] . '">' . $row['Kontraktor_Harvesting'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. SPK Harvesting</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="NoSPK_Harvesting" class="form-control" required>
                                            <option value="">-PILIH SPK HARVESTING-</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * from harvesting");
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['NoSPK'] . '">' . $row['NoSPK'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Kontraktor Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="Kontraktor_Hauling" class="form-control" required>
                                            <option value="">-PILIH KONTRAKTOR HAULING</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * from rekanan");
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['Nama_Kontraktor'] . '">' . $row['Nama_Kontraktor'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. SPK Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="NoSPK_Hauling" class="form-control" placeholder="NO. SPK Hauling" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tanggal Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="date" name="Tanggal_Hauling" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="Jenis_Kayu" class="form-control" required>
                                        <option value="">-PILIH JENIS KAYU-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from pengukuran42");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Jenis_Kayu'] . '">' . $row['Jenis_Kayu'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Batang</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <select name="NoBatang" class="form-control" required>
                                        <option value="">-PILIH NOMOR BATANG-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from pengukuran42");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['NoBatang'] . '">' . $row['NoBatang'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Operator Loading</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="Nama_Operator" class="form-control" required>
                                        <option value="">-PILIH OPERATOR LOADING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from operator");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Nama_Scaler'] . '">' . $row['Nama_Scaler'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Alat</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="NoAlat" class="form-control" required>
                                            <option value="">-PILIH NOMOR ALAT-</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * from operator");
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['No_Alat'] . '">' . $row['No_Alat'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Driver Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="Driver" class="form-control" required>
                                        <option value="">-PILIH DRIVER HAULING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from Scaler");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Nama_Scaler'] . '">' . $row['Nama_Scaler'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Truck</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoTruck" class="form-control" placeholder="No. Truck" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Trip Angkutan</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoTrip_Angkutan" class="form-control" placeholder="No. Trip Angkutan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Scaler</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Nama_Scaler" class="form-control" placeholder="Nama_Scaler" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Pengawas Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="Nama_Pengawas" class="form-control" required>
                                        <option value="">-PILIH PENGAWAS HAULING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from pengawas");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Nama_Pengawas'] . '">' . $row['Nama_Pengawas'] . '</option>';
                                        }
                                        ?>
                                        </select>
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
    <script src="../../../assets/styles/Jquery3/jquery-3.7.1.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../../assets/styles/bootstrap_v4/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="../../../assets/styles/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../assets/dist/js/adminlte.js"></script>
    <!-- Data Table-->
    <script src="../../../assets/styles/DataTables/datatables.js"></script>
    <script>
        new DataTable('#UserList');
    </script>
    <!-- Sparkline -->
    <script src="../../../assets/styles/jquery-sparkline/dist/jquery.sparkline.js"></script>
    <!-- jvectormap  -->
    <script src="../../../assets/styles/jvectormap/jquery-jvectormap.js"></script>
    <!-- SlimScroll -->
    <script src="../../../assets/styles/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- ChartJS -->
    <script src="../../../assets/styles/ChartJs/auto/auto.js"></script>
</body>
</html>