<!DOCTYPE html>
<html lang="en">
<?php session_start();
include 'koneksi.php'; 
if (empty($_SESSION['username'])){
  header('location:../');
}else{ 
  $username = $_SESSION['username'];
}
?>
<head>

 <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta name="description" content="Schedule Management System">
  <meta name="robots" content="index" />
  <meta name="keywords" content="" />
  <meta name="author" content="Adara Cassie Violeta Misbah" />
  <meta name="language" content="Indonesia" />
  <meta http-equiv="expires" content="0">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache, must-revalidate">
  <title>Schedule Management System | LPMP Provinsi Jawa Timur</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  
  <link rel="stylesheet" type="text/css" href="vendor/datepicker/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select/css/bootstrap-select.min.css">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="vendor/animate/animate.css" rel="stylesheet">
  
 <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="img/favicon.png" rel="icon">

</head>
<style >
  #loader {
    font-size: 14px;
    margin: 250px auto;
    width: 1em;
    height: 1em;
    border-radius: 50%;
    position: relative;
    text-indent: -9999em;
    -webkit-animation: load4 1.3s infinite linear;
    animation: load4 1.3s infinite linear;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
  }
  @-webkit-keyframes load4 {
    0%,
    100% {
      box-shadow: 0 -3em 0 0.2em #db43d6, 2em -2em 0 0em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0 0 -1em #db43d6, -2em -2em 0 0 #db43d6;
    }
    12.5% {
      box-shadow: 0 -3em 0 0 #db43d6, 2em -2em 0 0.2em #db43d6, 3em 0 0 0 #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    25% {
      box-shadow: 0 -3em 0 -0.5em #db43d6, 2em -2em 0 0 #db43d6, 3em 0 0 0.2em #db43d6, 2em 2em 0 0 #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    37.5% {
      box-shadow: 0 -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0em 0 0 #db43d6, 2em 2em 0 0.2em #db43d6, 0 3em 0 0em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0em 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    50% {
      box-shadow: 0 -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 0em #db43d6, 0 3em 0 0.2em #db43d6, -2em 2em 0 0 #db43d6, -3em 0em 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    62.5% {
      box-shadow: 0 -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 0 #db43d6, -2em 2em 0 0.2em #db43d6, -3em 0 0 0 #db43d6, -2em -2em 0 -1em #db43d6;
    }
    75% {
      box-shadow: 0em -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0em 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 0 #db43d6, -3em 0em 0 0.2em #db43d6, -2em -2em 0 0 #db43d6;
    }
    87.5% {
      box-shadow: 0em -3em 0 0 #db43d6, 2em -2em 0 -1em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 0 #db43d6, -3em 0em 0 0 #db43d6, -2em -2em 0 0.2em #db43d6;
    }
  }
  @keyframes load4 {
    0%,
    100% {
      box-shadow: 0 -3em 0 0.2em #db43d6, 2em -2em 0 0em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0 0 -1em #db43d6, -2em -2em 0 0 #db43d6;
    }
    12.5% {
      box-shadow: 0 -3em 0 0 #db43d6, 2em -2em 0 0.2em #db43d6, 3em 0 0 0 #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    25% {
      box-shadow: 0 -3em 0 -0.5em #db43d6, 2em -2em 0 0 #db43d6, 3em 0 0 0.2em #db43d6, 2em 2em 0 0 #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    37.5% {
      box-shadow: 0 -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0em 0 0 #db43d6, 2em 2em 0 0.2em #db43d6, 0 3em 0 0em #db43d6, -2em 2em 0 -1em #db43d6, -3em 0em 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    50% {
      box-shadow: 0 -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 0em #db43d6, 0 3em 0 0.2em #db43d6, -2em 2em 0 0 #db43d6, -3em 0em 0 -1em #db43d6, -2em -2em 0 -1em #db43d6;
    }
    62.5% {
      box-shadow: 0 -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 0 #db43d6, -2em 2em 0 0.2em #db43d6, -3em 0 0 0 #db43d6, -2em -2em 0 -1em #db43d6;
    }
    75% {
      box-shadow: 0em -3em 0 -1em #db43d6, 2em -2em 0 -1em #db43d6, 3em 0em 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 0 #db43d6, -3em 0em 0 0.2em #db43d6, -2em -2em 0 0 #db43d6;
    }
    87.5% {
      box-shadow: 0em -3em 0 0 #db43d6, 2em -2em 0 -1em #db43d6, 3em 0 0 -1em #db43d6, 2em 2em 0 -1em #db43d6, 0 3em 0 -1em #db43d6, -2em 2em 0 0 #db43d6, -3em 0em 0 0 #db43d6, -2em -2em 0 0.2em #db43d6;
    }
  }

  #myDiv {

    display: none;

  }
</style>
<body id="page-top" onload="myFunction()" style="margin:0;" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include'header.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <div >
         <!-- <div id="loader">style="display:none;" id="myDiv"</div> -->
         <div >
          <div class="container-fluid">

            <!-- Page Heading -->
            <?php 

            include 'modul/routes.php';

            ?>

          </div></div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="vendor/datepicker/js/bootstrap-datepicker.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="vendor/select/js/bootstrap-select.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
      var myVar;
      function myFunction() {
        myVar = setTimeout(showPage, 100);
      }
      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
      }
    </script>
    <script>
      function popupCenter(url, title, w, h) {
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
        width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

// Puts focus on the newWindow
if (window.focus) {
  newWindow.focus();
}
} 
</script>
<script src="vendor/lightbox/lightbox.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<!-- Include SmartWizard JavaScript source -->
<script type="text/javascript" src="vendor/smart_wizard/js/jquery.smartWizard.min.js"></script>
<script type="text/javascript" src="vendor/smart_wizard/js/pipeline.js"></script>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true,
    todayHighlight: true,
  });
});
</script>
<script>
  $(function () {

    $('#member_table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#activities_table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "pageLength": 25
    })
    $('#project_table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false,
      "pageLength": 25
    })
    $('#invest_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#investor').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#tInvest').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })

  })
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
</body>

</html>
