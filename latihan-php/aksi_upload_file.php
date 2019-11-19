<?php

	// Asumsi file gagal diupload
	if ($_FILES['berkas']['error'] !== UPLOAD_ERR_OK) {
	   die("Upload gagal dengan error code: " . $_FILES['file']['error']);
	}

	$info = getimagesize($_FILES['berkas']['tmp_name']);
	if ($info === FALSE) {
	   die("Tidak bisa membaca jenis file");
	}

	if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) 
		&& ($info[2] !== IMAGETYPE_PNG)) {
	   die("Bukan file gambar gif/jpeg/png");
	}

	// ambil data file
	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];

	// Check file size
	if ($_FILES["berkas"]["size"] > 500000) {
	    die( "File terlalu besar." );
	}

	// tentukan folder penyimpanan
	$dirUpload = "gambar/";

	// pindahkan file ke folder gambar
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	if ($terupload) {
	    echo "Upload berhasil!<br/>";
	    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	} else {
	    echo "Upload Gagal!";
	}


?>