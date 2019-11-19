<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "latihan_db";

	$query = 'SELECT * FROM tmahasiswa';

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $data = $conn->query($query);
		while ($row = $data->fetch())
		{
			echo "NIM:  " . $row['nim'] . "<br />";
		    echo "Nama: " . $row['nama'] . "<br />";
		}

	}
	catch(PDOException $e)
	{
	    echo "Gagal terhubung: " . $e->getMessage();
	}

?>