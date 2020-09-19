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

<h1 class="h3 mb-2 text-gray-800"><i class="fa fa-building"></i> Daftar Seksi / SubBag</h1>
<div class="card shadow rounded-lg mb-4">
  <div class="card-header">
    <div class="float-right">
      <a href="#" class="btn btn-sm btn-purple" title="Input Kegiatan Baru" data-toggle="modal" data-target="#addDivision"><i class="fa  fa-plus"></i> Tambah Seksi</a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-sm table-bordered table-hover" id="project_table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center text-nowrap">No.</th>
            <th class="text-center text-nowrap">Seksi / Sub Bag</th>
            <th class="text-center text-nowrap">Nama Pimpinan</th>
            <th class="text-center text-nowrap">Jumlah Anggota</th>
            <th class="text-center text-nowrap">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $query = mysqli_query($myConnection, "select * from tb_seksi");
          while ($tampil = mysqli_fetch_array($query)) { ?>
            <tr style="font-size: 13px">
              <td><?php echo $no++; ?></td>
              <td><?php echo $tampil['nama_seksi']; ?></td>
              <td><?php echo $tampil['nama_pimpinan']; ?></td>
              <td class="text-center">0</td>
              <td class="text-center" style="font-size: 14px">
                <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</button>
                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="addDivision" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="add-division"></div>
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