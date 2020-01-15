<?php
error_reporting(0);
include "admin/koneksi.php";
session_start();

$user_check = $_SESSION['USERNAME'];

$sql = "SELECT * FROM tb_login WHERE username='$user_check'";
$ses_sql = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['id_login'];
$level = $row['level'];
$pass = $row['PASSWORD'];
 ?>
