<?php
session_start();
include "../../../config/connection.php";
include "../../../assets/sidebar/tuk/hauling/28.php";
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
                        <li class="active"><a href="../index.php"><i class="fa fa-circle-o"></i>&nbsp;Hauling</a></li>
                </ol>
            </section>
        
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md col-sm col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline">List Hauling Non Batang</h4>
                                <span class="float-right"><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#InputModal"><i class="fa fa-plus"></i></a></span>
                                <div>
                                <?php           // Retrieve data from the hauling table
                                $query = mysqli_query($connect, "SELECT * FROM hauling28");
                                // Check if the query was successful
                                if (!$query) {
                                    echo "Error: " . mysqli_error($connect);
                                }
                                // Fetch the total directly from the database using SQL
                                $currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM hauling28");
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
                                            <th style="max-width: 70px">No. Tumpukan</th>
                                            <th style="max-width: 70px">No. Petak</th>
                                            <th style="max-width: 100px">Kontraktor Harvesting</th>
                                            <th style="max-width: 150px">SPK Hauling</th>
                                            <th style="max-width: 100px">Tanggal Hauling</th>
                                            <th style="max-width: 200px">Jenis</th>
                                            <th style="max-width: 200px">Sortimen</th>
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
                                    $query = mysqli_query($connect, "SELECT * from hauling28");
                                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                                    {
                                        ?>
                                        <tr class="text-center text-small">
                                            <td><?php echo $no = $no+1;?></td>
                                            <td><?php echo $row['NoTumpukan'];?></td>
                                            <td><?php echo $row['NoPetak'];?></td>
                                            <td><?php echo $row['Kontraktor_Harvesting'];?></td>
                                            <td><?php echo $row['NoSPK_Hauling'];?></td>
                                            <td><?php echo $row['Tanggal_Hauling'];?></td>
                                            <td><?php echo $row['Jenis_Kayu'];?></td>
                                            <td><?php echo $row['Sortimen_Kayu'];?></td>
                                            <td><?php echo $row['Nama_Operator'];?></td>
                                            <td><?php echo $row['No_Alat'];?></td>
                                            <td><?php echo $row['Nama_Driver'];?></td>
                                            <td><?php echo $row['NoAlat_Angkut'];?></td>
                                            <td><?php echo $row['NoTrip_Angkutan'];?></td>
                                            <td><?php echo $row['Nama_Scaler'];?></td>
                                            <td><?php echo $row['Nama_Pengawas'];?></td>
                                            <td>
                                            <a href="h.php?id=<?=$row['No_Hauling'];?>"class="btn btn-danger btn-sm" role="button" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
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
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Modal Input -->
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
                        <form id="InputForm" action="haulingproses28.php" method="post" >
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-4">No. Tumpukan</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="NoTumpukan" name="NoTumpukan" class="form-control" onchange="tumpukan()" required>
                                        <option value="">-PILIH NOMOR TUMPUKAN-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from pengukuran28");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['NoTumpukan'] . '">' . $row['NoTumpukan'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="NoPetak" class="form-control" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Kontraktor Harvesting</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="Kontraktor_Harvesting" class="form-control" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. SPK Harvesting</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input type="text" name="NoSPK_Harvesting" class="form-control" readonly required>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById("NoTumpukan").addEventListener("change", function tumpukan() {
                                        var pilihan = this.value;
                                        <?php
                                        $data = array();
                                        $query = mysqli_query($connect, "SELECT * FROM pengukuran28");

                                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            $data[] = $row;
                                        }

                                        echo 'var data = ' . json_encode($data) . ';';
                                        ?>

                                        if (data.length === 0) {
                                            alert("NoTumpukan tidak ditemukan!");
                                            return;
                                        }

                                        console.log("Data from PHP:", data);

                                        var nopetak = "";
                                        var kontraktor = "";
                                        var spk = "";
                                        var jenis = "";
                                        var sortimen = "";

                                        for (var i = 0; i < data.length; i++) {
                                            console.log("Checking:", data[i].NoTumpukan, pilihan);
                                            if (pilihan == data[i].NoTumpukan) {
                                                console.log("Match found!");

                                                nopetak = data[i].NoPetak;
                                                kontraktor = data[i].Kontraktor_Harvesting;
                                                spk = data[i].NoSPK_Harvesting;
                                                jenis = data[i].Jenis_Kayu;
                                                sortimen = data[i].Sortimen_Kayu;

                                                break;
                                            }
                                        }

                                        console.log("Resulting values:", nopetak, kontraktor, spk, jenis, sortimen);

                                        document.getElementsByName("NoPetak")[0].value = nopetak;
                                        document.getElementsByName("Kontraktor_Harvesting")[0].value = kontraktor;
                                        document.getElementsByName("NoSPK_Harvesting")[0].value = spk;
                                        document.getElementsByName("Jenis_Kayu")[0].value = jenis;
                                        document.getElementsByName("Sortimen_Kayu")[0].value = sortimen;
                                    });
                                        document.getElementById("Kontraktor_Hauling").addEventListener("change", function kontraktorhauling() {
                                            var pilihan = this.value;
                                            <?php
                                            $data = array();
                                            $query = mysqli_query($connect, "SELECT * FROM rekanan where Jenis_Pekerjaan='HL'");

                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                                $data[] = $row;
                                            }

                                            echo 'var data = ' . json_encode($data) . ';';
                                            ?>

                                            if (data.length === 0) {
                                                alert("Kontraktor Hauling tidak ditemukan!");
                                                return;
                                            }

                                            console.log("Data from PHP:", data);

                                            var spk = "";

                                            for (var i = 0; i < data.length; i++) {
                                                console.log("Checking:", data[i].Nama_Kontraktor, pilihan);
                                                if (pilihan == data[i].Nama_Kontraktor) {
                                                    console.log("Match found!");

                                                    spk = data[i].NoSPK;

                                                    break;
                                                }
                                            }

                                            console.log("Resulting values:", spk);

                                            document.getElementsByName("NoSPK_Hauling")[0].value = spk;
                                        })
                                       
    function operator() {
        var pilihan = document.getElementById("Nama_Operator").value;
        <?php
        $data = array();
        $query = mysqli_query($connect, "SELECT * FROM operator");

        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        echo 'var data = ' . json_encode($data) . ';';
        ?>

        if (data.length === 0) {
            alert("Operator tidak ditemukan!");
            return;
        }

        console.log("Data from PHP:", data);

        var noAlat = "";

        for (var i = 0; i < data.length; i++) {
            console.log("Checking:", data[i].Nama_Operator, pilihan);
            if (pilihan == data[i].Nama_Operator) {
                console.log("Match found!");
                noAlat = data[i].No_Alat;
                break;
            }
        }

        console.log("Resulting values:", noAlat);

        document.getElementsByName("No_Alat")[0].value = noAlat;
    }

    function driver(){
        var pilihan = document.getElementById("Nama_Driver").value;
        <?php
        $data = array();
        $query = mysqli_query($connect, "SELECT * FROM rekanan where Jenis_Pekerjaan='HL'");

        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        echo 'var data = ' . json_encode($data) . ';';
        ?>

        if (data.length === 0) {
            alert("Driver tidak ditemukan!");
            return;
        }

        console.log("Data from PHP:", data);

        var noTruck = "";

        for (var i = 0; i < data.length; i++) {
            console.log("Checking:", data[i].Nama_Driver, pilihan);
            if (pilihan == data[i].Nama_Driver) {
                console.log("Match found!");
                noTruck = data[i].NoAlat_Angkut;
                break;
            }
        }

        console.log("Resulting values:", noTruck);

        document.getElementsByName("NoAlat_Angkut")[0].value = noTruck;
    }
    ;

    // Event listener untuk pemanggilan fungsi saat elemen berubah
    document.getElementByName("Nama_Operator").addEventListener("change", operator);
    document.getElementByName("Kontraktor_Hauling").addEventListener("change", kontraktorhauling);
    document.getElementByName("Nama_Driver").addEventListener("change", driver);

                                </script>

                                <div class="form-group row">
                                    <div class="col-md-4">Kontraktor Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id = "Kontraktor_Hauling" name="Kontraktor_Hauling" class="form-control" required onchange="kontraktorhauling()">
                                            <option value="">-PILIH KONTRAKTOR HAULING</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * from rekanan where Jenis_Pekerjaan='HL'");
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['Kontraktor_Hauling'] . '">' . $row['Nama_Kontraktor'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. SPK Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <select name="NoSPK_Hauling" class="form-control" required>
                                            <option value="">-PILIH KONTRAKTOR HAULING</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * from rekanan where Jenis_Pekerjaan='HL'");
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                            echo '<option value="' . $row['NoSPK_Hauling'] . '">' . $row['NoSPK'] . '</option>';
                                            }
                                            ?>
                                        </select>
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
                                        <input name="Jenis_Kayu" class="form-control" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Sortimen</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <input name="Sortimen_Kayu" class="form-control" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Operator Loading</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Nama_Operator" name="Nama_Operator" class="form-control" required onchange="operator()">
                                        <option value="">-PILIH OPERATOR LOADING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from operator");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Nama_Operator'] . '">' . $row['Nama_Operator'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Alat</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input name="No_Alat" class="form-control" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Driver Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select id="Nama_Driver" name="Nama_Driver" class="form-control" required onchange="driver()">
                                        <option value="">-PILIH DRIVER HAULING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from rekanan where Jenis_Pekerjaan='HL'");
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                        echo '<option value="' . $row['Nama_Driver'] . '">' . $row['Nama_Driver'] . '</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Truck</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <input name="NoAlat_Angkut" class="form-control" readonly required>
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
                                    <select name="Nama_Scaler" class="form-control" required>
                                            <option value="">-PILIH NAMA SCALER-</option>
                                            <?php
                                            $query = mysqli_query($connect, "SELECT * FROM scaler where Jenis_Scaler = 'HAULING'");
                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                                echo '<option value="' . $row['Nama_Scaler'] . '">' . $row['Nama_Scaler'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Pengawas Hauling</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        <select name="Nama_Pengawas" class="form-control" required>
                                        <option value="">-PILIH PENGAWAS HAULING-</option>
                                        <?php
                                        $query = mysqli_query($connect, "SELECT * from pengawas where Jenis_Pengawas = 'HAULING'");
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
        </div>
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
    <script src="../../../assets/example/hauling28.js"></script>
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