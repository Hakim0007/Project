-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 06:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwscdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `datetime`) VALUES
(37, 'Hakim Safder', 'cool786hakku@gmail.com', 'Hello my page is wrong', '2023-05-07 07:14:00'),
(39, 'Abdul Rehman', 'abdulrehman4456@gmail.com', 'Hi, Your website is very impressive. I like it.', '2023-05-07 07:16:00'),
(40, 'Mohammad Akram', 'm.akram667@gmail.com', 'Thank you for your help.', '2023-05-07 07:18:00'),
(42, 'Uzair Khan', 'uzairkhan@gmail.com', 'Hi, I want to book a site. The name of the site is Camp Site 1.', '2023-05-07 07:20:00'),
(43, 'Abbas Mustafa', 'abbas665@gmail.com', 'Hi, I want information on my contact number for camping site 6. My contact is 5617872158725', '2023-05-07 07:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_security`
--

CREATE TABLE `login_security` (
  `id` int(11) NOT NULL,
  `attempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_security`
--

INSERT INTO `login_security` (`id`, `attempts`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review_content` varchar(500) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `name`, `email`, `review_content`, `review_date`) VALUES
(1, 'Abdul Hadi', 'abdulhadi@gmail.com', 'I liked the camping site.', '2023-05-07 07:00:00'),
(2, 'Saif Ijaz', 'saif134@gmail.com', 'The ambiance was very good.', '2023-05-07 07:02:00'),
(3, 'Anas Shafiq', 'anas223@gmail.com', 'I enjoyed different locations of GWSC. All of them were very amazing. Good Service.', '2023-05-07 07:04:00'),
(4, 'Sheikh Saim', 'saim@gmail.com', 'I would love to visit again. Very good place.', '2023-05-07 07:06:00'),
(5, 'Uzair Imran', 'uzairkhan@gmail.com', 'I want to say that the Camp Site 1 was very fantastic. The ambiance was very good. Must visit.', '2023-05-07 07:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pitch_type` varchar(30) NOT NULL,
  `site_image` varchar(30) NOT NULL,
  `availability` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site_name`, `description`, `pitch_type`, `site_image`, `availability`) VALUES
(1, 'Camping Site 1', 'We offer top-quality motorhome pitches with all the necessary amenities for a comfortable stay. Book your pitch today and start exploring the great outdoors in style!', 'Motorhome Pitch', 'slideshowimg1.jpg', 'Available'),
(2, 'Swimming Site 1', 'We offer a variety of swimming options for all ages and skill levels, including a shallow wading pool for young children, a lap pool for serious swimmers, and a diving pool for those looking for a thrill.', 'Swimming Site', 'slideshowimg2.jpg', 'Available'),
(3, 'Camping Site 2', 'Our campsite offers a range of accommodation options and on-site amenities for a comfortable stay in a beautiful and serene location. Book your stay today and enjoy the surrounding nature and outdoor activities.', 'Motorhome Pitch', 'slideshowimg3.jpg', 'Available'),
(4, 'Camping Site 3', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure.', 'Tent Pitch', 'camp4.jpg', 'Booked'),
(5, 'Camping Site 4', 'Our caravan park offers spacious pitches with all the necessary amenities for a comfortable stay. Book your pitch today and enjoy exploring the surrounding area or simply relax on-site.', 'Tent Pitch', 'camp5.jpg', 'Available'),
(6, 'Camping Site 5', 'Our tent camping site offers spacious pitches in a beautiful and peaceful natural setting with all the necessary amenities for a comfortable stay. Book your pitch today and enjoy the surrounding nature or simply relax on-site.', 'Tent Pitch', 'camp6.jpg', 'Booked'),
(7, 'Camping Site 6', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Tent Pitch', 'camp7.jpg', 'Available'),
(8, 'Camping Site 7', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp1.jpg', 'Available'),
(9, 'Camping Site 8', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp2.jpg', 'Booked'),
(10, 'Camping Site 9', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp3.jpg', 'Available'),
(11, 'Camping Site 10', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp4.jpg', 'Available'),
(12, 'Camping Site 11', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp5.jpg', 'Booked'),
(13, 'Camping Site 12', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp6.jpg', 'Booked'),
(14, 'Camping Site 13', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure. ', 'Touring Carvan Pitch', 'tcp7.jpg', 'Available'),
(15, 'Camping Site 14', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure.', 'Motorhome Pitch', 'mp1.jpg', 'Booked'),
(16, 'Camping Site 15', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure.', 'Motorhome Pitch', 'mp2.jpg', 'Available'),
(17, 'Camping Site 16', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure.', 'Motorhome Pitch', 'mp3.jpg', 'Available'),
(18, 'Camping Site 17', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure.', 'Motorhome Pitch', 'mp4.jpg', 'Booked'),
(19, 'Camping Site 18', 'Our camp site is nestled in the heart of nature, far away from the hustle and bustle of city life. Here, you can pitch your tent under the stars, build a campfire, and explore the surrounding wilderness at your leisure.', 'Motorhome Pitch', 'mp5.jpg', 'Available'),
(20, 'Swimming Site 2', 'We offer a variety of swimming options for all ages and skill levels, including a shallow wading pool for young children, a lap pool for serious swimmers, and a diving pool for those looking for a thrill.', 'Swimming Site', 'ss1.jpg', 'Booked'),
(21, 'Swimming Site 3', 'We offer a variety of swimming options for all ages and skill levels, including a shallow wading pool for young children, a lap pool for serious swimmers, and a diving pool for those looking for a thrill.', 'Swimming Site', 'ss2.jpg', 'Available'),
(22, 'Swimming Site 4', 'We offer a variety of swimming options for all ages and skill levels, including a shallow wading pool for young children, a lap pool for serious swimmers, and a diving pool for those looking for a thrill.', 'Swimming Site', 'ss3.jpg', 'Booked'),
(23, 'Swimming Site 5', 'We offer a variety of swimming options for all ages and skill levels, including a shallow wading pool for young children, a lap pool for serious swimmers, and a diving pool for those looking for a thrill.', 'Swimming Site', 'ss4.jpg', 'Available'),
(24, 'Swimming Site 6', 'We offer a variety of swimming options for all ages and skill levels, including a shallow wading pool for young children, a lap pool for serious swimmers, and a diving pool for those looking for a thrill.', 'Swimming Site', 'ss5.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `email`, `password`) VALUES
('Hakim', 'cool786hakku@gmail.com', '2001'),
('Husain', 'husain66@gmail.com', '7654'),
('Uzair', 'uzairkhan@gmail.com', '5023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_security`
--
ALTER TABLE `login_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
