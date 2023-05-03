-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 06:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_otp`
--

CREATE TABLE `tb_otp` (
  `id` int(11) NOT NULL,
  `otp` varchar(11) NOT NULL,
  `durasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sdinas`
--

CREATE TABLE `tb_sdinas` (
  `id_dinas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nomer` varchar(20) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pembuka` text NOT NULL,
  `isi` text NOT NULL,
  `penutup` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `otp` varchar(32) DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `jenis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sdinas`
--

INSERT INTO `tb_sdinas` (`id_dinas`, `id_user`, `tanggal`, `nomer`, `sifat`, `lampiran`, `perihal`, `kepada`, `pembuka`, `isi`, `penutup`, `jabatan`, `nama`, `otp`, `status`, `jenis`) VALUES
(5, 3, '2023-03-26 00:00:00', '1', 'Segera', '1', 'Kedatangan', 'Bapak Kepala', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Ketua', 'Imbang Setiawan', '261936', 'SELESAI', 'DINAS'),
(6, 3, '2023-03-26 00:00:00', '2345', 'Privasi', '1', 'Undangan', 'Semua Staff', 'Selamat malam orang yang berbahagi', 'Dengan ini kami menyatkakan banwa jaisdas dapsmdpas ,d', 'iasjdiamspdk asdeasifdmaoi sdnuaisndmoakls', 'Ketua', 'Imbang Setiawan', '421255', 'PENDING', 'DINAS'),
(7, 3, '2023-03-26 00:00:00', '1', 'Segera', '1', '1', 'Bapak', 'adasdas', 'dasdasd', 'asdasdasd', 'Ketua', 'Imbang Setiawan', '', 'PENDING', 'DINAS'),
(8, 3, '2023-03-26 00:00:00', '1', 'Segera', '1', '1', 'Bapak', 'adasdas', 'dasdasd', 'asdasdasd', 'Ketua', 'Imbang Setiawan', '', 'PENDING', 'DINAS'),
(9, 3, '0000-00-00 00:00:00', '1', '1', '1', '1', '1', 'asedasd', 'asdasdasd', 'asdasdasd', 'Ketua', 'Imbang Setiawan', '', 'PENDING', 'DINAS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sintruksi`
--

CREATE TABLE `tb_sintruksi` (
  `id_intruksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `intruksi` varchar(32) NOT NULL,
  `nomer` varchar(32) NOT NULL,
  `tahun` varchar(64) NOT NULL,
  `tentang` varchar(32) NOT NULL,
  `menimbang_1` varchar(32) NOT NULL,
  `menimbang_2` varchar(32) NOT NULL,
  `mengingat` varchar(32) NOT NULL,
  `kepada` varchar(32) NOT NULL,
  `alasan_1` varchar(32) NOT NULL,
  `alasan_2` varchar(32) NOT NULL,
  `alasan_3` varchar(32) NOT NULL,
  `tanggal` varchar(32) DEFAULT NULL,
  `jabatan` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `otp` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `jenis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sintruksi`
--

INSERT INTO `tb_sintruksi` (`id_intruksi`, `id_user`, `intruksi`, `nomer`, `tahun`, `tentang`, `menimbang_1`, `menimbang_2`, `mengingat`, `kepada`, `alasan_1`, `alasan_2`, `alasan_3`, `tanggal`, `jabatan`, `nama`, `otp`, `status`, `jenis`) VALUES
(1, 3, 'KOMISI PEMILIHAN UMUM', '1', '2023', 'PEMILIHAN UMUM', 'akan dilakukan kegiatan pemiliha', 'akan dilakukan segera pemilihan ', 'UUD 1945', 'Setio Adi', 'Melaksanakan intruksi untuk kepe', 'Melaksanakan kegiatan sosialiasi', 'Memberikan masukan kepada masyar', '', 'KOMISARIS', 'SETIO WIYANTO', '661088', 'SELESAI', 'INTRUKSI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skeputusan`
--

CREATE TABLE `tb_skeputusan` (
  `id_keputusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nomer` varchar(32) NOT NULL,
  `tentang` varchar(32) NOT NULL,
  `menimbang_1` text NOT NULL,
  `menimbang_2` text NOT NULL,
  `mengingat_1` text NOT NULL,
  `mengingat_2` text NOT NULL,
  `memperhatikan_1` text NOT NULL,
  `memperhatikan_2` text NOT NULL,
  `menetapkan` text NOT NULL,
  `kesatu` text NOT NULL,
  `kedua` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jabatan` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `otp` varchar(64) DEFAULT NULL,
  `status` varchar(64) NOT NULL,
  `jenis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skeputusan`
--

INSERT INTO `tb_skeputusan` (`id_keputusan`, `id_user`, `nomer`, `tentang`, `menimbang_1`, `menimbang_2`, `mengingat_1`, `mengingat_2`, `memperhatikan_1`, `memperhatikan_2`, `menetapkan`, `kesatu`, `kedua`, `tanggal`, `jabatan`, `nama`, `otp`, `status`, `jenis`) VALUES
(1, 3, '1/03/05/23', 'KEPUTUSAN MENHUM', 'Menimbang hal hal berikut', 'Memberikan saran berikut', 'Mengingat bahwa seharusnya', 'Mengingat untuk tetap tenang', 'Memperhatikan kesehatan', 'Memperhatikan ketertiban', 'KESEHATAN SELURUH PETUGAS', 'Keputusan ini disarankan untuk dilakukan', 'Keputusan ini ditetapkan', NULL, 'KOMISARIS', 'SETIO WIYANTO', '171206', 'SELESAI', 'KEPUTUSAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sm`
--

CREATE TABLE `tb_sm` (
  `id_sm` int(11) NOT NULL,
  `no_urut` varchar(30) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `asal` varchar(32) NOT NULL,
  `tujuan` varchar(32) NOT NULL,
  `tgl_surat` datetime NOT NULL,
  `keterangan` varchar(32) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sm`
--

INSERT INTO `tb_sm` (`id_sm`, `no_urut`, `no_surat`, `asal`, `tujuan`, `tgl_surat`, `keterangan`, `file`) VALUES
(10, '1', '1', 'Pati', 'Undangan', '2023-04-03 00:00:00', 'Sekarang', '2023-1.pdf'),
(11, '2', '08986116745', 'Pati', 'Menhidupkan', '1970-01-01 00:00:00', 'Kemiskinan', '2023-2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sperintah`
--

CREATE TABLE `tb_sperintah` (
  `id_perintah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nomer` varchar(32) NOT NULL,
  `menimbang_1` varchar(65) NOT NULL,
  `menimbang_2` text NOT NULL,
  `dasar_1` text NOT NULL,
  `dasar_2` text NOT NULL,
  `kepada_1` varchar(64) NOT NULL,
  `kepada_2` varchar(64) NOT NULL,
  `kepada_3` varchar(64) NOT NULL,
  `untuk_1` text NOT NULL,
  `untuk_2` text NOT NULL,
  `jabatan` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `otp` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `jenis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sperintah`
--

INSERT INTO `tb_sperintah` (`id_perintah`, `id_user`, `nomer`, `menimbang_1`, `menimbang_2`, `dasar_1`, `dasar_2`, `kepada_1`, `kepada_2`, `kepada_3`, `untuk_1`, `untuk_2`, `jabatan`, `nama`, `tanggal`, `otp`, `status`, `jenis`) VALUES
(0, 0, '1/02/05/23', 'akan dilakukan kegiatan pemilihan', 'Berdasarkan alasan itu', 'Dasar untuk menugaskan petugas lapangan', 'Dasar untuk memberikan nilai lebih ke lapangan', 'Meilyan', 'Ardi', 'Seno', 'Menjalankan nilai nilai lapangan', 'Menaruh harapan yang tinggi', 'KOMISARIS', 'SETIO WIYANTO', '0000-00-00', '', 'PENDING', 'PERINTAH'),
(1, 0, '2/02/05/23', 'akan dilakukan kegiatan pemilihan', 'akan dilakukan segera pemilihan umum', 'Dasar untuk menugaskan petugas lapangan', 'Dasar untuk memberikan nilai lebih ke lapangan', 'Meilyan', 'Ardi', 'Seno', 'Menjalankan nilai nilai lapangan', 'Menaruh harapan yang tinggi', 'KOMISARIS', 'SETIO WIYANTO', '0000-00-00', '', 'PENDING', 'PERINTAH');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stugas`
--

CREATE TABLE `tb_stugas` (
  `id_tugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nomer` varchar(32) NOT NULL,
  `menimbang_1` varchar(65) NOT NULL,
  `menimbang_2` text NOT NULL,
  `dasar_1` text NOT NULL,
  `dasar_2` text NOT NULL,
  `kepada_1` varchar(64) NOT NULL,
  `kepada_2` varchar(64) NOT NULL,
  `kepada_3` varchar(64) NOT NULL,
  `untuk_1` text NOT NULL,
  `untuk_2` text NOT NULL,
  `jabatan` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `otp` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `jenis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stugas`
--

INSERT INTO `tb_stugas` (`id_tugas`, `id_user`, `nomer`, `menimbang_1`, `menimbang_2`, `dasar_1`, `dasar_2`, `kepada_1`, `kepada_2`, `kepada_3`, `untuk_1`, `untuk_2`, `jabatan`, `nama`, `tanggal`, `otp`, `status`, `jenis`) VALUES
(0, 0, '1/02/05/23', 'Berdasarkan alasan ini', 'Berdasarkan alasan itu', 'Dasar untuk menugaskan petugas lapangan', 'Dasar untuk memberikan nilai lebih ke lapangan', 'Meilyan', 'Ardi', '', 'Menjalankan nilai nilai lapangan', 'Menaruh harapan yang tinggi', 'KOMISARIS', 'SETIO WIYANTO', '0000-00-00', '', 'PENDING', 'TUGAS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nomer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `jabatan`, `level`, `nomer`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin', '08986116745'),
(2, 'Kepala', 'Kepala', 'alba@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kepala', 'kepala', '08986116745'),
(3, 'Staff', 'staff', 'staff@gg.com', '1253208465b1efa876f982d8a9e73eef', 'Staff', 'staff', '08986116745'),
(4, 'Hendi', 'herdi', 'herdi@mail.com', 'cda2c99fbf5e19f20d331299c15a4491', 'Staff', 'staff', '08986116745');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_otp`
--
ALTER TABLE `tb_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sdinas`
--
ALTER TABLE `tb_sdinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indexes for table `tb_sintruksi`
--
ALTER TABLE `tb_sintruksi`
  ADD PRIMARY KEY (`id_intruksi`);

--
-- Indexes for table `tb_skeputusan`
--
ALTER TABLE `tb_skeputusan`
  ADD PRIMARY KEY (`id_keputusan`);

--
-- Indexes for table `tb_sm`
--
ALTER TABLE `tb_sm`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indexes for table `tb_sperintah`
--
ALTER TABLE `tb_sperintah`
  ADD PRIMARY KEY (`id_perintah`);

--
-- Indexes for table `tb_stugas`
--
ALTER TABLE `tb_stugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_otp`
--
ALTER TABLE `tb_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sdinas`
--
ALTER TABLE `tb_sdinas`
  MODIFY `id_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_sintruksi`
--
ALTER TABLE `tb_sintruksi`
  MODIFY `id_intruksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_skeputusan`
--
ALTER TABLE `tb_skeputusan`
  MODIFY `id_keputusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sm`
--
ALTER TABLE `tb_sm`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
