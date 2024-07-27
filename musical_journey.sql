-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 05:22 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musical_journey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contact`, `message`) VALUES
(2, 'avani', 'ani@gmail.com', '854444222', 'hiii\r\nvery nice..'),
(3, 'maitri', 'mai@gmail.com', '785522256', 'hello,nice site\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`) VALUES
(1, 'ava', 'Nice....'),
(2, 'maitri', 'good...'),
(3, 'ani', 'very nice.....');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`cid`, `cname`) VALUES
(1, 'Hindi'),
(2, 'English'),
(3, 'Punjabi'),
(4, 'Gujarati');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `mname`, `image`) VALUES
(1, 'Shershaah', 'shershah.jfif'),
(2, 'Bell bottom', 'Bell-Bottom-Movie.jpg'),
(3, 'Dil Bechara', 'dil bechara.jpg'),
(4, 'Dillwale', 'dilwale.jpg'),
(5, 'Chal Jeevi Laiye', 'Chaal-Jeevi-Laiye.jpg'),
(6, 'Sharato Lagu ', 'Sharato Lagu.jpg'),
(7, 'Wonder Woman', 'wonder woman.jpg'),
(8, 'Sufna', 'sufna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `song` varchar(100) NOT NULL,
  `singer` varchar(100) NOT NULL,
  `lyrics` varchar(100) NOT NULL,
  `music` varchar(100) NOT NULL,
  `starring` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `song_name` varchar(150) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `cid` (`cid`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `mid`, `cid`, `song`, `singer`, `lyrics`, `music`, `starring`, `label`, `song_name`) VALUES
(1, 1, 1, 'Raataan Lambiyan', 'jubin nautiyal, Asees kaur', 'Tanishk Bagchi', 'Tanishk Bagchi', 'siddharth malhotra,Kiara advani', 'song music india', 'Raataan Lambiyan - Shershaah 128 Kbps.mp3'),
(2, 1, 1, 'Ranjha', 'B praak,Jasleen Royal', 'Anvita Dutt', 'Akshya Raheja', 'sidarth malhotra,Kiara advandnjnjn', 'song music india', 'ranjha-shershaah-128-kbps-sound.mp3'),
(3, 1, 1, 'Kabhii Tumhhe', 'Drashan Raval', 'Rashmi Virag', 'Javed Mohsin', 'sidarth malhotra,Kiara advandnjnjn', 'song music india', 'kabhii-tumhhe-shershaah-128-kbps-sound.mp3'),
(4, 1, 1, 'Mann Bharrya', 'B Praak', 'Janni', 'B Praak', 'sidarth malhotra,Kiara advandnjnjn', 'song music india', '128-Mann Bharryaa 2.0 - Shershaah 128 Kbps.mp3'),
(5, 2, 1, 'Marjaawaan', 'Gurnazar,Asees Kaur', 'Gurnazar', 'Gaurav Dev,Kartik Dev', 'Akshy kumar,Vaani Kapoor', 'Saregama', 'Marjaawaan - Bell Bottom 128 Kbps.mp3'),
(6, 2, 1, 'Dhoom Tara ', 'Zara Khan', 'Tanishk Bagchi', 'Tanishk Bagchi', 'Akshy kumar,Vaani Kapoor', 'Saregama', '01 - Dhoom Tara (128 Kbps).mp3'),
(7, 2, 1, 'Sakhiyan', 'Maninder Buttar,Zara Khan', 'Babbu,Maninder Buttar,Tanishk Bagchi', ',MixSinghTanishk Bagchi', 'Akshy kumar,Vaani Kapoor', 'Saregama', '03 - Sakhiyan 2.0 (128 Kbps).mp3'),
(8, 2, 1, 'Tum Aaogye', 'Armaan Malik', 'Rashmi Virag', 'Amaal Malik', 'Akshy kumar,Vaani Kapoor', 'Saregama', '04 - Tum Aaogey (128 Kbps).mp3'),
(9, 2, 1, 'KhairMangde', 'Pratibha ,Singh Baghel', 'Seema saini', 'Shantanu Dutta', 'Akshy kumar,Vaani Kapoor', 'Saregama', '05 - Khairmangde (320 Kbps).mp3'),
(10, 3, 1, 'Taare Ginn', 'Mohit Chauhan,Shreya Ghoshal', 'Amitabh Bhattacharya', 'A.R. Rahman', 'Sushant Singh Rajput,Sanjana Sanghi', 'Sony Music India', 'yt1s.com - Taare Ginn  Dil Bechara  Full Song  SushantSanjana  AR Rahman  MohitShreya.mp3'),
(11, 3, 1, 'Main Tumhara', 'Jonita Gandhi,Hriday Gattani', 'Amitabh Bhattacharya', ' A.R. Rahman', 'Sushant Singh Rajput,Sanjana Sanghi', 'sony music india', 'yt1s.com - Main Tumhara  Dil Bechara  Full Song  SushantSanjana  AR Rahman  JonitaHriday.mp3'),
(12, 3, 1, 'Khulke Jeena Ka', 'Arijit Singh,Shashaa Tirupati', 'Amitabh Bhattacharya', 'A.R Rahman', 'Sushant Singh Rajput,Sanjana Sanghi', 'sony music india', 'yt1s.com - Dil Bechara Khulke Jeene Ka OfficialSushant SanjanaAR RahmanArijit ShashaaAmitabh BMukesh.mp3'),
(13, 3, 1, 'Dil Bechara', 'A.R Rahman', 'Amitabh Bhattacharya', 'A.R Rahman', 'Sushant Singh Rajput,Sanjana Sanghi', 'sony music india', 'yt1s.com - Dil Bechara  Title Track  Sushant Singh Rajput  Sanjana Sanghi  AR Rahman Mukesh C Amitabh B.mp3'),
(14, 4, 1, 'Gerua', 'Antara Mitra,Arijit Singh', 'Amitabh Bhattacharya', 'Pritam Chakraborty', 'shah rukh khan,kajol', 'Sony Music India', 'yt1s.com - Gerua  Shah Rukh Khan  Kajol  Dilwale  Pritam  SRK Kajol Official New Song Video 2015.mp3'),
(15, 4, 1, 'Janam Janam', 'Arijit Singh, Antara Mitra', 'Amitabh Bhattacharya', 'Pritam Chakraborty', 'Shah Rukh Khan, Kajol', 'Sony Music India', 'yt1s.com - Janam Janam  Dilwale  Shah Rukh Khan  Kajol  Pritam  SRK  Kajol  Lyric Video 2015.mp3'),
(16, 1, 1, 'Manma Emotion Jaage', 'Amit Mishra, Anushka Manchanda, Antara Mitra', 'Amitabh Bhattacharya', 'Pritam Chakraborty', 'Shahrukh Khan, Kajol, Varun Dhawan, Kriti Sanon', 'song music india', 'yt1s.com - Manma Emotion Jaage  Dilwale  Varun Dhawan  Kriti Sanon  Party Anthem of 2016.mp3'),
(17, 4, 1, 'Daayre', 'Arijit Singh', 'Amitabh Bhattacharya', 'Pritam Chakraborty', 'Shahrukh Khan, Kajol, Varun Dhawan, Kriti Sanon', 'Sony Music India', 'yt1s.com - Daayre Full Video  DilwaleShah Rukh KhanKajolVarunKritiArijit SinghPritamRohit S.mp3'),
(18, 5, 4, 'Chaand Ne Kaho Aaje', 'Sachin-Jigar,Jigardan Gadhavi,Siddharth Randeria', 'Niren Bhatt', 'Sachin-Jigar', 'Yash Soni,Aarohi Patel,Siddharth Randeria', 'Zee Music Gujarati', 'yt1s.com - Lyrical Chaand Ne Kaho  SachinJigar  Jigardan  Yash S  Chaal Jeevi Laiye  Zen Music Gujarati.mp3'),
(19, 5, 4, 'Pa Pa Pagli', 'Sonu Nigam,Sachin Sanghvi,Jigar Saraiya', 'Niren Bhatt', 'Sachin-Jigar', 'Yash Soni,Aarohi Patel,Siddharth Randeria', 'Zee Music Gujarati', 'yt1s.com - Pa Pa Pagli  SachinJigar  Sonu Nigam  Siddharth Randeria  Gujarati Song  Chaal Jeevi Laiye.mp3'),
(20, 5, 4, 'Ghanu Jeevo', 'Bhoomi Trivedi , Keerthi Sagathia, Sachin-Jigar', 'Niren Bhatt', ' Sachin-Jigar', 'Yash Soni,Aarohi Patel,Siddharth Randeria', 'Zee Music Gujarati', 'yt1s.com - Ghanu Jeevo  SachinJigar  Bhoomi Trivedi  Aarohi  Gujarati Song  Chaal Jeevi Laiye.mp3'),
(21, 6, 4, 'Mann Melo', 'Siddharath Amit Bhavsar,Jasleen Royal', 'Niren Bhatt', 'Parth Bharat Thakkar', 'Malhar Thakar,Deeksha Joshi', 'Superhit Entertainment', 'yt1s.com - Man melo  full song  sharato lagu.mp3'),
(22, 6, 4, 'Ganesh Dundala', 'Aishwarya Majmudar, Siddharth Amit Bhavsar', 'Niren Bhatt', 'Sanjoy Das, I D Rao, Omkar Dhumal', 'Malhar Thakar,Deeksha Joshi', 'Superhit Entertainment', 'yt1s.com - Ganesh Dundala  Full video Song From Sharto Lagu New Gujarati Film  Malhar Thakar Deeksha.mp3'),
(23, 7, 2, 'Believer', 'Imagine Dragons', 'Dan Reynolds and others', 'Mattman & Robin', 'Gal Gadot', 'Imagine Dragons', 'yt1s.com - Wonder Woman  Believer.mp3'),
(24, 7, 2, 'Unstoppable ', 'Sia', 'Chris Braide, Sia', 'Mattman & Robin', 'Gal Gadot, Chris Pine', 'Imagine Dragons', 'yt1s.com - Wonder Woman Unstoppable  Sia Music Video.mp3'),
(25, 8, 3, 'Jannat', 'B Praak', 'Jaani', 'B Praak', 'Ammy Virk, Tania', 'Junglee Music', 'yt1s.com - Jannat Official Video  Sufna  B Praak  Jaani  Ammy Virk  Tania  Latest Punjabi Songs 2020.mp3'),
(26, 1, 1, 'kmk', 'mkmk', 'mkm', 'kmk', 'mkm', 'mk', 'yt1s.com - Vilen  Chidiya Official  Video (1).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`pid`, `uid`, `id`, `date`) VALUES
(2, 1, 21, '2021-10-03 12:58:41'),
(3, 1, 11, '2021-10-03 12:59:15'),
(4, 1, 23, '2024-07-23 06:37:58'),
(5, 3, 2, '2024-07-27 05:08:14'),
(6, 3, 6, '2024-07-27 05:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Drashti', 'Padia', 'drashti@gmail.com', '1234'),
(2, 'Avani', 'Padia', 'avani@gmail.com', 'avani'),
(3, 'Kavish', 'Sharma', 'sharma@gmail.com', 'sharma123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `language` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `music_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `movie` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
