-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2021 lúc 05:26 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pdo_blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL,
  `title_about` varchar(255) NOT NULL,
  `content_about` text NOT NULL,
  `image_about` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `title_about`, `content_about`, `image_about`) VALUES
(1, 'Welcome To Brian Store', '<p style=\"text-align:justify\">Với mong muốn ph&aacute;t triển thương hiệu Việt bằng nội lực, Brian Store đ&atilde; ch&uacute; trọng v&agrave;o thiết kế v&agrave; sản xuất nội thất trong nước. Danh mục sản phẩm của Brian Store thường xuy&ecirc;n được đổi mới v&agrave; cập nhật, li&ecirc;n tục cung cấp cho kh&aacute;ch h&agrave;ng c&aacute;c d&ograve;ng sản phẩm theo xu hướng mới nhất. Do ch&iacute;nh người Việt thiết kế v&agrave; sản xuất, nội thất thương hiệu Brian Store lu&ocirc;n ph&ugrave; hợp với cuộc sống &Aacute; Đ&ocirc;ng, đem đến sự tiện nghi ho&agrave;n hảo trong mọi kh&ocirc;ng gian sống.</p>\r\n\r\n<p style=\"text-align:justify\">Hơn 70% sản phẩm của Brian Store được thiết kế, sản xuất bởi đội ngũ nh&acirc;n vi&ecirc;n c&ugrave;ng c&ocirc;ng nh&acirc;n ưu t&uacute; với nh&agrave; m&aacute;y c&oacute; cơ sở vật chất hiện đại bậc nhất tại Việt Nam. Sự kh&aacute;c biệt của Brian Store ch&iacute;nh l&agrave; s&aacute;ng tạo nội thất th&agrave;nh phong c&aacute;ch ri&ecirc;ng, ph&ugrave; hợp với nhu cầu kh&aacute;ch h&agrave;ng.</p>\r\n', 'single-blog.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'user', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) UNSIGNED NOT NULL,
  `title_category_post` varchar(100) NOT NULL,
  `desc_category_post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`) VALUES
(5, 'Thiết kế nội thất', 'Phong cách thiết kế nội thất'),
(6, 'Nội thất nhà - phố', 'Thiết kế nội thất nhà phố – biệt thự');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `title_category_product` varchar(100) NOT NULL,
  `desc_category_product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category_product`, `title_category_product`, `desc_category_product`) VALUES
(26, 'Giường ngủ', 'Giường cao cấp'),
(27, 'Ghế sofa', 'ghế cao cấp '),
(28, 'Đèn chùm ', 'Đèn chùm cao cấp '),
(29, 'Tranh  tường', 'Tranh nổi 3D treo tường cao cấp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_comment` int(11) NOT NULL,
  `name_comment` varchar(255) NOT NULL,
  `email_comment` varchar(200) NOT NULL,
  `content_comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `image_comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id_customer` int(11) NOT NULL,
  `name_customer` varchar(255) NOT NULL,
  `phone_customer` varchar(100) NOT NULL,
  `email_customer` varchar(200) NOT NULL,
  `password_customer` varchar(100) NOT NULL,
  `address_customer` varchar(200) NOT NULL,
  `image_customer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`id_customer`, `name_customer`, `phone_customer`, `email_customer`, `password_customer`, `address_customer`, `image_customer`) VALUES
(1, 'Anh', '0934753863', 'anh@gmail.com', 'b710b378de7ef5133b97bd2c9464ffe3', 'hà nội', 'kiet.jpg'),
(2, 'brian ', '0123456789', 'brian@gmail.com', '202cb962ac59075b964b07152d234b70', 'hà nội', 'giangthin.png'),
(3, 'Thu Phương', '0123456743', 'thuphuong@gmail.com', '202cb962ac59075b964b07152d234b70', 'Bắc Từ Liên - Hà Nội', 'giangthin.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `code_order` varchar(100) NOT NULL,
  `date_order` varchar(100) NOT NULL,
  `status_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `code_order`, `date_order`, `status_order`) VALUES
(1, '2582', '01/10/2021 11:36:58am', 0),
(2, '4807', '01/10/2021 12:08:54pm', 0),
(3, '3012', '01/10/2021 12:13:53pm', 1),
(4, '7360', '01/10/2021 12:19:18pm', 1),
(5, '5052', '18/10/2021 04:07:18pm', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id_order_details` int(11) NOT NULL,
  `code_order` varchar(100) NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `quantity_product_details` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sdt` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `noidung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id_order_details`, `code_order`, `id_product`, `quantity_product_details`, `name`, `sdt`, `email`, `diachi`, `noidung`) VALUES
(1, '4807', 19, 1, 'Hiếu', '012345', 'hiu123', '123 xuân định', 'đặt hàng '),
(2, '4807', 21, 1, 'Hiếu', '012345', 'hiu123', '123 xuân định', 'đặt hàng '),
(3, '3012', 19, 1, 'Nguyễn Diệu Linh ', '0986743746', 'LinhND@gmail.com', 'Phú Thượng - Hà Nội', 'nhẹ tay '),
(4, '3012', 21, 1, 'Nguyễn Diệu Linh ', '0986743746', 'LinhND@gmail.com', 'Phú Thượng - Hà Nội', 'nhẹ tay '),
(7, '5052', 22, 1, 'Phùng Văn Hiệp', '0354574888', 'hiep@gmail.com', 'Vĩnh Phúc', 'xin nhẹ tay '),
(8, '5052', 20, 1, 'Phùng Văn Hiệp', '0354574888', 'hiep@gmail.com', 'Vĩnh Phúc', 'xin nhẹ tay '),
(9, '5052', 19, 4, 'Phùng Văn Hiệp', '0354574888', 'hiep@gmail.com', 'Vĩnh Phúc', 'xin nhẹ tay ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `content_post` text NOT NULL,
  `image_post` varchar(200) NOT NULL,
  `id_category_post` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_category_post`) VALUES
(8, ' Thiết kế nội thất biệt thự phong cách hiện đại', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Ph&ograve;ng kh&aacute;ch l&agrave; căn ph&ograve;ng quan trọng nhất trong ng&ocirc;i nh&agrave; n&oacute; thường chiếm diện t&iacute;ch lớn nhất, thể hiện đẳng cấp của chủ nh&agrave;, l&agrave; nơi tiếp đ&oacute;n kh&aacute;ch ch&iacute;nh v&igrave; thế căn ph&ograve;ng kh&aacute;ch cần được sắp xếp một c&aacute;ch h&ograve;a h&ograve;a đẹp mắt nhất.</span></span></h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"thiet-ke-noi-that-biet-thu-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-hien-dai-1.jpg\" style=\"height:400px; width:750px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Ph&ograve;ng kh&aacute;ch được thiết kế theo xu hướng hiện đại</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">M&agrave;u sắc cho&nbsp;<a href=\"https://kfa.vn/thiet-ke-phong-khach-biet-thu/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>thiết kế nội thất ph&ograve;ng kh&aacute;ch biệt thự hiện đại</strong></a>, những gam m&agrave;u thường được sử dụng như đen, trắng hay m&agrave;u trung t&iacute;nh&hellip; để tạo cảm gi&aacute;c trang nh&atilde; cho ph&ograve;ng kh&aacute;ch nh&agrave; bạn. Tường nh&agrave; thường sử dụng m&agrave;u kem hay trắng kết hợp h&agrave;i h&ograve;a với những mảng tường ốp đ&aacute; tăng th&ecirc;m sự trẻ trung v&agrave; sinh động cho căn ph&ograve;ng kh&aacute;ch. Ngo&agrave;i ra, thiết kế nội thất ph&ograve;ng kh&aacute;ch đẹp với gạch, đ&aacute; khối v&agrave; gỗ l&agrave; vật liệu l&yacute; tưởng ph&ugrave; hợp với những gam m&agrave;u trung t&iacute;nh, nhẹ nh&agrave;ng. C&acirc;n bằng m&agrave;u sắc v&agrave; &aacute;nh s&aacute;ng sẽ c&oacute; t&aacute;c dụng hữu hiệu tăng th&ecirc;m vẻ đẹp v&agrave; t&iacute;nh thẩm mỹ cho kh&ocirc;ng gian nh&agrave; bạn.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"thiet-ke-noi-that-biet-thu-phong-khach-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-phong-khach-hien-dai-1.jpg\" style=\"height:502px; width:750px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Nội thất ph&ograve;ng kh&aacute;ch biệt thự được bố tr&iacute; bộ sofa lớn đối diện l&agrave; kệ tivi c&ugrave;ng với đ&oacute; l&agrave; kệ trang tr&iacute; v&agrave; bức tranh điểm nhất l&agrave; chiếc đ&egrave;n ch&ugrave;m thiết kế độc đ&aacute;o. Thiết kế ph&ograve;ng kh&aacute;ch được lấy &aacute;nh s&aacute;ng tự nhi&ecirc;n từ chiếc cửa k&iacute;nh lớn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"thiet-ke-noi-that-biet-thu-phong-khach\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-sieu-sang1-1.jpg\" style=\"height:502px; width:750px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Nội thất ph&ograve;ng kh&aacute;ch biệt thự</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Thiết kế ph&ograve;ng bếp</span></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"thiet-ke-noi-that-biet-thu\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-sieu-sang13-1-1.jpg\" style=\"height:502px; width:750px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Ph&ograve;ng ăn v&agrave; ph&ograve;ng bếp được thiết kế li&ecirc;n th&ocirc;ng với ph&ograve;ng kh&aacute;ch với đầy đủ đồ nội thất tiện nghi hiện đại.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Thiết kế ph&ograve;ng ăn</span></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"thiet-ke-noi-that-biet-thu\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-sieu-sang-3-1.jpg\" style=\"height:502px; width:750px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Ph&ograve;ng ăn được thiết kế v&ocirc; c&ugrave;ng ấn tượng với chiếc đ&egrave;n trần</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Thiết kế ph&ograve;ng ngủ</span></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"Thiết kế nội thất phòng ngủ\" src=\"https://kfa.vn/wp-content/uploads/2020/08/9999-1.jpg\" style=\"height:502px; width:750px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Thiết kế nội thất ph&ograve;ng ngủ&nbsp;tinh tế ấm c&uacute;ng</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Ph&ograve;ng ngủ được thiết kế theo phong c&aacute;ch hiện đại, tinh tế v&agrave; ấm c&uacute;ng. C&ugrave;ng với sự h&agrave;i h&ograve;a về m&agrave;u sắc sử dụng những gam m&agrave;u trung t&iacute;nh l&agrave;m cho căn ph&ograve;ng trở n&ecirc;n rộng v&agrave; tho&aacute;ng hơn.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Nội thất ph&ograve;ng ngủ của căn biệt thự mang phong c&aacute;ch hiện tại thường lựa chọn những nội thất đơn giản kh&ocirc;ng qu&aacute; cầu kỳ tạo n&ecirc;n sự tinh tế thể hiện t&iacute;nh c&aacute;ch của gia chủ.</span></p>\r\n', 'p11634652883.jpg', 6),
(9, 'Thiết kế nội thất biệt thự phong cách tân cổ điển', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">1. Thiết kế ph&ograve;ng kh&aacute;ch biệt thự t&acirc;n cổ điển</span></h2>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch được thiết kế theo xu hướng t&acirc;n cổ điển cho kh&ocirc;ng gian biệt thự của gia đ&igrave;nh bạn trở n&ecirc;n vừa ấm c&uacute;ng vừa qu&yacute; tộc, tạo được điểm nhấn một c&aacute;ch đặt biệt.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"thiet-ke-noi-that-biet-thu-tan-co-dien\" src=\"https://kfa.vn/wp-content/uploads/2020/08/1448437621-thiet-ke-noi-that-biet-thu-tan-co-dien-1-1.jpg\" style=\"height:449px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Nội thất của căn ph&ograve;ng được sử dụng những gam m&agrave;u m&agrave;u trầm để to&aacute;t l&ecirc;n sự sang trọng v&agrave; qu&yacute; tộc cho kh&ocirc;ng gian</p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng gian biệt thự của bạn sẽ c&oacute; sự kh&aacute;c biệt kh&ocirc;ng giống như những căn biệt thự kh&aacute;c kh&ocirc;ng hẳn theo lối hiện đại cũng kh&ocirc;ng hẳn theo lối cổ điển m&agrave; n&oacute; l&agrave; sự h&ograve;a quyện giữa hai phong c&aacute;ch.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Thiết kế biệt thự tân cổ điển\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-tan-co-dien-3-1.jpg\" style=\"height:533px; width:750px\" /></p>\r\n\r\n<h3 style=\"text-align:justify\">2.Thiết kế ph&ograve;ng bếp</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Phòng bếp biệt thự\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-tan-co-dien-a-1-1.jpg\" style=\"height:499px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Nội thất ph&ograve;ng bếp sử dụng gam m&agrave;u trắng l&agrave;m chủ đạo to&aacute;t l&ecirc;n sự nhanh nhẹn, th&aacute;o v&aacute;t v&agrave; đảm đang của người phụ nữ khi v&agrave;o bếp.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"thiet-ke-noi-that-biet-thu-phong-an\" src=\"https://kfa.vn/wp-content/uploads/2020/08/11phong-khach-3-1024x512-1-1.jpg\" style=\"height:375px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng gian ph&ograve;ng ăn v&agrave; ph&ograve;ng bếp được thiết kế liền nhau</p>\r\n\r\n<p style=\"text-align:justify\">Phong c&aacute;ch t&acirc;n cổ điển l&agrave; sự kế thừa s&aacute;ng tạo tr&ecirc;n vốn văn h&oacute;a l&acirc;u đời, đ&oacute; l&agrave; sự cầu kỳ, l&agrave; n&eacute;t tinh tế đậm chất &Aacute; Đ&ocirc;ng kh&ocirc;ng thể trộn lẫn. Đ&acirc;y l&agrave; một lựa chọn văn h&oacute;a ho&agrave;n to&agrave;n đ&aacute;p ứng cho c&aacute;c nhu cầu về c&ocirc;ng năng cũng như lối sống hiện đại.</p>\r\n\r\n<h3 style=\"text-align:justify\">3. Thiết kế ph&ograve;ng ngủ</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Phòng ngủ biệt thự tân cổ điển\" src=\"https://kfa.vn/wp-content/uploads/2020/08/thiet-ke-noi-that-biet-thu-tan-co-dien-a-2.jpg\" style=\"height:575px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng gian ph&ograve;ng ngủ được thiết kế mang phong c&aacute;ch t&acirc;n cổ điển được thể hiện trong mỗi chi tiết nội thất bởi c&aacute;c đường cong tuyệt mỹ đến mức ho&agrave;n hảo. Những đường cong đ&oacute; chỉ đơn thuần l&agrave; những n&eacute;t lượn đầy cuốn h&uacute;t từ b&agrave;n trang điểm, tủ đồ, đến đầu giường.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"phong-ngu-tan-co-dien\" src=\"https://kfa.vn/wp-content/uploads/2020/08/phong-ngu-tan-co-dien-3-1.jpg\" style=\"height:487px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng gian ph&ograve;ng ngủ được thiết kế phong c&aacute;ch t&acirc;n cổ điển</p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng gian ph&ograve;ng ngủ sử dụng gam m&agrave;u trung t&iacute;nh tạo n&ecirc;n vẻ đẹp tinh tế v&agrave; sang trọng. Hệ thống &aacute;nh s&aacute;ng được thiết kế đầy ấn tượng gi&uacute;p căn ph&ograve;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</p>\r\n\r\n<p style=\"text-align:justify\">Thiết kế nội thất biệt thự phong c&aacute;ch t&acirc;n cổ điển v&agrave; nghệ thuật tạo điểm nhấn. Một kh&ocirc;ng gian đẹp đ&ocirc;i khi kh&ocirc;ng phải b&agrave;i tr&iacute; qu&aacute; nhiều đồ m&agrave; quan trọng tạo ra điểm nhấn quan trọng trong kh&ocirc;ng gian đ&oacute;. Bạn c&oacute; thể sử dụng ch&iacute;nh những đường n&eacute;t mềm mại, độc đ&aacute;o để l&agrave;m điểm nhấn cho kh&ocirc;ng gian biệt thự.</p>\r\n\r\n<p style=\"text-align:justify\">M&agrave;u sắc ch&iacute;nh l&agrave; yếu tố quan trọng quyết định tới thẩm mỹ của tổng thể kh&ocirc;ng gian biệt thự. Một số m&agrave;u đặc trưng của phong c&aacute;ch t&acirc;n cổ gồm: đen, đỏ đ&ocirc;, x&aacute;m, r&ecirc;u, v&agrave;ng &aacute;nh kim, trắng &hellip; m&agrave;u của tầng lớp qu&yacute; tộc v&agrave; c&oacute; sự kết hợp thay đổi h&agrave;i h&ograve;a t&ugrave;y theo sở th&iacute;ch gia chủ.</p>\r\n\r\n<p style=\"text-align:justify\">B&agrave;i tr&iacute; kh&ocirc;ng gian nội thất hợp l&yacute; để mỗi căn ph&ograve;ng c&oacute; phải sự h&agrave;i h&ograve;a với kh&ocirc;ng gian b&ecirc;n ngo&agrave;i v&agrave; đảm bảo c&ocirc;ng năng sử dụng b&ecirc;n trong. V&igrave; vậy, cần ưu ti&ecirc;n cho c&aacute;c kh&ocirc;ng gian quan trọng như ph&ograve;ng kh&aacute;ch, ph&ograve;ng ăn v&agrave; ph&ograve;ng ngủ tại c&aacute;c vị tr&iacute; c&oacute; ảnh quan b&ecirc;n ngo&agrave;i đẹp, thiết kế hướng tới thi&ecirc;n nhi&ecirc;n để mang lại gi&aacute; trị đ&iacute;ch thực cho kh&ocirc;ng gian biệt thự.</p>\r\n', 'p21634653664.jpg', 6),
(10, 'Đặc điểm nổi bật của các mẫu biệt thự biển', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Việc lựa chọn vị tr&iacute; v&agrave; địa điểm l&agrave; sự ưu ti&ecirc;n h&agrave;ng đầu cho những mẫu biệt thự biển cần được c&aacute;c chủ đầu tư t&iacute;nh to&aacute;n kỹ lưỡng để mang đến một kh&ocirc;ng gian ho&agrave;n hảo nhất.&nbsp;</span></h2>\r\n\r\n<p style=\"text-align:justify\">Th&ocirc;ng thường những mẫu biệt thự n&agrave;y thường được x&acirc;y dựng tr&ecirc;n một kh&ocirc;ng gian đắc địa của những b&atilde;i biển đẹp m&agrave; vẫn đảm bảo được yếu tố phong thủy. Mục đ&iacute;ch mang đến cho du kh&aacute;ch những trải nghiệm th&uacute; vị nhất, c&oacute; những ph&uacute;t gi&acirc;y nghỉ ngơi thư gi&atilde;n thoải m&aacute;i nhất.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Phối cảnh biệt thự biển đẹp\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-11-1.jpg\" style=\"height:500px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">D&ugrave; l&agrave; kinh doanh hay nghỉ ngơi th&igrave; mục đ&iacute;ch ch&iacute;nh của những mẫu biệt thự biển đ&oacute; l&agrave; thư gi&atilde;n v&agrave; tận hưởng cuộc sống. Bỏ qua sự ồn &agrave;o v&agrave; b&iacute; b&aacute;ch của th&agrave;nh phố v&agrave; thay v&agrave;o đ&oacute; l&agrave; một kh&ocirc;ng gian sống y&ecirc;n b&igrave;nh v&agrave; gi&uacute;p bạn lấy lại thăng bằng trong cuộc sống, tinh thần l&agrave;m việc được nh&acirc;n đ&ocirc;i v&agrave; đặc biệt sức khỏe được cải thiện r&otilde; rệt.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Biệt thự biển đẹp với phong cách hiện dại\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-dep-27-1.jpg\" style=\"height:500px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Phong c&aacute;ch hiện đại được sử dụng kh&aacute; nhiều trong những mẫu&nbsp;<strong>thiết kế biệt thự biển</strong>&nbsp;mang đến kh&ocirc;ng gian sang trọng, tiện nghi v&agrave; hiện đại với nhiều chi tiết trang tr&iacute; v&agrave; đồ nội thất nổi bật.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Biệt thự nghỉ dưỡng hiện đại tiện nghi và sang trọng\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Biet-thu-vinpearl-premium-Nha-Trang-Vung-Me-ve-dem-1.jpg\" style=\"height:422px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Chất liệu gỗ được sử dụng kh&aacute; phổ biến trong c&aacute;c mẫu thiết kế biệt thự biển khiến kh&ocirc;ng gian trở n&ecirc;n gần gũi v&agrave; th&acirc;n thiện với thi&ecirc;n nhi&ecirc;n. Những mẫu biệt thự biển đẹp kết hợp với nghỉ dưỡng thường được c&aacute;c KTS sắp xếp v&agrave; bố tr&iacute; đồ nội thất kh&aacute; nổi bật v&agrave; h&agrave;i h&ograve;a với tổng thể kh&ocirc;ng gian.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;c mẫu&nbsp;<strong>thiết kế biệt thự biển đẹp</strong>&nbsp;kh&ocirc;ng giống với c&aacute;c c&ocirc;ng tr&igrave;nh nh&agrave; ở th&ocirc;ng thường m&agrave; n&oacute; cần đảm bảo những y&ecirc;u cầu ri&ecirc;ng biệt. Phong c&aacute;ch, kh&ocirc;ng gian, thẩm mỹ v&agrave; mọi th&ocirc;ng số cần được t&iacute;nh to&aacute;n kỹ lưỡng đ&ograve;i hỏi những kĩ sư v&agrave; c&ocirc;ng nh&acirc;n c&oacute; bề d&agrave;y kinh nghiệm v&agrave; c&oacute; tr&igrave;nh độ cao</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Mẫu biệt thự biển đẹp và ấn tượng\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-15-1.jpg\" style=\"height:445px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Thiết kế biệt thự</strong>&nbsp;biển đảm bảo yếu tố phong thủy để đem lại may mắn cho chủ nh&acirc;n. Đồng thời, mang lại một kh&ocirc;ng gian nghỉ ngơi đầy đủ tiện nghi v&agrave; thoải m&aacute;i.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Mẫu thiết kế biệt thự biển ấn tượng và mới lạ\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-16-1.jpg\" style=\"height:445px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Khả năng chống chịu trước những t&aacute;c động của thi&ecirc;n nhi&ecirc;n kh&aacute; tốt để đảm bảo an to&agrave;n cho người sử dụng.</p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng n&ecirc;n x&acirc;y dựng qu&aacute; nhiều khu vui chơi giải tr&iacute; xung quanh v&igrave; loại h&igrave;nh biệt thự n&agrave;y hướng tới sự y&ecirc;n tĩnh v&agrave; thanh tho&aacute;t, nhẹ nh&agrave;ng nhưng vẫn sang trọng v&agrave; tiện nghi. Ngo&agrave;i ra, đối với những biệt thự x&acirc;y dựng cho gia đ&igrave;nh cần t&iacute;nh to&aacute;n chu đ&aacute;o v&agrave; kỹ lưỡng để tổng thể kh&ocirc;ng gian trở n&ecirc;n tươi mới v&agrave; bắt mắt, những khoảng s&acirc;n vườn d&agrave;nh cho trẻ em cũng n&ecirc;n được ch&uacute; trọng.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Mẫu biệt thự biển được thieest kế với đầy đủ sự tiện nghi và không kém phần sang trọng\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-17-1.jpg\" style=\"height:497px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Mẫu biệt thự biển được thiết kế với đầy đủ tiện nghi</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Biệt thự biển mang đến sự bình yên và tươi mới\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-28-1.jpg\" style=\"height:500px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Mẫu biệt thự biển theo phong c&aacute;ch hiện đại thể hiện sự y&ecirc;n b&igrave;nh v&agrave; tươi mới đ&uacute;ng với t&iacute;nh chất của n&oacute;</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Hệ thống ánh sáng được thiết kế hòa hảo và mang đến sự sang trọng dành cho tổng thể căn biệt thự\" src=\"https://kfa.vn/wp-content/uploads/2020/09/Mau-biet-thu-bien-19-1.jpg\" style=\"height:314px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Mẫu biệt thự biển được thiết kế với hệ thống &aacute;nh s&aacute;ng hiện đại mang đến cho tổng thể kh&ocirc;ng gian một khung cảnh l&atilde;ng mạn v&agrave; sang trọng thời thượng.</p>\r\n', 'p31634653829.jpg', 6),
(11, 'Xu hướng thiết kế nội thất biệt thự mới nhất?', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">C&oacute; thể n&oacute;i,&nbsp;<strong>thiết kế nội thất biệt thự</strong>&nbsp;ng&agrave;y c&agrave;ng được mở rộng v&agrave; trở n&ecirc;n thịnh h&agrave;nh hơn. Đồng nghĩa với điều đ&oacute;, c&aacute;c xu hướng thiết kế nội thất được ra đời. Thời điểm 2020 n&agrave;y, việc&nbsp;<strong>thiết kế nội thất biệt thự</strong>&nbsp;lại c&agrave;ng trở n&ecirc;n Hot hơn với &yacute; tưởng mở th&ecirc;m ban c&ocirc;ng, tạo kh&ocirc;ng gian nghỉ ngơi tho&aacute;ng đ&atilde;ng v&agrave; cũng g&oacute;p phần gi&uacute;p căn ph&ograve;ng trở n&ecirc;n sang trọng hơn.&nbsp;</span></h2>\r\n\r\n<p><img alt=\"thiet-ke-noi-that-biet-thu-01\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-noi-that-biet-thu-01-01-1.jpg\" style=\"height:481px; width:650px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Thiết kế nội thất để biến căn ph&ograve;ng trở n&ecirc;n sang trọng, cao qu&yacute; hơn</p>\r\n\r\n<p style=\"text-align:justify\">Nội thất của một căn biệt thự bao gồm rất nhiều thứ kh&aacute;c nhau. Bạn c&oacute; thể t&ugrave;y chọn sao cho hợp với phong c&aacute;ch của căn biệt thự nhất. B&ecirc;n cạnh đ&oacute;, cũng n&ecirc;n lựa chọn th&ecirc;m một v&agrave;i phụ kiện nhỏ, tạo &aacute;nh s&aacute;ng đẹp v&agrave; trồng th&ecirc;m c&acirc;y xanh để biến thiết kế của m&igrave;nh trở n&ecirc;n đẹp hơn, sang trọng hơn nữa nh&eacute;.&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Những lưu &yacute; khi thiết kế nội thất biệt thự</h2>\r\n\r\n<p style=\"text-align:justify\">Nếu bạn lần đầu trang tr&iacute; biệt thự của m&igrave;nh th&igrave; n&ecirc;n đọc kỹ những lưu &yacute; dưới đ&acirc;y để gi&uacute;p cho biệt thự trở n&ecirc;n h&agrave;i h&ograve;a, c&acirc;n đối hơn nh&eacute;.</p>\r\n\r\n<h3 style=\"text-align:justify\">Phải chọn nội thất hợp với phong c&aacute;ch kiến tr&uacute;c</h3>\r\n\r\n<p style=\"text-align:justify\">V&igrave; nội thất biệt thự gắn liền với kiểu d&aacute;ng, phong c&aacute;ch kiến tr&uacute;c khi thiết kế biệt thự n&ecirc;n bạn h&atilde;y chọn cho m&igrave;nh những sản phẩm nội thất th&iacute;ch hợp nhất nh&eacute;. T&ugrave;y theo phong c&aacute;ch m&agrave; mỗi người theo đuổi, c&aacute;c bạn c&oacute; thể chọn&nbsp;<strong>thiết kế biệt thự&nbsp;</strong>hiện đại như Ch&acirc;u &Acirc;u hoặc cũng c&oacute; thể thiết kế theo hướng cổ điển.&nbsp;</p>\r\n\r\n<p><img alt=\"phong-cach-thiet-ke-kien-truc\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-noi-that-biet-thu-01-02-1.jpg\" style=\"height:392px; width:650px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Chọn nội thất thiết kế ph&ugrave; hợp với phong c&aacute;ch kiến tr&uacute;c biệt thự</p>\r\n\r\n<p style=\"text-align:justify\">Mỗi phong c&aacute;ch sẽ c&oacute; những ưu điểm kh&aacute;c nhau. Đối với kiểu Ch&acirc;u &Acirc;u, bạn sẽ thể hiện được t&iacute;nh hiện đại, sang chảnh. Đối với kiểu cổ điển bạn sẽ thể hiện được sự trang nh&atilde;, nh&atilde; nhặn. Kh&ocirc;ng chỉ vậy, c&aacute;c bạn cũng n&ecirc;n để &yacute; đến m&agrave;u sắc của c&aacute;c sản phẩm nội thất để mang lại sự h&agrave;i h&ograve;a về cả bố cục lẫn m&agrave;u sắc nh&eacute;.</p>\r\n\r\n<h3 style=\"text-align:justify\">Lưu &yacute; về mặt phong thủy</h3>\r\n\r\n<p style=\"text-align:justify\">Một trong những điều kh&aacute; quan trọng khi<strong>&nbsp;thiết kế biệt thự&nbsp;</strong>ch&iacute;nh l&agrave; phong thủy. Mỗi một kh&ocirc;ng gian, mỗi một phong c&aacute;ch kiểu d&aacute;ng thiết kế đều li&ecirc;n quan đến phong thủy. Do đ&oacute;, trước khi mua một sản phẩm g&igrave; v&agrave; đặt n&oacute; trong biệt thự như thế n&agrave;o bạn cũng cần t&igrave;m hiểu thật kỹ về mặt phong thủy.</p>\r\n\r\n<p style=\"text-align:justify\">Bạn c&oacute; thể nhờ c&aacute;c thầy coi phong thủy để hiểu r&otilde; hơn về vị tr&iacute; đặt nội thất trong nh&agrave; nh&eacute;. Phong thủy đối với ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ hay ph&ograve;ng bếp rất kh&aacute;c nhau. Do đ&oacute;, việc lựa chọn sản phẩm sao cho ph&ugrave; hợp với phong thủy chắc chắn bạn cần phải nhờ đến người chuy&ecirc;n coi phong thủy nh&agrave; ở, biệt thự.</p>\r\n\r\n<p><img alt=\"phong-thuy-trong-thiet-ke\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-noi-that-biet-thu-01-03-1.jpg\" style=\"height:482px; width:650px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Phong thủy l&agrave; yếu tố quan trọng v&agrave; mang sự kh&aacute;c nhau trong mỗi khu vực của ng&ocirc;i nh&agrave;</p>\r\n\r\n<h3 style=\"text-align:justify\">&Aacute;nh s&aacute;ng cũng l&agrave; một yếu tố quan trọng</h3>\r\n\r\n<p style=\"text-align:justify\">Để tạo được độ thẩm mỹ cho biệt thự, bạn cần phải quan t&acirc;m đến yếu tố &aacute;nh s&aacute;ng. Tạo được m&agrave;u sắc, &aacute;nh s&aacute;ng th&iacute;ch hợp cũng sẽ gi&uacute;p cho căn ph&ograve;ng của bạn trở n&ecirc;n đẹp v&agrave; tr&agrave;n đầy sức sống hơn. B&ecirc;n cạnh đ&oacute;, khi c&oacute; &aacute;nh s&aacute;ng len lỏi tự nhi&ecirc;n, th&iacute;ch hợp cũng sẽ gi&uacute;p cho căn biệt thự của bạn tho&aacute;ng kh&iacute; hơn nữa.</p>\r\n\r\n<p style=\"text-align:justify\">Ch&iacute;nh v&igrave; thế, khi mua c&aacute;c sản phẩm nội thất như ghế sofa, tủ,&hellip; c&aacute;c bạn cần phải đặt ở chỗ th&iacute;ch hợp, kh&ocirc;ng che chắn đi &aacute;nh s&aacute;ng nh&eacute;. Bạn cũng c&oacute; thể tạo th&ecirc;m &aacute;nh s&aacute;ng cho căn nh&agrave; bằng c&aacute;ch sử dụng đ&egrave;n ch&ugrave;m, đ&egrave;n treo tường. Những loại đ&egrave;n n&agrave;y cũng g&oacute;p phần tạo n&ecirc;n t&iacute;nh sang trọng cho căn biệt thự của bạn nữa đ&oacute; nh&eacute;.</p>\r\n\r\n<p><img alt=\"anh-sang-trong-thiet-ke\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-noi-that-biet-thu-01-04-1.jpg\" style=\"height:345px; width:650px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&Aacute;nh s&aacute;ng cũng l&agrave; một yếu tố quan trọng đến biệt thự</p>\r\n\r\n<h2 style=\"text-align:justify\">Bạn đ&atilde; bao giờ nghe đến Kfa &ndash; đơn vị thiết kế nội thất h&agrave;ng đầu?</h2>\r\n\r\n<p style=\"text-align:justify\">Nếu bạn cũng đang t&igrave;m kiếm một đơn vị&nbsp;<strong>thiết kế nội thất biệt thự&nbsp;</strong>hiện đại, sang trọng v&agrave; tạo dựng được t&iacute;nh độc đ&aacute;o, h&agrave;i h&ograve;a cho căn ph&ograve;ng. Th&igrave; c&oacute; thể gh&eacute; thăm xưởng sản xuất nội thất Kfa. Đ&acirc;y l&agrave; một trong những đơn vị đ&atilde; c&oacute; th&acirc;m ni&ecirc;n nhiều năm trong nghề, tạo được độ tin cậy v&agrave; chuy&ecirc;n nghiệp cao.</p>\r\n\r\n<h3 style=\"text-align:justify\">L&agrave; nơi thiết kế nội thất chuy&ecirc;n nghiệp, uy t&iacute;n</h3>\r\n\r\n<p style=\"text-align:justify\">Đến với Kfa, bạn sẽ được tư vấn&nbsp;<strong>thiết kế biệt thự</strong>&nbsp;theo nhiều phong c&aacute;ch kh&aacute;c nhau. Kfa sở hữu cả một đội ngũ tư vấn, thiết kế chuy&ecirc;n nghiệp được tuyển chọn kỹ c&agrave;ng. Do đ&oacute;, trong qu&aacute; tr&igrave;nh thiết kế, nếu c&oacute; bất kỳ vấn đề g&igrave; thắc mắc, bạn c&oacute; thể li&ecirc;n hệ, c&aacute;c bạn nh&acirc;n vi&ecirc;n sẽ giải đ&aacute;p một c&aacute;ch nhiệt t&igrave;nh nhất nh&eacute;.</p>\r\n\r\n<p><img alt=\"cong-ty-thi-cong-thiet-ke-biet-thu\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-noi-that-biet-thu-01-05-1.jpg\" style=\"height:382px; width:650px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Một trong những điểm nổi bật nhất của Kfa đ&oacute; ch&iacute;nh l&agrave; mang đến gi&aacute; cả hợp l&yacute;, c&oacute; t&iacute;nh cạnh tranh cao. Khi đồng h&agrave;nh c&ugrave;ng Kfa, bạn sẽ được b&aacute;o gi&aacute; một c&aacute;ch r&otilde; r&agrave;ng, c&oacute; hợp đồng đầy đủ. B&ecirc;n cạnh đ&oacute;, Kfa cũng c&oacute; những ch&iacute;nh s&aacute;ch bảo h&agrave;nh l&acirc;u năm, đảm bảo cho bạn c&oacute; thể an t&acirc;m hơn khi sử dụng dịch vụ. Dưới đ&acirc;y ch&iacute;nh l&agrave; th&ocirc;ng tin để bạn li&ecirc;n hệ với Kfa nh&eacute;:</p>\r\n', 'p41634654035.jpg', 6),
(12, 'Đặc điểm của phong cách nội thất hiện đại ?', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">So với c&aacute;c phong c&aacute;ch nội thất kh&aacute;c th&igrave;&nbsp;<strong>nội thất hiện đại</strong>&nbsp;kh&aacute; đơn giản. Thay v&igrave; những chi tiết rườm r&agrave;,&nbsp;<strong>thiết kế nội thất hiện đại</strong>&nbsp;sẽ sử dụng c&aacute;c mảng v&agrave; khối tạo n&ecirc;n kh&ocirc;ng gian nội thất. Qua đ&oacute; gi&uacute;p căn nh&agrave; trở n&ecirc;n tho&aacute;ng đ&atilde;ng v&agrave; tận dụng tối đa c&ocirc;ng năng. Cụ thể đặc điểm của phong c&aacute;ch nội thất n&agrave;y được thể hiện qua c&aacute;c yếu tố sau:</span></h2>\r\n\r\n<h3 style=\"text-align:justify\">Về m&agrave;u sắc</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"mau-sac-thiet-ke-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/mau-sac-thiet-ke-hien-dai-1.jpg\" style=\"height:507px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Nếu như phong c&aacute;ch cổ điển sử dụng sắc trầm, cũ l&agrave;m chủ đạo th&igrave; phong c&aacute;ch hiện đại hướng đến những m&agrave;u sắc tươi mới. Thực tế, với mỗi m&agrave;u sắc sẽ thể hiện một phong c&aacute;ch với c&aacute; t&iacute;nh ri&ecirc;ng. Do đ&oacute;, phong c&aacute;ch hiện đại hướng tới sự tươi mới n&ecirc;n m&agrave;u sắc chủ đạo thường l&agrave; m&agrave;u trắng. Qua đ&oacute;, thể hiện sự trang nh&atilde; v&agrave; mới mẻ trong kh&ocirc;ng gian.</p>\r\n\r\n<p style=\"text-align:justify\">Đồng thời, m&agrave;u v&agrave;ng cũng l&agrave; m&agrave;u sắc được sử dụng nhiều trong&nbsp;<strong>thiết kế nội thất hiện đại</strong>. Đ&acirc;y l&agrave; m&agrave;u sắc thể hiện sự ấm &aacute;p v&agrave; hiền h&ograve;a. Ngo&agrave;i ra, nếu sử dụng m&agrave;u xanh sẽ mang tới sự gần gũi với thi&ecirc;n nhi&ecirc;n&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">Như vậy c&oacute; thể thấy, mỗi m&agrave;u sắc sẽ mang đến một th&ocirc;ng điệp, &yacute; nghĩa ri&ecirc;ng. V&igrave; vậy, bạn cần x&aacute;c định được m&agrave;u chủ đạo của ng&ocirc;i nh&agrave; từ đ&oacute; mới lựa chọn m&agrave;u nội thất để kh&ocirc;ng gian h&agrave;i h&ograve;a nhất. Bởi nếu chọn bừa kh&ocirc;ng c&oacute; sự kết hợp sẽ khiến ng&ocirc;i nh&agrave; bạn trở n&ecirc;n kh&ocirc;ng sang trọng, rối mắt v&agrave; kh&ocirc;ng hợp phong thủy. Đ&oacute; cũng l&agrave; l&yacute; do v&igrave; sao n&ecirc;n thu&ecirc; đơn vị chuy&ecirc;n thiết kế nội thất.</p>\r\n\r\n<h3 style=\"text-align:justify\">Về nội thất trong nh&agrave;</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"noi-that-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/noi-that-hien-dai-1.jpg\" style=\"height:359px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Th&ocirc;ng thường, với&nbsp;<strong>phong c&aacute;ch nội thất hiện đại</strong>&nbsp;th&igrave; đồ nội thất lựa chọn bạn n&ecirc;n hướng đến c&ocirc;ng năng l&agrave; chủ yếu. Đồng thời, những đồ n&agrave;y cũng cần đơn giản thanh tho&aacute;t với m&agrave;u sắc tương phản mạnh. Ngo&agrave;i ra, khi sắp xếp th&igrave; c&aacute;c bề mặt của đồ nội thất phải được đ&aacute;nh b&oacute;ng, mịn m&agrave;ng. Hơn thế, c&aacute;c chi tiết c&agrave;ng đơn giản v&agrave; gọn g&agrave;ng sẽ c&agrave;ng tốt.</p>\r\n\r\n<p style=\"text-align:justify\">B&ecirc;n cạnh đ&oacute;, đồ nội thất hiện đại l&agrave; những đồ mang t&iacute;nh chất c&ocirc;ng nghiệp v&agrave; m&aacute;y m&oacute;c. Đơn giản như&nbsp;<strong>nội thất gỗ hiện đại</strong>&nbsp;gồm: Kệ Tivi, v&aacute;ch gỗ, trần thạch cao, tủ trang tr&iacute;, s&agrave;n gỗ&hellip; H&atilde;y lựa chọn c&aacute;c nội thất được l&agrave;m từ những m&aacute;y m&oacute;c hiện đại, bởi như vậy mới gọi l&agrave;&nbsp;<strong>nội thất hiện đại</strong>.</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i ra, khi lựa chọn r&egrave;m cho ng&ocirc;i nh&agrave; của m&igrave;nh bạn c&oacute; thể chọn loại tự động, được sản xuất c&ocirc;ng nghiệp hoặc những sợi dệt c&ocirc;ng nghiệp&hellip; Lưu &yacute;, nếu chọn&nbsp;<strong>nội thất gỗ hiện đại&nbsp;</strong>th&igrave; chọn những sản phẩm c&oacute; đường thẳng, cong nhẹ nh&agrave;ng&hellip;</p>\r\n\r\n<h3 style=\"text-align:justify\">Về kh&ocirc;ng gian nh&agrave;</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"khong-gian-nha-noi-that-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/khong-gian-nha-noi-that-hien-dai-1.jpg\" style=\"height:482px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Trong phong c&aacute;ch thiết kế nội thất hiện đại, kh&ocirc;ng gian mở li&ecirc;n th&ocirc;ng nhau c&oacute; chủ &yacute; đang được ứng dụng nhiều nhất. C&oacute; thể thiết kế theo hướng ph&ograve;ng kh&aacute;ch với ph&ograve;ng bếp tiếp nối nhau. Hoặc kết hợp &ldquo;2 trong 1&rdquo; để tiết kiệm diện t&iacute;ch với những ng&ocirc;i nh&agrave; nhỏ.</p>\r\n\r\n<h3 style=\"text-align:justify\">Về &aacute;nh s&aacute;ng trong ng&ocirc;i nh&agrave;</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"anh-sang-noi-that-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/anh-sang-noi-that-hien-dai-1.jpg\" style=\"height:407px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&Aacute;nh s&aacute;ng tự nhi&ecirc;n l&agrave; yếu tố quan trọng cần được ch&uacute; &yacute; trong một kh&ocirc;ng gian hiện đại. H&atilde;y tận dụng tối đa việc thiết kế cửa sổ v&agrave; bố tr&iacute; r&egrave;m sao cho hợp l&yacute; để &aacute;nh s&aacute;ng c&oacute; thể xuy&ecirc;n qua. Như vậy, bạn sẽ cảm thấy thoải m&aacute;i hơn trong ng&ocirc;i nh&agrave; của m&igrave;nh.</p>\r\n\r\n<h3 style=\"text-align:justify\">Về vật liệu sử dụng</h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"vat-lieu-noi-that-hien-dai\" src=\"https://kfa.vn/wp-content/uploads/2020/08/vat-lieu-noi-that-hien-dai-1.jpg\" style=\"height:462px; width:750px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Như đ&atilde; n&oacute;i ở tr&ecirc;n, vật liệu ch&iacute;nh được d&ugrave;ng trong nội thất hiện đại sẽ được sản xuất chủ yếu từ c&ocirc;ng nghiệp như: K&iacute;nh, b&ecirc; t&ocirc;ng, gỗ tự nhi&ecirc;n hoặc gỗ c&ocirc;ng nghiệp&hellip; Trong đ&oacute;, sự tối giản trong những vật liệu n&agrave;y sẽ mang đến sự đơn giản v&agrave; hiện đại cho ng&ocirc;i nh&agrave; của bạn.</p>\r\n\r\n<p style=\"text-align:justify\">Qua đ&oacute; c&oacute; thể thấy,&nbsp;<strong>nội thất hiện đại</strong>&nbsp;được thiết kế dựa tr&ecirc;n nhiều đặc điểm kh&aacute;c nhau kết hợp. Tuy nhi&ecirc;n, kh&ocirc;ng phải bất kỳ ai cũng c&oacute; thể l&ecirc;n &yacute; tưởng v&agrave; thi c&ocirc;ng cho m&igrave;nh một kh&ocirc;ng gian nội thất như &yacute;. V&igrave; vậy, việc lựa chọn đơn vị chuy&ecirc;n thiết kế v&agrave; thi c&ocirc;ng nội thất sẽ l&agrave; giải ph&aacute;p h&agrave;ng đầu gi&uacute;p bạn sở hữu ng&ocirc;i nh&agrave; đẹp như mơ.</p>\r\n', 'p51634658081.jpg', 5),
(13, 'Những điều cần biết về thiết kế xanh', '<h2><span style=\"font-size:16px\">Kh&ocirc;ng &iacute;t người c&oacute; suy nghĩ rằng, thiết kế xanh ch&iacute;nh l&agrave; đưa c&acirc;y xanh v&agrave;o trong nh&agrave;, văn ph&ograve;ng,&hellip;..&nbsp; tuy nhi&ecirc;n đ&acirc;y l&agrave; kh&aacute;i niệm chưa thực sự đầy đủ.</span></h2>\r\n\r\n<p>Th&ocirc;ng thường, lượng kh&iacute; thải carbon từ ng&ocirc;i nh&agrave; của ch&uacute;ng ta ra m&ocirc;i trường l&agrave; rất lớn. Trong khi đ&oacute;, những c&acirc;y xanh ch&uacute;ng ta trồng trong nh&agrave; kh&ocirc;ng thể tạo ra lượng oxi đủ để trung h&ograve;a lại. Th&ecirc;m v&agrave;o đ&oacute;, lượng c&acirc;y xanh trồng trong nh&agrave; kh&ocirc;ng nhiều, đa phần l&agrave; những loại c&acirc;y cảnh nhỏ. Đ&acirc;y ch&iacute;nh l&agrave; l&yacute; do thiết kế kh&ocirc;ng gian xanh chỉ đơn thuần l&agrave; mang c&acirc;y xanh v&agrave;o trong nh&agrave; th&igrave; chưa đủ.</p>\r\n\r\n<p><img alt=\"thiet-ke-xanh\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-xanh-1.jpg\" style=\"height:434px; width:650px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Địa điểm l&agrave; yếu tố h&agrave;ng đầu</h3>\r\n\r\n<p>D&ugrave; l&agrave; nh&agrave; ở, văn ph&ograve;ng hay c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c th&igrave; vị tr&iacute; x&acirc;y dựng lu&ocirc;n l&agrave; yếu tố h&agrave;ng đầu. Muốn thiết kế v&agrave; x&acirc;y dựng nh&agrave; đạt ti&ecirc;u chuẩn &ldquo;xanh&rdquo; th&igrave; cần y&ecirc;u cầu vị tr&iacute; c&oacute; sự h&ograve;a hợp với thi&ecirc;n nhi&ecirc;n v&agrave; m&ocirc;i trường. Một ng&ocirc;i nh&agrave; &ldquo;xanh&rdquo; cần tận dụng điều kiện cảnh quan, kh&ocirc;ng kh&iacute;. Hơn nữa, kiến tr&uacute;c được đ&aacute;nh gi&aacute; cao hơn nếu cải tạo được cảnh quan.</p>\r\n\r\n<h3>Kh&ocirc;ng thể bỏ qua năng lượng tự nhi&ecirc;n</h3>\r\n\r\n<p><strong>Thiết kế nh&agrave; xanh&nbsp;</strong>cần khai th&aacute;c v&agrave; sử dụng nguồn năng lượng tự nhi&ecirc;n một c&aacute;ch hiệu quả. Một ng&ocirc;i nh&agrave; &ldquo;xanh&rdquo; kh&ocirc;ng thể thiếu sự tinh tế trong &aacute;nh s&aacute;ng tự nhi&ecirc;n, th&ocirc;ng gi&oacute; v&agrave; l&agrave;m m&aacute;t. B&ecirc;n cạnh đ&oacute; th&igrave; tiết kiệm nước cũng l&agrave; ti&ecirc;u chuẩn của&nbsp;<strong>thiết kế xanh</strong>. Những thiết kế n&agrave;y vừa gi&uacute;p tiết kiệm điện năng, vừa tiết kiệm t&agrave;i nguy&ecirc;n nước.</p>\r\n\r\n<p><img alt=\"thiet-ke-xanh-07\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-xanh-07-1.jpg\" style=\"height:434px; width:650px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Chất lượng m&ocirc;i trường trong nh&agrave; l&agrave; điều cần quan t&acirc;m</h3>\r\n\r\n<p>Kh&ocirc;ng gian xanh trong nh&agrave; l&agrave; một trong những yếu tố quan trọng h&agrave;ng đầu. Thiết kế nh&agrave; xanh cần bảo vệ kh&ocirc;ng gian b&ecirc;n trong, giảm tiếng ồn. Ngo&agrave;i ra, thiết kế nội thất cũng phải hướng tới chất liệu tự nhi&ecirc;n như gỗ, đ&aacute;. Đảm bảo kh&ocirc;ng gian đầy đủ &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; kh&ocirc;ng kh&iacute; trong l&agrave;nh.</p>\r\n\r\n<h3>Hiện đại pha lẫn phong c&aacute;ch v&agrave; bản sắc ri&ecirc;ng</h3>\r\n\r\n<p>Hiện nay, việc ứng dụng khoa học c&ocirc;ng nghệ v&agrave; thay đổi kiến tr&uacute;c ph&ugrave; hợp với xu hướng l&agrave; cần thiết. Tuy nhi&ecirc;n, theo yếu tố hiện đại vẫn phải đảm bảo phong c&aacute;ch v&agrave; dấu ấn ri&ecirc;ng. Điều n&agrave;y gi&uacute;p ng&ocirc;i nh&agrave; c&oacute; thể giữ được n&eacute;t đẹp bền bỉ qua thời gian.</p>\r\n\r\n<p><img alt=\"thiet-ke-xanh-08\" src=\"https://kfa.vn/wp-content/uploads/2020/04/thiet-ke-xanh-08-1.jpg\" style=\"height:433px; width:650px\" /></p>\r\n', 'p61634658243.jpg', 5),
(14, 'Phong cách Art Deco – Thiết kế nội thất sang trọng và hiện đại', '<h1 style=\"text-align:justify\"><span style=\"font-size:16px\">Nghệ thuật kiến tr&uacute;c lu&ocirc;n l&agrave; con tạo xoay vần từ khi l&uacute;c con chim c&oacute; tổ, con th&uacute; c&oacute; hang. Khi con người biết tiếp nhận tri thức th&igrave; c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng cũng ph&aacute;t triển để đ&aacute;p ứng nhu cầu của con người. Từ đ&acirc;y, c&aacute;c phong c&aacute;ch thiết kế nội thất mang đến kh&ocirc;ng gian sống đẹp bắt đầu phổ biến. Từ phong c&aacute;ch cổ điển l&ocirc;i cuốn giới thượng lưu. Cho đến phong c&aacute;ch hiện đại đem đến kh&ocirc;ng gian tinh tế, tiện nghi v&agrave; thoải m&aacute;i. Đặc biệt,&nbsp;<a href=\"https://kfa.vn/phong-cach-art-deco/\"><strong>phong c&aacute;ch A</strong><strong>rt&nbsp;</strong><strong>Deco</strong></a>&nbsp;nổi bật vẻ sang trọng, hiện đại rất được ưa chuộng hiện nay. Bạn đọc h&atilde;y c&ugrave;ng nội thất KFA t&igrave;m hiểu chi tiết về nghệ thuật kiến tr&uacute;c&nbsp;<strong><em>phong c&aacute;ch A</em></strong><strong><em>rt&nbsp;</em></strong><strong><em>Deco</em></strong><strong><em>&nbsp;l&agrave; g&igrave;</em></strong>&nbsp;trong b&agrave;i viết n&agrave;y.</span></h1>\r\n\r\n<h2 style=\"text-align:justify\">Bạn đ&atilde; biết g&igrave; về phong c&aacute;ch Art Deco?</h2>\r\n\r\n<p style=\"text-align:justify\">Art Deco l&agrave; một trường ph&aacute;i của chủ nghĩa chiết trung sang trọng thanh lịch kết hợp với phong c&aacute;ch hiện đại. Phong c&aacute;ch n&agrave;y l&agrave; xu hướng trang tr&iacute; ảnh hưởng đến nhiều lĩnh vực nghệ thuật v&agrave; thiết kế.&nbsp;<strong>Phong c&aacute;ch Art Deco</strong>&nbsp;kết hợp hiện đại với sự kh&eacute;o l&eacute;o v&agrave; vật liệu sang trọng mang đến kh&ocirc;ng gian sống chuẩn mực tiện nghi nhất.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Phong cách Art Deco - Thiết kế nội thất sang trọng và hiện đại\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Phong c&aacute;ch Art Deco &ndash; Thiết kế nội thất sang trọng v&agrave; hiện đại</p>\r\n\r\n<h3 style=\"text-align:justify\">Nguồn gốc h&igrave;nh th&agrave;nh phong c&aacute;ch Art Deco</h3>\r\n\r\n<p style=\"text-align:justify\">Phong c&aacute;ch n&agrave;y được bắt nguồn v&agrave;o những năm 1920 giai đoạn chiến tranh giữa 2 thế giới ở Paris. Nội thất Art Deco dần trở n&ecirc;n phổ biến tr&ecirc;n to&agrave;n thế giới cho đến năm 1930. Cho đến thực tại, những n&eacute;t đặc trưng của&nbsp;<strong><em>nội thất thiết kế theo xu hướng Art Deco</em></strong>&nbsp;vẫn c&ograve;n rất gi&aacute; trị.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Căn hộ bài trí nội thất theo phong cách này thực sự mang lại vẻ đẹp sống động, sang trọng\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-3-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Căn hộ b&agrave;i tr&iacute; nội thất theo phong c&aacute;ch n&agrave;y thực sự mang lại vẻ đẹp sống động, sang trọng</p>\r\n\r\n<h3 style=\"text-align:justify\">N&eacute;t đặc trưng trong thiết kế nội thất</h3>\r\n\r\n<p style=\"text-align:justify\">Bước v&agrave;o căn hộ&nbsp;<strong><em>phong c&aacute;ch thiết kế&nbsp;</em></strong><strong><em>Art Deco</em></strong>&nbsp;bạn sẽ thật sự ấn tượng với những đồ nội thất m&agrave;u sắc đậm, chất liệu đặc biệt. Tất cả sẽ mang đến kh&ocirc;ng gian tổng thể đồng điệu sang trọng, tinh tế v&agrave; hiện đại.</p>\r\n\r\n<h4 style=\"text-align:justify\">Về m&agrave;u sắc trong thiết kế</h4>\r\n\r\n<p style=\"text-align:justify\">Tuy rằng phong c&aacute;ch hiện đại thường sử dụng gam m&agrave;u trung t&iacute;nh để l&agrave;m r&otilde; n&eacute;t trẻ trung, nh&atilde; nhặn, hiện đại. Nhưng trong&nbsp;<strong><em>phong c&aacute;ch thiết kế Art Deco</em></strong>&nbsp;th&igrave; tone m&agrave;u đậm lại được sử dụng triệt để gi&uacute;p kh&ocirc;ng gian to&aacute;t l&ecirc;n vẻ sang trọng, đặc trưng Paris.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Tone màu đậm lại được sử dụng triệt\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-6-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Tone m&agrave;u đậm lại được sử dụng triệt</p>\r\n\r\n<p style=\"text-align:justify\">Tuy v&agrave; sở th&iacute;ch v&agrave; diện t&iacute;ch kh&ocirc;ng gian m&agrave; bạn c&oacute; thể chọn m&agrave;u sắc đa dạng cho căn hộ th&ecirc;m mới lạ. Bạn c&oacute; thể chọn m&agrave;u màu vàng retro, xanh lá c&acirc;y, xanh da trời, hay hồng pha bạc. Tất cả những m&agrave;u sắc n&agrave;y sẽ được ph&ocirc;́i bão hòa nhi&ecirc;̀u b&acirc;̣c tạo sắc thái của màu tự nhi&ecirc;n. B&ecirc;n cạnh đ&oacute; th&igrave; những m&agrave;u nhẹ nh&agrave;ng như kem sữa, trắng be hoặc những m&agrave;u sắc v&acirc;n gỗ cũng sẽ mang đến kh&ocirc;ng gian sống ho&agrave;n hảo.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Tất cả những màu sắc này sẽ được phối bão hòa nhiều bậc tạo sắc thái của màu tự nhiên\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-2-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Tất cả những m&agrave;u sắc n&agrave;y sẽ được ph&ocirc;́i bão hòa nhi&ecirc;̀u b&acirc;̣c tạo sắc thái của màu tự nhi&ecirc;n</p>\r\n\r\n<h4 style=\"text-align:justify\">Về chất liệu sử dụng</h4>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng qu&aacute; mềm mại hay nhẹ l&agrave; c&aacute;ch lựa chọn chất liệu cho mẫu kiến tr&uacute;c n&agrave;y. Đồ nội thất sử dụng theo phong c&aacute;ch n&agrave;y thường c&oacute; thiết kế đơn giản, kh&ocirc;ng kiểu c&aacute;ch nhưng lại mạnh mẽ v&agrave; cuốn h&uacute;t.</p>\r\n\r\n<p style=\"text-align:justify\">Khi lựa chọn phong c&aacute;ch nội thất n&agrave;y, bạn phải c&acirc;n nhắc tỷ lệ cho vật dụng thật kỹ lưỡng. Về thiết kế, mỹ thuật trang tr&iacute; mang &yacute; nghĩa vật chất cao, với những đường n&eacute;t, h&igrave;nh khối tinh tế n&ecirc;n sẽ chiếm nhiều diện t&iacute;ch trong kh&ocirc;ng gian.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Đồ gỗ cũng được lựa chọn nhiều\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-4-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Đồ gỗ cũng được lựa chọn nhiều</p>\r\n\r\n<p style=\"text-align:justify\">Ngược lại, nếu bạn kết hợp giữa phong c&aacute;ch hiện đại, cổ điển v&agrave; Bắc &Acirc;u th&igrave; việc lựa chọn nội thất họa tiết sẽ gi&uacute;p kh&ocirc;ng gian rộng mở hơn. Tuy nhi&ecirc;n, bầu kh&ocirc;ng kh&iacute; retro của Art Deco th&igrave; ngược lại, n&oacute; l&agrave; sự kết hợp của đồ nội thất tinh tế. Đừng ngần ngại chọn những m&oacute;n đồ nội thất lớn v&agrave; ho&agrave;nh tr&aacute;ng cho m&igrave;nh. Đặc biệt, đồ nội thất bằng gỗ qu&yacute; cũng l&agrave; lựa chọn h&agrave;ng đầu cho phong c&aacute;ch n&agrave;y.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Họa tiết trên rèm cửa, chăn ga hay sofa thường được chọn mang yếu tố hình học cho không gian thêm phần tinh tế\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-5-1.jpg\" style=\"height:556px; width:800px\" title=\"Họa tiết trên rèm cửa, chăn ga hay sofa thường được chọn mang yếu tố hình học cho không gian thêm phần tinh tế\" /></p>\r\n\r\n<p style=\"text-align:justify\">Họa tiết tr&ecirc;n r&egrave;m cửa, chăn ga hay sofa thường được chọn mang yếu tố h&igrave;nh học&nbsp;cho kh&ocirc;ng gian th&ecirc;m phần tinh tế</p>\r\n\r\n<p style=\"text-align:justify\">Đặc biệt, họa tiết tr&ecirc;n r&egrave;m cửa, chăn ga hay sofa thường được chọn mang yếu tố h&igrave;nh học&nbsp;cho kh&ocirc;ng gian th&ecirc;m phần tinh tế. Bạn c&oacute; thể tạo điểm nhấn với c&aacute;c họa tiết động vật, chim ch&oacute;c tạo sự mới lạ cho kh&ocirc;ng gian. N&eacute;t đặc trưng kh&ocirc;ng thể thiếu trong phong c&aacute;ch nội thất n&agrave;y l&agrave; sử dụng thảm trải s&agrave;n. C&aacute;c loại thảm l&ocirc;ng th&uacute; được sử dụng triệt để mang đến kh&ocirc;ng gian sang trọng, đẳng cấp.</p>\r\n\r\n<p style=\"text-align:justify\">Tham khảo th&ecirc;m &gt;&gt;&nbsp;<strong><a href=\"https://kfa.vn/phong-cach-contemporary/\" rel=\"noopener noreferrer\" target=\"_blank\">Phong c&aacute;ch nội thất Đương Đại</a></strong></p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://kfa.vn/phong-cach-scandinavian/\" rel=\"noopener noreferrer\" target=\"_blank\"><strong>Phong c&aacute;ch Scandinavian</strong></a></p>\r\n\r\n<h2 style=\"text-align:justify\">Điểm qua một v&agrave;i mẫu nội thất thiết kế theo phong c&aacute;ch Art Deco</h2>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i phong c&aacute;ch hiện đại th&igrave; nhiều căn hộ chung cư, biệt thự hiện nay cũng được b&agrave;i tr&iacute; nội thất theo xu hướng Art Deco.</p>\r\n\r\n<p style=\"text-align:justify\">Mẫu ph&ograve;ng kh&aacute;ch biệt thự được b&agrave;i tr&iacute; theo xu hướng Art Deco độc đ&aacute;o v&agrave; ấn tượng. Kh&ocirc;ng gian tiếp kh&aacute;ch li&ecirc;n th&ocirc;ng với ph&ograve;ng họp mặt cho kh&ocirc;ng c&agrave;ng th&ecirc;m th&ocirc;ng tho&aacute;ng. Ngo&agrave;i việc bố tr&iacute; nhiều cửa sổ hấp thu &aacute;nh s&aacute;ng tự nhi&ecirc;n th&igrave; bức tranh rực rỡ sắc m&agrave;u cũng l&agrave; điểm nhấn ấn tượng.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-7-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Mẫu phòng khách biệt thự được bài trí theo xu hướng Art Deco độc đáo và ấn tượng\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-8-1.jpg\" style=\"height:556px; width:800px\" title=\"Mẫu phòng khách biệt thự được bài trí theo xu hướng Art Deco độc đáo và ấn tượng\" /></p>\r\n\r\n<p style=\"text-align:justify\">Mẫu ph&ograve;ng kh&aacute;ch biệt thự được b&agrave;i tr&iacute; theo xu hướng Art Deco độc đ&aacute;o v&agrave; ấn tượng</p>\r\n\r\n<p style=\"text-align:justify\">Mẫu ph&ograve;ng ngủ đậm chất kiến tr&uacute;c Ph&aacute;p với m&agrave;u v&agrave;ng &aacute;nh kim c&ugrave;ng đồ nội thất thiết kế độc đ&aacute;o. Kh&ocirc;ng gian thư gi&atilde;n ri&ecirc;ng tư được trang tr&iacute; đầy đủ tiện nghi gồm đ&egrave;n ngủ, đ&egrave;n trần, sofa chất liệu nhung cao cấp. Th&ecirc;m một b&agrave;n tr&agrave; nhỏ đặt cạnh cửa sổ cho ph&uacute;t gi&acirc;y nghỉ ngơi trọn vẹn nhất.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-9-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Mẫu phòng ngủ đậm chất kiến trúc Pháp với màu vàng ánh kim\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-art-deco-10-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Mẫu ph&ograve;ng ngủ đậm chất kiến tr&uacute;c Ph&aacute;p với m&agrave;u v&agrave;ng &aacute;nh kim</p>\r\n', 'p71634658377.jpg', 5);
INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_category_post`) VALUES
(15, 'Khám phá những nét đặc trưng của phong cách nội thất Gothic.', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Phong c&aacute;ch nội thất Gothic thường được thiết kế. Cho c&aacute;c ng&ocirc;i nh&agrave;, trường đại học v&agrave; l&acirc;u đ&agrave;i ch&acirc;u &Acirc;u. Với dấu ấn đặc trưng của n&oacute; l&agrave; cửa sổ k&iacute;nh, tường đ&aacute;&hellip; Vậy thiết kế phong c&aacute;ch kiến tr&uacute;c n&agrave;y c&oacute; đặc điểm n&agrave;y c&oacute; g&igrave; đặc biệt?</span></h2>\r\n\r\n<h3 style=\"text-align:justify\">Lựa chọn đồ nội thất trong phong c&aacute;ch Gothic.</h3>\r\n\r\n<p style=\"text-align:justify\">Đối với&nbsp;<strong>phong c&aacute;ch nội thất Gothic</strong>, nội thất trong kh&ocirc;ng gian thường bằng gỗ, đặc biệt l&agrave; gỗ tự nhi&ecirc;n. Gỗ tự nhi&ecirc;n l&agrave; lựa chọn số 1 cho kh&ocirc;ng gian đậm chất Gothic.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-kien-truc-gothic-doc-dao-va-an-tuong-6-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Với đồ nội thất bằng gỗ, sử dụng gỗ tự nhi&ecirc;n được khắc đơn giản</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><em>Nội thất gỗ tự nhi&ecirc;n</em></strong>, đặc biệt l&agrave; gỗ sồi, được ưa chuộng trong thiết kế nội thất Gothic. Điểm xuất ph&aacute;t ch&iacute;nh l&agrave; lối kiến tr&uacute;c cổ n&ecirc;n c&aacute;c vật dụng trong phong c&aacute;ch nội thất Gothic được y&ecirc;u cầu kh&aacute; cầu kỳ. Nhiều chi tiết nhằm tăng sự sang trọng, huyền b&iacute; hơn cho kh&ocirc;ng gian.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Nội thất theo phong cách Gothic tạo cảm giác như một cung điện bí ẩn, hoàn hảo để sử dụng vào mùa đông.\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-kien-truc-gothic-doc-dao-va-an-tuong-7-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Nội thất theo phong c&aacute;ch Gothic tạo cảm gi&aacute;c như một cung điện b&iacute; ẩn, ho&agrave;n hảo để sử dụng v&agrave;o m&ugrave;a đ&ocirc;ng.</strong></p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;c kiến tr&uacute;c sư thường sử dụng r&egrave;m cửa, ga trải giường, chăn gối kết hợp với c&aacute;c họa tiết tr&ecirc;n tượng m&agrave; kh&ocirc;ng g&acirc;y ch&oacute;i mắt. Vải ren thường được chọn l&agrave;m r&egrave;m để tăng th&ecirc;m sự huyền b&iacute; cho căn ph&ograve;ng.</p>\r\n\r\n<p style=\"text-align:justify\">Sự xuất hiện của những vật dụng trang tr&iacute; như tủ n&ecirc;n lấp l&aacute;nh c&ugrave;ng với sự xuất hiện của những bức tranh treo tường. Mang đến sức sống huyền b&iacute; v&agrave; tăng hiệu ứng thẩm mỹ cho những kh&ocirc;ng gian kh&aacute;c với&nbsp;<strong>phong c&aacute;ch thiết kế nội thất</strong>&nbsp;kh&aacute;c.</p>\r\n\r\n<h3 style=\"text-align:justify\">Lựa chọn m&agrave;u sắc trong phong c&aacute;ch Gothic.</h3>\r\n\r\n<p style=\"text-align:justify\">Đối với phong c&aacute;ch nội thất Gothic th&igrave; những chi tiết dễ nhận thấy l&agrave; những m&aacute;i v&ograve;m. Sử dụng gam m&agrave;u tối v&agrave; dầm trần bằng gỗ.</p>\r\n\r\n<p style=\"text-align:justify\">Ng&ocirc;i nh&agrave; c&oacute; nội thất theo phong c&aacute;ch Gothic thường được bao quanh bởi những bức tường đen. Đ&acirc;y cũng l&agrave; t&ocirc;ng m&agrave;u chủ đạo trong kh&ocirc;ng gian mang hơi hướng Gothic.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-kien-truc-gothic-doc-dao-va-an-tuong-10-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>M&agrave;u sắc tường của phong c&aacute;ch kiến ​​tr&uacute;c Gothic thường đỏ, t&iacute;m, v&agrave;ng&hellip;</strong></p>\r\n\r\n<p style=\"text-align:justify\">Để tạo ra m&agrave;u sơn đẹp cho ng&ocirc;i nh&agrave;, gia chủ thường phải sơn kh&aacute; nhiều lớp sơn l&ecirc;n tường. Hơn nữa, m&agrave;u đen huyền b&iacute; gi&uacute;p căn ph&ograve;ng của bạn trở n&ecirc;n gọn g&agrave;ng. Ngo&agrave;i ra, t&ugrave;y theo sở th&iacute;ch v&agrave; mong muốn, bạn cũng c&oacute; thể lựa chọn những gam m&agrave;u tối kh&aacute;c, kh&ocirc;ng nhất thiết phải l&agrave; m&agrave;u đen.</p>\r\n\r\n<p style=\"text-align:justify\">M&agrave;u đỏ thẫm cũng l&agrave; một m&agrave;u phổ biến trong phong c&aacute;ch nội thất Gothic. Đ&acirc;y l&agrave; sự kết hợp giữa m&agrave;u của b&oacute;ng tối v&agrave; m&agrave;u đỏ thẫm. C&agrave;ng l&agrave;m tăng th&ecirc;m n&eacute;t huyền b&iacute; cho kiến tr&uacute;c Gothic.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-kien-truc-gothic-doc-dao-va-an-tuong-8-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">B&ecirc;n cạnh đ&oacute;, những gam m&agrave;u như xanh đen, t&iacute;m than cũng kh&aacute; ph&ugrave; hợp khi thiết kế nh&agrave; đẹp theo phong c&aacute;ch Gothic. Nếu bạn muốn c&oacute; một n&eacute;t chấm ph&aacute; kh&aacute;c biệt hơn, h&atilde;y kết hợp với m&agrave;u hồng v&agrave; đen để gi&uacute;p mang lại n&eacute;t quyến rũ mới cho ng&ocirc;i nh&agrave; của bạn.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://kfa.vn/wp-content/uploads/2020/11/phong-cach-kien-truc-gothic-doc-dao-va-an-tuong-11-1.jpg\" style=\"height:556px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\">H&atilde;y sử dụng th&ecirc;m những vật dụng trang tr&iacute;: Như thảm trải s&agrave;n, r&egrave;m cửa sổ bằng nhung mềm mại. Tấm s&agrave;n được l&aacute;t bằng gạch men, đ&aacute; hoặc gỗ cứng m&agrave;u đen tương phản rất tốt trong&nbsp;<strong>phong c&aacute;ch nội thất Gothic</strong>.</p>\r\n', 'p81634658498.jpg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `title_product` varchar(225) NOT NULL,
  `price_product` varchar(100) NOT NULL,
  `discount_product` int(11) NOT NULL,
  `price_discount_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `quantity_product` int(10) NOT NULL,
  `image_product` varchar(100) NOT NULL,
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `hot_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `discount_product`, `price_discount_product`, `desc_product`, `quantity_product`, `image_product`, `id_category_product`, `hot_product`) VALUES
(2, 'product1', '1000000', 0, '0', 'Giường ngủ cao cấp Tommy ngọc trai S-6824B với vẻ ngoài sang trọng và cuốn hút.', 50, 'giuong1.jpg', 26, 0),
(3, 'Giường tròn cao cấp ', '30000000', 0, '0', 'Giường tròn cách tân mới đơn giản ', 10, 'giuong2.jpg', 26, 0),
(5, 'Đèn trùm ', '8000000', 0, '0', 'đèn chùm cao cấp ', 30, 'denchum1.jpg', 28, 0),
(7, 'product3', '1000000', 0, '0', 'product3', 50, 'giuong11632335205.jpg', 27, 0),
(8, 'product4', '1000000', 0, '0', 'product4', 50, 'giuong31632340918.jpg', 27, 0),
(10, 'Tranh sắt treo tường hình lá sen', '20000000', 0, '0', 'Tranh Sắt Decor Treo Tường Hot Nhất 2021\r\n\r\nChi tiết sản phẩm\r\n\r\n- Kích thước : Mã BS660 size 110CM*67CM , Mã BS661 size 126CM*66CM\r\n\r\n- Chất liệu: Thép mạ sơn tĩnh điện 3 lớp, mạ vàng và được phủ thêm 1 lớp sơn bóng bảo vệ (giúp màu bền đẹp tối thiểu 10 năm và sơn không bị phồng rộp như phiên bản bình thường)\r\n\r\n- Bao bì: Đóng gói chống va đập 100%\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, .....', 50, 't21632799364.jpg', 29, 0),
(11, 'Tranh  lá tim', '1000000', 0, '0', 'Tranh sắt nghệ thuật được đề cao không chỉ bởi hình dáng, chi tiết bắt mắt mà còn vì tính ứng dụng cao của nó. Nếu tường nhà bạn có những mảng bong tróc xấu xí, tranh sắt treo tường có thể trở thành vị cứu tinh của bạn. Hoặc chỉ đơn giản là bạn dùng nó để lấp đầy khoảng trống đơn điệu, nhàm chán của bức tường.', 50, 't31632802947.jpg', 29, 0),
(12, 'Tranh mẫu đơn ', '8000000', 0, '0', 'Tranh sắt nghệ thuật là một loại tranh treo tường dùng để trang trí phòng, nơi làm việc, cửa hàng,…Được làm từ sắt thiết kế uốn, tạo kiểu dáng nghệ thuật mang nhiều phong cách như: cổ điển, hiện đại, hình con vật, hoa lá,…', 50, 't41632803142.jpg', 29, 0),
(13, 'tranh sắt dâm bụt ', '80000000', 0, '0', 'Với hình ảnh những chiếc lá và bông hoa dập uốn tinh xảo, tạo điểm nhấn đặc sắc cho không gian nhà bạn với màu sắc thật và đẹp mắt được phủ lớp titan mang đến cho sẩn phẩm độ bóng đẹp và bền màu trên 20 năm. Tranh sắt treo tường IP1020 hứa hẹn sẽ là sản phẩm trang trí nội thật nhà ấn tượng đột phá trong năm nay, mang lại vẻ đẹp sang trọng mà rất tinh tế cho ngôi nhà bạn.\r\n\r\nMôt sô mô tả sản phẩm:\r\n– Kích thước: 150cm x 63cm x 6cm\r\n– Chất liệu: Thép sơn phủ Titan\r\n– Bảo hành: 5 năm', 50, 't51632816015.jpg', 29, 0),
(14, 'tranh sắt liễu rủ', '10000000', 0, '0', 'Thiết kế độc đáo, nổi bật, màu sắc sang trọng, thời thượng\r\nĐộ bền cao, không oxi hóa, không bay màu (có thể lên tới 20 năm nếu sử dụng hợp lý trong nội thất)\r\nLắp đặt nhanh chóng, không tổn hại đến tường, dễ dàng thay đổi vị trí\r\nỨng dụng tại nhiều không gian và các phòng như phòng khách, phòng ngủ, phòng làm việc, showroom, spa, khu vực sảnh tiếp đón,vv...\r\nTranh Sắt Treo Tường  luôn luôn là những sản phẩm bắt kịp xu hướng mà lại chẳng bao giờ lỗi mốt. Sản phẩm được thiết kế với tone màu vàng chủ đạo xen lẫn với màu trắng thanh nhã, vô cùng phù hợp để treo trong phòng khách, phòng ngủ hay phòng ăn.', 30, 't61632816231.jpg', 29, 0),
(15, 'tranh sắt hoa Pháp', '30000000', 0, '0', 'Tranh sắt treo tường là những mẫu tranh decor trang trí xu thế hàng đầu hiện nay, được thiết kế bằng cách uốn cong những thanh sắt tạo hình nghệ thuật và phủ sơn tĩnh điện cao cấp, sang trọng cùng độ bền màu lên tới hơn 10 năm. Tranh sắt trang trí hay tranh sắt nghệ thuật là sản phẩm decor trang trí không thể thiếu, mang tới sự hiện đại, sang trọng và vô cùng độc đáo cho không gian nội thất', 10, 't71632816345.jpg', 29, 0),
(16, 'Tranh sắt lụa', '10000000', 0, '0', 'Tranh Nghệ Thuật từ xưa luôn là món ăn tinh thần không thể thiếu với tất cả chúng ta. Ngay nay xã hội phát triển nhu cầu thưởng thức cái đẹp, nét đep cuộc sống qua những bức tranh xinh động, nghệ thuật cũng là mong muốn của nhiều người. tranh-sat-trang-tri-ha-noi-ip1094, Tranh Trang Trí Phòng Khách Bằng Sắt', 50, 't91632816439.jpg', 29, 0),
(17, 'Tranh sắt bát tiên ', '30000000', 0, '0', '- Chất liệu: Sắt sơn tĩnh điện cao cấp\r\n\r\n- Hàng mới 100%\r\n\r\n- Tranh Sắt Trang Trí là một dạng tranh mới độc đáo với thiết kế hiện đại, trang nhã, màu sắc đẹp mắt, làm cho không gian sống trở nên sinh động và lôi cuốn.', 10, 't101632816577.jpg', 29, 0),
(18, 'Tranh sắt lá Sen', '1000000', 0, '0', 'Với hình ảnh những chiếc lá và bông hoa dập uốn tinh xảo, tạo điểm nhấn đặc sắc cho không gian nhà bạn với màu sắc thật và đẹp mắt được phủ lớp titan mang đến cho sẩn phẩm độ bóng đẹp và bền màu trên 20 năm. Tranh sắt treo tường IP1049 hứa hẹn sẽ là sản phẩm trang trí nội thật nhà ấn tượng đột phá trong năm nay, mang lại vẻ đẹp sang trọng mà rất tinh tế cho ngôi nhà bạn.', 50, 't111632816761.jpg', 29, 0),
(19, 'Tranh Hồng Hạc ', '15000000', 0, '0', 'hiết kế độc đáo, nổi bật, màu sắc sang trọng, thời thượng Độ bền cao, không oxi hóa, không bay màu (có thể lên tới 20 năm nếu sử dụng hợp lý trong nội thất) Lắp đặt nhanh chóng, không tổn hại đến tường, dễ dàng thay đổi vị trí Ứng dụng tại nhiều không gian và các phòng như phòng khách, phòng ngủ, phòng làm việc, showroom, spa, khu vực sảnh tiếp đón,vv...\r\nNhững cánh chim hồng hạc luôn xuất hiện trên những thước phim, hình ảnh với vẻ đẹp diệu kỳ đầy mệ hoặc.\r\n\r\nThế nhưng nhiều người trong chúng ta lại chưa bao giờ được tận mắt chứng kiến loài chim này\r\n\r\nHãy đưa ngay vẻ đẹp của hồng hạc tới với không gian nhà bạn qua bức tranh sắt treo tường hình hồng hạc.', 50, 't121632816837.jpg', 29, 1),
(20, 'Tranh sắt lông ngỗng ', '10000000', 0, '0', 'có thể trưng bày ở phòng khách, phòng ăn, phòng làm việ\r\n\r\nDùng làm quà tặng.\r\n\r\nHọa tiết đơn giản nhưng sang trọng, thích hợp với mọi không gian nhà bạn\r\n\r\nGiá cả phải chăng,', 100, 't131632816890.jpg', 29, 0),
(21, 'Tranh sắt cách tân ', '10000000', 0, '0', 'Tranh sắt treo tường nghệ thuật với thiết kế đặc trưng chính là những vòng tròn ma thuật. Điểm đặc trưng của mẫu tranh sắt này là tính hấp dẫn của các họa tiết kì bí tạo thành một vòng tròn. Khi nhìn vào, người chiêm ngưỡng khó có thể rời mắt khỏi bức tranh được.\r\n\r\nThông tin sản phẩm trang sắt Ci', 30, 't141632816979.jpg', 29, 1),
(22, 'Tranh sắt Lá cây', '30000000', 1, '25000000', '<p>Tranh sắt treo tường được hiểu l&agrave; những bức tranh được l&agrave;m từ kim loại l&agrave; th&eacute;p hoặc sắt kh&ocirc;ng rỉ qua nhiều qu&aacute; tr&igrave;nh v&agrave; c&ocirc;ng đoạn sản xuất thi c&ocirc;ng phức tạp để tạo n&ecirc;n những sản phẩm mang t&iacute;nh nghệ thuật v&agrave; thẩm mỹ,d&ugrave;ng để trang tr&iacute; nội thất trong căn hộ,kh&ocirc;ng gian của m&igrave;nh.Ng&agrave;y nay do nhu cầu trang tr&iacute; nh&agrave; cửa l&agrave; rất lớn ch&iacute;nh v&igrave; vậy nhu cầu sử dụng c&aacute;c vật dụng trang tr&iacute; c&oacute; t&iacute;nh nghệ thuật ng&agrave;y c&agrave;ng tăng cao để phục vụ nhu cầu rất lớn của kh&aacute;ch h&agrave;ng tranh sắt treo tường ra đời như một ph&acirc;n kh&uacute;c bổ sung cho c&aacute;c d&ograve;ng tranh trang tr&iacute; truyền thống được l&agrave;m từ c&aacute;c vật liệu cũ.</p>\r\n', 10, 't161632817042.jpg', 29, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id_slider` int(11) NOT NULL,
  `title_slider` varchar(255) NOT NULL,
  `image_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slider`, `title_slider`, `image_slider`) VALUES
(1, 'slider 1', 'slider-2-1.jpg'),
(2, 'slider 2', 'slider-2-2.jpg'),
(3, 'slider 3', 'slider31632927197.jpg'),
(5, 'slider 4', 'slider41632927233.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id_order_details`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_category_post` (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category_product` (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id_order_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`id_category_post`) REFERENCES `tbl_category_post` (`id_category_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_category_product`) REFERENCES `tbl_category_product` (`id_category_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
