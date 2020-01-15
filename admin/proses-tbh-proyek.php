<?php
	require ("koneksi.php"); //untuk koneksi ke database untuk menambahkan data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi
	$nama_proyek = $_POST['nama_proyek'];
	$nama_mandor = $_POST['nama_mandor'];
	

	//untuk membuat query menambahkan data kedalam  tabel siswa
	$query = "INSERT INTO tb_proyek (nama_proyek, nama_mandor) VALUES ('$nama_proyek', '$nama_mandor')";

	$result = mysqli_query($koneksi, $query); //digunakan untuk menjalankan query insert
	header("location:Proyekjalan.php");//apbila data  berhasil ditambhkan maka langsung menuju halaman pendaftar.php

?>