-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 12:06 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazinit`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `IDC` int(11) NOT NULL,
  `Nume` varchar(15) NOT NULL,
  `Prenume` varchar(25) NOT NULL,
  `CNP` char(13) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefon` int(10) NOT NULL,
  `Adresa` varchar(70) NOT NULL,
  `DataN` date NOT NULL,
  `Nickname` varchar(20) NOT NULL,
  `Parola` varchar(20) NOT NULL,
  `Adresare` varchar(6) NOT NULL,
  `Educatie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`IDC`, `Nume`, `Prenume`, `CNP`, `Email`, `Telefon`, `Adresa`, `DataN`, `Nickname`, `Parola`, `Adresare`, `Educatie`) VALUES
(2, 'Radu', 'Robert', '1890310251261', 'admin@magazinit.ro', 721712612, 'Pantelimon, 51', '1989-03-10', 'admin', 'admin', 'Domnul', 'Facultate(terminat)'),
(3, 'Popescu', 'Georgeta', '2900711615215', 'geo_pop@yahoo.com', 751765121, 'Berceni, 1', '1990-07-11', 'geo_pop', 'parola', 'Doamna', 'Facultate(in curs)'),
(5, 'Andrei', 'Vasile', '1771005432432', 'v_andrei@yahoo.com', 721843121, 'Fundeni, 9', '1977-10-05', 'andreivas', 'parola', 'Domnul', 'Facultate(terminat)'),
(10, 'Udrea', 'Marius', '19812312314', 'udrea@live.com', 901239841, 'Strada Drumul Mic Intre Vii', '0000-00-00', 'udreamarius', 'smallville', 'Domnul', 'Facultate (in curs)');

-- --------------------------------------------------------

--
-- Table structure for table `curier`
--

CREATE TABLE `curier` (
  `IDCurier` int(11) NOT NULL,
  `Firma` varchar(13) NOT NULL,
  `Telefon` int(10) NOT NULL,
  `Judet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curier`
--

INSERT INTO `curier` (`IDCurier`, `Firma`, `Telefon`, `Judet`) VALUES
(1, 'SpeedCurier', 210181614, 'Bucuresti'),
(2, 'FunTransport', 217751426, 'Arges'),
(3, 'YouStuff', 721981621, 'Cluj'),
(4, 'Travel', 2147483647, 'Constanta'),
(5, 'FunSpeed', 721971721, 'Alba'),
(6, 'SafeTransport', 766871621, 'Bucuresti'),
(7, 'FunCurier', 767918271, 'Bucuresti'),
(8, 'Flash', 751716217, 'Cluj');

-- --------------------------------------------------------

--
-- Table structure for table `detaliiv`
--

CREATE TABLE `detaliiv` (
  `IDDV` int(11) NOT NULL,
  `IDV` int(11) NOT NULL,
  `IDP` int(11) NOT NULL,
  `NrBuc` int(11) NOT NULL,
  `data_v` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detaliiv`
--

INSERT INTO `detaliiv` (`IDDV`, `IDV`, `IDP`, `NrBuc`, `data_v`) VALUES
(1, 1, 4, 2, '2012-01-02'),
(2, 2, 5, 1, '2013-08-11'),
(3, 3, 6, 1, '2012-01-03'),
(4, 4, 2, 1, '2013-06-03'),
(5, 5, 8, 2, '2012-11-12'),
(6, 6, 8, 1, '2013-08-11'),
(7, 7, 4, 3, '2013-08-11'),
(8, 8, 9, 1, '2012-12-24'),
(9, 9, 7, 1, '2013-10-08'),
(10, 10, 11, 1, '2013-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `produs`
--

CREATE TABLE `produs` (
  `IDP` int(11) NOT NULL,
  `Tip` varchar(7) NOT NULL,
  `Producator` varchar(25) NOT NULL,
  `Memorie` int(4) NOT NULL,
  `Diagonala` float NOT NULL,
  `OS` varchar(15) DEFAULT NULL,
  `Disp` varchar(15) NOT NULL,
  `Pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produs`
--

INSERT INTO `produs` (`IDP`, `Tip`, `Producator`, `Memorie`, `Diagonala`, `OS`, `Disp`, `Pret`) VALUES
(1, 'Tableta', 'Apple', 16, 7, NULL, 'Disponibil', 1800),
(2, 'Tableta', 'Acer', 32, 10.1, 'Windows 8', 'Disponibil', 2700),
(3, 'Laptop', 'Lenovo', 1000, 15.4, 'Windows 8', 'Disponibil', 3400),
(4, 'Laptop', 'Acer', 750, 15.6, NULL, 'Indisponibil', 2600),
(5, 'Tableta', 'Acer', 16, 10, NULL, 'Disponibil', 1700),
(6, 'Laptop', 'Alienware', 2000, 17, 'Windows 8', 'Disponibil', 8000),
(7, 'Laptop', 'Acer', 750, 15.6, NULL, 'Indisponibil', 2500),
(8, 'Laptop', 'Asus', 500, 15.6, NULL, 'Disponibil', 1800),
(9, 'Tableta', 'Lenovo', 16, 10.1, NULL, 'Disponibil', 999),
(10, 'Laptop', 'Alienware', 1000, 17.1, 'Windows 8.1', 'Disponibil', 12000),
(11, 'Laptop', 'HP', 500, 15.6, NULL, 'Indisponibil', 1600),
(12, 'Tableta', 'Allview', 8, 7, 'Android', 'Disponibil', 500);

-- --------------------------------------------------------

--
-- Table structure for table `vanzare`
--

CREATE TABLE `vanzare` (
  `IDV` int(11) NOT NULL,
  `Plata` varchar(15) NOT NULL,
  `IDC` int(11) NOT NULL,
  `IDCurier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vanzare`
--

INSERT INTO `vanzare` (`IDV`, `Plata`, `IDC`, `IDCurier`) VALUES
(1, 'cash', 5, 3),
(2, 'cash', 5, 4),
(3, 'card', 1, 2),
(4, 'cash', 4, 1),
(5, 'cash', 7, 7),
(6, 'card', 3, 8),
(7, 'card', 6, 5),
(8, 'card', 4, 6),
(9, 'cash', 8, 5),
(10, 'card', 4, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`IDC`),
  ADD UNIQUE KEY `CNP` (`CNP`,`Nickname`);

--
-- Indexes for table `curier`
--
ALTER TABLE `curier`
  ADD PRIMARY KEY (`IDCurier`);

--
-- Indexes for table `detaliiv`
--
ALTER TABLE `detaliiv`
  ADD PRIMARY KEY (`IDDV`);

--
-- Indexes for table `produs`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`IDP`);

--
-- Indexes for table `vanzare`
--
ALTER TABLE `vanzare`
  ADD PRIMARY KEY (`IDV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `curier`
--
ALTER TABLE `curier`
  MODIFY `IDCurier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `detaliiv`
--
ALTER TABLE `detaliiv`
  MODIFY `IDDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `produs`
--
ALTER TABLE `produs`
  MODIFY `IDP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vanzare`
--
ALTER TABLE `vanzare`
  MODIFY `IDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
