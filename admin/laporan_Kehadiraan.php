<?php

 include('config.php');
  $q=mysql_query("SELECT * FROM tbl_kehadiran") or die(mysql_error());
$content ='
<style type="text/css">
  
  .table {
    border-collapse: collapse;
 
  }
  .table th{
    padding: 8px, 5px; background-color:#cccccc; 
  }
</style>

';
$content .='
<page>
<h2>Laporan Data Guru</h2>
<table border="1" class="table" >
  <tr>
             <th>No</th>
            <th>Id Guru</th>
            <th>Nama</th>
            <th>Jumlah Hadir</th>
            <th>Jumlah Tanpa Keterangan</th>
            <th>Jumlah Sakit</th>
  </tr>';
    $a=1;
    include('config.php');
    $query=mysql_query("SELECT * FROM tbl_kehadiran") or die(mysql_error());
    while ($data=mysql_fetch_array($q)) { 
     $content .='
     <tbody>
          <tr>
              <th scope="row">'.$a++.'</th>
            <td>'.$data['id_guru'].'</td>
            <td>'.$data['nama'].'</td>
            <td>'.$data['jumlah_hadir'].'</td>
            <td>'.$data['jml_thadir'].'</td>
            <td>'.$data['jml_sakit'].'</td>
          </tr>
          </tbody>';
} $content .='
</table>
</page>
';


require_once("/pdf/html2pdf.class.php");
$html2pdf = new HTML2PDF('L','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Data Kehadiran.pdf');
?>