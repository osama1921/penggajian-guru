  <?php
  session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
  include('config.php');
$id=$_GET['id'];
  $query=mysql_query("SELECT * FROM tbl_kehadiran WHERE id_guru='$id'") or die(mysql_error());
$data=mysql_fetch_array($query);
  ?>
  <!DOCTYPE html>
  <html lang="en" >

  <head>
    <meta charset="UTF-8">
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
 
    </div>

  </div>

  <!-- Content -->
  <div class="main">
    <div class="hipsum">
      <div class="jumbotron">
      <h1>Update Data Pelajaran</h1>
      </div>

  <div class="formi">
 <div class="row table-responsive">
 <form action="aksi_update_hadir.php" method="POST">
 <div class="col-xs-12" style="position: relative;">
    <table>
    <!-- form input kiri -->
    <input type="hidden" value="<?php echo $data['id_guru'];?>" class="form-control" name="id" >
      <tr>
        <td>ID Guru</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['id_guru'];?>" class="form-control" name="id" disabled ></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Nama</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['nama'];?>" class="form-control" name="nama"></td>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jumlah Hadir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" class="form-control" value="<?php echo $data['jumlah_hadir'];?>" name="jh"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jumlah Sakit</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" class="form-control" value="<?php echo $data['jml_sakit'];?>" name="js"></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
      <td><input type="submit" value="Update" name="input" class="btn btn-success "></td> <td><input type="reset" value="Cancel" class="btn btn-warning"></td><td></td>
      </tr>
    </table>
    </div>
    </form>
    <div class="col-xs-12"><br>
    <br>
      <a href="staf.php"><button class="fa fa-step-backward btn btn-default">  Kembali</button></a>
    </div>
    </div>
  </div>
   </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    

      <script  src="js/index.js"></script>



  </body>

  </html>
