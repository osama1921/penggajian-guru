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
$id=$_GET['id'];
if (isset($_GET['id'])) {
	mysql_query("DELETE FROM tbl_kehadiran WHERE id_guru='$id'") or die(mysql_error());
	echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
     text: 'Data Kehadiran Berhasil Di Hapus',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('staf.php');
  },5000); 
 </script>"; 
}
?>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-1-master/dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>
