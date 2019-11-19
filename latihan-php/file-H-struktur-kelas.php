<html>
	<head>
		<title>File H - Struktur Kelas</title>
	</head>
	<body>

		<?php 

			include("Mahasiswa.php");

			$data [] = new Mahasiswa("2001001", "Amir");
			$data [] = new Mahasiswa("2001002", "Mahmud");
			$data [] = new Mahasiswa("2001003", "Yanti");

			foreach($data as $mahasiswa){
				echo "NIM   : $mahasiswa->nim <br />";
				echo "Nama  : $mahasiswa->nama <br />";
			}

		?>

	</body>
</html>