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
    <form action="placementIncomingMail" method="post" role="form" method="POST" enctype="multipart/form-data">
      <?php if ($result['status']==0) { ?>
       <div class="modal-header">
        <h4>Disposisi Surat dari <?php echo $result['asal_surat']; ?></h4>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
        <div class="row">
          <div class="col-md-4"><b>Disposisi</b></div>
          <div class="col-md-8"><b><input type="text" class="form-control" placeholder="Ketikan posisi bidang / sub bagian disposisi" data-toggle="tooltip" required="required" name="disposisi" ></b></div>
        </div>
        <div class="row pt-3">
          <div class="col-md-4"><b>Tanggal Disposisi</b></div>
          <div class="col-md-4"><input type="date" class="form-control" required="required" title="Format tanggal mm/dd/yyyy" name="tgl_disposisi" ></div>
        </div>
        <div class="row pt-3">
          <div class="col-md-4"><b>Isi Disposisi</b></div>
          <div class="col-md-8"><textarea class="form-control"  name="isi_disposisi" rows="6" placeholder="Tuliskan isi disposisi pimpinan" ></textarea></div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="hidden" name="no_agenda" value="<?php echo $result['no_agenda']; ?>">
      <button type="submit" class="btn btn-primary" name="dispo">Disposisi</button>
    </div>
  <?php }elseif ($result['status']==1) { ?>
    <div class="modal-header">
      <h4>Edit Disposisi Surat dari <?php echo $result['asal_surat']; ?></h4>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <div class="container">
      <div class="row">
        <div class="col-md-4"><b>Disposisi</b></div>
        <div class="col-md-8"><b><input type="text" class="form-control" placeholder="Ketikan posisi bidang / sub bagian disposisi" data-toggle="tooltip" required="required" name="disposisi" value="<?php echo $result['disposisi'] ?>"></b></div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4"><b>Tanggal Disposisi</b></div>
        <div class="col-md-4"><input type="date" class="form-control" required="required" title="Format tanggal mm/dd/yyyy" name="tgl_disposisi" value="<?php echo $result['tgl_disposisi'] ?>"></div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4"><b>Isi Disposisi</b></div>
        <div class="col-md-8"><textarea class="form-control"  name="isi_disposisi" rows="6" placeholder="Tuliskan isi disposisi pimpinan" ><?php echo $result['isi_disposisi'] ?></textarea></div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="no_agenda" value="<?php echo $result['no_agenda']; ?>">
    <button type="submit" class="btn btn-info" name="dispo">Edit</button>
  </div>
<?php } ?>
</form>
<?php } 
}
?>