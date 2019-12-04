-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2019 pada 06.20
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_kangkaos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `kode_barang` int(5) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `rincian` varchar(120) NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `kode_pelanggan` int(5) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `nomor_telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pembelian`
--

CREATE TABLE `t_pembelian` (
  `nota_pembeli` int(5) NOT NULL,
  `tanggal_nota` date NOT NULL,
  `cara_bayar` varchar(20) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `discount` int(10) NOT NULL,
  `total_bayar` int(30) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `user_id` int(5) NOT NULL,
  `pass_id` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_retur_pembelian`
--

CREATE TABLE `t_retur_pembelian` (
  `no_retur` int(5) NOT NULL,
  `tanggal_retur` date NOT NULL,
  `kode_barang` int(5) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indeks untuk tabel `t_pembelian`
--
ALTER TABLE `t_pembelian`
  ADD PRIMARY KEY (`nota_pembeli`);

--
-- Indeks untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `t_retur_pembelian`
--
ALTER TABLE `t_retur_pembelian`
  ADD PRIMARY KEY (`no_retur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `kode_barang` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD CONSTRAINT `t_barang_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `t_pelanggan` (`kode_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `t_pembelian`
--
ALTER TABLE `t_pembelian`
  ADD CONSTRAINT `t_pembelian_ibfk_1` FOREIGN KEY (`nota_pembeli`) REFERENCES `t_barang` (`kode_barang`);

--
-- Ketidakleluasaan untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD CONSTRAINT `t_pengguna_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_barang` (`kode_barang`);

--
-- Ketidakleluasaan untuk tabel `t_retur_pembelian`
--
ALTER TABLE `t_retur_pembelian`
  ADD CONSTRAINT `t_retur_pembelian_ibfk_1` FOREIGN KEY (`no_retur`) REFERENCES `t_pengguna` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
