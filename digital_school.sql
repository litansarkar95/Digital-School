-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2026 at 01:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `year_name` varchar(50) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `is_current` tinyint(1) DEFAULT 0,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `organization_id`, `branch_id`, `year_name`, `start_date`, `end_date`, `is_current`, `status`, `created_at`) VALUES
(2, 1, 1, '2026', 1767808800, 1796666400, 1, 'active', '2026-08-12 08:18:36'),
(3, 1, 1, '2025', 1785520800, 1786471200, 0, 'active', '2026-08-12 08:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  `category_slug` varchar(100) DEFAULT 'others',
  `mobile_no` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `signature` varchar(255) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  `language` varchar(50) NOT NULL DEFAULT 'english',
  `invoice_template` int(11) NOT NULL DEFAULT 1,
  `expiry_date` date DEFAULT NULL,
  `subscription_status` tinyint(1) DEFAULT 1 COMMENT '1=Active, 0=Expired/Inactive',
  `plan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `organization_id`, `name`, `category_slug`, `mobile_no`, `email`, `website`, `address`, `picture`, `signature`, `is_active`, `create_date`, `language`, `invoice_template`, `expiry_date`, `subscription_status`, `plan_id`) VALUES
(1, 1, 'Labiba IT', 'others', '01829107469', 'labibait4@gmail.com', 'www.labibait.com', 'Tangail, Dhaka , Bangaladesh', 'labibait.png', 'signature.png', 1, 0, 'english', 1, '2029-04-12', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class` varchar(60) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Active, 0 = Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `organization_id`, `branch_id`, `class`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Two', 1, '2026-08-11 10:49:42', '2026-08-11 10:49:42'),
(3, 1, 1, 'One', 1, '2026-08-13 04:33:35', '2026-08-13 04:33:35'),
(4, 1, 1, 'Three', 1, '2026-08-13 04:33:49', '2026-08-13 04:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL COMMENT 'এই সেকশনের ক্লাস টিচার বা ইনচার্জ',
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Active, 0 = Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`id`, `organization_id`, `branch_id`, `class_id`, `section_id`, `teacher_id`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 2, 1, NULL, 1, '2026-08-11 10:59:11', '2026-08-11 10:59:11'),
(6, 1, 1, 2, 2, NULL, 1, '2026-08-11 10:59:11', '2026-08-11 10:59:11'),
(9, 1, 1, 3, 1, NULL, 1, '2026-08-13 04:33:35', '2026-08-13 04:33:35'),
(10, 1, 1, 3, 2, NULL, 1, '2026-08-13 04:33:35', '2026-08-13 04:33:35'),
(13, 1, 1, 4, 1, NULL, 1, '2026-08-19 11:11:19', '2026-08-19 11:11:19'),
(14, 1, 1, 4, 2, NULL, 1, '2026-08-19 11:11:19', '2026-08-19 11:11:19'),
(15, 1, 1, 4, 4, NULL, 1, '2026-08-19 11:11:19', '2026-08-19 11:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) UNSIGNED NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `examGroup` varchar(100) DEFAULT NULL,
  `examDate` int(11) NOT NULL,
  `sessionyearID` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `sortOrder` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `created_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `organization_id`, `branch_id`, `name`, `examGroup`, `examDate`, `sessionyearID`, `note`, `sortOrder`, `status`, `created_date`) VALUES
(2, 1, 1, 'mId exam', '111', 1786989600, 2, '111', 111, 1, 1787050774),
(3, 1, 1, 'dr', 'ee', 1786989600, 2, 'eee', 0, 1, 1787050966);

-- --------------------------------------------------------

--
-- Table structure for table `exam_others`
--

CREATE TABLE `exam_others` (
  `id` int(11) UNSIGNED NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `examID` int(11) UNSIGNED NOT NULL,
  `otherExamID` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_others`
--

INSERT INTO `exam_others` (`id`, `organization_id`, `branch_id`, `examID`, `otherExamID`) VALUES
(1, 1, 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) UNSIGNED NOT NULL,
  `organization_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `grade` varchar(20) NOT NULL,
  `point` decimal(4,2) NOT NULL,
  `mark_from` decimal(5,2) NOT NULL,
  `mark_upto` decimal(5,2) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `sortOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `organization_id`, `branch_id`, `grade`, `point`, `mark_from`, `mark_upto`, `note`, `sortOrder`) VALUES
(1, 1, 1, 'A+', 5.00, 80.00, 100.00, 'Excellent', 0),
(2, 1, 1, 'A', 4.50, 75.00, 79.00, 'Very Good', 0),
(3, 1, 1, 'A-', 4.00, 70.00, 74.00, 'Good', 0),
(4, 1, 1, 'B', 3.50, 65.00, 69.00, 'Satisfactory', 0),
(5, 1, 1, 'C', 3.00, 60.00, 64.00, 'Average', 0),
(6, 1, 1, 'D', 2.00, 50.00, 59.00, 'Pass', 0),
(7, 1, 1, 'F', 0.00, 0.00, 49.00, 'Fail', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `guardian_is` varchar(50) NOT NULL DEFAULT 'Father',
  `father_name` varchar(100) DEFAULT NULL,
  `father_phone` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_phone` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_relation` varchar(100) DEFAULT NULL,
  `guardian_phone` varchar(100) DEFAULT NULL,
  `present_address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `organization_id`, `guardian_is`, `father_name`, `father_phone`, `father_occupation`, `mother_name`, `mother_phone`, `mother_occupation`, `guardian_name`, `guardian_relation`, `guardian_phone`, `present_address`, `created_at`) VALUES
(1, 1, 'Father', 'x', 's', 's', 's', 's', 's', '', '', '', 's', '2026-08-12 09:52:23'),
(2, 1, 'Father', '33', '334', '445', '55', '55', '4', '3', 'Father', '334', '44', '2026-08-15 08:54:35'),
(3, 1, 'Father', '22', '22', '22', '222', '22', '22', '22', 'Father', '22', 'Dhakaa', '2026-08-19 06:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL,
  `otp_code` varchar(20) DEFAULT NULL,
  `otp_expiry` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1(active), 0(deactivate)',
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(45) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `organization_id`, `branch_id`, `user_id`, `username`, `email`, `phone_no`, `password`, `role`, `otp_code`, `otp_expiry`, `remember_token`, `active`, `last_login`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 'system', NULL, NULL, '$2y$10$sYVcvML0jteteUdNfzNCyephsQ.KQxvyXXXNMEWNMHV8UoZLAxf1i', 1, NULL, NULL, NULL, 1, '2026-08-10 16:19:45', NULL, '2026-07-13 20:16:59', '2026-08-10 16:19:45'),
(2, 1, 1, 2, 'admin', NULL, NULL, '$2y$10$sYVcvML0jteteUdNfzNCyephsQ.KQxvyXXXNMEWNMHV8UoZLAxf1i', 2, NULL, NULL, NULL, 1, '2026-08-19 15:01:41', NULL, '2026-07-13 20:16:59', '2026-08-19 15:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `agent` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `organization_id`, `branch_id`, `message`, `record_id`, `user_id`, `action`, `ip_address`, `platform`, `agent`, `time`, `created_at`) VALUES
(1, 1, 1, 'New Record inserted On exam id 2', 2, 2, 'Insert', '::1', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2026-08-18 10:59:34', '2026-08-18'),
(2, 1, 1, 'New Record inserted On exam id 3', 3, 2, 'Insert', '::1', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2026-08-18 11:02:46', '2026-08-18'),
(3, 1, 1, 'New Record inserted On exam_others id 1', 1, 2, 'Insert', '::1', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2026-08-18 11:02:46', '2026-08-18'),
(4, 1, 1, 'New Record inserted On subjects id 1', 1, 2, 'Insert', '::1', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2026-08-19 10:39:36', '2026-08-19'),
(5, 1, 1, 'New Record inserted On subjects id 2', 2, 2, 'Insert', '::1', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2026-08-19 10:39:37', '2026-08-19'),
(6, 1, 1, 'New Record inserted On subjects id 3', 3, 2, 'Insert', '::1', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2026-08-19 10:39:52', '2026-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `section` varchar(60) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Active, 0 = Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `organization_id`, `branch_id`, `section`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'A', 1, '2026-08-11 04:54:56', '2026-08-11 04:54:56'),
(2, 1, 1, 'B', 1, '2026-08-11 04:54:56', '2026-08-11 04:54:56'),
(4, 1, 1, 'C', 1, '2026-08-11 04:56:09', '2026-08-11 04:56:09'),
(5, 1, 1, 'D', 1, '2026-08-11 04:56:09', '2026-08-11 04:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) NOT NULL,
  `emergency_contact_no` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') DEFAULT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') DEFAULT 'Single',
  `nid_no` varchar(50) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `local_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `work_exp` text DEFAULT NULL,
  `salary_policy_id` int(11) DEFAULT NULL,
  `salary_type` enum('Monthly','Daily','Contractual') NOT NULL DEFAULT 'Monthly',
  `basic_salary` decimal(12,2) NOT NULL DEFAULT 0.00,
  `hourly_rate` decimal(10,2) DEFAULT 0.00,
  `weekly_holidays` varchar(100) DEFAULT 'Friday',
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_account_no` varchar(255) DEFAULT NULL,
  `account_title` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `joining_letter` varchar(255) DEFAULT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=Active, 0=Left/Inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `admission_no` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `blood_group` varchar(200) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `organization_id`, `branch_id`, `guardian_id`, `admission_no`, `firstname`, `lastname`, `dob`, `gender`, `blood_group`, `student_image`, `is_active`, `created_at`) VALUES
(1, 1, 1, 1, '1231', 's', 's', '2026-08-12', 'Male', '', '', 0, '2026-08-12 09:52:23'),
(4, 1, 1, 3, '1222', 'Mrs Lima', 'Akter', '0000-00-00', 'Male', 'B+', 'file.png', 1, '2026-08-19 06:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `student_sessions`
--

CREATE TABLE `student_sessions` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `roll_no` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student_sessions`
--

INSERT INTO `student_sessions` (`id`, `student_id`, `organization_id`, `branch_id`, `academic_year_id`, `class_id`, `section_id`, `roll_no`, `created_at`) VALUES
(1, 1, 1, 1, 2, 2, 1, 1, '2026-08-12 09:52:23'),
(4, 4, 1, 1, 2, 3, 1, 1, '2026-08-19 06:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sortOrder` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `organization_id`, `branch_id`, `name`, `code`, `type`, `sortOrder`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'বাংলা ১ ম পত্র', '২০১', 'Theory', 0, 1, 1787135975, '2026-08-19 10:39:35'),
(3, 1, 1, 'ইংরেজি', '২০২', 'Theory', 0, 1, 1787135991, '2026-08-19 10:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `subject_groups`
--

CREATE TABLE `subject_groups` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_groups`
--

INSERT INTO `subject_groups` (`id`, `organization_id`, `branch_id`, `name`, `description`, `session_id`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'bangla', 'ee', NULL, '2026-08-19 11:34:24', '2026-08-19 11:34:24'),
(8, 1, 1, 'bangla', 'ee', NULL, '2026-08-19 11:34:50', '2026-08-19 11:34:50'),
(9, 1, 1, 'bangla', 'ee', NULL, '2026-08-19 11:35:38', '2026-08-19 11:35:38'),
(10, 1, 1, 'bangla', 'ee', NULL, '2026-08-19 11:36:15', '2026-08-19 11:36:15'),
(11, 1, 1, 'bangla', 'ee', NULL, '2026-08-19 11:36:34', '2026-08-19 11:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `subject_group_class_sections`
--

CREATE TABLE `subject_group_class_sections` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subject_group_id` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_group_class_sections`
--

INSERT INTO `subject_group_class_sections` (`id`, `organization_id`, `branch_id`, `subject_group_id`, `class_id`, `section_id`, `session_id`, `is_active`, `created_at`) VALUES
(3, 1, 1, 11, 2, NULL, NULL, 1, '2026-08-19 11:36:34'),
(4, 1, 1, 11, 2, NULL, NULL, 1, '2026-08-19 11:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `subject_group_subjects`
--

CREATE TABLE `subject_group_subjects` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subject_group_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_group_subjects`
--

INSERT INTO `subject_group_subjects` (`id`, `organization_id`, `branch_id`, `subject_group_id`, `subject_id`, `session_id`, `created_at`) VALUES
(12, 1, 1, 7, 1, NULL, '2026-08-19 11:34:25'),
(13, 1, 1, 7, 3, NULL, '2026-08-19 11:34:25'),
(14, 1, 1, 8, 1, NULL, '2026-08-19 11:34:51'),
(15, 1, 1, 8, 3, NULL, '2026-08-19 11:34:51'),
(16, 1, 1, 9, 1, NULL, '2026-08-19 11:35:38'),
(17, 1, 1, 9, 3, NULL, '2026-08-19 11:35:38'),
(18, 1, 1, 10, 1, NULL, '2026-08-19 11:36:15'),
(19, 1, 1, 10, 3, NULL, '2026-08-19 11:36:15'),
(20, 1, 1, 11, 1, NULL, '2026-08-19 11:36:34'),
(21, 1, 1, 11, 3, NULL, '2026-08-19 11:36:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_others`
--
ALTER TABLE `exam_others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examID` (`examID`),
  ADD KEY `otherExamID` (`otherExamID`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_branch_grade` (`organization_id`,`branch_id`,`grade`),
  ADD KEY `idx_organization_branch` (`organization_id`,`branch_id`),
  ADD KEY `idx_mark_range` (`organization_id`,`branch_id`,`mark_from`,`mark_upto`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_credential`
--
ALTER TABLE `login_credential`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nid_no` (`nid_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_no` (`admission_no`),
  ADD KEY `guardian_id` (`guardian_id`);

--
-- Indexes for table `student_sessions`
--
ALTER TABLE `student_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_groups`
--
ALTER TABLE `subject_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_group_class_sections`
--
ALTER TABLE `subject_group_class_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_group_subjects`
--
ALTER TABLE `subject_group_subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam_others`
--
ALTER TABLE `exam_others`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_sessions`
--
ALTER TABLE `student_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_groups`
--
ALTER TABLE `subject_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject_group_class_sections`
--
ALTER TABLE `subject_group_class_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject_group_subjects`
--
ALTER TABLE `subject_group_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`guardian_id`) REFERENCES `guardians` (`id`);

--
-- Constraints for table `student_sessions`
--
ALTER TABLE `student_sessions`
  ADD CONSTRAINT `student_sessions_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
