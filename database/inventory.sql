/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.1.38-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inventory`;

/*Table structure for table `kitassembly` */

DROP TABLE IF EXISTS `kitassembly`;

CREATE TABLE `kitassembly` (
  `id` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `unitcost` decimal(10,3) DEFAULT NULL,
  `sellingpricePHIC` decimal(10,3) NOT NULL,
  `sellingpriceOPD` decimal(10,3) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `kitassemblydetails` */

DROP TABLE IF EXISTS `kitassemblydetails`;

CREATE TABLE `kitassemblydetails` (
  `autono` int(45) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) DEFAULT NULL,
  `productcode` varchar(100) DEFAULT NULL,
  `productdesc` varchar(200) DEFAULT NULL,
  `productqty` int(100) DEFAULT NULL,
  PRIMARY KEY (`autono`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Table structure for table `kitassemblyreference` */

DROP TABLE IF EXISTS `kitassemblyreference`;

CREATE TABLE `kitassemblyreference` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `refno` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `itemcode` varchar(100) NOT NULL,
  `itemquantity` int(45) NOT NULL,
  `quantity` int(45) NOT NULL,
  `datearray` date NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `production` */

DROP TABLE IF EXISTS `production`;

CREATE TABLE `production` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prodcode` varchar(255) NOT NULL,
  `proddesc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `purchase_order` */

DROP TABLE IF EXISTS `purchase_order`;

CREATE TABLE `purchase_order` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `pono` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'pending',
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `receiving` */

DROP TABLE IF EXISTS `receiving`;

CREATE TABLE `receiving` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `prodtype` varchar(100) DEFAULT NULL,
  `production` int(11) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  `receiving` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Table structure for table `seqpatientid` */

DROP TABLE IF EXISTS `seqpatientid`;

CREATE TABLE `seqpatientid` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `seq_name` varchar(100) DEFAULT NULL,
  `seq_code` varchar(100) DEFAULT NULL,
  `last_value` int(11) DEFAULT NULL,
  `last_gen_date` date DEFAULT NULL,
  `last_gen_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `stocktable` */

DROP TABLE IF EXISTS `stocktable`;

CREATE TABLE `stocktable` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `rrno` varchar(100) DEFAULT NULL,
  `invno` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `lotno` varchar(100) DEFAULT NULL,
  `trantype` varchar(100) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  `loginuser` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=latin1;

/*Table structure for table `stocktablepayables` */

DROP TABLE IF EXISTS `stocktablepayables`;

CREATE TABLE `stocktablepayables` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `rrno` varchar(100) DEFAULT NULL,
  `invno` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `lotno` varchar(100) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  `loginuser` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
