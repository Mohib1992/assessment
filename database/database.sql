-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2014 at 06:48 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pillers`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_description_id` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_description_id` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `employee_description_id`, `image`, `created_at`, `updated_at`) VALUES
(29, 'Nuwan Gomez,MSc', '13834', 'member01_jpg_srz.00.jpg', '2014-12-03 10:29:47', '2014-12-03 10:33:27'),
(30, 'Robi Rahman,MSc', '21714', 'member03.jpg', '2014-12-03 10:30:13', '2014-12-03 10:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `code`, `created_at`, `updated_at`) VALUES
(55, 'eng', '2014-11-26 03:57:03', '2014-11-26 03:57:03'),
(56, 'ger', '2014-11-26 03:57:03', '2014-11-26 03:57:03'),
(57, 'eng', '2014-12-05 04:44:58', '2014-12-05 04:44:58'),
(58, 'ger', '2014-12-05 04:44:58', '2014-12-05 04:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `language_translation`
--

CREATE TABLE IF NOT EXISTS `language_translation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `translation_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `language_translation`
--

INSERT INTO `language_translation` (`id`, `translation_id`, `language_id`, `created_at`, `updated_at`) VALUES
(16, 20, 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 21, 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_08_14_170109_create_user_table', 1),
('2014_08_14_170451_create_news_table', 1),
('2014_08_14_170817_create_project_table', 1),
('2014_08_14_171044_create_page_table', 1),
('2014_08_14_171252_create_service_table', 1),
('2014_08_14_172447_create_tag_table', 1),
('2014_08_14_172848_create_employee_table', 1),
('2014_08_14_173041_create_post_table', 1),
('2014_08_17_212453_create_client_table', 1),
('2014_11_24_103827_create_translation_key_table', 1),
('2014_11_24_104424_create_translation_table', 1),
('2014_11_24_104557_create_language_table', 1),
('2014_11_25_093305_create_tranlation_language_table', 1),
('2014_08_14_170109_create_user_table', 1),
('2014_08_14_170451_create_news_table', 1),
('2014_08_14_170817_create_project_table', 1),
('2014_08_14_171044_create_page_table', 1),
('2014_08_14_171252_create_service_table', 1),
('2014_08_14_172447_create_tag_table', 1),
('2014_08_14_172848_create_employee_table', 1),
('2014_08_14_173041_create_post_table', 1),
('2014_08_17_212453_create_client_table', 1),
('2014_11_24_103827_create_translation_key_table', 1),
('2014_11_24_104424_create_translation_table', 1),
('2014_11_24_104557_create_language_table', 1),
('2014_11_25_093305_create_tranlation_language_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_id` text COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('publish','not publish') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_id`, `description_id`, `cover_image`, `status`, `created_at`, `updated_at`) VALUES
(8, '29545', '20974', '10442375_690189644361890_3811038115450593549_n.jpg', 'not publish', '2014-12-21 09:30:22', '2014-12-21 09:30:22'),
(9, '26008', '16881', '10442375_690189644361890_3811038115450593549_n.jpg', '', '2014-12-22 01:58:26', '2014-12-22 01:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_content_id` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('publish','not publish') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title_id`, `page_content_id`, `image`, `video`, `status`, `created_at`, `updated_at`) VALUES
(3, '24722', '19043', '', '', '', '2014-12-01 13:11:31', '2014-12-18 07:08:30'),
(4, '29217', '22086', '', '', '', '2014-12-01 13:12:52', '2014-12-18 07:13:24'),
(5, '28100', '9389', '', '', '', '2014-12-01 13:15:23', '2014-12-02 08:43:33'),
(6, '994', '13171', '', '', 'not publish', '2014-12-01 13:16:48', '2014-12-01 13:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('publish','not publish') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_description_id` text COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('publish','not publish') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_description_id` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('publish','not publish') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE IF NOT EXISTS `translation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `translation_key_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=111 ;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`id`, `translation_key_id`, `content`, `language_id`, `created_at`, `updated_at`) VALUES
(24, 9516, 'mmm', 55, '2014-12-01 09:54:47', '2014-12-01 09:54:47'),
(25, 9516, 'mmm', 56, '2014-12-01 09:54:47', '2014-12-01 09:54:47'),
(26, 27637, 'mmmm', 55, '2014-12-01 09:54:47', '2014-12-01 09:54:47'),
(27, 19850, 'mmm', 55, '2014-12-01 09:55:32', '2014-12-01 09:55:32'),
(28, 19850, 'mmm', 56, '2014-12-01 09:55:32', '2014-12-01 09:55:32'),
(29, 16379, 'mmmmm', 55, '2014-12-01 09:55:32', '2014-12-01 09:55:32'),
(30, 26648, 'mmm', 55, '2014-12-01 09:56:33', '2014-12-01 09:56:33'),
(31, 26648, 'mmm', 56, '2014-12-01 09:56:33', '2014-12-01 09:56:33'),
(32, 21105, 'mmmm', 55, '2014-12-01 09:56:33', '2014-12-01 09:56:33'),
(37, 24722, 'Information Technology', 55, '2014-12-01 13:11:30', '2014-12-01 13:11:30'),
(38, 24722, 'in german', 56, '2014-12-01 13:11:30', '2014-12-02 08:22:44'),
(39, 19043, '<p>Utilizing their IT background and several years of international experience in order to accomplish the vision of helping young, enthusiastic students start up their careers has been one of their many goals. As the global world of outsourcing keeps growing, they realized that a large number of IT businesses had opened up in the Asian subcontinent,\r\n				but are being run by big organizations that only hire experienced professionals.</p>\r\n				<p>3Spire’s IT branch has been founded on the notion to give young\r\n				students originating from weak social backgrounds an opportunity to evolve and utilize their skills and talent in order to achieve a\r\n				better future for themselves.  The goal is to not only form them into experts of their field, but to also provide professional guidance through\r\n				the various stages of their personal development. At this time two young students from Dhaka have been taken under the wings of 3Spire whilst\r\n				plans are being made to increase the number of students gradually as the business expands.\r\n				</p>', 55, '2014-12-01 13:11:30', '2014-12-02 08:17:09'),
(40, 19043, 'mm', 56, '2014-12-01 13:11:31', '2014-12-02 08:30:09'),
(41, 29217, 'Garments', 55, '2014-12-01 13:12:52', '2014-12-01 13:12:52'),
(42, 29217, '', 56, '2014-12-01 13:12:52', '2014-12-01 13:12:52'),
(43, 22086, '<p>Learning about the difficulties garments workers face each day in their working environment led Nuwan Gomes and Robi Rahman to research\r\n				more about working conditions in such factories. Their initial thought and aim “We discovered the grievances and decided to try our best to\r\n				ensure quality products are been manufactured whilst ensuring health & safety of our employees as well as their development and secure future.”\r\n				Furthermore, they learned that the social and health standards one enjoys in Europe are not existent for employees in Asian countries. With the\r\n				aim of making a difference, they reached out to small businesses in Asia and decided to help them become a part of the competitive market hence\r\n				giving people in rural areas a chance to live a better life while ensuring the export of high quality products.</p>\r\n\r\n				<p>“The ambition we set for ourselves is not to be part of the existing garments trade industry, but to start a an honorable way of producing and\r\n				exporting products as well as giving individuals the possibility of leading a better and healthy life in the future.” 3Spire is aiming to reach this\r\n				objective with many small fabric owners in rural areas who are ready to provide their employees with correlating working environments and\r\n				advancement opportunities. The firms 3Spire work together with commit themselves to reimburse their employees with a moderate wage and healthy\r\n				working conditions such as regulated work schedules, a safe environment and many other benefits for employees. </p>', 55, '2014-12-01 13:12:52', '2014-12-02 08:31:32'),
(44, 22086, '', 56, '2014-12-01 13:12:52', '2014-12-01 13:12:52'),
(45, 28100, 'Who We Are ?', 55, '2014-12-01 13:15:23', '2014-12-01 13:15:23'),
(46, 28100, '', 56, '2014-12-01 13:15:23', '2014-12-01 13:15:23'),
(47, 9389, '<i>Nuwan Gomes</i> and <i>Robi Rahman</i> are two young professionals with several years of experiencein the consulting and project management field. The initial notion of building a partnership one fine\r\n					day whilst completing their masters degrees at the University of Applied Science in Vienna, Austria\r\n					turned into an actual vision of starting up a tangible business together. This vision, combined with\r\n					the compulsion of making a positive change in lesser developed regions of the world, led them to the\r\n					concept of 3Spire - a single venture that diverts into several branches.', 55, '2014-12-01 13:15:23', '2014-12-02 08:43:33'),
(48, 9389, '', 56, '2014-12-01 13:15:23', '2014-12-01 13:15:23'),
(49, 994, 'Our Advantages', 55, '2014-12-01 13:16:48', '2014-12-01 13:16:48'),
(50, 994, '', 56, '2014-12-01 13:16:48', '2014-12-01 13:16:48'),
(51, 13171, '- Company headquarter located in Vienna, Austria\r\n- Multilingualism, since both CEOs grew up in Austria and are therefore fluent in German, English, and their mother tongues, Sinhala, Bengali and Hindi.\r\n- Several years of experience with big budget proje', 55, '2014-12-01 13:16:48', '2014-12-01 13:16:48'),
(52, 13171, '', 56, '2014-12-01 13:16:48', '2014-12-01 13:16:48'),
(53, 13834, '<p>Born on the 29th of September 1982 in Colombo, Sri Lanka, Nuwan is the creative mind behind \r\n\r\n“3Spire”. Interested in art, design and technical development, he completed his master’s degree in \r\n\r\nInformation’s Management and is working as a project manager in one of the world’s largest \r\n\r\ninsurance companies. Prior to his current role he managed big budget projects throughout the DACH \r\n\r\n(Germany-Austria-Switzerland) region for some of the largest IT- companies worldwide. Hence he is \r\n\r\nconfident with customer dealings across multiple regions.</p>\r\n\r\n<p>Combining his knowledge, interests and philanthropic approach to start a sustainable business has \r\n\r\nbeen on his mind ever since he entered the job market and after multiple years of being \r\n\r\nprofessionally active within the IT sector, Nuwan feels that the time is right to start with 3Spire.</p>', 55, '2014-12-03 10:29:46', '2014-12-03 10:31:33'),
(54, 13834, 'garman', 56, '2014-12-03 10:29:46', '2014-12-03 10:40:50'),
(55, 21714, '<p>Born on the 29th of September 1983 in Vienna, Austria, Robi is known to be a committed analytical \r\n\r\nthinking perfectionist. After graduating with a master’s degree in Information’s Management he \r\n\r\ngathered extensive working experience in one of the world’s major economic municipalities, London, \r\n\r\nUK. Thereafter he returned to Vienna and continued his career as a project manager for the world’s \r\n\r\nlargest cable provider. Robi is known to be a meticulously working professional who is eager to \r\n\r\ncapture details. Having been employed by globally established companies and gathering valuable \r\n\r\nexperience in the fields of consulting and project management has given Robi great confidence in \r\n\r\nmeeting customer needs and managing diverse complicated tasks which will be an essential \r\n\r\ncomponent within 3Spire.</p>', 55, '2014-12-03 10:30:13', '2014-12-03 10:34:36'),
(56, 21714, '', 56, '2014-12-03 10:30:13', '2014-12-03 10:34:36'),
(58, 25580, 'new', 56, '2014-12-05 02:42:17', '2014-12-05 02:42:17'),
(59, 29788, 'Born on the 29th of September 1982 in Colombo, Sri Lanka, Nuwan is the creative mind behind "3Spire”. Interested in art, design and technical development, he completed his master’s degree in Information’s Management and is working as a project manager in one of the world’s largest insurance companies. Prior to his current role he managed big budget projects throughout the DACH  (Germany-Austria-Switzerland) region for some of the largest IT- companies worldwide. Hence he is confident with customer dealings across multiple regions.\n             Combining his knowledge, interests and philanthropic approach to start a sustainable business has been on his mind ever since he entered the job market and after multiple years of being professionally active within the IT sector, Nuwan feels that the time is right to start with 3Spire.', 0, '2014-12-05 04:44:58', '2014-12-05 04:44:58'),
(60, 1, 'Home', 55, '0000-00-00 00:00:00', '2014-12-18 06:04:23'),
(61, 2, 'Client', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 1, 'zomm', 56, '0000-00-00 00:00:00', '2014-12-18 06:07:09'),
(64, 3, 'Services', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 4, 'Germent', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 5, 'IT', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 6, 'Social', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 7, 'Blog', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 8, 'About Us', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 9, 'About Us', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 10, 'Team', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 11, 'Contact', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 2, 'zclien', 56, '2014-12-17 06:32:11', '2014-12-17 06:32:11'),
(75, 3, 'mmm', 56, '2014-12-18 06:30:27', '2014-12-18 06:30:27'),
(76, 7686, 'kljdflkaj', 55, '2014-12-19 06:08:45', '2014-12-19 06:08:45'),
(77, 756, 'lkjdljafkladskjfalk', 56, '2014-12-19 06:09:58', '2014-12-19 06:09:58'),
(78, 19034, '', 56, '2014-12-19 06:11:14', '2014-12-19 06:11:14'),
(79, 16964, '', 56, '2014-12-19 11:58:00', '2014-12-19 11:58:00'),
(80, 4803, 'mmmm', 55, '2014-12-19 12:14:34', '2014-12-19 12:14:34'),
(81, 11362, '', 56, '2014-12-19 12:16:22', '2014-12-19 12:16:22'),
(82, 29171, 'english', 55, '2014-12-19 12:18:49', '2014-12-19 12:18:49'),
(83, 29171, 'german', 56, '2014-12-19 12:18:49', '2014-12-19 12:18:49'),
(84, 16048, 'english', 55, '2014-12-19 12:18:49', '2014-12-19 12:18:49'),
(85, 16048, 'german', 56, '2014-12-19 12:18:49', '2014-12-19 12:18:49'),
(87, 297, 'german', 56, '2014-12-19 12:19:50', '2014-12-19 12:19:50'),
(89, 11438, 'german', 56, '2014-12-19 12:19:50', '2014-12-19 12:19:50'),
(90, 5753, 'mmm', 55, '2014-12-19 13:11:14', '2014-12-19 13:11:14'),
(91, 5406, 'mmm', 55, '2014-12-21 09:26:31', '2014-12-21 09:26:31'),
(92, 20991, 'mmm', 55, '2014-12-21 09:29:16', '2014-12-21 09:29:16'),
(93, 20991, 'mmm', 56, '2014-12-21 09:29:16', '2014-12-21 09:29:16'),
(94, 19404, 'mmm', 55, '2014-12-21 09:29:16', '2014-12-21 09:29:16'),
(95, 19404, 'mmmm', 56, '2014-12-21 09:29:16', '2014-12-21 09:29:16'),
(97, 7701, 'mmm', 56, '2014-12-21 09:29:51', '2014-12-21 09:29:51'),
(99, 25898, 'mmmm', 56, '2014-12-21 09:29:51', '2014-12-21 09:29:51'),
(100, 29545, 'mmm', 55, '2014-12-21 09:30:22', '2014-12-21 09:30:22'),
(101, 29545, 'mmm', 56, '2014-12-21 09:30:22', '2014-12-21 09:30:22'),
(102, 20974, 'mmm', 55, '2014-12-21 09:30:22', '2014-12-21 09:30:22'),
(103, 20974, 'mmmm', 56, '2014-12-21 09:30:22', '2014-12-21 09:30:22'),
(104, 8, '', 56, '2014-12-21 12:16:25', '2014-12-21 12:16:25'),
(105, 12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	Lorem ipsum dolor sit amet', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 13, 'Due to our geographical situation and professional background we have some advantages. To learn more, please follow the link', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 26008, 'new', 55, '2014-12-22 01:58:25', '2014-12-22 01:58:25'),
(108, 26008, 'new', 56, '2014-12-22 01:58:25', '2014-12-22 01:58:25'),
(109, 16881, 'new', 55, '2014-12-22 01:58:26', '2014-12-22 01:58:26'),
(110, 16881, 'enw', 56, '2014-12-22 01:58:26', '2014-12-22 01:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `translation_key`
--

CREATE TABLE IF NOT EXISTS `translation_key` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=60 ;

--
-- Dumping data for table `translation_key`
--

INSERT INTO `translation_key` (`id`, `code`, `created_at`, `updated_at`) VALUES
(17, '26867', '2014-11-26 10:27:26', '2014-11-26 10:27:26'),
(18, '20342', '2014-11-26 10:28:06', '2014-11-26 10:28:06'),
(20, '14206', '2014-12-01 09:46:49', '2014-12-01 09:46:49'),
(21, '13535', '2014-12-01 09:53:07', '2014-12-01 09:53:07'),
(22, '27637', '2014-12-01 09:54:47', '2014-12-01 09:54:47'),
(23, '16379', '2014-12-01 09:55:32', '2014-12-01 09:55:32'),
(24, '21105', '2014-12-01 09:56:32', '2014-12-01 09:56:33'),
(25, '24791', '2014-12-01 09:59:52', '2014-12-01 09:59:52'),
(26, '19043', '2014-12-01 13:11:30', '2014-12-01 13:11:30'),
(27, '22086', '2014-12-01 13:12:52', '2014-12-01 13:12:52'),
(28, '9389', '2014-12-01 13:15:23', '2014-12-01 13:15:23'),
(29, '13171', '2014-12-01 13:16:48', '2014-12-01 13:16:48'),
(30, '15620', '2014-12-02 08:59:38', '2014-12-02 08:59:38'),
(31, '14764', '2014-12-03 10:23:19', '2014-12-03 10:23:19'),
(32, '9845', '2014-12-03 10:27:35', '2014-12-03 10:27:35'),
(33, '13834', '2014-12-03 10:29:46', '2014-12-03 10:29:46'),
(34, '21714', '2014-12-03 10:30:13', '2014-12-03 10:30:13'),
(35, '19392', '2014-12-05 01:43:53', '2014-12-05 01:43:53'),
(36, '29316', '2014-12-05 01:44:21', '2014-12-05 01:44:21'),
(37, '10302', '2014-12-05 01:54:38', '2014-12-05 01:54:38'),
(38, '25580', '2014-12-05 02:42:17', '2014-12-05 02:42:17'),
(39, '29788', '2014-12-05 04:44:58', '2014-12-05 04:44:58'),
(40, '7686', '2014-12-19 06:08:45', '2014-12-19 06:08:45'),
(41, '756', '2014-12-19 06:09:58', '2014-12-19 06:09:58'),
(42, '19034', '2014-12-19 06:11:14', '2014-12-19 06:11:14'),
(43, '', '2014-12-19 11:58:00', '2014-12-19 11:58:00'),
(44, '', '2014-12-19 12:09:50', '2014-12-19 12:09:50'),
(45, '', '2014-12-19 12:10:19', '2014-12-19 12:10:19'),
(46, '', '2014-12-19 12:12:22', '2014-12-19 12:12:22'),
(47, '', '2014-12-19 12:13:20', '2014-12-19 12:13:20'),
(48, '', '2014-12-19 12:13:43', '2014-12-19 12:13:43'),
(49, '', '2014-12-19 12:14:03', '2014-12-19 12:14:03'),
(50, '', '2014-12-19 12:14:34', '2014-12-19 12:14:34'),
(51, '', '2014-12-19 12:16:21', '2014-12-19 12:16:21'),
(52, '', '2014-12-19 12:18:49', '2014-12-19 12:18:49'),
(53, '', '2014-12-19 12:19:50', '2014-12-19 12:19:50'),
(54, '', '2014-12-19 13:11:14', '2014-12-19 13:11:14'),
(55, '', '2014-12-21 09:26:30', '2014-12-21 09:26:30'),
(56, '', '2014-12-21 09:29:16', '2014-12-21 09:29:16'),
(57, '', '2014-12-21 09:29:51', '2014-12-21 09:29:51'),
(58, '', '2014-12-21 09:30:22', '2014-12-21 09:30:22'),
(59, '', '2014-12-22 01:58:25', '2014-12-22 01:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(28, 'moin@khan.com', '$2y$10$rA/gm3ZbgphGSS/nQpgh3O6gpE2Jn79XlcCYeiQNmcIgGtKevbwMG', 'admin', '2014-11-26 03:57:03', '2014-11-26 03:57:03'),
(29, 'moin@khan.com', '$2y$10$D2GkZHdwRmxhduoHZMsLfOn/0leAbDZU.LdgTTPjgTgm/8sh2463G', 'admin', '2014-12-05 04:44:58', '2014-12-05 04:44:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
