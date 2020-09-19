<?php 
if (empty($_SESSION['username'])){
  header('location:../');
}else{ 
  $username = $_SESSION['username'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
}
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon pb-2 pt-3">
      <img src="img/icon.png" style="width: 75px">
    </div>
  </a>
  <div class="pt-3 pb-3"></div>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="./">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span class="text-white"><b>Beranda</b></span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <?php if ($level == 1) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-brain"></i>
          <span class="text-white"><b>Data Master</b></span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="divisionList"><i class="fas fa-fw fa-building"></i> Data Seksi</a>
            <a class="collapse-item" href="memberList"><i class="fas fa-fw fa-users"></i> Data Anggota</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
    <?php } ?>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse3">
        <i class="fas fa-fw fa-file-contract"></i>
        <span class="text-white"><b>Data Kegiatan</b></span>
      </a>
      <div id="collapse2" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="activitiesList"><i class="fas fa-fw fa-clipboard"></i> Data Kegiatan</a>
          <a class="collapse-item" href="#"><i class="fas fa-fw fa-search"></i> Data Usulan Kegiatan</a>
        </div>
      </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
        <i class="fas fa-fw fa-envelope"></i>
        <span class="text-white"><b>Master Kegiatan</b></span>
      </a>
      <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="#"><i class="fas fa-fw fa-search"></i> Data Kegiatan</a>
          <a class="collapse-item" href="#"><i class="fas fa-fw fa-search"></i> Data Usulan Kegiatan</a>
        </div>
      </div>
    </li>
    <hr class="sidebar-divider">

    <div class="pt-5 text-white text-center">Animasiku Studio</div>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>