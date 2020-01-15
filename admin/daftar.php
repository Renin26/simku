<?php
session_start();
require ("koneksi.php"); 
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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Proyek</h6>
            </div>
            <div class="card-body">
        <div class="container-fluid">
            <form action="proses-daftar.php" method="post">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">ID Proyek</label>
                  <div class="col-sm-4">
                    <input type="text" name="id_projek" class="form-control" required>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Proyek</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_proyek" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Mandor</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_mandor" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Lokasi Proyek</label>
                  <div class="col-sm-6">
                    <input type="text" name="lokasi" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Luas Proyek</label>
                  <div class="col-sm-4">
                    <input type="text" name="luas" class="form-control" required >
                  </div>
					<label>m<sup>2</sup></label>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Dimulai</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tanggal" required>
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

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">&nbsp;</label>
                  <div class="col-sm-6">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">&nbsp;<a class="btn btn-primary" href="Proyekjalan.php">Kembali</a>
                  </div>
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

</body>

</html>
