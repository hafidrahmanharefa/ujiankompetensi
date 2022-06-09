-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 06.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmahasiswa`
--

CREATE TABLE `tblmahasiswa` (
  `idmhs` int(11) NOT NULL,
  `namamhs` varchar(50) NOT NULL,
  `telpmhs` varchar(12) NOT NULL,
  `thnmhs` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblmahasiswa`
--

INSERT INTO `tblmahasiswa` (`idmhs`, `namamhs`, `telpmhs`, `thnmhs`) VALUES
(7, 'Hafid Rahman Harefa', '081234567890', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpekerjaan`
--

CREATE TABLE `tblpekerjaan` (
  `idkerja` int(11) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblpekerjaan`
--

INSERT INTO `tblpekerjaan` (`idkerja`, `pekerjaan`, `instansi`, `jabatan`) VALUES
(3, 'CEO', 'Tesla', 'DIREKTUR'),
(4, 'Teknisi', 'Telkom', 'Karyawan'),
(5, 'Teknisi', 'Telkom', 'Karyawan'),
(6, 'Kasir', 'Indoapril', 'Staff'),
(7, 'Manager', 'Maju Jaya', 'Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbstudi`
--

CREATE TABLE `tbstudi` (
  `idstudi` int(11) NOT NULL,
  `kampus` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbstudi`
--

INSERT INTO `tbstudi` (`idstudi`, `kampus`, `jurusan`) VALUES
(1, 'Universitas Brawijaya', 'Teknik Komputer'),
(2, 'POLMED', 'Teknik Komputer'),
(3, 'USU', 'Teknik Mesin'),
(4, 'USU', 'Sistem Informasi'),
(5, 'UMA', 'Manajemen'),
(6, 'ITB', 'Teknik Nuklir'),
(7, 'USU', 'Teknik Listrik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'hafidrahmanharefa', '$2y$10$II0DoTQ2HLhqyULgdjGU3OA5OFI.Rind8YvjP9xM4CwT0Qy/gR2LW', 'Hafid Rahman Harefa'),
(2, 'hafidrahmanharefa', '$2y$10$6bh8hoVqaa3Kc9hkq5Ixgubxn2VjNWpOiWIGbzDvqkHnQ6K1xBIBK', 'Hafid Rahman Harefa'),
(3, 'root', '$2y$10$pyHtLP6P8jLIcDJtUajXAuCAFpV.W0H1oRjXIXzA0TzrSnYXhcrRK', ''),
(4, 'hafidrahmanharefa', '$2y$10$DYsuRKE25LT/ZjmLZoBI1.toHQ9paSxJYdoSjhc0wbP4x97PlKZtO', 'Hafid Rahman Harefa'),
(5, 'username', '$2y$10$oHUPwUR9/FusRLgQm//V7ubFWb4m6xzNppxBE4nEaakiTaLNpfN8m', 'Hafid');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  ADD PRIMARY KEY (`idmhs`);

--
-- Indeks untuk tabel `tblpekerjaan`
--
ALTER TABLE `tblpekerjaan`
  ADD PRIMARY KEY (`idkerja`);

--
-- Indeks untuk tabel `tbstudi`
--
ALTER TABLE `tbstudi`
  ADD PRIMARY KEY (`idstudi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  MODIFY `idmhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblpekerjaan`
--
ALTER TABLE `tblpekerjaan`
  MODIFY `idkerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbstudi`
--
ALTER TABLE `tbstudi`
  MODIFY `idstudi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
