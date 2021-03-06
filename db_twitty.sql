DROP TABLE IF EXISTS `like`;
DROP TABLE IF EXISTS Tweet;
DROP TABLE IF EXISTS Utenti;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 10, 2020 alle 17:41
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_twitty`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `like`
--

CREATE TABLE `like` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_utente` int(6) UNSIGNED NOT NULL,
  `id_tweet` int(6) UNSIGNED NOT NULL,
  `data_creazione` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `like`
--

INSERT INTO `like` (`id`, `id_utente`, `id_tweet`, `data_creazione`) VALUES
(1, 1, 1, '2020-01-01 00:00:00'),
(2, 2, 1, '2020-01-01 00:00:00'),
(3, 3, 1, '2020-01-01 00:00:00'),
(4, 1, 3, '2020-01-01 00:00:00'),
(5, 2, 3, '2020-01-01 00:00:00'),
(6, 3, 5, '2020-01-01 00:00:00'),
(7, 1, 7, '2020-01-01 00:00:00'),
(8, 2, 9, '2020-01-01 00:00:00'),
(9, 1, 10, '2020-01-01 00:00:00'),
(10, 2, 10, '2020-01-01 00:00:00'),
(11, 3, 10, '2020-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `tweet`
--

CREATE TABLE `tweet` (
  `id` int(6) UNSIGNED NOT NULL,
  `testo` varchar(500) NOT NULL,
  `data_creazione` timestamp NULL DEFAULT NULL,
  `data_ultima_modifica` timestamp NULL DEFAULT NULL,
  `id_utente` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `tweet`
--

INSERT INTO `tweet` (`id`, `testo`, `data_creazione`, `data_ultima_modifica`, `id_utente`) VALUES
(1, 'Obama on the pandemic: \"Even when things reopen, it\'s still not going to be what everybody wants ... We haven\'t seen all the impact that\'s going to occur. I say that not to scare folks, but to get people thinking this going to be a marathon, not a sprint.', '2020-05-01 15:12:08', '2020-05-01 15:12:08', 1),
(2, '#1maggio #Mattarella: Viviamo questo Primo maggio con il pensiero all’Italia che vuole costruire il suo domani. Non ci può essere Repubblica senza lavoro, come afferma solennemente il primo articolo della nostra Costituzione', '2020-05-01 12:12:08', '2020-05-01 12:12:08', 2),
(3, 'Non vanno resi vani i sacrifici fatti sin qui se vogliamo assieme riconquistare, senza essere costretti a passi indietro, condizioni di crescente serenità', '2020-05-02 15:12:08', '2020-05-02 15:12:08', 2),
(4, '...And then came a Plague, a great and powerful Plague, and the World was never to be the same again! But America rose from this death and destruction, always remembering its many lost souls, and the lost souls all over the World, and became greater than ever before!', '2020-05-03 15:12:08', '2020-05-03 15:12:08', 3),
(5, 'Un reparto di terapia intensiva costruito da zero in 8 giorni grazie alle oltre 200.000 donazioni ricevute. Continuiamo cosi ', '2020-05-04 15:12:08', '2020-05-04 15:12:08', 3),
(6, 'L evento di stasera su La Repubblica, Il Messaggero e La Voce. Grazie a Fabiana Fab Manuelli per il fantastico lavoro :)', '2020-05-05 15:12:08', '2020-05-05 15:12:08', 1),
(7, 'Anyone think they can get a good multiplayer Minecraft working on Teslas? Or maybe create a game that interacts virtually with reality like Pokémon Go while driving safely? Like a complex version of Pac-man or Mario Kart?', '2020-05-06 15:12:08', '2020-05-06 15:12:08', 1),
(8, 'Alla base del successo di #fedez e Chiara c\'è l\'umiltà, ecco il segreto.', '2020-05-07 15:12:08', '2020-05-07 15:12:08', 2),
(9, 'Comunque penso che #fedez #ChiaraFerragni siano degli esempi durante questa quarantena. Cercano di intrattenere la gente, danno messaggi positivi e aiutano in prima persona. Di solito non apprezzo molto gli influenze perchè molti tendono a mettersi in mostra, ma Chiara mi piace.', '2020-05-08 15:12:08', '2020-05-08 15:12:08', 3),
(10, 'Fedez che saluta Giulia Valentina e dice \" ciao Giulia e sbloccami su Instagram\" STO URLANDO', '2020-05-09 15:12:08', '2020-05-09 15:12:08', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(6) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `password`, `email`) VALUES
(1, 'Mario', 'Rossi', 'password', 'mario.rossi@gmail.com'),
(2, 'Pinco', 'Pallino', 'password', 'pinco.pallino@gmail.com'),
(3, 'Gianni', 'Bianchi', 'password', 'gianni.bianchi@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utente` (`id_utente`),
  ADD KEY `id_tweet` (`id_tweet`);

--
-- Indici per le tabelle `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utente` (`id_utente`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `like`
--
ALTER TABLE `like`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`id_tweet`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `tweet`
--
ALTER TABLE `tweet`
  ADD CONSTRAINT `tweet_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
