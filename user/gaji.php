<?php
session_start();
if (!isset($_SESSION['id'])){
header("Location:../index.php");
}
include('config.php');
$id=$_GET['id'];
$q=mysql_query("SELECT * FROM `tbl_gaji` WHERE `id_guru`='$id'") or die(mysql_error());
$num=mysql_num_rows($q);
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
<?php
if ($i['bank']=="" or $i['no_rekening']=="" or $i['nama']=="") {
header("location:fungsi.php?id=".$id."");
}
else{
  include('total.php');
}

?>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="../js/index.js"></script>
    <script type="text/javascript">
    </script>
</body>

</html>
