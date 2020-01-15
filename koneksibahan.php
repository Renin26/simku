<?php
include 'koneksi.php';

//cek apakah tombol simpan sudah diklik atau tidak

	//ambil data dari formulir
	$id_projek=$_POST['mandor'];
	$nama_bahan=$_POST['nama_bahan'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$harga_satuan=$_POST['harga_satuan'];
	$harga_total=$_POST['harga_total'];

	//$total = $jumlah * $harga_satuan;
	$a="insert into tb_bahan (nama_bahan, jumlah, satuan, harga_satuan, harga_total, id_projek) values ('$nama_bahan','$jumlah','$satuan','$harga_satuan','$harga_total','$id_projek')";
	$input=mysqli_query($koneksi,$a);
	//echo $a;
	header("location:RAB.php");
?>