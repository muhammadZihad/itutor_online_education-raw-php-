-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 03:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `post_id` int(3) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `user_id`, `post_id`, `comment`) VALUES
(1, 17, 1, 'This is a very nice song'),
(2, 20, 1, 'I love this song.');

-- --------------------------------------------------------

--
-- Table structure for table `post_init`
--

CREATE TABLE `post_init` (
  `post_id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `ins_id` int(6) NOT NULL,
  `rating` float(2,1) NOT NULL DEFAULT '0.0',
  `num_rating` float NOT NULL DEFAULT '0',
  `post_date` date NOT NULL,
  `content` text NOT NULL,
  `count_com` int(2) NOT NULL DEFAULT '0',
  `video_status` tinyint(1) NOT NULL DEFAULT '0',
  `video_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_init`
--

INSERT INTO `post_init` (`post_id`, `title`, `catagory`, `ins_id`, `rating`, `num_rating`, `post_date`, `content`, `count_com`, `video_status`, `video_link`) VALUES
(1, 'Lyrical: Moh Moh Ke Dhaage (Female) Song with Lyrics | Dum Laga Ke Haisha | Varun Grover | Anu Malik', '', 21, 4.5, 19, '2019-03-17', 'Moh moh ke dhaage\r\n----------------\r\n\r\nMoh moh ke dhaage\r\nMoh moh ke dhaage\r\nhmmm...\r\nYeh moh moh ke dhaage\r\nTeri ungliyon se ja uljhe\r\nYeh moh moh ke dhaage\r\nTeri ungliyon se ja uljhe\r\nKoi toh toh na laage\r\nKis tarah girah ye suljhe\r\nHai rom rom iktaara\r\nHai rom rom iktaara\r\nJo baadalon mein se guzre\r\nYeh moh moh ke dhaage\r\nTeri ungliyon se ja uljhe\r\nKoi toh toh na laage\r\nKis tarah girah ye suljhe\r\nTu hoga zara paagal, tune mujhko hai chuna\r\nTu hoga zara paagal, tune mujhko hai chuna\r\nKaise tune ankahaa, tune ankahaa sab sunaa\r\nTu hoga zara paagal, tune mujhko hai chuna\r\nTu din sa hai, main raat\r\nAa na dono mill jaayein shamon ki tarah\r\nYeh moh moh ke dhaage\r\nTeri ungliyon se ja uljhe\r\nKoi toh toh na laage\r\nKis tarah girah ye suljhe\r\nKi teri…', 1, 1, 'https://www.youtube.com/embed/JbDktrsnH40'),
(2, 'Imagine Dragons - Demons (Official)', '', 21, 4.0, 40, '2019-03-09', 'Demons\r\n------------\r\n\r\nWhen the days are cold\r\nAnd the cards all fold\r\nAnd the saints we see\r\nAre all made of gold\r\nWhen your dreams all fail\r\nAnd the ones we hail\r\nAre the worst of all\r\nAnd the blood’s run stale\r\nI want to hide the truth\r\nI want to shelter you\r\nBut with the beast inside\r\nThere’s nowhere we can hide\r\nNo matter what we breed\r\nWe still are made of greed\r\nThis is my kingdom come\r\nThis is my kingdom come\r\nWhen you feel my heat\r\nLook into my eyes\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nDon’t get too close\r\nIt’s dark inside\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nWhen the curtain’s call\r\nIs the last of all\r\nWhen the lights fade out\r\nAll the sinners crawl\r\nSo they dug your grave\r\nAnd the masquerade\r\nWill come calling out\r\nAt the mess you made\r\nDon’t want to let you down\r\nBut I am hell bound\r\nThough this is all for you\r\nDon’t want to hide the truth\r\nNo matter what we breed\r\nWe still are made of greed\r\nThis is my kingdom come\r\nThis is my kingdom come\r\nWhen you feel my heat\r\nLook into my eyes\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nDon’t get too close\r\nIt’s dark inside\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nThey say it\'s what you make\r\nI say it\'s up to fate\r\nIt\'s woven in my soul\r\nI need to let you go\r\nYour eyes, they shine so bright\r\nI want to save their light\r\nI can\'t escape this now\r\nUnless you show me how\r\nWhen you feel my heat\r\nLook into my eyes\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nDon’t get too close\r\nIt’s dark inside\r\nIt’s where my demons hide\r\nIt’s where my demons hide', 0, 1, 'https://www.youtube.com/embed/mWRsgZuwf_8'),
(5, 'fdgsdfsdfdsf', '', 23, 0.0, 0, '2019-03-22', 'sdfsdfsdfsdfsdf', 0, 0, NULL),
(6, 'This is proper post', '233', 23, 0.0, 0, '2019-03-22', 'dfsdafsdafadsfdsf', 0, 0, NULL),
(7, 'Post in ck editor 2', '111', 23, 0.0, 0, '2019-03-23', '<h4>This is a post in <strong>ck editor</strong>. This is free for educational purpose.</h4><p>&nbsp;</p><blockquote><p>Some other text.</p></blockquote><figure class=\"table\"><table><tbody><tr><td>3</td><td>3</td></tr><tr><td>2</td><td>2</td></tr></tbody></table></figure>', 0, 0, NULL),
(8, 'Post in ck editor 2', '111', 23, 0.0, 0, '2019-03-23', '<h4>This is a post in <strong>ck editor</strong>. This is free for educational purpose.</h4><p>&nbsp;</p><blockquote><p>Some other text.</p></blockquote><figure class=\"table\"><table><tbody><tr><td>3</td><td>3</td></tr><tr><td>2</td><td>2</td></tr></tbody></table></figure>', 0, 0, NULL),
(9, 'Marshmello - Alone (Official Music Video)', '111', 21, 0.0, 0, '2019-03-23', '<p>asdsadsadsadsad</p>', 0, 0, NULL),
(15, 'Alone  by Marshmello ', '111', 21, 0.0, 0, '2019-03-28', '<p>I\'m so alone<br>Nothing feels like home<br>I\'m so alone<br>Trying to find my way back home to you</p><p>I\'m so alone<br>Nothing feels like home<br>I\'m so alone<br>Trying to find my way back home to you</p><p>I\'m so alone<br>Trying to find my way back home to you</p><p>I\'m so alone<br>Nothing feels like home<br>I\'m so alone<br>Trying to find my way back home to you</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/embed/ALZHF5UqnU4\"></oembed></figure><p>This song end</p>', 0, 1, 'https://www.youtube.com/embed/ALZHF5UqnU4?controls=0');

-- --------------------------------------------------------

--
-- Table structure for table `sub_comment`
--

CREATE TABLE `sub_comment` (
  `s_c_id` int(3) NOT NULL,
  `c_id` int(3) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_comment`
--

INSERT INTO `sub_comment` (`s_c_id`, `c_id`, `u_id`, `comment`) VALUES
(1, 1, 19, 'I love this music');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(155) NOT NULL,
  `auth_status` tinyint(1) NOT NULL DEFAULT '0',
  `keyword` varchar(5) NOT NULL,
  `instructor_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `auth_status`, `keyword`, `instructor_status`) VALUES
(15, 'LALALA', '594f803b380a41396ed63dca39503542', 'abdur15-9097@diu.edu.bd', 1, '7QETD', 1),
(16, 'Zihad', 'b59c67bf196a4758191e42f76670ceba', 'abdur15-9097@diu.edu.bd', 1, 'H3P82', 1),
(17, 'Zihad', 'ae1ae3e0382d657c8fa94691892615a5', 'mdarz1997@gmail.com', 1, 'KYH7U', 1),
(18, 'Muhammad Zihad', '74b87337454200d4d33f80c4663dc5e5', 'muhammad.zihad97@gmail.com', 1, 'RY43A', 1),
(19, 'Saleheen', '6512bd43d9caa6e02c990b0a82652dca', 'mdarz1997@gmail.com', 1, 'DT0HW', 1),
(20, 'Niloy', '6512bd43d9caa6e02c990b0a82652dca', 'mdarz1997@gmail.com', 1, 'HP01Y', 1),
(21, 'Muhammad Zihad', '6512bd43d9caa6e02c990b0a82652dca', 'mdarz1997@gmail.com', 1, 'JQGT7', 1),
(22, 'Muhammad Zihad', '698d51a19d8a121ce581499d7b701668', 'zihadmoon@gmail.com', 1, '1E35H', 1),
(23, 'halalala', '594f803b380a41396ed63dca39503542', 'a@b.com', 0, '4A91L', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `post_init`
--
ALTER TABLE `post_init`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `sub_comment`
--
ALTER TABLE `sub_comment`
  ADD PRIMARY KEY (`s_c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_init`
--
ALTER TABLE `post_init`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_comment`
--
ALTER TABLE `sub_comment`
  MODIFY `s_c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
