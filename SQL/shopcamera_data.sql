/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shopcamera

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-29 21:15:41
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
-- Records of auth_order
-- ----------------------------

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
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Camera trọn bộ ', '0', '', '', 'http://fptcamera.vn/camera-tron-bo');
INSERT INTO `category` VALUES ('2', 'Trọn bộ camera giá rẻ', '1', '', '\0', 'http://fptcamera.vn/tron-bo-camera-gia-re');
INSERT INTO `category` VALUES ('3', 'Trọn bộ 1 Camera giá rẻ', '2', '', '\0', 'http://fptcamera.vn/tron-bo-1-camera-gia-re');
INSERT INTO `category` VALUES ('4', 'Trọn bộ 2 camera giá rẻ', '2', '', '\0', 'http://fptcamera.vn/tron-bo-2-camera-gia-re');
INSERT INTO `category` VALUES ('5', 'Trọn bộ 3 Camera giá rẻ', '2', '', '\0', 'http://fptcamera.vn/tron-bo-3-camera-gia-re');
INSERT INTO `category` VALUES ('6', 'Trọn bộ 4 Camera giá rẻ', '2', '', '\0', 'http://fptcamera.vn/tron-bo-4-camera-gia-re');
INSERT INTO `category` VALUES ('7', 'Trọn bộ camera HD', '1', '', '\0', 'http://fptcamera.vn/tron-bo-camera-hd');
INSERT INTO `category` VALUES ('8', 'Trọn bộ 1 Camera HD', '7', '', '\0', 'http://fptcamera.vn/tron-bo-1-camera-hd');
INSERT INTO `category` VALUES ('9', 'Trọn bộ 2 Camera HD', '7', '', '\0', 'http://fptcamera.vn/tron-bo-2-camera-hd');
INSERT INTO `category` VALUES ('10', 'Trọn bộ 3 Camera HD', '7', '', '\0', 'http://fptcamera.vn/tron-bo-3-camera-hd');
INSERT INTO `category` VALUES ('11', 'Trọn bộ 4 Camera HD', '7', '', '\0', 'http://fptcamera.vn/tron-bo-4-camera-hd');
INSERT INTO `category` VALUES ('12', 'Camera Nhập khẩu', '1', '', '\0', 'http://fptcamera.vn/camera-nhap-khau');
INSERT INTO `category` VALUES ('13', 'Bộ 2 Camera HIKVISION', '12', '', '\0', 'http://fptcamera.vn/bo-2-camera-hikvision');
INSERT INTO `category` VALUES ('14', 'Lắp 1 Camera HIKVISION', '12', '', '\0', 'http://fptcamera.vn/lap-1-camera-hikvision');
INSERT INTO `category` VALUES ('15', 'Bộ camera KCE HÀN QUỐC', '12', '', '\0', 'http://fptcamera.vn/bo-camera-kce-han-quoc');
INSERT INTO `category` VALUES ('16', 'Camera giám sát ', '0', '', '', 'http://fptcamera.vn/camera-giam-sat');
INSERT INTO `category` VALUES ('17', 'Camera theo hãng', '16', '', '\0', 'http://fptcamera.vn/camera-theo-hang');
INSERT INTO `category` VALUES ('18', 'Camera Dahua', '17', '', '\0', 'http://fptcamera.vn/camera-dahua');
INSERT INTO `category` VALUES ('19', 'Camera Vantech', '17', '', '\0', 'http://fptcamera.vn/camera-vantech');
INSERT INTO `category` VALUES ('20', 'Camera Hikvision', '17', '', '\0', 'http://fptcamera.vn/camera-hikvision');
INSERT INTO `category` VALUES ('21', 'Camera Benco', '17', '', '\0', 'http://fptcamera.vn/camera-benco');
INSERT INTO `category` VALUES ('22', 'Camera Kbvision', '17', '', '\0', 'http://fptcamera.vn/camera-kbvision');
INSERT INTO `category` VALUES ('23', 'Camera SAMSUNG', '17', '', '\0', 'http://fptcamera.vn/camera-samsung');
INSERT INTO `category` VALUES ('24', 'Camera KCE', '17', '', '\0', 'http://fptcamera.vn/camera-kce');
INSERT INTO `category` VALUES ('25', 'Camera Panasonic', '17', '', '\0', 'http://fptcamera.vn/camera-panasonic');
INSERT INTO `category` VALUES ('26', 'Camera HDPRO', '17', '', '\0', 'http://fptcamera.vn/camera-hdpro');
INSERT INTO `category` VALUES ('27', 'Camera giá rẻ', '17', '', '\0', 'http://fptcamera.vn/camera-gia-re');
INSERT INTO `category` VALUES ('28', 'Camera SPYEYE', '17', '', '\0', 'http://fptcamera.vn/camera-spyeye');
INSERT INTO `category` VALUES ('29', 'Camera Questek', '17', '', '\0', 'http://fptcamera.vn/camera-questek');
INSERT INTO `category` VALUES ('30', 'Camera theo loại', '16', '', '\0', 'http://fptcamera.vn/camera-theo-loai');
INSERT INTO `category` VALUES ('31', 'Camera Analog', '30', '', '\0', 'http://fptcamera.vn/camera-analog');
INSERT INTO `category` VALUES ('32', 'Camera AHD', '30', '', '\0', 'http://fptcamera.vn/camera-ahd');
INSERT INTO `category` VALUES ('33', 'Camera IP', '30', '', '\0', 'http://fptcamera.vn/camera-ip');
INSERT INTO `category` VALUES ('34', 'Camera HDCVI', '30', '', '\0', 'http://fptcamera.vn/camera-hdcvi');
INSERT INTO `category` VALUES ('35', 'Camera HD-SDI', '30', '', '\0', 'http://fptcamera.vn/camera-hd-sdi');
INSERT INTO `category` VALUES ('36', 'Camera HD-TVI', '30', '', '\0', 'http://fptcamera.vn/camera-hd-tvi');
INSERT INTO `category` VALUES ('37', 'Camera theo chức năng', '16', '', '\0', 'http://fptcamera.vn/camera-theo-chuc-nang');
INSERT INTO `category` VALUES ('38', 'Camera quan sát', '37', '', '\0', 'http://fptcamera.vn/camera-quan-sat');
INSERT INTO `category` VALUES ('39', 'Camera Không Dây', '37', '', '\0', 'http://fptcamera.vn/camera-khong-day');
INSERT INTO `category` VALUES ('40', 'Camera Wifi', '37', '', '\0', 'http://fptcamera.vn/camera-wifi');
INSERT INTO `category` VALUES ('41', 'Camera Zoom', '37', '', '\0', 'http://fptcamera.vn/camera-zoom');
INSERT INTO `category` VALUES ('42', 'Camera quay quét', '37', '', '\0', 'http://fptcamera.vn/camera-quay-quet');
INSERT INTO `category` VALUES ('43', 'Camera Thân', '37', '', '\0', 'http://fptcamera.vn/camera-than');
INSERT INTO `category` VALUES ('44', 'Camera Dome', '37', '', '\0', 'http://fptcamera.vn/camera-dome');
INSERT INTO `category` VALUES ('45', 'Camera ngụy trang', '37', '', '\0', 'http://fptcamera.vn/camera-nguy-trang');
INSERT INTO `category` VALUES ('46', 'Camera hành trình', '37', '', '\0', 'http://fptcamera.vn/camera-hanh-trinh');
INSERT INTO `category` VALUES ('47', 'Camera POC', '37', '', '\0', 'http://fptcamera.vn/camera-poc');
INSERT INTO `category` VALUES ('48', 'Camera POE', '37', '', '\0', 'http://fptcamera.vn/camera-poe');
INSERT INTO `category` VALUES ('49', 'Camera nhìn đêm có màu', '37', '', '\0', 'http://fptcamera.vn/camera-nhin-dem-co-mau');
INSERT INTO `category` VALUES ('50', 'Đầu ghi hình camera ', '0', '', '', 'http://fptcamera.vn/dau-ghi-hinh-camera');
INSERT INTO `category` VALUES ('51', 'Đầu ghi hình theo hãng', '50', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-theo-hang');
INSERT INTO `category` VALUES ('52', 'Đầu ghi hình Vantech', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-vantech');
INSERT INTO `category` VALUES ('53', 'Đầu ghi hình BENCO', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-benco');
INSERT INTO `category` VALUES ('54', 'Đầu ghi hình Questek', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-questek');
INSERT INTO `category` VALUES ('55', 'Đầu ghi hình Dahua', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-dahua');
INSERT INTO `category` VALUES ('56', 'Đầu ghi hình SPYEYE', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-spyeye');
INSERT INTO `category` VALUES ('57', 'Đầu ghi hình Hikvision', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-hikvision');
INSERT INTO `category` VALUES ('58', 'Đầu ghi hình HDPRO', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-hdpro');
INSERT INTO `category` VALUES ('59', 'Đầu Ghi Hình KCE', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-kce');
INSERT INTO `category` VALUES ('60', 'Đầu ghi hình giá rẻ', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-gia-re');
INSERT INTO `category` VALUES ('61', 'Đầu ghi hình Kbvision', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-kbvision');
INSERT INTO `category` VALUES ('62', 'Đầu ghi hình Samsung', '51', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-samsung');
INSERT INTO `category` VALUES ('63', 'Đầu ghi hình theo loại', '50', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-theo-loai');
INSERT INTO `category` VALUES ('64', 'Đầu ghi hình Analog', '63', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-analog');
INSERT INTO `category` VALUES ('65', 'Đầu ghi hình AHD', '63', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-ahd');
INSERT INTO `category` VALUES ('66', 'Đầu ghi hình IP', '63', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-ip');
INSERT INTO `category` VALUES ('67', 'Đầu ghi hình HDCVI', '63', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-hdcvi');
INSERT INTO `category` VALUES ('68', 'Đầu ghi hình HD-SDI', '63', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-hd-sdi');
INSERT INTO `category` VALUES ('69', 'Đầu ghi hình HD-TVI', '63', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-hd-tvi');
INSERT INTO `category` VALUES ('70', 'Đầu ghi hình theo kênh', '50', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-theo-kenh');
INSERT INTO `category` VALUES ('71', 'Đầu ghi hình 4 Kênh', '70', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh');
INSERT INTO `category` VALUES ('72', 'Đầu ghi hình 8 Kênh', '70', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh');
INSERT INTO `category` VALUES ('73', 'Đầu ghi hình 16 Kênh', '70', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh');
INSERT INTO `category` VALUES ('74', 'Đầu ghi hình 24 Kênh', '70', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh');
INSERT INTO `category` VALUES ('75', 'Đầu ghi hình 32 Kênh', '70', '', '\0', 'http://fptcamera.vn/dau-ghi-hinh-32-kenh');
INSERT INTO `category` VALUES ('76', 'Phụ kiện camera ', '0', '', '', 'http://fptcamera.vn/phu-kien-camera');
INSERT INTO `category` VALUES ('77', 'Ổ lưu dữ liệu Camera', '76', '', '\0', 'http://fptcamera.vn/o-luu-du-lieu-camera');
INSERT INTO `category` VALUES ('78', 'Ổ lưu trữ 80G', '77', '', '\0', 'http://fptcamera.vn/o-luu-tru-80g');
INSERT INTO `category` VALUES ('79', 'Ổ lưu trữ 160G', '77', '', '\0', 'http://fptcamera.vn/o-luu-tru-160g');
INSERT INTO `category` VALUES ('80', 'Ổ Lưu dữ liệu 250G', '77', '', '\0', 'http://fptcamera.vn/o-luu-du-lieu-250g');
INSERT INTO `category` VALUES ('81', 'Ổ lưu dữ liệu 500G', '77', '', '\0', 'http://fptcamera.vn/o-luu-du-lieu-500g');
INSERT INTO `category` VALUES ('82', 'HDD dung lượng 1T', '77', '', '\0', 'http://fptcamera.vn/hdd-dung-luong-1t');
INSERT INTO `category` VALUES ('83', 'HDD dung lượng 2T', '77', '', '\0', 'http://fptcamera.vn/hdd-dung-luong-2t');
INSERT INTO `category` VALUES ('84', 'HDD dung lượng 3000G', '77', '', '\0', 'http://fptcamera.vn/hdd-dung-luong-3000g');
INSERT INTO `category` VALUES ('85', 'Phụ kiện chính hãng', '76', '', '\0', 'http://fptcamera.vn/phu-kien-chinh-hang');
INSERT INTO `category` VALUES ('86', 'Nguồn Camera', '85', '', '\0', 'http://fptcamera.vn/nguon-camera');
INSERT INTO `category` VALUES ('87', 'Vỏ bảo vệ Camera', '85', '', '\0', 'http://fptcamera.vn/vo-bao-ve-camera');
INSERT INTO `category` VALUES ('88', 'Dây cáp Camera', '85', '', '\0', 'http://fptcamera.vn/day-cap-camera');
INSERT INTO `category` VALUES ('89', 'Jack kết nối Camera', '85', '', '\0', 'http://fptcamera.vn/jack-ket-noi-camera');
INSERT INTO `category` VALUES ('90', 'Chân đế xoay camera', '85', '', '\0', 'http://fptcamera.vn/chan-de-xoay-camera');
INSERT INTO `category` VALUES ('91', 'Bộ lưu điện UPS', '76', '', '\0', 'http://fptcamera.vn/bo-luu-dien-ups');
INSERT INTO `category` VALUES ('92', 'Thiết bị an ninh ', '0', '', '', 'http://fptcamera.vn/thiet-bi-an-ninh');
INSERT INTO `category` VALUES ('93', 'Thiết bị chống trộm', '92', '', '\0', 'http://fptcamera.vn/thiet-bi-chong-trom');
INSERT INTO `category` VALUES ('94', 'Bộ báo trộm thông minh', '93', '', '\0', 'http://fptcamera.vn/bo-bao-trom-thong-minh');
INSERT INTO `category` VALUES ('95', 'Chuông cửa màn hình', '92', '', '\0', 'http://fptcamera.vn/chuong-cua-man-hinh');
INSERT INTO `category` VALUES ('96', 'Chuông cửa camera', '95', '', '\0', 'http://fptcamera.vn/chuong-cua-camera');
INSERT INTO `category` VALUES ('97', 'Màn hình', '95', '', '\0', 'http://fptcamera.vn/man-hinh');
INSERT INTO `category` VALUES ('98', 'Máy chấm công ', '0', '', '', 'http://fptcamera.vn/may-cham-cong');
INSERT INTO `category` VALUES ('99', 'Theo hãng SX', '98', '', '\0', 'http://fptcamera.vn/theo-hang-sx');
INSERT INTO `category` VALUES ('100', 'RONALD JACK', '99', '', '\0', 'http://fptcamera.vn/ronald-jack');
INSERT INTO `category` VALUES ('101', 'WISE EYE', '99', '', '\0', 'http://fptcamera.vn/wise-eye');
INSERT INTO `category` VALUES ('102', 'Theo loại ứng dụng', '98', '', '\0', 'http://fptcamera.vn/theo-loai-ung-dung');
INSERT INTO `category` VALUES ('103', 'Bằng vân tay', '102', '', '\0', 'http://fptcamera.vn/bang-van-tay');
INSERT INTO `category` VALUES ('104', 'Vân tay & Thẻ từ cảm ứng', '102', '', '\0', 'http://fptcamera.vn/van-tay-the-tu-cam-ung');
INSERT INTO `category` VALUES ('105', 'Số lượng quản lý', '98', '', '\0', 'http://fptcamera.vn/so-luong-quan-ly');
INSERT INTO `category` VALUES ('106', '500 Vân tay', '105', '', '\0', 'http://fptcamera.vn/500-van-tay');
INSERT INTO `category` VALUES ('107', '3000 Vân tay', '105', '', '\0', 'http://fptcamera.vn/3000-van-tay');
INSERT INTO `category` VALUES ('108', 'Tổng đài - Bộ đàm ', '0', '', '', 'http://fptcamera.vn/tong-dai-bo-dam');
INSERT INTO `category` VALUES ('109', 'Bộ đàm cầm tay', '108', '', '\0', 'http://fptcamera.vn/bo-dam-cam-tay');
INSERT INTO `category` VALUES ('110', 'Bộ đàm IRADIO', '109', '', '\0', 'http://fptcamera.vn/bo-dam-iradio');
INSERT INTO `category` VALUES ('111', 'Bộ đàm KENWOOD', '109', '', '\0', 'http://fptcamera.vn/bo-dam-kenwood');
INSERT INTO `category` VALUES ('112', 'Thiết bị văn phòng ', '0', '', '', 'http://fptcamera.vn/thiet-bi-van-phong');
INSERT INTO `category` VALUES ('113', 'Máy chiếu', '112', '', '\0', 'http://fptcamera.vn/may-chieu');
INSERT INTO `category` VALUES ('114', 'Máy chiếu SONY', '113', '', '\0', 'http://fptcamera.vn/may-chieu-sony');
INSERT INTO `category` VALUES ('115', 'Phụ kiện máy chiếu', '112', '', '\0', 'http://fptcamera.vn/phu-kien-may-chieu');
INSERT INTO `category` VALUES ('116', 'Màn chiếu treo tường', '115', '', '\0', 'http://fptcamera.vn/man-chieu-treo-tuong');

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
-- Records of forgot_pass
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------

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
-- Records of order
-- ----------------------------

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
-- Records of order_detail
-- ----------------------------

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
-- Records of product
-- ----------------------------

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
-- Records of product_detail
-- ----------------------------

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
-- Records of product_sales
-- ----------------------------

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
-- Records of role_detail
-- ----------------------------

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
-- Records of sales
-- ----------------------------

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
-- Records of sales_off
-- ----------------------------

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
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Mai', 'Nguyenwipwa@gmail.com', 'Mat khau', null, '2017-10-29 20:13:51', '2017-10-29 20:13:51');

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

-- ----------------------------
-- Records of user_detail
-- ----------------------------
