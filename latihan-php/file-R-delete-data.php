<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "latihan_db";

	$query = 'DELETE FROM tmahasiswa WHERE  nim=:nim;';
	$nim = "2001238876";
    $nama = "Hakim Usri"; 

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare($query);
	    $stmt->bindParam(':nim', $nim);
	    $stmt->execute();
	    echo "Data berhasil dihapus!"; 

	}
	catch(PDOException $e)
	{
	    echo "Gagal terhubung: " . $e->getMessage();
	}

?>