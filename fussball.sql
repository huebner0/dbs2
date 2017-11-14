-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Nov 2017 um 20:16
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fussball`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abo`
--

CREATE TABLE `abo` (
  `email` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `vorname` varchar(64) NOT NULL,
  `mitglied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `abo`
--

INSERT INTO `abo` (`email`, `name`, `vorname`, `mitglied`) VALUES
('bummy@host.de', 'Kinski', 'Klaus', 1),
('dummy@host.de', 'Kinski', 'Klaus', 1),
('fummy@host.de', 'Kinski', 'Klaus', 1),
('fuster@mann.de', 'Mann', 'Muster', 1),
('lummy@host.de', 'Kinski', 'Klaus', 1),
('ommy@horst.de', 'Kinski', 'Klaus', 1),
('ommy@host.de', 'Kinski', 'Klaus', 1),
('pummy@host.de', 'Kinski', 'Klaus', 1),
('qummy@host.de', 'Kinski', 'Klaus', 1),
('romjmy@horst.de', 'Kinski', 'Klaus', 1),
('rommy@horst.de', 'Kinski', 'Klaus', 1),
('summy@host.de', 'Kinski', 'Klaus', 1),
('tomjmy@horst.de', 'Kinski', 'Klaus', 1),
('tummy@host.de', 'Kinski', 'Klaus', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abo_liga`
--

CREATE TABLE `abo_liga` (
  `abo_email` varchar(64) NOT NULL,
  `liga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `abo_liga`
--

INSERT INTO `abo_liga` (`abo_email`, `liga_id`) VALUES
('bummy@host.de', 2),
('romjmy@horst.de', 1),
('schuster@mann.de', 1),
('tomjmy@horst.de', 1),
('tomjmy@horst.de', 5),
('tomjmy@horst.de', 12);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `liga`
--

CREATE TABLE `liga` (
  `id` int(3) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `liga`
--

INSERT INTO `liga` (`id`, `name`) VALUES
(1, '1. Liga'),
(2, '2. Liga'),
(3, '3. Liga'),
(4, 'Regionalliga Bayern'),
(5, 'WM 2018'),
(6, 'Deutsche Nationalmannschaft'),
(12, 'Champions League');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vereine`
--

CREATE TABLE `vereine` (
  `Vereinsname` varchar(32) NOT NULL,
  `Stimmen` int(16) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `abo`
--
ALTER TABLE `abo`
  ADD PRIMARY KEY (`email`);

--
-- Indizes für die Tabelle `abo_liga`
--
ALTER TABLE `abo_liga`
  ADD PRIMARY KEY (`abo_email`,`liga_id`);

--
-- Indizes für die Tabelle `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `vereine`
--
ALTER TABLE `vereine`
  ADD PRIMARY KEY (`Vereinsname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
