<?php
session_start();
require ("admin/koneksi.php");
$error = '';
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = 'Username and Password Invalid!';
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($koneksi, $username);
            $password = mysqli_real_escape_string($koneksi, $password);

            $sql = "SELECT * FROM tb_login WHERE username='$username' and password='$password'";
            $query = mysqli_query($koneksi, $sql);
            $count= mysqli_num_rows($query);
            if ($count==1) {
                $cek = mysqli_fetch_array($query);
                $_SESSION['USERNAME'] = $cek['username'];
                $_SESSION['LEVEL'] = $cek['level'];

                if($cek['level']=="admin"){
                    header("location:admin/index.php");
                }
                elseif($cek['level']=="user"){
                    header("location:dashboard.php");
                }
                else{
                    die("error");
                }
            } else {
                ?>
                <script language="JavaScript">
                        alert('Username atau Password Salah !');
                        setTimeout(function() {window.location.href='index.php'},10);
                    </script>
                <?php
            }
        }
    }

 ?>
