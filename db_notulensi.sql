-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_notulensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama`, `alamat`, `nik`, `id_user`) VALUES
(1, 'Irwan Karim', 'Desa Mongolato. Telaga, kab. Gorontalo', '757111114', 1),
(2, 'Hurip Mokodompit', 'Jl. Jeruk, Wumialo', '75711111918', 3),
(3, 'Yunus Tone', 'Jl. Beringin RT002 RW001, Huangobotu, Dungingi, Kota Gorontalo', '81278741', 5),
(4, 'Soemarto Abas', 'Jl. HOS Cokroaminoto, Heledulaa, Kota Timur, Kota Gorontalo', '757538282', 6),
(5, 'Rahmat Ma\'aruf', 'Jl. Manado 77, Liluwo, Kota Tengah, Kota Gorontalo', '75632721', 7),
(6, 'Sutikno Hadi', 'Ling V, Hutuo, Limboto, Kab Gorontalo', '75371661', 8),
(7, 'Andriyadi', 'Jl. R.Atje Selamet, Leato Selatan, Dumbo raya, Kota Gorontalo', '758918713', 9),
(8, 'Idham Helingo', 'Jl. Mangga, Perum Asparaga, Huangobotu, Dungingi, Kota Gorontalo', '750193982', 10),
(9, 'Sofyan Djalilu Monoarfa', 'Jl. Rajawali, Heledulaa Selatan, Kota Timur, Kota Gorontalo', '7513415516', 11),
(10, 'Rommi Razak', 'Jl. Bengawan Solo, Ayula Selatan, Bolango Selatan, Bone Bolango', '75281912', 12),
(11, 'Mohamad Rendy Limullah', 'Jl. Rambutan, Buladu, Kota Barat, Kota Gorontalo', '759282178', 13),
(12, 'Romi Tumu', 'Jl. Thayeb Moh. Gobel, Kel. Tapa, Sipatana, Kota Gorontalo', '75632161', 14),
(13, 'Jefrianto Suleman', 'Jl. Kenangan, Dulalowo Timur, Kota Tengah, Kota Gorontalo', '75216126', 15),
(14, 'Asnandy Sudarmono', 'Jl. Beringin, Tuladenggi, Dungingi, Kota Gorontalo', '752926723', 16),
(15, 'Ridwan Soman Bilalea', 'Jl. Cut Nyak Dien, Huledulaa Timur, Kota Tengah, Kota Gorontalo', '75623626521', 17),
(16, 'Sandi Yerri Tapahing', 'Jl. S.Parman, Biawao, Kota Selatan, Kota Gorontalo', '7526165652', 18),
(17, 'Mohamad Kaunang', 'Jl. Yusuf Hasiru, Bulotadaa Timur, Sipatana, Kota Gorontalo', '7581716423', 19),
(18, 'Ismail K. Nurudji', 'Dusun III, Tenggela, Tilanggo, Kab. Gorontalo', '7526225614', 20),
(19, 'Nyoman Sudiawan', 'Jl. Mangga, Perum Asparaga, Huangobotu, Dungingi, Kota Gorontalo', '7528284761', 21),
(20, 'Malik Pakaja', 'Desa Luwohu, Kec. Botupingge, Kab. Gorontalo', '75626615615', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kehadiran`
--

CREATE TABLE `tb_kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id_rapat` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepala`
--

CREATE TABLE `tb_kepala` (
  `id_kepala` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `mulai_thn_jabatan` date NOT NULL,
  `akhir_thn_jabatan` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kepala`
--

INSERT INTO `tb_kepala` (`id_kepala`, `id_anggota`, `mulai_thn_jabatan`, `akhir_thn_jabatan`, `id_user`) VALUES
(1, 1, '2017-03-01', '2021-02-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rapat`
--

CREATE TABLE `tb_rapat` (
  `id_rapat` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `id_kepala` int(11) NOT NULL,
  `hal` varchar(255) NOT NULL,
  `hasil_rapat` text NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rapat`
--

INSERT INTO `tb_rapat` (`id_rapat`, `id_undangan`, `id_kepala`, `hal`, `hasil_rapat`, `tgl`) VALUES
(1, 1, 1, 'pembahasan keuangan tahun 2021', 'keuangan tahun 2020 membaik', '2021-02-22'),
(5, 4, 1, 'pembahasan keuangan tahun 2021', 'berhasil menambahkan rapat', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_undangan`
--

CREATE TABLE `tb_undangan` (
  `id_undangan` int(11) NOT NULL,
  `hal` text NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_undangan`
--

INSERT INTO `tb_undangan` (`id_undangan`, `hal`, `tgl`, `waktu`, `tempat`) VALUES
(1, 'pembahasan keuangan tahun 2021', '2021-02-08', '17:04:28', 'Gorontalo'),
(4, 'Perihal rapat tahunan koperasi g-car', '2021-02-16', '08:00:00', 'koperasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'kepala', '202cb962ac59075b964b07152d234b70', 1),
(2, 'notulis', '202cb962ac59075b964b07152d234b70', 2),
(3, 'anggota', '202cb962ac59075b964b07152d234b70', 3),
(4, 'huripmokodompit@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(5, 'yunustone@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(6, 'soemartoabas@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(7, 'rahmatma\'aruf@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(8, 'sutiknohadi@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(9, 'andriyadi@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(10, 'idhamhelingo@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(11, 'sofyanmonoarfa@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(12, 'rommyrazak@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(13, 'mohamadrendy@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(14, 'romitumu@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(15, 'jefriantosuleman@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(16, 'asnandysudarmono', '202cb962ac59075b964b07152d234b70', 3),
(17, 'ridwansoman@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(18, 'sandiyerri@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(19, 'mohamadkaunang@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(20, 'ismailnurudji@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(21, 'nyomansudiawan@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(22, 'malikpakaja@gmail.com', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_verifikasi`
--

CREATE TABLE `tb_verifikasi` (
  `id_verifikasi` int(11) NOT NULL,
  `id_rapat` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `anggota_user` (`id_user`);

--
-- Indexes for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`),
  ADD KEY `kehadiran_anggota` (`id_anggota`),
  ADD KEY `kehadiran_rapat` (`id_rapat`);

--
-- Indexes for table `tb_kepala`
--
ALTER TABLE `tb_kepala`
  ADD PRIMARY KEY (`id_kepala`),
  ADD KEY `tb_user` (`id_user`),
  ADD KEY `tb_anggota` (`id_anggota`);

--
-- Indexes for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  ADD PRIMARY KEY (`id_rapat`),
  ADD KEY `rapat_undangan` (`id_undangan`),
  ADD KEY `rapat_kepala` (`id_kepala`);

--
-- Indexes for table `tb_undangan`
--
ALTER TABLE `tb_undangan`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `id_rapat` (`id_rapat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kepala`
--
ALTER TABLE `tb_kepala`
  MODIFY `id_kepala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  MODIFY `id_rapat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_undangan`
--
ALTER TABLE `tb_undangan`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  MODIFY `id_verifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `anggota_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD CONSTRAINT `kehadiran_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`),
  ADD CONSTRAINT `kehadiran_rapat` FOREIGN KEY (`id_rapat`) REFERENCES `tb_rapat` (`id_rapat`);

--
-- Constraints for table `tb_kepala`
--
ALTER TABLE `tb_kepala`
  ADD CONSTRAINT `tb_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`),
  ADD CONSTRAINT `tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_rapat`
--
ALTER TABLE `tb_rapat`
  ADD CONSTRAINT `rapat_kepala` FOREIGN KEY (`id_kepala`) REFERENCES `tb_kepala` (`id_kepala`),
  ADD CONSTRAINT `rapat_undangan` FOREIGN KEY (`id_undangan`) REFERENCES `tb_undangan` (`id_undangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
