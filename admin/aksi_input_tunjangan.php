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
$query=mysql_query("SELECT * FROM tbl_guru WHERE id_guru='$id'");
$data=mysql_fetch_array($query);
$nama=$data['nama'];
$jm=$_POST['bs'];
if ($jm==0) {
	$tunj=500000;
	if (isset($_POST['input'])) {
	mysql_query("INSERT INTO `tbl_tunjangan`(`id_guru`,`nama`,`jml_anak`,`jml_tunjangan`) VALUES ('$id','$nama','$jm','$tunj') ") or die(mysql_error());
  echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Tunjangan ".$nama." Berhasil Ditambahkan',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('tunjangan.php');
  },5000); 
 </script>"; 
}
}
if($jm<=3){
	$tunj=750000;
	if (isset($_POST['input'])) {
	mysql_query("INSERT INTO `tbl_tunjangan`(`id_guru`,`nama`,`jml_anak`,`jml_tunjangan`) VALUES ('$id','$nama','$jm','$tunj') ") or die(mysql_error());
 echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Tunjangan ".$nama." Berhasil Ditambahkan',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('tunjangan.php');
  },5000); 
 </script>"; 
}

}
if($jm>3){
	$tunj=1000000;
if (isset($_POST['input'])) {
	mysql_query("INSERT INTO `tbl_tunjangan`(`id_guru`,`nama`,`jml_anak`,`jml_tunjangan`) VALUES ('$id','$nama','$jm','$tunj') ") or die(mysql_error());
		 echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Tunjangan ".$nama." Berhasil Ditambahkan',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('tunjangan.php');
  },5000); 
 </script>";  
}

}

?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>