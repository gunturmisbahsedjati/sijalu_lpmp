<?php 
//error_reporting( E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
// $koneksi=mysqli_connect("localhost","root","","db_lpmp");
if(isset($_POST['addDivision'])){
	$division_name = $_POST['division_name'];
	$leader_name = $_POST['leader_name'];
	$info = $_POST['info'];

	$created_by = $_SESSION['id'];

	// echo $created_by.'<br>';
	// echo $division_name.'<br>';
	// echo $leader_name.'<br>';
	// echo $info.'<br>';
	// echo $koneksi;

	mysqli_query($myConnection,"insert into tb_seksi (nama_seksi, nama_pimpinan, ket, created_by, created_date) values ('$division_name', '$leader_name', '$info', '$created_by', NOW())");
	

	echo '<script type="text/javascript">
	window.location = "divisionList"
	</script>';
}
else{echo '<script type="text/javascript">
window.location = "divisionList"
</script>';}
?>