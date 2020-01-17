-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2019 pada 12.20
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `f_id_admin` int(5) NOT NULL,
  `f_email` varchar(25) NOT NULL,
  `f_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`f_id_admin`, `f_email`, `f_password`) VALUES
(1, 'admin@com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_department`
--

CREATE TABLE `tbl_department` (
  `f_id_department` int(5) NOT NULL,
  `f_kode_bag` varchar(10) NOT NULL,
  `f_nama_bagian` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_department`
--

INSERT INTO `tbl_department` (`f_id_department`, `f_kode_bag`, `f_nama_bagian`) VALUES
(1, 'ADM', 'ADMIN'),
(2, 'IT', 'STAFF IT'),
(3, 'OPR', 'OPERATOR'),
(4, 'HRD', 'HRD'),
(5, 'MRKT', 'MARKETING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `f_id_nilai` int(5) NOT NULL,
  `f_email` varchar(25) NOT NULL,
  `f_jawaban_pelamar` char(2) NOT NULL,
  `f_hasil` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`f_id_nilai`, `f_email`, `f_jawaban_pelamar`, `f_hasil`) VALUES
(21, 'pelamar@com', 'C', 0),
(22, 'pelamar@com', 'E', 0),
(23, 'pelamar@com', 'C', 1),
(24, 'pelamar@com', 'E', 1),
(25, 'pelamar@com', 'A', 1),
(26, 'intan@gmail.com', 'A', 0),
(27, 'intan@gmail.com', 'D', 0),
(28, 'intan@gmail.com', 'B', 1),
(29, 'intan@gmail.com', 'E', 0),
(30, 'intan@gmail.com', 'A', 1),
(31, 'intan@gmail.com', 'C', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `f_id_lowongan` int(5) NOT NULL,
  `f_syarat` varchar(225) NOT NULL,
  `f_tgl_post` date NOT NULL,
  `f_tgl_penutupan` varchar(15) NOT NULL,
  `f_kode_bag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`f_id_lowongan`, `f_syarat`, `f_tgl_post`, `f_tgl_penutupan`, `f_kode_bag`) VALUES
(1, '=>Memiliki pengalaman min 2 thn di bidang IT\r\n=>Usia maks 25 thn\r\n=>Pendidikan minimal D3\r\n=>Tinggi min 160 cm', '2019-08-12', '0000-00-00', 'IT'),
(2, '=>memiliki pengalaman sebagai operator min 1thn\r\n=>Memiliki pendidikan min SMK\r\n=>Usia maks 23thn\r\n=>Memiliki kepribadian yang baik dan sopan', '2019-08-12', '0000-00-00', 'OPR'),
(3, '=>memiliki pengalaman sebagai operator min 1thn\r\n=>Memiliki pendidikan min SMK\r\n=>Usia maks 23thn\r\n=>Memiliki kepribadian yang baik dan sopan', '2019-08-12', '08/15/2019', 'OPR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `f_id_pelamar` int(5) NOT NULL,
  `f_nama_lengkap` varchar(25) NOT NULL,
  `f_jenis_kelamin` varchar(10) NOT NULL,
  `f_agama` varchar(15) NOT NULL,
  `f_status` varchar(15) NOT NULL,
  `f_email` varchar(25) NOT NULL,
  `f_pendidikan_terakhir` varchar(15) NOT NULL,
  `f_dok_ktp` varchar(25) NOT NULL,
  `f_dok_ijazah` varchar(25) NOT NULL,
  `f_dok_lain` varchar(25) NOT NULL,
  `f_tgl_daftar` date NOT NULL,
  `f_kode_bag` varchar(10) NOT NULL,
  `f_hasil_test` int(5) NOT NULL,
  `f_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`f_id_pelamar`, `f_nama_lengkap`, `f_jenis_kelamin`, `f_agama`, `f_status`, `f_email`, `f_pendidikan_terakhir`, `f_dok_ktp`, `f_dok_ijazah`, `f_dok_lain`, `f_tgl_daftar`, `f_kode_bag`, `f_hasil_test`, `f_password`) VALUES
(1, 'tedi lesmana', 'Laki-laki', 'Islam', 'Belum Menikah', 'pelamar@com', 'SMK', 'latarlogin.jpg', 'latarlogin11.jpg', 'Rekrutmen_PT_Len_Industri', '2019-08-12', 'IT', 60, 'pelamar'),
(2, 'Intan Nurmalasari', 'Perempuan', 'Islam', 'Belum Menikah', 'intan@gmail.com', 'SMK', '50.jpg', '2_LEMBAR_2X31.jpg', '2_LEMBAR_2X32.jpg', '2019-08-14', 'IT', 29, 'ada'),
(3, 'Intan Nurmalasari2', 'Perempuan', 'Islam', 'Belum Menikah', 'intan@gmail.com2', 'SMK', '50.jpg', '2_LEMBAR_2X31.jpg', '2_LEMBAR_2X32.jpg', '2019-08-14', 'IT', 40, 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `f_id_soal` int(5) NOT NULL,
  `f_kode_soal` varchar(10) NOT NULL,
  `f_no_soal` int(5) NOT NULL,
  `f_soal` varchar(255) NOT NULL,
  `f_jawaban` char(2) NOT NULL,
  `f_status` varchar(10) NOT NULL,
  `f_opt_a` varchar(225) NOT NULL,
  `f_opt_b` varchar(255) NOT NULL,
  `f_opt_c` varchar(255) NOT NULL,
  `f_opt_d` varchar(255) NOT NULL,
  `f_opt_e` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`f_id_soal`, `f_kode_soal`, `f_no_soal`, `f_soal`, `f_jawaban`, `f_status`, `f_opt_a`, `f_opt_b`, `f_opt_c`, `f_opt_d`, `f_opt_e`) VALUES
(51, 'IT', 1, '																																				4/1=																											', 'D', 'aktif', 'fd', 'dd', 'dfa', 'fd', ''),
(52, 'IT', 2, '																																				3*8=																											', 'C', 'aktif', 'df', 'dfsdf', 'fd', 'd', 'd'),
(53, 'IT', 3, '																																				4*4																											', 'B', 'aktif', 'df', '32', '12', '2', '4'),
(54, 'IT', 4, '																																				5-2=																											', 'A', 'aktif', '53', '3', '2', '24', '2'),
(55, 'IT', 5, 'adfs', 'A', 'aktif', 'fd', 'asd', 'fd', 'dfs', 'dfs'),
(56, 'IT', 6, 'df', 'B', 'aktif', 'd', 'df', 'df', 'd', 'das'),
(58, 'ADM', 1, 'dasADF			', 'B', 'aktif', 'FDSA', 'DSFA', 'DF', 'DSF', 'FDS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`f_id_admin`);

--
-- Indeks untuk tabel `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`f_id_department`);

--
-- Indeks untuk tabel `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`f_id_nilai`);

--
-- Indeks untuk tabel `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`f_id_lowongan`);

--
-- Indeks untuk tabel `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`f_id_pelamar`);

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`f_id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `f_id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `f_id_department` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `f_id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `f_id_lowongan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  MODIFY `f_id_pelamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `f_id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
