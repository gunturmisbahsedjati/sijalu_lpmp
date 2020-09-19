<?php
include 'inc.koneksi.php';
$username = $_POST['username'];
//$sql = "select * from member where user_manajemen=$username";
//$hasil = mysql_query($sql);
$num = mysql_query("SELECT * FROM akun_manajemen WHERE user_manajemen='$username'");
$akun = mysql_fetch_array($num);

session_start();
//$_SESSION['nama_pengguna']		= $akun['nama_pengguna'];
$_SESSION['username'] = $akun['user_manajemen'];
$_SESSION['id'] = $akun['id_manajemen'];
$_SESSION['level'] = $akun['level_manajemen'];
$_SESSION['jabatan'] = $akun['jabatan_manajemen'];
//$_SESSION['kode_akun']		= $akun['kode_akun'];
//$_SESSION['user_uuid']		= $akun['user_uuid'];

//echo $akun['email'];
?>