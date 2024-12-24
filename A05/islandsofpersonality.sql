-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 08:08 PM
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
(1, 'Family Island', '\"Ohana means family. Family means nobody gets left behind or forgotten\" - Stitch', 'Sundays filled with household chores, loud stereos, – overflowing with laughter, the smell of mother\'s champorado in the morning, and everyone outside doing laundry. It\'s about those little moments that make life feel complete: annoying my siblings, sharing silly jokes with them, and the comforting feeling of belonging.', '#FAD693', 'ohana.gif', NULL),
(2, 'Friendship Island', 'There are small ships and big ships but the best ship of all is friendship :)', 'Vibrant explosion of inside jokes, late-night chikas, and sponty hangouts. It\'s the feeling of pure joy when you realize you can be completely yourself around someone. It\'s the memories made on road trips, the comfort of a friend\'s shoulder to cry on, and the shared excitement of chasing a crazy dream together.', '#FF85A5', 'friendship1.jpg', NULL),
(3, 'Light Novels Island', 'Letting my imagination do the visualization for this one. Fun and more detailed. ', 'This is where I lose myself in fantastical realms. I\'m talking hidden libraries overflowing with books, characters that feel like old friends, and the thrill of discovering a new author whose words transport me to another dimension. It\'s the feeling of pure escapism, where everyday worries fade away and I can explore the limitless power of imagination.', '#AA6FBF', 'ln.jpg', NULL),
(4, 'Manga Island', 'A world of amazing arts and stories. Get hit by a truck and u live in another world', 'This island is a whirlwind of different art styles, dynamic action sequences, and stories that stay with you long after you turn the final page. It\'s the feeling of excitement when you discover a new manga series, the hours spent poring over intricate artwork, and the connection to a community of fellow fans who share the same passion.', '#80A8FF', 'manga.jpg', NULL),
(5, 'Ghibli Island', 'The animations and story reminds you of a beautiful life that should be cherished ', 'Ghibli Island - a magical realm. This island is a sanctuary of wonder and heartwarming stories, where the beauty of animation and the depth of storytelling intertwine to make u feel a tapestry of emotions. Here, the spirit of adventure and the essence of kindness are ever-present, reminding me of the importance of hope and resilience. Ghibli Island is a cherished part of my personality, where the magic of Studio Ghibli continues to inspire and uplift my spirit.', '#82C293', 'ghibli.jpg', NULL),
(6, 'Brooklyn 99 Island', 'Where laughter is the best medicine (and Peralta is always one step ahead).', 'This island is a constant source of laughter and good cheer. It\'s the kind of place where you can always count on a good joke, a witty comeback, and a healthy dose of absurdity. It\'s the feeling of pure joy when you watch a hilarious episode, the comfort of knowing that no matter what, the 99th Precinct.', '#C4D199', 'b99.jpg', NULL),
(7, 'Meme Island', 'Funny stuff', 'I would be more horrible without the meme community', '#FAD693', 'meme.gif', NULL),
(8, 'Adventure Island', 'We\'re going on a trip with our favorite rocket ship~~~', 'I just love travelling you know (I have no money) Like going on an adventure (relatives asking me if I want to go with them and ofc  I say yes) meeting new people (asking for directions because I often get lost) creating new experiences (yeah, getting lost) and just having fun! (The chemicals in my brain when the fear that I may be lost forever sinks in). Very fun!', '#82C293', 'adventure.gif', NULL),
(9, 'Fashion Island', 'It\'s called Fashion. Look it up.', NULL, '#AA6FBF', 'fashion.gif', NULL),
(10, 'Hamilton Island', 'Hamilton Musical but make it animatics!!', NULL, '#80A8FF', 'hamilton.gif', NULL),
(11, 'Lethal Company Island', 'FOR THE COMPANY!!!', NULL, '#FF85A5', 'lethalcompany.gif', NULL),
(12, 'Kurzgesagt Island', 'Animation videos explaining things with optimistic nihilism since 12,013.', NULL, '#C4D199', 'Kurzgesagt.gif', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
