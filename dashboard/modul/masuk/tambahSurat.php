<?php
include 'koneksi.php';
$cek_no_agenda = mysql_fetch_array(mysql_query('SELECT no_agenda FROM masuk WHERE no_agenda = (SELECT MAX(no_agenda) FROM masuk)'));
$no_agenda = $cek_no_agenda['no_agenda'] +1;
$tanggal=getdate();
$bln = date('m');
?>
<form action="saveIncomingMail" method="post" role="form" method="POST" enctype="multipart/form-data">
  <div class="modal-header">
    <h4>Tambah Surat Masuk</h4>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">
   <div class="container">
    <div class="row">
      <div class="col-md-4"><b>Nomor Agenda</b></div>
      <div class="col-md-2"><b><input type="number" class="form-control" title="Penomoran Agenda otomatis diambil dari nomor agenda terakhir yang anda pakai" data-toggle="tooltip" required="required" name="no_agenda" value="<?php echo $no_agenda; ?>" ></b></div>
    </div>
    <div class="row pt-3">
      <div class="col-md-4"><b>Asal Surat</b></div>
      <div class="col-md-8"><input type="text" class="form-control" required="required" name="asal_surat" placeholder="Asal Surat" ></div>
    </div>
    <div class="row pt-3">
      <div class="col-md-4"><b>Nomor Surat</b></div>
      <div class="col-md-8"><input type="text" class="form-control" name="no_surat" placeholder="Nomor Surat" ></div>
    </div>
    <div class="row pt-3">
      <div class="col-md-4"><b>Tanggal Surat</b></div>
      <div class="col-md-4"><input type="date" class="form-control" required="required" name="tgl_surat" ></div>
    </div>
    <div class="row pt-3">
      <div class="col-md-4"><b>Perihal</b></div>
      <div class="col-md-8"><textarea class="form-control"  name="perihal" rows="6" placeholder="Tuliskan perihal atau tujuan dari surat masuk."></textarea></div>
    </div>
  </div>
</div>
<div class="modal-footer">
  <input type="hidden" name="thn_surat" value="<?php echo $tanggal['year']; ?>">
  <input type="hidden" name="bln_surat" value="<?php echo $bln; ?>">
  <button type="submit" class="btn btn-purple" name="send">Simpan</button>
</div>
</form>
