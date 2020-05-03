DROP TABLE IF EXISTS Tweet;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 05:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id` int(6) UNSIGNED NOT NULL,
  `testo` varchar(500) NOT NULL,
  `data_creazione` timestamp NULL DEFAULT NULL,
  `data_ultima_modifica` timestamp NULL DEFAULT NULL,
  `id_utente` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tweet`
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


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
