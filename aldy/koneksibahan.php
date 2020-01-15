<?php
include 'koneksi.php';

//cek apakah tombol simpan sudah diklik atau tidak

	//ambil data dari formulir
	$id_projek=$_POST['id_projek'];
	$nama_bahan=$_POST['nama_bahan'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$harga_satuan=$_POST['harga_satuan'];

	$a="insert into tb_bahan values ('','$nama_bahan','$jumlah','$satuan','$harga_satuan','$id_projek')";
	$input=mysqli_query($koneksi,$a);
	echo $input;
	header("location:RAB.php");
?>