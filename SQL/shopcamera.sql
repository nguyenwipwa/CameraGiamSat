/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shopcamera

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-28 14:54:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_order
-- ----------------------------
DROP TABLE IF EXISTS `auth_order`;
CREATE TABLE `auth_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  CONSTRAINT `auth_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_root` int(11) DEFAULT '0',
  `status` bit(1) DEFAULT NULL,
  `menu` bit(1) DEFAULT b'1' COMMENT 'insert menu top',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for forgot_pass
-- ----------------------------
DROP TABLE IF EXISTS `forgot_pass`;
CREATE TABLE `forgot_pass` (
  `id_user` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `forgot_pass_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT '0',
  `name_customer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `progress` bit(1) DEFAULT NULL,
  `date_purchase` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_sales_off` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_sales_off` (`id_sales_off`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_sales_off`) REFERENCES `sales_off` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  PRIMARY KEY (`id_order`,`id_product`),
  KEY `idorder` (`id_order`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `eval` tinyint(1) DEFAULT NULL,
  `viewer` int(11) DEFAULT NULL,
  `status` bit(1) DEFAULT b'1',
  PRIMARY KEY (`id`,`id_category`),
  KEY `idcap3` (`id_category`),
  KEY `id` (`id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for product_detail
-- ----------------------------
DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE `product_detail` (
  `id_product` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail_product` longtext,
  `digital` longtext,
  PRIMARY KEY (`id_product`),
  CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for product_sales
-- ----------------------------
DROP TABLE IF EXISTS `product_sales`;
CREATE TABLE `product_sales` (
  `id_sales` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `percent` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_sales`,`id_product`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `product_sales_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id`),
  CONSTRAINT `product_sales_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for role_detail
-- ----------------------------
DROP TABLE IF EXISTS `role_detail`;
CREATE TABLE `role_detail` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales_off
-- ----------------------------
DROP TABLE IF EXISTS `sales_off`;
CREATE TABLE `sales_off` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `percent` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` bit(1) DEFAULT b'1',
  `role` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `role` (`role`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role_detail` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for user_detail
-- ----------------------------
DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE `user_detail` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
