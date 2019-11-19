<html>
	<head>
		<title>File D - Looping WHILE</title>
	</head>
	<body>

		<?php 

			$kelipatan_3 = array(3, 6, 9, 12, 15, 18);

			$arrObject1 = new ArrayObject($kelipatan_3);
	        $arrayIterator1 = $arrObject1->getIterator();

	        while( $arrayIterator1->valid() )
	        {
	            $angka = $arrayIterator1->current();
	            echo "$angka | ";
	            $arrayIterator1->next();
	        }

			echo "<br />";

			$pulau_pulau = ["Sulawesi", "Jawa", "Kalimantan", "Sumatera", "Bali", "Papua"];			

			$i = 0;
        
	        do {
	            echo "$pulau_pulau[$i] :: ";
	            $i++;
	        }
	        while ($i < count($pulau_pulau));	

		?>

	</body>
</html>