-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 07:18 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carersystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `carers_id` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `weekdays` varchar(100) NOT NULL,
  `weekends` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `client_id`, `service`, `carers_id`, `start_date`, `start_time`, `end_time`, `weekdays`, `weekends`, `note`, `date`, `time`) VALUES
(11, '5', 'care for older people,Specialist care,Domestic service', '2', '2019-08-24', '12:00', '2:00', 'monday,tuesday,wednesday,thursday,friday', 'saturday,sunday', 'appoinment ', '01/08/2019', '08:38:21 am'),
(10, '3', 'Specialist care,Domestic service', '2', '2019-08-08', '11', '11', 'monday,tuesday,wednesday,thursday,friday', 'saturday,sunday', 'sss', '01/08/2019', '05:06:19 am'),
(12, '3', 'Specialist care,Domestic service,Shopping', '2', '2019-08-14', '9:00', '12:00', 'monday', 'saturday', 'two days only ', '01/08/2019', '09:41:58 am'),
(13, '3', 'Specialist care,Domestic service,Shopping', '2', '2019-08-14', '9:00', '12:00', 'monday', 'saturday', 'two days only ', '01/08/2019', '09:42:14 am'),
(14, '3', 'care for older people,Specialist care', '2', '2019-08-17', '10:00', '12:00', 'friday', 'saturday', 'two days', '01/08/2019', '09:43:20 am'),
(15, '3', 'care for older people,Specialist care', '2', '2019-08-17', '10:00', '12:00', 'friday', 'saturday', 'two days', '01/08/2019', '09:43:22 am'),
(16, '3', 'care for older people,Specialist care', '2', '2019-08-17', '10:00', '12:00', 'friday', 'saturday', 'two days', '01/08/2019', '09:44:46 am');

-- --------------------------------------------------------

--
-- Table structure for table `carers`
--

CREATE TABLE `carers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bod` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carers`
--

INSERT INTO `carers` (`id`, `name`, `phone`, `email`, `gender`, `bod`, `skill`, `image`, `address`, `postcode`, `description`, `status`, `date`, `time`) VALUES
(2, 'atul nain', '9033493218', 'a@gmail.com', 'female', '2019-07-26', 'communication Skill', 'carers/1564390613.', 'anand', '388001', 'ddddddd', '1', '29/07/2019', '08:56:53 am');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `landline` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `dob`, `phone`, `landline`, `address`, `package_name`, `note`, `status`, `date`, `time`) VALUES
(5, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 2, 'a', 'a'),
(6, 'b', 'b', 'b', 'bb', 'b', 'b', 'b', 'b', 2, 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `service`, `price`, `start_date`, `end_date`, `description`, `status`, `date`, `time`) VALUES
(3, 'silver', 'Extra Care,Reablement', '2000', '2019-07-26', '2019-08-02', 'care', 2, '30/07/2019', '06:36:06 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(6) NOT NULL,
  `status` varchar(2) NOT NULL,
  `loginsession` varchar(255) NOT NULL,
  `utype` varchar(2) NOT NULL,
  `note` text NOT NULL,
  `fcmid` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`, `pass`, `phone`, `address`, `city`, `zip`, `status`, `loginsession`, `utype`, `note`, `fcmid`) VALUES
(1, 'BAPS Mahavidhyalaya', 'admin@vijayprajapati.in', 'e6e061838856bf47e1de730719fb2609', 'admin@123', '9033277918', 'Address', 'Anand', '388001', '1', '1550464517', '1', '', ''),
(2, 'Vijay', 'vijay@vijayprajapati.in', '087625f1511b01d6eb0a8ba6d6f2b9c8', 'vijay9776', '9033277918', 'Khambhat', 'khambhat', 'zip', '1', '', '2', 'note', 'cuakxnTLTDw:APA91bHFfdxCiX-Kd9bqUP2N8TeLIzwm4mzPfVD5zYG30PoLTnelxGhSxGENYZuLeI9kPhZrVCaHsBiu8O1U7_2DIUz81k4sQ3nXRWhT1Vu5JLT5zGQUk2hICv6IvVS7BpmKTiR0RMXi'),
(6, 'Niteshbhai', 'nitesh@gmail.com', '9e1b36b1851d116f828880415a6968a6', 'nitesh@123', '9898989898', 'Anand', 'Anand', '388001', '1', '', '7', 'Note', 'cjuWilEgzYY:APA91bHUwflgYBNwx9q3iwF3HO64E_hJIXoAVtXzv4pKEmnEtqUrMhfYUW5POmL_IvZxvY4maJPN3PdXuvq0ynq4c-e5t0ppJJtqMAFij5y2AoQbCGY03ff59oO66DcYtJYrOFIbT_5g'),
(7, 'Vivekbhai', 'vivek@gmail.com', '8a09052c9601178c546f1ee513920cf2', 'vivek@123', '9898989898', 'Anand', 'Anand', '388001', '1', '', '3', 'note', 'fPsxReVjZyA:APA91bFRqRCF33iArRUDhJWg-CBwFf3ASfE6cCKp-Y8LgGETvq6i4Bs1PV5_ch0arCf4kN8TnOE8yXVZGKAjf0dzJdk7a-l1X6l5Uy21eG40zxlIDzPH2n5iMmo6KtbL8wqdJixW7Zd1'),
(8, 'tejash', 'tejash@gmail.com', 'c1cbf647436ac05cb3905bb1cb05468f', 'tejash@123', '9825753709', 'saranpur', 'barvada', '332330', '1', '', '4', 'notin ', ''),
(9, 'keshav', 'keshav@gmail.com', '004dde3f831b96b24615edbc3f4d0f10', 'keshav@123', '9106788273', 'sarangpur', 'sarangpur', '382550', '3', '', '7', 'Only for Mobile', 'cvJahpZ3eW8:APA91bEdtgWFOdgeFKtM9a2xqkWJg4kDFhUSQmDjEPxlDRri1Ruj48D4tE4aoOOWRXpfmh8nalRxQ1ZjPBbmHsT1iwvDHYlKRIHx1vSC0iyvSC7RYft0i9JsxW8_M0cg8x1HVykSMx_u'),
(10, 'keshav', 'keshav@gmail.com', '004dde3f831b96b24615edbc3f4d0f10', 'keshav@123', '9723014918', 'sar', 'sar', '383421', '3', '', '7', '', 'cvJahpZ3eW8:APA91bEdtgWFOdgeFKtM9a2xqkWJg4kDFhUSQmDjEPxlDRri1Ruj48D4tE4aoOOWRXpfmh8nalRxQ1ZjPBbmHsT1iwvDHYlKRIHx1vSC0iyvSC7RYft0i9JsxW8_M0cg8x1HVykSMx_u'),
(11, 'kirtan', 'kirtan@gmail.com', '8fc98b4dee1b3bf85e7ce3959b8f6ceb', 'kirtan@123', '9828976542', 'xy', 'xy', '12', '1', '', '6', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carers`
--
ALTER TABLE `carers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `carers`
--
ALTER TABLE `carers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
