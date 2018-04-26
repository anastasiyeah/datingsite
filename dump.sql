-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 01:55 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dating_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `profile_from` int(11) NOT NULL,
  `profile_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `message`, `profile_from`, `profile_to`) VALUES
(1, 'Hey!', 1, 3),
(2, 'What\'s up? :) ', 1, 2),
(4, 'Hi', 1, 2),
(5, 'that\'s me!', 1, 1),
(6, 'hey steve!', 1, 4),
(8, 'look at those arms! :D', 1, 1),
(10, 'hey steve', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `sex` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`sex`) VALUES
('both'),
('female'),
('male');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `superpower` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` char(6) NOT NULL,
  `hobbies` text NOT NULL,
  `likes` int(11) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `superpower`, `age`, `gender`, `hobbies`, `likes`, `img`) VALUES
(1, 'Thor Odinson', 'God of Thunder', 1056, 'male', 'Swinging my beloved Mjolnir', 0, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNjI4Mzk4NjQwOF5BMl5BanBnXkFtZTgwNjMzOTcwNDI@._CR381,31,585,585_UX402_UY402._SY201_SX201_AL_.jpg '),
(2, 'Natasha Romanoff', 'Super spy', 33, 'female', 'fighting and knowing everything', 4, 'http://images6.fanpop.com/image/photos/40600000/Natasha-Romanoff-natasha-romanoff-40694550-200-200.png'),
(3, 'Negasonic Teenage Warhead', 'Detonate atomic bursts', 18, 'female', 'blowing shit up', 2, 'https://t00.deviantart.net/vNzHvvGWi4Ixk2qDBRBTRQ7z920=/300x200/filters:fixed_height(100,100):origin()/pre00/a96d/th/pre/i/2016/087/4/e/negasonic_teenage_warhead_by_b_on_d-d9wrp2q.jpg'),
(4, 'Steve Rogers', 'Super strength', 100, 'male', 'being sad and wearing spandex suits ', 0, 'http://images5.fanpop.com/image/photos/31000000/Steve-Rogers-steven-steve-rogers-31009646-200-200.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_from` (`profile_from`),
  ADD KEY `profile_to` (`profile_to`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD KEY `gender` (`sex`),
  ADD KEY `gender_2` (`sex`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`profile_from`) REFERENCES `profiles` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`profile_to`) REFERENCES `profiles` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`sex`);
