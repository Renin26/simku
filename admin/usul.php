<?php
session_start();
require ("koneksi.php"); 
$id_projek= $_GET['id_projek'];
  $query = mysqli_query($koneksi, "SELECT * FROM tb_jmlbiaya WHERE id_projek='$id_projek'"); 
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
        
        <div class="card shadow mb-2">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Jumlah Diusulkan</h6>
            </div>
            <div class="card-body">
        <div class="container-fluid">
            <form action="proses-daftar.php" method="post">
              <input type="hidden" name="id" value="<?php echo $data['id_projek'];?>">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Uraian Pekerjaan</label>
                  <div class="col-sm-6">
                    <input type="text" name="uraian" class="form-control" value="<?php echo $data ['uraian'];?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Volume (orang)</label>
                  <div class="col-sm-6">
                    <input type="text" name="volume" class="form-control" value="<?php echo $data ['volume'];?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Luas (m2)</label>
                  <div class="col-sm-6">
                    <input type="text" name="lokasi_proyek" class="form-control" value="<?php echo $data ['luas'];?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Satuan (Rp.)</label>
                  <div class="col-sm-6">
                    <input type="text" name="luas_proyek" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Total Harga (Rp.)</label>
                  <div class="col-sm-6">
                    <input type="text" name="tgl_dimulai" class="form-control" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">&nbsp;</label>
                  <div class="col-sm-2">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                  </div>
                  <a href="jmlbiaya.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa-sm text-white-50"></i>KEMBALI</a>

                </div>
                
                
              </form>

        </div>
        <!-- /.container-fluid -->

      </div>
    </div>
  </div>
</div>
</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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
