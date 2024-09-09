-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 06:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all-about-music`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `page` varchar(50) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text DEFAULT NULL,
  `subtext` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `page`, `title`, `text`, `subtext`, `description`, `button_name`, `button_link`, `image`, `image_2`, `created_at`, `updated_at`) VALUES
(2, 'About Us', 'About Us', 'Home - About', NULL, NULL, NULL, NULL, 'storage/images/banner/1725295295.png', 'storage/images/banner/1725295295.png', '2022-10-11 19:05:19', '2024-09-02 11:41:35'),
(4, 'Contact Us', 'Contact Us', NULL, NULL, NULL, NULL, NULL, 'storage/images/banner/1725321263.png', 'storage/images/banner/1725321263.png', '2024-08-12 20:03:38', '2024-09-02 18:54:23'),
(47, 'Special offer', 'Special Offers', 'Home - Special Offers', NULL, NULL, NULL, NULL, 'storage/images/banner/1725298821.png', 'storage/images/banner/1725298821.png', '2022-10-11 19:05:19', '2024-09-02 12:40:21'),
(48, 'Upcoming Events Page', 'Upcoming Events', 'Home - Upcoming Events', NULL, NULL, NULL, NULL, 'storage/images/banner/1725403937.png', 'storage/images/banner/1725403937.png', '2022-10-11 19:05:19', '2024-09-03 17:52:17'),
(50, 'Award page', 'Award Winning DJ Services', 'Home - Award Winning DJ Services', NULL, NULL, NULL, NULL, 'storage/images/banner/1725300600.png', 'storage/images/banner/1725300600.png', '2022-10-11 19:05:19', '2024-09-02 13:10:00'),
(52, 'Booking', 'Book Now', 'Home - Book NOw', NULL, NULL, NULL, NULL, 'storage/images/banner/1725401690.png', 'storage/images/banner/1725401690.png', '2022-10-11 19:05:19', '2024-09-03 17:14:50'),
(56, 'Testimonial Page', 'Testimonials', 'Home - Testimonials', NULL, NULL, NULL, NULL, 'storage/images/banner/1725298821.png', 'storage/images/banner/1725298821.png', '2022-10-11 19:05:19', '2024-09-02 13:52:29'),
(57, 'Tips & Info', 'Tips & Info', 'Home - Tips & Info', NULL, NULL, NULL, NULL, 'storage/images/banner/1725295295.png', 'storage/images/banner/1725295295.png', '2022-10-11 19:05:19', '2024-09-02 17:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `primary_image` varchar(55) DEFAULT NULL,
  `inner_image` varchar(55) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `author_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `primary_image`, `inner_image`, `slug`, `created_at`, `deleted_at`, `updated_at`, `author`, `author_image`) VALUES
(1, 'Lorem Ipsum Dolor Sit Amet Consequence', '<p style=\"margin-bottom: 1rem; line-height: 25px; color: rgb(124, 124, 124); font-size: 17px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p><p style=\"margin-bottom: 1rem; line-height: 25px; color: rgb(124, 124, 124); font-size: 17px; font-family: Poppins, sans-serif;\">dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>', 'storage/images/blog/66c4d58d5be4d1724175757.jpg', 'storage/images/blog-inner/66c906346ec641724450356.jpg', 'lorem-ipsum-dolor-sit-amet-consequence', '2024-08-20 12:40:16', NULL, '2024-08-24 01:59:16', 'Susan Lopez', 'storage/images/author_image/66c4dfa8da9ac1724178344.jpg'),
(2, 'Lorem Ipsum Dolor Sit Amet Consequence', '<p>Author</p>', 'storage/images/blog/66c4d8826fb461724176514.jpg', 'storage/images/blog-inner/66c906f27a5821724450546.jpg', 'lorem-ipsum-dolor-sit-amet-consequence', '2024-08-20 12:55:14', NULL, '2024-08-24 02:02:26', 'Susan Lopez', 'storage/images/author_image/66c9067c918bc1724450428.jpg'),
(3, 'Lorem Ipsum Dolor Sit Amet Consequence', '<p style=\"margin-bottom: 1rem; line-height: 25px; color: rgb(124, 124, 124); font-size: 17px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p><p style=\"margin-bottom: 1rem; line-height: 25px; color: rgb(124, 124, 124); font-size: 17px; font-family: Poppins, sans-serif;\">dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'storage/images/blog/66c906e1bfd0a1724450529.jpg', 'storage/images/blog/66c906e1d455a1724450529.jpg', 'lorem-ipsum-dolor-sit-amet-consequence-1', '2024-08-24 02:02:09', NULL, '2024-08-24 02:02:09', 'Susan Lopez', 'storage/images/blog/66c906e1e0d091724450529.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `services` text DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `message`, `services`, `slot_id`, `created_at`, `updated_at`) VALUES
(16, 'xewyzojydo', NULL, '5454545454', 'Rerum natus iste sed', 'service 2', 52, '2024-09-03 16:59:40', '2024-09-03 16:59:40'),
(17, 'new booking', NULL, '454545545454', 'new booking', 'service 1', 64, '2024-09-03 18:04:36', '2024-09-03 18:04:36'),
(18, 'husapy', NULL, '32545454544', 'Quidem excepturi vol', 'service 3', 55, '2024-09-03 19:41:08', '2024-09-03 19:41:08'),
(19, 'ronaj', NULL, '7354545454', 'Qui anim magni commodwdwd', 'service 2', 53, '2024-09-03 19:42:50', '2024-09-03 19:42:50'),
(20, 'qazekewep', NULL, '354545445', 'Occaecat est consequ', 'service 3', 60, '2024-09-04 11:22:06', '2024-09-04 11:22:06'),
(21, 'luhaco', NULL, '2155555555', 'Cillum ut deleniti n', 'service 3', 74, '2024-09-04 11:25:57', '2024-09-04 11:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', '', '2021-10-01 08:12:38', '2024-09-04 16:10:50'),
(2, 'favicon', '', '2021-10-01 08:12:38', '2024-09-04 16:12:19'),
(3, 'contact', '804-380-6389', '2021-10-01 08:14:41', '2024-09-03 19:40:22'),
(4, 'secondary_email', 'allaboutthemusic8@gmail.com', '2021-10-01 08:14:41', '2024-09-03 20:04:46'),
(5, 'primary_email', 'allaboutthemusicrichmond@com', '2021-10-01 08:15:20', '2024-09-03 20:05:14'),
(6, 'website_name', 'All About The Music Richmond', '2022-02-18 18:12:09', '2024-09-03 19:40:22'),
(7, 'tag_line', 'Affordable intelligent Solutions for Today\'s World', '2021-10-01 08:17:05', '2021-10-01 08:17:05'),
(8, 'footer_logo', '', '2021-10-01 08:17:05', '2024-09-04 16:11:46'),
(9, 'news_text', 'All About The Music specializes in weddings…. from small intimate ceremonies to lavish receptions! Scott has over 20 years of experience with DJing Weddings.  This breadth of skills and experience gives him a distinct advantage over other DJ services … he knows a wide range of musical styles; he knows how to read a crowd; and most', '2021-10-01 08:18:00', '2024-09-03 18:16:37'),
(10, 'address', 'Lorumipsum dolor sitb demn', '2021-10-01 08:18:00', '2024-08-19 13:16:05'),
(11, 'copy_right', 'Copyright © 2024 . All Rights Reserved.', '2022-01-13 19:32:21', '2024-09-03 19:40:22'),
(12, 'facebook', 'https://www.facebook.com/', '2022-01-20 13:32:40', '2024-08-19 13:01:14'),
(13, 'tiktok', 'https://www.tiktok.com/en/', '2022-01-20 13:32:40', '2023-10-03 21:22:10'),
(14, 'telegram', 'https://telegram.com/', '2022-01-20 13:32:40', '2023-07-20 18:11:45'),
(15, 'youtube', 'https://www.youtube.com/', '2022-03-21 11:46:49', '2023-08-11 19:48:23'),
(16, 'open_hours', 'monday to friday 8:30 am - 5:30pm (GMT)', '2022-09-22 17:19:08', '2022-09-22 12:19:27'),
(17, 'live_location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46830151.11795828!2d-119.8093025!3d44.24236485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1707517419474!5m2!1sen!2s', '2022-09-22 17:25:38', '2024-05-07 19:55:20'),
(18, 'fax', '(00) 123 456 7890 7891', '2022-10-11 18:43:38', '2022-10-11 13:44:20'),
(19, 'insta', 'https://www.instagram.com/', '2022-01-20 13:32:40', '2024-08-19 13:01:14'),
(21, 'twitter', 'https://twitter.com/', '2022-03-21 11:46:49', '2024-08-19 13:01:14'),
(22, 'link_din', 'https://pk.linkedin.com/', '2022-03-21 11:46:49', '2023-10-31 19:28:12'),
(23, 'short_description', 'Lorem ipsum dolor sit amet, consectetur adipisci.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisci.Lorem ipsum dolor sit amet', '2022-03-21 11:46:49', '2024-05-07 18:58:08'),
(24, 'link', 'https://www.linkedin.com/', '2022-01-20 13:32:40', '2024-08-19 13:01:14'),
(25, 'google', 'https://www.google.com.pk/', '2022-01-20 13:32:40', '2023-11-09 21:01:13'),
(26, 'toll', '360 352 3934', '2021-10-01 08:14:41', '2024-06-11 13:56:51'),
(27, 'olympia', '360-352-3934', '2021-10-01 08:14:41', '2024-06-11 14:02:00'),
(28, 'centralia', '360-736-1020', '2021-10-01 08:14:41', '2024-06-11 14:02:00'),
(29, 'yelm', '360-458-2200', '2021-10-01 08:14:41', '2024-06-11 14:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `page` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `btn_color` varchar(10) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `primary_image` text DEFAULT NULL,
  `secondary_image` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `video_2` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `page`, `section`, `title`, `subtitle`, `description`, `short_description`, `button_text`, `btn_color`, `link`, `primary_image`, `secondary_image`, `video`, `video_2`, `created_at`, `updated_at`) VALUES
(5, 'Home Page', 'About Us', 'About Us', NULL, '<h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-weight: 400; font-size: 40px; font-family: big_noodle_titling; color: rgb(6, 111, 184); letter-spacing: 5px;\">All About The Music Richmond</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; letter-spacing: 2px;\">All About The Music specializes in weddings…. from small intimate ceremonies to lavish receptions! Scott has over 20 years of experience with DJing Weddings. This breadth of skills and experience gives him a distinct advantage over other DJ services … he knows a wide range of musical styles; he knows how to read a crowd; and most importantly, he has the experience to confidently respond to any need or request!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; letter-spacing: 2px;\">The philosophy of All About The Music is to provide excellent service and communication with you from day one. Scott wants your day to go just the way you envisioned it, and he will work closely with you to understand your specific needs and wants and make sure every expectation is exceeded. This goal is achieved by unlimited contact with Scott throughout the planning process.</p>', NULL, 'Read More', NULL, 'about', 'storage/images/content/66d0e779a7d031724966777.png', 'storage/images/content/66d0e7809adf71724966784.png', NULL, NULL, '2024-08-09 18:47:37', '2024-09-03 18:53:07'),
(698, 'Upcoming Event', 'Events', 'Upcoming Events', NULL, NULL, '2024 dates are filling up fast! So contact me today, to book me for your wedding, or other event! Also, accepting bookings for 2025 as well!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-16 23:08:28', '2024-09-03 17:51:36'),
(707, 'Home Page', 'Why Hire a Professional DJ?', 'Why Hire a Professional DJ?', NULL, NULL, 'What most couples who are planning a wedding don’t know is that saving money by hiring an amateur DJ for your wedding comes with a high price tag. Before you make a decision you regret, here are some things you need to know.', 'Read More', NULL, '/about', 'storage/images/content/66d0ea421f6051724967490.png', 'storage/images/content/66d0ea3a3385d1724967482.png', NULL, NULL, '2024-08-09 18:47:37', '2024-09-03 18:53:39'),
(708, 'Home Page', 'special offer', 'special offer', NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 500; font-size: 25px; font-family: big_noodle_titling; color: rgb(255, 255, 255); letter-spacing: 5px;\">10% Off All DJ Packages</h5><p style=\"margin: 10px 0px; color: rgb(168, 168, 168); font-size: 15px; font-family: Montserrat, system-ui;\">Act now to take advantage of this limited time offer!</p>', 'Congratulations on your engagement! As my wedding gift to you, save 10% on all DJ Packages! But hurry because this special offer is only available for a limited time!', 'Contact Now', NULL, '/contact-us', 'storage/images/content/66d0ea421f6051724967490.png', NULL, NULL, NULL, '2024-08-09 18:47:37', '2024-09-03 19:09:00'),
(709, 'Home Page', 'videos', 'Our Videoss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'storage/videos/66d1052edcc8b1724974382.mp4', 'storage/videos/66d1052edd5331724974382.mp4', '2024-08-09 18:47:37', '2024-08-29 18:33:02'),
(710, 'Home Page', 'Award Winning', 'Award Winning DJ Services', NULL, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; width: 526px;\">Richmond, Virginia – January 8, 2017 – WeddingWire, the nation’s leading online wedding marketplace, named All About The Music as a winner of the prestigious WeddingWire Couples’ Choice Awards® 2017 for Disc Jockey in Richmond!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; width: 526px;\">The WeddingWire Couples’ Choice Awards® 2017 recognizes the top five percent of wedding professionals in the WeddingWire Network who demonstrate excellence in quality, service, responsiveness and professionalism.</p>', NULL, 'MORE DETAILS', NULL, '/about', 'storage/images/content/66d10829481fe1724975145.png', 'storage/images/content/66d10832244481724975154.png', NULL, NULL, '2024-08-09 18:47:37', '2024-09-03 19:10:18'),
(711, 'Home Page', 'Award 1', 'award 1', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d10a561e2f21724975702.png', NULL, NULL, NULL, '2024-08-09 18:47:37', '2024-08-29 18:55:02'),
(712, 'Home Page', 'Award 2', 'award 2', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d10aacb10881724975788.png', NULL, NULL, NULL, '2024-08-09 18:47:37', '2024-08-29 18:56:30'),
(713, 'Home Page', 'Award 3', 'award 3', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d10ab8e4d2d1724975800.png', NULL, NULL, NULL, '2024-08-09 18:47:37', '2024-08-29 18:56:43'),
(714, 'Home Page', 'Award 4', 'award 4', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d10ad9114f81724975833.png', NULL, NULL, NULL, '2024-08-09 18:47:37', '2024-08-29 18:57:13'),
(715, 'About Us', 'Don’t trust your big event', NULL, 'Don’t trust your big event to amateurs! Let All About The Music make your reception a night to remember!', '<h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-weight: 100; font-size: 35px; font-family: big_noodle_titling; color: rgb(255, 255, 255); user-select: auto !important;\">Don’t trust your big event to amateurs! Let All About The Music make your reception a night to remember!</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; width: 572.391px; user-select: auto !important;\">With over 20 years of musical entertainment experience, utilizing professional quality sound equipment and a can-do attitude, All About The Music delivers exciting, unforgettable events! Scott knows how to read a crowd and ensure that your guests are having the time of their lives – no matter how diverse their ages, backgrounds or musical preferences.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; width: 572.391px; user-select: auto !important;\">Located in Richmond Virginia, Scott is able to accommodate any size wedding throughout Richmond … or wherever you’re located. Just Contact him to discuss your needs and ideas and he’ll make it a reality.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; width: 572.391px; user-select: auto !important;\">Scott can provide a professional-quality sound system so that every guest can hear your officiant at your outdoor ceremony; arrange for low-key cocktail and dinner hour music; queue up the grand entrance for the wedding party’s arrival at the reception; facilitate with toasts and announcements; and keep the dance floor hopping all night!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(255, 255, 255); font-size: 13px; font-family: Montserrat, system-ui; width: 572.391px; user-select: auto !important;\">You have access to Scott every step of the way – from initial meeting , to pre-planning, to the moment you exit the reception!</p>', NULL, NULL, NULL, NULL, 'storage/images/content/66d5f09b891811725296795.png', 'storage/images/content/66d5f09ee3e001725296798.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 12:06:39'),
(716, 'Special Offer', 'Special Offers', 'Special Offers', NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 500; font-size: 25px; font-family: big_noodle_titling; color: rgb(255, 255, 255); letter-spacing: 5px;\">10% Off All DJ Packages</h5><p style=\"margin: 10px 0px; color: rgb(168, 168, 168); font-size: 15px; font-family: Montserrat, system-ui;\">Act now to take advantage of this limited time offer!</p>', 'Congratulations on your engagement! As my wedding gift to you, save 10% on all DJ Packages! But hurry because this special offer is only available for a limited time!', 'Contact Now', NULL, 'link', 'storage/images/content/66d5f9504e43a1725299024.png', 'storage/images/content/66d5f955e91381725299029.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 12:48:43'),
(717, 'Awards', 'Award Winning DJ Services', 'Award Winning DJ Services', NULL, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(173, 176, 178); font-size: 15px; font-family: Montserrat, system-ui; user-select: auto !important;\">Richmond, Virginia – January 8, 2017 – WeddingWire, the nation’s leading online wedding marketplace, named All About The Music as a winner of the prestigious WeddingWire Couples’ Choice Awards® 2017 for Disc Jockey in Richmond!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(173, 176, 178); font-size: 15px; font-family: Montserrat, system-ui; user-select: auto !important;\">The WeddingWire Couples’ Choice Awards® 2017 recognizes the top five percent of wedding professionals in the WeddingWire Network who demonstrate excellence in quality, service, responsiveness and professionalism. The esteemed awards are given to the top local wedding vendors in more than 20 service categories, from wedding venues to wedding photographers, based on their professional achievements from the previous year.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(173, 176, 178); font-size: 15px; font-family: Montserrat, system-ui; user-select: auto !important;\">While many industry award winners are selected by the host organization, the WeddingWire Couples’ Choice Awards® winners are determined solely based on reviews from real newlyweds and their experiences working with All About The Music. Award-winning vendors are distinguished for the quality, quantity, consistency and timeliness of the reviews they have received from their past clients.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(173, 176, 178); font-size: 15px; font-family: Montserrat, system-ui; user-select: auto !important;\">“It’s always exciting to start the year by honoring the top-rated wedding professionals within the WeddingWire Network who represent more than two million reviews on our website,” said Timothy Chi, CEO, WeddingWire. “Each of the businesses recognized are committed to quality, professionalism and all around top-notch service. We applaud All About The Music for their impressive achievements within the wedding industry.”</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(173, 176, 178); font-size: 15px; font-family: Montserrat, system-ui; user-select: auto !important;\">As a Couples’ Choice Awards® winner, All About The Music is highlighted within the WeddingWire Network, which is comprised of more than 200,000 wedding professionals throughout North America and abroad. All About The</p>', 'As a Couples’ Choice Awards® winner, All About The Music is highlighted within the WeddingWire Network, which is comprised of more than 200,000 wedding professionals throughout North America and abroad. All About The Music is proud to be one of the top Disc Jockey’s in Richmond in the WeddingWire Network, which includes leading wedding sites such as WeddingWire, Project Wedding, Brides.com, Martha Stewart Weddings, and Weddingbee. We would like to thank our past clients for taking the time to review our business on WeddingWire. We value all of our clients and truly appreciate the positive feedback that helped us earn the WeddingWire Couples’ Choice Awards® 2017.', NULL, NULL, NULL, 'storage/images/content/66d601917ce251725301137.png', 'storage/images/content/66d60195d82fb1725301141.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 13:19:02'),
(718, 'Awards', 'award 1 & 2', 'Awards page', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d6023becf741725301307.png', 'storage/images/content/66d6023f72a201725301311.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 13:23:19'),
(719, 'Awards', 'award 3 & 4', 'Awards page', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d6023becf741725301307.png', 'storage/images/content/66d6023f72a201725301311.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 13:23:19'),
(720, 'Awards', 'award 5 & 6', 'Awards page', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d6023becf741725301307.png', 'storage/images/content/66d6023f72a201725301311.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 13:23:19'),
(721, 'Awards', 'award 7', 'Awards page', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d6023becf741725301307.png', NULL, NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 13:23:19'),
(722, 'Tips & Info', 'Questions You Must Ask a', 'Questions You Must Ask a\r\n', 'Wedding Professional Before Booking them\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 12:06:39'),
(723, 'Tips & Info', 'Price vs. Value', 'Price vs. Value', 'When making a decision about price, you also have to consider value (i.e. what are you getting for that price)', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 10px; list-style-position: initial; list-style-image: initial; color: rgb(57, 57, 57); font-family: Poppins, sans-serif; font-size: 15px; user-select: auto !important;\"><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Is the DJ giving you value for the price you are paying?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Is the DJ giving you value for the price you are paying?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">How many weddings does the DJ do per year?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Does the DJ use Professional Grade Equipment?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Does the DJ have back-up Equipment?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Does the DJ have liability insurance?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Does the DJ have a contract?</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Has the DJ told you if there are any hidden fees? (i.e. taxes, travel, etc)</li><li style=\"margin-bottom: 15px; font-size: 16px; color: rgb(152, 155, 158); user-select: auto !important;\">Is the DJ good at communicating (i.e. do they answer emails and return phone calls in a timely manner)</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(152, 155, 158); font-size: 15px; font-family: Montserrat, system-ui; font-style: italic; user-select: auto !important;\">If the answers to the above questions are no, then you aren’t getting any value for the price you are paying. You only do this once, so is it really worth risking ruining your entire wedding, just to save a few hundred dollars</p>', NULL, NULL, NULL, NULL, 'storage/images/content/66d64b59f1b9c1725320025.png', 'storage/images/content/66d64b5f970321725320031.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 18:34:01'),
(724, 'Tips & Info', 'Why Hire a Professional DJ?', 'Why Hire a Professional DJ?', 'What most couples who are planning a wedding don’t know is that saving money by hiring an amateur DJ for your wedding comes with a high price tag. Before you make a decision you regret, here are some things you need to know.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-19 18:40:47', '2024-09-03 18:53:39'),
(725, 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/content/66d5ebe3ce92a1725295587.png', 'storage/images/content/66d5ebe5c5b071725295589.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-02 12:07:28'),
(726, 'About Us', 'about', 'ABOUT US', NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(255, 255, 255); font-family: Montserrat, system-ui; letter-spacing: 1px; user-select: auto !important;\">All About The Music specializes in weddings…. from small intimate ceremonies to lavish receptions! Scott has over 20 years of experience with DJing Weddings. This breadth of skills and experience gives him a distinct advantage over other DJ services … he knows a wide range of musical styles; he knows how to read a crowd; and most importantly, he has the experience to confidently respond to any need or request!</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(255, 255, 255); font-family: Montserrat, system-ui; letter-spacing: 1px; user-select: auto !important;\">The philosophy of All About The Music is to provide excellent service and communication with you from day one. Scott wants your day to go just the way you envisioned it, and he will work closely with you to understand your specific needs and wants and make sure every expectation is exceeded. This goal is achieved by unlimited contact with Scott throughout the planning process.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(255, 255, 255); font-family: Montserrat, system-ui; letter-spacing: 1px; user-select: auto !important;\">Our website facilitates this communication and attention to detail by incorporating useful planning tools and forms in the Client Access Area. These integrated tools include access to our Music Database where you can build custom song request lists, including a “must play” list and a “do not play” list. Another essential tool is the Planning Form where you can map out all details of your event — including a suggested timeline, names of other vendors, contact persons, etc. — and submit that directly to All About The Music for review and discussion.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(255, 255, 255); font-family: Montserrat, system-ui; letter-spacing: 1px; user-select: auto !important;\">And of course, you can always Contact Scott directly with any questions or concerns! All About The Music is owner operated, so the same DJ you meet in your initial interview is the one that will coordinate and entertain at your event!</p>', NULL, NULL, NULL, NULL, 'storage/images/content/66d78d47df15e1725402439.png', 'storage/images/content/66d78d49e45a71725402441.png', NULL, NULL, '2024-08-19 18:40:47', '2024-09-03 17:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `details_section`
--

CREATE TABLE `details_section` (
  `id` int(11) NOT NULL,
  `busines` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `shipments` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `is_organization` tinyint(1) DEFAULT 0,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `is_retired` tinyint(1) DEFAULT 0,
  `employer` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `amount`, `transaction_id`, `country`, `first_name`, `last_name`, `company`, `address1`, `address2`, `city`, `zip_code`, `is_organization`, `email`, `phone`, `is_retired`, `employer`, `occupation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 50.00, NULL, 'Algeria', 'dwd', 'dwdw', 'wdw', 'wdwd', 'dww', 'wdw', '454', 1, 'admin@southgate-fence-inc.com', NULL, 1, 'wdwd', NULL, '2024-08-20 15:29:22', '2024-08-20 17:41:07', '2024-08-20 17:41:07'),
(2, 84.00, NULL, 'Afghanistan', 'Dean', 'Pacheco', 'Wall and Walters Traders', '391 Milton Boulevard', 'Illum dignissimos q', 'Reiciendis sint ali', '75177', 1, 'admin@voip.com', '5454545454', 1, 'wdwd', 'dwdwdwd', '2024-08-20 16:42:48', '2024-08-20 17:44:27', '2024-08-20 17:44:27'),
(3, 8.00, NULL, 'Afghanistan', 'Wynne', 'Bonner', 'Oconnor Reed Inc', '104 Green Oak Road', 'Accusantium et verit', 'Consequatur ex ut ni', '98760', 0, NULL, NULL, 0, NULL, NULL, '2024-08-20 16:47:34', '2024-08-20 17:50:10', '2024-08-20 17:50:10'),
(4, 24.00, 'ch_3Pq029Dip21WCyXi1QDydy18', 'American Samoa', 'Driscoll', 'Bridges', 'Townsend and Bullock Trading', '25 North Rocky Fabien Road', 'Quo molestiae nesciu', 'Sed quia quae alias', '83305', 0, NULL, NULL, 0, NULL, NULL, '2024-08-20 16:56:10', '2024-08-20 17:51:05', '2024-08-20 17:51:05'),
(5, 5.00, 'ch_3Pq05dDip21WCyXi4ZScUH9d', 'Albania', 'Patrick', 'Dickson', 'Weaver and Rush Traders', '23 North Nobel Extension', 'Ex cum modi adipisci', 'Voluptate natus anim', '31723', 0, NULL, NULL, 0, NULL, NULL, '2024-08-20 16:59:46', '2024-08-20 16:59:46', NULL),
(6, 85.00, 'ch_3Pq0yUDip21WCyXi1NUAevKA', 'Algeria', 'Jana', 'Knight', 'Mcconnell and Daniel Inc', '43 Second Court', 'Sint laborum aperiam', 'Excepteur quisquam v', '40360', 1, 'admin@southgate-fence-inc.com', NULL, 0, NULL, NULL, '2024-08-20 17:56:27', '2024-08-20 17:56:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `primary_image` varchar(255) DEFAULT NULL,
  `inner_image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `heading` varchar(55) DEFAULT NULL,
  `gallery_heading` varchar(55) DEFAULT NULL,
  `organizer` varchar(30) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `img_1` varchar(255) DEFAULT NULL,
  `img_2` varchar(255) DEFAULT NULL,
  `img_4` varchar(255) DEFAULT NULL,
  `img_3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `subtitle`, `primary_image`, `inner_image`, `description`, `slug`, `link`, `is_active`, `short_description`, `heading`, `gallery_heading`, `organizer`, `start_date`, `end_date`, `time`, `img_1`, `img_2`, `img_4`, `img_3`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'updating abc ade', 'titletitletitle', 'storage/images/events/66c3c59a072c21724106138.png', 'storage/images/event/66c39ce2dbe2e1724095714.png', '<p>updaing&nbsp;updating abc ade</p>', 'updating-abc-ade', NULL, 0, 'updating abc ade', NULL, NULL, 'updating abc ade', '2024-08-09', '2024-08-30', '9.00PM', 'storage/images/events/66c3c58744df41724106119.png', 'storage/images/events/66c3c577443941724106103.jpg', 'storage/images/events/66c3c577720d31724106103.jpg', 'storage/images/events/66c3c5c360d861724106179.jpg', '2024-08-19 14:28:35', NULL, '2024-08-19 18:22:41'),
(2, '3rd Annual Saadia Hunt Memorial Sickle Cell Walk', '3rd Annual Saadia Hunt Memorial Sickle Cell Walk', NULL, NULL, '<h2 style=\"margin-right: auto; margin-bottom: 0px; margin-left: auto; font-weight: 400; line-height: 74px; font-size: 60px; font-family: Oswald, sans-serif; color: rgb(29, 29, 29); text-transform: uppercase; width: 907.188px; padding-bottom: 20px; text-align: center;\">3rd Annual Saadia Hunt Memorial Sickle Cell Walk</h2><div><br></div>', '3rd-annual-saadia-hunt-memorial-sickle-cell-walk', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-19 14:51:55', NULL, '2024-08-19 18:22:41'),
(3, 'ABC', 'XYZ', 'storage/images/event/66c3b711b28f81724102417.png', 'storage/images/event/66c3b711ea3251724102417.jpg', '<p>Descripotion</p>', 'abc', NULL, 0, NULL, NULL, NULL, 'abc', '2010-12-23', '0000-00-00', '9.00PM', NULL, 'storage/images/event/66c3b711d51f61724102417.jpg', NULL, NULL, '2024-08-19 16:20:18', NULL, '2024-08-19 18:22:41'),
(4, '2024-08-22', 'titletitletitle', 'storage/images/events/66c3c54685fe61724106054.png', NULL, '<p>titletitletitle<br></p>', 'title', NULL, 0, 'titletittitletitlele', NULL, NULL, 'titletitletitle', '2024-08-23', '2024-08-31', '09.30P', 'storage/images/events/66c3c537d5be71724106039.jpg', 'storage/images/events/66c3c546618a01724106054.png', 'storage/images/events/66c3c546a67381724106054.jpg', 'storage/images/events/66c3c9b16854d1724107185.jpg', '2024-08-19 16:39:01', NULL, '2024-08-19 18:22:41'),
(5, 'new checjed', 'new checjed', 'storage/images/event/66c3c88d4cb6e1724106893.jpg', NULL, '<p>new checjednew checjednew checjednew checjed<br></p>', 'new-checjed', NULL, 0, 'new checjed', NULL, NULL, 'new checjed', '2024-08-20', '2024-08-31', '9.00PM', NULL, NULL, NULL, NULL, '2024-08-19 17:34:53', NULL, '2024-08-19 18:22:41'),
(6, 'Our Eventss', NULL, 'storage/images/events/66c3d35cedb3a1724109660.jpg', NULL, '<span style=\"color: rgb(124, 124, 124); font-family: Poppins, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>', 'dwd', NULL, 1, 'The Hunt Foundation hosts a variety of events throughout the year, including our annual Sickle Cell Awareness Walk, health and wellness fairs, literacy events in partnership with Dayton Metro Library, and college prep and financial literacy seminars. These events are designed to engage the community, promote education, and raise awareness about important health issues. Join us and be a part of making a positive impact in Dayton.', NULL, NULL, 'Lorem ipsum dolor', '2024-08-31', '2024-08-31', '8.00 am', 'storage/images/events/66c3d35d132ae1724109661.jpg', 'storage/images/events/66c3d35d1f68c1724109661.jpg', 'storage/images/events/66c3d35d381a31724109661.jpg', 'storage/images/events/66c3d35d2bb3a1724109661.jpg', '2024-08-19 17:35:32', NULL, '2024-08-19 18:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `section` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `section`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'This is first QUestipm', 'First Question Answer 1220000000000000000000', 0, '2024-08-02 12:20:37', '2024-08-02 12:42:56', '2024-08-02 12:42:56'),
(2, 'This is first QUestipm', 'First Question Answer 1220000000000000000000', 1, '2024-08-02 12:43:03', '2024-09-02 17:24:09', '2024-09-02 17:24:09'),
(3, 'Question 2', 'Answer 2', 2, '2024-08-02 12:52:40', '2024-09-02 17:24:12', '2024-09-02 17:24:12'),
(4, 'This is first QUestipm', 'dwd', 1, '2024-09-02 17:15:04', '2024-09-02 17:24:16', '2024-09-02 17:24:16'),
(5, 'How many weddings do you do per year? How much experience do you have?', 'This is an extremely important question. Ideally, your wedding professional should have ample experience specifically with weddings. Not only will they be more skilled in their craft, this also makes them a valuable source of information and ensures that your wedding day goes smoothly.', 1, '2024-09-02 17:24:35', '2024-09-02 17:24:35', NULL),
(6, 'How much do you cost?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:25:13', '2024-09-02 17:25:13', NULL),
(7, 'How much is the deposit?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:26:10', '2024-09-02 17:26:10', NULL),
(8, 'What specifically is included in that cost?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:26:57', '2024-09-02 17:26:57', NULL),
(9, 'What happens if I cancel?', 'What happens if you cancel? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:27:09', '2024-09-02 17:27:09', NULL),
(10, 'Do you use a contract?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:27:31', '2024-09-02 17:27:31', NULL),
(11, 'Are there any additional fees?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:27:50', '2024-09-02 17:27:50', NULL),
(12, 'Do you carry liability insurance?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 1, '2024-09-02 17:28:09', '2024-09-02 17:28:09', NULL),
(13, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(14, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(15, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(16, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(17, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(18, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(19, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(20, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(21, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(22, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(23, 'Sed do eiusmod tempor incididunt ut labore et.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 2, '2024-09-02 17:29:55', '2024-09-02 17:29:55', NULL),
(24, '1. There’s a high probability that a cheap (or free) DJ won’t be in business by the time your wedding arrives.', 'Many low-priced DJs aren’t charging enough to support their own businesses for the long term; you’re just financing their hobby. Meanwhile, your wedding is 6-12 months away or more. We’ve received those calls from desperate couples who had a “friend of a friend” DJ cancel on them last minute. It’s not pretty. Do you want to risk the possibility that the cheapie DJ is bankrupt and out of business before your big day?', 3, '2024-09-02 17:32:34', '2024-09-02 17:32:34', NULL),
(25, '2. Amateurs are less invested in their performance than a wedding professional.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:32:55', '2024-09-02 17:32:55', NULL),
(26, '3. A wedding is a unique event that require the skills and experience of a wedding specialist for a smooth, flawless ceremony and reception.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:33:24', '2024-09-02 17:33:24', NULL),
(27, '4. Your guests won’t dance without an experienced entertainer who can read the crowd and keep the momentum going.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:34:21', '2024-09-02 17:34:21', NULL),
(28, '5. The MC (the guy or girl on the microphone) has a huge impact on the mood and outcome of your party, for better or worse.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:34:47', '2024-09-02 17:34:47', NULL),
(29, '6. Your special events may not happen if you don’t hire a specialist who’s experienced in channeling the flow of events.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:37:25', '2024-09-02 17:37:25', NULL),
(30, '7. An amateur doesn’t have the experience to include your unique  requests in a way that truly expresses your personality AND keeps people  dancing.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:38:14', '2024-09-02 17:38:14', NULL),
(31, '8. An amateur DJ has inadequate or non-existent backup equipment, which means that if something fails you have no music at your wedding.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:38:41', '2024-09-02 17:38:41', NULL),
(32, '9. DJs who charge less invest less into their equipment, which means you have inferior sound and performance at your wedding.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed dosicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudconsectetur adipisicing elit, sed do', 3, '2024-09-02 17:39:03', '2024-09-02 17:39:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freeinquiries`
--

CREATE TABLE `freeinquiries` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(55) DEFAULT NULL,
  `type` varchar(256) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `freeinquiries`
--

INSERT INTO `freeinquiries` (`id`, `first_name`, `email`, `contact`, `type`, `message`, `created_at`, `updated_at`, `deleted_at`, `address`, `last_name`) VALUES
(1, 'Kasper', 'hehanerane@mailinator.com', '342-342-3423', 'Free Etimate', 'Quam dolore qui occa', '2024-06-11 16:39:42', '2024-06-11 21:59:18', '2024-06-11 21:59:18', 'Et suscipit ipsam en', 'Blevins'),
(2, 'Tanisha', 'diju@mailinator.com', '342-342-3423', 'Free Etimate', 'Proident omnis non', '2024-06-11 16:56:00', '2024-06-11 21:59:24', '2024-06-11 21:59:24', 'Omnis aperiam non od', 'Brock'),
(3, 'Aaron', 'xytyx@mailinator.com', '342-342-3423', 'Free Etimate', 'Corporis do nulla ea', '2024-06-11 16:57:06', '2024-06-11 21:57:06', NULL, 'Aliqua Necessitatib', 'Stout'),
(4, 'Cameron', 'nuxaryb@mailinator.com', '342-342-3423', 'Free Etimate', 'Nulla adipisci error', '2024-06-11 19:46:12', '2024-06-12 00:46:12', NULL, 'Ad exercitationem la', 'Summers'),
(5, 'Brandon', 'cabixefih@mailinator.com', '342-342-3423', 'Free Etimate', 'Et enim quae est ips', '2024-06-13 14:37:12', '2024-06-13 19:37:12', NULL, 'Nisi aut est in in m', 'Long');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `primary_image` varchar(250) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `slider` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `primary_image`, `title`, `description`, `date`, `button_text`, `button_link`, `slider`, `updated_at`, `deleted_at`, `created_at`) VALUES
(64, 'storage/images/gallery_images/66d7a313d98ff1725408019.png', 'Birthday Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-03-16', 'Read More', '/upcoming-events', NULL, '2024-09-03 19:00:20', NULL, '2024-09-03 19:00:20'),
(65, 'storage/images/primary_image/66d7a39a74bca1725408154.png', 'Birthday Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-03-16', 'Read More', '/upcoming-events', NULL, '2024-09-03 19:02:36', NULL, '2024-09-03 19:00:20'),
(66, 'storage/images/primary_image/66d7a3a9a30531725408169.png', 'Birthday Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-03-16', 'Read More', '/upcoming-events', NULL, '2024-09-03 19:02:50', NULL, '2024-09-03 19:00:20'),
(67, 'storage/images/gallery_images/66d7a313d98ff1725408019.png', 'Wedding Reception', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-03-16', 'Read More', '/upcoming-events', NULL, '2024-09-04 00:16:37', NULL, '2024-09-03 19:00:20'),
(68, 'storage/images/primary_image/66d7a6ac7490d1725408940.png', 'Wedding Reception', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-03-16', 'Read More', '/upcoming-events', NULL, '2024-09-04 00:16:40', NULL, '2024-09-03 19:00:20'),
(69, 'storage/images/primary_image/66d7a712655831725409042.png', 'Wedding Reception', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-03-16', 'Read More', '/upcoming-events', NULL, '2024-09-03 19:17:25', NULL, '2024-09-03 19:00:20'),
(70, 'storage/images/primary_image/66d7a820e1f4c1725409312.png', 'Wedding Reception', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '2024-09-07', 'Read More', '/upcoming-events', NULL, '2024-09-03 19:22:08', NULL, '2024-09-03 19:00:20'),
(72, 'storage/images/gallery_images/66d7a79acbfbf1725409178.png', 'wedding reception', NULL, '2024-09-20', NULL, NULL, NULL, '2024-09-03 19:19:39', NULL, '2024-09-03 19:19:39'),
(73, 'storage/images/gallery_images/66d7a88384b531725409411.png', 'wedding reception', NULL, '2024-09-28', NULL, NULL, NULL, '2024-09-03 19:23:31', NULL, '2024-09-03 19:23:31'),
(74, 'storage/images/gallery_images/66d7a8bb133541725409467.png', 'wedding reception', NULL, '2024-10-04', NULL, NULL, NULL, '2024-09-03 19:24:27', NULL, '2024-09-03 19:24:27'),
(75, 'storage/images/gallery_images/66d7a8dc0f6281725409500.png', 'wedding reception', NULL, '2024-10-21', NULL, NULL, NULL, '2024-09-03 19:25:00', NULL, '2024-09-03 19:25:00'),
(76, 'storage/images/gallery_images/66d7a8fa7b3361725409530.png', 'wedding reception', NULL, '2024-10-05', NULL, NULL, NULL, '2024-09-03 19:25:30', NULL, '2024-09-03 19:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `service` varchar(256) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(256) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `first_name`, `last_name`, `service`, `email`, `message`, `phone`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, 'Deanna Mcgee', NULL, NULL, 'gewixycy@mailinator.com', 'Eveniet iusto et co', '74', NULL, '2024-09-02 19:05:54', '2024-09-03 00:05:54', NULL),
(25, 'Libby Diaz', NULL, NULL, 'vawicij@mailinator.com', 'Nostrud voluptatem', '21', NULL, '2024-09-02 19:09:47', '2024-09-03 00:09:47', NULL),
(26, 'Colt Juarez', NULL, NULL, 'pego@mailinator.com', 'Harum cupidatat cum', '22', NULL, '2024-09-02 19:11:19', '2024-09-03 00:11:19', NULL),
(27, 'Maxine Sanford', NULL, NULL, 'kosy@mailinator.com', 'Autem sapiente Nam e', '6845455454', NULL, '2024-09-03 19:42:02', '2024-09-04 00:42:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `integration`
--

CREATE TABLE `integration` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `integration`
--

INSERT INTO `integration` (`id`, `title`, `image`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'abc', NULL, '2024-08-07 14:22:42', NULL, '2024-08-07 14:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `newsletter_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `newsletter_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kipetu@mailinator.com', '2024-06-12 16:06:18', '2024-06-12 21:06:24', '2024-06-12 21:06:24'),
(2, 'lowatix@mailinator.com', '2024-06-13 14:38:08', '2024-06-13 19:38:08', NULL),
(3, 'kagecijy@mailinator.com', '2024-06-13 14:38:35', '2024-06-13 19:38:35', NULL),
(4, 'gfg@jhhk.com', '2024-08-09 17:33:34', '2024-08-09 22:33:34', NULL),
(5, 'xyz@gmail.com', '2024-08-09 17:34:03', '2024-08-09 22:34:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `notifiable_type` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `notifiable_id` int(11) NOT NULL,
  `data` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0aecc574-c8a7-475f-bddd-4df4b001098d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Rosalyn\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:49:46', '2024-04-09 11:33:07'),
('ea57249a-8a2f-4c2c-9701-aa0fb9d3a134', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Bert\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:56:01', '2024-04-09 11:33:07'),
('2efdbf52-bfdd-419c-a863-23ebd19842ea', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Doris\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:59:12', '2024-04-09 11:33:07'),
('2ada0627-4dde-4a95-b062-690bd9ce37fa', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"order\",\"name\":\"Doris\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:59:27', '2024-04-09 11:33:07'),
('22b1812e-6259-40ff-b04c-1bd5890f3fab', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Cade\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 20:00:38', '2024-04-09 11:33:07'),
('e74ac967-4fb7-4e24-90a9-04a106581103', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"order\",\"name\":\"Aspen\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 20:06:47', '2024-04-09 11:33:07'),
('600af46b-9320-4d7a-a277-475f00922d2f', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"order\",\"name\":\"Fritz\",\"email\":null}', '2024-04-09 13:11:01', '2024-04-09 12:14:49', '2024-04-09 13:11:01'),
('2637c096-16cc-4c96-baff-4393762e7e3b', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":\"order\",\"name\":\"Fritz\",\"email\":null}', '2024-04-09 13:11:01', '2024-04-09 12:14:59', '2024-04-09 13:11:01'),
('60b6bf66-b3d1-433b-a7c5-03bd54dcf857', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Yolanda\",\"email\":null}', '2024-04-09 13:11:01', '2024-04-09 12:19:46', '2024-04-09 13:11:01'),
('b8574b76-d03d-44fe-a05d-480f411d92ea', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"order\",\"name\":\"Donna\",\"email\":null}', '2024-05-01 19:02:41', '2024-04-09 13:13:49', '2024-05-01 19:02:41'),
('93c6d192-395b-4a46-ac23-ff8d44d6ba64', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"order\",\"name\":\"Donna\",\"email\":null}', '2024-05-01 19:02:41', '2024-04-09 13:13:54', '2024-05-01 19:02:41'),
('2c43f790-4886-4716-b00a-8e7611d36ffc', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":5,\"type\":\"Contact\",\"name\":null,\"email\":\"cuhop@mailinator.com\"}', '2024-05-01 19:08:49', '2024-05-01 19:07:46', '2024-05-01 19:08:49'),
('8f837dd0-d56f-4eb7-a254-e7b7b219da58', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":6,\"type\":\"Contact\",\"name\":\"William\",\"email\":\"kejasurova@mailinator.com\"}', '2024-05-01 19:09:14', '2024-05-01 19:09:02', '2024-05-01 19:09:14'),
('ec5d955d-7b66-40a5-9e72-2e3f1a58650e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":7,\"type\":\"Contact\",\"name\":\"Jason\",\"email\":\"jesyfy@mailinator.com\"}', '2024-05-01 19:11:25', '2024-05-01 19:11:20', '2024-05-01 19:11:25'),
('fce4f37c-6475-4636-954e-44a1de0899cb', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":8,\"type\":\"Contact\",\"name\":\"Cassady\",\"email\":\"sasuxiwub@mailinator.com\"}', '2024-05-01 19:13:14', '2024-05-01 19:13:10', '2024-05-01 19:13:14'),
('0aecc574-c8a7-475f-bddd-4df4b001098d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Rosalyn\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:49:46', '2024-04-09 11:33:07'),
('ea57249a-8a2f-4c2c-9701-aa0fb9d3a134', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Bert\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:56:01', '2024-04-09 11:33:07'),
('2efdbf52-bfdd-419c-a863-23ebd19842ea', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Doris\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:59:12', '2024-04-09 11:33:07'),
('2ada0627-4dde-4a95-b062-690bd9ce37fa', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"order\",\"name\":\"Doris\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 19:59:27', '2024-04-09 11:33:07'),
('22b1812e-6259-40ff-b04c-1bd5890f3fab', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Cade\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 20:00:38', '2024-04-09 11:33:07'),
('e74ac967-4fb7-4e24-90a9-04a106581103', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"order\",\"name\":\"Aspen\",\"email\":null}', '2024-04-09 11:33:07', '2024-04-08 20:06:47', '2024-04-09 11:33:07'),
('600af46b-9320-4d7a-a277-475f00922d2f', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"order\",\"name\":\"Fritz\",\"email\":null}', '2024-04-09 13:11:01', '2024-04-09 12:14:49', '2024-04-09 13:11:01'),
('2637c096-16cc-4c96-baff-4393762e7e3b', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":\"order\",\"name\":\"Fritz\",\"email\":null}', '2024-04-09 13:11:01', '2024-04-09 12:14:59', '2024-04-09 13:11:01'),
('60b6bf66-b3d1-433b-a7c5-03bd54dcf857', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"order\",\"name\":\"Yolanda\",\"email\":null}', '2024-04-09 13:11:01', '2024-04-09 12:19:46', '2024-04-09 13:11:01'),
('b8574b76-d03d-44fe-a05d-480f411d92ea', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"order\",\"name\":\"Donna\",\"email\":null}', '2024-05-01 19:02:41', '2024-04-09 13:13:49', '2024-05-01 19:02:41'),
('93c6d192-395b-4a46-ac23-ff8d44d6ba64', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"order\",\"name\":\"Donna\",\"email\":null}', '2024-05-01 19:02:41', '2024-04-09 13:13:54', '2024-05-01 19:02:41'),
('2c43f790-4886-4716-b00a-8e7611d36ffc', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":5,\"type\":\"Contact\",\"name\":null,\"email\":\"cuhop@mailinator.com\"}', '2024-05-01 19:08:49', '2024-05-01 19:07:46', '2024-05-01 19:08:49'),
('8f837dd0-d56f-4eb7-a254-e7b7b219da58', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":6,\"type\":\"Contact\",\"name\":\"William\",\"email\":\"kejasurova@mailinator.com\"}', '2024-05-01 19:09:14', '2024-05-01 19:09:02', '2024-05-01 19:09:14'),
('ec5d955d-7b66-40a5-9e72-2e3f1a58650e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":7,\"type\":\"Contact\",\"name\":\"Jason\",\"email\":\"jesyfy@mailinator.com\"}', '2024-05-01 19:11:25', '2024-05-01 19:11:20', '2024-05-01 19:11:25'),
('fce4f37c-6475-4636-954e-44a1de0899cb', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":8,\"type\":\"Contact\",\"name\":\"Cassady\",\"email\":\"sasuxiwub@mailinator.com\"}', '2024-05-01 19:13:14', '2024-05-01 19:13:10', '2024-05-01 19:13:14'),
('0b8f715c-c13b-4847-b32d-c8878d697593', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"Contact\",\"name\":\"Jane\",\"email\":\"rixalaxoqo@mailinator.com\"}', '2024-05-08 11:28:54', '2024-05-08 11:28:44', '2024-05-08 11:28:54'),
('67567dcd-819e-40e9-abad-460bdadc2777', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"Contact\",\"name\":\"Jermaine\",\"email\":\"pizul@mailinator.com\"}', '2024-05-08 11:29:12', '2024-05-08 11:29:07', '2024-05-08 11:29:12'),
('9344597e-2210-46c4-ad17-157165cb67ae', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"Contact\",\"name\":\"Aurelia\",\"email\":\"jizidur@mailinator.com\"}', '2024-05-13 17:08:57', '2024-05-13 17:08:53', '2024-05-13 17:08:57'),
('f49838b9-8a0f-4c51-ac75-f88ddc58006b', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":\"Contact\",\"name\":\"Beau\",\"email\":\"gelysu@mailinator.com\"}', '2024-05-14 11:41:09', '2024-05-14 11:40:16', '2024-05-14 11:41:09'),
('4009019c-fa41-4632-a5bb-2408c070fa77', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":\"ProductInquiry\",\"name\":\"Clare\",\"email\":\"kureni@mailinator.com\"}', '2024-06-11 16:37:51', '2024-05-28 20:05:41', '2024-06-11 16:37:51'),
('a9986af9-0282-48c4-9ca2-af2696940fee', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"ProductInquiry\",\"name\":\"Uriel\",\"email\":\"boqab@mailinator.com\"}', '2024-06-11 16:37:51', '2024-05-28 20:06:07', '2024-06-11 16:37:51'),
('5d33bc4d-f502-4272-9c60-be3e6a9cb372', 'App\\Notifications\\UserNotification', 'App\\User', 4, '{\"id\":2,\"type\":\"ProductInquiry\",\"name\":\"Megan\",\"email\":\"cadeki@mailinator.com\"}', NULL, '2024-05-28 20:08:36', '2024-05-28 20:08:36'),
('02bcb1f4-b53f-47bc-846b-0fa61e7e1d57', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"ProductInquiry\",\"name\":\"Kasper\",\"email\":\"jexofucovu@mailinator.com\"}', '2024-06-11 16:37:51', '2024-05-28 20:09:59', '2024-06-11 16:37:51'),
('d7dc1c0f-4ba8-4a08-b6c6-30ead6c80872', 'App\\Notifications\\UserNotification', 'App\\User', 4, '{\"id\":4,\"type\":\"ProductInquiry\",\"name\":\"Martena\",\"email\":\"byqizyri@mailinator.com\"}', NULL, '2024-05-28 20:10:18', '2024-05-28 20:10:18'),
('e59d1dc6-bd61-4138-b71b-3fb5e49bceec', 'App\\Notifications\\UserNotification', 'App\\User', 4, '{\"id\":5,\"type\":\"ProductInquiry\",\"name\":\"Clementine\",\"email\":\"kazobe@mailinator.com\"}', NULL, '2024-05-28 20:12:16', '2024-05-28 20:12:16'),
('c8b32277-05aa-460d-9eb9-913fa41d3cb4', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":6,\"type\":\"ProductInquiry\",\"name\":\"Cally\",\"email\":\"midadi@mailinator.com\"}', NULL, '2024-05-28 20:12:51', '2024-05-28 20:12:51'),
('bef47161-41db-4081-9e4e-cd701693a988', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":7,\"type\":\"ProductInquiry\",\"name\":\"Joan\",\"email\":\"momiqyru@mailinator.com\"}', NULL, '2024-05-29 11:45:52', '2024-05-29 11:45:52'),
('7de65161-76cb-4285-a4db-38fddacddd47', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":8,\"type\":\"ProductInquiry\",\"name\":\"Celeste\",\"email\":\"cyqoxo@mailinator.com\"}', NULL, '2024-05-29 12:09:01', '2024-05-29 12:09:01'),
('a7664d32-1d06-4dc8-aed6-fc211b746e0f', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":9,\"type\":\"ProductInquiry\",\"name\":\"Ariel\",\"email\":\"ryviduhih@mailinator.com\"}', NULL, '2024-05-29 12:09:32', '2024-05-29 12:09:32'),
('4cc6d116-50d2-4e45-8da7-a78a1a92ab9b', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":10,\"type\":\"ProductInquiry\",\"name\":\"Ginger\",\"email\":\"noba@mailinator.com\"}', NULL, '2024-05-29 12:10:28', '2024-05-29 12:10:28'),
('3ac42fb8-35b6-4c44-847a-ffe8f8145c8f', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":11,\"type\":\"ProductInquiry\",\"name\":\"Nerea\",\"email\":\"lyziqik@mailinator.com\"}', NULL, '2024-05-29 12:10:35', '2024-05-29 12:10:35'),
('132a0442-53de-42bb-a58c-0bcae24e77d9', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":12,\"type\":\"ProductInquiry\",\"name\":\"Jerome\",\"email\":\"fiwe@mailinator.com\"}', NULL, '2024-05-29 12:13:52', '2024-05-29 12:13:52'),
('6eb0104a-36c1-4e93-8ebe-72e284816e1e', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":13,\"type\":\"ProductInquiry\",\"name\":\"Michael\",\"email\":\"joguk@mailinator.com\"}', NULL, '2024-05-29 12:14:06', '2024-05-29 12:14:06'),
('5a39637e-0870-4b1c-aeaa-f7972051008e', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":14,\"type\":\"ProductInquiry\",\"name\":\"Quincy\",\"email\":\"menadajiva@mailinator.com\"}', NULL, '2024-06-10 17:28:14', '2024-06-10 17:28:14'),
('ae0ae6d0-4294-4cc1-ab93-c6265725c7d2', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":15,\"type\":\"ProductInquiry\",\"name\":\"Eden\",\"email\":\"kudubyla@mailinator.com\"}', NULL, '2024-06-10 17:30:05', '2024-06-10 17:30:05'),
('2bcd3425-daff-4b54-b7e4-ad7b7d65e27f', 'App\\Notifications\\UserNotification', 'App\\User', 3, '{\"id\":16,\"type\":\"ProductInquiry\",\"name\":\"Frances\",\"email\":\"mofaq@mailinator.com\"}', NULL, '2024-06-10 17:32:18', '2024-06-10 17:32:18'),
('567d6606-934e-4208-918c-3927a3879a63', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":\"Free Etimate\",\"name\":\"Kasper\",\"email\":\"hehanerane@mailinator.com\"}', '2024-06-11 16:39:57', '2024-06-11 16:39:42', '2024-06-11 16:39:57'),
('f2f1451c-731f-4afa-a104-41da58129b38', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"Free Etimate\",\"name\":\"Tanisha\",\"email\":\"diju@mailinator.com\"}', '2024-06-11 16:56:07', '2024-06-11 16:56:00', '2024-06-11 16:56:07'),
('16d196e5-d1ea-4d14-aa12-b47f6d391dd6', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"Free Etimate\",\"name\":\"Aaron\",\"email\":\"xytyx@mailinator.com\"}', '2024-06-11 16:57:10', '2024-06-11 16:57:06', '2024-06-11 16:57:10'),
('5d7088e3-0eec-4dee-b935-e5e4af1fb973', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":\"Free Etimate\",\"name\":\"Cameron\",\"email\":\"nuxaryb@mailinator.com\"}', '2024-06-13 14:36:52', '2024-06-11 19:46:12', '2024-06-13 14:36:52'),
('4ad7e63f-4f39-4fba-a63f-cb78fb423d90', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":null,\"name\":\"Whoopi\",\"email\":\"gazawaqys@mailinator.com\"}', '2024-06-13 14:36:52', '2024-06-12 14:09:53', '2024-06-13 14:36:52'),
('31398b9a-6bc5-45da-9cf2-79a993a59c16', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":\"Contact\",\"name\":\"Mallory\",\"email\":\"xihosum@mailinator.com\"}', '2024-06-12 14:11:25', '2024-06-12 14:10:54', '2024-06-12 14:11:25'),
('13a75a61-b3b0-4571-82af-58f539bc5eba', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":\"Contact\",\"name\":\"Teagan\",\"email\":\"vywef@mailinator.com\"}', '2024-06-13 14:36:52', '2024-06-13 14:36:41', '2024-06-13 14:36:52'),
('34633e78-a7b5-4301-97da-b20b3d9cd1ee', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":5,\"type\":\"Free Etimate\",\"name\":\"Brandon\",\"email\":\"cabixefih@mailinator.com\"}', '2024-06-13 14:37:23', '2024-06-13 14:37:12', '2024-06-13 14:37:23'),
('ed6a68df-6d34-4091-a905-aaaf88418879', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":null,\"name\":\"Bilal Ahmad\",\"email\":\"b@gmail.com\"}', '2024-07-22 11:13:21', '2024-07-22 11:12:36', '2024-07-22 11:13:21'),
('8acba35e-e99b-47ef-aeea-5265cfd4f259', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":5,\"type\":null,\"name\":\"Hi This is query\",\"email\":\"query@gmail.com\"}', '2024-08-02 13:10:20', '2024-08-02 13:09:51', '2024-08-02 13:10:20'),
('351fc7e6-6121-4167-9a77-835d3b5b13d2', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":6,\"type\":null,\"name\":\"new name\",\"email\":\"enami@gmai.com\"}', '2024-08-12 16:51:19', '2024-08-12 15:29:42', '2024-08-12 16:51:19'),
('7ca5f585-872d-41b4-860b-636b0d2a1b90', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":7,\"type\":null,\"name\":\"new name\",\"email\":\"wd@gmail.com\"}', '2024-08-12 16:51:19', '2024-08-12 15:35:48', '2024-08-12 16:51:19'),
('5dfac2cc-a3a6-442c-b767-ff6717bdf540', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":8,\"type\":null,\"name\":\"new name\",\"email\":\"wd@gmail.com\"}', '2024-08-12 16:51:19', '2024-08-12 15:36:15', '2024-08-12 16:51:19'),
('56b85bc9-884c-4d40-82df-230e610514e8', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":9,\"type\":null,\"name\":\"new name\",\"email\":\"wd@gmail.com\"}', '2024-08-12 16:51:18', '2024-08-12 15:39:25', '2024-08-12 16:51:18'),
('bbd3c912-a2b1-4fd9-8123-9a5bf593a286', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":10,\"type\":null,\"name\":\"new name\",\"email\":\"wd@gmail.com\"}', '2024-08-19 12:40:39', '2024-08-19 12:40:08', '2024-08-19 12:40:39'),
('f32c0a38-7790-4f15-a86d-7db29040250d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":11,\"type\":null,\"name\":\"new name\",\"email\":\"enami@gmai.com\"}', '2024-08-19 13:15:16', '2024-08-19 13:14:57', '2024-08-19 13:15:16'),
('8698e63d-313f-41a0-8cf0-1ab7cd61971e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":12,\"type\":null,\"name\":\"new name\",\"email\":\"testtt@gmail.com\"}', '2024-08-19 18:58:23', '2024-08-19 18:15:24', '2024-08-19 18:58:23'),
('be07679e-8e78-46ec-acaf-b3cad6838936', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":null,\"name\":null,\"email\":\"admin@voip.com\"}', '2024-08-19 18:58:25', '2024-08-19 18:57:57', '2024-08-19 18:58:25'),
('71946be5-4c89-4031-9846-b22974b85d55', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":null,\"name\":null,\"email\":\"admin@voip.com\"}', '2024-08-19 19:25:33', '2024-08-19 19:11:11', '2024-08-19 19:25:33'),
('1cdc3e86-b0bc-4af7-9a15-5187fa60df6e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":1,\"type\":null,\"name\":\"dwd\",\"email\":\"admin@southgate-fence-inc.com\"}', '2024-08-20 17:24:17', '2024-08-20 15:29:23', '2024-08-20 17:24:17'),
('79fb7a3f-504e-442b-8c4a-a142f40d6dc1', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":null,\"name\":\"Dean\",\"email\":\"admin@voip.com\"}', '2024-08-20 17:24:17', '2024-08-20 16:42:48', '2024-08-20 17:24:17'),
('c04d4998-c20f-49c7-9343-e725a41d21d0', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":null,\"name\":\"Wynne\",\"email\":null}', '2024-08-20 17:24:17', '2024-08-20 16:47:34', '2024-08-20 17:24:17'),
('869485da-314b-4b4b-a99c-f593fca97675', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":null,\"name\":\"Driscoll\",\"email\":null}', '2024-08-20 17:24:17', '2024-08-20 16:56:10', '2024-08-20 17:24:17'),
('3db261f8-ecc5-4b4e-b868-30c21bab598d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":5,\"type\":null,\"name\":\"Patrick\",\"email\":null}', '2024-08-20 17:24:17', '2024-08-20 16:59:46', '2024-08-20 17:24:17'),
('820de389-3eaf-422a-b9ad-6987ba338123', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":6,\"type\":null,\"name\":\"Jana\",\"email\":\"admin@southgate-fence-inc.com\"}', '2024-08-20 17:56:34', '2024-08-20 17:56:27', '2024-08-20 17:56:34'),
('dbe6a65a-95fe-4610-9e53-3dbdd5bb0ac1', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":13,\"type\":null,\"name\":\"Tamara\",\"email\":\"sexim@mailinator.com\"}', '2024-08-20 20:02:08', '2024-08-20 20:01:17', '2024-08-20 20:02:08'),
('3db20a81-a2ae-42f5-b7b8-c065155a7a3a', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":14,\"type\":null,\"name\":\"Coby\",\"email\":\"nugysy@mailinator.com\"}', '2024-08-20 20:02:19', '2024-08-20 20:02:13', '2024-08-20 20:02:19'),
('335d2c0c-2ab1-4cec-98ff-ca92e853da14', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":2,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:18:45', '2024-08-21 14:41:40'),
('682edf6f-0b1c-41a8-b0d0-199df8e909c4', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:19:39', '2024-08-21 14:41:40'),
('b4aea534-0c5e-4104-8769-30990210cb3b', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":4,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:24:57', '2024-08-21 14:41:40'),
('eb717d1e-b386-4feb-bf23-b1df2c3ac3c2', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":5,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:27:39', '2024-08-21 14:41:40'),
('439ceef1-c9f3-428e-b637-6879569d5d91', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":6,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:44:28', '2024-08-21 14:41:40'),
('9385f349-3044-45b4-bf8a-15a06509e2d0', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":7,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:48:47', '2024-08-21 14:41:40'),
('68fc4dd8-d726-4082-b764-9dfbedf67cea', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":8,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:50:06', '2024-08-21 14:41:40'),
('cdf04d56-db45-4280-b326-8d2ace335be3', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":9,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:58:49', '2024-08-21 14:41:40'),
('6761c9c9-c0ab-4767-80cd-62e3f4e3564d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":10,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 13:59:30', '2024-08-21 14:41:40'),
('dcf9d0ce-dc7c-4695-a039-f57725f7351c', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":11,\"type\":null,\"name\":null,\"email\":null}', '2024-08-21 14:41:40', '2024-08-21 14:01:59', '2024-08-21 14:41:40'),
('cc5abde1-9c4c-41b7-a488-b4248a6f8c0a', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":12,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-21 14:57:24', '2024-08-23 13:55:40'),
('79c63733-4fd6-46bf-8834-902702838cb7', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":13,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-21 14:58:39', '2024-08-23 13:55:40'),
('f5b315c9-124c-4056-a447-445c7bb1073f', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":14,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-21 15:04:11', '2024-08-23 13:55:40'),
('7b173607-d0b0-4e2a-81b1-da02efbaaffa', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":15,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-21 15:04:53', '2024-08-23 13:55:40'),
('60dc4bdc-e893-45af-8855-7383a931fab6', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":16,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-21 15:07:54', '2024-08-23 13:55:40'),
('ee91b557-06fa-4cd6-baac-58918f3118f9', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":17,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-21 15:10:02', '2024-08-23 13:55:40'),
('2fb7b4d3-196f-4d58-bf94-556b22837cb1', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":15,\"type\":null,\"name\":\"new name\",\"email\":\"enami@gmai.com\"}', '2024-08-23 13:55:40', '2024-08-23 12:32:35', '2024-08-23 13:55:40'),
('edba963d-7242-4343-ba3c-bbe55e1bd89e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":18,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-23 13:27:44', '2024-08-23 13:55:40'),
('d57dcb9c-7376-4875-993d-dc5d3bddcb7e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":19,\"type\":null,\"name\":null,\"email\":null}', '2024-08-23 13:55:40', '2024-08-23 13:29:25', '2024-08-23 13:55:40'),
('8e932fd6-f162-49db-b869-dc96ccac1b33', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":16,\"type\":null,\"name\":\"Joan\",\"email\":\"niqatozyco@mailinator.com\"}', '2024-08-23 13:55:40', '2024-08-23 13:37:23', '2024-08-23 13:55:40'),
('870f8052-93ba-4fb5-bec3-8150bc26c163', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":17,\"type\":null,\"name\":\"Paul\",\"email\":\"masi@mailinator.com\"}', '2024-08-23 13:55:39', '2024-08-23 13:38:19', '2024-08-23 13:55:39'),
('dc2406d5-b2b8-4c89-9e15-7fc98c6a1ee1', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":18,\"type\":null,\"name\":\"Paul\",\"email\":\"masi@mailinator.com\"}', '2024-08-23 13:55:39', '2024-08-23 13:39:10', '2024-08-23 13:55:39'),
('9c40155d-beab-4497-b2dd-a78ddb3995ff', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":19,\"type\":null,\"name\":\"Brennan\",\"email\":\"kutyvozu@mailinator.com\"}', '2024-08-23 13:55:39', '2024-08-23 13:39:39', '2024-08-23 13:55:39'),
('82b3c2b1-ba0c-42d9-a9ac-81152f2b0f30', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":20,\"type\":null,\"name\":\"Katelyn\",\"email\":\"qununely@mailinator.com\"}', '2024-08-23 13:55:39', '2024-08-23 13:39:48', '2024-08-23 13:55:39'),
('a89498e3-99ca-48b8-9750-6bc82f42ac5e', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":21,\"type\":null,\"name\":\"Michael\",\"email\":\"zucavimy@mailinator.com\"}', '2024-08-23 15:13:00', '2024-08-23 15:11:40', '2024-08-23 15:13:00'),
('aabb035c-eb42-4561-a0b3-94c79d363276', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":22,\"type\":null,\"name\":\"wdwd\",\"email\":\"wdwd@hhh.com\"}', '2024-08-24 02:02:16', '2024-08-24 01:54:49', '2024-08-24 02:02:16'),
('c5b6acd5-d5e4-4ccf-9c9d-1169743b0eda', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":3,\"type\":null,\"name\":null,\"email\":\"nyzynojyma@mailinator.com\"}', '2024-08-24 02:26:58', '2024-08-24 02:11:23', '2024-08-24 02:26:58'),
('c7d1a92c-2195-47ce-8900-ba809be00175', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":23,\"type\":null,\"name\":\"Hilda\",\"email\":\"cavyles@mailinator.com\"}', '2024-08-24 02:45:25', '2024-08-24 02:32:00', '2024-08-24 02:45:25'),
('1c7653a8-9e56-427f-a727-ff0b017387f9', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":20,\"type\":null,\"name\":null,\"email\":null}', '2024-08-27 04:02:05', '2024-08-27 04:01:51', '2024-08-27 04:02:05'),
('6e230414-d2f4-4580-beef-9b790dab1857', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":21,\"type\":null,\"name\":null,\"email\":null}', '2024-08-29 16:25:49', '2024-08-28 00:46:32', '2024-08-29 16:25:49'),
('7bf2a6bd-6a50-4b0e-a647-0aeb9ad8f91c', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":22,\"type\":null,\"name\":null,\"email\":null}', '2024-08-29 16:25:49', '2024-08-28 00:48:45', '2024-08-29 16:25:49'),
('c3f319ff-194f-4689-82c4-5ea4a985aa33', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":23,\"type\":null,\"name\":null,\"email\":null}', '2024-08-29 16:25:49', '2024-08-28 01:03:53', '2024-08-29 16:25:49'),
('b65bdc4b-12b0-4379-a230-fb4a2286ca0d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":24,\"type\":null,\"name\":null,\"email\":null}', '2024-08-29 16:25:49', '2024-08-28 01:25:43', '2024-08-29 16:25:49'),
('4a5cffd3-e930-4b1c-b66d-10621d07db7d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":25,\"type\":null,\"name\":null,\"email\":null}', '2024-08-29 16:25:49', '2024-08-28 01:26:27', '2024-08-29 16:25:49'),
('d9927bb3-4ec2-4524-baac-2ee9f17af7a2', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":26,\"type\":null,\"name\":null,\"email\":null}', '2024-08-29 16:25:49', '2024-08-28 01:40:16', '2024-08-29 16:25:49'),
('f70f37f6-3bd9-433e-98e9-781391956e38', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":24,\"type\":null,\"name\":\"Deanna Mcgee\",\"email\":\"gewixycy@mailinator.com\"}', '2024-09-03 12:55:01', '2024-09-02 19:05:56', '2024-09-03 12:55:01'),
('8959e7ec-9e51-471c-938f-5788057b5913', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":25,\"type\":null,\"name\":\"Libby Diaz\",\"email\":\"vawicij@mailinator.com\"}', '2024-09-03 12:55:01', '2024-09-02 19:09:47', '2024-09-03 12:55:01'),
('5383c37f-d628-458d-9399-abda566cce8d', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":26,\"type\":null,\"name\":\"Colt Juarez\",\"email\":\"pego@mailinator.com\"}', '2024-09-03 12:55:01', '2024-09-02 19:11:19', '2024-09-03 12:55:01'),
('bde84f4a-c773-4852-b664-0e0b6b16400f', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":15,\"type\":null,\"name\":null,\"email\":null}', '2024-09-03 15:55:08', '2024-09-03 15:54:52', '2024-09-03 15:55:08'),
('786291de-ae0f-4181-ac53-0b3f48e9f5b4', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":16,\"type\":null,\"name\":null,\"email\":null}', '2024-09-04 11:07:09', '2024-09-03 16:59:40', '2024-09-04 11:07:09'),
('13d2e946-8079-4541-a934-e439c23a1219', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":17,\"type\":null,\"name\":null,\"email\":null}', '2024-09-04 11:07:08', '2024-09-03 18:04:36', '2024-09-04 11:07:08'),
('07dfc5b1-6425-4c59-9dc1-1c7151bd8eb8', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":18,\"type\":null,\"name\":null,\"email\":null}', '2024-09-04 11:07:08', '2024-09-03 19:41:08', '2024-09-04 11:07:08'),
('e097f4b0-6604-46bb-9be0-7a9d7c9193a7', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":27,\"type\":null,\"name\":\"Maxine Sanford\",\"email\":\"kosy@mailinator.com\"}', '2024-09-04 11:07:08', '2024-09-03 19:42:03', '2024-09-04 11:07:08'),
('760488a0-d67f-4a1d-9637-4e693b02a102', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":19,\"type\":null,\"name\":null,\"email\":null}', '2024-09-04 11:07:08', '2024-09-03 19:42:50', '2024-09-04 11:07:08'),
('3707e52a-7dee-4c41-8cc2-b70a1a63ba19', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":20,\"type\":null,\"name\":null,\"email\":null}', '2024-09-04 11:25:30', '2024-09-04 11:22:06', '2024-09-04 11:25:30'),
('c41b27d7-d127-41a8-87a2-39c6db54ec41', 'App\\Notifications\\UserNotification', 'App\\User', 1, '{\"id\":21,\"type\":null,\"name\":null,\"email\":null}', '2024-09-04 11:26:02', '2024-09-04 11:25:57', '2024-09-04 11:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `token` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `password`, `token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rafay@yahoo.com', NULL, '$2y$10$Qc833BAWaRewSfZW8DAJ7OMg0nF.3udTq.nttv1/.U88BdjhCKz1e', '2023-08-07 14:47:57', '2023-08-07 19:47:57', NULL),
(2, 'subanax@mailinator.com', NULL, '$2y$10$sIG0IiTFq/yY6W8Ise150.eoLC3ZKhZJCB6tMNzbGfuLsDvGCiSGa', '2023-10-27 12:37:06', '2023-10-27 17:37:06', NULL),
(3, 'pauljenson@yopmail.com', NULL, '$2y$10$JA4sw1e1QOS3.mPyWQOuQ.JLCYf.L3HRymRkd5msCxLSu7OEyvHgS', '2024-04-09 13:24:25', '2024-04-09 18:24:25', NULL),
(4, 'rafay@yahoo.com', NULL, '$2y$10$Qc833BAWaRewSfZW8DAJ7OMg0nF.3udTq.nttv1/.U88BdjhCKz1e', '2023-08-07 14:47:57', '2023-08-07 19:47:57', NULL),
(5, 'subanax@mailinator.com', NULL, '$2y$10$sIG0IiTFq/yY6W8Ise150.eoLC3ZKhZJCB6tMNzbGfuLsDvGCiSGa', '2023-10-27 12:37:06', '2023-10-27 17:37:06', NULL),
(6, 'pauljenson@yopmail.com', NULL, '$2y$10$JA4sw1e1QOS3.mPyWQOuQ.JLCYf.L3HRymRkd5msCxLSu7OEyvHgS', '2024-04-09 13:24:25', '2024-04-09 18:24:25', NULL),
(7, 'qajuvapo@mailinator.com', NULL, '$2y$10$QiVdxZdQYBBNzhsh9hFug.zsTamYji5Jr0WxukZY76GO7S8MGTCoa', '2024-05-10 17:31:37', '2024-05-10 22:31:37', NULL),
(8, 'huby@mailinator.com', NULL, '$2y$10$ZPy79f.MUpTDeSHAPEj87e1g97Ip159cELzore6F4uMRMa/Yn5FQy', '2024-05-13 16:30:29', '2024-05-13 21:30:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review_slider`
--

CREATE TABLE `review_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `designation` varchar(55) DEFAULT NULL,
  `display` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_slider`
--

INSERT INTO `review_slider` (`id`, `image`, `review`, `name`, `designation`, `display`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, NULL, 'Scott was a fabulous dj to use for our wedding. He was super friendly and very easy to work with, as well as being reasonably priced! I gave him a list of songs to play and a few not to play, and he took it from there. All of our correspondences were friendly and cheerful. Scott definitely made the planning process a lot easier and when the wedding finally came, he did an awesome job “dj-ing.” He was a great announcer and was the perfect glue to keep the reception moving smoothly. We had so much fun dancing! Thank you Scott, we will definitely recommend you to friends that are getting married in the future!', 'Erin and Tommy', NULL, 0, '2024-09-03 19:11:27', '2024-09-03 19:32:01', NULL),
(12, NULL, '“When looking for a DJ I had two concerns; first was to find the right person to be flexible with our wedding music selection, and second was the total cost. I interviewed several DJ’s and reviewed all of their packages, but none of them offered the personal communication that I had with Scott. Within the first day of sending him an email, he responded within hours, and also offered a list of references I could contact. This initial up front communication with Scott was the beginning of a great client relationship! A month before the wedding, Scott prepared an email including all questions and information he would need. This was a great tool for us when planning our music, and it covered everything without having to have additional meetings. He did a great job setting up his equipment, and perfecting the sound of the music for our outdoor wedding. He organized all of the music nicely, and we heard all the songs that we personally requested he play. Scott was a joy to work with, he was very affordable and he will be our first choice for future events.”', 'Crystal and Tom', NULL, 0, '2024-09-03 19:29:28', '2024-09-03 19:32:14', NULL),
(13, NULL, '“Scott was a breath of fresh air, very laid back and easy to work with, and we are very happy we discovered him. From the beginning, he was professional and had a real desire to work with us, to make this the dream wedding Sarah and Chris both wanted. He negotiated a price and contract terms that met our needs, and was very fair based on others we had interviewed. Scott came to the reception in plenty of time to set up and be ready to play. His overall performance was great, and he chose music that was exactly what Sarah and Chris had requested. When acting as emcee, he was very interactive, easy to hear and understand, and well liked by our guests. As you can see, we were very pleased with Scott from the very first meeting we had with him. He was well worth what he charges, and I truly feel you would be pleased with his services!”', 'Vicki and Pete', NULL, 0, '2024-09-03 19:31:35', '2024-09-03 19:32:26', NULL),
(14, NULL, '“Scott did a wonderful job at our wedding at the Jefferson Hotel. He was gracious and flexible, and all of our friends and family had a great time! He played every song we requested, and certainly meet the needs and expectations of the guests! His price was incomparable for the service he provided. I would not hesitate to book Scott again!”', 'Garrett Slaughter', NULL, 1, '2024-09-03 19:31:49', '2024-09-03 19:31:49', NULL),
(15, NULL, '“Scott did an incredible job at our wedding reception, and he performed like clockwork the entire evening. He not only provided great music, but did an outstanding job with all of the announcements and introductions, without missing a beat! We feel very fortunate to have found Scott to handle the music on our special day. Everyone is still talking about what a great time they had, and we certainly acknowledge the role that the music and his announcing skills played. We intend to recommend him to our family and friends, and look forward to personally using his services again in the future. Thanks Scott for an outstanding job!', 'Ken and Tammy', NULL, 1, '2024-09-03 19:32:01', '2024-09-03 19:32:01', NULL),
(16, NULL, '“Without hesitation I would recommend Scott Titmus for all of your music needs! In fact, I already have! He was very professional, and most importantly, was accommodating to our wants and needs as a couple. He played the music we wanted, and didn’t play the music we didn’t want. He was in constant contact with us before the event, and we could tell that it was important to him that he give us exactly what we wanted. We could tell Scott really enjoys what he does! I even caught him dancing! I told Scott that he could leave early, but he didn’t want to! And he was right, he kept playing music and the dance floor stayed full! Our guests keep telling us what a great time they had! Thanks Scott!', 'Jessi and Charles', NULL, 1, '2024-09-03 19:32:14', '2024-09-03 19:32:14', NULL),
(17, NULL, 'Scott did an amazing job at our Wedding Reception! He was professional and very customer service oriented. He asked what kind of music we liked, and developed a mix that included popular songs from multiple eras. I recognized all of the songs he played, and my friends and family spent a lot of time on the dance floor! His music choices fit our reception perfectly! In addition, he kept us on track for all of the special dances, and the garder and bouquet toss. He even went above and beyond and provided the microphone and speakers for the rehearsal dinner. I feel great that we chose Scott and All About The Music as the DJ for our Wedding Reception. I will definitely recommend him to anyone who is having a significant event!', 'Kelly and John', NULL, 1, '2024-09-03 19:32:26', '2024-09-03 19:32:26', NULL),
(18, NULL, '“We wanted to take this opportunity to extend our gratitude and thanks for your dj services for our wedding. Your efforts made our day a “cherished memory” for years to come! Again, thanks for your superb work in making our wedding day so special.”', 'Heather and Ryan', NULL, 0, '2024-09-03 19:32:41', '2024-09-03 19:32:41', NULL),
(19, NULL, 'Scott did an amazing job at my wedding. He had a great selection of music, and kept everyone dancing the whole night! I would highly recommend him for any event. Thanks again for all of your hard work, and for making sure all of my favorite songs got played, you’re the best!', 'Anne Wright', NULL, 0, '2024-09-03 19:32:52', '2024-09-03 19:32:52', NULL),
(20, NULL, '“We thoroughly enjoyed our Wedding Reception because of Scott. From the first meeting he made planning so easy! He kept the guests dancing the whole time, and we truly didn’t want the night to end!”', 'Tony and Stacy', NULL, 0, '2024-09-03 19:33:09', '2024-09-03 19:33:09', NULL),
(21, NULL, '“Scott always returned my phone calls and emails in a timely manner as we were planning the wedding. He asked questions to get the feel for what I was looking for, and helped me plan a great reception! The music was better than what I could have expected, and kept everyone entertained and dancing the whole time! I would hire him again and recommend him to family and friends.”', 'Jessica DeWalt', NULL, 0, '2024-09-03 19:33:18', '2024-09-03 19:33:18', NULL),
(22, NULL, '“Scott was great for my wedding. On a day that I was very busy and had a lot to worry about, Scott was perfect! From our first correspondence, he knew exactly what to do, and when to do it! The music he chose was great, and he was very professional. I would definitely hire him again.”', 'Elizabeth Spencer', NULL, 0, '2024-09-03 19:33:29', '2024-09-03 19:33:29', NULL),
(23, NULL, '“Thanks for being my Wedding DJ, you really did an Awesome Job! The music selection was great! I loved all of it, and would recommend you to anybody.”', 'Kelly Cameron', NULL, 0, '2024-09-03 19:33:41', '2024-09-03 19:33:41', NULL),
(24, NULL, '“Scott was very easy to work with. We had some changes at the last minute for song selection, for entrance music and the first dance, and Scott had no problem with it. He was very professional in all aspects of our working relationship. The music he played was perfect for the day and he had the wedding party and guests all dancing. We had over 150 people at the wedding and everyone had a great time, thanks in part to Scott’s ability behind the DJ table.”', 'Joe and Morgan Wharff', NULL, 0, '2024-09-03 19:33:51', '2024-09-03 19:33:51', NULL),
(25, NULL, '“We couldn’t have been happier with the music you played for our Wedding Reception. We appreciated you taking the time to discuss how we wanted the evening to go, which songs should be played and when the dedications should occur. It was truly the “reception of our dreams” and has provided many happy memories for us.”', 'David and Kristen Stahr', NULL, 0, '2024-09-03 19:34:00', '2024-09-03 19:34:00', NULL),
(26, NULL, '“Scott was very easy to work with, and made every effort to accomodate my wishes. I left a lot of the music selection for my son’s Wedding Reception up to Scott, and my son and I were very pleased with the variety and volume of the music. When I need a DJ in the future, I will call him first.”', 'Joy Starkey', NULL, 0, '2024-09-03 19:34:11', '2024-09-03 19:34:11', NULL),
(27, NULL, 'Scott was very professional and easy to work with. He was very diligent in helping us put together our play list before the wedding, and during the reception. He successfully kept the guests dancing throughout the evening.”', 'Russ and Jennifer Edwards', NULL, 0, '2024-09-03 19:34:21', '2024-09-03 19:34:21', NULL),
(28, NULL, '“Thank you for providing the entertainment at our recent conference event in Richmond. The music you selected for our group was excellent, and kept everyone on their feet the whole time!”', 'Marcia Barber', NULL, 0, '2024-09-03 19:34:32', '2024-09-03 19:34:32', NULL),
(29, NULL, '“Scott was perfect for our 2008 New Year’s Eve Party! He was extremely professional and catered to our establishment’s specific needs. We will definitely be hiring him again for future events.”', 'Mandie Sweetnam', NULL, 0, '2024-09-03 19:34:54', '2024-09-03 19:34:54', NULL),
(30, NULL, '“On behalf of KidMed, I would like to thank you for helping to make our holiday celebration so much fun! Your music selection covered everyone’s interest and requests. As one of the hosts of the party, I was reassured by your “professionalism” and “attention to detail.” I will definitely be contacting you again for future company and personal functions.”', 'Roxanne Bennett', NULL, 0, '2024-09-03 19:35:05', '2024-09-03 19:35:05', NULL),
(31, NULL, '“Scott was very “professional” and really worked hard to provide the music we wanted for my wife’s surprise 50th Birthday Party. I would “highly recommend” him for any function needing a DJ.”', 'Bill Robinson', NULL, 0, '2024-09-03 19:35:14', '2024-09-03 19:35:14', NULL),
(32, NULL, '“Thanks for helping us to have such an excellent time on our special night. Thanks also for your “professionalism,” and your accomodating and flexible nature, and for your understanding. We loved the fact that you had an excellent, fun, music selection, and that you got for me the special songs I asked for. You are awesome!!!! We will surely recommend you to others and consider you for any future events we might have.”', 'Andrew and Izabela', NULL, 0, '2024-09-03 19:35:23', '2024-09-03 19:35:23', NULL),
(33, NULL, '“Scott thank you for making our reception memorable! Our family is not much for dancing, but because of the music you were playing, they couldn’t help themselves from getting out on the dance floor! We had a great time, as did our guests, and we are so grateful for the work that you put into our special day. Take care, and thanks again! ”', 'Kristen and Travis', NULL, 0, '2024-09-03 19:35:33', '2024-09-03 19:35:33', NULL),
(34, NULL, '“Scott did a wonderful job DJing our Holiday Party. He started out the evening with Christmas Music, while everyone was arriving and socializing. As the evening went on, his selection of music varied and was enjoyed by all, as we have ages ranging from the early 20s to the late 50s. The floor had many dancers on it throughout the night. Scott is a very nice person, with a great personality, and I highly recommend him.”', 'Judy Smith', NULL, 0, '2024-09-03 19:35:44', '2024-09-03 19:35:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_province` varchar(255) DEFAULT NULL,
  `zipcode` int(15) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `institute_address_1` varchar(255) DEFAULT NULL,
  `institute_address_2` varchar(255) DEFAULT NULL,
  `institute_email` varchar(255) DEFAULT NULL,
  `institute_phone` varchar(255) DEFAULT NULL,
  `gpa` int(10) DEFAULT NULL,
  `transcript` varchar(255) DEFAULT NULL,
  `ref1_name` varchar(255) DEFAULT NULL,
  `ref1_phone` varchar(255) DEFAULT NULL,
  `ref2_name` varchar(255) DEFAULT NULL,
  `ref2_phone` varchar(255) DEFAULT NULL,
  `statement_doc` varchar(255) DEFAULT NULL,
  `sickle_cell_disease` varchar(255) DEFAULT NULL,
  `illness` varchar(255) DEFAULT NULL,
  `scholarship_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `name`, `date_of_birth`, `address_1`, `address_2`, `city`, `state_province`, `zipcode`, `institute`, `institute_address_1`, `institute_address_2`, `institute_email`, `institute_phone`, `gpa`, `transcript`, `ref1_name`, `ref1_phone`, `ref2_name`, `ref2_phone`, `statement_doc`, `sickle_cell_disease`, `illness`, `scholarship_type`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'abcd', NULL, 'abcd', 'abcd', 'abcd', 'abcd', NULL, 'abcd', 'v', 'abcd', 'abcd', NULL, NULL, 'abcd', 'abcd', 'abcd', 'abcd', NULL, 'abcd', NULL, 'abcd', NULL, NULL, '2024-08-21 12:11:26', '2024-08-21 12:11:26'),
(2, 'Charissa Swanson', '2011-10-05', '174 Cowley Road', 'Quia magna expedita', NULL, 'State / Province', 41314, 'Aut itaque sequi eiu', '531 Oak Lane', 'Non aliqua Sit libe', 'kydypizake@mailinator.com', '22', 3, NULL, 'Hall Burke', '71', 'Kaitlin Henson', '75', NULL, '0', NULL, NULL, '2024-08-21 13:18:44', NULL, '2024-08-21 13:18:44'),
(3, 'Aiko Brennan', '1976-07-21', '31 Nobel Parkway', 'Qui molestiae facere', NULL, 'One', 56327, 'Distinctio Aliquip', '581 South Milton Extension', 'Assumenda excepturi', 'pahobiqymu@mailinator.com', '15', 2, NULL, 'Rinah Beard', '8', 'Aspen Nixon', '22', NULL, '0', NULL, NULL, '2024-08-21 13:19:39', NULL, '2024-08-21 13:19:39'),
(4, 'Conan Sawyer', '2021-06-17', '839 Milton Avenue', 'Optio nostrum sint', 'city 3', 'One', 87575, 'Quia sequi unde comm', '89 New Extension', 'Ut qui optio placea', 'busyxen@mailinator.com', '51', 3, NULL, 'Christen Osborn', '68', 'Hayley Rowland', '84', NULL, '0', NULL, NULL, '2024-08-21 13:24:57', NULL, '2024-08-21 13:24:57'),
(5, 'Kylie Bowman', '1988-02-07', '35 Second Lane', 'Deserunt esse expedi', 'city 3', 'One', 79813, 'Incididunt eaque eni', '450 Oak Extension', 'Quia laboris volupta', 'fuci@mailinator.com', '10', 4, NULL, 'Judith Rojas', '98', 'Anjolie Hawkins', '50', NULL, '0', NULL, NULL, '2024-08-21 13:27:39', NULL, '2024-08-21 13:27:39'),
(6, 'Jermaine Ashley', '1970-09-15', '693 North Milton Court', 'Laborum Quis except', 'City', 'One', 56684, 'Reprehenderit omnis', '24 South New Court', 'Voluptatibus velit e', 'jasybi@mailinator.com', '67', 2, NULL, 'Brennan Callahan', '5', 'Danielle Mckee', '67', NULL, '0', NULL, NULL, '2024-08-21 13:44:28', NULL, '2024-08-21 13:44:28'),
(7, 'Emerald Bush', '2000-04-05', '31 South Nobel Parkway', 'Error odio exercitat', 'city 1', 'One', 11909, 'Nisi laborum Commod', '32 North Milton Lane', 'Nulla odio consequat', 'besynunapy@mailinator.com', '66', 3, 'transcripts/1724266126_banner1.png', 'Stephen Mcfadden', '54', 'Adrienne Mcintosh', '33', NULL, '0', NULL, NULL, '2024-08-21 13:48:46', NULL, '2024-08-21 13:48:46'),
(8, 'Kane Morris', '1971-12-24', '16 East White Second Drive', 'Aut molestiae atque', 'City', 'One', 29965, 'Illum excepturi lab', '68 Hague Freeway', 'Aliquid numquam vero', 'wequgo@mailinator.com', '48', 2, 'storage/images/transcript/66c636ddcc8251724266205.jpg', 'Lacey Petersen', '52', 'Abraham Newman', '8', NULL, '0', NULL, NULL, '2024-08-21 13:50:06', '2024-08-21 15:48:42', '2024-08-21 15:48:42'),
(9, 'Skyler Clarke', '1981-06-26', '70 Old Parkway', 'Fugiat corporis quae', 'city 2', 'One', 47835, 'Temporibus velit vol', '16 West White Clarendon Drive', 'Est eos id ipsum', 'nyqa@mailinator.com', '41', 3, 'storage/transcripts/1724266729_doc.docx', 'Ginger Phelps', '73', 'Skyler Chang', '35', NULL, '0', NULL, NULL, '2024-08-21 13:58:49', NULL, '2024-08-21 13:58:49'),
(10, 'Fuller Macdonald', '1980-09-23', '43 Fabien Parkway', 'Voluptas in aspernat', 'City', 'One', 16554, 'Laudantium aliquid', '658 Cowley Parkway', 'Dignissimos impedit', 'pasux@mailinator.com', '77', 4, 'storage/transcripts/1724266770_doc.pdf', 'Gay Dennis', '61', 'Tiger Stone', '71', NULL, '0', NULL, NULL, '2024-08-21 13:59:30', NULL, '2024-08-21 13:59:30'),
(11, 'Petra Sanders', '2002-11-23', '50 Green First Avenue', 'Est sit voluptatib', 'City', 'One', 83557, 'Et accusantium ipsum', '663 North White Hague Drive', 'Labore magnam et lib', 'mybomed@mailinator.com', '33', 2, 'storage/transcripts/1724266919_doc.pdf', 'Zenaida Patel', '7', 'Lyle Munoz', '76', 'storage/statements/1724266919_doc.docx', '0', NULL, NULL, '2024-08-21 14:01:59', NULL, '2024-08-21 14:01:59'),
(12, 'Nichole Paul', '2014-09-12', '43 North Clarendon Street', 'Enim velit cillum pr', 'city 3', 'One', 22932, 'Maxime officiis cons', '248 West Oak Court', 'Magni ad rerum nostr', 'qyquh@mailinator.com', '35', 2, 'storage/transcripts/1724270243_doc.pdf', 'Lisandra Greer', '59', 'Igor Pace', '66', 'storage/statements/1724270243_doc.pdf', '0', NULL, 'General Education Scholarship', '2024-08-21 14:57:23', NULL, '2024-08-21 14:57:23'),
(13, 'Cleo Schneider', '2015-11-22', '75 Oak Avenue', 'Similique est asper', 'city 2', 'One', 23318, 'Enim qui elit paria', '84 East Milton Drive', 'Quia laborum minus s', 'jivak@mailinator.com', '34', 2, 'storage/transcripts/1724270318_doc.pdf', 'Bree Rose', '42', 'Beck Good', '77', 'storage/statements/1724270318_doc.docx', '0', NULL, 'General Education Scholarship', '2024-08-21 14:58:38', NULL, '2024-08-21 14:58:38'),
(14, 'Vivien Kidd', '1990-09-23', '25 Green Old Parkway', 'Quo impedit rerum o', 'city 1', 'One', 48269, 'Fugit quidem esse', '32 Rocky Nobel Avenue', 'Officia ea pariatur', 'mazamigu@mailinator.com', '40', 1, 'storage/transcripts/1724270651_doc.docx', 'Octavius Ewing', '56', 'Belle Ellis', '89', 'storage/statements/1724270651_doc.docx', '0', NULL, NULL, '2024-08-21 15:04:11', NULL, '2024-08-21 15:04:11'),
(15, 'Rae White', '2022-04-14', '61 New Avenue', 'Ad commodi quidem do', 'city 3', 'State / Province', 18194, 'Qui ut est est nemo', '352 South Milton Road', 'Excepturi anim eos', 'dewy@mailinator.com', '64', 2, 'storage/transcripts/1724270693_doc.docx', 'Megan Hoover', '94', 'Xandra Solomon', '65', 'storage/statements/1724270693_doc.pdf', '1', NULL, NULL, '2024-08-21 15:04:53', NULL, '2024-08-21 15:04:53'),
(16, 'Kendall Williams', '1987-10-20', '70 Green New Street', 'Sapiente quis enim r', 'city 2', 'One', 73562, 'Assumenda tempore q', '97 East White Second Avenue', 'Labore modi asperior', 'pewonot@mailinator.com', '37', 2, 'storage/transcripts/1724270874_doc.pdf', 'Lila Ewing', '87', 'Julie Aguilar', '43', 'storage/statements/1724270874_doc.docx', 'ABC YES', NULL, NULL, '2024-08-21 15:07:54', NULL, '2024-08-21 15:07:54'),
(17, 'Elliott Stein', '1970-05-21', '950 North Green Fabien Extension', 'Atque est quis volu', 'city 1', 'One', 97548, 'Fugiat quis ea ratio', '947 West Second Road', 'Beatae voluptas pers', 'hiqotek@mailinator.com', '2', 1, 'storage/transcripts/1724271002_doc.docx', 'Piper Kemp', '4', 'Jana Noble', '10', 'storage/statements/1724271002_doc.pdf', 'General Education Scholarship', NULL, NULL, '2024-08-21 15:10:02', NULL, '2024-08-21 15:10:02'),
(18, 'Tobias Edwards', '2021-07-14', '67 East Oak Court', 'Vitae modi voluptate', 'city 3', 'State / Province', 88559, 'Dolor consequuntur b', '19 White New Road', 'Ut aut sit quia non', 'qurodab@mailinator.com', '65', 4, 'storage/transcripts/1724437664_banner.png', 'Galvin Salinas', '85', 'Jennifer Kerr', '55', 'storage/statements/1724437664_abt1.png', 'General Education Scholarship', NULL, NULL, '2024-08-23 13:27:44', NULL, '2024-08-23 13:27:44'),
(19, 'Nora Peck', '1994-09-24', '25 Rocky New Lane', 'Itaque dolores aut t', 'city 3', 'One', 12706, 'Sint iusto aut in te', '53 Oak Street', 'Nostrum deserunt nob', 'josid@mailinator.com', '90', 4, 'storage/transcripts/1724437765_banner.png', 'Amber Alexander', '24', 'Eaton Delacruz', '86', 'storage/statements/1724437765_banner.png', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-23 13:29:25', NULL, '2024-08-23 13:29:25'),
(20, 'Rafael Sims', '2011-06-01', '75 East Nobel Drive', 'Ut harum laborum Te', 'city 1', 'One', 88268, 'Non autem quisquam a', '28 North Old Freeway', 'Nisi at at ea aut om', 'figejinufu@mailinator.com', '696969696', 2, 'storage/transcripts/1724716910_20240809165704_0-voip details.docx', 'Wyoming Benjamin', '696969696', 'Brennan Snow', '696969696', 'storage/statements/1724716910_20240809165704_0-voip details.docx', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-27 04:01:50', NULL, '2024-08-27 04:01:50'),
(21, 'Kiara Browning', '2020-08-04', '69 Old Extension', 'Facere magni eligend', 'city 3', 'State / Province', 64255, 'Soluta consequatur', '561 Hague Freeway', 'Vel occaecat eius do', 'dijywob@mailinator.com', '1234567892', 2, 'storage/transcripts/1724791592_0A4A0043ok_24b791e4-822b-4c86-bfd1-a2f1c8814f52.jpg', 'Mollie Mendoza', '1234567892', 'Nola Coleman', '1234567892', 'storage/statements/1724791592_0A4A0051ok.jpg', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-28 00:46:32', NULL, '2024-08-28 00:46:32'),
(22, 'Tarik Johnson', '2017-02-11', '558 Fabien Extension', 'Qui rerum illo tempo', 'city 1', 'State / Province', 82177, 'Voluptatum quo aliqu', '79 New Boulevard', 'Aut dolor dolor dolo', 'vuty@mailinator.com', '1234567892', 2, 'storage/transcripts/1724791725_20240809165704_0-voip details.docx', 'Anjolie Aguilar', '1234567892', 'Quincy Simon', '1234567892', 'storage/statements/1724791725_20240809165704_0-voip details.docx', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-28 00:48:45', NULL, '2024-08-28 00:48:45'),
(23, 'Isadora Tanner', '2016-03-17', '99 Rocky Hague Lane', 'Tempore sit quia l', 'city 1', 'One', 41732, 'Tempor est repellend', '80 White Oak Freeway', 'Perspiciatis aperia', 'rybyp@mailinator.com', '1234567898', 2, 'storage/transcripts/1724792633_20240809165704_0-voip details.docx', 'Cameron Valenzuela', '1234567898', 'Paloma Wright', '1234567898', 'storage/statements/1724792633_20240809165704_0-voip details.docx', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-28 01:03:53', NULL, '2024-08-28 01:03:53'),
(24, 'Leigh Schneider', '1978-09-13', '50 Clarendon Freeway', 'Eius dolorem ipsa e', 'City', 'One', 12937, 'Nostrum quod maxime', '51 Green Cowley Street', 'Est cillum in esse q', 'naxa@mailinator.com', '222133333333', 2, 'storage/transcripts/1724793942_1.pdf', 'Mira Galloway', '222133333333', 'Larissa Guerra', '222133333333', 'storage/statements/1724793942_1.pdf', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-28 01:25:42', NULL, '2024-08-28 01:25:42'),
(25, 'Kaye Donovan', '2000-08-19', '668 South Second Road', 'Voluptas hic anim au', 'city 2', 'One', 22657, 'Test Later', 'Test', 'Officia sapiente lab', 'demo6test@yopmail.com', '5646464654', 4, 'storage/transcripts/1724793987_1.pdf', 'Raphael Leonard', '5646464654', 'Jonas Navarro', '5646464654', 'storage/statements/1724793987_1.pdf', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-28 01:26:27', NULL, '2024-08-28 01:26:27'),
(26, 'Dante Luna', '1994-03-14', '58 Old Street', 'Duis voluptas ex dol', 'city 3', 'One', 90780, 'Minima necessitatibu', '68 White Fabien Street', 'Sint ea nisi quia ma', 'luvyla@mailinator.com', '103243243324', 1, 'storage/transcripts/1724794816_1.pdf', 'Baker Rodriquez', '70324432324324', 'Tanek Head', '98234324324', 'storage/statements/1724794816_1.pdf', 'Sickle Cell Disease Scholarship', NULL, NULL, '2024-08-28 01:40:16', NULL, '2024-08-28 01:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `primary_image` varchar(250) DEFAULT NULL,
  `inner_image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `is_featured` int(1) DEFAULT NULL,
  `is_active` int(10) DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `primary_image`, `inner_image`, `description`, `is_featured`, `is_active`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 'Your Services Here', 'storage/images/services/66ba67fe16d1a1723492350.png', 'storage/images/services/66ba67fe43ea51723492350.jpg', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(255, 255, 255); font-family: Poppins, sans-serif; background-color: rgb(62, 141, 185);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p><div><br></div>', 1, 1, 'your-services-here', '2024-08-12 14:52:30', '2024-08-13 13:30:57', '2024-08-13 18:30:57'),
(21, 'Your Services Here', 'storage/images/services/66ba685b704041723492443.jpg', 'storage/images/services/66ba685c721821723492444.jpg', '<p>lore</p><h5 style=\"margin-right: 0px; margin-left: 0px; font-weight: 500; line-height: 36px; font-size: 36px; font-family: Oxanium, sans-serif; color: rgb(255, 255, 255); background-color: rgb(62, 141, 185);\">Your Services Here</h5><div><h5 style=\"margin-right: 0px; margin-left: 0px; font-weight: 500; line-height: 36px; font-size: 36px; font-family: Oxanium, sans-serif; color: rgb(255, 255, 255); background-color: rgb(62, 141, 185);\">Your Services Here</h5></div><div><br></div>', 1, NULL, 'your-services-here-1', '2024-08-12 14:54:04', '2024-08-13 13:30:09', '2024-08-13 18:30:09'),
(22, 'Your Services Now', 'storage/images/services/66bbaac268fc51723574978.png', 'storage/images/services-inner/66bbac80f28e11723575424.jpg', '<p>XYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZXYZ</p><p><br></p>', NULL, NULL, 'your-services-now', '2024-08-13 13:31:54', '2024-08-15 02:01:19', NULL),
(23, 'Service 2', 'storage/images/services/66bba74eb08d31723574094.jpg', 'storage/images/services/66bba74fbdc7e1723574095.jpg', '<p>LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem</p>', NULL, NULL, 'service-2', '2024-08-13 13:34:55', '2024-08-13 13:34:55', NULL),
(24, 'service 3', 'storage/images/services/66bba776eaf3f1723574134.jpg', 'storage/images/services/66bba77705eab1723574135.jpg', '<p>LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem<br></p>', NULL, NULL, 'service-3', '2024-08-13 13:35:35', '2024-08-13 13:35:35', NULL),
(25, 'service 4', 'storage/images/services/66bba7931faf31723574163.png', 'storage/images/services/66bba7936627d1723574163.jpg', '<p>LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem<br></p>', NULL, NULL, 'service-4', '2024-08-13 13:36:03', '2024-08-13 13:36:03', NULL),
(26, 'service 5', 'storage/images/services/66bba7b213dba1723574194.png', 'storage/images/services/66bba7b23ea051723574194.jpg', '<p>LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem<br></p>', NULL, NULL, 'service-5', '2024-08-13 13:36:34', '2024-08-15 02:01:45', '2024-08-14 22:01:45'),
(27, 'adbdad', 'storage/images/services/66bd5267b78751723683431.png', 'storage/images/services/66bd5267cbde11723683431.png', '<p>dwwdddddddddd</p>', NULL, NULL, 'adbdad', '2024-08-15 04:57:11', '2024-08-15 04:57:11', NULL),
(28, 'New Blog', 'storage/images/services/66c4d281af8c01724174977.jpg', 'storage/images/services/66c4d281c29041724174977.jpg', '<p>ABCd</p>', NULL, NULL, 'new-blog', '2024-08-20 12:29:37', '2024-08-20 12:29:37', NULL),
(29, 'New blog', 'storage/images/services/66c4d37a0a2701724175226.png', 'storage/images/services/66c4d37a2d0f41724175226.jpg', '<p>new blog</p>', NULL, NULL, 'new-blog-1', '2024-08-20 12:33:46', '2024-08-20 12:33:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `heading` varchar(256) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_color` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `primary_image` text DEFAULT NULL,
  `secondary_image` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `page`, `heading`, `title`, `subtitle`, `description`, `button_text`, `button_color`, `button_link`, `primary_image`, `secondary_image`, `background_image`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, NULL, 'Check All About The Music’s availability instantly!xyz', 'I take your vision for the day and help execute it flawlessly-so you can just lay back and have fun! I am constantly striving to perfect my craft.', NULL, '<h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 500; font-size: 80px; font-family: big_noodle_titling; color: rgb(255, 255, 255); position: relative; z-index: 9; padding-left: 25px;\">All About The Music</h1><h5 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 500; font-size: 22px; font-family: big_noodle_titling; color: rgb(255, 255, 255); position: relative; z-index: 9; padding-left: 25px; padding-right: 15px; letter-spacing: 9px; padding-bottom: 10px; border-bottom: 1px solid rgb(35, 49, 58);\">The most epic Dance Party ever!</h5><p style=\"margin: 15px 0px 0px; color: rgb(255, 255, 255); font-size: 16px; font-family: Montserrat, system-ui; position: relative; z-index: 9; padding-left: 25px;\">Scott Had everyboday on the dance floor the entire Night</p>', 'Book Now', NULL, '/bookings', 'storage/images/slider_images/66d0db10e491a1724963600.png', 'storage/images/slider_images/66d0d977b26fc1724963191.jpg', 'storage/images/slider_images/66d0d977c45ef1724963191.jpg', '0', '2024-08-29 15:26:31', '2024-09-03 23:52:04', NULL),
(11, NULL, 'Check All About The Music’s availability instantly!xyz', 'I take your vision for the day and help execute it flawlessly-so you can just lay back and have fun! I am constantly striving to perfect my craft.', NULL, '<h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 500; font-size: 80px; font-family: big_noodle_titling; color: rgb(255, 255, 255); position: relative; z-index: 9; padding-left: 25px;\">All About The Music</h1><h5 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 500; font-size: 22px; font-family: big_noodle_titling; color: rgb(255, 255, 255); position: relative; z-index: 9; padding-left: 25px; padding-right: 15px; letter-spacing: 9px; padding-bottom: 10px; border-bottom: 1px solid rgb(35, 49, 58);\">The most epic Dance Party ever!</h5><p style=\"margin: 15px 0px 0px; color: rgb(255, 255, 255); font-size: 16px; font-family: Montserrat, system-ui; position: relative; z-index: 9; padding-left: 25px;\">Scott Had everyboday on the dance floor the entire Night</p>', 'Book Now', NULL, '/bookings', 'storage/images/slider_images/66d0db10e491a1724963600.png', NULL, NULL, '0', '2024-08-29 15:26:31', '2024-09-03 23:51:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `date`, `booking_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(52, '2024-09-13', 16, '2024-09-03 14:18:46', '2024-09-03 16:59:40', NULL),
(53, '2024-09-14', 19, '2024-09-03 14:18:46', '2024-09-03 19:42:50', NULL),
(54, '2024-09-19', NULL, '2024-09-03 14:19:19', '2024-09-03 14:19:19', NULL),
(55, '2024-09-20', 18, '2024-09-03 14:19:20', '2024-09-03 19:41:08', NULL),
(56, '2024-09-21', NULL, '2024-09-03 14:19:20', '2024-09-03 14:19:20', NULL),
(57, '2024-09-23', NULL, '2024-09-03 14:19:20', '2024-09-03 14:19:20', NULL),
(58, '2024-09-25', NULL, '2024-09-03 14:19:20', '2024-09-03 14:19:20', NULL),
(59, '2024-09-26', NULL, '2024-09-03 14:19:20', '2024-09-03 14:19:20', NULL),
(60, '2024-09-27', 20, '2024-09-03 14:19:20', '2024-09-04 11:22:06', NULL),
(61, '2024-09-28', NULL, '2024-09-03 14:19:20', '2024-09-03 14:19:20', NULL),
(62, '2024-09-22', NULL, '2024-09-03 14:19:20', '2024-09-03 14:19:20', NULL),
(64, '2024-09-12', 17, '2024-09-03 14:21:31', '2024-09-03 18:04:36', NULL),
(65, '2024-09-10', NULL, '2024-09-03 14:21:31', '2024-09-03 14:21:31', NULL),
(66, '2024-09-17', NULL, '2024-09-03 14:22:14', '2024-09-03 14:22:14', NULL),
(67, '2024-09-24', NULL, '2024-09-03 14:22:14', '2024-09-03 14:22:14', NULL),
(74, '2024-09-06', 21, '2024-09-03 14:46:31', '2024-09-04 11:25:57', NULL),
(75, '2024-09-05', NULL, '2024-09-03 15:02:09', '2024-09-03 15:49:12', NULL),
(76, '2024-09-18', NULL, '2024-09-03 15:06:10', '2024-09-03 15:06:10', NULL),
(77, '2024-10-04', NULL, '2024-09-03 15:06:59', '2024-09-03 15:06:59', NULL),
(79, '2024-10-01', NULL, '2024-09-03 15:06:59', '2024-09-03 15:06:59', NULL),
(83, '2024-09-09', NULL, '2024-09-03 15:06:10', '2024-09-03 15:06:10', NULL),
(84, '2024-09-07', NULL, '2024-09-03 16:24:18', '2024-09-03 16:24:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `secondary_contact` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 0,
  `profile_image` varchar(255) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `contact`, `secondary_contact`, `address_1`, `address_2`, `city`, `state`, `country`, `zip`, `role`, `profile_image`, `is_active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Accounts', 'admin@allaboutthemusicrichmond.com', 'mack_tester', '090-078-6011', NULL, '12121212', '', '', '', 'Germany', 12345, 0, 'storage/images/profile/66ba81f9ec9381723499001.jpg', 0, NULL, '$2y$10$GwSf3yAG3vRwEHrhHj2HieoYU7KELUIodFYvVcMOZEeC9JcMNw67u', NULL, NULL, '2024-08-15 02:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`name`, `email`, `experience`, `phone`, `id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('Colour AV', 'admin@voip.com', 'wddw', '5555', 1, '2024-08-19 18:57:57', '2024-08-19 19:32:41', '2024-08-19 19:32:41'),
('Colour AV', 'admin@voip.com', '13213', '12321312', 2, '2024-08-19 19:11:10', '2024-08-19 19:11:10', NULL),
('Zachary Clayton', 'nyzynojyma@mailinator.com', 'Ut velit ut necessi', '21', 3, '2024-08-24 02:11:23', '2024-08-24 02:11:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `primary_image` varchar(250) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `primary_image`, `updated_at`, `deleted_at`, `created_at`) VALUES
(1, 'storage/images/work_images/6668dc685ecb91718148200.jpg', '2024-06-11 18:23:20', NULL, '2024-06-11 18:23:20'),
(2, 'storage/images/work_images/6668dc703a1791718148208.jpg', '2024-06-11 18:23:28', NULL, '2024-06-11 18:23:28'),
(3, 'storage/images/work_images/6668dc77cd32f1718148215.jpg', '2024-06-11 18:23:36', NULL, '2024-06-11 18:23:36'),
(4, 'storage/images/work_images/6668dc803c2451718148224.jpg', '2024-06-11 18:23:44', NULL, '2024-06-11 18:23:44'),
(8, 'storage/images/work_images/6668dcd6d536b1718148310.jpg', '2024-06-11 18:25:10', NULL, '2024-06-11 18:25:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slot_id` (`slot_id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_section`
--
ALTER TABLE `details_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freeinquiries`
--
ALTER TABLE `freeinquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integration`
--
ALTER TABLE `integration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_slider`
--
ALTER TABLE `review_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=727;

--
-- AUTO_INCREMENT for table `details_section`
--
ALTER TABLE `details_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `freeinquiries`
--
ALTER TABLE `freeinquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `integration`
--
ALTER TABLE `integration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review_slider`
--
ALTER TABLE `review_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slots`
--
ALTER TABLE `slots`
  ADD CONSTRAINT `slots_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
