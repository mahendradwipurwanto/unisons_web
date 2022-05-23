/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - u434309042_tim_a
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`u434309042_tim_a` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `u434309042_tim_a`;

/*Table structure for table `m_answer` */

DROP TABLE IF EXISTS `m_answer`;

CREATE TABLE `m_answer` (
  `id_answer` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_review` int(11) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(11) NOT NULL,
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id_answer`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_answer` */

insert  into `m_answer`(`id_answer`,`answer`,`id_user`,`id_review`,`created_at`,`created_by`,`modified_at`,`modified_by`,`is_deleted`) values 
(4,'Terimakasih',71,1,1644393534,71,1644393534,71,0),
(5,'Sama sama',47,1,1644393627,47,1644393627,47,0);

/*Table structure for table `m_detail_order` */

DROP TABLE IF EXISTS `m_detail_order`;

CREATE TABLE `m_detail_order` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT 0,
  `topping` varchar(255) DEFAULT '0',
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id_detail`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_detail_order` */

insert  into `m_detail_order`(`id_detail`,`id_order`,`id_menu`,`level`,`topping`,`jumlah`,`total`,`catatan`,`is_deleted`) values 
(181,96,2,0,'',1,18000,'\"\"',0),
(182,97,9,0,'',1,10000,'\"\"',0),
(183,98,9,0,'',1,10000,'\"none\"',0),
(184,98,3,0,'',1,9000,'\"\"',0),
(185,99,3,0,'',1,9000,'\"\"',0),
(186,100,9,0,'',1,10000,'\"\"',0),
(187,101,2,1,'[1,2]',2,36000,'',0),
(188,101,3,2,'[2,3]',1,10000,'',0),
(189,102,2,1,'[1,2]',2,36000,'',0),
(190,102,3,2,'[2,3]',1,10000,'',0),
(191,105,2,1,'[1,2]',2,36000,'',0),
(192,105,3,2,'[2,3]',1,10000,'',0),
(193,106,2,5,'[]',1,18000,'\"\"',0),
(194,107,3,3,'[1]',1,9000,'\"aaa\"',0);

/*Table structure for table `m_diskon` */

DROP TABLE IF EXISTS `m_diskon`;

CREATE TABLE `m_diskon` (
  `id_diskon` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_promo` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_diskon`) USING BTREE,
  KEY `id_user` (`id_user`) USING BTREE,
  KEY `id_promo` (`id_promo`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_diskon` */

insert  into `m_diskon`(`id_diskon`,`id_user`,`id_promo`,`status`,`is_deleted`) values 
(1,1,3,0,0),
(2,47,3,0,0),
(3,1,3,0,0);

/*Table structure for table `m_menu` */

DROP TABLE IF EXISTS `m_menu`;

CREATE TABLE `m_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL DEFAULT 'makanan',
  `harga` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_menu`) USING BTREE,
  KEY `created_by` (`created_by`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_menu` */

insert  into `m_menu`(`id_menu`,`nama`,`kategori`,`harga`,`deskripsi`,`foto`,`status`,`is_deleted`,`created_at`,`created_by`) values 
(2,'Ayam Preksu','makanan',18000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://i.ibb.co/R9kJtny/1637916829.png',1,0,'2022-01-20 11:59:41',1),
(3,'Lemon Tea','minuman',9000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://i.ibb.co/ZJhqwgw/1637916759.png',1,0,'2022-01-20 17:16:41',1),
(4,'Chiken Katsu','makanan',12000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://i.ibb.co/R9kJtny/1637916829.png',1,0,'2022-01-20 17:16:13',1),
(9,'Nasi Goreng','makanan',10000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://i.ibb.co/KNxRXBN/1637916792.png',1,0,'2022-01-20 17:16:42',1);

/*Table structure for table `m_menu_detail` */

DROP TABLE IF EXISTS `m_menu_detail`;

CREATE TABLE `m_menu_detail` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_detail`) USING BTREE,
  KEY `id_menu` (`id_menu`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_menu_detail` */

insert  into `m_menu_detail`(`id_detail`,`id_menu`,`keterangan`,`type`,`harga`,`is_deleted`) values 
(1,3,'boba','topping',2000,0),
(2,3,'oreo','topping',2000,0),
(3,3,'1','level',2000,0),
(4,3,'2','level',2000,0),
(5,2,'1','level',1000,0);

/*Table structure for table `m_order` */

DROP TABLE IF EXISTS `m_order`;

CREATE TABLE `m_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `no_struk` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `id_diskon` varchar(255) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `potongan` int(11) DEFAULT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_order`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_order` */

insert  into `m_order`(`id_order`,`no_struk`,`id_user`,`tanggal`,`id_voucher`,`id_diskon`,`diskon`,`potongan`,`total_bayar`,`status`,`is_deleted`) values 
(96,'001/KWT/01/2022',58,'2022-01-22',0,'[]',0,0,18000,0,0),
(97,'002/KWT/01/2022',47,'2022-01-24',0,'[]',0,0,10000,4,0),
(98,'003/KWT/01/2022',47,'2022-01-24',0,'[]',0,0,19000,4,0),
(99,'004/KWT/01/2022',47,'2022-01-24',0,'[]',0,0,9000,4,0),
(100,'005/KWT/01/2022',47,'2022-01-24',0,'[]',0,0,10000,0,0),
(101,'001/KWT/02/2022',1,'2022-02-05',1,'',0,12800,12800,0,0),
(102,'002/KWT/02/2022',1,'2022-02-05',1,'',0,12800,12800,0,0),
(103,'003/KWT/02/2022',47,'2022-02-05',0,'[]',0,0,18000,0,0),
(104,'004/KWT/02/2022',1,'2022-02-05',0,'[1,3]',20,-3600,14400,4,0),
(105,'005/KWT/02/2022',1,'2022-02-05',1,'',0,12800,12800,0,0),
(106,'006/KWT/02/2022',1,'2022-02-05',0,'[1,3]',20,-3600,14400,0,0),
(107,'007/KWT/02/2022',1,'2022-02-05',0,'[]',0,0,9000,0,0);

/*Table structure for table `m_promo` */

DROP TABLE IF EXISTS `m_promo`;

CREATE TABLE `m_promo` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL DEFAULT '0',
  `diskon` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `kadaluarsa` int(11) DEFAULT NULL,
  `syarat_ketentuan` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_promo`) USING BTREE,
  KEY `created_by` (`created_by`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_promo` */

insert  into `m_promo`(`id_promo`,`nama`,`type`,`diskon`,`nominal`,`kadaluarsa`,`syarat_ketentuan`,`foto`,`created_at`,`created_by`,`is_deleted`) values 
(1,'Koordinator Program kekompakan','voucher',NULL,11600,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL,2147483647,1,0),
(2,'Birthday','voucher',NULL,50000,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL,2147483647,1,0),
(3,'Mengisi survey','diskon',10,NULL,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL,2147483647,1,0),
(15,'Karyawan Terbaik','diskon',20,0,1,'<p><strong>THis</strong> is a test</p>','',1643185268,1,0),
(18,'Testing','voucher',0,20000,7,'<p>This is a sample test</p>','',1643278510,1,0);

/*Table structure for table `m_review` */

DROP TABLE IF EXISTS `m_review`;

CREATE TABLE `m_review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `score` float NOT NULL,
  `review` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_at` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id_review`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_review` */

insert  into `m_review`(`id_review`,`score`,`review`,`type`,`image`,`id_user`,`created_at`,`created_by`,`modified_at`,`modified_by`,`is_deleted`) values 
(1,5,'Keren bangetsss','Penyajian Makanan','http://localhost/jacode/img/60/review/review_60_6203811375f05.png',47,2147483647,47,2147483647,47,0),
(2,4,'Lumayan','Fasilitas','[]',57,2147483647,57,2147483647,57,0),
(15,4,'Rasanya mantab banget','Rasa','[]',57,1644391917,57,1644391917,57,0),
(19,3.5,'Fasilitas kurang, kamar mandi tidak begitu bersih','Fasilitas','http://localhost/jacode/img/60/review/review_60_6203811375f05.png',60,1644396819,60,1644396819,60,0),
(20,3.5,'Fasilitas kurang, kamar mandi tidak begitu bersih','Fasilitas','[]',58,1644396889,58,1644396889,58,0);

/*Table structure for table `m_roles` */

DROP TABLE IF EXISTS `m_roles`;

CREATE TABLE `m_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `akses` text NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_roles` */

insert  into `m_roles`(`id`,`nama`,`akses`,`is_deleted`) values 
(1,'Super Admin','{\r\n    \"auth_user\": true,\r\n    \"auth_akses\": true,\r\n\r\n    \"setting_menu\": true,\r\n    \"setting_customer\": true,\r\n    \"setting_promo\": true,\r\n    \"setting_diskon\": true,\r\n    \"setting_voucher\": true,\r\n\r\n    \"laporan_menu\": true,\r\n    \"laporan_customer\": true\r\n}',0),
(2,'User','{\r\n    \"auth_user\": true,\r\n    \"auth_akses\": true,\r\n\r\n    \"setting_menu\": true,\r\n    \"setting_customer\": true,\r\n    \"setting_promo\": true,\r\n    \"setting_diskon\": true,\r\n    \"setting_voucher\": false,\r\n\r\n    \"laporan_menu\": true,\r\n    \"laporan_customer\": true\r\n}',0);

/*Table structure for table `m_user` */

DROP TABLE IF EXISTS `m_user`;

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '111111',
  `pin` varchar(255) DEFAULT '111111',
  `ktp` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_google` tinyint(1) NOT NULL DEFAULT 0,
  `is_customer` tinyint(1) NOT NULL DEFAULT 1,
  `m_roles_id` int(11) NOT NULL DEFAULT 2,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `is_kitchen` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_user`) USING BTREE,
  KEY `m_roles_id` (`m_roles_id`) USING BTREE,
  CONSTRAINT `m_user_ibfk_1` FOREIGN KEY (`m_roles_id`) REFERENCES `m_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_user` */

insert  into `m_user`(`id_user`,`nama`,`tgl_lahir`,`email`,`alamat`,`telepon`,`foto`,`password`,`pin`,`ktp`,`status`,`is_google`,`is_customer`,`m_roles_id`,`is_deleted`,`is_kitchen`) values 
(1,'admin','21/01/22','admin@gmail.com','','085785111746','https://trainee.landa.id/tim-a/img/1/profil/61ea6541c9404.jpeg','d033e22ae348aeb5660fc2140aec35850c4da997','111111','https://trainee.landa.id/tim-a/img/1/ktp/61ea64fa5765e.jpeg',1,0,0,1,0,0),
(47,'dev noersy','20/01/22','dev.noersy@gmail.com',NULL,'000','https://trainee.landa.id/tim-a/img/47/profil/61ea87f19b759.jpeg','21ef5e3a08d184799f00c11b5b3dd5e2d50c6192','444444','https://trainee.landa.id/tim-a/img/47/ktp/61ea7b31917a9.jpeg',1,0,1,2,0,0),
(57,'Zildjian',NULL,'zildjianputra.pratama@gmail.com',NULL,NULL,NULL,'75d1bb83ec14ddd20cc71a2ae7b2724165c864cd','111111',NULL,0,1,1,2,0,0),
(58,'Nur Syahfei',NULL,'nur.syahfei@gmail.com',NULL,NULL,NULL,'f6818168f801b531771e5f68b1d04dd2bbf5ee59','111111',NULL,0,1,1,2,0,0),
(59,'test-account','21/01/22','test@gmail.com','','085785111746','https://trainee.landa.id/tim-a/img/1/profil/61ea6541c9404.jpeg','d033e22ae348aeb5660fc2140aec35850c4da997','111111','https://trainee.landa.id/tim-a/img/1/ktp/61ea64fa5765e.jpeg',1,0,0,1,0,0),
(60,'M latif robbani',NULL,'latif.mobile.venturo@gmail.com',NULL,NULL,'https://javacode.ngodingin.com/img/60/profil/61ffbdd60fe18.jpeg','159d80269f12f74749f58b9fd076fae36cb6e164','111111','https://javacode.ngodingin.com/img/60/ktp/61ffbe38cd908.jpeg',1,1,1,2,0,0),
(65,'Mahendra Dwi Purwanto',NULL,'mahendradwipurwanto@gmail.com',NULL,NULL,NULL,'d033e22ae348aeb5660fc2140aec35850c4da997','111111',NULL,0,0,0,2,0,0),
(67,'mahendra',NULL,'mahendra@gmail.com',NULL,NULL,'','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','111111',NULL,0,0,0,2,0,0),
(68,'admin',NULL,'admin@gmail.com',NULL,NULL,'','d033e22ae348aeb5660fc2140aec35850c4da997','111111',NULL,0,0,0,1,0,0),
(69,'admin',NULL,'admin@gmail.com',NULL,NULL,'','d033e22ae348aeb5660fc2140aec35850c4da997','111111',NULL,0,0,0,1,0,0),
(70,'admin',NULL,'admin@gmail.com',NULL,NULL,'','d033e22ae348aeb5660fc2140aec35850c4da997','111111',NULL,0,0,0,1,0,0),
(71,'Kitchen',NULL,'kitchen@gmail.com',NULL,'085785111746',NULL,'d033e22ae348aeb5660fc2140aec35850c4da997','111111',NULL,0,0,0,2,0,1);

/*Table structure for table `m_voucher` */

DROP TABLE IF EXISTS `m_voucher`;

CREATE TABLE `m_voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `id_promo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `info_voucher` varchar(255) DEFAULT NULL,
  `periode_mulai` int(11) NOT NULL,
  `periode_selesai` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_voucher`) USING BTREE,
  KEY `id_promo` (`id_promo`) USING BTREE,
  KEY `id_user` (`id_user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `m_voucher` */

insert  into `m_voucher`(`id_voucher`,`id_promo`,`id_user`,`nominal`,`info_voucher`,`periode_mulai`,`periode_selesai`,`type`,`status`,`catatan`,`created_at`,`created_by`,`is_deleted`) values 
(1,1,1,11600,'https://i.ibb.co/0Fm0Lbx/Voucher-Java-CODE-app-02.jpg',1643188298,1643188298,1,1,NULL,'2022-02-05 19:58:55',1,0),
(2,2,47,50000,'https://i.ibb.co/fq31vVx/Voucher-Java-CODE-app-05.jpg',1643188298,1643188298,0,1,NULL,'2022-01-26 09:11:50',1,0),
(5,2,60,0,NULL,1643241600,1643241600,0,1,'This is a test','0000-00-00 00:00:00',1,0),
(6,2,57,0,NULL,1643241600,1643241600,0,1,'This is a sample test','0000-00-00 00:00:00',1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
