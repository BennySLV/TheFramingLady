-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2016 at 03:51 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `theframinglady`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `first_name`, `surname`, `email`, `comments`, `submission_date`) VALUES
(1, 'Mark', 'Bartlett', 'markbartlett@example.com', 'Excellent service and a real eye for detail. Obvious that she really loves her job and her clients. Price was very reasonable too.', '2016-06-02 10:21:04'),
(2, 'Nat ', 'Cowan', 'ntcowan@googlemail.com', 'A fantastic service! Very much love my framed photo. Anne-Marie is a fantastic individual. I owe her a pint!', '2016-06-02 10:39:27'),
(3, 'Ben', 'Silveston', 'bsilveston37@gmail.com', 'A great service! Anne-Marie understood my requirements straight away and delivered the work to a very high standard. Exactly what I was looking for. I can''t recommend her highly enough.', '2016-06-02 10:39:27'),
(4, 'John', 'Doe', 'johndoe@example.com', 'Brilliant service!', '2016-06-02 14:33:46'),
(5, 'William ', 'Brown', 'justwilliam@example.com', 'Marvellous woman! Very much love my framed shoes.', '2016-06-02 15:22:32'),
(6, 'Mickey', 'Mouse', 'mickeymouse@example.com', 'This is magical! ', '2016-06-02 16:20:39'),
(7, 'Minnie ', 'Mouse', 'minniemouse@example.com', 'This is awesome! ', '2016-06-02 16:26:57'),
(8, 'Matt ', 'Smith ', 'mattsmith@example.com', 'Very much worth the money! A joy to work with as well. Would recommend her to anyone! ', '2016-06-02 16:46:08'),
(9, 'Paul ', 'McCartney', 'paulmccartney@thebeatles.com', 'She is fantastic!', '2016-06-02 17:03:09'),
(10, 'John ', 'Lennon', 'johnlennon@thebeatles.com', 'Yoko and I love our framed photo from Paris! Anne-Marie really knows her stuff, very knowledgeable. All you need is love!', '2016-06-03 10:43:50'),
(11, 'George', 'Harrison', 'georgeharrison@thebeatles.com', 'Something was getting in the way of the my songbook. Anne-Marie solved this problem and successfully framed the songbook. Now very well preserved. ', '2016-06-03 11:38:48'),
(12, 'Ringo', 'Starr', 'ringostarr@thebeatles.com', 'Very happy with my framed yellow submarine! With a little help from my friends, I was able to find The Framing Lady. Very good service and reliable person too. Thanks for all your work Anne-Marie! ', '2016-06-03 11:48:38'),
(13, 'Mick', 'Jagger', 'mickjagger@therollingstones.com', 'Excellent woman and service! It certainly will not be the last time I''ll be using her for picture framing. Her work so far on all of The Rolling Stones memorabilia has been simply brilliant!', '2016-06-03 12:04:40'),
(14, 'Keith', 'Richards', 'keithrichards@therollingstones.com', 'My Jumpin'' Jack Flash was framed to the highest quality. Thanks Anne-Marie for all your good work! Would recommend her to anyone looking for picture or object-framing.', '2016-06-03 12:20:50'),
(15, 'Ronnie', 'Wood', 'ronniewood@therollingstones.com', 'Anne Marie is awesome! Rock on!', '2016-06-03 12:28:34'),
(16, 'Charlie', 'Watts ', 'charliewatts@therollingstones.com', 'Thanks to Anne-Marie for framing my precious drumsticks. Without her, they would be gathering dust somewhere.', '2016-06-03 12:32:01'),
(17, 'Brian', 'Johnstone', 'brianjohnstone@acdc.com', 'Thanks Anne-Marie for framing my Back To Black art memorabilia! You did an excellent job!', '2016-06-03 12:42:43'),
(18, 'Angus ', 'Young', 'angusyoung@acdc.com', 'Awesome job from Anne-Marie with framing my school-outfit. Used on many tours. She did a great job and I have a lot to thank her for.', '2016-06-03 12:48:52'),
(19, 'Eric', 'Clapton', 'ericclapton@cream.co.uk', 'Awesome job on my Wonderful Tonight memorabilia! Thanks Anne-Marie!', '2016-06-13 11:23:15'),
(20, 'Buddy', 'Guy', 'buddy.guy@thechicagoblues.com', 'I love the Sweet Home Chicago by Anne-Marie! Fantastic job by her. Thank you so much!', '2016-06-13 11:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `surname`, `email`, `pass`, `registration_date`) VALUES
(1, 'Ben ', 'Silveston', 'bsilveston37@gmail.com', '4233137d1c510f2e55ba5cb220b864b11033f156', '2016-06-22 12:47:55'),
(2, 'Nat', 'Cowan', 'ntcowan@googlemail.com', '6adfb183a4a2c94a2f92dab5ade762a47889a5a1', '2016-07-04 14:39:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
