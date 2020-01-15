<?php
if(isset($_GET['id_projek'])){
	include('koneksi.php');
	$id_projek=$_GET['id_projek'];
	$id_projek = isset($_REQUEST['id_projek']) ? $_REQUEST['id_projek'] : '';
if ($id_projek <> '') {
    echo 'data dengan id_projek = '.$id_projek.' berhasil dihapus';
}
	$cek=mysqli_query($koneksi,"SELECT id_projek FROM tb_proyek where id_projek='$id_projek'")or die(mysql_error());
	if(mysqli_num_rows($cek)==0){
	  	echo'<script>window.history.back()</script>'; 
	 }else{
		$del=mysqli_query($koneksi,"DELETE FROM tb_proyek WHERE id_projek='$id_projek'");
		if($del){
	  			header("location:Proyekjalan.php"); 
		}else{
	  		header("location:Proyekjalan.php");
	  	}
	 }
}else{
	 echo'<script>window.history.back()</script>';
}
?>