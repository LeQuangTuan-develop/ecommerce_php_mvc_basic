-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2021 lúc 03:36 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pdo_blog_ecommerce`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acl_permissions`
--

CREATE TABLE `acl_permissions` (
  `permission_id` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `display_name` varchar(500) NOT NULL,
  `guard_name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acl_roles`
--

CREATE TABLE `acl_roles` (
  `role_id` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `display_name` varchar(500) NOT NULL,
  `guard_name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acl_role_has_permissions`
--

CREATE TABLE `acl_role_has_permissions` (
  `id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `permission_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acl_user`
--

CREATE TABLE `acl_user` (
  `acl_id` bigint(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` tinyint(3) NOT NULL,
  `email` varchar(191) NOT NULL,
  `birthday` datetime NOT NULL,
  `avatar` text NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `manager_id` bigint(20) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(15) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `acl_user`
--

INSERT INTO `acl_user` (`acl_id`, `username`, `password`, `last_name`, `first_name`, `gender`, `email`, `birthday`, `avatar`, `job_title`, `manager_id`, `phone`, `address`, `city`, `postal_code`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tuanadmin', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Quang', 'Tuấn', 1, 'lequangtuan1605@gmail.com', '1998-05-16 13:45:52', 'unnamed.jpg', 'CEO', 0, '0962001540', '28 đường 5 phường Trường Thạnh Quận 9 TP HCM', 'Ho Chi Minh', '700000', 'Viet Nam', 1, '2021-06-14 15:25:00', '2021-05-18 06:48:46'),
(2, 'thangadmin', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Doãn', 'Thắng', 1, 'nguyendoanthang@gmail.com', '2000-03-22 14:17:57', '', 'CTO', 1, '0923128846', 'Quang Trung Gò Vấp', 'Ho Chi Minh', '700000', 'Viet Nam', 1, '2021-05-18 07:20:32', '2021-05-18 07:20:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acl_user_has_permissions`
--

CREATE TABLE `acl_user_has_permissions` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `permission_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acl_user_has_roles`
--

CREATE TABLE `acl_user_has_roles` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_categories`
--

CREATE TABLE `shop_categories` (
  `category_id` bigint(20) NOT NULL,
  `category_code` varchar(50) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `cate_description` text NOT NULL,
  `cate_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_categories`
--

INSERT INTO `shop_categories` (`category_id`, `category_code`, `category_name`, `cate_description`, `cate_image`, `created_at`, `updated_at`) VALUES
(2, 'MTLA002', 'máy tính và laptop', 'bao gồm thiết bị máy tính bàn và laptop, ram, cbu, ssd, hdd, màn hình, quạt máy, bộ nguồn, ...', 'laptopvitinh.png', '2021-06-02 14:23:25', '2021-05-18 03:26:20'),
(3, 'TTNU003', 'thời trang nữ', 'thời trang nữ: váy, đầm, áo lót, áo sơ mi, áo khoác, đồ ngủ, áo len, ...', 'thoitrangnu.png', '2021-06-02 14:24:07', '2021-05-18 03:30:32'),
(4, 'TTNA004', 'thời trang nam', 'áo thun, áo sơ mi, quần short, quần jean, quần tây, giày tây, giày sneaker, ...', 'thoitrangnam.png', '2021-06-02 14:24:18', '2021-05-18 03:30:32'),
(5, 'TTDL005', 'thể thao, du lịch', 'dụng cụ các môn thể thao, du lịch và trải nghiệm, bóng, quần áo thể thao, phụ kiện thể thao, đồ cắm trại ,...', 'thethaodulich.png', '2021-06-02 14:23:57', '2021-05-18 03:34:56'),
(6, 'SACH006', 'nhà sách online', 'tủ sách nhiều thể  thoại: sách kinh tế, tư duy, sách chuyên ngành, truyện trẻ em, sách tiểu thuyết, ...', 'sachonline.png', '2021-06-02 14:23:47', '2021-05-18 03:34:56'),
(8, 'DTPK001', 'điện thoại và phụ kiện', 'Phụ kiện điện thoại bao gồm như: Loa bluetooth, tai nghe, cáp sạc, pin sạc dự phòng, ốp lưng kính cường lực,....', 'dienthoaididong.png', '2021-06-05 13:49:00', '2021-06-05 13:40:59'),
(9, 'TBDT005', 'Thiết bị điện tử', 'Thiết bị điện tử là các loại thiết bị có chứa linh kiện bán dẫn và các mạch điện tử. Thông thường các thiết bị này không phải thực hiện bất kỳ một hoạt động cơ khí nào.', 'thietbidientu.png', '2021-06-05 13:52:04', '2021-06-05 13:43:01'),
(10, 'CAME006', 'Máy ảnh và máy quay phim', 'Tổng hợp các dòng máy ảnh chuyên nghiệp, máy ảnh du lịch từ các thương hiệu Canon, Nikon, Fujifilm, Sony chính hãng', 'camera.png', '2021-06-05 13:52:11', '2021-06-05 13:44:01'),
(11, 'MEBE007', 'Mẹ và bé', 'chuyên cung cấp đồ sơ sinh, đồ chơi, xe đẩy, giường cũi, sản phẩm dành cho mẹ bé', 'mevabe.png', '2021-06-05 13:52:17', '2021-06-05 13:45:23'),
(12, 'SKSD008', 'Sức khỏe và sắc đẹp', 'Mỹ phẩm là những chất hoặc sản phẩm được dùng để trang điểm hoặc thay đổi diện mạo hoặc mùi hương cơ thể người. Nhiều mỹ phẩm được thiết kế để sử dụng cho mặt và tóc. Chúng thường là hỗn hợp các hợp chất hóa học; một số xuất phát từ nguồn gốc tự nhiên (như dầu dừa) và một số được tổng hợp.[1] Các loại mỹ phẩm phổ biến gồm có son môi, mascara, phấn mắt, kem nền, phấn má hồng, phấn phủ, sữa rửa mặt và sữa dưỡng thể, dầu gội, sản phẩm tạo kiểu tóc (gel vuốt tóc, gôm xịt tóc,...), nước hoa. ', 'suckhoesacdep.png', '2021-06-05 13:52:26', '2021-06-05 13:46:56'),
(13, 'BHON001', 'Bách hóa online', 'Siêu thị Bách hoá XANH bán lẻ thực phẩm tươi sống, bánh kẹo, đồ hộp, đồ dùng gia đình giá rẻ, sản phẩm tươi mới, nguồn gốc đảm bảo, dịch vụ chu đáo.', 'bachhoaonline.png', '2021-06-05 13:58:43', '2021-06-05 13:58:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_customers`
--

CREATE TABLE `shop_customers` (
  `customer_id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `email` varchar(191) NOT NULL,
  `birthday` datetime NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `code` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `billing_address` varchar(500) NOT NULL,
  `shipping_address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(15) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_customers`
--

INSERT INTO `shop_customers` (`customer_id`, `username`, `password`, `last_name`, `first_name`, `gender`, `email`, `birthday`, `avatar`, `code`, `company`, `phone`, `billing_address`, `shipping_address`, `city`, `postal_code`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'QuangTuan165', '8221c5cc375c5f27ddfab0149600017a', 'Lê Quang', 'Tuấn', 1, 'lequangtuan1605@gmail.com', '1998-05-16 11:01:00', 'quangtuan165.jpg', '', '', '0962001540', '', '28 đường 5 phường Trường Thạnh TP Thủ Đức', 'Ho Chi Minh', '', 'Viet Nam', 1, '2021-06-16 00:54:20', '2021-05-18 04:04:33'),
(2, 'DoanThang', 'e950f03f66be9b234e696b60f67b66f2', 'Nguyễn Doãn', 'Thắng', 1, 'nguyendoanthang@gmail.com', '2000-03-15 13:39:11', 'doanthang.jpg', '', 'FPT Polytechnic Collage', '', '', '', '', '', 'DakLak', 1, '2021-06-03 02:34:09', '2021-05-18 06:43:14'),
(3, 'Locsarma', '4e7e6e22900ba49158efb09f4a38a456', 'Huỳnh Tấn', 'Lộc', 1, 'huynhtanloc@gmail.com', '1997-11-20 13:56:26', 'huynhtanloc.jpg', '', '', '', '', '', '', '', 'Binh Dinh', 1, '2021-06-03 02:34:16', '2021-05-18 06:59:39'),
(4, 'RemyNhi', '90017c2f6c4d88540d6ce1811802bc22', 'Trần Thị Yến', 'Nhi', 2, 'tranthiyennhi@gmail.com', '1996-08-15 14:01:25', 'remynhi.jpg', '', '', '', '', '', '', '', 'Ho Chi Minh', 2, '2021-06-03 02:34:24', '2021-05-18 07:07:24'),
(5, 'Huthiong', '95ef405db3416d8a92a22354b6bdb6fb', 'Nguyễn Thị', 'Hương', 2, 'nguyenthihuong@gmail.com', '2000-09-12 14:14:10', 'huthiong.jpg', '', '', '', '', '', '', '', 'Binh Duong', 2, '2021-06-03 02:34:32', '2021-05-18 07:15:22'),
(6, '', '65deb55e4de82dbb104fbdc5decbeb32', 'Lê Hào', 'Quang', 0, 'lehaoquang2511@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0354959737', '', '', '', '', '', 0, '2021-06-06 06:11:52', '2021-06-05 09:17:24'),
(7, '', '74ace814d70e417066b77afc064aef8c', 'Dương Mỹ', 'Duyên', 2, 'duongtracy@gmail.com', '0000-00-00 00:00:00', 'duongtracy.jpg', '', '', '0933821701', '', 'Nam Hoa phường Hiệp Phú TP Thủ Đức', 'Ho Chi Minh', '', 'Viet Nam', 0, '2021-06-08 07:28:21', '2021-06-05 17:18:52'),
(8, '', '25f9e794323b453885f5181f1b624d0b', 'Khương', 'Phạm Thanh', 0, 'phamthanhkhuong@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0959996789', '', '', '', '', '', 0, '2021-06-06 06:12:06', '2021-06-05 17:25:28'),
(9, '', '25f9e794323b453885f5181f1b624d0b', 'Hoàng Gia', 'Khánh', 0, 'khanhhoang199712@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0777072846', '', '', '', '', '', 0, '2021-06-06 06:12:09', '2021-06-05 17:34:12'),
(10, '', '25f9e794323b453885f5181f1b624d0b', 'Tống Việt', 'Long', 0, 'tongvietlong@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0996553512', '', '', '', '', '', 0, '2021-06-06 06:12:11', '2021-06-05 17:39:12'),
(11, '', '25f9e794323b453885f5181f1b624d0b', 'Đinh Tiến', 'Phương', 0, 'dinhtienphuong@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0234156789', '', '', '', '', '', 0, '2021-06-06 06:12:13', '2021-06-05 17:40:54'),
(12, '', '25f9e794323b453885f5181f1b624d0b', 'Trần Phạm', 'Long', 0, 'tranphamlong@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '096334443', '', '', '', '', '', 0, '2021-06-06 06:12:15', '2021-06-05 17:55:48'),
(13, '', '25f9e794323b453885f5181f1b624d0b', 'Trần Thu', 'Thảo', 0, 'tranthuthao@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0923128846', '', '', '', '', '', 0, '2021-06-06 06:12:16', '2021-06-05 17:57:02'),
(14, '', '25f9e794323b453885f5181f1b624d0b', 'Nguyễn Đặng Thành', 'Đạt', 0, 'nguyendat2612@gmail.com', '0000-00-00 00:00:00', 'avatar-default.png', '', '', '0969666699', '', '', '', '', '', 0, '2021-06-06 06:12:18', '2021-06-05 18:01:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_orders`
--

CREATE TABLE `shop_orders` (
  `order_id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `shipped_date` datetime NOT NULL,
  `ship_name` varchar(50) NOT NULL,
  `ship_address1` varchar(500) NOT NULL,
  `ship_address2` varchar(500) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL,
  `ship_portal_code` varchar(50) NOT NULL,
  `ship_country` varchar(255) NOT NULL,
  `shipping_fee` decimal(19,4) NOT NULL,
  `payment_type_id` bigint(20) NOT NULL,
  `paid_date` datetime NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_orders`
--

INSERT INTO `shop_orders` (`order_id`, `employee_id`, `customer_id`, `order_date`, `shipped_date`, `ship_name`, `ship_address1`, `ship_address2`, `ship_city`, `ship_state`, `ship_portal_code`, `ship_country`, `shipping_fee`, `payment_type_id`, `paid_date`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 2, 5, '2021-06-03 03:36:13', '2021-06-07 08:36:13', 'GHN', 'Trung Tâm phần mềm Quang Trung, cao đẳng FPT', '', 'Ho Chi Minh', 'Quan 12', '700000', 'Viet Nam', '25000.0000', 1, '2021-06-03 03:36:13', 'pending', '2021-06-03 01:41:30', '2021-06-03 01:41:30'),
(3, 1, 4, '2021-06-01 08:36:13', '2021-06-04 08:36:13', 'GHTK', 'tòa nhà Bitexco, 2 Hải Triều, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh', '', 'Ho Chi Minh', 'Go Vap', '700000', 'Viet Nam', '35000.0000', 2, '2021-06-03 03:36:13', 'shipping', '2021-06-03 01:42:21', '2021-06-03 01:41:30'),
(4, 2, 3, '2021-06-03 03:59:54', '2021-06-08 08:59:54', 'J&T', 'Số 216 Võ Văn Ngân, P. Bình Thọ, Q. Thủ Đức', '', 'Ho Chi Minh', 'Thu Duc', '700000', 'Viet Nam', '38000.0000', 4, '2021-06-03 03:59:54', 'pending', '2021-06-03 02:04:17', '2021-06-03 02:04:17'),
(5, 2, 5, '2021-05-28 08:59:54', '2021-06-01 08:59:54', 'GHTK', 'Trung Tâm phần mềm Quang Trung, cao đẳng FPT', '', 'Ho Chi Minh', 'Quan 12', '700000', 'Viet Nam', '20000.0000', 1, '2021-06-02 08:59:54', 'successful', '2021-06-03 02:04:17', '2021-06-03 02:04:17'),
(6, 2, 6, '2021-06-07 23:00:13', '2021-06-09 23:00:13', 'GHN', '', '', '', '', '', '', '25000.0000', 2, '2021-06-14 18:00:13', 'successful', '2021-06-14 16:02:45', '2021-06-14 16:02:45'),
(7, 2, 7, '2021-06-07 23:00:13', '2021-06-10 23:00:13', 'GHN', '', '', '', '', '', '', '35000.0000', 4, '2021-06-14 18:00:13', 'successful', '2021-06-14 16:02:56', '2021-06-14 16:02:45'),
(8, 1, 8, '2021-06-08 08:44:39', '2021-06-10 08:44:39', 'J&T', '', '', '', '', '', '', '25000.0000', 5, '2021-06-08 08:44:39', 'successful', '2021-06-15 02:20:39', '2021-06-15 01:46:51'),
(9, 2, 9, '2021-06-09 08:48:57', '2021-06-11 08:48:57', 'GHTK', '', '', '', '', '', '', '35000.0000', 2, '2021-06-09 08:48:57', 'successful', '2021-06-15 01:49:52', '2021-06-15 01:49:52'),
(10, 2, 10, '2021-06-10 08:52:05', '2021-06-11 08:52:05', 'GHN', '', '', '', '', '', '', '25000.0000', 1, '2021-06-11 08:52:05', 'successful', '2021-06-15 01:55:22', '2021-06-15 01:52:46'),
(11, 1, 1, '2021-06-10 08:54:08', '2021-06-12 08:54:08', 'GHTK', '', '', '', '', '', '', '25000.0000', 2, '2021-06-12 08:54:08', 'successful', '2021-06-15 01:55:24', '2021-06-15 01:55:11'),
(12, 2, 2, '2021-06-11 09:15:24', '2021-06-14 09:15:24', 'GHN', '', '', '', '', '', '', '25000.0000', 1, '2021-06-14 09:15:24', 'successful', '2021-06-15 02:20:46', '2021-06-15 02:16:07'),
(13, 2, 4, '2021-06-12 09:16:44', '2021-06-14 09:16:44', 'J&T', '', '', '', '', '', '', '25000.0000', 1, '2021-06-14 09:16:44', 'successful', '2021-06-15 02:17:57', '2021-06-15 02:17:57'),
(14, 2, 8, '2021-06-13 09:19:25', '2021-06-14 09:19:25', 'GHN', '', '', '', '', '', '', '38000.0000', 1, '2021-06-14 09:19:25', 'successful', '2021-06-15 02:20:33', '2021-06-15 02:20:19'),
(15, 1, 12, '2021-06-14 09:22:16', '2021-06-15 09:22:16', 'GHTK', '', '', '', '', '', '', '35000.0000', 2, '2021-06-14 09:22:16', 'shipping', '2021-06-15 02:24:31', '2021-06-15 02:23:21'),
(16, 1, 14, '2021-06-14 09:25:01', '2021-06-16 09:25:01', 'J&T', '', '', '', '', '', '', '25000.0000', 1, '2021-06-16 09:25:01', 'shipping', '2021-06-15 02:25:51', '2021-06-15 02:25:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_order_details`
--

CREATE TABLE `shop_order_details` (
  `order_detail_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(19,4) DEFAULT NULL,
  `discount_percentage` float DEFAULT NULL,
  `discount_amount` double DEFAULT NULL,
  `order_detail_status` varchar(50) NOT NULL,
  `date_allocated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_order_details`
--

INSERT INTO `shop_order_details` (`order_detail_id`, `order_id`, `product_id`, `quantity`, `unit_price`, `discount_percentage`, `discount_amount`, `order_detail_status`, `date_allocated`) VALUES
(1, 2, 3, 2, NULL, NULL, NULL, '', '2021-06-03 03:44:48'),
(2, 3, 5, 1, NULL, NULL, NULL, '', '2021-06-03 03:44:48'),
(3, 4, 1, 1, NULL, NULL, NULL, '', '2021-06-03 03:50:37'),
(4, 5, 1, 1, NULL, NULL, NULL, '', '2021-06-03 03:50:37'),
(5, 6, 9, 1, NULL, NULL, NULL, '', '2021-06-14 18:03:32'),
(6, 6, 13, 1, NULL, NULL, NULL, '', '2021-06-14 18:04:36'),
(7, 7, 11, 2, NULL, NULL, NULL, '', '2021-06-14 18:05:50'),
(8, 7, 10, 3, NULL, NULL, NULL, '', '2021-06-14 18:05:50'),
(9, 8, 6, 2, NULL, NULL, NULL, '', '2021-06-15 03:47:53'),
(10, 9, 8, 2, NULL, NULL, NULL, '', '2021-06-15 03:50:14'),
(11, 10, 12, 3, NULL, NULL, NULL, '', '2021-06-15 03:53:21'),
(12, 11, 8, 1, NULL, NULL, NULL, '', '2021-06-15 03:55:40'),
(13, 11, 5, 1, NULL, NULL, NULL, '', '2021-06-15 03:57:00'),
(14, 12, 14, 1, NULL, NULL, NULL, '', '2021-06-15 04:16:22'),
(15, 13, 11, 3, NULL, NULL, NULL, '', '2021-06-15 04:18:53'),
(16, 14, 13, 1, NULL, NULL, NULL, '', '2021-06-15 04:20:53'),
(17, 15, 4, 1, NULL, NULL, NULL, '', '2021-06-15 04:23:34'),
(18, 16, 6, 2, NULL, NULL, NULL, '', '2021-06-15 04:26:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_payment_types`
--

CREATE TABLE `shop_payment_types` (
  `payment_type_id` bigint(20) NOT NULL,
  `payment_code` varchar(50) NOT NULL,
  `payment_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_payment_types`
--

INSERT INTO `shop_payment_types` (`payment_type_id`, `payment_code`, `payment_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'CAS01', 'Thanh toán bằng tiền mặt khi nhận hàng', 'Là hình thức thu tiền khi khách hàng nhận trực tiếp hàng hóa hay còn gọi là COD', 'tienmat.jpg', '2021-06-03 03:20:25', '2021-06-03 01:27:31'),
(2, 'ATM02', 'Thẻ ATM nội địa/ internet Banking (Miễn phí thanh toán)', 'Thẻ ATM là một loại thẻ theo chuẩn ISO 7810 được các ngân hàng phát hành dùng để thực hiện các giao dịch tự động như kiểm tra tài khoản, rút tiền hoặc chuyển khoản, thanh toán hóa đơn, mua thẻ điện thoại.\r\n\r\nVới nhiều tính năng tiện lợi, thẻ ATM dần trở thành vật bất ly thân của nhiều người, đặc biệt trong quá trình mua sắm tại siêu thị. Hiện nay, 100% các siêu thị lớn, trung tâm thương mại hiện nay đã lắp đặt máy chấp nhận thẻ POS/EDC vì vậy bạn có thể thanh toán bằng thẻ một cách dễ dàng.', 'atm.jpg', '2021-06-03 03:27:40', '2021-06-03 01:31:55'),
(3, 'TQT03', 'Thanh toán bằng thẻ quốc tế VISA, MASTER, JCB', 'Thẻ thanh toán Quốc Tế là loại thẻ được phát hành bởi các ngân hàng liên kết với các Tổ chức Tài Chính Quốc Tế. Nhằm phục vụ cho việc mua sắm trên các trang website quốc tế, hoặc tại các địa điểm mua sắm trên thế giới có hỗ trợ thanh toán qua thẻ. Bạn có thể sử dụng thẻ ở phạm vi toàn thế giới, thực hiện các giao dịch thanh toán, rút tiền tại máy ATM, hay quẹt thẻ tại các máy POS ở nước ngoài.', 'thequocte.jpg', '2021-06-03 03:27:40', '2021-06-03 01:31:55'),
(4, 'MOM04', 'Thanh toán bằng ví Momo', 'Ví điện tử MoMo là một ứng dụng tài chính cho phép chuyển nhận tiền Siêu nhanh, dễ dùng, an toàn tuyệt đối! Ví MoMo giúp bạn thanh toán mọi nhu cầu, mọi lúc mọi nơi và HOÀN TOÀN MIỄN PHÍ như nạp tiền điện thoại tất cả nhà mạng, thanh toán các hóa đơn điện nước - internet - vay tiêu dùng, vé xem phim, vé máy bay và hàng trăm dịch vụ khác.', 'momo.jpg', '2021-06-03 03:32:40', '2021-06-03 01:35:34'),
(5, 'ZAL05', 'Thanh toán bằng ZaloPay', 'ZaloPay là ứng dụng thanh toán di động với nhiều tính năng độc đáo. Được xây dựng chuyên biệt để thỏa mãn mọi nhu cầu thanh toán trong cuộc sống và nhu cầu kinh doanh.', 'zalopay.jpg', '2021-06-03 03:32:40', '2021-06-03 01:35:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_products`
--

CREATE TABLE `shop_products` (
  `product_id` bigint(20) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `standart_cost` decimal(19,4) NOT NULL,
  `list_price` decimal(19,4) NOT NULL,
  `quantity_per_unit` varchar(50) NOT NULL,
  `discontinued` tinyint(4) NOT NULL,
  `is_published` bit(1) NOT NULL,
  `is_featured` bit(1) NOT NULL,
  `is_new` bit(1) NOT NULL,
  `view` int(11) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_products`
--

INSERT INTO `shop_products` (`product_id`, `product_code`, `product_name`, `image`, `short_description`, `description`, `standart_cost`, `list_price`, `quantity_per_unit`, `discontinued`, `is_published`, `is_featured`, `is_new`, `view`, `category_id`, `supplier_id`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'LAMACBO0001', 'Laptop Apple MacBook Air M1 2020 8GB/512GB/Gold', 'prod_lamacbo0001.jpg', 'Apple MacBook Air M1 2020 (MGNE3SA/A) là chiếc laptop đang gây được rất nhiều sự chú ý, đặc biệt là đối với những fan nhà “Táo”. Với MacBook Air 2020, lần đầu tiên bạn sẽ được trải nghiệm con chip M1 được thiết kế dành riêng cho Mac cung cấp hiệu năn', '&lt;p&gt;&lt;p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;/p&gt;&lt;/p&gt;', '17250000.0000', '33990000.0000', '200', 0, b'1', b'1', b'1', 13, 2, 1, '2021-06-16 00:55:40', NULL, '2021-05-18 03:43:17'),
(3, 'VAGUMAC0001', 'Chân váy suông cơ bản GUMAC', '3.jpg', 'Chân váy suông cơ bản\r\nMã Sản Phẩm: VB5126\r\n- Tên Sản Phẩm: Chân váy suông cơ bản\r\n- Giá Bán: 285,000vnđ\r\n- Màu Sắc: NUDE\r\n- Số Đo Eo: 64CM', '&lt;p&gt;&lt;p&gt;Chân váy suông cơ bản\n\nMã Sản Phẩm: VB5126\n- Tên Sản Phẩm: Chân váy suông cơ bản\n- Giá Bán: 285,000vnđ\n- Màu Sắc: NUDE\n- Số Đo Eo: 64CM\n- Số Đo Mông: 82CM\n- Chiều Dài Chân Váy: 61CM\n- Số Đo Xẻ Sau: 18CM\n- Thông Số Size XS\n- Số Size XS-S-M-L-XL\n- Chất Liệu Vải: Bố Chéo Giày\n- Co Giãn Nhẹ\n- Chân Váy Có 1 Lớp\n- Không Có Túi\n*CHÂN VÁY SUÔNG CƠ BẢN, BẢN LƯNG KHOẢNG 3.3CM, TRƯỚC CÓ 2 CON ĐĨA TRÊN LƯNG TẠO KIỂU, TÀ SAU CÓ XẺ, DÂY KÉO PHÍA SAU.&lt;/p&gt;&lt;/p&gt;', '105000.0000', '285000.0000', '100', 1, b'1', b'1', b'1', 3, 3, 2, '2021-06-16 00:41:27', NULL, '2021-05-18 03:54:37'),
(4, 'BOC1CAO0001', 'Quả Banh Bóng Đá C1 Đúc Nguyên Khối Cao Cấp Mới Nhất 2020 #5', 'prod_boc1ao0001.jpg', 'Vỏ bóng làm từ chất liệu da PU cực bền và nhẹ, bóng được đúc chuẩn hoàn toàn tinh xảo\r\nBề mặt da không đơn thuần là mặt da trơn như ta thường thấy ở nhiều quả bóng khác mà ta có thể cảm nhận được những vân chữ thập li ti cho thấy chất liệu da PU nay ', '&lt;p&gt;Vỏ bóng làm từ chất liệu da PU cực bền và nhẹ, bóng được đúc chuẩn hoàn toàn tinh xảo\nBề mặt da không đơn thuần là mặt da trơn như ta thường thấy ở nhiều quả bóng khác mà ta có thể cảm nhận được những vân chữ thập li ti cho thấy chất liệu da PU nay đã được hoạt hóa tốt hơn\nKích cỡ size số 5 khá phổ biến, thích hợp để đá trên các sân bóng lớn\nHoa văn đẹp mắt, bóng tròn đều, màu sắc trẻ trung, ấn tượng\nVỏ bóng làm từ chất liệu da PU cực bền và nhẹ, bóng được đúc chuẩn hoàn toàn tinh xảo\n\nBề mặt da không đơn thuần là mặt da trơn như ta thường thấy ở nhiều quả bóng khác mà ta có thể cảm nhận được những vân chữ thập li ti cho thấy chất liệu da PU nay đã được hoạt hóa tốt hơn\n\nKích cỡ size số 5 khá phổ biến, thích hợp để đá trên các sân bóng lớn\n\nHoa văn đẹp mắt, bóng tròn đều, màu sắc trẻ trung, ấn tượng\n\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...&lt;/p&gt;', '126500.0000', '350000.0000', '154', 0, b'1', b'1', b'1', 4, 5, 4, '2021-06-14 01:07:01', NULL, '2021-05-18 03:57:27'),
(5, 'SA7HABI0001', '7 Thói Quen Của Bạn Trẻ Thành Đạt (Tái Bản 2019)', 'prod_sa7habi0001.png', '7 Thói Quen Của Bạn Trẻ Thành Đạt được biên dịch từ tác phẩm nổi tiếng The 7 Habits of Highly Effective Teens của tác giả Sean Covey theo hợp đồng chuyển giao bản quyền với Tập đoàn Xuất bản Franklin Covey (Hoa Kỳ). ', '&lt;p&gt;7 Thói Quen Của Bạn Trẻ Thành Đạt được biên dịch từ tác phẩm nổi tiếng The 7 Habits of Highly Effective Teens của tác giả Sean Covey theo hợp đồng chuyển giao bản quyền với Tập đoàn Xuất bản Franklin Covey (Hoa Kỳ). Cuốn sách nhấn mạnh những gì chúng ta có được trong cuộc sống đều bắt nguồn từ những thói quen của chính mình. Ai cũng có những thói quen tốt và những thói quen xấu, và mỗi chúng ta phải rèn luyện những thói quen tốt và biết điều chỉnh, loại bỏ những thói quen xấu.\n\nTuổi thiếu niên và trưởng thành là tuổi đẹp nhất và quan trọng nhất của đời người. Đây cũng là lứa tuổi mà các bạn trẻ bắt đầu khám phá cuộc sống với những ước mơ, khát vọng. Phía trước các bạn là những con đường bằng phẳng, êm ái; nhưng cũng có con đường quanh co, khúc khuỷu. Có con đường ngập tràn ánh sáng, cũng có con đường u ám, đầy cạm bẫy, nguy cơ. Nhưng làm cách nào để chọn được con đường đến đích thành công, hạnh phúc mà không lãng phí nhiều thời gian, công sức? Tất cả đều phụ thuộc vào tính cách và thói quen của các bạn. Có những thói quen đem đến sự thành công, hạnh phúc; nhưng cũng có những thói quen cản trở, phá hỏng sự phát triển của bạn.\n\nCuốn sách phân tích tác động lớn lao của 7 thói quen quan trọng nhất của những bạn trẻ cần có. Đó là: Có thái độ sống tích cực; Biết định hướng tương lai; Việc hôm nay không để ngày mai; Tư duy cùng thắng; Biết lắng nghe để thấu hiểu và để được thấu hiểu; Có tinh thần hợp tác; Biết rèn luyện và phát triển những kỹ năng. Đây là những thói quen để các bạn tự rèn luyện bản thân và xây dựng các mối quan hệ của mình. Các thói quen này bổ sung và hỗ trợ chặt chẽ cho nhau, tạo một mắt xích bền vững giúp các bạn chọn lựa được hướng đi đúng đắn cho cuộc đời mình.\n\nVới phong cách ngắn gọn, vui tươi, dí dỏm, dễ hiểu, nhiều hình ảnh minh họa sinh động và dễ thương, 7 Thói Quen Của Bạn Trẻ Thành Đạt của Sean Covey đã được bạn đọc hoan nghênh và đón nhận nhiệt tình trên khắp thế giới. Đây là một trong những cuốn sách được các đọc giả trẻ yêu thích và đọc nhiều nhất, với số lượng phát hành lên đến hàng triệu bản trong một thời gian ngắn.\n\nQuả thật, 7 Thói Quen Của Bạn Trẻ Thành Đạt chính là chiếc la bàn, là kim chỉ nam giúp ta tránh được những thói quen tai hại nhằm xây dựng những thói quen tốt, hướng đến thành công. Đây không chỉ là một cuốn sách để đọc mà còn là một cẩm nang quý giá đưa bạn đến thành công, đạt được ước mơ của mình, xứng đáng với sự tin yêu của bạn bè, người thân, gia đình và xã hội.\n\nBáo chí nói gì về cuốn sách này:\n\n“Khác nhiều cuốn sách lý thuyết khô khan, tác phẩm The Seven Habits of Highly Effective Teens của Sean Covey với lối viết tươi vui, dí dỏm, ngắn gọn, dễ hiểu, rất nhiều mẩu chuyện thực tế và ý nghĩa, các bài thơ thú vị, hình ảnh minh họa dễ thương, sinh động vẫn đúc kết được bài học từ 7 thói quen của bạn trẻ thành đạt.”\n\n– Bài học từ \'7 thói quen của bạn trẻ thành đạt\' (Zing News)\n\n“Đến với 7 thói quen của bạn trẻ thành đạt, bạn sẽ được học để tạo lập được 7 thói quen tốt, khắc phục những thói quen xấu. Bạn sẽ được làm quen với những khái niệm như tài khoản cá nhân, tài khoản quan hệ, những việc làm và hành động ảnh hưởng như thế nào tới tài khoản của mình.” - \"7 Thói Quen Của Bạn Trẻ Thành Đạt\": Sức Mạnh Của Thói Quen (Ybox)\n\nNgười nổi tiếng nhận xét về cuốn sách này:\n\n“Cách tốt nhất để biến ước mơ thành hiện thực là có được sự lựa chọn những thói quen đúng đắn ngay từ thời niên thiếu. \"7 Thói quen của Bạn trẻ Thành đạt” sẽ giúp mọi người hiểu được rằng chính những thói quen, suy nghĩ và tầm nhìn chính là nền tảng chủ yếu tạo nên thành công cho cuộc sống cho dù quá khứ hay hiện tại như thế nào đi nữa.\" - Stedman Graham - tác giả cuốn sách \"You Can Make It Happen\"\n\n“Sean trò chuyện với các bạn trẻ bằng một giọng văn vừa thú vị, vừa kích thích khả năng tư duy sáng tạo của họ. Thông điệp của ông gợi mở những con đường đi đến thành công. Tôi xin trân trọng giới thiệu cuốn sách này tới mọi người, đến tất cả những ai đang ấp ủ một ước mơ.” – John Gray\n\n“7 Thói Quen Của Bạn Trẻ Thành Đạt chứa đụng những chỉ dẫn rất thực tế và hữu ích cho bất kỳ ai, không chỉ với các bạn trẻ. Đó là đề ra những mục tiêu, ghi tạc vào trí nhớ của bạn đồng thời tập trung, phát triển khả năng chịu dựng để vượt qua những chặng đường khó khăn phía trước. Nếu làm nhưu thế, bạn sẽ đạt được bất cứ mục tiêu nào.” – Tara Lipinski, vô địch trượt băng nghệ thuật, huy chương Vàng Olympic 1998\n\nVề tác giả:\n\nSean Covey (sinh ngày 17 tháng 9 năm 1964 ) là một tác giả người Mỹ. Ông được biết đến với các sách viết về động lực cho trẻ em và thanh thiếu niên. Covey tốt nghiệp Đại học Brigham Young với bằng tiếng Anh và sau đó tốt nghiệp chuyên ngành Quản trị kinh doanh tại Đại học Harvard.\n\nÔng đam mê bóng đá nhưng sau đó bị chấn thương ở đầu gối, và từ đó ông theo đuổi nghề viết sách. Các sách của ông viết về động lực cho trẻ em và thanh thiếu niên.\n\nCuốn sách bán chạy nhất quốc tế của ông \"7 Thói Quen Của Người Trẻ Thành Đạt\" dựa trên các nguyên tắc của \"7 Thói Quen Của Người Thành Đạt\" được viết bởi cha ông - Stephen Covey . Cuốn sách tiếp theo của ông \"7 Thói Quen Để Trẻ Trưởng Thành\" đã trở thành một cuốn sách New York Times bán chạy nhất .\n\nBìa sách có thể thay đổi theo ngày xuất bản\n\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...&lt;/p&gt;', '45000.0000', '118000.0000', '99', 0, b'1', b'1', b'1', 1, 6, 3, '2021-06-14 01:08:51', NULL, '2021-05-18 04:00:33'),
(6, 'QUVICER0002', 'Quần Jogger Nam Kaki Thời Trang 4 Màu Phong Cách Thể Thao VICERO', 'prod_quvicer0002.jpg', 'Quần Jogger Nam Kaki Thời Trang 4 Màu Phong Cách Thể Thao VICERO', '&lt;p&gt;Quần Jogger Nam Kaki Thời Trang 4 Màu Phong Cách Thể Thao VICERO\nCHÍNH SÁCH\nLà khách hàng của VICERO, bạn sẽ được:\nCam kết chất lượng và mẫu mã sản phẩm giống với hình ảnh.\nHoàn tiền nếu sản phẩm không giống với mô tả.\nHƯỚNG DẪN CÁCH ĐẶT HÀNG\nCách chọn size: Shop có bảng size mẫu. Bạn NÊN INBOX, cung cấp chiều cao, cân nặng để SHOP TƯ VẤN SIZE\nMã sản phẩm đã có trong ảnh\nCách đặt hàng: Nếu bạn muốn mua 2 sản phẩm khác nhau hoặc 2 size khác nhau\n- Bạn chọn từng sản phẩm rồi thêm vào giỏ hàng\n- Khi giỏ hàng đã có đầy đủ các sản phẩm cần mua, bạn mới tiến hành ấn nút “ Thanh toán”\nShop luôn sẵn sàng trả lời inbox để tư vấn\nTHÔNG TIN CHI TIẾT\nTên Sản phẩm: Quần Jogger Nam Kaki Thời Trang 4 Màu Phong Cách Thể Thao VICERO\nChất liệu: vải kaki\nMàu sắc: Đen, xanh than, xanh bộ đội, vàng be\n\nThương hiệu: VICERO\nXuất xứ: Việt Nam\n\n------------------------------------\n\nChất vải kaki mềm mịn, đẹp, bền, không bai, không xù, không bám dính\nĐường may tinh tế, chỉn chu, khéo léo\nMàu sắc đa dạng, trẻ trung\nChất lượng sản phẩm tốt\nBảng Size:\nSize M-29:cao 1m6-1m65,nặng 50-57kg\nSize L-30:Cao 1m66-1m70,nặng 57-61kg\nSize XL-31:Cao 1m70-1m74,nặng 62-69kg\nSize XXL-32:Cao 1m74-1m77,nặng 70-75kg&lt;/p&gt;', '56000.0000', '238000.0000', '115', 1, b'1', b'1', b'0', 1, 4, 2, '2021-06-13 07:40:54', NULL, '2021-05-18 12:48:57'),
(8, 'UA43T6500AKXXV', 'Smart Tivi Samsung 43 Inch Full HD UA43T6500AKXXV - Miễn phí lắp đặt', 'smarttv0009.png', '', '&lt;p&gt;1. Thông số kỹ thuật: - Hiển thị + Kích thước màn hình: 43 inch+ Độ phân giải: Full HD 1920x1080- Video: + Hyper Real+ HDR 10+        + UHD Dimming+ Nâng cấp tương phản + Hỗ trợ Chế độ Tự nhiên- Kết nối:         + HDMI: 2+ USB: 1+ Wireless LAN Tích hợp        + Bluetooth - Smart Service+ Smart Tivi+ Hệ điều hành Tizen™+ Trợ lý ảo: Google Assistant + Trình duyệt web - Phụ kiện: + Chân đế + Remote + Dây nguồn 2. Mô tả chi tiết: - Hình ảnh hiển thị rõ nét, độ phân giải gấp 2 lần so với TV HD thông thường - Truy cập đa dạng nội dung từ 1 điều khiển  - Công nghệ Ultra Clean View phân tích nội dung với một thuật toán tăng cường, lọc nhiễu, giảm nhòe- Chất lượng hình ảnh chân thức với độ phân giải Full HD- Âm thanh trong trẻo với công nghệ âm thanh Dolby Digital Plus- Dễ dàng điều khiển với trợ lý ảo Google 3. Thông tin bảo hành: - Thông tin bảo hành Smart TV Samsung Màn Hình Cong Crystal UHD 4K 55 inch UA55TU8300KXXV (Điều khiển bằng giọng nói)- Bộ sản phẩm bao gồm:  Tivi, Chân đế, Adapter, Remote- Bảo hành 24 tháng.- Trung tâm bảo hành:  https://www.samsung.com/vn/support/service-center/- Hotline:  1800-588-8554. Công lắp đặt: - Miễn phí cho nội thành HN (12 quận: Quận Ba Đình, Quận Bắc Từ Liêm, Quận Cầu Giấy, Quận Hà Đông, Quận Hai Bà Trưng, Quận Hoàn Kiếm, Quận Hoàng Mai, Quận Long Biên, Quận Nam Từ Liêm, Quận Tây Hồ, Quận Thanh Xuân, Quận Đống Đa) và nội thành HCM (Trừ Nhà Bè, Bình Chánh, Cần Giờ, Củ Chi).- Chi phí vật tư: Nhân viên sẽ thông báo phí vật tư (ống đồng, dây điện v.v...) khi khảo sát lắp đặt (Bảng kê xem tại ảnh 2). Khách hàng sẽ thanh toán trực tiếp cho nhân viên kỹ thuật sau khi việc lắp đặt hoàn thành - chi phí này sẽ không hoàn lại trong bất cứ trường hợp nào.- Thời gian liên hệ lắp đặt: 24h kể từ khi nhận hàng (Trừ Chủ nhật/ Ngày Lễ).- Quy định đổi trả: Chỉ đổi/trả sản phẩm, từ chối nhận hàng tại thời điểm nhận hàng trong trường hợp sản phẩm giao đến không còn nguyên vẹn, thiếu phụ kiện hoặc nhận được sai hàng. Khi sản phẩm đã được cắm điện sử dụng và/hoặc lắp đặt, và gặp lỗi kĩ thuật, sản phẩm sẽ được hưởng chế độ bảo hành theo đúng chính sách của nhà sản xuất- Quý khách hàng có thể trì hoãn việc lắp đặt tối đa là 7 ngày lịch kể từ ngày giao hàng thành công (không tính ngày Lễ). Nếu nhân viên hỗ trợ không thể liên hệ được với Khách hàng quá 3 lần, hoặc Khách hàng trì hoãn việc lắp đặt quá thời hạn trên, Dịch vụ lắp đặt sẽ được hủy bỏ.- Đơn vị vận chuyển giao hàng cho bạn KHÔNG có nghiệp vụ lắp đặt sản phẩm. Đơn vị lắp đặt sẽ liên hệ bạn trong vòng 24h khi bạn nhận hàng!- Khi sản phẩm đã được cắm điện sử dụng và/hoặc lắp đặt, và gặp lỗi kĩ thuật, sản phẩm sẽ được hưởng chế độ bảo hành theo đúng chính sách của nhà sản xuất&lt;/p&gt;', '0.0000', '8990000.0000', '50', 0, b'0', b'0', b'0', 0, 9, 5, '2021-06-13 07:40:56', NULL, '2021-06-05 14:07:35'),
(9, 'FUJIFILMXT30', 'Máy ảnh Fujifilm X-T30 + Kit 15-45mm (Black/Silver/Charcoal Silver) ', 'fujifilmxt30.jpg', '', 'FUJIFILM X-T30 là máy ảnh không gương lật đa năng mang đến khả năng chụp ảnh ấn tượng cùng khả năng quay video tiên tiến cùng với các đặc điểm xử lý trực quan và mượt mà. Máy được nâng cấp bộ cảm biến và bộ xử lý để nâng cao độ phân giải của ảnh tĩnh và video 4K đều có thể được ghi lại trong khi hệ thống lấy nét tự động apt mang lại hiệu suất lấy nét nhanh và chính xác. Cảm biến ảnh X-Trans CMOS 4 26.1MP APS-C, có thiết kế chiếu sáng ngược nhằm mang đến chất lượng hình ảnh lớn hơn trong phạm vi độ nhạy, cùng với hệ thống lấy nét tự động 425 điểm để lấy nét nhanh, chính xác hiệu suất và theo dõi chủ đề. Bộ xử lý ảnh X-Processor 4, sử dụng bốn nhân CPU để xử lý hình ảnh nhanh hơn cũng như chụp liên tục lên đến 8 khung hình / giây với màn trập cơ học, chụp 30 khung hình / giây ở màn hình 1,25x và màn trập điện tử và DCI / Quay video UHD 4K30=========================Cảm biến 26.1MP APS-C X-Trans BSI CMOS 4 và Bộ xử lý X-Processor 4Quay video UHD và DCI 4KX-T30 mang đến khả năng quay video UHD 4K30 bên trong với tốc độ lên tới 200 Mb / giây và có thể ghi đồng thời bên ngoài và bên trong. Máy cũng có thể ghi DCI 4K30 và Full HD 1080p120 và các tệp video có thể được lưu bằng cách sử dụng nén MPEG-4 AVC / H.264 hoặc HEVC / H.265 và 4K. Bên cạnh đó, tốc độ của X-Processor 4 CPU cho phép tốc độ đọc nhanh khi quay video 4K, giúp giảm méo màn trập khi quay đối tượng chuyển động.Kính ngắm điện tử OLED 2,36m dot cung cấp độ phóng đại 0,62x với tốc độ làm mới nhanh, góc nhìn rộng và cài đặt diopter có thể điều chỉnh. Kính ngắm vẫn không bị mất trong khi chụp với tốc độ chụp 30 khung hình / giây hàng đầu và Chế độ Trình tìm kiếm thể thao độc đáo cũng có thể được sử dụng, làm nổi bật vùng cắt 16,6MP của cảm biến để cho phép bạn nhìn thấy bên ngoài khung hình.Màn hình cảm ứng LCD 3.0 inch 1.04m dot có thiết nghiêng hai chiều, để phù hợp với làm việc từ các góc cao và thấp bất kể nếu chụp với hướng ngang hoặc dọc.Bề mặ trên bố trí các nút quay số và cần gạt để điều khiển nhanh, trực quan các cài đặt phơi sáng, bao gồm quay số tốc độ màn trập để điều chỉnh tốc độ màn trập trực tiếp, quay số chế độ và quay số bù phơi sáng để chọn +/- 3 EV trong 1 / 3 bước, trong khi vị trí quay số lệnh sẽ mở rộng phạm vi lên +/- 5 EV để kiểm soát thêm.Focus Lever chuyên biệt giúp kiểm soát lấy nét nhanh hơn, trực quan hơn khi chọn điểm lấy nét nhất định trong lúc chụp.Kết nối Bluetooth 4.2 tiết kiệm năng lượng tích hợp cho phép chia sẻ', '0.0000', '18990000.0000', '32', 0, b'0', b'0', b'0', 1, 10, 6, '2021-06-16 00:51:28', NULL, '2021-06-05 14:16:15'),
(10, 'AGI800012', 'Khăn giấy ướt cho bé Agi 80 tờ', 'agi80to.jpg', '', '&lt;p&gt;Khăn ướt Agi 80 tờ - an toàn cho bé.NSX: 2020 HSD 3 năm.- Hàng công ty tại Việt Nam sản xuất theo công nghệ Hàn Quốc.- Khăn ướt Agi không hương hoặc hương nhẹ, ko chứa cồn &amp; ko paraben thích hợp sử dụng cho bé sơ sinh &amp; cả nhà.- Mẫu bé mèo &amp; gấu trúc: không hương.Shop sẽ giao ngẫu nhiên mẫu tuỳ theo mỗi đợt hàng về ạ.&lt;/p&gt;', '0.0000', '25000.0000', '210', 0, b'0', b'0', b'0', 3, 11, 7, '2021-06-14 01:07:40', NULL, '2021-06-05 14:25:22'),
(11, 'MAYBE0013', 'Kem lót mịn da che khuyết điểm Baby Skin Pore Eraser Primer và Bút cushion che khuyết điểm Maybelline', 'maybelline0014.jpg', '', '&lt;p&gt;&lt;p&gt;• VÌ SAO BẠN SẼ THÍCH?Kem lót Baby Skin Pore Eraser giúp làm mịn da, che khuyết điểm, tạo hiệu ứng lỗ chân lông thu nhỏ, cho lớp nền mịn màng hoàn hảo. Cấu trúc gel trong suốt, mịn nhẹ dễ tán, hiệu quả trong việc che lỗ chân lông ngay tức thì. Hứa hẹn sẽ mang lại làn da láng mịn như da em bé trong tíc tắc.Bút cushion đa năng Instant Age Rewind che khuyết điểm thần thánh được yêu thích nhất trên toàn thế giới và nổi tiếng về công dụng che quầng thâm, che phủ hoàn hảo các khuyết điểm như thâm, mụn, tàn nhang, sẹo nhỏ,... Bộ trang điểm gồm:1x Kem lót siêu mịn da che khuyết điểm Baby Skin 22ml1x Bút cushion che khuyết điểm giảm quầng thâm Instant Age Rewind• ƯU ĐIỂM NỔI BẬTKem lót Baby Skin:- Kem lót có khả năng che khuyết điểm vượt trội, giúp cải thiện tình trạng da trước khi trang điểm chỉ trong 1 phút.- Cấu trúc gel trong suốt, mịn nhẹ dễ tán, hiệu quả trong việc che lỗ chân lông, cải thiện tình trạng da thô ráp, ngăn mốc da khi trang điểmBút cushion che khuyết điểm Instant Age Rewind:- Che quầng thâm mắt và che phủ hoàn hảo các khuyết điểm như thâm, mụn, tàn nhang, sẹo nhỏ,... - Có thể sử dụng để nhấn sáng &amp; tạo khối. Thiết kế đầu cushion giúp dễ dàng tán đều kem. - Bút che khuyết điểm nhỏ gọn, tiện lợi để mang theo bên mình và sử dụng như kem nền.• HIỆU QUẢ SỬ DỤNG- Kem lót Baby Skin nổi danh với khả năng che khuyết điểm, giúp cải thiện tình trạng da và dưỡng da trước khi trang điểm chỉ trong tích tắc. Đặc biệt vì có kết cấu gel mịn trong suốt nên sẽ làm da mịn như em bé và giúp kem nền lên màu chuẩn, tiệp da và ngăn bóng nhờn.- Bút cushion Instant Age Rewind cực dễ sử dụng mang đến hiệu quả che khuyết điểm và đều màu da tức thì.• HƯỚNG DẪN SỬ DỤNG1. Sử dụng kem lót trước lớp nền để giữ lớp trang điểm lâu hơn hoặc có thể dùng ngay sau khi rửa mặt sạch như kem dưỡng trước trang điểm.2. Kết hợp cùng bút cushion che khuyết điểm đa năng Instant Age Rewind Concealer để đạt được lớp nền hoàn hảo nhấtXuất xứ thương hiệu: Mỹ Nơi sản xuất: Trung Quốc Ngày sản xuất: Xem trên bao bì sản phẩm Hạn sử dụng: 3 năm kể từ ngày sản xuất• THÔNG TIN THƯƠNG HIỆULà thương hiệu trang điểm số 1 thế giới, Maybelline New York chính thức có mặt tại Việt Nam từ năm 2007 và nhanh chóng trở thành thương hiệu trang điểm hàng đầu ở các dòng sản phẩm Mascara, Kem nền, Son kem lì... Sản phẩm của Maybelline luôn ứng dụng công nghệ tiên tiến, dễ sử dụng, dẫn đầu xu hướng Makeup với sự đa dạng về sản phẩm cùng giá thành hợp lý. Maybelline trở thành thương hiệu được yêu thích nhất tại Việt Nam bởi các bạn trẻ thích trang điểm, thích thể hiện chất riêng và dám nghĩ dám làm.*Bắt nguồn từ New York- Mỹ và đã có mặt ở hơn 150 quốc gia, Maybelline sở hữu nhiều nhà máy sản xuất trên toàn thế giới như Trung Quốc, Mỹ, Pháp, Nhật,... Dù được sản xuất ở đâu, các sản phẩm đều tuân thủ quy trình kiểm soát chất lượng nghiêm ngặt của Maybelline toàn cầu. Sản phẩm Maybelline chính hãng tại Việt Nam đều có tem nhãn tiếng Việt phía sau và nhập khẩu trực tiếp từ Công ty TNHH *Bao bì thay đổi theo từng đợt nhập&lt;/p&gt;&lt;/p&gt;', '0.0000', '289000.0000', '115', 0, b'0', b'0', b'0', 0, 12, 8, '2021-06-13 07:41:04', NULL, '2021-06-05 14:30:14'),
(12, 'MIX6SEED0015', 'Hạt Dinh Dưỡng Mix 6 Siêu Hạt 600G - Hàng Nhập Khẩu Thượng Hạng - Cam Kết Chất Lượng NOFAFOOD', 'mix6seeds0016.jpg', '', '&lt;p&gt;Hạt Dinh Dưỡng Mix 6 Siêu Hạt 600G Mẹ Khỏe Đẹp - Bé Thông MinhThương Hiệu: ☀️ NOFAFOOD - TINH HOA ẨM THỰC VIỆT************************************? THÔNG TIN SẢN PHẨM ?? Thành phần: Mix 6 loại hạt gồm Óc chó đỏ Mỹ, Hạnh Nhân Blue Diamond, Điều Bình Phước, Nhân hạt bí Ấn Độ, Óc chó vàng Mỹ, Macca Úc? Tác dụng chính:          - Cung cấp đầy đủ chất dinh dưỡng tốt cho sức khỏe, đặc biệt mẹ bầu           - Giúp bé khỏe mạnh, thông minh, phát triển toàn diện từ trong bụng mẹ          - Hỗ trợ giảm cân, là thực phẩm lý tưởng cho các chị em có chế độ ăn kiêng lành mạnh          - Giảm căng thẳng và ngăn ngừa lão hóa làn da hiệu quả...     ? Ăn sao cho ngon: Sử dụng trực tiếp hoặc Mix cùng sữa chua, sữa đậu nành hoặc xào với rau củ xanh để ngon hơn và đỡ bị ngán nha các chị? Bảo quản đúng cách: Để nơi khô ráo, thoáng mát. Nếu không dùng hết vui lòng nắp kín và cất ở ngăn lạnh tủ lạnh? Hạn dùng: 6 Tháng từ ngày Sản xuất (In trên Bao bì) ? Trọng Lượng: 600G************************************? TẠI SAO NÊN SỬ DỤNG SẢN PHẨM CỦA NOFAFOOD❓❌ Không bán hàng Trung Quốc,hàng lỗi, hàng kém chất lượng❌ Không sử dụng hóa chất ảnh hưởng tới sức khỏe✔️ Nguồn gốc rõ ràng từ nông trại Hữu cơ, đầy đủ hóa đơn chứng từ nhập khẩu✔️ Quy trình chế biến đảm bảo theo Tiêu chuẩn vệ sinh An toàn thực phẩm ✔️ Theo sát hành trình đơn hàng, hối thúc Đ.vị vận chuyển đảm bảo Quý khách nhận được hàng sớm nhất có thể✔️ Ngon, An toàn, Sang trọng &amp; Lịch sự, phù hợp cho sử dụng hàng ngày và quà Biếu Tặng dịp Lễ - Tết✔️ Hỗ trợ, giải quyết mọi vấn đề của Khách hàng Trước - Trong - Sau khi sử dụng sản phẩm✔️ Liên tục cải thiện sản phẩm, dịch vụ, chính sách hậu mãi để đem đến giá trị và sự hài lòng của Quý khách************************************☑️ CAM KẾT ❗✔️ Hoàn tiền &amp; Miễn phí đổi trả 15 ngày trong trường hợp:         - Sản phẩm thực tế không giống như mô tả         - Hàng bị lỗi, mốc, hỏng không thể sử dụng hoặc ảnh hưởng tới chất lượng✔️ Trong mọi trường hợp, nếu Quý khách chưa hài lòng dù bất kỳ lý do nào, chúng tôi sẽ Cố gắng giải quyết hết khả năng để giúp Quý khách có được sự thoải mái và hài lòng nhất&lt;/p&gt;', '0.0000', '359000.0000', '385', 0, b'0', b'0', b'0', 3, 13, 9, '2021-06-16 00:51:15', NULL, '2021-06-05 14:36:23'),
(13, 'LAZERKO0016', 'Spring BlackinsSmall Suit Men\'s Main Korean Slim Jacket Men\'s Casual Suit Pants Trendy Three-Piece Suit', '16.jpg', '', '&lt;p&gt;Follow the Store to Receive Coupons，Get New and Know Early Every Day，》Product Size：In the Second Picture，The Slide View》Product Parameters：：Prince Yi DiFabric/Material：Other/Polyester（Polyester Fiber）Composition Content：91%（With）—95%（With）Neckline：Notch LapelClothing Placket：A Grain of Single BreastedStyle：Korean-StyleFor Ages：Youth（18-25Years Old）》Single Notice：? We Have Been Operating E-Commerce in Shenzhen for Many Years，Adequate Products, High Quality and Affordable Price Are Guaranteed ✅ Support chao shang Cash on Delivery☆Security☆? Everyone, You Can Move Your Little Finger to Pay Attention，New Style Is Available Every Day ?? Goods Sent from Shenzhen, Mainland China，Single48Hours Library，Normal5-9Day Taiwan Stores，Please Be Careful When Ordering Urgent Items ??Tips：1、On the Feetす：Because Each Person\'s Body Proportion Is Different，The above Sizes Are for Reference Only。Because It Is Measured Manually，There Will Be3-8CmError Please Forgive Me2、On the Label：In Response to Trademark Protection Law，Some Clothes Have Been Cut the Tag off，Clothes Guarantee New，Please Rest Assured to Buy！3、About Color Difference：Due to Light Display and Other Reasons, the Model Will Be Brighter as Image Shot by Strong Light.，The Item Is Subject to the Actual Color.&lt;/p&gt;', '0.0000', '990000.0000', '120', 0, b'0', b'0', b'0', 1, 4, 2, '2021-06-14 16:09:27', NULL, '2021-06-08 07:53:02'),
(14, 'EOS3000D', 'Máy Ảnh Canon EOS 3000D + Lens EF-S 18 - 55mm III (Lê Bảo Minh) - Hàng Chính hãng', '24.jpg', '', '&lt;p&gt;&lt;p&gt;Cảm biến 18MP APS-C CMOSChíp xử lý hình ảnh DIGIC 4+ISO 100 - 6400 (Có thể mở rộng đến 12.800)Màn hình LCD 3.0\" 230,000 điểm ảnhQuay phim Full HD 1080p 30 fpsChụp liên tục 3 hình/ giâyHệ thống đo nét tiên tiến với 9 điểmHỗ trợ thẻ SD/SDHC/SDXCHỗ trợ kết nối wifiỐng kính EF-S 18-55mm f/3.5-5.6 IS IIIMang đến trải nghiệm tinh túy cho người mới bắt đầuMáy ảnh Canon EOS 3000D&nbsp;được sản xuất nhằm hướng đến đối tượng người dùng mới tiếp cận DSLR, bên cạnh một mức giá vừa phải cùng nhiều điểm thiết kế thuận tiện để phù hợp với người mới bắt đầu như&nbsp;trang bị tay nắm giúp bạn nắm chắc máy ảnh, ống ngắm quang học giúp bạn bắt được những khoảnh khắc thoáng qua, và một bánh xe chính để điều chỉnh, chuyển đổi nhanh giữa các chức năng giúp người dùng dễ dàng thao tác và cho ra những bức ảnh đẹp mắt.Kiểu dáng sang trọng cùng màu sắc thanh lịchCanon 3000D có lớp vỏ ngoài cứng cáp cùng màu đen cổ điển thanh lịch và sang trọng mang độ thẩm mỹ cao cùng với kích thước gọn nhẹ như những dòng máy ảnh&nbsp;Mirrorless, thuận tiện để đồng hành cùng bạn trên mọi nẻo đường để tạo ra những thước phim, khung hình độc đáo nhất.Chip xử lý hình ảnh DIGIC 4 cùng cảm biến APS-C CMOS 18MPĐược trang bị cảm biến CMOS APS – C 18MP cùng chip xử lý hình ảnh DIGIC 4+ cho khả năng chụp liên tiếp với tốc độ 3 hình/giây&nbsp;mang lại cho bạn những bức ảnh chi tiết có độ sắc nét cao, định dạng lớn, màu sắc được tái tạo chính xác và có một chiều sâu nhất định.Khả năng tự động lấy nét ấn tượngDãi ISO&nbsp;rộng từ 100 – 6400 (có thể mở rộng đến ISO 12800) và được trang bị nhiều chức năng chụp thiết yếu trên nền tảng của một máy ảnh EOS đã giúp thiết bị có thể chụp được những vật thể, đối tượng chuyển động khá sắc nét nhờ vào khả năng tự động lấy nét&nbsp;(AF) nhanh với hệ thống AF 9 điểm với 1 điểm AF kiểu chữ thập ở giữa.Màn hình LCD 3 inch rõ nétCông nghệ LCD bên một màn hình 3 inch vừa đủ lớn, sẽ giúp bạn dễ dàng quan sát, chọn góc độ, điểm nhấn, chọn lựa các thao tác, điều chỉnh và luân chuyển chế độ trước khi chụp một cách thuận tiện nhất.Vượt khỏi mọi giới hạn ánh sángCanon 3000D sở hữu tốc độ đóng mở màn trập vượt trội cùng khả năng hạn chế tối đa hiện tượng nhòe do rung lắc khi được trang bị tay nắm hiệu quả, bên cạnh đó dải ISO chuẩn 100 - 6400 và có thể mở rộng đến 12800 cùng chíp xử lý ảnh&nbsp;DIGIC 4+, bất chấp mọi điều kiện ánh sáng, cho hiệu quả hình ảnh vượt trội&nbsp;màu sắc chuẩn xác, giàu tương phản, độ đậm nét chính xác và ít nhiễu.Khung ngắm quang OVF mang lại trải nghiệm chụp ảnh DSLR kinh điểnMáy ảnh đã được tối ưu hóa để chụp qua khung ngắm OVF cung cấp phạm vi bao phủ khoảng 95% với độ phóng đại xấp xỉ 0,8x, điểm AF hỗ trợ f/5.6 và AF kiểu chữ thập với điểm AF trung tâm giúp đủ để quan sát rõ đối tượng ngay cả khi chụp ảnh ở ngoài trời. Bên cạnh đó với cách bố trí bánh xe điều chỉnh, đặt hết các nút về bên phải cùng kích thước lớn của bánh xe nhằm mục đích tạo ra sự tập trung duy nhất của bạn vào ống ngắm, nhằm mang đến những trải nghiệm thoải mái và cho ra lò những khung hình hoàn mỹ.Đa dạng chức năng ảnh và videoKhi bạn muốn thay đổi nhiều chế độ chụp khác nhau như là chụp chân dung, phong cảnh tự nhiên, thể thao hay nội dung khác, thật đơn giản bạn chỉ cần xoay bánh xe điều chỉnh chế độ nằm ở mặt trên của máy ảnh để truy cập chế độ cảnh thích hợp. Các hiệu ứng như Creative filter,&nbsp;Toy camera,&nbsp;Miniature,&nbsp;Shoot by ambience điều cần làm là chỉ cần&nbsp;thiết lập mô tả chính xác nhất cảnh đó để sử dụng thích hợp.Chế độ quay phim EOS hỗ trợ quay video dưới nhiều định dạng khác nhau, bao gồm Full HD 30P/25P,&nbsp;bạn chỉ cần xoay bánh xe điều chỉnh chế độ đến chế độ Movie Shooting, và nhấn nút quay phim ở mặt sau của thân máy để bắt đầu hoặc dừng quay.Kết nối và chia sẻ nhanh chóngMáy ảnh Canon EOS 3000D hỗ trợ kết nối không dây Wifi giúp bạn dễ dàng chia sẻ những hình ảnh đã chụp qua các thiết bị khác. Bên cạnh đó Canon còn có sẵn ứng dụng Camera Connect Canon&nbsp;kết nối điện thoại thông minh để thực hiện chụp từ xa, hoặc duyệt tìm và lưu các ảnh đã lưu trên máy ảnh, đồng thời chia sẻ hình ảnh, video clip qua các trang mạng xã hội khi thiết bị được kết nối mạng internet.&lt;/p&gt;&lt;/p&gt;', '0.0000', '9900000.0000', '15', 0, b'0', b'0', b'0', 0, 10, 10, '2021-06-16 00:44:34', NULL, '2021-06-08 14:14:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_product_discount`
--

CREATE TABLE `shop_product_discount` (
  `discount_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `discount_name` varchar(500) NOT NULL,
  `discount_amount` double NOT NULL,
  `is_fixed` bit(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expiration_date` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_product_discount`
--

INSERT INTO `shop_product_discount` (`discount_id`, `product_id`, `discount_name`, `discount_amount`, `is_fixed`, `created_at`, `expiration_date`, `updated_at`) VALUES
(2, 3, 'sale thanh lý', 0.4, b'0', '2021-06-06 16:32:37', '2021-06-30 16:32:27', '2021-05-20 05:02:32'),
(3, 1, 'Sale cho giống với người ta', 0.15, b'0', '2021-06-08 03:14:08', '2021-08-31 03:13:15', '2021-06-08 03:14:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_product_images`
--

CREATE TABLE `shop_product_images` (
  `image_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_product_images`
--

INSERT INTO `shop_product_images` (`image_id`, `product_id`, `image`) VALUES
(1, 1, 'prod_lamacbo0002.jpg'),
(2, 1, 'prod_lamacbo0003.jpg'),
(3, 1, 'prod_lamacbo0004.jpg'),
(8, 1, '41242_macbook_air_m1_2020_grey_ha11623427293.jpg'),
(9, 3, '11623429188.jpg'),
(10, 4, 'bongc1-21623429960.png'),
(11, 5, '7-thoi-quen-cua-ban-tre-thanh-dat-kho-nho-tai-ban-20201623430438.jpg'),
(12, 5, '7thoiquenss1623430438.jpg'),
(13, 8, 'product_15664_61623512372.png'),
(14, 8, 'product_15664_81623512372.png'),
(15, 8, 'product_15664_91623512372.png'),
(16, 13, '$_121623514503.jpg'),
(17, 13, 'O1CN01BYHGL31QMBGTQkpxS_!!25204319611623514503.jpg'),
(18, 10, '02b05b97773285c6c2c30f6416a8c9231623514786.jpg'),
(19, 10, 'a042c9ab61b541a52b5c36a5ef1f825a1623514786.jpg'),
(20, 10, 'd78d541100f0a8b194c9a0f27ef166f71623514786.jpg'),
(21, 11, '89a014c28673106922acbb123d12fc331623515033.jpg'),
(22, 11, '0580446851c0fa3af3f23d7a665511271623515033.jpg'),
(23, 12, '3ba795ba1d56a82c25937ace0b59019e1623552677.jpg'),
(24, 12, 'df7a9bf4d38dc0bb545850bb82a3f4171623552677.jpg'),
(25, 12, 'ed3a518faef4a33c07c2fc09cb9758111623552677.jpg'),
(26, 6, '09e924c9e7b1f9901f1b79e31bae90261623552878.jpg'),
(27, 6, 'b7bc293bc398be61303bd26a6aa240791623552878.jpg'),
(28, 14, '191623804256.jpg'),
(29, 14, '271623804274.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_product_reviews`
--

CREATE TABLE `shop_product_reviews` (
  `review_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `rating` float NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_product_reviews`
--

INSERT INTO `shop_product_reviews` (`review_id`, `product_id`, `customer_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 4, 'đóng gói chắc chắn. sản phẩm đúng như mô tả, chỉ thiếu shop quên bỏ cái kim bơm vào cho mình.', '2021-05-18 06:54:01', '2021-05-18 06:54:01'),
(3, 3, 5, 4, 'xinh lắm cả nhà ơi. nên mua ủng hộ.', '2021-05-18 07:16:32', '2021-05-18 07:16:32'),
(4, 5, 4, 5, 'đóng gói cẩn thận, vận chuyển nhanh', '2021-05-18 07:16:32', '2021-05-18 07:16:32'),
(5, 1, 7, 5, 'Sản phẩm tuyệt vời giao hàng cực nhanh không chê vào đâu được', '2021-06-08 03:01:33', '2021-06-08 03:01:33'),
(6, 1, 5, 5, 'Quá đẹp, vẻ trang sang trọng, xài cực kỳ êm máy, cám ơn shop ạ', '2021-06-08 03:25:10', '2021-06-08 03:25:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_suppliers`
--

CREATE TABLE `shop_suppliers` (
  `supplier_id` bigint(20) NOT NULL,
  `supplier_code` varchar(50) NOT NULL,
  `supplier_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shop_suppliers`
--

INSERT INTO `shop_suppliers` (`supplier_id`, `supplier_code`, `supplier_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IPHONE001', 'Apple Việt Nam', 'Apple Việt Nam là nhà cung cấp chính hãng từ Apple Mỹ, cung cấp những dòng sản phẩm về điện thoại, tablet, laptop, đồng hồ, ...', 'supplier_iphone001.jpg', '2021-05-18 07:52:04', '2021-05-18 07:52:04'),
(2, 'GUMAC002', 'Thời trang Gumac', 'Thời trang Gumac cung cấp những sản phẩm đành cho phái đẹp: váy, áo sơ mi, giày, áo thun thời trang, ...', 'supplier_gumac002.jpg', '2021-05-18 07:52:04', '2021-05-18 07:52:04'),
(3, 'THAIH003', 'Thái Hà books', 'Thái Hà books cung cấp những đầu sách về kinh doanh, kinh tế, doanh nhân, tri thức, ...', 'supplier_thaih003.jpg', '2021-05-18 07:56:56', '2021-05-18 07:56:56'),
(4, 'DONGL004', 'Động lực Việt Nam', 'Động lực Việt Nam là nhà cung cấp dụng cụ thể thao, bao gồm bóng, quần áo thể thao, giày chạy bộ, giày bóng rổ, ...', 'supplier_dongl004.jpg', '2021-05-18 08:01:46', '2021-05-18 08:01:46'),
(5, 'SAMSU005', 'Samsung Việt Nam', 'Chào mừng bạn đến với Samsung Việt Nam. Cùng khám phá những sản phẩm công nghệ hàng đầu thế giới như Điện thoại di động, Tivi, đồ gia dụng', '', '2021-06-05 14:05:58', '2021-06-05 14:05:58'),
(6, 'FUJIF010', 'Fujifilm Việt Nam', 'Là nhà cung cấp máy ảnh, phụ kiện máy ảnh, thiết bị quay video', '', '2021-06-05 14:14:33', '2021-06-05 14:14:33'),
(7, 'AGIJA011', 'Agi Nhật Bản', 'cung cấp giấy lau tay, lau chùi cho mẹ và bé', '', '2021-06-05 14:24:06', '2021-06-05 14:24:06'),
(8, 'MAYBE012', 'MAYBELLINE NEWYORK', 'Nhà cung cấp mỹ phẩm', '', '2021-06-05 14:28:54', '2021-06-05 14:28:54'),
(9, 'NOFAFOOD014', 'Nofafood', 'cung cấp những thực phẩm online', '', '2021-06-05 14:35:01', '2021-06-05 14:35:01'),
(10, 'CANON012', 'Cannon Lê Bảo Minh', 'Là nhà cung cấp máy ảnh cannon độc quyền, cung cấp các thiết bị hỗ trợ chụp hình quay phim', '', '2021-06-08 14:12:20', '2021-06-08 14:12:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_vouchers`
--

CREATE TABLE `shop_vouchers` (
  `voucher_id` bigint(20) NOT NULL,
  `voucher_code` varchar(500) NOT NULL,
  `voucher_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `uses` int(10) NOT NULL,
  `max_uses` int(10) NOT NULL,
  `max_uses_user` int(10) NOT NULL,
  `type` tinyint(3) NOT NULL,
  `discount_amount` double NOT NULL,
  `is_fixed` bit(1) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acl_permissions`
--
ALTER TABLE `acl_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Chỉ mục cho bảng `acl_roles`
--
ALTER TABLE `acl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `acl_role_has_permissions`
--
ALTER TABLE `acl_role_has_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `acl_user`
--
ALTER TABLE `acl_user`
  ADD PRIMARY KEY (`acl_id`);

--
-- Chỉ mục cho bảng `acl_user_has_permissions`
--
ALTER TABLE `acl_user_has_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `acl_user_has_roles`
--
ALTER TABLE `acl_user_has_roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `shop_customers`
--
ALTER TABLE `shop_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `shop_orders`
--
ALTER TABLE `shop_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Chỉ mục cho bảng `shop_order_details`
--
ALTER TABLE `shop_order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `shop_payment_types`
--
ALTER TABLE `shop_payment_types`
  ADD PRIMARY KEY (`payment_type_id`);

--
-- Chỉ mục cho bảng `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `shop_products_ibfk_1` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Chỉ mục cho bảng `shop_product_discount`
--
ALTER TABLE `shop_product_discount`
  ADD PRIMARY KEY (`discount_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `shop_product_images`
--
ALTER TABLE `shop_product_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `shop_product_reviews`
--
ALTER TABLE `shop_product_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `shop_product_reviews_ibfk_1` (`product_id`),
  ADD KEY `shop_product_reviews_ibfk_2` (`customer_id`);

--
-- Chỉ mục cho bảng `shop_suppliers`
--
ALTER TABLE `shop_suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Chỉ mục cho bảng `shop_vouchers`
--
ALTER TABLE `shop_vouchers`
  ADD PRIMARY KEY (`voucher_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acl_permissions`
--
ALTER TABLE `acl_permissions`
  MODIFY `permission_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `acl_roles`
--
ALTER TABLE `acl_roles`
  MODIFY `role_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `acl_role_has_permissions`
--
ALTER TABLE `acl_role_has_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `acl_user`
--
ALTER TABLE `acl_user`
  MODIFY `acl_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `acl_user_has_permissions`
--
ALTER TABLE `acl_user_has_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `acl_user_has_roles`
--
ALTER TABLE `acl_user_has_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `shop_customers`
--
ALTER TABLE `shop_customers`
  MODIFY `customer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `shop_orders`
--
ALTER TABLE `shop_orders`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `shop_order_details`
--
ALTER TABLE `shop_order_details`
  MODIFY `order_detail_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `shop_payment_types`
--
ALTER TABLE `shop_payment_types`
  MODIFY `payment_type_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `shop_product_discount`
--
ALTER TABLE `shop_product_discount`
  MODIFY `discount_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `shop_product_images`
--
ALTER TABLE `shop_product_images`
  MODIFY `image_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `shop_product_reviews`
--
ALTER TABLE `shop_product_reviews`
  MODIFY `review_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `shop_suppliers`
--
ALTER TABLE `shop_suppliers`
  MODIFY `supplier_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `shop_vouchers`
--
ALTER TABLE `shop_vouchers`
  MODIFY `voucher_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `shop_orders`
--
ALTER TABLE `shop_orders`
  ADD CONSTRAINT `shop_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customers` (`customer_id`),
  ADD CONSTRAINT `shop_orders_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `acl_user` (`acl_id`),
  ADD CONSTRAINT `shop_orders_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `shop_payment_types` (`payment_type_id`);

--
-- Các ràng buộc cho bảng `shop_order_details`
--
ALTER TABLE `shop_order_details`
  ADD CONSTRAINT `shop_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`),
  ADD CONSTRAINT `shop_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `shop_orders` (`order_id`);

--
-- Các ràng buộc cho bảng `shop_products`
--
ALTER TABLE `shop_products`
  ADD CONSTRAINT `shop_products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `shop_categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_products_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `shop_suppliers` (`supplier_id`);

--
-- Các ràng buộc cho bảng `shop_product_discount`
--
ALTER TABLE `shop_product_discount`
  ADD CONSTRAINT `shop_product_discount_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `shop_product_images`
--
ALTER TABLE `shop_product_images`
  ADD CONSTRAINT `shop_product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `shop_product_reviews`
--
ALTER TABLE `shop_product_reviews`
  ADD CONSTRAINT `shop_product_reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `shop_product_reviews_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `shop_customers` (`customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
