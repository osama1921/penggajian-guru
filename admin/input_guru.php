  <?php
  session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
  include('config.php');
  $query=mysql_query("SELECT * FROM tbl_guru") or die(mysql_error());
$min=0000000000;
$max=9999999999;
$rand=rand($min,$max);

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
      <h1>Input Data Guru</h1>
      </div>

  <div class="formi">
 <div class="row table-responsive">
 <form action="aksi_input_guru.php" method="POST">
 <div class="col-xs-6" style="position: relative;">
    <table>
    <!-- form input kiri -->
      <tr>
        <td>ID Guru</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Id Guru" class="form-control" name="id" required="required"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Nama</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Nama" class="form-control" name="nama" required="required"></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td>
        <select class="form-control" name="jk">
        <option>---Jenis Kelamin---</option>
          <option>Laki-Laki</option>
          <option>Perempuan</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Tempat Lahir" class="form-control" name="tl"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="date" placeholder="Nama" class="form-control" name="tgl"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Agama</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Agama" class="form-control" name="agama"></td>
      </tr>
    </table>
    </div>

 <div class="col-xs-6">
    <table>
    <!-- form input kanan -->
    
      <tr>
        <td>Alamat</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Alamat" class="form-control" name="alamat"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td>No Telepon</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="No Telepon" class="form-control" name="nt"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Pendidikan Akhir</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Pendidikan Akhir..." class="form-control" name="pa"></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
         <td>Lulus Tahun</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Lulus Tahun" class="form-control" name="lt"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jabatan</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Jabatan" class="form-control" name="jab"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
      <input type="hidden" placeholder="Password" class="form-control" name="pass" value="<?php echo $rand;?>">
        <td>Password</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Password" class="form-control" name="pass" value="<?php echo $rand;?>" disabled></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
       <td>&nbsp;</td> <td><input type="submit" value="Input" name="input" class="btn btn-success "></td> <td><input type="reset" value="Cancel" class="btn btn-warning"></td>
      </tr>
    </table>
    </div>
    </form>
    <div class="col-xs-12">
      <a href="guru.php"><button class="btn btn-default fa fa-step-backward">  Kembali</button></a>
    </div>
    </div>
  </div>
   </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    

      <script  src="js/index.js"></script>




  </body>

  </html>
