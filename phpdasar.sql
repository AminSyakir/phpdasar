-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 02:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genres` varchar(100) NOT NULL,
  `mc` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `title`, `author`, `genres`, `mc`, `gambar`) VALUES
(1, ' The Rising of the Shield Hero', 'Aneko Yusagi', 'Dark fantasy, Isekai', 'Iwatani Naofumi', '5f926644f16c8.jpg'),
(2, 'One Piece', 'Eiichiro Oda', 'Adventure, ‎Fantasy', 'Monkey D. Luffy', 'one piece.jpg'),
(3, 'Naruto', 'Masashi Kishimoto', 'Adventure fiction, Fantasy, Martial Arts', 'Naruto Uzumaki', 'naruto.jpg'),
(4, 'Dr. Stone', 'Riichiro Inagaki', 'Adventure, Sci-Fi, Shounen', 'Senku', 'Dr_Stone.jpg'),
(5, 'Demon Slayer', 'Koyoharu Gotouge', 'Adventure, ‎dark fantasy‎, ‎martial arts‎', 'Kamado Tanjiro', 'demon slayer.jpg'),
(6, 'Fullmetal Alchemist', 'Hiromu Arakawa', 'Adventure fiction, Dark fantasy, Steampunk', 'Edward Elric', 'fullmetal.jpg'),
(7, 'That Time I Got Reincarnated as a Slime', 'Fuse', 'Fantasy, ‎Isekai', 'Rimuru Tempest', 'slime.jpg'),
(8, 'My Hero Acadamia', 'Kohei Horikoshi', 'Adventure fiction, Fantasy, Superhero fiction, Comedy, Science Fiction', 'Midoriya Izuku', 'bokuNoHero.jpg'),
(21, 'Yu-Gi-Oh!', 'Kazuki Takahashi', 'Adventure, Fantasy, Science fiction', 'Yugi Moto', 'yugioh.png'),
(22, 'One Punch Man', 'ONE', 'Action, Comedy, Superhero', 'Saitama', 'opm.jpg'),
(24, 'tyjt', 'tjy', 'jtyjt', 'tyj', 'photo_2020-05-30_14-12-54.jpg'),
(25, 'mnbnm', 'bnmb', 'nbmbn', 'bnmbn', '5f9263969f8f7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
