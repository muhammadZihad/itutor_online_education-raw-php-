-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 07:04 AM
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
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `user_id`, `post_id`, `comment`, `date`) VALUES
(1, 17, 1, 'This is a very nice song', '2019-03-29 00:00:00'),
(18, 23, 1, 'More dynamic', '2019-04-02 06:39:16'),
(19, 27, 1, 'New comment', '2019-04-05 19:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `post_init`
--

CREATE TABLE `post_init` (
  `post_id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `keyword` text NOT NULL,
  `ins_id` int(6) NOT NULL,
  `rating` float(2,1) NOT NULL DEFAULT '0.0',
  `num_rating` float NOT NULL DEFAULT '0',
  `post_date` date NOT NULL,
  `content` text NOT NULL,
  `image_name` varchar(255) NOT NULL DEFAULT 'img/post_image/default_post.jpg',
  `count_com` int(2) NOT NULL DEFAULT '0',
  `video_status` tinyint(1) NOT NULL DEFAULT '0',
  `video_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_init`
--

INSERT INTO `post_init` (`post_id`, `title`, `catagory`, `keyword`, `ins_id`, `rating`, `num_rating`, `post_date`, `content`, `image_name`, `count_com`, `video_status`, `video_link`) VALUES
(1, 'Lyrical: Moh Moh Ke Dhaage (Female) Song with Lyrics | Dum Laga Ke Haisha | Varun Grover | Anu Malik', '111', 'hello', 27, 4.5, 19, '2019-03-17', '<p>Moh moh ke dhaage&nbsp;<br>----------------&nbsp;<br><br>Moh moh ke dhaage&nbsp;<br>Moh moh ke dhaage&nbsp;<br>hmmm...&nbsp;<br>Yeh moh moh ke dhaage&nbsp;<br>Teri ungliyon se ja uljhe&nbsp;<br>Yeh moh moh ke dhaage&nbsp;<br>Teri ungliyon se ja uljhe&nbsp;<br>Koi toh toh na laage&nbsp;<br>Kis tarah girah ye suljhe&nbsp;<br>Hai rom rom iktaara&nbsp;<br>Hai rom rom iktaara&nbsp;<br>Jo baadalon mein se guzre&nbsp;<br>Yeh moh moh ke dhaage&nbsp;<br>Teri ungliyon se ja uljhe&nbsp;<br>Koi toh toh na laage&nbsp;<br>Kis tarah girah ye suljhe&nbsp;<br>Tu hoga zara paagal, tune mujhko hai chuna&nbsp;<br>Tu hoga zara paagal, tune mujhko hai chuna&nbsp;<br>Kaise tune ankahaa, tune ankahaa sab sunaa&nbsp;<br>Tu hoga zara paagal, tune mujhko hai chuna&nbsp;<br>Tu din sa hai, main raat&nbsp;<br>Aa na dono mill jaayein shamon ki tarah&nbsp;<br>Yeh moh moh ke dhaage&nbsp;<br>Teri ungliyon se ja uljhe&nbsp;<br>Koi toh toh na laage&nbsp;<br>Kis tarah girah ye suljhe&nbsp;<br>Ki teriâ€¦</p>', 'img/post_image/sing-bl-2.jpg', 2, 1, 'https://www.youtube.com/watch?v=JbDktrsnH40'),
(2, 'Imagine Dragons - Demons (Official)', '', 'moh moh', 27, 4.0, 40, '2019-03-09', 'Demons\r\n------------\r\n\r\nWhen the days are cold\r\nAnd the cards all fold\r\nAnd the saints we see\r\nAre all made of gold\r\nWhen your dreams all fail\r\nAnd the ones we hail\r\nAre the worst of all\r\nAnd the blood’s run stale\r\nI want to hide the truth\r\nI want to shelter you\r\nBut with the beast inside\r\nThere’s nowhere we can hide\r\nNo matter what we breed\r\nWe still are made of greed\r\nThis is my kingdom come\r\nThis is my kingdom come\r\nWhen you feel my heat\r\nLook into my eyes\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nDon’t get too close\r\nIt’s dark inside\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nWhen the curtain’s call\r\nIs the last of all\r\nWhen the lights fade out\r\nAll the sinners crawl\r\nSo they dug your grave\r\nAnd the masquerade\r\nWill come calling out\r\nAt the mess you made\r\nDon’t want to let you down\r\nBut I am hell bound\r\nThough this is all for you\r\nDon’t want to hide the truth\r\nNo matter what we breed\r\nWe still are made of greed\r\nThis is my kingdom come\r\nThis is my kingdom come\r\nWhen you feel my heat\r\nLook into my eyes\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nDon’t get too close\r\nIt’s dark inside\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nThey say it\'s what you make\r\nI say it\'s up to fate\r\nIt\'s woven in my soul\r\nI need to let you go\r\nYour eyes, they shine so bright\r\nI want to save their light\r\nI can\'t escape this now\r\nUnless you show me how\r\nWhen you feel my heat\r\nLook into my eyes\r\nIt’s where my demons hide\r\nIt’s where my demons hide\r\nDon’t get too close\r\nIt’s dark inside\r\nIt’s where my demons hide\r\nIt’s where my demons hide', 'img/post_image/default_post.jpg', 0, 1, 'https://www.youtube.com/embed/mWRsgZuwf_8'),
(15, 'Alone  by Marshmello ', '111', '', 22, 0.0, 0, '2019-03-28', '<p>I\'m so alone<br>Nothing feels like home<br>I\'m so alone<br>Trying to find my way back home to you</p><p>I\'m so alone<br>Nothing feels like home<br>I\'m so alone<br>Trying to find my way back home to you</p><p>I\'m so alone<br>Trying to find my way back home to you</p><p>I\'m so alone<br>Nothing feels like home<br>I\'m so alone<br>Trying to find my way back home to you</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/embed/ALZHF5UqnU4\"></oembed></figure><p>This song end</p>', 'img/post_image/default_post.jpg', 0, 1, 'https://www.youtube.com/embed/ALZHF5UqnU4?controls=0');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `u_id` int(3) NOT NULL,
  `p_id` int(3) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `instructor_status` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(200) NOT NULL DEFAULT 'img/user/default_user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `auth_status`, `keyword`, `instructor_status`, `image`) VALUES
(15, 'LALALA', '594f803b380a41396ed63dca39503542', 'abdur15-9097@diu.edu.bd', 1, '7QETD', 1, 'img/user/default_user.jpg'),
(16, 'Zihad', 'b59c67bf196a4758191e42f76670ceba', 'abdur15-9097@diu.edu.bd', 1, 'H3P82', 1, 'img/user/default_user.jpg'),
(17, 'Zihad', 'ae1ae3e0382d657c8fa94691892615a5', 'mdarz1997@gmail.com', 1, 'KYH7U', 1, 'img/user/50217951_646041495810841_6726172154246725632_n.jpg'),
(18, 'Muhammad Zihad', '74b87337454200d4d33f80c4663dc5e5', 'muhammad.zihad97@gmail.com', 1, 'RY43A', 1, 'img/user/default_user.jpg'),
(19, 'Saleheen', '6512bd43d9caa6e02c990b0a82652dca', 'mdarz1997@gmail.com', 1, 'DT0HW', 1, 'img/user/default_user.jpg'),
(20, 'Niloy', '6512bd43d9caa6e02c990b0a82652dca', 'mdarz1997@gmail.com', 1, 'HP01Y', 1, 'img/user/default_user.jpg'),
(21, 'Muhammad Zihad', '6512bd43d9caa6e02c990b0a82652dca', 'mdarz1997@gmail.com', 1, 'JQGT7', 1, 'img/user/default_user.jpg'),
(22, 'Muhammad Zihad', '698d51a19d8a121ce581499d7b701668', 'zihadmoon@gmail.com', 1, '1E35H', 1, 'img/user/default_user.jpg'),
(23, 'halalala', '594f803b380a41396ed63dca39503542', 'a@b.com', 0, '4A91L', 1, 'img/user/default_user.jpg'),
(27, 'Arafat', '0f0a24fb6d926e172d2d2f7a61444560', 'arafat@gmail.com', 0, 'J9G8D', 1, 'img/user/default_user.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_init`
--
ALTER TABLE `post_init`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `ins_id` (`ins_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

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
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post_init`
--
ALTER TABLE `post_init`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `post_init` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_init`
--
ALTER TABLE `post_init`
  ADD CONSTRAINT `ins_id` FOREIGN KEY (`ins_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `post_init` (`post_id`),
  ADD CONSTRAINT `u_id` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
