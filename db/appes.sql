-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 06:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appes`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id_user` varchar(225) NOT NULL,
  `kode_guru` varchar(225) NOT NULL,
  `nama_guru` varchar(225) NOT NULL,
  `no_telp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `id_user`, `kode_guru`, `nama_guru`, `no_telp`) VALUES
(1, '10', '1121', 'Rere Hening', '08154421452226'),
(2, '18', '303555', 'Yanti Rahayuningrum', '085676812345');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(225) NOT NULL,
  `pelanggaran` text DEFAULT NULL,
  `poin` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `pelanggaran`, `poin`) VALUES
(1, 'Merokok di Dalam Kelas', 200),
(2, 'Membawa Sajam di Area Sekolah', 200),
(3, 'Memakai Seragam Tidak Sesuai Ketentuan', 3),
(4, 'Membawa Perlengkapan Make Up', 10),
(5, 'Tatanan Rambut Tidak Sesuai Ketentuan', 5),
(6, 'Datang Terlambat Tanpa Alasan', 3),
(7, 'Tidak Masuk Sekolah Tanpa Keterangan', 8),
(8, 'Meninggalkan Pelajaran Tanpa Ijin (Membolos)', 10),
(9, 'Bertato', 15),
(10, 'Berkelahi di Area Sekolah Maupun Luar Sekolah Saat Mengenakan Seragam Sekolah', 200),
(11, 'Melakukan Bullying', 100),
(12, 'Melakukan Tindak Asusila', 800);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `id_user` varchar(225) NOT NULL,
  `nama_pengaduan` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status_pengaduan` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `id_pelanggaran` int(225) NOT NULL DEFAULT 1,
  `terlapor` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `id_user`, `nama_pengaduan`, `deskripsi`, `tanggal`, `status_pengaduan`, `foto`, `id_pelanggaran`, `terlapor`) VALUES
(13, '10', 'test', 'test', '2022-05-20 10:11:51', '0', '', 5, '1'),
(14, '4', 'Yogi terlihat membully adik kelas, di area gudang sekolah.', 'Yogi terlihat membully adik kelas, di area gudang sekolah.', '2023-07-10 03:51:50', '0', '1476081711-cara-ampuh_md.jpg', 11, '12');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nis` varchar(225) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `kelas` varchar(225) DEFAULT NULL,
  `no_telp` varchar(225) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `no_induk` varchar(225) DEFAULT NULL,
  `poin_siswa` int(225) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `nis`, `nama_siswa`, `kelas`, `no_telp`, `email`, `no_induk`, `poin_siswa`) VALUES
(1, 4, '14023', 'Firda Salsabila', 'X RPL', '081425411441', 'firsalbila@gmail.com', '183069113', -200),
(2, 5, '140111', 'Ninda Rahayuningrum', 'XI Mekatronika 2', '081276610918', 'nindaaryu@gmail.com', '152768991', 0),
(11, 22, '14020', 'Raniah Nur Putri', 'XII Rekayasa Perangkat Lunak 2', '087771209856', 'raniptr091@gmail.com', '18311109', 0),
(12, 23, '14063', 'Yogi Ramdhani', 'XI Mekatronika 1', '', NULL, '18890179', -100);

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` varchar(225) NOT NULL,
  `id_user` varchar(225) NOT NULL,
  `tanggapan` text NOT NULL,
  `tanggal_tanggapan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(4, 'firdasalsabila', '1234', 'siswa'),
(5, 'nindarahayu', 'nindarahayu5', 'siswa'),
(10, 'rerening1', 'guru1', 'guru'),
(18, 'yanti2', 'guru2', 'guru'),
(22, 'raniahnur', 'raniahnur9', 'siswa'),
(23, 'yogir666', 'yogi666', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
