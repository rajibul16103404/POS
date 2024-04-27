-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 08:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`) VALUES
(24, 'Food', 'enable', '2024-04-15'),
(25, 'Food', 'enable', '2024-04-15'),
(26, 'Cooking', 'enable', '2024-04-15'),
(27, 'kosmetik', 'enable', '2024-04-16'),
(28, 'Perfume', 'enable', '2024-04-16'),
(29, 'Cleaner ', 'enable', '2024-04-16'),
(30, 'Tissue ', 'enable', '2024-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `phone` bigint(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`phone`, `name`, `address`, `created_at`) VALUES
(123456, 'dfdsfsdf', 'dfsdfsdfsdfsd', '2024-03-24'),
(1709015765, 'Rajibul Islam', '20/6, Bank Town Residential Area, Choto Bongram, Sopura', '2024-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` varchar(255) NOT NULL,
  `customer_phone` varchar(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_item` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `paid` int(255) NOT NULL,
  `due` int(255) NOT NULL,
  `paid_by` varchar(255) NOT NULL,
  `sale_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_phone`, `order_date`, `order_item`, `total`, `paid`, `due`, `paid_by`, `sale_by`) VALUES
('MD14353051', '2147483647', '2024-04-22', '309110020775-qty-10, 8941193073148-qty-1', 1213, 1204, 9, 'Cash', 'admin'),
('MD26893235', '11111111', '2024-04-22', '309110020775-qty-10', 336, 336, 1000, 'Card', 'admin'),
('MD63717026', '11111111', '2024-04-22', '8941100513194-qty-1100', 57750, 1200, 56550, 'iBanking', 'admin'),
('MD73678165', '1709015762', '2024-04-22', '309110020775-qty-2', 67, 60, 7, 'Cash', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer_return`
--

CREATE TABLE `customer_return` (
  `ret_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `customer_phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demo_order`
--

CREATE TABLE `demo_order` (
  `id` int(255) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `order_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `phone`, `password`, `created_at`) VALUES
('', '', '', 0, '', '2024-03-18'),
('pos001', 'sadxsxsd', 'sdxsadxs', 1767253576, 'password', '2024-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name`, `amount`, `type`, `date`) VALUES
('EXP_34', 'Van Vara', 1200, 'Urgent', '2024-04-22'),
('MD558', 'Others', 1400, 'iguh', '2024-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`id`, `name`, `created_at`) VALUES
(1, 'Van Vara', '2024-03-31'),
(2, 'salary', '2024-03-31'),
(4, 'Others', '2024-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '12', 'admn'),
(2, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `postable`
--

CREATE TABLE `postable` (
  `barcode` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `unit_price` int(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `barcode` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `subcat` varchar(255) NOT NULL,
  `unit` text NOT NULL,
  `stock` int(255) NOT NULL,
  `purchase_price` int(255) NOT NULL,
  `selling_price` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `expire_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`barcode`, `name`, `cat`, `subcat`, `unit`, `stock`, `purchase_price`, `selling_price`, `availability`, `created_at`, `expire_at`) VALUES
(1111111, 'Potato Chips', '24', '17', '2', 12, 12, 111, 'yes', '2024-04-22', '2024-04-19'),
(735745809044, 'Kurkure ', '25', '34', '1', 7, 6, 10, 'yes', '2024-04-19', '2024-04-25'),
(745110769330, 'Aer Spray Violet Petal Crush Pink 300ml', '28', '30', '1', 1, 200, 280, 'yes', '2024-04-18', '2024-04-24'),
(745110769347, 'Aer Spray Violet Valley Bloom 300ml', '28', '30', '1', 10, 200, 280, 'yes', '2024-04-16', '2024-05-28'),
(745114130471, 'Olympic Energy Plus Biscuits 185gm', '24', '17', '1', 6, 45, 50, 'yes', '2024-04-15', '2024-04-28'),
(745114130488, 'Olympic Energy Plus Biscuits 62gm', '24', '17', '1', 10, 13, 15, 'yes', '2024-04-15', '2024-05-06'),
(745114130662, 'Olympice Milk Plus 42gm', '24', '17', '1', 8, 8, 10, 'yes', '2024-04-15', '2024-05-09'),
(745114130686, 'Olympic First Choice Salted Biscuits 80gm ', '24', '17', '1', 8, 17, 20, 'yes', '2024-04-15', '2024-04-29'),
(745114130716, 'Olympic Nutty Biscuits 50gm', '24', '17', '1', 8, 13, 15, 'yes', '2024-04-15', '2024-04-27'),
(3885522501009, 'pusti fortified soyabean oil 1 litre ', '25', '22', '1', 1, 160, 173, 'yes', '2024-04-15', '2024-05-11'),
(3885522502006, 'pusti fortified soyabean oil 2 litre b', '25', '22', '1', 10, 300, 348, 'yes', '2024-04-15', '2024-05-08'),
(3885522503003, 'pusti fortified soyabean oil 3 Litre b', '25', '22', '1', 6, 480, 522, 'yes', '2024-04-15', '2024-05-04'),
(7501056349288, 'Dove pink eauty bar 135g', '27', '26', '1', 6, 180, 210, 'yes', '2024-04-16', '2024-05-03'),
(8420701109321, ' Lucy Oliva oil ', '27', '32', '1', 83, 270, 340, 'yes', '2024-04-16', '2024-05-11'),
(8850124011053, 'Nestle Coffee mate 400g', '25', '23', '1', 75, 300, 350, 'yes', '2024-04-15', '2024-05-06'),
(8901030774119, 'Domex Fresh Guard 500ml', '29', '31', '1', 111, 100, 120, 'yes', '2024-04-16', '2024-05-09'),
(8901030795589, 'Dove Cream Beauty bathing bar', '27', '26', '1', 75, 140, 160, 'yes', '2024-04-16', '2024-05-11'),
(8901058841114, 'Nescafe Classic', '25', '23', '1', 87, 300, 395, 'yes', '2024-04-15', '2024-05-21'),
(8901396153108, 'Harppic Bathroom Cleaner', '29', '31', '1', 75, 100, 130, 'yes', '2024-04-16', '2024-05-04'),
(8901396175025, 'Harppic Bathroom Cleaner  750ml', '29', '31', '1', 102, 110, 160, 'yes', '2024-04-16', '2024-05-03'),
(8941100293317, 'Nestle Coffee 3 in 1 15b', '25', '23', '1', 212, 12, 15, 'yes', '2024-04-15', '2024-04-26'),
(8941100294093, 'Nestle Coffee mate 450g', '25', '23', '1', 83, 300, 350, 'yes', '2024-04-15', '2024-05-05'),
(8941100294390, 'Maggi Masala', '24', '15', '1', 83, 12, 15, 'yes', '2024-04-15', '2024-05-03'),
(8941100294727, 'Nestlé Nido Growing up milk', '24', '19', '1', 102, 400, 480, 'yes', '2024-04-15', '2024-05-07'),
(8941100294840, 'Maggi Masala', '24', '15', '1', 75, 150, 175, 'yes', '2024-04-15', '2024-04-25'),
(8941100295564, 'Nestlé Lactogen 1 Formula Milk Powder 180gm', '24', '19', '1', 75, 250, 310, 'yes', '2024-04-15', '2024-04-26'),
(8941100295595, 'Nestlé Lactogen 1 Formula Milk Powder 350gm', '24', '19', '1', 212, 550, 650, 'yes', '2024-04-15', '2024-05-10'),
(8941100343517, 'Harppic Bathroom Cleaner  500ml', '29', '31', '1', 83, 90, 120, 'yes', '2024-04-16', '2024-05-29'),
(8941100507001, 'Ligoe 500ml', '29', '31', '1', 212, 120, 160, 'yes', '2024-04-16', '2024-05-04'),
(8941100507117, 'Ligoe (Trix 300b free)', '29', '31', '1', 212, 220, 295, 'yes', '2024-04-16', '2024-05-10'),
(8941100510018, 'radhuni holud gura 50gm', '26', '25', '1', 75, 25, 30, 'yes', '2024-04-15', '2024-05-07'),
(8941100510025, 'radhuni holud gura 100gm', '26', '25', '1', 102, 50, 50, 'yes', '2024-04-15', '2024-04-24'),
(8941100510032, 'radhuni holud gura 200gm', '26', '25', '1', 83, 85, 100, 'yes', '2024-04-15', '2024-05-10'),
(8941100510094, 'radhuni morich gura 50 gm', '26', '25', '1', 102, 40, 48, 'yes', '2024-04-15', '2024-05-27'),
(8941100510100, 'radhuni morich gura 100 gm', '26', '25', '1', 111, 85, 90, 'yes', '2024-04-15', '2024-05-08'),
(8941100510117, 'radhuni morich gura 200gm', '26', '25', '1', 212, 150, 170, 'yes', '2024-04-15', '2024-04-26'),
(8941100510179, 'radhuni dhonia gura 50 gm', '26', '20', '1', 212, 25, 32, 'yes', '2024-04-15', '2024-05-01'),
(8941100510254, 'radhuni jira gura 50 gm', '26', '25', '1', 65, 110, 130, 'yes', '2024-04-15', '2024-05-03'),
(8941100510261, 'radhuni jira gura 100gm', '26', '25', '1', 111, 200, 250, 'yes', '2024-04-15', '2024-04-26'),
(8941100511022, 'radhuni gorom masala gura 40 gm', '26', '25', '1', 83, 60, 68, 'yes', '2024-04-15', '2024-04-30'),
(8941100511206, 'radhuni roast masala 35gm ', '26', '20', '1', 212, 55, 65, 'yes', '2024-04-15', '2024-05-21'),
(8941100511282, 'radhuni murgir masala 100gm', '26', '20', '1', 75, 70, 90, 'yes', '2024-04-15', '2024-05-09'),
(8941100511329, 'radhuni gorur masala 100gm', '26', '20', '1', 212, 55, 65, 'yes', '2024-04-15', '2024-05-27'),
(8941100511374, 'radhuni biryani masala 4ogm', '26', '20', '1', 65, 52, 60, 'yes', '2024-04-15', '2024-04-27'),
(8941100511398, 'radhuni kacchi biryani masala 40gm', '26', '20', '1', 111, 50, 60, 'yes', '2024-04-15', '2024-04-26'),
(8941100511428, 'radhuni kala bhuna masala 80gm', '26', '20', '1', 212, 55, 65, 'yes', '2024-04-15', '2024-04-27'),
(8941100511725, 'radhuni haleem mix 200gm', '26', '20', '1', 212, 55, 65, 'yes', '2024-04-15', '2024-05-28'),
(8941100511763, 'radhuni kasundi 285ml', '25', '21', '1', 111, 45, 50, 'yes', '2024-04-15', '2024-04-30'),
(8941100511794, 'radhuni semai 200gm', '25', '24', '1', 111, 35, 45, 'yes', '2024-04-15', '2024-05-02'),
(8941100511947, 'radhuni vinegar 280ml', '25', '21', '1', 102, 38, 45, 'yes', '2024-04-15', '2024-04-27'),
(8941100513194, 'Ruchi Chanachur', '25', '16', '1', 83, 47, 50, 'yes', '2024-04-15', '2024-04-30'),
(8941100513217, 'Ruchi Chanachur', '25', '16', '1', 83, 85, 90, 'yes', '2024-04-15', '2024-04-24'),
(8941100513224, 'Ruchi Chanachur', '25', '16', '1', 75, 85, 90, 'yes', '2024-04-15', '2024-04-26'),
(8941100514313, 'Ruchi Tomato Ketchup - 350 gm', '25', '21', '1', 75, 85, 120, 'yes', '2024-04-15', '2024-05-17'),
(8941100514672, 'ruchi orange jam 250gm', '25', '21', '1', 212, 85, 90, 'yes', '2024-04-15', '2024-05-28'),
(8941100594759, 'Rosuner Achar', '25', '21', '1', 212, 45, 60, 'yes', '2024-04-15', '2024-04-27'),
(8941100788165, 'Dettol Re Enerize 200b', '27', '28', '1', 83, 90, 110, 'yes', '2024-04-16', '2024-05-09'),
(8941100929728, 'Dettol Skincare 125gm + 25gm free ', '27', '26', '1', 212, 70, 85, 'yes', '2024-04-16', '2024-05-21'),
(8941102310654, 'Lux Soft Glow 150gm', '27', '1', '1', 65, 70, 70, 'yes', '2024-04-16', '2024-05-09'),
(8941102319848, 'Sunsilk Hairfall solution Shampoo 330b+ 50b free', '27', '29', '1', 111, 320, 400, 'yes', '2024-04-16', '2024-05-11'),
(8941102319879, '15% Extra Free Dove Oxygen Moisture 330b', '27', '29', '1', 75, 400, 470, 'yes', '2024-04-16', '2024-05-20'),
(8941102319886, '15% Extra Free Dove Hairfall Rescue 330b', '27', '29', '1', 75, 400, 470, 'yes', '2024-04-16', '2024-04-26'),
(8941102319909, '15% Extra Free Dove Intense repair 330b', '27', '29', '1', 83, 400, 470, 'yes', '2024-04-16', '2024-05-08'),
(8941102319985, 'Lifebuoy  hand wash 170b', '27', '28', '1', 102, 55, 75, 'yes', '2024-04-16', '2024-05-11'),
(8941102460021, 'Lifebuoy  hand wash Lemon Fresh 170b', '27', '28', '1', 102, 55, 75, 'yes', '2024-04-16', '2024-05-10'),
(8941102460038, 'Lifebuoy  hand wash 170b', '27', '28', '1', 111, 65, 75, 'yes', '2024-04-16', '2024-05-03'),
(8941102460854, 'Lifebuoy Mild Care fresh 150gm', '27', '26', '1', 212, 55, 60, 'yes', '2024-04-16', '2024-05-22'),
(8941102460861, 'Lifebuoy Lemon fresh 150gm', '27', '26', '1', 102, 50, 60, 'yes', '2024-04-16', '2024-05-07'),
(8941102461080, 'New Pach Dove Hair Fall Rescue Nourishing 650b', '27', '29', '1', 212, 650, 740, 'yes', '2024-04-16', '2024-05-10'),
(8941153500073, 'pusti fortified soyabean oil', '25', '22', '1', 111, 750, 845, 'yes', '2024-04-15', '2024-05-21'),
(8941154030210, 'Mr. Twist Potato Snacks ', '25', '34', '1', 65, 15, 20, 'yes', '2024-04-16', '2024-05-02'),
(8941154032443, 'Mr. Chicken Chicken chips', '25', '34', '1', 111, 10, 15, 'yes', '2024-04-16', '2024-05-30'),
(8941154032597, 'Slanty Potare fries', '25', '34', '1', 102, 15, 20, 'yes', '2024-04-16', '2024-05-10'),
(8941160032567, 'Detos Chicken Wings Chips', '25', '34', '1', 212, 15, 20, 'yes', '2024-04-16', '2024-05-02'),
(8941160035483, 'Chocolate Fondue Biscuits 176gm', '24', '18', '1', 111, 140, 150, 'yes', '2024-04-15', '2024-05-25'),
(8941160256178, 'Air Freshener', '28', '30', '1', 102, 200, 260, 'yes', '2024-04-16', '2024-05-04'),
(8941161004914, 'Fresh Toiet Tissue', '30', '37', '1', 102, 16, 25, 'yes', '2024-04-16', '2024-05-11'),
(8941161007557, 'Fresh Hand Towel Tissue', '30', '36', '1', 212, 40, 48, 'yes', '2024-04-16', '2024-05-11'),
(8941174010148, 'Extra Care Anti Hairfall Oil 300ml', '27', '32', '1', 102, 230, 320, 'yes', '2024-04-16', '2024-05-10'),
(8941174010155, 'Extra Care Anti Hairfall Oil 150ml', '27', '32', '1', 83, 140, 175, 'yes', '2024-04-16', '2024-05-03'),
(8941174010780, 'Just for baby oil 100ml', '27', '32', '1', 65, 180, 210, 'yes', '2024-04-16', '2024-05-04'),
(8941174010797, 'Just for baby.. baby Wash for body & Hair', '27', '27', '1', 102, 210, 285, 'yes', '2024-04-16', '2024-05-10'),
(8941174010865, 'Just for baby.. baby Powder 100g', '27', '29', '1', 111, 100, 130, 'yes', '2024-04-16', '2024-05-04'),
(8941174010896, 'Parachute Naturale Shampoo Nourishing Care 340b', '27', '29', '1', 75, 300, 370, 'yes', '2024-04-16', '2024-05-09'),
(8941174010964, 'parachute beli ful 200ml', '27', '32', '1', 75, 140, 185, 'yes', '2024-04-16', '2024-05-30'),
(8941174010971, 'parachute beli ful 300ml', '27', '32', '1', 65, 200, 255, 'yes', '2024-04-16', '2024-05-03'),
(8941174011091, 'Just for baby.. baby Shampoo 100ml', '27', '29', '1', 65, 170, 210, 'yes', '2024-04-16', '2024-05-11'),
(8941174011121, 'Just for Baby Soap 75g', '27', '26', '1', 82, 80, 90, 'yes', '2024-04-16', '2024-05-11'),
(8941174011138, 'Just for  Baby Soap 125g', '27', '26', '1', 83, 100, 140, 'yes', '2024-04-16', '2024-05-11'),
(8941174011213, 'Onion Hair Growth Oil 200ml', '27', '32', '1', 212, 160, 195, 'yes', '2024-04-16', '2024-05-30'),
(8941174011329, 'Just For Baby Miky Glow Baby Lotion 100ml', '27', '32', '1', 65, 170, 215, 'yes', '2024-04-16', '2024-05-10'),
(8941174011336, 'Just For Baby Miky Glow Baby Lotion 200ml', '27', '32', '1', 65, 300, 360, 'yes', '2024-04-16', '2024-05-30'),
(8941174011350, 'Just for baby Face Cream 100ml', '27', '32', '1', 75, 150, 190, 'yes', '2024-04-16', '2024-05-04'),
(8941174011510, 'Onion Hair Growth Oil 100ml', '27', '32', '1', 111, 85, 100, 'yes', '2024-04-16', '2024-05-11'),
(8941193041031, 'Bashundhara Paper Napkin ', '30', '35', '1', 65, 50, 70, 'yes', '2024-04-16', '2024-05-11'),
(8941193073162, 'Bashundhara Facial Tissuer', '30', '35', '1', 75, 70, 80, 'yes', '2024-04-16', '2024-05-10'),
(8941193310847, 'Ispahani Premium Toast Biscuits', '24', '17', '1', 102, 45, 50, 'yes', '2024-04-15', '2024-04-30'),
(8941193311653, 'Ispahani Butterful Biscuits 200gm', '24', '17', '1', 102, 60, 65, 'yes', '2024-04-15', '2024-05-09'),
(8941193311905, 'Puffy Bite lemon cream sanwich biscuits 150gm', '24', '17', '1', 111, 60, 70, 'yes', '2024-04-15', '2024-05-23'),
(8941193311981, 'Lexus Vegetable Crackers Biscuits', '24', '17', '1', 75, 17, 20, 'yes', '2024-04-15', '2024-04-24'),
(8944000552003, 'Freyia.s weekly Peeling Aloe vera Fash wash', '27', '27', '1', 83, 200, 255, 'yes', '2024-04-16', '2024-05-02'),
(8944000552034, 'Freyia.s weekly Peeling Milk Fash wash', '27', '27', '1', 102, 200, 255, 'yes', '2024-04-16', '2024-04-27'),
(8944000552256, 'Freyia.s weekly Peeling Papaya Fash wash', '27', '27', '1', 75, 200, 255, 'yes', '2024-04-16', '2024-05-03'),
(8944000554670, 'Parachute Naturale Shampoo Damage Repair  340b', '27', '29', '1', 212, 300, 370, 'yes', '2024-04-16', '2024-05-06'),
(9415007013402, 'Diploma instant full cream milk powder 500gm', '24', '19', '1', 102, 385, 425, 'yes', '2024-04-15', '2024-04-30'),
(9415007463306, 'Doodles  Stick Noodles', '24', '15', '1', 212, 45, 50, 'yes', '2024-04-16', '2024-05-24'),
(9415007916598, 'Doodles Masala Twist 62gm x8 packet', '24', '15', '1', 65, 140, 160, 'yes', '2024-04-15', '2024-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `selling_unit`
--

CREATE TABLE `selling_unit` (
  `id` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selling_unit`
--

INSERT INTO `selling_unit` (`id`, `unit`, `status`, `created_at`) VALUES
(1, 'pc', 'enable', '2024-02-29'),
(2, 'KG', 'enable', '2024-03-05'),
(4, 'Ft', 'enable', '2024-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(255) NOT NULL,
  `category` int(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `sub_category`, `status`, `created_at`) VALUES
(15, 24, 'Noodles', 'enable', '2024-04-15'),
(16, 25, 'Chanachur', 'enable', '2024-04-15'),
(17, 24, 'Biscuits', 'enable', '2024-04-15'),
(18, 24, 'Chocolate', 'enable', '2024-04-15'),
(19, 24, 'Milk Powder', 'enable', '2024-04-15'),
(20, 26, 'Masala', 'enable', '2024-04-15'),
(21, 25, 'Sauce', 'enable', '2024-04-15'),
(22, 25, 'Oil', 'enable', '2024-04-15'),
(23, 25, 'Coffee', 'enable', '2024-04-15'),
(24, 25, 'Semai', 'enable', '2024-04-15'),
(25, 26, 'Radhuni gura', 'enable', '2024-04-15'),
(26, 27, 'Soap', 'enable', '2024-04-16'),
(27, 27, 'Face Wash', 'enable', '2024-04-16'),
(28, 27, ' hand wash', 'enable', '2024-04-16'),
(29, 27, 'Shampoo', 'enable', '2024-04-16'),
(30, 28, 'Home Perfume', 'enable', '2024-04-16'),
(31, 29, 'Bathroom Cleaner', 'enable', '2024-04-16'),
(32, 27, 'Oil', 'enable', '2024-04-16'),
(33, 25, 'Drink', 'enable', '2024-04-16'),
(34, 25, 'Chips', 'enable', '2024-04-16'),
(35, 30, 'Facial Tissue', 'enable', '2024-04-16'),
(36, 30, 'Hand Towel', 'enable', '2024-04-16'),
(37, 30, 'Toilet Tissue', 'enable', '2024-04-16'),
(38, 25, ' ', 'enable', '2024-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `phone` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`phone`, `name`, `email`, `address`, `products`, `created_at`) VALUES
(1234567890, 'dfvdf', 'fvdsfv@dsf.fdd', 'dsfsfsf', 'as,ad,aw', '2024-04-15'),
(1767254456, 'Mahmud', 'lolipop.cse@gmail.com', 'Horrogram, Poddo Kamini road, Bankpara, Rajshahi Court, Rajshahi', 'Soap,Shampoo', '2024-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_order`
--

CREATE TABLE `supplier_order` (
  `order_id` int(11) NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `order_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_return`
--
ALTER TABLE `customer_return`
  ADD PRIMARY KEY (`ret_id`);

--
-- Indexes for table `demo_order`
--
ALTER TABLE `demo_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postable`
--
ALTER TABLE `postable`
  ADD PRIMARY KEY (`barcode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`barcode`);

--
-- Indexes for table `selling_unit`
--
ALTER TABLE `selling_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `demo_order`
--
ALTER TABLE `demo_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `selling_unit`
--
ALTER TABLE `selling_unit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
