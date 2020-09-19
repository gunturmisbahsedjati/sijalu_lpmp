<?php 
include './koneksi.php';
// include '../inc/inc.library.php'
if (empty($_SESSION['username'])){
  header('location:../');
}else{ 
  $username = $_SESSION['username'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
  $jabatan = $_SESSION['jabatan'];
}

if ($level==1 && $id == 'id170816' && $jabatan= 'Administrator'){ ?>

<h1 class="h3 mb-2 text-gray-800"><i class="fa fa-users"></i> Daftar Anggota Manajemen</h1>
<div class="card shadow rounded-lg mb-4">
  <div class="card-header">
    <div class="float-right">
      <a href="#" class="btn btn-sm btn-purple" title="Input Kegiatan Baru" data-toggle="modal" data-target="#addMember"><i class="fa  fa-plus"></i> Tambah Anggota</a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table tabel-sm table-bordered table-hover" id="project_table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center text-nowrap">No.</th>
            <th class="text-center text-nowrap">Seksi</th>
            <th class="text-center text-nowrap">Username</th>
            <th class="text-center text-nowrap">Nama</th>
            <th class="text-center text-nowrap">No. HP</th>
            <th class="text-center text-nowrap">Status Akun</th>
            <th class="text-center text-nowrap">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $query = mysqli_query($myConnection, "select * from akun_manajemen where id_manajemen !='id170816' ");
          while ($tampil = mysqli_fetch_array($query)) { ?>
            <tr style="font-size: 13px">
              <td><?php echo $no++; ?></td>
              <td><?php
              $id_seksi = $tampil['jabatan_manajemen'];
              $seksi_query = mysqli_query($myConnection, "select * from tb_seksi where id_seksi = '$id_seksi' ");
              $tampil_seksi = mysqli_fetch_array($seksi_query);
              echo $tampil_seksi['nama_seksi'];
              ?></td>
              <td><?php echo $tampil['user_manajemen']; ?></td>
              <td><?php echo $tampil['nama_manajemen']; ?></td>
              <td><?php echo $tampil['no_hp_manajemen']; ?></td>
              <td style="font-size: 16px" class="text-center"><?php 
              if ($tampil['status_manajemen'] == 'aktif') {
               echo '<span class="badge badge-pill badge-success notify-badge text-capitalize progress-bar-striped progress-bar-animated"><i class="pb-1 pt-1 pl-1 pr-1">Aktif</i></span>';
              }elseif ($tampil['status_manajemen'] == 'nonaktif') {
                echo '<span class="badge badge-pill badge-danger notify-badge text-capitalize progress-bar-striped progress-bar-animated"><i>Non Aktif</i></span>';
              }else{
                echo '';
              }
              ?></td>
              <td class="text-center text-nowrap">
                <a href="#" class="btn btn-sm btn-info" title="Edit Member" data-toggle="modal" data-target="#"><i style="font-size: 12px" class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-sm btn-danger" title="Hapus Member" data-toggle="modal" data-target="#"><i style="font-size: 12px" class="fa fa-trash"></i></a>
                <!-- <button class="btn btn-sm btn-info"><i style="font-size: 10px" class="fa fa-edit" ></i></button> -->
                <!-- <button class="btn btn-sm btn-danger"><i style="font-size: 10px" class="fa fa-trash"></i></button> -->
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="addMember" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="add-member"></div>
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