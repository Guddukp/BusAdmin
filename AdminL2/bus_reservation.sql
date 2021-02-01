-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 03:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `img`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'review1.jpg', 'Tarun', 'tarunyadav0972@gmail.com', 'Aayush@123', 'Aayush@123'),
(2, 'review2.jpg', 'Karan', 'tarunyada0972@gmail.com', 'Tyadav0972', 'Tyadav0972');

-- --------------------------------------------------------

--
-- Table structure for table `agent_details`
--

CREATE TABLE `agent_details` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `agent_management`
--

CREATE TABLE `agent_management` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `name` varchar(255) NOT NULL,
  `agency` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `subscription` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `street` varchar(1000) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_management`
--

INSERT INTO `agent_management` (`id`, `image`, `name`, `agency`, `contact`, `email`, `password`, `cpassword`, `subscription`, `age`, `wallet`, `street`, `city`, `state`) VALUES
(25, 'IMG-20181004-WA0010.jpg', 'MANJU YADAV', 'Public Travel', '7827205554', 'rohityadav0972@gmail.com', 'Rohit@123', 'Rohit@123', '', 'dsadadd', '', 'B-2 JJ COLONY  BINDAPUR POCKET-4 UTTAM NAGAR  BINDAPUR, J.J. COLONY Dwarka South West Delhi India 110059', 'South West', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `bus_management`
--

CREATE TABLE `bus_management` (
  `id` int(10) NOT NULL,
  `busagency` varchar(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `bus_number` varchar(255) NOT NULL,
  `bus_type` varchar(255) NOT NULL,
  `total_seats` varchar(255) NOT NULL,
  `available_seats_` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `start_time` time(6) NOT NULL,
  `drop_point` varchar(255) NOT NULL,
  `drop_time` time(6) NOT NULL,
  `ratings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_management`
--

INSERT INTO `bus_management` (`id`, `busagency`, `bus_name`, `bus_number`, `bus_type`, `total_seats`, `available_seats_`, `route`, `start_point`, `start_time`, `drop_point`, `drop_time`, `ratings`) VALUES
(1, 'yadav travels', 'yadav', 'A125252', 'AC', '57', '40', 'DLEHI KANPUR', 'DELHI', '00:00:00.000000', 'KANPUR', '20:09:33.000000', '555');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `posted_date` date NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `image`, `offer_name`, `posted_date`, `discription`) VALUES
(31, 'IMG-20181004-WA0010.jpg', '30/30', '2020-12-20', 'my name is tarun');

-- --------------------------------------------------------

--
-- Table structure for table `route_management`
--

CREATE TABLE `route_management` (
  `id` int(11) NOT NULL,
  `from` varchar(1000) NOT NULL,
  `to` varchar(2000) NOT NULL,
  `atime` datetime(6) NOT NULL,
  `dtime` varchar(6) NOT NULL,
  `stop` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `image`, `name`, `email`, `password`, `cpassword`, `birthdate`, `contact`, `position`, `street`, `city`, `state`) VALUES
(43, 'review3.jpg', 'Tarun yadav', 'punamyadav56565@gmail.com', 'Aayush@123', 'Aayush@123', '2020-12-23', '8738064591', 'supervisor', 'B-2 BINDAPUR', 'New Delhi', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooking`
--

CREATE TABLE `ticketbooking` (
  `id` int(11) NOT NULL,
  `userid` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `busid` varchar(1000) NOT NULL,
  `routeid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `street` varchar(1000) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`id`, `image`, `name`, `email`, `password`, `cpassword`, `gender`, `contact`, `street`, `city`, `state`) VALUES
(1, 'IMG-20181004-WA0007.jpg', 'Tarun', 'tarunyadav@gmail.com', '', '', 'Male', '8750588356', 'Bindapur Uttam nagar', 'New Delhi', 'Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_details`
--
ALTER TABLE `agent_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_management`
--
ALTER TABLE `agent_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_management`
--
ALTER TABLE `bus_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_management`
--
ALTER TABLE `route_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agent_details`
--
ALTER TABLE `agent_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agent_management`
--
ALTER TABLE `agent_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bus_management`
--
ALTER TABLE `bus_management`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `route_management`
--
ALTER TABLE `route_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
