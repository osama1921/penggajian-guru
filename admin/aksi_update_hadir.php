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
$a=mysql_query("SELECT nama FROM tbl_guru WHERE id_guru='$id'");
$na=mysql_fetch_array($a);
$nama=$na['nama'];
$jam=$_POST['jh'];
$sakit=$_POST['js'];
$q=mysql_query("SELECT SUM(jumlah_jam) FROM tbl_jam WHERE id_guru='$id'");
$data=mysql_fetch_array($q);
$total=$data['SUM(jumlah_jam)']*4;
$tak=$total-($jam+$sakit);
if($tak<0){
	echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Gagal',
    text: 'Jumlah Hadir dan Jumlah Sakit Yang Anda Masukkan Salah',
    type: 'error',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('edit_jam.php?id=".$id."');
  },5000); 
 </script>"; 

}
else{
	if (isset($_POST['input'])) {
	mysql_query("UPDATE `tbl_kehadiran` SET `nama`='$nama',`jumlah_hadir`='$jam', `jml_thadir`='$tak', `jml_sakit`='$sakit' WHERE `id_guru`='$id'") or die(mysql_error());
	echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Kehadiran ".$nama." Berhasil Di Update',
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
}
?>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>
