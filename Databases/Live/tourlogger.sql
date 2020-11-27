-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 25. Nov 2020 um 16:15
-- Server-Version: 5.7.32-0ubuntu0.16.04.1
-- PHP-Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tourlogger`
--
CREATE DATABASE IF NOT EXISTS `tourlogger` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tourlogger`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tourdata`
--

CREATE TABLE `tourdata` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '-',
  `from` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `to` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `freight` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tourdata`
--
ALTER TABLE `tourdata`
  ADD PRIMARY KEY (`tourId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tourdata`
--
ALTER TABLE `tourdata`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
