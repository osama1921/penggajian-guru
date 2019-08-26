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
  <div class="sidebar">
    <ul>
      <li><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li><a href="guru.php"><i class="fa fa-user"></i><span>Input Data Guru</span></a></li>
      <li><a href="pelajaran.php"><i class="fa fa-book"></i><span>Input Mata Pelajaran</span></a></li>
      <li><a href="staf.php"><i class="fa fa-calendar"></i><span>Input Kehadiran</span></a></li>
      <li><a href="tunjangan.php"><i class="fa fa-dollar"></i><span>Input Tunjangan</span></a></li>
      <li><a href="gaji.php"><i class="fa fa-money"></i><span>Input Gaji</span></a></li>
      <li><a href="Backup.php"><i class="fa fa-cloud-download"></i><span>Backup Data</span></a></li>
  </div>

  <!-- Content -->
 
      <div class="cover">
  </div>
  <div class="main">
    <div class="hipsum">
      <div class="jumbotron">
      <h1>Data Guru</h1>
      </div>
<div class="in">
<a href="input_guru.php">
<button class="btn btn-success fa fa-pencil">  Input</button></a>
<a href="laporan_guru.php"><button class="btn btn-default fa fa-download">  Download Laporan Guru</button></a>
<a href="cetak_laporan_guru.php"><button class="btn btn-default fa fa-print">  Cetak Laporan Guru</button></a>
<a href="cetak_pass_guru.php"><button class="btn btn-default fa fa-print">  Cetak Kartu Guru</button></a>
</div>
<br>
<div id="load-data">
 <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th >Id Guru</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Pendidikan Terakhir</th>
            <th>Lulus Tahun</th>
            <th>Jabatan</th>
            <th>Password</th>
            <th colspan="2"><center>Action</center></th>
          </tr>
        </thead>
        <?php
$a=1;
  while ($data=mysql_fetch_array($q)) { ?>
  <tbody>
          <tr>
            <th scope="row"><?php echo $a++; ?></th>
            <td><?php echo $data['id_guru']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['tempat_lahir']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['pendidikan_akhir']; ?></td>
            <td><?php echo $data['lulus_tahun']; ?></td>
            <td><?php echo $data['jabatan']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><a href="edit_guru.php?id=<?php echo $data['id_guru']; ?>"><button class="btn btn-info fa fa-edit">  Edit</button></a></td>
            <div ></div>
            <td><a href="delete_guru.php?id=<?php echo $data['id_guru'];?>" id="idd" data-id="<?php echo $data['id_guru']; ?>">
            <button class="btn btn-danger fa fa-trash" name="del" id="id" data-id="<?php echo $data['id_guru']; ?>">   Delete</button></a></td>
          </tr>
          </tbody>
     <?php }

        ?>
        </table>
          </div>
        </div>
          <?php for ($i=1; $i < $pages ; $i++) { ?>
          <ul class="pagination">
          <li><a href="?page=<?php echo $i; ?>"><?php echo $i;?></li></a>
          </ul>
          <?php }

?>
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
 jQuery(document).ready(function($){
            $('#id').on('click',function(){
                var idd= document.getElementById('idd');
                swal({
                             title: 'Apakah Anda Yakin?',
      text: 'Akan Menghapus Data Ini Secara Permanen!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya Hapus',
      showLoaderOnConfirm: true,
                        },function(){
                        window.location = idd;
                    });
                return false;
            });
        });
</script>

  </body>

  </html>
