-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 09:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelstarfive`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_20_052848_create_tbl_admin_table', 1),
(6, '2023_10_22_135733_create_tbl_category_room', 1),
(7, '2023_11_02_163337_create_tbl_room', 2),
(8, '2023_12_01_222025_create_shoppingcart_table', 3),
(9, '2023_12_02_134658_tbl_customer', 3),
(10, '2023_12_03_091212_tbl_booking', 3),
(11, '2023_12_03_172740_tbl_order', 3),
(12, '2023_12_03_172750_tbl_order_details', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `identifier` varchar(255) NOT NULL,
  `instance` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nụ', '000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `booking_name` varchar(255) NOT NULL,
  `booking_address` varchar(255) NOT NULL,
  `booking_phone` varchar(255) NOT NULL,
  `booking_email` varchar(255) NOT NULL,
  `booking_notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_name`, `booking_address`, `booking_phone`, `booking_email`, `booking_notes`, `created_at`, `updated_at`) VALUES
(1, 'hong', '113hoian', '8907278', 'hongoni8323@gmail.com', 'a', NULL, NULL),
(2, 'hong', '113hoian', '8907278', 'hongoni8323@gmail.com', '123', NULL, NULL),
(3, 'hong', '113hoian', '8907278', 'hongoni8323@gmail.com', 'a', NULL, NULL),
(4, 'Trúc Linh', 'TP. HCM', '0363185805', 'admin2@gmail.com', NULL, NULL, NULL),
(5, 'Trúc Linh', 'TP. HCM', '0363185805', 'linh@gmail.com', NULL, NULL, NULL),
(6, 'Trúc Linh', 'TP. HCM', '0363185805', 'linh@gmail.com', NULL, NULL, NULL),
(7, 'Trúc Linh', 'TP. HCM', '0363185805', 'linh@gmail.com', NULL, NULL, NULL),
(8, 'Trúc Linh', 'TP. HCM', '0363185805', 'linh@gmail.com', NULL, NULL, NULL),
(9, 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL),
(10, 'ád', 'ád', 'áda', 'as', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_room`
--

CREATE TABLE `tbl_category_room` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_room`
--

INSERT INTO `tbl_category_room` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Phòng Đơn', 'a', 0, NULL, NULL),
(5, 'Phòng Vip Đơn', 'aa', 0, NULL, NULL),
(6, 'Phòng Vip Đôi', 'a', 0, NULL, NULL),
(7, 'Phòng Tổng Thống', 'Cao cấp Vip Pro 5 sao', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_address`, `created_at`, `updated_at`) VALUES
(1, 'Lê Thị Ánh Hồng', 'hongoni8323@gmail.com', 'c26be8aaf53b15054896983b43eb6a65', '8907278', 'Tân Lập - Dĩ An - Bình Dương', NULL, NULL),
(2, 'Lê Thị Ánh Hồng', 'admin2@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '8907278', 'Tân Lập - Dĩ An - Bình Dương', NULL, NULL),
(3, 'Phạm Trúc Linh', 'linh@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '0363185805', 'Linh Trung - Thủ Đức - TP. HCM', NULL, NULL),
(4, 'Nguyễn Ngọc Diệu Linh', 'dieulinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0363152501', 'Tân Lập - Dĩ An- Bình Dương', NULL, NULL),
(5, 'Trần Sĩ Hoàng', 'hoang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0564152506', 'Linh Xuân - Thủ Đức - TP. HCM', NULL, NULL),
(6, 'Lê Xuân Thạch', 'thach@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0362524256', 'Phước Long A - Thủ Đức - TP.HCM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` double NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `booking_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 2, 5750, '2', NULL, NULL),
(3, 2, 4, 3, 2033200, '1', NULL, NULL),
(5, 3, 6, 5, 4066400, '1', NULL, NULL),
(6, 3, 7, 6, 1437500, '1', NULL, NULL),
(8, 3, 8, 8, 146269475.2, '1', NULL, NULL),
(9, 6, 9, 9, 292538950.4, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_price` double NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `room_id`, `room_name`, `room_price`, `checkin`, `checkout`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'a', 5000, '2023-12-14', '2023-12-23', NULL, NULL),
(2, 1, 1, 'a', 5000, '2023-12-19', '2023-12-21', NULL, NULL),
(3, 2, 1, 'a', 5000, '2023-12-14', '2023-12-15', NULL, NULL),
(4, 3, 9, 'Premium City View', 1768000, '2023-12-20', '2023-12-21', NULL, NULL),
(5, 5, 9, 'Premium City View', 1768000, '2023-12-21', '2023-12-23', NULL, NULL),
(6, 6, 10, 'Standard King', 625000, '2023-12-22', '2023-12-24', NULL, NULL),
(7, 8, 17, 'Presidential Suite', 63595424, '2023-12-21', '2023-12-23', NULL, NULL),
(8, 9, 17, 'Presidential Suite', 63595424, '2023-12-07', '2023-12-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`) VALUES
(1, 2, 1),
(2, 2, 1),
(3, 2, 1),
(4, 2, 1),
(5, 2, 1),
(6, 1, 1),
(7, 1, 1),
(8, 2, 1),
(9, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `room_desc` text NOT NULL,
  `room_content` text NOT NULL,
  `room_price` double NOT NULL,
  `room_image` varchar(255) NOT NULL,
  `room_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_name`, `category_id`, `room_desc`, `room_content`, `room_price`, `room_image`, `room_status`, `created_at`, `updated_at`) VALUES
(10, 'Standard King', 1, 'Thông tin phòng: 20.0 m²<br>\r\nTiện nghi phòng: Máy lạnh, Quạt, TV, Bàn làm việc, Rèm cửa / màn che<br>\r\nTiện nghi phòng tắm: Phòng tắm riêng, Vòi tắm đứng, Bộ vệ sinh cá nhân<br>', 'Không gồm bữa sáng<br>\r\n\r\nWiFi miễn phí<br>\r\n\r\nMiễn phí hủy phòng<br>\r\n\r\nCó thể đổi lịch<br>', 625000, 'z4992208530373_5e76a2dc5edc0adf99721b70a043166f63.jpg', 0, NULL, NULL),
(11, 'Deluxe Studio', 1, 'Thông tin phòng: 30.0 m²<br>\r\nTính năng phòng bạn thích: Vòi tắm đứng, Nhà bếp, Lò vi sóng, Tủ lạnh, Khu vực chờ, Máy lạnh<br>\r\nTiện nghi phòng: Máy lạnh, Quạt, Tủ lạnh, TV, Bàn làm việc, Rèm cửa / màn che, Lò vi song, Nhà bếp<br>\r\nTiện nghi phòng tắm: Phòng tắm riêng, Vòi tắm đứng, Bộ vệ sinh cá nhân<br>', '1 Giường Đơn<br>\r\n\r\nKhông gồm bữa sáng<br>\r\n\r\nWiFi miễn phí<br>\r\n\r\nMiễn phí hủy phòng<br>\r\n\r\nCó thể đổi lịch<br>', 853413, 'z4992213838954_39ff80786cebfa635c4e43bf2db7d0701.jpg', 0, NULL, NULL),
(12, 'Phòng text', 4, 'a', 'a', 1768000, 'z4992213838954_39ff80786cebfa635c4e43bf2db7d07054.jpg', 0, NULL, NULL),
(13, 'Superior Double', 1, 'Thông tin phòng: 22.0 m², 2 khách<br>\r\nTiện nghi phòng: Máy lạnh, Nước đóng chai mien phí, Quầy bar mini, Tủ lạnh, TV, Bàn làm việc<br>\r\nTiện nghi phòng tắm: Nước nóng, Vòi tắm đứng, Bộ vệ sinh cá nhân', '1 Giường Đôi<br>\r\n2 khách <br>\r\nTiện ích chính: Máy lạnh, Nhà hàng,  Lễ tân 24h, Thang máy, WiFi<br>', 661858, 'z4996519994606_f6e72a27ddc131207ecc28cd2e04da0527.jpg', 0, NULL, NULL),
(14, 'Deluxe Twin / Double', 3, 'Thông tin phòng: 28.0 m²<br> \r\nTiện nghi phòng: Máy lạnh, Nước đóng chai miễn phí, Quầy bar mini, Tủ lạnh, TV, Bàn làm việc<br> \r\nTiện nghi phòng tắm: Nước nóng, Vòi tắm đứng, Bộ vệ sinh cá nhân<br>', '2 Giường Đơn Hoặc 1 Giường Cỡ Queen\r\nTiện ích chính: \r\n\r\n- Máy lạnh<br> \r\n\r\n- Nhà hang<br> \r\n\r\n- Lễ tân 24h<br> \r\n\r\n- Thang máy<br> \r\n\r\n- WiFi<br>', 1221097, 'z4996532834887_59f3ec42ab1482f40808fd1cf8e70ba825.jpg', 0, NULL, NULL),
(15, 'Family Balcony', 6, 'Thông tin phòng: 45.0 m²<br>\r\nTiện nghi phòng: Máy lạnh, Nước đóng chai miễn phí, Quầy bar mini, Tủ lạnh, TV, Bàn làm việc, Ban công / sân hiên<br>\r\nTiện nghi phòng tắm: Nước nóng, Vòi tắm đứng, Bộ vệ sinh cá nhân, Máy sấy tóc<br>', '2 Giường Đôi<br>\r\n\r\nKhông gồm bữa sáng<br>\r\n\r\nWiFi miễn phí<br>\r\n\r\nKhông hút thuốc<br>\r\n\r\nMiễn phí hủy phòng<br>\r\n\r\nCó thể đổi lịch<br>', 1792516, 'z4996543879971_a81e44c82a422414728a54cd40c87bcb46.jpg', 0, NULL, NULL),
(16, 'Deluxe Premium', 5, 'Tiện nghi phổ biến: <br>\r\n- Bể bơi [ngoài trời]<br>\r\n\r\n- Phòng tập<br>\r\n\r\n- Spa<br>\r\n\r\n- Bếp<br>\r\n\r\n- buffet sáng<br>\r\n- Bàn tiếp tân [24 giờ]\r\nĂn uống: Bếp, Bếp chung, buffet sáng', 'Dịch vụ phòng [24 giờ]<br>\r\n\r\nGiờ giảm giá đồ uống<br>\r\n\r\nNhà hàng<br>\r\n\r\nQuán bar<br>\r\n\r\nQuán bar cạnh bể bơi<br>\r\n\r\nQuán cà phê<br>\r\n\r\nSắp xếp bữa ăn thay thế', 3042438, 'z4996768087006_250237461783b2dee1282da4699bf91518.jpg', 0, NULL, NULL),
(17, 'Presidential Suite', 7, 'Điểm đặc trưng: <br>\r\n- 1 giường lớn<br>\r\n\r\n- Diện tích phòng: 120 m²<br>\r\n\r\n- Hướng Thành phố<br>\r\n\r\n- Ban công/sân hiên<br>\r\n\r\n- Không hút thuốc<br>\r\n\r\n- Bồn tắm/vòi sen riêng<br>\r\n\r\n- Phòng tắm chung<br>\r\n\r\n- Bếp nhỏ<br>\r\n\r\n- Wifi miễn phí<br>\r\nBếp: Electric kettle<br>\r\nTiện nghi: <br>\r\n- Bộ chuyển đổi nguồn<br>\r\n\r\n- Dép đi trong nhà<br>\r\n\r\n- Dịch vụ báo thức<br>\r\n\r\n- Điều hòa<br>\r\n\r\n- Đồ dung cho giấc ngủ thoải mái<br>\r\n\r\n- Đồng hồ báo thức<br>\r\n\r\n- Đồ vải lạnh<br>\r\n\r\n- Nhân viên chăm sóc khách hàng<br>\r\n\r\n- Nước rửa tay<br>\r\n\r\n- Ổ cắm điện gần giường<br>', '- Bể bơi [ngoài trời]<br>\r\n\r\n- Nhà hang<br>\r\n\r\n- Bàn tiếp tân [24 giờ]<br>\r\n\r\n- Đưa đón sân bay<br>\r\n\r\n- Wi-Fi miễn phí trong tất cả các phòng!<br>\r\n\r\n- Dọn phòng hàng ngày<br>\r\n\r\n- Quán bar<br>', 63595424, 'z4996768087006_250237461783b2dee1282da4699bf91517.jpg', 0, NULL, NULL),
(18, 'Luxury Deluxe Twin', 6, 'Điểm đặc trưng: <br>\r\n- 2 giường đơn<br>\r\n\r\n- Diện tích phòng: 40 m²<br>\r\n\r\n- Hướng Thành phố<br>\r\n\r\n- Ban công/sân hiên<br>\r\n\r\n- Không hút thuốc<br>\r\n\r\n- Bồn tắm/vòi sen riêng<br>\r\n\r\n- Phòng tắm chung<br>\r\n\r\n- Wifi miễn phí<br>', 'Tiện nghi phổ biến: <br>\r\n- Bể bơi [ngoài trời]<br>\r\n\r\n- Nhà hàng<br>\r\n\r\n- Bàn tiếp tân [24 giờ]<br>', 9622931, 'z4996823303696_d699699fe219a04cf8efc16c749a451d70.jpg', 0, NULL, NULL),
(19, 'Superior Double Room', 1, 'Điểm đặc trưng: <br>\r\n- 1 giường đôi lớn<br>\r\n\r\n- Diện tích phòng: 17 m²<br>\r\n\r\n- Hướng Thành phố<br>\r\n\r\n- Không hút thuốc<br>\r\n\r\n- Vòi sen<br>\r\n\r\nGiải trí: <br>\r\n- Điện thoại<br>\r\n\r\n- TV [màn hình phẳng]<br>\r\n\r\n- Wi-Fi mien phí trong tất cả các phòng!<br>', 'Cách âm<br>\r\n\r\nDép đi trong nhà<br>\r\n\r\nDịch vụ báo thức<br>\r\n\r\nĐiều hòa<br>\r\n\r\nĐồ vải lanh<br>\r\n\r\nNước rửa tay<br>', 761800, 'z4997552217324_a77a95b2ddf42e82df1a5b7b6a87c4db16.jpg', 0, NULL, NULL),
(20, 'Deluxe Twin Room', 3, 'Điểm đặc trưng<br> \r\n2 giường đơn<br> \r\n\r\nDiện tích phòng: 28 m²<br> \r\n\r\nHướng Thành phố<br> \r\n\r\nKhông hút thuốc<br> \r\n\r\nVòi sen<br> \r\n\r\nWifi mien phí<br>', 'Dép đi trong nhà<br> \r\n\r\nĐiều hòa<br> \r\n\r\nĐồ vải lanh<br> \r\n\r\nNước rửa tay<br>', 1106340, 'z4997555210381_7d019b3eef8897a167bd10398e4cb6a178.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category_room`
--
ALTER TABLE `tbl_category_room`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_category_room`
--
ALTER TABLE `tbl_category_room`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
