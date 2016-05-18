-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 01:58 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_monitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `server_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `port` int(10) UNSIGNED NOT NULL,
  `protocol` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `server_id`, `name`, `uri`, `port`, `protocol`, `created_at`, `updated_at`) VALUES
(10, 3, 'Student Faculty Grade Entry', 'FacultyGradeEntry', 8444, 'https', '2016-05-17 17:18:27', '2016-05-17 17:18:27'),
(11, 1, 'Student API', 'StudentApi', 8444, 'https', '2016-05-17 17:51:57', '2016-05-17 17:51:57'),
(12, 1, 'Student Overall', 'StudentOverall', 8443, 'https', '2016-05-17 17:52:26', '2016-05-17 17:52:26'),
(13, 1, 'Student Academic History', 'StudentAcademicHistory', 8443, 'https', '2016-05-17 17:53:09', '2016-05-17 17:53:09'),
(14, 2, 'Student Registration SSB', 'StudentRegistrationSSB', 8443, 'https', '2016-05-17 17:54:00', '2016-05-17 17:54:00'),
(15, 1, 'Student Registration', 'StudentRegistration', 8443, 'https', '2016-05-17 17:54:30', '2016-05-17 17:54:30'),
(16, 1, 'Student Attendance Tracking', 'StudentAttendanceTracking', 8444, 'https', '2016-05-17 17:55:08', '2016-05-17 17:55:08'),
(17, 2, 'Student Attendance Tracking Faculty SSB', 'FacultyAttendanceTrackingSSB', 8444, 'https', '2016-05-17 17:55:53', '2016-05-17 17:55:53'),
(18, 2, 'Student Attendance Tracking Student SSB', 'StudentAttendanceTrackingSSB', 8444, 'https', '2016-05-17 17:56:35', '2016-05-17 17:56:35'),
(19, 2, 'Position Description', 'PositionDesc', 8443, 'https', '2016-05-17 17:57:09', '2016-05-17 17:57:09'),
(20, 2, 'Employee Profile', 'EmployeeProfile', 8443, 'https', '2016-05-17 17:57:42', '2016-05-17 17:57:42'),
(21, 1, 'eTranscript API', 'eTranscriptAPI', 8444, 'https', '2016-05-17 17:58:15', '2016-05-17 17:58:15'),
(22, 2, 'Student SSB', 'StudentSSB', 8443, 'https', '2016-05-17 17:59:02', '2016-05-17 17:59:02'),
(23, 2, 'Student Advisor', 'StudentAdvisorSSB', 8444, 'https', '2016-05-17 17:59:43', '2016-05-17 17:59:43'),
(24, 1, 'General Event Managment', 'EventManagement', 8443, 'https', '2016-05-17 18:00:25', '2016-05-17 18:00:25'),
(25, 2, 'General Event Management SSB', 'EventManagement', 8444, 'https', '2016-05-17 18:00:51', '2016-05-17 18:00:51'),
(26, 1, 'Student Class Schedule', 'ClassSchedule', 8444, 'https', '2016-05-17 18:01:53', '2016-05-17 18:01:53'),
(27, 1, 'Student Course Catalog', 'CourseCatalog', 8080, 'http', '2016-05-17 18:02:23', '2016-05-17 18:02:23'),
(28, 6, 'Student API', 'StudentAPI', 8443, 'https', '2016-05-17 18:04:59', '2016-05-17 18:04:59'),
(29, 5, 'Student Overall', 'StudentOverall', 8443, 'https', '2016-05-17 18:05:28', '2016-05-17 18:05:28'),
(30, 5, 'Student Academic History', 'AcademicHistory', 8444, 'https', '2016-05-17 18:06:00', '2016-05-17 18:06:00'),
(31, 3, 'Student Faculty Grade Entry', 'FacultyGradeEntry', 8444, 'https', '2016-05-17 18:06:30', '2016-05-17 18:06:30'),
(32, 4, 'Student Registration SSB', 'StudentRegistrationSSB', 8443, 'https', '2016-05-17 18:07:10', '2016-05-17 18:07:10'),
(33, 5, 'Student Registration', 'StudentRegistration', 8444, 'https', '2016-05-17 18:07:32', '2016-05-17 18:07:32'),
(34, 5, 'Student Attendance Tracking', 'AttendanceTracking', 8443, 'https', '2016-05-17 18:08:26', '2016-05-17 18:08:26'),
(35, 4, 'Student Attendance Tracking Faculty SSB', 'FacultyAttendanceTrackingSSB', 8444, 'https', '2016-05-17 18:08:57', '2016-05-17 18:08:57'),
(36, 3, 'Student Attendance Tracking Student SSB', 'StudentAttendanceTrackingSSB', 8444, 'https', '2016-05-17 18:09:32', '2016-05-17 18:09:32'),
(37, 3, 'Position Description', 'PositionDesc', 8444, 'https', '2016-05-17 18:10:03', '2016-05-17 18:10:03'),
(38, 4, 'Employee Profile', 'EmployeeProfile', 8444, 'https', '2016-05-17 18:10:29', '2016-05-17 18:10:29'),
(39, 6, 'eTranscript API', 'eTranscriptAPI', 8443, 'https', '2016-05-17 18:10:50', '2016-05-17 18:10:50'),
(40, 3, 'Student SSB', 'StudentSSB', 8443, 'https', '2016-05-17 18:11:16', '2016-05-17 18:11:16'),
(41, 3, 'Student Advisor', 'StudentAdvisorSSB', 8443, 'https', '2016-05-17 18:12:10', '2016-05-17 18:12:10'),
(42, 5, 'General Event Managment', 'EventManagement', 8443, 'https', '2016-05-17 18:12:34', '2016-05-17 18:12:34'),
(43, 3, 'General Event Management SSB', 'EventManagementSSB', 8443, 'https', '2016-05-17 18:13:00', '2016-05-17 18:13:00'),
(44, 5, 'Student Class Schedule', 'ClassSchedule', 8444, 'https', '2016-05-17 18:13:21', '2016-05-17 18:13:21'),
(45, 5, 'Student Course Catalog', 'CourseCatalog', 8444, 'https', '2016-05-17 18:13:40', '2016-05-17 18:13:40'),
(46, 7, 'Jenkins', '', 8080, 'http', '2016-05-17 18:14:40', '2016-05-17 18:14:40'),
(47, 7, 'Ellucian Solution Manager', 'admin', 8081, 'http', '2016-05-17 18:15:23', '2016-05-17 18:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_12_175543_create_application_table', 1),
('2016_05_12_175604_create_server_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(10) UNSIGNED NOT NULL,
  `hostname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `env` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `hostname`, `env`, `created_at`, `updated_at`) VALUES
(1, 'rhelxead.sjfc.edu', 'DEV', '2016-05-13 19:13:12', '2016-05-13 19:13:12'),
(2, 'rhelxess1-dev.sjfc.edu', 'DEV', '2016-05-13 19:45:52', '2016-05-13 19:45:52'),
(3, 'rhelxess1-pprd.sjfc.edu', 'PPRD', '2016-05-14 20:36:00', '2016-05-14 20:36:00'),
(4, 'rhelxess2-pprd.sjfc.edu', 'PPRD', '2016-05-17 17:47:11', '2016-05-17 17:47:11'),
(5, 'rhelxead1-pprd.sjfc.edu', 'PPRD', '2016-05-17 17:47:29', '2016-05-17 17:47:29'),
(6, 'rhelxeas1-pprd.sjfc.edu', 'PPRD', '2016-05-17 17:48:11', '2016-05-17 17:48:11'),
(7, 'rhelxean.sjfc.edu', 'PROD', '2016-05-17 17:48:28', '2016-05-17 17:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_server_id_index` (`server_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `servers_hostname_unique` (`hostname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
