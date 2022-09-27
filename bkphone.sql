-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2022 lúc 02:58 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bkphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Samsung'),
(2, 'iPhone'),
(3, 'Xiaomi'),
(10, 'Nokia'),
(11, 'Huawei'),
(12, 'Sony');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `user_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `note`, `user_id`, `product_id`, `created_at`, `updated_at`, `status`, `user_avatar`) VALUES
(52, 'Rất tốt', 50, 4, '2022-06-17 11:30:08', '2022-06-17 11:30:08', 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(53, 'Sản phẩm tuyệt vời', 50, 1, '2022-06-18 06:02:08', '2022-06-18 06:02:08', 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(54, 'Giá thành cạnh tranh nha', 53, 1, '2022-06-18 06:03:52', '2022-06-18 11:28:45', 1, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(55, 'Tôi rất thích', 55, 1, '2022-06-19 02:50:21', '2022-06-19 02:50:21', 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `email`, `phone`, `user_id`, `status`, `deleted`, `address`, `created_at`, `total_money`) VALUES
(43, 'Phuc Nguyen', 'phuc.user@gmail.com', '0388542487', 53, 1, 0, 'Vĩnh Long', '2022-05-18 10:28:02', 76980000),
(44, 'Phuc Nguyen', 'ninjavip1st@gmail.com', '0388542487', 53, 1, 0, 'Vĩnh Long', '2022-02-18 11:05:16', 29990000),
(45, 'Trọng Phúc', 'user1@gmail.com', '0123456789', 50, 2, 0, 'KTX Khu A ĐHQG', '2022-01-18 11:06:51', 55980000),
(46, 'Phuc Nguyen', 'customer1@gmail.com', '0388542487', 50, 1, 0, 'Vĩnh Long', '2022-04-18 11:07:42', 18500000),
(47, 'Phuc Nguyen', 'cus@gmail.com', '0906995989', 50, 2, 0, 'Vĩnh Long', '2022-03-18 11:08:16', 39170000),
(48, 'Phuc Nguyen', 'ninja@gmail.com', '0388542487', 50, 1, 0, 'Vĩnh Long', '2022-07-18 11:08:42', 33990000),
(49, 'Phuc Nguyen', 'ninjavip1st@gmail.com', '+84388542487', 51, 2, 0, 'Vĩnh Long', '2022-08-18 11:09:58', 12990000),
(50, 'Phuc Nguyen', 'ninjavip1st@gmail.com', '0906995989', 51, 1, 0, 'Vĩnh Long', '2022-09-18 11:10:18', 50980000),
(51, 'Trọng Phúc', 'user3@gmail.com', '0906995989', 54, 3, 0, 'Vĩnh Long', '2022-10-18 11:10:57', 61980000),
(52, 'Phuc Nguyen', 'customer1@gmail.com', '0906995989', 54, 3, 0, 'Vĩnh Long', '2022-11-18 11:12:03', 34990000),
(53, 'Nguyễn Trọng Phúc', 'ngtrongphuc1905@gmail.com', '0906995989', 54, 1, 0, '268 Lý Thường Kiệt, Quận 10 Tpp. HCM', '2022-12-18 11:12:43', 102970000),
(54, 'Nguyen Trong Phuc', 'phuc.nguyen1905@hcmut.edu.vn', '0388542487', 54, 0, 0, 'Vĩnh Long', '2022-06-18 11:16:32', 34990000),
(55, 'Phuc Nguyen', 'ngtrongphuc1905@gmail.com', '0388542487', 54, 0, 0, '268 Ly Thuong Kiet', '2022-06-18 16:31:56', 33990000),
(56, 'Phuc Nguyen', 'phuc.nguyen1905@hcmut.edu.vn', '0906995989', 54, 4, 0, 'KTX Khu A ĐHQG', '2022-06-18 16:40:44', 34990000),
(57, 'Demo', 'ninjavip1st@gmail.com', '0388542487', 55, 3, 0, 'Vĩnh Long', '2022-06-19 02:50:41', 68980000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `num`, `total_money`) VALUES
(78, 43, 1, 34990000, 1, 34990000),
(79, 43, 4, 41990000, 1, 41990000),
(80, 44, 75, 29990000, 1, 29990000),
(81, 45, 72, 27990000, 2, 55980000),
(82, 46, 59, 18500000, 1, 18500000),
(83, 47, 2, 24990000, 1, 24990000),
(84, 47, 9, 4190000, 1, 4190000),
(85, 47, 53, 9990000, 1, 9990000),
(86, 48, 65, 33990000, 1, 33990000),
(87, 49, 50, 12990000, 1, 12990000),
(88, 50, 7, 17990000, 1, 17990000),
(89, 50, 67, 32990000, 1, 32990000),
(90, 51, 65, 33990000, 1, 33990000),
(91, 51, 66, 27990000, 1, 27990000),
(92, 52, 1, 34990000, 1, 34990000),
(93, 53, 4, 41990000, 1, 41990000),
(94, 53, 67, 32990000, 1, 32990000),
(95, 53, 72, 27990000, 1, 27990000),
(96, 54, 1, 34990000, 1, 34990000),
(97, 55, 65, 33990000, 1, 33990000),
(98, 56, 1, 34990000, 1, 34990000),
(99, 57, 1, 34990000, 1, 34990000),
(100, 57, 65, 33990000, 1, 33990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `user_id`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(10, 2147483647, 54, 34990000, 'Tra iphone', '00', '13775938', 'JCB', '2022-06-18 16:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 2, 'iPhone 13 Pro Max 128GB', 34990000, 29690000, 'https://clickbuy.com.vn/uploads/2021/11/13-1.jpg', 'iPhone 13 Pro Max – siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(2, 2, 'iPhone 13 mini 256GB', 24990000, 21990000, 'https://clickbuy.com.vn/uploads/2021/10/13.jpg', 'iPhone 13 Mini – siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(3, 1, 'Samsung Galaxy S22 Ultra 5G', 20990000, 28990000, 'https://clickbuy.com.vn/uploads/2022/03/s22-ultra.jpg', 'Galaxy S22 Ultra 5G với bút S-Pen tích hợp. Samsung Galaxy S22 Ultra 5G (8GB|128GB) Chính hãng mang đến trải nghiệm di động tối ưu và cao cấp. Bằng cách kết hợp các tính năng tốt nhất của dòng Note và S', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(4, 1, 'Galaxy Z Fold3 5G 256GB', 41990000, 34490000, 'https://clickbuy.com.vn/uploads/2021/10/3-1.jpg', 'Galaxy Z Fold3 5G (Z Fold 3) là chiếc điện thoại màn hình gập cao cấp nhất của Samsung. Z Fold 3 sẽ là chiếc điện thoại Samsung đầu tiên có camera dưới màn hình, đẳng cấp, góp phần mang đến những trải nghiệm mới mẻ, ấn tượng hơn cho người dùng.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(5, 3, 'Xiaomi Redmi 10C', 3890000, 3690000, 'https://clickbuy.com.vn/uploads/2022/03/redmi10.jpg', 'Điện thoại Xiaomi Redmi 10C – Hiệu năng “khủng” trong tầm giá phải chăng. Xiaomi vừa cho ra mắt thêm một lựa chọn smartphone tuyệt vời trong phân khúc phổ thông: điện thoại Xiaomi Redmi 10C với màn hình lớn, hiệu năng “khủng” kèm thời lượng pin dài sẽ giúp người dùng công nghệ có được chiếc smartphone thích hợp cho năm 2022.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(6, 3, 'Poco M4 Pro 5G (6GB/128GB)', 5790000, 5290000, 'https://clickbuy.com.vn/uploads/2022/02/3.jpg', 'POCO M4 Pro 5G chính là dòng điện thoại tầm trung được phát hành bởi công ty con của Xiaomi với nhiều cải tiến so với thế hệ tiền nhiệm. Chỉ sau một thời gian ngắn ra mắt, POCO M4 Pro 5G đã nhận được sự yêu thích và tin dùng từ nhiều người dùng.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(7, 2, 'Apple iPhone 11 64GB', 17990000, 11990000, 'https://clickbuy.com.vn/uploads/2021/08/11-2.jpg', 'iPhone 11 vẫn sở hữu thiết kế tràn viền với “tai thỏ” giống iPhone X. Viền bezel phía trên và dưới cũng được làm gọn lại nhằm tối đa màn hình sử dụng. Cùng với đó, 4 góc của máy cũng được bo tròn nhẹ tạo cảm giác chắc chắn khi cầm trên tay. Mặt lưng iPhone 11 làm từ chất liệu kính nên rất sang trọng, tinh tế. Khác với các dòng iPhone trước, sản phẩm này sẽ có 6 màu bản bạc, vàng, xanh lá, trắng, đen đỏ.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(9, 10, 'Nokia G10', 4190000, 3690000, 'https://clickbuy.com.vn/uploads/2021/11/nokia-g10.jpg', 'Nokia G10 là sản phẩm mới nhất với các ưu điểm chính là viên pin dung lượng lên tới 5050mAh hỗ trợ AI, màn hình lớn 6,5 inch, 3 camera sau và khả năng năng nhận diện khuôn mặt.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(50, 1, 'Samsung Galaxy A73 (5G) 256GB', 12990000, 10690000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/a/7/a73-xanh.jpg', 'Điện thoại cao cấp nhất dòng Galaxy A series sở hữu nhiều nâng cấp đáng giá so với thế hệ trước, từ ngoại hình cho đến hiệu năng, đặc biệt là hệ thống camera. Sau đây là những đánh giá chi tiết về chiếc Samsung A73 giúp bạn có cái nhìn tổng quan nhất về chiếc smartphone cận cao cấp này.', '2022-06-17 01:55:16', '2022-06-17 01:55:16', 0),
(51, 1, 'Samsung Galaxy S20 FE 256GB (Fan Edition)', 15490000, 10990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-20-fe_4_.jpg', 'Samsung S20 FE là chiếc điện thoại sắp được ra mắt từ Samsung, với chữ FE đằng sau tên gọi của máy có nghĩa là Fan Edition. Đây là dòng điện thoại ra mắt như để gửi lời tri ân đến các fan trung thành đã và đang sử dụng các sản phẩm của Samsung. Với số lượng sản phẩm được giới hạn và chỉ mở bán trong thời gian ngắn.', '2022-06-17 01:56:34', '2022-06-17 01:56:34', 0),
(52, 2, 'iPhone 12 128GB I Chính hãng VN/A', 24990000, 17990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12_2__1.jpg', 'iPhone 12 hiện nay là cái tên “sốt xình xịch” bởi đây là một trong 4 siêu phẩm vừa được ra mắt của Apple với những đột phá về cả thiết kế lẫn cấu hình. Phiên bản Apple iPhone 12 128GB chính là một trong những chiếc iPhone được săn đón nhất bởi dung lượng bộ nhớ khủng, cho phép bạn thoải mái với vô vàn ứng dụng.', '2022-06-17 01:57:38', '2022-06-17 01:57:38', 0),
(53, 3, 'Xiaomi Redmi Note 11 Pro Plus 5G', 9990000, 8690000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/1/11-pro-plus-blue.jpg', 'Điện thoại Redmi Note 11 Pro+ có thiết kế thanh lịch và vuông vắn hơn, mặt trước và sau được vát phẳng hơn mang đến kiểu dáng hiện đại, hợp xu hướng. Bốn góc của smartphone vẫn được bo cong để hài hòa với tổng thể, mềm mại cũng như cầm nắm thoải mái.', '2022-06-17 01:58:57', '2022-06-17 01:58:57', 0),
(54, 3, 'Xiaomi 12', 19990000, 14990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_i_xu_ng_1__3_10.png', 'Nối tiếp thành công của Mi 11, hãng điện thoại Xiaomi tiếp tục cho ra mắt mẫu sản phẩm kế nhiệm mang tên Xiaomi 12 với nhiều cải tiến vượt trội so với thế hệ trước. Đây hứa hẹn là một flagship mạnh mẽ về nhiều mặt từ hiệu năng, dung lượng pin đến camera.', '2022-06-17 01:59:49', '2022-06-17 01:59:49', 0),
(55, 10, 'Nokia 105 4G', 900000, 750000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/0/105-2.jpg', 'Điện thoại Nokia 105 4G tập trung vào tối ưu tính tiện lợi cho người dùng. Chiếc máy sở hữu thân hình gọn gàng, mỏng nhẹ, với thiết kế bỏ túi thân thiện giúp bạn dễ dàng cất giữ và lấy máy nghe gọi khi cần. Lớp vỏ máy được chế tác từ chất liệu bền bỉ chuẩn Châu Âu nhằm tăng cường độ cứng cáp và an toàn cho máy.', '2022-06-17 02:03:28', '2022-06-17 02:03:28', 0),
(56, 10, 'Nokia C30 2GB 32GB', 3000000, 2500000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-c30-xanh-600x600_4_4.jpg', 'Thoải mái trải nghiệm cả ngày - Viên pin cực lớn 6000 mAh, sạc tối đa 10W', '2022-06-17 02:05:31', '2022-06-17 02:05:31', 0),
(57, 10, 'Nokia 215 4G', 1500000, 1250000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-215-4g-600jpg-600x600.jpg', 'Với nhiều người dùng thích sự nhỏ gọn của các thiết kế dòng điện thoại phổ thông của Nokia, việc trang bị cho mình một chiếc Nokia 215 4G là một sự lựa chọn phù hợp với đầy đủ các tính năng và còn thêm cả khả năng có thể truy cập internet mang đến cho người dùng trải nghiệm hoàn toàn mới.', '2022-06-17 02:06:33', '2022-06-17 02:06:33', 0),
(58, 11, 'Huawei P30', 20990000, 15990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-p50.jpg', 'Điện thoại Huawei P30 nổi bật với màu “Gradient” vốn đã được sử dụng trên Huawei P20, được lấy cảm hứng từ xu hướng sử dụng bản màu Gradients trên các giao diện. Với lớp phủ quang học NCVM bên dưới mặt kính, kết hợp phản chiếu khúc xạ ánh sáng để tạo nên dải màu tươi mới, giúp nó có thể đổi màu từ màu tím sang xanh lục, sang xanh lam.', '2022-06-18 02:51:46', '2022-06-18 02:51:46', 0),
(59, 11, 'Huawei Mate X3', 18500000, 15000000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-mate-x2-4g-1-500x500.jpg', 'Huawei Mate X3 là chiếc smartphone màn hình gập tiếp theo nhà Huawei muốn mang đến cho người dùng. Sở hữu màn hình gập độc đáo cùng những trang bị hiện đại về vi xử lý, camera cũng như công nghệ sạc ấn tượng Mate X3 sẽ giúp người dùng có những giây phút trải nghiệm cực chất và bất tận.', '2022-06-17 02:08:31', '2022-06-17 02:08:31', 0),
(60, 11, 'Huawei Nova 8i', 12990000, 11990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-nova-8-600x600-600x600.jpg', 'Là một hãng điện thoại nổi tiêng với các sản phẩm chất lượng, Huawei mới đây tiếp tục cho ra mắt mẫu smartphone mới mang tên Huawei Nova 8i. Điện thoại Huawei Nova 8i là mẫu điện thoại phân khúc tầm trung với thiết kế cùng hiệu năng ấn tượng.', '2022-06-17 02:09:09', '2022-06-17 02:09:09', 0),
(61, 11, 'Huawei P50 Pro+', 25990000, 20990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-p50-pro-plus.jpg', 'Điện thoại Huawei P50 Pro Plus được trang bị màn hình cong thác nước đẹp mắt cùng hai viền bezel cạnh bên siêu mỏng. Bên trong màn hình là thiết kế đục lỗ chứa camera selfie bên trong màn hình. Nhờ đó màn hình Huawei P50 Pro Plus có một không gian hiển thị khá lớn, lên đến 91,6%.', '2022-06-17 02:09:48', '2022-06-17 02:09:48', 0),
(62, 2, 'iPhone 8 Plus 128GB Chính hãng', 16000000, 13500000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-8-plus_4_.jpg', 'Kế thừa sự thành công của iPhone 7/7 Plus, Apple lại tiếp tục làm cộng đồng yêu công nghệ phải chú ý khi cho ra mắt mẫu điện thoại iPhone 12 và kế tiếp của họ - iPhone 8 Plus 128GB. iPhone 8 Plus 128GB sở hữu thiết kế đẳng cấp với mặt lưng làm từ kính hoàn toàn mới lạ, độc đáo và sang trọng hơn người anh em tiền nhiệm. Bên cạnh đó, iPhone 8 Plus cũng có nhiều nâng cấp từ camera, hiệu năng,… để mang đến cho người dùng những trải nghiệm đỉnh cao hơn.', '2022-06-17 16:04:54', '2022-06-17 16:04:54', 0),
(64, 2, 'iPhone SE 2022 | Chính hãng VN/A', 12990000, 11390000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg', 'Thế hệ iPhone SE trước đó chỉ được trang bị ba phiên bản màu. Sang đến thế hệ SE 2022, thiết bị vẫn giữ lại ba màu sắc trên thế hệ trước lần lượt là đỏ, trắng và đen. Đặc biệt, iPhone SE 2022 sẽ không được trang bị thêm màu sắc mới. Với ba phiên bản màu sắc trên thì Midnight và Starlight sẽ là những sự lựa chọn an toàn, không bị lỗi thời sau thời gian sử dụng. Trong khi đó SE 2022 đỏ sẽ là một sự lựa chọn cá tính, hợp với các người dùng trẻ.', '2022-06-18 02:30:53', '2022-06-18 02:30:53', 0),
(65, 2, 'iPhone 13 512GB | Chính hãng VN/A', 33990000, 25500000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13-02_4.jpg', 'Điện thoại iPhone 13 512GB được nhiều khách hàng, người dùng yêu thích nhờ bộ nhớ cao, dung lượng pin lớn cùng tốc độ vượt trội giúp gia tăng khả năng xử lý của điện thoại một cách đáng kể, mang lại trải nghiệm ấn tượng cho người dùng.', '2022-06-18 02:32:08', '2022-06-18 02:32:08', 0),
(66, 2, 'iPhone 13 256GB - Mỹ', 27990000, 23590000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13-05.jpg', 'Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).', '2022-06-18 02:55:19', '2022-06-18 02:55:19', 0),
(67, 1, 'Samsung Galaxy Note 20 Ultra', 32990000, 18990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/b/l/black_final_1.jpg', 'Bên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.', '2022-06-18 02:39:45', '2022-06-18 02:39:45', 0),
(68, 1, 'Samsung Galaxy A71', 10990000, 7700000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a71-thumblo_n-tra_ng-600x600_1_2_1.jpg', 'Samsung Galaxy A71 sẽ là điện thoại giá cả phải chăng của Samsung với mục đích tiếp cận đối tượng rộng hơn. Samsung A71 là sản phẩm thuộc series Samsung Galaxy A với màn hình đục lỗ, cấu hình mạnh mẽ, cụm bốn camera sau chất lượng cao và cùng nhiều công nghệ thời thượng.', '2022-06-18 02:41:47', '2022-06-18 02:41:47', 0),
(69, 11, 'Huawei Y6p', 15990000, 8990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/p/4/p40_0001_layer_1.jpg', 'Huawei Y6p 2020 là phiên bản nâng cấp hoàn hảo của thế hệ 2019. Mẫu smartphone giá rẻ mới nhất của Huawei sở hữu cấu hình khá nổi bật gồm chip Mediatek Helio P22, 3GB RAM và bộ nhớ trong 64GB đảm bảo mọi trải nghiệm mọi tác vụ mượt mà.', '2022-06-18 02:50:10', '2022-06-18 02:50:10', 0),
(70, 11, 'Huawei Y6S', 12990000, 7990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/6/3/637072477486312431_huawei-y6s-1.png', 'Dòng Huawei Y-series từ khi ra mắt đã luôn nhận được sự yêu thích của người sử dụng bởi mức giá “mềm” cho đa số đối tượng cùng với cấu hình đạt sự ổn định tốt. Nối tiếp thành công vừa qua thì mẫu smartphone Huawei Y6S 2019 chắc chắn sẽ khiến người dùng hài lòng về chất lượng sản phẩm mang lại.', '2022-06-18 02:43:41', '2022-06-18 02:43:41', 0),
(71, 3, 'Xiaomi Mi 11 Lite 5G', 10590000, 7990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-11-lite-5g-ne-600x600.jpg', 'Mi 11 Lite 5G và 4G là bộ đôi vừa được Xiaomi trình làng. So sánh nhanh thì cả hai máy sở hữu cùng kích thước màn hình, thông số cụm camera sau và dung lượng pin. Nhưng bên cạnh đó thì phiên bản 5G vẫn còn một số điểm khác biệt so với bản 4G.', '2022-06-18 02:56:50', '2022-06-18 02:56:50', 0),
(72, 3, 'Xiaomi 12 Pro (5G)', 27990000, 21590000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-12-pro_arenamobiles.jpg', 'Là một trong những dòng smartphone chủ lực của hãng, Xiaomi 12 Pro sở hữu một thiết kế ấn tượng cùng hiệu năng vượt trội mang lại trải nghiệm dùng mượt mà. Bên cạnh đó, máy còn được trang bị hệ thống camera vô cùng chất lượng cho ra những bức ảnh chuyên nghiệp.', '2022-06-18 02:45:50', '2022-06-18 02:45:50', 0),
(73, 10, 'Nokia G21', 4290000, 3590000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/h/thumb_602966_default_big.jpg', 'Dù nằm trong phân khúc phổ thông, Nokia G21 sở hữu loạt thông số ấn tượng như camera 50 MP, màn hình lớn sắc nét, vi xử lý tốt cùng pin \"trâu\" giúp cho đây là sản phẩm smartphone dễ tiếp cận và phù hợp cho tất cả người dùng công nghệ.', '2022-06-18 02:46:56', '2022-06-18 02:46:56', 0),
(74, 10, 'Nokia G50 (5G)', 6590000, 4590000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-g50-4_1.jpeg', 'Hãng điện thoại lừng danh Nokia vẫn chưa ngừng cuộc chơi trong thị phần smartphone. Bằng chứng là việc hãng vừa tung ra thị trường sản phẩm mới mang tên Nokia G50 - hỗ trợ mạng 5G với mức giá phổ thông cho tất cả người yêu công nghệ.', '2022-06-18 02:47:51', '2022-06-18 02:47:51', 0),
(75, 1, 'Samsung Galaxy S20 Ultra', 29990000, 20990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/6/3/637170935875912528_ss-s20-ultra-den-1.png', 'Samsung Galaxy S20 Ultra là flagship mới của dòng Galaxy S sẽ được Samsung giới thiệu vào đầu năm 2020. Đây là phiên bản cao cấp nhất bên cạnh phiên bản thường và bản Plus. Điện thoại sẽ được trang bị những tính năng tuyệt vời, dung lượng pin lớn, màn hình được trang bị tần số quét 120Hz, camera chính có độ phân giải 108mp sẽ là những tính năng nổi bật nhất. Để tiết kiệm chi phí nhưng vẫn có thể trải nghiệm các tính năng cao cấp, tham khảo ngay điện thoại Samsung S20 FE đang có mức giá cực hấp dẫn.', '2022-06-18 03:00:14', '2022-06-18 03:00:14', 0),
(77, 1, 'Samsung Galaxy S21 Plus 5G', 25990000, 16990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-s21-plus-1.jpg', 'Có thể nói chiếc Samsung S21 Plus là một trong những chiếc điện thoại đáng được sở hữu nhất trong phân khúc tầm giá hiện tại. Với sự thay đổi thiết kế đột phá đi đầu trong phong cách thiết kế cùng với cấu hình cực kỳ mạnh mẽ của dòng S Plus của Samsung mang đến cho người dùng.', '2022-06-19 00:52:38', '2022-06-19 00:52:38', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tokens`
--

INSERT INTO `tokens` (`user_id`, `token`, `created_at`) VALUES
(55, 'baaa4887aef2a00bb07412548b02fe36', '2022-06-19 02:49:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `deleted` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `deleted`, `avatar`) VALUES
(46, 'admin', 'admin@gmail.com', '0388542487', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 2, 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(50, 'Phuc Nguyen', 'user1@gmail.com', '0388542487', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0, 'https://cdn1.iconfinder.com/data/icons/people-avatars-23/24/people_avatar_head_spiderman_marvel_spider_man-512.png'),
(51, 'Phúc Nguyễn', 'user2@gmail.com', '0388542487', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(52, 'Test 123', '123@123.com', '123', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 2, 1, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(53, 'Trọng Phúc', 'phuc.user@gmail.com', '09999999', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(54, 'Phúc Nguyễn', 'user3@gmail.com', '0906995989', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0, 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png'),
(55, 'Demo', 'demo@gmail.com', '0906995989', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0, 'https://cdn-icons-png.flaticon.com/512/1674/1674291.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userreview` (`user_id`),
  ADD KEY `productreview` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderSuccess` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `a` (`order_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymentUserid` (`user_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`user_id`,`token`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `productreview` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `userreview` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orderSuccess` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `a` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `paymentUserid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `fk_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
