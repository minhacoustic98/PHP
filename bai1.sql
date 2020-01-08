-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2019 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `date_salary_up` date NOT NULL,
  `salary_range` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`id`, `name`, `birthdate`, `gender`, `address`, `position`, `date_salary_up`, `salary_range`) VALUES
(0, 'Mixigaming', '2019-07-02', 'Nam', 'Vĩnh Yên', 'Phục vụ', '2016-06-06', 597877),
(2, 'Linh', '1992-12-12', 'Nữ', 'Hà Nội', 'Kế toán', '2017-05-30', 697123),
(3, 'Minh', '1998-05-15', 'Nam', 'Đông Anh', 'Giám đốc', '2019-07-04', 789456987);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `engineers`
--

CREATE TABLE `engineers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `date_salary_up` date NOT NULL,
  `salary_range` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `engineers`
--

INSERT INTO `engineers` (`id`, `name`, `birthdate`, `gender`, `address`, `major`, `date_salary_up`, `salary_range`) VALUES
(0, 'Minh ', '2000-12-12', 'Nam', 'Hà Nam', 'Giám đốc', '2017-02-02', 697896),
(3, 'Hihi', '2016-02-02', 'Nam', 'Hải Phòng', 'Singer', '2017-02-13', 698745);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `date_level_up` date NOT NULL,
  `salary_range` double NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `workers`
--

INSERT INTO `workers` (`id`, `birthdate`, `gender`, `address`, `level`, `date_level_up`, `salary_range`, `name`) VALUES
(0, '1998-05-15', 'Nam', 'Hà Nội', '1/7', '2019-02-12', 1236544, 'Kiên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `engineers`
--
ALTER TABLE `engineers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `engineers`
--
ALTER TABLE `engineers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
