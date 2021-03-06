-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2021 lúc 07:40 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_cosmetic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_admin`
--

CREATE TABLE `b_admin` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Truong` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoKhau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThanhPho` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuocGia` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GhiChu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_admin`
--

INSERT INTO `b_admin` (`id`, `HoTen`, `Truong`, `Email`, `HoKhau`, `ThanhPho`, `QuocGia`, `SDT`, `GhiChu`, `Anh`) VALUES
(1, 'Âu Ngọc Tiền', 'Học Viện Ngân Hàng', 'autien@gmail.com', 'Việt Hưng, Long Biên', 'Hà Nội', 'Việt Nam', '0357808212', 'abcdefgh', 'ant.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_cmt`
--

CREATE TABLE `b_cmt` (
  `id` int(11) NOT NULL,
  `NoiDung` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KichHoat` int(11) DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `b_cmt`
--

INSERT INTO `b_cmt` (`id`, `NoiDung`, `KichHoat`, `Ngay`, `Ten`, `MaSP`) VALUES
(2, 'xau qua', 1, '2021-04-12', NULL, NULL),
(3, 'cung dc', 1, '0000-00-00', NULL, NULL),
(4, 'Tú', 1, '2021-04-14', 'Đẹp mà rẻ đấy ', 'SP002'),
(5, 'aaa', 0, '2021-04-14', 'Hehe', 'SP002'),
(6, 'tu', 0, '2021-04-14', 'Dep qua shop oi', 'SP002'),
(7, 'tu', 0, '2021-04-14', 'Dep qua shop oi', 'SP002'),
(8, 'Tran Tu', 1, '2021-04-14', 'Thay Sinh dep trai', 'SP004');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_cthdb`
--

CREATE TABLE `b_cthdb` (
  `SoHDB` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaSP` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `GiamGia` float DEFAULT NULL,
  `ThanhTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_cthdb`
--

INSERT INTO `b_cthdb` (`SoHDB`, `MaSP`, `SoLuong`, `DonGia`, `GiamGia`, `ThanhTien`) VALUES
('15', 'SP002', 1, 30000, NULL, 30000),
('16', 'SP002', 3, 30000, NULL, 90000),
('17', 'SP002', 3, 30000, NULL, 90000),
('18', 'SP002', 2, 30000, NULL, 60000),
('20', 'SP002', 1, 30000, NULL, 30000),
('26', 'SP002', 1, 30000, NULL, 30000),
('31', 'SP004', 1, 69000, NULL, 69000),
('32', 'SP004', 1, 69000, NULL, 69000),
('33', 'SP002', 1, 30000, NULL, 30000),
('34', 'SP002', 1, 30000, NULL, 30000),
('35', 'SP002', 1, 30000, NULL, 30000),
('HD001', 'SP001', 2, 300000, 0, 600000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_cthdn`
--

CREATE TABLE `b_cthdn` (
  `SoHDN` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaSP` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `CKTT` float DEFAULT NULL,
  `CKTM` float DEFAULT NULL,
  `ThanhTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_cthdn`
--

INSERT INTO `b_cthdn` (`SoHDN`, `MaSP`, `SoLuong`, `DonGia`, `CKTT`, `CKTM`, `ThanhTien`) VALUES
('HDN001', 'SP001', 2, 300000, NULL, NULL, 600000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_dm`
--

CREATE TABLE `b_dm` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_dm`
--

INSERT INTO `b_dm` (`id_dm`, `ten_dm`) VALUES
(1, 'Mặt nạ'),
(3, 'Xịt khoáng'),
(4, 'Sửa rửa mặt'),
(5, 'Sản phẩm tẩy trang'),
(6, 'Phấn nước'),
(7, 'Kem nền'),
(8, 'Son môi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_dmsp`
--

CREATE TABLE `b_dmsp` (
  `MaSP` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DVT` char(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SL` int(10) DEFAULT NULL,
  `Anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh1` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh2` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh3` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh4` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dm` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_dmsp`
--

INSERT INTO `b_dmsp` (`MaSP`, `TenSP`, `DonGia`, `MoTa`, `DVT`, `SL`, `Anh`, `Anh1`, `Anh2`, `Anh3`, `Anh4`, `id_dm`) VALUES
('SP002', 'Sắt', 30000, '', 'kg', 5, '3CE5.jpg', NULL, NULL, NULL, NULL, 1),
('SP003', 'Hello', 69000, NULL, NULL, 500, '', NULL, NULL, NULL, NULL, 3),
('SP004', 'Mặt nạ đọa đầy', 69000, 'Hahah', 'Chiếc', 500, 'velvet041.jpg', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_hdb`
--

CREATE TABLE `b_hdb` (
  `SoHDB` int(8) NOT NULL,
  `Ngay` date DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `MaNV` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaKH` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_hdb`
--

INSERT INTO `b_hdb` (`SoHDB`, `Ngay`, `TongTien`, `MaNV`, `MaKH`, `ten`, `ho`, `email`, `sdt`, `dia_chi`) VALUES
(1, '2021-03-23', 300000, 'NV001', 'NV001', NULL, NULL, NULL, NULL, NULL),
(2, '2021-04-13', 60000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2021-04-13', 60000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2021-04-13', 60000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2021-04-13', 60000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(7, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(8, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(9, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(10, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(11, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(12, '2021-04-13', 60000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(13, '2021-04-14', 30000, NULL, NULL, '', '', '', '', ''),
(14, '2021-04-14', 30000, NULL, NULL, '', '', '', '', ''),
(15, '2021-04-14', 30000, NULL, NULL, 'a', 'b', 'a@gmail.com', '113', 'aasfasd'),
(16, '2021-04-14', 90000, NULL, NULL, 'a', 'b', 'c@gmail.com', '113', 'jj'),
(17, '2021-04-14', 90000, NULL, NULL, 'a', 'b', 'c@gmail.com', '113', 'jj'),
(18, '2021-04-14', 60000, NULL, NULL, 'a', 'b', 'cc@gmail.com', '1', 'a'),
(19, '2021-04-14', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2021-04-14', 30000, NULL, NULL, 'f', 'b', 'cc@gmail.com', 'd', '4'),
(21, '2021-04-14', 0, NULL, NULL, 'f', 'b', 'cc@gmail.com', 'd', '4'),
(22, '2021-04-14', 0, NULL, NULL, 'f', 'b', 'cc@gmail.com', 'd', '4'),
(23, '2021-04-14', 0, NULL, NULL, 'f', 'b', 'cc@gmail.com', 'd', '4'),
(24, '2021-04-14', 0, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(25, '2021-04-14', 0, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(26, '2021-04-14', 30000, NULL, NULL, 'Tu', 'Van', 'tuvantran.it@gmail.com', '0963273254', 'So 65 pho Tram Long Bien Ha Noi'),
(27, '2021-04-14', 474000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(28, '2021-04-14', 474000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(29, '2021-04-14', 474000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(30, '2021-04-14', 0, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(31, '2021-04-14', 69000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(32, '2021-04-14', 69000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(33, '2021-04-14', 30000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(34, '2021-04-14', 30000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'Ha Nôi'),
(35, '2021-04-14', 30000, NULL, NULL, 'Tu', 'Tran', 'tuvantran.it@gmail.com', '113', 'So 65 pho Tram Long Bien Ha Noi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_hdn`
--

CREATE TABLE `b_hdn` (
  `SoHDN` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngay` date DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `MaNCC` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaNV` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_hdn`
--

INSERT INTO `b_hdn` (`SoHDN`, `Ngay`, `TongTien`, `MaNCC`, `MaNV`) VALUES
('HDN001', '2021-03-23', 300000, 'NCC001', 'NV001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_kh`
--

CREATE TABLE `b_kh` (
  `MaKH` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKH` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GioiTinh` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_kh`
--

INSERT INTO `b_kh` (`MaKH`, `TenKH`, `GioiTinh`, `SDT`, `Email`) VALUES
('KH001', 'Nguyễn Thùy Linh', 'Nữ', '0123456789', 'thuylinh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_loaidm`
--

CREATE TABLE `b_loaidm` (
  `id_loadm` int(11) NOT NULL,
  `ten_loaidm` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_loaidm`
--

INSERT INTO `b_loaidm` (`id_loadm`, `ten_loaidm`) VALUES
(1, 'loai1'),
(2, 'loai2'),
(3, 'loai3'),
(4, 'loai4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_ncc`
--

CREATE TABLE `b_ncc` (
  `MaNCC` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNCC` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ChiNhanh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_ncc`
--

INSERT INTO `b_ncc` (`MaNCC`, `TenNCC`, `ChiNhanh`, `DiaChi`) VALUES
('NCC002', 'abcd', 'Hà Nội', 'Việt Hưng, Long Biên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_nv`
--

CREATE TABLE `b_nv` (
  `MaNV` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNV` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Luong` float DEFAULT NULL,
  `GioiTinh` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_nv`
--

INSERT INTO `b_nv` (`MaNV`, `TenNV`, `Luong`, `GioiTinh`, `DiaChi`, `SDT`, `Anh`) VALUES
('NV001', 'Âu Ngọc Tiền', 3000, 'Nam', 'Hà Nội', '0357808212', 'aungoctien.jpg'),
('NV002', 'Nguyễn Thùy Linh', 6000000, NULL, 'Thái Bình', '12345689', 'ntl.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `b_admin`
--
ALTER TABLE `b_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `b_cthdb`
--
ALTER TABLE `b_cthdb`
  ADD UNIQUE KEY `SoHDB` (`SoHDB`);

--
-- Chỉ mục cho bảng `b_dm`
--
ALTER TABLE `b_dm`
  ADD UNIQUE KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `b_dmsp`
--
ALTER TABLE `b_dmsp`
  ADD PRIMARY KEY (`MaSP`),
  ADD UNIQUE KEY `MaSP` (`MaSP`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `b_hdb`
--
ALTER TABLE `b_hdb`
  ADD PRIMARY KEY (`SoHDB`),
  ADD UNIQUE KEY `SoHDB` (`SoHDB`);

--
-- Chỉ mục cho bảng `b_hdn`
--
ALTER TABLE `b_hdn`
  ADD UNIQUE KEY `SoHDN` (`SoHDN`);

--
-- Chỉ mục cho bảng `b_kh`
--
ALTER TABLE `b_kh`
  ADD UNIQUE KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `b_loaidm`
--
ALTER TABLE `b_loaidm`
  ADD PRIMARY KEY (`id_loadm`);

--
-- Chỉ mục cho bảng `b_ncc`
--
ALTER TABLE `b_ncc`
  ADD UNIQUE KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `b_nv`
--
ALTER TABLE `b_nv`
  ADD UNIQUE KEY `MaNV` (`MaNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `b_admin`
--
ALTER TABLE `b_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `b_cmt`
--
ALTER TABLE `b_cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `b_dm`
--
ALTER TABLE `b_dm`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `b_hdb`
--
ALTER TABLE `b_hdb`
  MODIFY `SoHDB` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `b_loaidm`
--
ALTER TABLE `b_loaidm`
  MODIFY `id_loadm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `b_dmsp`
--
ALTER TABLE `b_dmsp`
  ADD CONSTRAINT `b_dmsp_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `b_dm` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
