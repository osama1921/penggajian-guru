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
$bank=$_POST['bank'];
$no=$_POST['no'];
$perjam=$_POST['Gaji'];
$nama=$_POST['an'];
$status=$_POST['status'];
$q1=mysql_query("SELECT * FROM tbl_kehadiran WHERE id_guru='$id'");
$q2=mysql_query("SELECT * FROM tbl_tunjangan WHERE id_guru='$id'");
$tanggal = mktime(date('m'), date("d"), date('Y'));
$dat=date("d-m-Y ", $tanggal );
$data2=mysql_fetch_array($q2);
$tunj=$data2['jml_tunjangan'];
$data=mysql_fetch_array($q1);
$jmlh=$data['jumlah_hadir'];
$sakit=$data['jml_sakit'];
$jmlt=$data['jml_thadir'];
$nama1=$data['nama'];
$num=mysql_num_rows($q1);
$tsak=$perjam/2*$sakit;
$tj=$jmlh*$perjam;
$to=($tsak+$tj+$tunj);
$pajak=5/100*$to;
$total=$to-$pajak;
if($id==0){
echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Gagal',
    text: 'Silahkan Masukkan ID GURU',
    type: 'error',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('input_gaji.php');
  },5000); 
 </script>"; 

}
else if($num==0){
echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Gagal',
    text: 'Silahkan Masukkan Data Kehadiran Terlebih Dahulu',
    type: 'error',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('input_hadir.php');
  },5000); 
 </script>"; 
} 
else if($perjam<=0){
echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Gagal',
    text: 'Silahkan Masukkan Gaji Perjam Terlebih Dahulu',
    type: 'error',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('input_gaji.php');
  },5000); 
 </script>"; 

}
else{
	mysql_query("INSERT INTO `tbl_gaji`(`id_guru`, `jml_hadir`, `jml_sakit`, `jml_thadir`, `gaji_perjam`, `total_gaji`, `bank`, `no_rekening`, `nama`,`tanggal`, `status`) VALUES (
		'$id','$jmlh','$sakit','$jmlt','$perjam','$total','$bank','$no','$nama','$dat','$status')");
 echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Gaji ".$nama1." Berhasil Ditambahkan',
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
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>