<?php 
//error_reporting( E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if(isset($_POST['dispo'])){
	$id = $_POST['id'];
	$no_agenda = $_POST['no_agenda'];
	$disposisi = $_POST['disposisi'];
	$tgl_disposisi = $_POST['tgl_disposisi'];
	$isi_disposisi = $_POST['isi_disposisi'];

	mysql_query("update masuk set
		disposisi = '$disposisi',
		tgl_disposisi = '$tgl_disposisi',
		isi_disposisi = '$isi_disposisi',
		status = '1'
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