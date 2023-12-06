-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 10:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `24sevenlimousine`
--

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `ID` int(11) NOT NULL,
  `PickupDate` varchar(40) NOT NULL,
  `pickupTime` varchar(50) NOT NULL,
  `pickupLocation` text NOT NULL,
  `pickupDestination` text NOT NULL,
  `Status` varchar(40) NOT NULL,
  `CarPlate` varchar(50) NOT NULL,
  `CarType` varchar(50) NOT NULL,
  `DriverID` int(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPhone` varchar(20) NOT NULL,
  `Comment` text NOT NULL,
  `PaymentWay` varchar(40) NOT NULL,
  `TotalCost` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`ID`, `PickupDate`, `pickupTime`, `pickupLocation`, `pickupDestination`, `Status`, `CarPlate`, `CarType`, `DriverID`, `UserName`, `UserEmail`, `UserPhone`, `Comment`, `PaymentWay`, `TotalCost`) VALUES
(4, '12/02/2023', '00:06', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', '', '1.65'),
(5, '12/02/2023', '00:06', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'Pay to Captain', '1.65'),
(6, '12/02/2023', '00:06', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'Fawry', '1.65'),
(7, '12/02/2023', '00:06', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'Fawry', '1.65'),
(8, '12/04/2023', '15:16', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01100017151', 'no comment', '', '7'),
(9, '12/04/2023', '15:40', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Cairo International Airport (CAI), Airport Rd, Al Shorouk, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', '', '65.5'),
(10, '12/04/2023', '16:41', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'sedan', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'fawry', '1.65'),
(11, '12/04/2023', '15:44', 'Concord Plaza, 90 St, New Cairo, Cairo 11, Egypt', 'Cairo Festival City Mall, Ring Rd., New Cairo, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'pay to captain', '39.4'),
(12, '12/05/2023', '20:18', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'fawry', '1.65'),
(13, '12/05/2023', '20:18', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'suv', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'fawry', '1.65'),
(14, '12/05/2023', '20:21', 'Concord Plaza, 90 St, New Cairo, Cairo 11, Egypt', 'Cairo International Airport (CAI), Airport Rd, Al Shorouk, Cairo 11, Egypt', 'requested', 'null', 'hiace', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'pay to captain', '72.5'),
(15, '12/05/2023', '20:21', 'Concord Plaza, 90 St, New Cairo, Cairo 11, Egypt', 'Cairo International Airport (CAI), Airport Rd, Al Shorouk, Cairo 11, Egypt', 'requested', 'null', 'hiace', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'fawry', '72.5'),
(16, '12/05/2023', '20:21', 'Concord Plaza, 90 St, New Cairo, Cairo 11, Egypt', 'Cairo International Airport (CAI), Airport Rd, Al Shorouk, Cairo 11, Egypt', 'requested', 'null', 'hiace', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'pay to captain', '72.5'),
(17, '12/05/2023', '20:21', 'Concord Plaza, 90 St, New Cairo, Cairo 11, Egypt', 'Cairo International Airport (CAI), Airport Rd, Al Shorouk, Cairo 11, Egypt', 'requested', 'null', 'hiace', 0, 'Hanan Hassan', 'saheramr1515@gmail.com', '01154767327', 'no comment', 'pay to captain', '72.5'),
(18, '12/05/2023', '23:32', 'Mokattam Specialized Hospital, Street 9, Nasr, Cairo 11, Egypt', 'Mukattam Souq, St 9, Nasr, Cairo 11, Egypt', 'requested', 'null', 'sedan', 0, 'Hanan Hassan', 'saheramr@gmail.com', '01100017151', 'no comment', 'pay to captain', '1.65');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
