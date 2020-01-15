<?php
session_start();
require ("koneksi.php"); //maka koding dihtml tidak akan dieksekusi bawahnya (memutuskan semuanya) sedangkan include maka akan mengeksekusi file/baris html yang selanjutnya(masih menampilkan)
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
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Uraian Pekerjaan</label>
                  <div class="col-sm-6">
                    <input type="text<?php echo $data ['uraian'];?>" name="nama_proyek" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Volume</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_mandor" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Luas</label>
                  <div class="col-sm-6">
                    <input type="text" name="lokasi_proyek" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga satuan</label>
                  <div class="col-sm-6">
                    <input type="text" name="luas_proyek" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Total</label>
                  <div class="col-sm-6">
                    <input type="text" name="tgl_dimulai" class="form-control" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">&nbsp;</label>
                  <div class="col-sm-6">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                  </div>
                </div>
          <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_jmlbiaya"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
            while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
          ?>        
        </form>

        </div>
      <!-- End of Main Content -->

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
</div>
</div>
</div>
</div>
</div>

</body>
</html>