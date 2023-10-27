-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 01:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakkhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `konser`
--

CREATE TABLE `konser` (
  `id` int(11) NOT NULL,
  `Nama_Konservasi` varchar(300) NOT NULL,
  `Status_Konservasi` varchar(300) NOT NULL,
  `Titik_Koordinat` varchar(300) NOT NULL,
  `Deskripsi` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konser`
--

INSERT INTO `konser` (`id`, `Nama_Konservasi`, `Status_Konservasi`, `Titik_Koordinat`, `Deskripsi`) VALUES
(1, ' Kawasan Konservasi Perairan Daerah Kabupaten Raja Ampat', 'Berkelanjutan', '-0.433029, 130.816575', ' Keanekaragaman hayati KKPD Kabupaten Kepulauan Raja Ampat berupa segitiga terumbu karang. Spesies ikan yang membentuk habitat di dalamnya adalah ikan terumbu karang, moluska dan krustasea. Spesies biota laut di KKPD Kabupaten Kepulauan Raja Ampat lebih dari 2.000 jenis biota laut dengan 450 jenis karang, 950 jenis ikan terumbu karang, dan 600 jenis moluska. Ekosistem padang lamun berada di Pulau Kofiau dan ditumbuhi oleh Enhalus acroides, Halodule sp., Halophila sp., Thalassia hemprichii, Cymodocea sp. Selain itu ada di sekitar Pulau Ayau, bagian barat Pulau Batanta, sekitar Pulau Gam dan di bagian barat Pulau Waigeo. Ekosistem gulma laut juga ada di Misool, Samate dan Waigeo Utara.'),
(2, 'KAWASAN KONSERVASI PULAU GILI AIR, GILI MENO, DAN GILI TRAWANGAN DI PROVINSI NUSA TENGGARA BARAT', 'Optimum', '-8.347294418147323, 116.03826601835007', 'Pada awalnya desa Gili Indah diajukan sebagai Kawasan Konservasi Perairan Nasional pada tanggal 16 Februari tahun 1993 berdasarkan Surat Keputusan Menteri Kehutanan Nomor 85/kpts-II/1993 kemudian ditetapkan sebagai Kawasan Konservasi Nasional pada tahun 2001 dengan nama Taman Wisata Alam Laut Gili Ayer, Meno dan Trawangan. Target sumberdaya yaiitu  terumbu karang, Lamun, Mangrove, dan Sumberdaya Ikan. Berdasarkan hasil penelitian yang dilakukan oleh Kartawijaya et al, (2012) menyatakan bahwa responden pekerja wisata menjelaskan, jenis wisata yang biasa dilakukan wisatawan di TWP Gili Ayer, Gili Meno, dan Gili Trawangan adalah wisata bahari terutama wisata di daerah terumbu karang seperti menyelam (diving) maupun snorkling, menjelajah hutan mangrove, wisata penyu, berjemur, berenang, mengunjungi taman burung, dan wisata danau air asin.'),
(3, 'KAWASAN KONSERVASI KEPULAUAN KAPOPOSANG DAN LAUT SEKITARNYA DI PROVINSI SULAWESI SELATAN', 'Optimum', '-4.859687533202385, 119.54553809945737', 'Kepulauan Kapoposang merupakan bagian dari Kepulauan Spermonde dan secara administratif masuk dalam wilayah Kabupaten Pangkajene dan Kepulauan (Pangkep) Provinsi Sulawesi Selatan. Fauna laut yang dominan di kepulauan kapoposang adalah berbagai jenis ikan perairan, baik sebagai ikan pangan, ikan hias maupun obyek wisata laut. Ikan pangan didominasi oleh Lutjanus decussates, Siganus Spp dan Naso spp. Ikan yg berpotensi sebagai ikan hias dan daya Tarik wisata didominasi jenis Hemitaurichtys polylepis dan Chaetodon kleini dari suku Chaetodontidae. Jenis-jenis ikan ini masing-masing dapat ditemui pada daerah paparan terumbu karang dan drop off. Dalam 5 tahun terakhir, terdapat kecenderungan penurunan hasil tangkapan ikan karang utama oleh nelayan pancing di kepulauan kapoposang, tetapi untuk nelayan yang menggunakan alat tangkap bahan peledak atau racun pembius yang umumnya berasal dari luar kawasan kapoposang, jumlah tangkapannya tetap bahkan meningkat.'),
(4, 'KAWASAN KONSERVASI PERAIRAN SELAT BUNGA LAUT KABUPATEN KEPULAUAN MENTAWAI DI PROVINSI SUMATERA BARAT', 'Minimum', '-1.8274257503964433, 99.26994477140515', 'Kawasan Konservasi Perairan Daerah Kabupaten Kepulauan Mentawai (KKPD Kabupaten Kepualauan Mentawai) adalah salah satu kawasan konservasi perairan daerah yang ada di Sumatra Barat, Indonesia. Dalam pembagian administratif Indonesia, KKPD Kabupaten Kepualauan Mentawai) masuk wilayah Kabupaten Kepulauan Mentawai. Awalnya, KKPD Kabupaten Kepualauan Mentawai merupakan Taman Wisata Perairan Selat Bunga Laut. Status awalnya berdasarkan pada Surat Keputusan Bupati Kepulauan Mentawai Nomor 178 tahun 2006. KKPD Kabupaten Kepualauan Mentawai mempunyai ekosistem hutan bakau dan terumbu karang. Di ekosistem hutan bakau tumbuh 15 spesies bakau. Sedangkan di ekosistem terumbu karang terdapat 157 jenis ikan terumbu karang dengan 33 famili. Jenis ikan dengan kelimpahan terbesar adalah ikan Balong padang dan ikan napoleon. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `nama_user` varchar(10) NOT NULL,
  `password_user` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `password_user`) VALUES
(1, 'admin1', '1'),
(2, 'admin2', '2'),
(3, 'adminasik', '4aace91f74025df1d33d0a9d6614903c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konser`
--
ALTER TABLE `konser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konser`
--
ALTER TABLE `konser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
