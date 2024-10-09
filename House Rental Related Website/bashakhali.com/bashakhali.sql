-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 03:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bashakhali`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `address` text NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `category`, `address`, `img`, `description`) VALUES
(5, 'ফ্ল্যাট ভাড়া', 'ফ্ল্যাট ভাড়া, শ্রীনগর, ঝুমুর হল রোড, পোদ্দার পাড়া, কাঠের পুলের বিপরীতে , শ্রীনগর', 'https://i.postimg.cc/zDxN6rKk/flat-rent.jpg', '**টাইপ: ফ্ল্যাট, বেড রুম: ২ টি, ওয়াস রুম: ২ টি, তারিখ: ১ জানুয়ারী, ২০২৩, বারিন্দা সংখ্যা: ১ ট, ফ্ল্যাটের অবস্থান: ১ তলা. **২ টা বেডরুম, ২টা বাথরুম, ১টা রান্নাঘর, ১টা বারান্দা, ১টা ডাইনিংরুম। '),
(6, 'সিট ভাড়া', 'সিট ভাড়া, ১০৭,মাদার আলী কমপ্লেক্স,উত্তরা ইঞ্জিনিয়ারিং কলেজ সংলগ্ন,আব্দুল্লাহপুর,উত্তরা, আব্দুল্লাহপুর', 'https://i.postimg.cc/NjHwK2VN/seat-rent.jpg', 'টাইপ: সিট, বেড রুম: ১ টি, ওয়াস রুম: ২ টি,  তারিখ: ১\r\nজানুয়ারী, ২০২৩, বারিন্দা সংখ্যা: ০ টি,  ফ্ল্যাটের অবস্থান: ৫ তলাতে'),
(7, 'সাবলেট ভাড়া', 'সাবলেট ভাড়া , 258,west shantibag,dhaka-1217, মালিবাগ', 'https://i.postimg.cc/ZK0mhMLz/sublet-rent.jpg', 'সাবলেট ভাড়া, 258,west shantibag,dhaka-1217, মালিবাগ'),
(8, 'ব্যাচেলর ভাড়া', ' 32/1b 4th floor, shukrabad dhanmondi, শুক্রাবাদ', 'https://i.postimg.cc/KvV2cD9k/bachelor-rent.jpg', 'টাইপ: সিট, বেড রুম: ১ টি, ওয়াস রুম: ১ টি, তারিখ: ১\r\nফেব্রুয়ারী, ২০২৩, বারিন্দা সংখ্যা: ১ টি, ফ্ল্যাটের অবস্থান: ৪ তলাতে'),
(9, 'ফ্যামিলি ভাড়া', '32/1b 4th floor, shukrabad dhanmondi, শুক্রাবাদ', 'https://i.postimg.cc/kGYdbQqH/family-rent.jpg', 'টাইপ: সিট, বেড রুম: ১ টি, ওয়াস রুম: ১ টি, তারিখ: ১\r\nফেব্রুয়ারী, ২০২৩, বারিন্দা সংখ্যা: ১ টি, ফ্ল্যাটের অবস্থান: ৪ তলাতে');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobileNum` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobileNum`, `password`) VALUES
(6, 'Kazi Mohammad Moinul Ahsan', 'kazimoinul.official@gmail.com', '01511111111', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
