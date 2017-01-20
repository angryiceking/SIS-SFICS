/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.16-MariaDB : Database - student-portal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`student-portal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `student-portal`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `username` varchar(23) DEFAULT NULL,
  `password` varchar(123) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`) values (1,'admin','admin');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `news` */

insert  into `news`(`id`,`img`,`desc`) values (1,'2035552.jpg','My Youth Romantic Comedy is Wrong as I Expected is going to have a season 3!'),(2,'2035553.jpg','My Youth Romantic Comedy is Wrong as I Expected is going to have a season 3!'),(3,'2035554.jpg','My Youth Romantic Comedy is Wrong as I Expected is going to have a season 3! 22 22 '),(4,'2035555.jpg','My Youth Romantic Comedy is Wrong as I Expected is going to have a season 3! 22 22 ');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(255) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `age` int(12) DEFAULT NULL,
  `contact` double(11,0) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `img` varchar(999) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`id`,`studnum`,`username`,`password`,`fname`,`mname`,`lname`,`age`,`contact`,`address`,`img`,`status`) values (2,'ALMAYDA-2016-0XXX','Addressss','xxxxx','Carl Joshua','Regis','Almayda',20,923928272,'asdasdasd',NULL,'active'),(3,'CONCHA-2016-0XXX','concha-2016-273','xxxxx','Paolo','Donacao','Concha',20,928372812,'San Pedro Laguna',NULL,'active'),(4,'HACHIMAN-2016-0XXX','hachiman-2016-273','xxxxx','Hikigaya','','Hachiman',20,927372817,'Kyoto, Japan',NULL,'active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
