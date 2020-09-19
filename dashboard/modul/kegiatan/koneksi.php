<?php
// $koneksi=mysqli_connect("localhost","root","","db_lpmp");
$myConnection= mysqli_connect("localhost","root","") or die ("could not connect to mysql"); 
mysqli_select_db($myConnection, "db_lpmp") or die ("no database");
?>