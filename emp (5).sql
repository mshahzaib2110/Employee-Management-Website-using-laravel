-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 04:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$RMCWwOQRCu2B.nZ.EYNKR.IOVarhctfHbe5saNdEcCmW3.FNuQOKC', NULL, '2022-11-11 13:43:33'),
(3, 'Admin2', 'admin2@gmail.com', '$2y$10$ORuqEl1uZ7xKbAwhzRkaK.McW1g5FqeXH2R4VtJuCq2/s2OJL8AGO', '2022-12-01 16:38:10', '2022-12-01 16:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `appraisals`
--

CREATE TABLE `appraisals` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `punctuality` int(3) NOT NULL,
  `performance` int(3) NOT NULL,
  `communication` int(3) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appraisals`
--

INSERT INTO `appraisals` (`id`, `emp_id`, `punctuality`, `performance`, `communication`, `desc`) VALUES
(1, 29, 9, 10, 4, 'Ver good boy'),
(2, 29, 10, 3, 6, 'Not a good boy'),
(4, 47, 1, 5, 7, 'hardworking erson bu lile lazy and not on time but a god bo and wors hard but not enogh bt god boy'),
(6, 52, 1, 2, 2, 'just average');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `emp_id` int(11) NOT NULL,
  `checkin` datetime DEFAULT NULL,
  `late` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`emp_id`, `checkin`, `late`, `created_at`, `updated_at`) VALUES
(28, '2022-11-19 16:52:45', 1, '2022-11-19 16:52:45', '2022-11-19 16:52:45'),
(28, '2022-11-19 16:59:01', 1, '2022-11-19 16:59:01', '2022-11-19 16:59:01'),
(29, '2022-11-19 17:02:38', 1, '2022-11-19 17:02:38', '2022-11-19 17:02:38'),
(24, '2022-11-20 10:11:08', 1, '2022-11-20 10:11:08', '2022-11-20 10:11:08'),
(29, '2022-11-20 10:13:59', 1, '2022-11-20 10:13:59', '2022-11-20 10:13:59'),
(28, '2022-11-20 10:29:20', 1, '2022-11-20 10:29:20', '2022-11-20 10:29:20'),
(28, '2022-11-21 18:40:44', 1, '2022-11-21 18:40:44', '2022-11-21 18:40:44'),
(31, '2022-11-21 19:01:01', 1, '2022-11-21 19:01:01', '2022-11-21 19:01:01'),
(28, '2022-11-22 10:13:11', 1, '2022-11-22 10:13:11', '2022-11-22 10:13:11'),
(29, '2022-11-22 10:13:45', 1, '2022-11-22 10:13:45', '2022-11-22 10:13:45'),
(31, '2022-11-22 11:00:03', 1, '2022-11-22 11:00:03', '2022-11-22 11:00:03'),
(24, '2022-11-22 14:54:36', 1, '2022-11-22 14:54:36', '2022-11-22 14:54:36'),
(28, '2022-11-25 18:08:57', 1, '2022-11-25 18:08:57', '2022-11-25 18:08:57'),
(31, '2022-11-25 18:11:07', 1, '2022-11-25 18:11:08', '2022-11-25 18:11:08'),
(29, '2022-11-25 18:11:35', 1, '2022-11-25 18:11:35', '2022-11-25 18:11:35'),
(29, '2022-11-26 15:27:01', 1, '2022-11-26 15:27:01', '2022-11-26 15:27:01'),
(28, '2022-11-26 23:46:16', 1, '2022-11-26 23:46:16', '2022-11-26 23:46:16'),
(28, '2022-11-28 18:40:17', 1, '2022-11-28 18:40:17', '2022-11-28 18:40:17'),
(34, '2022-11-28 21:11:38', 1, '2022-11-28 21:11:38', '2022-11-28 21:11:38'),
(24, '2022-11-28 21:32:50', 1, '2022-11-28 21:32:50', '2022-11-28 21:32:50'),
(31, '2022-11-28 21:58:42', 1, '2022-11-28 21:58:42', '2022-11-28 21:58:42'),
(29, '2022-11-28 22:37:12', 1, '2022-11-28 22:37:12', '2022-11-28 22:37:12'),
(24, '2022-11-29 11:48:43', 1, '2022-11-29 11:48:43', '2022-11-29 11:48:43'),
(29, '2022-11-29 14:54:29', 1, '2022-11-29 14:54:29', '2022-11-29 14:54:29'),
(28, '2022-11-29 21:06:17', 1, '2022-11-29 21:06:17', '2022-11-29 21:06:17'),
(31, '2022-11-30 19:20:18', 1, '2022-11-30 19:20:18', '2022-11-30 19:20:18'),
(24, '2022-11-30 21:08:05', 1, '2022-11-30 21:08:05', '2022-11-30 21:08:05'),
(28, '2022-12-01 08:41:04', 1, '2022-12-01 08:41:04', '2022-12-01 08:41:04'),
(29, '2022-12-01 08:49:42', 1, '2022-12-01 08:49:42', '2022-12-01 08:49:42'),
(24, '2022-12-01 08:50:29', 0, '2022-12-01 08:50:29', '2022-12-01 08:50:29'),
(31, '2022-12-01 08:52:10', 0, '2022-12-01 08:52:10', '2022-12-01 08:52:10'),
(47, '2022-12-01 14:42:58', 1, '2022-12-01 14:42:58', '2022-12-01 14:42:58'),
(28, '2022-12-02 12:16:59', 1, '2022-12-02 12:16:59', '2022-12-02 12:16:59'),
(34, '2022-12-02 12:26:42', 1, '2022-12-02 12:26:42', '2022-12-02 12:26:42'),
(29, '2022-12-02 16:50:46', 1, '2022-12-02 16:50:46', '2022-12-02 16:50:46'),
(24, '2022-12-02 17:27:57', 1, '2022-12-02 17:27:57', '2022-12-02 17:27:57'),
(24, '2022-12-03 10:41:16', 1, '2022-12-03 10:41:16', '2022-12-03 10:41:16'),
(24, '2022-12-04 12:06:25', 1, '2022-12-04 12:06:25', '2022-12-04 12:06:25'),
(24, '2022-12-07 19:24:31', 1, '2022-12-07 19:24:31', '2022-12-07 19:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_employees`
--

CREATE TABLE `deleted_employees` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `deleted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deleted_employees`
--

INSERT INTO `deleted_employees` (`id`, `f_name`, `l_name`, `deleted_date`) VALUES
(53, 'Virat', 'kholi', '2022-12-07'),
(54, 'Syed', 'ahsan', '2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `manager_id`, `created_at`, `updated_at`) VALUES
(3, 'Human Resources', 29, NULL, '2022-12-01 16:47:15'),
(4, 'Finance', 24, NULL, NULL),
(5, 'Accounts', 28, NULL, NULL),
(10, 'Support', 31, '2022-11-27 16:08:11', '2022-11-27 16:08:11'),
(15, 'Cat', 45, '2022-12-01 14:39:35', '2022-12-01 14:39:35'),
(16, 'Sales', 48, '2022-12-01 18:23:33', '2022-12-01 18:23:33'),
(18, 'trade', 51, '2022-12-07 19:28:44', '2022-12-07 19:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `hiredate` date NOT NULL,
  `salary` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `f_name`, `l_name`, `city`, `address`, `age`, `dept_id`, `hiredate`, `salary`, `email`, `password`, `created_at`, `updated_at`) VALUES
(24, 'sohaib', 'ashraf', 'karachi', 'Azizabad', 34, 4, '2022-11-04', 2300, 'sohaib@gmail.com', '$2y$10$7QMtwkaox3W6A1lTJ/1c3uIPizybwNEhsSPIp3NZKFg2MOlHairvC', '2022-11-16 14:03:20', '2022-12-02 16:32:24'),
(28, 'Rehan', 'Nadir', 'Karaci', 'defence', 45, 5, '2022-11-11', 80000, 'rehan@gmail.com', '$2y$10$ytGc7Y18HLktzvRiYBlR9efwEd6DV/Pp31ZMhTbHmQeBDlXXEB016', '2022-11-17 10:03:57', '2022-12-02 16:33:26'),
(29, 'Ali', 'Jodat', 'Islamaabd', NULL, 33, 3, '2022-10-06', 9000, 'ali@gmail.com', '$2y$10$h3aTfXPVhY.rGCN6I3P8/.1QuOkTahIk1CxPbjhJ3Aep3xBaCeYKa', '2022-11-18 13:15:55', '2022-12-02 12:03:17'),
(31, 'basil', 'Ali', 'lahore', NULL, 23, 10, '2022-11-02', 4500, 'basil@gmail.com', '$2y$10$7Oopdv.outCTtS4UxeeK4uH4Z5ZUstG4SsECuyPGtJeNWk1YciWka', '2022-11-21 18:20:26', '2022-12-02 12:06:26'),
(34, 'Ahmed', 'Jodat', 'London', NULL, 24, 3, '2022-11-02', 30000, 'ahmed@gmail.com', '$2y$10$8aEgGyRVCI8GSDvxZKyNZeoTLw2OVuv0HnBcZWwtDg2nNfQIemXsS', '2022-11-25 20:44:14', '2022-12-04 12:19:07'),
(45, 'Sufyan', 'Ashraf', 'Multan', NULL, 44, 15, '2022-11-27', 40000, 'sufyan@gmail.com', '$2y$10$puMwgEoszHl2p8zMBM3yyOi/NAxytNJe4j8xsp8FBNl4yA5y6X4v2', '2022-12-01 14:37:19', '2022-12-02 12:05:20'),
(46, 'Abde', 'Ali', 'lahore', NULL, 80, 4, '2022-07-14', 40000, 'abde@gmail.com', '$2y$10$o6HRtrb1FbWtfWpTKZnTmuR.eJI8uK/f8jnqjd7Az8fEv4JjYjtW2', '2022-12-01 14:38:07', '2022-12-02 17:29:42'),
(47, 'Aliuddin', 'Khawaja', 'Islamabad', NULL, 50, 5, '2022-11-29', 90000, 'aliudin@gmail.com', '$2y$10$C/PU/5jemxn.5hED3rZ7VuhVMTNO8NPCDnbw1sGnbAGQhXg.P2Xbi', '2022-12-01 14:40:53', '2022-12-01 14:45:37'),
(48, 'Bilal', 'Khan', 'Isamabad', NULL, 24, 16, '2022-11-28', 20000, 'bilal@gmail.com', '$2y$10$XtBit3nn7carQp60Z5Wja.ptTNPU7TpW4DzLgtzBoKq6wbXV6urfS', '2022-12-01 17:53:21', '2022-12-02 12:07:55'),
(51, 'Seikh', 'umar', 'Multan', NULL, 33, 18, '2023-01-05', 70000, 'umer@gmail.com', '$2y$10$7i11VgGG0lco.Wtp3h/.re58rsASh4gNUVt2nzE95tfstlZS3qMc6', '2022-12-07 19:41:04', '2022-12-07 19:41:04'),
(52, 'Basit', 'subhan', 'lahore', NULL, 34, 18, '2022-12-28', 60000, 'basit@gmail.com', '$2y$10$LMuDNRGxDedErx59OXEItunN8b1EqUrgjT.PhobYSwHVEpYaIZlAW', '2022-12-07 19:42:38', '2022-12-07 19:42:38');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `deleted_emps` AFTER DELETE ON `employee` FOR EACH ROW insert into deleted_employees values(OLD.ID,OLD.F_NAME,OLD.L_NAME,Now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `l_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`l_id`, `emp_id`, `reason`, `detail`, `from_date`, `to_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 29, 'Sick', 'Very Very Sick', '2022-11-19', '2022-12-01', 0, '2022-11-29 16:16:47', '2022-11-29 16:16:47'),
(2, 29, 'Illness', 'Ver ILL', '2022-11-18', '2022-12-09', 1, '2022-11-29 16:17:35', '2022-11-29 16:17:35'),
(3, 29, 'homework', 'To do work', '2022-11-04', '2022-11-12', 1, '2022-11-29 16:30:07', '2022-11-29 16:30:07'),
(4, 28, 'Make Project', 'Make Prject of many subjects', '2022-11-11', '2022-11-19', 1, '2022-11-29 17:08:40', '2022-11-29 17:08:40'),
(5, 29, 'Going picnic', 'Going to seaview', '2022-11-26', '2022-12-03', 0, '2022-11-29 18:58:22', '2022-11-29 18:58:22'),
(6, 31, 'Hospital', 'Go to doctor', '2022-11-30', '2022-12-08', 0, '2022-12-01 12:48:40', '2022-12-01 12:48:40'),
(7, 34, 'homework', 'To do work', '2022-12-01', '2022-12-03', 0, '2022-12-02 12:26:00', '2022-12-02 12:26:00'),
(8, 24, 'Going picnic', 'Going to Hotel', '2022-11-29', '2022-12-10', 1, '2022-12-02 15:39:31', '2022-12-02 15:39:31'),
(9, 46, 'Illness', 'Very Very Sick', '2022-11-30', '2022-12-10', 0, '2022-12-02 17:29:24', '2022-12-02 17:29:24'),
(10, 52, 'Illness', 'To do work', '2022-12-09', '2022-11-29', 1, '2022-12-07 19:50:17', '2022-12-07 19:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meeting_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `meeting_day` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `meeting_with` varchar(30) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`meeting_id`, `emp_id`, `meeting_day`, `start_time`, `end_time`, `meeting_with`, `agenda`, `created_at`, `updated_at`) VALUES
(1, 31, '2022-11-30', '18:52:00', '19:52:00', 'Ceo', 'You will be fired', '2022-11-30 18:52:42', '2022-11-30 18:52:42'),
(2, 28, '2022-11-28', '20:05:00', '21:05:00', 'Sir Ahmed', 'Db Lab evaluation', '2022-11-30 19:05:50', '2022-11-30 19:05:50'),
(3, 24, '2022-11-29', '20:13:00', '21:13:00', 'Miss Eman', 'Db Assignment', '2022-11-30 19:13:27', '2022-11-30 19:13:27'),
(5, 31, '2022-11-09', '19:51:00', '20:51:00', 'Sir Ahmed', 'You will be fired', '2022-11-30 19:51:05', '2022-11-30 19:51:05'),
(6, 31, '2022-12-09', '21:53:00', '22:53:00', 'Miss Eman', 'Db Assignment', '2022-11-30 19:51:55', '2022-11-30 19:51:55'),
(7, 31, '2022-11-01', '21:53:00', '21:54:00', 'sir Abdul Rehman', 'SDA project', '2022-11-30 19:53:41', '2022-11-30 19:53:41'),
(10, 47, '2022-12-16', '15:44:00', '16:44:00', 'Ceo', 'Db Lab evaluation', '2022-12-01 14:44:33', '2022-12-01 14:44:33'),
(11, 46, '2022-12-03', '14:20:00', '15:20:00', 'Sir Ahmed', 'Discuss Project', '2022-12-04 14:20:00', '2022-12-04 14:20:00'),
(12, 31, '2022-12-08', '14:32:00', '15:32:00', 'Sir Ahmed', 'Db Assignment', '2022-12-04 14:32:16', '2022-12-04 14:32:16'),
(13, 31, '2022-11-30', '14:32:00', '15:32:00', 'Ceo', 'Db Lab evaluation', '2022-12-04 14:32:48', '2022-12-04 14:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `emp_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `deadline` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`emp_id`, `p_id`, `manager_id`, `title`, `description`, `deadline`, `status`, `created_at`, `updated_at`) VALUES
(29, 1, 24, 'File1', 'Make file1', '2022-11-11', 1, '2022-11-28 19:56:38', '2022-11-28 19:56:38'),
(29, 3, 24, 'aa', 'aa', '2022-11-03', 1, '2022-11-28 20:22:42', '2022-11-28 20:22:42'),
(29, 4, 24, 'aas', 'assss', '2022-11-25', 1, '2022-11-28 20:23:02', '2022-11-28 20:23:02'),
(31, 1, 24, 'hello', 'aaass', '2022-11-12', 1, '2022-11-28 19:58:00', '2022-11-28 19:58:00'),
(31, 3, 24, 'aas', 'sass', '2022-12-03', 0, '2022-11-28 20:22:53', '2022-11-28 20:22:53'),
(31, 5, 24, 'Make Laravel website', 'Make Laravel website neat and clean', '2022-12-02', 1, '2022-11-28 20:41:00', '2022-11-28 20:41:00'),
(31, 6, 24, 'Make Pdc', 'Make Pdc Project', '2022-11-10', 1, '2022-11-28 21:47:53', '2022-11-28 21:47:53'),
(34, 2, 29, 'Mak edc', 'Make Pdc Project', '2022-12-29', 0, '2022-12-04 14:07:07', '2022-12-04 14:07:07'),
(46, 1, 24, 'Make algo assignment', 'Make project one', '2022-12-16', 1, '2022-12-02 15:40:34', '2022-12-02 15:40:34'),
(46, 2, 24, 'Make algo', 'Make algo Project quick', '2022-12-03', 0, '2022-12-02 18:30:03', '2022-12-02 18:30:03'),
(46, 3, 24, 'Make pdc', 'Pdc project', '2022-11-28', 0, '2022-12-02 18:30:22', '2022-12-02 18:30:22'),
(46, 4, 24, 'Sda', 'Project quick', '2022-12-03', 0, '2022-12-03 10:41:33', '2022-12-03 10:41:33'),
(46, 5, 24, 'Dba', 'Make quick', '2022-12-09', 1, '2022-12-03 10:42:20', '2022-12-03 10:42:20'),
(47, 4, 28, 'Make Sa proposal', 'present quicky', '2022-12-17', 0, '2022-12-02 12:16:43', '2022-12-02 12:16:43'),
(48, 1, 45, 'Make PDc', 'Make Project Quick', '2022-12-16', 0, '2022-12-01 19:03:46', '2022-12-01 19:03:46'),
(52, 1, 51, 'pdc', 'Prject', '2022-12-29', 1, '2022-12-07 19:48:09', '2022-12-07 19:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `t_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `trainer` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`t_id`, `emp_id`, `topic`, `start_date`, `end_date`, `trainer`, `created_at`, `updated_at`) VALUES
(2, 24, 'Php', '2022-12-02', '2022-12-08', 'Sir Ahmed', '2022-11-30 20:25:31', '2022-11-30 20:25:31'),
(3, 24, 'Mysql', '2022-10-25', '2022-10-27', 'Sir AbdulRehman', '2022-11-30 20:26:06', '2022-11-30 20:26:06'),
(5, 34, 'Php', '2022-12-01', '2022-12-02', 'Sir AbdulRehman', '2022-11-30 20:36:59', '2022-11-30 20:36:59'),
(6, 34, 'Laravel advance', '2022-12-04', '2022-12-14', 'Sir AbdulRehman', '2022-12-04 12:18:20', '2022-12-04 12:18:20'),
(7, 45, 'Php', '2022-12-03', '2022-12-09', 'Sir AbdulRehman', '2022-12-04 14:28:16', '2022-12-04 14:28:16'),
(8, 31, 'Php', '2022-12-04', '2022-12-16', 'Sir Ahmed', '2022-12-04 14:29:02', '2022-12-04 14:29:02'),
(9, 31, 'Laravel advance', '2022-12-01', '2022-12-02', 'Sir AbdulRehman', '2022-12-04 14:31:19', '2022-12-04 14:31:19'),
(10, 31, 'Mysql', '2022-12-05', '2022-12-13', 'Sir Ahmed', '2022-12-04 14:31:46', '2022-12-04 14:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appraisals`
--
ALTER TABLE `appraisals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk17` (`emp_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `updated_at` (`updated_at`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `manager_id_4` (`manager_id`),
  ADD KEY `manager_id` (`manager_id`),
  ADD KEY `manager_id_2` (`manager_id`),
  ADD KEY `manager_id_3` (`manager_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `dept` (`dept_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`emp_id`,`p_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appraisals`
--
ALTER TABLE `appraisals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appraisals`
--
ALTER TABLE `appraisals`
  ADD CONSTRAINT `fk17` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`manager_id`) REFERENCES `employee` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `fk14` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk11` FOREIGN KEY (`manager_id`) REFERENCES `department` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `fk16` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
