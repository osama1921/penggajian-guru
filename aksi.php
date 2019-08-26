<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="../sweet/src/sweetalert.css">
<script src="admin/sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin/sweetalert-1-master/dist/sweetalert.css">
</head>
<body >
<?php
session_start();
include('config.php');
$id=$_POST['user'];
$pass=$_POST['pass'];
$query=mysql_query("SELECT * FROM tbl_guru WHERE id_guru='$id' AND password='$pass'");
$data=mysql_fetch_array($query);
$nama= $data['nama'];
$num=mysql_num_rows($query);
if ($id=="" or $pass=="") {
	 echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Opps...',
    text: 'Id Guru Atau Password Yang anda Masukkan Salah',
    type: 'error',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('index.php');
  },5000); 
 </script>";
}
else{
	if($num>=1){
		$_SESSION['id'] = $_POST['user'];
		$_SESSION['password'] = $_POST['pass'];
		echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Selamat Datang ".$nama." Di Aplikasi Penggajian Guru',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('user/index.php?id=".$id."');
  },5000); 
 </script>";
	}
	else{
		echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Opps...',
    text: 'Id Guru Atau Password Yang anda Masukkan Salah',
    type: 'error',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('index.php');
  },5000); 
 </script>";	
	}
};
?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="admin/sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin/sweetalert-1-master/dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>