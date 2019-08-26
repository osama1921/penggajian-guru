<?php
session_start();
include('config.php');
$id=$_POST['user'];
$pass=$_POST['pass'];
$query=mysql_query("SELECT * FROM admin WHERE username='$id' AND password='$pass'");
$data=mysql_fetch_array($query);
$num=mysql_num_rows($query);
if ($id=="" or $pass=="") {
	echo "<script>
window.alert('Silahkan Masukkan Id Guru dan Passwordnya');

	";
	header("location:index.php");
}
else{
	if($num>=1){
		$_SESSION['id'] = $_POST['user'];
		$_SESSION['password'] = $_POST['pass'];
		header("location:index.php");
	}
	else{
		header("location:home.php");	
	}
}