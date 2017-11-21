-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 08:14 PM
-- Server version: 5.6.10
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PM_PacketLayerDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `CPE`
--

CREATE TABLE `CPE` (
  `ID` int(11) NOT NULL,
  `CPE_date` varchar(255) DEFAULT NULL,
  `CPE_name` varchar(255) DEFAULT NULL,
  `Technician1_name` varchar(255) DEFAULT NULL,
  `Technician1_start` varchar(255) DEFAULT NULL,
  `Technician1_stop` varchar(255) DEFAULT NULL,
  `Technician1_hours` varchar(255) DEFAULT NULL,
  `Technician2_name` varchar(255) DEFAULT NULL,
  `Technician2_start` varchar(255) DEFAULT NULL,
  `Technician2_stop` varchar(255) DEFAULT NULL,
  `Technician2_hours` varchar(255) DEFAULT NULL,
  `Technician3_name` varchar(255) DEFAULT NULL,
  `Technician3_start` varchar(255) DEFAULT NULL,
  `Technician3_stop` varchar(255) DEFAULT NULL,
  `Technician3_hours` varchar(255) DEFAULT NULL,
  `Technician4_name` varchar(255) DEFAULT NULL,
  `Technician4_start` varchar(255) DEFAULT NULL,
  `Technician4_stop` varchar(255) DEFAULT NULL,
  `Technician4_hours` varchar(255) DEFAULT NULL,
  `Technician5_name` varchar(255) DEFAULT NULL,
  `Technician5_start` varchar(255) DEFAULT NULL,
  `Technician5_stop` varchar(255) DEFAULT NULL,
  `Technician5_hours` varchar(255) DEFAULT NULL,
  `CPE_radio_config_checks` varchar(255) DEFAULT NULL,
  `CPE_install_checks` varchar(255) DEFAULT NULL,
  `Max_capacity_circ` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `ID` int(11) NOT NULL,
  `POC_alt1_name` varchar(255) DEFAULT NULL,
  `POC_alt1_title` varchar(255) DEFAULT NULL,
  `POC_alt1_phone` varchar(255) DEFAULT NULL,
  `POC_alt1_email` varchar(255) DEFAULT NULL,
  `POC_alt2_name` varchar(255) DEFAULT NULL,
  `POC_alt2_title` varchar(255) DEFAULT NULL,
  `POC_alt2_phone` varchar(255) DEFAULT NULL,
  `POC_alt2_email` varchar(255) DEFAULT NULL,
  `POC_alt3_name` varchar(255) DEFAULT NULL,
  `POC_alt3_title` varchar(255) DEFAULT NULL,
  `POC_alt3_phone` varchar(255) DEFAULT NULL,
  `POC_alt3_email` varchar(255) DEFAULT NULL,
  `POC_alt4_name` varchar(255) DEFAULT NULL,
  `POC_alt4_title` varchar(255) DEFAULT NULL,
  `POC_alt4_phone` varchar(255) DEFAULT NULL,
  `POC_alt4_email` varchar(255) DEFAULT NULL,
  `Customer_notes` text,
  `Building_ownership` varchar(255) DEFAULT NULL,
  `Multitenant` varchar(255) DEFAULT NULL,
  `Property_name` varchar(255) DEFAULT NULL,
  `Building_owners` varchar(255) DEFAULT NULL,
  `Property_mng_co` varchar(255) DEFAULT NULL,
  `POC1_Building_name` varchar(255) DEFAULT NULL,
  `POC1_Building_phone` varchar(255) DEFAULT NULL,
  `POC1_Building_email` varchar(255) DEFAULT NULL,
  `POC2_Building_name` varchar(255) DEFAULT NULL,
  `POC2_Building_phone` varchar(255) DEFAULT NULL,
  `POC2_Building_email` varchar(255) DEFAULT NULL,
  `Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Distribution`
--

CREATE TABLE `Distribution` (
  `ID` int(11) NOT NULL,
  `Dist_date` varchar(255) DEFAULT NULL,
  `Dist_name` varchar(255) DEFAULT NULL,
  `Technician1_name` varchar(255) DEFAULT NULL,
  `Technician1_start` varchar(255) DEFAULT NULL,
  `Technician1_stop` varchar(255) DEFAULT NULL,
  `Technician1_hours` varchar(255) DEFAULT NULL,
  `Technician2_name` varchar(255) DEFAULT NULL,
  `Technician2_start` varchar(255) DEFAULT NULL,
  `Technician2_stop` varchar(255) DEFAULT NULL,
  `Technician2_hours` varchar(255) DEFAULT NULL,
  `Technician3_name` varchar(255) DEFAULT NULL,
  `Technician3_start` varchar(255) DEFAULT NULL,
  `Technician3_stop` varchar(255) DEFAULT NULL,
  `Technician3_hours` varchar(255) DEFAULT NULL,
  `Technician4_name` varchar(255) DEFAULT NULL,
  `Technician4_start` varchar(255) DEFAULT NULL,
  `Technician4_stop` varchar(255) DEFAULT NULL,
  `Technician4_hours` varchar(255) DEFAULT NULL,
  `Technician5_name` varchar(255) DEFAULT NULL,
  `Technician5_start` varchar(255) DEFAULT NULL,
  `Technician5_stop` varchar(255) DEFAULT NULL,
  `Technician5_hours` varchar(255) DEFAULT NULL,
  `Dist_radio_config_checks` varchar(255) DEFAULT NULL,
  `Dist_install_checks` varchar(255) DEFAULT NULL,
  `Max_capacity_dist` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Installation`
--

CREATE TABLE `Installation` (
  `ID` int(11) NOT NULL,
  `Install_due` varchar(255) DEFAULT NULL,
  `Install_date` varchar(255) DEFAULT NULL,
  `Install_time` varchar(255) DEFAULT NULL,
  `Installers_needed` varchar(255) DEFAULT NULL,
  `IPs_needed` varchar(255) DEFAULT NULL,
  `Bandwidth` varchar(255) DEFAULT NULL,
  `Customer_pIP_range` varchar(255) DEFAULT NULL,
  `VLAN` varchar(255) DEFAULT NULL,
  `pIP_Gateway` varchar(255) DEFAULT NULL,
  `pIP_subnet` varchar(255) DEFAULT NULL,
  `CPE_prIP` varchar(255) DEFAULT NULL,
  `Access_point_IP` varchar(255) DEFAULT NULL,
  `AP_subnet` varchar(255) DEFAULT NULL,
  `AP_gateway` varchar(255) DEFAULT NULL,
  `Customer_technical_POC_name` varchar(255) DEFAULT NULL,
  `Customer_technical_POC_phone` varchar(255) DEFAULT NULL,
  `Customer_technical_POC_email` varchar(255) DEFAULT NULL,
  `Special` varchar(255) DEFAULT NULL,
  `Additional_instructions` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Onsite`
--

CREATE TABLE `Onsite` (
  `ID` int(11) NOT NULL,
  `Survery_date` varchar(255) DEFAULT NULL,
  `Survery_time` varchar(255) DEFAULT NULL,
  `Survery_POC` varchar(255) DEFAULT NULL,
  `Surveyor_name` varchar(255) DEFAULT NULL,
  `Dist_visibility` varchar(255) DEFAULT NULL,
  `Dist_1` varchar(255) DEFAULT NULL,
  `Dist_1_direction` varchar(255) DEFAULT NULL,
  `Dist_2` varchar(255) DEFAULT NULL,
  `Dist_2_direction` varchar(255) DEFAULT NULL,
  `Dist_3` varchar(255) DEFAULT NULL,
  `Dist_3_direction` varchar(255) DEFAULT NULL,
  `Radio_mount` varchar(255) DEFAULT NULL,
  `Other_comm_equip` varchar(255) DEFAULT NULL,
  `PRS` varchar(255) DEFAULT NULL,
  `Roof_acess` varchar(255) DEFAULT NULL,
  `Building_penetration` varchar(255) DEFAULT NULL,
  `Cable_path` varchar(255) DEFAULT NULL,
  `Demarc_location` varchar(255) DEFAULT NULL,
  `CPE_mount` varchar(255) DEFAULT NULL,
  `Building_type` varchar(255) DEFAULT NULL,
  `Picture_checks` varchar(255) DEFAULT NULL,
  `Num_of_installers` varchar(255) DEFAULT NULL,
  `Installation_checks` text,
  `Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Plotting`
--

CREATE TABLE `Plotting` (
  `ID` int(11) NOT NULL,
  `Existing_infrastructure` varchar(255) DEFAULT NULL,
  `Survey` varchar(255) DEFAULT NULL,
  `TX_radio` varchar(255) DEFAULT NULL,
  `RX_radio` varchar(255) DEFAULT NULL,
  `Existing_sector` varchar(255) DEFAULT NULL,
  `Throughput` varchar(255) DEFAULT NULL,
  `RSSI` varchar(255) DEFAULT NULL,
  `Parts_list` text,
  `Notes` varchar(255) DEFAULT NULL,
  `Dist_install_labor` varchar(255) DEFAULT NULL,
  `CPE_install_labor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Post`
--

CREATE TABLE `Post` (
  `ID` int(11) NOT NULL,
  `Customer_pIP_range` varchar(255) DEFAULT NULL,
  `Default_gate` varchar(255) DEFAULT NULL,
  `Subnet` varchar(255) DEFAULT NULL,
  `Engineering_post_checks` varchar(255) DEFAULT NULL,
  `Operation_post_checks` varchar(255) DEFAULT NULL,
  `Accounting_post_checks` varchar(255) DEFAULT NULL,
  `Sales_post_checks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `ID` int(11) NOT NULL,
  `Salesperson` varchar(255) DEFAULT NULL,
  `Sales_Date` varchar(255) DEFAULT NULL,
  `Customer_name_1` varchar(255) DEFAULT NULL,
  `Customer_name_2` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `POC_name` varchar(255) DEFAULT NULL,
  `POC_title` varchar(255) DEFAULT NULL,
  `POC_phone` varchar(255) DEFAULT NULL,
  `POC_email` varchar(255) DEFAULT NULL,
  `Call_type` varchar(255) DEFAULT NULL,
  `POC_reseller_name` varchar(255) DEFAULT NULL,
  `POC_reseller_org` varchar(255) DEFAULT NULL,
  `POC_reseller_phone` varchar(255) DEFAULT NULL,
  `POC_reseller_email` varchar(255) DEFAULT NULL,
  `POC_reseller_fee` varchar(255) DEFAULT NULL,
  `Opportunities` varchar(255) DEFAULT NULL,
  `Bandwidth_req` varchar(255) DEFAULT NULL,
  `IP_ammount` varchar(255) DEFAULT NULL,
  `Bandwidth_current` varchar(255) DEFAULT NULL,
  `Current_provider` varchar(255) DEFAULT NULL,
  `Current_monthly_charge` varchar(255) DEFAULT NULL,
  `Current_technology` varchar(255) DEFAULT NULL,
  `TowerCoverage` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sales`
--

-- --------------------------------------------------------


--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Name_1` varchar(255) DEFAULT NULL,
  `Name_2` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CPE`
--
ALTER TABLE `CPE`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Distribution`
--
ALTER TABLE `Distribution`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Installation`
--
ALTER TABLE `Installation`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Onsite`
--
ALTER TABLE `Onsite`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Plotting`
--
ALTER TABLE `Plotting`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Post`
--
ALTER TABLE `Post`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Sales`
--
ALTER TABLE `Sales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CPE`
--
ALTER TABLE `CPE`
  ADD CONSTRAINT `CPE_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `Customer_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);

--
-- Constraints for table `Distribution`
--
ALTER TABLE `Distribution`
  ADD CONSTRAINT `Distribution_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);

--
-- Constraints for table `Installation`
--
ALTER TABLE `Installation`
  ADD CONSTRAINT `Installation_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);

--
-- Constraints for table `Onsite`
--
ALTER TABLE `Onsite`
  ADD CONSTRAINT `Onsite_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);

--
-- Constraints for table `Plotting`
--
ALTER TABLE `Plotting`
  ADD CONSTRAINT `Plotting_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);

--
-- Constraints for table `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `Post_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sales` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
