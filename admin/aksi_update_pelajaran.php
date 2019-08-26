<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="../sweet/src/sweetalert.css">
<script src="sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-1-master/dist/sweetalert.css">
</head>
<body >
<?php
include('config.php');
$id=$_POST['id'];
$data=mysql_fetch_array(mysql_query("SELECT nama FROM tbl_guru WHERE id_guru='$id'"));
$nama=$data['nama'];
$p=$_POST['bs'];	
$p=$_POST['bs'];
$jam=$_POST['jj'];
if (isset($_POST['up'])) {
	mysql_query("UPDATE `tbl_jam` SET `Nama`='$nama',`pelajaran`='$p',`jumlah_jam`='$jam' WHERE `id_guru`='$id'") or die(mysql_error());
		echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Bidang Study ".$nama." Berhasil Di Update',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('pelajaran.php');
  },5000); 
 </script>"; 
}
?>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>