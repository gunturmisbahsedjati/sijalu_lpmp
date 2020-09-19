$(document).ready(function(){
  $('#addDivision').on('show.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
    $.ajax({
      url : 'modul/master/seksi/tambah-seksi',
      success : function(data){
        $('.add-division').html(data);
      }
    });
  });
  $('.modal').on('hide.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
  });
});


$(document).ready(function(){
  $('#addMember').on('show.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
    $.ajax({
      url : 'modul/master/anggota/tambah-anggota',
      success : function(data){
        $('.add-member').html(data);
      }
    });
  });
  $('.modal').on('hide.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
  });
});

$(document).ready(function(){
  $('#addActivities').on('show.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
    $.ajax({
      url : 'modul/kegiatan/admin/tambah-kegiatan',
      success : function(data){
        $('.add-activities').html(data);
      }
    });
  });
  $('.modal').on('hide.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
  });
});

$(document).ready(function(){
  $('#detailSurat').on('show.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-lg');
    var id = $(e.relatedTarget).data('id');
    $.ajax({
      type : 'post',
      url : 'modul/masuk/detail_surat',
      data :  'id='+ id,
      success : function(data){
        $('.detail-surat').html(data);
      }
    });
  });
  $('.modal').on('hide.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog modal-md');
  });
});
