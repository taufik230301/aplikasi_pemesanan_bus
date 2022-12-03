-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2022 pada 12.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pemesanan_bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `kode_pembayaran` varchar(100) NOT NULL,
  `nama_bus` varchar(50) NOT NULL,
  `nomor_kursi` varchar(100) NOT NULL,
  `asal` text NOT NULL,
  `tujuan` text NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `id_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `kode_pembayaran`, `nama_bus`, `nomor_kursi`, `asal`, `tujuan`, `tanggal_berangkat`, `tanggal_pesan`, `nama_lengkap`, `tanggal_lahir`, `usia`, `email`, `jenis_kelamin`, `nomor_telepon`, `metode_pembayaran`, `id_user`) VALUES
(3, '27c26fcd5', 'Bus Aminjaya A', 'Kursi 01', 'Palembang', 'Riau', '2022-12-19', '2022-12-02', 'Taufiiqulhakim', '2022-12-11', 11, 'taufiiqulhakim23@gmail.com', 'L', '082176350289', 'Cash', '3b3bccdfa9bbf401215c7fcc74e926f2'),
(4, '5034ea', 'Bus Aminjaya A', 'Kursi 01', 'Palembang', 'Riau', '2022-12-15', '2022-12-02', 'Kresna Vespri', '2022-12-09', 21, 'kresna123@gmail.com', 'L', '0812781728', 'Cash', '3b3bccdfa9bbf401215c7fcc74e926f2'),
(5, '8ca522', 'Bus Aminjaya A', 'Kursi 01', 'Palembang', 'Bangka', '2022-12-21', '2022-12-02', 'Kresna Vespri', '2022-12-06', 21, 'kresna123@gmail.com', 'L', '0812781728', 'Cash', '3694da7577b668f1061202fd0e7fe95d'),
(6, '2fdf3e', 'Bus Aminjaya D', 'Kursi 02', 'Palembang', 'Palembang', '2022-12-14', '2022-12-02', 'Taufiiqulhakim 10219021', '2022-12-15', 21, 'taufiiqulhakim23@gmail.com', 'L', '+62812781728', 'Transfer', '3694da7577b668f1061202fd0e7fe95d'),
(7, 'be3ca6', 'Bus Aminjaya A', 'Kursi 02', 'Palembang', 'Palembang', '2022-12-17', '2022-12-02', 'Taufiiqulhakim 10219021', '2022-12-16', 23, 'taufiiqulhakim23@gmail.com', 'L', '+62812781728', 'Cash', '3694da7577b668f1061202fd0e7fe95d'),
(8, '014e01', 'Bus Aminjaya A', 'Kursi 03', 'Palembang', 'Palembang', '2022-12-21', '2022-12-02', 'Taufiiqul Hakim', '2022-12-21', 23, 'taufiiqul.hakim@binus.ac.id', 'L', '+62812781728', 'Cash', '3694da7577b668f1061202fd0e7fe95d'),
(10, '403ac0', 'Bus Aminjaya A', 'Kursi 03', 'Indralaya', 'Palembang', '2022-12-15', '2022-12-03', 'Taufiiqulhakim 10219021', '2022-12-20', 11, 'taufiiqulhakim23@gmail.com', 'L', '+62812781728', 'Cash', 'db86b7557f9b4ec99b3bf2d36bf61538'),
(11, '0fe293', ' Damri Unsri 2', 'Kursi 11', 'Palembang', 'Palembang', '2022-12-23', '2022-12-03', 'Taufiiqul Hakim', '2022-12-23', 23, 'taufiiqul.hakim@binus.ac.id', 'L', '+62812781728', 'Cash', 'db86b7557f9b4ec99b3bf2d36bf61538');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_user_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `id_user_level`) VALUES
('3694da7577b668f1061202fd0e7fe95d', 'Kresna', 'kresna123@gmail.com', '123', 2),
('3b3bccdfa9bbf401215c7fcc74e926f2', 'Taufiiqulhakim', 'taufiiqulhakim23@gmail.com', '123', 2),
('db86b7557f9b4ec99b3bf2d36bf61538', 'rian', 'rian@gmail.com', '123', 2),
('f5fbaaa83ad1c13cc0b33e015be1e941', 'rian', 'rian@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
