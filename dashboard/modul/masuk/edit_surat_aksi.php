<?php 
//error_reporting( E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$no_agenda = $_POST['no_agenda'];
	$asal_surat = $_POST['asal_surat'];
	$no_surat = $_POST['no_surat'];
	$tgl_surat = $_POST['tgl_surat'];
	$perihal = addslashes($_POST['perihal']);
	//$thn_surat = $_POST['thn_surat'];

	mysql_query("update masuk set
		asal_surat = '$asal_surat',
		no_surat = '$no_surat',
		tgl_surat = '$tgl_surat',
		perihal = '$perihal'
		where id = '$id' and no_agenda = '$no_agenda'");

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