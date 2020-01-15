<?php
session_start();
require ("koneksi.php"); //maka koding dihtml tidak akan dieksekusi bawahnya (memutuskan semuanya) sedangkan include maka akan mengeksekusi file/baris html yang selanjutnya(masih menampilkan)
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MANDOR</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
 <div style="border:0; padding:10px; width:760px; height:auto;">
  <form method="post" action="koneksijumlah.php">
  <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="black" size="4" ><strong</strong></font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Uraian Pekerjaan</td>
            <td><input type="text" name="uraian" size="35"  /></td>
        </tr>
  <tr height="46">
            <td> </td>
            <td>Volume (orang)</td>
            <td><input type="number" name="volume" size="50"  /></td>
        </tr>
  <tr height="46">
            <td> </td>
            <td>Luas (m2)</td>
            <td><input type="number" name="luas" size="50"  /></td>
        </tr>
  <tr height="46">
            <td> </td>
            <td>Harga Satuan (Rp)</td>
            <td><input type="number" name="harga_satuan" size="50"  /></td>
        </tr>
  <tr height="46">
            <td> </td>
            <td>Total Harga (Rp)</td>
            <td><input type="number" name="harga_total" size="50"  /></td>
        </tr>
   <tr height="46">
            <td> </td>
            <td> </td>
            <td><button class="btn btn-primary" name="save">Kirim</button></td>
        </tr>
  </table>
</form>
</div>
</body>



    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang Mandor !!</span>
        <img class="img-profile rounded-circle" src="img/mandor.jpg">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Rincian Anggaran Biaya</h6>
            </div>
            <div class="card-body">

        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Nama Proyek..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-basic" type="button">
                  <i class="fas fa-arrow fa-sm"></i>
                </button>
                <input type="text" class="form-control bg-light border-0 small" placeholder="Tanggal" aria-label="Date" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-basic" type="button">
                  <i class="fas fa-arrow fa-sm"></i>
                </button>
              </div>
            </div>
            </br>
          </form>

          <a href="jmlbiaya.php" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa-sm text-white-50"></i>Jumlah Biaya Pekerjaan</a>&nbsp;
          <a href="bahan.php" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa-sm text-white-50"></i>Transaksi Bahan Bangunan</a>
        </br></br>

          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                      <td>No</td>
                      <td>Uraian Pekerjaan</td>
                      <td>Volume (orang)</td>
                      <td>Luas (m2)</td>
                      <td>Harga Satuan (Rp.)</td>
                      <td>Total Harga (Rp.)</td>
                      <td></td>
                    </tr>

                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_jmlbiaya"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                    while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                    ?>
                    <tr> <!-- untuk menampilakan data dari database ke tabel -->
                      <td><?php echo $data ['id'];?></td>
                      <td><?php echo $data ['uraian'];?></td>
                      <td><?php echo $data ['volume'];?></td>
                      <td><?php echo $data ['luas'];?></td>
                      <td><?php echo $data ['harga_satuan'];?></td>
                      <td><?php echo $data ['harga_total'];?></td>
                      <td><a href="usul.php?id=<?php echo $data['id'];?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Diusulkan</a>|<a href=".php?id=<?php echo $data['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Belum Disetujui</a></td>
                    </tr>
                    <?php } ?>

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
          <a class="btn btn-primary" href="index.php">Keluar</a>
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
