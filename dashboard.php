<?php 
if($_SESSION['domain']=='guru'){
	$id_guru=$_SESSION['id_guru'];
	$username=ucwords($_SESSION['username']);
	
	$data=mysql_fetch_array(mysql_query("select * from data_guru where id_guru='$id_guru'"));

	$kelamin=$data['kelamin'];
	
	if($kelamin=='laki-laki'){
		$sapaan='Pak ';
	}else{
		$sapaan='Ibu ';
	}
	
	$pengguna=$sapaan.$username;
}else{
	$pengguna=ucwords($_SESSION['username']);
}
?>

