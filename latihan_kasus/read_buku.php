<?php
	include("config_db.php");
	$query = 'SELECT * FROM tbuku';
	try {
		echo "<br /> <br />";
		 echo "Klik untuk tambah data ";
		 echo "<a href='create_buku.php'>create_buku.php</a>";
		 echo "<br /> <br /> <br />";
	    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $data = $conn->query($query);
		while ($row = $data->fetch()){
			echo str_pad("ISBN:", 8, ' ', STR_PAD_RIGHT);
			echo str_pad($row['isbn'], 25, '_', STR_PAD_BOTH);
			echo "   ||  ";

			echo str_pad("judul:", 8, ' ', STR_PAD_RIGHT);
			echo str_pad($row['judul'], 70, "_", STR_PAD_BOTH);
			echo "   ||  ";

		    echo "<a href='show_buku.php?isbn=" . $row["isbn"] . "'>show buku</a>" . "   ||  ";
		    echo "<a href='update_buku.php?isbn=" . $row["isbn"] . "'>edit buku</a>" . "   ||  ";
		    $confirm = "onclick=\"return confirm('Apakah anda yakin hapus?');\"";
		    echo "<a href='delete_buku.php?isbn=" . $row["isbn"] . "' " . $confirm . " >delete buku</a>" . "   ||  ";
		    echo "<br />";
		}
	}
	catch(PDOException $e)
	{
	    echo "Gagal terhubung: " . $e->getMessage();
	}
?>