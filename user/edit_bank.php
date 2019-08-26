<?php
session_start();
if (!isset($_SESSION['id'])){
header("Location:../index.php");
}
include('config.php');
$id=$_GET['id'];
$q=mysql_query("SELECT * FROM tbl_gaji WHERE id_guru='$id'") or die(mysql_error());
$i=mysql_fetch_array($q);
$q2=mysql_query("SELECT * FROM tbl_tunjangan WHERE id_guru='$id'") or die(mysql_error());
$i2=mysql_fetch_array($q2);
$q3=mysql_query("SELECT * FROM tbl_guru WHERE id_guru='$id'") or die(mysql_error());
$i3=mysql_fetch_array($q3);
$q1=mysql_query("SELECT SUM(jumlah_jam) FROM tbl_jam WHERE id_guru='$id'") or die(mysql_error());
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
  <div class="header">
  <a href="#" id="menu-action">
    <i class="fa fa-bars"></i>
    <span>Close</span>
  </a>
  <div class="logo">
   Penggajian Guru 
  </div>

</div>


<!-- Content -->
<div class="main">
  <div class="hipsum">
    <div class="jumbotron">
      <h1>Edit Data Bank</h1>
    </div>
    <form action="aksi_edit_bank.php" method="POST">
    <div class="formi">
    <div class="table table-responsive">
    <div class="">
    <table>
    <tr>
<input type="hidden" value="<?php echo $id;?>" name="id">
           <td>Bank</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input value="" class="form-control" name="bank" placeholder="Bank"></td>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>NO Rekening</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="No Rekening" class="form-control" name="no"></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Atas Nama</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" class="form-control" placeholder="Atas Nama" name="an"></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Password Anda</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="password" class="form-control" placeholder="Ketikan Password Anda" name="pass"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <tr>
      <td><input type="submit" value="Input" name="input" class="btn btn-success "></td><td><a href="data_bank.php"><button class="btn btn-default fa fa-step-backward">  Kembali</button></a></td>
      </tr>
      </table></div></div></div>
 </form>
 </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/index.js"></script>




</body>

</html>
