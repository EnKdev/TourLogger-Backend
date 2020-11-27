-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 27. Nov 2020 um 16:27
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
-- Tabellenstruktur für Tabelle `region.as.ch.ats`
--

CREATE TABLE `region.as.ch.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=gb18030 COMMENT='Chinese Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.as.ch.ets`
--

CREATE TABLE `region.as.ch.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=gb18030 COMMENT='Chinese Table for ETS2';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.as.jp.ats`
--

CREATE TABLE `region.as.jp.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=eucjpms COMMENT='Japanese Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.as.jp.ets`
--

CREATE TABLE `region.as.jp.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=eucjpms COMMENT='Japanese Table for ETS2';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.as.sk.ats`
--

CREATE TABLE `region.as.sk.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=euckr COMMENT='South Korean Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.as.sk.ets`
--

CREATE TABLE `region.as.sk.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=euckr COMMENT='South Korean Table for ETS2';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.aus.ats`
--

CREATE TABLE `region.aus.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Australian Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.aus.ets`
--

CREATE TABLE `region.aus.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Australian Table for ETS2';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.eue.ats`
--

CREATE TABLE `region.eue.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Eastern European Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.eue.ets`
--

CREATE TABLE `region.eue.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.euw.ats`
--

CREATE TABLE `region.euw.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Western European Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.euw.ets`
--

CREATE TABLE `region.euw.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Western European Table for ETS2';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.na.ats`
--

CREATE TABLE `region.na.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='North American Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.na.ets`
--

CREATE TABLE `region.na.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='North American Table for ETS2';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.sa.ats`
--

CREATE TABLE `region.sa.ats` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='South American Table for ATS';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `region.sa.ets`
--

CREATE TABLE `region.sa.ets` (
  `tourId` int(11) NOT NULL,
  `tourDriver` varchar(50) NOT NULL DEFAULT '0',
  `truckUsed` varchar(50) NOT NULL DEFAULT '-',
  `from` varchar(50) NOT NULL DEFAULT '0',
  `to` varchar(50) NOT NULL DEFAULT '0',
  `freight` varchar(50) NOT NULL DEFAULT '0',
  `tourDistance` int(11) NOT NULL DEFAULT '0',
  `distDriven` int(11) NOT NULL DEFAULT '0',
  `jobIncome` int(11) NOT NULL DEFAULT '0',
  `distanceTotal` int(11) NOT NULL DEFAULT '0',
  `fuelUsed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='South American Table for ETS2';

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `region.as.ch.ats`
--
ALTER TABLE `region.as.ch.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.as.ch.ets`
--
ALTER TABLE `region.as.ch.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.as.jp.ats`
--
ALTER TABLE `region.as.jp.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.as.jp.ets`
--
ALTER TABLE `region.as.jp.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.as.sk.ats`
--
ALTER TABLE `region.as.sk.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.as.sk.ets`
--
ALTER TABLE `region.as.sk.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.aus.ats`
--
ALTER TABLE `region.aus.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.aus.ets`
--
ALTER TABLE `region.aus.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.eue.ats`
--
ALTER TABLE `region.eue.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.eue.ets`
--
ALTER TABLE `region.eue.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.euw.ats`
--
ALTER TABLE `region.euw.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.euw.ets`
--
ALTER TABLE `region.euw.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.na.ats`
--
ALTER TABLE `region.na.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.na.ets`
--
ALTER TABLE `region.na.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.sa.ats`
--
ALTER TABLE `region.sa.ats`
  ADD PRIMARY KEY (`tourId`);

--
-- Indizes für die Tabelle `region.sa.ets`
--
ALTER TABLE `region.sa.ets`
  ADD PRIMARY KEY (`tourId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `region.as.ch.ats`
--
ALTER TABLE `region.as.ch.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.as.ch.ets`
--
ALTER TABLE `region.as.ch.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.as.jp.ats`
--
ALTER TABLE `region.as.jp.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.as.jp.ets`
--
ALTER TABLE `region.as.jp.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.as.sk.ats`
--
ALTER TABLE `region.as.sk.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.as.sk.ets`
--
ALTER TABLE `region.as.sk.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.aus.ats`
--
ALTER TABLE `region.aus.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.aus.ets`
--
ALTER TABLE `region.aus.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.eue.ats`
--
ALTER TABLE `region.eue.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.eue.ets`
--
ALTER TABLE `region.eue.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.euw.ats`
--
ALTER TABLE `region.euw.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.euw.ets`
--
ALTER TABLE `region.euw.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.na.ats`
--
ALTER TABLE `region.na.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.na.ets`
--
ALTER TABLE `region.na.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.sa.ats`
--
ALTER TABLE `region.sa.ats`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `region.sa.ets`
--
ALTER TABLE `region.sa.ets`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
