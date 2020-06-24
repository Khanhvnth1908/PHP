-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2020 lúc 08:42 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `publication`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `idGallery` int(11) NOT NULL,
  `titleGallry` varchar(255) NOT NULL,
  `descGallery` varchar(255) NOT NULL,
  `imgFullNameGallery` varchar(255) NOT NULL,
  `orderGallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`idGallery`, `titleGallry`, `descGallery`, `imgFullNameGallery`, `orderGallery`) VALUES
(1, 'Nail', 'Softly hand', 'hand.jpg', 1),
(2, 'Teamwork', 'Working together', 'teamwork.jpg', 2),
(3, 'Sky', 'Walking on the sky', 'bluesky.jpg', 3),
(4, 'Casecade', 'panorama picture', 'cascade.jpg', 4),
(5, 'Mount', 'Mount is nice view', 'mount.jpg', 5),
(6, 'Face', 'It\'s sexy girl', 'face.jpg', 6),
(7, 'Country', 'Country slide is very beautiful', 'countryside.jpg', 7),
(8, 'Flying', 'Flying on the skype', 'flying.jpg', 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idGallery`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `idGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
