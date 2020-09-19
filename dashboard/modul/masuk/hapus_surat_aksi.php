<?php 
//error_reporting( E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if(isset($_POST['delete'])){
	$no_agenda = $_POST['no_agenda'];
	$id = $_POST['id'];

	mysql_query("delete from masuk where id = '$id' and no_agenda='$no_agenda'");

	echo '<script type="text/javascript">
	window.location = "incomingMail"
	</script>';
	//echo $no_agenda."<br>";
	//echo $asal_surat."<br>";
	//echo $no_surat."<br>";
	//echo $tgl_surat."<br>";
	//echo $perihal."<br>";
}
else{echo '<script type="text/javascript">
window.location = "incomingMail"
</script>';}
?>