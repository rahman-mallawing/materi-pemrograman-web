<?php 

	class Buku{
		public $isbn;
		public $judul;
		public $deskripsi;

		public function __construct($isbn, $judul, $deskripsi){
			$this->isbn = $isbn;
			$this->judul = $judul;
			$this->deskripsi = $deskripsi;
		}

	}

?>