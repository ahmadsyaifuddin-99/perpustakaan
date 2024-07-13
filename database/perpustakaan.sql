-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2024 at 07:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(100) NOT NULL,
  `id_kategori` varchar(100) NOT NULL,
  `id_rak` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `stok_buku` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `sampul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `id_rak`, `nama`, `penerbit`, `pengarang`, `tahun_terbit`, `stok_buku`, `tanggal_masuk`, `sampul`) VALUES
('132-133-123-31', 'Pemrograman Web', 'Rak : 4', 'Web', 'Alvin', 'Jogja', '2013', 21, '2021-07-01', ''),
('132-133-123-38', 'Sains', 'Rak : 1', 'Reaksi  Kimia', 'Ahmad M', 'Jogja', '2018', 6, '2021-07-27', ''),
('132-133-123-45', 'Sains', 'Rak : 4', 'Karya Ilmiah', 'Tarmadji', 'Madiun', '2012', 21, '2021-08-01', ''),
('132-133-123-49', 'Bahasa', 'Rak : 1', 'Sejarah Indonesia', 'Pr. Darminta', 'Surabaya', '2012', 0, '2021-08-05', ''),
('132-133-123-90', 'Pemrograman Visual', 'Rak : 4', 'Database', 'Sudarman', 'Bandung Book', '2013', 21, '2021-07-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id`, `nama`, `jumlah`) VALUES
('E020318001', 'Dingren', 'Rp. 7000'),
('E020318002', 'Ahmad Muslim', 'Rp. 6000'),
('E020318003', 'Dian', 'Rp. 4000');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `alamat`, `nomor_hp`, `tempat_lahir`, `tanggal_lahir`) VALUES
('G11', 'Bp Guru', 'Banjarmasin', '083153335937', 'Batola', '2021-07-01'),
('G17', 'Ibu Guru', 'Banjarbaru', '085754464821', 'Banjarmasin', '2021-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(225) NOT NULL,
  `kategori_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori_buku`) VALUES
('A11', 'Sains'),
('A12', 'Matematika'),
('A13', 'Bahasa Inggris'),
('A14', 'Bahasa'),
('TI1', 'Pemrograman Web'),
('TI2', 'Pemrograman Visual');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_buku`
--

CREATE TABLE `pinjam_buku` (
  `id_pinjam` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `jumlah_buku` int NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`id_pinjam`, `nama`, `tanggal_pinjam`, `tanggal_kembali`, `nama_buku`, `jumlah_buku`, `status`) VALUES
('2', 'Alvin', '2021-07-15', '2021-07-16', 'Web', 3, 'kembali'),
('77', 'Ahmad Muslim', '2021-07-01', '2021-07-02', 'hhhh', 3, 'kembali'),
('88', 'wkwk', '2021-07-01', '2021-07-04', 'Sastra Bahasa', 3, 'kembali'),
('A11', 'Eviana', '2021-07-01', '2021-07-07', 'Sastra Bahasa', 1, 'kembali'),
('A12', 'Ahmad', '2021-07-02', '2021-07-05', 'CI', 3, 'kembali'),
('A13', 'Muslim', '2021-07-02', '2021-07-09', 'MTK', 2, 'kembali'),
('A22', 'Ahmad Muslim', '2021-08-11', '2021-08-12', 'Reaksi  Kimia', 1, 'kembali'),
('PJ1', 'Asai', '2024-06-30', '2024-07-04', 'Web', 1, 'Pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` varchar(100) NOT NULL,
  `rak_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `rak_buku`) VALUES
('R1', 'Rak : 3'),
('R2', 'Rak : 2'),
('R3', 'Rak : 1'),
('R4', 'Rak : 4');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `jurusan`, `alamat_siswa`, `tempat_lahir`, `tanggal_lahir`, `nomor_hp`) VALUES
('A11', 'Ahmad Alvin', 'IPA', 'Banjarmasin', 'Batola', '2000-01-01', '083153333456'),
('A12', 'Eviana', 'IPA', 'Banjarbaru', 'Banjarbaru', '2021-07-01', '085753442649');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_domisili` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `foto`, `tempat_lahir`, `tanggal_lahir`, `alamat_domisili`, `jenis_kelamin`, `nomor_hp`) VALUES
('E020318001', 'M Alfaritz', 'alfaritz01@gmail.com', 'alfaritz', 'insta-icon.png', 'Banjarbaru', '1999-08-01', 'Banjarmasin', 'Laki - Laki', '085753442649'),
('E020318002', 'Admin Perpustakaan', 'admin@gmail.com', 'admin1234', '', 'Banjarmasin', '2024-07-06', 'Banjarmasin', 'Laki - Laki', '085753442746'),
('E020318003', 'Ahmad Syaifuddin', 'asai@gmail.com', 'asai1234', 'Photoleap_28_10_2023_11_51_55_5GWjx.jpg', 'Bumi', '2004-06-09', 'Indonesia', 'Laki - Laki', '085849910396'),
('E020318004', 'Delta', 'delta@gmail.com', 'delta123', '', 'USA, California', '2024-07-06', '123 Street Wall', 'Perempuan', '1230989323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
