-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2025 at 02:50 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercha15_haut_logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'administrator', 'trackings');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `tracking_no` varchar(20) NOT NULL,
  `r_fullname` text NOT NULL,
  `r_email` text NOT NULL,
  `freight_class` varchar(50) NOT NULL,
  `pick_up_location` varchar(100) NOT NULL,
  `drop_off_location` varchar(100) NOT NULL,
  `length` varchar(20) NOT NULL,
  `delivery_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=697 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `token`, `tracking_no`, `r_fullname`, `r_email`, `freight_class`, `pick_up_location`, `drop_off_location`, `length`, `delivery_date`, `status`, `date_created`) VALUES
(1, '2025-05-09 11:29:51', 'z', 'z', 'z', 'z', 'zzz', 'z', 'z', '2025-05-20 00:00:00', '', '2025-05-09 12:20:58'),
(637, '2025-05-09 11:37:06', 'z', 'z', 'z', 'z', 'zzz', 'z', 'z', '2025-05-20 00:00:00', '', '2025-05-09 12:20:58'),
(638, '2025-05-09 12:14:17', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '2025-05-30 00:00:00', '', '2025-05-09 12:20:58'),
(639, '9a34a75e596337235da1d91c748ab359b0b981693b7a1c6ad60bb0ed76c14e91', 'ddd', 'd', 'd', 'dd', 'd', 'd', 'd', '2025-05-01 00:00:00', '', '2025-05-09 12:20:58'),
(640, 'fdc20e8ad5e9e07f687711b5ca558cc9909cc667f8e8aa76478536614bcd2e83', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:45:44'),
(641, '96313aac661ae2525897ea2e6542e50122d81610f6a67fe11518d92af9863c03', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:46:06'),
(642, '843f2bdb0154584e14ba744e2e66a9855bac74912bcfaf2ac5aff3e14ee70bc3', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:46:38'),
(643, '9cc1536605f42210a214ea83b8d96b0c49000932efbe5c7306c2ceb479de87e8', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:46:59'),
(644, 'b768b81c6791ed4f866e24cd1b40f6f749311a1f80f4f0a6558565fc98fce651', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:47:48'),
(645, 'c98bc40fb47304e644aed20f95c902c6c52540e3c1bcf08f3f08a0a106c23bd6', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:49:57'),
(646, 'afb469299f8c55f084fd1cddb3e59d5b6c4c9ad4d7baaac31b63a33d2ed2939a', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:50:45'),
(647, '07b46a908a888a96c6b689089f3d564ab9a65e938f39eb26292ac67189228919', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:51:10'),
(648, 'd914f5a3ecedfea16a43cd70057077ebb2b26c7801634b342c35628f640215b2', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:51:47'),
(649, 'ab530aaaac35d281224fccf11579768de9bf9ce7cca95433fb711d1cd50b71c1', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:58:00'),
(650, '350f68700803c7cd3fd8137b193fb96e6374d74d235d160d266d4b3b883f27f1', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:58:37'),
(651, '4bd252cf7f40a186c92f196841246da59ec5086f0a79297f6732239f92817958', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:59:11'),
(652, '73dbecaf1a648be938b5bc15b431e0bc67814e102ae1dca08a68ea6661bf48a8', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 12:59:58'),
(653, '985981eacd71d66a87e831fbda72f423ab4e09ef2e62f455e8932dfbfa89bfda', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 01:00:15'),
(654, 'dee21864c2a3034794e2f72978087d038f8d80393caa7e38d7594d89ed623312', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 01:00:48'),
(655, 'afd950bd1eb245197d7f857b8ef9b9ee90b1262bf36acb350f67a5efd74532b9', '123', '321', '22', '44', '99', '00', '88', '2025-05-19 00:00:00', '', '2025-05-09 01:01:16'),
(656, 'd4da77af36edaa84138e508f50588cfddff1fcd9037601ebe4aaf77fd71b52bf', '12345678', 'Dimeji', 'oladimejig16@gmail.com', 'Land', 'Ikeja', 'Ago', '5ft', '2025-05-15 00:00:00', '', '2025-05-09 01:02:14'),
(657, '96b6d293be739ccccadfe501bb5d98ddadc57a1d52e5ac5194c2756ba418a5f1', '87654321', 'emma', 'emmanueligbinazaka3@gmail.com', 'Air', 'Naija', 'Ghana', '10ft', '2025-05-30 00:00:00', 'In Transit', '2025-05-09 03:25:16'),
(658, '8614ba0e23788bc996e2532b1b677090c0659d6dde348082bc6210bbacbb6cc5', '22222', 'dmj', 'ola@gmail.com', 'Water', 'Lekki', 'Osapa', '17ft', '2025-06-05 00:00:00', 'In Transit', '2025-05-09 03:45:58'),
(659, '361c25e7164ff5f3d90b0c921129a73158ec49a37c5ec2fa59d5ab8e6df2c7b4', '10101ss', 'adsvasdv', 'luabikoye@yahoo.com', 'asdv', 'ASDV', 'ADSVA', 'ASDV', '0012-12-21 00:00:00', 'In Transit', '2025-05-13 11:50:12'),
(660, 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'A0516021', 'Olumide Abikoye', 'luabikoye@yahoo.com', 'A', 'Lagos', 'Abuja', '6 inc', '2025-05-22 00:00:00', 'Destination', '2025-05-13 12:07:17'),
(661, '1073ed04e9102054b10d8cbe3a583801e4d4cb3867df53f715ca0e26218f7e14', 'D0523032', 'Francis Nwankwo', 'francis@yahoo.com', '12', 'Anambra', 'Kogi', '47', '2025-05-16 00:00:00', 'On Hold', '2025-05-13 01:33:41'),
(662, '732c90e07866a0a2b76a5737ab27bb07a568460840f2a01b6c1c60b2c13da33d', 'B0599430', 'Muyiwa Adewoye', 'muyiwa@yahoo.com', '12', 'Lagos', 'Ghana', '2', '2025-05-17 00:00:00', 'Delivered', '2025-05-14 06:12:44'),
(663, '35f28bd5300f2bc4d60e54af1520f71a65c47091ae820a2277941645e262fc01', 'B0543613', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'ikotun', 'ikeja', '40ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 05:59:04'),
(664, '662d829459ab4d13db9abd267a55a8027e142d6dee6dad0fa4448a5eef5e8e1a', 'B0543613', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'ikotun', 'ikeja', '40ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 06:00:44'),
(665, '161befb99efb56bd98c77b272429c6a87b78715612db229213eb64c993fbffd9', 'B0543613', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'ikotun', 'ikeja', '40ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 06:02:28'),
(666, 'de43e89c0b4352e432c505714a78035d0f4d9389ec4ea52b07f698739569cff8', 'B0543613', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'ikotun', 'ikeja', '40ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 06:02:34'),
(667, '0c25ab988d78ef629eb3caf4f04a07c46a76e37014bb563a1f60cdbaab01eefb', 'A0518863', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'Ikoyi', 'Estate', '10ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 06:04:20'),
(668, '3aebee54a2250f6a07193908cb27e0f0f1ba3ed226feb023fc2a3aab867aa14e', 'A0518863', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'Ikoyi', 'Estate', '10ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 06:04:36'),
(669, '02cf3e23badbc0b5bc3e4542cae4801c8ed2a4ddac5b561e9dc6e3005db04154', 'A0518863', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'Ikoyi', 'Estate', '10ft', '2025-05-30 00:00:00', 'Pending', '2025-05-26 06:09:17'),
(670, 'd9c36ab811c437b6917b3485deaffae15d834e157dec2ee7822371662b2f3232', 'Q0510533', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Air', 'Ikeja', 'Ago', '10ft', '2025-05-21 00:00:00', 'On Hold', '2025-05-26 06:15:06'),
(671, '3723d2cdde7a36619c6145d315f556c42d177b5b6d2b85fc5afabc883c6bb1f3', 'D0543267', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Air', 'Ikeja', 'Ghana', '10ft', '2025-05-31 00:00:00', 'On Hold', '2025-05-26 06:17:37'),
(672, '99666fc5bb5078ccc6e25e35315c531a1b82cd5908a495d922fbfba369ad42d0', 'B0573958', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'zzz', 'Ago', '5ft', '2025-05-30 00:00:00', 'On Hold', '2025-05-26 06:21:39'),
(673, 'b5490912d169f4baa4f730b31f7eab05be4a13c32d9ee89f15e66e41545f2fad', 'D0523229', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'Ikeja', 'Ghana', '10ft', '2025-05-31 00:00:00', 'Destination', '2025-05-26 06:27:38'),
(674, '19e19767f5688bf801ff63dc679f9f67c7a66754eda03246a729664ec370ab92', 'D0597121', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'zzz', 'Ago', '10ft', '2025-05-28 00:00:00', 'On Hold', '2025-05-26 06:34:20'),
(675, '91017b88391463d5f2e7347b56155f717851615f85d4a2bb1b525f6f5fc75dc7', 'D0597121', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'Land', 'zzz', 'Ago', '10ft', '2025-05-28 00:00:00', 'On Hold', '2025-05-26 06:36:58'),
(677, '2d1ffbc7462f01e77b52f57efeb7424181ce92be0fb97d00a8d6b1ceacc22fa9', 'Q0588542', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'water', '99', 'Ghana', '10ft', '2025-05-31 00:00:00', 'On Hold', '2025-05-26 06:42:33'),
(679, 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'Q0587467', 'oladimejig16@gmail.com', 'oladimejig16@gmail.com', 'dd', 'zzz', '00', '88', '2025-05-28 00:00:00', 'On Hold', '2025-05-26 07:06:19'),
(681, '38a3ce728434b8f397a28b17410dfe0eee7decad48d02856a157468ddcf6e926', 'B0512934', 'oladimejig16@gmail.com, soagafaruk@gmail.com', 'oladimejig16@gmail.com, soagafaruk@gmail.com', 'Rail', 'Ikoyi', 'Ikeja', '50ft', '2025-05-30 00:00:00', 'Pending', '2025-05-27 12:19:47'),
(682, '1cde3e75ce0a3d33e85f3a5b2c687335ea7b7ee4fbea34cf57d19ef29225766d', 'B0512934', '[oladimejig16@gmail.com, soagafaruk@gmail.com]', '[oladimejig16@gmail.com, soagafaruk@gmail.com]', 'Rail', 'Ikoyi', 'Ikeja', '50ft', '2025-05-30 00:00:00', 'Pending', '2025-05-27 12:20:02'),
(693, 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'F0585085', 'oladimejig16@gmail.com,soagafaruk@gmail.com', 'oladimejig16@gmail.com,soagafaruk@gmail.com', 'Rail', 'Oshodi', 'Ago', '11ft', '2025-05-29 00:00:00', 'Ready for Pickup', '2025-05-27 12:51:03'),
(695, 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'Q0520992', 'oladimejig16@gmail.com,soagafaruk@gmail.com', 'oladimejig16@gmail.com,soagafaruk@gmail.com', 'Land', '62, okota road.', '60, dosunmu street, isolo.', '40ft', '2025-05-31 00:00:00', 'Ready for Pickup', '2025-05-29 12:41:28'),
(696, 'e0569bb0a03538f21dc1b475dc7894a3f7c69ad041cdfbe7511055ae365bd4ca', 'F0550393', 'oladimejig16@gmail.com,soagafaruk@gmail.com', 'oladimejig16@gmail.com,soagafaruk@gmail.com', 'Land', 'Ikeja', 'd', '10ft', '2025-06-06 00:00:00', 'On Hold', '2025-05-31 02:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_details`
--

DROP TABLE IF EXISTS `tracking_details`;
CREATE TABLE IF NOT EXISTS `tracking_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `order_token` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tracking_details`
--

INSERT INTO `tracking_details` (`id`, `token`, `order_token`, `description`, `status`, `location`, `delivery_date`, `date_created`) VALUES
(1, 'help', 'bdsjhbsj', 'jhsbjhd', 'bhsbdjs', 'djksnjs', NULL, '2025-05-19 00:00:00'),
(2, '4bd252cf7f40a186c92f196841246da59ec5086f0a79297f6732239f92817958', '123', '77', '', '99', NULL, '2025-05-19 00:00:00'),
(3, '985981eacd71d66a87e831fbda72f423ab4e09ef2e62f455e8932dfbfa89bfda', '123', '77', '', '99', NULL, '2025-05-19 00:00:00'),
(4, 'dee21864c2a3034794e2f72978087d038f8d80393caa7e38d7594d89ed623312', '123', '77', '', '99', NULL, '2025-05-19 00:00:00'),
(5, 'afd950bd1eb245197d7f857b8ef9b9ee90b1262bf36acb350f67a5efd74532b9', '123', '77', '', '99', NULL, '2025-05-19 00:00:00'),
(6, 'd4da77af36edaa84138e508f50588cfddff1fcd9037601ebe4aaf77fd71b52bf', 'd4da77af36edaa84138e508f50588cfddff1fcd9037601ebe4aaf77fd71b52bf', 'pppp', '', 'oooo', NULL, '2025-05-15 00:00:00'),
(7, '96b6d293be739ccccadfe501bb5d98ddadc57a1d52e5ac5194c2756ba418a5f1', '87654321', 'Going to store', '', 'Naija', NULL, '2025-05-30 00:00:00'),
(8, '8614ba0e23788bc996e2532b1b677090c0659d6dde348082bc6210bbacbb6cc5', '8614ba0e23788bc996e2532b1b677090c0659d6dde348082bc6210bbacbb6cc5', 'pushing', 'In Transit', 'Lekki', NULL, '2025-06-05 00:00:00'),
(9, '361c25e7164ff5f3d90b0c921129a73158ec49a37c5ec2fa59d5ab8e6df2c7b4', '361c25e7164ff5f3d90b0c921129a73158ec49a37c5ec2fa59d5ab8e6df2c7b4', 'aDSV', 'In Transit', 'ASDV', NULL, '0012-12-21 00:00:00'),
(10, 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'Laptop and other tech items', 'Pending', 'Lagos', NULL, '2025-05-22 00:00:00'),
(11, 'b5e12185c0c20d364663d28b8cf313d3', 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'Currently passed custom duty', 'In Transit', 'Ondo', '2025-05-22 00:00:00', '2025-05-13 12:18:52'),
(13, '57d50152ed0a6db9d21fbe415c636571', 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'passed Niger bridge', 'In Transit', 'Jebba', '2025-05-22 00:00:00', '2025-05-13 12:19:56'),
(14, 'cbc0d60864a1c299079952510bc57d85', 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'Delivered to Customer', 'Delivered', 'Abuja', '2025-05-22 00:00:00', '2025-05-13 13:30:51'),
(15, '5764d340e897ccd16b1dc39be9b8fc48', 'c86686602befab86fa3b4247979ab849cf82e1910060313b85a66d61371d51e1', 'wertherth', 'Destination', 'ertgert', '2025-05-22 00:00:00', '2025-05-13 13:32:21'),
(16, '1073ed04e9102054b10d8cbe3a583801e4d4cb3867df53f715ca0e26218f7e14', '1073ed04e9102054b10d8cbe3a583801e4d4cb3867df53f715ca0e26218f7e14', 'A machine Gun', 'Pending', 'Anambra', NULL, '2025-05-16 00:00:00'),
(17, '63700f360d6039fb0b1ec0b5306ff009', '1073ed04e9102054b10d8cbe3a583801e4d4cb3867df53f715ca0e26218f7e14', 'Custom duty for gun licensing', 'On Hold', 'Imo', '2025-05-16 00:00:00', '2025-05-13 13:34:46'),
(18, '732c90e07866a0a2b76a5737ab27bb07a568460840f2a01b6c1c60b2c13da33d', '732c90e07866a0a2b76a5737ab27bb07a568460840f2a01b6c1c60b2c13da33d', 'Camera Stand', 'Pending', 'Lagos', NULL, '2025-05-17 00:00:00'),
(19, 'ce03efa68fda4cdd01a83c850b764ca8', '732c90e07866a0a2b76a5737ab27bb07a568460840f2a01b6c1c60b2c13da33d', 'Imiigration', 'In Transit', 'Cotonou', '2025-05-17 00:00:00', '2025-05-14 18:13:42'),
(20, 'd1291c0cbb10d9b8faa264aa99bb1a5d', '732c90e07866a0a2b76a5737ab27bb07a568460840f2a01b6c1c60b2c13da33d', 'At post office', 'Destination', 'Ghana', '2025-05-17 00:00:00', '2025-05-14 18:14:16'),
(21, '3b7653394a38a8fea2eac6fa036ec7ce', '732c90e07866a0a2b76a5737ab27bb07a568460840f2a01b6c1c60b2c13da33d', 'Dropped off', 'Delivered', 'Ghana', '2025-05-17 00:00:00', '2025-05-14 18:14:47'),
(22, '662d829459ab4d13db9abd267a55a8027e142d6dee6dad0fa4448a5eef5e8e1a', '662d829459ab4d13db9abd267a55a8027e142d6dee6dad0fa4448a5eef5e8e1a', 'On the road', 'Pending', 'ikotun', '2025-05-30 00:00:00', '2025-05-26 18:00:44'),
(23, '161befb99efb56bd98c77b272429c6a87b78715612db229213eb64c993fbffd9', '161befb99efb56bd98c77b272429c6a87b78715612db229213eb64c993fbffd9', 'On the road', 'Pending', 'ikotun', '2025-05-30 00:00:00', '2025-05-26 18:02:28'),
(24, 'de43e89c0b4352e432c505714a78035d0f4d9389ec4ea52b07f698739569cff8', 'de43e89c0b4352e432c505714a78035d0f4d9389ec4ea52b07f698739569cff8', 'On the road', 'Pending', 'ikotun', '2025-05-30 00:00:00', '2025-05-26 18:02:34'),
(25, '0c25ab988d78ef629eb3caf4f04a07c46a76e37014bb563a1f60cdbaab01eefb', '0c25ab988d78ef629eb3caf4f04a07c46a76e37014bb563a1f60cdbaab01eefb', 'on the move', 'Pending', 'Ikoyi', '2025-05-30 00:00:00', '2025-05-26 18:04:20'),
(26, '3aebee54a2250f6a07193908cb27e0f0f1ba3ed226feb023fc2a3aab867aa14e', '3aebee54a2250f6a07193908cb27e0f0f1ba3ed226feb023fc2a3aab867aa14e', 'on the move', 'Pending', 'Ikoyi', '2025-05-30 00:00:00', '2025-05-26 18:04:36'),
(27, '02cf3e23badbc0b5bc3e4542cae4801c8ed2a4ddac5b561e9dc6e3005db04154', '02cf3e23badbc0b5bc3e4542cae4801c8ed2a4ddac5b561e9dc6e3005db04154', 'on the move', 'Pending', 'Ikoyi', '2025-05-30 00:00:00', '2025-05-26 18:09:17'),
(28, 'd9c36ab811c437b6917b3485deaffae15d834e157dec2ee7822371662b2f3232', 'd9c36ab811c437b6917b3485deaffae15d834e157dec2ee7822371662b2f3232', 'pushing', 'On Hold', 'Ikeja', '2025-05-21 00:00:00', '2025-05-26 18:15:06'),
(29, '3723d2cdde7a36619c6145d315f556c42d177b5b6d2b85fc5afabc883c6bb1f3', '3723d2cdde7a36619c6145d315f556c42d177b5b6d2b85fc5afabc883c6bb1f3', 'Working', 'On Hold', 'Ikeja', '2025-05-31 00:00:00', '2025-05-26 18:17:37'),
(30, '99666fc5bb5078ccc6e25e35315c531a1b82cd5908a495d922fbfba369ad42d0', '99666fc5bb5078ccc6e25e35315c531a1b82cd5908a495d922fbfba369ad42d0', 'e', 'On Hold', 'zzz', '2025-05-30 00:00:00', '2025-05-26 18:21:39'),
(31, 'b5490912d169f4baa4f730b31f7eab05be4a13c32d9ee89f15e66e41545f2fad', 'b5490912d169f4baa4f730b31f7eab05be4a13c32d9ee89f15e66e41545f2fad', 'Working', 'Destination', 'Ikeja', '2025-05-31 00:00:00', '2025-05-26 18:27:38'),
(32, '19e19767f5688bf801ff63dc679f9f67c7a66754eda03246a729664ec370ab92', '19e19767f5688bf801ff63dc679f9f67c7a66754eda03246a729664ec370ab92', 'pushing', 'On Hold', 'zzz', '2025-05-28 00:00:00', '2025-05-26 18:34:20'),
(33, '91017b88391463d5f2e7347b56155f717851615f85d4a2bb1b525f6f5fc75dc7', '91017b88391463d5f2e7347b56155f717851615f85d4a2bb1b525f6f5fc75dc7', 'pushing', 'On Hold', 'zzz', '2025-05-28 00:00:00', '2025-05-26 18:36:58'),
(34, '719018dad656ae83d44f904f5d98b20319ae15e71a4e3db7291746cbd6c46598', '719018dad656ae83d44f904f5d98b20319ae15e71a4e3db7291746cbd6c46598', 'pushing', 'On Hold', 'zzz', '2025-05-28 00:00:00', '2025-05-26 18:38:36'),
(35, '2d1ffbc7462f01e77b52f57efeb7424181ce92be0fb97d00a8d6b1ceacc22fa9', '2d1ffbc7462f01e77b52f57efeb7424181ce92be0fb97d00a8d6b1ceacc22fa9', 'pushing', 'On Hold', '99', '2025-05-31 00:00:00', '2025-05-26 18:42:33'),
(36, '4408245f91d3912b933d4771318651234fa50265f786247c0d0684688ff01414', '4408245f91d3912b933d4771318651234fa50265f786247c0d0684688ff01414', 'pushing', 'On Hold', 'Ikeja', '2025-05-30 00:00:00', '2025-05-26 19:02:37'),
(37, 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pppp', 'In Transit', 'zzz', '2025-05-28 00:00:00', '2025-05-26 19:06:19'),
(38, '8bd2d282adf4a74e33ad3ef2e829cdd3', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:13:38'),
(39, '6757cf9a0f84cccc6c4aabc80b43d1b6', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:14:03'),
(40, '5a5a8f204b8f274431ecbcda4ad8c5ca', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:16:28'),
(41, 'd8a3309698d6ad88aeb5ec09b626bb4b', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:17:06'),
(42, '659a58771bd4e6b58fd5a4e8fecec99b', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:30:40'),
(43, '21d324992240d8b36fbc4f304019e33f', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:33:40'),
(44, '6f12ad969a2ecb4a7903bb8bf9ae5e5a', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:43:27'),
(45, '59434c8fbe553371dcc1700f17748202', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'delivered', 'Delivered', 'Lekki', '2025-05-28 00:00:00', '2025-05-26 19:47:33'),
(46, '6a8f6e45325ef6eb187aa73a52f57548', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'delivered', 'Delivered', 'Lekki', '2025-05-28 00:00:00', '2025-05-27 10:35:44'),
(47, 'd1b96dd6fd0d4faa66a3a5022048f76e', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pppp', 'On Hold', 'Isolo', '2025-05-28 00:00:00', '2025-05-27 10:36:05'),
(48, '8b74b2103e76572e91d010601b3a8eec', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'loading', 'Destination', 'vi', '2025-05-28 00:00:00', '2025-05-27 10:38:12'),
(49, '1998076c7872581bd80f5598c3827036', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'loading', 'Destination', 'vi', '2025-05-28 00:00:00', '2025-05-27 10:38:37'),
(50, '3d5c43338ab40ca284326b8f05d51488', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'loading', 'Destination', 'vi', '2025-05-28 00:00:00', '2025-05-27 10:39:35'),
(51, 'd32cf6920c9eeba0a00c37c4ffe15099', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'loading', 'Destination', 'vi', '2025-05-28 00:00:00', '2025-05-27 10:49:13'),
(52, '63b06051c480852a707091a399fe883a', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'loading', 'Destination', 'vi', '2025-05-28 00:00:00', '2025-05-27 10:50:12'),
(53, '9136f29f535074c9e1da92fd996c59e0', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'loading', 'Destination', 'vi', '2025-05-28 00:00:00', '2025-05-27 10:50:20'),
(54, '1945e0acc1ce1448b96f9f06caa0e7a5', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Naija', '2025-05-28 00:00:00', '2025-05-27 10:55:34'),
(55, 'cbef732b0778d4234f6f653376372e50', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Pending', 'Naija', '2025-05-28 00:00:00', '2025-05-27 10:56:12'),
(56, '385a7e0ecc31d3f949743a16a2591697', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'ggh', 'Pending', 'surlere', '2025-05-28 00:00:00', '2025-05-27 11:48:55'),
(57, '098415b4fdb65d884216e71e83743eda', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'pushing', 'Destination', 'ikeja', '2025-05-28 00:00:00', '2025-05-27 12:09:29'),
(58, 'f8943acc0854ffec9cc51060554f3f3f', 'd5820294481f701189f6fcf5efe5d8e9b7473f858e03892523c23b33fcea2388', 'Currently dropped off at the border', 'On Hold', 'London', '2025-05-28 00:00:00', '2025-05-27 12:16:11'),
(59, '2fa1acc75652259a8d178189a98eafdb998d6a0e90e51c22a0e8241098ba43e1', '2fa1acc75652259a8d178189a98eafdb998d6a0e90e51c22a0e8241098ba43e1', 'just got it from the border', 'Pending', 'Ikoyi', '2025-05-30 00:00:00', '2025-05-27 12:18:44'),
(60, '38a3ce728434b8f397a28b17410dfe0eee7decad48d02856a157468ddcf6e926', '38a3ce728434b8f397a28b17410dfe0eee7decad48d02856a157468ddcf6e926', 'just got it from the border', 'Pending', 'Ikoyi', '2025-05-30 00:00:00', '2025-05-27 12:19:47'),
(61, '1cde3e75ce0a3d33e85f3a5b2c687335ea7b7ee4fbea34cf57d19ef29225766d', '1cde3e75ce0a3d33e85f3a5b2c687335ea7b7ee4fbea34cf57d19ef29225766d', 'just got it from the border', 'Pending', 'Ikoyi', '2025-05-30 00:00:00', '2025-05-27 12:20:02'),
(62, 'ed9ba99ac54a48262fce248728ebe9bc294b45f5321524eba052daa135af8167', 'ed9ba99ac54a48262fce248728ebe9bc294b45f5321524eba052daa135af8167', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:21:47'),
(63, '6f5e91237cff1160b3488fefe97b80154967dc140171e974c3153f8a498987c7', '6f5e91237cff1160b3488fefe97b80154967dc140171e974c3153f8a498987c7', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:21:55'),
(64, '9629872d8d0db90e15c4b3ae8ed79f26926ae7b6d8153d46a58481b1873aeb6e', '9629872d8d0db90e15c4b3ae8ed79f26926ae7b6d8153d46a58481b1873aeb6e', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:22:36'),
(65, '1bfbdd3ca9b851734876c6d23afa65ab78d5b3b854d04e0463e626b5a1d4dc00', '1bfbdd3ca9b851734876c6d23afa65ab78d5b3b854d04e0463e626b5a1d4dc00', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:22:58'),
(66, '07e82ce9f944ab6585260059f0173615bef801ca588a1604d43186ebb13f303b', '07e82ce9f944ab6585260059f0173615bef801ca588a1604d43186ebb13f303b', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:23:15'),
(67, '70fec3ddff409772e517889a21bd162c82e939c6dada3c12ebad57b3f6859283', '70fec3ddff409772e517889a21bd162c82e939c6dada3c12ebad57b3f6859283', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:23:27'),
(68, 'efb1192aefc6be70e22c6411b85b3defc6d42189b407c1c3f57dd7446180c13e', 'efb1192aefc6be70e22c6411b85b3defc6d42189b407c1c3f57dd7446180c13e', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:49:02'),
(69, '1f3635e238c104c85c77c80cb1d3155196bbc7a80e941e5ee29dea55d5f0d754', '1f3635e238c104c85c77c80cb1d3155196bbc7a80e941e5ee29dea55d5f0d754', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:49:16'),
(70, '8ddb3b9dc2bfd48e6a7b76eb67e8792af16cc4eb83318df113c8b6d724c7f894', '8ddb3b9dc2bfd48e6a7b76eb67e8792af16cc4eb83318df113c8b6d724c7f894', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:49:24'),
(71, '0fcfbdf9c04e05c8f1cd13b4a65177eb0a130d0b9d778e7461d86729884a8f29', '0fcfbdf9c04e05c8f1cd13b4a65177eb0a130d0b9d778e7461d86729884a8f29', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:50:39'),
(72, 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'just arrived', 'On Hold', 'Oshodi', '2025-05-29 00:00:00', '2025-05-27 12:51:03'),
(73, '03782b4a8113de4d4519d72a407f428b', 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'Inside the container', 'Destination', 'Gbagada', '2025-05-29 00:00:00', '2025-05-27 13:05:05'),
(74, 'a18cd55775bb80f00dd93ae2250b5896', 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'on transit', 'In Transit', 'Egbeda', '2025-05-29 00:00:00', '2025-05-27 13:08:12'),
(75, 'd2f0316975063c522668460adb9d820d', 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'Now at port', 'Destination', 'Lekki', '2025-05-29 00:00:00', '2025-05-29 12:32:05'),
(76, 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'In the Car', 'In Transit', '62, okota road.', '2025-05-31 00:00:00', '2025-05-29 12:41:28'),
(77, 'c14cdad21ddb37bb9e5b763f57a27a15', 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'work', 'On Hold', 'maryland, usa.', '2025-05-31 00:00:00', '2025-05-29 12:44:44'),
(78, '803c73c9afa0fcfd42d165beba175c8b', 'cb147be91087ad7199172865edec527f8867e499fb2c88ee4459780259e18b05', 'move', 'Ready for Pickup', 'Ago', '2025-05-29 00:00:00', '2025-05-29 12:54:22'),
(79, '4f7e23720361e7d8fcfb0e5265e4c622', 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'left', 'Destination', 'Isolo', '2025-05-31 00:00:00', '2025-05-29 12:56:18'),
(80, '06e4f8c2d18503d9617f2d617a45dee7', 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'right', 'Ready for Pickup', 'maryland, usa.', '2025-05-31 00:00:00', '2025-05-29 12:58:05'),
(81, '12d9b49cb209f1794a1806afdd249487', 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'go', 'Destination', 'suez canal', '2025-05-31 00:00:00', '2025-05-30 11:07:02'),
(82, '0f3444f8eea674c2b8208c988e952387', 'e9d92b22ee654020d159c74f039873de4b2a9bb3566836644d4f7b7d0789403c', 'right', 'Ready for Pickup', 'maryland, usa.', '2025-05-31 00:00:00', '2025-05-31 13:51:48'),
(83, 'e0569bb0a03538f21dc1b475dc7894a3f7c69ad041cdfbe7511055ae365bd4ca', 'e0569bb0a03538f21dc1b475dc7894a3f7c69ad041cdfbe7511055ae365bd4ca', 'Working', 'Destination Country', 'Ikeja', '2025-06-06 00:00:00', '2025-05-31 14:40:04'),
(84, '6f126a70a8c29c7bd9d3cc959e7ba1ad', 'e0569bb0a03538f21dc1b475dc7894a3f7c69ad041cdfbe7511055ae365bd4ca', 'pushing', 'On Hold', 'ikotun', '2025-06-06 00:00:00', '2025-06-02 11:50:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
