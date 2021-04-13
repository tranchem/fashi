-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2021 lúc 05:56 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `MaKH` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoiDung` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KichHoat` int(11) DEFAULT NULL CHECK (`KichHoat` in (0,1)),
  `Ngay` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_cmt`
--

INSERT INTO `b_cmt` (`id`, `MaKH`, `NoiDung`, `KichHoat`, `Ngay`) VALUES
(2, 'KH001', 'xau qua', 0, '2021-04-12'),
(3, 'KH001', 'cung dc', 1, '0000-00-00');

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
-- Cấu trúc bảng cho bảng `b_dmsp`
--

CREATE TABLE `b_dmsp` (
  `MaSP` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DVT` char(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SL` int(10) DEFAULT NULL,
  `Anh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_dmsp`
--

INSERT INTO `b_dmsp` (`MaSP`, `TenSP`, `DonGia`, `MoTa`, `DVT`, `SL`, `Anh`) VALUES
('SP002', 'Sắt', 30000, '', 'kg', 5, '3CE5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_hdb`
--

CREATE TABLE `b_hdb` (
  `SoHDB` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngay` date DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `MaNV` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaKH` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `b_hdb`
--

INSERT INTO `b_hdb` (`SoHDB`, `Ngay`, `TongTien`, `MaNV`, `MaKH`) VALUES
('HD001', '2021-03-23', 300000, 'NV001', 'NV001');

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
-- Chỉ mục cho bảng `b_cmt`
--
ALTER TABLE `b_cmt`
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `b_cthdb`
--
ALTER TABLE `b_cthdb`
  ADD UNIQUE KEY `SoHDB` (`SoHDB`);

--
-- Chỉ mục cho bảng `b_dmsp`
--
ALTER TABLE `b_dmsp`
  ADD UNIQUE KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `b_hdb`
--
ALTER TABLE `b_hdb`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
