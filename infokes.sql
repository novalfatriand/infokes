-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2025 at 07:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infokes`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrean`
--

CREATE TABLE `antrean` (
  `id_antrean` int(11) NOT NULL,
  `nama_antrean` varchar(55) NOT NULL,
  `tanggal_antrean` date NOT NULL,
  `kode_antrean` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antrean`
--

INSERT INTO `antrean` (`id_antrean`, `nama_antrean`, `tanggal_antrean`, `kode_antrean`, `created_at`) VALUES
(21, 'Noval Fatriand', '2025-01-02', 'A073', '2025-01-01 01:50:45'),
(22, 'Rangga Ahmad', '2025-01-16', '2566', '2025-01-01 01:52:48'),
(23, 'Fachri Azis', '2025-01-01', '9896', '2025-01-01 01:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `spesialisasi`, `alamat`, `email`) VALUES
(1, 'Dr. Andi Pratama', 'Spesialis Penyakit Dalam', 'Jagakarsa, Jakarta Selatan', 'andipratama@gmail.com'),
(2, 'Dr. Siti Nurhaliza', 'Spesialis Anak', 'Bandung, Jawa Barat', 'nurhaliza@gmail.com'),
(3, 'Dr. Budi Santoso', 'Spesialis Bedah Umum', 'Surabaya, Jawa Timur', 'santosobudi@gmail.com'),
(4, 'Dr. Rina Wijayanti', 'Spesialis Gigi', 'Depok, Jawa Barat', 'rina@gmail.com'),
(5, 'Dr. Hendra Prabowo', 'Spesialis THT', 'Kelapa Dua, Depok', 'hendra@gmail.com'),
(6, 'Dr. Arief Kurniawan', 'Spesialis Jantung', 'Kuningan, Jakarta Pusat', 'kurniawanarief@gmail.com'),
(7, 'Dr. Eva Permata', 'Spesialis Mata', 'Lebak Bulus, Jakarta Selatan', 'permata08@gmail.com'),
(8, 'Dr. Maria Sari', 'Spesialis Obstetri dan Ginekologi', 'Kemang, Jakarta Selatan', 'mariasari@gmail.com'),
(9, 'Dr. Abdul Muis', 'Spesialis Forensik', 'Jakarta Pusat, Jakarta', 'abdul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `created_at`) VALUES
(1, 'Rangga Falih', '2024-12-26', 'Laki-laki', 'Jakarta Timur', 'rangga@gmail.com', '2024-12-26 15:59:03'),
(2, 'Sultan Zakky', '2005-12-27', 'Laki-laki', 'Sawangan, Depok', 'sultan@gmail.com', '2024-12-26 16:02:14'),
(3, 'Mauly Sitta', '2005-10-11', 'Perempuan', 'Kelapa Dua, Depok', 'mauly@gmail.com', '2024-12-26 16:45:00'),
(4, 'Fachri Azis', '2004-01-21', 'Laki-laki', 'Jakarta Timur', 'fachri@gmail.com', '2024-12-31 18:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `id_perawat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`id_perawat`, `nama`, `email`, `password`, `created_at`) VALUES
(3, 'pale', 'pale@gmail.com', '3e6805d9e6f7212aec46b462f2a6a6695ca11e5fe710ef2ea7e0fa36557e9c8e', '2024-12-25 13:43:56'),
(4, 'Rangga Falih', 'rangga@gmail.com', 'a276665dda729669763f711158bccf2c134fe9e40a77a6f15ceab38f98aed342', '2024-12-26 14:10:30'),
(5, 'Cahaya Putri', 'cahaya@gmail.com', '1a3fed8697491909dc9f050468f2bf9b042d6d113d22b74a4ab9d63afdd751a9', '2024-12-26 14:20:30'),
(6, 'Fachri Azis', 'fachri@gmail.com', '30df39c8006d82b2575affec0487d8084107a60a1dca55809322149e53ea528d', '2024-12-26 14:45:32'),
(7, 'Daffa Hermana', 'daffa@gmail.com', '8d322df2416a63492eee747a35fe1e5107077ad448d4184b1320de8b487a775b', '2024-12-31 18:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekam_medis` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `pemeriksaan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam_medis`, `id_pasien`, `id_dokter`, `tanggal`, `diagnosa`, `pemeriksaan`, `created_at`) VALUES
(6, 3, 4, '2024-12-31', 'Asma', 'Pemeriksaan pada paru-paru', '2024-12-31 16:00:25'),
(7, 4, 1, '2025-01-01', 'HIV', 'Pemeriksaan pada alat kelamin', '2024-12-31 19:11:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean`
--
ALTER TABLE `antrean`
  ADD PRIMARY KEY (`id_antrean`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam_medis`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrean`
--
ALTER TABLE `antrean`
  MODIFY `id_antrean` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekam_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE,
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
