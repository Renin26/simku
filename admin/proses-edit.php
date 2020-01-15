
<?php
	include 'koneksi.php'; 
	$id_projek=$_POST['id'];
	$nama_proyek = $_POST['nama_proyek'];
	$nama_mandor = $_POST['nama_mandor'];
	$lokasi = $_POST['lokasi'];
	$luas = $_POST['luas'];
	$tanggal = $_POST['tanggal'];
	
	//query untuk menedit pada tabel siswa
	$query = "UPDATE tb_proyek SET nama_proyek='$nama_proyek', nama_mandor='$nama_mandor', lokasi='$lokasi', luas='$luas', tanggal='$tanggal' WHERE id_projek='$id_projek'";
		
	
	$result = mysqli_query($koneksi, $query);
	header("location:Proyekjalan.php");//apanila data berhasil ditambakan maka halaman langsung menuju ke proyekjalan.php
//echo $query;
?>