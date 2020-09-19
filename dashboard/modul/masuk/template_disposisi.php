<style type="text/css">
	tr.border_bottom td {
		border-bottom:1pt solid black;
	}
	tr.border_top td {
		border-top:1pt solid black;
	}
</style>
<?php
include "koneksi.php";
session_start();
include "inc.library.php";
$data=mysql_query("SELECT * from masuk where no_agenda = '1299'");
$edit=mysql_fetch_array($data);
?>
<table border='0' style='border-collapse: collapse;' width="600px">
	<tr>
		<td rowspan='4' style='text-align: center;'><img src='logo.png'></td>
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
			<td colspan='7' style='border-top: double; width: 700'></td>
		</tr>
		<tr>
			<td></td>
			<td colspan='7' style='text-align: center; font-size: 14px; padding-bottom: 5px;'>LEMBAR DISPOSISI</td>
		</tr>
		<tr style='font-size: 12px;' >
			<td width='105' style='padding-bottom: 4px; padding-top: 4px'>Asal surat</td>
			<td>:</td>
			<td><?php echo $edit['asal_surat'] ?></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td>Tanggal terima</td>
			<td>:</td>
			<td><?php echo $edit['tgl_terima'] ?></td>
		</tr>
		<tr style='font-size: 12px'>
			<td style='padding-bottom: 7px; padding-top: 4px'>Tanggal surat</td>
			<td>:</td>
			<td><?php echo $edit['tgl_surat'] ?></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td>Nomor Agenda</td>
			<td>:</td>
			<td style='font-size: 10px'><?php echo $edit['no_agenda'] ?></td>
		</tr>
		<tr style='font-size: 12px' >
			<td style='padding-bottom: 7px; padding-top: 4px'>Nomor Surat</td>
			<td>:</td>
			<td><?php echo $edit['no_surat'] ?></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td colspan='3'>Diteruskan kepada Yth.</td>
		</tr>
		<tr style='font-size: 12px' >
			<td style='vertical-align: top;'>Perihal</td>
			<td style='vertical-align: top;'>:</td>
			<td rowspan='5' width='230'  style='vertical-align: top;'><?php echo $edit['perihal'] ?></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td colspan='3' style='vertical-align: top;'>1. Sekretaris</td>
		</tr>
		<tr style='font-size: 12px'>
			<td></td>
			<td></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td colspan='3' style='vertical-align: top;'>2. Bid. Sekolah Dasar</td>
		</tr>
		<tr style='font-size: 12px'>
			<td></td>
			<td></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td colspan='3' style='vertical-align: top;'>3. Bid. Sekolah Menengah</td>
		</tr>
		<tr style='font-size: 12px'>
			<td></td>
			<td></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td colspan='3' style='vertical-align: top;'>4. Bid. PAUD</td>
		</tr>
		<tr style='font-size: 12px'>
			<td></td>
			<td></td>
			<td style='border-right: 1pt solid black'></td>
			<td></td>
			<td colspan='3' style='vertical-align: top;'>5. Bid. Sarana Prasana & PLS</td>
		</tr>
		<tr>
			<td></td>
			<td colspan='8' style='text-align: center; font-size: 14px; padding-top: 5px;'>ISI DISPOSISI</td>
		</tr>
	</table>


	<tr style='font-size: 12px'>
		<td></td>
		<td></td>
		<td style='border-right: 1pt solid black'></td>
		<td></td>
		<td colspan='3' style='padding-top: 4px;vertical-align: top;'>2. Bid. Sekolah Dasar</td>
	</tr>
	<tr style='font-size: 12px'>
		<td></td>
		<td></td>
		<td style='border-right: 1pt solid black'></td>
		<td></td>
		<td colspan='3' style='padding-top: 4px;vertical-align: top;'>3. Bid. Sekolah Menengah</td>
	</tr>
	<tr style='font-size: 12px'>
		<td></td>
		<td></td>
		<td style='border-right: 1pt solid black'></td>
		<td></td>
		<td colspan='3' style='padding-top: 4px;vertical-align: top;'>4. Bid. PAUD</td>
	</tr>
	<tr style='font-size: 12px'>
		<td></td>
		<td></td>
		<td style='border-right: 1pt solid black'></td>
		<td></td>
		<td colspan='3' style='padding-top: 4px;padding-bottom: 4px;vertical-align: top;'>5. Bid. Sarana Prasana & PLS</td>
	</tr>

	