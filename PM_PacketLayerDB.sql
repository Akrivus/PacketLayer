-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2017 at 08:11 PM
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
  `Technician6_name` varchar(255) DEFAULT NULL,
  `Technician6_start` varchar(255) DEFAULT NULL,
  `Technician6_stop` varchar(255) DEFAULT NULL,
  `Technician6_hours` varchar(255) DEFAULT NULL,
  `Technician7_name` varchar(255) DEFAULT NULL,
  `Technician7_start` varchar(255) DEFAULT NULL,
  `Technician7_stop` varchar(255) DEFAULT NULL,
  `Technician7_hours` varchar(255) DEFAULT NULL,
  `Technician8_name` varchar(255) DEFAULT NULL,
  `Technician8_start` varchar(255) DEFAULT NULL,
  `Technician8_stop` varchar(255) DEFAULT NULL,
  `Technician8_hours` varchar(255) DEFAULT NULL,
  `System_log` varchar(255) DEFAULT NULL,
  `NTP` varchar(255) DEFAULT NULL,
  `SSH` varchar(255) DEFAULT NULL,
  `SNMP` varchar(255) DEFAULT NULL,
  `GPS` varchar(255) DEFAULT NULL,
  `Timezone` varchar(255) DEFAULT NULL,
  `User_pass` varchar(255) DEFAULT NULL,
  `Host` varchar(255) DEFAULT NULL,
  `Scrn_sht` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL,
  `Labeling` varchar(255) DEFAULT NULL,
  `Pics` varchar(255) DEFAULT NULL,
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
  `Technician6_name` varchar(255) DEFAULT NULL,
  `Technician6_start` varchar(255) DEFAULT NULL,
  `Technician6_stop` varchar(255) DEFAULT NULL,
  `Technician6_hours` varchar(255) DEFAULT NULL,
  `Technician7_name` varchar(255) DEFAULT NULL,
  `Technician7_start` varchar(255) DEFAULT NULL,
  `Technician7_stop` varchar(255) DEFAULT NULL,
  `Technician7_hours` varchar(255) DEFAULT NULL,
  `Technician8_name` varchar(255) DEFAULT NULL,
  `Technician8_start` varchar(255) DEFAULT NULL,
  `Technician8_stop` varchar(255) DEFAULT NULL,
  `Technician8_hours` varchar(255) DEFAULT NULL,
  `System_log` varchar(255) DEFAULT NULL,
  `NTP` varchar(255) DEFAULT NULL,
  `SSH` varchar(255) DEFAULT NULL,
  `SNMP` varchar(255) DEFAULT NULL,
  `GPS` varchar(255) DEFAULT NULL,
  `Timezone` varchar(255) DEFAULT NULL,
  `User_pass` varchar(255) DEFAULT NULL,
  `Host` varchar(255) DEFAULT NULL,
  `Scrn_sht` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL,
  `Labeling` varchar(255) DEFAULT NULL,
  `Pics` varchar(255) DEFAULT NULL,
  `Max_capacity_circ` varchar(255) DEFAULT NULL,
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
  `Additional_instructions` varchar(255) DEFAULT NULL,
  `Faculty_technical_POC_name` varchar(255) DEFAULT NULL,
  `Faculty_technical_POC_phone` varchar(255) DEFAULT NULL,
  `Faculty_technical_POC_email` varchar(255) DEFAULT NULL
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
  `Skid` varchar(255) DEFAULT NULL,
  `Other_comm_equip` varchar(255) DEFAULT NULL,
  `PRS` varchar(255) DEFAULT NULL,
  `Roof_acess` varchar(255) DEFAULT NULL,
  `Building_penetration` varchar(255) DEFAULT NULL,
  `Cable_path` varchar(255) DEFAULT NULL,
  `Demarc_location` varchar(255) DEFAULT NULL,
  `CPE_mount` varchar(255) DEFAULT NULL,
  `Single` varchar(255) DEFAULT NULL,
  `Roof` varchar(255) DEFAULT NULL,
  `Num_of_installers` varchar(255) DEFAULT NULL,
  `ToughCable` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL,
  `Unistrut` varchar(225) DEFAULT NULL,
  `J_bracket` varchar(225) DEFAULT NULL,
  `Existing` varchar(225) DEFAULT NULL,
  `Other` varchar(225) DEFAULT NULL,
  `Other_Isp` varchar(225) DEFAULT NULL,
  `Multifloor` varchar(225) DEFAULT NULL,
  `Single_story` varchar(225) DEFAULT NULL,
  `Multitenant` varchar(225) DEFAULT NULL,
  `Strip_mall` varchar(225) DEFAULT NULL,
  `Warehouse` varchar(225) DEFAULT NULL,
  `Plant` varchar(225) DEFAULT NULL,
  `Mounting` varchar(225) DEFAULT NULL,
  `Penetration` varchar(225) DEFAULT NULL,
  `Cable` varchar(225) DEFAULT NULL,
  `Demarc` varchar(225) DEFAULT NULL,
  `CPE` varchar(225) DEFAULT NULL,
  `Customer` varchar(225) DEFAULT NULL,
  `Power` varchar(225) DEFAULT NULL,
  `Indoor` varchar(225) DEFAULT NULL,
  `Roof_skid` varchar(225) DEFAULT NULL,
  `Rubber` varchar(225) DEFAULT NULL,
  `Cinder` varchar(225) DEFAULT NULL,
  `Pipe` varchar(225) DEFAULT NULL,
  `Unistrut_` varchar(225) DEFAULT NULL,
  `U_clamps` varchar(225) DEFAULT NULL,
  `Bolts` varchar(225) DEFAULT NULL,
  `Self` varchar(225) DEFAULT NULL,
  `Tapcons` varchar(225) DEFAULT NULL,
  `Coax` varchar(225) DEFAULT NULL,
  `Zip` varchar(225) DEFAULT NULL,
  `Anchor` varchar(225) DEFAULT NULL,
  `Wood` varchar(225) DEFAULT NULL,
  `Lag` varchar(225) DEFAULT NULL,
  `Metal` varchar(225) DEFAULT NULL,
  `Hammer` varchar(225) DEFAULT NULL,
  `Fish` varchar(225) DEFAULT NULL,
  `Fishing` varchar(225) DEFAULT NULL,
  `Router` varchar(225) DEFAULT NULL,
  `Switch` varchar(225) DEFAULT NULL,
  `Power_s` varchar(225) DEFAULT NULL,
  `Fiber_l` varchar(225) DEFAULT NULL,
  `Fiber_e` varchar(225) DEFAULT NULL,
  `Misc1` varchar(225) DEFAULT NULL,
  `Misc2` varchar(225) DEFAULT NULL,
  `Misc3` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `Plotting`
--

CREATE TABLE `Plotting` (
  `ID` int(11) NOT NULL,
  `Existing_infrastructure` varchar(255) DEFAULT NULL,
  `Radio_survey` varchar(255) DEFAULT NULL,
  `TX_radio` varchar(255) DEFAULT NULL,
  `RX_radio` varchar(255) DEFAULT NULL,
  `Existing_sector` varchar(255) DEFAULT NULL,
  `Throughput` varchar(255) DEFAULT NULL,
  `RSSI` varchar(255) DEFAULT NULL,
  `Parts_list` text,
  `Notes` varchar(255) DEFAULT NULL,
  `Dist_install_labor` varchar(255) DEFAULT NULL,
  `CPE_install_labor` varchar(255) DEFAULT NULL,
  `Salesperson` varchar(255) DEFAULT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Bandwidth_req` varchar(255) DEFAULT NULL,
  `Distribution` varchar(255) DEFAULT NULL,
  `Onsite_survey` varchar(255) DEFAULT NULL,
  `Visual_survey` varchar(255) DEFAULT NULL,
  `Num_people` varchar(255) DEFAULT NULL
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
  `Cacti` varchar(255) DEFAULT NULL,
  `IPAM` varchar(255) DEFAULT NULL,
  `Bill` varchar(255) DEFAULT NULL,
  `Bandwidth` varchar(255) DEFAULT NULL,
  `Payable` varchar(255) DEFAULT NULL,
  `Contract_f` varchar(255) DEFAULT NULL,
  `U_spreadsht` varchar(255) DEFAULT NULL,
  `U_payable` varchar(255) DEFAULT NULL,
  `Four` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Ticket` varchar(255) DEFAULT NULL,
  `U_contact` varchar(255) DEFAULT NULL,
  `Map` varchar(255) DEFAULT NULL,
  `Survey` varchar(255) DEFAULT NULL,
  `IP_info` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `Commencement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `ID` int(11) NOT NULL,
  `Salesperson` varchar(255) DEFAULT NULL,
  `Sales_Date` varchar(255) DEFAULT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `POC_name` varchar(255) DEFAULT NULL,
  `POC_title` varchar(255) DEFAULT NULL,
  `POC_phone` varchar(255) DEFAULT NULL,
  `POC_email` varchar(255) DEFAULT NULL,
  `Cold_call` varchar(255) DEFAULT NULL,
  `Walkin` varchar(255) DEFAULT NULL,
  `Referral` varchar(255) DEFAULT NULL,
  `Reseller` varchar(255) DEFAULT NULL,
  `Repeat_` varchar(255) DEFAULT NULL,
  `Unk` varchar(255) DEFAULT NULL,
  `Google` varchar(255) DEFAULT NULL,
  `BB_now` varchar(255) DEFAULT NULL,
  `POC_reseller_name` varchar(255) DEFAULT NULL,
  `POC_reseller_org` varchar(255) DEFAULT NULL,
  `POC_reseller_phone` varchar(255) DEFAULT NULL,
  `POC_reseller_email` varchar(255) DEFAULT NULL,
  `POC_reseller_fee` varchar(255) DEFAULT NULL,
  `Internet` varchar(255) DEFAULT NULL,
  `Backup_internet` varchar(255) DEFAULT NULL,
  `Public_ips` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `Hosting` varchar(255) DEFAULT NULL,
  `Web_dev` varchar(255) DEFAULT NULL,
  `Domain_name_svcs` varchar(255) DEFAULT NULL,
  `Managed_services` varchar(255) DEFAULT NULL,
  `Consulting` varchar(255) DEFAULT NULL,
  `Bandwidth_req` varchar(255) DEFAULT NULL,
  `IP_ammount` varchar(255) DEFAULT NULL,
  `Bandwidth_current` varchar(255) DEFAULT NULL,
  `Current_provider` varchar(255) DEFAULT NULL,
  `Current_monthly_charge` varchar(255) DEFAULT NULL,
  `Current_technology` varchar(255) DEFAULT NULL,
  `TowerCoverage` varchar(255) DEFAULT NULL,
  `Serviceability` varchar(255) DEFAULT NULL,
  `Quote` varchar(255) DEFAULT NULL,
  `Contract_ex` varchar(255) DEFAULT NULL,
  `Setup_fee_receipt` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
