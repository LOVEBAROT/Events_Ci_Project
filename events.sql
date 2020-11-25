/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.10-MariaDB : Database - event
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`event` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `event`;

/*Table structure for table `t_events` */

DROP TABLE IF EXISTS `t_events`;

CREATE TABLE `t_events` (
  `fEventId` int(11) NOT NULL AUTO_INCREMENT,
  `fEventTitle` varchar(255) NOT NULL,
  `fEventStartDate` date NOT NULL,
  `fEventEndDate` date NOT NULL,
  `fRecurrence` varchar(255) NOT NULL,
  PRIMARY KEY (`fEventId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_events` */

insert  into `t_events`(`fEventId`,`fEventTitle`,`fEventStartDate`,`fEventEndDate`,`fRecurrence`) values (4,'test','2020-11-01','2020-11-30','Everyother-day'),(5,'test','2020-11-01','2020-11-30','Every-day');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
