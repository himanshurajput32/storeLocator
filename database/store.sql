-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 04:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `storelist`
--

CREATE TABLE IF NOT EXISTS `storelist` (
`store_id` int(100) NOT NULL,
  `store_name` text NOT NULL,
  `store_type` text NOT NULL,
  `store_city` text NOT NULL,
  `store_locality` text NOT NULL,
  `store_contact` text NOT NULL,
  `store_address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storelist`
--

INSERT INTO `storelist` (`store_id`, `store_name`, `store_type`, `store_city`, `store_locality`, `store_contact`, `store_address`) VALUES
(1, 'Aggrawal Sweets', 'Restaurant', 'Delhi', 'Connaught_Place', '9999888800', '123 N Block Outer Circle \r\nConnauhgt Palace\r\nDelhi'),
(2, 'Adidas Original', 'Clothes', 'Delhi', 'Connaught_Place', '8888999977', '113 P Block Inner Circle\r\nConnauhgt Palace\r\nDelhi'),
(3, 'ABC Electronics', 'Electronics', 'Delhi', 'Connaught_Place', '7878789090', '178 F Block Outer Circle\r\nConnaught Palace\r\nDelhi'),
(4, 'Haldiram''s', 'Restaurant', 'Delhi', 'Saket', '9595959595', '111 E Block\r\nSaket Delhi\r\n'),
(5, 'Gama Electronics', 'Electronics', 'Delhi', 'Saket', '78787879090', '901 N Block\r\nSaket Delhi'),
(6, 'Nike Store', 'Clothes', 'Delhi', 'Saket', '9090907878', '301 B Block\r\nSaket Delhi'),
(7, 'Hello Electronics', 'Electronics', 'Mumbai', 'Andheri_East', '7878786767', '121 Sahar Plaza\r\nAndheri East \r\nMumbai'),
(8, 'Domino''s', 'Restaurant', 'Mumbai', 'Andheri_East', '8989898989', '203 Sahar Plaza \r\nAndheri East \r\nMumbai'),
(9, 'ABC Garments', 'Clothes', 'Mumbai', 'Andheri_East', '9090908989', '200 Sahar Plaza\r\nAndheri East\r\nMumbai'),
(10, 'Pizza Hut', 'Restaurant', 'Mumbai', 'Andheri_West', '8989787889', '765 Azad Nagar\r\nAndheri West\r\nMumbai'),
(11, 'Khade Garments', 'Clothes', 'Mumbai', 'Andheri_West', '8989899090', '290 Azad Nagar \r\nAndheri  West\r\nMumbai \r\n'),
(12, 'Samsung Store', 'Electronics', 'Mumbai', 'Andheri_West', '8989899090', '302 Azad Nagar\r\nAndheri West \r\nMumbai'),
(13, 'Haldiram''s', 'Restaurant', 'Delhi', 'Saket', '9090909090', '123 B block Saket\r\nDelhi'),
(14, 'Parikrama', 'Restaurant', 'Delhi', 'Connaught_Place', '011 2372 1616', 'Antriksh Bhavan 22 KG Marg \r\nConnaught place New Delhi'),
(15, 'Zaffran', 'Restaurant', 'Delhi', 'Connaught_Place', '011 4546 0000', 'Hotel Palace Heights, D-26/28 Radial Road No.6  Connaught Place New Delhi'),
(16, 'Zing\r\n', 'Restaurant', 'Delhi', 'Connaught_Place', '011 4250 0200', 'The Metropolitan Hotel Bangla Sahib Road Connaught Place Gole Market New Delhi'),
(19, 'Mohanlal Sons\r\n', 'Clothes', 'Delhi', 'Connaught_Place', '011 4151 3893', 'B-21, Inner Circle, Connaught Place, New Delhi, Delhi 110001'),
(20, 'SHASHA\r\n', 'Clothes', 'Delhi', 'Connaught_Place', '011 4359 2795', '8-A, Near Post Office & KFC Inner Cir Connaught Place New Delhi'),
(21, 'Puma\r\n', 'Clothes', 'Delhi', 'Connaught_Place', '011 4579 6176', 'F block Rajiv Chowk Connaught Place New Delhi'),
(22, 'Croma', 'Electronics', 'Delhi', 'Connaught_Place', '1800 258 3636', 'Ground Floor Odean Cinema Block D Connaught Place New Delhi'),
(23, 'Canon Image Square\r\n', 'Electronics', 'Delhi', 'Connaught_Place', '011 2331 5600', 'N-40 Connaught Place New Delhi'),
(24, 'Turrant Restaurant\r\n', 'Restaurant', 'Delhi', 'Saket', '011 2653 6139', 'PVR Anupam Complex Saket New Delhi'),
(25, 'Lebanese Point\r\n', 'Restaurant', 'Delhi', 'Saket', '011 4166 4440', 'Shop No. 7 Ground Floor PVR Saket Building Saket New Delhi'),
(26, 'Garg Electronics\r\n', 'Electronics', 'Delhi', 'Saket', '011 2953 5445', 'Shop No. 5/123-A Saiyad Ul Ajaib Market Neb Sarai More Saket New Delhi\r\n'),
(27, 'Allex Electronics', 'Electronics', 'Delhi', 'Saket', '09810746850', 'Shop No. 18 Opposite 501 Bus Stand Market Saket New Delhi'),
(28, 'Digital House\r\n', 'Electronics', 'Delhi', 'Saket', '011 4657 7771', ' F-21 Select City Walk Saket District Centre Pushp Vihar New Delhi'),
(29, 'Blackberry''s', 'Clothes', 'Delhi', 'Saket', '011 4174 9476', 'Shop No. 282 First Floor DLF Place Mall, Saket New Delhi'),
(30, 'Forever 21\r\n', 'Clothes', 'Delhi', 'Saket', '011 4106 6881', 'DLF Place Anchor-F 1st Floor GF-A4 District Centre Saket Delhi '),
(31, 'Jack & Jones', 'Clothes', 'Delhi', 'Saket', '011 4616 0904', 'A1 DLF Place Saket Saket District Centre Pushp Vihar New Delhi'),
(32, 'Aarti Electronics\r\n', 'Electronics', 'Mumbai', 'Andheri_East', '022 2925 5662', 'Shop No. 4 Misquita Chawl Moral Village Andheri East Mumbai'),
(33, 'Electronics Bazaar\r\n', 'Electronics', 'Mumbai', 'Andheri_East', '1800 266 4000', '415 Hubtown Solaris Prof NS Phadke Marg Andheri East Mumbai'),
(34, 'Gajalee', 'Restaurant', 'Mumbai', 'Andheri_East', '022 2822 7373', 'E3, Udyog Sadan No.2 Opposite ESIS Hospital Andheri East Mumbai'),
(35, 'Peshawri', 'Restaurant', 'Mumbai', 'Andheri_East', '022 2830 3030', 'ITC Maratha Sahar Road Andheri East Mumbai'),
(36, 'Ashika Fashion Wear\r\n', 'Clothes', 'Mumbai', 'Andheri_East', '022 2830 2904', 'Aayushi Apartments B-Wing J.B. Nagar Andheri East Mumbai'),
(37, 'Alankar Dresswalla', 'Clothes', 'Mumbai', 'Andheri_East', '09220510518', 'Dube Building, Old Nagardas road\r\nRadhakrishnan Marg Andheri East Mumbai'),
(38, 'Black Berrys\r\n', 'Clothes', 'Mumbai', 'Andheri_West', '022 6127 4737', 'Infinity Mall P Tandon Marg Phase D Andheri West Mumbai'),
(39, 'Nautica', 'Clothes', 'Mumbai', 'Andheri_West', '022 6671 0361', 'Infinity Mall KL Walawalkar Marg Phase D Andheri West Mumbai'),
(40, 'Cotton World', 'Clothes', 'Mumbai', 'Andheri_West', '022 2285 0070', 'Infiniti Mall Unit No SF 215 P Tandon Marg Phase D Andheri West Mumbai'),
(41, 'Urban Tadka', 'Restaurant', 'Mumbai', 'Andheri_West', '022 2632 8172', 'Shiv Shopping Center Juhu Versova Link Road 7 Bungalows Andheri West Mumbai'),
(42, 'The Little Door', 'Restaurant', 'Mumbai', 'Andheri_West', '099209 83836', 'Plot B31, Shree Siddhivanayak Plaza, Off Lane Opp. Citi Mall Andheri West Mumbai'),
(43, 'Satyam Electronics\r\n', 'Electronics', 'Mumbai', 'Andheri_West', '022 6699 9249', '3/A Main Market Ratan Nagar Andheri West, Mumbai'),
(44, 'Arihant Electronic\r\n', 'Electronics', 'Mumbai', 'Andheri_West', '022 2677 5790', 'Shop No. 5-A, Sagar Shopping Centre Dawood Baug Corner Navneeth Colony Andheri West Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE IF NOT EXISTS `userlist` (
`user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_contact` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`) VALUES
(17, 'Himanshu', 'himanshu.14mca1061@abes.ac.in', '098f6bcd4621d373cade4e832627b4f6', '8750612404'),
(19, 'Himanshu', 'abc@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '9090898990'),
(20, 'ayush', 'ayushmaheshwari83@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9654112152'),
(21, 'abhinav', 'abhinav@abes.ac.in', 'ab56b4d92b40713acc5af89985d4b786', '8923347'),
(22, 'abc', 'abc@yahoo.com', 'e80b5017098950fc58aad83c8c14978e', '786243876834');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storelist`
--
ALTER TABLE `storelist`
 ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `storelist`
--
ALTER TABLE `storelist`
MODIFY `store_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
