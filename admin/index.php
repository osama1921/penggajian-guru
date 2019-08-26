<?php
session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
include('config.php');
$q1=mysql_query("SELECT * FROM tbl_guru") or die(mysql_error());
$guru=mysql_num_rows($q1);
$q2=mysql_query("SELECT * FROM tbl_jam") or die(mysql_error());
$mata=mysql_num_rows($q2);
$q3=mysql_query("SELECT * FROM tbl_kehadiran") or die(mysql_error());
$hadir=mysql_num_rows($q3);
$q4=mysql_query("SELECT * FROM tbl_tunjangan") or die(mysql_error());
$tunj=mysql_num_rows($q4);
$q5=mysql_query("SELECT * FROM tbl_gaji") or die(mysql_error());
$gaji=mysql_num_rows($q5);
$q6=mysql_query("SELECT * FROM tbl_gaji WHERE status='Sudah Transfer'") or die(mysql_error());
$sudah=mysql_num_rows($q6);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  
</head>

<body>

  <div class="header">
  <a href="#" id="menu-action">
    <i class="fa fa-bars"></i>
    <span>Close</span>
  </a>
  <div class="logo">
   Penggajian Guru 
  <a href="../logout.php"><button class="fa fa-sign-out btn btn-primary" style="position: relative; float: right; margin-top: 10px;margin-right: 8px;">Log Out</button></a>
  </div>

</div>
<div class="sidebar">
  <ul>
    <li><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
    <li><a href="guru.php"><i class="fa fa-user"></i><span>Input Data Guru</span></a></li>
    <li><a href="pelajaran.php"><i class="fa fa-book"></i><span>Input Mata Pelajaran</span></a></li>
    <li><a href="staf.php"><i class="fa fa-calendar"></i><span>Input Kehadiran</span></a></li>
    <li><a href="tunjangan.php"><i class="fa fa-dollar"></i><span>Input Tunjangan</span></a></li>
    <li><a href="gaji.php"><i class="fa fa-money"></i><span>Input Gaji</span></a></li>
</div>

<!-- Content -->
<div class="main">
  <div class="hipsum">
    <div class="jumbotron">
      <div class="row">
        <a href="guru.php"><div class="box col-xs-3">
        <center><h3 class="h3">Data Guru</h3></center>
         <span class="p"><div class="fa fa-users con">
         </div></span><span style="font-size: 70px; color:#8c8c8c; float:right;"><?php echo $guru;?></span>
         
        </div>
          </a>
        <div class="col-xs-1"></div>
           <a href="pelajaran.php"> <div class="box col-xs-3">
        <center><h3 class="h3">Data Mata Pelajaran</h3></center>
         <span class="p"><div class="fa fa-book con">
         </div></span><span style="font-size: 70px; color:#8c8c8c; float:right;"><?php echo $mata;?></span>
           
            </div>
            </a>
         <div class="col-xs-1"></div>
            <a href="staf.php"><div class="box col-xs-3">
      <center><h3 class="h3">Data Kehadiran</h3></center>
         <span class="p"><div class="fa fa-calendar con">
         </div></span><span style="font-size: 70px; color:#8c8c8c; float:right;"><?php echo $hadir;?></span>
                    
              </div>
              </a>
    </div>
   </div>
    
    <div class="jumbotron">
      <div class="row">
          <a href="tunjangan.php">
       <div class="box col-xs-3">
           <center><h3 class="h3">Data Tunjangan</h3></center>
         <span class="p"><div class="fa fa-dollar con">
         </div></span><span style="font-size: 70px; color:#8c8c8c; float:right;"><?php echo $tunj;?></span>
          
       </div>
       </a>
      <div class="col-xs-1"></div>
     <a href="gaji.php">
     <div class="box col-xs-3">
       <center><h3 class="h3">Data Gaji</h3></center>
         <span class="p"><div class="fa fa-money con">
         </div></span><span style="font-size: 70px; color:#8c8c8c; float:right;"><?php echo $gaji;?></span>
     
     </div>
     </a>
      <div class="col-xs-1"></div>
     <a href="gaji.php">
     <div class="box col-xs-3">
       <center><h3 class="h3">
       Gaji Yang Sudah Di Transfer</h3></center>
         <span class="p"><div class="fa fa-send con">
         </div></span><span style="font-size: 70px; color:#8c8c8c; float:right;"><?php echo $sudah;?></span>
     
     </div>
     </a>
     </div>
 </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
