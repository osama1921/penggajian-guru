
  <div class="header">
  <a href="#" id="menu-action">
    <i class="fa fa-bars"></i>
    <span>Close</span>
  </a>
  <div class="logo">
   Penggajian Guru 
  <a href="../logout.php"> <button class="fa fa-sign-out btn btn-primary" style="position: relative; float: right; margin-right: 10px; margin-top: 10px;">Log Out</button></a>
  </div>

</div>
<div class="sidebar">
  <ul>
    <li><a href="index.php?id=<?php echo $id;?>"><i class="fa fa-home"></i><span>Home</span></a></li>
    <li><a href="gaji.php?id=<?php echo $id;?>"><i class="fa fa-money"></i><span>Gaji</span></a></li>
        <li><a href="data_bank.php?id=<?php echo $id;?>"><i class="fa fa-bank"></i><span>Data Bank</span></a></li>
</div>
<!-- Content -->
<div class="main">
  <div class="hipsum">
    <div class="jumbotron">
    <center><h1>Rincian Gaji</h1></center>
<div class="row">
<div class="col-xs-6">
<table class="table-responsive">
  <tr>
    <td>Jumlah Jam</td>
    <td>:</td>
    <td><?php echo $i1['SUM(jumlah_jam)']*4;?></td>
  </tr>
  <tr>
    <td>Jumlah Masuk</td>
    <td>:</td>
    <td><?php echo $i['jml_hadir'];?></td>
     <td>Gaji Perjam</td>
    <td>:
    </td>
    <td><?php echo "Rp. ".$i['gaji_perjam']."";?></td>
  </tr>
  <tr>
    <td>Jumlah Sakit</td>
    <td>:</td>
    <td><?php echo $i['jml_sakit'];?>
    </td>
    <td>Gaji Sakit</td>
    <td>:
    </td>
    <td><?php echo "Rp. "; echo $i['gaji_perjam']/2;?></td>
  </tr>
  <tr>
    <td>Jumlah Tidak Masuk </td>
    <td>:</td>
    <td><?php echo $i['jml_thadir'];?></td>
  </tr>
  <tr>

  </tr>
  <tr>
    <td>Tunjagan</td>
    <td>:
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo "Rp.".$i2['jml_tunjangan']."";?></td>
  </tr>
  <tr>
    <td>Pajak</td>
    <td>:</td>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5%</td>
  </tr>
  <tr>
    <td>
      Total Gaji Yang di Dapat:
    </td>
    <td>:</td>
     <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo "Rp. ".$i['total_gaji']."";?></td>
  </tr>
</table>
</div>
<div class="col-xs-6">
  <table class="table-responsive">
    <tr>
      <td>Id Guru</td>
      <td>:</td>
      <td><?php echo $i['id_guru'];?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?php echo $i3['nama'];?></td>
    </tr>
    <tr>
      <td>No Rekening</td>
      <td>:</td>
      <td><?php echo $i['no_rekening'];?></td>
    </tr>
    <tr>
      <td>Bank</td>
      <td>:</td>
      <td><?php echo $i['bank'];?></td>
    </tr>
    <tr>
      <td>Atas Nama</td>
      <td>:</td>
      <td><?php echo $i['nama'];?></td>
    </tr>
    <tr>
      <td>Status Transfer</td>
      <td>:</td>
      <td><?php echo $i['status'];?></td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td>:</td>
      <td><?php echo $i['tanggal'];?></td>
    </tr>
  </table>
</div>
</div>
<br>
<br>
<center>
<a href="rincian.php?id=<?php echo $i['id_guru'];?>"><button onclick="window.print();" class="fa fa-print btn btn-info">  Print</button></a> 
</center>  
    </div>
 </div>
</div>
   <script type="text/javascript">
      function print(){

window.print();

      }
    </script>