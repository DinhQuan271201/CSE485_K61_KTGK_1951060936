-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 11:16 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060936_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DOCGIA`
--

CREATE TABLE `DOCGIA` (
  `madg` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(40) NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `nghenghiep` varchar(10) NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blood_donor`
--

INSERT INTO `DOCGIA` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`,`diachi`) VALUES
(1, 'Nguyễn Trần Huy', 'Nữ', 2001, 'A', '2022-01-01','2025-01-01', '0938678963'),
(2, 'AD', 'Nam', 2001, 'AB', '2022-01-01', '2025-01-01','0028392'),
(3, 'ac', 'Nữ', 2001, 'AB', '2022-01-01', '2025-01-01','0028392'),
(4, 'AD', 'Nam', 2001, 'AB', '2022-01-01', '2025-01-01','0028392'),
(5, 'AD', 'Nữ', 2001, 'AB', '2022-01-01', '2025-01-01','0028392'),
(6, 'ac', 'Nam', 2001, 'AB', '2022-01-01', '2025-01-01','0028392'),
(7, 'AD', 'Nam', 2001, 'AB', '2022-01-01', '2025-01-01','00283923'),
(16, 'ac', 'Nam', 2001, 'AB', '2022-01-01', '2025-01-01','00283923');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `DOCGIA`
--
ALTER TABLE `DOCGIA`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `DOCGIA`
--
ALTER TABLE `DOCGIA`
  MODIFY `madg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
