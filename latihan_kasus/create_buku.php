<html>
	<head>
		<title>Create - Form Input</title>
	</head>
	<body>

		<h2>HTML Forms</h2>

		<form action="aksi_create_buku.php" method="post" enctype="multipart/form-data">
		  ISBN:<br>
		  <input type="text" name="isbn" >
		  <br>
		  Cover:<br>
		  <input type="file" name="gambar" >
		  <br>
		  Judul:<br>
		  <input type="text" name="judul" >
		  <br>
		  Deskripsi:<br>
		  <textarea rows="4" cols="50" name="deskripsi"></textarea>
		  <br><br>
		  <input type="submit" value="Simpan">
		</form> 
	</body>
</html>