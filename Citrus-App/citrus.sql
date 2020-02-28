-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2020 at 01:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `mail`, `password`) VALUES
(1, 'Nikola', 'Jovanović', 'nikola@mail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `approved`) VALUES
(0, 'Petar', 'petar@mail.com', 'I am delighted with the citrus fruits, delicious and interesting for decoration :).', 0),
(70, 'Nikola', 'nikola@gmail.com', 'Company opened online store in 2020. In first mount it made a fortune.', 1),
(71, 'Milos', 'milos@mail.com', 'I was wondering can I buy 1t of lemon?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `description`) VALUES
(1, 'https://static.wixstatic.com/media/f48816_306d7324c4fc4d1d9e699a004547420f~mv2_d_1920_1440_s_2.jpg/v1/fill/w_3840,h_2880,al_c,lg_2,q_85/f48816_306d7324c4fc4d1d9e699a004547420f~mv2_d_1920_1440_s_2.jpg', 'Lemon', 'Lemon essential oil is 100% natural essential oil produced from the Citrus lemon plant originating in Italy'),
(2, 'https://www.seeds-gallery.shop/8579-large_default/persijska-limeta-seme.jpg', 'Lime', 'Citrus, rarely citrus fruits, is a common name for the genus of plants (Citrus).'),
(3, 'https://img1.exportersindia.com/product_images/bc-full/2019/7/6458641/fresh-orange-1564033295-5014658.jpeg', 'Orange', 'The orange is the fruit of the citrus species Citrus × sinensis in the family Rutaceae, native to China.'),
(4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRCRtwM-AZpl2JWAM-Y6p9b7d3OcunBvOTvXrNPxByjgygoMC1i', 'Mandarin', 'The mandarin orange (Citrus reticulata), also known as the mandarin or mandarine.'),
(5, 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Citrus_grandis_-_Honey_White.jpg', 'Pomelo', 'The pomelo, pummelo, or in scientific terms Citrus maxima or Citrus grandis.'),
(6, 'https://stil.kurir.rs/data/images/2018/07/13/19/162707_shutterstock-409760461_ls.jpg', 'Grapefruit', 'The grapefruit (Citrus × paradisi) is a subtropical citrus tree known for its relatively large sour to semi-sweet.'),
(7, 'https://www.sanpellegrinofruitbeverages.com/uk/sites/g/files/xknfdk636/files/CITRON_16.jpg', 'Citron', 'The citron (Citrus medica) is a large fragrant citrus fruit with a thick rind.'),
(8, 'https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FFAC.2Fvar.2Ffemmeactuelle.2Fstorage.2Fimages.2Fsante.2Fmedecine-douce.2Fvertus-sante-bergamote-43619.2F14697931-2-fre-FR.2Fles-vertus-sante-de-la-bergamote.2Ejpg/748x372/quality/90/crop-from/center/les-vertus-sante-de-la-bergamote.jpeg', 'Bergamote', 'Genetic research into the ancestral origins of extant citrus cultivars found bergamot orange to be a probable hybrid of lemon and bitter orange.'),
(9, 'https://upload.wikimedia.org/wikipedia/commons/7/71/Castello%2C_collezione_degli_agrumi_02.jpg', 'Lumia', 'The lumia (Citrus lumia Risso. & Poit., or Citrus aurantiifolia (Christm. et Panz.) Swingle var. lumia hort).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
