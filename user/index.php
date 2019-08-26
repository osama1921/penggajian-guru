<?php
session_start();
if (!isset($_SESSION['id'])){
header("Location:../index.php");
}
$id=$_GET['id'];
if ($num=mysql_num_rows(mysql_query("SELECT * FROM tbl_guru WHERE id_guru='$id'"))<0) {
  # code...
}
include('config.php');
$q = mysql_query("SELECT SUM(jumlah_jam) FROM tbl_jam WHERE id_guru='$id'");
$a = mysql_fetch_array($q);
$hadir = $a['SUM(jumlah_jam)']*4/100;
$q2= mysql_query("SELECT * FROM tbl_gaji WHERE id_guru='$id'");
$b= mysql_fetch_array($q2);
$persen=$b['jml_hadir']*$hadir;
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Penggajian Guru</title>
  
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

      <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  
</head>

<body>

  <div class="header">
  <a href="#" id="menu-action">
    <i class="fa fa-bars"></i>
    <span>Close</span>
  </a>
  <div class="logo">
   Penggajian Guru 
  <button class="fa fa-sign-out btn btn-primary" style="position: relative; float: right; margin-right: 10px; margin-top: 10px;">Log Out</button>
  </div>

</div>
<div class="sidebar">
  <ul>
    <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
    <li><a href="gaji.php?id=<?php echo $id;?>"><i class="fa fa-money"></i><span>Gaji</span></a></li>
    <li><a href="data_bank.php?id=<?php echo $id;?>"><i class="fa fa-bank"></i><span>Data Bank</span></a></li>
</div>

<!-- Content -->
<div class="main">
  <div class="hipsum">
    <div class="jumbotron">
     <div class="row">
        <a href=""><div class="box col-xs-3">
           <center><h3 class="h3">Presentase Kehadiran</h3></center>
         <span class="p"><div class="fa fa-calendar con">
         </div></span><span style="font-size: 37px; color:#8c8c8c;"><?php echo " ".$persen."%"; ?></span>
        </div>
          </a>
        <div class="col-xs-1"></div>
           <a href=""> <div class="box col-xs-3">
        <center><h3 class="h3">Total Gaji</h3></center>
         <span class="p"><div class="fa fa-money con">
         </div></span><span style="font-size: 20px; color:#8c8c8c;"><?php echo " Rp. ".$b['total_gaji'].""; ?></span>
           
            </div>
            </a>
         <div class="col-xs-1"></div>
            <a href=""><div class="box col-xs-3">
    
        <center><h3 class="h3">Status Transfer</h3></center>
         <span class="p"><div class="fa fa-send-o con">
         </div></span><span style="font-size: 23px; color:#8c8c8c;"><center><?php echo " ".$b['status']."";?></center></span>
                    
              </div>
              </a>
    </div>
 </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/index.js"></script>




</body>

</html>
