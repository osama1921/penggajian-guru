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
session_destroy();
echo "
 <script>
  setTimeout(function () {  
   swal({
    title: 'Berhasil',
    text: 'Anda Telah Log Out',
    type: 'success',
    timer: 5000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('index.php');
  },5000); 
 </script>";
?>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="admin/sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin/sweetalert-1-master/dist/sweetalert.css">
<script src="js/qunit-1.23.1.js"></script>
</body>
</html>	