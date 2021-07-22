-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 05:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpreflection`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `office` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`office`, `phone`, `email`) VALUES
('Wymondham', 1603704020, NULL),
('Gorleston', 1493603204, NULL),
(NULL, NULL, 'sales@netmatters.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `Msg_ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Tel_Number` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_additions`
--

CREATE TABLE `menu_additions` (
  `Link` text NOT NULL,
  `Title` text NOT NULL,
  `add_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_additions`
--

INSERT INTO `menu_additions` (`Link`, `Title`, `add_ID`) VALUES
('https://www.netmatters.co.uk/scs-web-developer-course', 'Training', 1),
('https://www.netmatters.co.uk/business-automation-seminar', 'Events', 2),
('https://www.netmatters.co.uk/our-culture', 'Our Company', 3),
('#', 'Our Work', 4),
('https://www.netmatters.co.uk/guides', 'Our Knowledge', 5),
('https://www.netmatters.co.uk/covid-risk-assessments', 'Covid Risk Assessment', 6),
('contact.php', 'Contact Us', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `Newsletter_ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`Newsletter_ID`, `Name`, `Email`) VALUES
(10, 'David', 'email@email.com'),
(12, 'TestName', 'emailAddress1@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `news_cards`
--

CREATE TABLE `news_cards` (
  `Img_src` text NOT NULL,
  `Img_alt` text NOT NULL,
  `Link` text NOT NULL,
  `Text` char(20) NOT NULL,
  `popup` text NOT NULL,
  `Span_Class` text NOT NULL,
  `Tag_Title` text NOT NULL,
  `Title` text NOT NULL,
  `Para` text NOT NULL,
  `Posted_img` text NOT NULL,
  `Posted_alt` text NOT NULL,
  `Posted_by` text NOT NULL,
  `Date` date NOT NULL,
  `News_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_cards`
--

INSERT INTO `news_cards` (`Img_src`, `Img_alt`, `Link`, `Text`, `popup`, `Span_Class`, `Tag_Title`, `Title`, `Para`, `Posted_img`, `Posted_alt`, `Posted_by`, `Date`, `News_ID`) VALUES
('img/News_img/happy-25th-birthday-bXTr.png', 'Netmatters Hiring', '#', 'News', 'View all: IT Support / News', 'tt news-tag', 'news-tag-title', 'Happy 25th Birthday Kati!', 'Since joining Netmatters Kati has done a fantastic job keeping our IT projects progressing...', 'img/Icons/netmatters_logo_small.png', 'Small Netmatters Logo', 'Posted by Netmatters Ltd', '2020-12-18', 1),
('img/News_img/zsea-it-support-bc5m.jpg', 'Netmatters Announcement', '#', 'News', 'View all: IT Support / Case Studies', 'tt news-tag', 'news-tag-title', 'ZSEA IT Support case study', 'As the world continues to change, and businesses evolve, they need to look to ways of futurep...', 'img/Icons/netmatters_logo_small.png', 'Small Netmatters Logo', 'Posted by Netmatters Ltd', '2020-12-10', 2),
('img/News_img/senior-web-developer-7ezg.png', 'Image of a Web developer', '#', 'Career', 'View all: Bespoke software / Careers', 'tt career-tag', 'career-tag-title', 'Senior Web developer', 'Salary range: &#163;30,000 - &#163;40,000 (DOE) + Bonus Hours: 40 hours per week, Monday - Friday Loc...', 'img/Icons/netmatters_logo_small.png', 'Small Netmatters Logo', 'Posted by Netmatters Ltd', '2020-12-10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `service_cards`
--

CREATE TABLE `service_cards` (
  `Link` text NOT NULL,
  `Class` text NOT NULL,
  `Icon` text NOT NULL,
  `Title` text NOT NULL,
  `Para` text NOT NULL,
  `Read_More` text NOT NULL,
  `Card_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_cards`
--

INSERT INTO `service_cards` (`Link`, `Class`, `Icon`, `Title`, `Para`, `Read_More`, `Card_ID`) VALUES
('#', 'card service card-nav-bs', 'glyphicon glyphicon-th card-icon', 'Bespoke Software', ' Tailored software solutions to improve business productivity and online profits.Our expert team will ensure a software 						solution.', 'rm rm-bs', 1),
('#', 'card service card-nav-it', 'fa fa-desktop card-icon', 'IT support', 'Remotely managed IT Services that is catered\r\n                to your businesses needs, adds value and\r\n                reduces costs.', 'rm rm-it', 2),
('#', 'card service card-nav-mk', 'glyphicon glyphicon-signal card-icon', 'Digital Marketing', 'Driving brand awareness and ROI through creative digital marketing campaigns.We Review and monitor online performances.', 'rm rm-mk', 3),
('#', 'card service card-nav-tc', 'fa fa-volume-control-phone card-icon', 'Telecoms Services', 'Stay connected with bespoke telecoms solutions when you need it most. ', 'rm rm-tc', 4),
('#', 'card service card-nav-web', 'fa fa-code card-icon', 'web design', 'User-centric design for businesses looking to make a lasting first impression.', 'rm rm-web', 5),
('#', 'card service card-nav-cs', 'fa fa-shield card-icon', 'cyber security', 'Ensuring your online business stays secure 24/7, 365 days of the year', 'rm rm-cs', 6),
('#', 'card service card-nav-dt', 'glyphicon glyphicon-education card-icon', 'Developer Training', 'Have you considered a career in web development but arent sure where to start?', 'rm rm-dt', 7);

-- --------------------------------------------------------

--
-- Table structure for table `side_buttons`
--

CREATE TABLE `side_buttons` (
  `Link` text NOT NULL,
  `Class` text NOT NULL,
  `Icons` text NOT NULL,
  `Colour` text NOT NULL,
  `Small_first` text NOT NULL,
  `Small_second` text NOT NULL,
  `button_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `side_buttons`
--

INSERT INTO `side_buttons` (`Link`, `Class`, `Icons`, `Colour`, `Small_first`, `Small_second`, `button_ID`) VALUES
('#', 'nav-web', 'fa fa-code icon', '#926fb1', 'Web', 'Design', NULL),
('#', 'nav-it', 'fa fa-desktop icon', '#4183d7', 'it', 'support', NULL),
('#', 'nav-tc', 'fa fa-volume-control-phone icon', '#d64541', 'Telecoms', 'services', NULL),
('#', 'nav-bs', 'glyphicon glyphicon-th icon', '#67809f', 'bespoke', 'support', NULL),
('#', 'nav-mk', 'glyphicon glyphicon-signal icon', '#2ecc71', 'digital', 'marketing', NULL),
('#', 'nav-cs', 'fa fa-shield icon', '#f62459', 'cyber', 'security', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `side_menu`
--

CREATE TABLE `side_menu` (
  `Link` text NOT NULL,
  `Title` text NOT NULL,
  `menu_list_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `side_menu`
--

INSERT INTO `side_menu` (`Link`, `Title`, `menu_list_ID`) VALUES
('https://www.netmatters.co.uk/web-design/website-design', 'Stylish websites', 1),
('https://www.netmatters.co.uk/web-design/ecommerce-development', 'Ecommerce stores', 2),
('https://www.netmatters.co.uk/web-design/branding', 'Branding', 3),
('https://www.netmatters.co.uk/web-design/mobile-apps-development', 'Apps', 4),
('https://www.netmatters.co.uk/web-design/web-hosting', 'Web hosting', 5),
('https://www.netmatters.co.uk/web-design/pay-monthly-websites', 'Pay monthly websites', 6),
('https://www.netmatters.co.uk/it-support/managed-it-support', 'Managed it', 7),
('https://www.netmatters.co.uk/it-support/business-it-support', 'Business it', 8),
('https://www.netmatters.co.uk/it-support/office-365-for-business', 'Office 365', 9),
('https://www.netmatters.co.uk/it-support/it-consultancy', 'Consultancy', 10),
('https://www.netmatters.co.uk/it-support/cloud-service-provider', 'Cloud provider', 11),
('https://www.netmatters.co.uk/it-support/data-backup-disaster-recovery', 'Data Backup', 12),
('https://www.netmatters.co.uk/telecoms-services/gigabit-voucher-scheme', 'Gigabit voucher', 13),
('https://www.netmatters.co.uk/telecoms-services/hosted-business-voip', 'Hosted VOIP', 14),
('https://www.netmatters.co.uk/telecoms-services/business-voip', 'Business voip', 15),
('https://www.netmatters.co.uk/telecoms-services/business-broadband-provider', 'business broadband', 16),
('https://www.netmatters.co.uk/it-support/cloud-service-provider', 'Leased line', 17),
('https://www.netmatters.co.uk/telecoms-services/3cx-system', '3cx systems', 18),
('https://www.netmatters.co.uk/bespoke-software/workflow-solutions', 'Workflow', 19),
('https://www.netmatters.co.uk/bespoke-software/business-automation', 'Automation', 20),
('https://www.netmatters.co.uk/bespoke-software/systems-integrations', 'Integration', 21),
('https://www.netmatters.co.uk/bespoke-software/database-management-software', 'Database', 22),
('https://www.netmatters.co.uk/bespoke-software/sharepoint-development', 'Sharepoint', 23),
('https://www.netmatters.co.uk/bespoke-software/business-management-software', 'Business management', 24),
('https://www.netmatters.co.uk/digital-marketing/seo-search-engine-optimisation', 'search (seo)', 25),
('https://www.netmatters.co.uk/digital-marketing/ppc', 'paid (ppc)', 26),
('https://www.netmatters.co.uk/digital-marketing/conversion-marketing', 'conversion (CRO)', 27),
('https://www.netmatters.co.uk/digital-marketing/email-marketing', 'email', 28),
('https://www.netmatters.co.uk/bespoke-software/sharepoint-development', 'social media', 29),
('https://www.netmatters.co.uk/digital-marketing/content-marketing', 'content', 30),
('https://www.netmatters.co.uk/cyber-security/cyber-security-assessment', 'assessment', 31),
('https://www.netmatters.co.uk/cyber-security/cyber-security-management', 'management', 32),
('https://www.netmatters.co.uk/cyber-security/cyber-penetration-testing', 'penetration testing', 33),
('https://www.netmatters.co.uk/cyber-security/cyber-essentials-certification', 'cyber essentials', 34),
('https://www.netmatters.co.uk/cyber-security/pci-compliance', 'pci/dss', 35),
('https://www.netmatters.co.uk/cyber-security/hacker-prevention', 'hacker prevention', 36),
('https://www.netmatters.co.uk/scs-web-developer-course', 'Web developer course', 37),
('https://www.netmatters.co.uk/scs-web-developer-course/scion-scheme-frequently-asked-questions', 'SCS Frequently asked questions', 38),
('https://www.netmatters.co.uk/scs-web-developer-course/scion-collaborators', 'Scion Collaberations', 39),
('https://www.netmatters.co.uk/business-automation-seminar', 'Business automation seminar', 40),
('https://www.netmatters.co.uk/our-culture', 'our culture', 41),
('https://www.netmatters.co.uk/team', 'our team', 42),
('https://www.netmatters.co.uk/our-careers', 'our careers', 43),
('https://www.netmatters.co.uk/our-benefits', 'our benefits', 44),
('https://www.netmatters.co.uk/it-support-in-great-yarmouth', 'it support great yarmouth', 45),
('https://www.netmatters.co.uk/case-studies', 'case studies', 46),
('https://www.netmatters.co.uk/guides', 'Guides', 47),
('https://www.netmatters.co.uk/articles', 'News', 48),
('https://www.netmatters.co.uk/insights', 'insights', 49),
('https://www.netmatters.co.uk/cambridge-office', 'Cambridge office', 50),
('https://www.netmatters.co.uk/wymondham-office', 'wymondham office', 51),
('https://www.netmatters.co.uk/yarmouth-office', 'great yarmouth office', 52);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `menu_additions`
--
ALTER TABLE `menu_additions`
  ADD PRIMARY KEY (`add_ID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Newsletter_ID`);

--
-- Indexes for table `news_cards`
--
ALTER TABLE `news_cards`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `service_cards`
--
ALTER TABLE `service_cards`
  ADD PRIMARY KEY (`Card_ID`);

--
-- Indexes for table `side_menu`
--
ALTER TABLE `side_menu`
  ADD PRIMARY KEY (`menu_list_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_additions`
--
ALTER TABLE `menu_additions`
  MODIFY `add_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Newsletter_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_cards`
--
ALTER TABLE `news_cards`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_cards`
--
ALTER TABLE `service_cards`
  MODIFY `Card_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `side_menu`
--
ALTER TABLE `side_menu`
  MODIFY `menu_list_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
