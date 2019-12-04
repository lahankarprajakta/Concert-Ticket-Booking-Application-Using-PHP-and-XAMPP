-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 07:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `ConcertID` varchar(100) NOT NULL,
  `ConcertName` varchar(200) NOT NULL,
  `SeatsAvailable` int(200) NOT NULL,
  `City` varchar(400) NOT NULL,
  `State` varchar(300) NOT NULL,
  `Description` text NOT NULL,
  `Artist` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `UserName` varchar(150) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `UserID` varchar(120) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `FirstName` varchar(150) DEFAULT NULL,
  `LastName` varchar(150) DEFAULT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(1000) DEFAULT NULL,
  `MemberSince` varchar(255) DEFAULT NULL,
  `Active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`UserID`, `UserName`, `FirstName`, `LastName`, `Email`, `Password`, `MemberSince`, `Active`) VALUES
('jwvpo4', 'adad', 'dad', 'ffff', 'dafasd@sf.edu', '963f4d6d27c6cab86a8fead9d4a46ff839bd95ab2ea7dcdc15008cdd90b5ef056', '1556828275', 1),
('jm4w0r', 'Aegon123', 'Aegon', 'Tragyrian', 'aegontargyrian@gmail.com', NULL, '1556898086', 1),
('abwts5', 'ak16031n', 'Aishwarya', 'Kate', 'aish23@gmail.com', NULL, '1557767885', 1),
('ymtcmr', 'Arya123', 'Arya', 'Stark', 'aryastark@yahoo.com', '56d5f80ba4d34059249c7be148f997049a27d32c32f76bef7658d8e9eaaa96b27', '1556896263', 1),
('8rtq1t', 'Chandler', 'Chandler', 'Bing', '1@gmai.com', '5378cff9f6baeae832a293dea1815bbfad6a4a6e623eb00216040966114f30b5c', '1509578963', 1),
('jnwuwx', 'Dany123', 'Danyris', 'Targyrian', 'danyristargyrian@gmail.com', 'e6ea54fa183da3a7a8570676216fcd16101a3813382cebcee8bf1b37d70fd1a67', '1556897985', 1),
('pzujj5', 'Gunther123', 'Gunther', 'Centralperk', 'gunther@gmail.com', 'bea881cc49fcc7fa395647799a59f61fe5e0bd231732c711aba8dd6e445248980', '1491236221', 1),
('w3vk4e', 'Jack', 'p', 'm', '1@gmai.com', '5ddbbbdc7811e6b50f8e1f46015cfb01c2f35b28f7eadc19f6fb2953abc7f2449', '1509491714', 0),
('nuptj3', 'Joey123', 'Joey', 'Tribianni', 'joey@gmail.com', '8d66f8f3836b4346e4ec9f766190e7539fa6b4fa0c728a9ee13cdd372552bc3d3', '1477402585', 1),
('yj4gsj', 'John123', 'John', 'Smith', 'john123@gmail.com', 'aeb92ef6a15e1d710b4553d059d7242039f79e8c01cd9ffa4c9a0a2964729d2a0', '1556849855', 1),
('e3njt7', 'JSmith', 'J', 'Smith', 'r@g.com', 'fefda3cb1dc072fa024e24e24f21e5d7b82e421f1ea2259a6f573b3e339e117cc', '1491520600', 1),
('cyftrb', 'Monica123', 'Monica', 'Geller', 'monica@localhost.com', 'ce1615712e24b7c7ebf23feab855a75b4a8a852bbcfae9a99911246256a0fe497', '1447091580', 1),
('w05c3h', 'NedStark', 'Ned', 'Stark', 'ned@stark.com', 'e8af7aba9dc4fd9a69170487dcdb42adc47d9625875e5e43cec45e213b9a8e59a', '1478735594', 1),
('kgo8as', 'Phoebe123', 'Phoebe', 'Buffey', 'Pheobe@lotr.com', '544e4add46abcd2d71719d88b7ba3ffd79305e76f8f5646fd565d7e938696644a', '1478648340', 1),
('xuntqe', 'Prajakta123', 'Prajakta', 'Lahankar', 'prajakta@gmail.com', '7d256ab8d315be377e0b70cd2d32000c3df445c18e33b6456470f76264f9890f9', '1556814102', 1),
('ob1p1c', 'Rachel123', 'Rachel', 'Green', 'rachelgreen@gmail.com', '5f2282ea3c3396fb8b90bd03fa3fe9f395a3bdad4d8547c2a9eaa376b51723f0b', '1556896022', 1),
('3nv7pq', 'Ross123', 'Ross', 'Geller', 'Ross@gmail.com', 'ross1234', '1509490531', 1),
('g0fcui', 'sdbjhb', 'sdbsb', 'smndbnd', 'fasgd@gmail.com', '37af8181bfa03cf818eef0e3ad30da346d388fc9f78f067f4802ff7269e9c9a53', '1556813548', 1),
('io6t3h', 'trial', 'trial', 'trial', 'trial@gmail.com', '6c40e461933540f4e1105147b912c78d55e4bafddcd3cf775be164523609038ae', '1556842607', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`ConcertID`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`UserName`,`Email`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `concert_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `userdetails` (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
