<html>
<head>
 <title>Form Input Data Siswa</title>
</head>
<body>
 <center>
     <?php echo validation_errors();?>
 <form action="<?= base_url('datasiswa/cetak'); ?>"method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Siswa
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
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <td>Nis</td>
 <td>:</td>
 <td>
 <input type="text" name="nis" id="nis">
 </td>
 </tr>
 <tr>
 <td>Kelas</td>
 <td>:</td>
 <td>
 <input type="text" name="kelas" id="kelas">
 </td>
 </tr>
 <tr>
 <td>Tanggal lahir</td>
 <td>:</td>
 <td>
 <input type="date" name="lahir" id="lahir">
 </td>
 </tr>
 <tr>
 <td>Tempat Lahir</td>
 <td>:</td>
 <td>
 <input type="text" name="tempat" id="tempat">
 </td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td>:</td>
 <td>
 <input type="text" name="alamat" id="alamat">
 </td>
 </tr>
 <tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>
<input type="radio" name="jeskel" value="Laki-laki"> Laki-laki<br>
<input type="radio" name="jeskel" value="Perempuan"> Perempuan<br>
</td>
</tr>
 <tr>
 <td>Agama</td>
 <td>:</td>
 <td>
 <select name="agama" id="agama">
 <option value="">Pilih Agama</option>
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Katolik">Katolik</option>
 <option value="Buddha">Buddha</option>
 <option value="Hindu">Hindu</option>
 <option value="Konghucu">Konghucu</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>