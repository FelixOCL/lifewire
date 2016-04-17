/*
SQLyog Community v12.18 (64 bit)
MySQL - 5.5.47-0ubuntu0.14.04.1 : Database - db_life_wire
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_life_wire` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_life_wire`;

/*Table structure for table `lwp_post` */

DROP TABLE IF EXISTS `lwp_post`;

CREATE TABLE `lwp_post` (
  `lwp_id` int(11) NOT NULL AUTO_INCREMENT,
  `lwp_user` varchar(100) NOT NULL,
  `lwp_title` varchar(255) DEFAULT NULL COMMENT 'title for post',
  `lwp_description` varchar(255) DEFAULT NULL,
  `lwp_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lwp_name` varchar(255) DEFAULT NULL,
  `lwp_show` tinyint(1) DEFAULT '1' COMMENT 'tells to show or not this post',
  `lwp_type` varchar(3) DEFAULT NULL COMMENT 'extention of the file',
  PRIMARY KEY (`lwp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
