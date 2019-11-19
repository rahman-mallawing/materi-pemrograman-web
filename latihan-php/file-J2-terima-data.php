<?php
	echo "<html>";
	echo "	<head>";
	echo "		<title>File J - Halaman Terima Data</title>";
	echo "	</head>";
	echo "	<body>";
	echo "		<h2>INFO KIRIMAN DATA dari: file-J1-kirim-data.php</h2>";
			
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
			
	echo "	</body>";
	echo "</html>";

?>