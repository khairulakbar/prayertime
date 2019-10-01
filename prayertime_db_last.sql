/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prayertime_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-01 16:46:55
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tb_hadits`
-- ----------------------------
DROP TABLE IF EXISTS `tb_hadits`;
CREATE TABLE `tb_hadits` (
  `id_hadits` int(11) NOT NULL,
  `indo` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_hadits`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_hadits
-- ----------------------------
INSERT INTO `tb_hadits` VALUES ('1', '\"Tegakkanlah shalat dan tunaikanlah zakat. Dan segala kebaikan yang kamu kerjakan untuk dirimu, kamu akan mendapatkannya (pahala) di sisi Allah. Sesungguhnya Allah Maha Melihat terhadap apa yang kamu kerjakan\". – (Q.S Al-Baqarah: 110)');
INSERT INTO `tb_hadits` VALUES ('2', '“Jadikanlah sabar dan shalat sebagai penolongmu. Dan sesungguhnya yang demikian itu sungguh berat, kecuali bagi orang-orang yang khusyu’.” (QS. Al-Baqarah [2]: 45)');
INSERT INTO `tb_hadits` VALUES ('3', '\"Sesungguhnya yang memakmurkan masjid-masjid Allah hanyalah orang-orang yang beriman kepada Allah dan hari akhir, serta (tetap) menegakkan shalat, menunaikan zakat dan tidak takut (kepada apa pun) kecuali hanya kepada Allah. Maka mudah-mudahan mereka termasuk orang-orang yang memperoleh petunjuk\". – (Q.S At-Taubah: 18)');
INSERT INTO `tb_hadits` VALUES ('4', '\"Dan laksanakanlah shalat, tunaikanlah zakat, dan taatlah kepada Rasul (Muhammad), agar kamu mendapat rahmat\". – (Q.S An-Nur: 56)');
INSERT INTO `tb_hadits` VALUES ('5', '\"Bacalah Kitab (Al-Qur’an) yang telah diwahyukan kepadamu (Muhammad) dan laksanakanlah shalat. Sesungguhnya shalat itu mencegah dari perbuatan keji dan mungkar. Dan sungguh mengingat Allah (shalat) itu lebih besar (keutamaannya dari ibadah yang lain). Allah mengetahui apa yang kamu perbuat\". – (Q.S Al-Ankabut: 45)');
INSERT INTO `tb_hadits` VALUES ('6', '\"Wahai anakku, kerjakanlah shalat dan perintahlah (manusia) untuk berbuat yang makruf dan cegahlah (mereka) dari perbuatan mungkar dan bersabarlah terhadap apa yang menimpamu. Sesungguhnya yang demikian itu termasuk perkara yang penting\". – (Q.S Luqman: 17)');

-- ----------------------------
-- Table structure for `tb_img`
-- ----------------------------
DROP TABLE IF EXISTS `tb_img`;
CREATE TABLE `tb_img` (
  `id_img` int(50) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `urut` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `detik` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_img
-- ----------------------------
INSERT INTO `tb_img` VALUES ('2', 'img2.jpg', '2', '11', '2019-04-09', '5000');
INSERT INTO `tb_img` VALUES ('3', 'img3.jpg', '1', '11', '2019-04-09', '5000');
INSERT INTO `tb_img` VALUES ('4', 'Image_11.jpg', '1', '55', '2019-05-14', '5000');
INSERT INTO `tb_img` VALUES ('7', 'Image_b.jpg', '2', '1', '2019-05-16', '1');
INSERT INTO `tb_img` VALUES ('16', 'Image_c.jpg', '3', '1', '2019-05-16', '1');
INSERT INTO `tb_img` VALUES ('25', 'Image_12.jpg', '1', '56', '2019-06-27', '5000');
INSERT INTO `tb_img` VALUES ('26', 'Image_21.jpg', '2', '56', '2019-06-27', '5000');
INSERT INTO `tb_img` VALUES ('28', 'Image_', '3', '56', '2019-06-27', '5000');
INSERT INTO `tb_img` VALUES ('33', 'Image_', '', '55', '2019-06-27', null);
INSERT INTO `tb_img` VALUES ('34', 'Image_', '', '55', '2019-06-27', null);
INSERT INTO `tb_img` VALUES ('35', 'Image_111.jpg', '2121', '55', '2019-06-27', null);
INSERT INTO `tb_img` VALUES ('36', 'Image_', '', '55', '2019-06-27', null);
INSERT INTO `tb_img` VALUES ('38', 'Image_rinjani.jpg', '1', '1', '2019-09-19', '1');
INSERT INTO `tb_img` VALUES ('40', 'Image_teste.JPG', '4', '1', '2019-09-19', '1');

-- ----------------------------
-- Table structure for `tb_jadwalsholat`
-- ----------------------------
DROP TABLE IF EXISTS `tb_jadwalsholat`;
CREATE TABLE `tb_jadwalsholat` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `imsak` varchar(50) NOT NULL,
  `subuh` varchar(50) NOT NULL,
  `dzuhur` varchar(50) NOT NULL,
  `ashar` varchar(50) NOT NULL,
  `maghrib` varchar(50) NOT NULL,
  `isya` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_jadwalsholat
-- ----------------------------
INSERT INTO `tb_jadwalsholat` VALUES ('1', '2019-07-01', '04:32', '09:42', '09:58', '15:21', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('2', '2019-07-02', '04:33', '04:43', '12:00', '15:21', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('3', '2019-07-03', '04:33', '04:43', '12:00', '15:21', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('4', '2019-07-04', '04:33', '04:43', '12:01', '15:22', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('5', '2019-07-05', '04:33', '04:43', '12:01', '15:22', '17:54', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('6', '2019-07-06', '04:33', '04:43', '12:01', '15:22', '17:54', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('7', '2019-07-07', '04:33', '04:43', '12:01', '15:22', '17:54', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('8', '2019-07-08', '04:34', '04:44', '12:01', '15:22', '17:54', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('9', '2019-07-09', '04:34', '04:44', '12:01', '15:23', '17:55', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('10', '2019-07-10', '04:34', '04:44', '12:02', '15:23', '17:55', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('11', '2019-07-11', '04:34', '04:44', '12:02', '15:23', '17:55', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('12', '2019-07-12', '04:34', '04:44', '12:02', '15:23', '17:55', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('13', '2019-07-13', '04:34', '04:44', '12:02', '15:23', '17:55', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('14', '2019-07-14', '04:35', '04:45', '12:02', '15:23', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('15', '2019-07-15', '04:35', '04:45', '12:02', '15:23', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('16', '2019-07-16', '04:35', '04:45', '12:02', '15:23', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('17', '2019-07-17', '04:35', '04:45', '12:02', '15:24', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('18', '2019-07-18', '04:35', '04:45', '12:02', '15:24', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('19', '2019-07-19', '04:35', '04:45', '12:02', '15:24', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('20', '2019-07-20', '04:35', '04:45', '12:03', '15:24', '17:56', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('21', '2019-07-21', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('22', '2019-07-22', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('23', '2019-07-23', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('24', '2019-07-24', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('25', '2019-07-25', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('26', '2019-07-26', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('27', '2019-07-27', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('28', '2019-07-28', '04:35', '04:45', '12:03', '15:24', '17:57', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('29', '2019-07-29', '04:35', '04:45', '12:03', '15:24', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('30', '2019-07-30', '04:35', '04:45', '12:03', '15:24', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('31', '2019-07-31', '04:35', '04:45', '12:03', '15:24', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('32', '2019-08-01', '04:35', '04:45', '12:03', '15:24', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('33', '2019-08-02', '04:35', '04:45', '12:02', '15:24', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('34', '2019-08-03', '04:35', '04:45', '12:02', '15:24', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('35', '2019-08-04', '04:35', '04:45', '12:02', '15:23', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('36', '2019-08-05', '04:35', '04:45', '12:02', '15:23', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('37', '2019-08-06', '04:35', '04:45', '12:02', '15:23', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('38', '2019-08-07', '04:35', '04:45', '12:02', '15:23', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('39', '2019-08-08', '04:35', '04:45', '12:02', '15:23', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('40', '2019-08-09', '04:35', '04:45', '12:02', '15:23', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('41', '2019-08-10', '04:34', '04:44', '12:02', '15:22', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('42', '2019-08-11', '04:34', '04:44', '12:01', '15:22', '17:58', '19:09');
INSERT INTO `tb_jadwalsholat` VALUES ('43', '2019-08-12', '13:38', '13:30', '13:31', '13:32', '13:33', '13:34');
INSERT INTO `tb_jadwalsholat` VALUES ('44', '2019-08-13', '04:34', '04:44', '12:01', '15:22', '17:58', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('45', '2019-08-14', '04:34', '04:44', '12:01', '15:21', '17:58', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('46', '2019-08-15', '04:33', '04:43', '12:01', '15:21', '17:58', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('47', '2019-08-16', '04:33', '04:43', '12:01', '15:21', '17:58', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('48', '2019-08-17', '04:33', '04:43', '12:00', '15:21', '17:58', '19:08');
INSERT INTO `tb_jadwalsholat` VALUES ('49', '2019-08-18', '04:33', '04:43', '12:00', '15:20', '17:57', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('50', '2019-08-19', '04:32', '04:42', '12:00', '15:20', '17:57', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('51', '2019-08-20', '04:32', '04:42', '12:00', '15:19', '17:57', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('52', '2019-08-21', '04:32', '04:42', '11:59', '15:19', '17:57', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('53', '2019-08-22', '04:32', '04:42', '11:59', '15:19', '17:57', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('54', '2019-08-23', '04:31', '04:41', '11:59', '15:18', '17:57', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('55', '2019-08-24', '04:31', '04:41', '11:59', '15:18', '17:57', '19:06');
INSERT INTO `tb_jadwalsholat` VALUES ('56', '2019-08-25', '04:31', '04:41', '11:58', '15:17', '17:57', '19:06');
INSERT INTO `tb_jadwalsholat` VALUES ('57', '2019-08-26', '04:30', '04:40', '11:58', '15:17', '17:57', '19:06');
INSERT INTO `tb_jadwalsholat` VALUES ('58', '2019-08-27', '04:30', '04:40', '11:58', '15:16', '17:56', '19:06');
INSERT INTO `tb_jadwalsholat` VALUES ('59', '2019-08-28', '04:29', '04:39', '11:58', '15:16', '17:56', '19:06');
INSERT INTO `tb_jadwalsholat` VALUES ('60', '2019-08-29', '04:29', '04:39', '11:57', '15:15', '17:56', '19:05');
INSERT INTO `tb_jadwalsholat` VALUES ('61', '2019-08-30', '04:29', '04:39', '11:57', '15:15', '17:56', '19:05');
INSERT INTO `tb_jadwalsholat` VALUES ('62', '2019-08-31', '04:28', '04:38', '11:57', '15:14', '17:56', '19:05');
INSERT INTO `tb_jadwalsholat` VALUES ('94', '2019-09-24', '04:33', '04:43', '12:00', '15:21', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('95', '2019-09-25', '04:33', '04:43', '12:00', '15:21', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('96', '2019-09-26', '04:33', '04:43', '12:01', '15:22', '17:53', '19:07');
INSERT INTO `tb_jadwalsholat` VALUES ('97', '2019-09-23', '04:32', '04:42', '12:00', '15:21', '17:53', '19:07');

-- ----------------------------
-- Table structure for `tb_runtext`
-- ----------------------------
DROP TABLE IF EXISTS `tb_runtext`;
CREATE TABLE `tb_runtext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL,
  `urutan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_runtext
-- ----------------------------
INSERT INTO `tb_runtext` VALUES ('7', '', 'testing1', '1');
INSERT INTO `tb_runtext` VALUES ('8', '', 'ts2', '2');
INSERT INTO `tb_runtext` VALUES ('9', '', 'Tes 4', '3');
INSERT INTO `tb_runtext` VALUES ('10', '', 'Wes', '4');

-- ----------------------------
-- Table structure for `tb_setting`
-- ----------------------------
DROP TABLE IF EXISTS `tb_setting`;
CREATE TABLE `tb_setting` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `nama_masjid` varchar(250) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `template` tinyint(1) NOT NULL,
  `runtext` tinyint(1) NOT NULL,
  `image` varchar(200) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `passcode` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_setting
-- ----------------------------
INSERT INTO `tb_setting` VALUES ('1', 'user_1', 'Masjid Al-Mujahidin', 'Jatiwaringin', '0', '0', '0', 'Image_.jpg', '1', '3f5eee07cd8fc847ac5bf7d66c9780e2', '1');

-- ----------------------------
-- Table structure for `tb_vids`
-- ----------------------------
DROP TABLE IF EXISTS `tb_vids`;
CREATE TABLE `tb_vids` (
  `id_vids` int(50) NOT NULL AUTO_INCREMENT,
  `vids` varchar(250) NOT NULL,
  `urut` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id_vids`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_vids
-- ----------------------------
INSERT INTO `tb_vids` VALUES ('2', 'vid2.mp4', '1', '1', '2019-04-02');
INSERT INTO `tb_vids` VALUES ('3', 'Vid_1.mp4', '1', '58', '2019-05-16');
INSERT INTO `tb_vids` VALUES ('4', 'Vid_2.mp4', '2', '58', '2019-05-16');
INSERT INTO `tb_vids` VALUES ('5', 'Vid_22.mp4', '3', '1', '2019-05-21');
