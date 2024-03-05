<?php
 include('koneksi.php');
 $NIS=$_POST['NIS'];
 $Nama=$_POST['nama'];
 $Tempat_Lahir=$_POST['tempat_lahir'];
 $Tanggal_Lahir=$_POST['tanggal_lahir'];
 $Jenis_Kelamin=$_POST['jenis_kelamin'];
 $Agama=$_POST['agama'];
 $Ayah=$_POST['ayah'];
 $Ibu=$_POST['ibu'];
 $Pekerjaan_Ayah=$_POST['pekerjaan_ayah'];
 $Pekerjaan_Ibu=$_POST['pekerjaan_ibu'];
 $Alamat=$_POST['alamat'];

 $sql = "INSERT INTO siswa (`NIS`, `nama`, `tempat_lahir`,`tanggal_lahir`, `jenis_kelamin`, `agama`, `ayah`, `ibu`,  `pekerjaan_ayah`,  `pekerjaan_ibu`,  `alamat`) VALUES ('$NIS', '$Nama', '$Tempat_Lahir','$Tanggal_Lahir', '$Jenis_Kelamin', '$Agama', '$Ayah', '$Ibu,  '$Pekerjaan_Ayah',  '$Pekerjaan_Ibu',  '$Alamat')";
 $query = mysqli_query($db, $sql);
 header('location:halamansiswa.php');
?>