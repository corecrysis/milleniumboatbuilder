-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2017 at 10:58 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milleni1_marine_boat`
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `m_id_gambar` int(10) UNSIGNED NOT NULL,
  `m_nama_gambar` varchar(253) NOT NULL,
  `m_desc_id` text NOT NULL,
  `m_desc_en` text NOT NULL,
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
  `m_position` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`m_id_gambar`, `m_nama_gambar`, `m_desc_id`, `m_desc_en`, `m_jenis_gambar`, `m_p_lmld_seluruh`, `m_p_lmld_moulded`, `m_p_ga_lwl`, `m_l_max`, `m_l_bwl`, `m_t_dmax`, `m_sarat_air`, `m_displacement`, `m_dead_weight`, `m_bahan_bakar`, `m_air_tawar`, `m_penumpang`, `m_crew`, `m_mesin_omfs`, `m_speed_mcr`, `m_speedj_mcr`, `m_range_mcr`, `m_path_spec`, `m_position`) VALUES
(23, 'ACCURA 55', 'Kapal PLEASURE BOAT ACCURA 55“ Panjang 16,8 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 4 unit pendorong Outboard motor system. Bentuk lambung dirancang dengan Kriteria Kapal cepat antara lain block coefficient kecil, ruang muat besar dan kecepatan tinggi serta memenuhi ketentuan laik laut yaitu gerak olah tinggi, mampu berlayar pada setiap kondisi perairan. Atas dasar hal tersebut maka optimalisasi rancangan dipilih bentuk lambung type “ Hard V “ dengan Dead Rise 24º pada Midship dilengkapi dengan chine dan strike sekeliling lambung.', 'PLEASURE BOAT ACCURA 55 \"Length 16.8 m, is a kind of speedboat, built from Glassfibre Polyester (MULTIAXIAL REINFORCEMENT) single skin construction, driven by 4 units of Outboard motor system booster. The shape of the hull is designed with Fast Ship Criteria such as small block coefficient, large loading space and high speed and meet the sea worthy requirements that is high motion, capable of sailing on any water conditions. On the basis of this, the optimization of the selected design of the form of hull type \"Hard V\" with Dead Rise 24 º on the Midship is equipped with chine and strike around the stomach.', 'Accura_55', '16.8 meter', '16.2 meter', '14.8 meter', '3.9 meter', '3.15 meter', '1.8 meter', '0.65 meter', '12 ton', '3.5 ton', '2500 Liter', '300 Liter', '10 - 20 orang', '3 orang', '4 x 300 HP', '40 Knot', '35 Knot', '10 H / 300 SM', '../pdf/40609154Specifikasi Kpl. 16,8 meter ACCURA 55.pdf', 'produk'),
(24, 'ACCURA 39', 'Kapal Passenger boat / patroli  Panjang 12 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 2 unit pendorong Outboard motor system. Bentuk lambung dirancang dengan Kriteria Kapal cepat antara lain block coefficient kecil, ruang muat besar dan kecepatan tinggi serta memenuhi ketentuan laik laut yaitu gerak olah tinggi, mampu berlayar pada setiap kondisi perairan. Atas dasar hal tersebut maka optimalisasi rancangan dipilih bentuk lambung type “ Hard V “ dengan Dead Rise 22? pada Midship dilengkapi dengan chine dan strike sekeliling lambung.', 'Passenger boat / patrol Length 12 m, is a kind of fast boat, built from Glassfibre Polyester (MULTIAXIAL REINFORCEMENT) single skin construction, driven by 2 units of Outboard motor system booster. The shape of the hull is designed with Fast Ship Criteria such as small block coefficient, large loading space and high speed and meet the sea worthy requirements that is high motion, capable of sailing on any water conditions. On the basis of this, the optimization of the selected design of the shape of the hull type \"Hard V\" with Dead Rise 22? on the Midship is equipped with chine and strike around the stomach.', 'Accura_39', '12 meter', '12 meter', '10.5 meter', '2.7 meter', '2.2 meter', '2.3 meter', '0.6 meter', '4 Ton', '6.5 Ton', '1200 Liter', '150 Liter', '10 - 15 orang', '2 Orang', '2 x 250 HP', '38 Knot', '28 Knot', '10 H / 300 SM', '../pdf/123732199Specifikasi Kpl. 12 Meter ACCURA 39.pdf', 'produk'),
(25, 'ACCURA 46', 'Kapal PLEASURE BOAT ACCURA 46“ Panjang 14 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 3 unit pendorong Outboard motor system. Bentuk lambung dirancang dengan Kriteria Kapal cepat antara lain block coefficient kecil, ruang muat besar dan kecepatan tinggi serta memenuhi ketentuan laik laut yaitu gerak olah tinggi, mampu berlayar pada setiap kondisi perairan. Atas dasar hal tersebut maka optimalisasi rancangan dipilih bentuk lambung type “ Hard V “ dengan Dead Rise 24? pada Midship dilengkapi dengan chine dan strike sekeliling lambung.', 'PLEASURE BOAT ACCURA 46 \"Length 14 m, is a kind of speedboat, built from Glassfibre Polyester (MULTIAXIAL REINFORCEMENT) single skin construction, driven by 3 units of Outboard motor system booster. The shape of the hull is designed with Fast Ship Criteria such as small block coefficient, large loading space and high speed and meet the sea worthy requirements that is high motion, capable of sailing on any water conditions. On the basis of this, the optimization of the design is selected form of hull type \"Hard V\" with Dead Rise 24? on Midship equipped with chine and strike around the stomach.', 'Accura_46', '14.6 meter', '14.2 meter', '12.8 meter', '3.5 meter', '3.15 meter', '1.8 meter', '0.65 meter', '12 ton', '3.5 ton', '1600 Liter', '300 Liter', '10 - 20 orang', '3 orang', '3 x 300 HP', '35 Knot', '30 Knot', '10 H / 300 SM', '../pdf/147881446Specifikasi Kpl. 14.6 M ACCURA 46.pdf', 'produk'),
(26, 'ACCURA 42', 'Kapal PLEASURE BOAT ACCURA 42“ Panjang 13 m,  adalah sejenis kapal cepat, dibangun dari bahan Glassfibre Polyester ( MULTIAXIAL REINFORCEMENT ) konstruksi single skin, digerakan oleh 3 unit pendorong Outboard motor system. Bentuk lambung dirancang dengan Kriteria Kapal cepat antara lain block coefficient kecil, ruang muat besar dan kecepatan tinggi serta memenuhi ketentuan laik laut yaitu gerak olah tinggi, mampu berlayar pada setiap kondisi perairan. Atas dasar hal tersebut maka optimalisasi rancangan dipilih bentuk lambung type “ Hard V “ dengan Dead Rise 24? pada Midship dilengkapi dengan chine dan strike sekeliling lambung.', 'PLEASURE BOAT ACCURA 42 \"Length 13 m, is a kind of speedboat, built from Glassfibre Polyester (MULTIAXIAL REINFORCEMENT) single skin construction, driven by 3 units of Outboard motor system booster. The shape of the hull is designed with Fast Ship Criteria such as small block coefficient, large loading space and high speed and meet the sea worthy requirements that is high motion, capable of sailing on any water conditions. On the basis of this, the optimization of the design is selected form of hull type \"Hard V\" with Dead Rise 24? on Midship equipped with chine and strike around the stomach.', 'Accura_42', '13.3 meter', '13.3 meter', '12 meter', '3.2 meter', '2.9 meter', '1.8 meter', '0.6 meter', '7 Ton', '3.5 ton', '1200 Liter', '300 Liter', '10 - 15 orang', '2 Orang', '3 x 250 HP', '40 Knot', '33 Knot', '10 H / 300 SM', '../pdf/85223007Specifikasi Kpl. 13 Meter ACCURA 42.pdf', 'produk');

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
(48, '../images/40609154ACCURA 55_1.jpg', 23),
(49, '../images/40609154ACCURA 55_2.jpg', 23),
(50, '../images/80047056ACCURA 55_3.jpg', 23),
(51, '../images/123732199accura 39.jpg', 24),
(52, '../images/123732199FOUNTAIN.pdf', 24),
(53, '../images/123732199FOUNTAIN_2.pdf', 24),
(54, '../images/147881446ACCURA_46.jpg', 25),
(55, '../images/147881446ACCURA_46_2.jpg', 25),
(56, '../images/147881446ACCURA_46_3.jpg', 25),
(57, '../images/85223007accura 42_1.jpg', 26),
(58, '../images/85223007ACCURA_42.pdf', 26),
(59, '../images/85223007accura 42_2.jpg', 26);

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
(1, 'admin_mile_boat', 'cb24f7445c2b0314c606bbefe5a66a20');

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
  MODIFY `m_id_gambar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_prod_gallery`
--
ALTER TABLE `tb_prod_gallery`
  MODIFY `p_id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `a_id_user` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
