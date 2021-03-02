-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 12:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korisnici`
--

-- --------------------------------------------------------

--
-- Table structure for table `predmet`
--

CREATE TABLE `predmet` (
  `predmet_id` int(255) NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Datum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predmet`
--

INSERT INTO `predmet` (`predmet_id`, `Naziv`, `Datum`) VALUES
(1, 'Web programiranje', '2021-01-05T04:47'),
(3, 'Programiranje', '2021-01-29T05:50'),
(4, 'Baze Podataka', '2021-01-31T13:49'),
(5, 'Matemaika', '2021-01-10T16:50'),
(6, 'OOP', '2021-01-17T18:51'),
(7, 'Java', '2021-01-07T16:51'),
(8, 'C++', '2021-01-07T17:51'),
(9, 'C', '2021-01-10T13:45:00'),
(15, 'Angular', '2021-01-31T05:51'),
(16, 'Quiz1', '2021-01-10T13:45:00'),
(17, 'Test2', '2021-01-10T13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Prezime` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Administrator` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Ime`, `Prezime`, `Password`, `Username`, `Email`, `Administrator`) VALUES
(2, 'Chuck', 'Norris', 'admin123', 'admin', 'Chucknorris@gmail.com', 1),
(7, 'Safer', 'Zildzic', '', 'safke', 'safer@gmail.com', 2),
(9, 'Connor', 'Mcgregor', '1234', 'notorious', 'conormcgregor@gmail.com', 2),
(12, 'Ahmed', 'Sakic', 'ahmo', 'sakicahmed18', 'sakicahmed@gmail.com', 1),
(13, 'Jon', 'Jones', '123', 'bones', 'bonesjones@gmail.com', 0),
(16, 'Nikki', 'Lauda', '123', 'lauda1', 'sofrmail@mail.com', 0),
(17, 'Hade', 'Hadeis', '123', 'Hades', 'maybe@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_predmet`
--

CREATE TABLE `users_predmet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `predmet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_predmet`
--

INSERT INTO `users_predmet` (`id`, `user_id`, `predmet_id`) VALUES
(7, 7, 1),
(8, 7, 3),
(14, 9, 4),
(15, 9, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `predmet`
--
ALTER TABLE `predmet`
  ADD PRIMARY KEY (`predmet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `users_predmet`
--
ALTER TABLE `users_predmet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `predmet_id` (`predmet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predmet`
--
ALTER TABLE `predmet`
  MODIFY `predmet_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_predmet`
--
ALTER TABLE `users_predmet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_predmet`
--
ALTER TABLE `users_predmet`
  ADD CONSTRAINT `users_predmet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_predmet_ibfk_2` FOREIGN KEY (`predmet_id`) REFERENCES `predmet` (`predmet_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
