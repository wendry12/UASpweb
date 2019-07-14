<?php 

	$konek = mysqli_connect("localhost","root", "","jadi");

	function query ( $query ){
		 global $konek;
  $result = mysqli_query($konek, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
	}

	function tambah($data)
{
  global $konek;
  $nama = htmlspecialchars($data["nama"]);
  $kelamin = htmlspecialchars($data["kelamin"]);
  $usia = htmlspecialchars($data["usia"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $poli = htmlspecialchars($data["poli"]);
  $tanggal = htmlspecialchars($data["tanggal"]);
  // $proses = htmlspecialchars($data["proses"]);

  // query insert data
  $query = "INSERT INTO baru
    VALUES
    ('','$nama','$kelamin','$usia','$alamat','$poli','$tanggal')";

  mysqli_query($konek, $query);
  return mysqli_affected_rows($konek);
}

 ?>