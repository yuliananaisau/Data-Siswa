<html>
<head>
 <title>Tampil Data Siswa</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Siswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <td>Nama</td>
 <td>:</td>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <td>NIS</td>
 <td>:</td>
 <td>
 <?= $nis; ?>
 </td>
 </tr>
 <tr>
 <td>Kelas</td>
 <td>:</td>
 <td>
 <?= $kelas; ?>
 </td>
 </tr>
 <tr>
 <td>Tanggal lahir</td>
 <td>:</td>
 <td>
 <?= $lahir; ?>
 </td>
 </tr>
 <tr>
 <td>Tempat Lahir</td>
 <td>:</td>
 <td>
 <?= $tempat; ?>
 </td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td>:</td>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>
 <tr>
 <td>Jenis Kelamin</td>
 <td>:</td>
 <td>
 <?= $jeskel; ?>
 </td>
 </tr>
 <tr>
 <td>Agama</td>
 <td>:</td>
 <td>
 <?= $agama; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('datasiswa'); 
?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
 </body>
</html>