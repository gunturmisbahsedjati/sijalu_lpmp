<?php 
include './koneksi.php';
include '../inc/inc.library.php';
if (empty($_SESSION['username'])){
  header('location:../');
}else{ 
  $username = $_SESSION['username'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
}

if ($level==1){ ?>

  <h1 class="h3 mb-2 text-gray-800"><i class="fa fa-clipboard"></i> Daftar Kegiatan</h1>
  <div class="card shadow rounded-lg mb-4">
    <div class="card-header">
      <div class="float-right">
        <a href="#" class="btn btn-sm btn-purple text-xs" title="Input Kegiatan Baru" data-toggle="modal" data-target="#addActivities"><i class="fa fa-plus"></i> Tambah Kegiatan</a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive text-xs">
        <table class="table table-sm table-bordered table-hover " id="activities_table" width="100%" cellspacing="0">
          <thead>
            <tr style="font-size: 13px">
              <th class="text-center text-nowrap align-middle" rowspan="2">No.</th>
              <th class="text-center text-nowrap align-middle" rowspan="2">Tahun Anggaran</th>
              <th class="text-center text-nowrap align-middle" rowspan="2">Seksi / SubBag</th>
              <th class="text-center text-nowrap align-middle" rowspan="2">Nama Kegiatan</th>
              <th class="text-center text-nowrap align-middle" rowspan="2">Anggaran</th>
              <th class="text-center text-nowrap align-middle" colspan="3">Jumlah Sub Kegiatan</th>
              <th class="text-center text-nowrap align-middle" rowspan="2">Status Kegiatan</th>
              <th class="text-center text-nowrap align-middle" rowspan="2">Aksi</th>
            </tr>
            <tr style="font-size: 13px">
              <th class="text-center text-nowrap bg-danger text-white">Belum</th>
              <th class="text-center text-nowrap bg-info text-white">Proses</th>
              <th class="text-center text-nowrap bg-success text-white">Selesai</th>
            </tr>
          </thead>
          <tbody>
           <?php
           $no = 1;
           $query = mysqli_query($myConnection, "select * from tb_kegiatan ");
           while ($tampil = mysqli_fetch_array($query)) { ?>
            <tr style="font-size: 13px">
              <td class="text-center"><?php echo $no++; ?></td>
              <td class="text-center"><?php echo $tampil['thn_anggaran']; ?></td>
              <td class="text-center font-weight-bold"><?php
              $id_seksi = $tampil['seksi_kegiatan'];
              $seksi_query = mysqli_query($myConnection, "select * from tb_seksi where id_seksi = '$id_seksi' ");
              $tampil_seksi = mysqli_fetch_array($seksi_query);
              echo $tampil_seksi['nama_seksi'];
              ?>
            </td>
            <td><?php echo $tampil['nama_kegiatan']; ?></td>
            <td class="text-nowrap"><?php echo $tampil['jml_anggaran']; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo $tampil['status_kegiatan']; ?></td>
            <td class="text-center text-nowrap">
              <button class="btn btn-sm btn-info text-xs"><i class="fa fa-edit"></i></button>
              <button class="btn btn-sm btn-danger text-xs"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</div>

<div class="modal fade" id="addActivities" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="add-activities"></div>
    </div>
  </div>
</div>


<br>
<br>
<br>
<?php }else{
 echo '<script type="text/javascript">
 window.location = "./"
 </script>';
} ?>