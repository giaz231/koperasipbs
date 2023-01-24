-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2019 pada 16.41
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyasappweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `gaji_pokok` int(15) DEFAULT NULL,
  `tunjangan` int(15) DEFAULT NULL,
  `umur` int(10) DEFAULT NULL,
  `alamat` text,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `nama_pegawai`, `gaji_pokok`, `tunjangan`, `umur`, `alamat`, `tanggal_lahir`, `tempat_lahir`) VALUES
(6, 'adi', 10000000, 2500000, 25, 'alaksdjkfhasdjfhlksajdhf', '2019-06-19', 'surabaya'),
(7, 'gyas', 10000000, 3500000, 25, 'jln Pisangan Baru', '2019-06-20', 'Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_user`
--

CREATE TABLE `super_user` (
  `idsuper_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `nama_supuser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `super_user`
--

INSERT INTO `super_user` (`idsuper_user`, `email`, `password_user`, `nama_supuser`) VALUES
(1, 'user1@yahoo.com', 'user1', 'Nama user 1'),
(2, 'gyas.mira@yahoo.com', 'gyasmira', 'Gyas Mira');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indeks untuk tabel `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`idsuper_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idpegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `super_user`
--
ALTER TABLE `super_user`
  MODIFY `idsuper_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
