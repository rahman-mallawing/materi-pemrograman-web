<?php
	//error_reporting(0);
	
	echo "<h2>Halaman Aksi CREATE Buku</h2>";
	// deklarasikan variabel data
	$isbn; $judul; $deskripsi;

	// periksa input ISBN 
	if(isset($_POST["isbn"])){
		$isbn = $_POST["isbn"];
	}else{
		die("Gagal proses ISBN kosong!<br />");
	}
	// periksa input JUDUL 
	if(isset($_POST["judul"])){
		$judul = $_POST["judul"];
	}else{
		die("Gagal proses JUDUL kosong!<br />");
	}
	// periksa input DESKRIPSI 
	if(isset($_POST["deskripsi"])){
		$deskripsi = $_POST["deskripsi"];
	}else{
		die("Gagal proses DESKRIPSI kosong!<br />");
	}

	// periksa input ISBN tidak boleh kosong
	if($isbn == ""){
		die("ISBN tidak boleh kosong!<br />");
	}

	// periksa input ISBN tidak boleh kosong
	if($judul == ""){
		die("JUDUL tidak boleh kosong!<br />");
	}

	// periksa input ISBN tidak boleh kosong
	if($deskripsi == ""){
		die("DESKRIPSI tidak boleh kosong!<br />");
	}

	/* 
		Selanjutnya proses menyimpan dimulai
	 	proses sismpan dilakukan dgn menggunakan 
	 	fungsi insert_buku yang mengembalikan true jika berhasil
	*/

	 if(insert_buku($isbn, $judul, $deskripsi, $pesan_error)){
	 	// jika berhasil simpan kita juga akan menyimpan gambarnya
	 	// proses simpan gambar juga dilakukan dalam fungsi
	 	echo "Data berhasil ditambahkan!<br />";
	 	if(simpan_gambar($info, $link)){
	 		echo "Gambar berhasil disimpan: $link";
	 		echo "<br /> <br /> <br />";
	 		echo "Klik untuk kembali ke halaman ";
	 		echo "<a href='read_buku.php'>read_buku.php</a>";
	 	}else{
	 		echo "Gagal simpan gambar: $info";
	 	}
	 }else{
	 	// jika gagal simpan
	 	die($pesan_error . "<br />");
	 }

	 // fungsi untuk menyimpan gambar
	 function simpan_gambar(&$info_error, &$link_gambar){

	 	// periksa jika file ada
		if($_FILES['gambar']['name'] == "") {
			$info_error = "Tidak ada file yang diupload";
		    return false;
		}

	 	// Asumsi file gagal diupload
		if ($_FILES['gambar']['error'] !== UPLOAD_ERR_OK) {
			$info_error = "Upload gagal dengan error code: " . $_FILES['gambar']['error'];
		    return false;
		}
		

		$info = getimagesize($_FILES['gambar']['tmp_name']);
		if ($info === FALSE) {
		   	$info_error = "Tidak bisa membaca jenis file";
		    return false;
		}

		if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) 
			&& ($info[2] !== IMAGETYPE_PNG)) {
			$info_error = "Bukan file gambar gif/jpeg/png";
		    return false;
		}

		// ambil data file
		$namaFile = $_POST['isbn'];
		$namaSementara = $_FILES['gambar']['tmp_name'];

		// Check file size
		if ($_FILES["gambar"]["size"] > 500000) {
		    $info_error = "File terlalu besar";
		    return false;
		}

		// tentukan folder penyimpanan
		$dirUpload = "gambar/";

		// pindahkan file ke folder gambar
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

		if ($terupload) {
			$link_gambar = "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
		    return true;
		} else {
		    $info_error = "Gagal move_uploaded_file";
		    return false;
		}
	 }

	 // fungsi untuk menambah data buku
	function insert_buku($isbn, $judul, $deskripsi, &$info_error){
		include("config_db.php");
		$query = 'INSERT INTO tbuku (isbn, judul, deskripsi) 
					VALUES (:isbn, :judul, :deskripsi);';

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		    $stmt = $conn->prepare($query);
		    $stmt->bindParam(':isbn', $isbn);
		    $stmt->bindParam(':judul', $judul);
		    $stmt->bindParam(':deskripsi', $deskripsi);
		    $stmt->execute();
		    return true;
		}
		catch(PDOException $e)
		{
			// jika terjadi error maka kita set error info
			$info_error = "Gagal tambah data: " . $e->getMessage();
			return false;
		}
	}


?>