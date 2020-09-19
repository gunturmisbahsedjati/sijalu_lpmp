<?php 
//error_reporting( E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if(isset($_POST['send'])){
	$no_agenda = $_POST['no_agenda'];
	$asal_surat = $_POST['asal_surat'];
	$no_surat = $_POST['no_surat'];
	$tgl_surat = $_POST['tgl_surat'];
	$perihal = addslashes($_POST['perihal']);
	$thn_surat = $_POST['thn_surat'];
	$bln_surat = $_POST['bln_surat'];

	mysql_query("INSERT INTO masuk (no_agenda,asal_surat,tgl_surat,no_surat,perihal,tgl_terima,bln_surat,thn_surat,created_date) VALUES ('$no_agenda','$asal_surat','$tgl_surat','$no_surat','$perihal',NOW(),'$bln_surat','$thn_surat',NOW())");

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