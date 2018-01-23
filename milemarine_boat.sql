-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 08:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milemarine_boat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_feed_back`
--

CREATE TABLE `tb_feed_back` (
  `m_id_fdback` int(253) UNSIGNED NOT NULL,
  `m_name` varchar(253) NOT NULL,
  `m_gender` enum('1','2') NOT NULL,
  `m_organ` enum('1','2') NOT NULL,
  `m_email` varchar(253) NOT NULL,
  `m_address` varchar(253) NOT NULL,
  `m_message` text NOT NULL,
  `m_timest` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_feed_back`
--

INSERT INTO `tb_feed_back` (`m_id_fdback`, `m_name`, `m_gender`, `m_organ`, `m_email`, `m_address`, `m_message`, `m_timest`) VALUES
(1, 'panda', '1', '1', 'ada@aa.com', 'qweasd', 'asdqwe', '2017-03-27 02:35:34'),
(2, 'adam', '1', '1', 'adam@mail.com', 'western', 'test', '2017-07-16 06:55:30'),
(3, 'adol', '1', '1', 'adam@mail.com', 'western', 'asdasad', '2017-07-16 06:58:54'),
(4, 'adol', '1', '1', 'adam@mail.com', 'western', 'asdasad', '2017-07-16 06:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `m_id_gambar` int(10) UNSIGNED NOT NULL,
  `m_nama_gambar` varchar(253) NOT NULL,
  `m_desc_gambar` text NOT NULL,
  `m_jenis_gambar` varchar(50) DEFAULT NULL,
  `m_p_lmld_seluruh` varchar(75) DEFAULT NULL,
  `m_p_lmld_moulded` varchar(75) DEFAULT NULL,
  `m_p_ga_lwl` varchar(75) DEFAULT NULL,
  `m_l_max` varchar(75) DEFAULT NULL,
  `m_l_bwl` varchar(75) DEFAULT NULL,
  `m_t_dmax` varchar(75) DEFAULT NULL,
  `m_sarat_air` varchar(75) DEFAULT NULL,
  `m_displacement` varchar(75) DEFAULT NULL,
  `m_dead_weight` varchar(75) DEFAULT NULL,
  `m_bahan_bakar` varchar(75) DEFAULT NULL,
  `m_air_tawar` varchar(75) DEFAULT NULL,
  `m_penumpang` varchar(75) DEFAULT NULL,
  `m_crew` varchar(75) DEFAULT NULL,
  `m_mesin_omfs` varchar(75) DEFAULT NULL,
  `m_speed_mcr` varchar(75) DEFAULT NULL,
  `m_speedj_mcr` varchar(75) DEFAULT NULL,
  `m_range_mcr` varchar(75) DEFAULT NULL,
  `m_path_spec` varchar(1000) DEFAULT NULL,
  `m_path_teknis` varchar(1000) DEFAULT NULL,
  `m_position` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`m_id_gambar`, `m_nama_gambar`, `m_desc_gambar`, `m_jenis_gambar`, `m_p_lmld_seluruh`, `m_p_lmld_moulded`, `m_p_ga_lwl`, `m_l_max`, `m_l_bwl`, `m_t_dmax`, `m_sarat_air`, `m_displacement`, `m_dead_weight`, `m_bahan_bakar`, `m_air_tawar`, `m_penumpang`, `m_crew`, `m_mesin_omfs`, `m_speed_mcr`, `m_speedj_mcr`, `m_range_mcr`, `m_path_spec`, `m_path_teknis`, `m_position`) VALUES
(10, 'sad', 'dcasdqw', 'Accura_46', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 Ton', '16.8 meter', '16.8 Liter', '16.8 meter', '10 - 20 Orang', '4 x 300 HP', ' 40 Knot', ' 40 Knot', '10/300 H/Sm', NULL, '', 'produk'),
(11, 'PLEASURE BOAT ACCURA 55“', 'Bentuk lambung dirancang dengan Kriteria Kapal cepat antara lain block coefficient kecil, ruang muat besar dan kecepatan tinggi serta memenuhi ketentuan laik laut yaitu gerak olah tinggi, mampu berlayar pada setiap kondisi perairan. Atas dasar hal tersebut maka optimalisasi rancangan dipilih bentuk lambung type “ Hard V “ dengan Dead Rise 24º pada Midship dilengkapi dengan chine dan strike sekeliling lambung.', 'Accura_55', '16.8 meter', '16.2 meter', '14.8 meter', '3.9 meter', '3.15 meter', '1.80 meter', '0.65 meter', '12 Ton', '3.5 Ton', '2500 Liter', '300 Liter', '10 - 20 Orang', '3 Orang', '4 x 300 HP', '40 Knot', '35 Knot', ' 10/300 H/Sm', NULL, '', 'produk'),
(12, 'ACCURA 39', 'Kapal Passenger boat / patroli  Panjang 12 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 2 unit pendorong Outboard motor system.', 'Accura_39', ' 12.00 meter', ' 12.00 meter', '10.5 meter', ' 2.7 meter', '2.20 meter', '2.30 meter', '0.60 meter', '4.0 Ton', '6.5 Ton', '1.200 Liter', '150 Liter', '10 - 15 Orang', '2 Orang', '2 X 250 HP', '38 Knot', '28 Knot', '10/300 H/Sm', NULL, '', 'produk'),
(13, 'ACCURA 42', 'Kapal PLEASURE BOAT ACCURA 42“ Panjang 13 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 3 unit pendorong Outboard motor system.', 'Accura_42', '13.30 meter', '13.30 meter', '12.00 meter', '3.20 meter', '2.90 meter', '1.80 meter', '0.60 meter', '7 Ton', '3.50 Ton', '1200 Liter', '300 Liter', '10 - 15 Orang', '2 Orang', '3 x 250 HP', '40 Knot', '33 Knot', '10/300 H/Sm', NULL, '', 'produk'),
(14, 'ACCURA 46', 'Kapal PLEASURE BOAT ACCURA 46“ Panjang 14 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 3 unit pendorong Outboard motor system.', 'Accura_46', '14.6 meter', '14.2 meter', '12.8 meter', '3.5 meter', '3.15 meter', '1.80 meter', '0.65 meter', '12 Ton', '3.50 Ton', '1600 Liter', '300 Liter', '10 - 20 Orang', '3 Orang', '3 x 300 HP', '35 Knot', '30 Knot', '10/300 H/Sm', NULL, '', 'produk'),
(15, 'asd', 'qwe', 'Accura_55', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 Ton', '16.8 Ton', '2500 Liter', '16.8 Liter', '10 - 20 Orang', '3 Orang', '4 x 300 HP', '40 Knot', '40 Knot', '10/300 H/Sm', NULL, '', 'produk'),
(16, 'qwe', 'asd', 'Accura_55', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 meter', '16.8 Ton', '16.8 Ton', '2500 Liter', '16.8 Liter', '10 - 20 Orang', '3 Orang', '4 x 300 HP', '40 Knot', '40 Knot', '10/300 H/Sm', NULL, '', 'produk'),
(17, 'asd', 'qew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'workshop'),
(18, 'asd', 'qew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'workshop'),
(19, 'asd', 'qew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'workshop'),
(20, 'qwe', 'bres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'workshop'),
(21, 'qwe', 'bres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'workshop'),
(22, 'Accura 55', 'aaa', 'Accura_55', '4', '4', '16.8 meter', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4 x 300 HP', '4', '40 Knot', '10/300 H/Sm', '../pdf/5746962427494214acc_ 1.pdf', '', 'produk'),
(23, 'Accura 55', 'aa', 'Accura_55', '1', '1', '1', '1', '1', '16.8 meter', '1', '1', '1', '1', '1', '10 - 20 Orang', '3', '4', '4', '4', '10/300 H/Sm', '../pdf/19918747427494214acc_1.JPG', '', 'produk'),
(24, 'Accura 55', 'a', 'Accura_55', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '../pdf/169861008ACCURA 55.pdf', '', 'produk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prod_gallery`
--

CREATE TABLE `tb_prod_gallery` (
  `p_id_product` int(11) UNSIGNED NOT NULL,
  `p_tmp_pict` varchar(253) NOT NULL,
  `m_id_gambar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prod_gallery`
--

INSERT INTO `tb_prod_gallery` (`p_id_product`, `p_tmp_pict`, `m_id_gambar`) VALUES
(22, '../images/849367543.jpg', 10),
(23, '../images/84936754acc_1.JPG', 10),
(24, '../images/84936754acc_2.JPG', 10),
(25, '../images/195461511237205424accura 42_1.jpg', 11),
(26, '../images/195461511acc_1.JPG', 11),
(27, '../images/195461511acc_2.JPG', 11),
(28, '../images/224926516accura 42.jpg', 12),
(29, '../images/2249265161.PNG', 12),
(30, '../images/2249265162.PNG', 12),
(31, '../images/98586467accura 42_1.jpg', 13),
(32, '../images/985864673.PNG', 13),
(33, '../images/985864674.PNG', 13),
(34, '../images/32299321accura 46_1.jpg', 14),
(35, '../images/32299321accura 46_3.jpg', 14),
(36, '../images/322993215.PNG', 14),
(37, 'images/1380773021.PNG', 15),
(38, 'images/138077302android-logo.jpg', 15),
(39, 'images/138077302Apple_gray_logo.png', 15),
(40, '../images/2372054241.PNG', 16),
(41, '../images/237205424android-logo.jpg', 16),
(42, '../images/237205424Apple_gray_logo.png', 16),
(43, '../images/2241244501.PNG', 18),
(44, '../images/36947141.PNG', 19),
(45, '../images/95997980android-logo.jpg', 20),
(46, '../images/149612476android-logo.jpg', 21),
(47, '../images/574696241.jpg', 22),
(48, '../images/574696241.jpg', 22),
(49, '../images/574696241.jpg', 22),
(50, '../images/19918747427494214acc_1.JPG', 23),
(51, '../images/19918747427494214acc_1.JPG', 23),
(52, '../images/19918747427494214acc_1.JPG', 23),
(53, '../images/16986100827494214acc_1.JPG', 24),
(54, '../images/1698610081.jpg', 24),
(55, '../images/1698610081.jpg', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `a_id_user` int(3) UNSIGNED NOT NULL,
  `a_user_name` varchar(50) NOT NULL,
  `a_pass` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`a_id_user`, `a_user_name`, `a_pass`) VALUES
(1, 'admin_mile_boat', 'cb24f7445c2b0314c606bbefe5a66a20'),
(2, 'aa', 'cb24f7445c2b0314c606bbefe5a66a20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_feed_back`
--
ALTER TABLE `tb_feed_back`
  ADD PRIMARY KEY (`m_id_fdback`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`m_id_gambar`);

--
-- Indexes for table `tb_prod_gallery`
--
ALTER TABLE `tb_prod_gallery`
  ADD PRIMARY KEY (`p_id_product`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`a_id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_feed_back`
--
ALTER TABLE `tb_feed_back`
  MODIFY `m_id_fdback` int(253) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `m_id_gambar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_prod_gallery`
--
ALTER TABLE `tb_prod_gallery`
  MODIFY `p_id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `a_id_user` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
