<?php
require 'dat.php';
$list = query("SELECT * FROM baru order by tanggal asc");//api untuk menghubungkan query my sql dengan php

$konek = mysqli_connect("localhost", "root", "", "jadi");//api untuk teruhubung ke dalam database "jadi"


?>

<!DOCTYPE html>
<html>
<head>
	<title>MEDICAL CENTER</title>
	<link rel="stylesheet" type="text/css" href="kensel.css">
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li><a href="home.html">Home</a></li>
      			<li><a href="booking.php">Booking</a></li>
     			<li><a href="jadwal.html">Schedule</a></li>
     			<li><a href="informasi.html">Info Doktor</a></li>
     			<li class="active"><a href="cansel.php">Data Bocking</a></li>
     			
     			<li><a href="beranda.html">Exit</a></li>
     			<br><br><br><br>
     				<h1 align="center"><b>Data Booking</b></h1>

     			<table border="1px" >
     				<br><br><br><br>
     						 <tr align="center">
			  <th>Nama Lengkap</th>
			  <th>Jenis Kelamin</th>
			  <th>Usia</th>
			  <th>Poli</th>
			  <th>Tanggal</th>
			  </tr>

			   <?php $no = 1 ?>
                  <?php foreach ($list as $row) : ?> =sintax perulangan php untuk memunculkan data database satu per satu
                     <tr>
                        <td> <?php echo $row["nama"]; ?> </td> =sintax menampilkan nama
                        <td><?php echo $row["kelamin"]; ?></td> =sintax menampilkan kelamin
                        <td> <?php echo $row["usia"]; ?> </td> =sintax untuk menampilkan usia
                        <td><?php echo $row["poli"]; ?></td> =sintax untuk menampilkan poli
                          <td> <?php $tanggal = $row["tanggal"]; ?> =sintax untuk menampilkan tanggal
                           <?php echo date("l, j F Y", strtotime($tanggal)); ?> </td>
                      
                     </tr>
                     <?php $no++ ?>
                  <?php endforeach; ?>
			</table>

			 
     			</ul>
     			</div>
     		
	</header>
</body>
</html>