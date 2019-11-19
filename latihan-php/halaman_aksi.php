<?php
	echo "<h2>Halaman Aksi</h2>";
	if(isset($_POST["nim"])){
		$nim = $_POST["nim"];
		echo "NIM  : $nim";
	}else{
		echo "Data NIM tidak ditemukan!";
	}

	echo "<br />";

	if(isset($_POST["nama"])){
		$nama = $_POST["nama"];
		echo "Nama : $nama";
	}else{
		echo "Data Nama tidak ditemukan!";
	}
?>