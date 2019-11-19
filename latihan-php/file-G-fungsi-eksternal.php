<html>
	<head>
		<title>File G - Include File Eksternal</title>
	</head>
	<body>

		<?php 

			include("fungsi-eksternal.php");

			$kelipatan_3 = array(3, 6, 9, 12, 15, 18);

			$pulau_pulau = ["Sulawesi", "Jawa", "Kalimantan", "Sumatera", "Bali", "Papua"];

			cetakData($kelipatan_3);

			cetakData($pulau_pulau);

		?>

	</body>
</html>