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
                        <li class="dropdown user user-menu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../assets/images/Avatars/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../assets/images/Avatars/avatar.png" class="img-circle" alt="User Image">
                                    <p>
                                        User
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="../login/login.html" class="btn btn-default btn-flat">Sign out</a>
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
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="../dashboard.php"><i class="fa fa-dashboard"></i><span>&nbsp;<b>Dashboard</b></span></a>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0)">
                        <i class="fa fa-table"></i><span>&nbsp;<b>User</b></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../users/user/index.php"><i class="fa fa-circle-o"></i>&nbsp;User</a></li>
                        <li><a href="../users/pengawas/pengawas.php"><i class="fa fa-circle-o"></i>&nbsp;Supervisor</a></li>
                        <li><a href="../users/scaler/scaler.php"><i class="fa fa-circle-o"></i>&nbsp;Scaler</a></li>
                        <li><a href="../users/operator/operator.php"><i class="fa fa-circle-o"></i>&nbsp;Operator</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="../rekanan/index.php"><i class="fa fa-handshake-o"></i><span>&nbsp;<b>Rekanan</b></span></a>
                </li>
                <li>
                    <a href="../rkt/index.php"><i class="fa fa-sticky-note"></i><span>&nbsp;<b>Rencana Kerja</b></span></a>
                    </a>
                </li>
                <li>
                    <a href="../harvesting/index.php"><i class="fa fa-tree"></i><span>&nbsp;<b>Tebangan</b></span></a>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0)">
                        <i class="fa fa-book"></i><span>&nbsp;<b>Tata Usaha Kayu</b></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../tuk/pengukuran/index.php"><i class="fa fa-circle-o"></i>&nbsp;Pengukuran</a></li>
                        <li><a href="../tuk/hauling/index.php"><i class="fa fa-circle-o"></i>&nbsp;Hauling</a></li>
                    </ul>
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
                    <b>Rekanan</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="index.php" class="font-weight-bolder"><i class="fa fa-handshake-o"></i>&nbsp;Rekanan&nbsp;</a></li>
                    <li><span class="font-weight-bolder">&nbsp;Rekanan&nbsp;</span></li>
                </ol>
            </section>
        
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md col-sm col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline">List Rekanan</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                            </div> 
                            <!-- Card Body -->
                            <div class="card-body">
                                <table id="UserList" class="table table-bordered display table-hover" style="width:100%" >
                                    <thead>
                                        <tr class="text-small">
                                            <th style="width: 10px">#</th>
                                            <th style="width: auto">Kontraktor</th>
                                            <th style="max-width: 100px">No. SPK</th>
                                            <th style="max-width: 100px">Pekerjaan</th>
                                            <th style="max-width: 100px;">Petak</th>
                                            <th style="width: auto">Driver</th>
                                            <th style="max-width: 100px">No. Angkut</th>
                                            <th style="max-width: 100px">Sortimen</th>
                                            <th style="max-width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "../config/connection.php";
                                    $no = 0;
                                    $query = mysqli_query($connect, "SELECT * from rekanan");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['Nama_Kontraktor'];?></td>
                                            <td><?php echo $row['NoSPK'];?></td>
                                            <td><?php echo $row['Jenis_Pekerjaan'];?></td>
                                            <td><?php echo $row['NoPetak'];?></td>
                                            <td><?php echo $row['Nama_Operator'];?></td>
                                            <td><?php echo $row['NoAlat_Angkut'];?></td>
                                            <td><?php echo $row['Sortimen_Kayu'];?></td>
                                            <td>
                                            <a href="h.php?id=<?=$row['No_Rekanan'];?>"class="btn btn-danger btn-sm" role="button" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal Input -->
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
                        <form id="InputForm" action="rekananproses.php" method="post" onsubmit="return validateCheckbox()">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Kontraktor</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Nama_Kontraktor" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Badan Usaha</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Jenis_Badan_Usaha" name="Jenis_Badan_Usaha" class="form-control" required>
                                            <option value="">Pilih Jenis Badan Usaha</option>
                                            <option value="CV">CV</option>
                                            <option value="PT">PT</option>
                                            <option value="Perseorangan">Perseorangan</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Direktur</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                       <input type="text" name="Nama_Direktur" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Alamat</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <textarea name="Alamat" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">NPWP</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NPWP" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Rekening</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoRekening" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Pekerjaan</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md" >
                                        <label>
                                            <input type="radio" name="Jenis_Pekerjaan" value="HR" required onchange="checkJP()"> Harvesting
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" name="Jenis_Pekerjaan" value="HL" required onchange="checkJP()"> Hauling
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Nopetak" name="NoPetak" class="form-control"  required onchange="nopet()">
                                        <option value="">-PILIH NOMOR PETAK-</option>
                                        <?php
                                        include "../config/connection.php";
                                        $query = mysqli_query($connect, "SELECT * from rkt");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['NoPetak'] . '">' . $row['NoPetak'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input name="Jenis_Tanaman" class="form-control" readonly>
                                    </div>
                                </div>
                                <script>
                                  function checkJP() {
                                    var jenisPekerjaan = document.querySelector('input[name="Jenis_Pekerjaan"]:checked').value;
                                    var noPetakElement = document.getElementById('Nopetak');
                                    var namaDriverElement = document.getElementsByName('Nama_Operator')[0];
                                    var alatAngkutElement = document.getElementsByName('NoAlat_Angkut')[0];
                                   
                                    noPetakElement.disabled = false;
                                    namaDriverElement.disabled = false;
                                    alatAngkutElement.disabled = false;

                                    if (jenisPekerjaan === 'HR') {
                                        // Jika jenis pekerjaan adalah "Harvesting", nonaktifkan atau kosongkan NoPetak, nama driver, dan alat angkut
                                        namaDriverElement.disabled = true;
                                        namaDriverElement.value = '';
                                        alatAngkutElement.disabled = true;
                                        alatAngkutElement.value = '';
                                    } else if (jenisPekerjaan === 'HL') {
                                        // Jika jenis pekerjaan bukan "Harvesting", aktifkan kembali NoPetak, nama driver, dan alat angkut
                                        noPetakElement.disabled = true;
                                        namaDriverElement.disabled = false;
                                        namaDriverElement.value = '';
                                        alatAngkutElement.disabled = false;
                                        alatAngkutElement.value = '';
                                    }
                                }

                                function validateCheckbox() {
                                    var checkboxes = document.querySelectorAll('input[name="Sortimen_Kayu[]"]:checked');
                                    
                                    if (checkboxes.length === 0) {
                                        alert("Pilih setidaknya satu opsi.");
                                        return false; // Mencegah formulir disubmit
                                    }

                                    // Jika setidaknya satu opsi dicentang, formulir dapat disubmit
                                    return true;
                                }

                                  document.getElementById("Nopetak").addEventListener("change", function nopet() {
                                  var pilihan = this.value;
                                  var jt = "";

                                  <?php
                                  $query = mysqli_query($connect, "SELECT * from rkt");
                                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo 'if (pilihan == "' . $row['NoPetak'] . '") {';
                                        echo 'jt = "' . $row['Jenis_Tanaman'] . '";';
                                        echo '}';
                                  }
                                  ?>
                                  
                                  document.getElementsByName("Jenis_Tanaman")[0].value = jt;
                                });
                                </script>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Driver</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Nama_Operator" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Alat Angkut</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoAlat_Angkut" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Sortimen Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md" required>
                                    <label for="1.0m">
                                        <input type="checkbox" id="1.0m" name="Sortimen_Kayu[]" value="1.0m" > 1.0 m
                                    </label>
                                    <label for="2.5m">
                                        <input type="checkbox" id="2.5m" name="Sortimen_Kayu[]" value="2.5m" > 2.5 m
                                    </label>
                                    <label for="2.8m">
                                        <input type="checkbox" id="2.8m" name="Sortimen_Kayu[]" value="2.8m" > 2.8 m
                                    </label>
                                    <label for="4.2m">
                                        <input type="checkbox" id="4.2m" name="Sortimen_Kayu[]" value="4.2m" > 4.2 m
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. PBPH</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoPBPH" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. SPK</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoSPK" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tanggal SPK</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        Tanggal Berlaku
                                        <input type="date" name="Tanggal_Berlaku" class="form-control" placeholder="Tanggal Berlaku" required>
                                        Tanggal Berakhir
                                        <input type="date" name="Tanggal_Berakhir" class="form-control" placeholder="Tanggal Berakhir" required>
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