<?php
session_start();
require ("koneksi.php"); 

                    $id_projek = $_GET['id_projek'];
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_jmlbiaya where id_projek='$id_projek'"); 
                    while($data = mysqli_fetch_array($query))
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

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Rincian Anggaran Biaya (Jumlah Biaya Pekerjaan)</h6>
            </div>
            <div class="card-body">
				
          <a href="bahan.php?id_projek=<?php echo $data ['id_projek'];?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa-sm text-white-50"></i>Transaksi Bahan Bangunan</a>
				
        </br></br>

          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                      <td>Id Pekerjaan</td>
                      <td>Uraian Pekerjaan</td>
                      <td>Volume (orang)</td>
                      <td>Luas (m2)</td>
                      <td>Harga Satuan (Rp.)</td>
                      <td>Total Harga (Rp.)</td>
                    </tr>

                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_jmlbiaya"); 
                    while($data = mysqli_fetch_array($query)) { 
                    ?>
                    <tr> <!-- untuk menampilakan data dari database ke tabel -->
                      <td><?php echo $data ['id_jmlbiaya'];?></td>
                      <td><?php echo $data ['uraian'];?></td>
                      <td><?php echo $data ['volume'];?></td>
                      <td><?php echo $data ['luas'];?></td>
                      <td><?php echo $data ['harga_satuan'];?></td>
                      <td><?php echo $data ['harga_total'];?></td>
                      
                    </tr>
<?php }?>                    

                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Jumlah Total</td>
                      <td></td>
                    </tr>
                </table>
              </div>
            </div>
          </div>

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
