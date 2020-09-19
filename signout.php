<?php 

	session_start(); // memulai session
	//$_SESSION['email']='';
	//session_unset();
	session_destroy(); // menghapus session
	header("location:./");
	//header('Cache-Control: no-store, no-cache, must-revalidate');
	//header('Cache-Control: post-check=0, pre-check=0',false);
	//header('Pragma: no-cache');
 ?>