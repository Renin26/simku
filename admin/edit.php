<?php
session_start();
include ("koneksi.php"); 
  $id_projek = $_GET['id_projek'];
  $query = mysqli_query($koneksi, "SELECT * FROM tb_proyek WHERE id_projek='$id_projek'"); 
  $no=1; 
  while ($data = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <?php
    include "sidebaradmin.php";
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        include "topnavbar.php";
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <form action="proses-edit.php" method="post">
              <input type="hidden" name="id" value="<?php echo $data['id_projek'];?>">
                <div class="form-group row">
					
					<label class="col-sm-2 col-form-label">Nama Proyek</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_proyek" value="<?php echo $data['nama_proyek']?>" class="form-control" size="4" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Mandor</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_mandor" value="<?php echo $data['nama_mandor']?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Lokasi Proyek</label>
                  <div class="col-sm-10">
                    <input type="text" name="lokasi" value="<?php echo $data['lokasi']?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Luas Proyek</label>
                  <div class="col-sm-10">
                    <input type="text" name="luas" value="<?php echo $data['luas']?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Dimulai</label>
                  <div class="col-sm-10">
                    <input type="text" name="tanggal" value="<?php echo $data['tanggal']?>" class="form-control" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">&nbsp;</label>
                  <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">&nbsp;<a class="btn btn-primary" href="Proyekjalan.php">Batal</a>
                  </div>
                </div>
              </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>HEDON@2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih tombol keluar untuk meninggalkan halaman.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="logout.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
 <?php
include "js.php";
?>
<?php } ?>
</body>

</html>
