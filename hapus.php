
<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query_hapus = $koneksi->query("DELETE FROM siswa WHERE NIS='$id'")or die(mysql_error());
header("location:halamansiswa.php?pesan=hapus");
?>