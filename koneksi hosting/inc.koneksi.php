<?php
$server = "mysql.hostinger.co.id"; //
$username = "u413166431_pt2_admin";  //
$password = "Alvin1234567890"; //
$database = "u413166431_pt2";

$konek = mysql_connect($server, $username, $password) or die ("Gagal konek ke server MySQL" .mysql_error());
$bukadb = mysql_select_db($database) or die ("Gagal membuka database $database" .mysql_error());

?>
