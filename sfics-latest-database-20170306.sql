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
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`) values (1,'admin','admin');

/*Table structure for table `chats` */

DROP TABLE IF EXISTS `chats`;

CREATE TABLE `chats` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `sender_id` int(12) DEFAULT NULL,
  `faculty_rec_id` int(12) DEFAULT NULL,
  `type` varchar(52) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `chats` */

/*Table structure for table `chats_a` */

DROP TABLE IF EXISTS `chats_a`;

CREATE TABLE `chats_a` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `chats_a` */

insert  into `chats_a`(`id`,`message`,`time`) values (1,'hello',1488680043),(2,'hello',1488680052);

/*Table structure for table `class_subjects` */

DROP TABLE IF EXISTS `class_subjects`;

CREATE TABLE `class_subjects` (
  `class_id` int(12) NOT NULL,
  `subject_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `class_subjects` */

insert  into `class_subjects`(`class_id`,`subject_id`) values (1,1),(2,1),(2,2),(2,3),(2,4);

/*Table structure for table `classes` */

DROP TABLE IF EXISTS `classes`;

CREATE TABLE `classes` (
  `class_id` int(12) NOT NULL AUTO_INCREMENT,
  `year_id` int(12) DEFAULT NULL,
  `section_id` int(12) DEFAULT NULL,
  `course_id` int(12) DEFAULT NULL,
  `faculty_id` int(12) DEFAULT NULL,
  KEY `id` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `classes` */

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `course_id` int(12) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(250) DEFAULT NULL,
  `course_desc` varchar(9999) DEFAULT NULL,
  KEY `id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

insert  into `courses`(`course_id`,`course_name`,`course_desc`) values (1,'BSIT','Bachelor of Science in Information Technology');

/*Table structure for table `faculty` */

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `fac_fname` varchar(25) DEFAULT NULL,
  `fac_mname` varchar(24) DEFAULT NULL,
  `fac_lname` varchar(50) DEFAULT NULL,
  `fac_email` varchar(250) DEFAULT NULL,
  `fac_address` varchar(255) DEFAULT NULL,
  `fac_age` int(3) DEFAULT NULL,
  `fac_contact` double(11,0) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `faculty` */

insert  into `faculty`(`id`,`username`,`password`,`fac_fname`,`fac_mname`,`fac_lname`,`fac_email`,`fac_address`,`fac_age`,`fac_contact`,`status`,`img`) values (1,'professor-2017-823','faculty','Ako','','Professor','c.almayda09@gmail.com','St. Joseph Village 10 San Pedro, Laguna',NULL,9283282989,'approve',NULL),(2,'einstein-2017-293','faculty','Albert','Ohta','Einstein','albert@einstein.com','St. Joseph Village 10 San Pedro, Laguna',NULL,92839283728,'approve',NULL);

/*Table structure for table `front_vid` */

DROP TABLE IF EXISTS `front_vid`;

CREATE TABLE `front_vid` (
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `front_vid` */

/*Table structure for table `grades` */

DROP TABLE IF EXISTS `grades`;

CREATE TABLE `grades` (
  `grd_id` int(12) NOT NULL AUTO_INCREMENT,
  `sem` varchar(255) DEFAULT NULL,
  `fac_id` int(12) DEFAULT NULL,
  `graded_subject_id` int(12) DEFAULT NULL,
  `graded_student_id` int(12) DEFAULT NULL,
  `prelim` float DEFAULT NULL,
  `midterm` float DEFAULT NULL,
  `prefinals` float DEFAULT NULL,
  `finals` float DEFAULT NULL,
  `final_grade` float DEFAULT NULL,
  PRIMARY KEY (`grd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `grades` */

insert  into `grades`(`grd_id`,`sem`,`fac_id`,`graded_subject_id`,`graded_student_id`,`prelim`,`midterm`,`prefinals`,`finals`,`final_grade`) values (1,NULL,1,1,3,1.25,1.75,1.25,2,1.5625),(2,NULL,1,2,3,2,2.75,1.75,2,2.125),(3,NULL,1,1,2,1.75,1.75,1.5,1.5,1.625),(4,NULL,2,4,3,2.75,2.25,2.5,2.75,2.5625);

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

insert  into `messages`(`id`,`user`,`nickname`,`time`,`message`,`img`) values (49,'Almayda, Carl Joshua Regis','Carl Joshua','03:33:11','Hi!','thumb-1920-782992.png');

/*Table structure for table `new_chats` */

DROP TABLE IF EXISTS `new_chats`;

CREATE TABLE `new_chats` (
  `ChatId` int(12) NOT NULL AUTO_INCREMENT,
  `ChatUserID` int(12) NOT NULL,
  `ChatText` varchar(255) DEFAULT NULL,
  `Type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ChatId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `new_chats` */

insert  into `new_chats`(`ChatId`,`ChatUserID`,`ChatText`,`Type`) values (1,3,'Hi\n',NULL),(2,3,'asdasd\n',NULL);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `details` varchar(999) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `news` */

insert  into `news`(`id`,`img`,`desc`,`date`,`details`) values (6,'e2-12461.jpg','The first news','2017-03-05 01:28:39','This is the first news'),(7,'thumb-1920-7829921.png','Konosuba Megumin Visit','2017-03-05 01:29:40','The arch demon will visit the university this coming Monday');

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `sec_id` int(12) NOT NULL AUTO_INCREMENT,
  `section_id` int(12) DEFAULT NULL,
  `course_id` int(12) DEFAULT NULL,
  `year_id` int(12) DEFAULT NULL,
  `faculty_id` int(12) DEFAULT NULL,
  KEY `section_id` (`section_id`),
  KEY `id` (`sec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sections` */

insert  into `sections`(`sec_id`,`section_id`,`course_id`,`year_id`,`faculty_id`) values (1,1,1,1,NULL),(2,1,1,4,NULL);

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `student_id` int(12) NOT NULL AUTO_INCREMENT,
  `stud_year_id` int(12) DEFAULT NULL,
  `section_id` int(12) DEFAULT NULL,
  `course_id` int(20) NOT NULL,
  `studnum` varchar(255) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `age` int(12) DEFAULT NULL,
  `contact` double(11,0) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `img` varchar(999) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  KEY `id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`student_id`,`stud_year_id`,`section_id`,`course_id`,`studnum`,`username`,`password`,`email`,`fname`,`mname`,`lname`,`age`,`contact`,`address`,`img`,`status`) values (2,1,1,1,'CONCHA-2017-002','concha-2017-002','VL3Cq2aK','paulo.concha@gmail.com','Paulo','Donacao','Concha',20,9390684857,'Kyoto, Japan',NULL,'active'),(3,4,2,1,'ALMAYDA-2017-003','almayda-2017-003','8hYSq9Op','c.almayda09@gmail.com','Carl Joshua','Regis','Almayda',21,0,'San Pedro Laguna','thumb-1920-782992.png','active');

/*Table structure for table `subjects` */

DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `faculty_id` int(12) DEFAULT NULL,
  `course_id` int(12) DEFAULT NULL,
  `subject_id` int(12) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) DEFAULT NULL,
  `subject_desc` varchar(255) DEFAULT NULL,
  `sem_type` varchar(3) DEFAULT NULL,
  `year` int(12) DEFAULT NULL,
  KEY `id` (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `subjects` */

insert  into `subjects`(`faculty_id`,`course_id`,`subject_id`,`subject_code`,`subject_desc`,`sem_type`,`year`) values (1,1,1,'INTE2031','Game Development','1st',NULL),(1,1,2,'ANIM2321','Animation','1st',NULL),(2,1,3,'PROG2039','Programming 1','1st',NULL),(2,1,4,'SHWR2012','Shawarma Subject','1st',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
