<?php 
include 'koneksi.php';
include '../inc/inc.library.php'
?>

  <h1 class="h3 mb-2 text-gray-800"><i class="fa fa-envelope-open"></i> Agenda Surat Masuk</h1>
  <div class="card shadow rounded-lg mb-4">
    <div class="card-header">
      <div class="float-right">
        <a href="#" class="btn btn-sm btn-purple" title="Input Kegiatan Baru" data-toggle="modal" data-target="#addSurat"><i class="fa  fa-plus"></i> Input Kegiatan</a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="project_table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center text-nowrap">No.</th>
              <th class="text-center text-nowrap">No. Surat</th>
              <th class="text-center text-nowrap">Tanggal Surat</th>
              <th class="text-center text-nowrap">Asal Surat</th>
              <th class="text-center text-nowrap">Perihal</th>
              <th class="text-center text-nowrap">Status Dispo</th>
              <th class="text-center text-nowrap">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $select = mysql_query("SELECT * from masuk order by no_agenda DESC");
            $no = 1;
            while ($tampil = mysql_fetch_array($select)) {
              ?>
              <tr style="font-size: 13px">
                <td ><?php echo $tampil['no_agenda'] ?></td>
                <td ><?php echo $tampil['no_surat'] ?></td>
                <td><?php echo Indonesia2tgl($tampil['tgl_surat']) ?></td>
                <td><?php echo $tampil['asal_surat'] ?></td>
                <td ><?php echo $tampil['perihal'] ?></td>
                <td style="font-size: 14px" class="text-center">
                  <?php
                  if ($tampil['status']==0) {
                     echo '<a href="#" data-id="'.$tampil['id'].'" data-toggle="modal" data-target="#dispoSurat"><span class="badge badge-pill badge-danger notify-badge text-capitalize progress-bar-striped progress-bar-animated" title="klik untuk ketik disposisi !"><i>belum</i></span></a>';
                   }elseif ($tampil['status']==1) {
                     echo '<a href="#" data-id="'.$tampil['id'].'" data-toggle="modal" data-target="#dispoSurat"><span class="badge badge-pill badge-success notify-badge text-capitalize progress-bar-striped progress-bar-animated" title="klik untuk edit disposisi !"><i>sudah</i></span></a>';
                   } 
                  ?>
                  </td>
                <td class="text-right text-nowrap" >
                  <a href="#" class="btn btn-sm btn-success" title="Detail Surat" data-id="<?php echo $tampil['id']; ?>" data-toggle="modal" data-target="#detailSurat"><i class="fa  fa-search" style="font-size: 10px"></i></a>
                  <a href="#" class="btn btn-sm btn-warning" title="Edit Surat" data-id="<?php echo $tampil['id']; ?>" data-toggle="modal" data-target="#editSurat"><i class="fa  fa-user-edit" style="font-size: 10px"></i></a>
                  <a href="javacript:void(0);" onclick="popupCenter('modul/masuk/cetak_disposisi?id=<?php echo $tampil['id'];?>','pop',900,600) ;" class="btn btn-sm btn-info"><i class="fa  fa-print" style="font-size: 10px"></i></a>
                  <a href="#" class="btn btn-sm btn-danger" title="Hapus Surat" data-id="<?php echo $tampil['id']; ?>" data-toggle="modal" data-target="#hapusSurat"><i class="fa  fa-trash" style="font-size: 10px"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<div class="modal fade" id="addSurat" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="tambah-surat"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailSurat" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="detail-surat"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="hapusSurat" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="hapus-surat"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="editSurat" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="edit-surat"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="dispoSurat" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="dispo-surat"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="printDispo" tabindex="-1" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="print-dispo"></div>
    </div>
  </div>
</div>

<br>
<br>
<br>