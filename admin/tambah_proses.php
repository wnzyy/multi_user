<?php
require ('halamansiswa.php');
//karena diform menggunakan POST jadi disini kita menggunakan $_POST
 //include artinya memanggil file koneksi.php
 include('koneksi.php');
 $NIS=$_POST['NIS'];
 $nama=$_POST['nama'];
 $tempat_lahir=$_POST['tempat_lahir'];
 $tanggal_lahir=$_POST['tanggal_lahir'];
 $jenis_kelamin=$_POST['jenis_kelamin'];
 $agama=$_POST['agama'];
 $ayah=$_POST['ayah'];
 $ibu=$_POST['ibu'];
 $pekerjaan_ayah=$_POST['pekerjaan_ayah'];
 $pekerjaan_ibu=$_POST['pekerjaan_ibu'];
 $alamat=$_POST['alamat'];
 //kode untuk inputan supaya apa yang diketik diform halaman tambah tadi bisa terinput ke database siswa
 $sql=mysqli_query($koneksi,"INSERT INTO siswa VALUES('','$NIS', '$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$ayah', '$ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$alamat')")or
 die(mysql_error());
 //jika inputan berhasil akan tampil teks berhasil
 if($input){
  echo'Data berhasil ditambahkan! ';
  echo'<a href="halamansiswa.php">Kembali</a>';
 //jika inputan gagal akan tampil teks gagal
 }else{
  echo'Gagal menambahkan data! ';
  echo'<a href="halamansiswa.php">Kembali</a>';
 }
?>