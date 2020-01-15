<?php
session_start();
	require ("koneksi.php");
	
	$username = $_SESSION['USERNAME'];
	$sql = "Select * from tb_login where username='$username'";
	$sql1 = mysqli_query($koneksi,$sql);
	$sql2 = mysqli_fetch_array($sql1);
	$sql3 = $sql2['id_login'];

	$id_projek = $_POST['id_projek'];
	$nama_proyek = $_POST['nama_proyek'];
	$nama_mandor = $_POST['nama_mandor'];
	$lokasi = $_POST['lokasi'];
	$luas = $_POST['luas'];
	$tanggal = $_POST['tanggal'];

	//untuk membuat query menambahkan data kedalam  tabel siswa
	$query = "INSERT INTO tb_proyek (id_projek, nama_proyek, nama_mandor, lokasi, luas, tanggal, id_login) VALUES ('$id_projek','$nama_proyek', '$nama_mandor', '$lokasi', '$luas', '$tanggal', '$sql3')";

	$result = mysqli_query($koneksi, $query); //digunakan untuk menjalankan query insert
	//echo $query;
	header("location:Proyekjalan.php");//apbila data  berhasil ditambhkan maka langsung menuju halaman pendaftar.php

?>