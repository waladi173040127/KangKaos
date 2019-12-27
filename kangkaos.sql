-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2019 pada 13.29
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kangkaos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(67, 'waladi', '=', '2019-12-22 20:34:50', '2019-12-23 20:34:50'),
(68, 'waladi widarno', '=', '2019-12-22 20:40:04', '2019-12-23 20:40:04'),
(69, 'mamang lukas', '=', '2019-12-22 20:57:18', '2019-12-23 20:57:18'),
(70, 'babung', '=', '2019-12-22 20:58:06', '2019-12-23 20:58:06'),
(71, 'waladi', '=', '2019-12-22 20:59:55', '2019-12-23 20:59:55'),
(72, 'Luthfi Nugraha', '=', '2019-12-23 09:50:52', '2019-12-24 09:50:52'),
(73, 'Luthfi Nugraha', '=', '2019-12-23 09:52:34', '2019-12-24 09:52:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `name`, `jumlah`, `harga`, `pilihan`) VALUES
(15, 26, 54, 'waladi widarno', 1, 10000000, ''),
(16, 27, 52, 'kaos2', 1, 10000000, ''),
(17, 28, 51, 'kaos1', 1, 200000, ''),
(18, 29, 52, 'kaos2', 1, 10000000, ''),
(19, 30, 52, 'kaos2', 1, 10000000, ''),
(20, 31, 51, 'kaos1', 1, 200000, ''),
(21, 32, 51, 'kaos1', 1, 200000, ''),
(22, 33, 53, 'kaos3', 1, 200000, ''),
(23, 35, 51, 'kaos1', 1, 200000, ''),
(24, 36, 52, 'kaos2', 1, 10000000, ''),
(25, 38, 53, 'kaos3', 1, 200000, ''),
(26, 40, 53, 'kaos3', 1, 200000, ''),
(27, 42, 53, 'kaos3', 1, 200000, ''),
(28, 43, 52, 'kaos2', 1, 10000000, ''),
(29, 44, 52, 'kaos2', 1, 10000000, ''),
(30, 45, 52, 'kaos2', 1, 10000000, ''),
(31, 47, 51, 'kaos1', 1, 200000, ''),
(32, 48, 51, 'kaos1', 1, 200000, ''),
(33, 50, 53, 'kaos3', 1, 200000, ''),
(34, 51, 52, 'kaos2', 1, 10000000, ''),
(35, 52, 51, 'kaos1', 1, 200000, ''),
(36, 53, 51, 'kaos1', 1, 200000, ''),
(37, 54, 53, 'kaos3', 1, 200000, ''),
(38, 55, 53, 'kaos3', 1, 200000, ''),
(39, 56, 52, 'kaos2', 1, 10000000, ''),
(40, 57, 52, 'kaos2', 1, 10000000, ''),
(41, 58, 61, 'kaos dilvi', 1, 7000, ''),
(42, 59, 60, 'admin', 1, 200000, ''),
(43, 60, 62, 'Kaos kuring', 1, 5400000, ''),
(44, 61, 61, 'kaos dilvi', 1, 7000, ''),
(45, 62, 65, 'wa', 3, 10000000, ''),
(46, 63, 66, 'wa', 1, 10000000, ''),
(47, 64, 66, 'wa', 1, 10000000, ''),
(48, 65, 66, 'wa', 1, 10000000, ''),
(49, 66, 66, 'wa', 1, 10000000, ''),
(50, 67, 66, 'wa', 1, 10000000, ''),
(51, 68, 66, 'wa', 1, 10000000, ''),
(52, 69, 65, 'wa', 1, 10000000, ''),
(53, 70, 66, 'wa', 2, 10000000, ''),
(54, 71, 65, 'wa', 1, 10000000, ''),
(55, 72, 73, 'Kaos 1', 1, 50000, ''),
(56, 73, 73, 'Kaos 1', 1, 50000, '');

--
-- Trigger `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE produk SET stock = stock-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_brg` int(128) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL,
  `detail` varchar(128) NOT NULL,
  `stock` int(10) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_brg`, `name`, `price`, `category`, `size`, `detail`, `stock`, `image`) VALUES
(78, 'Kaos Oblong / Programmer', 100000, 'Man', 'L', 'Kaosnya anak IT', 100, 'IT1.jpg'),
(79, 'KaosYES Kaos Polos T-Shirt RAG', 75000, 'Man', 'M', 'Raglan T-ShirtDidesain trendy dalam 2 tone colorRound necklineMaterial : Cotton combed 24s', 60, 'ka31.png'),
(80, 'hh', 90000, 'Man', 'M', 'Kaos Polos Pria ', 30, '31.jpg'),
(81, 'Dua tone warna polos t shirt', 50000, 'Man', 'M', 'Kaos Polos Pria 2 Warna', 30, '4.png'),
(82, 'JatiDiri SUNDA t - shirt', 80000, 'Man', 'L', 'Kaos Khusus urang sunda nu nya’ah kanu budaya sareng adat SUNDA', 30, '5.jpg'),
(83, 'Hoodie Hip Hop T-shirt Jaket k', 35000, 'Man', 'ML', 'Lengan Panjang (cm):Pendek\r\nGaya:Kasual\r\nTipe Pola:cetak\r\nTipe Kain:Kain Lebar\r\nMaterials:100% Premium Cotton\r\nFeatures:Soft,Eco', 45, '6.jpg'),
(84, 'Kaos Kartu 94 - Sekop', 20000, 'Man', 'M', 'Warna (1): Hitam', 10, '7.jpg'),
(85, 'O-Neck Polos ', 45000, 'Man', 'M', 'Didesain comfy dalam slim fit styleRound necklineMaterial : Cotton twill', 10, '8.jpg'),
(86, 'Kaos Naruto 95 - Hitam - Kaos ', 50000, 'Man', 'L', 'Cotton Combed 20s / 30sJahitan:Standart DistroGambar:Digital Printing', 35, '9.jpg'),
(87, 'Kaos Misfits fiend club versio', 40000, 'Man', 'L', 'Bahan Kaos:Cotton Combed 20s / 30sJahitan:Standart DistroGambar:Sablon Manual dengan tinta rubber, lebih pekat, le', 35, '101.jpg'),
(89, 'BAJU KAOS GHOST SNAPCHAT O-NEC', 85000, 'Woman', 'M', 'BAJU KAOS GHOST SNAPCHAT O-NECK FOR CEWEK TUMBLR TEE T-SHIRTBahan Cotton Combed BUKAN Matt Spandex!!', 10, '122.jpg'),
(91, 'YGTSHIRT - T-shirt ALWAYS LATE', 50000, 'Woman', 'L', 'Bahan tebal &amp; nyaman dipakaiNON gerah, bahan tidak panasSangat nyaman dipakai untuk Hang Out dan tampil gaya dimana saja', 30, '133.jpg'),
(92, 'Women\'s Shoes and Clothing', 50000, 'Woman', 'L', 'Merek: YutakaSKU: YU284FAAAWISVLANID-73763370Jenis Garansi: Tidak Ada GaransiJenis Kerah: Leher OJenis Lengan: Lengan Pe', 50, '143.jpg'),
(93, 'Binx - Kaos Wanita - Kaos Cewe', 40000, 'Woman', 'L', '- Bahan Premium Cotton 20s/30s- Sablon Polyflex High Quality- P 62 cm- LD 84 cm- Kaos Cewe Tidak Berlaku Promo Beli 3 da', 50, '151.jpg'),
(94, 'Kaos cewek uniqlo', 45000, 'Woman', 'M', 'Kaos cewek edisi Marylin Monroe Merek uniqloSize LLingkar baju 94cmPanjang baju 59cm', 12, '16.jpg'),
(95, 'JCLOTHES Kaos Cewe / Tumblr Te', 72000, 'Woman', 'M', 'all size,S,M,L,XL,XXL, READY STOCKBobot200 gram', 26, '17.jpg'),
(96, 'T-Shirt / Tumblr Tee / Kaos Wa', 50000, 'Woman', 'M', 'UKURAN -ALL SIZE FIT TO LLD 90 CM, PJG 60 CMBahan : cotton berkualitas dijamin ademWarna : sesuai pict', 32, '19.jpg'),
(97, 'Tumblr Tee T-Shirt Kaos Wanita', 85000, 'Woman', 'L', 'Ukuran : ALL SIZE FIT TO LLD (lingkar dada): 90 cmP (panjang): 60 cmBahan: Cotton combed 30s', 10, '20.jpg'),
(98, 'Tumblr Tee T-Shirt', 70000, 'Woman', 'L', '- nyaman dipakai- bahan tidak panas- Sangat nyaman dipakai untuk Hang Out dan tampil gaya dimana saja- ALL SIZE FIT TO L', 25, '21a.jpg'),
(99, 'C0NVESS / Kaos Cewe', 35000, 'Woman', 'L', '- Elegant,stylist,Mewah dan Murah\r\n- Ready Stock,\r\n- Nyaman di Pakai,dan nyerap keringat\r\n- Bisa pilih Size Sesuai Keinginan\r\n- ', 34, '23.jpg'),
(101, 'KAOS CEWE * YANG PERNTING SOMB', 10000000, 'Woman', 'L', 'baju cewe kekinian', 100, '24.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(37, 'admin', 'waladi.173040127@mail.unpas.ac.id', 'fgff.jpg', '$2y$10$c9DcLw0fGntehf6V7DC0Ru3KtT/Z3m1LBVj1P3JDhOKHTaVQR9udi', 1, 1, 1575654699),
(38, 'wawal', 'babung@mail.unpas.ac.id', 'default.jpg', '$2y$10$f49LUXWI7Jl4xErUoKAWSOYaGOMKL7Q1FR3sUwZOsQXmEPKXrdNZm', 2, 1, 1575655425),
(39, 'user', 'user@gmail.com', 'default.jpg', '$2y$10$CbG1.efiEPr.Kw4xNWpvc.p1qdmq9EnkGvWWXl06oDj6Ett56wuCa', 2, 1, 1575716741),
(40, 'user2', 'user2@gmail.com', 'default.jpg', '$2y$10$0dNOtpSEL6Ke6oGZfXBJHOPKtR7BXkULnaAhASYkbUlZruLosHoiy', 2, 1, 1575726527),
(41, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$bVkP0gMW0Fy.yqj8BBhQIudw627srbF3WItlgS0nQ5ID/uo5gaoLa', 2, 1, 1576319689),
(42, 'user', 'user3@gmail.com', 'default.jpg', '$2y$10$lRTBvbLiprT1/1r8gs91veY4qCwpnt.jnW5BjemBzYKPvIpa1d07m', 2, 1, 1576320412),
(43, 'user22', 'user22@gmail.com', 'selesai_12.jpg', '$2y$10$IdHhgP8d52CjNlFrAUNVZe7CTXnhvcNFL4MaHIAZu7fjfyMR0svC.', 2, 1, 1576466766),
(44, 'admin', 'admin3@gmail.com', 'default.jpg', '$2y$10$Dplu.EmySaVqG3WlmOKbFOrAbNkYV/QZKA33jSeDcTQqpn3JVtnh2', 2, 1, 1576589740),
(45, 'ardhian', 'ardhian@gmail.com', 'default.jpg', '$2y$10$WqppSo3uQIbr6mtuzHIdXeZzOXqoxsaaVNBsRuPzlrCCC4lMNcO/W', 1, 1, 1577068447);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Produk', 'produk/index', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 1, 'Invoices', 'invoice/index', 'fas  fa-fw fa-file-invoice', 1),
(10, 1, 'Role', 'admin/role', 'fas  fa-fw fa-user', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_brg` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
