SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Status` varchar(10) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`ID`, `Name`, `Email`, `Phone`, `Status`) VALUES
(1, 'Sameh Lotfy', 'sameh.lotfy@email.com', 01183126772 , 'Avaliable'),
(2, 'Mostafa Azouz', 'mostafa.azouz@email.com', 01257293331, 'Avaliable'),
(3, 'Wael Hashem', 'wael.hashem@email.com', 01114423882, 'Avaliable'),
(4, 'Fathy Selwan', 'fathy.selwan@email.com', 01556223490, 'Avaliable'),
(5, 'Mohsen Farouk', 'mohsen.farouk@email.com', 01232435584, 'Avaliable');

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`Name`);

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`); --msh 3rfa el ibfk di eh bsraha 
COMMIT;

