<?php
include 'koneksi.php';

//cek apakah tombol simpan sudah diklik atau tidak

	//ambil data dari formulir
	$id_projek=$_POST['id_projek'];
	$uraian=$_POST['uraian'];
	$volume=$_POST['volume'];
	$luas=$_POST['luas'];
	$harga_satuan=$_POST['harga_satuan'];
	$harga_total=$_POST['harga_total'];

	$a="insert into tb_jmlbiaya values ('','$id_projek','$uraian','$volume','$luas','$harga_satuan','$harga_total')";
	$input=mysqli_query($koneksi,$a);
	echo $input;
	header("location:RAB.php");
?>