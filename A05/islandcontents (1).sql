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
(1, 1, 'xmas3.jpg', 'Photo of the family gathering during holidays.', '#FFD700'),
(2, 1, 'xmas2.jpg', 'Christmas outing with the fam', '#FF4500'),
(3, 2, 'friends.jpg', 'A picture of Winx since I really dont have permission to use their pictures and they\'re all busy to respond to me atm. But yeah we do sponty hang-outs bc planned always get cancelled', '#ADD8E6'),
(4, 2, 'friends2.jpg', 'Actually, we rarely do video calls. We just do texting. The group chat comes to life when someone invites everyone to hang-out, needs assistance, boy problems, and uh someone wants to get together', '#90EE90'),
(5, 2, 'friends3.jpg', 'I wouldn\'t be who I am now if it wasn\'t for my high school friends. I had a lot of personal growth and learnings from my friends\' diverse perspectives and experiences. For that I will always be grateful to them.', '#FF69B4'),
(6, 3, 'ln1.jpg', 'I\'m here for the rom-com. The guy is a yandere and yes I find them attractive--IN FICTION. After reading this I now want a guy who would live for me. Cringe but that\'s love <3333', '#BA55D3'),
(7, 3, 'ln2.jpg', 'Okay no, maybe this is where I got my ideal type of man. Retired from military, very affectionate, man of few words, loves his wife very much, will do anything for his wife fir her happiness while still thinking of her safety', '#8A2BE2'),
(8, 3, 'ln3.png', 'I am putting this here because I rated it 5 stars but I don\'t remember the story. I left a comment that says \"I love it\" so it prolly good :D  Once I get free time I\'ll re-read it. YEY!', '#FF6347'),
(9, 4, 'manga1.jpg', 'WAAAAAAAAAAAAAAAAAAAAAAAAAAAN PUUUUUUUUNCH!! Do i have to say more?! One of my favorite characters of all time and I forgot why', '#FFFFE0'),
(10, 4, 'manga2.jpg', 'Because Anya is a cutiepie and it\'s a family genre. I like it because they\'re heartwarming, andd because it\'s funny. Who doesn\'t love a funny content? DEf not me', '#FFA07A'),
(11, 4, 'manga3.jpg', 'I love the story so much especially the interaction of the father and daughter, it\'s very heart-wrenching and heartwarming. And THE ART! It\'s simply to die for.', '#D3D3D3'),
(12, 5, 'G1.jpg', '\"Once you\'ve met someone, you never really forget them\". The line is a reminder that even fleeting encounters can leave a lasting impact on our lives. Chihiro and Haku\'s bond, despite their vastly different worlds, is a testament to the resilience of friendship and the power of empathy.', '#A9A9A9'),
(13, 5, 'g2.jpg', '\"It\'s funny how you wake up each day and never really know if it\'ll be one that will change your life forever.\" – The Secret World of Arrietty (2010) a poignant reminder that every day is a new opportunity, and that any given moment can hold the potential to change the course of one\'s life', '#00CED1'),
(14, 5, 'g3.jpg', 'The quote \"I love Ponyo whether she\'s a fish, a human, or something in between\" is brilliant because it speaks to the film\'s overarching message of unconditional love and acceptance. It highlights the beauty of love that transcends physical appearances and societal norms.', '#5F9EA0'),
(15, 5, 'g5.jpg', '\"Turn Your Face Toward the Sun, and the Shadows Fall Behind You” - Tales from Earthsea (2006) Taught me to focus on the positive aspects of life and to maintain a hopeful outlook, even in the face of challenges and difficulties. ', '#F08080'),
(16, 5, 'g6.jpg', '\"Always believe in yourself. Do this and no matter where you are, you will have nothing to fear”, in The Cat Returns is a reminder that no matter where one is in life, having self-belief can provide the confidence to overcome your fears and accomplish their goals.', '#FFDAB9'),
(17, 1, 'lilbro.jpg', 'lil bro being extra af', NULL),
(18, 6, 'b991.jpg', 'Terry - My favorite character of all', NULL),
(19, 6, 'b992.gif', ' “Cool, cool, cool, cool, cool. No doubt, no doubt, no doubt.”\r\n\r\n', NULL),
(20, 6, 'b993.gif', '“The English language cannot fully capture the depth and complexity of my thoughts, so I’m incorporating emojis into my speech to better express myself. Winky face.\"', NULL),
(21, 6, 'b994.jpg', ' “Love, it sustains you. It’s like oatmeal.”', NULL),
(22, 7, 'meme.gif', '', NULL),
(23, 8, 'adventure1.gif', 'one minute you\'re enjoying the view and the next second you find yourself alone or surrounded with strangers and the others nowhere to be found', NULL),
(24, 8, 'adventure2.gif', 'Of course, what is an adventure without a beautiful view? (be it a place or a person or a plant or the sky or the houses, you name it!)', NULL),
(25, 8, 'adventure3.gif', 'Most importantly, every adventure should be fun (no matter how many times you get lost and get scolded for not paying attention HAHAHHAHAHA)', NULL),
(26, 8, 'adventure4.gif', 'The most fun are the sponty trips with my cousins \"Hey do you want to come? Don\'t tell my mom\" and we\'re gonna get lost (thanks to google maps) but still get to our destination (thanks to google maps)', NULL),
(27, 9, 'nocontentyet.gif', 'Under construction', NULL),
(28, 10, 'nocontentyet.gif', 'Underconstruction', NULL),
(29, 11, 'nocontentyet.gif', 'Under construction', NULL),
(30, 12, 'nocontentyet.gif', 'Under construction', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
