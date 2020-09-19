<?php
require 'inc.koneksi.php';



$username = $_POST['username'];
$password = $_POST['password'];
// $enc =md5($password);
$string1="cassie";
$string2="violeta";
$md5_string1=md5($string1);
$md5_string2=md5($string2);
$text1=substr($md5_string1, 0,4);
$text2=substr($md5_string2, 0,4);
$enc=base64_encode(base64_encode($text1.$password.$text2));
//$sql = "select * from akun_manajemen where user_manajemen=$username and pass_manajemen=$password";
//$hasil = mysql_query($sql);
$num = mysql_num_rows(mysql_query("SELECT * FROM akun_manajemen WHERE user_manajemen='$username' and pass_manajemen='$enc' and status_manajemen = 'aktif' "));
if ($num > 0){
	echo 1;
} else {
	echo 0;
}?>