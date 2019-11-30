-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2019 pada 03.58
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(8, 'aswin', '12345'),
(9, 'bangkit', '12345'),
(10, 'haikal', '12345'),
(11, 'dewe', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_db`
--

CREATE TABLE `barang_db` (
  `id` int(25) NOT NULL,
  `idBarang` varchar(40) NOT NULL,
  `NamaBarang` varchar(40) NOT NULL,
  `Harga` varchar(30) NOT NULL,
  `JenisBarang` varchar(40) NOT NULL,
  `Merk` varchar(35) NOT NULL,
  `stok_barang` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_db`
--

INSERT INTO `barang_db` (`id`, `idBarang`, `NamaBarang`, `Harga`, `JenisBarang`, `Merk`, `stok_barang`) VALUES
(1, 'A003', 'Zenbook series', '12.000', 'Laptop', 'ASUS', 10),
(2, 'A004', 'Zenbook pro series', '13.670', 'Laptop', 'ASUS', 7),
(6, 'A008', 'VivoBook Classic series', '14.600', 'Laptop', 'ASUS', 10),
(9, 'D002', 'Indomie rasa soto', '25.000', 'Mie instan', 'Indomie', 25),
(13, 'D002', 'mie sedap rasa soto', '25.000', 'Mie instan', 'sedaap', 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `Nama_depan` varchar(50) NOT NULL,
  `Nama_belakang` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Tanggal_lahir` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`Nama_depan`, `Nama_belakang`, `Username`, `Password`, `Tanggal_lahir`, `Email`) VALUES
('bang', 'cing', 'bang', '12345', '07-12-1996', 'bangcing@gmail.com'),
('admin', 'admin', 'admin', '12345', '06-07-1998', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_db`
--
ALTER TABLE `barang_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `barang_db`
--
ALTER TABLE `barang_db`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
