-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2018 at 12:43 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasystec_hat`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `id` bigint(20) NOT NULL,
  `hospital_id` bigint(20) NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `facility_dept_id` bigint(20) NOT NULL,
  `existing_equipId` bigint(20) NOT NULL,
  `supports` tinyint(1) NOT NULL,
  `supported_id` bigint(20) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` text NOT NULL,
  `updated_date` date NOT NULL,
  `updated_by` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessmentdetailsid` bigint(20) NOT NULL,
  `hospitalid` bigint(20) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lkupstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assessmentdetails`
--

CREATE TABLE `assessmentdetails` (
  `assessmentdetailsid` bigint(20) NOT NULL,
  `assignedleaduser` bigint(20) NOT NULL,
  `assigneddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `plannedstartdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `plannedenddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `actualstartdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `actualenddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `assessmentnotes` varchar(250) NOT NULL,
  `assessmentid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` bigint(20) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`id`, `name`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(178, 'Admission', 'admission Only', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(179, 'Accounts Payable', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(180, 'Accounting ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(181, 'Activities Office', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(182, 'Administration ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(183, 'Adult Psychiatric Services ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(184, 'Ambulatory Care Unit ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(185, 'Ancillary Director', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(186, 'Anesthesia', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(187, 'Behavioral Health', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(188, 'Billing', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(189, 'Business Office', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(190, 'Cardiac Rehabilitation ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(191, 'Cardiology ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(192, 'Cardiopulmonary', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(193, 'Case Management ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(194, 'Central Nursing Station', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(195, 'Certified Medical', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(196, 'Chemical Dependency Unit', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(197, 'Collections ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(198, 'Conference Room / Class Room ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(199, 'Coordinator Hospitalists', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(200, 'Critical Care Unit', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(201, 'Dialysis', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(202, 'Dietary ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(203, 'Doctors Lounge ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(204, 'E.S.S. ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(205, 'Education', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(206, 'EEG/DFT ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(207, 'Eligibility Screening ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(208, 'Emergency Department ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(209, 'Emergency Department Registration ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(210, 'Emergency Room Insurance Verification ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(211, 'Emergency Services ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(212, 'Employee Health', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(213, 'Endo', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(214, 'Executive Office', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(215, 'Gastro', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(216, 'Health Information Management', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(217, 'HIM ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(218, 'Hospitalist', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(219, 'House Supervisor ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(220, 'Housekeeping', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(221, 'Human Resources ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(222, 'Infection Control ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(223, 'Intensive Care Unit ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(224, 'IT ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(225, 'Labor and Delivery ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(226, 'Laboratory - Blood Bank', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(227, 'Laboratory - Microbiology', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(228, 'Laboratory - Chemistry', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(229, 'Laboratory - Hematology', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(230, 'Laboratory - Coagulation', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(231, 'Laboratory - Urinalysis', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(232, 'Laboratory - Serology', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(233, 'Laboratory - SSend-out Deskerology', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(234, 'Main OR Desk', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(235, 'Main Registration ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(236, 'Maintenance', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(237, 'Materials Management ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(238, 'Meaningful Use', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(239, 'Medical Records', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(240, 'MedSurg ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(241, 'Morgue ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(242, 'NICU ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(243, 'Nurse Offices', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(244, 'Nursery', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(245, 'Nurses Station', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(246, 'Nursing Administration ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(247, 'Nutritional Services ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(248, 'Occupational Therapy', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(249, 'On-Call Scheduling ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(250, 'OR Rooms', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(251, 'Outpatient Laboratory ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(252, 'PACU', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(253, 'PAT', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(254, 'Pathology', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(255, 'Patient Access Director ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(256, 'Patient Accounting ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(257, 'Patient Intake ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(258, 'Payroll', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(259, 'PBX ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(260, 'Pediatrics ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(261, 'Perioperative', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(262, 'Pharmacy ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(263, 'Physical Therapy ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(264, 'Physician Dictation ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(265, 'Physician Lounge', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(266, 'Physician?s Office ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(267, 'Physician\'s Room', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(268, 'PreOp', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(269, 'PreOp ? Phase II', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(270, 'Pre-Registration ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(271, 'Program Director', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(272, 'Purchasing', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(273, 'Quality Control', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(274, 'Quality Management ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(275, 'Radiology - Radiology Workroom', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(276, 'e', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(277, 'Radiology - Reception Area ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(278, 'Radiology - CT', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(279, 'Radiology - MRI', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(280, 'Radiology - X-Ray', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(281, 'Radiology - Ultrasound', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(282, ' Radiology - Nuclear Medicine', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(283, 'Radiology - PET', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(284, 'Radiology Reception ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(285, 'Radiology Scheduling ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(286, 'Recovery', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(287, 'Registration', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(288, 'Resource/Case Management ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(289, 'Respiratory Care ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(290, 'Respiratory Therapy ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(291, 'Risk Compliance Coordinator ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(292, 'Risk Management ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(293, 'Scheduling', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(294, 'Security', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(295, 'Senior Care Unit', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(296, 'Sleep Lab ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(297, 'Social Services', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(298, 'Special Procedures Lab', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(299, 'Surgery ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(300, 'Surgery Registration ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(301, 'Surgery/PACU ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(302, 'Surgical Services', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(303, 'Switchboard ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(304, 'Telemetry', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(305, 'Therapy Department ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(306, 'Training Room ', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(307, 'Waiting Rooms', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(308, 'Women?s Center', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(309, 'Wound Care', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `deptassessment`
--

CREATE TABLE `deptassessment` (
  `deptassessmentid` bigint(20) NOT NULL,
  `existingeqipmentdesc` varchar(250) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `qtyexisting` int(11) NOT NULL,
  `deptlocationdetails` varchar(250) NOT NULL,
  `lkupassessmentstatus` int(11) NOT NULL,
  `actualstartdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `actualenddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hospitaldeptid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facility_departments`
--

CREATE TABLE `facility_departments` (
  `id` bigint(20) NOT NULL,
  `facility_id` text NOT NULL,
  `department_id` text NOT NULL,
  `user_id` text NOT NULL,
  `role_id` text NOT NULL,
  `planned_satart_date` text NOT NULL,
  `planned_end_date` text NOT NULL,
  `actual_start_date` text NOT NULL,
  `actual_end_date` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` text NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facility_master`
--

CREATE TABLE `facility_master` (
  `id` bigint(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `address1` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL,
  `contact_person` text NOT NULL,
  `contact_Phone` text NOT NULL,
  `contact_email` text NOT NULL,
  `image` text NOT NULL,
  `dept_id` text,
  `created_date` date NOT NULL,
  `created_by` text NOT NULL,
  `updated_date` date NOT NULL,
  `updated_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hatroles`
--

CREATE TABLE `hatroles` (
  `roleid` bigint(20) NOT NULL,
  `rolename` varchar(100) NOT NULL,
  `roledescription` varchar(100) NOT NULL,
  `lkupstatus` int(11) NOT NULL,
  `createdby` bigint(20) NOT NULL,
  `updatedby` bigint(20) NOT NULL,
  `createsdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldept`
--

CREATE TABLE `hospitaldept` (
  `hospitaldept` bigint(20) NOT NULL,
  `deptname` varchar(100) NOT NULL,
  `assigneduser` bigint(20) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `assgineddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `plannedstarteddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `plannedenddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deptmasterid` bigint(20) NOT NULL,
  `assessmentid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_supported_master`
--

CREATE TABLE `not_supported_master` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` bigint(20) NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `not_supported_master`
--

INSERT INTO `not_supported_master` (`id`, `name`, `description`, `department_id`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(5, 'Kodak Perfect Page', 'Scanner', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(6, 'Kodak I2400', 'Scanner', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(7, 'Canon DR 2510C ', 'Scanner', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(8, 'USB Printer', 'Printer', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(9, 'InkJet Printer', 'Printer', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `recommendationid` bigint(20) NOT NULL,
  `assessmentid` bigint(20) NOT NULL,
  `qtyneeded` int(11) NOT NULL,
  `estimatedcost` double NOT NULL,
  `estimatedinstallationcost` double NOT NULL,
  `notes` varchar(250) NOT NULL,
  `deptassessmentid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support_devices_master`
--

CREATE TABLE `support_devices_master` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `cost` text NOT NULL,
  `installation_cost` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` bigint(20) NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_devices_master`
--

INSERT INTO `support_devices_master` (`id`, `name`, `description`, `department_id`, `cost`, `installation_cost`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(5, 'SCAU ? Fujitsu s7160 Scanner Autoscan with Consumables Kit ', 'SCAU ? Fujitsu s7160 Scanner Autoscan with Consumables Kit ', 1, '$1,432.00 ', '$330 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(6, 'SIGN ? Electronic Signature Pad T-L462-HSB', 'SIGN ? Electronic Signature Pad T-L462-HSB', 1, '$375.00 ', '$330 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(7, 'WRB3 ? LB2-ADULT-L3 - Adult Wristband', 'WRB3 ? LB2-ADULT-L3 - Adult Wristband', 1, '$475.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(8, 'WRB9 ? LB5130 - 30 to a page additional labels compatible with WRB3 wristband', 'WRB9 ? LB5130 - 30 to a page additional labels compatible with WRB3 wristband', 1, '$174.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(9, 'HWIN ? Autoscan Install, Service Only ', 'HWIN ? Autoscan Install, Service Only ', 1, 'N/A', '$330 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(10, 'HWIN ? Signature Pad Install, Service Only', 'HWIN ? Signature Pad Install, Service Only', 1, 'N/A', '$330 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(11, 'SC11 ? Fujitsu fi-7700 Scanner', 'SC11 ? Fujitsu fi-7700 Scanner', 1, '$10,180.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(12, 'KF01 ? Kofax Capture License - 300k/year', 'KF01 ? Kofax Capture License - 300k/year', 1, '$3,886.20 ', '$1,320 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(13, 'TEK5 ? Touchscreen -15? AIO, DJ1900  with Intel Ultimate-N 6300 Wireless Card', 'TEK5 ? Touchscreen -15? AIO, DJ1900  with Intel Ultimate-N 6300 Wireless Card', 1, '$1,862.00 ', '$330 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(14, 'TEK8 ? Touchscreen -15? AIO, DJ1900, No Wireless Card', 'TEK8 ? Touchscreen -15? AIO, DJ1900, No Wireless Card', 1, '$1,787.00 ', '$330 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(15, 'SY11 ? Zebra LI3678-USB KIT - 1D Cordless ? Barcode Scanner ', 'SY11 ? Zebra LI3678-USB KIT - 1D Cordless ? Barcode Scanner ', 1, '$900.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(16, 'SY01 ? Symbol LS2208 kit with 6ft Cable ? Barcode Scanner', 'SY01 ? Symbol LS2208 kit with 6ft Cable ? Barcode Scanner', 1, '$208.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(17, 'SY06 ? Symbol LS2208 kit with 15ft Cable ? Barcode Scanner', 'SY06 ? Symbol LS2208 kit with 15ft Cable ? Barcode Scanner', 1, '$249.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(18, 'SY13 ? DS8178HC-KIT Cordless 1D/2D Imager (7? USB Kit, HealthCare White) ? Barcode Scanner', 'SY13 ? DS8178HC-KIT Cordless 1D/2D Imager (7? USB Kit, HealthCare White) ? Barcode Scanner', 1, '$1,080.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(19, 'SY17 ? Zebra DS4308HC KIT - 1D/2D Imager with 7\' USB Cable, HealthCare White with Stand ? Barcode Scanner', 'SY17 ? Zebra DS4308HC KIT - 1D/2D Imager with 7\' USB Cable, HealthCare White with Stand ? Barcode Scanner', 1, '$448.50 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(20, 'SY17 ? Zebra DS4308HC KIT - 1D/2D Imager with 15\' USB Cable, HealthCare White with Stand ? Barcode Scanner', 'SY17 ? Zebra DS4308HC KIT - 1D/2D Imager with 15\' USB Cable, HealthCare White with Stand ? Barcode Scanner', 1, '$496.60 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(21, 'SY17 ? Zebra DS4308HC KIT - 1D/2D Imager with 15\' Coil USB Cable, HealthCare White with Stand ? Barcode Scanner', 'SY17 ? Zebra DS4308HC KIT - 1D/2D Imager with 15\' Coil USB Cable, HealthCare White with Stand ? Barcode Scanner', 1, '$533.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(22, '', '', 1, '', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(23, 'SC12 ? Unitech HT630r Hand Held Scanner', 'SC12 ? Unitech HT630r Hand Held Scanner', 1, '$615.00 ', '$495 ', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(24, 'SC12 ? Unitech 1550-900083g-USB Cable for HT630r', 'SC12 ? Unitech 1550-900083g-USB Cable for HT630r', 1, '$69.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(25, 'WRI4 ? MMPOI Bin Labels: 1 Carton', 'WRI4 ? MMPOI Bin Labels: 1 Carton', 1, '$195.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(26, 'HARD ? 6626008M ? Blue Middle Check Stock', 'HARD ? 6626008M ? Blue Middle Check Stock', 1, '$75.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(27, 'ZEB4 ? Zebra ZT230 ? Label Printer', 'ZEB4 ? Zebra ZT230 ? Label Printer', 1, '$1,145.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(28, 'LAB4 ? Lab Direct Thermal Start-up Kit: for use with S4M or ZT230 (8800 per box) ', 'LAB4 ? Lab Direct Thermal Start-up Kit: for use with S4M or ZT230 (8800 per box) ', 1, '$375.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(29, 'PHAR ? Pharmacy Direct Thermal Start-up Kit: for use with ZT230 (20k labels each unit)', 'PHAR ? Pharmacy Direct Thermal Start-up Kit: for use with ZT230 (20k labels each unit)', 1, '$375.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(30, 'ZEB6 ? Zebra GX420T ? Label Printer', 'ZEB6 ? Zebra GX420T ? Label Printer', 1, '$708.00 ', 'Client Install', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(31, 'LAB4 ? Lab Direct Thermal Start-up kit: for use with LP2844Z/GX420004100-000 (8800 per box) - 207498', 'LAB4 ? Lab Direct Thermal Start-up kit: for use with LP2844Z/GX420004100-000 (8800 per box) - 207498', 1, '$300.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(32, 'PHAR ? Pharmacy Direct Thermal Start-up Kit: for use with LP2844Z/GX42-200410-000 (20k labels each unit)', 'PHAR ? Pharmacy Direct Thermal Start-up Kit: for use with LP2844Z/GX42-200410-000 (20k labels each unit)', 1, '$375.00 ', 'N/A', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, '1'),
(33, 'test', 'test', 178, '100', '200', '2018-01-09 23:17:57', 20, '2018-01-09 23:17:57', 20, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_datails`
--

CREATE TABLE `user_datails` (
  `id` bigint(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `last_login` date NOT NULL,
  `email` text NOT NULL,
  `usertype` int(11) NOT NULL,
  `profile_img` text NOT NULL,
  `status` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` bigint(20) NOT NULL,
  `update_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_datails`
--

INSERT INTO `user_datails` (`id`, `username`, `password`, `last_login`, `email`, `usertype`, `profile_img`, `status`, `created_date`, `created_by`, `update_date`, `update_by`) VALUES
(18, 'Admin', 'admin', '2018-01-04', 'superadmin@gmail.com', 2, '2018-01-04 121810-_DSC0209.jpg', '1', '2018-01-04 17:48:10', 17, '2018-01-04 17:48:10', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_departments`
--
ALTER TABLE `facility_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_master`
--
ALTER TABLE `facility_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `not_supported_master`
--
ALTER TABLE `not_supported_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_devices_master`
--
ALTER TABLE `support_devices_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_datails`
--
ALTER TABLE `user_datails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;
--
-- AUTO_INCREMENT for table `facility_departments`
--
ALTER TABLE `facility_departments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `facility_master`
--
ALTER TABLE `facility_master`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `not_supported_master`
--
ALTER TABLE `not_supported_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `support_devices_master`
--
ALTER TABLE `support_devices_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user_datails`
--
ALTER TABLE `user_datails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
