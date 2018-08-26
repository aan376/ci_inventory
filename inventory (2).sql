-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2018 pada 15.27
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pemasukan` int(100) NOT NULL,
  `jumlah_stok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kode_barang`, `jenis_barang`, `tanggal`, `jumlah_pemasukan`, `jumlah_stok`) VALUES
(13, '  BRG-001', 'Pensill', '2018-08-30', 1000, 900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id`, `nama`, `status`) VALUES
(6, 'Manager22', 'Activ'),
(7, 'Accounting', 'Activ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gudang`
--

CREATE TABLE `tbl_gudang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pemasukan` int(100) NOT NULL,
  `jumlah_pengeluaran` int(100) NOT NULL,
  `jumlah_stok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gudang`
--

INSERT INTO `tbl_gudang` (`id`, `kode_barang`, `jenis_barang`, `tanggal`, `jumlah_pemasukan`, `jumlah_pengeluaran`, `jumlah_stok`) VALUES
(1, '  Bangk', 'mewah', '2018-08-15', 500, 100, 10000),
(6, 'BRG-001', 'Penggaris', '2018-08-23', 1000, 500, 800);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `jumlah_stok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `nama_barang`, `nama_pembeli`, `tanggal`, `harga`, `jumlah_pengeluaran`, `kode_barang`, `jumlah_stok`) VALUES
(26, 'Meja', 'Saya', '2018-08-17', 0, 200, 'BRG-001', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=admin, 2=user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gudang`
--
ALTER TABLE `tbl_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_gudang`
--
ALTER TABLE `tbl_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
