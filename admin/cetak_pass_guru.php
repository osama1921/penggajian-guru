  <?php
  session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
  include('config.php');
  $query=mysql_query("SELECT * FROM tbl_guru") or die(mysql_error());
  $per=4;
  $page= isset($_GET['page']) ? (int) $_GET['page'] : 1;
 $start = ($page>1) ? ($page*$per)-$per : 0 ;
  $q=mysql_query("SELECT * FROM tbl_guru limit $start, $per"); 
  $total=mysql_num_rows($query);
  $pages = ceil($total/$per);

  ?>
  <!DOCTYPE html>
  <html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="sweetalert-1-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-1-master/dist/sweetalert.css">
    
  </head>

  <body>
<script type="text/javascript">
  window.print();
</script>
<center><h2>Cetak Kartu Guru</h2></center>
<br>

</div>
<br>
<div class="row">
  <div class="col-xs-1">
  </div>

        <?php
$a=1;
  while ($data=mysql_fetch_array($q)) { ?>
  <div class="boxx">
    <div class="boxpas col-xs-4">
    <center><h4>Penggajian Guru SMKN 1 Pandeglang</h4></center>
    <br>
    <table>
    <tr>
    <td>ID GURU</td><td><b>:</b></td><td>&nbsp;</td><td><?php echo $data['id_guru'];?></td>
    </tr>
    <tr>
    <td>Nama Guru</td><td><b>:</b></td><td>&nbsp;</td><td><?php echo $data['nama'];?></td>
    </tr>
    <tr>
    <td>Jabatan</td><td><b>:</b></td><td>&nbsp;</td><td><?php echo $data['jabatan'];?></td>
    </tr>
    <tr>
    <td>Password</td><td><b>:</b></td><td>&nbsp;</td><td><?php echo $data['password'];?></td>
    </tr>
    </table>
  </div>
  </div>
  <div class="col-xs-1">
  </div>
     <?php }

        ?>
          </div>
        </div>
   </div>
  </div>
  
  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/jquery-1.9.1.min.js"></script>
<script src="js/qunit-1.23.1.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="sweetalert-1-master/dist/sweetalert.min.js"></script>
<script src="js/qunit-1.23.1.js"></script>

<script type="text/javascript">
</script>

  </body>

  </html>
