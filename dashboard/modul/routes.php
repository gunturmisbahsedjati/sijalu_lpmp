<?php

//if (empty($_GET['_path'])){
//	include "home.php";
//}else if ($_GET['_path'] == "user"){
//	include "";	
//}else if ($_GET['_path'] == "profil") {
//	include "biodata.php";
//}
$do = explode ("/", $_REQUEST['do']);
$opsi = $do[0];

define('PUB_DIR', dirname (__FILE__) . '/');

switch($opsi) {
	case 'home':
		require_once (PUB_DIR . 'home.php');
	break;


	case 'divisionList':
		require_once (PUB_DIR . 'master/data_seksi.php');
	break;
	case 'setDivision':
		require_once (PUB_DIR . 'master/seksi/seksi-aksi.php');
	break;
	case 'memberList':
		require_once (PUB_DIR . 'master/data_anggota.php');
	break;
	case 'setMember':
		require_once (PUB_DIR . 'master/anggota/anggota-aksi.php');
	break;

	case 'activitiesList':
		require_once (PUB_DIR . 'kegiatan/data_kegiatan.php');
	break;
	case 'setActivities':
		require_once (PUB_DIR . 'kegiatan/admin/kegiatan-aksi.php');
	break;


	default:
		require_once (PUB_DIR . 'home.php');
}

?>