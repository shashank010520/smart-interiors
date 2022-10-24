-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 09:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `code` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`code`, `email_id`) VALUES
('CODE158', 'girish2k4@gmail.com'),
('CODE158', 'shashank@gmail.com'),
('CODE158', 'uday123@gmail.com'),
('CODE169', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `design_table`
--

CREATE TABLE `design_table` (
  `code` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_table`
--

INSERT INTO `design_table` (`code`, `price`, `description`, `image`, `type`) VALUES
('CODE158', 4000, 'Nice wall design.', 0x77616c6c312e6a706567, 'Wall Designs'),
('CODE169', 40000, '', 0x77616c6c382e6a7067, 'Wall Designs'),
('CODE300', 40000, '', 0x77616c6c392e6a7067, 'Wall Designs'),
('CODE503', 35000, '', 0x77616c6c31302e6a7067, 'Wall Designs'),
('CODE562', 3000, 'Nice Living Room design.', 0x372e6a7067, 'Living Room Designs'),
('CODE686', 35000, '', 0x77616c6c352e6a7067, 'Wall Designs'),
('CODE965', 30000, '', 0x77616c6c372e6a7067, 'Wall Designs');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `empid` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`empid`, `name`, `mobile`, `designation`, `email`, `dob`, `doj`, `department`, `salary`) VALUES
('EMP933', 'Shashank', 8197907034, 'Manager', 'shshank@gmail.com', '2000-05-01', '2021-01-25', 'Sales', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`name`, `email`, `message`) VALUES
('Giri S', 'girish2k4@gmail.com', 'Nice Application.');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `email_id`, `code`, `price`, `date`, `status`) VALUES
('ORDS466', 'test@gmail.com', ' CODE169', 40000, '2021-03-07', 'Complete'),
('ORDS549', 'uday123@gmail.com', ' CODE158', 4000, '2021-03-06', 'Complete'),
('ORDS646', 'uday123@gmail.com', ' CODE158', 4000, '2021-02-21', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `sid` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `service` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`sid`, `name`, `service`, `mobile`, `address`) VALUES
('SP730', 'Raju', 'Carpenter', 9087654321, 'RT Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `Name` varchar(50) NOT NULL,
  `Mobile_Number` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `property` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`Name`, `Mobile_Number`, `Email`, `Adress`, `Password`, `property`) VALUES
('Giri S', 9663265206, 'girish2k4@gmail.com', 'RT Nagar', 'girish123', ''),
('prathvish', 8956741256, 'prath@gmail.com', 'Rajajinagar', 'prathvish', 'independent house'),
('rahul', 23232323, 'rahul', 'Bengaluru', 'Abcd@123', 'office'),
('mjhg', 1234567891011236, 'ram', 'Bengaluru', 'qwerty', 'office'),
('Shashank', 8197907034, 'shashank@gmail.com', 'Kodigehalli gate', 'shashank', ''),
('TEST', 8095349246, 'test@gmail.com', '#52 Bengaluru, Karnataka, India.', 'Test123', 'Independent House'),
('uday', 8965247365, 'uday123@gmail.com', 'bangalore', 'udayisgand', 'independent house');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `design_table`
--
ALTER TABLE `design_table`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
