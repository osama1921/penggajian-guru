<?php
session_start();
if (!isset($_SESSION['id'])){
header("Location:../index.php");
}
include('config.php');
$id=$_GET['id'];
$q=mysql_query("SELECT * FROM `tbl_gaji` WHERE `id_guru`='$id'") or die(mysql_error());
$i=mysql_fetch_array($q);
$q2=mysql_query("SELECT * FROM `tbl_tunjangan` WHERE `id_guru`='$id'") or die(mysql_error());
$i2=mysql_fetch_array($q2);
$q3=mysql_query("SELECT * FROM `tbl_guru` WHERE `id_guru`='$id'") or die(mysql_error());
$i3=mysql_fetch_array($q3);
$q1=mysql_query("SELECT SUM(jumlah_jam) FROM `tbl_jam` WHERE `id_guru`='$id'") or die(mysql_error());
$i1=mysql_fetch_array($q1);
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
    <h1>Data Bank Anda</h1>
     <div class="row">
          <div class="col-xs-4 col-md-4">
          <table>
            <tr>
              <td>No Rekening</td><td>&nbsp; : &nbsp;</td><td>&nbsp;</td><td><?php echo $i['no_rekening'];?></td>
            </tr>

          </table>
          </div>
        <div class="col-xs-3 col-md-4">
          <table>
            <tr>
              <td>Nama Bank</td><td>&nbsp;: &nbsp; </td><td>&nbsp;</td><td><?php echo $i['bank'];?></td>
            </tr>

          </table>
          </div>
          <div class="col-xs-3 col-md-4">
          <table>
            <tr>
              <td>Atas Nama</td><td>&nbsp; : &nbsp;</td><td>&nbsp;</td><td><?php echo $i['nama'];?></td>
            </tr>

          </table>
        </div>
        <br>
        <br>
        <div class="col-xs-6">
        <a href="edit_bank.php?id=<?php echo $id;?>"><button class="btn btn-info fa fa-edit">  Edit Data Bank</button></a>
      </div>
      </div>
    </div>
 </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/index.js"></script>




</body>

</html>
