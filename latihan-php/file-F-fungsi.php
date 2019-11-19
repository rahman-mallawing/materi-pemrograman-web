<html>
	<head>
		<title>File F - Looping FOREACH FUNGSI</title>
	</head>
	<body>

		<?php 

			function cetakData($koleksi){
				echo "<br />";

				foreach ($koleksi as $data) {
				    echo "$data :: ";
				}
			}

			$kelipatan_3 = array(3, 6, 9, 12, 15, 18);

			$pulau_pulau = ["Sulawesi", "Jawa", "Kalimantan", "Sumatera", "Bali", "Papua"];

			cetakData($kelipatan_3);

			cetakData($pulau_pulau);

		?>

	</body>
</html>