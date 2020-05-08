-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 09:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `name`, `description`, `image`) VALUES
(1, 'Naruto', 'Ninja anime Series', 'Images/Enime/Naruto2.JFIF'),
(2, 'Death Note', 'Dark Anime Series talk about someone find Note that can kill people.', 'Images/Enime/DeathNote.JFIF'),
(3, 'AttackOnTitans', 'good Series', 'Images/Enime/AttackOnTitans.JFIF'),
(4, 'hunterXhunter', '', 'Images/Enime/hunterXhunter.JFIF'),
(5, 'DragonBall', 'Action Anmie Series', 'Images/Enime/DragonBall.JFIF'),
(6, 'Konan', 'Detictive Anime Series', 'Images/Enime/konan.JFIF'),
(7, 'yoghi', '', 'Images/Enime/yoghi.JFIF'),
(8, 'Code Geass', '', 'Images/Enime/Code Geass.jpg'),
(9, 'Tetsujin', '', 'Images/Enime/Tetsujin.JFIF'),
(10, 'Bojack', '', 'Images/Enime/Bojack.JFIF');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rate` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `description`, `image`, `rate`) VALUES
(1, 'Joker', 'stand alone origin story', 'Images/Movies/Joker.JFIF', 3),
(2, 'Green Mile', 'based on true story', 'Images/Movies/GreenMile.jpg', 0),
(3, 'FastandFuries9', 'Car racing', 'Images/Movies/GreenMile.jpg', 0),
(4, '1917', 'War Movie', 'Images/Movies/1917.JFIF', 0),
(5, 'Venom', 'SpiderMan Series', 'Images/Movies/Venom.jfif', 0),
(6, 'Avatar', 'Sceincefiction Movie', 'Images/Movies/Avatar.jfif', 0),
(7, 'Thor 2', 'Avneger Series', 'Images/Movies/Thor.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `description`, `image`) VALUES
(1, 'Sherlock', 'it is talk about crime', 'Images/Series/Sherlock.JFIF'),
(2, 'Elite', 'there is crime in school and the police investigate about it ', 'Images/Series/Elite.JFIF'),
(3, 'Lucifer', 'Series talk about Devil talk a break in the earth', 'Images/Series/Lucifer.JFIF'),
(4, 'Witcher', 'Science fiction Series', 'Images/Series/Witcher.JFIF'),
(5, 'La casa', 'Money Hesit Series', 'Images/Series/La casa.JFIF'),
(6, 'Peaky', 'Mafia Series', 'Images/Series/Peaky.JFIF'),
(7, 'YOU', 'boring Series', 'Images/Series/YOU.JFIF'),
(8, 'Punshir', 'Action Series', 'Images/Series/Punshir.JFIF');

-- --------------------------------------------------------

--
-- Table structure for table `tvshow`
--

CREATE TABLE `tvshow` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tvshow`
--

INSERT INTO `tvshow` (`id`, `name`, `description`, `image`) VALUES
(1, 'House', 'medical tvShow', 'Images/TvShow/House.JFIF'),
(2, 'Nikita', 'Action tv show', 'Images/TvShow/Nikita.JFIF'),
(3, 'Liar', '', 'Images/TvShow/Liar.JFIF'),
(4, 'MotherLand', '', 'Images/TvShow/MotherLand.JFIF'),
(5, 'BatesModel', '', 'Images/TvShow/Bates Motel.JFIF'),
(6, 'Billions', '', 'Images/TvShow/Billions.JFIF'),
(7, 'Cobrea', '', 'Images/TvShow/Cobrea.JFIF'),
(8, 'Empire', '', 'Images/TvShow/Empire.JFIF'),
(9, 'Sister', '', 'Images/TvShow/Sisters.JFIF');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_name` varchar(16) NOT NULL,
  `U_password` varchar(16) NOT NULL,
  `U_email` varchar(40) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `U_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_name`, `U_password`, `U_email`, `isAdmin`, `U_ID`) VALUES
('Muhammed_Khaled', '12345678', 'batates@test.com', 1, 1),
('Abdelrhman_Amer', '123456789', 'Abdelrhman_Amer@google.com', 1, 2),
('Karim_Mohammed', '12345678', 'Karim_Mohammed@yahoo.com', 1, 3),
('Omar1234', 'qwertyuiop', 'Omar1234@yahoo.com', 0, 4),
('Ahmed1234', 'wsad1234', 'Ahmed1234@google.com', 0, 6),
('Mona56789', '987654321', 'Mona56789@yahoo.com', 0, 7),
('Ameer456987', 'lkjhgfdsa', 'Ameer456987@google.com', 0, 8),
('toka2000', '12345678', 'toka2000@gmail.com', 0, 9),
('Seif56734', '456789123', 'Seif56734@home.eg', 0, 21),
('Seif56734', '456789123', 'Seif56734@home.eg', 0, 22),
('Tahseen75', '987654321', 'poomar@yahoo.com', 0, 24),
('Ahmed987654', '123456789', 'Ahmed987654@google', 0, 27),
('Ameer12345ty', '123456789', 'Ameer12345ty@lol', 0, 28),
('Ameer7269', '123456789', 'Ameer7269@lol', 0, 29),
('Ameer7269', '123456789', 'Ameer7269@lol', 0, 30),
('Tahseen75000', 'Tahseen75000', 'Tahseen75000@Tahseen75000', 0, 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvshow`
--
ALTER TABLE `tvshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tvshow`
--
ALTER TABLE `tvshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
