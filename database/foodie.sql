SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `foodie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foodie`;

CREATE TABLE `admin` (
  `sl` int(128) NOT NULL,
  `username` varchar(180) NOT NULL,
  `password` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`sl`, `username`, `password`) VALUES
(1, 'admin', 'admin');

CREATE TABLE `product` (
  `product_id` int(128) NOT NULL,
  `unit_price` int(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `image` longblob NOT NULL,
)

CREATE TABLE `user` (
  `sl` int(128) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` int(128) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` longblob NOT NULL,
  `imagename` varchar(180) NOT NULL
)
