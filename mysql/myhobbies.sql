/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : myhobbies

 Target Server Type    : MariaDB
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 05/08/2023 23:57:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for list
-- ----------------------------
DROP TABLE IF EXISTS `list`;
CREATE TABLE `list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of list
-- ----------------------------
INSERT INTO `list` VALUES (1, 'ฟังเพลง', 'ฟังเพลง', 'uploads/imagesimg-01-big.jpg');
INSERT INTO `list` VALUES (2, 'ปลูกแคลตัส', 'ปลูกแคลตัส', 'uploads/imagesimg-04.jpg');
INSERT INTO `list` VALUES (5, 'ล่องเรือ', 'มาหารักซักคน รวยหรือจนให้ใจรักแน่', 'uploads/imagesimg-13.jpg');

SET FOREIGN_KEY_CHECKS = 1;
