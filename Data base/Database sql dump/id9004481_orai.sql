-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 m. Geg 26 d. 15:57
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9004481_orai`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `matavimai`
--

CREATE TABLE `matavimai` (
  `Laikas` datetime DEFAULT NULL,
  `Temperatura` double DEFAULT NULL,
  `Slegis` double DEFAULT NULL,
  `Sviesa` int(11) DEFAULT NULL,
  `Dregnis` double DEFAULT NULL,
  `id_MATAVIMAI` int(11) NOT NULL,
  `fk_PRIETAISASid_PRIETAISAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `prietaisas`
--

CREATE TABLE `prietaisas` (
  `Pavadinimas` varchar(50) NOT NULL,
  `id_PRIETAISAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `prietaiso_komponentai`
--

CREATE TABLE `prietaiso_komponentai` (
  `Modulio_pavadinimas` varchar(50) NOT NULL,
  `Modulis_Matuoja_Ka` varchar(50) NOT NULL,
  `Matmenys` varchar(50) NOT NULL,
  `Modulio_Matmenu_RIbos_Min` double DEFAULT NULL,
  `Modulio_Matmenu_Ribos_Max` double DEFAULT NULL,
  `id_PRIETAISO_KOMPONENTAI` int(11) NOT NULL,
  `fk_PRIETAISASid_PRIETAISAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojas`
--

CREATE TABLE `vartotojas` (
  `Username` varchar(50) NOT NULL,
  `Slaptazodis` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `id_VARTOTOJAS` int(11) NOT NULL,
  `Confirmation_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojas_prietaisas`
--

CREATE TABLE `vartotojas_prietaisas` (
  `fk_VARTOTOJASid_VARTOTOJAS` int(11) NOT NULL,
  `fk_PRIETAISASid_PRIETAISAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matavimai`
--
ALTER TABLE `matavimai`
  ADD PRIMARY KEY (`id_MATAVIMAI`),
  ADD KEY `fk_PRIETAISASid_PRIETAISAS` (`fk_PRIETAISASid_PRIETAISAS`);

--
-- Indexes for table `prietaisas`
--
ALTER TABLE `prietaisas`
  ADD PRIMARY KEY (`id_PRIETAISAS`);

--
-- Indexes for table `prietaiso_komponentai`
--
ALTER TABLE `prietaiso_komponentai`
  ADD PRIMARY KEY (`id_PRIETAISO_KOMPONENTAI`),
  ADD KEY `fk_PRIETAISASid_PRIETAISAS` (`fk_PRIETAISASid_PRIETAISAS`);

--
-- Indexes for table `vartotojas`
--
ALTER TABLE `vartotojas`
  ADD PRIMARY KEY (`id_VARTOTOJAS`);

--
-- Indexes for table `vartotojas_prietaisas`
--
ALTER TABLE `vartotojas_prietaisas`
  ADD PRIMARY KEY (`fk_VARTOTOJASid_VARTOTOJAS`,`fk_PRIETAISASid_PRIETAISAS`),
  ADD KEY `fk_PRIETAISASid_PRIETAISAS` (`fk_PRIETAISASid_PRIETAISAS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matavimai`
--
ALTER TABLE `matavimai`
  MODIFY `id_MATAVIMAI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prietaisas`
--
ALTER TABLE `prietaisas`
  MODIFY `id_PRIETAISAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prietaiso_komponentai`
--
ALTER TABLE `prietaiso_komponentai`
  MODIFY `id_PRIETAISO_KOMPONENTAI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vartotojas`
--
ALTER TABLE `vartotojas`
  MODIFY `id_VARTOTOJAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `matavimai`
--
ALTER TABLE `matavimai`
  ADD CONSTRAINT `matavimai_ibfk_1` FOREIGN KEY (`fk_PRIETAISASid_PRIETAISAS`) REFERENCES `prietaisas` (`id_PRIETAISAS`);

--
-- Apribojimai lentelei `prietaiso_komponentai`
--
ALTER TABLE `prietaiso_komponentai`
  ADD CONSTRAINT `prietaiso_komponentai_ibfk_1` FOREIGN KEY (`fk_PRIETAISASid_PRIETAISAS`) REFERENCES `prietaisas` (`id_PRIETAISAS`);

--
-- Apribojimai lentelei `vartotojas_prietaisas`
--
ALTER TABLE `vartotojas_prietaisas`
  ADD CONSTRAINT `vartotojas_prietaisas_ibfk_1` FOREIGN KEY (`fk_VARTOTOJASid_VARTOTOJAS`) REFERENCES `vartotojas` (`id_VARTOTOJAS`),
  ADD CONSTRAINT `vartotojas_prietaisas_ibfk_2` FOREIGN KEY (`fk_PRIETAISASid_PRIETAISAS`) REFERENCES `prietaisas` (`id_PRIETAISAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
