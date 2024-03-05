<html>
<head>
 <title>data siswa</title>
</head>
<body>
 <h2>Data Siswa</h2>
<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

<table cellpadding="5" cellspacing="0" border="1">
<thead>
 <tr bgcolor="#CCCCCC">
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Pekerjaan ayah</th>
            <th>Pekerjaan ibu</th>
            <th>Alamat</th>
            <th>Opsi</th>
 </tr>
</thead>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo "<td>".$data['NIS']."</td>";
   echo "<td>".$data['nama']."</td>";
   echo "<td>".$data['tempat_lahir']."</td>";
   echo "<td>".$data['tanggal_lahir']."</td>";
   echo "<td>".$data['jenis_kelamin']."</td>";
   echo "<td>".$data['agama']."</td>";
   echo "<td>".$data['ayah']."</td>";
   echo "<td>".$data['ibu']."</td>";
   echo "<td>".$data['pekerjaan_ayah']."</td>";
   echo "<td>".$data['pekerjaan_ibu']."</td>";
   echo "<td>".$data['alamat']."</td>";
   echo'<td><center><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
  }
 }
?>
</table>
</body>
</html>