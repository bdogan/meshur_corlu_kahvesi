/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50534
 Source Host           : localhost
 Source Database       : meshur_corlu_kahvesi

 Target Server Type    : MySQL
 Target Server Version : 50534
 File Encoding         : utf-8

 Date: 08/17/2014 18:40:48 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `super_user` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'Burak', 'Doğan', 'bdogan85@gmail.com', '3a9e8a740b5d5c0d19625bff90a9f92e', '1', '1', '2014-08-17 15:44:20', null), ('2', 'Sedef', 'Gaygusuzoğlu', 'sedef@landofsedef.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', '0', '2014-08-17 16:12:45', '2014-08-17 15:32:50');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
