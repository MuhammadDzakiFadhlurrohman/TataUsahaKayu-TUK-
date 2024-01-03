<?php
session_start();
include "../../../config/connection.php";
include "../../../assets/sidebar/tuk/pengukuran/28.php";
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
            <a href="../../dashboard.html" class="logo" style="height: 54px;">
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
                    <b>Pengukuran</b>
                </h1>
                <!-- Breadcrumb navigation -->
                <ol class="breadcrumb">
                    <li><a href="../index.php" class="font-weight-bolder"><i class="fa fa-book"></i>&nbsp;Tata Usaha Kayu&nbsp;</a></li>
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
                                <h4 class="card-title d-inline">List Pengukuran Non Batang</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                                <?php
                                // Retrieve data from the pengukuran28 table
                                $pengukuranQuery = mysqli_query($connect, "SELECT COUNT(*) as total, SUM(m3) AS totalm3 FROM pengukuran28");
                                if (!$pengukuranQuery) {
                                    echo "Error: " . mysqli_error($connect);
                                }

                                $pengukuranRow = mysqli_fetch_assoc($pengukuranQuery);
                                $totalPengukuran = $pengukuranRow['total'];
                                $totalm3Pengukuran = format_angka($pengukuranRow['totalm3']);

                                // Retrieve data from the hauling28 table
                                $haulingQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM hauling28");
                                if (!$haulingQuery) {
                                    echo "Error: " . mysqli_error($connect);
                                }

                                $haulingRow = mysqli_fetch_assoc($haulingQuery);
                                $totalHauling = $haulingRow['total'];

                                // Calculate the difference
                                $difference = $totalPengukuran - $totalHauling;

                                
                                echo "<div>Stock Pengukuran : $difference</div>";
                                echo "<div>Total m3 : $totalm3Pengukuran</div>";
                                ?>
                                <div>
                                    <br>
                                    <a href="download.php?file=Pengukuran 2.8.xlsx" class="btn btn-success btn-sm" role="button" title="Download File"><i class="fa fa-download"></i> Download File</a>
                                </div> 
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
                                            <th style="max-width: 70px">P</th>
                                            <th style="max-width: 70px">L</th>
                                            <th style="max-width: 70px">T</th>
                                            <th style="max-width: 70px">m3</th>
                                            <th style="max-width: 100px">Scaler</th>
                                            <th style="max-width: 100px">Pengawas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 0;
                                    function format_angka($angka) {
                                        return number_format($angka, 2);
                                      }
                                    $query = mysqli_query($connect, "SELECT * from pengukuran28");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['NoPetak'];?></td>
                                            <td><?php echo $row['Kontraktor_Harvesting'];?></td>
                                            <td><?php echo $row['NoSPK_Harvesting'];?></td>
                                            <td><?php echo $row['Tanggal_Ukur'];?></td>
                                            <td><?php echo $row['Jenis_Kayu'];?></td>
                                            <td><?php echo $row['Sortimen_Kayu'];?></td>
                                            <td><?php echo $row['NoTumpukan'];?></td>
                                            <td><?php echo $row['Panjang'];?></td>
                                            <td><?php echo $row['Lebar'];?></td>
                                            <td><?php echo $row['Tinggi'];?></td>
                                            <td><?php echo format_angka($row['m3']);?></td>
                                            <td><?php echo $row['Nama_Scaler'];?></td>
                                            <td><?php echo $row['Nama_Pengawas'];?></td>
                                            <td>
                                            <a href="h.php?id=<?=$row['No_Pengukuran'];?>"class="btn btn-danger btn-sm" role="button" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
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
            <div id="InputModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Measurement Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="InputForm" action="pengukuranproses28.php" method="post">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="NoPetak" name="NoPetak" class="form-control" required onchange="pengukuran42()">
                                            <option value="">-PILIH NOMOR PETAK-</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * FROM rekanan where NoPetak > 0");
                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
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
                                        <input name="Kontraktor_Harvesting" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">SPK Harvesting</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="NoSPK_Harvesting" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tanggal Ukur</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="date" name="Tanggal_Ukur" class="form-control" placeholder="Tanggal Ukur" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="Jenis_Kayu" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Sortimen</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="Sortimen_Kayu" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Tumpukan</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="NoTumpukan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Panjang</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Panjang" class="form-control" required>
                                    </div>
                                    <span class="col-md-2">m</span>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Lebar</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Lebar" class="form-control" required>
                                    </div>
                                    <span class="col-md-2">m</span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tinggi</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input type="text" name="Tinggi" class="form-control" required>
                                    </div>
                                    <span class="col-md-2">m</span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Scaler</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <select name="Nama_Scaler" class="form-control" required>
                                            <option value="">-PILIH NAMA SCALER-</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * FROM scaler where Jenis_Scaler = 'HARVESTING'");
                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                                echo '<option value="' . $row['Nama_Scaler'] . '">' . $row['Nama_Scaler'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Pengawas</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <select name="Nama_Pengawas" class="form-control" required>
                                            <option value="">-PILIH NAMA PENGAWAS-</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * FROM pengawas where Jenis_Pengawas = 'HARVESTING'");
                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
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
            <script>
            document.getElementById("NoPetak").addEventListener("change", function pengukuran42() {
                var pilihan = this.value;
                <?php
                $data = array();
                $query = mysqli_query($connect, "SELECT rekanan.NoPetak, rekanan.Nama_Kontraktor, rekanan.Sortimen_Kayu, 
                harvesting.NoSPK, harvesting.Jenis_Tanaman FROM rekanan JOIN harvesting
                ON rekanan.NoPetak = harvesting.NoPetak ORDER BY rekanan.NoPetak");
                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $data[] = $row;
                }
                echo 'var data = ' . json_encode($data) . ';';
                ?>
                if (data.length === 0) {
                    alert("NoPetak tidak ditemukan!");
                    return;
                }
                console.log("Data from PHP:", data);
                var spk = "";
                var kontraktor = "";
                var jenis = "";
                var sortimen = "";
                for (var i = 0; i < data.length; i++) {
                    if (data[i].NoPetak === pilihan) {
                        spk = data[i].NoSPK;
                        kontraktor = data[i].Nama_Kontraktor;
                        jenis = data[i].Jenis_Tanaman;
                        sortimen = data[i].Sortimen_Kayu;
                        break;
                    }
                }
                document.querySelector("input[name='NoSPK_Harvesting']").value = spk;
                document.querySelector("input[name='Kontraktor_Harvesting']").value = kontraktor;
                document.querySelector("input[name='Jenis_Kayu']").value = jenis;
                document.querySelector("input[name='Sortimen_Kayu']").value = sortimen;
            });
            </script>
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