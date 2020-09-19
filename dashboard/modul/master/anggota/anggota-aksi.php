<?php 
//error_reporting( E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";

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
$sekarang = date('Ydm').''.time();
// $code2 = time().''.uniqid();
$code     = base64_encode(md5(base64_encode(uniqid())));
$code1 = encrypt($sekarang);
// echo encrypt($sekarang).'<br>';
// echo decrypt($code1).'<br>';
// echo $sekarang.'<br>';
// echo $code2;

if(isset($_POST['addMember'])){
	$code2 = time().''.uniqid();
	$username = $_POST['username'];
	$password = encrypt($_POST['password']);
	$name = $_POST['name'];
	$division = $_POST['division'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$created_by = $_SESSION['id'];


	mysqli_query($myConnection,"insert into akun_manajemen (id_manajemen, user_manajemen, pass_manajemen, nama_manajemen, no_hp_manajemen, email_manajemen, level_manajemen, status_manajemen, jabatan_manajemen, file_manajemen, created_by, created_date) values ('$code2', '$username', '$password', '$name', '$no_hp', '$email', '2', 'aktif', '$division', 'no-profile.png', '$created_by', NOW() ) ");

	echo '<script type="text/javascript">
	window.location = "memberList"
	</script>';

	// echo $code2."<br>";
	// echo $username."<br>";
	// echo $password."<br>";
	// echo $name."<br>";
	// echo $division."<br>";
	// echo $no_hp."<br>";
	// echo $email."<br>";
	// echo $created_by."<br>";
}
else{echo '<script type="text/javascript">
window.location = "memberList"
</script>';}
?>