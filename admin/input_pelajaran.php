  <?php
  session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
  include('config.php');
  $query=mysql_query("SELECT * FROM tbl_guru") or die(mysql_error());

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
      <h1>Input Data Pelajaran</h1>
      </div>

  <div class="formi">
 <div class="row table-responsive">
 <form action="aksi_input_pelajaran.php" method="POST">
 <div class="col-xs-12" style="position: relative;">
    <table>
    <!-- form input kiri -->
      <tr>
        <td>ID Guru</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td>  <select class="form-control" name="id"  id="id">
        <option>--- ID Guru ---</option>
       <?php
       while ($data=mysql_fetch_array($query)) { ?>
       <option><?php echo $data['id_guru'];?></option>
     <?php  }
     ?>
        </select></td>
      </tr>
     
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Bidang Study</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" placeholder="Bidang Study" class="form-control" name="bs"></td>
      </tr>
        <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Jumlah Jam</td><td>&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp; </td><td><input type="text" class="form-control" placeholder="Jumlah Jam" name="jj"></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
      <td><input type="submit" value="Input" name="input" class="btn btn-success "></td> <td><input type="reset" value="Cancel" class="btn btn-warning"></td><td></td>
      </tr>
    </table>
    </div>
    </form>
    <div class="col-xs-12"><br>
    <br>
      <a href="pelajaran.php"><button class="fa fa-step-backward btn btn-default">  Kembali</button></a>
    </div>
    </div>
  </div>
   </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    

      <script  src="js/index.js"></script>



  </body>

  </html>
