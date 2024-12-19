-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 29, 2024 lúc 04:00 AM
-- Phiên bản máy phục vụ: 8.3.0
-- Phiên bản PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webth`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baivietganday`
--

DROP TABLE IF EXISTS `baivietganday`;
CREATE TABLE IF NOT EXISTS `baivietganday` (
  `idbaiviet` int NOT NULL AUTO_INCREMENT,
  `tieude` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`idbaiviet`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baivietganday`
--

INSERT INTO `baivietganday` (`idbaiviet`, `tieude`) VALUES
(11, 'MacBook Air M2 2022'),
(6, 'Dell Gaming G15 5515'),
(7, 'Acer Nitro V ANV15'),
(8, 'HP VICTUS 16-d0294TX');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `STT` int NOT NULL AUTO_INCREMENT,
  `masp` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `noidung` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ngaydang` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `giodang` char(6) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trangthai` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`STT`, `masp`, `name`, `email`, `noidung`, `ngaydang`, `giodang`, `trangthai`) VALUES
(9, 11, 'Duy Bản Laptop', 'duybanlaptop@gmail.com', 'Sản Phẩm Ok', '24/11/2024', '11:29', 'wait'),
(10, 11, 'Duy Bản', 'duybanne@gmail.com', 'Sản phẩm tốt', '25/11/2024', '21:11', 'wait');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

DROP TABLE IF EXISTS `chuyenmuc`;
CREATE TABLE IF NOT EXISTS `chuyenmuc` (
  `id` char(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tenchuyenmuc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`id`, `tenchuyenmuc`, `trangthai`) VALUES
('CM1', 'noidungchinh', 1),
('CM2', 'topseller', 1),
('CM3', 'topSale', 1),
('CM4', 'moixem', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdh`
--

DROP TABLE IF EXISTS `ctdh`;
CREATE TABLE IF NOT EXISTS `ctdh` (
  `madh` int NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `masp` int NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `giaban` int NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  KEY `madh` (`madh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdh`
--

INSERT INTO `ctdh` (`madh`, `hinhanh`, `masp`, `tensp`, `giaban`, `soluong`, `thanhtien`) VALUES
(1, 'MSI-Stealth-17.jpg', 9, 'MSI Stealth 17 GS77', 56690000, 2, '113.380.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` int NOT NULL,
  `ngaydat` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `thoigian` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `khachhang` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sdt` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tongtien` char(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `hinhthucTT` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `hinhthucGH` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ship` char(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trangthai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`madh`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `ngaydat`, `thoigian`, `username`, `khachhang`, `sdt`, `diachi`, `email`, `tongtien`, `hinhthucTT`, `hinhthucGH`, `ship`, `trangthai`) VALUES
(1, '29/11/2024', '10:48', 'duybanne', 'Duy Bản', '123', '123', 'hotro@gmail.com', '113380000', 'Tiền mặt', 'Giao hàng nhanh', '50000', 'Shipping');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

DROP TABLE IF EXISTS `kho`;
CREATE TABLE IF NOT EXISTS `kho` (
  `masp` int NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `giaban` int NOT NULL,
  `soluong_nhap` int NOT NULL,
  `soluong_ton` int NOT NULL,
  `nhacungcap` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trangthai` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`masp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`masp`, `hinhanh`, `tensp`, `giaban`, `soluong_nhap`, `soluong_ton`, `nhacungcap`, `trangthai`) VALUES
(1, 'rog-scar.jpg', ' Asus ROG Strix Scar 18', 35990000, 15, 12, 'ASUS', '1'),
(2, 'TUFGM2.jpg', 'Asus TUF Gaming FX507ZC4', 19290000, 25, 19, 'ASUS', '1'),
(11, 'Air-M2.jpg', 'MacBook Air M2', 22290000, 25, 19, 'APPLE', '1'),
(3, 'hp14s.jpg', 'HP 14-EP0112TU', 16990000, 20, 19, 'HP', '1'),
(4, 'hp15s.jpg', 'HP 15-DW3033DX 405F6UA', 8990000, 20, 20, 'HP', '1'),
(5, 'gigabyte-g5.jpg', 'GIGABYTE G5 KF5-53VN353SH', 25400000, 25, 19, 'GIGABYTE', '1'),
(6, 'dell-g15.jpg', 'Dell Gaming G15 5515', 18990000, 25, 23, 'DELL', '1'),
(7, 'nitro-v.jpg', 'Acer Nitro V ANV15', 27390000, 25, 23, 'ACER', '1'),
(8, 'HP-VICTUS-16.jpg', 'HP VICTUS 16-d0294TX', 21990000, 25, 20, 'HP', '1'),
(9, 'MSI-Stealth-17.jpg', 'MSI Stealth 17 GS77', 56690000, 25, 19, 'MSI', '1'),
(10, 'Acer-Predator-Triton.jpg', 'Acer Predator Triton 500', 54970000, 25, 25, 'ACER', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int NOT NULL,
  `tensp` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `anhdaidien` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `chuyenmuc` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mota` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `hinhanhkhac1` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `giamoi` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `giacu` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trangthai` int NOT NULL,
  PRIMARY KEY (`masp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `anhdaidien`, `chuyenmuc`, `mota`, `hinhanhkhac1`, `giamoi`, `giacu`, `trangthai`) VALUES
(11, 'MacBook Air M2 2022', 'Air-M2.jpg', 'CM1', 'Loại card đồ họa : 8 nhân GPU, 16 nhân Neural Engine. |   \r\nDung lượng RAM : 8GB.|\r\nỔ cứng : 256GB. |\r\nHệ điều hành : MacOS. |\r\nLoại CPU : Apple M2. |\r\nTrọng lượng : 1.27 kg. |\r\nKích thước màn hình : 13.6 inches.', 'Air-M2.jpg', '22.290.000', '29.990.000', 1),
(5, 'GIGABYTE G5 KF5-53VN353SH', 'gigabyte-g5.jpg', 'CM4', '', 'gigabyte-g5.jpg', '25.400.000', '27.990.000', 1),
(6, 'Dell Gaming G15 5515', 'dell-g15.jpg', 'CM1', 'Loại card đồ họa : NVIDIA® GeForce RTX™ 3050 4GB GDDR6 + AMD Radeon Graphics. |\r\nLoại CPU : AMD Ryzen 7 5800H. |\r\nDung lượng RAM : 8GB. |\r\nỔ cứng : 256GB. |\r\nTrọng lượng : 2.57 kg. |\r\nHệ điều hành : Windows. |\r\nKích thước màn hình : 15.6 inches.', 'dell-g15.jpg', '18.990.000', '20.990.000', 1),
(7, 'Acer Nitro V ANV15', 'nitro-v.jpg', 'CM1', 'Loại card đồ họa : NVIDIA GeForce RTX 4050 6GB GDDR6 VRAM. |\r\nLoại CPU : Intel Core i7-13700H. |\r\nRAM : 16GB. |\r\nỔ cứng : 512GB. |\r\nKích thước màn hình : 15.6 inches.|\r\nHệ điều hành : Windows. |\r\nTrọng lượng : 2.1 kg.', 'nitro-v.jpg', '27.390.000', '30.990.000', 1),
(8, 'HP VICTUS 16-d0294TX', 'HP-VICTUS-16.jpg', 'CM1', 'Loại card đồ họa : NVIDIA GeForce RTX 3050 4GB GDDR6. |\nDung lượng RAM : 8GB. |\nỔ cứng : 512GB. |\nLoại CPU : Intel Core i7-12700H. |\nHệ điều hành : Windows. |\nTrọng lượng : 2.46 kg. |\nKích thước màn hình : 16.1 inches.\n', 'HP-VICTUS-16.jpg', '21.990.000', '28.990.000', 1),
(9, 'MSI Stealth 17 GS77', 'MSI-Stealth-17.jpg', 'CM1', 'Intel Core i7-13700HX', 'MSI-Stealth-17.jpg', '56.690.000', '59.490.000', 1),
(10, 'Acer Predator Triton 500', 'Acer-Predator-Triton.jpg', 'CM4', 'Intel Core i7-13700HX', 'Acer-Predator-Triton.jpg', '54.970.000', '56.780.000', 1),
(4, 'HP 15-DW3033DX 405F6UA', 'hp15s.jpg', 'CM3', 'Intel Core i5-1135G7.', 'hp15s.jpg', '8.990.000', '11.400.000', 1),
(3, 'HP 14-EP0112TU', 'hp14s.jpg', 'CM2', 'Intel Core i5-1135G7.', 'hp14s.jpg', '16.990.000', '19.590.000', 1),
(1, ' Asus ROG Strix Scar 18', 'rog-scar.jpg', 'CM2', 'AMD Ryzen 9 7945HX', 'rog-scar.jpg', '35.990.000', '39.500.000', 1),
(2, 'Asus TUF Gaming FX507ZC4', 'TUFGM2.jpg', 'CM3', '', 'TUFGM2.jpg', '19.290.000', '25.590.000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `STT` int NOT NULL,
  `tenfile` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trangthai` int NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`STT`, `tenfile`, `trangthai`) VALUES
(1, 'bia_1.jpg', 1),
(2, 'bia_2.jpg', 1),
(3, 'bia_3.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `username` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` char(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sdt` char(10) NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` char(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `hoatdong` int NOT NULL,
  `loaiTK` int DEFAULT NULL,
  `trangthai` int NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `fullname`, `sdt`, `diachi`, `email`, `hoatdong`, `loaiTK`, `trangthai`) VALUES
('admin', 'admin', 'Administrator', '', '', 'laptopdb@gmail.com', 0, 1, 1),
('duybanne', '123', 'Duy Bản', '0999999999', '180 cao lỗ, p4', 'duybanne@gmail.com', 0, 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
