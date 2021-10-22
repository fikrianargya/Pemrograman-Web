-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2021 pada 18.59
-- Versi server: 5.7.24
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `Judul` varchar(50) DEFAULT NULL,
  `Hobby4` varchar(50) DEFAULT NULL,
  `Hobby5` varchar(50) DEFAULT NULL,
  `Hobby6` varchar(50) DEFAULT NULL,
  `Project4` varchar(50) DEFAULT NULL,
  `Project5` varchar(50) DEFAULT NULL,
  `Project6` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`Judul`, `Hobby4`, `Hobby5`, `Hobby6`, `Project4`, `Project5`, `Project6`) VALUES
('fikri.jpeg', '1.jpeg', '2.jpg', '3.jpg', 'dota.png', 'valorant.jpg', 'fortnite.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `Nama` varchar(50) DEFAULT NULL,
  `Text` varchar(50) DEFAULT NULL,
  `About` text,
  `Hobby1` text,
  `Hobby2` text,
  `Hobby3` text,
  `Project1` text,
  `Project2` text,
  `Project3` text,
  `Valorant` varchar(50) DEFAULT NULL,
  `Dota2` varchar(50) DEFAULT NULL,
  `Apex` varchar(50) DEFAULT NULL,
  `Fornite` varchar(50) DEFAULT NULL,
  `NamaL` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Pesan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`Nama`, `Text`, `About`, `Hobby1`, `Hobby2`, `Hobby3`, `Project1`, `Project2`, `Project3`, `Valorant`, `Dota2`, `Apex`, `Fornite`, `NamaL`, `Email`, `Pesan`) VALUES
('Fikri Anargya Yoniar', 'The Simple Player Games, Enjoyed', 'Hello, perkenalkan nama saya Fikri Anargya Yoniar biasa dipanggil \"Gya\". Saya berumur 20 tahun dan saya lahir di Tangerang Selatan, 04 Oktober 2001. Saya kuliah di Universitas Pembangunan Jaya jurusan Informatika, Hobi saya bermain game dan menonton film, karena hobi saya seperti itu jadi mendorong saya ingin menjadi Player Esport.', 'Saya sangat berpengalaman dalam bermain Dota 2, karena itu saya meneruskan bakat saya sampai TI.', 'Valorant game yang sangat terkenal pada saat ini, saya juga ingin bermain di VCT.', 'Fornite cukup terkanal dengan kolaborasi-kolaborasinya, karena kolaborasinya saya jadi menyukai Fornite.', 'Karena keterampilan saya dalam bermain Dota 2, saya membuka jasa boosting MMR.', 'Melihat kemampuan dalam game valorant, saya juga bisa membuka jasa boosting Rank.', 'Untuk cepat menaikan rank di valorant, bisa menghubungkan saya dalam boosting Rank.', 'Valorant', 'Dota 2', 'Apex Legend', 'Fornite', 'Nama Lengkap', 'Email', 'Pesan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
