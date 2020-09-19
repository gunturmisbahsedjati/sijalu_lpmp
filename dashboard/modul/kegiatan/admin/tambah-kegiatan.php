<?php
include '../koneksi.php';
?>
<form action="setActivities" method="post" role="form" method="POST" enctype="multipart/form-data">
  <div class="modal-header">
    <h4><i class="fa fa-clipboard"></i> Tambah Kegiatan Baru</h4>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">
   <div class="container">
    <div class="form-group ">
      <label class=" form-label">Nama Kegiatan</label>
      <input type="text" class="form-control" name="nama_keg" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Jumlah Anggaran</label>
      <input type="text" class="form-control" name="jml" required>
    </div>
    <div class="form-group ">
      <label class=" form-label">Seksi / SubBag</label>
      <select class="form-control" name="division" required>
        <option>Pilih Salah Satu Divisi</option>
        <?php $query = mysqli_query($myConnection, "select * from tb_seksi");
        while ($tampil = mysqli_fetch_array($query)) { ?>
          <option value="<?php echo $tampil['id_seksi']; ?>"><?php echo $tampil['nama_seksi']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group ">
      <label class=" form-label">Tahun Anggaran</label>

      <select class="form-control" name="thn_anggaran" required="">
        <option>Pilih Tahun Anggaran</option>
        <?php
        $sekarang=date('Y');
        for ($i=$sekarang-1; $i <=$sekarang +1 ; $i++) { 
          echo "<option value=$i>$i</option>";
        }
        ?>
      </select>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-purple" name="addActivities">Simpan</button>
</div>
</form>
