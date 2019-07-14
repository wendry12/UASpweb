<?php 

  require 'dat.php';

  $konek = mysqli_connect("localhost", "root", "", "jadi");
    if(isset($_POST["submit"])){
      if (tambah($_POST)>0) {
        echo "
        <script>
          alert('Data Berhasil Dikirim')
          </script>
        ";
      }
      else{
        echo "

        <script>
          alert('Data Gagal')
          </script>
        ";
      }
    }


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>MEDICAL CENTER</title>
	<link rel="stylesheet" type="text/css" href="boking.css">
</head>
<body>
	<header>
		<div class="main">
			<ul>
		        <li><a href="home.html">Home</a></li>
      			<li class="active"><a href="booking.html">Booking</a></li>
     			<li><a href="jadwal.html">Schedule</a></li>
     			<li><a href="informasi.html">Info Doktor</a></li>
     			<li><a href="cansel.php">Cancel Booking</a></li>
     			
     			<li><a href="beranda.html">Log-Out</a></li>
			</ul>
		</div>
		<div class="title">
		</div>
		<div class="button">
		<form action="" method="POST" class="posisi">
          <legend align="center"><h1>FORM BOOKING</h1></legend>
          <table align="center" style="width: 1300px; height: 500px; background: rgb(2,2,2,0.5); text-align: center;" >

          <tr>
               <td><font size="50px"></td>
          <tr>
          <td>NAMA LENGKAP</td>
              <td>:</td>
              <td><input type="text"placeholder="Nama Lengkap..."size="50" name="nama" id="nama"required oninvalid="this.setCustomValidity('nama tidak boleh kosong')" oninput="setCustomValidity('')" />
               <div style="margin-top: 5px;"></div></td>
          </tr>

          <tr>
              <td>JENIS KELAMIN ( P / L )</td>
              <td>:</td>
              <td><input type="teks" name="kelamin" id="kelamin" placeholder="Jenis kelamin" required oninvalid="this.setCustomValidity('jenis kelamin tidak boleh kosong')" oninput="setCustomValidity('')"></td>
          </tr>
          <tr>
              <td><label for="usia">USIA</label></td>
              <td>:</td>
              <td><input type="text"placeholder="USIA"size="50/" name="usia" id="usia" required oninvalid="this.setCustomValidity('usia tidak boleh kosong')" oninput="setCustomValidity('')">
               <div style="margin-top: 5px"></div></td>

          </tr>

          <tr>
              <td><label for="alamat">ALAMAT</label></td>
              <td>:</td>
              <td><textarea required oninvalid="this.setCustomValidity('alamat tidak boleh kosong')" oninput="setCustomValidity('')" cols="22" rows="3" type="text"placeholder="Masukkan Alamat Lengkap..."size=50 name="alamat" id="alamat" /></textarea></td>

          </tr>

          <tr>
              <td><label for="poli">POLI TUJUAN</label></td>
              <td>:</td>
              <td><select name="poli">
                <option value="umum">Umum</option>
                <option value="anak">Anak</option>
                <option value="gigi">Gigi</option>
                <option value="bedahdalam&tulang">Bedah Dalam & Tulang</option>
                <option value="syarat&mata">Syaraf & Mata</option>
                <option value="konsultasigizi">Konsultasi Gizi</option>
                <option value="fisioterapy">Fisioterapy</option>
                </select></td>
          </tr>

           <tr>
              <td><label for="tanggal">TANGGAL KEDATANGAN</label></td>
              <td>:</td>
              <td><input type="Date" name="tanggal" id="tanggal" required oninvalid="this.setCustomValidity('tanggal tidak boleh kosong')" oninput="setCustomValidity('')"></td>
          </tr>
                 
         

       

          <tr>
          <body>
               <td><input type="submit" name="submit" id="submit" placeholder="Submit"></td>
          </tr>
          </table>
</form>
		</div>
		</div>
	</header>

</body>

</html>