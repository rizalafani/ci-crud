/*
SQLyog Enterprise - MySQL GUI v6.06
Host - 5.5.16 : Database - bukutamu
*********************************************************************
Server version : 5.5.16
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `bukutamu`;

USE `bukutamu`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `guestbook` */

DROP TABLE IF EXISTS `guestbook`;

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `guestbook` */

insert  into `guestbook`(`id`,`nama`,`email`,`alamat`) values (1,'Ahmad Rizal Afani','ahmadrizalafani@gmail.com','Kertosari, Banyuwangi'),(2,'Nur Layla','nur_layla@gmail.com','Wonosobo, Banyuwango'),(4,'Zaky Saputra','zaky_dork@gmail.com','Songgon, Banyuwangi'),(5,'Shohiful Faidilah','fshohiful@gmail.com','Kaligung, Banyuwangi'),(6,'Faradis Paranjarewes','faradis.winda@gmail.com','Genteng, Banyuwangi'),(7,'Asharuf Fahrizi','panjoel_fahri@gmail.com','Songgon, Banyuwangi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
