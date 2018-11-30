-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 02:12 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talknow`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

CREATE TABLE `chat_room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `uid` int(10) NOT NULL,
  `uid2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat_room`
--

INSERT INTO `chat_room` (`room_id`, `room_name`, `uid`, `uid2`) VALUES
(9, 'LinhNam', 14, 17),
(10, 'LinhAdmin', 14, 1),
(12, 'LinhNga', 14, 11),
(13, 'AdminNga', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(50) NOT NULL,
  `nameFeedback` text NOT NULL,
  `feedback` text NOT NULL,
  `sender` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `nameFeedback`, `feedback`, `sender`, `time`) VALUES
(11, 'Phản hồi về giao diện', 'Tương đối ổn', 'Linh', '2018-11-15 03:56:19'),
(13, 'Phản hồi về chức năng', 'Tương đối', 'Admin', '2018-11-15 13:07:58'),
(14, 'Phản hồi về chức năng', 'Tương đối', 'Admin', '2018-11-15 13:08:51'),
(15, '', '', 'Linh', '2018-11-29 23:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `documentId` int(20) NOT NULL,
  `kind_of_document` text NOT NULL,
  `documentName` text NOT NULL,
  `file` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`documentId`, `kind_of_document`, `documentName`, `file`, `author`) VALUES
(36, 'av3', 'BT_AV3', 'images/AV3.txt', 'Admin'),
(37, 'toiec', 'Toiec 1', 'images/Toeic_1.txt', 'Thanh'),
(39, 'others', 'Tài liệu khác', 'images/bai tap.docx', 'Trang'),
(45, 'ielts', 'demo-edit', 'images/Toeic_1.txt', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messid` int(10) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_id` int(50) NOT NULL,
  `sender` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messid`, `content`, `room_id`, `sender`, `time`) VALUES
(1, 'helloworld', 9, 14, '2018-11-29 13:59:05'),
(4, 'testtest', 9, 14, '2018-11-29 14:48:02'),
(5, 'test', 12, 14, '2018-11-29 15:01:49'),
(6, 'ok', 12, 14, '2018-11-29 15:01:54'),
(7, 'Thêm đoạn chat này vào db', 12, 14, '2018-11-29 15:03:00'),
(8, 'Xin chào', 9, 14, '2018-11-29 15:42:44'),
(44, 'hello', 10, 1, '2018-11-29 17:22:36'),
(45, 'HI', 10, 14, '2018-11-29 20:27:09'),
(46, 'Xin chào admin', 10, 14, '2018-11-29 20:27:24'),
(47, 'test', 12, 14, '2018-11-29 23:22:37'),
(48, 'hallo', 12, 14, '2018-11-29 23:23:06'),
(49, 'Hello bạn Nam', 9, 14, '2018-11-29 23:26:08'),
(50, 'Admin nè', 10, 1, '2018-11-29 23:28:06'),
(51, ' Linh nè', 10, 1, '2018-11-29 23:28:40'),
(52, 'lộn ời', 10, 14, '2018-11-29 23:28:45'),
(53, 'Linh bên này nè haha', 10, 14, '2018-11-29 23:28:49'),
(54, 'haha nhầm nha hihi', 10, 1, '2018-11-29 23:29:10'),
(55, 'L test đi', 10, 14, '2018-11-29 23:29:15'),
(56, 'H đem xe ra cái', 10, 14, '2018-11-29 23:29:19'),
(57, 'cũng còn nhiều cái cần làm lém', 10, 1, '2018-11-29 23:36:54'),
(58, 'đổi pass ở đâu H', 10, 1, '2018-11-29 23:37:15'),
(59, 'v thì cuxgn gơi dễ mà ha', 10, 1, '2018-11-29 23:37:50'),
(60, 'ừm L , hk có khó', 10, 1, '2018-11-29 23:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

CREATE TABLE `roomdetail` (
  `detail_id` int(11) DEFAULT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomdetail`
--

INSERT INTO `roomdetail` (`detail_id`, `room_id`, `user_id`) VALUES
(NULL, 9, 14),
(NULL, 9, 17),
(NULL, 10, 1),
(NULL, 10, 14),
(NULL, 12, 11),
(NULL, 12, 14),
(NULL, 13, 1),
(NULL, 13, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` enum('Khong xac dinh','Nu','Nam') NOT NULL DEFAULT 'Khong xac dinh',
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `email`, `sex`, `birthday`, `phone`, `image`) VALUES
(1, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '0', 'lelinh01051996@gmail.com', 'Nam', '1996-05-01', 379170717, 'images/quynhaka.jpg'),
(11, 'Nga', '327f511481fbd8faae1c81f9f57a5d73', '1', 'linh280820163@gmail.com', 'Nu', '1995-04-04', 1234567890, 'images/IMG_3066.JPG'),
(14, 'Linh', '202cb962ac59075b964b07152d234b70', '1', 'lelinh01051996@gmail.com', 'Nam', '1996-05-01', 379170717, 'images/2017-09-17-12-33-49.jpg'),
(15, 'Trang', 'test', '1', 'lelinh01051996@gmail.com', 'Nu', '2001-01-01', 123442678, 'images/IMG_E2214.JPG'),
(16, 'Thanh', 'e10adc3949ba59abbe56e057f20f883e', '1', 'lelinh01051996@gmail.com', 'Nam', '1994-04-04', 124356768, 'images/IMG_8616.JPG'),
(17, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '1', 'lelinh01051996@gmail.com', 'Nam', '2005-01-01', 23345667, 'images/IMG_2177.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_room`
--
ALTER TABLE `chat_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `fk_uid` (`uid`),
  ADD KEY `fk_uid2` (`uid2`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`documentId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messid`),
  ADD KEY `fk_room_id` (`room_id`),
  ADD KEY `sender` (`sender`);

--
-- Indexes for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD PRIMARY KEY (`room_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_room`
--
ALTER TABLE `chat_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `documentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_room`
--
ALTER TABLE `chat_room`
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_uid2` FOREIGN KEY (`uid2`) REFERENCES `user` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_room_id` FOREIGN KEY (`room_id`) REFERENCES `chat_room` (`room_id`),
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `user` (`id`);

--
-- Constraints for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD CONSTRAINT `roomdetail_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `chat_room` (`room_id`),
  ADD CONSTRAINT `roomdetail_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
