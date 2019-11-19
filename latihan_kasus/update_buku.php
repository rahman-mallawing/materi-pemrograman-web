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

	$query = 'SELECT * FROM tbuku  WHERE  isbn=:isbn LIMIT 1;';
	$data;
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare($query);
	    $stmt->bindParam(':isbn', $isbn);

	    $stmt->execute();
	    $data = $stmt->fetch();

	}
	catch(PDOException $e)
	{
	    echo "Gagal baca data: " . $e->getMessage();
	}

?>
<?php  ?>
<html>
	<head>
		<title>Form Edit</title>
	</head>
	<body>
		<h2>HTML Forms</h2>
		<form action="aksi_update_buku.php" method="post" enctype="multipart/form-data">
		  <input type="text" name="isbn_old" value="<?php echo $data['isbn']; ?>" hidden >
		  ISBN:<br>
		  <input type="text" name="isbn" value="<?php echo $data['isbn']; ?>" >
		  <br>
		  Cover:<br>
		  <input type="file" name="gambar" >
		  <br>
		  Judul:<br>
		  <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
		  <br>
		  Deskripsi:<br>
		  <textarea rows="4" cols="50" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>
		  <br><br>
		  <input type="submit" value="Update">
		</form> 
	</body>
</html>