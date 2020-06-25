-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 12.01
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
  `email_mahasiswa` varchar(64) NOT NULL,
  `file_pp` varchar(255) DEFAULT 'upload/profile_pict/p1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `username_mahasiswa`, `biografi_mahasiswa`, `password_mahasiswa`, `email_mahasiswa`, `file_pp`) VALUES
(7, 'toriq', 'T23', 'ra duwe biografi', 'toriq23', 'toriq@gmail.com', 'p1.jpg'),
(8, 'real', 'realnaver', 'tak punya biografi', 'realman', 'real@gmail.com', 'udinus.jpg'),
(9, 'Hanif Abdillah ', 'hanifabd', 'Uwowww batsss gessssstt', '1234567', 'hanifabd23@gmail.com', '20200625_105541.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(10) NOT NULL,
  `id_mahasiswa` int(10) NOT NULL,
  `foto_karya` varchar(255) DEFAULT 'upload/upload_foto_karya',
  `judul` varchar(64) NOT NULL,
  `id_platform` int(10) NOT NULL,
  `deskripsi` varchar(264) NOT NULL,
  `jumlah_view` int(10) NOT NULL,
  `tgl_upload` date NOT NULL,
  `tgl_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `id_mahasiswa`, `foto_karya`, `judul`, `id_platform`, `deskripsi`, `jumlah_view`, `tgl_upload`, `tgl_edit`) VALUES
(21, 8, 'thumb_sample2.jpg', 's', 3, 's', 0, '2020-05-24', '0000-00-00'),
(22, 8, 'thumb_sample.png', 'uji 11111', 5, 'uji uji', 0, '2020-06-24', '2020-06-25'),
(23, 9, 'ssd.png', 'Creative Labs', 3, 'PUNYA HMTI GAESS', 0, '2020-06-21', '0000-00-00');

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
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tabel_platform`
--
ALTER TABLE `tabel_platform`
  MODIFY `id_platform` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
