-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 01:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(5) NOT NULL,
  `no_plat` varchar(15) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `no_antrian` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(15) NOT NULL,
  `status_data` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `no_plat`, `id_paket`, `no_antrian`, `tanggal`, `waktu`, `status`, `status_data`) VALUES
(15466, 'B 1231 TR', 3, 1, '2022-11-26', '01:30:07', 'selesai', '0');

-- --------------------------------------------------------

--
-- Table structure for table `group_pencuci`
--

CREATE TABLE `group_pencuci` (
  `id_group` int(10) NOT NULL,
  `nama_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_pencuci`
--

INSERT INTO `group_pencuci` (`id_group`, `nama_group`) VALUES
(5, 'Tim Gokil'),
(6, 'Tim Perfection');

-- --------------------------------------------------------

--
-- Table structure for table `merk_mobil`
--

CREATE TABLE `merk_mobil` (
  `merk_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk_mobil`
--

INSERT INTO `merk_mobil` (`merk_mobil`) VALUES
('BMW'),
('Daihatsu'),
('Honda'),
('Hyundai'),
('Jaguar'),
('Jeep'),
('Mitsubishi'),
('Nissan'),
('Suzuki'),
('Tesla'),
('Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no_plat` varchar(15) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_pemilik` varchar(14) NOT NULL,
  `status_data` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`no_plat`, `tipe_mobil`, `nama_pemilik`, `no_pemilik`, `status_data`) VALUES
('B 1231 TR', 'C12', 'Putri Farradilla', '089182849332', '1'),
('KT 1038 BE', 'Leaf', 'Aulia', '082947283843', '1'),
('KT 1234 AB', 'X', 'Putri Faradillah', '081938594859', '1'),
('KT 1304 EB', 'Leaf', 'Devina', '0867890', '1'),
('KT 1432 BS', 'Corolla', 'Wahyu', '0897575656', '1'),
('KT 2321 DA', 'Civic', 'Farhan', '028304543', '1'),
('KT 2893 BT', 'C12', 'Milan', '0823214141', '1'),
('KT 5555 S4', 'City', 'Bey', '3207403742', '1'),
('KT 666 RW', 'Alphard', 'Fandi Siswanto', '0847484773434', '1'),
('KT 666 SB', 'Yaris', 'Fandi Siswanto', '08234234343', '1');

-- --------------------------------------------------------

--
-- Table structure for table `paket_pencucian`
--

CREATE TABLE `paket_pencucian` (
  `id_paket` int(5) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `desc_paket` varchar(200) NOT NULL,
  `harga_paket` int(10) NOT NULL,
  `status_data` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_pencucian`
--

INSERT INTO `paket_pencucian` (`id_paket`, `nama_paket`, `desc_paket`, `harga_paket`, `status_data`) VALUES
(1, 'bersih luar', 'Membersihkan bagian luar dari kendaraan', 30000, '1'),
(3, 'bersih dalam', 'Membersihkan bagian dalam dari kendaraan', 25000, '1'),
(4, 'bersih keseluruhan', 'Mesin sampe dalampun bersih mengkilat (tidak menanggung kerusakan)', 50000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pencuci`
--

CREATE TABLE `pencuci` (
  `id_pencuci` int(11) NOT NULL,
  `nama_pencuci` varchar(50) NOT NULL,
  `no_pencuci` varchar(14) NOT NULL,
  `id_group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencuci`
--

INSERT INTO `pencuci` (`id_pencuci`, `nama_pencuci`, `no_pencuci`, `id_group`) VALUES
(3, 'WellyFishy', '082934958494', 5),
(7, 'Bayu', '08125516977', 5),
(8, 'Zayga Ernesto', '081255169773', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pesan` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_pesan` varchar(20) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pesan`, `email`, `no_pesan`, `pesan`) VALUES
(1, 'Zahra', 'Zahra@gmail.com', '082949483933', 'Kurang cepat cucinya, lelah menunggu tolong tambah pekerjanya.');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_mobil`
--

CREATE TABLE `tipe_mobil` (
  `merk_mobil` varchar(20) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL,
  `ukuran_mobil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_mobil`
--

INSERT INTO `tipe_mobil` (`merk_mobil`, `tipe_mobil`, `ukuran_mobil`) VALUES
('Honda', 'Accord', 'kecil'),
('Toyota', 'Alphard', 'Besar'),
('Honda', 'Brio', 'kecil'),
('BMW', 'C12', 'sedang'),
('Honda', 'City', 'sedang'),
('Honda', 'Civic', 'kecil'),
('Toyota', 'Corolla', 'sedang'),
('Tesla', 'E', 'kecil'),
('Toyota', 'Hiace', 'Besar'),
('Nissan', 'Leaf', 'kecil'),
('Tesla', 'S', 'sedang'),
('Tesla', 'X', 'sedang'),
('Tesla', 'Y', 'sedang'),
('Toyota', 'Yaris', 'kecil');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_antrian` int(5) NOT NULL,
  `id_group` int(10) NOT NULL,
  `no_nota` varchar(20) NOT NULL,
  `biaya` int(11) NOT NULL,
  `extra_biaya` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_data` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_antrian`, `id_group`, `no_nota`, `biaya`, `extra_biaya`, `total_bayar`, `status_data`) VALUES
(15466, 6, '202211261', 50000, 0, 50000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran_mobil`
--

CREATE TABLE `ukuran_mobil` (
  `ukuran_mobil` varchar(10) NOT NULL,
  `biaya_tambahan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukuran_mobil`
--

INSERT INTO `ukuran_mobil` (`ukuran_mobil`, `biaya_tambahan`) VALUES
('besar', 50000),
('kecil', 0),
('sedang', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `no_user` varchar(15) NOT NULL,
  `alamat_user` varchar(80) NOT NULL,
  `status` varchar(10) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_data` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_user`, `alamat_user`, `status`, `jenis_kelamin`, `username`, `password`, `status_data`) VALUES
(35, 'David Yudistira', '898765432124', 'Jl. Imam Bonjol', 'kasir', 'L', 'david', '172522ec1028ab781d9dfd17eaca4427', '1'),
(52, 'Naufal Dzakwan', '085349425454', 'Jl. Lorem Ipsum', 'admin', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(59, 'Lala Amelia', '08956060303', 'Jl. Budi Bakti', 'manager', 'P', 'manager', '1d0258c2440a8d19e716292b231e3190', '1'),
(60, 'Devina Tania', '0895606030348', 'Jl. Tunjung F2 RT.19 Perumahan UNMUL Sem', 'manager', 'P', 'teknisi24', '24dcd01839281e2ce0a973cab98697d0', '1'),
(61, 'NazarAF', '07972319719', 'Jalan jalan', 'admin', 'L', 'admin2', 'c84258e9c39059a89ab77d846ddab909', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_plat` (`no_plat`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `group_pencuci`
--
ALTER TABLE `group_pencuci`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `merk_mobil`
--
ALTER TABLE `merk_mobil`
  ADD PRIMARY KEY (`merk_mobil`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_plat`),
  ADD KEY `tipe_mobil` (`tipe_mobil`);

--
-- Indexes for table `paket_pencucian`
--
ALTER TABLE `paket_pencucian`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pencuci`
--
ALTER TABLE `pencuci`
  ADD PRIMARY KEY (`id_pencuci`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_group_2` (`id_group`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tipe_mobil`
--
ALTER TABLE `tipe_mobil`
  ADD PRIMARY KEY (`tipe_mobil`),
  ADD KEY `merk_mobil` (`merk_mobil`),
  ADD KEY `ukuran_mobil` (`ukuran_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_antrian` (`id_antrian`),
  ADD KEY `id_group_2` (`id_group`);

--
-- Indexes for table `ukuran_mobil`
--
ALTER TABLE `ukuran_mobil`
  ADD PRIMARY KEY (`ukuran_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15467;

--
-- AUTO_INCREMENT for table `paket_pencucian`
--
ALTER TABLE `paket_pencucian`
  MODIFY `id_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pencuci`
--
ALTER TABLE `pencuci`
  MODIFY `id_pencuci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_2` FOREIGN KEY (`no_plat`) REFERENCES `mobil` (`no_plat`),
  ADD CONSTRAINT `antrian_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket_pencucian` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`tipe_mobil`) REFERENCES `tipe_mobil` (`tipe_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pencuci`
--
ALTER TABLE `pencuci`
  ADD CONSTRAINT `pencuci_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group_pencuci` (`id_group`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tipe_mobil`
--
ALTER TABLE `tipe_mobil`
  ADD CONSTRAINT `tipe_mobil_ibfk_1` FOREIGN KEY (`merk_mobil`) REFERENCES `merk_mobil` (`merk_mobil`),
  ADD CONSTRAINT `tipe_mobil_ibfk_2` FOREIGN KEY (`ukuran_mobil`) REFERENCES `ukuran_mobil` (`ukuran_mobil`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group_pencuci` (`id_group`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_antrian`) REFERENCES `antrian` (`id_antrian`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

