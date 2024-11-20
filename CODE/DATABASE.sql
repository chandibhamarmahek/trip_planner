-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 08:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `email` varchar(50) NOT NULL,
  `book_id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `total_price` bigint(15) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`email`, `book_id`, `room_id`, `total_price`, `from_date`, `to_date`) VALUES
('myra@gmail.com', 1, 1, 10000, '2023-05-02', '2023-05-03'),
('nisha26381@gmail.com', 2, 2, 1000, '2023-05-26', '2023-05-27'),
('m@gmail.com', 3, 2, 10000, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(15) NOT NULL,
  `city_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad'),
(2, 'Amreli '),
(3, 'Vadodara '),
(4, 'Surendranagar '),
(5, 'Rajkot'),
(6, 'Anand'),
(7, 'Surat'),
(8, 'Kutch'),
(9, 'Porbandar'),
(10, 'Morbi'),
(11, 'Jamnagar '),
(12, 'Junagadh'),
(13, 'Bhavnagar'),
(14, 'Botad'),
(15, 'Banaskantha'),
(16, 'Patan'),
(17, 'Gandhinagar '),
(18, 'Mehsana'),
(19, 'Sabarkantha'),
(20, 'Kheda'),
(21, 'Aravalli'),
(22, 'Bharuch'),
(23, 'Dahod'),
(24, 'Tapi'),
(25, 'Dang'),
(26, 'Navsari'),
(27, 'Valsad'),
(28, 'Mahisagar');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(15) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `city_id` int(15) NOT NULL,
  `addr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `city_id`, `addr`) VALUES
(1, 'Shiv hotel', 4, 'near bus stand'),
(2, 'President', 4, 'Main road opp. milan cinema'),
(3, 'Vivanta hotel', 1, 'SG highway Ahmedabad '),
(5, 'Fairfield by ma', 1, 'Ashram road Ahmedabad '),
(6, 'patria suits', 5, 'near rajkot railway statiom '),
(7, 'Hotel upasana', 5, 'near rajkot train station'),
(8, 'Gift city club', 17, '16km from sardar patel stadium '),
(9, 'The leela gandh', 17, 'sector 14 airspace state highway above railway station'),
(10, 'Sunday hotel', 3, ' Groung floor,iskon janmahal,alkapuri,ms university '),
(11, 'Sayaji hotel', 3, 'parsi agiyari,sarod,sayajigani '),
(12, 'Ginger surat', 7, '6.2 km from centre'),
(13, 'Central Beacon ', 7, '2.31km from city centre'),
(14, ' hotel neptune', 2, 'street number 2, manekpara'),
(15, ' hotel city pal', 2, 'opp main bus stand '),
(16, 'Hotel arizona i', 6, 'Anand - Sojitra Rd, near Madhubhan Resort, Vithal Udyognagar, GIDC, Anand,'),
(17, 'viz park hotel', 6, 'Railway Station Rd, Vithal Udyognagar, GIDC, Anand'),
(18, 'Jaygopal hotel', 8, 'MHCC+8XR, thadia,kutch'),
(19, 'Royal guest hou', 8, ' near  bhuj'),
(20, 'Hotel sheetal', 9, 'opp. head post office,near arya samaj\r\nporbandar'),
(21, 'hotel saffron', 9, 'near new jalaram mandir,opp PM aangadiya,MG road'),
(22, 'hotel savera inn', 9, 'opp. head post office,near arya samaj\r\nporbandar'),
(23, 'hotel saffron', 10, 'sun cera chambers,BH adarsh Chambers 8/a,national highway'),
(24, 'Hotel radhe inn', 9, 'opp. head post office,near arya samaj\r\nporbandar'),
(25, 'hotel saffron', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(25) NOT NULL,
  `place_name` varchar(35) NOT NULL,
  `city_id` int(15) NOT NULL,
  `city_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `city_id`, `city_name`) VALUES
(1, 'Mahi watergate ', 3, 'Vadodara '),
(2, '100 Acers', 1, 'Ahmedabad '),
(3, 'Sabarmati ashra', 1, 'Ahmedabad '),
(6, 'Bhadra fort', 1, 'Ahmedabad '),
(7, 'Jama masjid', 1, 'Ahmedabad '),
(8, 'Sarkhej roza', 1, 'Ahmedabad '),
(9, 'Shah-e-alam\'s r', 1, 'Ahmedabad '),
(10, 'Rani no hajiro', 1, 'Ahmedabad '),
(11, 'Vastrapur lake', 1, 'Ahmedabad '),
(12, 'Kankaria lake', 1, 'Ahmedabad '),
(13, 'Iscon temple', 1, 'Ahmedabad '),
(14, 'hutheesing jain temple', 1, 'Ahmedabad '),
(15, 'Swaminarayan temple', 1, 'Ahmedabad '),
(16, 'The pols', 1, 'Ahmedabad '),
(17, 'Sidi saiyyed mosque', 1, 'Ahmedabad '),
(18, 'Auto World Vintage Car Museum', 1, 'Ahmedabad '),
(19, 'Calico Museum of Textiles', 1, 'Ahmedabad '),
(20, 'Gujarat Science City', 1, 'Ahmedabad '),
(21, 'Makarpura Palace', 3, 'Vadodara '),
(22, 'EME Temple', 3, 'Vadodara '),
(23, 'Surya Narayan Temple', 3, 'Vadodara '),
(24, 'Sri Aurobindo Ashram', 3, 'Vadodara '),
(25, 'Laxmi Vilas Palace', 3, 'Vadodara '),
(26, 'Nyaya Mandir', 3, 'Vadodara '),
(27, 'Baps Shri Swaminarayan Temple', 3, 'Vadodara '),
(28, 'Khanderao Market', 3, 'Vadodara '),
(29, 'Maharaja Sayajirao University', 3, 'Vadodara '),
(30, 'Kirti Mandir', 3, 'Vadodara '),
(31, 'Maharaja Fatehsingh Museum', 3, 'Vadodara '),
(32, 'Mandvi Gate', 3, 'Vadodara '),
(33, 'Nandalay Temple', 3, 'Vadodara '),
(34, 'Ajwa Nimeta Dam Garden', 3, 'Vadodara '),
(35, 'Sardar Patel Planetarium', 3, 'Vadodara '),
(36, ' Hazira Maqbara', 3, 'Vadodara'),
(37, ' Hazira Maqbara', 3, 'Vadodara'),
(38, ' Narmada Canal', 3, 'Vadodara'),
(39, ' Ajwa Water Park', 3, 'Vadodara '),
(40, 'S-Cube Water Park', 3, 'Vadodara '),
(41, 'Hathni Mata', 3, 'Vadodara '),
(52, 'Tapi river front', 7, 'Surat'),
(92, 'Surat castle', 7, 'Surat'),
(103, 'Sneh Rashmi Botanical Garden', 7, 'Surat'),
(104, 'VR mall Surat ', 7, 'Surat'),
(105, 'Jagdishchandra bose aquarium ', 7, 'Surat'),
(107, 'Ambika niketan ', 7, 'Surat'),
(109, 'Dumas beach', 7, 'Surat'),
(110, 'Sarthana natural park', 7, 'Surat'),
(111, 'Gopi talav', 7, 'Surat'),
(112, 'Dutch garden', 7, 'Surat'),
(114, 'Snow park surat', 7, 'Surat'),
(115, 'Suvali beach', 7, 'Surat'),
(116, 'tithal beach', 7, 'Surat'),
(118, 'Trimandir', 4, 'Surendranagar '),
(119, 'BAPS akshardham temple', 17, 'Gandhinagar '),
(120, 'Sarita udhyan', 17, 'Gandhinagar '),
(121, 'Punit van', 17, 'Gandhinagar '),
(122, 'Indrora nature park', 17, 'Gandhinagar '),
(123, 'The adalaj step well', 17, 'Gandhinagar '),
(124, 'Trimandir adalaj', 17, 'Gandhinagar '),
(125, 'Sant sarovar dam', 17, 'Gandhinagar '),
(126, 'Mahudi tirth', 17, 'Gandhinagar '),
(127, 'Dinosaur and fossil park', 17, 'Gandhinagar '),
(128, 'Dandi kutir', 17, 'Gandhinagar '),
(129, 'Ranchhodrai dakor temple', 20, ' Kheda'),
(130, 'Vadtal', 20, ' Kheda'),
(131, 'Shri siddhivinayak mandir', 20, ' Kheda'),
(132, 'Ramji mandir', 20, ' Kheda'),
(133, 'Khedia hanuman temple', 20, ' Kheda'),
(134, 'Bhamaria vav', 20, ' Kheda'),
(135, 'shah water city and resort', 20, ' Kheda'),
(136, 'Nagrama', 20, ' Kheda'),
(137, 'Green tower', 10, ' Morbi'),
(138, 'Painter a vaghela', 10, ' Morbi'),
(139, 'Trimandir ', 10, ' Morbi'),
(140, 'Mani mandir', 10, ' Morbi'),
(141, 'Sipoc ceramic', 10, ' Morbi'),
(142, 'AUM car decor', 10, ' Morbi'),
(143, 'Julta pul', 10, ' Morbi'),
(144, 'Green chowk', 10, ' Morbi'),
(145, 'Dreamland fun world', 10, ' Morbi'),
(146, 'OM water resort', 10, ' Morbi'),
(147, 'Dholavira', 8, ' Kutch'),
(148, 'Mandvi', 8, ' Kutch'),
(149, 'Gandhidham', 8, ' Kutch'),
(150, 'Kandla', 8, ' Kutch'),
(151, 'Lakhpat', 8, ' Kutch'),
(152, 'Dhordo', 8, ' Kutch'),
(153, 'Anjar', 8, ' Kutch'),
(154, 'Mata no madh', 8, ' Kutch'),
(155, 'Bhachau', 8, ' Kutch'),
(156, 'Bhuj', 8, ' Kutch'),
(157, 'Mahatma gandhi museum', 5, ' Rajkot'),
(158, 'Watson museum', 5, ' Rajkot'),
(159, 'Rotary Internationsal dolls museum', 5, ' Rajkot'),
(160, 'Jubilee Garden', 5, ' Rajkot'),
(161, 'BAPS shri swaminarayan mandir', 5, ' Rajkot'),
(162, 'Lalpari lake', 5, ' Rajkot'),
(163, 'Fun world', 5, ' Rajkot'),
(164, 'Iskon temple rajkot', 5, ' Rajkot'),
(165, 'Shri ramakrishna ashram', 5, ' Rajkot'),
(166, 'Aji dam', 5, ' Rajkot'),
(167, 'Pradhyuman park', 5, ' Rajkot'),
(168, 'Ranjit vilas palace', 5, ' Rajkot'),
(169, 'Lang library', 5, ' Rajkot'),
(170, 'Trimandir amreli', 2, ' Amreli'),
(171, 'Sukhnath temple', 2, ' Amreli'),
(172, 'Ambardi safari park', 2, ' Amreli'),
(173, 'Gir national park', 2, ' Amreli'),
(174, 'Amreli dam', 2, ' Amreli'),
(175, 'Trimandir surendranagar', 4, ' Surendranagar'),
(176, 'Shri chamunda mata temple chotila', 4, ' Surendranagar'),
(177, 'Hawa mahal', 4, ' Surendranagar'),
(178, 'Madha vav the step well', 4, ' Surendranagar'),
(179, 'BAPS shri swaminarayan mandir', 4, ' Surendranagar'),
(180, 'GIDC rotary garden', 4, ' Surendranagar'),
(181, 'Dholi dhaja dam', 4, ' Surendranagar'),
(182, 'Shri vadvala mandir', 4, ' Surendranagar'),
(183, 'Bubbles waterpark', 4, ' Surendranagar'),
(184, 'Tagor bagh', 4, ' Surendranagar'),
(185, 'Iskon vidhyanagar', 6, ' Anand'),
(186, 'Lambhvel hanumanji temple', 6, ' Anand'),
(187, 'Mani laxmi jain tirth', 6, ' Anand'),
(188, 'Anoopam mission', 6, ' Anand'),
(189, 'Shashtri garden', 6, ' Anand'),
(190, 'Sardar vallabhbhai patel house', 6, ' Anand'),
(191, 'Gyan baug', 6, ' Anand'),
(192, 'Sur sagar lake', 6, ' Anand'),
(193, 'Mahatma gandhi birth place', 9, ' Porbandar'),
(194, 'Sudama temple', 9, ' Porbandar'),
(195, 'Porbandar beach', 9, ' Porbandar'),
(196, 'Shri hari temple', 9, ' Porbandar'),
(197, 'Porbandar bird sanctuary', 9, ' Porbandar'),
(198, 'Huzoor palace', 9, ' Porbandar'),
(199, 'Rangbai beach', 9, ' Porbandar'),
(200, 'Madhavpur', 9, ' Porbandar'),
(201, 'Chopati beach', 9, ' Porbandar'),
(202, 'Bala hanuman temple', 11, ' Jamnagar'),
(203, 'Ranmal lake park', 11, ' Jamnagar'),
(204, 'BAPS shri swaminarayn mandir', 11, ' Jamnagar'),
(205, 'Shri dwarkadhish temple', 11, ' Jamnagar'),
(206, 'Lakhota palace and museum', 11, ' Jamnagar'),
(207, 'Khijadia bird sanctuary', 11, ' Jamnagar'),
(208, 'Pratap vilas palace', 11, ' Jamnagar'),
(209, 'Ayurvedic university', 11, ' Jamnagar'),
(210, 'Lakhota lake', 11, ' Jamnagar'),
(211, 'Bet dwarka', 11, ' Jamnagar'),
(212, 'Marine national park', 11, ' Jamnagar'),
(213, 'Dwarkadhish temple', 11, ' Jamnagar'),
(214, 'Trimandir Amreli', 2, ' Amreli'),
(215, 'Sukhnath Temple', 2, ' Amreli'),
(216, 'Ambardi safari park', 2, ' Amreli'),
(217, 'Gir national park', 2, ' Amreli'),
(218, 'Amreli Dam', 2, ' Amreli'),
(219, 'BAPS shri swaminarayan mandir', 13, 'Bhavnagar'),
(220, 'Bortalav', 13, 'Bhavnagar'),
(221, 'Gandhi smruti', 13, 'Bhavnagar'),
(222, 'Barton library', 13, 'Bhavnagar'),
(223, 'Malnath Mahadev temple', 13, 'Bhavnagar'),
(224, 'Piram bet', 13, 'Bhavnagar'),
(225, 'Victoria nature park', 13, 'Bhavnagar'),
(226, 'Ganga deri', 13, 'Bhavnagar'),
(227, 'Kuda beach', 13, 'Bhavnagar'),
(228, 'Shree khodiyar mata mandir', 13, 'Bhavnagar'),
(229, 'Bhrahma kud bhavnagar', 13, 'Bhavnagar'),
(230, 'Shree kashtbhanjan dev hanumanji te', 14, 'Botad'),
(231, 'Shree swaminarayan mukhya mandir', 14, 'Botad'),
(232, 'BAPS swaminarayan mandir botad', 14, 'Botad'),
(233, '', 14, 'Botad'),
(234, 'Shree kashtbhanjan dev temple', 14, 'Botad'),
(235, 'Ambaji', 15, 'Banaskantha'),
(236, 'Kailash tekari mahadev temple', 15, 'Banaskantha'),
(237, 'Gabbar hill ambaji', 15, 'Banaskantha'),
(238, 'Jessore sloth bear sanctuary', 15, 'Banaskantha'),
(239, 'Mangalya van', 15, 'Banaskantha'),
(240, 'Balaram palace resort', 15, 'Banaskantha'),
(241, 'Shri aarasuri ambaji mata devasthan', 15, 'Banaskantha'),
(242, 'Varai dham golden temple', 15, 'Banaskantha'),
(243, 'Koteshwar Mahadev temple', 15, 'Banaskantha'),
(244, 'Hawai pillar', 15, 'Banaskantha'),
(245, 'Shri Kedarnath Mahadev temple', 15, 'Banaskantha'),
(246, 'Rani ki vav', 16, 'Patan'),
(247, 'patan patola heritage', 16, 'Patan'),
(248, 'shahstraling talav', 16, 'Patan'),
(249, 'panchasara jain temple', 16, 'Patan'),
(250, 'Modhera sun temple', 16, 'Patan'),
(251, 'Khan sarovar', 16, 'Patan'),
(252, 'Rudra mahalaya', 16, 'Patan'),
(253, 'bindu sarovar', 16, 'Patan'),
(254, 'regional science center patan', 16, 'Patan'),
(255, 'patan museum', 16, 'Patan'),
(256, 'Shri chudel mataji temple', 16, 'Patan'),
(257, 'Science city patan', 16, 'Patan');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `email` varchar(15) NOT NULL,
  `review_id` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`email`, `review_id`, `review_date`, `feedback`) VALUES
('m@gmail.com', 1, '2023-05-17', 'nice!'),
('m@gmail.com', 2, '0000-00-00', 'good'),
('m@gmail.com', 3, '0000-00-00', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_cat_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `hotel_id`, `room_cat_id`, `price`) VALUES
(1, 1, 1, 1500),
(2, 2, 1, 2000),
(3, 2, 1, 2500),
(5, 1, 2, 1000),
(6, 3, 2, 1500),
(7, 3, 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `room_cat_id` int(15) NOT NULL,
  `room_cat_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`room_cat_id`, `room_cat_name`) VALUES
(1, 'AC'),
(2, 'NON-AC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `fname`, `lname`, `contact_no`, `address`) VALUES
('m@gmail.com', '12', 'm', 'm', 7898973, 'h'),
('myra@gmail.com', '12345', 'myra', 'mishra', 8989889889, 'surat'),
('nisha26381@gmail.com', 'huuuuuuuuuuuuuuuuu', 'nisha', 'sharma', 7878787878, 'morbi'),
('pratik@gmail.com', 'asdfg', 'pratik', 'parmar', 9998893092, 'surendranagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`room_cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `room_cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
