-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2018 lúc 04:54 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `itrequest`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `priority` tinyint(1) NOT NULL,
  `deadline` datetime NOT NULL,
  `assigned_to` int(11) UNSIGNED DEFAULT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `team_id` int(11) UNSIGNED NOT NULL,
  `resolved_at` datetime DEFAULT NULL,
  `closed_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `subject`, `content`, `created_by`, `status`, `priority`, `deadline`, `assigned_to`, `rating`, `team_id`, `resolved_at`, `closed_at`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'nac nca ', 1, 1, 1, '2018-01-02 00:00:00', 1, 1, 1, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'name', '<p>content</p>', 1, 0, 2, '2017-12-29 00:00:00', NULL, NULL, 2, NULL, NULL, '2017-12-29 05:14:53', '2017-12-29 05:14:53'),
(3, 'abc', '<p>avc</p>', 10, 0, 4, '2017-12-31 00:00:00', NULL, NULL, 1, NULL, NULL, '2017-12-31 13:50:46', '2017-12-31 13:50:46'),
(4, 'Active window', '<p>Active Window</p>', 10, 0, 4, '2018-01-01 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:29:13', '2018-01-01 03:29:13'),
(5, 'Install office', '<p>Install office</p>', 10, 0, 4, '2017-12-29 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:37:27', '2018-01-01 03:37:27'),
(6, 'Install office', '<p>Install office</p>', 10, 0, 4, '2017-12-29 00:00:00', 8, NULL, 1, NULL, NULL, '2018-01-01 03:37:32', '2018-01-01 03:37:32'),
(7, 'Install game', '<p>Install game</p>', 10, 0, 4, '2017-12-29 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:40:50', '2018-01-01 03:40:50'),
(8, 'install linux', '<p>install linux</p>', 10, 0, 4, '2018-01-01 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:44:40', '2018-01-01 03:44:40'),
(9, 'install microsoft visual studio', '<p>install microsoft visual studio</p>', 10, 0, 4, '2018-01-02 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:49:58', '2018-01-01 03:49:58'),
(10, 'install microsoft visual studio', '<p>install microsoft visual studio</p>', 10, 0, 4, '2018-01-02 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:52:26', '2018-01-01 03:52:26'),
(11, 'install microsoft visual studio', '<p>install microsoft visual studio</p>', 10, 0, 4, '2018-01-02 00:00:00', NULL, NULL, 1, NULL, NULL, '2018-01-01 03:53:04', '2018-01-01 03:53:04'),
(12, 'abc', '<p>aasfaf</p>', 11, 0, 4, '2018-01-01 00:00:00', 8, NULL, 2, NULL, NULL, '2018-01-01 15:47:49', '2018-01-01 15:47:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
