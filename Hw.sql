-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Giu 10, 2025 alle 21:31
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hw`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modello` varchar(100) NOT NULL,
  `immatricolazione` date DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `percorsoFoto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `cars`
--

INSERT INTO `cars` (`id`, `marca`, `modello`, `immatricolazione`, `username`, `percorsoFoto`) VALUES
(1, 'Toyota', 'Land Cruiser', '2010-09-18', 'emmanuel', '/hw1/UltimeRic_toyotaLandCruiser.webp'),
(2, 'Nissan', 'GT-R', '2017-10-21', 'emmanuel', '/hw1/UltimeRic_toyotaLandCruiser.webp');

-- --------------------------------------------------------

--
-- Struttura della tabella `Favorited`
--

CREATE TABLE `Favorited` (
  `id_car` int(11) NOT NULL,
  `username_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Favorited`
--

INSERT INTO `Favorited` (`id_car`, `username_user`) VALUES
(2, 'emmanuel');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('ciccio', '$2y$10$MAt8YHS1WUCAU/C7uEc3Nur.ILWU3Fqivbk1h/WpLSaoVQavxftRy', 'ciccio@gmail.com'),
('emmanuel', '$2y$10$xxXZJWafgr8ZEcA0lKO0g.MV5HjkGKzauyuX0mEMtZ109wxbEuCQ6', 'ema4960@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_users_FK` (`username`);

--
-- Indici per le tabelle `Favorited`
--
ALTER TABLE `Favorited`
  ADD PRIMARY KEY (`id_car`,`username_user`),
  ADD KEY `Favorited_users_FK` (`username_user`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_users_FK` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Limiti per la tabella `Favorited`
--
ALTER TABLE `Favorited`
  ADD CONSTRAINT `Favorited_cars_FK` FOREIGN KEY (`id_car`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `Favorited_users_FK` FOREIGN KEY (`username_user`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
