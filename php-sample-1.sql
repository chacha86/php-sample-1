/*
SQLyog Community v12.4.1 (64 bit)
MySQL - 10.1.22-MariaDB : Database - php-sample-1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php-sample-1` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `php-sample-1`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '주키',
  `regDate` datetime NOT NULL COMMENT '등록날짜',
  `updateDate` datetime NOT NULL COMMENT '수정날짜',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '제목',
  `body` text COLLATE utf8_unicode_ci NOT NULL COMMENT '내용',
  `writer` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '작성자 이름',
  `userId` int(10) unsigned NOT NULL COMMENT '작성자 번호',
  `boardId` int(10) unsigned NOT NULL COMMENT '게시판 아이디',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `article` */

insert  into `article`(`id`,`regDate`,`updateDate`,`title`,`body`,`writer`,`userId`,`boardId`) values 
(1,'2017-05-17 02:33:12','2017-05-17 02:33:12','제목','내용','관리자',1,1),
(2,'2017-05-17 03:00:37','2017-05-17 03:00:37','sdf','wef','관리자',1,1),
(3,'2017-05-17 03:00:44','2017-05-17 03:00:44','sdf','wef','관리자',1,1),
(5,'2017-05-17 03:01:13','2017-05-17 03:01:13','22','33','관리자',1,1),
(6,'2017-05-17 03:01:15','2017-05-17 03:01:15','sdf','wef','관리자',1,1),
(7,'2017-05-17 03:01:25','2017-05-17 03:01:25','wefee12sada','fe','관리자',1,0),
(8,'2017-05-17 03:01:30','2017-05-17 03:01:30','wefee12sada','fe','관리자',1,0),
(11,'2017-05-17 03:02:22','2017-05-17 03:02:22','크크크','카카카','관리자',1,0),
(12,'2017-05-17 03:03:18','2017-05-17 03:03:18','크크크','카카카','관리자',1,0),
(13,'2017-05-17 03:03:41','2017-05-17 03:03:41','333','444','관리자',1,1),
(14,'2017-05-17 03:03:49','2017-05-17 03:03:49','545','4423','관리자',1,1);

/*Table structure for table `board` */

DROP TABLE IF EXISTS `board`;

CREATE TABLE `board` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '번호',
  `regDate` datetime NOT NULL COMMENT '등록날짜',
  `updateDate` datetime NOT NULL COMMENT '갱신날짜',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '게시판 이름',
  `code` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '게시판 코드',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `board` */

insert  into `board`(`id`,`regDate`,`updateDate`,`name`,`code`) values 
(1,'2017-05-17 01:57:53','2017-05-17 01:57:53','공지사항','notice');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '번호',
  `regDate` datetime NOT NULL COMMENT '등록날짜',
  `updateDatet` datetime NOT NULL COMMENT '갱신날짜',
  `loginId` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '로그인아이디',
  `passwd` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT '패스워드',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '이름',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`regDate`,`updateDatet`,`loginId`,`passwd`,`name`) values 
(1,'2017-05-17 01:50:04','2017-05-17 01:50:04','admin','1234','관리자');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
