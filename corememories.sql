-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'img1.png', 'This is one of my most treasured family memories. It depicts a sweet moment with my father, who passed so early. It holds a special place in my heart because it is the only beautiful image we have together, especially considering we didn\'t take any during my teenage years. ', ''),
(2, 1, 'img2.png', 'This is also one of the most memorable events from our Boracay vacation in September. The opportunity to share this beautiful trip with my mother, sisters, auntie, and brothers made it extremely precious. It was an ideal moment for bonding and creating memories together.', ''),
(3, 1, 'img3.png', 'This picture was taken during a Christmas celebration with my boyfriend\'s family. It\'s a cherished memory, as they warmly welcomed me like a new family member. To me, they have become my second family, and I will always treasure this moment.', ''),
(4, 2, 'img4.png', 'This is our first photo together, and it is a memory I will remember. We weren\'t officially in a relationship at the time, so it was simply a random shot taken because our friends were mocking us. Thanks to them, we were able to chat and share this experience. ', ''),
(5, 2, 'img5.png', 'Our first concert together was something I\'ll never forget. We are major Blackpink fans, so sharing this event with him was really wonderful. It was not just my first concert but also a day full of excitement and amazing experiences, making it very special.', ''),
(6, 2, 'img6.png', 'This photo of our first fur baby is precious to us. Our little bundle of joy has brought us closer together as a couple, strengthening our relationship and making our lives happier. Our fur baby provides comfort, relieving stress and reinforcing our connection.', ''),
(7, 3, 'img7.png', 'This New Year\'s Eve shot is part of our cousins\' yearly tradition of taking a photo together, which began in 2019. Our friendship remains unshakable, even though we don’t see each other often. We always have each other’s backs, no matter what.', ''),
(8, 3, 'img8.png', 'This photo with my high school best friend holds a special place in my heart. We were best friends for three years, creating unforgettable memories. Though things changed when we went to different schools, I cherish our bond and miss those moments deeply.', ''),
(9, 3, 'img9.png', 'This picture with my college friends is one of my most vivid memories. They are really significant to me the greatest people that genuinely appreciate and encourage me during my college years. They are my comfort zone, and I treasure every time we spend together.', ''),
(10, 4, 'img10.png', 'Minecraft has been one of my favorite games since high school. It helps me avoid boredom and serves as a great way to relieve stress. I truly enjoy playing it with my friends, and it has become a fun, memorable, and meaningful part of my life that I cherish deeply.', ''),
(11, 4, 'img11.png', 'Stardew Valley has been one of my favorite pastimes lately. It relieves stress from my tasks while also allowing me to enjoy things such as farming, fishing, and mining. Even though I spend several hours on my laptop, it is a nice retreat that I much love.', ''),
(12, 4, 'img12.png', 'Valorant may not be my favorite game, but it kept me entertained during the epidemic. I treasure this as one of my most important memories since I spent many hours playing it with my boyfriend and cousins, making it an enjoyable and unforgettable experience.', '');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', 'NULL', 'NULL', '', 'family1.png', 'active'),
(2, 'Love Island', 'NULL', 'NULL', '', 'love1.png', 'active'),
(3, 'Friendship Island', 'NULL', 'NULL', '', 'friendship1.png', 'active'),
(4, 'Gaming Island', 'NULL', 'NULL', '', 'gaming1.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
