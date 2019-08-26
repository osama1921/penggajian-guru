  <?php
  session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
  include('config.php');
  $id=$_GET['id'];
  $query=mysql_query("SELECT * FROM tbl_guru WHERE id_guru='$id'") or die(mysql_error());
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
      <h1>Update Data Guru</h1>
      </div>

  <div class="formi">
 <div class="row table-responsive">
 <form action="aksi_update_guru.php" method="POST">
 <div class="col-xs-6" style="position: relative;">
    <table>
    <!-- form input kiri -->
    <tr>
      </td><td><input type="hidden" value="<?php echo $data['id_guru']; ?>" class="form-control" name="id" required="required"></td>
      <tr>
        <td>ID Guru</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['id_guru']; ?>" class="form-control" name="id" required="required" disabled></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Nama</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['nama'];?>" class="form-control" name="nama" required="required"></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td>
        <select class="form-control" name="jk">
        <?php 
if ($data['jenis_kelamin']=="Laki-Laki") {
 ?>
 <option>Laki-Laki</option>
 <option>Perempuan</option>
<?php } 
else{
?>
<option>Perempuan</option>
<option>Laki-Laki</option>
<?php }
        ?>
          </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['tempat_lahir'];?>" class="form-control" name="tl"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="date" value="<?php echo $data['tgl_lahir'];?>" class="form-control" name="tgl"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Agama</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['agama'];?>" class="form-control" name="agama"></td>
      </tr>
    </table>
    </div>

 <div class="col-xs-6">
    <table>
    <!-- form input kanan -->
    
      <tr>
        <td>Alamat</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['alamat'];?>" class="form-control" name="alamat"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td>No Telepon</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['no_telp'];?>" class="form-control" name="nt"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Pendidikan Akhir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['pendidikan_akhir'];?>" class="form-control" name="pa"></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
         <td>Lulus Tahun</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['lulus_tahun'];?>" class="form-control" name="lt"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jabatan</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['jabatan'];?>" class="form-control" name="jab"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Password</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" value="<?php echo $data['password'];?>" class="form-control" name="pass"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
       <td>&nbsp;</td> <td><input type="submit" value="Update" name="input" class="btn btn-success "></td> <td><input type="reset" value="Cancel" class="btn btn-warning"></td>
      </tr>
    </table>
    </div>
    </form>
    <div class="col-xs-12">
      <a href="guru.php"><button class="btn btn-default">Kembali</button></a>
    </div>
    </div>
  </div>
   </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    

      <script  src="js/index.js"></script>




  </body>

  </html>
