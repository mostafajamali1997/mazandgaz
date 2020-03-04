-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2020 at 02:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saadco`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

DROP TABLE IF EXISTS `captcha`;
CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `word` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM AUTO_INCREMENT=1819 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1818, 1583136036, '::1', '43509'),
(1817, 1583134341, '::1', '23194'),
(1816, 1583134317, '::1', '23053');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `productId` int(11) NOT NULL,
  `percentOfDiscount` double NOT NULL,
  `dateTimeOfStart` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `whoCanUse` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dateTimeOfEnd` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productId` (`productId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `description`, `productId`, `percentOfDiscount`, `dateTimeOfStart`, `status`, `whoCanUse`, `dateTimeOfEnd`) VALUES
(1, 'تخفیف نوروزی', 8, 10, 0, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

DROP TABLE IF EXISTS `factors`;
CREATE TABLE IF NOT EXISTS `factors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderedBy` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dateOfOrder` bigint(20) NOT NULL,
  `orderingUserIp` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `orderingUserAgent` text COLLATE utf8_persian_ci NOT NULL,
  `orderStatus` tinyint(1) NOT NULL,
  `creatureBy` varchar(26) COLLATE utf8_persian_ci DEFAULT 'user',
  `paidStatus` tinyint(1) DEFAULT '0',
  `paidCodeInPaymentList` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `dateTimeOfPaid` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deliveryStatus` tinyint(1) DEFAULT NULL,
  `totalPrice` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_delivery` (`deliveryStatus`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `orderedBy`, `dateOfOrder`, `orderingUserIp`, `orderingUserAgent`, `orderStatus`, `creatureBy`, `paidStatus`, `paidCodeInPaymentList`, `dateTimeOfPaid`, `deliveryStatus`, `totalPrice`) VALUES
(42, 'ilaman', 1582216282, '18.209.248.183', '\"Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27\"', 1, 'user', 0, NULL, '2020-02-20 16:31:22', NULL, 8001000),
(43, 'ilaman', 1582217061, '89.196.18.112', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36 Edg/80.0.361.56', 1, 'user', 0, NULL, '2020-02-20 16:44:21', NULL, 8001000),
(44, 'ilaman', 1582259725, '3.227.255.32', '\"Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27\"', 1, 'user', 0, NULL, '2020-02-21 04:35:25', NULL, 0),
(45, 'ilaman', 1582402746, '158.69.243.115', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)', 1, 'user', 0, NULL, '2020-02-22 20:19:06', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `factors_content`
--

DROP TABLE IF EXISTS `factors_content`;
CREATE TABLE IF NOT EXISTS `factors_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factorId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `selledPrice` double NOT NULL,
  `amountOfDiscounts` double DEFAULT NULL,
  `amountOfBoughtItem` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productId` (`productId`),
  KEY `factorId` (`factorId`),
  KEY `idx_factor` (`factorId`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `factors_content`
--

INSERT INTO `factors_content` (`id`, `factorId`, `productId`, `selledPrice`, `amountOfDiscounts`, `amountOfBoughtItem`) VALUES
(44, 43, 7, 5000000, NULL, 1),
(45, 43, 9, 3001000, NULL, 1);

--
-- Triggers `factors_content`
--
DROP TRIGGER IF EXISTS `factor_content_add`;
DELIMITER $$
CREATE TRIGGER `factor_content_add` AFTER INSERT ON `factors_content` FOR EACH ROW BEGIN
UPDATE Factors SET
totalPrice=(SELECT sum(selledPrice) FROM Factors_Content
           WHERE factorId=new.factorId);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `financial_baseproductgroup`
--

DROP TABLE IF EXISTS `financial_baseproductgroup`;
CREATE TABLE IF NOT EXISTS `financial_baseproductgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `sortNumber` int(11) NOT NULL,
  `secondaryProductGroupCount` int(11) DEFAULT '0',
  `productsCount` int(11) DEFAULT '0',
  `allowedWorkerField` varchar(1000) COLLATE utf8_persian_ci NOT NULL COMMENT 'contains a server worker working field that saved in users_serviceworker',
  PRIMARY KEY (`id`),
  KEY `idx_baseProduct` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `financial_baseproductgroup`
--

INSERT INTO `financial_baseproductgroup` (`id`, `title`, `description`, `sortNumber`, `secondaryProductGroupCount`, `productsCount`, `allowedWorkerField`) VALUES
(10, 'test', 'testDesc', 1, 2, 4, ''),
(11, 'محصولات برقی', 'محصولات برررقی', 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `financial_product`
--

DROP TABLE IF EXISTS `financial_product`;
CREATE TABLE IF NOT EXISTS `financial_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `secondaryTitr` text COLLATE utf8_persian_ci NOT NULL,
  `shortDescription` text COLLATE utf8_persian_ci NOT NULL,
  `baseProductGroupId` int(11) NOT NULL,
  `secondaryProductGroupId` int(11) NOT NULL,
  `dateOfAddProduct` bigint(20) NOT NULL,
  `adderUsername` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `doesHaveDiscount` tinyint(1) NOT NULL,
  `amountForSell` double NOT NULL,
  `usersCanSendComment` tinyint(1) NOT NULL,
  `usersCanSeeThisProduct` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `commentCount` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `baseProductGroupId` (`baseProductGroupId`),
  KEY `secondaryProductGroupId` (`secondaryProductGroupId`),
  KEY `idx_product` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `financial_product`
--

INSERT INTO `financial_product` (`id`, `title`, `secondaryTitr`, `shortDescription`, `baseProductGroupId`, `secondaryProductGroupId`, `dateOfAddProduct`, `adderUsername`, `doesHaveDiscount`, `amountForSell`, `usersCanSendComment`, `usersCanSeeThisProduct`, `status`, `commentCount`) VALUES
(8, 'بخاری طرح کودک ۶۰۰۰', 'ضمانت مادام العمر شیشه', 'ضمانت تعویض به مدت ۵ سال\r\nمجهز به سیستم هوشمند ODS\r\nرگلاتور به سیستم گاورنر', 10, 7, 92233720, 'ilaman', 0, 2000000, 1, 1, 1, 0),
(7, 'آبگرمکن های گازی و برقی', 'مخزن ساخته شده از فولاد کالوانیزه', 'پنج سال ضمانت بدون قید و شرط\r\nچهل ماه ضمانت تعویض مخزن', 10, 6, 92233720, 'ilaman', 0, 5000000, 1, 1, 1, 0),
(9, 'بخاری ۹۰۰', 'ضمانت مادام العمر شیشه', 'ضمانت تعویض رگلاتور\r\nدارای ۴۰۰ سرویس کار مجاز در سراسر کشور\r\nمجهز به سیستم هوشمند ODS\r\n', 10, 7, 92233720, 'ilaman', 0, 3001000, 1, 1, 1, 0),
(19, 'اجاق گاز', 'اجاااااق گاااز', 'اجاااااق گاااز', 10, 8, 0, 'ilaman', 0, 2000000, 1, 1, 1, 0);

--
-- Triggers `financial_product`
--
DROP TRIGGER IF EXISTS `product_ondelete`;
DELIMITER $$
CREATE TRIGGER `product_ondelete` AFTER DELETE ON `financial_product` FOR EACH ROW BEGIN
update Financial_BaseProductGroup SET 
productsCount=productsCount-1
where id=old.baseProductGroupId;
update Financial_SecondaryProductGroup SET
productsCount=productsCount-1
where id=old.secondaryProductGroupId;
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `products_count`;
DELIMITER $$
CREATE TRIGGER `products_count` AFTER INSERT ON `financial_product` FOR EACH ROW BEGIN
update `Financial_SecondaryProductGroup` SET productsCount=productsCount+1 where id=new.secondaryProductGroupId;

update `Financial_BaseProductGroup` SET productsCount=productsCount+1 where id=new.baseProductGroupId;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `financial_secondaryproductgroup`
--

DROP TABLE IF EXISTS `financial_secondaryproductgroup`;
CREATE TABLE IF NOT EXISTS `financial_secondaryproductgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baseProductGroupId` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `sortNumber` int(11) NOT NULL,
  `productsCount` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `baseProductGroupId` (`baseProductGroupId`),
  KEY `idx_secondaryProduct` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `financial_secondaryproductgroup`
--

INSERT INTO `financial_secondaryproductgroup` (`id`, `baseProductGroupId`, `title`, `description`, `sortNumber`, `productsCount`) VALUES
(6, 10, 'آبگرمکن', 'آبگرمکن', 1, 0),
(7, 10, 'بخاری', 'بخاری', 1, 0);

--
-- Triggers `financial_secondaryproductgroup`
--
DROP TRIGGER IF EXISTS `secondaryProductGroup_count`;
DELIMITER $$
CREATE TRIGGER `secondaryProductGroup_count` AFTER INSERT ON `financial_secondaryproductgroup` FOR EACH ROW update `Financial_BaseProductGroup` 
SET secondaryProductGroupCount=secondaryProductGroupCount+1 where id=new.baseProductGroupId
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `secondaryProductGroup_ondelete`;
DELIMITER $$
CREATE TRIGGER `secondaryProductGroup_ondelete` AFTER DELETE ON `financial_secondaryproductgroup` FOR EACH ROW BEGIN
update Financial_BaseProductGroup SET secondaryProductGroupCount=secondaryProductGroupCount-1
where id=old.baseProductGroupId;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `free_customers`
--

DROP TABLE IF EXISTS `free_customers`;
CREATE TABLE IF NOT EXISTS `free_customers` (
  `fname` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `postalcode` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `free_customers`
--

INSERT INTO `free_customers` (`fname`, `lname`, `phone`, `address`, `postalcode`, `id`) VALUES
('احد', 'محمدحسنی', 911125345, 'ساری ', 1534685, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_comment`
--

DROP TABLE IF EXISTS `news_comment`;
CREATE TABLE IF NOT EXISTS `news_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsId` int(11) NOT NULL,
  `senderName` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `sentDateTime` bigint(20) NOT NULL,
  `senderUserAgent` text COLLATE utf8_persian_ci NOT NULL,
  `isOurUser` int(11) NOT NULL,
  `ifIsOutUserWhatsUsername` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `senderEmail` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `message` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_newsId` (`newsId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_image`
--

DROP TABLE IF EXISTS `news_image`;
CREATE TABLE IF NOT EXISTS `news_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsId` int(11) NOT NULL,
  `imageName` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `uploadedAddress` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_newsId` (`newsId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factorId` int(11) NOT NULL,
  `payPrice` double NOT NULL,
  `payStatus` tinyint(1) NOT NULL,
  `payDateTime` bigint(20) NOT NULL,
  `payCodeFromBank` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `payerIp` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `payerUserAgent` text COLLATE utf8_persian_ci NOT NULL,
  `payerUsername` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_comment`
--

DROP TABLE IF EXISTS `products_comment`;
CREATE TABLE IF NOT EXISTS `products_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `senderName` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `sentDateTime` bigint(20) NOT NULL,
  `senderUserAgent` text COLLATE utf8_persian_ci NOT NULL,
  `isOurUser` tinyint(1) NOT NULL,
  `ifIsOurUserWhatsUsername` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `senderEmail` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `message` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Triggers `products_comment`
--
DROP TRIGGER IF EXISTS `product_comment_ondelete`;
DELIMITER $$
CREATE TRIGGER `product_comment_ondelete` AFTER DELETE ON `products_comment` FOR EACH ROW BEGIN
update Financial_Product SET commentCount=commentCount-1
where id=old.productId;
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `products_comment_count`;
DELIMITER $$
CREATE TRIGGER `products_comment_count` AFTER INSERT ON `products_comment` FOR EACH ROW BEGIN

update Financial_Product SET commentCount=commentCount+1
where id=new.productId;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products_image`
--

DROP TABLE IF EXISTS `products_image`;
CREATE TABLE IF NOT EXISTS `products_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `imageName` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `uploadedAddress` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productId` (`productId`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products_image`
--

INSERT INTO `products_image` (`id`, `productId`, `imageName`, `uploadedAddress`, `size`) VALUES
(11, 7, 'factory.jpg', 'saadco.co/img/', 118),
(10, 9, 'bokhari1.jpg', 'saadco.co/img/', 40),
(9, 7, 'abgarmkon1.jpg', 'saadco.co/img/', 12),
(8, 8, 'bokhari-koodak1.jpg', 'saadco.co/img/', 10),
(14, 19, 'ojaq.jpg', 'saadco.co//img/', 32);

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

DROP TABLE IF EXISTS `site_info`;
CREATE TABLE IF NOT EXISTS `site_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `header` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `phoneNumbers` json NOT NULL,
  `socialMedia` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `title`, `header`, `phoneNumbers`, `socialMedia`) VALUES
(2, 'Saadco', 'saadcooo', '{\"tel\": \"001111222\", \"mobile\": \"0999321\"}', '{\"email\": \"saadcp@yahoo.com\", \"telegram\": \"@saaadco\", \"instagram\": \"saadco_mazand\"}');

-- --------------------------------------------------------

--
-- Table structure for table `special_products`
--

DROP TABLE IF EXISTS `special_products`;
CREATE TABLE IF NOT EXISTS `special_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productId` (`productId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdBy_username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `createdDateTime` bigint(20) NOT NULL,
  `department` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `viewStatus` tinyint(1) NOT NULL,
  `doesSeeByCompany` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `createdBy_username`, `createdDateTime`, `department`, `level`, `status`, `viewStatus`, `doesSeeByCompany`) VALUES
(1, 'user1', 20191201170423, 'kharid va foorush', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tickets_message`
--

DROP TABLE IF EXISTS `tickets_message`;
CREATE TABLE IF NOT EXISTS `tickets_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticketId` int(11) NOT NULL,
  `sender_username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `titleOfGroup` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `haveAttachment` tinyint(1) NOT NULL,
  `ifHaveAttachmentWhatsFilename` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `doesSee` tinyint(1) NOT NULL,
  `senderIp` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `senderUserAgent` text COLLATE utf8_persian_ci NOT NULL,
  `dateTimeOfSent` bigint(20) NOT NULL,
  `viewStatus` tinyint(1) NOT NULL,
  `ifEmployee` tinyint(1) NOT NULL,
  `whatsRate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ticketId` (`ticketId`),
  KEY `fk_senderUsername` (`sender_username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tickets_message`
--

INSERT INTO `tickets_message` (`id`, `ticketId`, `sender_username`, `titleOfGroup`, `text`, `haveAttachment`, `ifHaveAttachmentWhatsFilename`, `doesSee`, `senderIp`, `senderUserAgent`, `dateTimeOfSent`, `viewStatus`, `ifEmployee`, `whatsRate`) VALUES
(1, 1, 'user1', 'about products', 'salam salam bye bye', 0, '0', 0, '178.252.149.138', '78.0.3904.97LinuxChrome', 20191201173125, 0, 0, 0),
(2, 1, 'user1', 'about products', 'salam salam bye bye', 0, '0', 0, '178.252.149.138', '78.0.3904.97LinuxChrome', 20191201173156, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `dateOfBirthday` bigint(11) NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `postalCode` bigint(20) NOT NULL,
  `nationalCode` bigint(50) NOT NULL,
  `userIpWhenRegister` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `userAgentWhenRegister` text COLLATE utf8_persian_ci NOT NULL,
  `registerDateAndTime` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `isSuspend` tinyint(1) NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `lastLoginIp` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lastLoginUserAgent` text COLLATE utf8_persian_ci NOT NULL,
  `lastLoginDateTime` bigint(20) NOT NULL,
  `homeAddress` text COLLATE utf8_persian_ci NOT NULL,
  `workAddress` text COLLATE utf8_persian_ci NOT NULL,
  `sheba` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `dateOfBirthday`, `tel`, `mobile`, `postalCode`, `nationalCode`, `userIpWhenRegister`, `userAgentWhenRegister`, `registerDateAndTime`, `email`, `isSuspend`, `isActive`, `lastLoginIp`, `lastLoginUserAgent`, `lastLoginDateTime`, `homeAddress`, `workAddress`, `sheba`) VALUES
(2, 'user1', '123', 'updated nameee', 'l nameeee', 20, '9399', '09333', 0, 223019, '178.252.149.138', '78.0.3904.97LinuxChrome', 20191209143856, 'email@test.com', 0, 0, '5.209.139.149', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 20191209110856, 'hamunja', 'inja', 'shabaaa'),
(3, 'user2_employee', '123', 'first namea1', 'l nameeee22', 20, '9399', '09333', 0, 223019, '178.252.149.138', '78.0.3904.97LinuxChrome', 20191201160840, 'email@test.com', 0, 0, '178.252.149.138', '78.0.3904.97LinuxChrome', 0, 'hamunja', 'inja', 'shabaaa'),
(4, 'ilaman', '$2y$10$25wsDPpYSPOanPbCqJjj0.KXIQLqTM5oAoN7gMJ/45tZx2ZvbHC8a', 'first namea', 'l nameeee', 20, '9399', '09333', 0, 223019, '5.52.67.200', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 20191208153715, 'email@test.com', 0, 1, '5.52.67.200', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 0, 'hamunja', 'inja', 'shabaaa'),
(89, 'lordmostafajamali@gmail.com', '$2y$10$.HQ8CqTYQHdD4jzv/EU2Se9Gy.faBtOn.WV1g2ejKGihlrl4HHs.m', 'سیدحسین', 'جمالی', 1376, '01133244631', '09910425504', 11123872, 200000000, '77.42.16.242', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 1576260933, 'arsham@hoonamdev.com', 0, 0, '', '', 0, 'ساری میدان خزر', 'sari mazandaran', '1111111111111111111111111111'),
(90, 'amin', '$2y$10$5ZpGAL56MAgd.vwJoz7OWucVuTa8lBihG/xb.eHZNlVbuPF67zvbO', 'محمدامین', 'اونق', 1376, '01133244631', '09910425504', 155555555, 200000000, '77.42.28.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 1576264672, 'iran@iran.com', 0, 1, '', '', 0, 'ساری میدان خزر', 'sari mazandaran', '1555555555555');

-- --------------------------------------------------------

--
-- Table structure for table `users_admin`
--

DROP TABLE IF EXISTS `users_admin`;
CREATE TABLE IF NOT EXISTS `users_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_customers`
--

DROP TABLE IF EXISTS `users_customers`;
CREATE TABLE IF NOT EXISTS `users_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_employee`
--

DROP TABLE IF EXISTS `users_employee`;
CREATE TABLE IF NOT EXISTS `users_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personalCode` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dateOfStartCoperation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateOfEndCoperation` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `career` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users_employee`
--

INSERT INTO `users_employee` (`id`, `personalCode`, `dateOfStartCoperation`, `dateOfEndCoperation`, `career`, `userId`) VALUES
(1, 'personal code 111', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'career 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users_resellers`
--

DROP TABLE IF EXISTS `users_resellers`;
CREATE TABLE IF NOT EXISTS `users_resellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `resellerCode` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `dateOfStartCooperation` bigint(20) NOT NULL,
  `dateOfEndCooperation` bigint(20) NOT NULL,
  `allOfBoughtItem` int(11) DEFAULT '0',
  `allOfSelledItem` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_serviceworker`
--

DROP TABLE IF EXISTS `users_serviceworker`;
CREATE TABLE IF NOT EXISTS `users_serviceworker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `workingField` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dateOfStartCooperation` bigint(20) NOT NULL,
  `dateOfEndCooperation` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users_serviceworker`
--

INSERT INTO `users_serviceworker` (`id`, `userId`, `workingField`, `dateOfStartCooperation`, `dateOfEndCooperation`) VALUES
(11, 3, 'Cabinet', 124123213, 123123123);

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

DROP TABLE IF EXISTS `warranty`;
CREATE TABLE IF NOT EXISTS `warranty` (
  `product_id` int(11) NOT NULL,
  `serviceworker_id` int(11) NOT NULL,
  `warranty_code` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `issuance_regdate` bigint(20) NOT NULL,
  `issuance_expiredate` int(11) NOT NULL,
  `is_system_user` tinyint(1) NOT NULL,
  `system_user_username` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `free_customer_id` varchar(150) COLLATE utf8_persian_ci NOT NULL COMMENT 'if customer isn''t our app user',
  `warranty_picture_fileaddress` text COLLATE utf8_persian_ci NOT NULL,
  `warranty_status` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`serviceworker_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `warranty`
--

INSERT INTO `warranty` (`product_id`, `serviceworker_id`, `warranty_code`, `issuance_regdate`, `issuance_expiredate`, `is_system_user`, `system_user_username`, `free_customer_id`, `warranty_picture_fileaddress`, `warranty_status`, `id`) VALUES
(6, 11, 'SaadCo-981201010601', 1234213123, 213213213, 0, '', '1', '1.jpg', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
