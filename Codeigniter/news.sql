-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2019 at 01:01 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Kolkata doctors\' protest: 14 Delhi government hospitals observe symbolic strike today', 'kolkata-doctors-protest-14-delhi-government-hospitals-observe-symbolic-strike-today', 'As scores of doctors in West Bengal continue their agitation against the Mamata Banerjee-led state government, at least 14 government hospitals in Delhi are observing a symbolic strike on Saturday as a sign of protest against the attack on an intern doctor at NRS Medical College in Kolkata.\r\n\r\nFederation of Resident Doctors Association (FORDA) president Sumedh Sandanshiv declared the same in a statement released by the medical body.\r\n\r\nSome of the hospitals are RML Hospital, Lady Hardinge Medical College, Guru Teg Bahadur Hospital, Deen Dayal Upadhyay Hospital, Sanjay Gandhi Memorial Hospital, Guru Gobind Singh Hospital, Employees\' State Insurance Model Hospital, Dada Dev Matri Avum Shishu Chikitsalaya, Institute of Human Behaviour and Allied Sciences, Hindu Rao Hospital, Bhagwan Mahavir Hospital, Chacha Nehru Bal Chikitsalaya and Railways Hospital.\r\n\r\nWhile all key departments like casualty and emergency services will not be hampered, it is likely that routine operations will be hit due to the symbolic strike.\r\n\r\nFORDA has also warned that it would intensify the agitation if the demands of the doctors protesting in Kolkata are not honoured by the Mamata-led government.\r\n\r\n\"As president FORDA, I assured our colleagues in West Bengal that all Delhi doctors are with you guys and if we needed will intensify our agitation. The simple demand from government is to ensure safety of our doctors. If needed CRPF should deploy for protection of hospital and doctors. Rest of the updates will come with time,\" said Sumedh Sandanshiv.'),
(2, 'Cyclone Vayu may not hit Kutch, will weaken after recurve', 'cyclone-vayu-may-not-hit-kutch-will-weaken-after-recurve', '\r\nCyclone Vayu will likely weaken after recurving towards Kutch and peter out as depression by June 17 in the sea.\r\n\r\nAccording to the latest weather bulletin on Saturday, although the cyclone will recurve towards Kutch, it will not be hitting Kutch.\r\n\r\nOn Friday, a top Union Ministry of Earth Sciences official said Cyclone Vayu is likely to recurve and hit Kutch on June 17-18, hours after Gujarat Chief Minister Vijay Rupani announced that the storm posed no threat to the state as it had moved westward.\r\n\r\nThe \'very severe cyclonic storm\' Vayu, over the north-east and adjoining east-central Arabian Sea, moved nearly westwards with a speed of about 7 kmph in the last six hours and lay centred (at 05:30 hours today (June 15) near latitude 20.7°N and longitude 67.4°E over north-east and adjoining east-central Arabian Sea, about 260 km west-southwest of Gujarat\'s Porbandar, 310 km west of Veraval and 360 km west of Diu).\r\nThe system is very likely to move nearly westwards during next 48 hours with gradual weakening and recurve north-east wards thereafter.\r\n\r\nCyclone Vayu was to hit the Gujarat coast on Thursday, but it changed course on the intervening night of Wednesday and Thursday. It skirted the Gujarat coast, affecting Gir, Somnath, Diu, Junagarh and Porbandar.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
