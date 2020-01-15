<html>

<head>
	<title>Mandor</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		.simpan
		{
			margin-left:93.5%;
		}
		@media(min-width:300px) {
			.simpan
			{
			margin-left: 83%;	
			}
		}
		@media(min-width:768px) {
			.simpan
			{
			margin-left: 93.5%;	
			}
		}
	</style>
</head>
	
<body>
<?php
include("proses-login.php");
$username = $_SESSION['USERNAME'];
?>

<div class="container">
   <div class="panel panel-primary">
      <div class="panel-heading">Form Unggah Pengerjaan</div>
      <div class="panel-body">
		  <div class="row">
         <form method="post" enctype="multipart/form-data">
			 
		 
            <div class="col-md-12">
               <div class="form-group">
		<label>Nama Mandor</label>
		<input type="text" class="form-control" name="nama_mandor" value="<?php echo $username; ?>"> 
			   </div>
            </div>
            
			 <div class="col-md-12">
               <div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
		 	   </div>
         	</div>
         
         
		 
            <div class="col-md-12">
        <div class="form-group">
		<label>Waktu</label>
		<input type="date" class="form-control" name="waktu">
<script>
    var today = new DateTime();
    $("#datetime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        autoclose: true,
        todayBtn: true,
        startDate : today
    });
		</script>
		</div>
        </div>
            
			 <div class="col-md-12">
               <div class="form-group">
			<label>Pilih Proyek</label>
				<select name="proyek">
					<?php
				include 'koneksi.php';
				$query=mysqli_query($koneksi,"SELECT id_projek,nama_proyek FROM tb_proyek");
					while ($list = mysqli_fetch_array($query)) {?>
						<option value="<?php echo $list['id_projek'];?>"> <?php echo $list['nama_proyek'];?></option>
					<?php }?>
  			</select>
			   </div>
            </div>
			 
			  <div class='col-md-12'>
               <div class="form-group">
		<label>Keterangan</label>
		<textarea class="form-control" name="ket" rows="10"></textarea>
			   </div>
              </div>
			  
			  <div class='col-md-12' >  
				  <button class="btn btn-primary simpan" name="save">Simpan</button>
			 </div>
		</form>
			  <?php
if (isset($_POST['save']))
{
	include("koneksi.php");
	$foto = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "images/".$foto);
	 $waktu = new DateTime();
	$nama  = $_POST['nama_mandor'];
	$waktu = $_POST['waktu'];
	$ket = $_POST['ket'];
	 //echo $waktu->format('yyyy-mm-dd hh:ii');
	$d = $_POST['proyek'];
	
	$insert = "INSERT INTO tb_proses(id_proses,nama_mandor,foto,waktu,ket,id_proyek) VALUES('','$nama','$foto','$waktu','$ket','$d')";
    $query = mysqli_query ($koneksi,$insert);
	if ($query){
		echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=pengerjaan.php?halaman=pengerjaan'>";
	} else {
		echo $insert;
	}
	
}
?>
			 </div>
			 
				  
			  </div>
         	</div>
      </div>
	</body>
</html>