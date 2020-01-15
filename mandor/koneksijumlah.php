<?php
include 'koneksi.php';

//cek apakah tombol simpan sudah diklik atau tidak

	//ambil data dari formulir
	$id_projek=$_POST['id_projek'];
	$uraian=$_POST['uraian'];
	$volume=$_POST['volume'];
	$luas=$_POST['luas'];
	$harga_satuan=$_POST['harga_satuan'];

	$total = $luas * $harga_satuan * $volume;
	$hasil = number_format($total,1);
	$a="insert into tb_jmlbiaya values ('','$id_projek','$uraian','$volume','$luas','$harga_satuan','$total')";
	$input=mysqli_query($koneksi,$a);
	echo $input;
	header("location:RAB.php");
?>