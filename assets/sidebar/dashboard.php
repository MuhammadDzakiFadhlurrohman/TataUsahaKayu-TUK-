<?php
include "config/connection.php";
?>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i><span>&nbsp;<b>Dashboard</b></span></a>
                    </li>
                    <?php
                    if ($_SESSION['Otorisasi'] == 'admin') 
                    {
                    ?>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-table"></i><span>&nbsp;<b>User</b></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="users/user/index.php"><i class="fa fa-circle-o"></i>&nbsp;User</a></li>
                            <li><a href="users/pengawas/pengawas.php"><i class="fa fa-circle-o"></i>&nbsp;Pengawas</a></li>
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
                    <?php
                    } else if ($_SESSION['Otorisasi'] == 'planning') 
                    {
                    ?>
                    <li>
                        <a href="rkt/index.php"><i class="fa fa-sticky-note"></i><span>&nbsp;<b>Rencana Kerja</b></span>
                        </a>
                    </li>
                    <?php
                    } else if ($_SESSION['Otorisasi'] == 'harvesting') 
                    {
                    ?>
                    <li>
                        <a href="harvesting/index.php"><i class="fa fa-tree"></i><span>&nbsp;<b>Tebangan</b></span></a>
                    </li>
                    <?php
                    } else if ($_SESSION['Otorisasi'] == 'tuk') 
                    {
                    ?>
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
                    <?php
                    }
                    ?>
        </ul>
            </section>
        <!-- /.sidebar -->
        </aside>