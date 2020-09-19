<?php
	$url = $_SERVER["REQUEST_URI"];
	$kalimat='http://localhost/arsip/agenda/amanat/super/printPlacement/id/993';
	$cari="id/";
	$posisi=strpos($kalimat,$cari);
	$sub_kalimat = substr($kalimat,($posisi+3));
	echo $sub_kalimat;

	?>

	<?php
include "koneksi.php";
//session_start();
include "inc.library.php";

//$url = $_SERVER["REQUEST_URI"];
//$kalimat=$url;
//$cari="id/";
//$posisi=strpos($kalimat,$cari);
//$kode = substr($kalimat,($posisi+3));
//echo $sub_kalimat;

$kode = $_GET['id'];

$data=mysql_query("SELECT * from masuk where id = '$kode'");
$edit=mysql_fetch_array($data);
include("../../vendor/MPDF54/mpdf.php");
$mpdf=new mPDF('', array(163,215),0,0,5,5 );
$mpdf->SetTitle('DISPOSISI SURAT '.$edit['no_surat']);
$mpdf->SetAuthor('ANIMASIKU Studio');
$mpdf->SetCreator('Adara Cassie Violeta Misbah');
$mpdf->SetDefaultFont('Times');
//$mpdf->SetHeader('Komplain Pekerjaan '.$edit['jenis_kerja']);
//date_default_timezone_set('Asia/Jakarta');
//$currentdate = Indonesia2Tgl(date("Y-m-d"));
//$today = date("H:i");
//$mpdf->SetFooter('Page {PAGENO}/{nb} |    |  Berdasarkan data per '.$currentdate.' Pukul '.$today);
$mpdf->AddPage('P');
//$mpdf->autoMarginPadding('5');
$mpdf->WriteHTML("<table border='0' style='border-collapse: collapse;' width='700px'>
	<tr>
	<td rowspan='4' style='text-align: center;padding-bottom:15px'><img src='logo.png' width='12%'></td>
	<td colspan='7' style='text-align: center; font-size: 16px'><b>PEMERINTAH KABUPATEN JEMBER<b></td>
	</tr>
	<tr>
	<td colspan='7' style='text-align: center;font-size: 16px'><b>DINAS PENDIDIKAN</b></td>
	</tr>
	<tr>
	<td colspan='7' style='text-align: center;font-size: 10px'>Jl. Dr. Subandi No. 29 Kotak Pos 181 Tepl. (0331) 487028, Fax. 421152, Jember (68118)</td>
	</tr>
	<tr>
	<td colspan='7' style='text-align: center; font-size: 16px; padding-top: 3px;'><b>JEMBER</b></td>
	</tr>
	<tr>
	<td colspan='8' style='border-top: double;'></td>
	</tr>
	<tr>
	<td></td>
	<td colspan='7' style='text-align: center; font-size: 14px; padding-bottom: 5px;padding-top:5px'>LEMBAR DISPOSISI</td>
	</tr>
	<tr style='font-size: 12px;' >
	<td width='105' style='padding-bottom: 5px; padding-top: 5px;border-top: 1pt solid black'>Asal surat</td>
	<td style='border-top: 1pt solid black'>:</td>
	<td style='border-top: 1pt solid black'>".$edit['asal_surat']."</td>
	<td style='border-top: 1pt solid black;border-right: 1pt solid black'></td>
	<td style='border-top: 1pt solid black'></td>
	<td width='105' style='border-top: 1pt solid black'>Tanggal terima</td>
	<td style='border-top: 1pt solid black'>:</td>
	<td style='border-top: 1pt solid black'>".tglIndonesia($edit['tgl_terima'])."</td>
	</tr>
	<tr style='font-size: 12px' >
	<td style='padding-bottom: 7px; padding-top: 4px;border-top: 1pt solid black'>Tanggal surat</td>
	<td style='border-top: 1pt solid black'>:</td>
	<td style='border-top: 1pt solid black'>".tglIndonesia($edit['tgl_surat'])."</td>
	<td style='border-right: 1pt solid black;border-top: 1pt solid black'></td>
	<td style='border-top: 1pt solid black'></td>
	<td width='105' style='border-top: 1pt solid black'>Nomor Agenda</td>
	<td style='border-top: 1pt solid black'>:</td>
	<td style='border-top: 1pt solid black'>".$edit['no_agenda']."</td>
	</tr>
	<tr style='font-size: 12px;'>
	<td style='padding-bottom: 7px; padding-top: 4px; border-top: 1pt solid black'>Nomor Surat</td>
	<td style='border-top: 1pt solid black'>:</td>
	<td style='border-top: 1pt solid black;font-size: 10px;'>".$edit['no_surat']."</td>
	<td style='border-right: 1pt solid black;border-top: 1pt solid black'></td>
	<td style='border-top: 1pt solid black'></td>
	<td style='border-top: 1pt solid black' colspan='3'>Diteruskan kepada Yth.</td>
	</tr>
	<tr style='font-size: 12px'>
	<td style='vertical-align: top;border-top: 1pt solid black'>Perihal</td>
	<td style='vertical-align: top;border-top: 1pt solid black'>:</td>
	<td width='230'  style='vertical-align: top;border-top: 1pt solid black'>".$edit['perihal']."</td>
	<td style='border-right: 1pt solid black;border-top: 1pt solid black'></td>
	<td style='border-top: 1pt solid black'></td>
	<td colspan='3' style='vertical-align: top;border-top: 1pt solid black'>
	1. Sekretaris<br><br>
	2. Bid. Sekolah Dasar<br><br>
	3. Bid. Sekolah Menengah<br><br>
	4. Bid. PAUD<br><br>
	5. Bid. Sarana Prasarana & PLS<br><br><br>
	</td>
	</tr>
	<tr >
	<td colspan='8' style='text-align: center; font-size: 14px; padding-top: 5px;border-top: 1pt solid black'>ISI DISPOSISI</td>
	</tr>
	</table>");		

$mpdf->Output('DISPOSISI SURAT '.$edit['no_agenda'].'.pdf','I');
exit;
?>