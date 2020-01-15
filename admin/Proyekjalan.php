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
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="daftar.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-address-card fa-sm text-white-50"></i> Tambah Data</a>
          </div>
           
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Proyek</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr bgcolor="#f7f7f7" align="center">
                      <td>No</td>
                      <td>Nama Proyek</td>
                      <td>Nama Mandor</td>
                      <td>R A B</td>
                      <td>Tindakan</td>
                    </tr>
                    <?php
                    $i=1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_proyek"); 
                    while($data = mysqli_fetch_array($query)) { 
                    
                    echo '<tr align="center"> 
                      <td>'.$i.'</td>
                      <td>'.$data ['nama_proyek'].'</td>
                      <td>'.$data ['nama_mandor'].'</td>
                      <td> <a href="jmlbiaya.php?id_projek='.$data['id_projek'].'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-sm text-white-50"></i>Rincian</a></td>
					  
                      <td><a href="edit.php?id_projek='.$data['id_projek'].'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i></a>
					  |
					  <a href="hapus.php?id_projek='.$data['id_projek'].'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick=”return confirm(‘Yakin Hapus?’)”><i class="fas fa-trash fa-sm text-white-50"></i></a>
                    </tr>';
                    $i++;
                    } ?>                        
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="HEDON text-center my-auto">
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
