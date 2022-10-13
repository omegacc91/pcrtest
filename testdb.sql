-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2022 at 02:56 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `username`, `password`) VALUES
(12, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `dorm` varchar(100) NOT NULL,
  `college` varchar(18) NOT NULL,
  `telephone` varchar(18) NOT NULL,
  `class` varchar(50) NOT NULL,
  `counseller` varchar(50) NOT NULL,
  `test_date` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `fullname`, `dorm`, `college`, `telephone`, `class`, `counseller`, `test_date`) VALUES
(10, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:13:38'),
(11, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:20:32'),
(12, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:22:06'),
(13, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:23:18'),
(14, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:23:20'),
(15, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:40:09'),
(16, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:40:34'),
(17, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:41:09'),
(18, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:41:46'),
(19, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:42:01'),
(20, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:42:23'),
(21, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:43:05'),
(22, '李飞', '12栋202', '医学院', '17815055291', '软件2101', '张三', '2022-09-16 06:43:10'),
(23, '王霞', '20栋302', '机电学院', '17815055293', '机械2102', '张三', '2022-09-18 06:14:09'),
(24, '李飞', '', '医学院', '17815055291', '', '张三', '2022-09-19 07:29:15'),
(25, '李飞', '', '教育学院', '17815055293', '软件2101', '张三', '2022-09-21 12:52:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
