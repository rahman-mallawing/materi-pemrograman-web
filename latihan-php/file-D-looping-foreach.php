<html>
	<head>
		<title>File D - Looping FOREACH</title>
	</head>
	<body>

		<?php 

			$kelipatan_3 = array(3, 6, 9, 12, 15, 18);

			foreach ($kelipatan_3 as $angka) {
			    echo "$angka | ";
			}

			$pulau_pulau = ["Sulawesi", "Jawa", "Kalimantan", "Sumatera", "Bali", "Papua"];

			echo "<br />";

			foreach ($pulau_pulau as $pulau) {
			    echo "$pulau :: ";
			}

		?>

	</body>
</html>