/*
 Navicat Premium Data Transfer

 Source Server         : LocalHost - MAMP
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : curso_php_blog

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 21/11/2018 00:10:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articulos
-- ----------------------------
DROP TABLE IF EXISTS `articulos`;
CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `extracto` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `texto` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articulos
-- ----------------------------
BEGIN;
INSERT INTO `articulos` VALUES (1, 'Primer articulo Actu', 'Primer articulo..... Actuali', '2018-11-21 00:04:40', 'Primer articulo esto es una caca de baca...', 'primer-articulo.jpg');
INSERT INTO `articulos` VALUES (2, 'Segundo articulo', 'Segundo articulo....', '2018-11-18 15:35:41', 'Segundo articulo esto es una mierda como una casa', 'segundo-articulo.jpg');
INSERT INTO `articulos` VALUES (3, 'Tercer articulo', 'Tercer erticulo extracto....', '2018-11-19 23:07:45', 'Tercert articulo texto....', 'tercer-articulo.jpg');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
