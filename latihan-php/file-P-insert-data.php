<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "latihan_db";

	$query = 'INSERT INTO tmahasiswa (nim, nama) VALUES (:nim, :nama);';
	$nim = "2001238876";
    $nama = "Hakim Usri";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare($query);
	    $stmt->bindParam(':nim', $nim);
	    $stmt->bindParam(':nama', $nama);
	    $stmt->execute();
	    echo "Data berhasil ditambahkan!"; 

	}
	catch(PDOException $e)
	{
	    echo "Gagal terhubung: " . $e->getMessage();
	}

?>