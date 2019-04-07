-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 09:49 PM
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
(23, 28, 21, 'Thank you', '2019-04-08 01:02:41'),
(24, 28, 22, 'Thank you', '2019-04-08 01:11:02');

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
  `image_name` varchar(500) NOT NULL DEFAULT 'img/post_image/default_post.jpg',
  `count_com` int(2) NOT NULL DEFAULT '0',
  `video_status` tinyint(1) NOT NULL DEFAULT '0',
  `video_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_init`
--

INSERT INTO `post_init` (`post_id`, `title`, `catagory`, `keyword`, `ins_id`, `rating`, `num_rating`, `post_date`, `content`, `image_name`, `count_com`, `video_status`, `video_link`) VALUES
(20, 'SQL Learning  ||  Database Management System', 'CSE311', 'sql,mysql,database', 27, 0.0, 0, '2019-04-07', '<h2>You can also learn from here : <a href=\"https://www.w3schools.com/sql/\">https://www.w3schools.com/sql/</a></h2>', 'img/post_image/maxresdefault5caa46ca36c024.68663732.jpg', 0, 1, 'https://www.youtube.com/watch?v=HXV3zeQKqGY'),
(21, 'Dynamic routing (OSPF) || Computer Network', 'CSE313', 'dynamic routing,cisco', 27, 0.0, 0, '2019-04-07', '<h2>Here is a full playlist for you:</h2><p><a href=\"https://www.youtube.com/playlist?list=PLgRpD80UyFbmhHln9i70p3k4y7xGD9VdI\">https://www.youtube.com/playlist?list=PLgRpD80UyFbmhHln9i70p3k4y7xGD9VdI</a></p>', 'img/post_image/54c79330988da5caa47e6a3f142.78548586.png', 1, 1, 'https://www.youtube.com/watch?v=MrnWOnYh7TU&list=PLgRpD80UyFbmhHln9i70p3k4y7xGD9VdI&index=4&t=0s'),
(22, 'Learn C programming', 'CSE122', 'c,programming', 27, 0.0, 0, '2019-04-07', '<h2>TO BECOME A GOOD C PROGRAMMER</h2><figure class=\"image\"><img src=\"https://fabiensanglard.net/c/c2.jpeg\"></figure><p>Every once in a while I receive an email from a fellow programmer asking me what language I used for <a href=\"https://fabiensanglard.net/shmupLite/\">one</a> of my <a href=\"https://fabiensanglard.net/fluide/\">games</a> and how I learned it. Here is an entry that list the best things to read about C.<br><br>If you know of other gems, please email me or add a comment at the bottom of the page.</p><p>&nbsp;</p><h3>The answer (you can skip this)</h3><p>As I mentioned it in a previous <a href=\"https://fabiensanglard.net/dEngine/\">entry</a>, all the commercial 3D engines I wrote so far are 95% C89 (aka \"Standard C\", aka \"ANSI C\").<br>I picked C89 instead of C99 because some compilers still don\'t support fully C99â€¦and to be able to compile on iOs, Windows and Xbox 360 was a mandatory from day one.<br><br>Depending on the compiling platform, the 5% remaining are Objective-C (iOS) or C++ (Windows, Mac OS X) to bind the engine to the native inputs/output. Unexpectedly the C vs C++ proved quite <a href=\"http://www.reddit.com/r/gamedev/comments/ctiqm/iphone_3d_engine_experience_from_2009_especially/\">controversial</a> on reddit. The two real reasons were:</p><ul><li>I didn\'t know C++ well enough at the time I started writing the engines. The platform was quite limited (iPhone 2G) and I knew I would need to totally master my tools in order to achieve 60 frames per second.</li><li>Since I first read id Software source code, it was a dream to complete a commercial game using C.</li></ul><p>Were those \"good\" choices? I think in the end the only valid questions are \"Did you ship it?\" and \"Was it fast?\". Considering the incredible frame rate achieved (some people mentioned experimenting motion sickness while playing <a href=\"https://fabiensanglard.net/shmupLite/\">Shmup</a>) I think I made the right calls.</p><p>&nbsp;</p><h3>Bad C readings (stop skipping)</h3><p>I\'m going to start with the things I didn\'t take too seriously: Internet tutorials, blogs and almost anything brought by Google (yes, it includes this article). I usually considered those sources unreliable and potentially harmful.<br><br>Like a lot of people in the industry I used to Google way too often. Overtime I found the illusion of speed and the inaccuracy of the answers to be counter-productive.<br><br>No website is as good as a good book. And no good book is as good as a disassembly output.</p>', 'img/post_image/c5caa4ae626ac70.45165872.png', 1, 0, ''),
(24, 'Basic Algorithm', 'CSE221', 'algorithm', 29, 0.0, 0, '2019-04-07', '<h2>algorithm</h2><p>&nbsp;</p><p>An algorithm (pronounced AL-go-rith-um) is a procedure or formula for solving a problem, based on&nbsp;conducting a sequence of specified actions. A computer <a href=\"https://searchsoftwarequality.techtarget.com/definition/program\">program</a>&nbsp;can be viewed as an elaborate algorithm. In mathematics and computer science, an algorithm usually means a small procedure that solves a recurrent problem.</p><p>Algorithms are widely used throughout all areas of IT (information technology). A <a href=\"https://whatis.techtarget.com/definition/search-engine\">search engine</a>algorithm, for example, takes <a href=\"https://whatis.techtarget.com/definition/search-string\">search strings</a> of keywords and&nbsp;<a href=\"https://whatis.techtarget.com/definition/search-operator\">operators</a> as input, searches its associated database for relevant web&nbsp;pages,&nbsp;and returns <a href=\"https://whatis.techtarget.com/definition/search-engine-results-page-SERP\">results</a>.</p><p>An encryption algorithm transforms data according to specified actions to protect it. A <a href=\"https://searchsecurity.techtarget.com/definition/secret-key-algorithm\">secret key algorithm</a> such as the U.S. Department of Defense\'s Data Encryption Standard (<a href=\"https://searchsecurity.techtarget.com/definition/Data-Encryption-Standard\">DES</a>), for example, uses the same&nbsp;<a href=\"https://searchsecurity.techtarget.com/definition/key\">key</a>&nbsp;to encrypt and decrypt data. As long as the algorithm is sufficiently sophisticated, no one lacking the key can decrypt the data.</p><p>The word algorithm derives from the name of the mathematician, Mohammed ibn-Musa al-Khwarizmi, who was part of the royal court in Baghdad and who lived from about 780 to 850. Al-Khwarizmi\'s work is the likely source for the word <i>algebra</i> as well.</p>', 'img/post_image/what-is-an-algorithm-featured5caa4f64b039a6.30386391.png', 0, 1, 'https://www.youtube.com/watch?v=rL8X2mlNHPM'),
(26, 'Micro Processor and Assembly Language', 'CSE231', '8606,microprocessor 8606', 29, 0.0, 0, '2019-04-07', '<h2>What is Assembly Language?</h2><p>Each personal computer has a microprocessor that manages the computer\'s arithmetical, logical, and control activities.</p><p>Each family of processors has its own set of instructions for handling various operations such as getting input from keyboard, displaying information on screen and performing various other jobs. These set of instructions are called \'machine language instructions\'.</p><p>A processor understands only machine language instructions, which are strings of 1\'s and 0\'s. However, machine language is too obscure and complex for using in software development. So, the low-level assembly language is designed for a specific family of processors that represents various instructions in symbolic code and a more understandable form.</p><h2>Advantages of Assembly Language</h2><p>Having an understanding of assembly language makes one aware of âˆ’</p><ul><li>How programs interface with OS, processor, and BIOS;</li><li>How data is represented in memory and other external devices;</li><li>How the processor accesses and executes instruction;</li><li>How instructions access and process data;</li><li>How a program accesses external devices.</li></ul><p>Other advantages of using assembly language are âˆ’</p><p>It requires less memory and execution time;</p><p>It allows hardware-specific complex jobs in an easier way;</p><p>It is suitable for time-critical jobs;</p><p>It is most suitable for writing interrupt service routines and other memory resident programs.</p><h2>Basic Features of PC Hardware</h2><p>The main internal hardware of a PC consists of processor, memory, and registers. Registers are processor components that hold data and address. To execute a program, the system copies it from the external device into the internal memory. The processor executes the program instructions.</p><p>The fundamental unit of computer storage is a bit; it could be ON (1) or OFF (0). A group of nine related bits makes a byte, out of which eight bits are used for data and the last one is used for parity. According to the rule of parity, the number of bits that are ON (1) in each byte should always be odd.</p><p>So, the parity bit is used to make the number of bits in a byte odd. If the parity is even, the system assumes that there had been a parity error (though rare), which might have been caused due to hardware fault or electrical disturbance.</p><p>The processor supports the following data sizes âˆ’</p><ul><li>Word: a 2-byte data item</li><li>Doubleword: a 4-byte (32 bit) data item</li><li>Quadword: an 8-byte (64 bit) data item</li><li>Paragraph: a 16-byte (128 bit) area</li><li>Kilobyte: 1024 bytes</li><li>Megabyte: 1,048,576 bytes</li></ul><h2>Binary Number System</h2><p>Every number system uses positional notation, i.e., each position in which a digit is written has a different positional value. Each position is power of the base, which is 2 for binary number system, and these powers begin at 0 and increase by 1.</p><p>The following table shows the positional values for an 8-bit binary number, where all bits are set ON.</p><figure class=\"table\"><table><tbody><tr><th>Bit value</th><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr><tr><th>Position value as a power of base 2</th><td>128</td><td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td><td>1</td></tr><tr><th>Bit number</th><td>7</td><td>6</td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td></tr></tbody></table></figure><p>The value of a binary number is based on the presence of 1 bits and their positional value. So, the value of a given binary number is âˆ’</p><p>1 + 2 + 4 + 8 +16 + 32 + 64 + 128 = 255</p><p>which is same as 28 - 1.</p><h2>Hexadecimal Number System</h2><p>Hexadecimal number system uses base 16. The digits in this system range from 0 to 15. By convention, the letters A through F is used to represent the hexadecimal digits corresponding to decimal values 10 through 15.</p><p>Hexadecimal numbers in computing is used for abbreviating lengthy binary representations. Basically, hexadecimal number system represents a binary data by dividing each byte in half and expressing the value of each half-byte. The following table provides the decimal, binary, and hexadecimal equivalents âˆ’</p><figure class=\"table\"><table><tbody><tr><th>Decimal number</th><th>Binary representation</th><th>Hexadecimal representation</th></tr><tr><th>0</th><th>0</th><th>0</th></tr><tr><th>1</th><th>1</th><th>1</th></tr><tr><th>2</th><th>10</th><th>2</th></tr><tr><th>3</th><th>11</th><th>3</th></tr><tr><th>4</th><th>100</th><th>4</th></tr><tr><th>5</th><th>101</th><th>5</th></tr><tr><th>6</th><th>110</th><th>6</th></tr><tr><th>7</th><th>111</th><th>7</th></tr><tr><th>8</th><th>1000</th><th>8</th></tr><tr><th>9</th><th>1001</th><th>9</th></tr><tr><th>10</th><th>1010</th><th>A</th></tr><tr><th>11</th><th>1011</th><th>B</th></tr><tr><th>12</th><th>1100</th><th>C</th></tr><tr><th>13</th><th>1101</th><th>D</th></tr><tr><th>14</th><th>1110</th><th>E</th></tr><tr><th>15</th><th>1111</th><th>F</th></tr></tbody></table></figure><p>To convert a binary number to its hexadecimal equivalent, break it into groups of 4 consecutive groups each, starting from the right, and write those groups over the corresponding digits of the hexadecimal number.</p><p><strong>Example</strong> âˆ’ Binary number 1000 1100 1101 0001 is equivalent to hexadecimal - 8CD1</p><p>To convert a hexadecimal number to binary, just write each hexadecimal digit into its 4-digit binary equivalent.</p><p><strong>Example</strong> âˆ’ Hexadecimal number FAD8 is equivalent to binary - 1111 1010 1101 1000</p><h2>Binary Arithmetic</h2><p>The following table illustrates four simple rules for binary addition âˆ’</p><figure class=\"table\"><table><tbody><tr><th>(i)</th><th>(ii)</th><th>(iii)</th><th>(iv)</th></tr><tr><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th><th>1</th></tr><tr><th>0</th><th>1</th><th>1</th><th>1</th></tr><tr><th>+0</th><th>+0</th><th>+1</th><th>+1</th></tr><tr><th>=0</th><th>=1</th><th>=10</th><th>=11</th></tr></tbody></table></figure><p>Rules (iii) and (iv) show a carry of a 1-bit into the next left position.</p><p><strong>Example</strong></p><figure class=\"table\"><table><tbody><tr><th>Decimal</th><th>Binary</th></tr><tr><th>60</th><th>00111100</th></tr><tr><th>+42</th><th>00101010</th></tr><tr><th>102</th><th>01100110</th></tr></tbody></table></figure><p>A negative binary value is expressed in <strong>two\'s complement notation</strong>. According to this rule, to convert a binary number to its negative value is to <i>reverse its bit values and add 1</i>.</p><p><strong>Example</strong></p><figure class=\"table\"><table><tbody><tr><td>Number 53</td><td>00110101</td></tr><tr><td>Reverse the bits</td><td>11001010</td></tr><tr><td>Add 1</td><td>00000001</td></tr><tr><td>Number -53</td><td>11001011</td></tr></tbody></table></figure><p>To subtract one value from another, <i>convert the number being subtracted to two\'s complement format and add the numbers</i>.</p><p><strong>Example</strong></p><p>Subtract 42 from 53</p><figure class=\"table\"><table><tbody><tr><td>Number 53</td><td>00110101</td></tr><tr><td>Number 42</td><td>00101010</td></tr><tr><td>Reverse the bits of 42</td><td>11010101</td></tr><tr><td>Add 1</td><td>00000001</td></tr><tr><td>Number -42</td><td>11010110</td></tr><tr><td>53 - 42 = 11</td><td>00001011</td></tr></tbody></table></figure><p>Overflow of the last 1 bit is lost.</p><h2>Addressing Data in Memory</h2><p>The process through which the processor controls the execution of instructions is referred as the <strong>fetch-decode-execute cycle</strong> or the <strong>execution cycle</strong>. It consists of three continuous steps âˆ’</p><ul><li>Fetching the instruction from memory</li><li>Decoding or identifying the instruction</li><li>Executing the instruction</li></ul><p>The processor may access one or more bytes of memory at a time. Let us consider a hexadecimal number 0725H. This number will require two bytes of memory. The high-order byte or most significant byte is 07 and the low-order byte is 25.</p><p>The processor stores data in reverse-byte sequence, i.e., a low-order byte is stored in a low memory address and a high-order byte in high memory address. So, if the processor brings the value 0725H from register to memory, it will transfer 25 first to the lower memory address and 07 to the next memory address.</p><figure class=\"image\"><img src=\"https://www.tutorialspoint.com/assembly_programming/images/introduction1.jpg\" alt=\"Introduction\"></figure><p>x: memory address</p><p>When the processor gets the numeric data from memory to register, it again reverses the bytes. There are two kinds of memory addresses âˆ’</p><p>Absolute address - a direct reference of specific location.</p><p>Segment address (or offset) - starting address of a memory segment with the offset value.</p>', 'img/post_image/processor.png', 0, 1, 'https://www.youtube.com/watch?v=ThUSyV81tIc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
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
(27, 'Arafat', '0f0a24fb6d926e172d2d2f7a61444560', 'arafat@gmail.com', 0, 'J9G8D', 1, 'img/user/27.jpg'),
(28, 'Zihad', 'ae1ae3e0382d657c8fa94691892615a5', 'zihad@gmail.com', 0, 'KPS12', 0, 'img/user/28.jpg'),
(29, 'Saleheen', '2cd66b7983e843b20428b4659b0d5142', 'saleheen@gmail.com', 0, 'S1OF0', 1, 'img/user/default_user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `serial` int(11) NOT NULL,
  `u_id` int(3) NOT NULL,
  `first` varchar(100) NOT NULL DEFAULT 'First name',
  `last` varchar(100) NOT NULL DEFAULT 'Last name',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `profession` varchar(30) NOT NULL,
  `post_count` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`serial`, `u_id`, `first`, `last`, `phone`, `profession`, `post_count`) VALUES
(1, 27, 'Arafat', 'Mahmud', '+880 1611 11223', 'student', 4),
(3, 28, 'Muhammad', 'Zihad', '+880 1842 37273', 'Student', 0);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post_init`
--
ALTER TABLE `post_init`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
