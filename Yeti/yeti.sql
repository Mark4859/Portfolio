-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2020 at 10:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeti`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer_menu`
--

DROP TABLE IF EXISTS `footer_menu`;
CREATE TABLE IF NOT EXISTS `footer_menu` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Customer Support` text NOT NULL,
  `Company` text NOT NULL,
  `Stores` text NOT NULL,
  `Privacy & Compliance` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_menu`
--

INSERT INTO `footer_menu` (`id`, `Customer Support`, `Company`, `Stores`, `Privacy & Compliance`) VALUES
(1, 'HELP', 'ABOUT US', 'AUSTIN, TX - FLAGSHIP', 'PRIVACY POLICY'),
(2, 'FAQ', 'NEWS', 'AUSTIN, TX - DOMAIN NORTHSIDE', 'TERMS & CONDITIONS'),
(3, 'CONTACT', '#BUILTFORTHEWILD', 'CHARLESTONE, SC', 'CALIFONIA TRANSPARENCY ACT'),
(4, 'ORDER STATUS', 'CAREERS', 'CHICAGO, IL', 'SUPPLIER CODE OF CONDUCT'),
(5, 'SHIPPING + RETURN', 'CORPORATE SALES', 'DALLAS, TX', 'SITE MAP'),
(6, 'REGISTER YOUR YETI', 'INVESTOR RELATIONS', 'DENVER, CO', ''),
(7, '', 'DEALER RESOURCES', 'FORT LAUDERDALE, FL', ''),
(8, '', '', 'DEALER LOCATOR', '');

-- --------------------------------------------------------

--
-- Table structure for table `header_menu`
--

DROP TABLE IF EXISTS `header_menu`;
CREATE TABLE IF NOT EXISTS `header_menu` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Hard Coolers` text DEFAULT NULL,
  `Soft Coolers` text DEFAULT NULL,
  `Custom Hard Coolers` text DEFAULT NULL,
  `Corporate Logo Program` text DEFAULT NULL,
  `Ramblers` text DEFAULT NULL,
  `Access` text DEFAULT NULL,
  `Custom Drink` text DEFAULT NULL,
  `Corporate Drinkware Sales` text DEFAULT NULL,
  `Everyday Bags` text DEFAULT NULL,
  `Waterproof Bags` text DEFAULT NULL,
  `Accessories` text DEFAULT NULL,
  `Apparel` text DEFAULT NULL,
  `Pets` text DEFAULT NULL,
  `Outdoor Living` text DEFAULT NULL,
  `Cargo` text DEFAULT NULL,
  `Corporate Sales` text DEFAULT NULL,
  `Dog Bowls` text DEFAULT NULL,
  `Custom H Collers` text DEFAULT NULL,
  `Custom Drinkware` text DEFAULT NULL,
  `Our Story` text DEFAULT NULL,
  `Stories` text DEFAULT NULL,
  `Stores` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header_menu`
--

INSERT INTO `header_menu` (`id`, `Hard Coolers`, `Soft Coolers`, `Custom Hard Coolers`, `Corporate Logo Program`, `Ramblers`, `Access`, `Custom Drink`, `Corporate Drinkware Sales`, `Everyday Bags`, `Waterproof Bags`, `Accessories`, `Apparel`, `Pets`, `Outdoor Living`, `Cargo`, `Corporate Sales`, `Dog Bowls`, `Custom H Collers`, `Custom Drinkware`, `Our Story`, `Stories`, `Stores`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'TUNDRA HARD COOLERS', 'DAYTRIP LUNCH BOX & BAG', 'NASCAR GALLERY', 'GET A CORPORATE QUOTE', 'TUMBLERS', 'FOR TUMBLERS', 'CUSTOM LOGO / TEXT / MONOGRAM', 'GET A CORPORATE LOGO QUOTE', 'CROSSROADS TOTE', 'PANGA DRY BAGS', 'STICKERS & PATCHES', 'HATS', 'TRAILHEAD DOG BED', 'HONDO BASE CAMP CHAIR', 'LOADOUT 5 GALLON BUCKET', 'CORPORATE PROGRAM FAQS', 'DESIGN GALLERY', 'NASCAR GALLERY', 'DESIGN GALLERY', 'OUR AMBASSADORS', 'OUR PODCASTS', 'AUSTIN, TX - FLAGSHIP'),
(3, 'YETI V SERIES', 'HOPPER SOFT COOLER', 'COLLEGIATE LOGOS', 'CORPORATE LOGO FAQS', 'BOTTLES', 'FOR BOTTLES', 'DESIGN GALLERY', 'CORPORATE LOGO FAQS', 'DAYTRIP LUNCH BOX & BAG', 'SIDEKICK DRY GEAR CASE', 'BOTTLE OPENERS', 'T-SHIRTS', 'CUSTOM DOG BOWLS', 'LOWLANDS BLANKET', 'ACCESSORIES', 'GET A CORPORATE QUOTE', 'CUSTOM TEXT / LOGO / MONOGRAM', 'MAJOR LEAGUE BASEBALL LOGOS', 'CORPORATE SALES', 'OUR PARTNERS', 'NEWS', 'AUSTIN, TX - DOMAIN NORTHSIDE'),
(4, 'YETI TANK ICE BUCKETS', 'DAYTRIP LUNCH & BAG', 'NASCAR GALLERY', '', 'MUGS', '', '', '', 'CROSSROADS BACKPACK', 'CAMINO CARRYALL TOTE', 'YETI ICE PACKS', '', 'ACCESSORIES', 'ACCESSORIES', 'LOAD OUT CARGO BOX', '', '', 'CORPORATE LOGO PROGRAM', 'CUSTOM TEXT / LOGO / MONOGRAM', '#BUILTFORTHEWILD', 'STREAM THE STREAMS: YETI+', 'CHARLESTONE, SC'),
(5, 'SILO WATER COOLER', 'ACCESSORIES', 'MAJOR LEAGUE BASEBALL LOGOS', '', 'BAREWARE', '', '', '', '', '', '', '', 'DOG BOWLS', 'TRAILHEAD CAMP CHAIR', '', '', '', 'COLLEGIATE LOGOS', '', 'OUR STORY', 'STORIES', 'CHICAGO, IL'),
(6, 'ACCESSORIES', '', '', '', 'CAN INSULATORS', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', '', '', '', '', '', '', '', 'DALLAS, TX'),
(7, 'ROADIE 24 HARD COOLER', '', '', '', 'JUGS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DENVER, CO'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FORT LAUDERDALE, FL'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STORES');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
