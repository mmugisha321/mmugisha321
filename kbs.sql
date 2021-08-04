-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2021 at 12:03 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `bus_id` int(20) NOT NULL DEFAULT '0',
  `number_plate` varchar(200) NOT NULL,
  `passengers` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `tank` varchar(200) NOT NULL,
  `manu` varchar(200) NOT NULL,
  `max` varchar(200) NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `number_plate`, `passengers`, `cost`, `tank`, `manu`, `max`) VALUES
(1, 'RAE200E', '50', '70m', '100l', '2019', '120k/h'),
(2, 'RAE200B', '50', '100m', '100l', '2019', '120k/h'),
(3, 'RAE200M', '32', '70m', '50l', '1990', '80k/h');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(20) NOT NULL,
  `client_number` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_number`) VALUES
(1, '58'),
(2, '69');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(20) NOT NULL DEFAULT '0',
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `worked_years` varchar(100) NOT NULL,
  `bus_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fname`, `lname`, `age`, `address`, `gender`, `salary`, `worked_years`, `bus_id`) VALUES
(1, 'Gervais', 'Cyurishema', '36', 'kigali', 'male', '100000', '5 years', 0),
(2, 'shantal', 'mutoni', '24', 'kinamba', 'female', '34456', '2 yrs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `lname` varchar(11) NOT NULL,
  `age` varchar(200) NOT NULL,
  `name` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `age`, `name`, `pass`) VALUES
(1, 'muna', 'bubu', '32', 'divine', '123');
