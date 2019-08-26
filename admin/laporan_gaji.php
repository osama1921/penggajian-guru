<?php

 include('config.php');
  $q=mysql_query("SELECT * FROM tbl_gaji") or die(mysql_error());
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
<h2>Laporan Data Gaji</h2>
<table border="1" class="table" >
	<tr>
		    <th>No</th>
            <th>Id Guru</th>
            <th>Jumlah Hadir</th>
            <th>Gaji Perjam</th>
            <th>Total Gaji</th>
            <th>Bank</th>
            <th>No Rekening</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>

	</tr>';
		$a=1;
		include('config.php');
		$query=mysql_query("SELECT * FROM tbl_gaji") or die(mysql_error());
		while ($data=mysql_fetch_array($q)) { 
		 $content .='
		 <tbody>
          <tr>
                       <td>'.$a++.'</td>
            <td>'.$data["id_guru"].'</td>
            <td>'.$data["jml_hadir"].'</td>
            <td>'.$data["gaji_perjam"].'</td>
            <td>'.$data["total_gaji"].'</td>
            <td>'.$data["bank"].'</td>
            <td>'.$data["no_rekening"].'></td>
            <td>'.$data["nama"].'</td>
            <td>'.$data["tanggal"].'</td>
            <td>'.$data["status"].'</td>

          </tr>
          </tbody>';
} $content .='
</table>
</page>
';


require_once("/pdf/html2pdf.class.php");
$html2pdf = new HTML2PDF('L','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Data Gaji Guru.pdf');
?>