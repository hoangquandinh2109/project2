


CREATE DATABASE BeautyMax COLLATE=utf8_unicode_ci;

CREATE TABLE `beautymax`.`cosmetic` (
  `cosmetic_id` int(11) AUTO_INCREMENT,
  `cosmetic_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `cosmetic_price` int(10) NOT NULL,
  `cosmetic_rate` tinyint(1) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `cosmetic_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cosmetic_desciption` text COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`cosmetic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `beautymax`.`customer` (
  `customer_id` int(11) AUTO_INCREMENT,
  `customer_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_gender` tinyint(1) DEFAULT NULL,
  `customer_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_dob` datetime DEFAULT NULL,
  `customer_address` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_loyalty` tinyint(1) NOT NULL,
  `customer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_avatar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `beautymax`.`orders` (
  `orders_id` int(11) AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `orders_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orders_address` text COLLATE utf8_unicode_ci NOT NULL,
  `orders_status` tinyint(1) NOT NULL,
    PRIMARY KEY (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `beautymax`.`order_detail` (
  `order_detail_id` int(11) AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `cosmetic_id` int(11) NOT NULL,
  `order_detail_quantity` tinyint(2) NOT NULL,
    FOREIGN KEY (cosmetic_id) REFERENCES Cosmetic(cosmetic_id),
    FOREIGN KEY (orders_id) REFERENCES orders(orders_id),
    PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

    


