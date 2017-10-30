/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shopcamera

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-31 00:22:54
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
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Camera trọn bộ ', '0', '', '', 'lap-dat-camera-tron-bo.png', 'http://fptcamera.vn/camera-tron-bo');
INSERT INTO `category` VALUES ('2', 'Trọn bộ camera giá rẻ', '1', '', '\0', '', 'http://fptcamera.vn/tron-bo-camera-gia-re');
INSERT INTO `category` VALUES ('3', 'Trọn bộ 1 Camera giá rẻ', '2', '', '\0', '', 'http://fptcamera.vn/tron-bo-1-camera-gia-re');
INSERT INTO `category` VALUES ('4', 'Trọn bộ 2 camera giá rẻ', '2', '', '\0', '', 'http://fptcamera.vn/tron-bo-2-camera-gia-re');
INSERT INTO `category` VALUES ('5', 'Trọn bộ 3 Camera giá rẻ', '2', '', '\0', '', 'http://fptcamera.vn/tron-bo-3-camera-gia-re');
INSERT INTO `category` VALUES ('6', 'Trọn bộ 4 Camera giá rẻ', '2', '', '\0', '', 'http://fptcamera.vn/tron-bo-4-camera-gia-re');
INSERT INTO `category` VALUES ('7', 'Trọn bộ camera HD', '1', '', '\0', '', 'http://fptcamera.vn/tron-bo-camera-hd');
INSERT INTO `category` VALUES ('8', 'Trọn bộ 1 Camera HD', '7', '', '\0', '', 'http://fptcamera.vn/tron-bo-1-camera-hd');
INSERT INTO `category` VALUES ('9', 'Trọn bộ 2 Camera HD', '7', '', '\0', '', 'http://fptcamera.vn/tron-bo-2-camera-hd');
INSERT INTO `category` VALUES ('10', 'Trọn bộ 3 Camera HD', '7', '', '\0', '', 'http://fptcamera.vn/tron-bo-3-camera-hd');
INSERT INTO `category` VALUES ('11', 'Trọn bộ 4 Camera HD', '7', '', '\0', '', 'http://fptcamera.vn/tron-bo-4-camera-hd');
INSERT INTO `category` VALUES ('12', 'Camera Nhập khẩu', '1', '', '\0', '', 'http://fptcamera.vn/camera-nhap-khau');
INSERT INTO `category` VALUES ('13', 'Bộ 2 Camera HIKVISION', '12', '', '\0', '', 'http://fptcamera.vn/bo-2-camera-hikvision');
INSERT INTO `category` VALUES ('14', 'Lắp 1 Camera HIKVISION', '12', '', '\0', '', 'http://fptcamera.vn/lap-1-camera-hikvision');
INSERT INTO `category` VALUES ('15', 'Bộ camera KCE HÀN QUỐC', '12', '', '\0', '', 'http://fptcamera.vn/bo-camera-kce-han-quoc');
INSERT INTO `category` VALUES ('16', 'Camera giám sát ', '0', '', '', 'camera-giam-sat.png', 'http://fptcamera.vn/camera-giam-sat');
INSERT INTO `category` VALUES ('17', 'Camera theo hãng', '16', '', '\0', '', 'http://fptcamera.vn/camera-theo-hang');
INSERT INTO `category` VALUES ('18', 'Camera Dahua', '17', '', '\0', '', 'http://fptcamera.vn/camera-dahua');
INSERT INTO `category` VALUES ('19', 'Camera Vantech', '17', '', '\0', '', 'http://fptcamera.vn/camera-vantech');
INSERT INTO `category` VALUES ('20', 'Camera Hikvision', '17', '', '\0', '', 'http://fptcamera.vn/camera-hikvision');
INSERT INTO `category` VALUES ('21', 'Camera Benco', '17', '', '\0', '', 'http://fptcamera.vn/camera-benco');
INSERT INTO `category` VALUES ('22', 'Camera Kbvision', '17', '', '\0', '', 'http://fptcamera.vn/camera-kbvision');
INSERT INTO `category` VALUES ('23', 'Camera SAMSUNG', '17', '', '\0', '', 'http://fptcamera.vn/camera-samsung');
INSERT INTO `category` VALUES ('24', 'Camera KCE', '17', '', '\0', '', 'http://fptcamera.vn/camera-kce');
INSERT INTO `category` VALUES ('25', 'Camera Panasonic', '17', '', '\0', '', 'http://fptcamera.vn/camera-panasonic');
INSERT INTO `category` VALUES ('26', 'Camera HDPRO', '17', '', '\0', '', 'http://fptcamera.vn/camera-hdpro');
INSERT INTO `category` VALUES ('27', 'Camera giá rẻ', '17', '', '\0', '', 'http://fptcamera.vn/camera-gia-re');
INSERT INTO `category` VALUES ('28', 'Camera SPYEYE', '17', '', '\0', '', 'http://fptcamera.vn/camera-spyeye');
INSERT INTO `category` VALUES ('29', 'Camera Questek', '17', '', '\0', '', 'http://fptcamera.vn/camera-questek');
INSERT INTO `category` VALUES ('30', 'Camera theo loại', '16', '', '\0', '', 'http://fptcamera.vn/camera-theo-loai');
INSERT INTO `category` VALUES ('31', 'Camera Analog', '30', '', '\0', '', 'http://fptcamera.vn/camera-analog');
INSERT INTO `category` VALUES ('32', 'Camera AHD', '30', '', '\0', '', 'http://fptcamera.vn/camera-ahd');
INSERT INTO `category` VALUES ('33', 'Camera IP', '30', '', '\0', '', 'http://fptcamera.vn/camera-ip');
INSERT INTO `category` VALUES ('34', 'Camera HDCVI', '30', '', '\0', '', 'http://fptcamera.vn/camera-hdcvi');
INSERT INTO `category` VALUES ('35', 'Camera HD-SDI', '30', '', '\0', '', 'http://fptcamera.vn/camera-hd-sdi');
INSERT INTO `category` VALUES ('36', 'Camera HD-TVI', '30', '', '\0', '', 'http://fptcamera.vn/camera-hd-tvi');
INSERT INTO `category` VALUES ('37', 'Camera theo chức năng', '16', '', '\0', '', 'http://fptcamera.vn/camera-theo-chuc-nang');
INSERT INTO `category` VALUES ('38', 'Camera quan sát', '37', '', '\0', '', 'http://fptcamera.vn/camera-quan-sat');
INSERT INTO `category` VALUES ('39', 'Camera Không Dây', '37', '', '\0', '', 'http://fptcamera.vn/camera-khong-day');
INSERT INTO `category` VALUES ('40', 'Camera Wifi', '37', '', '\0', '', 'http://fptcamera.vn/camera-wifi');
INSERT INTO `category` VALUES ('41', 'Camera Zoom', '37', '', '\0', '', 'http://fptcamera.vn/camera-zoom');
INSERT INTO `category` VALUES ('42', 'Camera quay quét', '37', '', '\0', '', 'http://fptcamera.vn/camera-quay-quet');
INSERT INTO `category` VALUES ('43', 'Camera Thân', '37', '', '\0', '', 'http://fptcamera.vn/camera-than');
INSERT INTO `category` VALUES ('44', 'Camera Dome', '37', '', '\0', '', 'http://fptcamera.vn/camera-dome');
INSERT INTO `category` VALUES ('45', 'Camera ngụy trang', '37', '', '\0', '', 'http://fptcamera.vn/camera-nguy-trang');
INSERT INTO `category` VALUES ('46', 'Camera hành trình', '37', '', '\0', '', 'http://fptcamera.vn/camera-hanh-trinh');
INSERT INTO `category` VALUES ('47', 'Camera POC', '37', '', '\0', '', 'http://fptcamera.vn/camera-poc');
INSERT INTO `category` VALUES ('48', 'Camera POE', '37', '', '\0', '', 'http://fptcamera.vn/camera-poe');
INSERT INTO `category` VALUES ('49', 'Camera nhìn đêm có màu', '37', '', '\0', '', 'http://fptcamera.vn/camera-nhin-dem-co-mau');
INSERT INTO `category` VALUES ('50', 'Đầu ghi hình camera ', '0', '', '', 'dau-ghi-hinh-camera-quan-sat.png', 'http://fptcamera.vn/dau-ghi-hinh-camera');
INSERT INTO `category` VALUES ('51', 'Đầu ghi hình theo hãng', '50', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-theo-hang');
INSERT INTO `category` VALUES ('52', 'Đầu ghi hình Vantech', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-vantech');
INSERT INTO `category` VALUES ('53', 'Đầu ghi hình BENCO', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-benco');
INSERT INTO `category` VALUES ('54', 'Đầu ghi hình Questek', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-questek');
INSERT INTO `category` VALUES ('55', 'Đầu ghi hình Dahua', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-dahua');
INSERT INTO `category` VALUES ('56', 'Đầu ghi hình SPYEYE', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-spyeye');
INSERT INTO `category` VALUES ('57', 'Đầu ghi hình Hikvision', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-hikvision');
INSERT INTO `category` VALUES ('58', 'Đầu ghi hình HDPRO', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-hdpro');
INSERT INTO `category` VALUES ('59', 'Đầu Ghi Hình KCE', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-kce');
INSERT INTO `category` VALUES ('60', 'Đầu ghi hình giá rẻ', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-gia-re');
INSERT INTO `category` VALUES ('61', 'Đầu ghi hình Kbvision', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-kbvision');
INSERT INTO `category` VALUES ('62', 'Đầu ghi hình Samsung', '51', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-samsung');
INSERT INTO `category` VALUES ('63', 'Đầu ghi hình theo loại', '50', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-theo-loai');
INSERT INTO `category` VALUES ('64', 'Đầu ghi hình Analog', '63', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-analog');
INSERT INTO `category` VALUES ('65', 'Đầu ghi hình AHD', '63', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-ahd');
INSERT INTO `category` VALUES ('66', 'Đầu ghi hình IP', '63', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-ip');
INSERT INTO `category` VALUES ('67', 'Đầu ghi hình HDCVI', '63', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-hdcvi');
INSERT INTO `category` VALUES ('68', 'Đầu ghi hình HD-SDI', '63', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-hd-sdi');
INSERT INTO `category` VALUES ('69', 'Đầu ghi hình HD-TVI', '63', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-hd-tvi');
INSERT INTO `category` VALUES ('70', 'Đầu ghi hình theo kênh', '50', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-theo-kenh');
INSERT INTO `category` VALUES ('71', 'Đầu ghi hình 4 Kênh', '70', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh');
INSERT INTO `category` VALUES ('72', 'Đầu ghi hình 8 Kênh', '70', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh');
INSERT INTO `category` VALUES ('73', 'Đầu ghi hình 16 Kênh', '70', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh');
INSERT INTO `category` VALUES ('74', 'Đầu ghi hình 24 Kênh', '70', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh');
INSERT INTO `category` VALUES ('75', 'Đầu ghi hình 32 Kênh', '70', '', '\0', '', 'http://fptcamera.vn/dau-ghi-hinh-32-kenh');
INSERT INTO `category` VALUES ('76', 'Phụ kiện camera ', '0', '', '', 'phu-kien-camera.png', 'http://fptcamera.vn/phu-kien-camera');
INSERT INTO `category` VALUES ('77', 'Ổ lưu dữ liệu Camera', '76', '', '\0', '', 'http://fptcamera.vn/o-luu-du-lieu-camera');
INSERT INTO `category` VALUES ('78', 'Ổ lưu trữ 80G', '77', '', '\0', '', 'http://fptcamera.vn/o-luu-tru-80g');
INSERT INTO `category` VALUES ('79', 'Ổ lưu trữ 160G', '77', '', '\0', '', 'http://fptcamera.vn/o-luu-tru-160g');
INSERT INTO `category` VALUES ('80', 'Ổ Lưu dữ liệu 250G', '77', '', '\0', '', 'http://fptcamera.vn/o-luu-du-lieu-250g');
INSERT INTO `category` VALUES ('81', 'Ổ lưu dữ liệu 500G', '77', '', '\0', '', 'http://fptcamera.vn/o-luu-du-lieu-500g');
INSERT INTO `category` VALUES ('82', 'HDD dung lượng 1T', '77', '', '\0', '', 'http://fptcamera.vn/hdd-dung-luong-1t');
INSERT INTO `category` VALUES ('83', 'HDD dung lượng 2T', '77', '', '\0', '', 'http://fptcamera.vn/hdd-dung-luong-2t');
INSERT INTO `category` VALUES ('84', 'HDD dung lượng 3000G', '77', '', '\0', '', 'http://fptcamera.vn/hdd-dung-luong-3000g');
INSERT INTO `category` VALUES ('85', 'Phụ kiện chính hãng', '76', '', '\0', '', 'http://fptcamera.vn/phu-kien-chinh-hang');
INSERT INTO `category` VALUES ('86', 'Nguồn Camera', '85', '', '\0', '', 'http://fptcamera.vn/nguon-camera');
INSERT INTO `category` VALUES ('87', 'Vỏ bảo vệ Camera', '85', '', '\0', '', 'http://fptcamera.vn/vo-bao-ve-camera');
INSERT INTO `category` VALUES ('88', 'Dây cáp Camera', '85', '', '\0', '', 'http://fptcamera.vn/day-cap-camera');
INSERT INTO `category` VALUES ('89', 'Jack kết nối Camera', '85', '', '\0', '', 'http://fptcamera.vn/jack-ket-noi-camera');
INSERT INTO `category` VALUES ('90', 'Chân đế xoay camera', '85', '', '\0', '', 'http://fptcamera.vn/chan-de-xoay-camera');
INSERT INTO `category` VALUES ('91', 'Bộ lưu điện UPS', '76', '', '\0', '', 'http://fptcamera.vn/bo-luu-dien-ups');
INSERT INTO `category` VALUES ('92', 'Thiết bị an ninh ', '0', '', '', 'camera-thiet-bi-an-ninh.png', 'http://fptcamera.vn/thiet-bi-an-ninh');
INSERT INTO `category` VALUES ('93', 'Thiết bị chống trộm', '92', '', '\0', '', 'http://fptcamera.vn/thiet-bi-chong-trom');
INSERT INTO `category` VALUES ('94', 'Bộ báo trộm thông minh', '93', '', '\0', '', 'http://fptcamera.vn/bo-bao-trom-thong-minh');
INSERT INTO `category` VALUES ('95', 'Chuông cửa màn hình', '92', '', '\0', '', 'http://fptcamera.vn/chuong-cua-man-hinh');
INSERT INTO `category` VALUES ('96', 'Chuông cửa camera', '95', '', '\0', '', 'http://fptcamera.vn/chuong-cua-camera');
INSERT INTO `category` VALUES ('97', 'Màn hình', '95', '', '\0', '', 'http://fptcamera.vn/man-hinh');
INSERT INTO `category` VALUES ('98', 'Máy chấm công ', '0', '', '', 'may-cham-cong-gia-re.png', 'http://fptcamera.vn/may-cham-cong');
INSERT INTO `category` VALUES ('99', 'Theo hãng SX', '98', '', '\0', '', 'http://fptcamera.vn/theo-hang-sx');
INSERT INTO `category` VALUES ('100', 'RONALD JACK', '99', '', '\0', '', 'http://fptcamera.vn/ronald-jack');
INSERT INTO `category` VALUES ('101', 'WISE EYE', '99', '', '\0', '', 'http://fptcamera.vn/wise-eye');
INSERT INTO `category` VALUES ('102', 'Theo loại ứng dụng', '98', '', '\0', '', 'http://fptcamera.vn/theo-loai-ung-dung');
INSERT INTO `category` VALUES ('103', 'Bằng vân tay', '102', '', '\0', '', 'http://fptcamera.vn/bang-van-tay');
INSERT INTO `category` VALUES ('104', 'Vân tay & Thẻ từ cảm ứng', '102', '', '\0', '', 'http://fptcamera.vn/van-tay-the-tu-cam-ung');
INSERT INTO `category` VALUES ('105', 'Số lượng quản lý', '98', '', '\0', '', 'http://fptcamera.vn/so-luong-quan-ly');
INSERT INTO `category` VALUES ('106', '500 Vân tay', '105', '', '\0', '', 'http://fptcamera.vn/500-van-tay');
INSERT INTO `category` VALUES ('107', '3000 Vân tay', '105', '', '\0', '', 'http://fptcamera.vn/3000-van-tay');
INSERT INTO `category` VALUES ('108', 'Tổng đài - Bộ đàm ', '0', '', '', '78-32.png', 'http://fptcamera.vn/tong-dai-bo-dam');
INSERT INTO `category` VALUES ('109', 'Bộ đàm cầm tay', '108', '', '\0', '', 'http://fptcamera.vn/bo-dam-cam-tay');
INSERT INTO `category` VALUES ('110', 'Bộ đàm IRADIO', '109', '', '\0', '', 'http://fptcamera.vn/bo-dam-iradio');
INSERT INTO `category` VALUES ('111', 'Bộ đàm KENWOOD', '109', '', '\0', '', 'http://fptcamera.vn/bo-dam-kenwood');
INSERT INTO `category` VALUES ('112', 'Thiết bị văn phòng ', '0', '', '', 'thiet-bi-van-phong.png', 'http://fptcamera.vn/thiet-bi-van-phong');
INSERT INTO `category` VALUES ('113', 'Máy chiếu', '112', '', '\0', '', 'http://fptcamera.vn/may-chieu');
INSERT INTO `category` VALUES ('114', 'Máy chiếu SONY', '113', '', '\0', '', 'http://fptcamera.vn/may-chieu-sony');
INSERT INTO `category` VALUES ('115', 'Phụ kiện máy chiếu', '112', '', '\0', '', 'http://fptcamera.vn/phu-kien-may-chieu');
INSERT INTO `category` VALUES ('116', 'Màn chiếu treo tường', '115', '', '\0', '', 'http://fptcamera.vn/man-chieu-treo-tuong');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('4', '<div class=\"f-address\">\r\n			                				<p><span style=\"color:#ff6600;\"><strong>LẮP ĐẶT CAMERA&nbsp;DỊCH VỤ&nbsp;FPT&nbsp;&nbsp;VIỆT NAM TẠI HÀ NỘI</strong></span><span style=\"color:#FF8C00;\"><strong>&nbsp;</strong></span><br>\r\nĐịa chỉ : <span style=\"color:#FFD700;\">Số 12 Ngõ 18/46 Định Công Thượng, Q.Hoàng Mai, TP. Hà Nội</span><br>\r\nĐiện thoại : <span style=\"color:#FFD700;\">024&nbsp;6328 2964 &nbsp;- 0919 654 688</span><br>\r\nWebsite : <span style=\"color:#FFD700;\">http://fptcamera.vn</span></p>\r\n\r\n<p><strong><span style=\"color:#ff6600;\">LẮP ĐẶT CAMERA CHI NHÁNH QUẢNG NINH</span></strong><br>\r\nĐịa chỉ : <span style=\"color:#FFD700;\">Số 42 Trần Hưng Đạo, TP. Hạ Long, Quảng Ninh</span><br>\r\nĐiện thoại :&nbsp;<span style=\"color:#FFD700;\">&nbsp; 0971 767 258</span></p>\r\n\r\n<p><strong><span style=\"color: rgb(255, 102, 0);\">LẮP ĐẶT CAMERA CHI NHÁNH TP.HCM</span></strong><br>\r\nĐịa chỉ :&nbsp;<span style=\"color: rgb(255, 215, 0);\">Số 192/81 Nguyễn Oanh, Quận Gò Vấp, TP.HCM</span><br>\r\nĐiện thoại :&nbsp;<span style=\"color: rgb(255, 215, 0);\">&nbsp;&nbsp;</span><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8px;\">&nbsp;</span><span style=\"color: rgb(255, 215, 0);\">08 7307 4567 - 0931 588 886</span></p>\r\n\r\n<p><span style=\"color:#FF8C00;\">Giới thiệu dịch vụ </span><a href=\"https://sites.google.com/site/camerafptvietnam/\"><span style=\"color:#FF8C00;\">lắp đặt camera</span></a><span style=\"color:#FF8C00;\"> của FPT Việt Nam</span></p>\r\n\r\n<p><em>Trước nhu cầu của thị trường và mở rộng ngành dịch vụ Công ty FPT Việt Nam được sáng lập hoạt động kết hợp với Tập đoàn FPT triển khai lắp đặt Internet Cáp quang – Camera giám sát tại&nbsp;khắp các tỉnh thành cả nước. \"Hiện chúng tôi đang phát triển kết hợp với một số <strong>đơn vị lắp đặt camera uy tín</strong> tạo nên một thị trường dịch vụ công nghệ uy tín trên toàn quốc\".</em></p>\r\n\r\n<p>&nbsp;</p>\r\n			                		</div>');
INSERT INTO `contact` VALUES ('5', '<div class=\"f-address\">\r\n			                				<p><strong><span style=\"color:#FF8C00;\">Trụ sở&nbsp;FPT VN CO., LTD</span></strong><br style=\"font-size: 14px; line-height: 22.3999996185303px;\">\r\n<span style=\"font-size: 14px; line-height: 22.3999996185303px;\">Địa chỉ : <span style=\"color:#FFD700;\">KCN THUẬN THÀNH, TP. Bắc Ninh</span></span><br>\r\nĐiện thoại: <span style=\"color:#FFD700;\">0222&nbsp;3505 475</span></p>\r\n\r\n<p><strong><span style=\"color: rgb(255, 102, 0);\">LẮP ĐẶT CAMERA CHI NHÁNH LẠNG SƠN</span></strong><br>\r\nĐịa chỉ : <span style=\"color: rgb(255, 215, 0);\">Thất Khê, Tràng Định, Lạng Sơn</span><br>\r\nĐiện thoại :&nbsp;<span style=\"color: rgb(255, 215, 0);\">&nbsp; 0949 696 692</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#FF8C00;\">Hiện chúng tôi có các điểm dịch vụ như: </span></p>\r\n\r\n<p><a href=\"http://fptcamera.vn/tin-tuc/lap-dat-camera-khu-cong-nghiep-vsip-bac-ninh\"><span style=\"color:#cccccc;\">Lắp đặt camera tại Bắc Ninh</span></a><span style=\"color:#cccccc;\">, </span><a href=\"http://fptcamera.vn/tin-tuc/lap-camera-truong-tieu-hoc-ngo-sy-lien-bac-giang\"><span style=\"color:#cccccc;\">Lắp đặt camera tại Bắc Giang</span></a><span style=\"color:#cccccc;\">, </span><a href=\"http://fptcamera.vn/tin-tuc/lap-dat-camera-quan-dong-da-ha-noi\"><span style=\"color:#cccccc;\">Lắp đặt camera tại Hà Nội</span></a><span style=\"color:#cccccc;\">, lắp đặt camera tại Vĩnh Phúc, </span><a href=\"http://fptcamera.vn/tin-tuc/lap-camera-giam-sat-tai-hung-yen\"><span style=\"color:#cccccc;\">lắp đặt camera tại hưng yên</span></a><span style=\"color:#cccccc;\">, Lắp đặt camera tại Hải Dương, Lắp đặt camera tại Lạng Sơn, Lắp đặt camera tại Thanh Hóa, Lắp đặt camera tại &nbsp;Hải Phòng, Lắp đặt camera tại Đà Nẵng, Lắp đặt camera TP HCM…<br>\r\nQuý khách cần lắp đặt camera, Internet vui lòng liên hệ để được tư vấn lắp đặt.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: right;\"><img alt=\"camera fpt đang ký bộ công thương\" src=\"/resources/uploads/images/camera-fpt-thong-bao-bo-cong-thuong.png\"></p>\r\n			                		</div>');

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
  KEY `id_sales_off` (`id_sales_off`),
  KEY `order_ibfk_1` (`id_user`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
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
-- Table structure for password_reset
-- ----------------------------
DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE `password_reset` (
  `id_user` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `password_reset_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of password_reset
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
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`id_category`),
  KEY `idcap3` (`id_category`),
  KEY `id` (`id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1068 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '3', 'Lắp Đặt Trọn Bộ 1 Camera Giá Rẻ', '2199000', '4', '10', '', 'lap-dat-tron-bo-1-camera-gia-re.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-1-camera-gia-re');
INSERT INTO `product` VALUES ('2', '3', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('3', '4', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('4', '4', 'Lắp Đặt Trọn Bộ 2 Camera Giá Rẻ', '3199000', '4', '10', '', 'lap-dat-tron-bo-2-camera-gia-re1.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-2-camera-gia-re');
INSERT INTO `product` VALUES ('5', '5', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('6', '5', 'Lắp Đặt Trọn Bộ 3 Camera Giá Rẻ', '4199000', '4', '10', '', 'lap-dat-tron-bo-3-camera-gia-re1.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-3-camera-gia-re');
INSERT INTO `product` VALUES ('7', '6', 'Lắp Đặt Trọn Bộ 4 Camera Giá Rẻ', '4899000', '4', '10', '', 'lap-dat-tron-bo-4-camera-gia-re.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-4-camera-gia-re');
INSERT INTO `product` VALUES ('8', '6', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('9', '8', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('10', '8', 'Camera Smart IP Wifi VANTECH VT-6200HV', '1890000', '4', '10', '', 'camera-ip-wifi-khong-day-vantech-VT-6200HV.jpg', 'http://fptcamera.vn/camera-smart-ip-wifi-vantech-vt-6200hv');
INSERT INTO `product` VALUES ('11', '8', 'Lắp Đặt Trọn Bộ 1 Camera HD', '3199000', '4', '10', '', 'lap-dat-tron-bo-1-camera-AHD.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-1-camera-hd');
INSERT INTO `product` VALUES ('12', '9', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('13', '9', 'Lắp đặt Trọn Bộ 2 Camera HD', '4299000', '4', '10', '', 'lap-dat-tron-bo-2-camera-AHD.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-2-camera-hd');
INSERT INTO `product` VALUES ('14', '10', 'Lắp Đặt Trọn Bộ 3 Camera HD', '3799000', '4', '10', '', 'lap-dat-tron-bo-3-camera-AHD.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-3-camera-hd');
INSERT INTO `product` VALUES ('15', '10', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('16', '11', 'Lắp đặt camera giá rẻ', '2199000', '4', '10', '', 'lap-dat-camera-gia-re-ha-noi.jpg', 'http://fptcamera.vn/lap-dat-camera-gia-re');
INSERT INTO `product` VALUES ('17', '11', 'Lắp Đặt Trọn Bộ 4 Camera HD', '6499000', '4', '10', '', 'lap-dat-tron-bo-4-camera-AHD.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-4-camera-hd');
INSERT INTO `product` VALUES ('18', '13', 'Lắp 2 Camera HIKVISION', '4299000', '4', '10', '', 'lap-2-camera-hikvision.jpg', 'http://fptcamera.vn/lap-2-camera-hikvision');
INSERT INTO `product` VALUES ('19', '14', 'Lắp đặt 1 camera HIKVISION', '2999000', '4', '10', '', 'tron-bo-1-camera-hd-tvi-hikvision.jpg', 'http://fptcamera.vn/lap-dat-1-camera-hikvision');
INSERT INTO `product` VALUES ('20', '15', 'Trọn bộ Camera KCE nhập khẩu HÀN QUỐC', '8500000', '4', '10', '', 'tron-bo-camera-kec-han-quoc.jpg', 'http://fptcamera.vn/tron-bo-camera-kce-nhap-khau-han-quoc');
INSERT INTO `product` VALUES ('21', '18', 'Lắp đặt camera wifi Dahua DH-IPC-C15P', '1350000', '4', '10', '', 'camera-ip-wifi-dahua-ipc-c15.png', 'http://fptcamera.vn/lap-dat-camera-wifi-dahua-dh-ipc-c15p');
INSERT INTO `product` VALUES ('22', '18', 'Camera Quay Quét PTZ DAHUA SD49225I-HC', '7750000', '4', '10', '', 'camera-quay-quet-SD49225I-HC.jpg', 'http://fptcamera.vn/camera-quay-quet-ptz-dahua-sd49225i-hc');
INSERT INTO `product` VALUES ('23', '18', 'Camera Dahua Full HD HAC-HFW1200SP', '950000', '4', '10', '', 'DH-HAC-HFW2220SN-0360B-01.jpg', 'http://fptcamera.vn/camera-dahua-full-hd-hac-hfw1200sp');
INSERT INTO `product` VALUES ('24', '18', 'Camera FULL HD HAC-HFW-1200RP', '1150000', '4', '10', '', 'HAC-HFW-1200RP.jpg', 'http://fptcamera.vn/camera-full-hd-hac-hfw-1200rp');
INSERT INTO `product` VALUES ('25', '18', 'lắp camera Dahua nhìn đêm siêu nét DH-HAC-HFW3231E-Z', '4200000', '4', '10', '', 'Lắp-đặt-camera-DAHUA-ngoài-trời-DH-HAC-HFW3231E-Z.jpg', 'http://fptcamera.vn/lap-camera-dahua-nhin-dem-sieu-net-dh-hac-hfw3231e-z');
INSERT INTO `product` VALUES ('26', '18', 'Lắp camera Dahua DH-HAC-HFW2221EP', '1400000', '4', '10', '', 'Lắp-đặt-camera-DAHUA-ngoài-trời-DH-HAC-HFW2221EP.jpg', 'http://fptcamera.vn/lap-camera-dahua-dh-hac-hfw2221ep');
INSERT INTO `product` VALUES ('27', '18', 'Lắp camera Dahua Ngoài trời DH-IPC-HFW4421DP', '3700000', '4', '10', '', 'camera-quan-sat-DH-IPC-HFW4421DP.jpg', 'http://fptcamera.vn/lap-camera-dahua-ngoai-troi-dh-ipc-hfw4421dp');
INSERT INTO `product` VALUES ('28', '18', 'Lắp đặt camera DAHUA ngoài trời DH-IPC-HFW4220EP', '3200000', '4', '10', '', 'Lắp-đặt-camera-DAHUA-ngoài-trời-DH-IPC-HFW4220EP.jpg', 'http://fptcamera.vn/lap-dat-camera-dahua-ngoai-troi-dh-ipc-hfw4220ep');
INSERT INTO `product` VALUES ('29', '18', 'Lắp camera Dahua siêu nét DS2300FIP 3.0 Megapixel', '1600000', '4', '10', '', 'camera-DS2300FIP.jpg', 'http://fptcamera.vn/lap-camera-dahua-sieu-net-ds2300fip-3-0-megapixel');
INSERT INTO `product` VALUES ('30', '18', 'Lắp đặt camera ip Dahua Siêu Nét DS2300DIP', '1600000', '4', '10', '', 'Lắp_đặt_camera_ip_Dahua_Siêu_Nét_DS2300DIP.jpg', 'http://fptcamera.vn/lap-dat-camera-ip-dahua-sieu-net-ds2300dip');
INSERT INTO `product` VALUES ('31', '18', 'Lắp đặt camera Dahua FULL HD DS2230FIP', '1300000', '4', '10', '', 'camera-DS2230FIP.jpg', 'http://fptcamera.vn/lap-dat-camera-dahua-full-hd-ds2230fip');
INSERT INTO `product` VALUES ('32', '18', 'Lắp đặt camera ip FULL HD Dahua DS2230DIP', '1300000', '4', '10', '', 'lap-dat-camera-dahua-ip-DS2230DIP1.jpg', 'http://fptcamera.vn/lap-dat-camera-ip-full-hd-dahua-ds2230dip');
INSERT INTO `product` VALUES ('33', '18', 'Lắp đặt camera Dahua IP DS2130DIP', '900000', '4', '10', '', 'lap-dat-camera-dahua-ip-DS2130DIP.jpg', 'http://fptcamera.vn/lap-dat-camera-dahua-ip-ds2130dip');
INSERT INTO `product` VALUES ('34', '18', 'Lắp đặt camera ip dahua DS2130FIP', '900000', '4', '10', '', 'lap-dat-camera-ip-dahua-DS2130FIP.jpg', 'http://fptcamera.vn/lap-dat-camera-ip-dahua-ds2130fip');
INSERT INTO `product` VALUES ('35', '18', 'Lắp camera wifi ngoài trời DH-IPC-HFW1120SP-W', '1900000', '4', '10', '', 'lap-dat-camera-ip-wifi-ngoai-troi-DH-IPC-HFW1120SP-W.jpg', 'http://fptcamera.vn/lap-camera-wifi-ngoai-troi-dh-ipc-hfw1120sp-w');
INSERT INTO `product` VALUES ('36', '18', 'Camera IP Quay Quét HDB4100F-PT', '3320000', '4', '10', '', 'camera-ptz-dahua-HDB4100F-PT.jpg', 'http://fptcamera.vn/camera-ip-quay-quet-hdb4100f-pt');
INSERT INTO `product` VALUES ('37', '18', 'Camera IP PTZ DAHUA SD49225T-HN', '9300000', '4', '10', '', 'camera-quay-quet-IP-SD49225T-HN.jpg', 'http://fptcamera.vn/camera-ip-ptz-dahua-sd49225t-hn');
INSERT INTO `product` VALUES ('38', '18', 'Camera quay quét SD42112I-HC', '5000000', '4', '10', '', 'camera-dahua-quay-quet-SD42212T-HN.jpg', 'http://fptcamera.vn/camera-quay-quet-sd42112i-hc');
INSERT INTO `product` VALUES ('39', '18', 'Camera PTZ DAHUA SD6C131I-HC', '8800000', '4', '10', '', 'camera-ptz-dahua-SD6C131I-HC.jpg', 'http://fptcamera.vn/camera-ptz-dahua-sd6c131i-hc');
INSERT INTO `product` VALUES ('40', '18', 'Camera IP Wifi DAHUA IPC-KW12WP', '2400000', '4', '10', '', 'camera-ip-wifi-dahua-IPC-KW12WP.jpg', 'http://fptcamera.vn/camera-ip-wifi-dahua-ipc-kw12wp');
INSERT INTO `product` VALUES ('41', '18', 'Camera Quay Quét Zoom DAHUA SD5923E-H', '10500000', '4', '10', '', 'camera-speed-dome-dahua-SD5923E-H.jpg', 'http://fptcamera.vn/camera-quay-quet-zoom-dahua-sd5923e-h');
INSERT INTO `product` VALUES ('42', '18', 'Camera Giám Sát DAHUA CA-FW181DP', '1250000', '4', '10', '', 'camera-analog-dahua-CA-FW181DP.jpg', 'http://fptcamera.vn/camera-giam-sat-dahua-ca-fw181dp');
INSERT INTO `product` VALUES ('43', '18', 'Camera Giám Sát DAHUA CA-FW181GP', '1100000', '4', '10', '', 'camera-analog-dahua-CA-FW181GP.jpg', 'http://fptcamera.vn/camera-giam-sat-dahua-ca-fw181gp');
INSERT INTO `product` VALUES ('44', '18', 'Camera Quan Sát DAHUA CA-DW181EP', '950000', '4', '10', '', 'camera-analog-dahua-CA-DW181EP.JPG', 'http://fptcamera.vn/camera-quan-sat-dahua-ca-dw181ep');
INSERT INTO `product` VALUES ('45', '18', 'Camera Quan Sát DAHUA CA-DW181HP-IR', '900000', '4', '10', '', 'camera-analog-dahua-CA-DW181HP-IR1.jpg', 'http://fptcamera.vn/camera-quan-sat-dahua-ca-dw181hp-ir');
INSERT INTO `product` VALUES ('46', '18', 'Camera IP PTZ Quay Quét Dahua SD6C120S-HN', '18000000', '4', '10', '', 'camera-ip-PTZ-quay-quet-dahua-SD6C120S-HN.jpg', 'http://fptcamera.vn/camera-ip-ptz-quay-quet-dahua-sd6c120s-hn');
INSERT INTO `product` VALUES ('47', '18', 'Camera IP Siêu Nét DAHUA IPC-HDB3300', '9990000', '4', '10', '', 'camera-ip-dahua-IPC-HDB3300.jpg', 'http://fptcamera.vn/camera-ip-sieu-net-dahua-ipc-hdb3300');
INSERT INTO `product` VALUES ('48', '18', 'Camera IP Full HD Dahua IPC-HFW3200', '9990000', '4', '10', '', 'camera-ip-dahua-IPC-HFW3200.jpg', 'http://fptcamera.vn/camera-ip-full-hd-dahua-ipc-hfw3200');
INSERT INTO `product` VALUES ('49', '18', 'Camera IP Siêu Nét Dahua IPC-HDB3200C', '4500000', '4', '10', '', 'camera-ip-dahua-IPC-HDB3200C-.jpg', 'http://fptcamera.vn/camera-ip-sieu-net-dahua-ipc-hdb3200c');
INSERT INTO `product` VALUES ('50', '18', 'Camera IP Dahua IPC-HFW1200SP 2.0Megapixel', '5000000', '4', '10', '', 'camera-ip-dahua-IPC-HFW1200SP-2.0Megapixel_.jpg', 'http://fptcamera.vn/camera-ip-dahua-ipc-hfw1200sp-2-0megapixel');
INSERT INTO `product` VALUES ('51', '18', 'Camera IP Full HD Dahua IPC-HDW1200SP', '5000000', '4', '10', '', 'camera-ip-full-hd-dahua-IPC-HDW1200SP.jpg', 'http://fptcamera.vn/camera-ip-full-hd-dahua-ipc-hdw1200sp');
INSERT INTO `product` VALUES ('52', '18', 'Camera IP ngoài trời DAHUA IPC-HFW1000S', '2720000', '4', '10', '', 'camera-ip-dahua-IPC-HFW1000S.jpg', 'http://fptcamera.vn/camera-ip-ngoai-troi-dahua-ipc-hfw1000s');
INSERT INTO `product` VALUES ('53', '19', 'Camera POC HIkvision DS-2CE16D8T-IT3E', '1700000', '4', '10', '', 'camera-poc-DS-2CE16D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-it3e');
INSERT INTO `product` VALUES ('54', '19', 'Camera Smart IP Wifi VANTECH VT-6200HV', '1890000', '4', '10', '', 'camera-ip-wifi-khong-day-vantech-VT-6200HV.jpg', 'http://fptcamera.vn/camera-smart-ip-wifi-vantech-vt-6200hv');
INSERT INTO `product` VALUES ('55', '19', 'Camera AHD Ngoài Trời VANTECH VP-182AHDM', '0', '4', '10', '', 'camera-than-ahd-vantech-VP-182AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-ngoai-troi-vantech-vp-182ahdm');
INSERT INTO `product` VALUES ('56', '19', 'Camera AHD Thân VANTECH VP-262AHDM', '1750000', '4', '10', '', 'camera-ahd-vantech-VP-262AHDM.jpg', 'http://fptcamera.vn/camera-ahd-than-vantech-vp-262ahdm');
INSERT INTO `product` VALUES ('57', '19', 'Camera AHD 1.3Megapixel VANTECH VP-272AHDM', '2200000', '4', '10', '', 'camera-ahd-vantech-VP-272AHDM.jpg', 'http://fptcamera.vn/camera-ahd-1-3megapixel-vantech-vp-272ahdm');
INSERT INTO `product` VALUES ('58', '19', 'Camera AHD Thân VANTECH VP-142AHDM', '1600000', '4', '10', '', 'camera-than-ahd-vantech-VP-142AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-than-vantech-vp-142ahdm');
INSERT INTO `product` VALUES ('59', '19', 'Camera AHD VANTECH VP-223AHDM 1.3 Megapixel', '1400000', '4', '10', '', 'camera-dome-ahd-vantech-VP-223AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-vantech-vp-223ahdm-1-3-megapixel');
INSERT INTO `product` VALUES ('60', '19', 'Camera AHD VANTECH VP-262AHDM', '2000000', '4', '10', '', 'camera-ahd-vantech-VP-262AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-vantech-vp-262ahdm');
INSERT INTO `product` VALUES ('61', '19', 'Camera AHD VANTECH VP-163AHDM 1.3 Megapixel', '1450000', '4', '10', '', 'camera-than-ahd-vantech-VP-163AHDM-1.3_.jpg', 'http://fptcamera.vn/camera-ahd-vantech-vp-163ahdm-1-3-megapixel');
INSERT INTO `product` VALUES ('62', '19', 'Camera AHD VANTECH VP-153AHDM 1.3Megapixel', '1250000', '4', '10', '', 'camera-than-ong-ahd-vantech-VP-153AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-vantech-vp-153ahdm-1-3megapixel');
INSERT INTO `product` VALUES ('63', '19', 'Camera AHD 1.3 VANTECH VP-123AHDM', '1300000', '4', '10', '', 'camera-than-ahd-vantech-VP-123AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-1-3-vantech-vp-123ahdm');
INSERT INTO `product` VALUES ('64', '19', 'Camera AHD 1.3 VANTECH VP-113AHDM', '1090000', '4', '10', '', 'camera-dome-ahd-vantech-VP-113AHDM.jpg', 'http://fptcamera.vn/camera-ahd-1-3-vantech-vp-113ahdm');
INSERT INTO `product` VALUES ('65', '19', 'Camera AHD VANTECH VP-252AHDM', '1400000', '4', '10', '', 'camera-than-ahd-vantech-VP-252AHDM.jpg', 'http://fptcamera.vn/camera-ahd-vantech-vp-252ahdm');
INSERT INTO `product` VALUES ('66', '19', 'Camera Ngoài Trời AHD VANTECH VP-232AHDM', '3000000', '4', '10', '', 'camera-ngoai-tro-ahd-vantech-VP-233AHDM.jpg', 'http://fptcamera.vn/camera-ngoai-troi-ahd-vantech-vp-232ahdm');
INSERT INTO `product` VALUES ('67', '19', 'Camera Dome AHD VANTECH VP-222AHDM', '1100000', '4', '10', '', 'camera-dome-ahd-vantech-VP-222AHDM1.jpg', 'http://fptcamera.vn/camera-dome-ahd-vantech-vp-222ahdm');
INSERT INTO `product` VALUES ('68', '19', 'Camera AHD Hồng Ngoại VANTECH VP-273AHDM', '2200000', '4', '10', '', 'camera-ahd-vantech-VP-273AHDM.jpg', 'http://fptcamera.vn/camera-ahd-hong-ngoai-vantech-vp-273ahdm');
INSERT INTO `product` VALUES ('69', '19', 'Camera Thân AHD VANTECH VP-201AHDM', '2700000', '4', '10', '', 'camera-than-ong-ahd-vantech-VP-201AHDM1.jpg', 'http://fptcamera.vn/camera-than-ahd-vantech-vp-201ahdm');
INSERT INTO `product` VALUES ('70', '19', 'Camera AHD VANTECH VP-152AHDM', '900000', '4', '10', '', 'camera-than-ong-ahd-vantech-VP-152AHDM1.jpg', 'http://fptcamera.vn/camera-ahd-vantech-vp-152ahdm');
INSERT INTO `product` VALUES ('71', '19', 'Camera Ngoài Trời VANTECH VP-132AHDM', '1050000', '4', '10', '', 'camera-than-ahd-vantech-VP-132AHDM1.jpg', 'http://fptcamera.vn/camera-ngoai-troi-vantech-vp-132ahdm');
INSERT INTO `product` VALUES ('72', '19', 'Camera Hồng Ngoại VANTECH VP-122AHDM', '1000000', '4', '10', '', 'camera-than-ahd-vantech-VP-122AHDM1.jpg', 'http://fptcamera.vn/camera-hong-ngoai-vantech-vp-122ahdm');
INSERT INTO `product` VALUES ('73', '19', 'Camera Dome AHD VANTECH VP-112AHDM', '850000', '4', '10', '', 'camera-dome-ahd-vantech-VP-112AHDM1.jpg', 'http://fptcamera.vn/camera-dome-ahd-vantech-vp-112ahdm');
INSERT INTO `product` VALUES ('74', '19', 'Camera Dome VANTECH VT-2101', '790000', '4', '10', '', 'camera-dome-VANTECH-VT-2101.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-2101');
INSERT INTO `product` VALUES ('75', '19', 'Camera Dome VANTECH VT-2002', '690000', '4', '10', '', 'camera-VANTECH-VT-2002.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-2002');
INSERT INTO `product` VALUES ('76', '19', 'Camera Trong Phòng VANTECH VT-3114S', '580000', '4', '10', '', 'camera-quan-sat-vantech-vt-3114s.jpg', 'http://fptcamera.vn/camera-trong-phong-vantech-vt-3114s');
INSERT INTO `product` VALUES ('77', '19', 'Camera Dome VANTECH VT-3114H', '720000', '4', '10', '', 'camera-quan-sat-vantech-vt-3114h.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-3114h');
INSERT INTO `product` VALUES ('78', '19', 'Camera Ngụy Trang VANTECH VT-1005H', '900000', '4', '10', '', 'camera-nguy-trang-vantech-VT-1005H.jpg', 'http://fptcamera.vn/camera-nguy-trang-vantech-vt-1005h');
INSERT INTO `product` VALUES ('79', '19', 'Camera Trong Nhà VANTECH VT-3113K', '700000', '4', '10', '', 'camera-quan-sat-vantech-vt-3113k.jpg', 'http://fptcamera.vn/camera-trong-nha-vantech-vt-3113k');
INSERT INTO `product` VALUES ('80', '19', 'Camera Ngụy Trang Mini VANTECH VT-2100', '850000', '4', '10', '', 'camera-nguy-trang-vantech-vt-2100.jpg', 'http://fptcamera.vn/camera-nguy-trang-mini-vantech-vt-2100');
INSERT INTO `product` VALUES ('81', '19', 'Camera Dome VANTECH VT-3115A', '600000', '4', '10', '', 'camera-vantech-VT-3115A.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-3115a');
INSERT INTO `product` VALUES ('82', '19', 'Camera Dome VANTECH VT-3118A', '650000', '4', '10', '', 'camera-dome-VANTECH-VT-3118a.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-3118a');
INSERT INTO `product` VALUES ('83', '19', 'Camera Hồng Ngoại VANTECH VT-2502', '750000', '4', '10', '', 'camera-vantech-vt-2502.jpg', 'http://fptcamera.vn/camera-hong-ngoai-vantech-vt-2502');
INSERT INTO `product` VALUES ('84', '19', 'Camera Trong Nhà VANTECH VT-2503', '0', '4', '10', '', 'camera-giam-sat-vantech-vt-2503.jpg', 'http://fptcamera.vn/camera-trong-nha-vantech-vt-2503');
INSERT INTO `product` VALUES ('85', '20', 'Camera IP Pan/Til Wifi HIKVISION DS-2CD2Q10', '2500000', '4', '10', '', 'camera-pan-tit-hikvision-DS-2CD2Q101.jpg', 'http://fptcamera.vn/camera-ip-pan-til-wifi-hikvision-ds-2cd2q10');
INSERT INTO `product` VALUES ('86', '20', 'Camera IP Wifi HIKVISION DS-2CD2420F-IW 2.0MB', '1744000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW1.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2420f-iw-2-0mb');
INSERT INTO `product` VALUES ('87', '20', 'Lắp đặt trọn bộ camera giá rẻ cho cửa hàng', '2990000', '4', '10', '', 'tron-bo-1-camera-hd-tvi-hikvision1.jpg', 'http://fptcamera.vn/lap-dat-tron-bo-camera-gia-re-cho-cua-hang');
INSERT INTO `product` VALUES ('88', '20', 'Camera Hikvision DS-2CC52D9T-AVPIT3ZE', '4400000', '4', '10', '', 'camera-hikvision-DS-2CC52D9T-AVPIT3ZE.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc52d9t-avpit3ze');
INSERT INTO `product` VALUES ('89', '20', 'Camera Hikvision DS-2CC12D9T-AIT3ZE siêu nét', '3900000', '4', '10', '', 'camera-hikvision-DS-2CC12D9T-AIT3ZE.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc12d9t-ait3ze-sieu-net');
INSERT INTO `product` VALUES ('90', '20', 'Camera Siêu nét Hikvision DS-2CC52D9T-IT3E', '2800000', '4', '10', '', 'camera-HIKVISION-DS-2CC52D9T-IT3E.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2cc52d9t-it3e');
INSERT INTO `product` VALUES ('91', '20', 'Camera Hikvision DS-2CC12D9T-IT3E đêm có màu', '2650000', '4', '10', '', 'camera-hikvision-DS-2CC12D9T-IT3E.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc12d9t-it3e-dem-co-mau');
INSERT INTO `product` VALUES ('92', '20', 'Camera Hikvision DS-2CE16D8T-IT3Z', '2350000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it3z');
INSERT INTO `product` VALUES ('93', '20', 'Camera Siêu Nét Hikvision DS-2CE56D8T-IT3Z', '2300000', '4', '10', '', 'camera-hikvision-DS-2CE56D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2ce56d8t-it3z');
INSERT INTO `product` VALUES ('94', '20', 'Camera POC Hikvision DS-2CE56D8T-IT3E', '1500000', '4', '10', '', 'camera-poc-DS-2CE56D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce56d8t-it3e');
INSERT INTO `product` VALUES ('95', '20', 'Camera POC HIkvision DS-2CE16D8T-IT3E', '1700000', '4', '10', '', 'camera-poc-DS-2CE16D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-it3e');
INSERT INTO `product` VALUES ('96', '20', 'Camera POC Hikvision DS-2CE16D8T-ITE', '1450000', '4', '10', '', 'camera-poc-hikvision-DS-2CE16D8T-ITE.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-ite');
INSERT INTO `product` VALUES ('97', '20', 'Camera Hikvision DS-2CE16D8T-IT 2MP', '1300000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it-2mp');
INSERT INTO `product` VALUES ('98', '20', 'Camera IP Bullet Hikvision DS-2CD2620F-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2620F-I.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2620f-i');
INSERT INTO `product` VALUES ('99', '20', 'Camera IP Bullet Hikvision DS-2CD2T22WD-I8', '3050000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T22WD-I8.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2t22wd-i8');
INSERT INTO `product` VALUES ('100', '20', 'Camera IP POE Hikvision DS-2CD2010F-I giá rẻ', '1600000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2010F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2010f-i-gia-re');
INSERT INTO `product` VALUES ('101', '20', 'Camera IP POE Hikvision DS-2CD2710F-I', '3100000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2710F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2710f-i');
INSERT INTO `product` VALUES ('102', '20', 'Camera POE IP Hikvision DS-2CD2522FWD-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2522FWD-I.jpg', 'http://fptcamera.vn/camera-poe-ip-hikvision-ds-2cd2522fwd-i');
INSERT INTO `product` VALUES ('103', '20', 'Camera IP POE Hikvision DS-2CD2322WD-I', '0', '4', '10', '', 'camera-ip-hikvision-DS-2CD2322WD-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2322wd-i');
INSERT INTO `product` VALUES ('104', '20', 'Camera POE Hikvision DS-2CD2110F-I 1.3MP', '1650000', '4', '10', '', 'camera-ip-wifi-hikvision-DS-2CD2110F-I.jpg', 'http://fptcamera.vn/camera-poe-hikvision-ds-2cd2110f-i-1-3mp');
INSERT INTO `product` VALUES ('105', '20', 'Camera IP Wifi Hikvision DS-2CD2442FWD-IW', '2500000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2442FWD-IW.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2442fwd-iw');
INSERT INTO `product` VALUES ('106', '20', 'Camera IP hikvision DS-2CD1201-I5 50 Mét', '1480000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I5.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i5-50-met');
INSERT INTO `product` VALUES ('107', '20', 'Camera IP Hikvision DS-2CD1002-I Thân 1MP', '1450000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1002-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1002-i-than-1mp');
INSERT INTO `product` VALUES ('108', '20', 'Camera IP Hikvision DS-2CD1201-I3 thân 1MP', '1130000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i3-than-1mp');
INSERT INTO `product` VALUES ('109', '20', 'Camera IP Hikvision DS-2CD1321-I Dome 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1321-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1321-i-dome-2mp');
INSERT INTO `product` VALUES ('110', '20', 'Camera IP Hikvision DS-2CD1221-I3 thân 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1221-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1221-i3-than-2mp');
INSERT INTO `product` VALUES ('111', '20', 'Camera IP HIKVISION DS-2CD2955FWD-I', '6300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2955FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2955fwd-i');
INSERT INTO `product` VALUES ('112', '20', 'Camera IP Hikvision DS-2CD2T25FHWD-I8', '3300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T25FHWD-I8.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2t25fhwd-i8');
INSERT INTO `product` VALUES ('113', '20', 'Camera IP Hikvision DS-2CD2385FWD-I Dome 8MP', '4200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2385FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2385fwd-i-dome-8mp');
INSERT INTO `product` VALUES ('114', '20', 'Camera IP Hikvision DS-2CD2335FWD-I Dome 3MP', '2880000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2335FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2335fwd-i-dome-3mp');
INSERT INTO `product` VALUES ('115', '20', 'Camera IP Hikvision DS-2CD2035FWD-I 3MP', '2900000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2035FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2035fwd-i-3mp');
INSERT INTO `product` VALUES ('116', '20', 'Camera Hikvision DS-2CE16F7T-IT5 xa 80 mét', '1838000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE16F7T-IT5.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16f7t-it5-xa-80-met');
INSERT INTO `product` VALUES ('117', '21', 'Camera PTZ Quay Quét BENCO BEN-300AHD2.0', '14070000', '4', '10', '', 'camera-BEN-300AHD2.0_.png', 'http://fptcamera.vn/camera-ptz-quay-quet-benco-ben-300ahd2-0');
INSERT INTO `product` VALUES ('118', '21', 'Lắp đặt camera ngoài trời BEN-CVI 3480BM', '1900000', '4', '10', '', 'Lắp-đặt-camera-BENCO-BEN-CVI_3480BM-nhìn-80-mét.jpg', 'http://fptcamera.vn/lap-dat-camera-ngoai-troi-ben-cvi-3480bm');
INSERT INTO `product` VALUES ('119', '21', 'Lắp đặt camera Benco Siêu nét BEN-CVI 3430BM', '1800000', '4', '10', '', 'camera-full-hd-benco-BEN-CVI_3430BM.jpg', 'http://fptcamera.vn/lap-dat-camera-benco-sieu-net-ben-cvi-3430bm');
INSERT INTO `product` VALUES ('120', '21', 'Lắp đặt camera BENCO BEN-CVI 3430DM siêu nét', '1800000', '4', '10', '', 'camera-benco-BEN-CVI_3430DM.jpg', 'http://fptcamera.vn/lap-dat-camera-benco-ben-cvi-3430dm-sieu-net');
INSERT INTO `product` VALUES ('121', '21', 'Lắp đặt camera BENCO BEN-CVI 1280BM nhìn 80 mét', '1100000', '4', '10', '', 'Lắp-đặt-camera-BENCO-BEN-CVI-1280BM-nhìn-80-mét.jpg', 'http://fptcamera.vn/lap-dat-camera-benco-ben-cvi-1280bm-nhin-80-met');
INSERT INTO `product` VALUES ('122', '21', 'Camera Benco FULL HD BEN-CVI 1230BM', '800000', '4', '10', '', 'camera-full-hd-benco-BEN-CVI-1230BM.jpg', 'http://fptcamera.vn/camera-benco-full-hd-ben-cvi-1230bm');
INSERT INTO `product` VALUES ('123', '21', 'Camera Benco BEN-CVI 1130DM', '680000', '4', '10', '', 'camera-benco-EN-CVI-1130DM.jpg', 'http://fptcamera.vn/camera-benco-ben-cvi-1130dm');
INSERT INTO `product` VALUES ('124', '21', 'Camera FULL HD Benco BEN-CVI 1230DM', '796000', '4', '10', '', 'camera-benco-BEN-CVI-1230DM.jpg', 'http://fptcamera.vn/camera-full-hd-benco-ben-cvi-1230dm');
INSERT INTO `product` VALUES ('125', '21', 'Camera Benco BEN-CVI 1120BP', '464000', '4', '10', '', 'camera-benco-1120BP.jpg', 'http://fptcamera.vn/camera-benco-ben-cvi-1120bp');
INSERT INTO `product` VALUES ('126', '21', 'Camera Full HD Benco BEN-CVI 1250DM', '1050000', '4', '10', '', 'camera-benco-1250DM.jpg', 'http://fptcamera.vn/camera-full-hd-benco-ben-cvi-1250dm');
INSERT INTO `product` VALUES ('127', '21', 'Camera Benco BEN-CVI 1120DP', '464000', '4', '10', '', 'camera-benco-1120DP.jpg', 'http://fptcamera.vn/camera-benco-ben-cvi-1120dp');
INSERT INTO `product` VALUES ('128', '21', 'Camera Quay Quét Zoom BENCO CVI-1212PT', '8600000', '4', '10', '', 'CVI-1212PT.png', 'http://fptcamera.vn/camera-quay-quet-zoom-benco-cvi-1212pt');
INSERT INTO `product` VALUES ('129', '21', 'Camera Benco BEN-3156AHD1.3', '1020000', '4', '10', '', 'camera-ben-3156ahd1.3_.jpg', 'http://fptcamera.vn/camera-benco-ben-3156ahd1-3');
INSERT INTO `product` VALUES ('130', '21', 'Camera BENCO BEN-D6-HD1.3V1', '1150000', '4', '10', '', 'camera-quan-sat-benco-BEN-D6-HD1.3V1_.jpg', 'http://fptcamera.vn/camera-benco-ben-d6-hd1-3v1');
INSERT INTO `product` VALUES ('131', '21', 'Camera BENCO Full HD BEN-1102AHD2.4', '1390000', '4', '10', '', 'camera-benco-full-hd-BEN-1102AHD2.4_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-ben-1102ahd2-4');
INSERT INTO `product` VALUES ('132', '21', 'Camera BENCO Full HD BEN-1102AHD1.3', '850000', '4', '10', '', 'camera-benco-BEN-1101AHD2.4_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-ben-1102ahd1-3');
INSERT INTO `product` VALUES ('133', '21', 'Camera AHD BENCO BEN-1101AHD1.0', '860000', '4', '10', '', 'camera-benco-BEN-1101AHD1.0_.jpg', 'http://fptcamera.vn/camera-ahd-benco-ben-1101ahd1-0');
INSERT INTO `product` VALUES ('134', '21', 'Camera IP Full HD Benco D2-IP2.0', '1699000', '4', '10', '', 'camera-IP-benco-D2-IP2.0M_.jpg', 'http://fptcamera.vn/camera-ip-full-hd-benco-d2-ip2-0');
INSERT INTO `product` VALUES ('135', '21', 'Camera IP BENCO F1-IP 1.0 Megapixel', '1550000', '4', '10', '', 'camera-ip-benco-F1-IP_1.0_.jpg', 'http://fptcamera.vn/camera-ip-benco-f1-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('136', '21', 'Camera IP BENCO T3-IP 1.0 Megapixel', '1390000', '4', '10', '', 'camera-ip-benco-t3ip-1.0_.jpg', 'http://fptcamera.vn/camera-ip-benco-t3-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('137', '21', 'Camera IP BENCO T2-IP 1.0 Megapixel', '1060000', '4', '10', '', 'camera-ip-benco-t2ip-1.0_.jpg', 'http://fptcamera.vn/camera-ip-benco-t2-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('138', '21', 'Camera IP BENCO T1-IP 1.0 Megapixel', '1190000', '4', '10', '', 'camera-ip-benco-t1ip.jpg', 'http://fptcamera.vn/camera-ip-benco-t1-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('139', '21', 'Camera IP BENCO D1-IP 1.0 Megapixel', '1150000', '4', '10', '', 'camera-ip-benco-D1-IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-benco-d1-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('140', '21', 'Camera IP BENCO D2-IP 1.0 Megapixel', '1050000', '4', '10', '', 'camera-ip-benco-d2ip-1.0-megapixel_.jpg', 'http://fptcamera.vn/camera-ip-benco-d2-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('141', '21', 'Camera BENCO Full HD F1-AHD2.0 Megapixel', '1590000', '4', '10', '', 'camera-full-hd-benco-F1-AHD2.0_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-f1-ahd2-0-megapixel');
INSERT INTO `product` VALUES ('142', '21', 'Camera Full HD BENCO T2-AHD2.0', '1200000', '4', '10', '', 'camera-full-hd-benco-T2-AHD2.0_.jpg', 'http://fptcamera.vn/camera-full-hd-benco-t2-ahd2-0');
INSERT INTO `product` VALUES ('143', '21', 'Camera Quan Sát BENCO F1-AHD1.0', '1350000', '4', '10', '', 'camera-ahd-benco-F1-AHD1.0_.jpg', 'http://fptcamera.vn/camera-quan-sat-benco-f1-ahd1-0');
INSERT INTO `product` VALUES ('144', '21', 'Camera Quan Sát BENCO T3-AHD1.0', '1290000', '4', '10', '', 'camera-ahd-benco-T3-AHD1.0_.jpg', 'http://fptcamera.vn/camera-quan-sat-benco-t3-ahd1-0');
INSERT INTO `product` VALUES ('145', '21', 'Camera AHD BENCO Ngoài Trời T2-AHD1.0', '1050000', '4', '10', '', 'camera-ahd-benco-T2-AHD1.0-_.jpg', 'http://fptcamera.vn/camera-ahd-benco-ngoai-troi-t2-ahd1-0');
INSERT INTO `product` VALUES ('146', '21', 'Camera AHD BENCO T1-AHD1.0 Megapixel', '930000', '4', '10', '', 'camera-ahd-benco-T1-AHD1-0-megapixel.jpg', 'http://fptcamera.vn/camera-ahd-benco-t1-ahd1-0-megapixel');
INSERT INTO `product` VALUES ('147', '21', 'Camera IP Wifi BENCO BEN-910IP', '1990000', '4', '10', '', 'camera-ip-wifi-benco-ben-910ip.jpg', 'http://fptcamera.vn/camera-ip-wifi-benco-ben-910ip');
INSERT INTO `product` VALUES ('148', '21', 'Camera PTZ IP Quay Quét BENCO BEN-300AHD', '10500000', '4', '10', '', 'camera-ptz-BEN-300AHD.png', 'http://fptcamera.vn/camera-ptz-ip-quay-quet-benco-ben-300ahd');
INSERT INTO `product` VALUES ('149', '22', 'Camera IP Kbvision KHA-5040DM thân 4.0', '0', '4', '10', '', 'camera-ip-kbvision-KHA-5040DM.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-5040dm-than-4-0');
INSERT INTO `product` VALUES ('150', '22', 'Camera IP KHA-3020AD Thân 2.0M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-3020AD.jpg', 'http://fptcamera.vn/camera-ip-kha-3020ad-than-2-0m');
INSERT INTO `product` VALUES ('151', '22', 'Camera IP KHA-5013D Thân 1.3M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-5013D.jpg', 'http://fptcamera.vn/camera-ip-kha-5013d-than-1-3m');
INSERT INTO `product` VALUES ('152', '22', 'Camera IP Kbvision KHA-2013D Dome 1.3M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-2013D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-2013d-dome-1-3m');
INSERT INTO `product` VALUES ('153', '22', 'Camera IP Kbvision KHA-1013D Thân 1.3M', '0', '4', '10', '', 'camera_ip_kbvision_KHA-1013D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-1013d-than-1-3m');
INSERT INTO `product` VALUES ('154', '22', 'Camera IP Kbvision KHA-1010D giá rẻ', '0', '4', '10', '', 'camera-ip-kbvision-KHA-1010D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-1010d-gia-re');
INSERT INTO `product` VALUES ('155', '22', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('156', '22', 'Camera Kbvision KH-N8002 giá rẻ', '0', '4', '10', '', 'camera-kbvision-KHA-4S6020.jpg', 'http://fptcamera.vn/camera-kbvision-kh-n8002-gia-re');
INSERT INTO `product` VALUES ('157', '22', 'Camera Kbvision KHA-4S5020 hồng ngoại', '0', '4', '10', '', 'camera-kbvision-KHA-4S50201.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s5020-hong-ngoai');
INSERT INTO `product` VALUES ('158', '22', 'Camera Kbvision KHA-4S4020 siêu nét', '0', '4', '10', '', 'camera-kbvision-KHA-4S4020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s4020-sieu-net');
INSERT INTO `product` VALUES ('159', '22', 'Camera Kbvision KHA-4S2020 Dome 2.0M', '0', '4', '10', '', 'camera-kbvision-KHA-4S2020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s2020-dome-2-0m');
INSERT INTO `product` VALUES ('160', '22', 'Camera Kbvision KHA-4S1020 thân 1080P', '0', '4', '10', '', 'camera-kbvision-KHA-4S1020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s1020-than-1080p');
INSERT INTO `product` VALUES ('161', '22', 'Camera SMART IP Kbvision KH-SN3005M', '12000000', '4', '10', '', 'camera-ip-kbvision-smart-KH-SN3005M.jpg', 'http://fptcamera.vn/camera-smart-ip-kbvision-kh-sn3005m');
INSERT INTO `product` VALUES ('162', '22', 'Camera IP Kbvisiaon KH-N8005 Ngoài trời Siêu nét', '5200000', '4', '10', '', 'camera-kbvision-KH-N8005.jpg', 'http://fptcamera.vn/camera-ip-kbvisiaon-kh-n8005-ngoai-troi-sieu-net');
INSERT INTO `product` VALUES ('163', '22', 'Camera IP Kbvision KH-N8002 siêu nét 8.0 M', '5300000', '4', '10', '', 'camera-ip-kbvision-KH-N8002.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n8002-sieu-net-8-0-m');
INSERT INTO `product` VALUES ('164', '22', 'Camera IP Kbvision KH-N4005M Ngoài trời 4.0M', '6600000', '4', '10', '', 'camera-kbvision-KH-N4005M.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n4005m-ngoai-troi-4-0m');
INSERT INTO `product` VALUES ('165', '22', 'Camera IP Kbvision KH-N4003 ngoài trời 4.0AM', '4000000', '4', '10', '', 'camera-ip-kbvision-KH-N4003.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n4003-ngoai-troi-4-0am');
INSERT INTO `product` VALUES ('166', '22', 'Camera IP Kbvision KH-N3004A 3M', '3200000', '4', '10', '', 'camera-ip-kbvision-KH-N3004A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n3004a-3m');
INSERT INTO `product` VALUES ('167', '22', 'Camera IP wifi Kbvision KH-N3002W', '2600000', '4', '10', '', 'camera-ip-kbvision-KH-N3002W.jpg', 'http://fptcamera.vn/camera-ip-wifi-kbvision-kh-n3002w');
INSERT INTO `product` VALUES ('168', '22', 'Camera IP Kbvision KH-N2003A Thân 2.0M', '3100000', '4', '10', '', 'camera-kbvision-KH-KH-N2003A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n2003a-than-2-0m');
INSERT INTO `product` VALUES ('169', '22', 'Camera IP Kbvision KH-N1302W Dome 1.3M', '1950000', '4', '10', '', 'KH-SN1302a.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n1302w-dome-1-3m');
INSERT INTO `product` VALUES ('170', '22', 'Camera IP KBVision KH-N1304A 1.3M', '3000000', '4', '10', '', 'camerat-kbvision-KH-N1304A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n1304a-1-3m');
INSERT INTO `product` VALUES ('171', '22', 'Camera IP Kbvision KH-N1001 ngoài trời 1.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-N1001.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n1001-ngoai-troi-1-0m');
INSERT INTO `product` VALUES ('172', '22', 'Camera Kbvision KH-4C2005 hồng ngoại: 50m', '2100000', '4', '10', '', 'camera-kbvision-KH-4C20051.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2005-hong-ngoai-50m');
INSERT INTO `product` VALUES ('173', '22', 'Camera Kbvision KH-4C2006 Dome 2.0M', '2100000', '4', '10', '', 'camera-kbvision-KH-4C2006.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2006-dome-2-0m');
INSERT INTO `product` VALUES ('174', '22', 'Camera Kbvision KH-4C2003 2M hồng ngoại 30m', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2005.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2003-2m-hong-ngoai-30m');
INSERT INTO `product` VALUES ('175', '22', 'Camera Kbvision KH-4C2004 Dome 2.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2004_(2).jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2004-dome-2-0m');
INSERT INTO `product` VALUES ('176', '22', 'Camera kbvision KH-4C2001 Full HD 2.0M', '1030000', '4', '10', '', 'camera-kbvision-KH-4C2001.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2001-full-hd-2-0m');
INSERT INTO `product` VALUES ('177', '22', 'Camera Kbvision KH-4C2002 Full HD 2.0M', '990000', '4', '10', '', 'camera-kbvision-KH-4C2002.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2002-full-hd-2-0m');
INSERT INTO `product` VALUES ('178', '23', 'Camera IP PTZ Samsung SNP-6320HP', '41900000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6320HP.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-6320hp');
INSERT INTO `product` VALUES ('179', '23', 'Camera IP PTZ Samsung SNP-6321HP', '41000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6321HP.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-6321hp');
INSERT INTO `product` VALUES ('180', '23', 'Camera IP PTZ Samsung SNP-L5233P', '14000000', '4', '10', '', 'Camera_IP_PTZ_Samsung_SNP-L5233P.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-l5233p');
INSERT INTO `product` VALUES ('181', '23', 'Camera IP PTZ Samsung SNP-5321P', '29000000', '4', '10', '', 'Camera_IP_PTZ_Samsung_SNP-5321P.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-5321p');
INSERT INTO `product` VALUES ('182', '23', 'Camera PTZ Samsung SNP-6321P quay quét', '37000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6321P.jpg', 'http://fptcamera.vn/camera-ptz-samsung-snp-6321p-quay-quet');
INSERT INTO `product` VALUES ('183', '23', 'Camera PTZ Samsung SNP-6320P WiseNetⅢPlus 2M', '40000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6320P.jpg', 'http://fptcamera.vn/camera-ptz-samsung-snp-6320p-wisenet-plus-2m');
INSERT INTO `product` VALUES ('184', '23', 'Camera IP Samsung QND-7080RP hồng ngoại 4.0M', '5800000', '4', '10', '', 'Network-Camera-QND-7080RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qnd-7080rp-hong-ngoai-4-0m');
INSERT INTO `product` VALUES ('185', '23', 'Camera IP Samsung SNF-8010VMP 360 độ', '12200000', '4', '10', '', 'Network-Camera-SNF-8010VMP1.jpg', 'http://fptcamera.vn/camera-ip-samsung-snf-8010vmp-360-do');
INSERT INTO `product` VALUES ('186', '23', 'Camera IP Samsung SNF-8010P 360 độ', '11000000', '4', '10', '', 'Network-Camera-SNF-8010P.jpg', 'http://fptcamera.vn/camera-ip-samsung-snf-8010p-360-do');
INSERT INTO `product` VALUES ('187', '23', 'Camera IP Samsung SNO-7084RP WiseNetⅢ3M', '13000000', '4', '10', '', 'Network-Camera-Camera_IP_Samsung_SNO-7084RP_WiseNetⅢ3M.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-7084rp-wisenet-3m');
INSERT INTO `product` VALUES ('188', '23', 'Camera IP Samsung QNO-6010RP hồng ngoại 2.0M', '4000000', '4', '10', '', 'Camera_IP_Samsung_QNO-6010RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qno-6010rp-hong-ngoai-2-0m');
INSERT INTO `product` VALUES ('189', '23', 'Camera IP Samsung QNO-6070RP FUll HD', '5000000', '4', '10', '', 'Network-Camera-QNO-7080RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qno-6070rp-full-hd');
INSERT INTO `product` VALUES ('190', '23', 'Camera IP Samsung QNO-7020RP Hồng ngoại 4M', '4200000', '4', '10', '', 'Camera_IP_Samsung_QNO-7020RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qno-7020rp-hong-ngoai-4m');
INSERT INTO `product` VALUES ('191', '23', 'Camera IP Samsung QNO-7010RP Hồng ngoại 4.0 M', '0', '4', '10', '', 'Network-Camera-QNO-7010RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qno-7010rp-hong-ngoai-4-0-m');
INSERT INTO `product` VALUES ('192', '23', 'Camera IP Samsung QNO-7080RP hồng ngoại 4.0 Megapixel', '7500000', '4', '10', '', 'Network-Camera-QNO-7080RP1.jpg', 'http://fptcamera.vn/camera-ip-samsung-qno-7080rp-hong-ngoai-4-0-megapixel');
INSERT INTO `product` VALUES ('193', '23', 'Camera IP Samsung SNB-6004P WiseNetⅢ2M', '7000000', '4', '10', '', 'Camera_IP_Samsung_SNB-6004P_WiseNetⅢ2M.jpg', 'http://fptcamera.vn/camera-ip-samsung-snb-6004p-wisenet-2m');
INSERT INTO `product` VALUES ('194', '23', 'Camera Samsung SNB-6005P WiseNetⅢ2M', '7900000', '4', '10', '', 'Camera_Samsung_SNB-6005P_WiseNetⅢ2M.jpg', 'http://fptcamera.vn/camera-samsung-snb-6005p-wisenet-2m');
INSERT INTO `product` VALUES ('195', '23', 'Camera IP Box Samsung SNB-7004P WiseNetⅢ3M', '8900000', '4', '10', '', 'Network-Camera-SNB-7004P.jpg', 'http://fptcamera.vn/camera-ip-box-samsung-snb-7004p-wisenet-3m');
INSERT INTO `product` VALUES ('196', '23', 'Camera IP Samsung SNB-8000P 5 Megapixel', '12000000', '4', '10', '', 'Network-Camera-SNB-8000P.jpg', 'http://fptcamera.vn/camera-ip-samsung-snb-8000p-5-megapixel');
INSERT INTO `product` VALUES ('197', '23', 'Camera IP Samsung SND-L6083RP Wisenet Lite', '3200000', '4', '10', '', 'lap-dat-camera-ip-samsung-SND-L6013RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-snd-l6083rp-wisenet-lite');
INSERT INTO `product` VALUES ('198', '23', 'Camera IP Samsung QND-6020RP giá rẻ', '3000000', '4', '10', '', 'lap-dat-camera-ip-samsung-QND-6020RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qnd-6020rp-gia-re');
INSERT INTO `product` VALUES ('199', '23', 'Camera IP Samsung SNO-L6013RP Wisenet Lite', '2550000', '4', '10', '', 'Camera_IP_Samsung_SNO-L6013RP_Wisenet_Lite.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-l6013rp-wisenet-lite');
INSERT INTO `product` VALUES ('200', '23', 'Camera IP Samsung SNO-L6083RP WiseNet', '3580000', '4', '10', '', 'Camera_IP_Samsung_SNO-L6083RP_WiseNet.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-l6083rp-wisenet');
INSERT INTO `product` VALUES ('201', '23', 'Camera IP Samsung QNO-6020RP 25 Mét', '3200000', '4', '10', '', 'lap-dat-camera-ip-samsung-QNO-6020RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qno-6020rp-25-met');
INSERT INTO `product` VALUES ('202', '23', 'Camera IP Samsung Bán cầu SND-E6011RP 25 mét', '2060000', '4', '10', '', 'lap-dat-camera-ip-samsung-SND-E6011RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-ban-cau-snd-e6011rp-25-met');
INSERT INTO `product` VALUES ('203', '23', 'Camera IP Samsung SNO-E6011RP 25 mét', '2150000', '4', '10', '', 'lap-dat-camera-ip-samsung-SNO-E6011RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-e6011rp-25-met');
INSERT INTO `product` VALUES ('204', '23', 'Camera IP Samsung SNO-E6031RP 30 Mét', '2100000', '4', '10', '', 'lap-dat-camera-ip-samsung-SNO-E6031RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-e6031rp-30-met');
INSERT INTO `product` VALUES ('205', '23', 'Camera IP Samsung SNO-E6041RP', '2500000', '4', '10', '', 'lap-dat-camera-ip-samsung-SNO-E6041RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-e6041rp');
INSERT INTO `product` VALUES ('206', '23', 'Camera Samsung SCV-6023RAP Full HD', '3000000', '4', '10', '', 'lap-dat-camera-samsung-SCV-6023RAP.jpg', 'http://fptcamera.vn/camera-samsung-scv-6023rap-full-hd');
INSERT INTO `product` VALUES ('207', '23', 'Camera Samsung SCV-6083RAP chất lượng cao', '3300000', '4', '10', '', 'lap-dat-camera-samsung-SCV-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-scv-6083rap-chat-luong-cao');
INSERT INTO `product` VALUES ('208', '23', 'Camera Samsung SCD-6023RAP Full HD', '1600000', '4', '10', '', 'lap-dat-camera-samsung-SCD-6023RAP.jpg', 'http://fptcamera.vn/camera-samsung-scd-6023rap-full-hd');
INSERT INTO `product` VALUES ('209', '23', 'Camera Samsung SCD-6083RAP Full HD', '2500000', '4', '10', '', 'lap-dat-camera-samsung-SCD-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-scd-6083rap-full-hd');
INSERT INTO `product` VALUES ('210', '24', 'Trọn bộ Camera KCE nhập khẩu HÀN QUỐC', '8500000', '4', '10', '', 'tron-bo-camera-kec-han-quoc.jpg', 'http://fptcamera.vn/tron-bo-camera-kce-nhap-khau-han-quoc');
INSERT INTO `product` VALUES ('211', '24', 'Camera KCE-SPTIA6024 Hàn Quốc Full HD', '2150000', '4', '10', '', 'camera-HD-SDI-han-quoc-KCE---SPTIA6024.jpg', 'http://fptcamera.vn/camera-kce-sptia6024-han-quoc-full-hd');
INSERT INTO `product` VALUES ('212', '24', 'Camera HÀN QUỐC KCE KCE-CBTIA6048D', '4120000', '4', '10', '', 'camera-thanh-KCE-KCE-CBTIA6048D.jpg', 'http://fptcamera.vn/camera-han-quoc-kce-kce-cbtia6048d');
INSERT INTO `product` VALUES ('213', '24', 'Camera thân KCE KCE-SBTIA6054CB', '2700000', '4', '10', '', 'camera-KCE-THANH-NGOAI-TROI-KCE-SBTIA6054CB1.jpg', 'http://fptcamera.vn/camera-than-kce-kce-sbtia6054cb');
INSERT INTO `product` VALUES ('214', '24', 'Camera ngoài trời KEC Hàn Quốc KCE-EBTIA6636CB', '2100000', '4', '10', '', 'camera-KCE-THANH-NGOAI-TROI-KCE-SBTIA6054CB.jpg', 'http://fptcamera.vn/camera-ngoai-troi-kec-han-quoc-kce-ebtia6636cb');
INSERT INTO `product` VALUES ('215', '24', 'Camera Dome KCE Hàn Quốc KCE-SDTIA6030D', '2700000', '4', '10', '', 'camera-dome-KEC-KCE-SDTIA6030D.jpg', 'http://fptcamera.vn/camera-dome-kce-han-quoc-kce-sdtia6030d');
INSERT INTO `product` VALUES ('216', '24', 'Camera IP KCE Full HD KCE-CBTN2048D', '6000000', '4', '10', '', 'camera-ip-han-quoc-KCE-CBTN2048D.jpg', 'http://fptcamera.vn/camera-ip-kce-full-hd-kce-cbtn2048d');
INSERT INTO `product` VALUES ('217', '24', 'Camera IP KCE Full HD KCE-CNDTN2030D', '5000000', '4', '10', '', 'camera-ip-han-quoc-KCE-CNDTN2030D.jpg', 'http://fptcamera.vn/camera-ip-kce-full-hd-kce-cndtn2030d');
INSERT INTO `product` VALUES ('218', '24', 'Camera IP KCE Hàn Quốc KCE-SDTN2030', '3800000', '4', '10', '', 'camera-ip-han-quoc-KCE-SDTN2030.jpg', 'http://fptcamera.vn/camera-ip-kce-han-quoc-kce-sdtn2030');
INSERT INTO `product` VALUES ('219', '24', 'Camera Full HD HD-SDI KCE KCE-SPTI6524', '2200000', '4', '10', '', 'camera-HD-SDI-han-quoc-KCE-SPTI6524.jpg', 'http://fptcamera.vn/camera-full-hd-hd-sdi-kce-kce-spti6524');
INSERT INTO `product` VALUES ('220', '24', 'Camera KCE HD-SDI Full HD KCE-SDTI650', '3200000', '4', '10', '', 'camera-HD-SDI-han-quoc-KCE-SDTI650.jpg', 'http://fptcamera.vn/camera-kce-hd-sdi-full-hd-kce-sdti650');
INSERT INTO `product` VALUES ('221', '24', 'Camera KCE Quay-Zoom KCE-SPD120M', '15000000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120M.jpg', 'http://fptcamera.vn/camera-kce-quay-zoom-kce-spd120m');
INSERT INTO `product` VALUES ('222', '24', 'Camera Speed Dome KCE KCE-SPD120P', '12500000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120P.jpg', 'http://fptcamera.vn/camera-speed-dome-kce-kce-spd120p');
INSERT INTO `product` VALUES ('223', '24', 'Camera Hồng Ngoại KCE KCE-SBTI1250D', '5500000', '4', '10', '', 'camera-han-quoc-KCE-SBTI1250D.jpg', 'http://fptcamera.vn/camera-hong-ngoai-kce-kce-sbti1250d');
INSERT INTO `product` VALUES ('224', '24', 'Camera Thân KCE KCE-NBTI1250D', '5900000', '4', '10', '', 'camera-han-quoc-KCE-NBTI1250D.jpg', 'http://fptcamera.vn/camera-than-kce-kce-nbti1250d');
INSERT INTO `product` VALUES ('225', '24', 'Camera Hồng Ngoại KCE KCE-SBI1254CB', '2400000', '4', '10', '', 'camera-han-quoc-KCE-SBI1254CB.jpg', 'http://fptcamera.vn/camera-hong-ngoai-kce-kce-sbi1254cb');
INSERT INTO `product` VALUES ('226', '24', 'Camera Hàn Quốc KCE-SDTI1230D', '2800000', '4', '10', '', 'camera-han-quoc-KCE-SDTI1230D.jpg', 'http://fptcamera.vn/camera-han-quoc-kce-sdti1230d');
INSERT INTO `product` VALUES ('227', '24', 'Camera Hàn Quốc KCE-SPI1724', '1700000', '4', '10', '', 'camera-han-quoc-KCE-SPI1724.jpg', 'http://fptcamera.vn/camera-han-quoc-kce-spi1724');
INSERT INTO `product` VALUES ('228', '25', 'Camera Panasonic K-EW114L06AE', '4000000', '4', '10', '', 'camera-panasonic-K-EW114L06AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ew114l06ae');
INSERT INTO `product` VALUES ('229', '25', 'Camera Panasonic ngoài trời K-EW114L03AE', '4000000', '4', '10', '', 'camera-panasonic-K-EW114L03AE.jpg', 'http://fptcamera.vn/camera-panasonic-ngoai-troi-k-ew114l03ae');
INSERT INTO `product` VALUES ('230', '25', 'Camera Panasonic K-EF134L01E', '6000000', '4', '10', '', 'camera-panasonic-K-EF134L01E.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l01e');
INSERT INTO `product` VALUES ('231', '25', 'Camera Panasonic K-EF134L06AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L06AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l06ae');
INSERT INTO `product` VALUES ('232', '25', 'Camera panasonic K-EF134L03AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L03AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l03ae');
INSERT INTO `product` VALUES ('233', '25', 'Camera Panasonic K-EF134L02AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L02AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l02ae');
INSERT INTO `product` VALUES ('234', '25', 'Camera Panasonic CV-CPW101L', '2500000', '4', '10', '', 'lap-dat-camera-panasonic-_CV-CPW101L.jpg', 'http://fptcamera.vn/camera-panasonic-cv-cpw101l');
INSERT INTO `product` VALUES ('235', '25', 'Camera Panasonic Dome CV-CFW101L', '2500000', '4', '10', '', 'lap-dat-camera-panasonic-CV-CFW101L.jpg', 'http://fptcamera.vn/camera-panasonic-dome-cv-cfw101l');
INSERT INTO `product` VALUES ('236', '25', 'Camera Panasonic ngoài trời CV-CPW103L', '1500000', '4', '10', '', 'lap-dat-camera-panasonic-CV-CPW103L.jpg', 'http://fptcamera.vn/camera-panasonic-ngoai-troi-cv-cpw103l');
INSERT INTO `product` VALUES ('237', '25', 'Camera Panasonic CV-CFN103L', '1100000', '4', '10', '', 'lap-dat-camera-panasonic-CV-CFN103L.jpg', 'http://fptcamera.vn/camera-panasonic-cv-cfn103l');
INSERT INTO `product` VALUES ('238', '26', 'Camera IP Không dây HDPRO HDP-888IP1.0', '1050000', '4', '10', '', 'camera-ip-wifi-HDP-888IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-khong-day-hdpro-hdp-888ip1-0');
INSERT INTO `product` VALUES ('239', '26', 'Camera HDPRO HDP-1300CB ngoài trời', '999000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1300CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1300cb-ngoai-troi');
INSERT INTO `product` VALUES ('240', '26', 'Camera HDPRO HDP-2300CB ngoài trời Full HD', '1120000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2300CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2300cb-ngoai-troi-full-hd');
INSERT INTO `product` VALUES ('241', '26', 'Camera HDPRO HDP-2200CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2200CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2200ca-full-hd');
INSERT INTO `product` VALUES ('242', '26', 'Camera HDPRO HDP-2100CB Full HD', '790000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100cb-full-hd');
INSERT INTO `product` VALUES ('243', '26', 'Camera HDPRO HDP-2100CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100ca-full-hd');
INSERT INTO `product` VALUES ('244', '26', 'Camera HDPRO HDP-1100CB CVI trong nhà', '650000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1100cb-cvi-trong-nha');
INSERT INTO `product` VALUES ('245', '26', 'Camera HDPRO HDP-1200CB CVI 720P', '550000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1200CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1200cb-cvi-720p');
INSERT INTO `product` VALUES ('246', '26', 'Camera HDPRO CVI HDP-1100CA', '500000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CA-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-cvi-hdp-1100ca');
INSERT INTO `product` VALUES ('247', '27', 'Camera PTZ Quay Quét BENCO BEN-300AHD2.0', '14070000', '4', '10', '', 'camera-BEN-300AHD2.0_.png', 'http://fptcamera.vn/camera-ptz-quay-quet-benco-ben-300ahd2-0');
INSERT INTO `product` VALUES ('248', '27', 'Camera IP Không dây HDPRO HDP-888IP1.0', '1050000', '4', '10', '', 'camera-ip-wifi-HDP-888IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-khong-day-hdpro-hdp-888ip1-0');
INSERT INTO `product` VALUES ('249', '27', 'Camera Siêu nét Hikvision DS-2CC52D9T-IT3E', '2800000', '4', '10', '', 'camera-HIKVISION-DS-2CC52D9T-IT3E.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2cc52d9t-it3e');
INSERT INTO `product` VALUES ('250', '27', 'Camera Hikvision DS-2CE16D8T-IT3Z', '2350000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it3z');
INSERT INTO `product` VALUES ('251', '27', 'Camera Siêu Nét Hikvision DS-2CE56D8T-IT3Z', '2300000', '4', '10', '', 'camera-hikvision-DS-2CE56D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2ce56d8t-it3z');
INSERT INTO `product` VALUES ('252', '27', 'Camera POC Hikvision DS-2CE56D8T-IT3E', '1500000', '4', '10', '', 'camera-poc-DS-2CE56D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce56d8t-it3e');
INSERT INTO `product` VALUES ('253', '27', 'Camera Hikvision DS-2CE16D8T-IT 2MP', '1300000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it-2mp');
INSERT INTO `product` VALUES ('254', '27', 'Camera IP Bullet Hikvision DS-2CD2620F-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2620F-I.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2620f-i');
INSERT INTO `product` VALUES ('255', '27', 'Camera IP POE Hikvision DS-2CD2710F-I', '3100000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2710F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2710f-i');
INSERT INTO `product` VALUES ('256', '27', 'Camera POE IP Hikvision DS-2CD2522FWD-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2522FWD-I.jpg', 'http://fptcamera.vn/camera-poe-ip-hikvision-ds-2cd2522fwd-i');
INSERT INTO `product` VALUES ('257', '27', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('258', '27', 'Camera Kbvision KH-N8002 giá rẻ', '0', '4', '10', '', 'camera-kbvision-KHA-4S6020.jpg', 'http://fptcamera.vn/camera-kbvision-kh-n8002-gia-re');
INSERT INTO `product` VALUES ('259', '27', 'Camera Kbvision KHA-4S4020 siêu nét', '0', '4', '10', '', 'camera-kbvision-KHA-4S4020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s4020-sieu-net');
INSERT INTO `product` VALUES ('260', '27', 'Camera Kbvision KHA-4S2020 Dome 2.0M', '0', '4', '10', '', 'camera-kbvision-KHA-4S2020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s2020-dome-2-0m');
INSERT INTO `product` VALUES ('261', '27', 'Camera Kbvision KHA-4S1020 thân 1080P', '0', '4', '10', '', 'camera-kbvision-KHA-4S1020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s1020-than-1080p');
INSERT INTO `product` VALUES ('262', '27', 'Camera IP Kbvision KH-N3004A 3M', '3200000', '4', '10', '', 'camera-ip-kbvision-KH-N3004A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n3004a-3m');
INSERT INTO `product` VALUES ('263', '27', 'Camera IP wifi Kbvision KH-N3002W', '2600000', '4', '10', '', 'camera-ip-kbvision-KH-N3002W.jpg', 'http://fptcamera.vn/camera-ip-wifi-kbvision-kh-n3002w');
INSERT INTO `product` VALUES ('264', '27', 'Camera IP Kbvision KH-N2003A Thân 2.0M', '3100000', '4', '10', '', 'camera-kbvision-KH-KH-N2003A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n2003a-than-2-0m');
INSERT INTO `product` VALUES ('265', '27', 'Camera Kbvision KH-4C2005 hồng ngoại: 50m', '2100000', '4', '10', '', 'camera-kbvision-KH-4C20051.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2005-hong-ngoai-50m');
INSERT INTO `product` VALUES ('266', '27', 'Camera Kbvision KH-4C2003 2M hồng ngoại 30m', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2005.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2003-2m-hong-ngoai-30m');
INSERT INTO `product` VALUES ('267', '27', 'Camera Kbvision KH-4C2002 Full HD 2.0M', '990000', '4', '10', '', 'camera-kbvision-KH-4C2002.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2002-full-hd-2-0m');
INSERT INTO `product` VALUES ('268', '27', 'Camera HDPRO HDP-2300CB ngoài trời Full HD', '1120000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2300CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2300cb-ngoai-troi-full-hd');
INSERT INTO `product` VALUES ('269', '27', 'Camera HDPRO HDP-2200CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2200CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2200ca-full-hd');
INSERT INTO `product` VALUES ('270', '27', 'Camera HDPRO HDP-2100CB Full HD', '790000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100cb-full-hd');
INSERT INTO `product` VALUES ('271', '27', 'Camera HDPRO HDP-2100CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100ca-full-hd');
INSERT INTO `product` VALUES ('272', '27', 'Camera HDPRO HDP-1100CB CVI trong nhà', '650000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1100cb-cvi-trong-nha');
INSERT INTO `product` VALUES ('273', '27', 'Camera HDPRO HDP-1200CB CVI 720P', '550000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1200CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1200cb-cvi-720p');
INSERT INTO `product` VALUES ('274', '27', 'Camera HDPRO CVI HDP-1100CA', '500000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CA-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-cvi-hdp-1100ca');
INSERT INTO `product` VALUES ('275', '27', 'Camera Samsung SCV-6023RAP Full HD', '3000000', '4', '10', '', 'lap-dat-camera-samsung-SCV-6023RAP.jpg', 'http://fptcamera.vn/camera-samsung-scv-6023rap-full-hd');
INSERT INTO `product` VALUES ('276', '27', 'Camera Samsung SCD-6083RAP Full HD', '2500000', '4', '10', '', 'lap-dat-camera-samsung-SCD-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-scd-6083rap-full-hd');
INSERT INTO `product` VALUES ('277', '27', 'Camera Samsung SCO-6083RAP Full HD', '3200000', '4', '10', '', 'lap-dat-camera-samsung-SCO-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-sco-6083rap-full-hd');
INSERT INTO `product` VALUES ('278', '27', 'Camera Panasonic K-EF134L06AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L06AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l06ae');
INSERT INTO `product` VALUES ('279', '28', 'Camera IP Full HD SPYEYE SP-135IP 2.0', '2300000', '4', '10', '', 'camera-ip-spyeye-SP-135-2.0-megapixel_.jpg', 'http://fptcamera.vn/camera-ip-full-hd-spyeye-sp-135ip-2-0');
INSERT INTO `product` VALUES ('280', '28', 'Camera IP SPYEYE SP-36IP 1.3', '2100000', '4', '10', '', 'camera-ip-spyeye-SP-36_IP_1.3_.jpg', 'http://fptcamera.vn/camera-ip-spyeye-sp-36ip-1-3');
INSERT INTO `product` VALUES ('281', '28', 'Camera IP SPYEYE SP-126IP 1.3', '2050000', '4', '10', '', 'camera-IP-spyeye-SP-126IP_1.3_.jpg', 'http://fptcamera.vn/camera-ip-spyeye-sp-126ip-1-3');
INSERT INTO `product` VALUES ('282', '28', 'Camera AHD Full HD SPYEYE SP-702AHD 2.0', '1040000', '4', '10', '', 'camera-ahd-spyeye-full-hd-SP-702AHD-2.0-megapixel_.jpg', 'http://fptcamera.vn/camera-ahd-full-hd-spyeye-sp-702ahd-2-0');
INSERT INTO `product` VALUES ('283', '28', 'Camera AHD SPYEYE SP-405AHD 1.5', '1055000', '4', '10', '', 'camera-ahd-spyeye-SP-405AHD-1.5_.jpg', 'http://fptcamera.vn/camera-ahd-spyeye-sp-405ahd-1-5');
INSERT INTO `product` VALUES ('284', '28', 'Camera Hồng Ngoại SPYEYE SP-36AHD 1.5', '1180000', '4', '10', '', 'camera-ahd-spyeye-SP-36AHD-1.5_.jpg', 'http://fptcamera.vn/camera-hong-ngoai-spyeye-sp-36ahd-1-5');
INSERT INTO `product` VALUES ('285', '28', 'Camera Dome AHD SPYEYE SP-2070AHD 1.5', '852000', '4', '10', '', 'camera-ahd-spyeye-SP-2070AHD-1.5_.jpg', 'http://fptcamera.vn/camera-dome-ahd-spyeye-sp-2070ahd-1-5');
INSERT INTO `product` VALUES ('286', '28', 'Camera AHD SPYEYE SP-702AHD 1.5', '805000', '4', '10', '', 'camera-ahd-spyeye-SP-702AHD-1.5_.jpg', 'http://fptcamera.vn/camera-ahd-spyeye-sp-702ahd-1-5');
INSERT INTO `product` VALUES ('287', '29', 'Camera Ngụy Trang Gương Cầu QUESTEK QTX-1611AHD', '800000', '4', '10', '', 'camera-nguy-trang-guong-cau-questek-QTX-1611AHD.jpg', 'http://fptcamera.vn/camera-nguy-trang-guong-cau-questek-qtx-1611ahd');
INSERT INTO `product` VALUES ('288', '29', 'Camera Mini Ngụy Trang QUESTEK QTX 510AHD', '990000', '4', '10', '', 'camera-mini-nguy-trang-questek-QTX-510AHD.jpg', 'http://fptcamera.vn/camera-mini-nguy-trang-questek-qtx-510ahd');
INSERT INTO `product` VALUES ('289', '29', 'Camera Full HD QUESTEK Win 6023AHD', '2100000', '4', '10', '', 'camera-full-hd-questek-Win-6023AHD.jpg', 'http://fptcamera.vn/camera-full-hd-questek-win-6023ahd');
INSERT INTO `product` VALUES ('290', '29', 'Camera Full HD QUESTEK Win-6003AHD', '1680000', '4', '10', '', 'camera-full-hd-questek-Win-6003AHD.jpg', 'http://fptcamera.vn/camera-full-hd-questek-win-6003ahd');
INSERT INTO `product` VALUES ('291', '29', 'Camera Full HD QUESTEK Win-6013AHD', '1680000', '4', '10', '', 'camera-full-hd-questek-win-Win-6013AHD.jpg', 'http://fptcamera.vn/camera-full-hd-questek-win-6013ahd');
INSERT INTO `product` VALUES ('292', '29', 'Camera Quan Sát AHD QUESTEK Win-6032AHD', '1680000', '4', '10', '', 'camera-than-ahd-questek-Win-6032AHD.jpg', 'http://fptcamera.vn/camera-quan-sat-ahd-questek-win-6032ahd');
INSERT INTO `product` VALUES ('293', '29', 'Camera Thân AHD QUESTEK Win-6012AHD', '1040000', '4', '10', '', 'camera-than-ahd-questek-Win-6012AHD.jpg', 'http://fptcamera.vn/camera-than-ahd-questek-win-6012ahd');
INSERT INTO `product` VALUES ('294', '29', 'Camera AHD QUEaSTEK Win-6002AHD', '1040000', '4', '10', '', 'camera-than-ahd-questek-Win-6002AHD.jpg', 'http://fptcamera.vn/camera-ahd-queastek-win-6002ahd');
INSERT INTO `product` VALUES ('295', '29', 'Camera Dome AHD QUESTEK Win-6022AHD', '1040000', '4', '10', '', 'camera-ahd-questek-Win-6022AHD.jpg', 'http://fptcamera.vn/camera-dome-ahd-questek-win-6022ahd');
INSERT INTO `product` VALUES ('296', '29', 'Camera Zoom QUESTEK WIN-622AHD', '4200000', '4', '10', '', 'camera-zoom-questek-WIN-622AHD.jpg', 'http://fptcamera.vn/camera-zoom-questek-win-622ahd');
INSERT INTO `product` VALUES ('297', '29', 'Camera Speed Dome AHD QUESTEK QN 8013AHD', '9750000', '4', '10', '', 'camera-ahd-speed-dome-questek-QN-8013AHD.jpg', 'http://fptcamera.vn/camera-speed-dome-ahd-questek-qn-8013ahd');
INSERT INTO `product` VALUES ('298', '29', 'Camera AHD QUESTEK QN-3601AHD', '1399000', '4', '10', '', 'camera-than-ahd-questek-win-QN-3601AHD.jpg', 'http://fptcamera.vn/camera-ahd-questek-qn-3601ahd');
INSERT INTO `product` VALUES ('299', '29', 'Camera Thân AHD QUESTEK QN-3801AHD', '1160000', '4', '10', '', 'camera-than-ahd-questek-win-QN-3801AHD.jpg', 'http://fptcamera.vn/camera-than-ahd-questek-qn-3801ahd');
INSERT INTO `product` VALUES ('300', '29', 'Camera Ngoài Trời AHD QUESTEK QN-3701AHD', '1090000', '4', '10', '', 'camera-than-ahd-questek-win-QN-3701AHD.jpg', 'http://fptcamera.vn/camera-ngoai-troi-ahd-questek-qn-3701ahd');
INSERT INTO `product` VALUES ('301', '29', 'Camera AHD QUESTEK QN-2121AHD', '780000', '4', '10', '', 'camera-than-ahd-questek-win-QN-2121AHD.jpg', 'http://fptcamera.vn/camera-ahd-questek-qn-2121ahd');
INSERT INTO `product` VALUES ('302', '29', 'Camera Dome AHD QUESTEK QN-4191AHD', '1030000', '4', '10', '', 'camera-dome-ahd-questek-win-QN-4191AHD.jpg', 'http://fptcamera.vn/camera-dome-ahd-questek-qn-4191ahd');
INSERT INTO `product` VALUES ('303', '29', 'Camera Dome AHD QUESTEK QN-4181AHD', '850000', '4', '10', '', 'camera-dome-ahd-questek-win-QN-4181AHD.jpg', 'http://fptcamera.vn/camera-dome-ahd-questek-qn-4181ahd');
INSERT INTO `product` VALUES ('304', '29', 'Camera AHD Ngoài Trời QUESTEK QNV-1042AHD', '1450000', '4', '10', '', 'camera-ahd-questek-win-QNV-1042AHD.jpg', 'http://fptcamera.vn/camera-ahd-ngoai-troi-questek-qnv-1042ahd');
INSERT INTO `product` VALUES ('305', '29', 'Camera AHD Thân QUESTEK QNV-1212AHD', '1190000', '4', '10', '', 'camera-ahd-questek-win-QNV-1212AHD.jpg', 'http://fptcamera.vn/camera-ahd-than-questek-qnv-1212ahd');
INSERT INTO `product` VALUES ('306', '29', 'Camera AHD QUESTEK QNV-1632AHD', '1600000', '4', '10', '', 'camera-ahd-questek-win-QNV-1632AHD.jpg', 'http://fptcamera.vn/camera-ahd-questek-qnv-1632ahd');
INSERT INTO `product` VALUES ('307', '31', 'Camera Kbvision KH-4C2006 Dome 2.0M', '2100000', '4', '10', '', 'camera-kbvision-KH-4C2006.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2006-dome-2-0m');
INSERT INTO `product` VALUES ('308', '31', 'Camera Quay Quét Zoom DAHUA SD5923E-H', '10500000', '4', '10', '', 'camera-speed-dome-dahua-SD5923E-H.jpg', 'http://fptcamera.vn/camera-quay-quet-zoom-dahua-sd5923e-h');
INSERT INTO `product` VALUES ('309', '31', 'Camera Giám Sát DAHUA CA-FW181DP', '1250000', '4', '10', '', 'camera-analog-dahua-CA-FW181DP.jpg', 'http://fptcamera.vn/camera-giam-sat-dahua-ca-fw181dp');
INSERT INTO `product` VALUES ('310', '31', 'Camera Giám Sát DAHUA CA-FW181GP', '1100000', '4', '10', '', 'camera-analog-dahua-CA-FW181GP.jpg', 'http://fptcamera.vn/camera-giam-sat-dahua-ca-fw181gp');
INSERT INTO `product` VALUES ('311', '31', 'Camera Quan Sát DAHUA CA-DW181EP', '950000', '4', '10', '', 'camera-analog-dahua-CA-DW181EP.JPG', 'http://fptcamera.vn/camera-quan-sat-dahua-ca-dw181ep');
INSERT INTO `product` VALUES ('312', '31', 'Camera Quan Sát DAHUA CA-DW181HP-IR', '900000', '4', '10', '', 'camera-analog-dahua-CA-DW181HP-IR1.jpg', 'http://fptcamera.vn/camera-quan-sat-dahua-ca-dw181hp-ir');
INSERT INTO `product` VALUES ('313', '31', 'Camera KCE Quay-Zoom KCE-SPD120M', '15000000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120M.jpg', 'http://fptcamera.vn/camera-kce-quay-zoom-kce-spd120m');
INSERT INTO `product` VALUES ('314', '31', 'Camera Speed Dome KCE KCE-SPD120P', '12500000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120P.jpg', 'http://fptcamera.vn/camera-speed-dome-kce-kce-spd120p');
INSERT INTO `product` VALUES ('315', '31', 'Camera Hồng Ngoại KCE KCE-SBTI1250D', '5500000', '4', '10', '', 'camera-han-quoc-KCE-SBTI1250D.jpg', 'http://fptcamera.vn/camera-hong-ngoai-kce-kce-sbti1250d');
INSERT INTO `product` VALUES ('316', '31', 'Camera Thân KCE KCE-NBTI1250D', '5900000', '4', '10', '', 'camera-han-quoc-KCE-NBTI1250D.jpg', 'http://fptcamera.vn/camera-than-kce-kce-nbti1250d');
INSERT INTO `product` VALUES ('317', '31', 'Camera Hồng Ngoại KCE KCE-SBI1254CB', '2400000', '4', '10', '', 'camera-han-quoc-KCE-SBI1254CB.jpg', 'http://fptcamera.vn/camera-hong-ngoai-kce-kce-sbi1254cb');
INSERT INTO `product` VALUES ('318', '31', 'Camera Hàn Quốc KCE-SDTI1230D', '2800000', '4', '10', '', 'camera-han-quoc-KCE-SDTI1230D.jpg', 'http://fptcamera.vn/camera-han-quoc-kce-sdti1230d');
INSERT INTO `product` VALUES ('319', '31', 'Camera Hàn Quốc KCE-SPI1724', '1700000', '4', '10', '', 'camera-han-quoc-KCE-SPI1724.jpg', 'http://fptcamera.vn/camera-han-quoc-kce-spi1724');
INSERT INTO `product` VALUES ('320', '31', 'Camera Speed Dome HIKVISION DS-2AE7164-A', '10050000', '4', '10', '', 'camera-speed-dome-hikvision-DS-2AE7164-A1.jpg', 'http://fptcamera.vn/camera-speed-dome-hikvision-ds-2ae7164-a');
INSERT INTO `product` VALUES ('321', '31', 'Camera Thân HIKVISION DS-2CE16A2P-IT3', '980000', '4', '10', '', 'camera-HD-SDI-hikvision-DS-2CC12C2S-IT3.jpg', 'http://fptcamera.vn/camera-than-hikvision-ds-2ce16a2p-it3');
INSERT INTO `product` VALUES ('322', '31', 'Camera Dome HIKVISION DS-2CE56A2P-IT3', '980000', '4', '10', '', 'camera-dome-HD-TVI-hikvision-DS-2CE56C2T-IT32.jpg', 'http://fptcamera.vn/camera-dome-hikvision-ds-2ce56a2p-it3');
INSERT INTO `product` VALUES ('323', '31', 'Camera Thân HIKVISION DS-2CE15A2P-IR', '750000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE15A2P-IR1.jpg', 'http://fptcamera.vn/camera-than-hikvision-ds-2ce15a2p-ir');
INSERT INTO `product` VALUES ('324', '31', 'Camera Dome HIKVISION DS-2CE55A2P-IR', '650000', '4', '10', '', 'camera-hikvision-DS-2CE55A2P-IR.jpg', 'http://fptcamera.vn/camera-dome-hikvision-ds-2ce55a2p-ir');
INSERT INTO `product` VALUES ('325', '31', 'Camera Thân Hồng Ngoại AVTECH KPC136ZELTP', '920000', '4', '10', '', 'camera-than-avtech-KPC136ZELTP.jpg', 'http://fptcamera.vn/camera-than-hong-ngoai-avtech-kpc136zeltp');
INSERT INTO `product` VALUES ('326', '31', 'Camera Hồng Ngoại AVTECH AVC153P', '1060000', '4', '10', '', 'camera-dome-avtech-AVC153P.jpg', 'http://fptcamera.vn/camera-hong-ngoai-avtech-avc153p');
INSERT INTO `product` VALUES ('327', '31', 'Camera Hồng Ngoại AVTECH AVC489ZAP', '2050000', '4', '10', '', 'camera-dome-avtech-AVC489ZAP.jpg', 'http://fptcamera.vn/camera-hong-ngoai-avtech-avc489zap');
INSERT INTO `product` VALUES ('328', '31', 'Camera Dome VANTECH VT-2101', '790000', '4', '10', '', 'camera-dome-VANTECH-VT-2101.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-2101');
INSERT INTO `product` VALUES ('329', '31', 'Camera Dome VANTECH VT-2002', '690000', '4', '10', '', 'camera-VANTECH-VT-2002.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-2002');
INSERT INTO `product` VALUES ('330', '31', 'Camera Trong Phòng VANTECH VT-3114S', '580000', '4', '10', '', 'camera-quan-sat-vantech-vt-3114s.jpg', 'http://fptcamera.vn/camera-trong-phong-vantech-vt-3114s');
INSERT INTO `product` VALUES ('331', '31', 'Camera Dome VANTECH VT-3114H', '720000', '4', '10', '', 'camera-quan-sat-vantech-vt-3114h.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-3114h');
INSERT INTO `product` VALUES ('332', '31', 'Camera Ngụy Trang VANTECH VT-1005H', '900000', '4', '10', '', 'camera-nguy-trang-vantech-VT-1005H.jpg', 'http://fptcamera.vn/camera-nguy-trang-vantech-vt-1005h');
INSERT INTO `product` VALUES ('333', '31', 'Camera Trong Nhà VANTECH VT-3113K', '700000', '4', '10', '', 'camera-quan-sat-vantech-vt-3113k.jpg', 'http://fptcamera.vn/camera-trong-nha-vantech-vt-3113k');
INSERT INTO `product` VALUES ('334', '31', 'Camera Ngụy Trang Mini VANTECH VT-2100', '850000', '4', '10', '', 'camera-nguy-trang-vantech-vt-2100.jpg', 'http://fptcamera.vn/camera-nguy-trang-mini-vantech-vt-2100');
INSERT INTO `product` VALUES ('335', '31', 'Camera Dome VANTECH VT-3115A', '600000', '4', '10', '', 'camera-vantech-VT-3115A.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-3115a');
INSERT INTO `product` VALUES ('336', '31', 'Camera Dome VANTECH VT-3118A', '650000', '4', '10', '', 'camera-dome-VANTECH-VT-3118a.jpg', 'http://fptcamera.vn/camera-dome-vantech-vt-3118a');
INSERT INTO `product` VALUES ('337', '31', 'Camera Hồng Ngoại VANTECH VT-2502', '750000', '4', '10', '', 'camera-vantech-vt-2502.jpg', 'http://fptcamera.vn/camera-hong-ngoai-vantech-vt-2502');
INSERT INTO `product` VALUES ('338', '31', 'Camera Trong Nhà VANTECH VT-2503', '0', '4', '10', '', 'camera-giam-sat-vantech-vt-2503.jpg', 'http://fptcamera.vn/camera-trong-nha-vantech-vt-2503');
INSERT INTO `product` VALUES ('339', '32', 'Trọn bộ Camera KCE nhập khẩu HÀN QUỐC', '8500000', '4', '10', '', 'tron-bo-camera-kec-han-quoc.jpg', 'http://fptcamera.vn/tron-bo-camera-kce-nhap-khau-han-quoc');
INSERT INTO `product` VALUES ('340', '32', 'Camera KCE-SPTIA6024 Hàn Quốc Full HD', '2150000', '4', '10', '', 'camera-HD-SDI-han-quoc-KCE---SPTIA6024.jpg', 'http://fptcamera.vn/camera-kce-sptia6024-han-quoc-full-hd');
INSERT INTO `product` VALUES ('341', '32', 'Camera PTZ Quay Quét BENCO BEN-300AHD2.0', '14070000', '4', '10', '', 'camera-BEN-300AHD2.0_.png', 'http://fptcamera.vn/camera-ptz-quay-quet-benco-ben-300ahd2-0');
INSERT INTO `product` VALUES ('342', '32', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('343', '32', 'Camera Kbvision KH-N8002 giá rẻ', '0', '4', '10', '', 'camera-kbvision-KHA-4S6020.jpg', 'http://fptcamera.vn/camera-kbvision-kh-n8002-gia-re');
INSERT INTO `product` VALUES ('344', '32', 'Camera Kbvision KHA-4S5020 hồng ngoại', '0', '4', '10', '', 'camera-kbvision-KHA-4S50201.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s5020-hong-ngoai');
INSERT INTO `product` VALUES ('345', '32', 'Camera Kbvision KHA-4S4020 siêu nét', '0', '4', '10', '', 'camera-kbvision-KHA-4S4020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s4020-sieu-net');
INSERT INTO `product` VALUES ('346', '32', 'Camera Kbvision KHA-4S2020 Dome 2.0M', '0', '4', '10', '', 'camera-kbvision-KHA-4S2020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s2020-dome-2-0m');
INSERT INTO `product` VALUES ('347', '32', 'Camera Kbvision KHA-4S1020 thân 1080P', '0', '4', '10', '', 'camera-kbvision-KHA-4S1020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s1020-than-1080p');
INSERT INTO `product` VALUES ('348', '32', 'Camera Kbvision KH-4C2005 hồng ngoại: 50m', '2100000', '4', '10', '', 'camera-kbvision-KH-4C20051.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2005-hong-ngoai-50m');
INSERT INTO `product` VALUES ('349', '32', 'Camera Kbvision KH-4C2006 Dome 2.0M', '2100000', '4', '10', '', 'camera-kbvision-KH-4C2006.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2006-dome-2-0m');
INSERT INTO `product` VALUES ('350', '32', 'Camera Kbvision KH-4C2003 2M hồng ngoại 30m', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2005.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2003-2m-hong-ngoai-30m');
INSERT INTO `product` VALUES ('351', '32', 'Camera Kbvision KH-4C2004 Dome 2.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2004_(2).jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2004-dome-2-0m');
INSERT INTO `product` VALUES ('352', '32', 'Camera kbvision KH-4C2001 Full HD 2.0M', '1030000', '4', '10', '', 'camera-kbvision-KH-4C2001.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2001-full-hd-2-0m');
INSERT INTO `product` VALUES ('353', '32', 'Camera Kbvision KH-4C2002 Full HD 2.0M', '990000', '4', '10', '', 'camera-kbvision-KH-4C2002.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2002-full-hd-2-0m');
INSERT INTO `product` VALUES ('354', '32', 'Camera Samsung SCV-6023RAP Full HD', '3000000', '4', '10', '', 'lap-dat-camera-samsung-SCV-6023RAP.jpg', 'http://fptcamera.vn/camera-samsung-scv-6023rap-full-hd');
INSERT INTO `product` VALUES ('355', '32', 'Camera Samsung SCV-6083RAP chất lượng cao', '3300000', '4', '10', '', 'lap-dat-camera-samsung-SCV-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-scv-6083rap-chat-luong-cao');
INSERT INTO `product` VALUES ('356', '32', 'Camera Samsung SCD-6023RAP Full HD', '1600000', '4', '10', '', 'lap-dat-camera-samsung-SCD-6023RAP.jpg', 'http://fptcamera.vn/camera-samsung-scd-6023rap-full-hd');
INSERT INTO `product` VALUES ('357', '32', 'Camera Samsung SCD-6083RAP Full HD', '2500000', '4', '10', '', 'lap-dat-camera-samsung-SCD-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-scd-6083rap-full-hd');
INSERT INTO `product` VALUES ('358', '32', 'Camera Samsung SCO-6023RAP Full HD', '2200000', '4', '10', '', 'lap-dat-camera-samsung-SCO-6023RAP.jpg', 'http://fptcamera.vn/camera-samsung-sco-6023rap-full-hd');
INSERT INTO `product` VALUES ('359', '32', 'Camera Samsung SCO-6083RAP Full HD', '3200000', '4', '10', '', 'lap-dat-camera-samsung-SCO-6083RAP.jpg', 'http://fptcamera.vn/camera-samsung-sco-6083rap-full-hd');
INSERT INTO `product` VALUES ('360', '32', 'Camera Samsung HCO-E6070RP Full HD', '1620000', '4', '10', '', 'lap-dat-camera-samsung-ahd-HCO-E6070RP.jpg', 'http://fptcamera.vn/camera-samsung-hco-e6070rp-full-hd');
INSERT INTO `product` VALUES ('361', '32', 'Camera Samsung HCO-E6020RP Full HD', '1050000', '4', '10', '', 'lap-dat-camera-samsung-AHD-HCO-E6020RP.jpg', 'http://fptcamera.vn/camera-samsung-hco-e6020rp-full-hd');
INSERT INTO `product` VALUES ('362', '32', 'Camera Samsung HCD-E6070RP', '1700000', '4', '10', '', 'lap-dat-camera-samsung-HCD-E6070RP.jpg', 'http://fptcamera.vn/camera-samsung-hcd-e6070rp');
INSERT INTO `product` VALUES ('363', '32', 'Camera Samsung HCD-E6020RP 2M', '835000', '4', '10', '', 'lap-dat-camera-samsung-HCD-E6020RP.jpg', 'http://fptcamera.vn/camera-samsung-hcd-e6020rp-2m');
INSERT INTO `product` VALUES ('364', '32', 'Camera HÀN QUỐC KCE KCE-CBTIA6048D', '4120000', '4', '10', '', 'camera-thanh-KCE-KCE-CBTIA6048D.jpg', 'http://fptcamera.vn/camera-han-quoc-kce-kce-cbtia6048d');
INSERT INTO `product` VALUES ('365', '32', 'Camera thân KCE KCE-SBTIA6054CB', '2700000', '4', '10', '', 'camera-KCE-THANH-NGOAI-TROI-KCE-SBTIA6054CB1.jpg', 'http://fptcamera.vn/camera-than-kce-kce-sbtia6054cb');
INSERT INTO `product` VALUES ('366', '32', 'Camera ngoài trời KEC Hàn Quốc KCE-EBTIA6636CB', '2100000', '4', '10', '', 'camera-KCE-THANH-NGOAI-TROI-KCE-SBTIA6054CB.jpg', 'http://fptcamera.vn/camera-ngoai-troi-kec-han-quoc-kce-ebtia6636cb');
INSERT INTO `product` VALUES ('367', '32', 'Camera Dome KCE Hàn Quốc KCE-SDTIA6030D', '2700000', '4', '10', '', 'camera-dome-KEC-KCE-SDTIA6030D.jpg', 'http://fptcamera.vn/camera-dome-kce-han-quoc-kce-sdtia6030d');
INSERT INTO `product` VALUES ('368', '32', 'Camera nhìn đêm có màu HDP-701USL-AHD1.4', '1750000', '4', '10', '', 'hdp-701usl-ahd1.4_.png', 'http://fptcamera.vn/camera-nhin-dem-co-mau-hdp-701usl-ahd1-4');
INSERT INTO `product` VALUES ('369', '32', 'Camera BENCO Full HD BEN-1102AHD2.4', '1390000', '4', '10', '', 'camera-benco-full-hd-BEN-1102AHD2.4_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-ben-1102ahd2-4');
INSERT INTO `product` VALUES ('370', '32', 'Camera BENCO Full HD BEN-1102AHD1.3', '850000', '4', '10', '', 'camera-benco-BEN-1101AHD2.4_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-ben-1102ahd1-3');
INSERT INTO `product` VALUES ('371', '33', 'Lắp đặt camera wifi Dahua DH-IPC-C15P', '1350000', '4', '10', '', 'camera-ip-wifi-dahua-ipc-c15.png', 'http://fptcamera.vn/lap-dat-camera-wifi-dahua-dh-ipc-c15p');
INSERT INTO `product` VALUES ('372', '33', 'Camera IP Không dây HDPRO HDP-888IP1.0', '1050000', '4', '10', '', 'camera-ip-wifi-HDP-888IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-khong-day-hdpro-hdp-888ip1-0');
INSERT INTO `product` VALUES ('373', '33', 'Camera IP Pan/Til Wifi HIKVISION DS-2CD2Q10', '2500000', '4', '10', '', 'camera-pan-tit-hikvision-DS-2CD2Q101.jpg', 'http://fptcamera.vn/camera-ip-pan-til-wifi-hikvision-ds-2cd2q10');
INSERT INTO `product` VALUES ('374', '33', 'Camera IP Wifi HIKVISION DS-2CD2420F-IW 2.0MB', '1744000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW1.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2420f-iw-2-0mb');
INSERT INTO `product` VALUES ('375', '33', 'Camera IP Bullet Hikvision DS-2CD2620F-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2620F-I.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2620f-i');
INSERT INTO `product` VALUES ('376', '33', 'Camera IP Bullet Hikvision DS-2CD2T22WD-I8', '3050000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T22WD-I8.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2t22wd-i8');
INSERT INTO `product` VALUES ('377', '33', 'Camera IP POE Hikvision DS-2CD2010F-I giá rẻ', '1600000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2010F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2010f-i-gia-re');
INSERT INTO `product` VALUES ('378', '33', 'Camera IP POE Hikvision DS-2CD2710F-I', '3100000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2710F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2710f-i');
INSERT INTO `product` VALUES ('379', '33', 'Camera POE IP Hikvision DS-2CD2522FWD-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2522FWD-I.jpg', 'http://fptcamera.vn/camera-poe-ip-hikvision-ds-2cd2522fwd-i');
INSERT INTO `product` VALUES ('380', '33', 'Camera IP POE Hikvision DS-2CD2322WD-I', '0', '4', '10', '', 'camera-ip-hikvision-DS-2CD2322WD-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2322wd-i');
INSERT INTO `product` VALUES ('381', '33', 'Camera POE Hikvision DS-2CD2110F-I 1.3MP', '1650000', '4', '10', '', 'camera-ip-wifi-hikvision-DS-2CD2110F-I.jpg', 'http://fptcamera.vn/camera-poe-hikvision-ds-2cd2110f-i-1-3mp');
INSERT INTO `product` VALUES ('382', '33', 'Camera IP Wifi Hikvision DS-2CD2442FWD-IW', '2500000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2442FWD-IW.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2442fwd-iw');
INSERT INTO `product` VALUES ('383', '33', 'Camera IP hikvision DS-2CD1201-I5 50 Mét', '1480000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I5.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i5-50-met');
INSERT INTO `product` VALUES ('384', '33', 'Camera IP Hikvision DS-2CD1002-I Thân 1MP', '1450000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1002-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1002-i-than-1mp');
INSERT INTO `product` VALUES ('385', '33', 'Camera IP Hikvision DS-2CD1201-I3 thân 1MP', '1130000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i3-than-1mp');
INSERT INTO `product` VALUES ('386', '33', 'Camera IP Hikvision DS-2CD1321-I Dome 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1321-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1321-i-dome-2mp');
INSERT INTO `product` VALUES ('387', '33', 'Camera IP Hikvision DS-2CD1221-I3 thân 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1221-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1221-i3-than-2mp');
INSERT INTO `product` VALUES ('388', '33', 'Camera IP HIKVISION DS-2CD2955FWD-I', '6300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2955FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2955fwd-i');
INSERT INTO `product` VALUES ('389', '33', 'Camera IP Hikvision DS-2CD2T25FHWD-I8', '3300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T25FHWD-I8.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2t25fhwd-i8');
INSERT INTO `product` VALUES ('390', '33', 'Camera IP Hikvision DS-2CD2385FWD-I Dome 8MP', '4200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2385FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2385fwd-i-dome-8mp');
INSERT INTO `product` VALUES ('391', '33', 'Camera IP Hikvision DS-2CD2335FWD-I Dome 3MP', '2880000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2335FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2335fwd-i-dome-3mp');
INSERT INTO `product` VALUES ('392', '33', 'Camera IP Kbvision KHA-5040DM thân 4.0', '0', '4', '10', '', 'camera-ip-kbvision-KHA-5040DM.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-5040dm-than-4-0');
INSERT INTO `product` VALUES ('393', '33', 'Camera IP KHA-3020AD Thân 2.0M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-3020AD.jpg', 'http://fptcamera.vn/camera-ip-kha-3020ad-than-2-0m');
INSERT INTO `product` VALUES ('394', '33', 'Camera IP KHA-5013D Thân 1.3M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-5013D.jpg', 'http://fptcamera.vn/camera-ip-kha-5013d-than-1-3m');
INSERT INTO `product` VALUES ('395', '33', 'Camera IP Kbvision KHA-2013D Dome 1.3M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-2013D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-2013d-dome-1-3m');
INSERT INTO `product` VALUES ('396', '33', 'Camera IP Kbvision KHA-1013D Thân 1.3M', '0', '4', '10', '', 'camera_ip_kbvision_KHA-1013D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-1013d-than-1-3m');
INSERT INTO `product` VALUES ('397', '33', 'Camera IP Kbvision KHA-1010D giá rẻ', '0', '4', '10', '', 'camera-ip-kbvision-KHA-1010D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-1010d-gia-re');
INSERT INTO `product` VALUES ('398', '33', 'Camera SMART IP Kbvision KH-SN3005M', '12000000', '4', '10', '', 'camera-ip-kbvision-smart-KH-SN3005M.jpg', 'http://fptcamera.vn/camera-smart-ip-kbvision-kh-sn3005m');
INSERT INTO `product` VALUES ('399', '33', 'Camera IP Kbvisiaon KH-N8005 Ngoài trời Siêu nét', '5200000', '4', '10', '', 'camera-kbvision-KH-N8005.jpg', 'http://fptcamera.vn/camera-ip-kbvisiaon-kh-n8005-ngoai-troi-sieu-net');
INSERT INTO `product` VALUES ('400', '33', 'Camera IP Kbvision KH-N8002 siêu nét 8.0 M', '5300000', '4', '10', '', 'camera-ip-kbvision-KH-N8002.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n8002-sieu-net-8-0-m');
INSERT INTO `product` VALUES ('401', '33', 'Camera IP Kbvision KH-N4005M Ngoài trời 4.0M', '6600000', '4', '10', '', 'camera-kbvision-KH-N4005M.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n4005m-ngoai-troi-4-0m');
INSERT INTO `product` VALUES ('402', '33', 'Camera IP Kbvision KH-N4003 ngoài trời 4.0AM', '4000000', '4', '10', '', 'camera-ip-kbvision-KH-N4003.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n4003-ngoai-troi-4-0am');
INSERT INTO `product` VALUES ('403', '34', 'Camera Quay Quét PTZ DAHUA SD49225I-HC', '7750000', '4', '10', '', 'camera-quay-quet-SD49225I-HC.jpg', 'http://fptcamera.vn/camera-quay-quet-ptz-dahua-sd49225i-hc');
INSERT INTO `product` VALUES ('404', '34', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('405', '34', 'Camera Kbvision KH-N8002 giá rẻ', '0', '4', '10', '', 'camera-kbvision-KHA-4S6020.jpg', 'http://fptcamera.vn/camera-kbvision-kh-n8002-gia-re');
INSERT INTO `product` VALUES ('406', '34', 'Camera Kbvision KHA-4S5020 hồng ngoại', '0', '4', '10', '', 'camera-kbvision-KHA-4S50201.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s5020-hong-ngoai');
INSERT INTO `product` VALUES ('407', '34', 'Camera Kbvision KHA-4S2020 Dome 2.0M', '0', '4', '10', '', 'camera-kbvision-KHA-4S2020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s2020-dome-2-0m');
INSERT INTO `product` VALUES ('408', '34', 'Camera Kbvision KHA-4S1020 thân 1080P', '0', '4', '10', '', 'camera-kbvision-KHA-4S1020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s1020-than-1080p');
INSERT INTO `product` VALUES ('409', '34', 'Camera Kbvision KH-4C2006 Dome 2.0M', '2100000', '4', '10', '', 'camera-kbvision-KH-4C2006.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2006-dome-2-0m');
INSERT INTO `product` VALUES ('410', '34', 'Camera Kbvision KH-4C2003 2M hồng ngoại 30m', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2005.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2003-2m-hong-ngoai-30m');
INSERT INTO `product` VALUES ('411', '34', 'Camera Kbvision KH-4C2004 Dome 2.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2004_(2).jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2004-dome-2-0m');
INSERT INTO `product` VALUES ('412', '34', 'Camera kbvision KH-4C2001 Full HD 2.0M', '1030000', '4', '10', '', 'camera-kbvision-KH-4C2001.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2001-full-hd-2-0m');
INSERT INTO `product` VALUES ('413', '34', 'Camera Kbvision KH-4C2002 Full HD 2.0M', '990000', '4', '10', '', 'camera-kbvision-KH-4C2002.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2002-full-hd-2-0m');
INSERT INTO `product` VALUES ('414', '34', 'Camera Dahua Full HD HAC-HFW1200SP', '950000', '4', '10', '', 'DH-HAC-HFW2220SN-0360B-01.jpg', 'http://fptcamera.vn/camera-dahua-full-hd-hac-hfw1200sp');
INSERT INTO `product` VALUES ('415', '34', 'Camera HDPRO HDP-2300CB ngoài trời Full HD', '1120000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2300CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2300cb-ngoai-troi-full-hd');
INSERT INTO `product` VALUES ('416', '34', 'Camera HDPRO HDP-2200CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2200CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2200ca-full-hd');
INSERT INTO `product` VALUES ('417', '34', 'Camera HDPRO HDP-2100CB Full HD', '790000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100cb-full-hd');
INSERT INTO `product` VALUES ('418', '34', 'Camera HDPRO HDP-2100CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100ca-full-hd');
INSERT INTO `product` VALUES ('419', '34', 'Camera HDPRO HDP-1100CB CVI trong nhà', '650000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1100cb-cvi-trong-nha');
INSERT INTO `product` VALUES ('420', '34', 'Camera HDPRO HDP-1200CB CVI 720P', '550000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1200CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1200cb-cvi-720p');
INSERT INTO `product` VALUES ('421', '34', 'Camera HDPRO CVI HDP-1100CA', '500000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CA-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-cvi-hdp-1100ca');
INSERT INTO `product` VALUES ('422', '34', 'Camera Panasonic K-EW114L06AE', '4000000', '4', '10', '', 'camera-panasonic-K-EW114L06AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ew114l06ae');
INSERT INTO `product` VALUES ('423', '34', 'Camera Panasonic ngoài trời K-EW114L03AE', '4000000', '4', '10', '', 'camera-panasonic-K-EW114L03AE.jpg', 'http://fptcamera.vn/camera-panasonic-ngoai-troi-k-ew114l03ae');
INSERT INTO `product` VALUES ('424', '34', 'Camera Panasonic K-EF134L01E', '6000000', '4', '10', '', 'camera-panasonic-K-EF134L01E.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l01e');
INSERT INTO `product` VALUES ('425', '34', 'Camera Panasonic K-EF134L06AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L06AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l06ae');
INSERT INTO `product` VALUES ('426', '34', 'Camera panasonic K-EF134L03AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L03AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l03ae');
INSERT INTO `product` VALUES ('427', '34', 'Camera Panasonic K-EF134L02AE', '4000000', '4', '10', '', 'camera-panasonic-K-EF134L02AE.jpg', 'http://fptcamera.vn/camera-panasonic-k-ef134l02ae');
INSERT INTO `product` VALUES ('428', '34', 'Camera Panasonic CV-CPW101L', '2500000', '4', '10', '', 'lap-dat-camera-panasonic-_CV-CPW101L.jpg', 'http://fptcamera.vn/camera-panasonic-cv-cpw101l');
INSERT INTO `product` VALUES ('429', '34', 'Camera Panasonic Dome CV-CFW101L', '2500000', '4', '10', '', 'lap-dat-camera-panasonic-CV-CFW101L.jpg', 'http://fptcamera.vn/camera-panasonic-dome-cv-cfw101l');
INSERT INTO `product` VALUES ('430', '34', 'Camera Panasonic ngoài trời CV-CPW103L', '1500000', '4', '10', '', 'lap-dat-camera-panasonic-CV-CPW103L.jpg', 'http://fptcamera.vn/camera-panasonic-ngoai-troi-cv-cpw103l');
INSERT INTO `product` VALUES ('431', '34', 'Camera Panasonic CV-CFN103L', '1100000', '4', '10', '', 'lap-dat-camera-panasonic-CV-CFN103L.jpg', 'http://fptcamera.vn/camera-panasonic-cv-cfn103l');
INSERT INTO `product` VALUES ('432', '34', 'Lắp đặt camera ngoài trời BEN-CVI 3480BM', '1900000', '4', '10', '', 'Lắp-đặt-camera-BENCO-BEN-CVI_3480BM-nhìn-80-mét.jpg', 'http://fptcamera.vn/lap-dat-camera-ngoai-troi-ben-cvi-3480bm');
INSERT INTO `product` VALUES ('433', '34', 'Lắp đặt camera Benco Siêu nét BEN-CVI 3430BM', '1800000', '4', '10', '', 'camera-full-hd-benco-BEN-CVI_3430BM.jpg', 'http://fptcamera.vn/lap-dat-camera-benco-sieu-net-ben-cvi-3430bm');
INSERT INTO `product` VALUES ('434', '34', 'Lắp đặt camera BENCO BEN-CVI 3430DM siêu nét', '1800000', '4', '10', '', 'camera-benco-BEN-CVI_3430DM.jpg', 'http://fptcamera.vn/lap-dat-camera-benco-ben-cvi-3430dm-sieu-net');
INSERT INTO `product` VALUES ('435', '35', 'Camera KCE HD-SDI Full HD KCE-SDTI650', '3200000', '4', '10', '', 'camera-HD-SDI-han-quoc-KCE-SDTI650.jpg', 'http://fptcamera.vn/camera-kce-hd-sdi-full-hd-kce-sdti650');
INSERT INTO `product` VALUES ('436', '36', 'Camera Hikvision DS-2CC52D9T-AVPIT3ZE', '4400000', '4', '10', '', 'camera-hikvision-DS-2CC52D9T-AVPIT3ZE.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc52d9t-avpit3ze');
INSERT INTO `product` VALUES ('437', '36', 'Camera Hikvision DS-2CC12D9T-AIT3ZE siêu nét', '3900000', '4', '10', '', 'camera-hikvision-DS-2CC12D9T-AIT3ZE.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc12d9t-ait3ze-sieu-net');
INSERT INTO `product` VALUES ('438', '36', 'Camera Siêu nét Hikvision DS-2CC52D9T-IT3E', '2800000', '4', '10', '', 'camera-HIKVISION-DS-2CC52D9T-IT3E.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2cc52d9t-it3e');
INSERT INTO `product` VALUES ('439', '36', 'Camera Hikvision DS-2CC12D9T-IT3E đêm có màu', '2650000', '4', '10', '', 'camera-hikvision-DS-2CC12D9T-IT3E.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc12d9t-it3e-dem-co-mau');
INSERT INTO `product` VALUES ('440', '36', 'Camera Hikvision DS-2CE16D8T-IT3Z', '2350000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it3z');
INSERT INTO `product` VALUES ('441', '36', 'Camera POC Hikvision DS-2CE56D8T-IT3E', '1500000', '4', '10', '', 'camera-poc-DS-2CE56D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce56d8t-it3e');
INSERT INTO `product` VALUES ('442', '36', 'Camera POC HIkvision DS-2CE16D8T-IT3E', '1700000', '4', '10', '', 'camera-poc-DS-2CE16D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-it3e');
INSERT INTO `product` VALUES ('443', '36', 'Camera POC Hikvision DS-2CE16D8T-ITE', '1450000', '4', '10', '', 'camera-poc-hikvision-DS-2CE16D8T-ITE.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-ite');
INSERT INTO `product` VALUES ('444', '36', 'Camera Hikvision DS-2CE16D8T-IT 2MP', '1300000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it-2mp');
INSERT INTO `product` VALUES ('445', '36', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('446', '36', 'Camera Kbvision KH-N8002 giá rẻ', '0', '4', '10', '', 'camera-kbvision-KHA-4S6020.jpg', 'http://fptcamera.vn/camera-kbvision-kh-n8002-gia-re');
INSERT INTO `product` VALUES ('447', '36', 'Camera Kbvision KHA-4S5020 hồng ngoại', '0', '4', '10', '', 'camera-kbvision-KHA-4S50201.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s5020-hong-ngoai');
INSERT INTO `product` VALUES ('448', '36', 'Camera Kbvision KHA-4S4020 siêu nét', '0', '4', '10', '', 'camera-kbvision-KHA-4S4020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s4020-sieu-net');
INSERT INTO `product` VALUES ('449', '36', 'Camera Kbvision KHA-4S2020 Dome 2.0M', '0', '4', '10', '', 'camera-kbvision-KHA-4S2020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s2020-dome-2-0m');
INSERT INTO `product` VALUES ('450', '36', 'Camera Kbvision KHA-4S1020 thân 1080P', '0', '4', '10', '', 'camera-kbvision-KHA-4S1020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s1020-than-1080p');
INSERT INTO `product` VALUES ('451', '36', 'Camera Kbvision KH-4C2006 Dome 2.0M', '2100000', '4', '10', '', 'camera-kbvision-KH-4C2006.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2006-dome-2-0m');
INSERT INTO `product` VALUES ('452', '36', 'Camera Kbvision KH-4C2003 2M hồng ngoại 30m', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2005.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2003-2m-hong-ngoai-30m');
INSERT INTO `product` VALUES ('453', '36', 'Camera Kbvision KH-4C2004 Dome 2.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2004_(2).jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2004-dome-2-0m');
INSERT INTO `product` VALUES ('454', '36', 'Camera kbvision KH-4C2001 Full HD 2.0M', '1030000', '4', '10', '', 'camera-kbvision-KH-4C2001.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2001-full-hd-2-0m');
INSERT INTO `product` VALUES ('455', '36', 'Camera Kbvision KH-4C2002 Full HD 2.0M', '990000', '4', '10', '', 'camera-kbvision-KH-4C2002.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2002-full-hd-2-0m');
INSERT INTO `product` VALUES ('456', '36', 'Camera Hikvision DS-2CE16F7T-IT5 xa 80 mét', '1838000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE16F7T-IT5.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16f7t-it5-xa-80-met');
INSERT INTO `product` VALUES ('457', '36', 'Camera Hikvision DS-2CE16F7T-IT3 3.0 MP', '1700000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE16F7T-IT3.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16f7t-it3-3-0-mp');
INSERT INTO `product` VALUES ('458', '36', 'Camera Hikvision DS-2CE56F7T-IT3 3MP', '1539000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE56F7T-IT3.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56f7t-it3-3mp');
INSERT INTO `product` VALUES ('459', '36', 'Camera HIKVISION DS-2CE16F7T-IT 3MP', '1600000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE16F7T-IT.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16f7t-it-3mp');
INSERT INTO `product` VALUES ('460', '36', 'Camera HIKVISION DS-2CE56H1T-IT3 siêu nét 5MP', '1450000', '4', '10', '', 'lap-dat-camera-hikvision-DS-2CE56H1T-IT31.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56h1t-it3-sieu-net-5mp');
INSERT INTO `product` VALUES ('461', '36', 'Camera HIKVISION ngoài trời DS-2CE16H1T-IT3 siêu nét 5MP', '1600000', '4', '10', '', 'Camera_HIKVISION_ngoài_trời_DS-2CE16H1T-IT3_siêu_nét_5MP.jpg', 'http://fptcamera.vn/camera-hikvision-ngoai-troi-ds-2ce16h1t-it3-sieu-net-5mp');
INSERT INTO `product` VALUES ('462', '36', 'Camera HIKVISION DS-2CE56H1T-ITM siêu nét 5MP', '1350000', '4', '10', '', 'Camera_HIKVISION_DS-2CE56H1T-ITM_siêu_nét_5MP.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56h1t-itm-sieu-net-5mp');
INSERT INTO `product` VALUES ('463', '36', 'Camera HIKVISION DS-2CE56F7T-ITM Siêu nét 3MP', '1600000', '4', '10', '', 'camera-HD-TVI-full-hd-hikvision-DS-2CE56F1T-ITM1.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56f7t-itm-sieu-net-3mp');
INSERT INTO `product` VALUES ('464', '36', 'Camera HIKVISION DS-2CE56F1T-IT3 siêu nét 3MP', '1100000', '4', '10', '', 'camera-HD-TVI-full-hd-hikvision-DS-2CE56F1T-IT3.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56f1t-it3-sieu-net-3mp');
INSERT INTO `product` VALUES ('465', '36', 'Camera HIKVISION DS-2CE16F1T-IT5 siêu nét 3MP', '1300000', '4', '10', '', 'camera-HD-TVI-full-hd-hikvision-DS-2CE16F1T-IT5.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16f1t-it5-sieu-net-3mp');
INSERT INTO `product` VALUES ('466', '36', 'Camera HIKVISION DS-2CE16F1T-IT3 siêu nét 3MP', '1200000', '4', '10', '', 'camera-HD-TVI-full-hd-hikvision-DS-2CE16F1T-IT3.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16f1t-it3-sieu-net-3mp');
INSERT INTO `product` VALUES ('467', '36', 'Camera HIKVISION DS-2CE56F1T-ITM siêu nét 3.0Mp', '970000', '4', '10', '', 'camera-HD-TVI-full-hd-hikvision-DS-2CE56F1T-ITM.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56f1t-itm-sieu-net-3-0mp');
INSERT INTO `product` VALUES ('468', '38', 'Camera IP Pan/Til Wifi HIKVISION DS-2CD2Q10', '2500000', '4', '10', '', 'camera-pan-tit-hikvision-DS-2CD2Q101.jpg', 'http://fptcamera.vn/camera-ip-pan-til-wifi-hikvision-ds-2cd2q10');
INSERT INTO `product` VALUES ('469', '38', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X628', '3400000', '4', '10', '', 'may-cham-cong-van-tay-RONALD-JACK-X628.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x628');
INSERT INTO `product` VALUES ('470', '38', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X938-C', '3550000', '4', '10', '', 'may-cham-cong-RONALD-JACK-X-938-C.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x938-c');
INSERT INTO `product` VALUES ('471', '38', 'Camera IP Bullet Hikvision DS-2CD2T22WD-I8', '3050000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T22WD-I8.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2t22wd-i8');
INSERT INTO `product` VALUES ('472', '38', 'Camera IP HIKVISION DS-2CD2055FWD-I', '3700000', '4', '10', '', 'Camera_IP_HIKVISION_DS-2CD2055FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2055fwd-i');
INSERT INTO `product` VALUES ('473', '38', 'Camera IP HIKVISION DS-2CD2025FHWD-I', '3339000', '4', '10', '', 'camera-IP-HIKVISION-FULL-HD-DS-2CD2025FHWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2025fhwd-i');
INSERT INTO `product` VALUES ('474', '38', 'Camera BENCO Full HD BEN-1102AHD2.4', '1390000', '4', '10', '', 'camera-benco-full-hd-BEN-1102AHD2.4_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-ben-1102ahd2-4');
INSERT INTO `product` VALUES ('475', '38', 'Camera IP BENCO F1-IP 1.0 Megapixel', '1550000', '4', '10', '', 'camera-ip-benco-F1-IP_1.0_.jpg', 'http://fptcamera.vn/camera-ip-benco-f1-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('476', '38', 'Camera IP BENCO D1-IP 1.0 Megapixel', '1150000', '4', '10', '', 'camera-ip-benco-D1-IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-benco-d1-ip-1-0-megapixel');
INSERT INTO `product` VALUES ('477', '38', 'Camera IP Wifi HIKVISION DS-2CD2410F-IW', '1646000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW2.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2410f-iw');
INSERT INTO `product` VALUES ('478', '38', 'Camera BENCO Full HD F1-AHD2.0 Megapixel', '1590000', '4', '10', '', 'camera-full-hd-benco-F1-AHD2.0_.jpg', 'http://fptcamera.vn/camera-benco-full-hd-f1-ahd2-0-megapixel');
INSERT INTO `product` VALUES ('479', '38', 'Camera Quan Sát BENCO F1-AHD1.0', '1350000', '4', '10', '', 'camera-ahd-benco-F1-AHD1.0_.jpg', 'http://fptcamera.vn/camera-quan-sat-benco-f1-ahd1-0');
INSERT INTO `product` VALUES ('480', '38', 'Camera Quan Sát BENCO T3-AHD1.0', '1290000', '4', '10', '', 'camera-ahd-benco-T3-AHD1.0_.jpg', 'http://fptcamera.vn/camera-quan-sat-benco-t3-ahd1-0');
INSERT INTO `product` VALUES ('481', '38', 'Camera AHD BENCO Ngoài Trời T2-AHD1.0', '1050000', '4', '10', '', 'camera-ahd-benco-T2-AHD1.0-_.jpg', 'http://fptcamera.vn/camera-ahd-benco-ngoai-troi-t2-ahd1-0');
INSERT INTO `product` VALUES ('482', '38', 'Camera IP Wifi DAHUA IPC-KW12WP', '2400000', '4', '10', '', 'camera-ip-wifi-dahua-IPC-KW12WP.jpg', 'http://fptcamera.vn/camera-ip-wifi-dahua-ipc-kw12wp');
INSERT INTO `product` VALUES ('483', '38', 'Camera Quay Quét Zoom DAHUA SD5923E-H', '10500000', '4', '10', '', 'camera-speed-dome-dahua-SD5923E-H.jpg', 'http://fptcamera.vn/camera-quay-quet-zoom-dahua-sd5923e-h');
INSERT INTO `product` VALUES ('484', '38', 'Camera Giám Sát DAHUA CA-FW181DP', '1250000', '4', '10', '', 'camera-analog-dahua-CA-FW181DP.jpg', 'http://fptcamera.vn/camera-giam-sat-dahua-ca-fw181dp');
INSERT INTO `product` VALUES ('485', '38', 'Camera Giám Sát DAHUA CA-FW181GP', '1100000', '4', '10', '', 'camera-analog-dahua-CA-FW181GP.jpg', 'http://fptcamera.vn/camera-giam-sat-dahua-ca-fw181gp');
INSERT INTO `product` VALUES ('486', '38', 'Camera Quan Sát DAHUA CA-DW181EP', '950000', '4', '10', '', 'camera-analog-dahua-CA-DW181EP.JPG', 'http://fptcamera.vn/camera-quan-sat-dahua-ca-dw181ep');
INSERT INTO `product` VALUES ('487', '38', 'Camera Quan Sát DAHUA CA-DW181HP-IR', '900000', '4', '10', '', 'camera-analog-dahua-CA-DW181HP-IR1.jpg', 'http://fptcamera.vn/camera-quan-sat-dahua-ca-dw181hp-ir');
INSERT INTO `product` VALUES ('488', '38', 'Camera IP SPYEYE SP-36IP 1.3', '2100000', '4', '10', '', 'camera-ip-spyeye-SP-36_IP_1.3_.jpg', 'http://fptcamera.vn/camera-ip-spyeye-sp-36ip-1-3');
INSERT INTO `product` VALUES ('489', '38', 'Camera AHD Full HD SPYEYE SP-702AHD 2.0', '1040000', '4', '10', '', 'camera-ahd-spyeye-full-hd-SP-702AHD-2.0-megapixel_.jpg', 'http://fptcamera.vn/camera-ahd-full-hd-spyeye-sp-702ahd-2-0');
INSERT INTO `product` VALUES ('490', '38', 'Camera AHD SPYEYE SP-405AHD 1.5', '1055000', '4', '10', '', 'camera-ahd-spyeye-SP-405AHD-1.5_.jpg', 'http://fptcamera.vn/camera-ahd-spyeye-sp-405ahd-1-5');
INSERT INTO `product` VALUES ('491', '38', 'Camera AHD SPYEYE SP-702AHD 1.5', '805000', '4', '10', '', 'camera-ahd-spyeye-SP-702AHD-1.5_.jpg', 'http://fptcamera.vn/camera-ahd-spyeye-sp-702ahd-1-5');
INSERT INTO `product` VALUES ('492', '38', 'Camera Ngụy Trang Gương Cầu QUESTEK QTX-1611AHD', '800000', '4', '10', '', 'camera-nguy-trang-guong-cau-questek-QTX-1611AHD.jpg', 'http://fptcamera.vn/camera-nguy-trang-guong-cau-questek-qtx-1611ahd');
INSERT INTO `product` VALUES ('493', '38', 'Camera Mini Ngụy Trang QUESTEK QTX 510AHD', '990000', '4', '10', '', 'camera-mini-nguy-trang-questek-QTX-510AHD.jpg', 'http://fptcamera.vn/camera-mini-nguy-trang-questek-qtx-510ahd');
INSERT INTO `product` VALUES ('494', '38', 'Camera IP KCE Full HD KCE-CBTN2048D', '6000000', '4', '10', '', 'camera-ip-han-quoc-KCE-CBTN2048D.jpg', 'http://fptcamera.vn/camera-ip-kce-full-hd-kce-cbtn2048d');
INSERT INTO `product` VALUES ('495', '38', 'Camera IP KCE Full HD KCE-CNDTN2030D', '5000000', '4', '10', '', 'camera-ip-han-quoc-KCE-CNDTN2030D.jpg', 'http://fptcamera.vn/camera-ip-kce-full-hd-kce-cndtn2030d');
INSERT INTO `product` VALUES ('496', '38', 'Camera IP KCE Hàn Quốc KCE-SDTN2030', '3800000', '4', '10', '', 'camera-ip-han-quoc-KCE-SDTN2030.jpg', 'http://fptcamera.vn/camera-ip-kce-han-quoc-kce-sdtn2030');
INSERT INTO `product` VALUES ('497', '38', 'Camera KCE HD-SDI Full HD KCE-SDTI650', '3200000', '4', '10', '', 'camera-HD-SDI-han-quoc-KCE-SDTI650.jpg', 'http://fptcamera.vn/camera-kce-hd-sdi-full-hd-kce-sdti650');
INSERT INTO `product` VALUES ('498', '38', 'Camera Speed Dome KCE KCE-SPD120P', '12500000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120P.jpg', 'http://fptcamera.vn/camera-speed-dome-kce-kce-spd120p');
INSERT INTO `product` VALUES ('499', '38', 'Camera Hồng Ngoại KCE KCE-SBTI1250D', '5500000', '4', '10', '', 'camera-han-quoc-KCE-SBTI1250D.jpg', 'http://fptcamera.vn/camera-hong-ngoai-kce-kce-sbti1250d');
INSERT INTO `product` VALUES ('500', '39', 'Camera Wifi  IPC – 1310CHW', '1699000', '4', '10', '', 'camera-wifi-benco-BEN-IPC1310CHW.jpg', 'http://fptcamera.vn/camera-wifi-ipc-1310chw');
INSERT INTO `product` VALUES ('501', '39', 'Camera IP Không dây HDPRO HDP-888IP1.0', '1050000', '4', '10', '', 'camera-ip-wifi-HDP-888IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-khong-day-hdpro-hdp-888ip1-0');
INSERT INTO `product` VALUES ('502', '39', 'Camera IP Pan/Til Wifi HIKVISION DS-2CD2Q10', '2500000', '4', '10', '', 'camera-pan-tit-hikvision-DS-2CD2Q101.jpg', 'http://fptcamera.vn/camera-ip-pan-til-wifi-hikvision-ds-2cd2q10');
INSERT INTO `product` VALUES ('503', '39', 'Camera IP Wifi HIKVISION DS-2CD2420F-IW 2.0MB', '1744000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW1.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2420f-iw-2-0mb');
INSERT INTO `product` VALUES ('504', '39', 'Máy Chấm Công Vân Tay WISE EYE WSE-268', '2600000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-WSE-268.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-wise-eye-wse-268');
INSERT INTO `product` VALUES ('505', '39', 'Máy Chấm Công Vân Tay + Thẻ WISE EYE 808', '3450000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-808.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-wise-eye-808');
INSERT INTO `product` VALUES ('506', '39', 'Camera IP Wifi Không Dây VANTECH VT-6300A', '1250000', '4', '10', '', 'camera-ip-wifi-khong-day-vantech-vt-6300A.jpg', 'http://fptcamera.vn/camera-ip-wifi-khong-day-vantech-vt-6300a');
INSERT INTO `product` VALUES ('507', '39', 'Camera IP Wifi Hikvision DS-2CD2442FWD-IW', '2500000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2442FWD-IW.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2442fwd-iw');
INSERT INTO `product` VALUES ('508', '39', 'Camera IP Wifi HIKVISION DS-2CD2410F-IW', '1646000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW2.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2410f-iw');
INSERT INTO `product` VALUES ('509', '39', 'Camera IP Wifi BENCO BEN-910IP', '1990000', '4', '10', '', 'camera-ip-wifi-benco-ben-910ip.jpg', 'http://fptcamera.vn/camera-ip-wifi-benco-ben-910ip');
INSERT INTO `product` VALUES ('510', '39', 'Camera Smart IP Wifi VANTECH VT-6200HV', '1890000', '4', '10', '', 'camera-ip-wifi-khong-day-vantech-VT-6200HV.jpg', 'http://fptcamera.vn/camera-smart-ip-wifi-vantech-vt-6200hv');
INSERT INTO `product` VALUES ('511', '39', 'Camera IP Wifi DAHUA IPC-KW12WP', '2400000', '4', '10', '', 'camera-ip-wifi-dahua-IPC-KW12WP.jpg', 'http://fptcamera.vn/camera-ip-wifi-dahua-ipc-kw12wp');
INSERT INTO `product` VALUES ('512', '40', 'Lắp đặt camera wifi Dahua DH-IPC-C15P', '1350000', '4', '10', '', 'camera-ip-wifi-dahua-ipc-c15.png', 'http://fptcamera.vn/lap-dat-camera-wifi-dahua-dh-ipc-c15p');
INSERT INTO `product` VALUES ('513', '40', 'Camera IP Không dây HDPRO HDP-888IP1.0', '1050000', '4', '10', '', 'camera-ip-wifi-HDP-888IP1.0_.jpg', 'http://fptcamera.vn/camera-ip-khong-day-hdpro-hdp-888ip1-0');
INSERT INTO `product` VALUES ('514', '40', 'Camera IP Pan/Til Wifi HIKVISION DS-2CD2Q10', '2500000', '4', '10', '', 'camera-pan-tit-hikvision-DS-2CD2Q101.jpg', 'http://fptcamera.vn/camera-ip-pan-til-wifi-hikvision-ds-2cd2q10');
INSERT INTO `product` VALUES ('515', '40', 'Camera IP Wifi HIKVISION DS-2CD2420F-IW 2.0MB', '1744000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW1.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2420f-iw-2-0mb');
INSERT INTO `product` VALUES ('516', '40', 'Camera IP Wifi Không Dây VANTECH VT-6300A', '1250000', '4', '10', '', 'camera-ip-wifi-khong-day-vantech-vt-6300A.jpg', 'http://fptcamera.vn/camera-ip-wifi-khong-day-vantech-vt-6300a');
INSERT INTO `product` VALUES ('517', '40', 'Camera IP Wifi Hikvision DS-2CD2442FWD-IW', '2500000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2442FWD-IW.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2442fwd-iw');
INSERT INTO `product` VALUES ('518', '40', 'Camera IP wifi Kbvision KH-N3002W', '2600000', '4', '10', '', 'camera-ip-kbvision-KH-N3002W.jpg', 'http://fptcamera.vn/camera-ip-wifi-kbvision-kh-n3002w');
INSERT INTO `product` VALUES ('519', '40', 'Camera IP Box Samsung SNB-7004P WiseNetⅢ3M', '8900000', '4', '10', '', 'Network-Camera-SNB-7004P.jpg', 'http://fptcamera.vn/camera-ip-box-samsung-snb-7004p-wisenet-3m');
INSERT INTO `product` VALUES ('520', '40', 'Camera IP Samsung SNO-L6013RP Wisenet Lite', '2550000', '4', '10', '', 'Camera_IP_Samsung_SNO-L6013RP_Wisenet_Lite.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-l6013rp-wisenet-lite');
INSERT INTO `product` VALUES ('521', '40', 'Lắp camera wifi ngoài trời DH-IPC-HFW1120SP-W', '1900000', '4', '10', '', 'lap-dat-camera-ip-wifi-ngoai-troi-DH-IPC-HFW1120SP-W.jpg', 'http://fptcamera.vn/lap-camera-wifi-ngoai-troi-dh-ipc-hfw1120sp-w');
INSERT INTO `product` VALUES ('522', '40', 'Camera IP Wifi HIKVISION DS-2CD2410F-IW', '1646000', '4', '10', '', 'camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW2.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2410f-iw');
INSERT INTO `product` VALUES ('523', '40', 'Camera IP Wifi BENCO BEN-910IP', '1990000', '4', '10', '', 'camera-ip-wifi-benco-ben-910ip.jpg', 'http://fptcamera.vn/camera-ip-wifi-benco-ben-910ip');
INSERT INTO `product` VALUES ('524', '40', 'Camera IP Wifi DAHUA IPC-KW12WP', '2400000', '4', '10', '', 'camera-ip-wifi-dahua-IPC-KW12WP.jpg', 'http://fptcamera.vn/camera-ip-wifi-dahua-ipc-kw12wp');
INSERT INTO `product` VALUES ('525', '41', 'Camera Quay Quét PTZ DAHUA SD49225I-HC', '7750000', '4', '10', '', 'camera-quay-quet-SD49225I-HC.jpg', 'http://fptcamera.vn/camera-quay-quet-ptz-dahua-sd49225i-hc');
INSERT INTO `product` VALUES ('526', '41', 'Camera PTZ Quay Quét BENCO BEN-300AHD2.0', '14070000', '4', '10', '', 'camera-BEN-300AHD2.0_.png', 'http://fptcamera.vn/camera-ptz-quay-quet-benco-ben-300ahd2-0');
INSERT INTO `product` VALUES ('527', '41', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('528', '41', 'Camera IP PTZ Samsung SNP-6320HP', '41900000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6320HP.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-6320hp');
INSERT INTO `product` VALUES ('529', '41', 'Camera IP PTZ Samsung SNP-6321HP', '41000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6321HP.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-6321hp');
INSERT INTO `product` VALUES ('530', '41', 'Camera IP PTZ Samsung SNP-5321P', '29000000', '4', '10', '', 'Camera_IP_PTZ_Samsung_SNP-5321P.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-5321p');
INSERT INTO `product` VALUES ('531', '41', 'Camera PTZ Samsung SNP-6321P quay quét', '37000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6321P.jpg', 'http://fptcamera.vn/camera-ptz-samsung-snp-6321p-quay-quet');
INSERT INTO `product` VALUES ('532', '41', 'Camera PTZ Samsung SNP-6320P WiseNetⅢPlus 2M', '40000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6320P.jpg', 'http://fptcamera.vn/camera-ptz-samsung-snp-6320p-wisenet-plus-2m');
INSERT INTO `product` VALUES ('533', '41', 'Camera Panasonic CV-CPW101L', '2500000', '4', '10', '', 'lap-dat-camera-panasonic-_CV-CPW101L.jpg', 'http://fptcamera.vn/camera-panasonic-cv-cpw101l');
INSERT INTO `product` VALUES ('534', '41', 'Camera IP Quay Quét HDB4100F-PT', '3320000', '4', '10', '', 'camera-ptz-dahua-HDB4100F-PT.jpg', 'http://fptcamera.vn/camera-ip-quay-quet-hdb4100f-pt');
INSERT INTO `product` VALUES ('535', '41', 'Camera IP PTZ DAHUA SD49225T-HN', '9300000', '4', '10', '', 'camera-quay-quet-IP-SD49225T-HN.jpg', 'http://fptcamera.vn/camera-ip-ptz-dahua-sd49225t-hn');
INSERT INTO `product` VALUES ('536', '41', 'Camera quay quét SD42112I-HC', '5000000', '4', '10', '', 'camera-dahua-quay-quet-SD42212T-HN.jpg', 'http://fptcamera.vn/camera-quay-quet-sd42112i-hc');
INSERT INTO `product` VALUES ('537', '41', 'Camera PTZ DAHUA SD6C131I-HC', '8800000', '4', '10', '', 'camera-ptz-dahua-SD6C131I-HC.jpg', 'http://fptcamera.vn/camera-ptz-dahua-sd6c131i-hc');
INSERT INTO `product` VALUES ('538', '41', 'Camera Quay Quét Zoom BENCO CVI-1212PT', '8600000', '4', '10', '', 'CVI-1212PT.png', 'http://fptcamera.vn/camera-quay-quet-zoom-benco-cvi-1212pt');
INSERT INTO `product` VALUES ('539', '41', 'Camera Speed Dome HD-TVI HIKVISION DS-2AE5223TI -A', '15500000', '4', '10', '', 'camera-speed-dome-HD-TVI-hikvision-DS-2AE5223TI_-A.jpg', 'http://fptcamera.vn/camera-speed-dome-hd-tvi-hikvision-ds-2ae5223ti-a');
INSERT INTO `product` VALUES ('540', '41', 'Camera Quay Quét Zoom DAHUA SD5923E-H', '10500000', '4', '10', '', 'camera-speed-dome-dahua-SD5923E-H.jpg', 'http://fptcamera.vn/camera-quay-quet-zoom-dahua-sd5923e-h');
INSERT INTO `product` VALUES ('541', '41', 'Camera KCE Quay-Zoom KCE-SPD120M', '15000000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120M.jpg', 'http://fptcamera.vn/camera-kce-quay-zoom-kce-spd120m');
INSERT INTO `product` VALUES ('542', '41', 'Camera Speed Dome KCE KCE-SPD120P', '12500000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120P.jpg', 'http://fptcamera.vn/camera-speed-dome-kce-kce-spd120p');
INSERT INTO `product` VALUES ('543', '41', 'Camera Speed Dome HD-TVI HIKVISION DS-2AE5123TI- A', '11050000', '4', '10', '', 'camera-speed-dome-HD-TVI-hikvision-DS-2AE5123TI-A1.jpg', 'http://fptcamera.vn/camera-speed-dome-hd-tvi-hikvision-ds-2ae5123ti-a');
INSERT INTO `product` VALUES ('544', '41', 'Camera Speed Dome HIKVISION DS-2AE7164-A', '10050000', '4', '10', '', 'camera-speed-dome-hikvision-DS-2AE7164-A1.jpg', 'http://fptcamera.vn/camera-speed-dome-hikvision-ds-2ae7164-a');
INSERT INTO `product` VALUES ('545', '41', 'Camera Zoom QUESTEK WIN-622AHD', '4200000', '4', '10', '', 'camera-zoom-questek-WIN-622AHD.jpg', 'http://fptcamera.vn/camera-zoom-questek-win-622ahd');
INSERT INTO `product` VALUES ('546', '41', 'Camera IP Quay Quét VANTECH VP-4451', '15000000', '4', '10', '', 'camera-ip-zoom-quay-quet-vantech-VP-4451.jpg', 'http://fptcamera.vn/camera-ip-quay-quet-vantech-vp-4451');
INSERT INTO `product` VALUES ('547', '41', 'Camera PTZ IP Quay Quét BENCO BEN-300AHD', '10500000', '4', '10', '', 'camera-ptz-BEN-300AHD.png', 'http://fptcamera.vn/camera-ptz-ip-quay-quet-benco-ben-300ahd');
INSERT INTO `product` VALUES ('548', '41', 'Camera PTZ IP Quay Quét BENCO BEN-300IP', '16000000', '4', '10', '', 'camera-ptz-ip-BEN-300IP.png', 'http://fptcamera.vn/camera-ptz-ip-quay-quet-benco-ben-300ip');
INSERT INTO `product` VALUES ('549', '41', 'Camera IP PTZ Quay Quét Dahua SD6C120S-HN', '18000000', '4', '10', '', 'camera-ip-PTZ-quay-quet-dahua-SD6C120S-HN.jpg', 'http://fptcamera.vn/camera-ip-ptz-quay-quet-dahua-sd6c120s-hn');
INSERT INTO `product` VALUES ('550', '41', 'Camera PTZ Quay Quét DAHUA SD6C120I-HC', '15000000', '4', '10', '', 'camera-quay-quet-HDCVI-dahua-SD6C120I-HC.jpg', 'http://fptcamera.vn/camera-ptz-quay-quet-dahua-sd6c120i-hc');
INSERT INTO `product` VALUES ('551', '41', 'Camera Quay Quét PTZ BENCO BEN-100P', '6599000', '4', '10', '', 'Camera-PTZ-BEN-100P.jpg', 'http://fptcamera.vn/camera-quay-quet-ptz-benco-ben-100p');
INSERT INTO `product` VALUES ('552', '41', 'Camera Quay Quét BENCO BEN-300IR', '9200000', '4', '10', '', 'camera-giam-satbenco-300IR.jpg', 'http://fptcamera.vn/camera-quay-quet-benco-ben-300ir');
INSERT INTO `product` VALUES ('553', '42', 'Camera Quay Quét PTZ DAHUA SD49225I-HC', '7750000', '4', '10', '', 'camera-quay-quet-SD49225I-HC.jpg', 'http://fptcamera.vn/camera-quay-quet-ptz-dahua-sd49225i-hc');
INSERT INTO `product` VALUES ('554', '42', 'Camera PTZ Quay Quét BENCO BEN-300AHD2.0', '14070000', '4', '10', '', 'camera-BEN-300AHD2.0_.png', 'http://fptcamera.vn/camera-ptz-quay-quet-benco-ben-300ahd2-0');
INSERT INTO `product` VALUES ('555', '42', 'Camera IP Pan/Til Wifi HIKVISION DS-2CD2Q10', '2500000', '4', '10', '', 'camera-pan-tit-hikvision-DS-2CD2Q101.jpg', 'http://fptcamera.vn/camera-ip-pan-til-wifi-hikvision-ds-2cd2q10');
INSERT INTO `product` VALUES ('556', '42', 'Camera IP Wifi Hikvision DS-2CD2442FWD-IW', '2500000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2442FWD-IW.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2442fwd-iw');
INSERT INTO `product` VALUES ('557', '42', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('558', '42', 'Camera PTZ Samsung SNP-6320P WiseNetⅢPlus 2M', '40000000', '4', '10', '', 'lap-dat-camera-PTZ-samsung-SNP-6320P.jpg', 'http://fptcamera.vn/camera-ptz-samsung-snp-6320p-wisenet-plus-2m');
INSERT INTO `product` VALUES ('559', '42', 'Camera IP Box Samsung SNB-7004P WiseNetⅢ3M', '8900000', '4', '10', '', 'Network-Camera-SNB-7004P.jpg', 'http://fptcamera.vn/camera-ip-box-samsung-snb-7004p-wisenet-3m');
INSERT INTO `product` VALUES ('560', '42', 'Camera IP Samsung SNO-L6013RP Wisenet Lite', '2550000', '4', '10', '', 'Camera_IP_Samsung_SNO-L6013RP_Wisenet_Lite.jpg', 'http://fptcamera.vn/camera-ip-samsung-sno-l6013rp-wisenet-lite');
INSERT INTO `product` VALUES ('561', '42', 'Lắp camera wifi ngoài trời DH-IPC-HFW1120SP-W', '1900000', '4', '10', '', 'lap-dat-camera-ip-wifi-ngoai-troi-DH-IPC-HFW1120SP-W.jpg', 'http://fptcamera.vn/lap-camera-wifi-ngoai-troi-dh-ipc-hfw1120sp-w');
INSERT INTO `product` VALUES ('562', '42', 'Camera IP Quay Quét HDB4100F-PT', '3320000', '4', '10', '', 'camera-ptz-dahua-HDB4100F-PT.jpg', 'http://fptcamera.vn/camera-ip-quay-quet-hdb4100f-pt');
INSERT INTO `product` VALUES ('563', '42', 'Camera IP PTZ DAHUA SD49225T-HN', '9300000', '4', '10', '', 'camera-quay-quet-IP-SD49225T-HN.jpg', 'http://fptcamera.vn/camera-ip-ptz-dahua-sd49225t-hn');
INSERT INTO `product` VALUES ('564', '42', 'Camera quay quét SD42112I-HC', '5000000', '4', '10', '', 'camera-dahua-quay-quet-SD42212T-HN.jpg', 'http://fptcamera.vn/camera-quay-quet-sd42112i-hc');
INSERT INTO `product` VALUES ('565', '42', 'Camera PTZ DAHUA SD6C131I-HC', '8800000', '4', '10', '', 'camera-ptz-dahua-SD6C131I-HC.jpg', 'http://fptcamera.vn/camera-ptz-dahua-sd6c131i-hc');
INSERT INTO `product` VALUES ('566', '42', 'Camera Quay Quét Zoom BENCO CVI-1212PT', '8600000', '4', '10', '', 'CVI-1212PT.png', 'http://fptcamera.vn/camera-quay-quet-zoom-benco-cvi-1212pt');
INSERT INTO `product` VALUES ('567', '42', 'Camera Dự Án HM_BLC101IPZ10', '9650000', '4', '10', '', 'camera-HM_BLC101IPZ10.jpg', 'http://fptcamera.vn/camera-du-an-hm-blc101ipz10');
INSERT INTO `product` VALUES ('568', '42', 'Camera Speed Dome HD-TVI HIKVISION DS-2AE5223TI -A', '15500000', '4', '10', '', 'camera-speed-dome-HD-TVI-hikvision-DS-2AE5223TI_-A.jpg', 'http://fptcamera.vn/camera-speed-dome-hd-tvi-hikvision-ds-2ae5223ti-a');
INSERT INTO `product` VALUES ('569', '42', 'Camera IP Wifi BENCO BEN-910IP', '1990000', '4', '10', '', 'camera-ip-wifi-benco-ben-910ip.jpg', 'http://fptcamera.vn/camera-ip-wifi-benco-ben-910ip');
INSERT INTO `product` VALUES ('570', '42', 'Camera Smart IP Wifi VANTECH VT-6200HV', '1890000', '4', '10', '', 'camera-ip-wifi-khong-day-vantech-VT-6200HV.jpg', 'http://fptcamera.vn/camera-smart-ip-wifi-vantech-vt-6200hv');
INSERT INTO `product` VALUES ('571', '42', 'Camera Quay Quét Zoom DAHUA SD5923E-H', '10500000', '4', '10', '', 'camera-speed-dome-dahua-SD5923E-H.jpg', 'http://fptcamera.vn/camera-quay-quet-zoom-dahua-sd5923e-h');
INSERT INTO `product` VALUES ('572', '42', 'Camera KCE Quay-Zoom KCE-SPD120M', '15000000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120M.jpg', 'http://fptcamera.vn/camera-kce-quay-zoom-kce-spd120m');
INSERT INTO `product` VALUES ('573', '42', 'Camera Speed Dome KCE KCE-SPD120P', '12500000', '4', '10', '', 'camera-speed-dome-han-quoc-KCE-SPD120P.jpg', 'http://fptcamera.vn/camera-speed-dome-kce-kce-spd120p');
INSERT INTO `product` VALUES ('574', '42', 'Camera Speed Dome HD-TVI HIKVISION DS-2AE5123TI- A', '11050000', '4', '10', '', 'camera-speed-dome-HD-TVI-hikvision-DS-2AE5123TI-A1.jpg', 'http://fptcamera.vn/camera-speed-dome-hd-tvi-hikvision-ds-2ae5123ti-a');
INSERT INTO `product` VALUES ('575', '42', 'Camera Speed Dome HIKVISION DS-2AE7164-A', '10050000', '4', '10', '', 'camera-speed-dome-hikvision-DS-2AE7164-A1.jpg', 'http://fptcamera.vn/camera-speed-dome-hikvision-ds-2ae7164-a');
INSERT INTO `product` VALUES ('576', '42', 'Camera Speed Dome AHD QUESTEK QN 8013AHD', '9750000', '4', '10', '', 'camera-ahd-speed-dome-questek-QN-8013AHD.jpg', 'http://fptcamera.vn/camera-speed-dome-ahd-questek-qn-8013ahd');
INSERT INTO `product` VALUES ('577', '42', 'Camera IP Speed Dome VANTECH VP-4561', '22500000', '4', '10', '', 'camera-ip-zoom-quay-quet-vantech-VP-4561.jpg', 'http://fptcamera.vn/camera-ip-speed-dome-vantech-vp-4561');
INSERT INTO `product` VALUES ('578', '42', 'Camera IP Speed Dome VANTECH VP-4461', '20500000', '4', '10', '', 'camera-ip-zoom-quay-quet-vantech-VP-4461.jpg', 'http://fptcamera.vn/camera-ip-speed-dome-vantech-vp-4461');
INSERT INTO `product` VALUES ('579', '42', 'Camera IP Speed Dome VANTECH VP-4553', '10900000', '4', '10', '', 'camera-ip-zoom-quay-quet-vantech-VP-4553.jpg', 'http://fptcamera.vn/camera-ip-speed-dome-vantech-vp-4553');
INSERT INTO `product` VALUES ('580', '42', 'Camera IP Speed Dome VANTECH VP-4551', '15000000', '4', '10', '', 'camera-ip-zoom-quay-quet-vantech-VP-4551.jpg', 'http://fptcamera.vn/camera-ip-speed-dome-vantech-vp-4551');
INSERT INTO `product` VALUES ('581', '42', 'Camera IP Quay Quét VANTECH VP-4451', '15000000', '4', '10', '', 'camera-ip-zoom-quay-quet-vantech-VP-4451.jpg', 'http://fptcamera.vn/camera-ip-quay-quet-vantech-vp-4451');
INSERT INTO `product` VALUES ('582', '42', 'Camera PTZ IP Quay Quét BENCO BEN-300AHD', '10500000', '4', '10', '', 'camera-ptz-BEN-300AHD.png', 'http://fptcamera.vn/camera-ptz-ip-quay-quet-benco-ben-300ahd');
INSERT INTO `product` VALUES ('583', '42', 'Camera PTZ IP Quay Quét BENCO BEN-300IP', '16000000', '4', '10', '', 'camera-ptz-ip-BEN-300IP.png', 'http://fptcamera.vn/camera-ptz-ip-quay-quet-benco-ben-300ip');
INSERT INTO `product` VALUES ('584', '42', 'Camera IP PTZ Quay Quét Dahua SD6C120S-HN', '18000000', '4', '10', '', 'camera-ip-PTZ-quay-quet-dahua-SD6C120S-HN.jpg', 'http://fptcamera.vn/camera-ip-ptz-quay-quet-dahua-sd6c120s-hn');
INSERT INTO `product` VALUES ('585', '43', 'Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD', '1599000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd');
INSERT INTO `product` VALUES ('586', '43', 'Bộ camera quan sát ngoài trời nhìn xa 80m', '4499000', '4', '10', '', 'camera-nha-xuong-ninh-xa.jpg', 'http://fptcamera.vn/bo-camera-quan-sat-ngoai-troi-nhin-xa-80m');
INSERT INTO `product` VALUES ('587', '43', 'Camera Hikvision DS-2CC12D9T-AIT3ZE siêu nét', '3900000', '4', '10', '', 'camera-hikvision-DS-2CC12D9T-AIT3ZE.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc12d9t-ait3ze-sieu-net');
INSERT INTO `product` VALUES ('588', '43', 'Camera Hikvision DS-2CE16D8T-IT3Z', '2350000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it3z');
INSERT INTO `product` VALUES ('589', '43', 'Camera POC Hikvision DS-2CE56D8T-IT3E', '1500000', '4', '10', '', 'camera-poc-DS-2CE56D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce56d8t-it3e');
INSERT INTO `product` VALUES ('590', '43', 'Camera POC HIkvision DS-2CE16D8T-IT3E', '1700000', '4', '10', '', 'camera-poc-DS-2CE16D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-it3e');
INSERT INTO `product` VALUES ('591', '43', 'Camera Hikvision DS-2CE16D8T-IT 2MP', '1300000', '4', '10', '', 'camera-hikvision-DS-2CE16D8T-IT.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce16d8t-it-2mp');
INSERT INTO `product` VALUES ('592', '43', 'Camera IP Bullet Hikvision DS-2CD2620F-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2620F-I.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2620f-i');
INSERT INTO `product` VALUES ('593', '43', 'Camera IP Bullet Hikvision DS-2CD2T22WD-I8', '3050000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T22WD-I8.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2t22wd-i8');
INSERT INTO `product` VALUES ('594', '43', 'Camera IP POE Hikvision DS-2CD2010F-I giá rẻ', '1600000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2010F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2010f-i-gia-re');
INSERT INTO `product` VALUES ('595', '43', 'Camera IP hikvision DS-2CD1201-I5 50 Mét', '1480000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I5.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i5-50-met');
INSERT INTO `product` VALUES ('596', '43', 'Camera IP Hikvision DS-2CD1002-I Thân 1MP', '1450000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1002-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1002-i-than-1mp');
INSERT INTO `product` VALUES ('597', '43', 'Camera IP Hikvision DS-2CD1201-I3 thân 1MP', '1130000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i3-than-1mp');
INSERT INTO `product` VALUES ('598', '43', 'Camera IP Hikvision DS-2CD1221-I3 thân 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1221-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1221-i3-than-2mp');
INSERT INTO `product` VALUES ('599', '43', 'Camera IP Hikvision DS-2CD2T25FHWD-I8', '3300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T25FHWD-I8.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2t25fhwd-i8');
INSERT INTO `product` VALUES ('600', '43', 'Camera IP Kbvision KHA-5040DM thân 4.0', '0', '4', '10', '', 'camera-ip-kbvision-KHA-5040DM.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-5040dm-than-4-0');
INSERT INTO `product` VALUES ('601', '43', 'Camera IP KHA-3020AD Thân 2.0M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-3020AD.jpg', 'http://fptcamera.vn/camera-ip-kha-3020ad-than-2-0m');
INSERT INTO `product` VALUES ('602', '43', 'Camera IP KHA-5013D Thân 1.3M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-5013D.jpg', 'http://fptcamera.vn/camera-ip-kha-5013d-than-1-3m');
INSERT INTO `product` VALUES ('603', '43', 'Camera IP Kbvision KHA-1013D Thân 1.3M', '0', '4', '10', '', 'camera_ip_kbvision_KHA-1013D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-1013d-than-1-3m');
INSERT INTO `product` VALUES ('604', '43', 'Camera IP Kbvision KHA-1010D giá rẻ', '0', '4', '10', '', 'camera-ip-kbvision-KHA-1010D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-1010d-gia-re');
INSERT INTO `product` VALUES ('605', '43', 'Camera Kbvision KHA-S8020P Giá rẻ', '0', '4', '10', '', 'camera-kbvision-KH-KHA-S8020P.jpg', 'http://fptcamera.vn/camera-kbvision-kha-s8020p-gia-re');
INSERT INTO `product` VALUES ('606', '43', 'Camera Kbvision KHA-4S5020 hồng ngoại', '0', '4', '10', '', 'camera-kbvision-KHA-4S50201.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s5020-hong-ngoai');
INSERT INTO `product` VALUES ('607', '43', 'Camera Kbvision KHA-4S1020 thân 1080P', '0', '4', '10', '', 'camera-kbvision-KHA-4S1020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s1020-than-1080p');
INSERT INTO `product` VALUES ('608', '43', 'Camera SMART IP Kbvision KH-SN3005M', '12000000', '4', '10', '', 'camera-ip-kbvision-smart-KH-SN3005M.jpg', 'http://fptcamera.vn/camera-smart-ip-kbvision-kh-sn3005m');
INSERT INTO `product` VALUES ('609', '43', 'Camera IP Kbvisiaon KH-N8005 Ngoài trời Siêu nét', '5200000', '4', '10', '', 'camera-kbvision-KH-N8005.jpg', 'http://fptcamera.vn/camera-ip-kbvisiaon-kh-n8005-ngoai-troi-sieu-net');
INSERT INTO `product` VALUES ('610', '43', 'Camera IP Kbvision KH-N4005M Ngoài trời 4.0M', '6600000', '4', '10', '', 'camera-kbvision-KH-N4005M.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n4005m-ngoai-troi-4-0m');
INSERT INTO `product` VALUES ('611', '43', 'Camera IP Kbvision KH-N4003 ngoài trời 4.0AM', '4000000', '4', '10', '', 'camera-ip-kbvision-KH-N4003.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n4003-ngoai-troi-4-0am');
INSERT INTO `product` VALUES ('612', '43', 'Camera IP Kbvision KH-N2003A Thân 2.0M', '3100000', '4', '10', '', 'camera-kbvision-KH-KH-N2003A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n2003a-than-2-0m');
INSERT INTO `product` VALUES ('613', '43', 'Camera IP Kbvision KH-N1001 ngoài trời 1.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-N1001.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n1001-ngoai-troi-1-0m');
INSERT INTO `product` VALUES ('614', '43', 'Camera Kbvision KH-4C2005 hồng ngoại: 50m', '2100000', '4', '10', '', 'camera-kbvision-KH-4C20051.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2005-hong-ngoai-50m');
INSERT INTO `product` VALUES ('615', '43', 'Camera Kbvision KH-4C2003 2M hồng ngoại 30m', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2005.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2003-2m-hong-ngoai-30m');
INSERT INTO `product` VALUES ('616', '43', 'Camera kbvision KH-4C2001 Full HD 2.0M', '1030000', '4', '10', '', 'camera-kbvision-KH-4C2001.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2001-full-hd-2-0m');
INSERT INTO `product` VALUES ('617', '44', 'Camera Hikvision DS-2CC52D9T-AVPIT3ZE', '4400000', '4', '10', '', 'camera-hikvision-DS-2CC52D9T-AVPIT3ZE.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc52d9t-avpit3ze');
INSERT INTO `product` VALUES ('618', '44', 'Camera Siêu nét Hikvision DS-2CC52D9T-IT3E', '2800000', '4', '10', '', 'camera-HIKVISION-DS-2CC52D9T-IT3E.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2cc52d9t-it3e');
INSERT INTO `product` VALUES ('619', '44', 'Camera Siêu Nét Hikvision DS-2CE56D8T-IT3Z', '2300000', '4', '10', '', 'camera-hikvision-DS-2CE56D8T-IT3Z.jpg', 'http://fptcamera.vn/camera-sieu-net-hikvision-ds-2ce56d8t-it3z');
INSERT INTO `product` VALUES ('620', '44', 'Camera IP POE Hikvision DS-2CD2710F-I', '3100000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2710F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2710f-i');
INSERT INTO `product` VALUES ('621', '44', 'Camera POE IP Hikvision DS-2CD2522FWD-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2522FWD-I.jpg', 'http://fptcamera.vn/camera-poe-ip-hikvision-ds-2cd2522fwd-i');
INSERT INTO `product` VALUES ('622', '44', 'Camera IP POE Hikvision DS-2CD2322WD-I', '0', '4', '10', '', 'camera-ip-hikvision-DS-2CD2322WD-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2322wd-i');
INSERT INTO `product` VALUES ('623', '44', 'Camera POE Hikvision DS-2CD2110F-I 1.3MP', '1650000', '4', '10', '', 'camera-ip-wifi-hikvision-DS-2CD2110F-I.jpg', 'http://fptcamera.vn/camera-poe-hikvision-ds-2cd2110f-i-1-3mp');
INSERT INTO `product` VALUES ('624', '44', 'Camera IP Hikvision DS-2CD1321-I Dome 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1321-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1321-i-dome-2mp');
INSERT INTO `product` VALUES ('625', '44', 'Camera IP HIKVISION DS-2CD2955FWD-I', '6300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2955FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2955fwd-i');
INSERT INTO `product` VALUES ('626', '44', 'Camera IP Hikvision DS-2CD2385FWD-I Dome 8MP', '4200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2385FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2385fwd-i-dome-8mp');
INSERT INTO `product` VALUES ('627', '44', 'Camera IP Hikvision DS-2CD2335FWD-I Dome 3MP', '2880000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2335FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2335fwd-i-dome-3mp');
INSERT INTO `product` VALUES ('628', '44', 'Camera IP Kbvision KHA-2013D Dome 1.3M', '0', '4', '10', '', 'camera-ip-kbvision-KHA-2013D.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kha-2013d-dome-1-3m');
INSERT INTO `product` VALUES ('629', '44', 'Camera Kbvision KH-N8002 giá rẻ', '0', '4', '10', '', 'camera-kbvision-KHA-4S6020.jpg', 'http://fptcamera.vn/camera-kbvision-kh-n8002-gia-re');
INSERT INTO `product` VALUES ('630', '44', 'Camera Kbvision KHA-4S4020 siêu nét', '0', '4', '10', '', 'camera-kbvision-KHA-4S4020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s4020-sieu-net');
INSERT INTO `product` VALUES ('631', '44', 'Camera Kbvision KHA-4S2020 Dome 2.0M', '0', '4', '10', '', 'camera-kbvision-KHA-4S2020.jpg', 'http://fptcamera.vn/camera-kbvision-kha-4s2020-dome-2-0m');
INSERT INTO `product` VALUES ('632', '44', 'Camera IP Kbvision KH-N8002 siêu nét 8.0 M', '5300000', '4', '10', '', 'camera-ip-kbvision-KH-N8002.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n8002-sieu-net-8-0-m');
INSERT INTO `product` VALUES ('633', '44', 'Camera IP Kbvision KH-N3004A 3M', '3200000', '4', '10', '', 'camera-ip-kbvision-KH-N3004A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n3004a-3m');
INSERT INTO `product` VALUES ('634', '44', 'Camera IP Kbvision KH-N1302W Dome 1.3M', '1950000', '4', '10', '', 'KH-SN1302a.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n1302w-dome-1-3m');
INSERT INTO `product` VALUES ('635', '44', 'Camera IP KBVision KH-N1304A 1.3M', '3000000', '4', '10', '', 'camerat-kbvision-KH-N1304A.jpg', 'http://fptcamera.vn/camera-ip-kbvision-kh-n1304a-1-3m');
INSERT INTO `product` VALUES ('636', '44', 'Camera Kbvision KH-4C2006 Dome 2.0M', '2100000', '4', '10', '', 'camera-kbvision-KH-4C2006.jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2006-dome-2-0m');
INSERT INTO `product` VALUES ('637', '44', 'Camera Kbvision KH-4C2004 Dome 2.0M', '1200000', '4', '10', '', 'camera-kbvision-KH-4C2004_(2).jpg', 'http://fptcamera.vn/camera-kbvision-kh-4c2004-dome-2-0m');
INSERT INTO `product` VALUES ('638', '44', 'Camera Hikvision DS-2CE56F7T-IT3 3MP', '1539000', '4', '10', '', 'camera-quan-sat-hikvision-DS-2CE56F7T-IT3.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2ce56f7t-it3-3mp');
INSERT INTO `product` VALUES ('639', '44', 'Camera HDPRO HDP-2100CB Full HD', '790000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CB-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100cb-full-hd');
INSERT INTO `product` VALUES ('640', '44', 'Camera HDPRO HDP-2100CA Full HD', '750000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-2100CA-full-hd.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-2100ca-full-hd');
INSERT INTO `product` VALUES ('641', '44', 'Camera HDPRO HDP-1100CB CVI trong nhà', '650000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CB-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-hdp-1100cb-cvi-trong-nha');
INSERT INTO `product` VALUES ('642', '44', 'Camera HDPRO CVI HDP-1100CA', '500000', '4', '10', '', 'lap-dat-camera-hdpro-HDP-1100CA-gia-re.jpg', 'http://fptcamera.vn/camera-hdpro-cvi-hdp-1100ca');
INSERT INTO `product` VALUES ('643', '44', 'Camera IP PTZ Samsung SNP-L5233P', '14000000', '4', '10', '', 'Camera_IP_PTZ_Samsung_SNP-L5233P.jpg', 'http://fptcamera.vn/camera-ip-ptz-samsung-snp-l5233p');
INSERT INTO `product` VALUES ('644', '44', 'Camera IP Samsung QND-7080RP hồng ngoại 4.0M', '5800000', '4', '10', '', 'Network-Camera-QND-7080RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qnd-7080rp-hong-ngoai-4-0m');
INSERT INTO `product` VALUES ('645', '44', 'Camera IP Samsung SNF-8010VMP 360 độ', '12200000', '4', '10', '', 'Network-Camera-SNF-8010VMP1.jpg', 'http://fptcamera.vn/camera-ip-samsung-snf-8010vmp-360-do');
INSERT INTO `product` VALUES ('646', '44', 'Camera IP Samsung SNF-8010P 360 độ', '11000000', '4', '10', '', 'Network-Camera-SNF-8010P.jpg', 'http://fptcamera.vn/camera-ip-samsung-snf-8010p-360-do');
INSERT INTO `product` VALUES ('647', '44', 'Camera IP Samsung SND-L6083RP Wisenet Lite', '3200000', '4', '10', '', 'lap-dat-camera-ip-samsung-SND-L6013RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-snd-l6083rp-wisenet-lite');
INSERT INTO `product` VALUES ('648', '44', 'Camera IP Samsung QND-6020RP giá rẻ', '3000000', '4', '10', '', 'lap-dat-camera-ip-samsung-QND-6020RP.jpg', 'http://fptcamera.vn/camera-ip-samsung-qnd-6020rp-gia-re');
INSERT INTO `product` VALUES ('649', '45', 'Lắp 2 Camera HIKVISION', '4299000', '4', '10', '', 'lap-2-camera-hikvision.jpg', 'http://fptcamera.vn/lap-2-camera-hikvision');
INSERT INTO `product` VALUES ('650', '45', 'Lắp đặt 1 camera HIKVISION', '2999000', '4', '10', '', 'tron-bo-1-camera-hd-tvi-hikvision.jpg', 'http://fptcamera.vn/lap-dat-1-camera-hikvision');
INSERT INTO `product` VALUES ('651', '45', 'Bộ camera quan sát ngoài trời nhìn xa 80m', '4499000', '4', '10', '', 'camera-nha-xuong-ninh-xa.jpg', 'http://fptcamera.vn/bo-camera-quan-sat-ngoai-troi-nhin-xa-80m');
INSERT INTO `product` VALUES ('652', '45', 'Camera Ngụy Trang Gương Cầu QUESTEK QTX-1611AHD', '800000', '4', '10', '', 'camera-nguy-trang-guong-cau-questek-QTX-1611AHD.jpg', 'http://fptcamera.vn/camera-nguy-trang-guong-cau-questek-qtx-1611ahd');
INSERT INTO `product` VALUES ('653', '45', 'Camera Mini Ngụy Trang QUESTEK QTX 510AHD', '990000', '4', '10', '', 'camera-mini-nguy-trang-questek-QTX-510AHD.jpg', 'http://fptcamera.vn/camera-mini-nguy-trang-questek-qtx-510ahd');
INSERT INTO `product` VALUES ('654', '45', 'Camera Ngụy Trang VANTECH VT-1005H', '900000', '4', '10', '', 'camera-nguy-trang-vantech-VT-1005H.jpg', 'http://fptcamera.vn/camera-nguy-trang-vantech-vt-1005h');
INSERT INTO `product` VALUES ('655', '45', 'Camera Ngụy Trang Mini VANTECH VT-2100', '850000', '4', '10', '', 'camera-nguy-trang-vantech-vt-2100.jpg', 'http://fptcamera.vn/camera-nguy-trang-mini-vantech-vt-2100');
INSERT INTO `product` VALUES ('656', '46', 'Camera hành trình Polaroid B202', '1990000', '4', '10', '', 'camera-hanh-trinh-202.jpg', 'http://fptcamera.vn/camera-hanh-trinh-polaroid-b202');
INSERT INTO `product` VALUES ('657', '47', 'Camera POC Hikvision DS-2CE56D8T-IT3E', '1500000', '4', '10', '', 'camera-poc-DS-2CE56D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce56d8t-it3e');
INSERT INTO `product` VALUES ('658', '47', 'Camera POC HIkvision DS-2CE16D8T-IT3E', '1700000', '4', '10', '', 'camera-poc-DS-2CE16D8T-IT3E.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-it3e');
INSERT INTO `product` VALUES ('659', '47', 'Camera POC Hikvision DS-2CE16D8T-ITE', '1450000', '4', '10', '', 'camera-poc-hikvision-DS-2CE16D8T-ITE.jpg', 'http://fptcamera.vn/camera-poc-hikvision-ds-2ce16d8t-ite');
INSERT INTO `product` VALUES ('660', '48', 'Camera IP Bullet Hikvision DS-2CD2620F-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2620F-I.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2620f-i');
INSERT INTO `product` VALUES ('661', '48', 'Camera IP Bullet Hikvision DS-2CD2T22WD-I8', '3050000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T22WD-I8.jpg', 'http://fptcamera.vn/camera-ip-bullet-hikvision-ds-2cd2t22wd-i8');
INSERT INTO `product` VALUES ('662', '48', 'Camera IP POE Hikvision DS-2CD2010F-I giá rẻ', '1600000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2010F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2010f-i-gia-re');
INSERT INTO `product` VALUES ('663', '48', 'Camera IP POE Hikvision DS-2CD2710F-I', '3100000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2710F-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2710f-i');
INSERT INTO `product` VALUES ('664', '48', 'Camera POE IP Hikvision DS-2CD2522FWD-I', '3200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2522FWD-I.jpg', 'http://fptcamera.vn/camera-poe-ip-hikvision-ds-2cd2522fwd-i');
INSERT INTO `product` VALUES ('665', '48', 'Camera IP POE Hikvision DS-2CD2322WD-I', '0', '4', '10', '', 'camera-ip-hikvision-DS-2CD2322WD-I.jpg', 'http://fptcamera.vn/camera-ip-poe-hikvision-ds-2cd2322wd-i');
INSERT INTO `product` VALUES ('666', '48', 'Camera POE Hikvision DS-2CD2110F-I 1.3MP', '1650000', '4', '10', '', 'camera-ip-wifi-hikvision-DS-2CD2110F-I.jpg', 'http://fptcamera.vn/camera-poe-hikvision-ds-2cd2110f-i-1-3mp');
INSERT INTO `product` VALUES ('667', '48', 'Camera IP Wifi Hikvision DS-2CD2442FWD-IW', '2500000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2442FWD-IW.jpg', 'http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2442fwd-iw');
INSERT INTO `product` VALUES ('668', '48', 'Camera IP hikvision DS-2CD1201-I5 50 Mét', '1480000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I5.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i5-50-met');
INSERT INTO `product` VALUES ('669', '48', 'Camera IP Hikvision DS-2CD1002-I Thân 1MP', '1450000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1002-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1002-i-than-1mp');
INSERT INTO `product` VALUES ('670', '48', 'Camera IP Hikvision DS-2CD1201-I3 thân 1MP', '1130000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1201-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1201-i3-than-1mp');
INSERT INTO `product` VALUES ('671', '48', 'Camera IP Hikvision DS-2CD1321-I Dome 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1321-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1321-i-dome-2mp');
INSERT INTO `product` VALUES ('672', '48', 'Camera IP Hikvision DS-2CD1221-I3 thân 2MP', '1250000', '4', '10', '', 'camera-ip-hikvision-DS-2CD1221-I3.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd1221-i3-than-2mp');
INSERT INTO `product` VALUES ('673', '48', 'Camera IP HIKVISION DS-2CD2955FWD-I', '6300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2955FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2955fwd-i');
INSERT INTO `product` VALUES ('674', '48', 'Camera IP Hikvision DS-2CD2T25FHWD-I8', '3300000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2T25FHWD-I8.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2t25fhwd-i8');
INSERT INTO `product` VALUES ('675', '48', 'Camera IP Hikvision DS-2CD2385FWD-I Dome 8MP', '4200000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2385FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2385fwd-i-dome-8mp');
INSERT INTO `product` VALUES ('676', '48', 'Camera IP Hikvision DS-2CD2035FWD-I 3MP', '2900000', '4', '10', '', 'camera-ip-hikvision-DS-2CD2035FWD-I.jpg', 'http://fptcamera.vn/camera-ip-hikvision-ds-2cd2035fwd-i-3mp');
INSERT INTO `product` VALUES ('677', '49', 'Camera Hikvision DS-2CC12D9T-IT3E đêm có màu', '2650000', '4', '10', '', 'camera-hikvision-DS-2CC12D9T-IT3E.jpg', 'http://fptcamera.vn/camera-hikvision-ds-2cc12d9t-it3e-dem-co-mau');
INSERT INTO `product` VALUES ('678', '49', 'Camera nhìn đêm có màu HDP-701USL-AHD1.4', '1750000', '4', '10', '', 'hdp-701usl-ahd1.4_.png', 'http://fptcamera.vn/camera-nhin-dem-co-mau-hdp-701usl-ahd1-4');
INSERT INTO `product` VALUES ('679', '49', 'Camera Đêm Có Màu BEN-T3AHDS1.3', '1950000', '4', '10', '', 'camera-quan-sat-dem-co-mau-BEN-T3AHDS1.3_1.jpg', 'http://fptcamera.vn/camera-dem-co-mau-ben-t3ahds1-3');
INSERT INTO `product` VALUES ('680', '49', 'Camera Đêm Có Màu BENCO BEN-T7AHDS1.3', '2199000', '4', '10', '', 'camera-dem-co-mau-BEN-T7AHDS1.3_.jpg', 'http://fptcamera.vn/camera-dem-co-mau-benco-ben-t7ahds1-3');
INSERT INTO `product` VALUES ('681', '49', 'Camera Đêm Có Màu BEN-3114AHDS 1.3 Megapixel', '1950000', '4', '10', '', 'camera-dem-co-mau-benco-BEN-3114AHDS_1.3_.jpg', 'http://fptcamera.vn/camera-dem-co-mau-ben-3114ahds-1-3-megapixel');
INSERT INTO `product` VALUES ('682', '52', 'Đầu Ghi Hình 8 Kênh VANTECH VPH-863AHD', '6090000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-vantech-VPH-863AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-vantech-vph-863ahd');
INSERT INTO `product` VALUES ('683', '52', 'Đầu Ghi Hình 16 Kênh AHD VANTECH VP-1663AHD', '12000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-1663AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-vantech-vp-1663ahd');
INSERT INTO `product` VALUES ('684', '52', 'Đầu ghi Hình 8 Kênh AHD VANTECH VP-8160AHDM', '3500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-16260AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-vantech-vp-8160ahdm');
INSERT INTO `product` VALUES ('685', '52', 'Đầu Ghi Hình 16 Kênh 960H VANTECH VP-1660AHDM', '4500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-1660AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-960h-vantech-vp-1660ahdm');
INSERT INTO `product` VALUES ('686', '52', 'Đầu Ghi Hình 8 Kênh 720P VANTECH VP-860AHDM', '3500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-vantech-VP-860AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-720p-vantech-vp-860ahdm');
INSERT INTO `product` VALUES ('687', '52', 'Đầu Ghi Hình 4 Kênh AHD VANTECH VP-460AHD', '1990000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ahd-vantech-VP-460AHDL.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-vantech-vp-460ahd');
INSERT INTO `product` VALUES ('688', '52', 'Đầu Ghi Hình 16 Kênh VANTECH VT-16800H', '3290000', '4', '10', '', 'dau-ghi-hinh-ip-16-kenh-vantech-VT-16800H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-vantech-vt-16800h');
INSERT INTO `product` VALUES ('689', '52', 'Đầu Ghi Hình 8 Kênh VANTECH VT-8800S', '2200000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VT-8800S.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-vantech-vt-8800s');
INSERT INTO `product` VALUES ('690', '52', 'Đầu Ghi Hình 4 Kênh VANTECH VT-4800S', '1500000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VT-4800S.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-vantech-vt-4800s');
INSERT INTO `product` VALUES ('691', '52', 'Đầu Ghi Hình 32 Kênh IP VANTECH VP-3240HD', '6800000', '4', '10', '', 'dau-ghi-hinh-ip-32-kenh-VP-3240HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-32-kenh-ip-vantech-vp-3240hd');
INSERT INTO `product` VALUES ('692', '52', 'Đầu Ghi Hình 24 Kênh IP VANTECH VP-2440HD', '5450000', '4', '10', '', 'dau-ghi-hinh-ip-24-kenh-VP-2440HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh-ip-vantech-vp-2440hd');
INSERT INTO `product` VALUES ('693', '52', 'Đầu Ghi Hình 4 Kênh IP VANTECH VP-440HD', '1950000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VP-440HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ip-vantech-vp-440hd');
INSERT INTO `product` VALUES ('694', '52', 'Đầu Ghi Hình 8 Kênh IP VANTECH VP-840HD', '2750000', '4', '10', '', 'dau-ghi-hinh-ip-8-kenh-vantech-VP-840HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ip-vantech-vp-840hd');
INSERT INTO `product` VALUES ('695', '52', 'Đầu Ghi Hình 16 Kênh IP VANTECH VP-1640HD', '3400000', '4', '10', '', 'dau-ghi-hinh-ip-16-kenh-vantech-VP-1640HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-vantech-vp-1640hd');
INSERT INTO `product` VALUES ('696', '53', 'Camera Wifi  IPC – 1310CHW', '1699000', '4', '10', '', 'camera-wifi-benco-BEN-IPC1310CHW.jpg', 'http://fptcamera.vn/camera-wifi-ipc-1310chw');
INSERT INTO `product` VALUES ('697', '53', 'Đầu ghi hình BENCO 8 kênh BEN-XVR1108C', '2100000', '4', '10', '', 'dau-ghi-hinh-benco-8-kenh-BEN-XVR1108C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-8-kenh-ben-xvr1108c');
INSERT INTO `product` VALUES ('698', '53', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('699', '53', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('700', '53', 'Đầu ghi BENCO 16 kênh AHD BEN-316AHD', '4800000', '4', '10', '', 'dau-ghi-hinh-16-kenh-BEN-316AHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-16-kenh-ahd-ben-316ahd');
INSERT INTO `product` VALUES ('701', '53', 'Đầu Ghi 8 Kênh Full HD BEN-308AHD', '2250000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-308AHD.jpg', 'http://fptcamera.vn/dau-ghi-8-kenh-full-hd-ben-308ahd');
INSERT INTO `product` VALUES ('702', '53', 'Đầu Ghi BENCO 8 Kênh Full HD BEN-208FHD', '3100000', '4', '10', '', 'dau-ghi-benco-8-kenh-full-hd-BEN-208FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-8-kenh-full-hd-ben-208fhd');
INSERT INTO `product` VALUES ('703', '53', 'Đầu Ghi Hình 4 Kênh Full HD BEN-304FHD', '2050000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-304FHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-full-hd-ben-304fhd');
INSERT INTO `product` VALUES ('704', '53', 'Đầu ghi Benco 4 kênh Full HD BEN-204FHD', '1730000', '4', '10', '', 'dau-ghi-benco-4-kenh-full-hd-BEN-204FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-4-kenh-full-hd-ben-204fhd');
INSERT INTO `product` VALUES ('705', '53', 'Đầu Ghi Hình Benco 4 Kênh AHD BEN-304AHD', '1680000', '4', '10', '', 'dau-ghi-hinh-benco-BEN-304AHD-4-kenh.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ahd-ben-304ahd');
INSERT INTO `product` VALUES ('706', '53', 'Đầu Ghi Hình Full HD 4 Kênh BEN-104FHD', '2490000', '4', '10', '', 'dau-ghi-hinh-full-hd-benco-BEN-104FHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-full-hd-4-kenh-ben-104fhd');
INSERT INTO `product` VALUES ('707', '53', 'Đầu Ghi Hình 16 Kênh AHD BEN-716AHD', '4900000', '4', '10', '', 'dau-ghi-hinh-AHD-BENCO-BEN-716AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-ben-716ahd');
INSERT INTO `product` VALUES ('708', '53', 'Đầu Ghi Hình 8 Kênh AHD BEN-508AHD', '2350000', '4', '10', '', 'dau-ghi-hinh-AHD-BENCO-BEN-508AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-ben-508ahd');
INSERT INTO `product` VALUES ('709', '53', 'Đầu Ghi Hình 24 Kênh BENCO BEN-8024HD', '6900000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8024HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh-benco-ben-8024hd');
INSERT INTO `product` VALUES ('710', '53', 'Đầu Ghi Hình 16 Kênh BENCO BEN-8016HD', '3800000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8016HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-benco-ben-8016hd');
INSERT INTO `product` VALUES ('711', '53', 'Đầu Ghi Hình 8 Kênh BENCO BEN-8008HD', '1850000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8008HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-benco-ben-8008hd');
INSERT INTO `product` VALUES ('712', '53', 'Đầu Ghi Hình 4 Kênh AHD BENCO BEN-504AHD', '1990000', '4', '10', '', 'dau-ghi-hinh-AHD-BENCO-BEN-504AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-benco-ben-504ahd');
INSERT INTO `product` VALUES ('713', '53', 'Đầu Ghi Hình 4 Kênh BENCO BEN-8004D', '1200000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8004D.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-benco-ben-8004d');
INSERT INTO `product` VALUES ('714', '54', 'Đầu Ghi Hình 16 Kênh AHD QUESTEK WIN-8416AHD', '6900000', '4', '10', '', 'dau-ghi-hinh-questek-16-kenh-ahd-WIN-8416AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-questek-win-8416ahd');
INSERT INTO `product` VALUES ('715', '54', 'Đầu Ghi Hình 8 Kênh AHD QUESTEK WIN-8408AHD', '3790000', '4', '10', '', 'dau-ghi-hinh-questek-8-kenh-ahd-WIN-8408AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-questek-win-8408ahd');
INSERT INTO `product` VALUES ('716', '54', 'Đầu Ghi Hình 4 Kênh AHD QUESTEK WIN-8404AHD', '2100000', '4', '10', '', 'dau-ghi-hinh-questek-4-kenh-ahd-WIN-8404AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-questek-win-8404ahd');
INSERT INTO `product` VALUES ('717', '55', 'Đầu Ghi HD-CVI 4 Kênh DAHUA HCVR4104C-V2', '1650000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4104C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-4-kenh-dahua-hcvr4104c-v2');
INSERT INTO `product` VALUES ('718', '55', 'Đầu Ghi Hình Dahua 16 Kênh DVR5116H-V2', '5800000', '4', '10', '', 'dau-ghi-hinh-analog-16-kenh-dahua-DVR5116H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-dvr5116h-v2');
INSERT INTO `product` VALUES ('719', '55', 'Đầu Ghi Hình DAHUA 8 Kênh DVR5108H', '4100000', '4', '10', '', 'dau-ghi-hinh-8-kenhanalog-dahua-DVR5108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-8-kenh-dvr5108h');
INSERT INTO `product` VALUES ('720', '55', 'Đầu Ghi Hình 4 Kênh DAHUA DVR5104H-V2', '3100000', '4', '10', '', 'dau-ghi-hinh-analog-4-kenh-dahua-DVR5104H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-dahua-dvr5104h-v2');
INSERT INTO `product` VALUES ('721', '55', 'Đầu Ghi DAHUA 4 Kênh Full HD HCVR7104H-S2', '5500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-full-hd-hdcvi-dahua-HCVR7104H-S2.jpg', 'http://fptcamera.vn/dau-ghi-dahua-4-kenh-full-hd-hcvr7104h-s2');
INSERT INTO `product` VALUES ('722', '55', 'Đầu Ghi Hình DAHUA 16 Kênh Full HD HCVR5116H-S2', '9600000', '4', '10', '', 'dau-ghi-hinh-16-kenh-full-hd-hdcvi-dahua-HCVR5116H-S21.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-full-hd-hcvr5116h-s2');
INSERT INTO `product` VALUES ('723', '55', 'Đầu Ghi Hình DAHUA 4 Kênh CVI HCVR4104HS-S2', '2600000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdcvi-dahua-HCVR4104HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-4-kenh-cvi-hcvr4104hs-s2');
INSERT INTO `product` VALUES ('724', '55', 'Đầu Ghi Hình HD-CVI 8 Kênh DAHUA HCVR4108C-V2', '3300000', '4', '10', '', 'dau-ghi-hinh-hdcvi-8-kenh-dahua-HCVR4108C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hd-cvi-8-kenh-dahua-hcvr4108c-v2');
INSERT INTO `product` VALUES ('725', '55', 'Đầu Ghi Hình 16 Kênh IP DAHUA NVR4216', '7890000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-dahua-NVR4216.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-dahua-nvr4216');
INSERT INTO `product` VALUES ('726', '55', 'Đầu Ghi Hình 8 Kênh IP DAHUA NVR4108H', '4100000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ip-NVR4108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ip-dahua-nvr4108h');
INSERT INTO `product` VALUES ('727', '55', 'Đầu Ghi Hình 4 Kênh IP Dahua NVR4104H', '3990000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ip-NVR410H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ip-dahua-nvr4104h');
INSERT INTO `product` VALUES ('728', '55', 'Đầu ghi 16 Kênh Dahua HCVR4116HHS-S2', '5200000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4116HHS-S2.jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-dahua-hcvr4116hhs-s2');
INSERT INTO `product` VALUES ('729', '55', 'Đầu Ghi Hình HDCVI 16 Kênh DAHUA HCVR5116H-S2', '9800000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR5116H-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdcvi-16-kenh-dahua-hcvr5116h-s2');
INSERT INTO `product` VALUES ('730', '55', 'Đầu Ghi HD-CVI 8 Kênh DAHUA HCVR4108HS-S2', '3990000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4108HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-8-kenh-dahua-hcvr4108hs-s2');
INSERT INTO `product` VALUES ('731', '56', 'Đầu Ghi Hình SPYEYE 16 Kênh AHD SP-4500AHDM.72', '5000000', '4', '10', '', 'dau-ghi-hinh-spyeye-16-kenh-SP-4500AHDM.72_.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-16-kenh-ahd-sp-4500ahdm-72');
INSERT INTO `product` VALUES ('732', '56', 'Đầu Ghi Hình SPYEYE 8 Kênh AHD 6300AHDL-M', '2200000', '4', '10', '', 'dau-ghi-hinh-spyeye-8-kenh-6300AHDL-M.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-8-kenh-ahd-6300ahdl-m');
INSERT INTO `product` VALUES ('733', '56', 'Đầu Ghi Hình SPYEYE 4 Kênh AHD 7200AHDL-M', '1700000', '4', '10', '', 'dau-ghi-hinh-spyeye-4-kenh-sp-7200AHDL-M2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-4-kenh-ahd-7200ahdl-m');
INSERT INTO `product` VALUES ('734', '57', 'Đầu HIKVISION 16 Kênh Turbo HD 3.0 DS-8116HQHI-F8/N', '29000000', '4', '10', '', 'dau-ghi-hinh-HIKVISION-16-KENH-DS-8116HQHI-F8-N.jpg', 'http://fptcamera.vn/dau-hikvision-16-kenh-turbo-hd-3-0-ds-8116hqhi-f8-n');
INSERT INTO `product` VALUES ('735', '57', 'Đầu ghi 8 kênh HIKVISION DS-7108HQHI-F1/N', '3600000', '4', '10', '', 'dau-ghi-hinh--kenh-hikvision-DS-7108HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-8-kenh-hikvision-ds-7108hqhi-f1-n');
INSERT INTO `product` VALUES ('736', '57', 'Đầu ghi 4 kênh HIKVISION FULL HD DS-7104HQHI-F1/N', '2340000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-4-kenh-hikvision-full-hd-ds-7104hqhi-f1-n');
INSERT INTO `product` VALUES ('737', '57', 'Đầu ghi IP 32 Kênh hãng HIKVISION DS-7732NI-E4', '9980000', '4', '10', '', 'dau-ghi-hinh-hikvision-32-kenh-ip-DS-7732NI-E4.jpg', 'http://fptcamera.vn/dau-ghi-ip-32-kenh-hang-hikvision-ds-7732ni-e4');
INSERT INTO `product` VALUES ('738', '57', 'Đầu ghi HIKVISION 24 Kênh DS-7324HGHI-SH cao cấp', '15000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7324HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-24-kenh-ds-7324hghi-sh-cao-cap');
INSERT INTO `product` VALUES ('739', '57', 'Đầu ghi Hikvision Cao cấp 16 kênh DS-7316HGHI-SH', '11500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7316HGHI-SH-4-HDD.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-cao-cap-16-kenh-ds-7316hghi-sh');
INSERT INTO `product` VALUES ('740', '57', 'Đầu ghi Hikvision 8 kênh DS-7208HUHI-F1/N 3.0MP', '4999000', '4', '10', '', '-dau-ghi-hikvision-DS-7208HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-8-kenh-ds-7208huhi-f1-n-3-0mp');
INSERT INTO `product` VALUES ('741', '57', 'Đầu ghi Hikvision DS-7616HUHI-F2/N 16 Kênh 3.0MP', '9900000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-16-kenh-DS-7616HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7616huhi-f2-n-16-kenh-3-0mp');
INSERT INTO `product` VALUES ('742', '57', 'Đầu ghi Hikvision DS-7608HUHI-F2/N 8 Kênh 3.0MP', '6500000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-8-kenh-DS-7608HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7608huhi-f2-n-8-kenh-3-0mp');
INSERT INTO `product` VALUES ('743', '57', 'Đầu ghi hình Hikvision 4 kênh DS-7604HUHI-F1/N', '3999000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-4-kenh-DS-7604HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ds-7604huhi-f1-n');
INSERT INTO `product` VALUES ('744', '57', 'Đầu ghi hình HIKVISION 4 kênh DS-7204HUHI-F1/N 5.0Mp', '3800000', '4', '10', '', 'DAU-GHI-HINH-DS-7204HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ds-7204huhi-f1-n-5-0mp');
INSERT INTO `product` VALUES ('745', '57', 'Đầu Ghi Hình 8 Kênh HIKVISION DS-7108HGHI-F1', '2500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-f1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-f1');
INSERT INTO `product` VALUES ('746', '57', 'Đầu ghi hình HIKVISION 32 Kênh 4K DS-7732NI-I4', '13000000', '4', '10', '', 'dau-ghi-hinh-32-kenh-ip-DS-7732NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-32-kenh-4k-ds-7732ni-i4');
INSERT INTO `product` VALUES ('747', '57', 'Đầu ghi hình HIKVISION 16 KÊNH IP 4k DS-7716NI-I4', '11100000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7716NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-16-kenh-ip-4k-ds-7716ni-i4');
INSERT INTO `product` VALUES ('748', '57', 'Đầu ghi hình HIKVISION 32 Kênh IP DS-7732NI-K4', '9900000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7732NI-K4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-32-kenh-ip-ds-7732ni-k4');
INSERT INTO `product` VALUES ('749', '57', 'Đầu ghi hình HIKVISION 16 Kênh IP DS-7716NI-K4', '8000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7716NI-K4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-16-kenh-ip-ds-7716ni-k4');
INSERT INTO `product` VALUES ('750', '57', 'Đầu ghi Camera 4 kênh FULL HD HJD-7104HQ-F1', '1900000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-HJD-7104HQ-F1.jpg', 'http://fptcamera.vn/dau-ghi-camera-4-kenh-full-hd-hjd-7104hq-f1');
INSERT INTO `product` VALUES ('751', '57', 'Đầu ghi hình 8 Kênh Hikvision HJD-7108HD-F1', '2400000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-HJD-7108HD-F1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-hjd-7108hd-f1');
INSERT INTO `product` VALUES ('752', '57', 'Đầu ghi hình 16 Kênh DS-7116HQHI -F1/N', '5700000', '4', '10', '', 'dau-ghi-hinh-16-kenh-hikvision-DS-7116HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ds-7116hqhi-f1-n');
INSERT INTO `product` VALUES ('753', '57', 'Đầu ghi hình IP Camera 16 kênh DS-7716NI-I4', '12500000', '4', '10', '', 'dau-ghi-hinh-ip-camera-16-kenh-DS-7716NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-ip-camera-16-kenh-ds-7716ni-i4');
INSERT INTO `product` VALUES ('754', '57', 'Đầu ghi 16 Kênh IP HIKVISION DS-7716NI-E4', '7700000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7716NI-E4_(2).jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-ip-hikvision-ds-7716ni-e4');
INSERT INTO `product` VALUES ('755', '57', 'Đầu ghi hình 16 Kênh IP DS-7616NI-E2', '3990000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7616NI-E2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-ds-7616ni-e2');
INSERT INTO `product` VALUES ('756', '57', 'Đầu ghi hình HIKVISION 8 Kênh IP DS-7608NI-E1', '2950000', '4', '10', '', 'dau-ghi-hinh-hikvision-8-kenh-ip-DS-7608NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-8-kenh-ip-ds-7608ni-e1');
INSERT INTO `product` VALUES ('757', '57', 'Đầu ghi hình HIKVISION 4 kênh IP DS-7604NI-E1', '2699000', '4', '10', '', 'dau-ghi-hinh-hikvision-4-kenh-ip-DS-7604NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ip-ds-7604ni-e1');
INSERT INTO `product` VALUES ('758', '57', 'Đầu ghi hình 8 kênh HIKVISION DS-7108HGHI-SH', '3100000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-sh');
INSERT INTO `product` VALUES ('759', '57', 'Đầu ghi hình 4 kênh HIKVISION DS-7104HGHI-SH', '2260000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hikvision-ds-7104hghi-sh');
INSERT INTO `product` VALUES ('760', '57', 'Đầu Ghi Hình 8 Kênh HDTVI HIKVISION DS-7208HGHI-SH', '3750000', '4', '10', '', 'dau-ghi-hinh-8-kenh-HDTVI-hikvision-DS-7208HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hdtvi-hikvision-ds-7208hghi-sh');
INSERT INTO `product` VALUES ('761', '57', 'Đầu Ghi Hình 4 Kênh HDTVI HIKVISION DS-7204HGHI-SH', '2500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-HDTVI-hikvision-DS-7204HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hdtvi-hikvision-ds-7204hghi-sh');
INSERT INTO `product` VALUES ('762', '57', 'Đầu Ghi Hình 8 Kênh HIKVISION DS-7108HGHI-E1', '2890000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-e1');
INSERT INTO `product` VALUES ('763', '57', 'Đầu Ghi Hình 16 Kênh HIKVISION DS-7216 HGHI E1', '4950000', '4', '10', '', 'dau-ghi-hinh-16-kenh-hikvision-DS-7216-HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-hikvision-ds-7216-hghi-e1');
INSERT INTO `product` VALUES ('764', '57', 'Đầu Ghi Hình 4 Kênh HIKVISION DS-7104HGHI-E1', '1750000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hikvision-ds-7104hghi-e1');
INSERT INTO `product` VALUES ('765', '58', 'Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD', '1599000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd');
INSERT INTO `product` VALUES ('766', '58', 'Đầu ghi hình 4 kênh AHD 1080P HDP-1700AHDH', '3140000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHDH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-1080p-hdp-1700ahdh');
INSERT INTO `product` VALUES ('767', '58', 'Đầu ghi hình HDPRO 16 Kênh HDP-3500AHD', '4990000', '4', '10', '', 'dau-ghi-hdpro-16-kenh-HDP-3500AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-16-kenh-hdp-3500ahd');
INSERT INTO `product` VALUES ('768', '58', 'Đầu ghi hình HDPRO 8 KÊNH HDP-2600AHDHL', '2960000', '4', '10', '', 'dau-ghi-hdpro-8-kenh-HDP-2600AHDHL.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-8-kenh-hdp-2600ahdhl');
INSERT INTO `product` VALUES ('769', '58', 'Đầu ghi hình HDPRO 4 kênh HD HDP-1700AHD-E', '1400000', '4', '10', '', 'dau-ghi-hdpro-HDP-1700AHD-E.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-hd-hdp-1700ahd-e');
INSERT INTO `product` VALUES ('770', '59', 'Trọn bộ Camera KCE nhập khẩu HÀN QUỐC', '8500000', '4', '10', '', 'tron-bo-camera-kec-han-quoc.jpg', 'http://fptcamera.vn/tron-bo-camera-kce-nhap-khau-han-quoc');
INSERT INTO `product` VALUES ('771', '59', 'Đầu ghi hình Hàn Quốc KCE 16 Kênh KHD-1600A', '11900000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-1600A.jpg', 'http://fptcamera.vn/dau-ghi-hinh-han-quoc-kce-16-kenh-khd-1600a');
INSERT INTO `product` VALUES ('772', '59', 'Đầu ghi hình 4 kênh hãng KCE Hàn Quốc KHD - 400A', '5500000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-400A1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hang-kce-han-quoc-khd-400a');
INSERT INTO `product` VALUES ('773', '59', 'Đầu ghi hình KEC Hàn Quốc 8 kênh AHD KHD - 800A', '7400000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD_-_800A.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kec-han-quoc-8-kenh-ahd-khd-800a');
INSERT INTO `product` VALUES ('774', '59', 'Đầu Ghi Hình KCE 8 Kênh IP KNR-800', '14000000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-ip-KNR-800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-ip-knr-800');
INSERT INTO `product` VALUES ('775', '59', 'Đầu Ghi Hình KCE 4 Kênh IP KNR-400', '11000000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-ip-KNR-400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-ip-knr-400');
INSERT INTO `product` VALUES ('776', '59', 'Đầu Ghi Hình KCE HDSDI 4 Kênh KHD-N400R', '11000000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-N400R.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-hdsdi-4-kenh-khd-n400r');
INSERT INTO `product` VALUES ('777', '59', 'Đầu Ghi Hình KCE 16 Kênh Analog K5-NH1600', '11500000', '4', '10', '', 'dau-ghi-hinh-KCE-16-kenh-K5-NH1600.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-16-kenh-analog-k5-nh1600');
INSERT INTO `product` VALUES ('778', '59', 'Đầu Ghi Hình KCE 8 Kênh Analog K5-NH800', '7400000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-K5-NH800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-analog-k5-nh800');
INSERT INTO `product` VALUES ('779', '59', 'Đầu Ghi Hình KCE 4 Kênh K5-NH400', '5900000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-K5-NH400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-k5-nh400');
INSERT INTO `product` VALUES ('780', '60', 'Đầu ghi IP 32 Kênh hãng HIKVISION DS-7732NI-E4', '9980000', '4', '10', '', 'dau-ghi-hinh-hikvision-32-kenh-ip-DS-7732NI-E4.jpg', 'http://fptcamera.vn/dau-ghi-ip-32-kenh-hang-hikvision-ds-7732ni-e4');
INSERT INTO `product` VALUES ('781', '60', 'Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD', '1599000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd');
INSERT INTO `product` VALUES ('782', '60', 'Đầu Ghi HD-CVI 4 Kênh DAHUA HCVR4104C-V2', '1650000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4104C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-4-kenh-dahua-hcvr4104c-v2');
INSERT INTO `product` VALUES ('783', '60', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('784', '60', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('785', '60', 'Đầu ghi hình HIKVISION 16 Kênh IP DS-7716NI-K4', '8000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7716NI-K4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-16-kenh-ip-ds-7716ni-k4');
INSERT INTO `product` VALUES ('786', '60', 'Đầu ghi Camera 4 kênh FULL HD HJD-7104HQ-F1', '1900000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-HJD-7104HQ-F1.jpg', 'http://fptcamera.vn/dau-ghi-camera-4-kenh-full-hd-hjd-7104hq-f1');
INSERT INTO `product` VALUES ('787', '60', 'Đầu ghi 16 Kênh IP HIKVISION DS-7716NI-E4', '7700000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7716NI-E4_(2).jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-ip-hikvision-ds-7716ni-e4');
INSERT INTO `product` VALUES ('788', '60', 'Đầu ghi hình HIKVISION 8 Kênh IP DS-7608NI-E1', '2950000', '4', '10', '', 'dau-ghi-hinh-hikvision-8-kenh-ip-DS-7608NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-8-kenh-ip-ds-7608ni-e1');
INSERT INTO `product` VALUES ('789', '60', 'Đầu ghi hình HIKVISION 4 kênh IP DS-7604NI-E1', '2699000', '4', '10', '', 'dau-ghi-hinh-hikvision-4-kenh-ip-DS-7604NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ip-ds-7604ni-e1');
INSERT INTO `product` VALUES ('790', '60', 'Đầu ghi hình 4 kênh AHD 1080P HDP-1700AHDH', '3140000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHDH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-1080p-hdp-1700ahdh');
INSERT INTO `product` VALUES ('791', '60', 'Đầu ghi hình 8 kênh HIKVISION DS-7108HGHI-SH', '3100000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-sh');
INSERT INTO `product` VALUES ('792', '60', 'Đầu ghi hình HDPRO 16 Kênh HDP-3500AHD', '4990000', '4', '10', '', 'dau-ghi-hdpro-16-kenh-HDP-3500AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-16-kenh-hdp-3500ahd');
INSERT INTO `product` VALUES ('793', '60', 'Đầu ghi hình HDPRO 4 kênh HD HDP-1700AHD-E', '1400000', '4', '10', '', 'dau-ghi-hdpro-HDP-1700AHD-E.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-hd-hdp-1700ahd-e');
INSERT INTO `product` VALUES ('794', '60', 'Đầu ghi BENCO 16 kênh AHD BEN-316AHD', '4800000', '4', '10', '', 'dau-ghi-hinh-16-kenh-BEN-316AHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-16-kenh-ahd-ben-316ahd');
INSERT INTO `product` VALUES ('795', '60', 'Đầu Ghi BENCO 8 Kênh Full HD BEN-208FHD', '3100000', '4', '10', '', 'dau-ghi-benco-8-kenh-full-hd-BEN-208FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-8-kenh-full-hd-ben-208fhd');
INSERT INTO `product` VALUES ('796', '60', 'Đầu Ghi Hình 4 Kênh Full HD BEN-304FHD', '2050000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-304FHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-full-hd-ben-304fhd');
INSERT INTO `product` VALUES ('797', '60', 'Đầu ghi Benco 4 kênh Full HD BEN-204FHD', '1730000', '4', '10', '', 'dau-ghi-benco-4-kenh-full-hd-BEN-204FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-4-kenh-full-hd-ben-204fhd');
INSERT INTO `product` VALUES ('798', '60', 'Đầu Ghi Hình Dahua 16 Kênh DVR5116H-V2', '5800000', '4', '10', '', 'dau-ghi-hinh-analog-16-kenh-dahua-DVR5116H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-dvr5116h-v2');
INSERT INTO `product` VALUES ('799', '60', 'Đầu Ghi Hình DAHUA 8 Kênh DVR5108H', '4100000', '4', '10', '', 'dau-ghi-hinh-8-kenhanalog-dahua-DVR5108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-8-kenh-dvr5108h');
INSERT INTO `product` VALUES ('800', '60', 'Đầu Ghi Hình 4 Kênh DAHUA DVR5104H-V2', '3100000', '4', '10', '', 'dau-ghi-hinh-analog-4-kenh-dahua-DVR5104H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-dahua-dvr5104h-v2');
INSERT INTO `product` VALUES ('801', '60', 'Đầu Ghi Hình DAHUA 16 Kênh Full HD HCVR5116H-S2', '9600000', '4', '10', '', 'dau-ghi-hinh-16-kenh-full-hd-hdcvi-dahua-HCVR5116H-S21.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-full-hd-hcvr5116h-s2');
INSERT INTO `product` VALUES ('802', '60', 'Đầu Ghi Hình DAHUA 4 Kênh CVI HCVR4104HS-S2', '2600000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdcvi-dahua-HCVR4104HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-4-kenh-cvi-hcvr4104hs-s2');
INSERT INTO `product` VALUES ('803', '60', 'Đầu Ghi Hình HD-CVI 8 Kênh DAHUA HCVR4108C-V2', '3300000', '4', '10', '', 'dau-ghi-hinh-hdcvi-8-kenh-dahua-HCVR4108C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hd-cvi-8-kenh-dahua-hcvr4108c-v2');
INSERT INTO `product` VALUES ('804', '60', 'Đầu Ghi Hình SPYEYE 16 Kênh AHD SP-4500AHDM.72', '5000000', '4', '10', '', 'dau-ghi-hinh-spyeye-16-kenh-SP-4500AHDM.72_.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-16-kenh-ahd-sp-4500ahdm-72');
INSERT INTO `product` VALUES ('805', '60', 'Đầu Ghi Hình SPYEYE 8 Kênh AHD 6300AHDL-M', '2200000', '4', '10', '', 'dau-ghi-hinh-spyeye-8-kenh-6300AHDL-M.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-8-kenh-ahd-6300ahdl-m');
INSERT INTO `product` VALUES ('806', '60', 'Đầu Ghi Hình SPYEYE 4 Kênh AHD 7200AHDL-M', '1700000', '4', '10', '', 'dau-ghi-hinh-spyeye-4-kenh-sp-7200AHDL-M2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-4-kenh-ahd-7200ahdl-m');
INSERT INTO `product` VALUES ('807', '60', 'Đầu Ghi Hình KCE 8 Kênh IP KNR-800', '14000000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-ip-KNR-800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-ip-knr-800');
INSERT INTO `product` VALUES ('808', '60', 'Đầu Ghi Hình KCE 4 Kênh IP KNR-400', '11000000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-ip-KNR-400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-ip-knr-400');
INSERT INTO `product` VALUES ('809', '60', 'Đầu Ghi Hình KCE HDSDI 4 Kênh KHD-N400R', '11000000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-N400R.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-hdsdi-4-kenh-khd-n400r');
INSERT INTO `product` VALUES ('810', '60', 'Đầu Ghi Hình KCE 16 Kênh Analog K5-NH1600', '11500000', '4', '10', '', 'dau-ghi-hinh-KCE-16-kenh-K5-NH1600.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-16-kenh-analog-k5-nh1600');
INSERT INTO `product` VALUES ('811', '60', 'Đầu Ghi Hình KCE 8 Kênh Analog K5-NH800', '7400000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-K5-NH800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-analog-k5-nh800');
INSERT INTO `product` VALUES ('812', '62', 'Đầu ghi hình Samsung SRN-1673SP 16 Kênh IP', '17500000', '4', '10', '', 'dau-ghi-hinh-samsung-SRN-1673SP-16-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-1673sp-16-kenh-ip');
INSERT INTO `product` VALUES ('813', '62', 'Đầu ghi hình Samsung SRN-873SP 8 kênh IP', '9500000', '4', '10', '', 'dau-ghi-hinh-samsung-SRN-873SP-8-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-873sp-8-kenh-ip');
INSERT INTO `product` VALUES ('814', '62', 'Đầu ghi hình Samsung SRN-473SP 4 kênh IP', '6800000', '4', '10', '', 'dau-ghi-hinh-samsung-4-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-473sp-4-kenh-ip');
INSERT INTO `product` VALUES ('815', '62', 'Đầu ghi hình Samsung 4 kênh SRD-494P', '6500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-SRD-4_kênh_SRD-494P.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-4-kenh-srd-494p');
INSERT INTO `product` VALUES ('816', '62', 'Đầu ghi hình Samsung SRD-894P 8 Kênh AHD', '12000000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-samsung-SRD-894P1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srd-894p-8-kenh-ahd');
INSERT INTO `product` VALUES ('817', '62', 'Đầu ghi hình 16 kênh AHD Samsung SRD 1685P', '13500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-16-kenh-SRD_1685P.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-samsung-srd-1685p');
INSERT INTO `product` VALUES ('818', '62', 'Đầu ghi hình Samsung HRD-E430LP 4 kênh AHD', '2700000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-Đầu_ghi_hình_Samsung_4_kênh_AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-hrd-e430lp-4-kenh-ahd');
INSERT INTO `product` VALUES ('819', '62', 'Đầu ghi hình Samsung HRD-E830LP 8 Kênh AHD', '4500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-hrd-e830lp1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-hrd-e830lp-8-kenh-ahd');
INSERT INTO `product` VALUES ('820', '62', 'Đầu ghi hình Samsung 16 Kênh AHD', '5500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-hrd-e830lp.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-16-kenh-ahd');
INSERT INTO `product` VALUES ('821', '64', 'Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD', '1599000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd');
INSERT INTO `product` VALUES ('822', '64', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('823', '64', 'Đầu ghi hình 4 kênh AHD 1080P HDP-1700AHDH', '3140000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHDH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-1080p-hdp-1700ahdh');
INSERT INTO `product` VALUES ('824', '64', 'Đầu ghi hình 8 kênh HIKVISION DS-7108HGHI-SH', '3100000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-sh');
INSERT INTO `product` VALUES ('825', '64', 'Đầu ghi hình 4 kênh HIKVISION DS-7104HGHI-SH', '2260000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hikvision-ds-7104hghi-sh');
INSERT INTO `product` VALUES ('826', '64', 'Đầu Ghi Hình Dahua 16 Kênh DVR5116H-V2', '5800000', '4', '10', '', 'dau-ghi-hinh-analog-16-kenh-dahua-DVR5116H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-dvr5116h-v2');
INSERT INTO `product` VALUES ('827', '64', 'Đầu Ghi Hình DAHUA 8 Kênh DVR5108H', '4100000', '4', '10', '', 'dau-ghi-hinh-8-kenhanalog-dahua-DVR5108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-8-kenh-dvr5108h');
INSERT INTO `product` VALUES ('828', '64', 'Đầu Ghi Hình 4 Kênh DAHUA DVR5104H-V2', '3100000', '4', '10', '', 'dau-ghi-hinh-analog-4-kenh-dahua-DVR5104H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-dahua-dvr5104h-v2');
INSERT INTO `product` VALUES ('829', '64', 'Đầu Ghi Hình KCE 16 Kênh Analog K5-NH1600', '11500000', '4', '10', '', 'dau-ghi-hinh-KCE-16-kenh-K5-NH1600.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-16-kenh-analog-k5-nh1600');
INSERT INTO `product` VALUES ('830', '64', 'Đầu Ghi Hình KCE 8 Kênh Analog K5-NH800', '7400000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-K5-NH800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-analog-k5-nh800');
INSERT INTO `product` VALUES ('831', '64', 'Đầu Ghi Hình KCE 4 Kênh K5-NH400', '5900000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-K5-NH400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-k5-nh400');
INSERT INTO `product` VALUES ('832', '64', 'Đầu Ghi Hình 16 Kênh AVTECH KPD679HA', '6800000', '4', '10', '', 'dau-ghi-hinh-16-kenh-avtech-KPD679HA.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-avtech-kpd679ha');
INSERT INTO `product` VALUES ('833', '64', 'Đầu Ghi Hình 8 Kênh AVTECH AVD746ZBD', '6500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-avtech-AVD746ZBD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-avtech-avd746zbd');
INSERT INTO `product` VALUES ('834', '64', 'Đầu Ghi Hình 4 Kênh AVTECH AVC704H', '1600000', '4', '10', '', 'dau-ghi-hinh-4-kenh-avtech-AVC704H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-avtech-avc704h');
INSERT INTO `product` VALUES ('835', '64', 'Đầu Ghi Hình 16 Kênh VANTECH VT-16800H', '3290000', '4', '10', '', 'dau-ghi-hinh-ip-16-kenh-vantech-VT-16800H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-vantech-vt-16800h');
INSERT INTO `product` VALUES ('836', '64', 'Đầu Ghi Hình 8 Kênh VANTECH VT-8800S', '2200000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VT-8800S.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-vantech-vt-8800s');
INSERT INTO `product` VALUES ('837', '64', 'Đầu Ghi Hình 4 Kênh VANTECH VT-4800S', '1500000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VT-4800S.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-vantech-vt-4800s');
INSERT INTO `product` VALUES ('838', '64', 'Đầu Ghi Hình 24 Kênh BENCO BEN-8024HD', '6900000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8024HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh-benco-ben-8024hd');
INSERT INTO `product` VALUES ('839', '64', 'Đầu Ghi Hình 16 Kênh BENCO BEN-8016HD', '3800000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8016HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-benco-ben-8016hd');
INSERT INTO `product` VALUES ('840', '64', 'Đầu Ghi Hình 8 Kênh BENCO BEN-8008HD', '1850000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8008HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-benco-ben-8008hd');
INSERT INTO `product` VALUES ('841', '64', 'Đầu Ghi Hình 4 Kênh BENCO BEN-8004D', '1200000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8004D.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-benco-ben-8004d');
INSERT INTO `product` VALUES ('842', '65', 'Đầu ghi hình Hàn Quốc KCE 16 Kênh KHD-1600A', '11900000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-1600A.jpg', 'http://fptcamera.vn/dau-ghi-hinh-han-quoc-kce-16-kenh-khd-1600a');
INSERT INTO `product` VALUES ('843', '65', 'Đầu ghi hình 4 kênh hãng KCE Hàn Quốc KHD - 400A', '5500000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-400A1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hang-kce-han-quoc-khd-400a');
INSERT INTO `product` VALUES ('844', '65', 'Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD', '1599000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd');
INSERT INTO `product` VALUES ('845', '65', 'Đầu ghi Hikvision 8 kênh DS-7208HUHI-F1/N 3.0MP', '4999000', '4', '10', '', '-dau-ghi-hikvision-DS-7208HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-8-kenh-ds-7208huhi-f1-n-3-0mp');
INSERT INTO `product` VALUES ('846', '65', 'Đầu ghi Hikvision DS-7608HUHI-F2/N 8 Kênh 3.0MP', '6500000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-8-kenh-DS-7608HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7608huhi-f2-n-8-kenh-3-0mp');
INSERT INTO `product` VALUES ('847', '65', 'Đầu ghi hình Hikvision 4 kênh DS-7604HUHI-F1/N', '3999000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-4-kenh-DS-7604HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ds-7604huhi-f1-n');
INSERT INTO `product` VALUES ('848', '65', 'Đầu ghi hình Samsung 4 kênh SRD-494P', '6500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-SRD-4_kênh_SRD-494P.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-4-kenh-srd-494p');
INSERT INTO `product` VALUES ('849', '65', 'Đầu ghi hình Samsung SRD-894P 8 Kênh AHD', '12000000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-samsung-SRD-894P1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srd-894p-8-kenh-ahd');
INSERT INTO `product` VALUES ('850', '65', 'Đầu ghi hình 16 kênh AHD Samsung SRD 1685P', '13500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-16-kenh-SRD_1685P.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-samsung-srd-1685p');
INSERT INTO `product` VALUES ('851', '65', 'Đầu ghi hình Samsung HRD-E430LP 4 kênh AHD', '2700000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-Đầu_ghi_hình_Samsung_4_kênh_AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-hrd-e430lp-4-kenh-ahd');
INSERT INTO `product` VALUES ('852', '65', 'Đầu ghi hình Samsung HRD-E830LP 8 Kênh AHD', '4500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-hrd-e830lp1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-hrd-e830lp-8-kenh-ahd');
INSERT INTO `product` VALUES ('853', '65', 'Đầu ghi hình Samsung 16 Kênh AHD', '5500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-hrd-e830lp.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-16-kenh-ahd');
INSERT INTO `product` VALUES ('854', '65', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('855', '65', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('856', '65', 'Đầu ghi hình KEC Hàn Quốc 8 kênh AHD KHD - 800A', '7400000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD_-_800A.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kec-han-quoc-8-kenh-ahd-khd-800a');
INSERT INTO `product` VALUES ('857', '65', 'Đầu ghi hình 4 kênh AHD 1080P HDP-1700AHDH', '3140000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHDH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-1080p-hdp-1700ahdh');
INSERT INTO `product` VALUES ('858', '65', 'Đầu ghi hình HDPRO 16 Kênh HDP-3500AHD', '4990000', '4', '10', '', 'dau-ghi-hdpro-16-kenh-HDP-3500AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-16-kenh-hdp-3500ahd');
INSERT INTO `product` VALUES ('859', '65', 'Đầu ghi hình HDPRO 8 KÊNH HDP-2600AHDHL', '2960000', '4', '10', '', 'dau-ghi-hdpro-8-kenh-HDP-2600AHDHL.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-8-kenh-hdp-2600ahdhl');
INSERT INTO `product` VALUES ('860', '65', 'Đầu ghi hình HDPRO 4 kênh HD HDP-1700AHD-E', '1400000', '4', '10', '', 'dau-ghi-hdpro-HDP-1700AHD-E.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-hd-hdp-1700ahd-e');
INSERT INTO `product` VALUES ('861', '65', 'Đầu ghi BENCO 16 kênh AHD BEN-316AHD', '4800000', '4', '10', '', 'dau-ghi-hinh-16-kenh-BEN-316AHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-16-kenh-ahd-ben-316ahd');
INSERT INTO `product` VALUES ('862', '65', 'Đầu Ghi 8 Kênh Full HD BEN-308AHD', '2250000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-308AHD.jpg', 'http://fptcamera.vn/dau-ghi-8-kenh-full-hd-ben-308ahd');
INSERT INTO `product` VALUES ('863', '65', 'Đầu Ghi BENCO 8 Kênh Full HD BEN-208FHD', '3100000', '4', '10', '', 'dau-ghi-benco-8-kenh-full-hd-BEN-208FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-8-kenh-full-hd-ben-208fhd');
INSERT INTO `product` VALUES ('864', '65', 'Đầu Ghi Hình 4 Kênh Full HD BEN-304FHD', '2050000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-304FHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-full-hd-ben-304fhd');
INSERT INTO `product` VALUES ('865', '65', 'Đầu ghi Benco 4 kênh Full HD BEN-204FHD', '1730000', '4', '10', '', 'dau-ghi-benco-4-kenh-full-hd-BEN-204FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-4-kenh-full-hd-ben-204fhd');
INSERT INTO `product` VALUES ('866', '65', 'Đầu Ghi Hình Benco 4 Kênh AHD BEN-304AHD', '1680000', '4', '10', '', 'dau-ghi-hinh-benco-BEN-304AHD-4-kenh.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ahd-ben-304ahd');
INSERT INTO `product` VALUES ('867', '65', 'Đầu Ghi Hình SPYEYE 16 Kênh AHD SP-4500AHDM.72', '5000000', '4', '10', '', 'dau-ghi-hinh-spyeye-16-kenh-SP-4500AHDM.72_.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-16-kenh-ahd-sp-4500ahdm-72');
INSERT INTO `product` VALUES ('868', '65', 'Đầu Ghi Hình SPYEYE 8 Kênh AHD 6300AHDL-M', '2200000', '4', '10', '', 'dau-ghi-hinh-spyeye-8-kenh-6300AHDL-M.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-8-kenh-ahd-6300ahdl-m');
INSERT INTO `product` VALUES ('869', '65', 'Đầu Ghi Hình SPYEYE 4 Kênh AHD 7200AHDL-M', '1700000', '4', '10', '', 'dau-ghi-hinh-spyeye-4-kenh-sp-7200AHDL-M2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-4-kenh-ahd-7200ahdl-m');
INSERT INTO `product` VALUES ('870', '65', 'Đầu Ghi Hình 8 Kênh VANTECH VPH-863AHD', '6090000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-vantech-VPH-863AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-vantech-vph-863ahd');
INSERT INTO `product` VALUES ('871', '65', 'Đầu Ghi Hình 16 Kênh AHD VANTECH VP-1663AHD', '12000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-1663AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-vantech-vp-1663ahd');
INSERT INTO `product` VALUES ('872', '65', 'Đầu ghi Hình 8 Kênh AHD VANTECH VP-8160AHDM', '3500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-16260AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-vantech-vp-8160ahdm');
INSERT INTO `product` VALUES ('873', '65', 'Đầu Ghi Hình 16 Kênh 960H VANTECH VP-1660AHDM', '4500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-1660AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-960h-vantech-vp-1660ahdm');
INSERT INTO `product` VALUES ('874', '66', 'Đầu ghi IP 32 Kênh hãng HIKVISION DS-7732NI-E4', '9980000', '4', '10', '', 'dau-ghi-hinh-hikvision-32-kenh-ip-DS-7732NI-E4.jpg', 'http://fptcamera.vn/dau-ghi-ip-32-kenh-hang-hikvision-ds-7732ni-e4');
INSERT INTO `product` VALUES ('875', '66', 'Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD', '1599000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd');
INSERT INTO `product` VALUES ('876', '66', 'Đầu ghi Hikvision Cao cấp 16 kênh DS-7316HGHI-SH', '11500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7316HGHI-SH-4-HDD.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-cao-cap-16-kenh-ds-7316hghi-sh');
INSERT INTO `product` VALUES ('877', '66', 'Đầu ghi Hikvision 8 kênh DS-7208HUHI-F1/N 3.0MP', '4999000', '4', '10', '', '-dau-ghi-hikvision-DS-7208HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-8-kenh-ds-7208huhi-f1-n-3-0mp');
INSERT INTO `product` VALUES ('878', '66', 'Đầu ghi Hikvision DS-7616HUHI-F2/N 16 Kênh 3.0MP', '9900000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-16-kenh-DS-7616HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7616huhi-f2-n-16-kenh-3-0mp');
INSERT INTO `product` VALUES ('879', '66', 'Đầu ghi hình Samsung SRN-1673SP 16 Kênh IP', '17500000', '4', '10', '', 'dau-ghi-hinh-samsung-SRN-1673SP-16-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-1673sp-16-kenh-ip');
INSERT INTO `product` VALUES ('880', '66', 'Đầu ghi hình Samsung SRN-873SP 8 kênh IP', '9500000', '4', '10', '', 'dau-ghi-hinh-samsung-SRN-873SP-8-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-873sp-8-kenh-ip');
INSERT INTO `product` VALUES ('881', '66', 'Đầu ghi hình Samsung SRN-473SP 4 kênh IP', '6800000', '4', '10', '', 'dau-ghi-hinh-samsung-4-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-473sp-4-kenh-ip');
INSERT INTO `product` VALUES ('882', '66', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('883', '66', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('884', '66', 'Đầu ghi hình HIKVISION 32 Kênh 4K DS-7732NI-I4', '13000000', '4', '10', '', 'dau-ghi-hinh-32-kenh-ip-DS-7732NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-32-kenh-4k-ds-7732ni-i4');
INSERT INTO `product` VALUES ('885', '66', 'Đầu ghi hình HIKVISION 16 KÊNH IP 4k DS-7716NI-I4', '11100000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7716NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-16-kenh-ip-4k-ds-7716ni-i4');
INSERT INTO `product` VALUES ('886', '66', 'Đầu ghi hình HIKVISION 32 Kênh IP DS-7732NI-K4', '9900000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7732NI-K4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-32-kenh-ip-ds-7732ni-k4');
INSERT INTO `product` VALUES ('887', '66', 'Đầu ghi hình IP Camera 16 kênh DS-7716NI-I4', '12500000', '4', '10', '', 'dau-ghi-hinh-ip-camera-16-kenh-DS-7716NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-ip-camera-16-kenh-ds-7716ni-i4');
INSERT INTO `product` VALUES ('888', '66', 'Đầu ghi 16 Kênh IP HIKVISION DS-7716NI-E4', '7700000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7716NI-E4_(2).jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-ip-hikvision-ds-7716ni-e4');
INSERT INTO `product` VALUES ('889', '66', 'Đầu ghi hình 16 Kênh IP DS-7616NI-E2', '3990000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7616NI-E2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-ds-7616ni-e2');
INSERT INTO `product` VALUES ('890', '66', 'Đầu ghi hình HIKVISION 8 Kênh IP DS-7608NI-E1', '2950000', '4', '10', '', 'dau-ghi-hinh-hikvision-8-kenh-ip-DS-7608NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-8-kenh-ip-ds-7608ni-e1');
INSERT INTO `product` VALUES ('891', '66', 'Đầu ghi hình HIKVISION 4 kênh IP DS-7604NI-E1', '2699000', '4', '10', '', 'dau-ghi-hinh-hikvision-4-kenh-ip-DS-7604NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ip-ds-7604ni-e1');
INSERT INTO `product` VALUES ('892', '66', 'Đầu ghi hình 4 kênh AHD 1080P HDP-1700AHDH', '3140000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHDH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-1080p-hdp-1700ahdh');
INSERT INTO `product` VALUES ('893', '66', 'Đầu ghi hình HDPRO 16 Kênh HDP-3500AHD', '4990000', '4', '10', '', 'dau-ghi-hdpro-16-kenh-HDP-3500AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-16-kenh-hdp-3500ahd');
INSERT INTO `product` VALUES ('894', '66', 'Đầu Ghi Hình KCE 8 Kênh IP KNR-800', '14000000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-ip-KNR-800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-ip-knr-800');
INSERT INTO `product` VALUES ('895', '66', 'Đầu Ghi Hình KCE 4 Kênh IP KNR-400', '11000000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-ip-KNR-400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-ip-knr-400');
INSERT INTO `product` VALUES ('896', '66', 'Đầu Ghi Hình 32 Kênh IP VANTECH VP-3240HD', '6800000', '4', '10', '', 'dau-ghi-hinh-ip-32-kenh-VP-3240HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-32-kenh-ip-vantech-vp-3240hd');
INSERT INTO `product` VALUES ('897', '66', 'Đầu Ghi Hình 24 Kênh IP VANTECH VP-2440HD', '5450000', '4', '10', '', 'dau-ghi-hinh-ip-24-kenh-VP-2440HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh-ip-vantech-vp-2440hd');
INSERT INTO `product` VALUES ('898', '66', 'Đầu Ghi Hình 4 Kênh IP VANTECH VP-440HD', '1950000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VP-440HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ip-vantech-vp-440hd');
INSERT INTO `product` VALUES ('899', '66', 'Đầu Ghi Hình 8 Kênh IP VANTECH VP-840HD', '2750000', '4', '10', '', 'dau-ghi-hinh-ip-8-kenh-vantech-VP-840HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ip-vantech-vp-840hd');
INSERT INTO `product` VALUES ('900', '66', 'Đầu Ghi Hình 16 Kênh IP VANTECH VP-1640HD', '3400000', '4', '10', '', 'dau-ghi-hinh-ip-16-kenh-vantech-VP-1640HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-vantech-vp-1640hd');
INSERT INTO `product` VALUES ('901', '66', 'Đầu Ghi Hình 16 Kênh IP DAHUA NVR4216', '7890000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-dahua-NVR4216.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-dahua-nvr4216');
INSERT INTO `product` VALUES ('902', '66', 'Đầu Ghi Hình 8 Kênh IP DAHUA NVR4108H', '4100000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ip-NVR4108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ip-dahua-nvr4108h');
INSERT INTO `product` VALUES ('903', '66', 'Đầu Ghi Hình 4 Kênh IP Dahua NVR4104H', '3990000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ip-NVR410H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ip-dahua-nvr4104h');
INSERT INTO `product` VALUES ('904', '67', 'Đầu Ghi HD-CVI 4 Kênh DAHUA HCVR4104C-V2', '1650000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4104C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-4-kenh-dahua-hcvr4104c-v2');
INSERT INTO `product` VALUES ('905', '67', 'Đầu ghi Hikvision Cao cấp 16 kênh DS-7316HGHI-SH', '11500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7316HGHI-SH-4-HDD.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-cao-cap-16-kenh-ds-7316hghi-sh');
INSERT INTO `product` VALUES ('906', '67', 'Đầu ghi Hikvision 8 kênh DS-7208HUHI-F1/N 3.0MP', '4999000', '4', '10', '', '-dau-ghi-hikvision-DS-7208HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-8-kenh-ds-7208huhi-f1-n-3-0mp');
INSERT INTO `product` VALUES ('907', '67', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('908', '67', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('909', '67', 'Camera Benco BEN-CVI 1130DM', '680000', '4', '10', '', 'camera-benco-EN-CVI-1130DM.jpg', 'http://fptcamera.vn/camera-benco-ben-cvi-1130dm');
INSERT INTO `product` VALUES ('910', '67', 'Đầu Ghi DAHUA 4 Kênh Full HD HCVR7104H-S2', '5500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-full-hd-hdcvi-dahua-HCVR7104H-S2.jpg', 'http://fptcamera.vn/dau-ghi-dahua-4-kenh-full-hd-hcvr7104h-s2');
INSERT INTO `product` VALUES ('911', '67', 'Đầu Ghi Hình DAHUA 16 Kênh Full HD HCVR5116H-S2', '9600000', '4', '10', '', 'dau-ghi-hinh-16-kenh-full-hd-hdcvi-dahua-HCVR5116H-S21.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-full-hd-hcvr5116h-s2');
INSERT INTO `product` VALUES ('912', '67', 'Đầu Ghi Hình DAHUA 4 Kênh CVI HCVR4104HS-S2', '2600000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdcvi-dahua-HCVR4104HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-4-kenh-cvi-hcvr4104hs-s2');
INSERT INTO `product` VALUES ('913', '67', 'Đầu Ghi Hình HD-CVI 8 Kênh DAHUA HCVR4108C-V2', '3300000', '4', '10', '', 'dau-ghi-hinh-hdcvi-8-kenh-dahua-HCVR4108C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hd-cvi-8-kenh-dahua-hcvr4108c-v2');
INSERT INTO `product` VALUES ('914', '67', 'Đầu Ghi Hình 4 Kênh HDTVI HIKVISION DS-7204HGHI-SH', '2500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-HDTVI-hikvision-DS-7204HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hdtvi-hikvision-ds-7204hghi-sh');
INSERT INTO `product` VALUES ('915', '67', 'Đầu Ghi Hình 8 Kênh HIKVISION DS-7108HGHI-E1', '2890000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-e1');
INSERT INTO `product` VALUES ('916', '67', 'Đầu ghi 16 Kênh Dahua HCVR4116HHS-S2', '5200000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4116HHS-S2.jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-dahua-hcvr4116hhs-s2');
INSERT INTO `product` VALUES ('917', '67', 'Đầu Ghi Hình HDCVI 16 Kênh DAHUA HCVR5116H-S2', '9800000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR5116H-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdcvi-16-kenh-dahua-hcvr5116h-s2');
INSERT INTO `product` VALUES ('918', '67', 'Đầu Ghi HD-CVI 8 Kênh DAHUA HCVR4108HS-S2', '3990000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4108HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-8-kenh-dahua-hcvr4108hs-s2');
INSERT INTO `product` VALUES ('919', '68', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('920', '68', 'Đầu Ghi Hình KCE HDSDI 4 Kênh KHD-N400R', '11000000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-N400R.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-hdsdi-4-kenh-khd-n400r');
INSERT INTO `product` VALUES ('921', '69', 'Đầu ghi 4 kênh HIKVISION FULL HD DS-7104HQHI-F1/N', '2340000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-4-kenh-hikvision-full-hd-ds-7104hqhi-f1-n');
INSERT INTO `product` VALUES ('922', '69', 'Đầu ghi Hikvision Cao cấp 16 kênh DS-7316HGHI-SH', '11500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7316HGHI-SH-4-HDD.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-cao-cap-16-kenh-ds-7316hghi-sh');
INSERT INTO `product` VALUES ('923', '69', 'Đầu ghi Hikvision DS-7616HUHI-F2/N 16 Kênh 3.0MP', '9900000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-16-kenh-DS-7616HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7616huhi-f2-n-16-kenh-3-0mp');
INSERT INTO `product` VALUES ('924', '69', 'Đầu ghi Hikvision DS-7608HUHI-F2/N 8 Kênh 3.0MP', '6500000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-8-kenh-DS-7608HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7608huhi-f2-n-8-kenh-3-0mp');
INSERT INTO `product` VALUES ('925', '69', 'Đầu ghi hình Hikvision 4 kênh DS-7604HUHI-F1/N', '3999000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-4-kenh-DS-7604HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ds-7604huhi-f1-n');
INSERT INTO `product` VALUES ('926', '69', 'Đầu ghi hình HIKVISION 4 kênh DS-7204HUHI-F1/N 5.0Mp', '3800000', '4', '10', '', 'DAU-GHI-HINH-DS-7204HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ds-7204huhi-f1-n-5-0mp');
INSERT INTO `product` VALUES ('927', '69', 'Đầu Ghi Hình 8 Kênh HIKVISION DS-7108HGHI-F1', '2500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-f1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-f1');
INSERT INTO `product` VALUES ('928', '69', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('929', '69', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('930', '69', 'Đầu ghi Camera 4 kênh FULL HD HJD-7104HQ-F1', '1900000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-HJD-7104HQ-F1.jpg', 'http://fptcamera.vn/dau-ghi-camera-4-kenh-full-hd-hjd-7104hq-f1');
INSERT INTO `product` VALUES ('931', '69', 'Đầu ghi hình 8 kênh HIKVISION DS-7108HGHI-SH', '3100000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-sh');
INSERT INTO `product` VALUES ('932', '69', 'Đầu ghi hình 4 kênh HIKVISION DS-7104HGHI-SH', '2260000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hikvision-ds-7104hghi-sh');
INSERT INTO `product` VALUES ('933', '69', 'Đầu Ghi Hình 8 Kênh HDTVI HIKVISION DS-7208HGHI-SH', '3750000', '4', '10', '', 'dau-ghi-hinh-8-kenh-HDTVI-hikvision-DS-7208HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hdtvi-hikvision-ds-7208hghi-sh');
INSERT INTO `product` VALUES ('934', '69', 'Đầu Ghi Hình 4 Kênh HDTVI HIKVISION DS-7204HGHI-SH', '2500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-HDTVI-hikvision-DS-7204HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hdtvi-hikvision-ds-7204hghi-sh');
INSERT INTO `product` VALUES ('935', '71', 'Đầu ghi 4 kênh HIKVISION FULL HD DS-7104HQHI-F1/N', '2340000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-4-kenh-hikvision-full-hd-ds-7104hqhi-f1-n');
INSERT INTO `product` VALUES ('936', '71', 'Đầu ghi hình 4 kênh hãng KCE Hàn Quốc KHD - 400A', '5500000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-400A1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hang-kce-han-quoc-khd-400a');
INSERT INTO `product` VALUES ('937', '71', 'Đầu Ghi HD-CVI 4 Kênh DAHUA HCVR4104C-V2', '1650000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4104C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-4-kenh-dahua-hcvr4104c-v2');
INSERT INTO `product` VALUES ('938', '71', 'Đầu ghi Hikvision Cao cấp 16 kênh DS-7316HGHI-SH', '11500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7316HGHI-SH-4-HDD.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-cao-cap-16-kenh-ds-7316hghi-sh');
INSERT INTO `product` VALUES ('939', '71', 'Đầu ghi hình HIKVISION 4 kênh DS-7204HUHI-F1/N 5.0Mp', '3800000', '4', '10', '', 'DAU-GHI-HINH-DS-7204HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ds-7204huhi-f1-n-5-0mp');
INSERT INTO `product` VALUES ('940', '71', 'Đầu ghi hình Samsung SRN-473SP 4 kênh IP', '6800000', '4', '10', '', 'dau-ghi-hinh-samsung-4-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-473sp-4-kenh-ip');
INSERT INTO `product` VALUES ('941', '71', 'Đầu ghi hình Samsung 4 kênh SRD-494P', '6500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-SRD-4_kênh_SRD-494P.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-4-kenh-srd-494p');
INSERT INTO `product` VALUES ('942', '71', 'Đầu ghi hình Samsung HRD-E430LP 4 kênh AHD', '2700000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-Đầu_ghi_hình_Samsung_4_kênh_AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-hrd-e430lp-4-kenh-ahd');
INSERT INTO `product` VALUES ('943', '71', 'Đầu ghi hình BENCO 4 kênh BEN-XVR1104C FUll HD', '1350000', '4', '10', '', 'dau-ghi-hinh-benco-4-kenh-BEN-XVR1104C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ben-xvr1104c-full-hd');
INSERT INTO `product` VALUES ('944', '71', 'Đầu ghi Camera 4 kênh FULL HD HJD-7104HQ-F1', '1900000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-HJD-7104HQ-F1.jpg', 'http://fptcamera.vn/dau-ghi-camera-4-kenh-full-hd-hjd-7104hq-f1');
INSERT INTO `product` VALUES ('945', '71', 'Đầu ghi hình Hikvision HJD-7104HG-F1', '1650000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-HJD-7108HD-F11.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-hjd-7104hg-f1');
INSERT INTO `product` VALUES ('946', '71', 'Đầu ghi hình HIKVISION 4 kênh IP DS-7604NI-E1', '2699000', '4', '10', '', 'dau-ghi-hinh-hikvision-4-kenh-ip-DS-7604NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-4-kenh-ip-ds-7604ni-e1');
INSERT INTO `product` VALUES ('947', '71', 'Đầu ghi hình 4 kênh AHD 1080P HDP-1700AHDH', '3140000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHDH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-1080p-hdp-1700ahdh');
INSERT INTO `product` VALUES ('948', '71', 'Đầu ghi hình HDPRO 4 kênh HD HDP-1700AHD-E', '1400000', '4', '10', '', 'dau-ghi-hdpro-HDP-1700AHD-E.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-hd-hdp-1700ahd-e');
INSERT INTO `product` VALUES ('949', '71', 'Đầu Ghi Hình 4 Kênh Full HD BEN-304FHD', '2050000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-304FHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-full-hd-ben-304fhd');
INSERT INTO `product` VALUES ('950', '71', 'Đầu ghi Benco 4 kênh Full HD BEN-204FHD', '1730000', '4', '10', '', 'dau-ghi-benco-4-kenh-full-hd-BEN-204FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-4-kenh-full-hd-ben-204fhd');
INSERT INTO `product` VALUES ('951', '71', 'Đầu Ghi Hình Benco 4 Kênh AHD BEN-304AHD', '1680000', '4', '10', '', 'dau-ghi-hinh-benco-BEN-304AHD-4-kenh.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-4-kenh-ahd-ben-304ahd');
INSERT INTO `product` VALUES ('952', '71', 'Đầu Ghi Hình 4 Kênh DAHUA DVR5104H-V2', '3100000', '4', '10', '', 'dau-ghi-hinh-analog-4-kenh-dahua-DVR5104H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-dahua-dvr5104h-v2');
INSERT INTO `product` VALUES ('953', '71', 'Đầu Ghi DAHUA 4 Kênh Full HD HCVR7104H-S2', '5500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-full-hd-hdcvi-dahua-HCVR7104H-S2.jpg', 'http://fptcamera.vn/dau-ghi-dahua-4-kenh-full-hd-hcvr7104h-s2');
INSERT INTO `product` VALUES ('954', '71', 'Đầu Ghi Hình DAHUA 4 Kênh CVI HCVR4104HS-S2', '2600000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hdcvi-dahua-HCVR4104HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-4-kenh-cvi-hcvr4104hs-s2');
INSERT INTO `product` VALUES ('955', '71', 'Đầu Ghi Hình SPYEYE 4 Kênh AHD 7200AHDL-M', '1700000', '4', '10', '', 'dau-ghi-hinh-spyeye-4-kenh-sp-7200AHDL-M2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-4-kenh-ahd-7200ahdl-m');
INSERT INTO `product` VALUES ('956', '71', 'Đầu Ghi Hình KCE 4 Kênh IP KNR-400', '11000000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-ip-KNR-400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-ip-knr-400');
INSERT INTO `product` VALUES ('957', '71', 'Đầu Ghi Hình KCE HDSDI 4 Kênh KHD-N400R', '11000000', '4', '10', '', 'dau-ghi-hinh-hdsdi-4-kenh-KHD-N400R.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-hdsdi-4-kenh-khd-n400r');
INSERT INTO `product` VALUES ('958', '71', 'Đầu Ghi Hình KCE 4 Kênh K5-NH400', '5900000', '4', '10', '', 'dau-ghi-hinh-KCE-4-kenh-K5-NH400.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-4-kenh-k5-nh400');
INSERT INTO `product` VALUES ('959', '71', 'Đầu Ghi Hình 4 Kênh AHD VANTECH VP-460AHD', '1990000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ahd-vantech-VP-460AHDL.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-vantech-vp-460ahd');
INSERT INTO `product` VALUES ('960', '71', 'Đầu Ghi Hình 4 Kênh HDTVI HIKVISION DS-7204HGHI-SH', '2500000', '4', '10', '', 'dau-ghi-hinh-4-kenh-HDTVI-hikvision-DS-7204HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hdtvi-hikvision-ds-7204hghi-sh');
INSERT INTO `product` VALUES ('961', '71', 'Đầu Ghi Hình 4 Kênh HIKVISION DS-7104HGHI-E1', '1750000', '4', '10', '', 'dau-ghi-hinh-4-kenh-hikvision-DS-7104HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-hikvision-ds-7104hghi-e1');
INSERT INTO `product` VALUES ('962', '71', 'Đầu Ghi Hình 4 Kênh AVTECH AVC704H', '1600000', '4', '10', '', 'dau-ghi-hinh-4-kenh-avtech-AVC704H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-avtech-avc704h');
INSERT INTO `product` VALUES ('963', '71', 'Đầu Ghi Hình 4 Kênh AHD QUESTEK WIN-8404AHD', '2100000', '4', '10', '', 'dau-ghi-hinh-questek-4-kenh-ahd-WIN-8404AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ahd-questek-win-8404ahd');
INSERT INTO `product` VALUES ('964', '71', 'Đầu Ghi Hình 4 Kênh VANTECH VT-4800S', '1500000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VT-4800S.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-vantech-vt-4800s');
INSERT INTO `product` VALUES ('965', '71', 'Đầu Ghi Hình 4 Kênh IP VANTECH VP-440HD', '1950000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VP-440HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ip-vantech-vp-440hd');
INSERT INTO `product` VALUES ('966', '71', 'Đầu Ghi Hình 4 Kênh IP Dahua NVR4104H', '3990000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ip-NVR410H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-4-kenh-ip-dahua-nvr4104h');
INSERT INTO `product` VALUES ('967', '72', 'Đầu ghi 8 kênh HIKVISION DS-7108HQHI-F1/N', '3600000', '4', '10', '', 'dau-ghi-hinh--kenh-hikvision-DS-7108HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-8-kenh-hikvision-ds-7108hqhi-f1-n');
INSERT INTO `product` VALUES ('968', '72', 'Đầu ghi Hikvision 8 kênh DS-7208HUHI-F1/N 3.0MP', '4999000', '4', '10', '', '-dau-ghi-hikvision-DS-7208HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-8-kenh-ds-7208huhi-f1-n-3-0mp');
INSERT INTO `product` VALUES ('969', '72', 'Đầu ghi Hikvision DS-7608HUHI-F2/N 8 Kênh 3.0MP', '6500000', '4', '10', '', 'dahu-ghi-hinh-hikvisi-n-8-kenh-DS-7608HUHI-F1-N.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-ds-7608huhi-f2-n-8-kenh-3-0mp');
INSERT INTO `product` VALUES ('970', '72', 'Đầu ghi hình Samsung SRN-873SP 8 kênh IP', '9500000', '4', '10', '', 'dau-ghi-hinh-samsung-SRN-873SP-8-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-873sp-8-kenh-ip');
INSERT INTO `product` VALUES ('971', '72', 'Đầu Ghi Hình 8 Kênh HIKVISION DS-7108HGHI-F1', '2500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-f1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-f1');
INSERT INTO `product` VALUES ('972', '72', 'Đầu ghi hình Samsung SRD-894P 8 Kênh AHD', '12000000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-samsung-SRD-894P1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srd-894p-8-kenh-ahd');
INSERT INTO `product` VALUES ('973', '72', 'Đầu ghi hình Samsung HRD-E830LP 8 Kênh AHD', '4500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-hrd-e830lp1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-hrd-e830lp-8-kenh-ahd');
INSERT INTO `product` VALUES ('974', '72', 'Đầu ghi hình BENCO 8 kênh BEN-XVR1108C', '2100000', '4', '10', '', 'dau-ghi-hinh-benco-8-kenh-BEN-XVR1108C.jpg', 'http://fptcamera.vn/dau-ghi-hinh-benco-8-kenh-ben-xvr1108c');
INSERT INTO `product` VALUES ('975', '72', 'Đầu ghi hình 8 Kênh Hikvision HJD-7108HD-F1', '2400000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-HJD-7108HD-F1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-hjd-7108hd-f1');
INSERT INTO `product` VALUES ('976', '72', 'Đầu ghi hình HIKVISION 8 Kênh IP DS-7608NI-E1', '2950000', '4', '10', '', 'dau-ghi-hinh-hikvision-8-kenh-ip-DS-7608NI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-8-kenh-ip-ds-7608ni-e1');
INSERT INTO `product` VALUES ('977', '72', 'Đầu ghi hình HDPRO 8 KÊNH HDP-2600AHDHL', '2960000', '4', '10', '', 'dau-ghi-hdpro-8-kenh-HDP-2600AHDHL.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-8-kenh-hdp-2600ahdhl');
INSERT INTO `product` VALUES ('978', '72', 'Đầu Ghi 8 Kênh Full HD BEN-308AHD', '2250000', '4', '10', '', 'dau-ghi-benco-full-hd-BEN-308AHD.jpg', 'http://fptcamera.vn/dau-ghi-8-kenh-full-hd-ben-308ahd');
INSERT INTO `product` VALUES ('979', '72', 'Đầu Ghi BENCO 8 Kênh Full HD BEN-208FHD', '3100000', '4', '10', '', 'dau-ghi-benco-8-kenh-full-hd-BEN-208FHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-8-kenh-full-hd-ben-208fhd');
INSERT INTO `product` VALUES ('980', '72', 'Đầu Ghi Hình DAHUA 8 Kênh DVR5108H', '4100000', '4', '10', '', 'dau-ghi-hinh-8-kenhanalog-dahua-DVR5108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-8-kenh-dvr5108h');
INSERT INTO `product` VALUES ('981', '72', 'Đầu Ghi Hình HD-CVI 8 Kênh DAHUA HCVR4108C-V2', '3300000', '4', '10', '', 'dau-ghi-hinh-hdcvi-8-kenh-dahua-HCVR4108C-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hd-cvi-8-kenh-dahua-hcvr4108c-v2');
INSERT INTO `product` VALUES ('982', '72', 'Đầu Ghi Hình SPYEYE 8 Kênh AHD 6300AHDL-M', '2200000', '4', '10', '', 'dau-ghi-hinh-spyeye-8-kenh-6300AHDL-M.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-8-kenh-ahd-6300ahdl-m');
INSERT INTO `product` VALUES ('983', '72', 'Đầu Ghi Hình KCE 8 Kênh IP KNR-800', '14000000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-ip-KNR-800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-ip-knr-800');
INSERT INTO `product` VALUES ('984', '72', 'Đầu Ghi Hình KCE 8 Kênh Analog K5-NH800', '7400000', '4', '10', '', 'dau-ghi-hinh-KCE-8-kenh-K5-NH800.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-8-kenh-analog-k5-nh800');
INSERT INTO `product` VALUES ('985', '72', 'Đầu Ghi Hình 8 Kênh VANTECH VPH-863AHD', '6090000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-vantech-VPH-863AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-vantech-vph-863ahd');
INSERT INTO `product` VALUES ('986', '72', 'Đầu ghi Hình 8 Kênh AHD VANTECH VP-8160AHDM', '3500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-16260AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-vantech-vp-8160ahdm');
INSERT INTO `product` VALUES ('987', '72', 'Đầu Ghi Hình 8 Kênh 720P VANTECH VP-860AHDM', '3500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-ahd-vantech-VP-860AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-720p-vantech-vp-860ahdm');
INSERT INTO `product` VALUES ('988', '72', 'Đầu Ghi Hình 8 Kênh HDTVI HIKVISION DS-7208HGHI-SH', '3750000', '4', '10', '', 'dau-ghi-hinh-8-kenh-HDTVI-hikvision-DS-7208HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hdtvi-hikvision-ds-7208hghi-sh');
INSERT INTO `product` VALUES ('989', '72', 'Đầu Ghi Hình 8 Kênh HIKVISION DS-7108HGHI-E1', '2890000', '4', '10', '', 'dau-ghi-hinh-8-kenh-hikvision-DS-7108HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-hikvision-ds-7108hghi-e1');
INSERT INTO `product` VALUES ('990', '72', 'Đầu Ghi Hình 8 Kênh AVTECH AVD746ZBD', '6500000', '4', '10', '', 'dau-ghi-hinh-8-kenh-avtech-AVD746ZBD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-avtech-avd746zbd');
INSERT INTO `product` VALUES ('991', '72', 'Đầu Ghi Hình 8 Kênh AHD QUESTEK WIN-8408AHD', '3790000', '4', '10', '', 'dau-ghi-hinh-questek-8-kenh-ahd-WIN-8408AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-questek-win-8408ahd');
INSERT INTO `product` VALUES ('992', '72', 'Đầu Ghi Hình 8 Kênh VANTECH VT-8800S', '2200000', '4', '10', '', 'dau-ghi-hinh-ip-4-kenh-vantech-VT-8800S.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-vantech-vt-8800s');
INSERT INTO `product` VALUES ('993', '72', 'Đầu Ghi Hình 8 Kênh IP VANTECH VP-840HD', '2750000', '4', '10', '', 'dau-ghi-hinh-ip-8-kenh-vantech-VP-840HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ip-vantech-vp-840hd');
INSERT INTO `product` VALUES ('994', '72', 'Đầu Ghi Hình 8 Kênh IP DAHUA NVR4108H', '4100000', '4', '10', '', 'dau-ghi-hinh-4-kenh-ip-NVR4108H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ip-dahua-nvr4108h');
INSERT INTO `product` VALUES ('995', '72', 'Đầu Ghi HD-CVI 8 Kênh DAHUA HCVR4108HS-S2', '3990000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4108HS-S2.jpg', 'http://fptcamera.vn/dau-ghi-hd-cvi-8-kenh-dahua-hcvr4108hs-s2');
INSERT INTO `product` VALUES ('996', '72', 'Đầu Ghi Hình 8 Kênh AHD BEN-508AHD', '2350000', '4', '10', '', 'dau-ghi-hinh-AHD-BENCO-BEN-508AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-ahd-ben-508ahd');
INSERT INTO `product` VALUES ('997', '72', 'Đầu Ghi Hình 8 Kênh BENCO BEN-8008HD', '1850000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8008HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-8-kenh-benco-ben-8008hd');
INSERT INTO `product` VALUES ('998', '73', 'Đầu HIKVISION 16 Kênh Turbo HD 3.0 DS-8116HQHI-F8/N', '29000000', '4', '10', '', 'dau-ghi-hinh-HIKVISION-16-KENH-DS-8116HQHI-F8-N.jpg', 'http://fptcamera.vn/dau-hikvision-16-kenh-turbo-hd-3-0-ds-8116hqhi-f8-n');
INSERT INTO `product` VALUES ('999', '73', 'Đầu ghi hình Samsung SRN-1673SP 16 Kênh IP', '17500000', '4', '10', '', 'dau-ghi-hinh-samsung-SRN-1673SP-16-kenh-ip-1080.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-srn-1673sp-16-kenh-ip');
INSERT INTO `product` VALUES ('1000', '73', 'Đầu ghi hình 16 kênh AHD Samsung SRD 1685P', '13500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-16-kenh-SRD_1685P.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-samsung-srd-1685p');
INSERT INTO `product` VALUES ('1001', '73', 'Đầu ghi hình Samsung 16 Kênh AHD', '5500000', '4', '10', '', 'dau-ghi-hinh-ahd-samsung-hrd-e830lp.jpg', 'http://fptcamera.vn/dau-ghi-hinh-samsung-16-kenh-ahd');
INSERT INTO `product` VALUES ('1002', '73', 'Đầu ghi BENCO Cao cấp 16 kênh BEN-XVR2116M', '4000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-5-trong-1-benco-BEN-XVR2116M.jpg', 'http://fptcamera.vn/dau-ghi-benco-cao-cap-16-kenh-ben-xvr2116m');
INSERT INTO `product` VALUES ('1003', '73', 'Đầu ghi hình HIKVISION 16 KÊNH IP 4k DS-7716NI-I4', '11100000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7716NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-16-kenh-ip-4k-ds-7716ni-i4');
INSERT INTO `product` VALUES ('1004', '73', 'Đầu ghi hình HIKVISION 16 Kênh IP DS-7716NI-K4', '8000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7716NI-K4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-16-kenh-ip-ds-7716ni-k4');
INSERT INTO `product` VALUES ('1005', '73', 'Đầu ghi hình 16 Kênh DS-7116HQHI -F1/N', '5700000', '4', '10', '', 'dau-ghi-hinh-16-kenh-hikvision-DS-7116HQHI-F1N.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ds-7116hqhi-f1-n');
INSERT INTO `product` VALUES ('1006', '73', 'Đầu ghi hình IP Camera 16 kênh DS-7716NI-I4', '12500000', '4', '10', '', 'dau-ghi-hinh-ip-camera-16-kenh-DS-7716NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-ip-camera-16-kenh-ds-7716ni-i4');
INSERT INTO `product` VALUES ('1007', '73', 'Đầu ghi 16 Kênh IP HIKVISION DS-7716NI-E4', '7700000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7716NI-E4_(2).jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-ip-hikvision-ds-7716ni-e4');
INSERT INTO `product` VALUES ('1008', '73', 'Đầu ghi hình 16 Kênh IP DS-7616NI-E2', '3990000', '4', '10', '', 'dau-ghi-hinh-hikvision-16-kenh-ip-DS-7616NI-E2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-ds-7616ni-e2');
INSERT INTO `product` VALUES ('1009', '73', 'Đầu ghi hình HDPRO 16 Kênh HDP-3500AHD', '4990000', '4', '10', '', 'dau-ghi-hdpro-16-kenh-HDP-3500AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdpro-16-kenh-hdp-3500ahd');
INSERT INTO `product` VALUES ('1010', '73', 'Đầu ghi BENCO 16 kênh AHD BEN-316AHD', '4800000', '4', '10', '', 'dau-ghi-hinh-16-kenh-BEN-316AHD.jpg', 'http://fptcamera.vn/dau-ghi-benco-16-kenh-ahd-ben-316ahd');
INSERT INTO `product` VALUES ('1011', '73', 'Đầu Ghi Hình Dahua 16 Kênh DVR5116H-V2', '5800000', '4', '10', '', 'dau-ghi-hinh-analog-16-kenh-dahua-DVR5116H-V2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-dvr5116h-v2');
INSERT INTO `product` VALUES ('1012', '73', 'Đầu Ghi Hình DAHUA 16 Kênh Full HD HCVR5116H-S2', '9600000', '4', '10', '', 'dau-ghi-hinh-16-kenh-full-hd-hdcvi-dahua-HCVR5116H-S21.jpg', 'http://fptcamera.vn/dau-ghi-hinh-dahua-16-kenh-full-hd-hcvr5116h-s2');
INSERT INTO `product` VALUES ('1013', '73', 'Đầu Ghi Hình SPYEYE 16 Kênh AHD SP-4500AHDM.72', '5000000', '4', '10', '', 'dau-ghi-hinh-spyeye-16-kenh-SP-4500AHDM.72_.jpg', 'http://fptcamera.vn/dau-ghi-hinh-spyeye-16-kenh-ahd-sp-4500ahdm-72');
INSERT INTO `product` VALUES ('1014', '73', 'Đầu Ghi Hình KCE 16 Kênh Analog K5-NH1600', '11500000', '4', '10', '', 'dau-ghi-hinh-KCE-16-kenh-K5-NH1600.jpg', 'http://fptcamera.vn/dau-ghi-hinh-kce-16-kenh-analog-k5-nh1600');
INSERT INTO `product` VALUES ('1015', '73', 'Đầu Ghi Hình 16 Kênh AHD VANTECH VP-1663AHD', '12000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-1663AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-vantech-vp-1663ahd');
INSERT INTO `product` VALUES ('1016', '73', 'Đầu Ghi Hình 16 Kênh 960H VANTECH VP-1660AHDM', '4500000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ahd-vantech-VP-1660AHDM.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-960h-vantech-vp-1660ahdm');
INSERT INTO `product` VALUES ('1017', '73', 'Đầu Ghi Hình 16 Kênh HIKVISION DS-7216 HGHI E1', '4950000', '4', '10', '', 'dau-ghi-hinh-16-kenh-hikvision-DS-7216-HGHI-E1.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-hikvision-ds-7216-hghi-e1');
INSERT INTO `product` VALUES ('1018', '73', 'Đầu Ghi Hình 16 Kênh AVTECH KPD679HA', '6800000', '4', '10', '', 'dau-ghi-hinh-16-kenh-avtech-KPD679HA.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-avtech-kpd679ha');
INSERT INTO `product` VALUES ('1019', '73', 'Đầu Ghi Hình 16 Kênh AHD QUESTEK WIN-8416AHD', '6900000', '4', '10', '', 'dau-ghi-hinh-questek-16-kenh-ahd-WIN-8416AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-questek-win-8416ahd');
INSERT INTO `product` VALUES ('1020', '73', 'Đầu Ghi Hình 16 Kênh VANTECH VT-16800H', '3290000', '4', '10', '', 'dau-ghi-hinh-ip-16-kenh-vantech-VT-16800H.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-vantech-vt-16800h');
INSERT INTO `product` VALUES ('1021', '73', 'Đầu Ghi Hình 16 Kênh IP VANTECH VP-1640HD', '3400000', '4', '10', '', 'dau-ghi-hinh-ip-16-kenh-vantech-VP-1640HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-vantech-vp-1640hd');
INSERT INTO `product` VALUES ('1022', '73', 'Đầu Ghi Hình 16 Kênh IP DAHUA NVR4216', '7890000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-dahua-NVR4216.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ip-dahua-nvr4216');
INSERT INTO `product` VALUES ('1023', '73', 'Đầu ghi 16 Kênh Dahua HCVR4116HHS-S2', '5200000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR4116HHS-S2.jpg', 'http://fptcamera.vn/dau-ghi-16-kenh-dahua-hcvr4116hhs-s2');
INSERT INTO `product` VALUES ('1024', '73', 'Đầu Ghi Hình HDCVI 16 Kênh DAHUA HCVR5116H-S2', '9800000', '4', '10', '', 'dau-ghi-hinh-hdcvi-dahua-HCVR5116H-S2.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hdcvi-16-kenh-dahua-hcvr5116h-s2');
INSERT INTO `product` VALUES ('1025', '73', 'Đầu Ghi Hình 16 Kênh AHD BEN-716AHD', '4900000', '4', '10', '', 'dau-ghi-hinh-AHD-BENCO-BEN-716AHD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-ahd-ben-716ahd');
INSERT INTO `product` VALUES ('1026', '73', 'Đầu Ghi Hình 16 Kênh BENCO BEN-8016HD', '3800000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8016HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-16-kenh-benco-ben-8016hd');
INSERT INTO `product` VALUES ('1027', '74', 'Đầu ghi HIKVISION 24 Kênh DS-7324HGHI-SH cao cấp', '15000000', '4', '10', '', 'dau-ghi-hinh-16-kenh-DS-7324HGHI-SH.jpg', 'http://fptcamera.vn/dau-ghi-hikvision-24-kenh-ds-7324hghi-sh-cao-cap');
INSERT INTO `product` VALUES ('1028', '74', 'Đầu Ghi Hình 24 Kênh IP VANTECH VP-2440HD', '5450000', '4', '10', '', 'dau-ghi-hinh-ip-24-kenh-VP-2440HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh-ip-vantech-vp-2440hd');
INSERT INTO `product` VALUES ('1029', '74', 'Đầu Ghi Hình 24 Kênh BENCO BEN-8024HD', '6900000', '4', '10', '', 'dau-ghi-hinh-analog-banco-BEN-8024HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-24-kenh-benco-ben-8024hd');
INSERT INTO `product` VALUES ('1030', '75', 'Đầu ghi IP 32 Kênh hãng HIKVISION DS-7732NI-E4', '9980000', '4', '10', '', 'dau-ghi-hinh-hikvision-32-kenh-ip-DS-7732NI-E4.jpg', 'http://fptcamera.vn/dau-ghi-ip-32-kenh-hang-hikvision-ds-7732ni-e4');
INSERT INTO `product` VALUES ('1031', '75', 'Đầu ghi hình HIKVISION 32 Kênh 4K DS-7732NI-I4', '13000000', '4', '10', '', 'dau-ghi-hinh-32-kenh-ip-DS-7732NI-I4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-32-kenh-4k-ds-7732ni-i4');
INSERT INTO `product` VALUES ('1032', '75', 'Đầu ghi hình HIKVISION 32 Kênh IP DS-7732NI-K4', '9900000', '4', '10', '', 'dau-ghi-hinh-16-kenh-ip-hikvision-DS-7732NI-K4.jpg', 'http://fptcamera.vn/dau-ghi-hinh-hikvision-32-kenh-ip-ds-7732ni-k4');
INSERT INTO `product` VALUES ('1033', '75', 'Đầu Ghi Hình 32 Kênh IP VANTECH VP-3240HD', '6800000', '4', '10', '', 'dau-ghi-hinh-ip-32-kenh-VP-3240HD.jpg', 'http://fptcamera.vn/dau-ghi-hinh-32-kenh-ip-vantech-vp-3240hd');
INSERT INTO `product` VALUES ('1034', '80', 'Ổ Cứng Seagate 250G', '700000', '4', '10', '', 'hdd-seagate-250G.jpg', 'http://fptcamera.vn/o-cung-seagate-250g');
INSERT INTO `product` VALUES ('1035', '81', 'Ổ Cứng SEAGATE 500G', '1050000', '4', '10', '', 'hdd-seagate-500G.jpg', 'http://fptcamera.vn/o-cung-seagate-500g');
INSERT INTO `product` VALUES ('1036', '82', 'HDD Chuyên Dụng SEAGATE 1TB', '1350000', '4', '10', '', 'hdd-seagate-1t.jpg', 'http://fptcamera.vn/hdd-chuyen-dung-seagate-1tb');
INSERT INTO `product` VALUES ('1037', '83', 'Ổ Cứng Seagate 2Tb', '1900000', '4', '10', '', 'hdd-seagate-2000G.jpg', 'http://fptcamera.vn/o-cung-seagate-2tb');
INSERT INTO `product` VALUES ('1038', '84', 'Ổ Cứng Seagate 3Tb', '2500000', '4', '10', '', 'hdd-seagate-3tb.jpg', 'http://fptcamera.vn/o-cung-seagate-3tb');
INSERT INTO `product` VALUES ('1039', '86', 'Nguồn Tổng Camera 12V-5A', '250000', '4', '10', '', 'nguon-tong-12V-5A-gia-re.jpg', 'http://fptcamera.vn/nguon-tong-camera-12v-5a');
INSERT INTO `product` VALUES ('1040', '87', 'Vỏ Bảo Vệ Camera Ngoài Trời KK02', '190000', '4', '10', '', 'vo-bao-ve-kk02.jpg', 'http://fptcamera.vn/vo-bao-ve-camera-ngoai-troi-kk02');
INSERT INTO `product` VALUES ('1041', '87', 'Vỏ Bảo Vệ Camera Ngoài Trời KK03', '299000', '4', '10', '', 'vo-bao-ve-kk031.jpg', 'http://fptcamera.vn/vo-bao-ve-camera-ngoai-troi-kk03');
INSERT INTO `product` VALUES ('1042', '88', 'Dây Tín Hiệu Đồng Trục Cable 5C', '6000', '4', '10', '', 'day-tin-hieu-cab-5c-chuyen-cho-camera.jpg', 'http://fptcamera.vn/day-tin-hieu-dong-truc-cable-5c');
INSERT INTO `product` VALUES ('1043', '90', 'Chân Đế Điều Khiển Ngoài Trời PTS-301', '0', '4', '10', '', 'chan-de-dieu-kien-camera-ngoai-troi-PTS--301.jpg', 'http://fptcamera.vn/chan-de-dieu-khien-ngoai-troi-pts-301');
INSERT INTO `product` VALUES ('1044', '90', 'Chân Đế Điều Khiển Trong Nhà SP-306', '650000', '4', '10', '', 'chan-de-dieu-kien-camera-trong-nha-SP-306.jpg', 'http://fptcamera.vn/chan-de-dieu-khien-trong-nha-sp-306');
INSERT INTO `product` VALUES ('1045', '94', 'Báo Trộm Không Dây Karassn KS-258B', '950000', '4', '10', '', 'bao-trom-khong-day-Karassn-KS-258B.jpg', 'http://fptcamera.vn/bao-trom-khong-day-karassn-ks-258b');
INSERT INTO `product` VALUES ('1046', '94', 'Báo Trộm Thông Minh Karassn KS-899GSM', '3350000', '4', '10', '', 'bao-trom-thong-minh-Karassn-KS-899GSM.jpg', 'http://fptcamera.vn/bao-trom-thong-minh-karassn-ks-899gsm');
INSERT INTO `product` VALUES ('1047', '96', 'Camera Chuông Cửa SAMSUNG SHT-CW610E/EN', '1530000', '4', '10', '', 'camera-chuong-cua-samsung-SHT-CW610E-EN.jpg', 'http://fptcamera.vn/camera-chuong-cua-samsung-sht-cw610e-en');
INSERT INTO `product` VALUES ('1048', '97', 'Màn Hình SAMSUNG 4.3 SHT-3305WMK/EN', '3100000', '4', '10', '', 'man-hinh-chuong-cua-SHT-3305WMK-EN.jpg', 'http://fptcamera.vn/man-hinh-samsung-4-3-sht-3305wmk-en');
INSERT INTO `product` VALUES ('1049', '100', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X628', '3400000', '4', '10', '', 'may-cham-cong-van-tay-RONALD-JACK-X628.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x628');
INSERT INTO `product` VALUES ('1050', '100', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X938-C', '3550000', '4', '10', '', 'may-cham-cong-RONALD-JACK-X-938-C.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x938-c');
INSERT INTO `product` VALUES ('1051', '101', 'Máy Chấm Công Vân Tay WISE EYE WSE-268', '2600000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-WSE-268.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-wise-eye-wse-268');
INSERT INTO `product` VALUES ('1052', '101', 'Máy Chấm Công Vân Tay + Thẻ WISE EYE 808', '3450000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-808.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-wise-eye-808');
INSERT INTO `product` VALUES ('1053', '103', 'Máy Chấm Công Vân Tay WISE EYE WSE-268', '2600000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-WSE-268.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-wise-eye-wse-268');
INSERT INTO `product` VALUES ('1054', '104', 'Máy Chấm Công Vân Tay + Thẻ WISE EYE 808', '3450000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-808.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-wise-eye-808');
INSERT INTO `product` VALUES ('1055', '104', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X628', '3400000', '4', '10', '', 'may-cham-cong-van-tay-RONALD-JACK-X628.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x628');
INSERT INTO `product` VALUES ('1056', '104', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X938-C', '3550000', '4', '10', '', 'may-cham-cong-RONALD-JACK-X-938-C.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x938-c');
INSERT INTO `product` VALUES ('1057', '106', 'Máy Chấm Công Vân Tay WISE EYE WSE-268', '2600000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-WSE-268.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-wise-eye-wse-268');
INSERT INTO `product` VALUES ('1058', '107', 'Máy Chấm Công Vân Tay + Thẻ WISE EYE 808', '3450000', '4', '10', '', 'may-cham-cong-van-tay-WISE-EYE-808.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-wise-eye-808');
INSERT INTO `product` VALUES ('1059', '107', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X628', '3400000', '4', '10', '', 'may-cham-cong-van-tay-RONALD-JACK-X628.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x628');
INSERT INTO `product` VALUES ('1060', '107', 'Máy Chấm Công Vân Tay - Thẻ RONALD JACK X938-C', '3550000', '4', '10', '', 'may-cham-cong-RONALD-JACK-X-938-C.jpg', 'http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x938-c');
INSERT INTO `product` VALUES ('1061', '110', 'Bộ Đàm Cầm Tay IRADIO IR-668', '800000', '4', '10', '', 'bo-dam-cam-tay-IRADIO-IR-668.jpg', 'http://fptcamera.vn/bo-dam-cam-tay-iradio-ir-668');
INSERT INTO `product` VALUES ('1062', '111', 'Bộ Đàm KENWOOD TK-3107', '1650000', '4', '10', '', 'bo-dam-kenwood-tk-3107.jpg', 'http://fptcamera.vn/bo-dam-kenwood-tk-3107');
INSERT INTO `product` VALUES ('1063', '111', 'Bộ Đàm KENWOOD TK-2000', '1880000', '4', '10', '', 'bo-dam-kenwood-tk-2000.jpg', 'http://fptcamera.vn/bo-dam-kenwood-tk-2000');
INSERT INTO `product` VALUES ('1064', '111', 'Bộ Đàm KENWOOD TK-3102S', '1200000', '4', '10', '', 'bo-dam-kenwood-tk-3102s.jpg', 'http://fptcamera.vn/bo-dam-kenwood-tk-3102s');
INSERT INTO `product` VALUES ('1065', '114', 'Máy Chiếu SONY VPL-DX122', '11400000', '4', '10', '', 'may-chieu-sony-VPL-DX-122.jpg', 'http://fptcamera.vn/may-chieu-sony-vpl-dx122');
INSERT INTO `product` VALUES ('1066', '114', 'Máy Chiếu SONY VPL-DX 102', '9200000', '4', '10', '', 'may-chieu-sony-VPL-DX-102.jpg', 'http://fptcamera.vn/may-chieu-sony-vpl-dx-102');
INSERT INTO `product` VALUES ('1067', '116', 'Màn Chiếu Treo tường Các Loại', '0', '4', '10', '', 'man-may-chieu-gia-re.jpg', 'http://fptcamera.vn/man-chieu-treo-tuong-cac-loai');

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
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT '#',
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `slide_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES ('1', '1', 'lap-dat-camera-quan-sat-tron-bo-hd-gia-re1.jpg', '#');
INSERT INTO `slide` VALUES ('2', '16', 'lap-camera-giam-sat-khong-day-wifi.gif', '#');
INSERT INTO `slide` VALUES ('3', '50', 'dau-ghi-hinh-camera-DVR.jpg', '#');
INSERT INTO `slide` VALUES ('4', '76', 'phu-kien-camera-quan-sat.jpg', '#');
INSERT INTO `slide` VALUES ('5', '92', 'lap-camera-khuyen-mai-bao-trom.jpg', '#');
INSERT INTO `slide` VALUES ('6', '98', 'may-cham-cong-van-tay-the-gia-re.jpg', '#');
INSERT INTO `slide` VALUES ('7', '108', 'bo-dam-tong-dai-gia-re-fpt.jpg', '#');
INSERT INTO `slide` VALUES ('8', '112', 'may-chieu-sony-chinh-hang.jpg', '#');

-- ----------------------------
-- Table structure for slide_product
-- ----------------------------
DROP TABLE IF EXISTS `slide_product`;
CREATE TABLE `slide_product` (
  `id_slide` int(11) unsigned NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_slide`),
  KEY `id_slide` (`id_slide`),
  CONSTRAINT `slide_product_ibfk_1` FOREIGN KEY (`id_slide`) REFERENCES `slide` (`id`),
  CONSTRAINT `slide_product_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slide_product
-- ----------------------------
INSERT INTO `slide_product` VALUES ('1', '1');
INSERT INTO `slide_product` VALUES ('1', '2');
INSERT INTO `slide_product` VALUES ('1', '3');
INSERT INTO `slide_product` VALUES ('1', '4');
INSERT INTO `slide_product` VALUES ('1', '5');
INSERT INTO `slide_product` VALUES ('1', '6');
INSERT INTO `slide_product` VALUES ('1', '7');
INSERT INTO `slide_product` VALUES ('1', '8');
INSERT INTO `slide_product` VALUES ('2', '22');
INSERT INTO `slide_product` VALUES ('2', '23');
INSERT INTO `slide_product` VALUES ('2', '24');
INSERT INTO `slide_product` VALUES ('2', '25');
INSERT INTO `slide_product` VALUES ('2', '26');
INSERT INTO `slide_product` VALUES ('2', '27');
INSERT INTO `slide_product` VALUES ('2', '28');
INSERT INTO `slide_product` VALUES ('3', '683');
INSERT INTO `slide_product` VALUES ('3', '684');
INSERT INTO `slide_product` VALUES ('3', '685');
INSERT INTO `slide_product` VALUES ('3', '686');
INSERT INTO `slide_product` VALUES ('3', '687');
INSERT INTO `slide_product` VALUES ('3', '688');
INSERT INTO `slide_product` VALUES ('3', '689');
INSERT INTO `slide_product` VALUES ('4', '1034');
INSERT INTO `slide_product` VALUES ('4', '1035');
INSERT INTO `slide_product` VALUES ('4', '1036');
INSERT INTO `slide_product` VALUES ('4', '1037');
INSERT INTO `slide_product` VALUES ('4', '1038');
INSERT INTO `slide_product` VALUES ('4', '1039');
INSERT INTO `slide_product` VALUES ('4', '1040');
INSERT INTO `slide_product` VALUES ('4', '1041');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role_detail` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------

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
  CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_detail
-- ----------------------------
