-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 06:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `telmop`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagemenu`
--

CREATE TABLE IF NOT EXISTS `imagemenu` (
  `id` int(11) NOT NULL,
  `imageName` varchar(50) NOT NULL,
  `idMenu` varchar(10) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagemenu`
--

INSERT INTO `imagemenu` (`id`, `imageName`, `idMenu`, `path`) VALUES
(1, '1024baru.png', 'barang3', 'C:\\xampp\\htdocs\\TubesRAI\\Telmop\\public/images/');

-- --------------------------------------------------------

--
-- Table structure for table `imageprofil`
--

CREATE TABLE IF NOT EXISTS `imageprofil` (
  `id` int(11) NOT NULL,
  `imageName` varchar(500) NOT NULL,
  `username` varchar(20) NOT NULL,
  `path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `fullname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`fullname`, `address`, `username`, `password`, `saldo`) VALUES
('Hamim', 'Bandung', 'ari', 'ari', 0),
('John Dav', 'Bandung', 'john', 'john', 100000),
('Hamim', 'Tes', 'lala', 'lala', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idMenu` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `idStand` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idMenu`, `price`, `name`, `stock`, `idStand`) VALUES
('1', 25, 'Bober Oreo Coffee', 10, '1'),
('2', 26, 'Hot Vanilla Latte', 3, '2'),
('3', 14, 'Bober Espresso', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `stand`
--

CREATE TABLE IF NOT EXISTS `stand` (
  `idStand` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `vendorname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `standpicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stand`
--

INSERT INTO `stand` (`idStand`, `username`, `vendorname`, `location`, `password`, `status`, `saldo`, `standpicture`) VALUES
('1', 'bober', 'Bober Cafe', 'Jalan Riau, Bandung', 'bober', 'admin', 1000000, 'bober.jpg'),
('2', 'yellowtruck', 'Yellow Truck Cafe', 'Dago, Bandung', 'yellowtruck', 'admin', 500000, 'yellow-truck.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `tglTransaksi` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `menuname` varchar(100) NOT NULL,
  `jumlahBeli` int(11) NOT NULL,
  `idStand` int(11) NOT NULL,
  `statustransaksi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `tglTransaksi`, `username`, `location`, `menuname`, `jumlahBeli`, `idStand`, `statustransaksi`) VALUES
(1, '2015-12-16', 'john', 'Bandung', 'Bober Oreo Coffee', 2, 1, 'terkirim'),
(2, '2015-12-16', 'john', 'Bandung', 'Hot Vanilla Latte', 2, 2, 'prepare'),
(3, '2015-12-16', 'john', 'Bandung', 'aaa', 4, 2, 'dikirim'),
(4, '2015-12-16', 'john', 'Bandung', 'Hot Vanilla Latte', 1, 2, 'prepare');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagemenu`
--
ALTER TABLE `imagemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageprofil`
--
ALTER TABLE `imageprofil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `stand`
--
ALTER TABLE `stand`
  ADD PRIMARY KEY (`idStand`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagemenu`
--
ALTER TABLE `imagemenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imageprofil`
--
ALTER TABLE `imageprofil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
