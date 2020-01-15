<?php
	require ("koneksi.php"); //untuk koneksi ke database untuk menambahkan data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi
	$ket = $_POST['ket'];
	
	
	//untuk membuat query menambahkan data kedalam  tabel siswa
	$query = "INSERT INTO status (ket) VALUES ('$ket')";

	$result = mysqli_query($koneksi, $query); //digunakan untuk menjalankan query insert
	header("location:status.php");//apbila data  berhasil ditambhkan maka langsung menuju halaman pendaftar.php

?>