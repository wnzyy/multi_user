<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $alamat = $_POST['alamat'];

    // buat query
    $sql = "INSERT INTO siswa (NIS, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, ayah, ibu, pekerjaan_ayah, pekerjaan_ibu, alamat) VALUE ( '$NIS', '$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$ayah', '$ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$alamat' )";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: adminstator.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: adminstator.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>