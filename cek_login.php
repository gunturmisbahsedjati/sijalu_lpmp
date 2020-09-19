<?php

include "inc/inc.koneksi.php";
include "inc/fungsi_hdt.php";

function encrypt($str) {
	$string1="cassie";
	$string2="violeta";
	$md5_string1=md5($string1);
	$md5_string2=md5($string2);
	$text1=substr($md5_string1, 0,4);
	$text2=substr($md5_string2, 0,4);
	$enc=base64_encode(base64_encode($text1.$str.$text2));
	return $enc;
}

function decrypt($str) {
	$dec1=base64_decode(base64_decode($str));
	$strlen=strlen($dec1);
	$strlenkey=$strlen-8;
	$pass=substr($dec1, 4,$strlenkey);
	return $pass;
}
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$password =mysql_real_escape_string ($_POST['password']);
	#$pass = anti_injection($_POST['password']);
// pastikan username dan password adalah berupa huruf atau angka.

	$login	=mysql_query("SELECT * FROM akun_manajemen WHERE user_manajemen='$email'");
	$ketemu	=mysql_num_rows($login);
	if ($ketemu>0){
		$r		=mysql_fetch_array($login);
		$pwd	=$r['pass_manajemen'];
		if ($pwd==encrypt($password)){
			
			sukses_masuk($email,$password);
			//mysql_query("UPDATE user SET last_login = NOW() WHERE id_user = '$username'");
		}else{
			salah_password();
		}
	}else{
		salah_username($email);
	}
}
?>
