-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2017 at 07:49 PM
-- Server version: 5.1.71-community-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_kiks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articoli`
--

CREATE TABLE IF NOT EXISTS `tbl_articoli` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_data` date NOT NULL,
  `art_autore` varchar(26) NOT NULL,
  `art_titolo` text NOT NULL,
  `art_articolo` text NOT NULL,
  PRIMARY KEY (`art_id`),
  UNIQUE KEY `art_id` (`art_id`),
  UNIQUE KEY `art_id_2` (`art_id`),
  KEY `art_id_3` (`art_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_articoli`
--

INSERT INTO `tbl_articoli` (`art_id`, `art_data`, `art_autore`, `art_titolo`, `art_articolo`) VALUES
(1, '2017-02-23', 'Felkun', 'Inazuma Eleven GO Galaxy', 'Arriva dal Giappone l''annuncio di un nuovo videogioco basato sulla popolare serie fanta-calcistica Inazuma Eleven.\r\n\r\nPiattaforma di riferimento, anche in questo caso, e'' ovviamente Nintendo 3DS, sul quale e'' in arrivo Inazuma Eleven Go Galaxy, annunciato per il momento sul mercato giapponese, in attesa di informazioni sull''arrivo in occidente. L''annuncio è stato riportato sulle pagine della rivista nipponica Coro Coro, con un trailer di presentazione promesso da Level-5 per la fine di marzo.'),
(2, '2017-02-23', 'Felkun', 'gj', 'fj'),
(3, '2017-02-23', 'Felkun', 'Enn', 'brdnnnn'),
(4, '2017-02-23', 'Felkun', 'dfh', 'fgn'),
(5, '2017-02-23', 'Felkun', 'dfh', 'fgn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_commenti`
--

CREATE TABLE IF NOT EXISTS `tbl_commenti` (
  `com_autore` varchar(26) NOT NULL,
  `com_testo` text NOT NULL,
  `com_art` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_commenti`
--

INSERT INTO `tbl_commenti` (`com_autore`, `com_testo`, `com_art`) VALUES
('KingKiks', 'Prova', 0),
('KingKiks', 'Nenno', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_utenti`
--

CREATE TABLE IF NOT EXISTS `tbl_utenti` (
  `username` varchar(26) NOT NULL,
  `password` varchar(26) NOT NULL,
  `email` text NOT NULL,
  `newser` tinyint(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_utenti`
--

INSERT INTO `tbl_utenti` (`username`, `password`, `email`, `newser`) VALUES
('Felkun', 'SonicS91', '', 1),
('KingKiks', 'kikketto', 'fgmni@grnj.rt', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
