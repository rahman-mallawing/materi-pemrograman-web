<?php

	// baca parameter isbn yg dikirm di url
	$isbn = "";
	if(isset($_GET["isbn"])){
		$isbn = $_GET["isbn"];
	}

	// Jika isbn kosong maka keluar
	if($isbn==""){
		die("Kode ISBN kosong");
	}

	include("config_db.php");

	$query = 'DELETE FROM tbuku  WHERE  isbn=:isbn LIMIT 1;';

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare($query);
	    $stmt->bindParam(':isbn', $isbn);
	    $stmt->execute();
	    echo "Data dengan ISBN: ".$isbn." berhasil dihapus! <br />";

	    echo "<br /> <br /> <br />";
	 	echo "Klik untuk kembali ke halaman ";
	 	echo "<a href='read_buku.php'>read_buku.php</a>";

	}
	catch(PDOException $e)
	{
	    echo "Gagal baca data: " . $e->getMessage();
	}

?>