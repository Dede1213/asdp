/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - db_asdp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_asdp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_asdp`;

/*Table structure for table `m_cabang` */

DROP TABLE IF EXISTS `m_cabang`;

CREATE TABLE `m_cabang` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(255) DEFAULT NULL,
  `regional` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `m_cabang` */

insert  into `m_cabang`(`id`,`nama_cabang`,`regional`,`created`) values (1,'Banda Aceh','Regional 1',NULL),(2,'Singkil','Regional 1',NULL),(3,'Bangka','Regional 1',NULL),(4,'Batam','Regional 1',NULL),(5,'Padang','Regional 1',NULL),(7,'Simbolga','Regional 1',NULL),(9,'Merak','Regional 2',NULL),(10,'Jepara','Regional 2',NULL),(11,'Balikpapan','Regional 2',NULL),(12,'Pontianak','Regional 2',NULL),(13,'Bajoe','Regional 2',NULL),(14,'Batulicin','Regional 2',NULL),(16,'Surabaya','Regional 3',NULL),(17,'Ketapang','Regional 3',NULL),(18,'Lembar','Regional 3',NULL),(19,'Kupang','Regional 3',NULL),(20,'Selayar','Regional 3',NULL),(21,'Sape','Regional 3',NULL),(22,'Bau-bau','Regional 3',NULL),(23,'Kayangan','Regional 3',NULL),(24,'Luwuk','Regional 4',NULL),(25,'Ambon','Regional 4',NULL),(26,'Ternate','Regional 4',NULL),(27,'Bitung','Regional 4',NULL),(28,'Sorong','Regional 4',NULL),(29,'Merauke','Regional 4',NULL);

/*Table structure for table `m_cabang_user` */

DROP TABLE IF EXISTS `m_cabang_user`;

CREATE TABLE `m_cabang_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_cabang` int(5) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `created` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `m_cabang_user` */

insert  into `m_cabang_user`(`id`,`id_cabang`,`id_user`,`created`) values (6,1,1,'2020-06-28 06:32:45.14397'),(7,2,1,'2020-06-28 06:32:45.24358'),(8,3,1,'2020-06-28 06:32:45.32152'),(9,4,1,'2020-06-28 06:32:45.36135'),(10,5,1,'2020-06-28 06:32:45.39892'),(11,7,1,'2020-06-28 06:32:45.43826'),(12,14,1,'2020-06-28 06:32:45.49870');

/*Table structure for table `m_group` */

DROP TABLE IF EXISTS `m_group`;

CREATE TABLE `m_group` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `m_group` */

insert  into `m_group`(`id`,`nama_group`,`created`) values (1,'Super Admin','2020-06-26 22:04:44'),(2,'Direktur','2020-06-26 22:04:50'),(3,'Regional Manager','2020-06-26 22:05:02'),(4,'Manager','2020-06-26 22:05:05'),(5,'Supervisor','2020-06-26 22:05:11'),(6,'Staff','2020-06-26 22:05:15');

/*Table structure for table `m_menu` */

DROP TABLE IF EXISTS `m_menu`;

CREATE TABLE `m_menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `menu` varchar(200) NOT NULL DEFAULT '',
  `menu_order` int(5) unsigned NOT NULL DEFAULT '0',
  `icon` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_menu` */

insert  into `m_menu`(`id`,`parent_id`,`menu`,`menu_order`,`icon`,`link`,`created`) values (37,61,'Setting Menu',1000,'fas fa-cogs','menu','2020-06-27 08:24:58'),(38,61,'Setting User',1001,'fas fa-cogs','user','2020-06-27 21:50:31'),(58,0,'Home',1,'fa fa-home','home','2020-02-22 08:11:18'),(59,61,'Setting Group',1002,'fa fa-cogs','group','2020-06-27 21:50:36'),(60,0,'Logout',2000,'fas fa-sign-out-alt','login/logout','2020-06-27 08:22:39'),(61,0,'Setting',1000,'fa fa-cogs','home','2020-06-27 21:50:40'),(62,61,'Setting Cabang',1003,'fa fa-cogs','cabang','2020-06-27 21:50:48'),(63,0,'Module Kerusakan',2,'fa fa-folder','#','2020-06-28 07:18:31'),(64,63,'Form Kerusakan',1,'fa fa-file','kerusakan','2020-06-28 07:19:26');

/*Table structure for table `m_menu_group` */

DROP TABLE IF EXISTS `m_menu_group`;

CREATE TABLE `m_menu_group` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_group` int(5) DEFAULT NULL,
  `id_menu` int(5) DEFAULT NULL,
  `created` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Data for the table `m_menu_group` */

insert  into `m_menu_group`(`id`,`id_group`,`id_menu`,`created`) values (35,6,58,'2020-06-27 08:34:25.87201'),(36,6,60,'2020-06-27 08:34:26.00977'),(37,6,61,'2020-06-27 08:34:26.09806'),(38,6,37,'2020-06-27 08:34:26.16429'),(64,1,58,'2020-06-28 07:19:37.54753'),(65,1,60,'2020-06-28 07:19:37.65328'),(66,1,61,'2020-06-28 07:19:37.77983'),(67,1,37,'2020-06-28 07:19:37.83520'),(68,1,38,'2020-06-28 07:19:37.87480'),(69,1,59,'2020-06-28 07:19:37.94604'),(70,1,62,'2020-06-28 07:19:37.98475'),(71,1,63,'2020-06-28 07:19:38.02393'),(72,1,64,'2020-06-28 07:19:38.06278');

/*Table structure for table `m_menu_user` */

DROP TABLE IF EXISTS `m_menu_user`;

CREATE TABLE `m_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=341 DEFAULT CHARSET=latin1;

/*Data for the table `m_menu_user` */

insert  into `m_menu_user`(`id`,`id_menu`,`id_user`,`created`) values (337,'37','1','2020-06-27 07:19:04'),(338,'38','1','2020-06-27 07:19:04'),(339,'58','1','2020-06-27 07:19:04'),(340,'59','1','2020-06-27 07:19:04');

/*Table structure for table `m_user` */

DROP TABLE IF EXISTS `m_user`;

CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_group` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `m_user` */

insert  into `m_user`(`id`,`nama`,`username`,`password`,`id_group`,`created`) values (1,'Super Admin','admin','240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',1,'2020-06-26 22:07:26'),(4,'Staff','Staff','10176e7b7b24d317acfcf8d2064cfd2f24e154f7b5a96603077d5ef813d6a6b6',6,'2020-06-27 07:00:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
