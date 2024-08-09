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

/*Data for the table `kitassembly` */

/*Table structure for table `kitassemblydetails` */

DROP TABLE IF EXISTS `kitassemblydetails`;

CREATE TABLE `kitassemblydetails` (
  `autono` int(45) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) DEFAULT NULL,
  `productcode` varchar(100) DEFAULT NULL,
  `productdesc` varchar(200) DEFAULT NULL,
  `productqty` int(100) DEFAULT NULL,
  PRIMARY KEY (`autono`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kitassemblydetails` */

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

/*Data for the table `kitassemblyreference` */

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

/*Data for the table `production` */

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

/*Data for the table `purchase_order` */

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `receiving` */

insert  into `receiving`(`id`,`code`,`description`,`unit`,`prodtype`,`production`,`datearray`,`timearray`,`receiving`) values 
(1,'20240809113817','AF13 Acid Concentrate','box','RDU SUPPLIES',1,'2024-08-09','11:38:17',1),
(2,'20240809114117','BI84 Bicarbonate Concentrate','packs','RDU SUPPLIES',1,'2024-08-09','11:41:17',1),
(3,'20240809114207','Bloodlines','pc','KIT SUPPLIES',0,'2024-08-09','11:42:07',1),
(4,'20240809114238','A Fistula G16','pc','KIT SUPPLIES',0,'2024-08-09','11:42:38',1),
(5,'20240809114250','V Fistula G16','pc','KIT SUPPLIES',0,'2024-08-09','11:42:50',1),
(6,'20240809114317','Diasafe Plus Filter','pc','KIT SUPPLIES',0,'2024-08-09','11:43:17',1),
(7,'20240809114401','Citrein','pc','RDU SUPPLIES',1,'2024-08-09','11:44:01',1),
(8,'20240809114443','PNSS','bot','KIT SUPPLIES',0,'2024-08-09','11:44:43',1),
(9,'20240809114531','Heparin Vial 25,000 IU per vial','bot','RDU SUPPLIES',1,'2024-08-09','11:45:31',1),
(10,'20240809114603','Sterile HD Fistula Kit','pc','KIT SUPPLIES',0,'2024-08-09','11:46:03',1),
(11,'20240809114628','Execlean Dialyzer Sterilant','gal','KIT SUPPLIES',0,'2024-08-09','11:46:28',1),
(12,'20240809114647','Residual Test Strips','tube','RDU SUPPLIES',1,'2024-08-09','11:46:47',0),
(13,'20240809114709','Perassay Test Strips','tube','RDU SUPPLIES',1,'2024-08-09','11:47:09',0),
(14,'20240809114727','Dialyzer LF/HF','pc','KIT SUPPLIES',0,'2024-08-09','11:47:27',1),
(15,'20240809131042','AF13 Acid Concentrate 4.55L','tx','KIT SUPPLIES',0,'2024-08-09','13:10:42',0),
(17,'20240809131221','Citrein 1 Gal','gal','KIT SUPPLIES',0,'2024-08-09','13:12:21',0),
(18,'20240809131305','Heparin Vial 25,000 IU per vial','vial','KIT SUPPLIES',0,'2024-08-09','13:13:05',0),
(19,'20240809131408','Residual Test Strips','pc','KIT SUPPLIES',0,'2024-08-09','13:14:08',0),
(20,'20240809131421','Perassay Test Strips','pc','KIT SUPPLIES',0,'2024-08-09','13:14:21',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `seqpatientid` */

insert  into `seqpatientid`(`id`,`seq_name`,`seq_code`,`last_value`,`last_gen_date`,`last_gen_by`) values 
(1,'RRN','2024',14,'2024-08-09','Eczekiel Aboy');

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
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `stocktable` */

insert  into `stocktable`(`id`,`rrno`,`invno`,`code`,`quantity`,`expiration`,`lotno`,`datearray`,`timearray`) values 
(1,NULL,NULL,'20240809113817',0,NULL,NULL,'2024-08-09','11:38:17'),
(2,NULL,NULL,'20240809114117',0,NULL,NULL,'2024-08-09','11:41:17'),
(3,NULL,NULL,'20240809114207',0,NULL,NULL,'2024-08-09','11:42:07'),
(4,NULL,NULL,'20240809114238',0,NULL,NULL,'2024-08-09','11:42:38'),
(5,NULL,NULL,'20240809114250',0,NULL,NULL,'2024-08-09','11:42:50'),
(6,NULL,NULL,'20240809114317',0,NULL,NULL,'2024-08-09','11:43:17'),
(7,NULL,NULL,'20240809114401',0,NULL,NULL,'2024-08-09','11:44:01'),
(8,NULL,NULL,'20240809114443',0,NULL,NULL,'2024-08-09','11:44:43'),
(9,NULL,NULL,'20240809114531',0,NULL,NULL,'2024-08-09','11:45:31'),
(10,NULL,NULL,'20240809114603',0,NULL,NULL,'2024-08-09','11:46:03'),
(11,NULL,NULL,'20240809114628',0,NULL,NULL,'2024-08-09','11:46:28'),
(12,NULL,NULL,'20240809114647',0,NULL,NULL,'2024-08-09','11:46:47'),
(13,NULL,NULL,'20240809114709',0,NULL,NULL,'2024-08-09','11:47:09'),
(14,NULL,NULL,'20240809114727',0,NULL,NULL,'2024-08-09','11:47:27'),
(15,NULL,NULL,'20240809131042',0,NULL,NULL,'2024-08-09','13:10:42'),
(17,NULL,NULL,'20240809131221',0,NULL,NULL,'2024-08-09','13:12:21'),
(18,NULL,NULL,'20240809131305',0,NULL,NULL,'2024-08-09','13:13:05'),
(19,NULL,NULL,'20240809131408',0,NULL,NULL,'2024-08-09','13:14:08'),
(20,NULL,NULL,'20240809131421',0,NULL,NULL,'2024-08-09','13:14:21'),
(21,'RRN202400014','007992','20240809113817',68,'0000-00-00','AFAEFAW4454','2024-07-23','14:09:50'),
(22,'RRN202400014','007992','20240809114117',75,'0000-00-00','AFAWFAFAE454','2024-07-23','14:09:50'),
(23,'RRN202400014','007992','20240809114207',1500,'0000-00-00','AEFAWEF4565465','2024-07-23','14:09:50'),
(24,'RRN202400014','007992','20240809114238',1500,'0000-00-00','AFAWEFE65465','2024-07-23','14:09:50'),
(25,'RRN202400014','007992','20240809114250',1500,'0000-00-00','SDFVSEA4654','2024-07-23','14:09:50'),
(26,'RRN202400014','007992','20240809114317',15,'0000-00-00','AFEFAEF1545465','2024-07-23','14:09:50'),
(27,'RRN202400014','007992','20240809114401',15,'0000-00-00','AEFASEFA165165','2024-07-23','14:09:50'),
(28,'RRN202400014','007992','20240809114443',3000,'0000-00-00','ASFSEF5454','2024-07-23','14:09:50'),
(29,'RRN202400014','007992','20240809114531',300,'0000-00-00','ASFDSEF15486','2024-07-23','14:09:50'),
(30,'RRN202400014','007992','20240809114603',1500,'0000-00-00','XZXVERAWE65465','2024-07-23','14:09:50'),
(31,'RRN202400014','007992','20240809114628',11,'0000-00-00','ZVAWEFAWEF16846851','2024-07-23','14:09:50'),
(32,'RRN202400014','007992','20240809114647',15,'0000-00-00','DFAEFA3135468','2024-07-23','14:09:50'),
(33,'RRN202400014','007992','20240809114709',15,'0000-00-00','ASDFAEFA1584','2024-07-23','14:09:50'),
(35,'RRN202400014',NULL,'20240809114647',-1,'0000-00-00','DFAEFA3135468','2024-08-09','15:58:25'),
(36,'RRN202400014',NULL,'20240809131408',100,'0000-00-00','DFAEFA3135468','2024-08-09','15:58:25');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `stocktablepayables` */

insert  into `stocktablepayables`(`id`,`rrno`,`invno`,`code`,`quantity`,`expiration`,`lotno`,`datearray`,`timearray`) values 
(1,'RRN202400014','007992','20240809113817',68,'0000-00-00','AFAEFAW4454','2024-07-23','14:09:50'),
(2,'RRN202400014','007992','20240809114117',75,'0000-00-00','AFAWFAFAE454','2024-07-23','14:09:50'),
(3,'RRN202400014','007992','20240809114207',1500,'0000-00-00','AEFAWEF4565465','2024-07-23','14:09:50'),
(4,'RRN202400014','007992','20240809114238',1500,'0000-00-00','AFAWEFE65465','2024-07-23','14:09:50'),
(5,'RRN202400014','007992','20240809114250',1500,'0000-00-00','SDFVSEA4654','2024-07-23','14:09:50'),
(6,'RRN202400014','007992','20240809114317',15,'0000-00-00','AFEFAEF1545465','2024-07-23','14:09:50'),
(7,'RRN202400014','007992','20240809114401',15,'0000-00-00','AEFASEFA165165','2024-07-23','14:09:50'),
(8,'RRN202400014','007992','20240809114443',3000,'0000-00-00','ASFSEF5454','2024-07-23','14:09:50'),
(9,'RRN202400014','007992','20240809114531',300,'0000-00-00','ASFDSEF15486','2024-07-23','14:09:50'),
(10,'RRN202400014','007992','20240809114603',1500,'0000-00-00','XZXVERAWE65465','2024-07-23','14:09:50'),
(11,'RRN202400014','007992','20240809114628',11,'0000-00-00','ZVAWEFAWEF16846851','2024-07-23','14:09:50'),
(12,'RRN202400014','007992','20240809114647',15,'0000-00-00','DFAEFA3135468','2024-07-23','14:09:50'),
(13,'RRN202400014','007992','20240809114709',15,'0000-00-00','ASDFAEFA1584','2024-07-23','14:09:50');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`fullname`) values 
(5,'shakiel17','1234','Eczekiel Aboy');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
