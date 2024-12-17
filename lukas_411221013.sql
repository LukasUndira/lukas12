-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2024 pada 12.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lukas_411221013`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `produk_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskirpsi_produk` text DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `stok` int(11) DEFAULT 0,
  `gambar_produk` varchar(255) DEFAULT NULL,
  `status` enum('Tersedia','Tidak Tersedia') DEFAULT 'Tersedia',
  `berat` decimal(10,2) DEFAULT NULL,
  `ukuran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`produk_id`, `nama_produk`, `deskirpsi_produk`, `harga`, `created_at`, `stok`, `gambar_produk`, `status`, `berat`, `ukuran`) VALUES
(8, 'potabe', 'makanan ringan', 5000.00, '2024-11-03 16:39:45', 10, '1730626785_fc2bfd773f970533441c.jpeg', 'Tersedia', 1.00, '10'),
(9, 'silverquen ', 'coklat', 20000.00, '2024-11-03 16:40:33', 10, '1730626833_9206dccc43bfc234faa7.jpeg', 'Tersedia', 2.00, '6'),
(12, 'ahh', 'makanan ringan', 5000.00, '2024-11-03 17:07:00', 20, '1730628420_bded8c0c4c69677b244e.jpeg', 'Tersedia', 1.00, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_transaksi` datetime DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `produk_id`, `user_id`, `tanggal_transaksi`, `jumlah`, `total_harga`) VALUES
(35, 8, 25, '2024-12-13 23:44:19', 10, 10000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto_profil` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama_pelanggan`, `alamat`, `kontak`, `email`, `username`, `password`, `created_at`, `tanggal_lahir`, `jenis_kelamin`, `foto_profil`) VALUES
(20, 'admin', 'jl.admin', '086644112', 'admin@gmail.com', 'admin', '$2y$10$NkTa9URUn79Rgsbcv2esme2dksBSaE64QU6lKgkVf9cM4PsZbCA/i', '2024-11-03 16:38:44', '2024-11-03', 'P', '1730626724_094bdc5de95b0f7b416a.jpg'),
(25, 'Lukas', 'jl. kapuk muara', '085591695060', 'lukas@gmail.com', 'lukas1', '$2y$10$GyU1Gyas5Qf.HSxb6mkWaOLC2qsYV2VO2SdNVZcJqkQmhHSnjePO2', '2024-12-13 20:46:04', '2024-12-13', 'L', '1734097563_952b3e1d2eff6c0cbaa3.png'),
(66, 's', 'asd', '111', '22', 'lukas', '1', '2024-12-14 02:49:49', '2024-12-01', 'L', '1'),
(95, 'lukas', 'jl.kapukmuara', '0855911231', 'dsa', 'lukas11', '12', '2024-12-14 03:05:47', '2001-02-10', 'L', '1734120347_8bf6210ef2d9e96589f9.png'),
(96, 'pupu', 'jl.kapukmuara', '0855911231', 'lukas@gmail.com', 'pupu2', '1', '2024-12-14 03:08:04', '2021-02-10', 'L', '1734120484_9343ca23383d31e442e8.png'),
(97, 'pupu', 'jl.kapukmuara', '0855911231', 'lukas@gmail.com', 'pupu3', '1', '2024-12-14 03:10:02', '2021-02-10', 'L', '1734120602_8167e45ec3ead64f7774.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `transaksi_ibfk_1` (`produk_id`),
  ADD KEY `transaksi_ibfk_2` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `products` (`produk_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
