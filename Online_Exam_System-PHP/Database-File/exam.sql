-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 04:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(36) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('65b649c27525e', '65b649c275c19'),
('65b649f1e057b', '65b649f1e0e1b'),
('65b64a8b96558', '65b64a8b970a7'),
('65b79720abd1a', '65b79720ad98d'),
('65b79720b96b8', '65b79720bc136'),
('65b79770c1a72', '65b79770c6c7d'),
('65b797b35a07d', '65b797b35ba78'),
('65b79b87494b1', '65b79b874a968'),
('65b79e1d0c700', '65b79e1d0e43b'),
('65b7a1ec07ca7', '65b7a1ec09eaf'),
('65b9bb4fd447f', '65b9bb4fd6547'),
('65b9bb4fdcdeb', '65b9bb4fdda62'),
('65b9bbf0d5720', '65b9bbf0d7d6e'),
('65b9d202db014', '65b9d202dd442'),
('65b9d20302328', '65b9d20303252'),
('65b9d792dc1c7', '65b9d792dda99'),
('65b9d792e7430', '65b9d792ec743'),
('65ba65021b07c', '65ba65021cbf9'),
('65ba65022e6cd', '65ba65022f483'),
('65bbaec89c80f', '65bbaec89df64'),
('65bbaec8a3970', '65bbaec8a4645'),
('65e3e0c83a845', '65e3e0c83bf4e'),
('65e3e0c8429b0', '65e3e0c84599e'),
('65e3e0c84b666', '65e3e0c84c3bd'),
('65e3e0c850886', '65e3e0c851357'),
('65e3e0c856e81', '65e3e0c857f7f'),
('65e3e2df25e59', '65e3e2df28637'),
('65e3e2df2d2ab', '65e3e2df300b1'),
('65e3e2df350fd', '65e3e2df35c74'),
('65e3e2df399c9', '65e3e2df3a5dc'),
('65e3e2df41984', '65e3e2df42820'),
('65e3e4af61fa0', '65e3e4af69303'),
('65e3e4af75fa3', '65e3e4af78441'),
('65e3e4af7d872', '65e3e4af7eef1'),
('65e3e4af84879', '65e3e4af85647'),
('65e3e4af89f99', '65e3e4af8b4fa'),
('65e3e759a50f3', '65e3e759a69da'),
('65e3e759ac91a', '65e3e759ae673'),
('65e3e759b41c6', '65e3e759b6dd9'),
('65e3e759bcb76', '65e3e759bd670'),
('65e3e759c1a69', '65e3e759c28c0'),
('65e3e8de6dcf6', '65e3e8de6f5a9'),
('65e3e8de7a6c4', '65e3e8de7deda'),
('65e3e8de82dd2', '65e3e8de8410b'),
('65e3e8de8aadf', '65e3e8de8d447'),
('65e3e8de91a2a', '65e3e8de9257a'),
('65e3ec40e6808', '65e3ec40e803a'),
('65e3ec40ee025', '65e3ec40eecd4'),
('65e3ec4100793', '65e3ec410219b'),
('65e3ec4109add', '65e3ec410afac'),
('65e3ec411167c', '65e3ec41121a2'),
('65e3edb1cd81a', '65e3edb1cee43'),
('65e3edb1d393b', '65e3edb1d43c9'),
('65e3edb1dd582', '65e3edb1de8b6'),
('65e3edb1e4aea', '65e3edb1e5cbf'),
('65e3edb1eb355', '65e3edb1ec108'),
('65e3f23849067', '65e3f2384a4ad'),
('65e3f2385086b', '65e3f2385139c'),
('65e3f23855591', '65e3f2385601f'),
('65e3f2385adf7', '65e3f2385d562'),
('65e3f23861888', '65e3f238626b1'),
('65e3f53b4cea2', '65e3f53b4ed30'),
('65e3f53b552e7', '65e3f53b55f45'),
('65e3f53b5ac0c', '65e3f53b5b979'),
('65e3f53b60238', '65e3f53b60dfe'),
('65e3f53b655b3', '65e3f53b663f1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('first ', 'name@gmail.com', 'this is meassager '),
('first', 'name@gmail.com', 'this is meassager'),
('Jon', 'Doe@gmail.com', 'This is last testing may be'),
('Jon', 'Doe@gmail.com', 'This is last testing may be'),
('klsjf', 'raju@hotmail.com', 'fkljfd'),
('LAst', 'name@gmail.com', 'what is your name'),
('Rakesh Khanna', 'khanna@gmail.com', 'This is the person who is invisible'),
('Rocky', 'sivirop563@mainmile.com', 'This is Last Testing'),
('kskfk', 'kjlsjd@gmail.com', 'fdsdkljf'),
('12234342', '1234@fmail.com', '86513&#039;'),
('&#039;&#039;sdf&#039;dfs&#039;', 'fsjklf@gmail.com', '&#039;s&#039;dff&#039;&#039;&#039;dvfbffs5489e615d'),
('&#039;', '&#039;sfdkjl@gmail.com', '&#039;');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `subject`, `email`, `feedback`, `date`, `time`) VALUES
('65b6750b036e3', 'ram bhagat ', 'Account Takeover Vulnerability on https://todoist.com/', 'sesih97370@mkurg.com', 'this is test webstte', '2024-01-28', '04:38:51pm'),
('abc123', 'John Doe', 'Website Experience', 'john@example.com', 'Great website!', '2024-01-29', '12:30:00'),
('xyz789', 'Alice Smith', 'Customer Support', 'alice@example.com', 'Prompt and helpful support!', '2024-01-30', '14:45:00'),
('pqr456', 'Bob Johnson', 'Product Suggestions', 'bob@example.com', 'Here are some ideas for improvement.', '2024-01-31', '09:15:00'),
('uvw789', 'Eva Williams', 'Bug Report', 'eva@example.com', 'Found a bug, please fix!', '2024-02-01', '16:20:00'),
('lmn123', 'Chris Davis', 'General Inquiry', 'chris@example.com', 'Inquiring about your services.', '2024-02-02', '10:00:00'),
('65ba62bdb3af6', 'Rakesh ', 'Kulkarni', 'sivirop563@mainmile.com', 'This is a Testing of our feedback', '2024-01-31', '04:09:49pm'),
('65d1aaf478c45', 'Rony', 'Testing', 'ddd@gmail.com', 'feedback', '2024-02-18', '08:00:04am'),
('65e546d65dd99', 'Rakesh', 'Testing Purpose', 'rakesh@gmail.com', 'This is Testing of RCE', '2024-03-04', '04:58:14am');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `correct` int(10) NOT NULL,
  `wrong` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `correct`, `wrong`, `date`) VALUES
('ramu2@gmail.com', '65e3ec95db237', 10, 5, 5, 0, '2024-03-04 11:12:51'),
('student@gmail.com', '65e3df0a83f0f', 10, 5, 5, 0, '2024-03-09 03:37:19'),
('student@gmail.com', '65e3f3dc48908', 10, 5, 5, 0, '2024-03-20 03:22:18'),
('student@gmail.com', '65e3f10a9d3f9', 10, 5, 5, 0, '2024-03-20 03:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('65e3e0c83a845', 'Private Home Page', '65e3e0c83bf47'),
('65e3e0c83a845', 'Public Home Page', '65e3e0c83bf4c'),
('65e3e0c83a845', 'Preformatted Hyperlinks Processor ', '65e3e0c83bf4d'),
('65e3e0c83a845', 'Hypertext Preprocessor.', '65e3e0c83bf4e'),
('65e3e0c8429b0', '$_POST.', '65e3e0c84599e'),
('65e3e0c8429b0', '$_GET', '65e3e0c8459a3'),
('65e3e0c8429b0', '$_REQUEST', '65e3e0c8459a4'),
('65e3e0c8429b0', ' $_COOKIE', '65e3e0c8459a5'),
('65e3e0c84b666', 'redirect_to()', '65e3e0c84c3b7'),
('65e3e0c84b666', ' location()', '65e3e0c84c3bc'),
('65e3e0c84b666', 'header().', '65e3e0c84c3bd'),
('65e3e0c84b666', ' redirect()', '65e3e0c84c3be'),
('65e3e0c850886', ' Converts an array into a string.', '65e3e0c851357'),
('65e3e0c850886', 'Converts a string into an array', '65e3e0c85135c'),
('65e3e0c850886', 'Checks if a string contains a specific substring', '65e3e0c85135d'),
('65e3e0c850886', 'Replaces parts of a string with another string', '65e3e0c85135e'),
('65e3e0c856e81', 'The main PHP configuration file.', '65e3e0c857f7f'),
('65e3e0c856e81', 'A PHP database connection file', '65e3e0c857f84'),
('65e3e0c856e81', 'A file that contains PHP functions', '65e3e0c857f85'),
('65e3e0c856e81', 'A file where PHP error logs are stored', '65e3e0c857f86'),
('65e3e2df25e59', 'Google Services Integration', '65e3e2df28631'),
('65e3e2df25e59', ' iOS App Store.', '65e3e2df28637'),
('65e3e2df25e59', 'Linux Kernel', '65e3e2df28638'),
('65e3e2df25e59', 'Customizable User Interface', '65e3e2df28639'),
('65e3e2df2d2ab', 'Swift', '65e3e2df300a9'),
('65e3e2df2d2ab', 'Python', '65e3e2df300b0'),
('65e3e2df2d2ab', 'Java.', '65e3e2df300b1'),
('65e3e2df2d2ab', 'C++', '65e3e2df300b2'),
('65e3e2df350fd', 'It can only be modified by Google', '65e3e2df35c71'),
('65e3e2df350fd', 'It can be modified and customized by anyone.', '65e3e2df35c74'),
('65e3e2df350fd', 'It cannot be modified or customized', '65e3e2df35c75'),
('65e3e2df350fd', 'It can only be used on Google-branded devices', '65e3e2df35c76'),
('65e3e2df399c9', 'Linux.', '65e3e2df3a5dc'),
('65e3e2df399c9', 'Windows', '65e3e2df3a5e1'),
('65e3e2df399c9', 'FreeBSD', '65e3e2df3a5e2'),
('65e3e2df399c9', 'Unix', '65e3e2df3a5e3'),
('65e3e2df41984', 'Android Studio.', '65e3e2df42820'),
('65e3e2df41984', 'Eclipse', '65e3e2df42826'),
('65e3e2df41984', 'Visual Studio', '65e3e2df42828'),
('65e3e2df41984', 'Xcode', '65e3e2df4282d'),
('65e3e4af61fa0', 'Integration Testing', '65e3e4af692fd'),
('65e3e4af61fa0', 'Unit Testing.', '65e3e4af69303'),
('65e3e4af61fa0', ' System Testing', '65e3e4af69304'),
('65e3e4af61fa0', 'Acceptance Testing', '65e3e4af69305'),
('65e3e4af75fa3', 'Usability Testing', '65e3e4af7842d'),
('65e3e4af75fa3', ' Stress Testing', '65e3e4af78440'),
('65e3e4af75fa3', ' Load Testing.', '65e3e4af78441'),
('65e3e4af75fa3', 'Regression Testing', '65e3e4af78442'),
('65e3e4af7d872', 'Acceptance Testing', '65e3e4af7eeeb'),
('65e3e4af7d872', 'System Testing', '65e3e4af7eef0'),
('65e3e4af7d872', 'Integration Testing.', '65e3e4af7eef1'),
('65e3e4af7d872', 'Unit Testing', '65e3e4af7eef2'),
('65e3e4af84879', 'Vulnerability.', '65e3e4af85647'),
('65e3e4af84879', 'Reusability', '65e3e4af8564c'),
('65e3e4af84879', 'Performance', '65e3e4af8564d'),
('65e3e4af84879', 'Correctness', '65e3e4af8564e'),
('65e3e4af89f99', 'Equivalence Partitioning', '65e3e4af8b4f1'),
('65e3e4af89f99', 'White Box Testing', '65e3e4af8b4f9'),
('65e3e4af89f99', 'Black Box Testing.', '65e3e4af8b4fa'),
('65e3e4af89f99', 'Boundary Testing', '65e3e4af8b4fb'),
('65e3e759a50f3', 'A hardware device used to measure the efficiency of algorithms', '65e3e759a69d0'),
('65e3e759a50f3', 'A computer algorithm for solving differential equations', '65e3e759a69d8'),
('65e3e759a50f3', 'A type of automaton with a read/write head and an infinite tape.', '65e3e759a69da'),
('65e3e759a50f3', 'A machine used to calculate the computational complexity of a problem', '65e3e759a69db'),
('65e3e759ac91a', 'Move', '65e3e759ae66d'),
('65e3e759ac91a', 'Erase.', '65e3e759ae673'),
('65e3e759ac91a', 'Read', '65e3e759ae674'),
('65e3e759ac91a', 'Write', '65e3e759ae675'),
('65e3e759b41c6', 'The total number of steps a Turing machine can perform before halting', '65e3e759b6dd0'),
('65e3e759b41c6', 'The maximum length of time a Turing machine can run before halting', '65e3e759b6dd7'),
('65e3e759b41c6', 'Whether a given algorithm can be implemented on a Turing machine', '65e3e759b6dd8'),
('65e3e759b41c6', 'Whether a given Turing machine will eventually stop on a given input.', '65e3e759b6dd9'),
('65e3e759bcb76', 'A language that can be recognized by a Turing machine', '65e3e759bd66a'),
('65e3e759bcb76', 'A language that can be recognized by a context-sensitive grammar', '65e3e759bd66e'),
('65e3e759bcb76', 'A language that can be recognized by a pushdown automaton', '65e3e759bd66f'),
('65e3e759bcb76', 'A language that can be recognized by a finite automaton.', '65e3e759bd670'),
('65e3e759c1a69', 'Turing machine', '65e3e759c28bb'),
('65e3e759c1a69', 'Queue automaton.', '65e3e759c28c0'),
('65e3e759c1a69', 'Pushdown automaton', '65e3e759c28c1'),
('65e3e759c1a69', 'Finite automaton', '65e3e759c28c2'),
('65e3e8de6dcf6', 'Medical imaging', '65e3e8de6f5a4'),
('65e3e8de6dcf6', 'Natural language processing.', '65e3e8de6f5a9'),
('65e3e8de6dcf6', 'Architecture and design', '65e3e8de6f5aa'),
('65e3e8de6dcf6', 'Entertainment and gaming', '65e3e8de6f5ab'),
('65e3e8de7a6c4', 'Rendering', '65e3e8de7ded0'),
('65e3e8de7a6c4', 'Analysis.', '65e3e8de7deda'),
('65e3e8de7a6c4', 'Transformations', '65e3e8de7dedb'),
('65e3e8de7a6c4', 'Modeling', '65e3e8de7dedc'),
('65e3e8de82dd2', 'To process and display 3D objects.', '65e3e8de8410b'),
('65e3e8de82dd2', 'To translate 3D objects on a screen', '65e3e8de84112'),
('65e3e8de82dd2', 'To convert 2D images to 3D models', '65e3e8de84113'),
('65e3e8de82dd2', 'To create a wireframe representation', '65e3e8de84114'),
('65e3e8de8aadf', 'Cube', '65e3e8de8d441'),
('65e3e8de8aadf', 'Rectangle.', '65e3e8de8d447'),
('65e3e8de8aadf', 'Cylinder', '65e3e8de8d448'),
('65e3e8de8aadf', 'Sphere', '65e3e8de8d449'),
('65e3e8de91a2a', 'It is a method for rendering wireframe models', '65e3e8de92574'),
('65e3e8de91a2a', 'It is a type of 3D modeling algorithm', '65e3e8de92578'),
('65e3e8de91a2a', 'It is a technique to improve image resolution', '65e3e8de92579'),
('65e3e8de91a2a', 'It is a technique to reduce aliasing artifacts in digital images.', '65e3e8de9257a'),
('65e3ec40e6808', 'Print catalogs', '65e3ec40e8030'),
('65e3ec40e6808', 'Traditional marketplaces', '65e3ec40e8038'),
('65e3ec40e6808', 'Online transactions.', '65e3ec40e803a'),
('65e3ec40e6808', 'Brick-and-mortar stores', '65e3ec40e803b'),
('65e3ec40ee025', 'Wider reach and global access to customers.', '65e3ec40eecd4'),
('65e3ec40ee025', 'Limited competition from other online businesses', '65e3ec40eecdb'),
('65e3ec40ee025', 'Greater physical presence in local communities', '65e3ec40eecdd'),
('65e3ec40ee025', 'Lower costs for goods and services', '65e3ec40eecdf'),
('65e3ec4100793', 'It is a physical location where customers make payments', '65e3ec4102193'),
('65e3ec4100793', 'It provides customer service and support for payment-related issues', '65e3ec4102199'),
('65e3ec4100793', ' It enables secure online payments and transactions.', '65e3ec410219b'),
('65e3ec4100793', 'It converts customer transactions into physical currency', '65e3ec410219c'),
('65e3ec4109add', 'A company using e-procurement to purchase office supplies', '65e3ec410af9a'),
('65e3ec4109add', 'A manufacturer selling its products to a distributor', '65e3ec410afa9'),
('65e3ec4109add', 'A company selling its products to other businesses', '65e3ec410afaa'),
('65e3ec4109add', 'An individual selling handmade crafts online.', '65e3ec410afac'),
('65e3ec411167c', 'Offline marketing campaigns', '65e3ec411219c'),
('65e3ec411167c', 'A product catalog.', '65e3ec41121a2'),
('65e3ec411167c', 'User-generated content', '65e3ec41121a3'),
('65e3ec411167c', 'A social media presence', '65e3ec41121a4'),
('65e3edb1cd81a', 'Register', '65e3edb1cee3d'),
('65e3edb1cd81a', 'Memory Unit.', '65e3edb1cee43'),
('65e3edb1cd81a', 'Control Unit', '65e3edb1cee44'),
('65e3edb1cd81a', 'Arithmetic Logic Unit (ALU)', '65e3edb1cee45'),
('65e3edb1d393b', 'SRAM (Static Random Access Memory)', '65e3edb1d43c3'),
('65e3edb1d393b', 'RAM (Random Access Memory)', '65e3edb1d43c7'),
('65e3edb1d393b', 'ROM (Read-Only Memory)', '65e3edb1d43c8'),
('65e3edb1d393b', 'CPAM (Cache Programmable Access Memory).', '65e3edb1d43c9'),
('65e3edb1dd582', 'To control the flow of data between the CPU and other devices.', '65e3edb1de8b6'),
('65e3edb1dd582', 'To store data temporarily', '65e3edb1de8be'),
('65e3edb1dd582', 'To manage input and output devices', '65e3edb1de8bf'),
('65e3edb1dd582', ' To perform arithmetic and logical operations', '65e3edb1de8c1'),
('65e3edb1e4aea', 'Long Access Network', '65e3edb1e5cb7'),
('65e3edb1e4aea', 'Local Area Network.', '65e3edb1e5cbf'),
('65e3edb1e4aea', 'Limited Access Network', '65e3edb1e5cc1'),
('65e3edb1e4aea', 'Local Access Network', '65e3edb1e5cc2'),
('65e3edb1eb355', 'To store and retrieve data for users', '65e3edb1ec102'),
('65e3edb1eb355', 'To connect computers and devices in a network', '65e3edb1ec107'),
('65e3edb1eb355', 'To run applications and manage hardware resources.', '65e3edb1ec108'),
('65e3edb1eb355', 'To perform complex calculations and data analysis', '65e3edb1ec109'),
('65e3f23849067', 'The study of algorithms for prime factorization', '65e3f2384a4a4'),
('65e3f23849067', 'The study of secret writing and encryption techniques.', '65e3f2384a4ad'),
('65e3f23849067', 'The study of data structures and algorithms', '65e3f2384a4af'),
('65e3f23849067', 'The study of quantum mechanics', '65e3f2384a4b0'),
('65e3f2385086b', 'Initialization vector', '65e3f23851395'),
('65e3f2385086b', 'Data encryption algorithm', '65e3f2385139a'),
('65e3f2385086b', 'Private key', '65e3f2385139b'),
('65e3f2385086b', 'Public key.', '65e3f2385139c'),
('65e3f23855591', 'SHA', '65e3f23856017'),
('65e3f23855591', 'DES', '65e3f2385601d'),
('65e3f23855591', 'AES', '65e3f2385601e'),
('65e3f23855591', 'RSA.', '65e3f2385601f'),
('65e3f2385adf7', 'To prove the authenticity and integrity of data.', '65e3f2385d562'),
('65e3f2385adf7', 'To generate random numbers', '65e3f2385d569'),
('65e3f2385adf7', 'To calculate hash values', '65e3f2385d56b'),
('65e3f2385adf7', 'To encrypt data', '65e3f2385d56c'),
('65e3f23861888', 'SHA-1', '65e3f238626aa'),
('65e3f23861888', 'SHA-256', '65e3f238626b0'),
('65e3f23861888', 'AES.', '65e3f238626b1'),
('65e3f23861888', 'MD5', '65e3f238626b2'),
('65e3f53b4cea2', 'Clear, concise, and relevant messages.', '65e3f53b4ed30'),
('65e3f53b4cea2', 'Speaking without taking turns', '65e3f53b4ed40'),
('65e3f53b4cea2', 'Using jargon and technical terms', '65e3f53b4ed45'),
('65e3f53b4cea2', 'Passive listening', '65e3f53b4ed49'),
('65e3f53b552e7', 'Interrupting the speaker to express your opinions', '65e3f53b55f3a'),
('65e3f53b552e7', 'Ignoring non-verbal cues', '65e3f53b55f44'),
('65e3f53b552e7', 'Focusing on the speaker and providing feedback.', '65e3f53b55f45'),
('65e3f53b552e7', 'Speaking more than listening', '65e3f53b55f46'),
('65e3f53b5ac0c', 'Tone of voice', '65e3f53b5b96d'),
('65e3f53b5ac0c', 'Written words.', '65e3f53b5b979'),
('65e3f53b5ac0c', 'Facial expressions', '65e3f53b5b97b'),
('65e3f53b5ac0c', 'Body language', '65e3f53b5b97c'),
('65e3f53b60238', 'Video conference', '65e3f53b60df0'),
('65e3f53b60238', 'Phone', '65e3f53b60df9'),
('65e3f53b60238', 'Email', '65e3f53b60dfb'),
('65e3f53b60238', 'Face-to-face.', '65e3f53b60dfe'),
('65e3f53b655b3', 'Holding a brainstorming session', '65e3f53b663e8'),
('65e3f53b655b3', 'Assigning tasks to be completed after the meeting.', '65e3f53b663f1'),
('65e3f53b655b3', 'Implementing a new business plan', '65e3f53b663f6'),
('65e3f53b655b3', 'Taking a break from the meeting', '65e3f53b663fb');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('65b2976a27831', '65b6487e2b2ba', 'what is c++ ?', 4, 1),
('65b2976a27831', '65b649f1e057b', 'what is c++ ?', 4, 1),
('65b2976a27831', '65b64a8b96558', 'what is c++ ?', 4, 1),
('65b796cb2f769', '65b79720abd1a', 'This is question no.1', 4, 1),
('65b796cb2f769', '65b79720b96b8', 'This is question 2', 4, 2),
('65b79756e8168', '65b79770c1a72', 'This is question 1', 4, 1),
('65b797a53cc45', '65b797b35a07d', 'klfjsklfkljjskjj', 4, 1),
('65b79b6084b0f', '65b79b87494b1', 'This is question 1', 4, 1),
('65b79d6ef4157', '65b79e1d0c700', 'This Is Question 1', 4, 1),
('65b7a1ca07462', '65b7a1ec07ca7', 'This is question 1', 4, 1),
('65b9bb0c5ec0b', '65b9bb4fd447f', 'This is question first ', 4, 1),
('65b9bb0c5ec0b', '65b9bb4fdcdeb', 'how our project is ?', 4, 2),
('65b9bb81c81be', '65b9bbf0d5720', 'What you feel about our project?', 4, 1),
('65b9bb81c81be', '65b9bbf0df249', 'Do You Like Our Project ?', 4, 2),
('65b9d1ae3cc3b', '65b9d202db014', 'This is question no 1?', 4, 1),
('65b9d1ae3cc3b', '65b9d20302328', 'How was our website?', 4, 2),
('65b9d75c015fa', '65b9d792dc1c7', 'This is Question no 1', 4, 1),
('65b9d75c015fa', '65b9d792e7430', 'This is question 2', 4, 2),
('65ba64797542d', '65ba65021b07c', 'How Our Project Is ', 4, 1),
('65ba64797542d', '65ba65022e6cd', 'How Was The Design Of Our Project ', 4, 2),
('65bbad7e388a7', '65bbaec89c80f', 'What You Feel About Our Project ?', 4, 1),
('65bbad7e388a7', '65bbaec8a3970', 'How Was Our Project?', 4, 2),
('65e3df0a83f0f', '65e3e0c83a845', 'What does PHP stand for?', 4, 1),
('65e3df0a83f0f', '65e3e0c8429b0', 'Which of the following variables is used to extract data sent from an HTML form using the \"post\" method?', 4, 2),
('65e3df0a83f0f', '65e3e0c84b666', 'Which function in PHP is used to redirect a user from one page to another?', 4, 3),
('65e3df0a83f0f', '65e3e0c850886', 'What is the purpose of the PHP function \"implode()\"?\r\n', 4, 4),
('65e3df0a83f0f', '65e3e0c856e81', 'What does the term \"php.ini\" refer to?\r\n', 4, 5),
('65e3e15b3815d', '65e3e2df25e59', 'Which of the following is not a feature of Android?\r\n', 4, 1),
('65e3e15b3815d', '65e3e2df2d2ab', 'Android applications are primarily written in which programming language?\r\n', 4, 2),
('65e3e15b3815d', '65e3e2df350fd', ' Android is an open-source operating system. What does this mean?\r\n', 4, 3),
('65e3e15b3815d', '65e3e2df399c9', 'Android is based on which kernel?', 4, 4),
('65e3e15b3815d', '65e3e2df41984', 'Which platform is used by developers to create Android applications?\r\n', 4, 5),
('65e3e3a250547', '65e3e4af61fa0', 'Which of the following is a type of testing that focuses on verifying the functionality of individual modules or components of a software?\r\n', 4, 1),
('65e3e3a250547', '65e3e4af75fa3', 'Which testing approach aims to evaluate the overall performance of a software system under normal and peak load conditions?\r\n', 4, 2),
('65e3e3a250547', '65e3e4af7d872', 'Which type of testing focuses on verifying whether the software behaves as expected when interacting with other software or components?', 4, 3),
('65e3e3a250547', '65e3e4af84879', 'Which of the following is not a category of software quality attributes?\r\n', 4, 4),
('65e3e3a250547', '65e3e4af89f99', 'Which testing technique involves creating a set of inputs and expected outputs to verify whether the software produces the correct output for a given input?\r\n', 4, 5),
('65e3e5df181de', '65e3e759a50f3', 'In the theory of computation, what is a \"Turing machine\"?\r\n', 4, 1),
('65e3e5df181de', '65e3e759ac91a', 'Which of the following is NOT a fundamental operation of Turing machines?\r\n', 4, 2),
('65e3e5df181de', '65e3e759b41c6', 'The Halting Problem, as introduced by Alan Turing, refers to the problem of determining:\r\n', 4, 3),
('65e3e5df181de', '65e3e759bcb76', ' What is a \"regular language\" in the theory of computation?\r\n', 4, 4),
('65e3e5df181de', '65e3e759c1a69', 'Which of the following is NOT a category of automaton in the theory of computation?\r\n', 4, 5),
('65e3e79d95576', '65e3e8de6dcf6', 'Which of the following is not a common application of computer graphics?\r\n', 4, 1),
('65e3e79d95576', '65e3e8de7a6c4', 'Which of the following is not a fundamental principle in computer graphics?\r\n', 4, 2),
('65e3e79d95576', '65e3e8de82dd2', 'What is the primary function of rendering in computer graphics?\r\n', 4, 3),
('65e3e79d95576', '65e3e8de8aadf', ' Which of the following is an example of a 2D primitive in computer graphics?\r\n', 4, 4),
('65e3e79d95576', '65e3e8de91a2a', 'What does the term \"anti-aliasing\" mean in computer graphics?\r\n', 4, 5),
('65e3eb19aedb4', '65e3ec40e6808', 'Which of the following is a key component of e-commerce?\r\n', 4, 1),
('65e3eb19aedb4', '65e3ec40ee025', ' What is the primary benefit of an e-commerce business compared to a traditional retail business?\r\n', 4, 2),
('65e3eb19aedb4', '65e3ec4100793', 'What is the role of a Payment Gateway in e-commerce?\r\n', 4, 3),
('65e3eb19aedb4', '65e3ec4109add', 'Which of the following is an example of Business-to-Consumer (B2C) e-commerce?\r\n', 4, 4),
('65e3eb19aedb4', '65e3ec411167c', 'What is a common feature of an e-commerce platform?\r\n', 4, 5),
('65e3ec95db237', '65e3edb1cd81a', 'Which of the following is NOT a part of a CPU?\r\n', 4, 1),
('65e3ec95db237', '65e3edb1d393b', 'Which of the following is NOT a type of computer memory?\r\n', 4, 2),
('65e3ec95db237', '65e3edb1dd582', 'What is the function of the Control Unit in a CPU?\r\n', 4, 3),
('65e3ec95db237', '65e3edb1e4aea', ' What does the acronym \"LAN\" stand for in the context of networking?\r\n', 4, 4),
('65e3ec95db237', '65e3edb1eb355', 'What is the primary purpose of an operating system?\r\n', 4, 5),
('65e3f10a9d3f9', '65e3f23849067', 'What is cryptography?\r\n ', 4, 1),
('65e3f10a9d3f9', '65e3f2385086b', 'Which of the following is NOT a component of symmetric encryption?\r\n', 4, 2),
('65e3f10a9d3f9', '65e3f23855591', 'Which encryption algorithm is commonly used in asymmetric cryptography?\r\n ', 4, 3),
('65e3f10a9d3f9', '65e3f2385adf7', 'What is the primary function of a digital signature in cryptography?\r\n', 4, 4),
('65e3f10a9d3f9', '65e3f23861888', 'Which of the following is NOT a cryptographic hash function?\r\n', 4, 5),
('65e3f3dc48908', '65e3f53b4cea2', 'Which of the following is a key component of effective communication?', 4, 1),
('65e3f3dc48908', '65e3f53b552e7', 'Active listening involves:\r\n', 4, 2),
('65e3f3dc48908', '65e3f53b5ac0c', 'Which of the following is NOT a non-verbal communication cue?\r\n', 4, 3),
('65e3f3dc48908', '65e3f53b60238', 'In a business setting, which communication channel is often considered the most formal?\r\n', 4, 4),
('65e3f3dc48908', '65e3f53b655b3', 'In a business meeting, using the term \"action items\" refers to:\r\n', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` varchar(40) NOT NULL,
  `wrong` varchar(40) NOT NULL,
  `total` varchar(40) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` varchar(100) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `correct`, `wrong`, `total`, `time`, `intro`, `date`) VALUES
('65e3df0a83f0f', 'Unit Test On Php', '2', '1', '5', 10, 'This is A Test Related To PHP Subject .', '2024-03-03 07:53:06'),
('65e3e15b3815d', 'Test On Android Operating System.', '2', '1', '5', 10, 'This Test Is Based On Android Operating System.', '2024-03-03 08:02:59'),
('65e3e3a250547', 'Test On SQT (software Quality Testing)', '2', '1', '5', 10, 'This Test Is Based On SQT Subject.', '2024-03-03 08:12:42'),
('65e3e5df181de', 'Unit Test On Toc (theory Of Computation)', '2', '1', '5', 10, 'This Test Is Based On TOC Subject.', '2024-03-03 08:22:15'),
('65e3e79d95576', 'Test On Cg (computer Graphics)', '2', '1', '5', 10, 'This Test Is Based On CG Subject.', '2024-03-03 08:29:41'),
('65e3eb19aedb4', 'Unit Test On E-commerce', '2', '1', '5', 10, 'This is A Test Of e-commerce', '2024-03-03 08:44:33'),
('65e3ec95db237', 'Test On Computer Fundamental ', '2', '1', '5', 10, 'This Test Is Based On Computer Fundamental.', '2024-03-03 08:50:53'),
('65e3f10a9d3f9', 'Test On Cryptography.', '2', '1', '5', 10, 'This Test Is Based On Cryptography.', '2024-03-03 09:09:54'),
('65e3f3dc48908', 'Test On Comunication Skill.', '2', '1', '5', 10, 'This Test Is Based On Communication Skill', '2024-03-03 09:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('ramu2@gmail.com', 10, '2024-03-04 11:12:51'),
('john.doe@example.com', 95, '2024-03-04 07:04:56'),
('alice.smith@example.com', 75, '2024-03-04 07:04:58'),
('bob.johnson@example.com', 65, '2024-03-04 07:04:59'),
('eve.anderson@example.com', 55, '2024-03-04 07:05:00'),
('michael.miller@example.com', 45, '2024-03-04 07:05:01'),
('olivia.davis@example.com', 35, '2024-03-04 07:05:02'),
('liam.martinez@example.com', 25, '2024-03-04 07:05:03'),
('sophia.clark@example.com', 15, '2024-03-04 07:05:04'),
('student@gmail.com', 33, '2024-03-20 03:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(13) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `lname`, `gender`, `college`, `email`, `mob`, `password`, `cpassword`) VALUES
('Rameshwar ', 'Bhagat', 'Male', 'Samarth College', 'ramu2@gmail.com', '4563217896', '12345678', '12345678'),
('John', 'Doe', 'Male', 'ABC College', 'john.doe@example.com', '1234567890', 'pass@123', 'pass@123'),
('Alice', 'Smith', 'Femal', 'GHI College', 'alice.smith@example.com', '3456789012', 'abc@1234', 'abc@1234'),
('Bob', 'Johnson', 'Male', 'JKL College', 'bob.johnson@example.com', '4567890123', 'Bob@1234', 'Bob@1234'),
('Eve', 'Anderson', 'Femal', 'MNO College', 'eve.anderson@example.com', '5678901234', 'qaz@1234', 'qaz@1234'),
('Michael', 'Miller', 'Male', 'PQR College', 'michael.miller@example.com', '6789012345', 'zxc@1234', 'zxc@1234'),
('Olivia', 'Davis', 'Femal', 'STU College', 'olivia.davis@example.com', '7890123456', 'lkjh@1234', 'lkjh@1234'),
('Liam', 'Martinez', 'Male', 'VWX College', 'liam.martinez@example.com', '8901234567', 'asdf@1234', 'asdf@1234'),
('Sophia', 'Clark', 'Femal', 'YZA College', 'sophia.clark@example.com', '9012345678', 'mnbv@1234', 'mnbv@1234'),
('Raj', 'Magar', 'Male', 'DITMS', 'student@gmail.com', '5478963212', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cpassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `lname`, `email`, `password`, `cpassword`) VALUES
('David', 'Brown', 'david.brown@example.com', 'davidpass', 'davidpass'),
('Sarah', 'Wilson', 'sarah.wilson@example.com', 'sarahpass', 'sarahpass'),
('Matthew', 'Taylor', 'matthew.taylor@example.com', 'mattpass', 'mattpass'),
('Emily', 'Anderson', 'emily.anderson@example.com', 'emilypass', 'emilypass'),
('Daniel', 'Thomas', 'daniel.thomas@example.com', 'danielpass', 'danielpass'),
('Jessica', 'Martinez', 'jessica.martinez@example.com', 'jessicapass', 'jessicapass'),
('William', 'Garcia', 'william.garcia@example.com', 'williampass', 'williampass'),
('Emma', 'Lopez', 'emma.lopez@example.com', 'emmapass', 'emmapass'),
('Christopher', 'Hernandez', 'christopher.hernandez@example.com', 'christopherpass', 'christopherpass'),
('Ashley', 'Young', 'ashley.young@example.com', 'ashleypass', 'ashleypass'),
('Teacher', 'guruji', 'teacher@gmail.com', '12345678', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
