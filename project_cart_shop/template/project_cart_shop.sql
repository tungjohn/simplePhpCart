-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2020 lúc 07:48 PM
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
-- Cơ sở dữ liệu: `project_cart_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_lv`
--

CREATE TABLE `product_lv` (
  `id` int(11) NOT NULL,
  `lv_name` varchar(255) NOT NULL,
  `lv_image` text NOT NULL,
  `lv_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_lv`
--

INSERT INTO `product_lv` (`id`, `lv_name`, `lv_image`, `lv_price`) VALUES
(1, 'lv_product1', 'lv_product1.jpg', 1560),
(2, 'lv_product2', 'lv_product2.jpg', 1380),
(3, 'lv_product3', 'lv_product3.jpg', 1520),
(4, 'lv_product4', 'lv_product4.jpg', 1630);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product_lv`
--
ALTER TABLE `product_lv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product_lv`
--
ALTER TABLE `product_lv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
