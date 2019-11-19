<?php
	echo "<h2>Halaman Aksi</h2>";
	if(isset($_GET["nim"])){
		$nim = $_GET["nim"];
		echo "NIM  : $nim";
	}else{
		echo "Data NIM tidak ditemukan!";
	}

	echo "<br />";

	if(isset($_GET["nama"])){
		$nama = $_GET["nama"];
		echo "Nama : $nama";
	}else{
		echo "Data Nama tidak ditemukan!";
	}
?>