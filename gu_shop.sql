-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.37 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных gu_shop
CREATE DATABASE IF NOT EXISTS `gu_shop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gu_shop`;

-- Дамп структуры для таблица gu_shop.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы gu_shop.categories: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `categoryName`) VALUES
	(1, 'Accessories'),
	(2, 'Bags'),
	(3, 'Denim'),
	(4, 'Jackets & Coats'),
	(5, 'Pants'),
	(6, 'Shoes'),
	(7, 'T-Shorts'),
	(8, 'Hoodies & Sweetshirts');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица gu_shop.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL DEFAULT '0',
  `datetimeCreate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datetimeUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idOrderStatus` int(11) NOT NULL DEFAULT '0',
  `productsOrder` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы gu_shop.orders: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `idUser`, `datetimeCreate`, `datetimeUpdate`, `idOrderStatus`, `productsOrder`) VALUES
	(5, 6, '2018-02-12 04:24:18', '2018-02-12 04:24:18', 4, '{"4":2,"6":2}'),
	(7, 22, '2018-02-12 04:30:51', '2018-02-12 04:30:51', 1, '{"4":1}'),
	(8, 22, '2018-02-12 04:32:02', '2018-02-12 04:32:02', 1, '{"1":1,"5":1}'),
	(9, 22, '2018-02-12 04:33:39', '2018-02-12 04:33:39', 1, '{"7":5}'),
	(10, 21, '2018-02-12 04:42:12', '2018-02-12 04:42:12', 1, '{"3":1,"2":1,"1":1}'),
	(12, 6, '2018-02-13 03:11:26', '2018-02-13 03:11:26', 1, '{"1":2}'),
	(13, 6, '2018-02-13 03:13:20', '2018-02-13 03:13:20', 2, '{"1":1,"2":2}'),
	(14, 6, '2018-02-13 03:38:32', '2018-02-13 03:38:32', 3, '{"1":1,"2":2,"3":3,"4":4}'),
	(15, 1, '2018-02-13 18:54:17', '2018-02-13 18:54:17', 2, '{"1":1,"6":1}'),
	(16, 6, '2018-02-13 19:15:48', '2018-02-13 19:15:48', 1, '[1,1]'),
	(17, 6, '2018-02-13 19:16:37', '2018-02-13 19:16:37', 1, '{"2":2,"1":1}'),
	(18, 1, '2018-02-13 19:27:03', '2018-02-13 19:27:03', 1, '{"1":3,"2":3}'),
	(21, 1, '2018-02-14 04:21:46', '2018-02-14 04:21:46', 1, '{"21":1}');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Дамп структуры для таблица gu_shop.order_statuses
CREATE TABLE IF NOT EXISTS `order_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы gu_shop.order_statuses: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` (`id`, `status_name`) VALUES
	(1, 'Новый'),
	(2, 'Оплачен'),
	(3, 'Доставлен'),
	(4, 'Закрыт');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;

-- Дамп структуры для таблица gu_shop.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `price` double DEFAULT '0',
  `idCategory` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы gu_shop.products: ~12 rows (приблизительно)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `price`, `idCategory`, `image`, `description`) VALUES
	(1, 'MANGO PEOPLE T-SHIRT 1', 100, 1, '/img/product1.jpg', ''),
	(2, 'MANGO PEOPLE T-SHIRT 2', 200, 1, '/img/product2.jpg', NULL),
	(3, 'MANGO PEOPLE T-SHIRT 3', 300, 1, '/img/product3.jpg', NULL),
	(4, 'MANGO PEOPLE T-SHIRT 4', 400, 1, '/img/product4.jpg', NULL),
	(5, 'MANGO PEOPLE T-SHIRT 5', 500, 1, '/img/product5.jpg', NULL),
	(6, 'MANGO PEOPLE T-SHIRT 6', 600, 6, '/img/product6.jpg', NULL),
	(7, 'MANGO PEOPLE T-SHIRT 7', 700, 7, '/img/product7.jpg', NULL),
	(8, 'MANGO PEOPLE T-SHIRT 8', 800, 8, '/img/product8.jpg', NULL),
	(9, 'MANGO PEOPLE T-SHIRT 9', 900, 1, '/img/product1.jpg', NULL),
	(10, 'MANGO PEOPLE T-SHIRT 10', 1000, 2, '/img/product1.jpg', NULL),
	(12, 'MANGO PEOPLE T-SHIRT 12', 1300, 2, '/img/product1.jpg', NULL),
	(21, 'PANTS', 333, 7, '/img/BK0550_21_model.jpg', 'тестовое описание');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дамп структуры для таблица gu_shop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `hashPass` varchar(50) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы gu_shop.users: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstName`, `lastName`, `middleName`, `email`, `hashPass`, `isAdmin`) VALUES
	(1, 'Админ', 'Админов', NULL, 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'Вадим', 'Амплеев', NULL, 'user@user.local', 'ee11cbb19052e40b07aac0ca060c23ee', 0),
	(6, 'Qqwe', 'Ew', NULL, '1234@1233', '81dc9bdb52d04dc20036dbd8313ed055', 0),
	(8, 'wer', 'rew', NULL, '234@234.re', '289dff07669d7a23de0ef88d2f7129e7', 0),
	(10, 'rffr', 'frerfe', NULL, 'dsdss@cdsd.ru', '202cb962ac59075b964b07152d234b70', 0),
	(13, '567', '765', NULL, '567@455.tg', '99c5e07b4d5de9d18c350cdf64c5aa3d', 0),
	(15, 'cdcd', 'cdcd', NULL, 'cdd@cffv.rucddc', '202cb962ac59075b964b07152d234b70', 0),
	(20, 'vdff', 'vdfvfd', NULL, '678@678', '9fe8593a8a330607d76796b35c64c600', 0),
	(21, 'vffvd', 'vfdfvd', NULL, '890@890', '024d7f84fff11dd7e8d9c510137a2381', 0),
	(22, 'cdsd', 'csdc', NULL, '321@321', 'caf1a3dfb505ffed0d024130f58c5cfa', 0),
	(23, 'vfdfvd', 'vffvd', NULL, '987@987', 'df6d2338b2b8fce1ec2f6dda0a630eb0', 0),
	(24, 'cdffd', 'cdsds', NULL, '765@765', 'd840cc5d906c3e9c84374c8919d2074e', 0),
	(25, 'ddc', 'cfdf', NULL, '345@345', 'd81f9c1be2e08964bf9f24b15f0e4900', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
