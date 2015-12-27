/*
Navicat MySQL Data Transfer

Source Server         : connection
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : base

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-27 22:55:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `kind` int(4) NOT NULL,
  `state` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('2', '教务在线', 'http://jwzx.cqupt.edu.cn/', '3', '1');
INSERT INTO `nav` VALUES ('3', '文峰英语', 'http://202.202.43.36/webCollege/', '2', '1');
INSERT INTO `nav` VALUES ('4', '党委办公室', 'http://office.cqupt.edu.cn/', '3', '1');
INSERT INTO `nav` VALUES ('8', '教务在线', 'http://jwzx.cqupt.edu.cn/', '1', '1');
