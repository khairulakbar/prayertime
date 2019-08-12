/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prayertime_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-12 13:48:58
*/

SET FOREIGN_KEY_CHECKS=0;
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_jadwalsholat
-- ----------------------------
INSERT INTO `tb_jadwalsholat` VALUES ('1', '2019-07-01', '04:32', '04:42', '12:00', '15:21', '17:53', '19:07');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_runtext
-- ----------------------------
INSERT INTO `tb_runtext` VALUES ('1', 'Test 1', 'This is running text', '1');
INSERT INTO `tb_runtext` VALUES ('2', 'Test 2', 'This is second running text', '2');

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
  `runtext` tinyint(1) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_setting
-- ----------------------------
INSERT INTO `tb_setting` VALUES ('1', 'user_1', 'Masjid Al-Mujahidin', 'Jatiwaringin', '1', '1', 'Image_.jpg');
