<?php

include('config.php');
$id=$_GET['id'];
$q=mysql_query("SELECT * FROM `tbl_gaji` WHERE `id_guru`='$id'") or die(mysql_error());
$i=mysql_fetch_array($q);
$q2=mysql_query("SELECT * FROM `tbl_tunjangan` WHERE `id_guru`='$id'") or die(mysql_error());
$i2=mysql_fetch_array($q2);
$q3=mysql_query("SELECT * FROM `tbl_guru` WHERE `id_guru`='$id'") or die(mysql_error());
$i3=mysql_fetch_array($q3);
$q1=mysql_query("SELECT SUM(jumlah_jam) FROM `tbl_jam` WHERE `id_guru`='$id'") or die(mysql_error());
$i1=mysql_fetch_array($q1);
$content ='
<style type="text/css">
</style>

';
$content .='
<page>
<center><h2>Rincian Gaji</h2></center>

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
    <td>'.$i1["SUM(jumlah_jam)"]*4.'</td>
  </tr>
  <tr>
    <td>Jumlah Masuk</td>
    <td>:</td>
    <td>'.$i["jml_hadir"].'</td>
     <td>Gaji Perjam</td>
    <td>:
    </td>
    <td>'."Rp. ".$i["gaji_perjam"]."".'</td>
  </tr>
  <tr>
    <td>Jumlah Sakit</td>
    <td>:</td>
    <td>'.$i["jml_sakit"].'
    </td>
    <td>Gaji Sakit</td>
    <td>:
    </td>
    <td>'."Rp. "$i['gaji_perjam']/2.'</td>
  </tr>
  <tr>
    <td>Jumlah Tidak Masuk </td>
    <td>:</td>
    <td>'.$i["jml_thadir"].'</td>
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
    <td>'."Rp.".$i2["jml_tunjangan"]."".'</td>
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
    <td>'."Rp. ".$i["total_gaji"]."".'</td>
  </tr>
</table>
</div>
<div class="col-xs-6">
  <table class="table-responsive">
    <tr>
      <td>Id Guru</td>
      <td>:</td>
      <td>'.$i["id_guru"].'</td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>'.$i3["nama"].'</td>
    </tr>
    <tr>
      <td>No Rekening</td>
      <td>:</td>
      <td>'.$i["no_rekening"].'</td>
    </tr>
    <tr>
      <td>Bank</td>
      <td>:</td>
      <td>'.$i["bank"].'</td>
    </tr>
    <tr>
      <td>Atas Nama</td>
      <td>:</td>
      <td>'.$i["nama"].'</td>
    </tr>
    <tr>
      <td>Status Transfer</td>
      <td>:</td>
      <td>'.$i['status'].'</td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td>:</td>
      <td>'.$i["tanggal"].'</td>
    </tr>
  </table>
</div>
</div>';
} $content .='
</page>
';


require_once("../admin/pdf/html2pdf.class.php");
$html2pdf = new HTML2PDF('L','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Rincian Gaji.pdf');

?>