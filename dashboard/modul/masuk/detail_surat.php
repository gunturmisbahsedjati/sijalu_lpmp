<?php
include 'koneksi.php';
include 'inc.library.php';

if($_POST['id']) {
  $id = $_POST['id']; 
  $sql = mysql_query("SELECT * from masuk where id = '$id'");
  if ($sql === FALSE) {
    die(mysql_error());
  }
  while ($result = mysql_fetch_array($sql)){

    ?>
    
    <div class="modal-header">
      <h4>Detail Surat Masuk</h4>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <div class="container">
      <div class="row">
        <div class="col-md-4"><b>Nomor Agenda</b></div>
        <div class="col-md-2"><b><?php echo $result['no_agenda']; ?></b></div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4"><b>Asal Surat</b></div>
        <div class="col-md-8"><?php echo $result['asal_surat']; ?></div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4"><b>Nomor Surat</b></div>
        <div class="col-md-8"><?php echo $result['no_surat']; ?></div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4"><b>Tanggal Surat</b></div>
        <div class="col-md-4"><?php echo Indonesia2tgl($result['tgl_surat']); ?></div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4"><b>Perihal</b></div>
        <div class="col-md-8"><?php echo $result['perihal']; ?></div>
      </div>
    </div>
    <?php
    if ($result['status']==0) { ?>
      <div class="pt-3">
      <div class="card rounded-ld border-danger">
        <div class="card-header bg-danger progress-bar-striped progress-bar-animated font-weight-bold text-white">Disposisi</div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4"><b>Diposisi</b></div>
            <div class="col-md-6"><b>Belum</b></div>
          </div>
          <div class="row pt-2">
            <div class="col-md-4"><b>Tanggal Diposisi</b></div>
            <div class="col-md-4"><b>Belum</b></div>
          </div>
          <div class="row pt-2">
            <div class="col-md-4"><b>Isi Diposisi</b></div>
            <div class="col-md-8"><b>Belum</b></div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif ($result['status']==1) { ?>
      <div class="pt-3">
      <div class="card rounded-ld border-success">
        <div class="card-header bg-success progress-bar-striped progress-bar-animated font-weight-bold text-white">Disposisi</div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4"><b>Diposisi</b></div>
            <div class="col-md-6"><?php echo $result['disposisi']; ?></div>
          </div>
          <div class="row pt-2">
            <div class="col-md-4"><b>Tanggal Diposisi</b></div>
            <div class="col-md-4"><?php echo Indonesia2tgl($result['tgl_disposisi']); ?></div>
          </div>
          <div class="row pt-2">
            <div class="col-md-4"><b>Isi Diposisi</b></div>
            <div class="col-md-8"><?php echo $result['isi_disposisi']; ?></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    
  </div>
<?php } 
}
?>   
