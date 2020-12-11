# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 163.172.93.48 (MySQL 5.5.5-10.4.6-MariaDB-1:10.4.6+maria~bionic-log)
# Database: scrum_online
# Generation Time: 2020-09-30 18:34:59 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_45A0D2FF613FECDF` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;

INSERT INTO `members` (`id`, `session_id`, `name`)
VALUES
	(1,2,'hasan');

/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table polls
# ------------------------------------------------------------

DROP TABLE IF EXISTS `polls`;

CREATE TABLE `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `result` double NOT NULL,
  `consensus` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1D3CC6EE613FECDF` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `polls` WRITE;
/*!40000 ALTER TABLE `polls` DISABLE KEYS */;

INSERT INTO `polls` (`id`, `session_id`, `topic`, `description`, `url`, `startTime`, `endTime`, `result`, `consensus`)
VALUES
	(3,4,'test','test','','2019-11-01 20:30:48','2019-11-01 20:30:57',3,1),
	(262,60,'Feature 92993*:Huawei Support','','','2020-09-28 13:37:15','2020-09-28 13:43:48',6,0);

/*!40000 ALTER TABLE `polls` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isPrivate` tinyint(1) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cardSet` int(11) NOT NULL,
  `lastAction` datetime NOT NULL,
  `currentPoll_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9A609D13DD3787E` (`currentPoll_id`),
  KEY `date_idx` (`lastAction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `name`, `isPrivate`, `token`, `cardSet`, `lastAction`, `currentPoll_id`)
VALUES
	(1,'test',0,'SeHkXgJ8IZr2zfiEYFl8t1',0,'2019-11-01 13:08:51',NULL),
	(61,'uuu',0,'qzijTo6cUwjNKyEAcw7r7.',0,'2020-09-28 10:30:43',257);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table votes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `votes`;

CREATE TABLE `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `value` double NOT NULL,
  `highlighted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_518B7ACF3C947C0F` (`poll_id`),
  KEY `IDX_518B7ACF7597D3FE` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `votes` WRITE;
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;

INSERT INTO `votes` (`id`, `poll_id`, `member_id`, `value`, `highlighted`)
VALUES
	(3,3,4,3,0),
	(1262,262,225,5,0);

/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
