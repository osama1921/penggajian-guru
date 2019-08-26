  <?php
  session_start();
if (!isset($_SESSION['id'])){
header("Location:home.php");
}
  include('config.php');
  $query=mysql_query("SELECT * FROM tbl_guru") or die(mysql_error());
  $per=10;
  $page= isset($_GET['page']) ? (int) $_GET['page'] : 1;
 $start = ($page>1) ? ($page*$per)-$per : 0 ;
  $q=mysql_query("SELECT * FROM tbl_guru ORDER BY id_guru ASC limit $start, $per "); 
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
 
    <div class="header">
    <a href="#" id="menu-action">
      <i class="fa fa-bars"></i>
      <span>Close</span>
    </a>
    <div class="logo">
     Penggajian Guru 
  <a href="logout.php"><button class="fa fa-sign-out btn btn-primary" style="position: relative; float: right; margin-top: 10px;margin-right: 8px;">Log Out</button></a>
    </div>

  </div>

  <!-- Content -->
 
      <div class="cover">
  </div>
  <div class="main">
    <div class="hipsum">
      <div class="jumbotron">
      <h1>Backup Data</h1>
      </div>
            <div class="in">
      </div>
   </div>
  </div>
  <?php
include('config.php');
$tables='*';
$koneksi = mysql_connect("localhost","root","");  
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$table_name = "tbl_guru";
$backup_file  = "/tmp/guru.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
 
mysql_select_db('guru');
$backup = mysql_query( $sql, $koneksi );
if(! $backup )
{
  die('Gagal Backup: ' . mysql_error());
}
echo "Backup Berhasil\n";
mysql_close($koneksi );
?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/jquery-1.9.1.min.js"></script>
<script src="js/qunit-1.23.1.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="sweetalert-1-master/dist/sweetalert.min.js"></script>
<script src="js/qunit-1.23.1.js"></script>

  </body>

  </html>
