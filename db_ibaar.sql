-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2022 pada 08.11
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ibaar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_profile`
--

CREATE TABLE `tabel_profile` (
  `id_siswa` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `jenjang_pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_profile`
--

INSERT INTO `tabel_profile` (`id_siswa`, `nama_depan`, `nama_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `jenjang_pendidikan`) VALUES
(5, 'jerin', 'al-syamsiah', 'Tasikmalaya', '0000-00-00', 'p', 'argari', 'smknu'),
(6, 'Levi', 'Pelangi', 'Tasikmalaya', '0000-00-00', 'L', 'kxjcn', 'S1'),
(7, 'jerin', 'nursa', 'tasik', '0000-00-00', 'L', 'ree4rer', 'reefrr'),
(8, 'jerin', 'nursa', 'tasik', '0000-00-00', 'L', 't5r4rtrg', 'grsgfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nisn` varchar(50) NOT NULL,
  `siswa_nis` varchar(20) NOT NULL,
  `siswa_nama_lengkap` varchar(100) NOT NULL,
  `siswa_tempat_lahir` varchar(50) NOT NULL,
  `siswa_tgl_lahir` date NOT NULL,
  `siswa_nohp` varchar(20) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`siswa_id`, `siswa_nisn`, `siswa_nis`, `siswa_nama_lengkap`, `siswa_tempat_lahir`, `siswa_tgl_lahir`, `siswa_nohp`, `program_id`) VALUES
(2, '8042397', '7234789234', 'abdul juni', 'bantar', '2003-02-17', '0897767765443', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_profile`
--
ALTER TABLE `tabel_profile`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_profile`
--
ALTER TABLE `tabel_profile`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
