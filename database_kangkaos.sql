-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2019 pada 06.44
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
-- Database: `kangkaos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(64) NOT NULL,
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

INSERT INTO `produk` (`id`, `name`, `price`, `category`, `size`, `detail`, `stock`, `image`) VALUES
(1, 'Autumn New Korean Fashion', 150000, 'Women', 'L', '2019 Autumn New Korean Fashion Female Tshirt Pockets Striped T shirt Women Button V Neck Top Cotton Long Sleeve Tee Shirt Femme-', 100, 'Autumn New Korean Fashion.jpg'),
(2, 'Winter Jacket women', 200000, 'Women', 'L', '2019 Winter Jacket women Plus Size Womens Parkas Thicken Outerwear solid hooded Coats Short Female Slim Cotton padded basic tops', 100, 'Winter Jacket women.jpg'),
(3, 'Chiffon Blouses', 150000, 'Women', 'L', 'Chiffon Blouses Shirts New Hot Sales Preppy Style Girls Bow Tie Tops Cute Sweet Korean Temperament Lady Peter Pan Collar Shirt-i', 100, 'Chiffon Blouses.jpg'),
(4, 'Cotton casual CAILUN KAILAN', 100000, 'Men', 'L', 'Cotton casual CAILUN KAILAN printing men\'s T shirt top fashion short sleeved men\'s T shirt men\'s Tshirt shirt men\'s T shirt 2019', 100, 'Cotton casual CAILUN.jpg'),
(5, 'Dark Icon Graffiti', 200000, 'Men', 'L', 'Dark Icon Graffiti Printed Men\'s T shirt Long Sleeve Crew Neck Hipster Tshirts Men Loose Tee Shirts Man-in T-Shirts from Men\'s C', 100, 'Dark Icon Graffiti.jpg'),
(6, 'Michelangelo Cat', 100000, 'Women', 'L', 'Michelangelo Cat Women T Shirt Mona Lisa Van Gogh Cute Female T shirt Aesthetic Harajuku Tshirt Funny Ulzzang 90s Grunge Vintage', 100, 'NIBESSER Mens.jpg'),
(7, 'NIBESSER Mens', 150000, 'Men', 'L', 'NIBESSER Mens Polo Shirt 2019 New Summer Short Sleeve Turn over Collar Slim Tops Casual Breathable Solid Color Business Shirt-in', 100, 'NIBESSER Mens.jpg'),
(8, 'Pioneer Camp', 150000, 'Men', 'L', 'Pioneer Camp New Arrive Mens T Shirts Fashion O Neck casual Long Sleeve T Shirt Gradient band Clothing T Shirt Homme 611907-in T', 100, 'Pioneer Camp.jpg'),
(9, 'Stylish Women', 100000, 'Women', 'L', 'Stylish Women 3D Print T Shirts Cat Graphic Tees Fashion Lady Summer White Casual Unisex Cotton T shirt Short Sleeve Tops-in T-S', 100, 'Stylish Women.jpg'),
(10, 'Sweatshirts', 200000, 'Women', 'L', 'Sweatshirts 2019 Festival Clothes Womens Christmas Printed Long Sleeve Hooded Pullover Sweatshirt Ladies Pattern Hoodies Sweter', 100, 'Sweatshirts.jpg'),
(11, 'YTL Women Autumn', 150000, 'Women', 'L', 'YTL Women Autumn Fashion Printed T shirts Leopard Patchwork Asymmetrical Hem Long Sleeve Tops For womens Ladies Tunic Top H256-i', 100, 'YTL Women Autumn.jpg'),
(12, 'YTL Women Tops', 150000, 'Women', 'L', 'YTL Women Tops Elegant Exquisite Crochet Lace T shirt Hollow out Long Sleeve Vintage Style Tunic Top Frilled Female Shirt H139L-', 100, 'YTL Women Tops.jpg'),
(13, 'Zagaa New 2019 Polo', 200000, 'Men', 'L', 'Zagaa New 2019 Polo Men\'s Shirt Cotton Short Sleeve Shirt Casual Shirts Summer Breathable Solid Male Polo Shirt Plus Size S 3XL-', 100, 'Zagaa New 2019 Polo.jpg'),
(14, 'Zogga 2019 Fashion Men Polo ', 150000, 'Men', 'L', 'Zogga 2019 Fashion Men Polo Shirt Short Sleeve Casual Business Polo Shirts Men High Quality Clothing Plus Size XXXL Polos Shirts', 100, 'Zogga 2019 Polo.jpg');

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
(37, 'waladi', 'waladi.173040127@mail.unpas.ac.id', 'default.jpg', '$2y$10$oU.MRAzW26v5Bq54PPArQOUzEOAIXqnJ0tF1XrQS5VWi7xqJWx.1.', 1, 1, 1575654699),
(38, 'wawal', 'babung@mail.unpas.ac.id', 'default.jpg', '$2y$10$f49LUXWI7Jl4xErUoKAWSOYaGOMKL7Q1FR3sUwZOsQXmEPKXrdNZm', 2, 1, 1575655425),
(39, 'user', 'user@gmail.com', 'default.jpg', '$2y$10$CbG1.efiEPr.Kw4xNWpvc.p1qdmq9EnkGvWWXl06oDj6Ett56wuCa', 2, 1, 1575716741),
(40, 'user2', 'user2@gmail.com', 'default.jpg', '$2y$10$0dNOtpSEL6Ke6oGZfXBJHOPKtR7BXkULnaAhASYkbUlZruLosHoiy', 2, 1, 1575726527),
(41, 'dede', 'dede163040080@mail.unpas.ac.id', 'default.jpg', '$2y$10$SX//JxsapeTox8Z6KOF.tOcTeHn5xSHpI1O.OSRK4rlELeTX6XkU.', 2, 1, 1576215282);

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
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

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
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
