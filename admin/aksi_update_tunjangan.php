<?php include('config.php');
?>
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

$id=$_POST['id'];
$query=mysql_query("SELECT * FROM tbl_guru WHERE id_guru='$id'");
$data=mysql_fetch_array($query);
$nama=$data['nama'];
$jm=$_POST['bs'];
if ($jm==0) {
  $tunj=500000;
  if (isset($_POST['input'])) {
  mysql_query("UPDATE `tbl_tunjangan` SET `jml_anak`='$jm',`jml_tunjangan`='$tunj' WHERE `id_guru`='$id' ");
   echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Tunjangan ".$nama." Berhasil Di Update',
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
 if($jm==1 OR $jm <= 3){
  $tunj=750000;
 if (isset($_POST['input'])) {
  mysql_query("UPDATE `tbl_tunjangan` SET `jml_anak`='$jm',`jml_tunjangan`='$tunj' WHERE `id_guru`='$id' ");
   echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Tunjangan ".$nama." Berhasil Di Update',
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
else if($jm>3){
  $tunj=1000000;

if (isset($_POST['input'])) {
  mysql_query("UPDATE `tbl_tunjangan` SET `jml_anak`='$jm',`jml_tunjangan`='$tunj' WHERE `id_guru`='$id' ");
   echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Data Tunjangan ".$nama." Berhasil Di Update',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('tunjangan.php');
  },5000); 
 </script>";
}}

?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-1-master/dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html> 