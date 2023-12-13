SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ID` int(10) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Year` int(12) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `FuelType` varchar(10) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `drivers` (`ID`, `Model`, `Year`, `FuelType`) VALUES
(1, 'Kia sportage', 2003 , 'gas'),
(2, 'Toyota corolla', 2021, 'gas'),
(3, 'Hundai Elentra', 2022, 'gas'),
(4, 'Honda Civic', 2023, 'Nitrous'),

--
-- Indexes for table `drivers`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `cars`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
