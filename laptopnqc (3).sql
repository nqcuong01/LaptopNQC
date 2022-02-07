-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 09:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptopnqc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `capdo` varchar(30) NOT NULL,
  `trangthai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hoten`, `username`, `password`, `sodienthoai`, `capdo`, `trangthai`) VALUES
(1, 'Nguyễn Quang Cường', 'nguyencuong', 'af92e9e8a9fd2ebea44c387cd072451d', '0394561950', 'Quản trị viên', 'online'),
(3, 'Duy Hưng', 'hungoccho', '14e1b600b1fd579f47433b88e8d85291', '1900102812', 'Quản trị viên', 'online'),
(4, 'Nguyễn Văn Vụ', 'vucau123', '96e79218965eb72c92a549dd5a330112', '0339846542', 'Cộng tác viên', 'ofline');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `thoigian` date NOT NULL,
  `noidung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `masp`, `ten`, `thoigian`, `noidung`) VALUES
(1, 'D001', 'Cuong', '2021-12-16', 'máy chạy rất êm và mượt '),
(2, 'D001', 'Vương', '2021-12-16', 'Máy này có lắp thêm ram đc không shop'),
(10, 'D001', 'nqc', '2021-12-22', 'có giảm giá không ạ'),
(35, 'D002', 'Cường', '2021-12-22', 'sản phẩm này còn hàng k shop');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `mahd`, `masp`, `soluong`, `gia`) VALUES
(3, 2, 'D002', 1, 19990000),
(4, 2, 'D001', 2, 20990000),
(5, 3, 'D001', 2, 20990000),
(6, 4, 'D003', 1, 14490000),
(7, 3, 'D001', 1, 19990000),
(8, 6, 'D001', 1, 19990000),
(10, 7, 'D001', 1, 19990000),
(11, 7, 'D004', 2, 13990000),
(12, 8, 'D001', 2, 19990000),
(13, 8, 'D003', 1, 14490000),
(14, 9, 'D001', 2, 19990000),
(15, 9, 'D003', 1, 14490000),
(16, 10, 'D001', 2, 19990000),
(17, 11, 'D002', 1, 18990000),
(18, 11, 'D001', 1, 19990000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(30) NOT NULL,
  `hinhanh` varchar(30) NOT NULL,
  `banner` varchar(30) NOT NULL,
  `trangthai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `hinhanh`, `banner`, `trangthai`) VALUES
(1, 'Dell', 'dell.png', 'banner1.png', 'Hiện'),
(2, 'Lenovo', 'lenovo.png', 'banner-lenovo.png', 'Ẩn'),
(3, 'Asus', 'asus.png', 'banner-asus.png', 'Hiện'),
(4, 'Acer', 'acer.png', 'banner-acer.png', 'Ẩn');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `ngaydat` date DEFAULT NULL,
  `ngaynhan` date DEFAULT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `tenkh`, `diachi`, `sdt`, `ngaydat`, `ngaynhan`, `trangthai`) VALUES
(1, 'Nguyễn Quang Cường', 'Ba Vì - Hà Nội', '0394561950', '2021-10-07', '2021-10-17', 1),
(2, 'Nguyễn Quang Cường', 'Hà Nội', '0123', '2021-10-10', '2021-10-20', 2),
(3, 'Vương', 'Hà Nội', '0359595959', NULL, NULL, 3),
(4, 'Minh Vương', 'Hà Nội', '012345678', NULL, NULL, 4),
(5, 'Nguyễn Quang Cường', 'Ba Vì', '0359595959', NULL, NULL, 4),
(6, 'NQC', 'Ba Vì - Hà Nội', '0359595959', NULL, NULL, 3),
(7, 'ABC', 'Ba Vì - Hà Nội', '0394561950', NULL, NULL, 1),
(8, 'test', 'test', '0359595959', '2021-10-16', '2021-10-20', 2),
(9, 'Nguyễn Quang Cường', 'Ba Vì - Hà Nội', '0394561950', '2021-10-16', '2021-10-20', 1),
(10, 'Nhóc ẹc', 'Ba Vì - Hà Nội', '0123456789', '2021-11-21', '2021-11-22', 99),
(11, 'Minh Vương123', 'test', '0123', '2021-12-13', '2021-11-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `sdt`, `password`, `diachi`) VALUES
(1, 'Nguyễn Quang Cường', '0394561950', 'cuong2001', 'Hà Nội'),
(2, 'Minh Vương', '1234567890', 'vuongngu', 'Hà Nội'),
(4, 'Duy Hưng', '0359595959', '123456', 'Phú Châu'),
(6, 'nqc', '0123', 'e10adc3949ba59abbe56e057f20f883e', 'Ba Vì');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `noidung`, `trangthai`) VALUES
(1, 'Cường', 'nguyencuong@gmail.com', 'Khu vực Hà Nội còn hàng không ạ', 1),
(2, 'Nguyễn Quang Cường', 'nguyencuong@gmail.com', 'Nội dung 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `masp` varchar(50) DEFAULT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `masp`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(7, 'D001', 'Minh Vương', 5, 'Sản phẩm đẹp với tính năng tốt.', 1621939888),
(8, 'D001', 'Donna Hubber', 1, 'Sản phẩm tồi tệ nhất, mất tiền của tôi.', 1621940010),
(9, 'D002', 'Cường', 4, 'Rất hài lòng về sản phẩm', 1639668429);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `anhsp` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `giakm` int(11) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `ocung` varchar(20) NOT NULL,
  `manhinh` float NOT NULL,
  `carddohoa` varchar(20) NOT NULL,
  `trongluong` float NOT NULL,
  `cauhinh` text DEFAULT NULL,
  `danhmucid` int(11) NOT NULL,
  `trangthai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `anhsp`, `gia`, `giakm`, `soluong`, `cpu`, `ram`, `ocung`, `manhinh`, `carddohoa`, `trongluong`, `cauhinh`, `danhmucid`, `trangthai`) VALUES
('D001', 'Dell Latitude 7420', 'a-1-1.jpg', 20990000, 19990000, 10, 'Intel Core i5', '8 Gb', 'SSD', 15.6, 'Intel HD', 1.8, '<ul>\r\n	<li><strong>Vi xử l&yacute;</strong>: Intel Core i5 1135G7, 8 nh&acirc;n/ 8 luồng</li>\r\n	<li><strong>M&agrave;n h&igrave;nh</strong>: 15.6&quot; FHD TN (1920 x 1080) chống ch&oacute;i</li>\r\n	<li><strong>Độ phủ m&agrave;u</strong>: 45% NTSC</li>\r\n	<li><strong>RAM</strong>: 8GB DDR4 bus 3200MHz (4GB liền tr&ecirc;n mainboard - N&acirc;ng cấp tối đa 12GB)</li>\r\n	<li><strong>Card đồ họa</strong>: Intel Iris Xe</li>\r\n	<li><strong>Lưu trữ</strong>: 512GB m.2 NVMe (N&acirc;ng cấp tối đa 2TB) + 1 khay 2.5&quot; trống</li>\r\n	<li><strong>Pin</strong>: 37Wh</li>\r\n	<li><strong>Kết nối ch&iacute;nh</strong>: 1 x USB-C 3.2 Gen 1, 1 x USB-A 3.2 Gen 1, 1 x USB-A 2.0, 1 x HDMI1.4, 1 x 3.5mm, 1 x microSD</li>\r\n	<li><strong>C&acirc;n nặng</strong>: 1.8kg</li>\r\n	<li><strong>Hệ điều h&agrave;nh</strong>: Windows 10 Home SL bản quyền</li>\r\n</ul>\r\n', 1, 1),
('D002', 'Asus ZenBook 14 Q407iq', 'a-2-4.jpg', 19990000, 18990000, 5, 'AMD Ryzen 5', '8 Gb', 'SSD', 15.6, 'Nvidia Geforce', 1.5, '<ul>\r\n	<li><strong>Vi xử l&yacute;</strong>: Intel Core i5 1135G7, 4 nh&acirc;n / 8 luồng</li>\r\n	<li><strong>M&agrave;n h&igrave;nh</strong>: 14.0&quot; FHD IPS (1920 x 1080) chống ch&oacute;i</li>\r\n	<li><strong>Độ phủ m&agrave;u</strong>: 100% sRGB</li>\r\n	<li><strong>RAM</strong>: 8GB LPDDR4x bus 4266 MHz</li>\r\n	<li><strong>Card đồ họa</strong>: Intel Iris Xe</li>\r\n	<li><strong>Lưu trữ</strong>: 512GB m.2 NVMe (N&acirc;ng cấp tối đa 2TB)</li>\r\n	<li><strong>Pin</strong>: 67Wh</li>\r\n	<li><strong>Kết nối ch&iacute;nh</strong>: 2 x USB-C with Thunderbolt 3, 1 x USB-A 3.1 Gen 1, 1 x microSD , 1 x HDMI</li>\r\n	<li><strong>C&acirc;n nặng</strong>: 1.17kg</li>\r\n	<li><strong>Hệ điều h&agrave;nh</strong>: Windows 10 Home bản quyền</li>\r\n	<li><strong>Phụ kiện đi k&egrave;m</strong>: T&uacute;i chống sốc Asus, USB-C to 3.5mm, USB-C to RJ-45</li>\r\n</ul>\r\n', 3, 1),
('D003', 'Lenovo IdeaPad 3 14', 'a-3-3.jpg', 14990000, 14490000, 7, 'Intel Core i3', '8 Gb', 'SSD', 14.5, 'Intel HD', 2.2, '<ul>\r\n	<li><strong>Vi xử l&yacute;</strong>: Intel Core i3-1115G1, 2 nh&acirc;n / 4 luồng</li>\r\n	<li><strong>M&agrave;n h&igrave;nh</strong>: 14.0&quot; FHD TN (1920 x 1080) chống ch&oacute;i</li>\r\n	<li><strong>Độ phủ m&agrave;u</strong>: 60% sRGB, 45% NTSC</li>\r\n	<li><strong>RAM</strong>: 8GB DDR4 bus 3200 MHz (4GB H&agrave;n tr&ecirc;n mainboad + 4GB lắp sẵn - N&acirc;ng cấp tối đa 12GB)</li>\r\n	<li><strong>Card đồ họa</strong>: Intel UHD G4</li>\r\n	<li><strong>Lưu trữ</strong>: 512GB m.2 NVMe (N&acirc;ng cấp tối đa 2TB)</li>\r\n	<li><strong>Pin</strong>: 38Wh</li>\r\n	<li><strong>Kết nối ch&iacute;nh</strong>: 1 x USB-C 3.2 Gen 1 (chỉ truyền dữ liệu), 1 x USB-A 3.2 Gen 1, 1 x USB-A 2.0, 1 x SD, 1 x HDMI 1.4, 1 x 3.5mm</li>\r\n	<li><strong>C&acirc;n nặng</strong>: 1.41 kg</li>\r\n	<li><strong>Hệ điều h&agrave;nh</strong>: Windows 10 Home Single Language bản quyền</li>\r\n</ul>\r\n', 2, 1),
('D004', 'Dell Inspiron 15 3501', 'd-2.jpg', 14990000, 13990000, 15, 'Intel Core i5', '8 Gb', 'SSD', 15.6, 'Intel HD', 2.1, '<ul>\r\n	<li><strong>Vi xử l&yacute;</strong>: Intel Core i5 1035G1, 4 nh&acirc;n / 8 luồng</li>\r\n	<li><strong>M&agrave;n h&igrave;nh</strong>: 15.6&quot; FHD (1920 x 1080) cảm ứng, chống ch&oacute;i</li>\r\n	<li><strong>Độ phủ m&agrave;u</strong>: 60% sRGB, 45% NTSC</li>\r\n	<li><strong>RAM</strong>: 8GB DDR4 bus 3200 MHz (N&acirc;ng cấp tối đa 32GB)</li>\r\n	<li><strong>Card đồ họa</strong>: Intel UHD Graphics G1</li>\r\n	<li><strong>Lưu trữ</strong>: 256GB m.2 NVMe (N&acirc;ng cấp tối đa 2TB)</li>\r\n	<li><strong>Pin</strong>: 42Wh</li>\r\n	<li><strong>Kết nối ch&iacute;nh</strong>: 1 x USB-A 3.2 Gen 1, 2 x USB-A 2.0, 1 x SD, 1 x HDMI, 1 x RJ-45</li>\r\n	<li><strong>C&acirc;n nặng</strong>: 1.96kg</li>\r\n	<li><strong>Hệ điều h&agrave;nh</strong>: Windows 10 Home</li>\r\n</ul>\r\n', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_mahd` (`mahd`),
  ADD KEY `index_masp` (`masp`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `inx_masp` (`masp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `danhmucid` (`danhmucid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`danhmucid`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
