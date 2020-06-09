-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 08.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) NOT NULL,
  `nama_mahasiswa` varchar(64) NOT NULL,
  `username_mahasiswa` varchar(64) NOT NULL,
  `biografi_mahasiswa` varchar(266) NOT NULL,
  `password_mahasiswa` varchar(64) NOT NULL,
  `email_mahasiswa` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `username_mahasiswa`, `biografi_mahasiswa`, `password_mahasiswa`, `email_mahasiswa`) VALUES
(3, 'user', '', '', 'userman', 'user@gmail.com'),
(4, 'contoh', '', '', 'c21', 'contoh@gmail.com'),
(5, 'dicoba', '', '', 'coba2', 'coba@gmail.com'),
(6, 'aku', '', '', 'aaa', 'aku@gmail.com'),
(7, 'toriq', 'T23', 'ra duwe biografi', 'toriq23', 'toriq@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(10) NOT NULL,
  `id_mahasiswa` int(10) NOT NULL,
  `foto_karya` varchar(64) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `id_platform` int(10) NOT NULL,
  `deskripsi` varchar(264) NOT NULL,
  `jumlah_view` int(10) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `id_mahasiswa`, `foto_karya`, `judul`, `id_platform`, `deskripsi`, `jumlah_view`, `tgl_upload`) VALUES
(5, 7, '', 'bu', 5, 'uu', 0, '2009-06-20'),
(6, 7, '', 'kioi', 3, 'yfyudu', 0, '2009-06-20'),
(7, 7, '', 'yfifi', 5, 'ugiyy', 0, '2020-06-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_platform`
--

CREATE TABLE `tabel_platform` (
  `id_platform` int(10) NOT NULL,
  `nama_platform` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_platform`
--

INSERT INTO `tabel_platform` (`id_platform`, `nama_platform`) VALUES
(1, 'website'),
(2, 'PWA'),
(3, 'Android'),
(4, 'Ios'),
(5, 'Dekstop'),
(6, 'X-Platform');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `tabel_platform`
--
ALTER TABLE `tabel_platform`
  ADD PRIMARY KEY (`id_platform`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_platform`
--
ALTER TABLE `tabel_platform`
  MODIFY `id_platform` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
