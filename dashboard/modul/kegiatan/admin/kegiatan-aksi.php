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

if(isset($_POST['addActivities'])){
	$code2 = time().''.uniqid();
	$created_by = $_SESSION['id'];

	$id_kegiatan = md5($code2.''.$created_by);

	$nama_kegiatan = $_POST['nama_keg'];
	$jml_anggaran = $_POST['jml'];
	$thn_anggaran = $_POST['thn_anggaran'];
	$seksi_kegiatan = $_POST['division'];


	mysqli_query($myConnection, "insert into tb_kegiatan (id_kegiatan, nama_kegiatan, jml_anggaran, thn_anggaran, status_kegiatan, seksi_kegiatan, created_by, created_date) values ('$id_kegiatan', '$nama_kegiatan', '$jml_anggaran', '$thn_anggaran', '0', '$seksi_kegiatan', '$created_by', NOW() )");

	echo '<script type="text/javascript">
	window.location = "activitiesList"
	</script>';

	// echo $code2."<br>";
	// echo $created_by."<br>";
	// echo $id_kegiatan."<br>";
	// echo $name."<br>";
	// echo $division."<br>";
	// echo $no_hp."<br>";
	// echo $email."<br>";
	// echo $created_by."<br>";
}
else{echo '<script type="text/javascript">
window.location = "activitiesList"
</script>';}
?>