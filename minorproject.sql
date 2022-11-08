-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 05:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` varchar(2550) NOT NULL,
  `rating` int(1) NOT NULL,
  `price` int(5) DEFAULT NULL,
  `duration` int(10) NOT NULL DEFAULT 6
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `path`, `description`, `rating`, `price`, `duration`) VALUES
(1, 'Web Development', 'images/course-', 'Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.', 5, 0, 6),
(2, 'Android Development', 'images/course-', 'Android Development or Android Studio Development covers basic and advanced concepts of android technology. Our Android development tutorial is developed for beginners and professionals.\r\nAndroid is a complete set of software for mobile devices such as tablet computers, notebooks, smartphones, electronic book readers, set-top boxes etc.\r\nIt contains a linux-based Operating System, middleware and key mobile applications.\r\nIt can be thought of as a mobile operating system. But it is not limited to mobile only. It is currently used in various devices such as mobiles, tablets, televisions etc.', 4, 0, 6),
(3, 'Python', 'images/course-', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured, object-oriented and functional programming.', 5, 0, 3),
(4, 'Java', 'images/course-', 'Java Is A High-Level, Class-Based, Object-Oriented Programming Language That Is Designed To Have As Few Implementation Dependencies As Possible. It Is A General-Purpose Programming Language Intended To Let Programmers Write Once, Run Anywhere (WORA),[17] Meaning That Compiled Java Code Can Run On All Platforms That Support Java Without The Need To Recompile.[18] Java Applications Are Typically Compiled To Bytecode That Can Run On Any Java Virtual Machine (JVM) Regardless Of The Underlying Computer Architecture. The Syntax Of Java Is Similar To C And C++, But Has Fewer Low-Level Facilities Than Either Of Them. The Java Runtime Provides Dynamic Capabilities (Such As Reflection And Runtime Code Modification) That Are Typically Not Available In Traditional Compiled Languages. As Of 2019, Java Was One Of The Most Popular Programming Languages In Use According To GitHub,[19][20] Particularly For Client–Server Web Applications, With A Reported 9 Million Developers.', 5, 0, 6),
(5, 'C-Programming', 'images/course-', 'C (pronounced like the letter c) is a general-purpose computer programming language. It was created in the 1970s by Dennis Ritchie, and remains very widely used and influential. By design, C\'s features cleanly reflect the capabilities of the targeted CPUs. It has found lasting use in operating systems, device drivers, protocol stacks, though decreasingly[6] for application software. C is commonly used on computer architectures that range from the largest supercomputers to the smallest microcontrollers and embedded systems.', 4, 0, 3),
(6, 'Html', 'images/course-', 'The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', 4, 0, 1),
(7, 'Css', 'images/course-', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', 4, NULL, 1),
(8, 'JavaScript', 'images/course-', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries.', 5, NULL, 1),
(9, 'PHP', 'images/course-', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993. The PHP reference implementation is now produced by The PHP Group.', 5, NULL, 2),
(10, 'MySql', 'images/course-', 'MySQL is an open-source relational database management system. Its name is a combination of \"My\", the name of co-founder Michael Widenius\'s daughter My, and \"SQL\", the abbreviation for Structured Query Language', 5, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

CREATE TABLE `course_review` (
  `id` int(11) NOT NULL,
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rating` int(1) NOT NULL,
  `course_rev` varchar(2500) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_review`
--

INSERT INTO `course_review` (`id`, `course_id`, `user_id`, `rating`, `course_rev`, `timestamp`) VALUES
(1, 0, 2, 5, 'erwrerew', '2022-11-02 23:44:48'),
(2, 0, 0, 3, 'sadasd', '2022-11-02 23:46:32'),
(3, 0, 2, 3, 'sdsadsadsad', '2022-11-02 23:47:55'),
(4, 0, 2, 3, 'sdsadsadsad', '2022-11-02 23:49:10'),
(5, 0, 2, 3, 'sdsadsadsad', '2022-11-02 23:49:14'),
(6, 0, 2, 4, 'edwwdewfe', '2022-11-02 23:49:28'),
(7, 0, 2, 4, 'edwwdewfe', '2022-11-02 23:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `review_cont` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_cont`, `user_id`, `rating`, `timestamp`) VALUES
(1, 'First Review Ever Made', 2, 5, '2022-10-28 11:33:04'),
(2, 'Best Online Platform to get courses for free', 4, 5, '2022-10-28 11:34:51'),
(3, 'Buy the Best Course Here', 2, 5, '2022-10-28 15:29:31'),
(5, 'nbmnbm', 2, 5, '2022-10-29 06:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `slno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`slno`, `name`, `email`, `password`, `time`) VALUES
(1, 'Admin', 'Admin@admin.com', '1234', '2022-10-25 09:50:24'),
(2, 'Soumen Maji', 'hi130012boy@gmail.com', '$2y$10$S1i4BSDZ6ZpXHhiGO9Djv.OTyuUuisvt0JoBq/fbGSiL3C3/iOPlS', '2022-10-25 09:50:48'),
(3, 'admin', 'admin@gmail.com', '$2y$10$dJLQa3ploGhBdFHLWFNCeOPw/YM17mJWEvDxnIfcH8wWxTJuDwEki', '2022-10-25 20:29:56'),
(4, 'Jason Script', 'jason@script.com', '$2y$10$bmeBmYBSzDOXvXJmRZo3zek0jxegpYxY9Duf6ncHzPrmGKGyNsnjW', '2022-10-28 11:34:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_review`
--
ALTER TABLE `course_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_review`
--
ALTER TABLE `course_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
