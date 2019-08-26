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
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tgl=$_POST['tgl'];
$tl=$_POST['tl'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$no=$_POST['nt'];
$pa=$_POST['pa'];
$lt=$_POST['lt'];
$jab=$_POST['jab'];
$pass=$_POST['pass'];
if (isset($_POST['input'])) {
	mysql_query("UPDATE `tbl_guru` SET `nama`='$nama',`jenis_kelamin`='$jk',`tempat_lahir`='$tl',`tgl_lahir`='$tgl',`agama`='$agama',`no_telp`='$no',`pendidikan_akhir`='$pa',`lulus_tahun`='$lt',`jabatan`='$jab',`password`='$pass',`alamat`='$alamat' WHERE id_guru='$id'");
 echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Guru Berhasil Diupdate',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('guru.php');
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