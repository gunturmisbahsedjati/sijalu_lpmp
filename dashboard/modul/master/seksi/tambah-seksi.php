<?php
// include '../koneksi.php';
?>
<form action="setDivision" method="post" role="form" method="POST" enctype="multipart/form-data">
  <div class="modal-header">
    <h4><i class="fa fa-users"></i> Tambah Seksi / SubBag</h4>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">
   <div class="container">
    <div class="form-group ">
      <label class=" form-label">Nama Seksi / SubBag</label>
        <input type="text" class="form-control" name="division_name" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Nama Pimpinan</label>
        <input type="text" class="form-control" name="leader_name" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Keterangan <i>(optional)</i></label>
        <textarea class="form-control" name="info" rows="3"></textarea>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-purple" name="addDivision">Tambah</button>
</div>
</form>
