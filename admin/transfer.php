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
$id = $_GET['id'];
$q=mysql_query("SELECT * FROM tbl_gaji WHERE id_guru='$id'") or die(mysql_error());
$data=mysql_fetch_array($q);
$tanggal = mktime(date('m'), date("d"), date('Y'));
$dat=date("d-m-Y ", $tanggal );
if ($data['bank']=="" or $data['no_rekening']=="" or $data['nama']=="") {
	echo "Guru belum memasukkan Bank Atau No rekening Atau Nama dari ".$id."";
}
else{
	mysql_query("UPDATE tbl_gaji SET `status`='Sudah Transfer',`tanggal`='$dat' WHERE id_guru='$id'");
	echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Selamat',
     text: 'Gaji Sudah Di Transfer',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('gaji.php');
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