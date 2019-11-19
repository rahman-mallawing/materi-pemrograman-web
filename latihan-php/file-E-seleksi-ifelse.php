<html>
	<head>
		<title>File E - SELEKSI</title>
	</head>
	<body>

		<?php 

			$kelipatan_3 = array(3, 6, 9, 12, 15, 18);

			$arrObject1 = new ArrayObject($kelipatan_3);
	        $arrayIterator1 = $arrObject1->getIterator();

	        while( $arrayIterator1->valid() )
	        {
	            $angka = $arrayIterator1->current();
	            if($angka%2==0){
	            	echo "$angka | GENAP | <br />";
	        	}else{
	        		echo "$angka | GANJIL | <br />";	
	        	}
	            
	            $arrayIterator1->next();
	        }

			
		?>

	</body>
</html>