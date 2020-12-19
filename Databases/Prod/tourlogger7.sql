-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 19. Dez 2020 um 19:46
-- Server-Version: 5.7.32-0ubuntu0.16.04.1
-- PHP-Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tourlogger7`
--
CREATE DATABASE IF NOT EXISTS `tourlogger7` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tourlogger7`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `companies`
--

CREATE TABLE `companies` (
  `companyId` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `totalEarnings` int(11) NOT NULL DEFAULT '0',
  `employees` int(11) NOT NULL DEFAULT '0',
  `totalTours` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `drivers`
--

CREATE TABLE `drivers` (
  `driverId` varchar(10) NOT NULL,
  `employed` tinyint(1) NOT NULL DEFAULT '0',
  `totalDrivenDistance` int(12) NOT NULL DEFAULT '0',
  `totalEarnings` int(20) NOT NULL DEFAULT '0',
  `truck` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `refuels`
--

CREATE TABLE `refuels` (
  `refuelId` varchar(12) NOT NULL,
  `date` varchar(12) NOT NULL DEFAULT '01.01.1970',
  `country` varchar(50) NOT NULL DEFAULT 'unknown',
  `km` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `litres` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tours`
--

CREATE TABLE `tours` (
  `tourId` varchar(20) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `tourFrom` varchar(50) NOT NULL DEFAULT '0',
  `tourTo` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`companyId`);

--
-- Indizes für die Tabelle `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
