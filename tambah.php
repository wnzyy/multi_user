<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
 <h2>Simple CRUD</h2>
<p><a href="halamansiswa.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
<h3>Tambah Data Siswa</h3>
//membuat form untuk menambah data siswa yang nantinya menuju link tambah_proses.php dan methodnya tertulis/tertera pada url yaitu menggunakan method post
<form action="tambah_proses.php" method="post">
 <table cellpadding="3" cellspacing="0">
  <tr>
   <td>NIS</td>
   <td>:</td>
   //required artinya harus diisi dan jika belum diisi tidak akan bisa dikirim/submit
   <td><input type="text" name="NIS" required></td>
  </tr>
  <tr>
   <td>Nama</td>
   <td>:</td>
   <td><input type="text" name="nama" size="30" required></td>
  </tr>
  <tr>
   <td>Tempat Lahir</td>
   <td>:</td>
   <td><input type="text" name="tempat_lahir" size="30" required></td>
  </tr>
  <tr>
   <td>tanggal lahir</td>
   <td>:</td>
   <td><input type="text" name="tanggal_lahir" size="30" required></td>
  </tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td>:</td>
   <td><input type="text" name="jenis_kelamin" size="30" required></td>
  </tr>
  <tr>
   <td>Agama</td>
   <td>:</td>
   <td>
    <select name="agama" required>
     <option value="">Pilih Agama</option>
     <option value="Islam">Islam</option>
     <option value="Kristen">Kristen</option>
     <option value="Buddha">Buddha</option>
     <option value="Konghucu">konghucu</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>ayah</td>
   <td>:</td>
   <td><input type="text" name="ayah" size="30" required></td>
  </tr>
  <tr>
   <td>Ibu</td>
   <td>:</td>
   <td><input type="text" name="ibu" size="30" required></td>
  </tr>
  <tr>
   <td>Pekerjaan Ayah</td>
   <td>:</td>
   <td><input type="text" name="pekerjaan_ayah" size="30" required></td>
  </tr>
  <tr>
   <td>Pekerjaan Ibu</td>
   <td>:</td>
   <td><input type="text" name="pekerjaan_ibu" size="30" required></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><input type="text" name="alamat" size="30" required></td>
  </tr>
  <tr>
   //&nbsp; merupakan konversi kode dari tanda spasi
   <td>&nbsp;</td>
   <td></td>
   //data yang telah diketik akan dikirim/submit dengan nama tambah
   <td><input type="submit" name="tambah" value="Tambah"></td>
  </tr>
 </table>
</form>
</body>
</html>