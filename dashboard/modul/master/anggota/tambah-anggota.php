<?php
include '../koneksi.php';
?>
<form action="setMember" method="post" role="form" method="POST" enctype="multipart/form-data">
  <div class="modal-header">
    <h4><i class="fa fa-users"></i> Tambah Anggota</h4>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">
   <div class="container">
    <div class="form-group ">
      <label class=" form-label">Username *</label>
      <input type="text" class="form-control" name="username" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Password *</label>
      <input type="text" class="form-control" name="password" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Nama Lengkap *</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Seksi / SubBag *</label>
      <select class="form-control" name="division" required>
        <option>Pilih Salah Satu Divisi</option>
        <?php $query = mysqli_query($myConnection, "select * from tb_seksi");
        while ($tampil = mysqli_fetch_array($query)) { ?>
          <option value="<?php echo $tampil['id_seksi']; ?>"><?php echo $tampil['nama_seksi']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group ">
      <label class=" form-label">No. HP <i>(optional)</i></label>
      <input type="text" class="form-control" name="no_hp" >
    </div>
    <div class="form-group ">
      <label class=" form-label">Email <i>(optional)</i></label>
      <input type="text" class="form-control" name="email" >
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-purple" name="addMember">Simpan</button>
</div>
</form>
