<!DOCTYPE html>
<html>
<head>
	<title>Tata Usaha Kayu</title>
</head>
<body>
	<?php
	$filename = isset($_GET['filename']) ? $_GET['filename'] : 'Data_Pengukuran_Batang.xls';

    // Header untuk mengatur tipe konten dan memberikan nama file
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=" . $filename);
	?>
 
	<center>
		<h1>Tata Usaha Kayu <br/> Pengukuran Non Batang </h1>
	
 
	<table border="1">
		<tr>
        <th style="width: 10px">No</th>
        <th style="max-width: 70px">No. Petak</th>
        <th style="max-width: 200px">Kontraktor Harvesting</th>
        <th style="max-width: 150px">SPK Harvesting</th>
        <th style="max-width: 100px">Tanggal Ukur</th>
        <th style="max-width: 70px">Jenis</th>
        <th style="max-width: 200px">Sortimen</th>
        <th style="max-width: 100px">No. Batang</th>
        <th style="max-width: 150px">Diameter</th>
        <th style="max-width: 70px">P</th>
        <th style="max-width: 70px">m3</th>
        <th style="max-width: 100px">Scaler</th>
        <th style="max-width: 100px">Pengawas</th>
		</tr>
 
        <?php
        include "../../../config/connection.php";
        $no = 0;
        $query = mysqli_query($connect, "SELECT * from pengukuran42");
        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
        {
        ?>
        <tr class="text-center text-small">
        <td><?php echo $no = $no+1;?></td>
        <td><?php echo $row['NoPetak'];?></td>
        <td><?php echo $row['Nama_Kontraktor'];?></td>
        <td><?php echo $row['NoSPK_Harvesting'];?></td>
        <td><?php echo $row['Tanggal_Ukur'];?></td>
        <td><?php echo $row['Jenis_Kayu'];?></td>
        <td><?php echo $row['Sortimen_Kayu'];?></td>
        <td><?php echo $row['NoBatang'];?></td>
        <td><?php echo $row['Diameter'];?></td>
        <td><?php echo $row['Panjang'];?></td>
        <td><?php echo $row['m3'];?></td>
        <td><?php echo $row['Nama_Scaler'];?></td>
        <td><?php echo $row['Nama_Pengawas'];?></td>
		</tr>
		<?php 
		}
		?>
    </center>
	</table>
</body>
</html>