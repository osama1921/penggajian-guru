<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="../sweet/src/sweetalert.css">
<script src="../admin/sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../admin/sweetalert-1-master/dist/sweetalert.css">
</head>
<body >
<?php
error_reporting();
include('config.php');
$id=$_POST['id'];
$bank=$_POST['bank'];
$no=$_POST['no'];
$nama=$_POST['an'];
if (isset($_POST['id'])) {	
	mysql_query("UPDATE `tbl_gaji` SET `bank`='$bank',`no_rekening`='$no',`nama`='$nama' WHERE `id_guru`='$id'");
	echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'No Rekening Telah Berhasil Di Tambahkan',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('gaji.php?id=".$id."');
  },5000); 
 </script>";
}
?>

<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../admin/sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../admin/sweetalert-1-master/dist/sweetalert.css">
<script src="../js/qunit-1.23.1.js"></script>
</body>
</html>