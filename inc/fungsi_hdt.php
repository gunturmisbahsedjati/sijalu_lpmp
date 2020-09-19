<?php

function sukses_masuk($email,$password){
	// Apabila username dan password ditemukan
	  $string1="cassie";
	  $string2="violeta";
	  $md5_string1=md5($string1);
	  $md5_string2=md5($string2);
	  $text1=substr($md5_string1, 0,4);
	  $text2=substr($md5_string2, 0,4);
	  $enc=base64_encode(base64_encode($text1.$password.$text2));

	$login=mysql_query("SELECT * FROM akun_manajemen WHERE user_manajemen='$email' AND pass_manajemen='$enc' AND status_manajemen='aktif'");
	$ketemu=mysql_num_rows($login);
	$r=mysql_fetch_array($login);
	if ($ketemu > 0){
	  session_start();
	  //include "timeout.php";
		$_SESSION['id_manajemen']     = $r['id_manajemen']; 
		$_SESSION['email']     = $r['user_manajemen']; 
		$_SESSION['pass_manajemen']     = $r['pass_manajemen'];
		$_SESSION['level_manajemen']    = $r['level_manajemen'];
		$_SESSION['nama_manajemen']    = $r['nama_manajemen'];
		$_SESSION['jabatan_manajemen']    = $r['jabatan_manajemen'];
		$_SESSION['file_manajemen']    = $r['file_manajemen'];
		
		
if ($r['level_manajemen'] == "superadmin")
{  
mysql_query("insert into aktivitas_manajemen (nama,login,id_user)values('$r[user_manajemen]',NOW(),'$r[id_manajemen]')");
header('location:super');
}
else if ($r['level_manajemen'] == "admin")
{  
mysql_query("insert into aktivitas_manajemen (nama,login,id_user)values('$r[user_manajemen]',NOW(),'$r[id_manajemen]')");
header('location:super/?_path=home');
}
else if ($r['level_manajemen'] == "akuntan")
{  
mysql_query("insert into aktivitas_manajemen (nama,login,id_user)values('$r[user_manajemen]',NOW(),'$r[id_manajemen]')");
header('location:akuntan/?_path=home');
}
else if ($r['level_manajemen'] == "teknik")
{  
mysql_query("insert into aktivitas_manajemen (nama,login,id_user)values('$r[user_manajemen]',NOW(),'$r[id_manajemen]')");
header('location:teknik/?_path=home');
}

		// session timeout
		$_SESSION['login'] = 1;
		timer();
		
	}
	tidak_ada_module();
}

function msg(){?>
  <script>
	alert('Maaf Password Anda salah !');
	window.location.href='index';
</script>
<?php }
function salah_blokir($user_manajemen){?>
  <script>
	alert('Maaf username <?php echo"$user_manajemen" ?> sudah tidak aktif ! \n Silahkan menghubungi SUPERADMIN');
	window.location.href='index';
</script>
<?php }
function salah_username($user_manajemen){?>
<b><script>
	alert('Username <?php echo"$user_manajemen" ?> Tidak Ada Dalam Database !');
	window.location.href='index';
</script></b>
<?php
}

function salah_password(){?>
<b><script>
	alert('Maaf Password Anda salah !');
	window.location.href='index';
</script></b>
<?php
}
function tidak_ada_module(){?>
<b><script>
	alert('\Anda Menyalahi Hak AdaKSES!\!');
	window.location.href='index';
</script></b>
<?php
}
function blokir($user_manajemen){
	$sql = mysql_query("UPDATE user SET status = 'Y' WHERE user_manajemen = '$user_manajemen'");	 
	session_destroy();
	 return false;
}    

?>