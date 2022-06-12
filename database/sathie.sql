-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 09, 2022 at 05:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sathie`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Registrations', 'Accountant', NULL, '2022-06-05 06:04:53', '2022-06-05 06:04:53'),
(2, 'Income Tax Returns', 'Accountant', NULL, '2022-06-05 06:05:40', '2022-06-05 06:05:40'),
(3, 'Goods And Services Tax', 'Accountant', NULL, '2022-06-05 06:05:40', '2022-06-05 06:05:40'),
(4, 'Accounting', 'Accountant', NULL, '2022-06-05 06:07:22', '2022-06-05 06:07:22'),
(5, 'Trademark Registraion', 'Accountant', NULL, '2022-06-05 06:07:22', '2022-06-05 06:07:22'),
(6, 'Company Related Services', 'Accountant', NULL, '2022-06-05 06:08:32', '2022-06-05 06:08:32'),
(7, 'Digital Signature', 'Accountant', NULL, '2022-06-05 06:08:32', '2022-06-05 06:08:32'),
(8, 'E-Way Bills', 'Accountant', NULL, '2022-06-05 06:09:49', '2022-06-05 06:09:49'),
(9, 'Health Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(10, 'Term Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(11, 'Vehicle Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(12, 'Property Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(13, 'Travel Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(14, 'Personal Accident Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(15, 'Fire Insurance', 'Insuarance', NULL, '2022-06-05 06:49:07', '2022-06-05 06:49:07'),
(16, 'Personal Loan', 'Banker', NULL, '2022-06-05 06:49:07', '2022-06-05 06:50:34'),
(17, 'Home Loan', 'Banker', NULL, '2022-06-05 06:52:35', '2022-06-05 06:52:35'),
(18, 'Business Loan', 'Banker', NULL, '2022-06-05 06:52:35', '2022-06-05 06:52:35'),
(19, 'Loan Against Property', 'Banker', NULL, '2022-06-05 06:52:35', '2022-06-05 06:52:35'),
(20, 'MSME Loan', 'Banker', NULL, '2022-06-05 06:52:35', '2022-06-05 06:52:35'),
(21, 'Micro Loans', 'Banker', NULL, '2022-06-05 06:52:35', '2022-06-05 06:52:35'),
(22, 'Create Resume', 'Recruiter', NULL, '2022-06-05 06:54:23', '2022-06-05 06:54:23'),
(23, 'Upload Resume', 'Recruiter', NULL, '2022-06-05 06:54:23', '2022-06-05 06:54:23'),
(24, 'Flight Booking (Domestic)', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56'),
(25, 'Flight Booking (International)', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56'),
(26, 'Hotel Booking (Domestic)', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56'),
(27, 'Hotel Booking (International)', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56'),
(28, 'Bus Booking', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56'),
(29, 'Train Booking', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56'),
(30, 'Holiday Package', 'Tourism', NULL, '2022-06-05 07:00:56', '2022-06-05 07:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_06_05_055025_create_category_table', 2),
(5, '2022_06_05_060004_create_sub_category_table', 3),
(6, '2022_06_07_143822_create_user_detail_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pan Card', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(2, 1, 'Udyam Registartion', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(3, 1, 'Udyam KYC Update', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(4, 1, 'FSSAI Licence', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(5, 1, 'FSSAI Registration (Excluding Govt. Fees)', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(6, 1, 'FSSAI License Processing Charges (Excluding Govt. Fees) / Renewal', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(7, 1, 'Gem Registration', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(8, 1, 'Registration Under Shop & Establishment Act (excluding Govt. fees)', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(9, 1, 'LLP Formation (Excluding State Stamp Duty)', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(10, 1, 'Director Identification Number (DIN)', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(11, 1, 'Charitable Trust Registration', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(12, 1, 'Compulsory Conversion of OPC into Private Limited Company', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(13, 1, 'Conversion of Private Limited into Public Limited', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(14, 1, 'Conversion of Private Limited Into OPC', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(15, 1, 'Voluntary Conversion of OPC into Private Limited Company', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(16, 1, 'Nidhi Company Registration', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(17, 1, 'Section 8 Company Registration', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(18, 1, 'OPC Registration (Excluding Stamp duty)', NULL, '2022-06-05 06:16:44', '2022-06-05 06:16:44'),
(19, 2, 'ITR (For Salaried Person / 1 House Property / Other Source) / ITR-1', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(20, 2, 'ITR (Capital Gain/ House Property / Other Source) / ITR-2', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(21, 2, 'ITR (Proprietor Business) / ITR-3', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(22, 2, 'ITR-4', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(23, 2, 'ITR-5', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(24, 2, 'ITR (Form 10E)', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(25, 2, 'ITR (Response of Notice)', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(26, 2, 'ITR Correction', NULL, '2022-06-05 06:19:20', '2022-06-05 06:19:20'),
(27, 3, 'GST Registration', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(28, 3, 'GST (Nil) Monthly Return Filing Regular Schemes', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(29, 3, 'GST (Nil) Return Filing Composition Scheme', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(30, 3, 'GST Annual Return (GSTR 9/9A)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(31, 3, 'GST CASH REFUND', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(32, 3, 'GST Composition to Regular Scheme', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(33, 3, 'GST E-Commerce Return (GSTR 8)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(34, 3, 'GST Final Return (GSTR 10)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(35, 3, 'GST Monthly Return Filing Regular Scheme (Upto 25 Invoices)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(36, 3, 'GST Monthly Return Filing Regular Scheme (Upto 100 Invoices)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(37, 3, 'GST Monthly Return Filing Regular Scheme (Upto 200 Invoices)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(38, 3, 'GST Monthly Return Filing Regular Scheme (upto 700 Invoice) Excel Format', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(39, 3, 'GST PMT-09 Form Submission', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(40, 3, 'GST QRMP Scheme-(Nil) for Regular Return', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(41, 3, 'GST QRMP Scheme for Regular Return-(25 Invoice)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(42, 3, 'GST QRMP Scheme for Regular Return-(100 Invoice)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(43, 3, 'GST QRMP Scheme for Regular Return-(200 Invoice)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(44, 3, 'GST QRMP Scheme for Regular Return-(upto 700 Invoice) Excel Format', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(45, 3, 'GST Reconciliation (Upto 3 Months)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(46, 3, 'GST Regular Return filing(Annual charges)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(47, 3, 'GST Response of Notice', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(48, 3, 'GST Return Filing in Composition Scheme', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(49, 3, 'GST Return Filing in Composition Scheme (CMP-08)', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(50, 3, 'GST Surrender', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(51, 3, 'GSTR-7 Return', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(52, 3, 'Revocation of Cancellation of GST License', NULL, '2022-06-05 06:31:46', '2022-06-05 06:31:46'),
(53, 4, 'Balance Sheet & Profit Loss Account', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(54, 4, 'Monthly - Accounting Package / GST Book keeping / Digital Tax Payment (Up to 50L turnover)', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(55, 4, 'Monthly - Accounting Package / GST Book keeping / Digital Tax Payment (Up to 20L turnover)', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(56, 4, 'Monthly - Accounting Package / GST Book keeping / Digital Tax Payment (Up to 1 Cr turnover)', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(57, 4, 'Yearly - Accounting Package / GST Book keeping / GST Return Filing / Reconciliation / Digital Tax\r\nPayment (Up to 1 Cr turnover) Yearly', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(58, 4, 'Yearly - Accounting Package / GST Book keeping / GST Return Filing / Reconciliation/ Digital Tax Payment (Up to 50L turnover)', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(59, 4, 'Yearly - Accounting Package / GST Book keeping / GST Return Filing/ Reconciliation/Digital Tax Payment (Up to 20L turnover)', NULL, '2022-06-05 06:34:43', '2022-06-05 06:34:43'),
(60, 5, 'Trademark Registration - Individual (Gov. Fee)', NULL, '2022-06-05 06:35:55', '2022-06-05 06:35:55'),
(61, 5, 'Trademark Registration - Other Than Individual (Gov. Fee)', NULL, '2022-06-05 06:35:55', '2022-06-05 06:35:55'),
(62, 5, 'Trademark Registration - Processing Fee', NULL, '2022-06-05 06:35:55', '2022-06-05 06:35:55'),
(63, 6, 'TDS challan Submission', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(64, 6, 'TDS Return (Quarter filing) for Individual', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(65, 6, 'TDS Return (Quarter filing) for Organization', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(66, 6, 'ADVANCE TAX', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(67, 6, 'CMA Report', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(68, 6, 'ROC E FILING', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(69, 6, 'Alteration/Addition in Company', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(70, 6, 'Letter of Undertaking (LUT) File', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(71, 6, 'Name Change of Company', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(72, 6, 'Name Approval of LLP, Private Limited, OPC (RUN Form)', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(73, 6, 'DIR-3 KYC', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(74, 6, 'Company KYC (Active Form) INC-22', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(75, 6, 'Surrender of DIN', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(76, 6, 'Declaration of Commencement of Business', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(77, 6, 'Change in Director Details', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(78, 6, 'Closing of Company-(Excluding Govt. Fees)', NULL, '2022-06-05 06:43:23', '2022-06-05 06:43:23'),
(79, 7, 'Digital Signature Combo', NULL, '2022-06-05 06:43:51', '2022-06-05 06:43:51'),
(80, 8, 'E-way Bill', NULL, '2022-06-05 06:44:22', '2022-06-05 06:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Dodiya Chirag', 'dodiyachirag09@gmail.com', '7698495063', '$2y$10$TzOKuaM.vPoRDPXpq.r7X.VziAUaPVSbDoQEZ8Cy32TO/J8j1396.', NULL, '2022-06-08 22:20:35', '2022-06-08 22:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pancard_filename` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adharcard_filename` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_year_policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `claim_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sum_insured` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three_yr_policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoker_non_smoker` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_exist_disease` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three_year_policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_no_days` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_ticket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_statement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_employee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_years` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three_yr_claim_confirm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risk_location_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
