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
    <form action="editIncomingMail" method="post" role="form" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h4>Edit Surat</h4>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
        <div class="row">
          <div class="col-md-4"><b>Nomor Agenda</b></div>
          <div class="col-md-2"><b><input type="text" disabled class="form-control" title="Nomer agenda tidak bisa diedit" data-toggle="tooltip" required="required" name="no_agenda" value="<?php echo $result['no_agenda']; ?>" ></b></div>
        </div>
        <div class="row pt-3">
          <div class="col-md-4"><b>Asal Surat</b></div>
          <div class="col-md-8"><input type="text" class="form-control" required="required" name="asal_surat" placeholder="Asal Surat" value="<?php echo $result['asal_surat']; ?>"></div>
        </div>
        <div class="row pt-3">
          <div class="col-md-4"><b>Nomor Surat</b></div>
          <div class="col-md-8"><input type="text" class="form-control"  name="no_surat" placeholder="Nomor Surat" value="<?php echo $result['no_surat']; ?>"></div>
        </div>
        <div class="row pt-3">
          <div class="col-md-4"><b>Tanggal Surat</b></div>
          <div class="col-md-4"><input type="date" class="form-control" required="required" title="Format tanggal mm/dd/yyyy" name="tgl_surat" value="<?php echo $result['tgl_surat']; ?>"></div>
        </div>
        <div class="row pt-3">
          <div class="col-md-4"><b>Perihal</b></div>
          <div class="col-md-8"><textarea class="form-control"  name="perihal" rows="6" placeholder="Tuliskan perihal atau tujuan dari surat masuk." ><?php echo $result['perihal']; ?></textarea></div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="hidden" name="no_agenda" value="<?php echo $result['no_agenda']; ?>">
      <button type="submit" class="btn btn-info" name="edit">Edit</button>
    </div>
  </form>
<?php } 
}
?>