<?php
include 'koneksi.php';

//cek apakah tombol simpan sudah diklik atau tidak

	//ambil data dari formulir
	$id_projek=$_POST['Mandor'];
	$uraian=$_POST['uraian'];
	$volume=$_POST['volume'];
	$luas=$_POST['luas'];
	$harga_satuan=$_POST['harga_satuan'];
	$harga_total=$_POST['harga_total'];

	$total = $luas * $harga_satuan * $volume;
	//$hasil = ($total,1);
	$a="insert into tb_jmlbiaya (id_jmlbiaya,id_projek,uraian,volume,luas,harga_satuan,harga_total) values ('','$id_projek','$uraian','$volume','$luas','$harga_satuan','$total')";
	$input=mysqli_query($koneksi,$a);
	//echo $a;
	header("location:RAB.php");
?>