-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2015 at 07:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `team010`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityname`
--

CREATE TABLE IF NOT EXISTS `activityname` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ajob`
--

CREATE TABLE IF NOT EXISTS `ajob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`) VALUES
(-1, 'No Company'),
(1, 'Debswana'),
(2, 'Debonairs'),
(3, 'DTC'),
(4, 'Other company'),
(5, 'Spar'),
(6, 'Payless'),
(7, 'Bokamoso Hospital'),
(8, 'Princess Marina Hospital PMH'),
(9, 'Gaborone Private hospital'),
(10, 'Acinox'),
(11, 'Tunazucar'),
(12, 'DIVEP'),
(13, 'Fabrica de botellas'),
(14, 'Museo provincial'),
(23, 'Choppies'),
(26, 'Gaborone Private hospital'),
(28, 'So Solar'),
(29, 'Home'),
(30, 'Auto Extreme'),
(31, 'Forestal'),
(32, 'FAR'),
(33, 'UCi'),
(34, 'Air Botswana'),
(35, '5Flies'),
(36, 'Tanuka'),
(37, 'Abelworld');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `customer_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8_unicode_ci,
  `postal_address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_town_village` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_line` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeContact` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_81398E09979B1AD6` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company_id`, `customer_name`, `address`, `postal_address`, `city_town_village`, `e_mail`, `land_line`, `cell_phone`, `fax`, `typeContact`) VALUES
(1, 37, 'Abel', 'Calle 52 # 60, % 3era y G. Quezada, Nuevo Sosa', '75100', 'Las Tunas', 'abel@ltu.sld.cu', '346386', NULL, NULL, 0),
(2, 3, 'Kay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 28, 'Anouk Van Der Geest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 29, 'Fred', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, -1, 'Ronja', 'Gaborone', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 34, 'Peter', 'Airport', 'PO Box 1312', 'Gaborone', 'peter@airbotswana.co.bw', '345345', '345345', '34534534', 0),
(12, 35, 'Lilebo', 'Plot 34657, BroadHurst Industrial', 'PO Box 1312', 'Gaborone', 'lilebo@5flies.com', '432566', '788965', '5645344', 0),
(14, 36, 'Pedro Adolfo T O', 'asdasd', NULL, NULL, 'pedro8at@gmail.com', NULL, NULL, NULL, 0),
(15, -1, 'Peter', NULL, NULL, NULL, 'peter@jo.com', NULL, NULL, NULL, 0),
(19, -1, 'eredia', NULL, NULL, NULL, 'tereadia@ltu.cu', NULL, NULL, NULL, 0),
(20, 36, 'cuka', NULL, NULL, NULL, 'cukita@tanuka.com', NULL, NULL, NULL, 0),
(21, -1, 'Vincent', NULL, NULL, NULL, 'vincent@histdomain.com', NULL, NULL, '45677989', 0),
(22, -1, 'Frederich', 'Team Address Plot Bla blabla, Main Boulding', NULL, NULL, 'frederich@team-botswana.com', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OrganizationName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `name`, `OrganizationName`) VALUES
(2, 'abel', 'abel', 'abel@ltu.sld.cu', 'abel@ltu.sld.cu', 1, 't70yo34lk2s4s4o4owkc0cc8sggs4k8', '8emNg5PJQOE3K4vVqgVvF+ptZcbBCbV7kw+Qk2OXQabaj3z2tq0lrFlM1JfNrUONW1qEaNI9QAPMCLlrcSBjkg==', '2015-02-10 19:33:31', 0, 0, NULL, '63zkdfchguko8ocg4s8kocso8kgo0w8w8sskkco0s00g48ggs4', '2015-02-01 00:25:48', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, 'Abel Guzman Sanchez', 'AbelWorld Technology Innovation'),
(6, 'pepe', 'pepe', 'peep@pepenco.com', 'peep@pepenco.com', 1, 'spfnb4g4r9c0skwgoggk0s0wcsgwkow', 'xpCQTGgcmKr6Pk7uiKA0/NJm8xwPW+mq1ctwxhSv0DyYyTt3kcWXEZQCivyErc109V7vWaJ9F9jxi6ymVAcnWw==', '2015-02-01 09:59:42', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:18:"ROLE_COMPANY_ADMIN";}', 0, NULL, 'Pepe Marrero', 'Pepe & Co.'),
(7, 'kay', 'kay', 'kayvdg@gmail.com', 'kayvdg@gmail.com', 1, 'fgvmrv425twkssgw4gskck40ggckg8s', 'PwlV+3SGuM6h4o1gGpOkIrKU2cObR5zGu1BXYXo4+rx5P4HuWPosmzt7nMRJ2R3YLC3OwvUVDw5VNciJRPOIFg==', '2015-02-02 10:23:29', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:18:"ROLE_COMPANY_ADMIN";}', 0, NULL, 'Kay', 'Team');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_purchase`
--

CREATE TABLE IF NOT EXISTS `fuel_purchase` (
  `id_fuel_purchase` int(11) NOT NULL AUTO_INCREMENT,
  `id_vehicle` int(11) DEFAULT NULL,
  `invoice_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `fuel_used` double DEFAULT NULL,
  `fuel_price` double DEFAULT NULL,
  `km_odo` double DEFAULT NULL,
  `refuling_remarks` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refuling_person` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_fuel_purchase`),
  KEY `IDX_5E0DEB94C51D4DF6` (`id_vehicle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id_job` int(11) NOT NULL AUTO_INCREMENT,
  `id_vehicle` int(11) DEFAULT NULL,
  `id_job_status` int(11) DEFAULT NULL,
  `id_job_type` int(11) DEFAULT NULL,
  `delivery_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `destination` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `km_odo_start` double DEFAULT NULL,
  `km_odo_end` double DEFAULT NULL,
  `fuel_used` double DEFAULT NULL,
  `fuel_price` double DEFAULT NULL,
  `driver_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `crew_names` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triler_plate_number` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarks` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `return_load_plan` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_job`),
  KEY `IDX_FBD8E0F8C51D4DF6` (`id_vehicle`),
  KEY `IDX_FBD8E0F88E8EC84A` (`id_job_status`),
  KEY `IDX_FBD8E0F85BC9CDFD` (`id_job_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_status`
--

CREATE TABLE IF NOT EXISTS `job_status` (
  `id_job_status` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_job_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE IF NOT EXISTS `job_type` (
  `id_job_type` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_job_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mesureunit`
--

CREATE TABLE IF NOT EXISTS `mesureunit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abreviation` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mesureunit2product`
--

CREATE TABLE IF NOT EXISTS `mesureunit2product` (
  `product_id` int(11) NOT NULL,
  `mesure_unit_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`mesure_unit_id`),
  KEY `IDX_126A2D234584665A` (`product_id`),
  KEY `IDX_126A2D23287E9D1A` (`mesure_unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_received` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1CF73D3112469DE2` (`category_id`),
  KEY `IDX_1CF73D31BE04EA9` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productactivity`
--

CREATE TABLE IF NOT EXISTS `productactivity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `mesure_unit_id` int(11) DEFAULT NULL,
  `balace_type` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_quantity` double DEFAULT NULL,
  `action_requested` double DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `cost_x_unit` double DEFAULT NULL,
  `supplier` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7856AF5F7145EA36` (`activity_name_id`),
  KEY `IDX_7856AF5F4584665A` (`product_id`),
  KEY `IDX_7856AF5F287E9D1A` (`mesure_unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id_vehicle` int(11) NOT NULL AUTO_INCREMENT,
  `plate_number` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `distance_to_service` int(11) NOT NULL,
  `last_service_odo` int(11) NOT NULL,
  `make` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_vehicle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_784FEC5F979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `fuel_purchase`
--
ALTER TABLE `fuel_purchase`
  ADD CONSTRAINT `FK_5E0DEB94C51D4DF6` FOREIGN KEY (`id_vehicle`) REFERENCES `vehicle` (`id_vehicle`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `FK_FBD8E0F85BC9CDFD` FOREIGN KEY (`id_job_type`) REFERENCES `job_type` (`id_job_type`),
  ADD CONSTRAINT `FK_FBD8E0F88E8EC84A` FOREIGN KEY (`id_job_status`) REFERENCES `job_status` (`id_job_status`),
  ADD CONSTRAINT `FK_FBD8E0F8C51D4DF6` FOREIGN KEY (`id_vehicle`) REFERENCES `vehicle` (`id_vehicle`);

--
-- Constraints for table `mesureunit2product`
--
ALTER TABLE `mesureunit2product`
  ADD CONSTRAINT `FK_126A2D23287E9D1A` FOREIGN KEY (`mesure_unit_id`) REFERENCES `mesureunit` (`id`),
  ADD CONSTRAINT `FK_126A2D234584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_1CF73D3112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_1CF73D31BE04EA9` FOREIGN KEY (`job_id`) REFERENCES `ajob` (`id`);

--
-- Constraints for table `productactivity`
--
ALTER TABLE `productactivity`
  ADD CONSTRAINT `FK_7856AF5F287E9D1A` FOREIGN KEY (`mesure_unit_id`) REFERENCES `mesureunit` (`id`),
  ADD CONSTRAINT `FK_7856AF5F4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_7856AF5F7145EA36` FOREIGN KEY (`activity_name_id`) REFERENCES `activityname` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
