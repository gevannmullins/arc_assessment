--
-- Database: `local_arc`
--
CREATE DATABASE IF NOT EXISTS local_arc;
use local_arc;

-- --------------------------------------------------------

--
-- Table structure for table `consumer_info`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL DEFAULT '',
  `updated` varchar(255) NOT NULL DEFAULT '',
  `deleted` varchar(255) NOT NULL DEFAULT '',
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `consumers_info`
--
INSERT INTO `users` (`full_name`, `email_address`, `mobile_number`, `created`, `updated`, `deleted`, `active`) VALUES
('Andrew Hunt', 'andrew@hunt.com', '0781234567', '2018-08-14', '', '0', 1),
('David Thomas', 'david@thomas.com', '0781234567', '2018-08-14', '', '0', 1),
('V. Anton Spraul', 'vanton@spraul.com', '0781234567', '2018-08-14', '', '0', 1),
('Neal Ford', 'neal@ford.com', '0781234567', '2018-08-14', '', '0', 1),
('Rosemary Wallner', 'rosemary@wallner.com', '0781234567', '2018-08-14', '', '0', 1),
('Shelly Nielsen', 'shelly@nielsen.com', '0781234567', '2018-08-14', '', '0', 1),
('Bruce Jackson', 'bruce@jackson.com', '0781234567', '2018-08-14', '', '0', 1),
('Paul Vickers', 'paul@vickers.com', '0781234567', '2018-08-14', '', '0', 1),
('Sorin Cerin', 'sorin@cerin.com', '0781234567', '2018-08-14', '', '0', 1),
('Bahaudin Ghulam Mujtaba', 'bahaudinghulam@mujtaba.com', '0781234567', '2018-08-14', '', '0', 1),
('Sayed Tayeb Jawad', 'sayedtayeb@jawad.com', '0781234567', '2018-08-14', '', '0', 1),
('Erinn Banting', 'erinn@banting.com', '0781234567', '2018-08-14', '', '0', 1),
('Meredith L. Runion', 'meredithl@runion.com', '0781234567', '2018-08-14', '', '1', 1),
('Moira Weigel', 'moira@weigel.com', '0781234567', '2018-08-14', '', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `comment` text,
  `price` int(11),
  `quantity` int(11),
  `reason` enum('New Stock','Usable Return','Unusable Return'),
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `price` varchar(100),
  `quantity` int(11),
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_sku`, `product_type`, `price`, `quantity`) VALUES
('ladies jeans', '000001', 'pants', '150.99', 100),
('mens jeans', '000002', 'pants', '250.99', 100),
('kids jeans', '000003', 'pants', '99.99', 100),
('ladies shirt', '000004', 'shirt', '99.99', 100),
('mens shirt', '000005', 'shirt', '129.99', 100),
('kids shirt', '000006', 'shirt', '79.99', 100),
('ladies shoes', '000007', 'shoes', '159.99', 100),
('mens shoes', '000008', 'shoes', '189.99', 100),
('kids shoes', '000009', 'shoes', '119.99', 100),
('ladies hat', '000010', 'hat', '89.99', 100),
('mens hat', '000011', 'hat', '79.99', 100),
('kids hat', '000012', 'hat', '29.99', 100);

--
-- user transactions example

DROP TABLE IF EXISTS `user_transactions`;
CREATE TABLE IF NOT EXISTS `user_transactions` (
  `id` int(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `comment` text,
  `price` int(11),
  `quantity` int(11),
  `reason` enum('New Stock','Usable Return','Unusable Return'),
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `itemid` int(11) NOT NULL
);


COMMIT;
