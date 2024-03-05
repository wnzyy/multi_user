-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 20.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_level`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kd_agama` varchar(20) NOT NULL,
  `nama_agama` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagi_kelas`
--

CREATE TABLE `bagi_kelas` (
  `kelas` varchar(29) DEFAULT NULL,
  `tahun` int(20) DEFAULT NULL,
  `NIS` int(20) DEFAULT NULL,
  `no_presensi` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` int(20) NOT NULL,
  `nama` varchar(46) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `marital` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_pt` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `lulus` varchar(50) NOT NULL,
  `golongan` varchar(40) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `Jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `kelas` varchar(20) DEFAULT NULL,
  `tahun` int(20) DEFAULT NULL,
  `mapel` varchar(30) DEFAULT NULL,
  `hari` varchar(25) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` int(20) NOT NULL,
  `nama_mapel` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `tahun` int(20) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `Nis` int(20) DEFAULT NULL,
  `semester` varchar(25) NOT NULL,
  `nil_b_indo` varchar(50) NOT NULL,
  `nil_matematika` varchar(50) NOT NULL,
  `nil_agama` varchar(50) NOT NULL,
  `nil_ipa` varchar(50) NOT NULL,
  `nil_pkn` varchar(50) NOT NULL,
  `nil_ips` varchar(50) NOT NULL,
  `nil_sbk` varchar(50) NOT NULL,
  `nil_penjas` varchar(50) NOT NULL,
  `nil_b_ing` varchar(50) NOT NULL,
  `nil_mulok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(20) NOT NULL,
  `nama` varchar(46) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `ayah`, `ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`) VALUES
(98765, 'NAKLNK', 'a jsmxkmanK', 'XMKa', 'axnkN', 'Islam', ' XANKZ', 'XKAJKX', 'aIOQJ', 'KLSJnkc', 'akjOQj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahunajaran` int(20) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'adminstator', 'adminstator', '123', 'adminstator'),
(2, 'siswa', 'siswa', '123', 'siswa'),
(3, 'guru', 'guru', '123', 'guru'),
(4, 'staff', 'staff', '123', 'staff'),
(5, 'orang tua', 'orang_tua', '123', 'orang_tua'),
(6, 'admin sekolah', 'admin_sekolah', '123', 'admin_sekolah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indeks untuk tabel `bagi_kelas`
--
ALTER TABLE `bagi_kelas`
  ADD KEY `kelas` (`kelas`,`tahun`,`NIS`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `tahun` (`tahun`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `agama` (`agama`),
  ADD KEY `agama_2` (`agama`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `kelas` (`kelas`,`tahun`,`mapel`) USING BTREE,
  ADD KEY `tahun` (`tahun`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `tahun` (`tahun`),
  ADD KEY `tahun_2` (`tahun`,`kelas`,`Nis`),
  ADD KEY `Nis` (`Nis`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `agama` (`agama`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahunajaran`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kd_mapel` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bagi_kelas`
--
ALTER TABLE `bagi_kelas`
  ADD CONSTRAINT `bagi_kelas_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE SET NULL,
  ADD CONSTRAINT `bagi_kelas_ibfk_2` FOREIGN KEY (`tahun`) REFERENCES `tahun_ajaran` (`id_tahunajaran`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`agama`) REFERENCES `agama` (`kd_agama`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`tahun`) REFERENCES `tahun_ajaran` (`id_tahunajaran`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`Nis`) REFERENCES `siswa` (`NIS`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
