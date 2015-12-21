-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 02:20 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `21201741`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaboutus`
--

CREATE TABLE IF NOT EXISTS `tblaboutus` (
  `id` int(11) NOT NULL,
  `aboutus` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaboutus`
--

INSERT INTO `tblaboutus` (`id`, `aboutus`) VALUES
(1, 'JCs Beauty was founded by Jade Campbell back in 2011. Jade studied beauty therapy at the Wellington School of Beauty and graduated with a Diploma in Beauty Therapy in 2008. Since finishing diploma, she has continued to expand her knowledge and skills in beauty by undergoing extra training in difference departments. JCs Beauty takes pride in having a relaxed environment where clients can come get pampered and feel comfortable.');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(112) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `Username`, `Password`) VALUES
(1, 'admin1', 'password1'),
(2, 'admin2', 'password2');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactinfo`
--

CREATE TABLE IF NOT EXISTS `tblcontactinfo` (
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactinfo`
--

INSERT INTO `tblcontactinfo` (`phone_no`, `email`, `location`, `id`) VALUES
('04 236 9098', 'jcsbeauty@hotmail.co.nz', '21A Main Road,\r\nTitahi Bay,\r\nPorirua,\r\nWellington,\r\n5022.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontacts`
--

CREATE TABLE IF NOT EXISTS `tblcontacts` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontacts`
--

INSERT INTO `tblcontacts` (`id`, `name`, `phone`, `address`, `username`, `password`) VALUES
(38, 'Chelsea', '2336789', '10 Eleven Street', 'Chelsea', 'password'),
(40, 'Jade', '2369099', '55 Te Faker Street', 'Jizzayde', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tblfacials`
--

CREATE TABLE IF NOT EXISTS `tblfacials` (
  `id` int(11) NOT NULL,
  `service` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfacials`
--

INSERT INTO `tblfacials` (`id`, `service`, `price`) VALUES
(1, 'Express facial', '$30'),
(2, 'Relaxing facial', '$45'),
(3, 'Treatment facial', '$60');

-- --------------------------------------------------------

--
-- Table structure for table `tblmassage`
--

CREATE TABLE IF NOT EXISTS `tblmassage` (
  `id` int(11) NOT NULL,
  `service` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmassage`
--

INSERT INTO `tblmassage` (`id`, `service`, `price`) VALUES
(1, 'Full body massage (60 min).', '$80'),
(3, 'Scalp massage (15min)', '$25'),
(4, 'Back,neck,shoulder massage (30min)', '$50');

-- --------------------------------------------------------

--
-- Table structure for table `tblnails`
--

CREATE TABLE IF NOT EXISTS `tblnails` (
  `id` int(11) NOT NULL,
  `service` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnails`
--

INSERT INTO `tblnails` (`id`, `service`, `price`) VALUES
(1, 'Express manicure', '$30'),
(2, 'Deluxe manicure', '$50'),
(3, 'Express pedicure', '$30'),
(4, 'Deluxe pedicure', '$50'),
(5, 'Gel add on', '$15'),
(6, 'Gel removal', '$20'),
(7, 'Parafin wax add on', '$15'),
(8, 'File and paint', '$20'),
(9, 'File and buff', '$15');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE IF NOT EXISTS `tblnews` (
  `id` int(11) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `posted_by` varchar(120) NOT NULL,
  `article` varchar(10000) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`id`, `post_date`, `posted_by`, `article`, `title`) VALUES
(5, '30/02/2015', 'Chelsea', 'Its coming to the end of the summer season, so come into the salon between March 1st and March 15th and recieve 10% of your treatment', 'End of Summer Special'),
(6, '2/01/2015', 'Jade', 'The Salon will re-open on the 5th of January.', 'Salon Open After Christmas Break'),
(12, '05/12/2014', 'Jade', 'The salon will close on the 23rd of December for the christmas break.', 'Christmas Break'),
(13, '23/05/2015', 'Chelsea', 'Winter is not far around the corner. Come into the salon between 1st June and 15th June and recieve 10% off your treatment.', 'Winters Coming!');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE IF NOT EXISTS `tblproducts` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_details` varchar(10000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `product_name`, `product_details`, `price`, `image_id`) VALUES
(16, 'Essential Cleansing Solution', 'Rich, creamy cleanser conditions dry skin. Non-foaming formula gently lifts impurities while replenishing dry skin and maintaining moisture levels.', '500ml = $90.00\r\n250ml = $62.00\r\n50ml = $21', '16.jpg'),
(17, 'Active Moist Moisturiser', 'Oil-free, lightweight moisturiser to hydrate combination skin. Sheer, easy-to-apply formula contains Silk Amino Acids and a unique combination of plant extracts that help improve skin texture and combat surface dehydration. Natural botanical astringents of Lemon, Cucumber and Burdock help to refine the skin. Formulated without artificial fragrances and colours', '100ml = $96.00\r\n50ml = $68.00', '17.jpg'),
(18, 'Multi Active Toner', 'Light facial toner spray hydrates and refreshes. Help condition the skin and prepare for proper moisture absorption when you spritz over skin after cleansing, and before applying your prescribed Dermalogica Moisturizer. Refreshing facial spritz hydrates while smoothing the surface with moisture-binding humectants plus soothing Lavender, Balm Mint and Arnica. Formulated without artificial fragrances and colours.', '250ml = $63.00\r\n50ml = $21.00', '18.jpg'),
(19, 'Daily Microfoliant', 'Gentle enough to use on a daily basis. Not recommended for users of medically-prescribed exfoliation products. Formulated without artificial fragrances and colours.Gentle, daily use exfoliating powder for all skin conditions. Unique Rice-based powder formula activates upon contact with water, releasing Papain, Salicylic Acid and Rice Enzymes that micro-exfoliate dead cells, instantly leaving skin smoother and brighter.', '75g = $96.00\r\n13g = $27.00', '19.jpg'),
(20, 'Ultra Smoothing Eye Serum', 'This powerful treatment fluid contains an advanced peptide known to encourage collagen-producing activities to help smooth fine lines and target the signs of ageing around the delicate eye area.', '15ml = $94.00', '20.jpg'),
(21, 'Soothing Eye-Makeup Remover', 'Clean-rinsing gel removes eye and lip make-up. Completely oil-free, S.D. alcohol-free and water-soluble, this soothing, conditioning gel is specially formulated to instantly dissolve all traces of eye and lip make-up, including stubborn mascara. Help strengthen lashes and condition the delicate eyelid area with Silk Amino Acids. Formulated without artificial fragrances and colours.', '118ml = $48.00', '21.jpg'),
(22, 'After Sun Repair', 'A cooling treatment balm to help remedy damage from exposure to UV sunlight. Lightweight gel helps calm skin and reduce irritation induced by sunburn.', '100ml = $56.00', '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblwaxing`
--

CREATE TABLE IF NOT EXISTS `tblwaxing` (
  `id` int(11) NOT NULL,
  `service` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwaxing`
--

INSERT INTO `tblwaxing` (`id`, `service`, `price`) VALUES
(1, 'Full leg wax', '$45'),
(2, 'Half leg wax', '$30'),
(3, 'Full arm wax', '$30'),
(4, 'Half arm wax', '$20'),
(5, 'Underarm wax', '$15'),
(6, 'Brazillian wax', '$50'),
(7, 'Brazillian maintenance wax', '$40'),
(8, 'G-string wax', '$30'),
(9, 'Bikini wax', '$25'),
(10, 'Face wax', '$25'),
(11, 'Lip/chin/sides/nose wax', '$10ea'),
(12, 'Brow shape/tidy', '$15');

-- --------------------------------------------------------

--
-- Table structure for table `tblwaxingmen`
--

CREATE TABLE IF NOT EXISTS `tblwaxingmen` (
  `id` int(11) NOT NULL,
  `service` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwaxingmen`
--

INSERT INTO `tblwaxingmen` (`id`, `service`, `price`) VALUES
(1, 'Full leg wax', '$60'),
(2, 'Half leg wax', '$45'),
(3, 'Full arm wax', '$40'),
(4, 'Half arm wax', '$30'),
(5, 'Underarm wax', '$25'),
(6, 'Chest AND stomach wax', '$85'),
(7, 'chest OR stomach wax\r\n', '$60'),
(8, 'Full back wax', '$80'),
(9, 'Half back wax', '$55'),
(10, 'Shoulder wax', '$25'),
(11, 'Facial waxing', '$30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaboutus`
--
ALTER TABLE `tblaboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactinfo`
--
ALTER TABLE `tblcontactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontacts`
--
ALTER TABLE `tblcontacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfacials`
--
ALTER TABLE `tblfacials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmassage`
--
ALTER TABLE `tblmassage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnails`
--
ALTER TABLE `tblnails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblwaxing`
--
ALTER TABLE `tblwaxing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblwaxingmen`
--
ALTER TABLE `tblwaxingmen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaboutus`
--
ALTER TABLE `tblaboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcontactinfo`
--
ALTER TABLE `tblcontactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblcontacts`
--
ALTER TABLE `tblcontacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tblfacials`
--
ALTER TABLE `tblfacials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblmassage`
--
ALTER TABLE `tblmassage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblnails`
--
ALTER TABLE `tblnails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tblwaxing`
--
ALTER TABLE `tblwaxing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblwaxingmen`
--
ALTER TABLE `tblwaxingmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
